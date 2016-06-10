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

	// $('#demo').lazylinepainter({
 //        'svgData' : svgData, // the object containing the SVG path info
 //        'strokeWidth':7,
 //        'strokeColor':'#de8f8f',
 //        'ease': 'easeInOutExpo'
 //    }
// )
}); 