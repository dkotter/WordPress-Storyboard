jQuery(document).ready(function() {
	jQuery.ajaxSetup({cache:false});
	jQuery('#post-nav a').click(function(e) {
		e.preventDefault();
		
		var page = jQuery(this).attr('href');
		page = page.split('/');
		page = page[4];
		//page = page.charAt(page.length-2);
		page = page.charAt(page.length-2);
		var data = '?page=' + page;
		
		jQuery('.container').html('<img src="assets/ajax-loader.gif" alt="Loading...">');
		jQuery('.container').fadeOut('slow', function() {
			jQuery(this).load('update/' + data, function() {
				jQuery(this).fadeIn('slow');
			});
			return false;
		});
		
		jQuery('#sidebar li').removeClass();
		jQuery('#sidebar li').filter(function() {
    		return jQuery(this).text() === page;
		}).addClass('active');
	});
	jQuery('#sidebar ol li').click(function(e) {
		e.preventDefault();
		
		var page = jQuery(this).text();
		var data = '?page=' + page;
		
		jQuery('.container').html('<img src="assets/ajax-loader.gif" alt="Loading...">');
		jQuery('.container').fadeOut('slow', function() {
			jQuery(this).load('update/' + data, function() {
				jQuery(this).fadeIn('slow');
			});
			return false;
		});
		jQuery('#sidebar li').removeClass();
		jQuery(this).filter(function() {
    		return jQuery(this).text() === page;
		}).addClass('active');
	});
});