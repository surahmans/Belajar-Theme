(function ($) {
	$(document).ready(function(){
		// search overlay
		$('.bt_search').click(function(){
			$('.wrap-input-search').slideToggle('fast');
			$('.input-search').focus();
		});

		// search overlay res
		$('.bt_search-res').click(function(){
			$('.wrap-input-search-res').slideToggle('fast');
			$('.input-search-res').focus();
		});

		// share click on post
		$('.share-post').click(function(){
			$('.wrap-share-click-social').slideToggle('fast');
		});

		//share post grid
		// gal grid
		$('.gal-grid').click(function(){
			$('.gal-grid-s').slideToggle('fast');
		});
		// gal slide
		$('.gal-slide').click(function(){
			$('.gal-slide-s').slideToggle('fast');
		});
		// audio
		$('.g-audio').click(function(){
			$('.g-audio-s').slideToggle('fast');
		});
		// aside
		$('.g-aside').click(function(){
			$('.g-aside-s').slideToggle('fast');
		});
		// standard
		$('.g-standard').click(function(){
			$('.g-standard-s').slideToggle('fast');
		});
		// video
		$('.g-video').click(function(){
			$('.g-video-s').slideToggle('fast');
		});
		// quote
		$('.g-quote').click(function(){
			$('.g-quote-s').slideToggle('fast');
		});
		// audio
		$('.g-link').click(function(){
			$('.g-link-s').slideToggle('fast');
		});

		// GALLERY SLIDE POST
		$('.gal-slide-post').owlCarousel({
		    loop:true,
		    autoplayTimeout:5000,
		    autoplay:true,
		    autoplayHoverPause:false,
		    autoHeight:false,
		    nav:false,
		    dots: false,
		    /*animateOut: 'fadeIn',
    		animateIn: 'fadeIn',*/
    		smartSpeed: 1000,
    		items: 1
		})

		$(".nav-next-gal-slide").click(function(){
			$(".gal-slide-post").trigger('next.owl.carousel');
		});
		$(".nav-prev-gal-slide").click(function(){
			$(".gal-slide-post").trigger('prev.owl.carousel');
		});

		// Related post like single 
		$('.single-related-post-like').owlCarousel({
		    loop:true,
		    autoplayTimeout:5000,
		    autoplay:true,
		    autoplayHoverPause:false,
		    autoHeight:false,
		    nav:false,
		    dots: false,
		    /*animateOut: 'fadeIn',
    		animateIn: 'fadeIn',*/
    		smartSpeed: 1000,
    		items: 2
		})

		$(".ol-next-related-single").click(function(){
			$(".single-related-post-like").trigger('next.owl.carousel');
		});
		$(".ol-prev-related-single").click(function(){
			$(".single-related-post-like").trigger('prev.owl.carousel');
		});

		// Featured 1 slider
		$('.slider1').owlCarousel({
		    loop:true,
		    autoplayTimeout:5000,
		    autoplay:true,
		    touchDrag: false,
		    mouseDrag: false,
		    autoplayHoverPause:false,
		    autoHeight:false,
		    nav:false,
		    dots: false,
		    /*animateOut: 'fadeIn',
    		animateIn: 'fadeIn',*/
    		smartSpeed: 1000,
    		responsive:{
		        0:{
		            items:1,
		            stagePadding: 0
		        },
		        600:{
		            items:2,
		            stagePadding: 0
		        },
		        1000:{
		            items:3
		        }
		    }
		})

		$(".ol-next-slider-1").click(function(){
			$(".slider1").trigger('next.owl.carousel');
		});
		$(".ol-prev-slider-1").click(function(){
			$(".slider1").trigger('prev.owl.carousel');
		});

		// Featured 2 slider
		$('.featured-post-2').owlCarousel({
		    loop:true,
		    autoplayTimeout:8000,
		    touchDrag: false,
		    mouseDrag: false,
		    margin: 50,
		    autoplay: true,
		    autoplayHoverPause: true,
		    autoHeight:false,
		    nav:false,
		    dots: false,
    		smartSpeed: 1000,
    		animateOut: 'fadeOut',
    		animateIn: 'fadeIn',
    		responsive:{
		        0:{
		            items:1,
		        },
		        600:{
		            items:1,
		        },
		        1000:{
		            items:2
		        }
		    }
		})

		$(".ol-next-slider-1").click(function(){
			$(".featured-post-2").trigger('next.owl.carousel');
		});
		$(".ol-prev-slider-1").click(function(){
			$(".featured-post-2").trigger('prev.owl.carousel');
		});

		// Featured 3 text slider
		$('.featured-post-3').owlCarousel({
		    loop:true,
		    autoplayTimeout:5000,
		    autoplay: true,
		    autoplayHoverPause: true,
		    autoHeight:false,
		    nav:false,
		    dots: false,
		    /*animateOut: 'fadeOutDown',
    		animateIn: 'fadeInDown',*/
    		smartSpeed: 1000,
    		items: 1
		})

		$(".ol-next-featured-3").click(function(){
			$(".featured-post-3").trigger('next.owl.carousel');
		});
		$(".ol-prev-featured-3").click(function(){
			$(".featured-post-3").trigger('prev.owl.carousel');
		});

		// Featured 4 slider
		$('.featured-post-4').owlCarousel({
		    loop:true,
		    autoplayTimeout:8000,
		    touchDrag: false,
		    mouseDrag: false,
		    autoplay: true,
		    autoplayHoverPause: true,
		    autoHeight:false,
		    stagePadding: 120,
		    nav:false,
		    dots: false,
    		smartSpeed: 1000,
    		items: 1,
    		responsive:{
    			0:{
		            stagePadding: 0
		        },
		        400:{
		            stagePadding: 0
		        },
		        600:{
		            stagePadding: 60
		        },
		        1000:{

		        }
		    }
		})

		$(".ol-next-featured-4").click(function(){
			$(".featured-post-4").trigger('next.owl.carousel');
		});
		$(".ol-prev-featured-4").click(function(){
			$(".featured-post-4").trigger('prev.owl.carousel');
		});


		// Featured 5 slider
		$('.featured-post-5').owlCarousel({
		    loop:true,
		    autoplayTimeout:8000,
		    touchDrag: false,
		    mouseDrag: false,
		    autoplay: true,
		    autoplayHoverPause: true,
		    autoHeight:false,
		    nav:false,
		    dots: false,
    		smartSpeed: 1000,
    		animateOut: 'fadeOut',
    		animateIn: 'fadeIn',
    		items: 1
		})

		$(".ol-next-featured-4").click(function(){
			$(".featured-post-5").trigger('next.owl.carousel');
		});
		$(".ol-prev-featured-4").click(function(){
			$(".featured-post-5").trigger('prev.owl.carousel');
		});

		/* Scroll to top */
		$(window).scroll(function(){
	        if ($(this).scrollTop() > 100) {
	            $('.el_totop').removeClass("eltophide");
	        } else {
	            $('.el_totop').addClass("eltophide");
	        }
	    });

	    /* Scroll menu fix on top */
		$(window).scroll(function(){
	        if ($(this).scrollTop() > 300) {
	            $('.wrap-mn-border').addClass("scrool-fix-menu");
	        } else {
	            $('.wrap-mn-border').removeClass("scrool-fix-menu");
	        }
	    });

		// button to top
		$('.el_totop').click(function(){
			$("html, body").animate({ scrollTop: 0 }, 600);
			return false;
		});

		// video responsive
		$(".wrap-video-post").fitVids();

		//footer fixed effect
		$(".ol-footer-2").footerReveal({
			shadow : false,
			shadowOpacity: 0.2,
			zIndex : -3
		});

		// wow js animate
		new WOW().init();
		
	});
})(jQuery);