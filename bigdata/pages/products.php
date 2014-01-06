<?php 
	require_once ('../initialize.php');
	$logo_hirerachy_left = array(
			0 => array(
				'title' => '数据分析',
				'sections' => array(
						array(
							'subtitle' => '大数据分析',
							'logos' => array(
								'datameer' => 'png',
								'datahero' => 'png',
								'platfora' => 'jpg'
								)
							),
						array(
							'subtitle' => '可视化',
							'logos' => array(
								'skytree' => 'jpg',
								'metamarkets' => 'jpg',
								'statwing' => 'png'
								)
							),
						array(
							'subtitle' => '搜索',
							'logos' => array(
								'attivio' => 'png',
								'locu' => 'png',
								'topsy' => 'png'
								)
							),
						array(
							'subtitle' => '机器学习',
							'logos' => array(
								'datapop' => 'jpg',
								'bigml' => 'png',
								'gravity' => 'png'
								)
							),
						array(
							'subtitle' => '数据挖掘',
							'logos' => array(
								'priorknowledge' => 'jpg',
								'expectlabs' => 'jpg',
								'bidgely' => 'png'
								)
							),
						array(
							'subtitle' => 'BI',
							'logos' => array(
								'arcplan' => 'jpg'
								)
							),
					)
				),
			1 => array(
				'title' => '分析应用',
				'sections' => array(
						array(
							'subtitle' => '电商网站行为分析',
							'logos' => array(
								'sumall' => 'png',
								'metamarkets' => 'jpg',
								'kontagent' => 'jpg'
								)
							),
						array(
							'subtitle' => '社交网站监测分析',
							'logos' => array(
								'precog' => 'png',
								'radian6' => 'png',
								)
							),
						array(
							'subtitle' => '感情分析',
							'logos' => array(
								'kredstreet' => 'png',
								'smogfarm' => 'png',
								)
							),
						array(
							'subtitle' => '社会媒体分析',
							'logos' => array(
								'dataminr' => 'png',
								)
							),
						array(
							'subtitle' => 'RTB 及广告分析',
							'logos' => array(
								'rocketfuel' => 'gif',
								'tellapart' => 'jpg',
								'dataxu' => 'png',
								)
							),
						array(
							'subtitle' => 'IT 日志运维分析',
							'logos' => array(
								'sumologic' => 'jpg',
								'loggly' => 'png',
								'riverbed' => 'jpg',
								)
							),
						array(
							'subtitle' => '市场营销分析',
							'logos' => array(
								'lattice' => 'gif',
								'musigma' => 'jpg',
								'five9' => 'png',
								)
							),
						array(
							'subtitle' => '位置分析',
							'logos' => array(
								'foursquare' => 'png',
								'roambi' => 'jpg',
								)
							),
						array(
							'subtitle' => '其他分析',
							'logos' => array(
								'palantir' => 'jpg',
								'inrix' => 'jpg',
								'kroll_ontrack' => 'jpg'
								)
							),
					)
				),
		);
	$logo_hirerachy_right = array(
			0 => array(
				'title' => '平台管理优化',
				'sections' => array(
						array(
							'subtitle' => '集群',
							'logos' => array(
								'lexisnexis' => 'jpg',
								'hpccsystems' => 'jpg',
								'acunu' => 'png'
								)
							),
						array(
							'subtitle' => '管理及监控',
							'logos' => array(
								'datadog' => 'png',
								'stackiq' => 'png',
								'riverbed' => 'jpg'
								)
							),
						array(
							'subtitle' => '安全管理',
							'logos' => array(
								'cloudflare' => 'png',
								'dataguise' => 'jpg',
								'vkey' => 'png'
								)
							),
						array(
							'subtitle' => '储存',
							'logos' => array(
								'datagravity' => 'jpg',
								'cleversafe' => 'png',
								'panasas' => 'png'
								)
							),
						array(
							'subtitle' => '数据集成',
							'logos' => array(
								'nodeable' => 'jpg',
								'aspera' => 'jpg',
								'clearstory' => 'png'
								)
							),
						array(
							'subtitle' => 'MPP',
							'logos' => array(
								'infini' => 'jpg',
								'gridgain' => 'jpg'
								)
							),
					)
				),
			1 => array(
				'title' => 'Hadoop 平台',
				'sections' => array(
						array(
							'subtitle' => 'Hadoop 发行版',
							'logos' => array(
								'cloudera' => 'png',
								'hortonworks' => 'png',
								'mapr' => 'jpg'
								)
							),
						array(
							'subtitle' => '分析平台',
							'logos' => array(
								'zettaset' => 'jpg',
								'kognitio' => 'png',
								'infochimps' => 'jpg'
								)
							),
						array(
							'subtitle' => '操作平台',
							'logos' => array(
								'hadapt' => 'png',
								'datastax' => 'jpg',
								'hstreaming' => 'png'
								)
							),
						array(
							'subtitle' => 'NoSQL',
							'logos' => array(
								'basho' => 'png',
								'mongodb' => 'png',
								'clustrix' => 'jpg'
								)
							),
						array(
							'subtitle' => 'NewSQL',
							'logos' => array(
								'marklogic' => 'jpg',
								'nuodb' => 'png',
								'voltdb' => 'jpg'
								)
							),
						array(
							'subtitle' => '云平台',
							'logos' => array(
								'cloudphysics' => 'png',
								'sevone' => 'png',
								'cloudability' => 'png',
								)
							),
					)
				)
		);
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include (COMMON_PATH . '/header.php'); ?>
		<?php use_css ('style_products.css');?>
		<?php use_css ('style_about.css');?>
	</head>
	
	<body>
		<div class="footerfix">
			<?php include (COMMON_PATH . '/navigation.php') ?>
			<div class="content clearfix">
			
				<div class="width-limit clearfix">
					<!-- <div class="main-content clearfix"> -->
						
					<!-- </div> -->
				</div>

				<div class="width-limit clearfix">
					<div class="main-content">
						<div class="paragraph-set">
							<h2>认证推荐厂商产品</h2>
						</div>
						<table class="table logo-map table-bordered">
							<tbody>
								<tr>
									<th rowspan="4">分析应用</th>
									<td class="subtitle-cell">电商网站行为分析</td>
									<td class="subtitle-cell">社交网站监测分析</td>
									<td class="subtitle-cell">感情分析</td>
									<td class="subtitle-cell">社会媒体分析</td>
									<td class="subtitle-cell">RTB 及广告分析</td>
									<td class="subtitle-cell">IT 日志分析</td>
								</tr>
								<tr>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/metamarkets.jpg)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/precog.png)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/kredstreet.png)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/dataminr.png)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/rocketfuel.gif)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/sumologic.jpg)"></div></td>
								</tr>
								<tr>
									<td class="subtitle-cell">市场营销分析</td>
									<td class="subtitle-cell">App 移动分析</td>
									<td class="subtitle-cell">位置分析</td>
									<td class="subtitle-cell">分析</td>
									<td class="subtitle-cell">行业应用分析</td>
									<td class="subtitle-cell">其他分析</td>
								</tr>
								<tr>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/lattice.gif)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/roambi.jpg)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/roambi.jpg)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/0.png)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/0.gif)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/inrix.jpg)"></div></td>
								</tr>

								<tr>
									<th rowspan="2">数据分析</th>
									<td class="subtitle-cell">大数据分析</td>
									<td class="subtitle-cell">可视化</td>
									<td class="subtitle-cell">搜索</td>
									<td class="subtitle-cell">机器学习</td>
									<td class="subtitle-cell">数据挖掘</td>
									<td class="subtitle-cell">BI</td>
								</tr>
								<tr>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/datameer.png)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/tableau.png)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/attivio.png)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/bigml.png)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/revolutionanalytics.png)"></div></td>
									<td class="logo-cell"><a href="./product_detail.php"><div class="map-logo" style="background-image: url(../assets/img/logo_map/arcplan.jpg)"></div></a></td>
								</tr>

								<tr>
									<th rowspan="2">平台管理优化</th>
									<td class="subtitle-cell">集群</td>
									<td class="subtitle-cell">管理及监控</td>
									<td class="subtitle-cell">安全管理</td>
									<td class="subtitle-cell">存储</td>
									<td class="subtitle-cell">数据集成</td>
									<td class="subtitle-cell">MPP</td>
								</tr>
								<tr>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/lexisnexis.jpg)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/datadog.png)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/dataguise.jpg)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/datagravity.jpg)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/clearstory.png)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/gridgain.jpg)"></div></td>
								</tr>

								<tr>
									<th rowspan="2">Hadoop 平台</th>
									<td class="subtitle-cell">Hadoop 发行版</td>
									<td class="subtitle-cell">分析平台</td>
									<td class="subtitle-cell">操作平台</td>
									<td class="subtitle-cell">NoSQL</td>
									<td class="subtitle-cell">NewSQL</td>
									<td class="subtitle-cell">云平台</td>
								</tr>
								<tr>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/cloudera.png)"></div></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/kognitio.png)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/hadapt.png)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/mongodb.png)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/marklogic.jpg)"></div></td>
									<td class="logo-cell"><div class="map-logo" style="background-image: url(../assets/img/logo_map/sevone.png)"></div></td>
								</tr>
							</tbody>
						</table>
						<div class="paragraph-set">
							<h2>普兰软件公司提供服务：
							</h2>
							<p>
								一、发布厂商产品：翻译分类优选发布厂商产品、技术、方案和信息
							</p>
							<p>
								二、挖掘发现需求：挖掘客户、集成商需要，推荐厂商产品和解决方案
							</p>
							<p>
								三、市场推广营销：组织举办巡展、论坛、会展、技术交流、培训、沙龙、俱乐部推介宣传厂商产品
							</p>
							<p>
								四、提供技术服务：厂商产品的技术培训、售前支持、售中工程咨询、售后服务咨询
							</p>
							<p>
								五、分销厂商产品:   建立多层次行业和区域渠道，分销厂商产品
							</p>
							<p>
								六、交流交互交易平台：提供大数据厂商产品方案的客户、渠道、开发者、投融资者的交流交互交易平台
							</p>
						</div>
						<div class="paragraph-set">
							<h2>
								平台能为您做什么？
							</h2>
							<table class="table table table-about table-about-first">
								<tbody>
									<tr>
										<td class="left">为客户</td>
										<td>
											1. 精准推荐真正需要的厂商产品和方案、进行产品和方案的比较精选<br />
											2. 推荐比较能为客户提供满意服务的集成商<br />
											3. 提供产品课程和技术资源<br />
											4. 发布需求、咨询、交流<br />
										</td>
									</tr>
									<tr>
										<td class="left">为厂商</td>
										<td>
											1. 翻译上传发布产品和方案、发布信息<br />
											2. 发布包装厂商产品组织举办巡展、论坛、会展、技术交流、培训、沙龙、俱乐部推介宣传厂商产品<br />
											3. 精准推介产品到真正需要你的产品的客户和渠道、分销厂商产品<br />
											4. 提供厂商产品的技术培训、售前支持、售中工程咨询、售后服务咨询
										</td>
									</tr>
									<tr>
										<td class="left">为集成商</td>
										<td>
											1. 提供客户和行业资源<br />
											2. 提供客户最需要的厂商产品和方案<br />
											3. 在线培训、交流支持<br />
											4. 推荐投资机构PE、VC、天使投资
										</td>
									</tr>
									<tr>
										<td class="left">为开发者</td>
										<td>
											提供培训、咨询、交流、共享
										</td>
									</tr>
									<tr>
										<td class="left">为投融资者</td>
										<td>为投资商科学优选厂商和项目公司提供信息搭建桥梁</td>
									</tr>
								</tbody>
							</table>

						</div>
						<div class="paragraph-set">
							<h2>
								在这里您能做什么？
							</h2>
							
							<table class="table table table-about">
								<tbody>
									<tr>
										<td class="left">作为客户</td>
										<td>
											1. 精准地找到需要的厂商产品和方案、进行产品和方案的比较精选<br />
											2. 遴选能为您提供满意服务的集成商<br />
											3. 学习网上课程和资源<br />
											4. 发布需求、咨询、交流
										</td>
									</tr>
									<tr>
										<td class="left">作为厂商</td>
										<td>
											1. 上传发布产品和方案、发布信息<br />
											2. 精准推介产品到真正需要你产品的客户和渠道<br />
											3. 在线培训、咨询支持、交流
										</td>
									</tr>
									<tr>
										<td class="left">作为集成商</td>
										<td>
											1. 可以拓展客户<br />
											2. 找到客户最需要的厂商产品和方案<br />
											3. 在线培训、交流支持<br />
											4. 找到投资资金
										</td>
									</tr>
									<tr>
										<td class="left">作为开发者</td>
										<td>
											1. 培训学习提高技能<br />
											2. 发布共享知识
										</td>
									</tr>
									<tr>
										<td class="left">作为投融资者</td>
										<td>优选投资项目，甄选大数据厂商和项目公司</td>
									</tr>
								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include (COMMON_PATH . '/footer.php'); ?>
	</body>
</html>





