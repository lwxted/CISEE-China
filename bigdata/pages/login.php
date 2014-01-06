<?php 
	require_once ('../initialize.php');
	require_once (COMMON_PATH . '/filters.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include (COMMON_PATH . '/header.php'); ?>
		<?php use_css('style_account.css'); ?>
		<?php use_js('account.js');?>
	</head>
	
	<body>
		<div class="footerfix">
			<?php include (COMMON_PATH . '/navigation.php') ?>
			<div class="content">
				<div class="width-limit">
					<!-- <div class="main-content"> -->
						<form class="form clearfix" id="login-form">
							<p class="text-success form-notice">
								<?php
									if (isset($_GET['registered']) && $_GET['registered'] == 1)  {
										echo __('您现在可用刚注册的账号登陆了。');
									}
									if (isset($_GET['loggedout']) && $_GET['loggedout'] == 1)  {
										echo __('您已成功登出。');
									}
								?>
							</p>
							<div class="form-title"><?php _t('登陆')?></div>
							
							<label><?php _t('用户名')?> </label><input name="username" type="text">
							<label><?php _t('密码')?> </label><input name="password" type="password">
							
							<label class="checkbox inline pull-right">
								<input type="checkbox" name="remember-me" value="1">记住我的登陆信息
							</label>
							
							<input type="hidden" name="last_login" value="<?php echo date ("Y-m-d H:i:s")?>">
							<input type="hidden" name="last_ip" value="<?php echo get_server_ip(); ?>">
							<p class="text-error form-error"></p>
							<button type="submit" class="btn submit pull-right"><?php _t('提交')?><div class="loading" style="display: none;"></div></button>
						</form>
					
						<div id="hint-register">
							<p id="hint"><a href="./register.php">还没有账号？现在去创建一个 &rsaquo;</a></p>
						</div>
					<!-- </div> -->
				</div>
			</div>
			
		</div>
		<?php include (COMMON_PATH . '/footer.php'); ?>
	</body>
</html>