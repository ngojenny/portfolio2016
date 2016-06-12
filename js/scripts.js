$(function(){

	console.log("It's working");

	//show burger menu at 795px
	$('.burger-menu').on('click', function(){
		$('.top-nav').toggleClass('slide-out');
		//change burger to x
		$('.menu-top-line').toggleClass('to-x-top');
		$('.menu-middle-line').toggleClass('to-x-middle');
		$('.menu-bottom-line').toggleClass('to-x-bottom');
		$('.social-media').toggleClass('show-social');
	});

	//close nav after clicking links
	$('.main-nav a').on('click', function(){
		$('.top-nav').toggleClass('slide-out');
		$('.menu-top-line').toggleClass('to-x-top');
		$('.menu-middle-line').toggleClass('to-x-middle');
		$('.menu-bottom-line').toggleClass('to-x-bottom');
	});

});