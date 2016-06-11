//load in jQuery plugin dependencies (eg. flexslider, smoothScroll etc.) in this file
$(function() {
	//flickity 
	$('.main-gallery').flickity({
		imagesLoaded: true
	});

	//smoothScroll
	$('nav a').smoothScroll({
		speed: 600
	});

	// wow js
    new WOW().init();
}); 