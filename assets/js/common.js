!function($) {

	$navigation = $('.main-nav');

	// sticky (fixed) nav
	$navigation_top = $navigation.offset().top;
	$(window).on('scroll resize', function() {
		if ( $(window).scrollTop() > $navigation_top ) {
			$('body').addClass('is-nav-fixed');
		} else {
			$('body').removeClass('is-nav-fixed');
		}
	});

	// small screen nav (jQuery Plugin)
	$navigation.slicknav({
		prependTo: '.site-container'
	});

}(jQuery);
