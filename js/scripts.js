(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		//Mobile Nav
		$('.button-collapse').sideNav();

		
		//Material Homepage Slideshow Initialize 
		  $('.carousel.carousel-slider').carousel({
		  	
		  	fullWidth: true,
		  	indicators: true

		  });

	});
	
})(jQuery, this);
