var prevFilterName = '';
var firstTimeVisit = true;
var requestedPage = 1;

function searchSubmitted () {

	var selectedFilters = $('.filters-nav .selected');
		var urlString = "../ajax/ppfilter.php";
		var queryObject = {};
		var industryArray = new Array ();
		var applicationArray = new Array ();
		var platformArray = new Array ();
		queryObject['filter_type'] = 'ajax_ppaccess_get_providers_by_search';
		$.each(selectedFilters, function(index, val) {
			if ($(val).hasClass('filter-industry')) {
				industryArray.push($(val).attr('data'));
			} else if ($(val).hasClass('filter-platform')) {
				platformArray.push($(val).attr('data'));
			} else if ($(val).hasClass('filter-application')) {
				applicationArray.push($(val).attr('data'));
			}
		});
			queryObject['industry'] = industryArray;
			queryObject['application'] = applicationArray;
			queryObject['platform'] = platformArray;
			queryObject['page'] = requestedPage;
		var query = new Array ("QUERY", queryObject);
		$('.form-result').html('<div class="loading"> </div>');
		formProcess (".filters-nav", false, urlString, query, function() {
		}, function(error_code) {
			if (error_code === 2000) {
				$('span.count').text('0');
				$('.result-count').show();
				$('.form-result').hide();
				$('.pagination').hide();
			}
		}, function(data) {
			var resultHTML = '';
			var providers = data.providers;
			resultHTML += '<div class="provider-list clearfix">';
			for (var i = 0; i < providers.length; i++) {
				resultHTML += '<div class="provider-section">';
				resultHTML += '	<div class="provider-logo">';
				if (providers[i].profile_pic_addr === 'nil') {
					resultHTML += '		<div class="logo" style="background-image: url(../assets/img/' + 'logo-default.png)"></div>';
				} else {
					resultHTML += '		<div class="logo" style="background-image: url(../contents/dynamic/logo/' + providers[i].id + '.' + providers[i].profile_pic_addr + ')"></div>';
				}
				resultHTML += '	</div>';
				resultHTML += '	<div class="provider-info">';
				resultHTML += '		<div class="provider-name">' + providers[i].name + '</div>';
				if (providers[i].telephone !== '') {
					// resultHTML += '		<div class="provider-tel"><span class="label">电话</span>' + providers[i].telephone + '</div>';
				}
				if (providers[i].website !== '') {
					resultHTML += '		<div class="provider-website"><span class="label">网址</span><a href="' + providers[i].website + '">' + providers[i].website  + '</a></div>';
				}
				resultHTML += '		<div class="provider-intro"><span class="label">简介</span>' + providers[i].provider_intro_eng + '</div>';
				resultHTML += '	</div>';
				resultHTML += '</div>';
			};
			resultHTML += '</div>'
			$('span.count').text(data.result_count);
			$('.form-result').html(resultHTML);
			$('.result-count').show();
			$('.form-result').show();
			if (!firstTimeVisit) {
				 // $('html, body').animate({
				 // 	scrollTop: 0
				 // }, 0);
			} else {
				firstTimeVisit = false;
			}
		    var pag = '';
		    if (data.result_count > 20) {
		    	var totalPage = Math.ceil(data.result_count / 20);
		    	if (requestedPage == 1) {
					pag += '<li class="disabled"><span class="page-switcher" data="-1"> 1 </span></li>';
		    	} else {
		    		pag += '<li><span class="page-switcher" data="1"> 1 </span></li>';
		    	}
		    	if (requestedPage - 4 - 1 > 1) {
			    	pag += '<li class="disabled"><span class="page-switcher" data="-1"> ... </span></li>';
		    	}
		    	var endCount = Math.min(requestedPage + 4, totalPage - 1);
		    	for (var i = Math.max(2, requestedPage - 4); i <= endCount; i++) {
		    		if (i == requestedPage) {
						pag += '<li class="disabled"><span class="page-switcher" data="-1">' + i + '</span></li>';
		    		} else {
		    			pag += '<li><span class="page-switcher" data="' + i + '">' + i + '</span></li>';
		    		}
		    	};

		    	if (totalPage - (requestedPage + 4) > 1) {
		    		pag += '<li class="disabled"><span class="page-switcher" data="-1"> ... </span></li>';
		    	}
		    	if (requestedPage == totalPage) {
					pag += '<li class="disabled"><span class="page-switcher" data="-1">' + totalPage + '</span></li>';
		    	} else {
		    		pag += '<li><span class="page-switcher" data="' + totalPage + '">' + totalPage + '</span></li>';
		    	}
		    	$('.pagination ul').html(pag);
		    	$('.pagination').show();
		    } else {
		    	$('.pagination').hide();
		    }
		});
}

$(function(){
	// We know this is not cool, but doing this for now.
	// We are supposing that we are searching everything when nothing is selected.
	
	searchSubmitted();

	// Forcefully showing the first group of selectors by default.
	var showClass = '.filter-industry_internet_ad_rtb';
	$(showClass).show();
	$('.filters-application').show();
	$('.filter-cell').click(function() {
		if ($(this).hasClass('selected')) {
			// If the current filter cell is selected,
			// when it is again clicked,
			// deselect it.
			// 
			// Also, if the selected filter cell is one of the filters
			// industries, fade out the filters application section.
			$(this).removeClass('selected');
			if ($(this).hasClass('filter-industry')) {
				// $('.filters-application').fadeOut();
			}
		} else {
			if ($(this).hasClass('filter-industry')) {
				$('.filters-industry .selected').removeClass('selected');
				$(this).addClass('selected');
				// var showClass = '.filter-' + $(this).attr('data');
				// As requested, this is defaulting as the first group of selectors.
				
				if (prevFilterName) {
					// $('.filters-application').fadeOut();
					// $(prevFilterName).fadeOut();
				}
				var a = $(showClass);
				if ($(showClass).length !== 0) {
					$('.filters-application').fadeIn();
					$(showClass).fadeIn();
				} else {
					// $('.filters-application').fadeOut();
				}
				prevFilterName = showClass;
			} else {
				$(this).addClass('selected');
			}
		}
	});
	$(document).on('click', '.filters-nav .submit', function(){
        requestedPage = 1;
		searchSubmitted();
    });
	$(document).on('click', '.page-switcher', function(){
        var page = parseInt(this.getAttribute('data'));
        if (page !== -1) {
        	requestedPage = page;
        	searchSubmitted();
        }
    });
});

