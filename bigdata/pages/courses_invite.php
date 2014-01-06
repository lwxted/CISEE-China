<?php 
	require_once ('../initialize.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include (COMMON_PATH . '/header.php'); ?>
		<?php use_css ('style_courses.css');?>
	</head>
	
	<body>
		<div class="footerfix">
			<?php include (COMMON_PATH . '/navigation.php') ?>
			<div class="content clearfix">

				<div class="width-limit clearfix">
					<div class="main-content clearfix">
						<div class="paragraph-set">
							<h2>培训 VIP 会员俱乐部</h2>
						</div>
						<table class="table-courses-invite table table-bordered table-striped">
							<thead>
								<tr>
									<th>会员等级</th>
									<th>参加培训累计费用
									<th>邀请奖励</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>五星会员</td>
									<td>10万元以上</td>
									<td>30%</td>
								</tr>
								<tr>
									<td>四星会员</td>
									<td>5万元以上</td>
									<td>25%</td>
								</tr>
								<tr>
									<td>三星会员</td>
									<td>2万元以上</td>
									<td>20%</td>
								</tr>
								<tr>
									<td>二星会员</td>
									<td>参加过联盟培训</td>
									<td>15%
								</tr>
								<tr>
									<td>一星会员</td>
									<td>未参加过联盟培训</td>
									<td>10%</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<?php include (COMMON_PATH . '/footer.php'); ?>
	</body>
</html>