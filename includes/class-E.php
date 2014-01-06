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

}