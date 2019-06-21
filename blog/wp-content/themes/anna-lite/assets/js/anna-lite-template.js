/*
 * jQuery Anna Lite theme functions file
 * https://www.themeinprogress.com
 *
 * Copyright 2018, ThemeinProgress
 * Licensed under MIT license
 * https://opensource.org/licenses/mit-license.php
 */

jQuery.noConflict()(function($){

	"use strict";

/* ===============================================
   HEADER CART
   ============================================= */
	
	$('div.header-cart').hover(
		
		function () {
			$(this).children('div.header-cart-widget').stop(true, true).fadeIn(100);
		}, 
		function () {
			$(this).children('div.header-cart-widget').stop(true, true).fadeOut(400);		
		}
			
	);
	
/* ===============================================
   FIXED HEADER
   =============================================== */

	function anna_lite_header() {
	
		var body_width = $(window).width();
		
		var header = $('#header-wrapper .row').innerHeight();
		var demostore = $('p.demo_store').innerHeight();
		var adminbar = $('body.logged-in #wpadminbar').innerHeight();
		
		if ( body_width >= 992 ){
		
			$('#header-wrapper').css({'height': header + demostore});
			$('#header').css({'height': header});
			$('#header').css({'top': demostore + adminbar });
		
		} else {
		
			$('#header-wrapper, #header').css({'height':'auto'});
		
		}

	}
	
	$( window ).load(anna_lite_header);
	$( window ).resize(anna_lite_header);

/* ===============================================
   SCROLL SIDEBAR
   =============================================== */

	$(window).load(function() {

		$("#scroll-sidebar").niceScroll({smoothscroll: false});
		$("#scroll-sidebar").getNiceScroll().hide();

		var pw = $(window).width();
		
		$("#header .mobile-navigation").click(function() {

			$('#overlay-body').fadeIn(600).addClass('visible');
			$('body').addClass('overlay-active').addClass('no-scrolling');
			$('#wrapper').addClass('open-sidebar');

		});

		if ( pw < 992 ) {

			$("#sidebar-wrapper .mobile-navigation, #overlay-body").click(function() {
	
				$('#overlay-body').fadeOut(600);
				$('body').removeClass('overlay-active').removeClass('no-scrolling');
				$('#wrapper').removeClass('open-sidebar');
		
			});

			$("#overlay-body").swipe({
	
				swipeRight:function() {
	
					$('#overlay-body').fadeOut(600);
					$('body').removeClass('overlay-active').removeClass('no-scrolling');
					$('#wrapper').removeClass('open-sidebar');
	
				},
	
				threshold:0
		
			});
		
		} else if ( pw > 992 ) {

			$("#sidebar-wrapper .mobile-navigation, #overlay-body").click(function() {
				$('#overlay-body').fadeOut(600);
				$('body').removeClass('overlay-active').removeClass('no-scrolling');
				$('#wrapper').removeClass('open-sidebar');
			});

		}
		
	});

/* ===============================================
   MOBILE MENU
   =============================================== */

	$('nav#mobilemenu ul > li').each(function(){
    	if( $('ul', this).length > 0 ) {
        $(this).children('a').append('<span class="sf-sub-indicator"> <i class="fa fa-plus"></i> </span>').removeAttr("href"); }
	}); 

	$('nav#mobilemenu ul > li ul').click(function(e){
		e.stopPropagation();
    })
	
    .filter(':not(:first)')
    .hide();
    
	$('nav#mobilemenu ul > li, nav#mobilemenu ul > li > ul > li').click(function(){

		var selfClick = $(this).find('ul:first').is(':visible');
		
		if(!selfClick) {
		  
		  $(this).parent().find('> li ul:visible').slideToggle('low');
		
		}
		
		$(this).find('ul:first').stop(true, true).slideToggle();

	});

/* ===============================================
   HEADER SEARCH 
   =============================================== */
	
	$('.header-search i').click(function(){

		$(this).prev('.search-form').find('input[type=text]').focus().val('');

		if( !$('.header-search .search-form').hasClass('is-open')) {
			
			$('.header-search .search-form').addClass('is-open');
			$('body').addClass('no-scrolling');
			return false;
		
		} else {	
			
			$('.header-search .search-form').removeClass('is-open');
			$('body').removeClass('no-scrolling');
		
		}

    });


/* ===============================================
   FOOTER
   =============================================== */

	function anna_lite_footer() {
	
		var footer_h = $('#footer').innerHeight();
		$('#wrapper').css({'padding-bottom':footer_h});
	
	}
	
	$( document ).ready(anna_lite_footer);
	$( window ).resize(anna_lite_footer);

/* ===============================================
   MAIN MENU
   =============================================== */

	$('nav#mainmenu li').hover(
		
		function () {
			$(this).children('ul').stop(true, true).fadeIn(100);
		}, 
		function () {
			$(this).children('ul').stop(true, true).fadeOut(400);		
		}
			
	);

/* ===============================================
   Scroll to Top Plugin
   =============================================== */

	$(window).scroll(function() {
		
		if( $(window).scrollTop() > 400 ) {
			$('#back-to-top').fadeIn(500);
		} else {
			$('#back-to-top').fadeOut(500);
		}
		
	});

	$('#back-to-top').click(function(){
		$("html, body").animate({scrollTop: 0}, 700);
		return false;
	});

/* ===============================================
   MASONRY FUNCTION
   =============================================== */

	function anna_lite_masonry() {
		
		$('.masonry').imagesLoaded(function () {
	
			$('.masonry').masonry({
				itemSelector: '.masonry-item',
				isAnimated: true
			});
	
		});

	}

/* ===============================================
   MASONRY LOAD
   =============================================== */
   
	$(document).ready(function(){
		anna_lite_masonry();
	});

	$(window).resize(function(){
		anna_lite_masonry();
	});
	
/* ===============================================
   Prettyphoto
   =============================================== */

	function anna_lite_lightbox() {
	
		$("a[data-rel^='prettyPhoto']").prettyPhoto({
			animationSpeed:'fast',
			slideshow:5000,
			theme:'pp_default',
			show_title:false,
			overlay_gallery: false,
			deeplinking: false,
			social_tools: false
		});
	
	}
	
	if( $().prettyPhoto ) {
		anna_lite_lightbox();
	}


/* ===============================================
   SLICK SLIDER
   ============================================= */

	var mobilecolums = 1;
	var colums = parseInt($('.slick-slideshow').attr('data-columns'));
	if ( colums === 3 ) { mobilecolums = 2 ;}

	$('.slick-slides').slick({

		adaptiveHeight: true,
		centerMode: true,
		slidesToShow: colums,
		prevArrow: '<div class="prev-arrow"><i class="fa fa-angle-left"></i></div>',
		nextArrow: '<div class="next-arrow"><i class="fa fa-angle-right"></i></div>',
		responsive: [
			{
				breakpoint: 600,
				settings: {
					centerMode: false,
					slidesToShow: mobilecolums,
				}
			},
			{
				breakpoint: 992,
				settings: {
					centerMode: false,
				}
			}
	
		]

	});
	
	function slickActiveItem() {
		
		if ( $( ".slick-slideshow[data-columns='3'] .slick-slide" ).length <= 3 ) {
			$('.slick-slideshow[data-columns="3"] .slick-slide').addClass('slick-visible-item'); 
		} else {
			$('.slick-slideshow[data-columns="3"] .slick-current')
				.addClass('slick-visible-item')
				.next('.slick-slide')
				.addClass('slick-visible-item')
				.prev('.slick-slide')
				.prev('.slick-slide')
				.addClass('slick-visible-item');
		}
		
	}

	$(document).ready(function(){
		
		slickActiveItem();
		$('.slick-slideshow[data-columns="3"] .slick-slides').on('afterChange', function(){
			$('.slick-slideshow[data-columns="3"] .slick-slide').removeClass('slick-visible-item');
			slickActiveItem();
		});
	
	});


});          