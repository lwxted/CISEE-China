<?php

/**
 * Define the name of the cookie stored locally at the user's machine.
 * @see login.php
 * @since 0.1
 */
define('PROJECT_COOKIE_NAME', 'arcplan_' . PROJECT_NAME . '_cook');

/**
 * Define the delimiter used to separate the username and hash in user's local copy.
 * @see login.php
 * @since 0.1
 */
define('PROJECT_COOKIE_DELIMITER', '_0_');


/**
 * User Class
 * 
 * @since 0.1
 */

/**
 * User Abstract Object
 */
class User {

	/**
	 * An array that contains the associative information
	 * of role id and role code.
	 * @return array
	 */
	function get_roles () {
		return array(
			1 => 'stu',
			2 => 'adm',
			);
	}

	/**
	 * Description of roles.
	 * @param  int    $key Role ID
	 * @return string      Description of role.
	 */
	function get_role_name ($key) {
		$role = array(
			'1' => __('Student'),
			'2' => __('Administrator')
			);
		return $role[$key];
	}

	/**
	 * Insert a new user entry into database.
	 * @param  array  $array Array that contains properties of a user. Usually obtainable from a $_GET ajax of a web form
	 * @return bool          Whether the operation was successfully completed
	 * @access public
	 * @since 0.1
	 */
	function new_user ($array) {
		global $dbo;
		if ($dbo->insert(USER_TABLE_NAME, $array)) {
			return TRUE;
		}
		return FALSE;
	}

	/**
	 * Private method that checks whether the stored hash matches the hash form of the raw password.
	 * @param  string $password    Raw password to be checked
	 * @param  string $stored_hash Another hash
	 * @return bool                Whether the stored hash matches the hash form of the password
	 */
	private function password_matches ($password, $stored_hash) {
		global $hasher;
		if ( empty($hasher) ) {
			require_once (INCLUDES_PATH . '/class-phpass.php');
			// By default, use the portable hash from phpass
			$hasher = new PasswordHash(8, true);
		}
		// echo $password . '<br />';
		// echo $stored_hash;

		return $hasher->CheckPassword ($password, $stored_hash);
	}

	/**
	 * Determines whether a user entry already exists in the database.
	 * @param  string $string Username to search for
	 * @return bool           Whether the designated user already exists.
	 * @access public
	 * @since 0.1
	 */
	function user_exists ($string) {
		global $dbo;
		$result = $dbo->select(
							   TRUE, 
							   USER_TABLE_NAME, 
							   array('username'), 
							   array(
							   	array(
							   		'name' => 'username',
							   		'value' => $string, 
							   		'ctype' => '='
							   		)
							   	), 
							   null, 
							   1
							   );
		// var_dump($result);
		if ($result !== FALSE) {

			if (mysqli_num_rows($result) >= 1) {
				mysqli_free_result($result);
				unset($result);
				return TRUE;
			}
		}
		mysqli_free_result($result);
		unset($result);
		return FALSE;
	}

	/**
	 * Encrypt a password using PHPass @see class-phpass.php.
	 * @param  string $password The raw password to be encrypted
	 * @return string           The hash form of the password
	 * @access public
	 * @since 0.1
	 */
	function hash_password ($password) {
		global $hasher;
		if ( empty($hasher) ) {
			require_once (INCLUDES_PATH . '/class-phpass.php');
			// By default, use the portable hash from phpass
			$hasher = new PasswordHash(8, true);
		}
		return $hasher->HashPassword($password);
	}

	/**
	 * Validates whether a username / password set matches as a valid credential.
	 * @param  string $username Username to be checked
	 * @param  string $password Password to be checked
	 * @return bool             Whether the credential is valid
	 * @since 0.1
	 * @access public
	 */
	function credential_matches ($username, $password) {
		global $dbo;
		$result = $dbo->select(
								TRUE, 
								USER_TABLE_NAME, 
								null, 
								array(
							   		array(
							   		'name' => 'username',
							   		'value' => $username, 
							   		'ctype' => '='
							   		)
							   	), 
							   	null, 
							   	1
							);
		// var_dump($result);
		if ($result !== FALSE) {

			if (mysqli_num_rows($result) >= 1) {
				$username_array = mysqli_fetch_array($result);
				return $this->password_matches ($password, $username_array['password']);
			}
		}
		mysqli_free_result($result);
		unset($result);
		return FALSE; 
	}

	/**
	 * Generates a random number
	 *
	 * Code from @package Wordpress.
	 * 
	 * @since 0.1
	 *
	 * @param int $min Lower limit for the generated number
	 * @param int $max Upper limit for the generated number
	 * @return int A random number between min and max
	 */
	private function rand () {
		return mt_rand(100000000,  999999999);
	}

	/**
	 * Format username and token into a valid local cookie.
	 * @param  string $username Logged in username
	 * @param  string $token    Generated token
	 * @return string           Formatted cookie value
	 * @access private
	 * @since 0.1
	 */
	private function cookie_value ($username, $token) {
		return $username . PROJECT_COOKIE_DELIMITER . $token;
	}

	/**
	 * Expire and unset the designated cookie
	 * @param  string $cookie_name Target cookie to be unset and expired.
	 * @return bool                Whether or not the operation was completed successfully
	 * @access private
	 * @since 0.1
	 */
	private function expire_cookie ($cookie_name) {
		$success = FALSE;
		if (setcookie($cookie_name, "", time() - 3600, "/")) {
			$success = TRUE;
		}
		unset($_COOKIE[$cookie_name]);
		return $success;
	}

	/**
	 * Store a local login cookie based on whether or not the 'Remember Me' was selected.
	 * @param string $username Username
	 * @param string $token    Generated token
	 * @param string $remember Whether or not 'Remember Me' was selected
	 * @return bool            Whether the cookie was successfully set on local machine
	 * @access private
	 * @since 0.1
	 */
	private function set_cookie ($username, $token, $remember) {
		$cookie_name = PROJECT_COOKIE_NAME;
		$cookie_value = $this->cookie_value($username, $token);
		$expire = 0;
		if ($remember) {
			$expire += time() + 60 * 60 * 24 * 30 * 12;
		}
		setcookie($cookie_name, $cookie_value, $expire, "/");
		return TRUE;
	}

	/**
	 * Write corresponding login information server side.
	 * @param  string $username Username
	 * @param  string $token    Generated token
	 * @return bool             Whether the cookie was successfully set on local machine
	 * @access private
	 * @since 0.1
	 */
	private function server_write_auth ($username, $token) {
		global $dbo;
		// $result = $dbo->select(SESSION_TABLE_NAME, array('username'), array(
		// 	'username' => $username
		// 	), 1);
		// $entry_existed = FALSE;
		// if ($result !== FALSE) {

		// 	if (mysqli_num_rows($result) >= 1) {
		// 		$entry_existed = TRUE;
		// 	}
		// }
		// mysqli_free_result($result);
		// unset($result);
		// if (! $entry_existed) {
		if (! $dbo->insert(SESSION_TABLE_NAME, array(
			'username' => $username,
			'token' => $token
			))) {
			return FALSE;
		}
		// } else {
		// 	if (! $dbo->update(SESSION_TABLE_NAME, array(
		// 		'token' => $token
		// 		), array(
		// 		'username' => $username
		// 		))) {
		// 		return FALSE;
		// 	}
		// }
		return TRUE;
	}

	/**
	 * Redirect to login page.
	 * @access private
	 * @since 0.1
	 */
	private function auth_redirect () {
		global $file_name;
		header('Location: ' . LOGIN_PAGE_REDR_PATH . '?redirect_page=' . $file_name);
		exit;
	}

	/**
	 * Write the login authentification both locally and remotely.
	 * @param  string $username Username
	 * @param  string $remember Whether 'Remember Me' was turned on
	 * @return bool             Whether both operations were successfully performed.
	 * @access public
	 * @since 0.1
	 */
	function write_auth ($username, $remember) {
		$token = $this->rand();
		$server_write_success = $this->server_write_auth($username, $token);
		$cookie_write_success = $this->set_cookie($username, $token, $remember);
		return ($server_write_success && $cookie_write_success);
	}

	/**
	 * Whether the user is logged in. Redirect to login screen if not.
	 * @access public
	 * @since 0.1
	 */
	function confirm_logged_in ($access_level = -1) {
		$confirmed = FALSE;

		if (isset($_COOKIE[PROJECT_COOKIE_NAME])) {
			$cookie_name = PROJECT_COOKIE_NAME;
			$cookie_value = $_COOKIE[PROJECT_COOKIE_NAME];
			$cookie_array = explode(PROJECT_COOKIE_DELIMITER, $cookie_value);
			$username = $cookie_array[0];
			$token = $cookie_array[1];  

			global $dbo;
			$result = $dbo->select(
				TRUE,
				SESSION_TABLE_NAME, 
				array('username'), 
				array(
					array(
						'name' => 'username',
						'value' => $username,
						'atype' => 'AND'
						),
					array(
						'name' => 'token',
						'value' => $token
						)),
				null, 
				1
				);
			
			if ($result !== FALSE) {
				if (mysqli_num_rows($result) >= 1) {
					$confirmed = TRUE;
				}
			}
			mysqli_free_result($result);
			unset($result);
		}
		
		if (!$confirmed) {
			$this->auth_redirect();
		} else {
			global $dbo;
			$result = $dbo->select(
				TRUE,
				USER_TABLE_NAME,
				array('role'),
				array(
					0 => array(
						'name' => 'username',
						'value' => $username,
						'ctype' => '=',
						'regex' => '@'
						)
					),
				null,
				1
				);
			$user_role = -2;
			if ($result !== FALSE) {
				if (mysqli_num_rows($result) >= 1) {
					$user_array = $dbo->next_result($result);
					$user_role = $user_array['role'];
				}
			}
			mysqli_free_result($result);
			unset($result);
			if ($user_role < $access_level) {
				$this->auth_redirect();
			}
		}
	}

	/**
	 * Logout and erase credentials both locally and remotely.
	 * @return bool Whether both operations were performed successfully.
	 * @access public
	 * @since 0.1
	 */
	function logout () {
		$cookie_unset_success = FALSE;
		$server_unset_success = FALSE;
		$username = '';
		$token = '';
		if (isset($_COOKIE[PROJECT_COOKIE_NAME])) {
			$cookie_value = $_COOKIE[PROJECT_COOKIE_NAME];
			$cookie_array = explode(PROJECT_COOKIE_DELIMITER, $cookie_value);
			$username = $cookie_array[0];
			$token = $cookie_array[1];
			global $dbo;
			if ($dbo->delete(SESSION_TABLE_NAME, 
				array(
					array(
						'name' => 'username',
						'value' => $username,
						'atype' => 'AND'
						),
					array(
						'name' => 'token',
						'value' => $token,
						))
				)) {
				$server_unset_success = TRUE;
			}
			if (expire_cookie(PROJECT_COOKIE_NAME)) {
				$cookie_unset_success = TRUE;
			}
		} else {
			$cookie_unset_success = TRUE;
			$server_unset_success = TRUE;
		}
		return ($cookie_unset_success && $server_unset_success);
	}
}


/**
 * Products / Providers Database Access Object
 * @since 0.1
 */
class PPAccessor {

	/**
	 * Returns the menu hierarchy.
	 * @return array Array that represents the menu hierarchy.
	 * @access public
	 * @since 0.1
	 */
	function get_filters_hierarchy() {
		return array (
			'platform' => array(
					'platform_hadoop' => 'Hadoop 平台',
					'platform_analysis' => 'Hadoop 分析平台',
					'platform_operating' => 'Hadoop 操作平台',
					'platform_data_gathering' => '数据采集',
					'platform_nosql' => 'NoSQL',
					'platform_newsql' => 'NewSQL',
					// 'platform_cloud' => '云平台',
					'platform_clustering' => '集群',
					'platform_management_monitor' => '管理及监控',
					'platform_security_management' => '安全管理',
					'platform_storage' => '存储',
					'platform_data_integration' => '数据集成',
					'platform_mpp' => 'MPP',
					// 'platform_big_data_analysis' => '大数据分析',
					'platform_visualization' => '可视化',
					'platform_search' => '数据搜索',
					// 'platform_machine_learning' => '机器学习',
					// 'platform_data_mining' => '数据挖掘',
					'platform_bi' => 'BI',
					'platform_statistical_analysis' => '统计分析',
					'platform_real_time_data' => '实时数据',
					// 'platform_market_analysis' => '市场营销分析',
					// 'platform_mobile_analysis' => '移动分析',
					// 'platform_daas' => 'DAAS',
					'platform_location_analysis' => '位置分析',
					// 'platform_industry_applications' => '行业应用',
					// 'platform_click_behavior_analysis' => '点击行为分析',
					// 'platform_website_monitor_analysis' => '网站监控分析',
					// 'platform_emotion_analysis' => '情感分析',
					// 'platform_social_media_analysis' => '社会媒体分析',
					// 'platform_rtb_ad_analysis' => 'RTB 及广告分析',
					'platform_it_log_analysis' => 'IT 日志分析',
					// 'platform_others' => '其他'
				),
			'industry' => array(
				'industry_internet_ad_rtb' => array(
					'name' => '互联网(广告RTB)',
					'application' => array(
							'application_lock' => '锁定',
							// 'application_relock' => '再锁定',
							'application_dsp' => 'DSP',
							// 'application_ssp' => 'SSP',
							'application_data_integration' => '数据集成',
							'application_cookie_analysis' => 'Cookie 分析',
							// 'application_dmp_data_integration' => 'DMP 数据集成',
							'application_visualization_analysis' => '可视化分析',
							// 'application_publishing_tool' => '发布工具',
							// 'application_data_share' => '数据分享',
							'application_data_provision' => '数据提供',
							'application_ad_optimization' => '广告优化',
							// 'application_ad_services' => '广告服务',
							'application_ad_platform' => '广告平台',
							'application_mobile_ad' => '移动广告',
							'application_verify' => '认证',
							'application_outflow_analysis' => '流量分析',
							'application_others' => '其它'
						)
					),
				'industry_retail' => array(
					'name' => '零售',
					'application' => array()
				),
				'industry_telecom' => array(
					'name' => '电信',
					'application' => array()
				),
				'industry_finance' => array(
					'name' => '金融',
					'application' => array()
				),
				'industry_government' => array(
					'name' => '政府',
					'application' => array()
				),
				'industry_enterprise' => array(
					'name' => '企业',
					'application' => array()
				),
				'industry_medical' => array(
					'name' => '医疗',
					'application' => array()
				),
				'industry_energy' => array(
					'name' => '能源',
					'application' => array()
				),
				'industry_public_services' => array(
					'name' => '公共服务',
					'application' => array()
				),
				'industry_others' => array(
					'name' => '其它',
					'application' => array()
				)
				)
			);
	}

	/**
	 * Return a list of platforms.
	 * @return array A list of platforms
	 * @access public
	 * @since 0.1
	 */
	function get_platform_list () {
		$major = $this->get_filters_hierarchy();
		return $major['platform'];
	}

	/**
	 * Return a list of industries.
	 * @return array A list of industries
	 * @access public
	 * @since 0.1
	 */
	function get_industry_list () {
		$major = $this->get_filters_hierarchy();
		$industry = $major['industry'];

		$r_array = array();
		// var_dump($industry);
		foreach ($industry as $key => $value) {
			$r_array[$key] = $value['name'];
		}
		// var_dump($r_array);
		return $r_array;
	}

	/**
	 * Return a list of applications of a certain industry.
	 * @param  string $industry_key Key of a industry
	 * @return array                A list of industry applications
	 * @access public
	 * @since 0.1
	 */
	function get_applications_list_of_industry ($industry_key) {
		$major = $this->get_filters_hierarchy();
		$industry = $major['industry'][$industry_key];
		return $industry['application'];
	}

	/**
	 * Fetch all products that satsify a set of parameters.
	 * @param  array  $params_array Param array that specifies the desired products.
	 * @param  int    $limit        Upper limit of number of results
	 * @param  int    $offset       The offset
	 * @return mysqli_result|FALSE  It's up to the AJAX PHP to parse this result.
	 * 
	 * @since 0.1
	 * @access public
	 */
	function get_products_by_params ($params_array, $limit = 10, $offset = 0) {
		global $dbo;
		$product_class_col_name = 'product_class';
		$query_array = array();
		// Creating $query_array for parsing to WHERE statement.
		$p_pointer = 0;
		$p_count = count($params_array);
		foreach ($params_array as $key => $value) {
			$sub_array = array();
			if (is_array($value)) {
				for ($s_pointer = 0; $s_pointer < count($value); $s_pointer++) { 
					$keyword = $value[$s_pointer];
					if ($s_pointer == count($value) - 1) {
						$sub_array[] = array(
							'name' => $product_class_col_name,
							'value' => $keyword,
							'regex' => '%@%',
							'ctype' => 'LIKE'
						);
					} else {
						$sub_array[] = array(
							'name' => $product_class_col_name,
							'value' => $keyword,
							'regex' => '%@%',
							'ctype' => 'LIKE',
							'atype' => 'OR'
						);
					}
				}
				if ($p_pointer == $p_count - 1) {
					$query_array[$p_pointer] = array(
							'value' => $sub_array
						);
				} else {
					$query_array[$p_pointer] = array(
							'value' => $sub_array,
							'atype' => 'AND'
						);
				}
			} else if (is_string($value)) {
				$sub_array['name'] = $product_class_col_name;
				$sub_array['value'] = $value;
				$sub_array['regex'] = '%@%';
				$sub_array['ctype'] = 'LIKE';
				$query_array[$p_pointer] = $sub_array;
			}
			$p_pointer ++;
		}
		$result = $dbo->select(
			FALSE,
			PRODUCT_TABLE_NAME,
			array(
				'id', 'name', 'product_desc_chn', 'product_desc_eng'
				),
			$query_array,
			null,
			$limit,
			$offset
			);
		if (isset($result)) {
		 	return $result;
		} else {
			return FALSE;
		}
	}

	/**
	 * Fetch all providers that satsify a set of parameters.
	 * @param  array  $params_array Param array that specifies the desired providers.
	 * @param  int    $limit        Upper limit of number of results
	 * @param  int    $offset       The offset
	 * @return mysqli_result|FALSE  It's up to the AJAX PHP to parse this result.
	 * 
	 * @since 0.1
	 * @access public
	 */
	function get_provider_ids_by_params ($params_array, $limit = 10, $offset = 0) {
		global $dbo;
		$product_class_col_name = 'product_class';
		$query_array = array();
		// Creating $query_array for parsing to WHERE statement.
		$p_pointer = 0;
		$p_count = count($params_array);
		foreach ($params_array as $key => $value) {
			$sub_array = array();
			if (is_array($value)) {
				for ($s_pointer = 0; $s_pointer < count($value); $s_pointer++) { 
					$keyword = $value[$s_pointer];
					if ($s_pointer == count($value) - 1) {
						$sub_array[] = array(
							'name' => $product_class_col_name,
							'value' => $keyword,
							'regex' => '%@%',
							'ctype' => 'LIKE'
						);
					} else {
						$sub_array[] = array(
							'name' => $product_class_col_name,
							'value' => $keyword,
							'regex' => '%@%',
							'ctype' => 'LIKE',
							'atype' => 'OR'
						);
					}
				}
				if ($p_pointer == $p_count - 1) {
					$query_array[$p_pointer] = array(
							'value' => $sub_array
						);
				} else {
					$query_array[$p_pointer] = array(
							'value' => $sub_array,
							'atype' => 'AND'
						);
				}
			} else if (is_string($value)) {
				$sub_array['name'] = $product_class_col_name;
				$sub_array['value'] = $value;
				$sub_array['regex'] = '%@%';
				$sub_array['ctype'] = 'LIKE';
				$query_array[$p_pointer] = $sub_array;
			}
			$p_pointer ++;
		}
		$result = $dbo->select(
			TRUE,
			PRODUCT_TABLE_NAME,
			array(
				'provider_id'
				),
			$query_array,
			null,
			$limit,
			$offset
			);
		if (isset($result)) {
		 	return $result;
		} else {
			return FALSE;
		}
	}

	/**
	 * Get provider information by its ID.
	 * @param  array  $array  IDs
	 * @return mysqli_result|FALSE
	 * @access public
	 * @since 0.1
	 */
	function get_providers_by_ids ($array) {
		global $dbo;
		$count = count($array);
		$query_array = array();
		for ($pointer = 0; $pointer < $count; $pointer++) { 
			$id = $array[$pointer];
			if ($pointer == $count - 1) {
				$query_array[] = array(
					'name' => 'id',
					'value' => $id,
					'ctype' => '='
					);
			} else {
				$query_array[] = array(
					'name' => 'id',
					'value' => $id,
					'ctype' => '=',
					'atype' => 'OR'
					);
			}
		}
		$result = $dbo->select(
				TRUE,
				PROVIDER_TABLE_NAME,
				array(
				'id',
				'name',
				'profile_pic_addr',
				'provider_intro_eng',
				'website',
				'telephone',
				'with_service'
				),
				$query_array
			);
		if ($result) {
			return $result;
		} else {
			return FALSE;
		}
	}

	/**
	 * Get provider (with service) information by its ID.
	 * @param  array  $array  IDs
	 * @return mysqli_result|FALSE
	 * @access public
	 * @since 0.1
	 */
	function get_providers_with_services_by_ids ($array) {
		global $dbo;
		$count = count($array);
		$query_array = array();
		for ($pointer = 0; $pointer < $count; $pointer++) { 
			$id = $array[$pointer];
			if ($pointer == $count - 1) {
				$query_array[] = array(
					'name' => 'id',
					'value' => $id,
					'ctype' => '='
					);
			} else {
				$query_array[] = array(
					'name' => 'id',
					'value' => $id,
					'ctype' => '=',
					'atype' => 'OR'
					);
			}
		}
		$result = $dbo->select(
				TRUE,
				PROVIDER_TABLE_NAME,
				array(
				'id',
				'name',
				'profile_pic_addr',
				'with_service'
				),
				$query_array
			);
		if ($result) {
			return $result;
		} else {
			return FALSE;
		}
	}

	/**
	 * Get all products associated with a provider.
	 * @param  string $id ID of a provider
	 * @return mysqli_result|FALSE
	 * @access public
	 * @since 0.1
	 */
	function get_products_of_provider ($id) {
		global $dbo;
		$result = $dbo->select(
			FALSE,
			PRODUCT_TABLE_NAME,
			array(
				'id', 'product_type',
				'product_class', 'name', 'product_desc_eng',
				'log_date', 'product_desc_chn'
				),
			array(
				array(
					'name' => 'provider_id',
					'value' => $id,
					'ctype' => '='
					)
				),
			array(
				array(
					'column_name' => 'product_type',
					'asc_desc' => 'ASC'
					)
				)
			);
		
		if ($result) {
			return $result;
		} else {
			return FALSE;
		}
	}

	/**
	 * Return the next result extracted from the specified mysqli_result object.
	 * @param  mysqli_result $result A mysqli_result object
	 * @return array   Next result represented by an array
	 * @since 0.1
	 * @access public
	 */
	function next_result($result) {
		global $dbo;
		return $dbo->next_result($result);
	}

}

/**
 * Service Database Access Object
 * @since 0.1
 */
class Service {

	function list_of_providers_with_service () {
		global $dbo;
		$result = $dbo->select(
			FALSE,
			PROVIDER_TABLE_NAME,
			array(
				'name'
				),
			array(
				0 => array(
					'name' => 'with_service',
					'value' => 1,
					'regex' => '@',
					'ctype' => '='
					)
				)
			);
		return $result;
	}

	/**
	 * Retrieve a provider ID by its name.
	 * @param  string $provider_name The name of the provider
	 * @return int|FALSE
	 * @access public
	 * @since 0.1
	 */
	function provider_id_by_name ($provider_name) {
		global $dbo;
		$result = $dbo->select(
			FALSE,
			PROVIDER_TABLE_NAME,
			array(
				'id'
				),
			array(
				0 => array(
					'name' => 'name',
					'value' => $provider_name,
					'ctype' => '=',
					'regex' => '@'
					)
				),
			null,
			1
			);
		if ($result) {
			$entry = $dbo->next_result($result);
			if (!empty($entry)) {
				if (!empty($entry['id'])) {
					return $entry['id'];
				}
			}
		}
		return FALSE;
	}

	/**
	 * Get all services related to a provider.
	 * @param  int    $provider_id  The ID of a certain provider
	 * @param  string $service_type The desired service type
	 * @return mysqli_result|FALSE
	 * @access public
	 * @since 0.1
	 */
	function get_services_by_provider ($provider_id, $service_type) {
		global $dbo;
		$result = $dbo->select(
			FALSE,
			SERVICE_TABLE_NAME,
			array(
				'id',
				'service_type',
				'name',
				'provider_id',
				'description'
				),
			array(
				0 => array(
					'name' => 'provider_id',
					'value' => $provider_id,
					'ctype' => '=',
					'regex' => '@',
					'atype' => 'AND'
					),
				1 => array(
					'name' => 'service_type',
					'value' => $service_type,
					'ctype' => '=',
					'regex' => '@'
					)
				)
			);
		return $result;
	}

	/**
	 * Delete a service entry by the ID of a service.
	 * @param  int    $service_id The ID of a service entry
	 * @return bool               Whether the delete action was successfully performed.
	 * @since 0.1
	 * @access public
	 */
	function delete_service_entry ($service_id) {
		global $dbo;
		$result = $dbo->delete(
			SERVICE_TABLE_NAME,
			array(
				0 => array(
					'name' => 'id',
					'value' => $service_id,
					'ctype' => '=',
					'regex' => '@'
					)
				)
			);
		return $result;
	}


	/**
	 * Insert a service entry.
	 * @param  array $data_array The array that encloses the data
	 * @return bool 			 Whether the action was performed successfully.
	 * @since 0.1
	 * @access public
	 */
	function add_service_entry ($data_array) {
		global $dbo;
		$result = $dbo->insert(
			SERVICE_TABLE_NAME,
			$data_array
			);
		return $result;
	}

	/**
	 * Update a service entry with a series of data.
	 * @param  int    $service_id  The ID of a service entry
	 * @param  array  $data_array  The array that encloses the data to be updated into the DB
	 * @return int|FALSE
	 * @since 0.1
	 * @access public
	 */
	function update_service_entry ($service_id, $data_array) {
		global $dbo;
		$result = $dbo->update(
			SERVICE_TABLE_NAME,
			$data_array,
			array(
				0 => array(
					'name' => 'id',
					'value' => $service_id,
					'ctype' => '=',
					'regex' => '@'
					)
				)
			);
		return $result;
	}


	/**
	 * Add a new provider entry to the database.
	 * @param  array $data_array The array that encloses the data.
	 * @return bool 			 Whether the provider was successfully added.
	 * @since 0.1
	 * @access public
	 */
	function add_new_provider ($data_array) {
		global $dbo;
		$result = $dbo->insert(
			PROVIDER_TABLE_NAME,
			$data_array
			);
		return $result;
	}

	/**
	 * Return the next result extracted from the specified mysqli_result object.
	 * @param  mysqli_result $result A mysqli_result object
	 * @return array   Next result represented by an array
	 * @since 0.1
	 * @access public
	 */
	function next_result($result) {
		global $dbo;
		return $dbo->next_result($result);
	}

}
