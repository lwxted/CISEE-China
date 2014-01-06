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
						<form class="form clearfix" id="register-form">
							<div class="form-title"><?php _t('注册新用户')?></div>
							
							<label><?php _t('用户名')?> </label><input name="username" type="text">
							<label><?php _t('密码')?> </label><input name="password" type="password">
							<label><?php _t('邮箱')?> </label><input name="email" type="email">
							<label><?php _t('确认输入邮箱')?> </label><input name="email_again" type="text">
							<label><?php _t('角色')?> </label>
							<input type="hidden" name="reg_time" value="<?php echo date ("Y-m-d H:i:s")?>">
							<input type="hidden" name="reg_ip" value="<?php echo get_server_ip(); ?>">
							<select name="role">
								<option value="1"><?php _t('客户')?></option>
								<option value="2"><?php _t('厂商')?></option>
								<option value="3"><?php _t('集成商')?></option>
								<option value="4"><?php _t('开发者')?></option>
								<option value="5"><?php _t('投融资者')?></option>
							</select>
							<p class="text-error form-error"></p>
							<button type="submit" class="btn submit pull-right"><?php _t('提交')?><div class="loading" style="display: none;"></div></button>

						</form>

					<!-- </div> -->
				</div>
			</div>
			
		</div>
		<?php include (COMMON_PATH . '/footer.php'); ?>
	</body>
</html>