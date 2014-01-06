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
				
				<form class="form clearfix" id="register-form">
					<div class="form-title"><?php _t('Register New User')?></div>
					
					<label><?php _t('Username')?> </label><input name="username" type="text">
					<label><?php _t('Password')?> </label><input name="password" type="password">
					<label><?php _t('Email')?> </label><input name="email" type="email">
					<label><?php _t('Re-enter Email')?> </label><input name="email_again" type="text">
					<label><?php _t('Role')?> </label>
					<input type="hidden" name="reg_time" value="<?php echo date ("Y-m-d H:i:s")?>">
					<input type="hidden" name="reg_ip" value="<?php echo get_server_ip(); ?>">
					<select name="role">
						<option value="1"><?php _t('Student')?></option>
						<!-- <option value="2"><?php _t('Administrator')?></option> -->
					</select>
					<p class="text-error form-error"></p>
					<button type="submit" class="btn submit pull-right"><?php _t('Submit')?><div class="loading" style="display: none;"></div></button>

				</form>

			</div>
			 <div class="push"></div>
		</div>
		<?php include (ACCOUNT_PATH . '/footer.php'); ?>
	</body>
</html>