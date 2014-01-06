function retrieveInfo () {
	var provider_id = getParameterByName('id');
	var providerObject = {};
	provider_id = typeof provider_id !== 'undefined' ? provider_id : 70;
	$.ajax({
		url: '../ajax/ppfilter.php',
		type: 'POST',
		async: false,
		data: {'filter_type': 'ajax_ppaccess_get_provider_info_by_id', 'id': provider_id},
		dataType: 'json',
		timeout: 15000,
		success: function(data, textStatus, xhr) {
			providerObject = data.data;
		},
		error: function(xhr, textStatus, errorThrown) {
			// retrieveListOfProvider();
			// alert('Down');
		}
	});
}