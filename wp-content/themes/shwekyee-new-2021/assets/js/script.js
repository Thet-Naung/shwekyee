/*!
 *	Author: B360 Digital Marketing
	name: script.js	
	requires: jquery	
 */

$(document).ready(function() {  

	// Mobile responsive nav
	$('.stellarnav').stellarNav({
		theme: 'plain',
		menuLabel: '',
		breakpoint: 992,
		position: 'right',
		openingSpeed: 250,
		closingSpeed: 250,
	});

	var bestseller = new Swiper('best-seller', {
		slidesPerView: 4,
		slidesPerColumn: 4,
		spaceBetween: 30,
		navigation: {
			nextEl: '.seller-next',
			prevEl: '.seller-prev',
		},
	  });

	// AOS Animate
	// AOS.init();
});