var dataObject = {};

function retrieveListOfProvider () {
	$.ajax({
		url: '../ajax/manage.php',
		type: 'POST',
		async: false,
		data: {'manage_type': 'ajax_list_of_providers'},
		dataType: 'json',
		timeout: 15000,
		success: function(data, textStatus, xhr) {
			dataObject = data.data;
		},
		error: function(xhr, textStatus, errorThrown) {
			// retrieveListOfProvider();
			// alert('Down');
		}
	});
}

function writeListOfProviders () {
	if (! $.isEmptyObject(dataObject)) {
		for (var i = 0; i < dataObject.length; i++) {
			document.write('<option value="' +dataObject[i] + '">' + dataObject[i] + '</option>');
		}
	}
}

$(function(){
	/**
	 * Process the new service form.
	 */
	$('#new-service-form').submit(function(){
		var urlString = "../ajax/manage.php";
		var dataObject = {};
		dataObject['name'] = $('input[name="name"]').val();
		dataObject['provider_name'] = $('select[name="provider_name"]').val();
		dataObject['service_type'] = $('select[name="service_type"]').val();
		dataObject['description'] = tinyMCE.activeEditor.getContent();
		dataObject['manage_type'] = 'ajax_manage_add_service';
		var inputs = ['QUERY', dataObject];
		formProcess ("#new-service-form", false, urlString, inputs, function() {
			$('#new-service-form .alert-success').text('已成功添加至数据库！');
			$('#new-service-form .alert-success').show();
			$('html, body').animate({
				 	scrollTop: $("#new-service-form .alert-success").offset().top - 30
				 }, 0);
			$('input').val('');
			$('select').val('0');
			tinyMCE.activeEditor.setContent('');
		},
		function () {
			$('#new-service-form .alert-success').text('');
			$('#new-service-form .alert-success').hide();
		});
		return false;
	});
});