$(document).ready(function(){

  $('.bxslider').bxSlider({
  	pagerCustom: '.nav-team ul',
  	mode: 'fade',
  	controls: false,
  	adaptiveHeight: true
  });

	$('.navbar-nav').localScroll({
		duration:500,
		hash:true,
		offset: -50
	});
});

$(window).resize(function () {
	var $spy = $('[data-spy="scroll"]').scrollspy('refresh')
})
