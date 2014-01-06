$(function(){
	$('.partners-detail').click(function () {
		$('.active').removeClass('active');
		$('#' + this.getAttribute('data-toggle')).addClass('active');
		element = $('a[href="#' + this.getAttribute('data-toggle') + '"]');
		$(element[0].parentNode).addClass('active');
	});
});