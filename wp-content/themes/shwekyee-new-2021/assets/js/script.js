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

	var best_seller = new Swiper('.best-seller-slide', {
		slidesPerView: 4,
		slidesPerColumn: 2,
		slidesPerGroup: 4,
		spaceBetween: 20,
		slidesPerColumnFill: 'row',
		direction: 'horizontal',
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

	var product = new Swiper('.product-slide', {
		slidesPerView: 3,
		slidesPerGroup: 3,
		spaceBetween: 20,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

	var blog = new Swiper('.blog-slide', {
		slidesPerView: 3,
		slidesPerGroup: 3,
		spaceBetween: 20,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

	var client = new Swiper('.client-slide', {
		slidesPerView: 2,
		slidesPerGroup: 2,
		spaceBetween: 20,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

	// AOS Animate
	// AOS.init();
});