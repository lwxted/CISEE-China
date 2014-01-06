<?php 
	require_once ('../initialize.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include (COMMON_PATH . '/header.php'); ?>
		<?php use_css ('style_courses.css');?>
		<?php use_js ('courses.js');?>
	</head>
	
	<body>
		<div class="footerfix">
			<?php include (COMMON_PATH . '/navigation.php') ?>
			<div class="content clearfix">
				<div class="width-limit clearfix">
					<div class="main-content clearfix">
						<ul class="nav nav-tabs" id="courseTabs">
							<li class="active"><a href="#courses-schedule" data-toggle="pill">课程计划</a></li>
						 	<li><a href="#courses-invite" data-toggle="pill">邀请培训</a></li>
							<li><a href="#courses-fundamentals" data-toggle="pill">基础课程</a></li>
							<li><a href="#courses-hadoop-in-practice" data-toggle="pill">Hadoop 实战课程</a></li>
							<li><a href="#courses-hadoop-developer" data-toggle="pill">Hadoop 开发者课程</a></li>
							<li><a href="#courses-products" data-toggle="pill">厂商产品培训</a></li>
							<!-- <li><a href="#courses-activities" data-toggle="pill">活动</a></li> -->
						</ul>
						 
						<div class="tab-content">
							<div class="tab-pane active" id="courses-schedule">
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
											<td class="course-title" rowspan="4"><a href="#" class="courses-detail" data-toggle="courses-fundamentals">大数据基础课程</a></td>
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
											<td class="course-title" rowspan="4"><a href="#" class="courses-detail" data-toggle="courses-products">厂商产品培训</a></td>
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
											<td class="course-title" rowspan="4"><a href="#" class="courses-detail" data-toggle="courses-hadoop-in-practice">Hadoop 实战课程</a></td>
											<td>每月 2 日</td>
											<td>北京</td>
											<td rowspan="4">3999元<br>(含联盟认证费)</td>
										</tr>
										<tr>
											<td>每月 8 日</td>
											<td>上海</td>
										</tr>
										<tr>
											<td>每月 15 日</td>
											<td>广州</td>
										</tr>
										<tr>
											<td>每月 22 日</td>
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

							<div class="tab-pane" id="courses-invite">
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
											<td>15%</td>
										</tr>
										<tr>
											<td>一星会员</td>
											<td>未参加过联盟培训</td>
											<td>10%</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="tab-pane" id="courses-fundamentals">
								<div class="paragraph-set">
									<h2>大数据基础课程</h2>
									<p><b>时间：</b>9月28日上午9:00</p>
									<p><b>限定人数：</b>20人</p>
									<p><b>课程简介：</b>该培训主要针对对大数据有兴趣、有需求的人员开设的大数据发展、Hadoop 及大数据厂商产品介绍</p>
									<p><b>费用：</b>免费</p>
									<p><b>授课对象：</b></p>
									<ol>
										<li>企事业单位董事长、总经理及职能部门经理</li>
										<li>企事业单位信息中心主任、技术人员</li>
										<li>企事业单位业务部门负责人</li>
										<li>IT公司CTO、CIO</li>
										<li>IT公司技术人员</li>
										<li>IT公司市场销售人员</li>
										<li>IT公司技术人员</li>
										<li>其他关心大数据和对大数据感兴趣的有志之士</li>
									</ol>
									<p><b>奖项：</b>优秀学员奖、Hadoop 课程学费奖、iPad 等礼品抽奖</p>
									<p><b>服务：</b>0755-25320450</p>
									<p><b>教学大纲：</b></p>
									<p>一、 大数据应用与产品</p>
									<ol>
										<li>爆发：大数据时代预见未来的新思维</li>
										<li>大数据时代：生活工作思维的大变革</li>
										<li>删除</li>
										<li>大数据的行业应用</li>
										<li>大数据特点</li>
										<li>大数据时代的机会</li>
										<li>大数据产品</li>
										<li>大数据系统架构</li>
										<li>大数据发展趋势</li>
										<li>大数据在中国、改变你我他</li>
									</ol>
									<p>二、 Hadoop 课程</p>
									<ol>
										<li>Hadoop 及分布式架构</li>
										<li>Hadoop 基础课程</li>
										<li>Hadoop 管理员课程</li>
										<li>Hadoop 开发者课程</li>
										<li>Hbase 课程</li>
										<li>HortonWorks 课程</li>
										<li>Hive、sqoop、pig ... 课程</li>
										<li>什么时候适合使用 Hadoop</li>
										<li>目前 Hadoop 都被用来做什么</li>
										<li>如何将 Hadoop嵌入已有的系统环境</li>
										<li>如何选择 Hadoop 及相关注意因素</li>
										<li>部署 Hadoop 所需资源</li>
										<li>Hadoop 起源及动机</li>
										<li>Hadoop 基本概念</li>
										<li>Hadoop 解决方案</li>
										<li>Hadoop 生态系统</li>
										<li>数据中心里的 Hadoop</li>
										<li>开始掌握和用好 Hadoop</li>
									</ol>
								</div>
							</div>

							<div class="tab-pane" id="courses-hadoop-in-practice">
								<div class="paragraph-set">
									<h2>Hadoop 实战课程</h2>
									<p><b>主办：</b>深圳市软件行业协会（深圳市大数据产业联盟发起单位）</p>
									<p><b>联合授课：</b>普兰软件（大数据 Hadoop 培训和内训机构）</p>
									<p><b>一、课程优势：</b></p>
									<p>注重工程实践：原理剖析，实践分享；Hadoop采用实战的项目，让学员在短时间内掌握Hadoop的搭建与配置；并进行高效的大数据ETL处理。授课形式灵活：互动课堂、实际行业应用展示、免费技术沙龙、提供大数据项目方案咨询、实施指导。</p>
									<p><b>实战、实用、实际、实惠</b></p>
									<ol>
										<li>有多年Hadoop实战经验并获得Cloudera专业认证资格的讲师团队；</li>
										<li>贯穿整个课程的项目开发实战；</li>
										<li>课程涵盖Hadoop生态系统中所有常用组件；</li>
										<li>提供三个月课后免费答疑；</li>
										<li>获得IT行业高薪职业发展能力。</li>
									</ol>
									<p><b>项目开发的实际指导咨询顾问</b></p>
									<ol>
										<li>Hadoop分布式架构部署实施优化；</li>
										<li>hadoop应用开发指导咨询顾问和应用交付；</li>
										<li>企事业单位hadoop内训技术人员培养；</li>
										<li>大数据主流厂商产品部署实施咨询。</li>
									</ol>
									<p>通过考试可获Cloudera官方授权CCDH、CCAH、CCSHB、CCP认证证书。</p>
									<p><b>二、培训对象：</b></p>
									<ol>
										<li>总经理、战略总监、市场总监；</li>
										<li>CTO、CIO、项目经理；</li>
										<li>系统架构师、系统分析师、高级程序员、资深开发人员、研发工程师；</li>
										<li>大数据处理数据中心运行、规划、设计负责人；</li>
										<li>政府机关、运营商、金融保险、移动和互联网等大数据应用机构相关人员；</li>
									</ol>
								</div>
							</div>

							<div class="tab-pane" id="courses-hadoop-developer">
								<div class="paragraph-set">
									<h2>Cloudera Training for Apache Hive and Pig</h2>
									<p><b>时间：</b>两天</p>
									<p><b>人数：</b>不限</p>
									<p><b>地址：</b>深圳市国际金融大厦5楼</p>
									<p><b>课程简介：</b>该培训主要针对需要使用 Hadoop 来进行数据分析的数据分析人员，主要学习 Hive 导入数据与操作数据、Pig体系结构及使用。</p>
									<p><b>费用：</b></p>
									<ul>
										<li>10月18日24:00前报名缴费：3999元</li>
										<li>10月31日24:00前报名缴费：4999元</li>
										<li>11月28日 报名缴费：5999元</li>
									</ul>
									<p><b>授课对象：</b>需要使用 Hadoop 来进行数据分析的数据分析人员</p>
									<p><b>学员基础：</b>建议需具备 SQL 和脚本编程经验，但不是必须的。无需 Hadoop 基础和经验。</p>
									<p><b>奖项：</b>优秀学员奖、Hadoop 课程学费奖、iPad 等礼品抽奖</p>
									<p><b>服务：</b>0755-25320450</p>
									<p><b>教学大纲：</b></p>
									<ul>
										<li>Hadoop和Hive介绍</li>
										<li>加载数据到Hive</li>
										<li>使用Hive操作数据</li>
										<li>Partitioning and Bucketing Data</li>
										<li>高级Hive特性</li>
										<li>Hive Best Practices</li>
										<li>Pig介绍</li>
										<li>Pig体系结构</li>
										<li>使用Pig进行数据读写</li>
										<li>Pig Latin介绍</li>
										<li>高级Pig Latin</li>
										<li>调试Pig</li>
										<li>Pig Best Practices</li>
									</ul>
								</div>
							</div>

							<div class="tab-pane" id="courses-products">
								<div class="paragraph-set">
									<h2>厂商产品培训</h2>
									<p><b>培训产品：</b>Datameer, Connotate, Lavastorm, Zementis, Revolution Analytics</p>
									<p><b>时间：</b>2013/08/28 19:00</p>
									<p><b>限定人数：</b>不限</p>
									<p><b>地址：</b>深圳市国际金融大厦 5 楼</p>
									<p><b>课程简介：</b>该培训主要针对 arcplan, Datameer, Connotate, Lavastorm, Zementis, Revolution Analytics 产品及行业解决方案培训</p>
									<p><b>费用：</b>免费</p>
									<p><b>授课对象：</b></p>
									<ol>
										<li>企事业单位信息中心主任、技术人员</li>
										<li>企事业单位业务部门负责人</li>
										<li>IT 公司 CTO、CIO</li>
										<li>IT 公司技术人员</li>
										<li>其他关心大数据和对大数据感兴趣的有志之士</li>
									</ol>
									<p><b>奖项：</b>优秀学员奖、Hadoop 课程学费奖、iPad 等礼品抽奖</p>
								</div>
							</div>
							<!-- <div class="tab-pane" id="courses-activities">

							</div> -->
						</div>

					</div>
				</div>
			</div>
		</div>
		<?php include (COMMON_PATH . '/footer.php'); ?>
	</body>
</html>