<?php 
	global $ver;
	$ver = 2; 

	require_once('../../initialize.php');

	if ( !defined('ACCOUNT_DIR') ) {
		define('ACCOUNT_DIR', 'account');
		define('ACCOUNT_PATH', CONTENTS_PATH . '/' .  ACCOUNT_DIR);
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<?php include (ACCOUNT_PATH . '/header.php'); ?>
		<link rel="stylesheet" href="<?php __css('style_account.css') ?>">
		<script src=<?php __js('account.js'); ?>></script>
	</head>
	
	<body>
		<div class="footerfix">
			<?php include (ACCOUNT_PATH . '/navigation.php') ?>
			<div class="content">
				
				<form class="form clearfix" id="login-form">
					<p class="text-success form-notice">
						<?php
							if (isset($_GET['registered']) && $_GET['registered'] == 1)  {
								echo __('You may now log in using the credentials you just entered.');
							}
							if (isset($_GET['loggedout']) && $_GET['loggedout'] == 1)  {
								echo __('You have logged out successfully.');
							}
						?>
					</p>
					<div class="form-title"><?php _t('Login')?></div>
					
					<label><?php _t('Username')?> </label><input name="username" type="text">
					<label><?php _t('Password')?> </label><input name="password" type="password">
					
					<label class="checkbox inline pull-right">
						<input type="checkbox" name="remember-me" value="1">Remember Me
					</label>
					
					<input type="hidden" name="last_login" value="<?php echo date ("Y-m-d H:i:s")?>">
					<input type="hidden" name="last_ip" value="<?php echo get_server_ip(); ?>">
					<p class="text-error form-error"></p>
					<button type="submit" class="btn submit pull-right"><?php _t('Submit')?><div class="loading" style="display: none;"></div></button>
				</form>

				<div id="hint-register">
					<p id="hint"><a href="./register.php">Don't have an account? Create one &rsaquo;</a></p>
				</div>
				
			</div>
			 <div class="push"></div>
		</div>
		<?php include (ACCOUNT_PATH . '/footer.php'); ?>
	</body>
</html>