
<div class="navigation">
	<div class="width-limit clearfix">
		
		<div class="logo">
			<h1><a href="<?php __page('services.php'); ?>"></a></h1>
		</div>

		<ul class="nav nav-pills navigation-bar landscape <?php if ($lang == 'chn') {echo 'chn';} ?>">
			<?php 
				foreach ($directory as $key => $value) {
					if ($page == $key) {
						echo "<li class=\"active\"><a href=\"" . _page('services.php') ."?{$key}&lang={$lang}&ver={$ver}\">".htmlspecialchars($directory[$key][$lang])."</a></li>";
					} else {
						echo "<li><a href=\"" . _page('services.php') ."?{$key}&lang={$lang}&ver={$ver}\" class=\"muted\">".htmlspecialchars($directory[$key][$lang])."</a></li>";
					}
				}
			?>
			<li class="active lang-switcher"><a href="<?php if ($lang == 'eng') {echo _page('services.php') ."?{$page}&lang=chn&ver={$ver}";} else {echo _page('services.php') ."?{$page}&lang=eng&ver={$ver}";} ?>"><?php if ($lang == 'eng') {echo "中文";} else {echo "English";} ?></a></li>
		</ul>

		<div class="full-width">
			<ul class="nav nav-pills navigation-bar potrait">
				<li class="dropdown">
					<a class="dropdown-toggle muted" data-toggle="dropdown" href="#"><?php if ($lang == 'chn') {echo '菜单';} else {echo 'Menu';} ?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<?php 
							foreach ($directory as $key => $value) {
								if ($page == $key) {
									echo "<li class=\"active\"><a href=\"" . _page('services.php') ."?{$key}&lang={$lang}&ver={$ver}\">".htmlspecialchars($directory[$key][$lang])."</a></li>";
								} else {
									echo "<li><a href=\"" . _page('services.php') ."?{$key}&lang={$lang}&ver={$ver}\">".htmlspecialchars($directory[$key][$lang])."</a></li>";
								}
							}
						?>
					</ul>
				</li>
				<li class="active lang-switcher"><a href="<?php if ($lang == 'eng') {echo _page('services.php') ."?{$page}&lang=chn&ver={$ver}";} else {echo _page('services.php') ."?{$page}&lang=eng&ver={$ver}";} ?>"><?php if ($lang == 'eng') {echo "中文";} else {echo "English";} ?></a></li>
			</ul>
		</div>
		<!-- div.full-width -->
	</div>
</div>