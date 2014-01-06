<!DOCTYPE html>
<?php 
	global $ver;
	$ver = 2; 

	require_once('../initialize.php');

	if ( !defined('UNIVERSITY_DIR') ) {
		define('UNIVERSITY_DIR', 'university');
		define('UNIVERSITY_PATH', CONTENTS_PATH . '/' .  UNIVERSITY_DIR);
	}
?>


<html>
	<head>
		<?php include (UNIVERSITY_PATH . '/header.php'); ?>
	</head>
	
	<body>
		<div class="footerfix">
			<?php include (UNIVERSITY_PATH . '/navigation.php') ?>
			<div class="content">
				
				<div class="university-info">
					
					<div class="university-name">
						<h1> Stanford University</h1>
					</div>


				</div>
				

			</div>
			 <div class="push""></div>
		</div>
		<?php include (UNIVERSITY_PATH . '/footer.php'); ?>
	</body>
</html>

















