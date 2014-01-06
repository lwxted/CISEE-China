<?php 
	require_once ('../initialize.php');
	global $user;
	$user->confirm_logged_in(100);
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include (COMMON_PATH . '/header.php'); ?>
		<?php use_css ('style_manage.css');?>
		<?php use_js ('manage.js'); ?>
		<?php use_js ('tinymce/tinymce.min.js'); ?>
		<script type="text/javascript">
			retrieveListOfProvider();
			tinymce.init({
				selector: "#new-service-form textarea",
				height : 400,
				menubar : false,
				fix_list_elements : true,
				protect: [
			        /\<\/?(if|endif)\>/g, // Protect <if> & </endif>
			        /\<xsl\:[^>]+\>/g, // Protect <xsl:...>
			        /<\?php.*?\?>/g // Protect php code
			    ],
			    plugins: ['paste', 'preview', 'table', 'link', 'image'],
			    paste_auto_cleanup_on_paste : true,
			    paste_remove_styles: true,
            	paste_remove_styles_if_webkit: true,
            	paste_strip_class_attributes: true,
            	style_formats : [
			        {title : '主标题', block : 'h2'},
			        {title : '副标题', block : 'h3'},
			        {title : '段落文字', block : 'p'},
			        {title : '粗体', inline: 'b'},
			        {title : '斜体', inline: 'em'}
			    ],
			    language : "zh_CN",
			    toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter | bullist numlist | image link | preview",
			    valid_elements : "img[class|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name],a[href|target=_blank],strong/b,div[align],br,h2,h3,p,b,em,table,tbody,thead,tr,td"
			});
		</script>
	</head>
	<body>
		<div class="footerfix">
			<?php include (COMMON_PATH . '/navigation.php') ?>
			<div class="content clearfix">
				<div class="width-limit">
					<div class="main-content clearfix">
						<ul class="nav nav-tabs" id="manageTabs">
							<li class="active"><a href="#new-service" data-toggle="pill">新增产品</a></li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane active" id="new-service">
								<form class="form clearfix" id="new-service-form">
									<div class="alert alert-success" style="display:none;"></div>
									<div class="form-title"><?php _t('新增条目')?></div>
									<label><?php _t('产品名称')?> </label><input name="name" type="text">
									<label><?php _t('产品提供商')?> </label>
									<select name="provider_name" class="selectpicker">
										<option value="0">----- 请选择产品提供商 ----- </option>
										<script type="text/javascript">
											writeListOfProviders();
										</script>
									</select>
									<label><?php _t('类型')?> </label>
									<select name="service_type" class="selectpicker">
										<option value="0">----- 请选择条目类型 ----- </option>
										<option value="product"><?php _t('产品')?></option>
										<option value="solution"><?php _t('方案')?></option>
										<option value="description"><?php _t('资料')?></option>
										<option value="case"><?php _t('案例')?></option>
										<option value="demo"><?php _t('Demo')?></option>
										<option value="download"><?php _t('软件下载')?></option>
										<option value="service"><?php _t('服务')?></option>
									</select>
									<label><?php _t('描述')?> </label>
									<textarea></textarea>
									<div class="alert alert-error form-error" style="display:none;"></div>
									<button type="submit" class="btn submit pull-right"><?php _t('提交')?><div class="loading" style="display: none;"></div></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include (COMMON_PATH . '/footer.php'); ?>
	</body>
</html>