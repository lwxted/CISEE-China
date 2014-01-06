<?php 
	require_once ('../initialize.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include (COMMON_PATH . '/header.php'); ?>
		<?php use_css ('style_partners.css');?>
		<?php use_css('style_account.css'); ?>
		<?php use_js ('partners.js');?>
		<?php use_js('account.js');?>
	</head>
	
	<body>
		<div class="footerfix">
			<?php include (COMMON_PATH . '/navigation.php') ?>
			<div class="content clearfix">
				<div class="width-limit clearfix">
					<div class="main-content clearfix">
						<ul class="nav nav-tabs" id="partnersTabs">
							<li class="active"><a href="#partners-join" data-toggle="pill">加盟合作</a></li>
						 	<li><a href="#partners-reseller" data-toggle="pill">分销代理</a></li>
							<li><a href="#partners-var" data-toggle="pill">增值代理</a></li>
							<li><a href="#partners-tech-partners" data-toggle="pill">技术伙伴</a></li>
							<li><a href="#partners-referral-partners" data-toggle="pill">转介绍</a></li>
							<li><a href="#partners-coop" data-toggle="pill">厂商合作</a></li>
							<li><a href="#partners-login" data-toggle="pill">联盟会员</a></li>
						</ul>
						 
						<div class="tab-content">
							<div class="tab-pane active" id="partners-join">
								<div class="paragraph-set">
									<h2>加盟合作概览</h2>
									<p><b>Partnering with Bigdataunion</b></p>
									<p>1 + 1 = 3. That’s how Bigdataunion feels about our partners. Together we can achieve things that separately wouldn’t be possible. </p>
									<p>We’re committed to building long term business and technology partnerships with innovative consulting and professional services companies and leading technology companies with the goal of building value for our collective customers.</p>
									<p>Bigdataunion partners with five types of organizations:</p>
									<ol>
										<li>Reseller Partners</li>
										<li>VAR Partners</li>
										<li>Technology Partners</li>
										<li>Referral Partners</li>
										<li>Products Partners</li>
									</ol>
									<p>If you are interested in partnering, or simply want to learn more about the Bigdataunion Partner Program, we’d love to hear from you. Complete our <a href="./form.php">Partner Form</a> and let’s get a conversation started.</p>
								</div>
								<div class="paragraph-set">
									<p><b>Reseller Partners</b></p>
									<p>Bigdataunion Reseller Partners market and sell our software, usually with their own services as part of the solution. <a href="#" class="partners-detail" data-toggle="partners-reseller">Learn More &rsaquo;</a></p>
									<p><b>VAR Partners</b></p>
									<p>Bigdataunion VAR Partners include systems integrators, BPO firms,  and audit and advisory firms of all sizes who need to be experts in our powerful, agile analytic solutions. <a href="#" class="partners-detail" data-toggle="partners-var">Learn More &rsaquo;</a></p>
									<p><b>Referral Partners</b></p>
									<p>Bigdataunion Referral Partners recommend Bigdataunion products to their customers and earn valuable referral fees for sending opportunities to Bigdataunion . <a href="#" class="partners-detail" data-toggle="partners-referral-partners">Learn More &rsaquo;</a></p>
									<p><b>Technology Partners</b></p>
									<p>Bigdataunion Technology Partners offer complementary technologies that our customers want to leverage, and we work with them to make sure our products play nicely with each other.  <a href="#" class="partners-detail" data-toggle="partners-tech-partners">Learn More &rsaquo;</a></p>
									<p><b>Products Partners</b></p>
									<p>Bigdataunion Products Partners offer exclusive agent and reseller in China and Asia. <a href="#" class="partners-detail" data-toggle="partners-coop">Learn More &rsaquo;</a></p>
								</div>
							</div>

							<div class="tab-pane" id="partners-reseller">
								<div class="paragraph-set">
									<h2>分销代理</h2>
									<p>Reseller Partners are licensed to sell and market Bigdataunion products directly to their customers and prospects. The goal of the reseller program is to bring the same powerful bigdata products  and immediate ROI that Bigdataunion’s direct customers enjoy to a much broader base of customers. </p>
									<p>To ensure our reseller partners’ success, Bigdataunion is highly selective in whom it selects and then invests heavily to ensure rapid ramp-up and commercial success. </p>
									<p>If you’re not serious about building a significant business based on Bigdataunion’s software, let’s both find something better to do with our time.</p>
									<p>Benefits of becoming a Bigdataunion Reseller Partner include:</p>
									<ol>
										<li>Bigdataunion‘s product training and reseller certification</li>
										<li>Demonstration and customer trial licenses of Bigdataunion Desktop software at no cost</li>
										<li>Access to Bigdataunion’s extensive marketing, sales enablement, and sales support assets</li>
										<li>Joint Go-To-Market planning sessions and co-branded demand creation activities</li>
									</ol>

									<p>Participation in the Bigdataunion Reseller program is also available to Consulting partners and Technology partners to add an exciting revenue opportunity to the list of advantages of their partnership with Bigdataunion.</p>
								</div>

								<table class="table-partners-reseller table table-bordered table-striped">
									<thead>
										<tr>
											<th>合作级别</th>
											<th>要求</th>
											<th>大数据联盟提供的服务</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>钻石代理</td>
											<td>年分销额 > 500 万元</td>
											<td>完成 Quota 返 5%</td>
										</tr>
										<tr>
											<td>金牌代理</td>
											<td>年分销额 > 300万元，3个以上的产品线技术人员，5个以上销售人员</td>
											<td>完成 Quota 返 4%，技术销售人员免费培训、销售工具包、方案、DEMO、直接技术支持</td>
										</tr>
										<tr>
											<td>银牌代理</td>
											<td>年分销额 > 100万元以上，2个以上的产品线技术人员，3个以上销售人员</td>
											<td>完成 Quota 返 3%，技术销售人员免费培训、销售工具包、方案、DEMO、重大项目技术支持</td>
										</tr>
										<tr>
											<td>铜牌代理</td>
											<td>年分销额 > 50万元， 1个以上的产品线技术人员，2个以上销售人员</td>
											<td>完成 Quota 返 2%，技术销售人员免费培训、销售工具包、方案</td>
										</tr>
										<tr>
											<td>经销商</td>
											<td>1个以上销售人员</td>
											<td>技术销售人员免费培训、销售工具包</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="tab-pane" id="partners-var">
								<div class="paragraph-set">
									<h2>增值代理</h2>
									<p>Partnering with Bigdataunion enables you to differentiate their service offerings from the competition while expanding the scope of your engagements. </p>
									<p>The visual nature of our software and the agile methodology that it enables for the design, implementation, and automation of complex business process analytics enable you to engage with your clients on many different levels, from C-level executives to business analysts. This leads to improved project efficiency, expanded customer engagements, new and innovative services offerings, and, ultimately, to a healthier bottom line. </p>
									<p>Bigdataunion offers several partnership models for solution partners, all with simple and flexible terms designed to make it easy to become a Bigdataunion partner and shorten the path to joint commercial success:</p>
									<ol>
										<li><b>Licensed Delivery Model</b> -- Delegates license Bigdataunion software tools for their own use in revenue-generating activities with clients.</li>
										<li><b>Licensed Hosted Model</b> -- Delegates license software for use in delivering revenue-generating hosted analytic solution to clients.</li>
										<li><b>Referral Option</b> -- The referral option is available to all Bigdataunion delegates and provides a generous referral fee upon deal closure for any client opportunity referred by the partner to Bigdataunion.</li>
										<li><b>Reseller Option</b> -- All Bigdataunion delegates also have the option to become resellers of Bigdataunion software.</li>
									</ol>
									<p>No matter which partnership model best fits your needs, as a Bigdataunion delegate you can count on Bigdataunion to provide:</p>
									<ol>
										<li>Demonstration and customer trial licenses of Bigdataunion Desktop software at no cost</li>
          								<li>Bigdataunion's product training and reseller certification</li>
										<li>Access to Bigdataunion’s extensive marketing, sales enablement, and sales support assets</li>
										<li>Joint Go-To-Market planning sessions and co-branded demand creation activities</li>
									</ol>
									<p>If you are interested in partnering, or simply want to learn more about the Bigdataunion Partner Program, we’d love to hear from you. Complete our <a href="./form.php">Partner Form</a> and let’s get a conversation started.</p>
								</div>
							</div>

							<div class="tab-pane" id="partners-tech-partners">
								<div class="paragraph-set">
									<h2>技术伙伴</h2>
									<p>Bigdataunion Technology Partners include Interoperability partners, Go-To-Market partners, and OEM partners.  What all Bigdataunion  Technology Partners have in common is their spirit of innovation and their desire to deliver the potential of analytics to customers.</p>
									<p>Bigdataunion  brings value to technology partners through: </p>
									<ol>
										<li>Development licenses and documentation</li>
										<li>Engineering technical support</li>
										<li>Joint use case and common customer case study development</li>
										<li>Joint Go-To-Market planning, where applicable</li>
										<li>Collaborative customer events and other demand creation activities, where applicable</li>
									</ol>
									<p>If you are interested in partnering, or simply want to learn more about the Bigdataunion Partner Program, we’d love to hear from you. Complete our <a href="./form.php">Partner Form</a> and let’s get a conversation started.</p>
								</div>
							</div>

							<div class="tab-pane" id="partners-referral-partners">
								<div class="paragraph-set">
									<h2>转介绍</h2>
									<p>Referral Partners recommend Bigdataunion products to their customers and earn valuable referral commissions for sending opportunities to Bigdataunion . The process couldn’t be easier – Referral partners simply register opportunities with Bigdataunion , and Bigdataunion  salespeople get involved directly with the customer. Bigdataunion and the Referral partner continue to work closely together on joint aspects of the customer opportunity, with the goal being productive collaboration and happy clients.</p>
									<p>Benefits of becoming a Bigdataunion  Referral Partner include:</p>
									<ol>
										<li>Demonstration and customer trial licenses of Bigdataunion Desktop software at no cost</li>
										<li>Access to Bigdataunion ’s extensive marketing, sales enablement, and sales support assets</li>
										<li>Joint Go-To-Market planning sessions and co-branded demand creation activities</li>
									</ol>
									<p>If you are interested in partnering, or simply want to learn more about the Bigdataunion Partner Program, we’d love to hear from you. Complete our <a href="./form.php">Partner Form</a> and let’s get a conversation started.</p>
								</div>
							</div>

							<div class="tab-pane" id="partners-coop">
								<div class="paragraph-set">
									<h2>厂商合作</h2>
									<p>Bigdataunion Products Partners offer exclusive agent and reseller in China and Asia.</p>
								</div>
								<table class="table-partners-coop table table-bordered table-striped">
									<thead>
										<tr>
											<th>合作级别</th>
											<th>大数据联盟提供的服务</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>排他性总分销代理</td>
											<td>
												<ol>
													<li>一年 > 36次以上全国巡展，12次以上全国性展会、沙龙论坛</li>
													<li>联盟主推产品，主要行业和省市区域渠道代理30家以上</li>
													<li>媒体广告投放 > 12次</li>
													<li>免费在联盟广告二年</li>
													<li>联盟专职技术4名以上，支持技术8人以上</li>
													<li>联盟专职销售人员5人以上，销售15人以上</li>
													<li>产品完全的翻译包装，列入推介认证产品库</li>
													<li>网上顶级链接、专版单产品推介</li>
													<li>半年后专题性巡展、会展、广告收费50%折扣</li>
												</ol>
											</td>
										</tr>
										<tr>
											<td>二家内的总分销代理</td>
											<td>
												<ol>
													<li>一年 > 24次以上巡展，6次以上全国性展会、沙龙论坛</li>
													<li>联盟主推产品，主要行业和省市区域渠道代理20家以上</li>
													<li>媒体广告投放 > 6次</li>
													<li>免费在联盟广告一年</li>
													<li>联盟专职技术3名以上，支持技术6人以上</li>
													<li>联盟专职销售人员3人以上，销售10人以上</li>
													<li>产品完全的翻译包装，列入推介认证产品库</li>
													<li>网上链接推介</li>
													<li>半年后巡展、会展、广告收费50%折扣</li>
												</ol>
											</td>
										</tr>
										<tr>
											<td>三家内的总分销代理</td>
											<td>
												<ol>
													<li>一年 > 12次以上巡展，3次以上全国性展会、沙龙论坛</li>
													<li>联盟主推产品，主要行业和省市区域渠道代理10家以上</li>
													<li>媒体广告投放 > 3次</li>
													<li>免费在联盟广告半年</li>
													<li>联盟专职技术1名以上，支持技术4人以上</li>
													<li>联盟专职销售人员3人以上，销售5人以上</li>
													<li>产品完全的翻译包装，列入推介认证产品库</li>
													<li>网上链接推介</li>
													<li>巡展、会展、广告收费50%折扣</li>
												</ol>
											</td>
										</tr>
										<tr>
											<td>厂商产品宣传市场推介</td>
											<td>
											<ol>
												<li>每次巡展50人以上，专场收费5000美元，二家收费2500美元，三家以上收费1000美元</li>
												<li>每次巡展20人以上，专场收费3000美元，二家收费1500美元，三家以上收费800美元</li>
												<li>国家级媒体广告投放，专版收费5000美元，二家收费2500美元，三家以上收费1000美元</li>
												<li>省市行业媒体广告投放，专版收费3000美元，二家收费1500美元，三家以上收费1000美元</li>
												<li>Bigdataunion上广告专版 5000 美元 / 半年，50%版面 2500 美元 / 半年，25%版面 1000 美元 / 半年，10*6广告 1000 美元/ 一年</li>
												<li>全国性会展：主推厂商产品2000美元，推介厂商产品1000美元</li>
												<li>厂商产品翻译包装,在推荐认证产品栏发布2000美元</li>
												<li>厂商产品翻译包装,在厂商产品库发布1000美元</li>
												<li>主要IT媒体网上链接推介1000美元</li>
												<li>1--5项可免费享有8、9项免费</li>
											</ol>
										</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="tab-pane" id="partners-login">
								<form class="form clearfix" id="login-form">
									<p class="text-success form-notice">
										<?php
											if (isset($_GET['registered']) && $_GET['registered'] == 1)  {
												echo __('您现在可用刚注册的账号登陆了。');
											}
											if (isset($_GET['loggedout']) && $_GET['loggedout'] == 1)  {
												echo __('您已成功登出。');
											}
										?>
									</p>
									<div class="form-title"><?php _t('登陆')?></div>
									
									<label><?php _t('用户名')?> </label><input name="username" type="text">
									<label><?php _t('密码')?> </label><input name="password" type="password">
									
									<label class="checkbox inline pull-right">
										<input type="checkbox" name="remember-me" value="1">记住我的登陆信息
									</label>
									
									<input type="hidden" name="last_login" value="<?php echo date ("Y-m-d H:i:s")?>">
									<input type="hidden" name="last_ip" value="<?php echo get_server_ip(); ?>">
									<p class="text-error form-error"></p>
									<button type="submit" class="btn submit pull-right"><?php _t('提交')?><div class="loading" style="display: none;"></div></button>
								</form>
							
								<div id="hint-register">
									<p id="hint"><a href="./register.php">还没有账号？现在去创建一个 &rsaquo;</a></p>
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