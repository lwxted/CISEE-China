<?php 
	require_once ('../initialize.php');
	require_once (COMMON_PATH . '/filters.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include (COMMON_PATH . '/header.php'); ?>
		<?php use_css('style_product_detail.css'); ?>
		<?php use_js('product_detail.js'); ?>
	</head>
	
	<body>
		<div class="footerfix">
			<?php include (COMMON_PATH . '/navigation.php') ?>
			<div class="content clearfix">
				<div class="width-limit clearfix">
					<div class="main-content clearfix">
						<div class="provider-info clearfix">
							<div class="logo-cell">
								<div class="logo" style="background-image: url(../assets/img/logo_map/arcplan.jpg)"></div>
							</div>
							<div class="provider-name">arcplan</div>
						</div>
						<ul class="nav nav-tabs" id="productTabs">
							<li class="active"><a href="#provider-product" data-toggle="pill">产品</a></li>
						 	<li><a href="#product-solution" data-toggle="pill">方案</a></li>
							<li><a href="#product-about" data-toggle="pill">资料</a></li>
							<li><a href="#product-cases" data-toggle="pill">案例</a></li>
							<li><a href="#product-demo" data-toggle="pill">Demo</a></li>
							<li><a href="#product-download" data-toggle="pill">软件下载</a></li>
							<li><a href="#product-courses" data-toggle="pill">培训</a></li>
							<li><a href="#product-services" data-toggle="pill">服务</a></li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane active" id="provider-product">
								
								<ul class="nav nav-tabs secondary-nav" id="productTabs">
									<li class="active"><a href="#provider-product-1" data-toggle="pill">概述</a></li>
								 	<li><a href="#provider-product-2" data-toggle="pill">arcplan Enterprise</a></li>
								 	<li><a href="#provider-product-3" data-toggle="pill">arcplan Edge</a></li>
								 	<li><a href="#provider-product-4" data-toggle="pill">arcplan Engage</a></li>
								 	<li><a href="#provider-product-5" data-toggle="pill">arcplan Excel Analytics</a></li>
								 	<li><a href="#provider-product-6" data-toggle="pill">arcplan Mobile</a></li>
								 	<!-- <li><a href="#provider-product-7" data-toggle="pill">arcplan Spotlight</a></li> -->
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="provider-product-1">
										<div class="paragraph-set">
											<h2>arcplan -- 一个千变万化的解决方案平台</h2>
											<h2>基于多种类数据源的灵活的商业智能与计划平台</h2>
											<p>arcplan BI 软件可以使企业快速按照各自的需求开发部署商业智能与分析应用。我们提供超过20种数据源接口可以直接连接用户的本地数据。arcplan无需将数据抽取并汇集到一个专用数据仓库，同时，arcplan企业版和我们的全线商业智能产品支持直接连接众多关系型数据库或多维数据仓库，如 <b>SAP、Oracle、IBM、Microsoft、Teradata</b>等等。</p>
											<img src="../contents/dynamic/service/product/1/1.png" width="497" height="353" class="paragraph-img"/>
											<p>arcplan 平台提供了强大的功能和灵活性，可以通过下列的平台组件完成企业的需求，使用户尽可能的摆脱对不同厂商的依赖：</p>
											<ul>
												<li>
													arcplan Enterprise - arcplan 创建定制化BI分析的核心解决方案。arcplan Enterprise包含了所有您在开发管理驾驶舱、报表及分析应用时所需的功能。 
												</li>
												<li>
													arcplan Edge - arcplan 的企业预算、计划与预测平台同时为用户提供了基于Web的报表、管理驾驶舱以及工作流等相关内容。arcplan Edge提供了一个可以相应预算流程的接口，可以极大程度上通过自动化的方式完成从前耗时耗力才能完成的预算合并的工作。
												</li>
												<li>
													arcplan Excel Analytics – arcplan Excel Analytics 将 arcplan 的强大的分析能力通过arcplan应用与功能无缝的集成扩展至Microsoft Excel中。可以轻松的在整个企业内部署并扩展，并且使用者可以利用企业数据做细致的分析，同时在有需要的情况下可以直接将数据回写到数据库，而且也符合IT部门对数据安全与集中控制的需要。可以通过arcplan Enterprise或者arcplan Edge使用此功能。
												</li>
												<li>
													arcplan Spotlight – 自助分析解决方案，帮助用户动态创建报表、进行操作并快速完成查询。可以通过间接的方式连接到您企业的数据仓库，浏览“实时”数据，可以在不使用任何其他复杂工具时做关键指标的转换并即时获取信息。
												</li>
												<li>
													arcplan Engage – 允许用户通过简便的搜索功能在 arcplan 应用、SharePoint和其他BI应用中发掘企业内部有价值的信息。与其他同事共同使用这一新一代BI解决方案。
												</li>
											</ul>
											<p>
												我们所有 arcplan 产品都 可以为我们的用户，（终端用户和IT人员）提供如下好处:
											</p>
											<ul>
												<li>通过自有的接口可以便捷地整合种类繁多的数据源并与之交互。</li>
												<li>拥有无可比拟的能力，尤其是在面对计算复杂和分析方法复杂的需求时，可以突破其他产品功能上的限制。</li>
												<li>具有灵活的能力，可以同时满足高管人员和一线员工的需求。</li>
												<li>可以与数据进行双向的交互（读与写）。</li>
												<li>实时的分析流程可以很好地满足来自于财务和运营团队的分析需要。</li>
											</ul>
										</div>
									</div>
									<div class="tab-pane" id="provider-product-2">
										<div class="paragraph-set">
											<h2>arcplan Enterprise</h2>
											<h2>突破传统的报表</h2>
											<p><b>arcplan Enterprise(R)</b> 作为我们核心的商业智能报表与分析平台，在灵活性上获得用户的一致认可，可以快速创建常用的BI分析应用，诸如报表、管理驾驶舱、即席查询分析和预测等。利用arcplan Enterprise您可以向不同层面的决策者提供可操作的内容，从而更具智慧的理解并转变运营模式。</p>
											<h3>在您需要的时候提供分析</h3>
											<p>通过arcplan Enterprise，您 可以高效的根据需要实现商业智能化。arcplan Enterprise可以同时从多种数据源（例如ERP、OLAP、关系形数据库和web services）获取信息支撑复杂而全面的分析。利用arcplan强大的用户界面，您可以越过建立一个独立的复杂的数据仓库这一过程，快速进行决策、采取行动。如果业务流程发生了arcplan也可以快速地适应新的数据要求，确保及时性，并同时可以进行低成本且高效的系统维护。这样，您的用户可以直观的体验到arcplan的优势。</p>
											<img src="../contents/dynamic/service/product/2/1.jpeg" width="728" height="411" class="paragraph-img"/>
											<h3>arcplan 架构综述</h3>
											<p>可扩展的分析 – 好的业务绩效分析的基础 – 通常需要一个既可以同时分析来自于不同数据源的信息、也可以在适当的时间向适当的人提供适当的分析内容的架构。arcplan的三层架构设计可以确保在最复杂的环境下取得成功。</p>
											<p>arcplan Enterprise架构的核心组件是：</p>
											<ul>
												<li><b>arcplan Application Server</b> - 基于Windows 的Server可以通过Web实时地向任何用户提供统一的、集中化的分析应用。支持32 bit和64 bit安装。</li>
												<li><b>Data Sources</b> - arcplan的数据源接口针对各种不同类型的 数据源 （例如ERP、关系型数据库、OLAP等等）提供了双向的接入方式。“数据回写”作为arcplan的一个标准功能，可以让企业实现一个可以带有操作功能的应用系统，而非仅仅是监控。</li>
												<li><b>Web Services / SOA</b>  - arcplan Enterprise支持完整的SOA，为arcplan的分析提供完整而复杂的web services支持。提供者和消费者支持Web Services意味着arcplan的结果可以灵活的嵌入到您的任何系统中。</li>
												<li><b>arcplan Application Designer</b>  - arcplan的前端开发平台，可以通过拖拽的方式灵活而快速的完成定制化的BI应用。种类繁多的图形、表格或文本可以组合成适合各种应用的样式与风格。</li>
												<li><b>Administration Console</b>  - IT专业人员可以利用这一专有的管理平台存储并管理所开发的应用。集中式的管理使得应用的分发与扩展更为简便。</li>

											</ul>
										</div>
									</div>
									<div class="tab-pane" id="provider-product-3">
										<div class="paragraph-set">
											<h2>arcplan Edge</h2>
											<h2>让你的预算与计划更加自动化</h2>
											<p><a href="http://arcplanet.cn/fileadmin/collateral/Brochures/fact_sheet_arcplan_Edge_EN_2011-12.pdf" target="_blank"><b><img class="PicLeft" src="http://arcplanet.cn/fileadmin/images/Products/Logos/arcplan_Edge_80px.png" border="0" alt="" title="Integrated Planning, Workflow, and Reporting" width="80" height="80" /></b></a></p>
											<p>arcplan Edge为那些负责在Excel中根据预算和计划输入数据的使用者提供了一个直观的，熟悉的界面，在日常工作自动化中和流程整合过程中通过基于Web的报告，记分卡实现计划、预算与预测，并提高整个流程的可视性。结合arcplan Enterprise的商业智能分析功能，arcplan Edge为企业部署一个完整的绩效管理解决方案提供了强有力的支撑--从预算编制和规划到分析和报告。<br /><br /><b><a href="http://arcplanet.cn/fileadmin/images/Products/Screenshots/aEdge_Planning.jpg" target="_blank"><img class="PicRight" src="http://arcplanet.cn/uploads/RTEmagicC_aEdge_Planning_200px.jpg.jpg" border="0" alt="" width="200" height="148" /></a>适应您的企业的规划周期：</b>许多大型的规划解决方案需要做大量的修改来适应企业的BP&amp;F（预算编制，规划和预测）流程，并且经常推荐大量新的、企业所不需要的软件或流程的变化。arcplan Edge的灵活性，足以以一个软件解决方案适应企业当前的流程，而不影响或打断企业目前的做法。&nbsp;<a href="http://arcplanet.cn/products/arcplan-edge/budgeting-planning/" target="_blank">点击这里查看更多预算和规划相关信息</a>。</p>
											<p></p>
											<p><b><a href="http://arcplanet.cn/fileadmin/images/Products/Screenshots/aEdge_to_Excel.jpg" target="_blank"><img class="PicLeft" src="http://arcplanet.cn/uploads/RTEmagicC_aEdge_to_Excel_200px.jpg.jpg" border="0" alt="" width="200" height="151" /></a></b></p>
											<p><b>拥抱你的Excel用户：&nbsp;</b>通过使用arcplan Edge，企业可以继续使用现有的成功的基于Excel的BP&amp;F（预算编制，规划和预测）流程。所不同的是，arcplan Edge能够将企业规则和IT管理引入整个流程当中，以确保预算的完成和避免意外情况的出现。<b><br /><br />简化数据输入：&nbsp;</b>在arcplan Edge中不仅拥有标准的表格功能，同时还可以按照用户的期望将预算应用于多个时段，账目和意见。依靠arcplan Edge的工作流能力，当用户保存并提交规划时，系统就自动完成更新。此外，基于系统交互的自动触发报警可提示流程中的各用户各项任务的完成状态。<br /><b><br />协调整个企业：&nbsp;</b>预算流程往往需要在一定的层面上对计划细节具有更大的可见度，而非企业的<a href="http://arcplanet.cn/about-us/glossary/glossary-details/?tx_a21glossary%5Buid%5D=30&amp;cHash=ccc0d30f68f94dc6bafd79e4b9ba2f68" target="_blank">财务规划</a>&nbsp;和分析(FP&amp;A)的方法。利用arcplan Edge&ldquo;细节的支持性&rdquo;的功能，各部门管理人员可以在他们提出的预算中记录信息的来源并发表评论，它们可以是项目的计算，他们自己的解释，文件或在线服务等。arcplan Edge的评论能力，使定性信息和注释等细节内容可以填加到流程的各个环节中。</p>
										</div>
									</div>
									<div class="tab-pane" id="provider-product-4">
										<div class="paragraph-set">
											<h2>arcplan Engage</h2>
											<h2>可协作的商业智能</h2>
											<p><a href="http://arcplanet.cn/products/resources/?fileID=112" target="_blank"><img class="PicLeft" src="http://arcplanet.cn/uploads/RTEmagicC_arcplan_Engage_80px.png.png" border="0" alt="" title="Collaborative BI | Next generation BI | BI 2.0" width="80" height="80" /></a></p>
											<p><b>arcplan Engage(R)</b>&nbsp;可以帮助企业内部的所有用户（上到决策制定者，下到普通BI用户）拥有所有所需信息的，从而高效得制定各层面的决策。 arcplan的<b>全新下一代BI解决方案</b>将传统的BI技术与众所周知的Web 2.0中的交流互动与知识共享功能有机的结合起来，服务于用户日益增长的协同合作性质的商业智能应用。</p>
											<p><img class="PicRight" src="http://arcplanet.cn/fileadmin/images/Products/Screenshots/aEngage_Search_results_with_Widgets_200px.jpg" border="0" alt="" width="200" height="190" />arcplan Engage允许用户通过简便的搜索功能在arcplan应用、SharePoint和其他BI应用中发掘企业内部有价值的信息。用户可以浏览、评价、投票或者分享他们的新发现，从而加快并完善决策制定流程。</p>
											<p>您的企业是否正在使用<b>多种不同的BI产品（应用）</b>？arcplan Engage是现今唯一的一款不受任何一家BI厂商环境限制的<a href="http://arcplanet.cn/about-us/glossary/glossary-details/?tx_a21glossary%5Buid%5D=27&amp;cHash=b6afb78848a184dba75b1c0771b29c8e" target="_blank">协作型BI</a>&nbsp;解决方案，同时，他还可以整合种类繁多的BI应用内容以及非结构化信息到协同化的工作流当中。</p>
											<p>用户甚至可以通过一个简单的点击操作（&ldquo;Engage it!&rdquo;）<b>添加他们自己的内容来丰富这个系统</b>（例如网页）。用户可以通过这种方式在搜索结果中获取传统BI决策所需要的信息。添加的内容同样可以进行评论和排名。</p>
											<p>熟悉Facebook、Twitter和LinkedIn的用户可以快速开始使用这些功能，并可以将经验分享给其他未经过培训的用户。</p>
											<h3>个性化分析&ndash; 个人BI桌面</h3>
											<p>rcplan Engage是行业内无与伦比的个性化功能。用户可以简单的将现有的arcplan应用、管理驾驶舱等剪切下来，设置个性化过滤条件，然后将他们作为小的插件放到<b>个人桌面</b>&nbsp;&ndash;&nbsp;<b>BI Wall</b>。用户可以通过点击做好的小插件直接钻取到BI Wall。</p>
											<p>为了更好地满足高级数据分析专家的需求，arcplan Engage中嵌入了完整的<a href="http://arcplanet.cn/products/arcplan-spotlight/" target="_blank">arcplan Spotlight</a>，方便用户对数据进行<b>个性化的即席查询分析</b>并可以将结果保存以备将来查看，还可以将其放到BI Wall上，每次打开arcplan Engage时就可以直接看到分析内容。</p>
											<p></p>
										</div>
									</div>

									<div class="tab-pane" id="provider-product-5">
										<div class="paragraph-set">
											<h2>arcplan Excel Analytics</h2>
											<h2>针对Microsoft Office的查询、分析与数据回写</h2>
											<p><a href="http://arcplanet.cn/products/resources/?fileID=22" target="_blank"><b><img class="PicLeft" src="http://arcplanet.cn/fileadmin/images/Products/Logos/arcplan_Excel_Analytics_80px.png" border="0" alt="" title="The power of Excel combined with central Data Warehouse" width="80" height="80" /></b></a></p>
											<p><b>arcplan Excel Analytics(R)</b>&nbsp;将arcplan的强大的分析能力通过arcplan应用与功能无缝的集成扩展至Microsoft Excel中。arcplan Excel Analytics提高了arcplan的部署能力和ad-hoc分析能力，并且将arcplan对于多数据源的接入能力扩展至人们熟悉的Microsoft Excel环境。</p>
											<p><a href="http://arcplanet.cn/fileadmin/images/Products/Screenshots/arcplan-Excel-Analytics_1054px.JPG" target="_blank"><img class="PicRight" src="http://arcplanet.cn/uploads/RTEmagicC_arcplan-Excel-Analytics_1054px.JPG.jpg" border="0" alt="" width="232" height="157" /></a></p>
											<p>arcplan&nbsp;<b>Excel Analytics&nbsp;</b>可以轻松的在整个企业内部署并扩展，并且使用者可以利用企业数据做细致的分析，同时在有需要的情况下可以直接将数据回写到数据库，而且也符合IT部门对数据安全与集中控制的需要。</p>
											<h3>强大的功能</h3>
											<p>利用arcplan Excel Analytics, 业务人员，分析师，IT职员与管理者可以 ...</p>
											<p>直接将arcplan的应用，查询或对象输出到Microsoft Excel建立符合IT规范与标准的集中且安全的Excel应用灵活的从arcplan Web应用直接跳转到相关的Excel分析，并且同时保持与arcplan应用和数据源的连接对arcplan应用的内容做离线分析通过Excel连接所有主流的数据库和BI系统在arcplan应用的基础上在Excel表中做ad-hoc分析</p>
											<p>利用arcplan Excel Analytics，使用者可以利用Excel的优势对嵌入的功能做进一步的查询，分析，或者是编辑数据。arcplan Excel Analytics可以允许使用者将多维数据集成到Excel中，例如<b>SAP, Oracle, IBM, Microsoft</b>&nbsp;等等，同时作为数据源的Excel嵌入工具。<br /><br />由于在企业内部Excel使用极为广泛，用户现在可以在一个Excel的环境中浏览分析企业的内部的所有绩效数据，并且基于一个统一真实可靠的数据信息作实时的业务决策。&nbsp;</p>
										</div>
									</div>

									<div class="tab-pane" id="provider-product-6">
										<div class="paragraph-set">
											<h2>arcplan Mobile</h2>
											<h2>针对Microsoft Office的查询、分析与数据回写</h2>
											<p><a href="http://arcplanet.cn/products/resources/?fileID=22" target="_blank"><b><img class="PicLeft" src="http://arcplanet.cn/fileadmin/images/Products/Logos/arcplan_Excel_Analytics_80px.png" border="0" alt="" title="The power of Excel combined with central Data Warehouse" width="80" height="80" /></b></a></p>
											<p><b>arcplan Excel Analytics(R)</b>&nbsp;将arcplan的强大的分析能力通过arcplan应用与功能无缝的集成扩展至Microsoft Excel中。arcplan Excel Analytics提高了arcplan的部署能力和ad-hoc分析能力，并且将arcplan对于多数据源的接入能力扩展至人们熟悉的Microsoft Excel环境。</p>
											<p><a href="http://arcplanet.cn/fileadmin/images/Products/Screenshots/arcplan-Excel-Analytics_1054px.JPG" target="_blank"><img class="PicRight" src="http://arcplanet.cn/uploads/RTEmagicC_arcplan-Excel-Analytics_1054px.JPG.jpg" border="0" alt="" width="232" height="157" /></a></p>
											<p>arcplan&nbsp;<b>Excel Analytics&nbsp;</b>可以轻松的在整个企业内部署并扩展，并且使用者可以利用企业数据做细致的分析，同时在有需要的情况下可以直接将数据回写到数据库，而且也符合IT部门对数据安全与集中控制的需要。</p>
											<h3>强大的功能</h3>
											<p>利用arcplan Excel Analytics, 业务人员，分析师，IT职员与管理者可以 ...</p>
											<p>直接将arcplan的应用，查询或对象输出到Microsoft Excel建立符合IT规范与标准的集中且安全的Excel应用灵活的从arcplan Web应用直接跳转到相关的Excel分析，并且同时保持与arcplan应用和数据源的连接对arcplan应用的内容做离线分析通过Excel连接所有主流的数据库和BI系统在arcplan应用的基础上在Excel表中做ad-hoc分析</p>
											<p>利用arcplan Excel Analytics，使用者可以利用Excel的优势对嵌入的功能做进一步的查询，分析，或者是编辑数据。arcplan Excel Analytics可以允许使用者将多维数据集成到Excel中，例如<b>SAP, Oracle, IBM, Microsoft</b>&nbsp;等等，同时作为数据源的Excel嵌入工具。<br /><br />由于在企业内部Excel使用极为广泛，用户现在可以在一个Excel的环境中浏览分析企业的内部的所有绩效数据，并且基于一个统一真实可靠的数据信息作实时的业务决策。&nbsp;</p>
										</div>
									</div>
									
									<!-- <div class="tab-pane" id="provider-product-7">
										<div class="paragraph-set">
											<h2>arcplan Spotlight</h2>
											<h2>基于浏览器的功能强大的Ad-Hoc即席查询分析</h2>
											<p><b><a href="http://arcplanet.cn/fileadmin/images/Products/Screenshots/arcplan_Spotlight_Interface.jpg" target="_blank"><img class="PicLeft PicRight" src="http://arcplanet.cn/uploads/RTEmagicC_arcplan_Spotlight_Interface_200px.jpg.jpg" border="0" alt="" title="Flexible ad-hoc analysis by arcplan | arcplan Spotlight" width="200" height="143" /></a></b></p>
											<p><b>arcplan Spotlight</b>&nbsp;是一个自助分析解决方案，帮助用户动态创建报表、进行操作并快速完成查询。作为arcplan的第一个ad-hoc解决方案可以帮助用户连接各种多维数据仓库（OLAP），不用复杂的BI工具就可以动态查询关键指标。这样可以让用户尽量将时间用在分析数据上，而不用在大量的报表中查找。</p>
											<p>arcplan Spotlight可以通过间接的方式连接到您企业的数据仓库，浏览&ldquo;实时&rdquo;数据。他可以将普通的Dashboards无法获取的隐藏在多维系统的信息无缝的展现出来。他支持arcplan<a href="http://arcplanet.cn/products/enterprise/data-interoperability/" target="_blank">数据源列表</a>中所有的OLAP数据源。</p>
											<p>通过arcplan Spotlight，用户可以轻而易举的从不同角度以图表相结合的方式分析数据。用户还可以：</p>
											<p>可以立即选择适当的方法和维度查看数据便捷地通过拖拽方式添加或删除元素将数据定制成符合个人喜好的样式 &ndash; 创建您自己的报表通过发布的方式可以存储和共享报表通过数据动态连接arcplan Server，获取实时数据可以快速将报表导出到Excel和PDF文档，或者打印报表</p>
										</div>
									</div> -->

								</div>
								
							</div>
							<div class="tab-pane" id="product-solution">
								
							</div>
							<div class="tab-pane" id="product-about">
								
							</div>
							<div class="tab-pane" id="product-cases">
								
							</div>
							<div class="tab-pane" id="product-demo">
								
							</div>
							<div class="tab-pane" id="product-download">
								
							</div>
							<div class="tab-pane" id="product-courses">
								
							</div>
							<div class="tab-pane" id="product-services">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include (COMMON_PATH . '/footer.php'); ?>
	</body>
</html>