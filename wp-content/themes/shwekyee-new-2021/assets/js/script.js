/*!
 *	Author: B360 Digital Marketing
	name: script.js	
	requires: jquery	
 */

$(document).ready(function() {  

	//Mobile responsive nav
	$('.stellarnav').stellarNav({
		theme: 'plain',
		menuLabel: '',
		breakpoint: 992,
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
		loop: true,
		navigation: {
			nextEl: '.seller-next',
			prevEl: '.seller-prev',
		},
		breakpoints: {
        	1199: {
				slidesPerView: 4,
				slidesPerGroup: 4,
                spaceBetween: 20
            },
            991: {
				slidesPerView: 3,
				slidesPerGroup: 3,
                spaceBetween: 30
            },
        	575: {
				slidesPerView: 2,
				slidesPerGroup: 2,
                spaceBetween: 50
			},
			200: {
				slidesPerView: 1,
				slidesPerColumn: 1,
				slidesPerGroup: 1,
                spaceBetween: 20
			}
        }
	});

	var product = new Swiper('.product-slide', {
		slidesPerView: 3,
		slidesPerGroup: 3,
		spaceBetween: 20,
		loop: true,
		navigation: {
			nextEl: '.product-next',
			prevEl: '.product-prev',
		},
		breakpoints: {
            991: {
				slidesPerView: 3,
				slidesPerGroup: 3,
                spaceBetween: 30
            },
            767: {
				slidesPerView: 2,
				slidesPerGroup: 2,
                spaceBetween: 30
            },
			200: {
				slidesPerView: 1,
				slidesPerGroup: 1,
                spaceBetween: 30
            }
        }
	});

	var blog = new Swiper('.blog-slide', {
		slidesPerView: 3,
		slidesPerGroup: 3,
		spaceBetween: 20,
		loop: true,
		navigation: {
			nextEl: '.blog-next',
			prevEl: '.blog-prev',
		},
		breakpoints: {
			991: {
				slidesPerView: 3,
				slidesPerGroup: 3,
                spaceBetween: 30
            },
            767: {
				slidesPerView: 2,
				slidesPerGroup: 2,
                spaceBetween: 30
            },
			200: {
				slidesPerView: 1,
				slidesPerGroup: 1,
                spaceBetween: 30
            }
        }
	});

	var client = new Swiper('.client-slide', {
		slidesPerView: 2,	
		slidesPerColumn: 1,
		slidesPerGroup: 2,
		spaceBetween: 20,
		loop: true,
		navigation: {
			nextEl: '.client-next',
			prevEl: '.client-prev',
		},
		breakpoints: {
			991: {
				slidesPerView: 2,
				slidesPerGroup: 2,
                spaceBetween: 30
            },
			200: {
				slidesPerView: 1,
				slidesPerGroup: 1,
                spaceBetween: 30
            }
        }
	});

	var galleryThumbs = new Swiper('.gallery-thumbs', {
		spaceBetween: 10,
		slidesPerView: 4,
		freeMode: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
	  });
	var galleryTop = new Swiper('.gallery-top', {
		spaceBetween: 10,
		autoplay: 
		{
		delay: 2000,
		},
		loop: true,
		navigation: {
			nextEl: '.gallery-next',
			prevEl: '.gallery-prev',
		},
		thumbs: {
			swiper: galleryThumbs
		}
	});

	var pslide = new Swiper('.product-single-slide', {
		slidesPerView: 3,
		spaceBetween: 30,
		navigation: {
			nextEl: '.p-next',
			prevEl: '.p-prev',
		},
		breakpoints: {
			991: {
				slidesPerView: 3,
				slidesPerGroup: 3,
                spaceBetween: 30
            },
			575: {
				slidesPerView: 2,
				slidesPerGroup: 2,
                spaceBetween: 30
			},
			200: {
				slidesPerView: 1,
				slidesPerGroup: 1,
                spaceBetween: 30
            }
        }
	});


	$('[data-fancybox="gallery"]').fancybox({
		buttons: [
			"slideShow",
			"thumbs",
			"zoom",
			"fullScreen",
			"share",
			"close"
		],
		loop: false,
		protect: true
	});
	  

	//AOS Animate
	AOS.init();
});