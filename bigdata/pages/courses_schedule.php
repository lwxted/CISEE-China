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
							<h2>培训课程及价格表</h2>
						</div>
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>课程名称</th>
									<th>培训时间</th>
									<th>培训地点</th>
									<th>课程费用</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="course-title" rowspan="4">Hadoop 体验课程</td>
									<td>每月1、11、21上午</td>
									<td>北京</td>
									<td rowspan="8">免费</td>
								</tr>
								<tr>
									<td>每月3、13、23上午</td>
									<td>上海</td>
								</tr>
								<tr>
									<td>每月5、15、25上午</td>
									<td>广州</td>
								</tr>
								<tr>
									<td>每月8、18、28上午</td>
									<td>深圳</td>
								</tr>
								<tr>
									<td class="course-title" rowspan="4">厂商产品培训</td>
									<td>每月1、11、21上午</td>
									<td>北京</td>
								</tr>
								<tr>
									<td>每月3、13、23上午</td>
									<td>上海</td>
								</tr>
								<tr>
									<td>每月5、15、25上午</td>
									<td>广州</td>
								</tr>
								<tr>
									<td>每月8、18、28上午</td>
									<td>深圳</td>
								</tr>
								<tr>
									<td class="course-title" rowspan="5">Cloudera Developer Training for Apache Hadoop</td>
									<td>每月2、12、22下午</td>
									<td>北京</td>
									<td rowspan="5">6999元<br>(含联盟认证费)</td>
								</tr>
								<tr>
									<td>每月4、14、24下午</td>
									<td>上海</td>
								</tr>
								<tr>
									<td>每月6、16、26下午</td>
									<td>广州</td>
								</tr>
								<tr>
									<td>每月9、19、29下午</td>
									<td>深圳</td>
								</tr>
								<tr>
									<td>9月28 - 31日</td>
									<td>深圳、北京</td>
								</tr>
								<tr>
									<td class="course-title" rowspan="2">Cloudera Administrator Training for Apache Hadoop</td>
									<td>9月8 - 11日</td>
									<td>广州、上海</td>
									<td rowspan="2">5999元<br>(含 Cloudera 考试认证费)</td>
								</tr>
								<tr>
									<td>9月18 - 21日</td>
									<td>深圳、北京</td>
								</tr>
								<tr>
									<td class="course-title" >Cloudera Training for Apache HBase</td>
									<td>9月28 - 31日</td>
									<td>广州、上海</td>
									<td rowspan="2">6999元<br>(含 Cloudera 考试认证费)</td>
								</tr>
								<tr>
									<td class="course-title" >Cloudera Training for Apache Hive and Pig</td>
									<td>10月8 - 11日</td>
									<td>深圳、北京</td>
									
								</tr>
								<tr>
									<td class="course-title" >Cloudera Essentials Training for Apache Hadoop</td>
									<td>10月18 - 21日</td>
									<td>深圳、北京</td>
									
									<td>4699元<br>(含 Cloudera 考试认证费)</td>
								</tr>
							</tbody></table>
					</div>
				</div>
			</div>
		</div>
		<?php include (COMMON_PATH . '/footer.php'); ?>
	</body>
</html>