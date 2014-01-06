<?php 
	require_once ('../initialize.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include (COMMON_PATH . '/header.php'); ?>
		<?php use_css ('style_about.css');?>
	</head>
	
	<body>
		<div class="footerfix">
			<?php include (COMMON_PATH . '/navigation.php') ?>
			<div class="content clearfix">
				<div class="width-limit clearfix">
					<div class="main-content clearfix">
						<ul class="nav nav-tabs" id="aboutTabs">
							<li class="active"><a href="#what-you-can-do" data-toggle="pill">您能做什么</a></li>
						 	<li><a href="#what-we-do" data-toggle="pill">我们做什么</a></li>
							<li><a href="#how-we-do" data-toggle="pill">我们怎么做</a></li>
							<li><a href="#who-we-are" data-toggle="pill">我们是谁</a></li>
							<li><a href="#contact-us" data-toggle="pill">联系我们</a></li>
						</ul>
						 
						<div class="tab-content">
							<div class="tab-pane active" id="what-you-can-do">
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
							<div class="tab-pane" id="what-we-do">
								<div class="paragraph-set">
									<h2>
										我们做什么？
									</h2>
									<p>一、翻译分类优选发布厂商产品、技术、方案和信息</p>
									<p>二、查询跟踪客户、集成商需要的厂商产品、推荐厂商产品和解决方案</p>
									<p>三、市场营销：发布包装厂商产品组织举办巡展、论坛、会展、技术交流、培训、沙龙、俱乐部推介宣传厂商产品</p>
									<p>四、提供厂商产品的技术培训、售前支持、售中工程咨询、售后服务咨询</p>
									<p>五、分销厂商产品</p>
									<p>六、建立交流交互交易平台</p>
									<table class="table table table-about">
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
							</div>
							<div class="tab-pane" id="how-we-do">
								<div class="paragraph-set">
									<h2>我们怎么做</h2>
									<p><b>为客户、厂商、渠道、开发者、投融资者提供一个开放的交流交互交易资源平台</b></p>
									<p>一、	依托各省市软件协会、科技协会和各个行业协会的支持</p>
									<p>二、	联盟国内3000多家SI渠道公司，建立区域、行业、渠道、大客户的市场网络</p>
									<p>三、	依托涵盖已有的互联网、电信、金融、政府、制造、公共服务、医疗、能源军工等各个行业的客户良好的关系基础，跟踪服务前10000强的大型企事业单位需求</p>
									<p>四、	常态化的进行巡展、培训、论坛、展会、俱乐部、投融资对接等等活动，提供众多产品的培训、认证、技术<服务支持；提供产品和解决方案咨询；提供认证产品的销售服务；提供项目工程实施咨询/p>
									<p>五、	精选集聚联盟国际上各行业应用和平台功能的主流产品厂商</p>
									<p>六、	提供厂商产品的技术培训、售前支持、售中工程咨询、售后服务咨询</p>
								</div>
							</div>
							<div class="tab-pane" id="who-we-are">
								<div class="paragraph-set">
									<h2>我们是谁</h2>
									<p>大数据厂商联盟是集聚国际主流大数据厂商产品，对接亚洲特别是中国市场的交流交互交易平台。</p>
									<p>大数据厂商联盟得到了中国各省市软件协会、科技协会、超算云中心和各个行业协会的支持，依托涵盖已有的互联网、电信、金融、政府、制造、公共服务、医疗、能源军工等各个行业的客户良好的关系基础，联盟国内3000多家SI渠道公司，推动服务中国排在前10000强的大型企事业单位需求。</p>
									<p>大数据厂商联盟平台精选集聚了国际上各行业应用和平台功能的主流产品厂商；细分产品、技术、市场营销三位一体的培训、咨询、技术支持服务中国细分市场客户；常态化的进行巡展、培训、论坛、展会、俱乐部、投融资对接等等活动，提供每一个产品的培训、认证；提供产品和解决方案咨询；提供合作产品的销售服务；提供项目工程实施咨询；为客户、厂商、渠道、开发者、投融资者提供一个开放的资源平台。</p>
									<p>&nbsp;</p>
									<p><b>
										大数据联盟
									</b></p>
									<p>
										深圳普兰软件有限公司<br />
										+86 755-25320450<br />
										李先生 13826577717<br />
										info@bigdataunion.org
									</p>
								</div>
							</div>
							<div class="tab-pane" id="contact-us">
								<div class="paragraph-set">
									<h2>联系我们</h2>
									<p>
										<b>深圳普兰软件有限公司</b><br />
										中国深圳市福田区<br>
									 	八卦三路 88 号荣生大厦 802 室<br>
										+86 755-25320450<br />
										<a href="mailto:info@bigdataunion.org">info@bigdataunion.org</a>
									</p>
									<!-- <address>
									  <strong>深圳普兰软件有限公司</strong><br>
									  中国深圳市福田区<br>
									  八卦三路 88 号荣生大厦 802 室<br>
									  <abbr title="Phone">P:</abbr> +86 (755) 25320450
									</address>
									 
									<address>
									  <strong>李先生</strong><br>
									  <abbr title="Phone">P:</abbr> +86 138-2657-7717
									</address> -->
									<!-- <p>&nbsp;</p>
									<p><b>
										联系人
									</b></p> -->
									<!-- <ol>
										<li>
											<b>品牌市场总监 Chelsy</b><br />
											电话: +86 130 0664 3967<br />
											Email: xiaofan.cai@arcplan.com.cn
										</li>

										<li>
											<b>品牌经理 Michelle</b><br />
											电话: +86 159 2094 5173<br />
											Email: xt.liu@arcplan.com.cn
										</li>

										<li>
											<b>品牌经理 Daisy</b><br />
											电话: +86 136 3158 1955<br />
											Email: lanzi.li@arcplan.com.cn
										</li>

										<li>
											<b>品牌经理 Michael</b><br />
											电话: +86 136 2235 7931<br />
											Email: fengguang.zhang@arcplan.com.cn
										</li>

										<li>
											<b>品牌经理 James</b><br />
											电话: +86 138 2873 9905<br />
											Email: guangwei.li@arcplan.com.cn
										</li>
									</ol> -->
								
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<?php include (COMMON_PATH . '/footer.php'); ?>
	</body>
</html>