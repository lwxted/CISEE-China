<?php 
	global $ver;
	$ver = 2; 
	require_once('../initialize.php');
	global $user;
	// $user->confirm_logged_in();
	if ( !defined('SERVICES_DIR') ) {
		define('SERVICES_DIR', 'services');
		define('SERVICES_PATH', CONTENTS_PATH . '/' .  SERVICES_DIR);
	}
	require_once (SERVICES_PATH . '/directory.php');
	$param = $_GET;
	if (isset($param['lang'])) {
		$lang = $param['lang'];
	} else {
		$lang = 'eng';
	}
	foreach ($param as $key => $value) break;
	if (isset($key)) {
		$page = $key;
	} else {
		$page = 'consultants';
	}
	$page_title = $directory[$page][$lang];
	if ($lang == 'chn') {
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<?php
	} else if ($lang == 'eng') {
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<?php
	}
?>

<html>
	<head>
		<?php include (SERVICES_PATH . '/header.php'); ?>
	</head>
	
	<body>
		<div class="footerfix">
			<?php include (SERVICES_PATH . '/navigation.php') ?>
			<div class="content <?php if ($lang == 'chn') {echo 'content-chn';} ?>">
				<?php include (SERVICES_PATH . "/{$page}.php"); ?>
			</div>
			 <div class="push""></div>
		</div>
		<?php include (SERVICES_PATH . '/footer.php'); ?>
	</body>
</html>



