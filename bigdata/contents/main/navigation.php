<?php include (COMMON_PATH . '/directory.php') ?>
<div class="masthead clearfix">

	<div class="switcher">登陆 | English</div>

	<ul class="nav nav-pills pull-right">
		<?php
			global $nav;
			global $file_name;
			// Defaulting language to chn for now.
			$lang = 'chn';
			foreach ($nav as $key => $value) {
				// We do not want to output the index page in the navigation.
				if ($key != 'index') {
					if (!isset($value['children'])) {
						if ($file_name == $key) {
		?>
							<li class="active">
								<a href="<?php __page($key . '.php');?>">
									<?php echo $value[$lang]; ?>
								</a>
							</li>
		<?php 
						} else {
		?>
							<li>
								<a href="<?php __page($key . '.php');?>" class="muted">
									<?php echo $value[$lang]; ?>
								</a>
							</li>
		<?php
						}
					} else {
						$parent_is_active = (array_key_exists($file_name, $value['children']));
		?>
						<li class="dropdown<?php if ($parent_is_active) echo ' active';?>">
							<a class="dropdown-toggle<?php if (!$parent_is_active) echo ' muted';?>" data-toggle="dropdown" href="#"><?php echo $value[$lang]; ?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<?php
									foreach ($value['children'] as $child_key => $child_value) {
										$is_active = ($child_key == $file_name);
								?>
										<li<?php echo $is_active ? ' class="active"' : ''; ?>>
											<a<?php echo $is_active ? '' : ' class="muted"';?> href="<?php __page($child_key . '.php'); ?>"><?php echo $child_value[$lang]; ?></a>
										</li>
								<?php
									}
								?>
							</ul>
						</li>
		<?php
					}
				}
			}
		?>
	</ul>

	<div class="logo">
		<h1><a href="./products.php"><em>Bigdata</em>Union</a></h1>
	</div>

</div>

