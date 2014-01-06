$(function(){
	/**
	 * Process the register form.
	 */
	$('#register-form').submit(function(){

		var urlString = "../../ajax/user-register.php";
		var inputs = new Array ("username", "password", "email", "email_again", "role", "reg_ip", "reg_time");

		formProcess ("#register-form", urlString, inputs, function() {
			window.location = "./login.php?registered=1";
		});

		return false;
	});

	$('#login-form').submit(function(){

		var urlString = "../../ajax/user-login.php";
		var inputs = new Array ("username", "password", "remember-me");

		formProcess ("#login-form", urlString, inputs, function() {
			window.location = "../services.php";
		});

		return false;
	});
});