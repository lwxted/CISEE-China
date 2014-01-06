<?php 
	require_once ('../initialize.php');
	require_once (COMMON_PATH . '/filters.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include (COMMON_PATH . '/header.php'); ?>
		<?php use_css('style_search.css'); ?>
		<?php use_js('search.js'); ?>
	</head>
	
	<body>
		<div class="footerfix">
			<?php include (COMMON_PATH . '/navigation.php') ?>
			<div class="content">

				<div class="width-limit">
					<div class="filters-nav clearfix">
						<div class="filters-section filters-first-section filters-platform">
							<div class="filters-section-title">
								<?php _t('功能')?>
							</div>
							<div class="filters-selectors">
								<?php
									$p = 1;
									foreach (get_platform_list() as $code => $name) {
										echo "<span class=\"filter-cell filter-platform\" data=\"{$code}\">" . __($name) . "</span>";
										if ($p == 8 || $p == 19 || $p == 25 || $p == 28) {
											echo '<br />';
										}
										$p ++;
									}
								?>
							</div>
						</div>

						<div class="filters-section filters-industry">
							<div class="filters-section-title">
								<?php _t('行业')?>
							</div>
							<div class="filters-selectors">
								<?php
									$p = 1;
									foreach (get_industry_list() as $code => $name) {
										echo "<span class=\"filter-cell filter-industry\" data=\"{$code}\">" . __($name) . "</span>";
										if ($p == 11) {
											echo '<br />';
										}
										$p ++;
									}
								?>
							</div>
						</div>

						<div class="filters-section filters-application" style="display:none;">
							<div class="filters-section-title">
								<?php _t('方案')?>
							</div>
							<div class="filters-selectors">
								<?php
									
									foreach (get_industry_list() as $code => $name) {
										$p = 1;
										foreach (get_applications_list_of_industry($code) as $app_code => $app_name) {
											echo "<span class=\"filter-cell filter-application filter-{$code}\" data=\"{$app_code}\" style=\"display: none;\">" . __($app_name) . "</span>";
											if ($code == 'industry_internet_ad_rtb') {
												if ($p == 10 || $p == 14 ) {
													echo '<br />';
												}
											}
											$p ++;
										}
										
									}
								?>
							</div>
						</div>

						<button type="submit" class="btn submit pull-right clearfix"><?php _t('搜索')?><div class="loading" style="display: none;"></div></button>
					</div>
				</div>

				<div class="width-limit">
					<div class="main-content clearfix">
						<div class="pagination first-pagination" style="display: none;">
							<ul>
								<li class="disabled"><span class="page-switcher" data="-1"> ... </span></li>
							</ul>
						</div>
						<div class="result-count" style="display:none;"> 共找到 <span class="count">0</span> 个大数据厂商。</div>
						<div class="form-result" style="display: none;"></div>
						<div class="pagination" style="display: none;">
							<ul>
								<li class="disabled"><span class="page-switcher" data="-1"> ... </span></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
		<?php include (COMMON_PATH . '/footer.php'); ?>
	</body>
</html>