$j=jQuery;

/*====================================
=            Match Height            =
====================================*/

$j(function() {
    $j('.column').matchHeight();

    $j('.left-column .column').matchHeight();
    $j('.right-column .column').matchHeight();

    //cars
    $j('#left-section .column').matchHeight();
    $j('#right-section .column').matchHeight();
});

/*=============================
=            SLICK            =
=============================*/

$j(function(){
	$j('.slick').slick({
		fade: true,
		autoplay: 8000,
		infinite: true,
		speed: 500,
		cssEase: 'linear',
	});
});


/*=================================
=            FANCYAPPS            =
=================================*/

$j(function() {
	$j(".popup").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});


/*===================================
=            MENU SCROLL            =
===================================*/

$j(window).scroll(function($) {
	var scroll = $j(window).scrollTop();

	if (scroll > 5) { // this refers to window
		$j('.site-header').addClass('scrolled');
	} else {
		$j('.site-header').removeClass('scrolled');
	}
});