<?php

/**
 * E
 * Error code Class
 * Class created for posting and formatting errors.
 * @since 0.1
 */
class E {

	/**
	 * Returns the error list which includes error code and description.
	 * @return array Error list
	 * @access private
	 * @since 0.1
	 */
	private static function error_list() {
		return
		array(
			0000 => __('This is an error.'),

			/**
			 * ERROR CODE: 0XXX
			 * COMMON ISSUES
			 */
			
			0001 => __('There seems to be a problem with your network. Please try again.'),

			/**
			 * ERROR CODE: 1XXX
			 * ACCOUNT MANAGEMENT / LOGIN / REGISTRATION RELATED.
			 */
			
			/**
			 * REGISTRATION
			 * 1000 - 1099
			 */
			1000 => __('The user was not successfully created. Please try again.'),
			1001 => __('Please fill in all fields.'),
			1002 => __('Please use a valid email address.'),
			1003 => __('The username you entered is too short.'),
			1004 => __('You did not enter the same email address the second time.'),
			1005 => __('The selected username already existed. Please choose another one.'),
			1006 => __('The password you entered is too short.'),
			1007 => __('The username you enetered contains invalid characters.'),
			/**
			 * LOGIN
			 * 1100 - 1199
			 */
			 1100 => __('Login has failed. Please try again.'),
			 1101 => __('Please fill in all fields.'),
			 1102 => __('You have entered a wrong username.'),
			 1103 => __('You have entered a wrong password.'),

			 /**
			  * ERROR CODE: 2XXX
			  * Search
			  */
			 
			 2000 => __('Oops, your search has returned no results.'),
			 2001 => __('Oops, the provider currently has no products logged in our database.'),

			 /**
			  * ERROR CODE: 3XXX
			  * MANAGE
			  */
			 3000 => __('Oops, the name of the service you entered is too long. Please use less words to describe the name of the service.'),
			 3001 => __('There is no provider that matches the one you entered in our database. Please check your input again. If you have not created the provider that you entered here, please create a provider entry first.'),
			 3002 => __('Please enter the name of the service.'),
			 3003 => __('Please select the provider of this service.'),
			 3004 => __('Oops, there seems to be a problem with our server. Please try again later.'),
			 3005 => __('Please select the type of this entry.'),
		);
	}

	/**
	 * Return a JSON-format error.
	 * @param  int    $error_code Designated error code
	 * @return string             JSON-format error
	 * @access public
	 * @since 0.1
	 */
	static function error ($error_code) {
		$error_list = self::error_list();
		if (array_key_exists($error_code, $error_list)) {
			$payload = __($error_list[$error_code]);
		}
		$error_array[IDT] = IDT_ERROR;
		$error_array['error_code'] = $error_code;
		if (!isset($payload)) {
			$error_array['payload'] = NULL;
		} else {
			$error_array['payload'] = $payload;
		}
		$json = json_encode($error_array);
		if ($json) {
			return $json;
		} else {
			return;
		}
	}

	/**
	 * Return a JSON-format success.
	 * @return string             JSON-format success
	 * @access public
	 * @since 0.1
	 */
	static function success () {
		$success_array[IDT] = IDT_SUCCESS;
		$json = json_encode($success_array);
		if ($json) {
			return $json;
		} else {
			return;
		} 
	}

	/**
	 * Return a JSON-format data array.
	 * @param  mixed  $value Data
	 * @return string        JSON-format data
	 * @access public
	 * @since 0.1
	 */
	static function data ($value) {
		$data_array[IDT] = IDT_DATA;
		$data_array['data'] = $value;
		$json = json_encode($data_array);
		if ($json) {
			return $json;
		} else {
			return;
		}
	}

}