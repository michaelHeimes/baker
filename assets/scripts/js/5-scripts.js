(function($) {
	'use strict';
	
	$('.menu a[href="#"]').click(function(e) {
		e.preventDefault ? e.preventDefault() : e.returnValue = false;
	});	
	
	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();
	
	     //>=, not <=
	    if (scroll >= 10) {
	        //clearHeader, not clearheader - caps H
	        $("header.header").addClass("scrolled");
	        
	    } else {
	        $("header.header").removeClass("scrolled");
	    }
	});
	
	$(document).on('click', 'a#menu-toggle', function(){
		
		if ( $(this).hasClass('clicked') ) {
			$(this).removeClass('clicked');
			$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');
		
		} else {
		
			$(this).addClass('clicked');
			$('header.header').addClass('off-canvas-content is-open-right has-transition-push');
		
		}
		
	});

	$(document).on('click', '.js-off-canvas-overlay', function(){
		$('a#menu-toggle').removeClass('clicked');
		$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');
	});
	
	if( $('.press-slider').length ) {
	
		$('.press-slider').slick({
			infinite: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			arrows: true,
			rows: 0,
			appendDots: $(".bg-slide-dots"),
		    prevArrow: $(".bg-slide-prev"),
		    nextArrow: $(".bg-slide-next")
		});
		
		
		if( $('.press-slider .slick-slide').length == 1 ) {
			$('.bg-slide-dots').hide();
		}
		
		
	
	}
	
	$(window).on("load resize", function() {
		var $matchedWidth = $('.inner-footer .right').outerWidth();
		$('.inner-footer .bottom .right').css('min-width', $matchedWidth);
	});
	
	
	
	
})(jQuery);