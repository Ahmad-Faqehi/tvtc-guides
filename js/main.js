/* -------------------------------------------------------------------
 * Template Name         : Cofo - App & Product Landing Page
 * Created Date          : 10 February 2020
 * Last Update           : 27 March 2020
 * Version               : 1.0.2
 * File Name             : main.js
------------------------------------------------------------------- */

/* -------------------------------------------------------------------
 [Table of contents]
 * 01.Preloader
 * 02.Navbar
 * 03.Wow Js
 * 04.ScrollIt
 * 05.ScrollSpy
 * 06.Owl Carousel
 * 07.Counter Up
 * 08.Features Tab
 * 09.Magnific Popup
 * 10.Contact Form
 * 11.Copyright Dynamic Year
 * 12.Ripples Effect
 * 13.Glitch Effect
*/

$(function() {
    "use strict";

    // Call all ready functions
    cofo_preloader(),
    cofo_navbar(),
    cofo_wowJs(),
    cofo_scrollIt(),
    cofo_navScrollSpy(),
    cofo_owlCarousel(),
    cofo_counterUp(),
    cofo_featuresTab(),
    cofo_magnificPopup(),
    cofo_contactForm(),
    cofo_copyrightDynamicYear(),
    cofo_ripplesEffect(),
    cofo_glitchEffect();
});

/* ------------------------------------------------------------------- */
/* 01.Preloader
/* ------------------------------------------------------------------- */
function cofo_preloader() {
    "use-strict";

    // Variables
    var preloaderWrap           = $('.preloader-wrap'),
        loaderInner             = $('.preloader-wrap .preloader-inner');

    $( window ).ready( function(){
        loaderInner.fadeOut(); 
        preloaderWrap.delay(350).fadeOut('slow');
    });   
}

/* ------------------------------------------------------------------- */
/* 02.Navbar
/* ------------------------------------------------------------------- */
function cofo_navbar(){
    "use-strict";

     // Variables
     let header          = $( '.header' );
     let logoTransparent = $( '.logo-transparent' );
     let scrollTopBtn    = $( '.scroll-top-btn' );
     let logoNormal      = $( '.logo-normal' );
     let windowWidth     = $( window ).innerWidth();
     let scrollTop       = $( window ).scrollTop();
     let $dropdown       = $( '.dropdown' );
     let $dropdownToggle = $( '.dropdown-toggle' );
     let $dropdownMenu   = $('.dropdown-menu');
     let showClass       = 'show';
 
     // When Window On Scroll
     $( window ).on( 'scroll', function(){
         let scrollTop = $( this ).scrollTop();
 
         if( scrollTop > 85 ) {
             logoTransparent.hide();
             logoNormal.show();
             header.addClass( 'header-shrink' );
             scrollTopBtn.addClass( 'active' );
         }else {
             logoTransparent.show();
             logoNormal.hide();
             header.removeClass( 'header-shrink' );
             scrollTopBtn.removeClass( 'active' );
         }
     });
 
     // The same process is done without page scroll to prevent errors.
     if( scrollTop > 85 ) {
         logoTransparent.hide();
         logoNormal.show();
         header.addClass( 'header-shrink' );
         scrollTopBtn.addClass( 'active' );
     }else {
         logoTransparent.show();
         logoNormal.hide();
         header.removeClass( 'header-shrink' );
         scrollTopBtn.removeClass( 'active' );
     }
 
    // Window On Resize Hover Dropdown
    $( window ).on( 'resize', function() {
         let windowWidth  = $( this ).innerWidth();
 
         if ( windowWidth > 991 ) {
             $dropdown.hover(
                 function() {
                     let hasShowClass  =  $( this ).hasClass(showClass);
                     if( hasShowClass!==true ){
                         $( this ).addClass(showClass);
                         $( this ).find($dropdownToggle).attr( 'aria-expanded', 'true' );
                         $( this ).find($dropdownMenu).addClass(showClass);
                     }
                 },
                 function() {
                     $( this ).removeClass(showClass);
                     $( this ).find($dropdownToggle).attr("aria-expanded", "false");
                     $( this ).find($dropdownMenu).removeClass(showClass);
                 }
             );
         }else {
             $dropdown.off( 'mouseenter mouseleave' );
             header.find( '.main-menu' ).collapse( 'hide' );
         }
     });
     // The same process is done without page scroll to prevent errors.
     if ( windowWidth > 991 ) {
         $dropdown.hover(
             function() {
                 const $this = $( this );
 
                 var hasShowClass  = $this.hasClass(showClass);
 
                 if( hasShowClass!==true ){
                     $this.addClass(showClass);
                     $this.find($dropdownToggle).attr( 'aria-expanded', 'true');
                     $this.find($dropdownMenu).addClass(showClass);
                 }
             },
             function() {
                 const $this = $( this );
                 $this.removeClass(showClass);
                 $this.find($dropdownToggle).attr("aria-expanded", 'false');
                 $this.find($dropdownMenu).removeClass(showClass);
             }
         );
     }else {
         $dropdown.off( 'mouseenter mouseleave' );
     }

    /*
        Hide Menu when you click on the navigation links.
        It is valid only for data-nav-scroll.
    */
    $('.navbar-nav li a[data-scroll-nav]').on('click', function(){
        $('.navbar-collapse').collapse('hide');
    }); 
}

/* ------------------------------------------------------------------- */
/* 03.Wow Js
/* ------------------------------------------------------------------- */
function cofo_wowJs(){
    "use-strict";
    
    var wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: true,
        live: true,
        scrollContainer: null
    });
    wow.init();
}
/* ------------------------------------------------------------------- */
/* 04.ScrollIt
/* ------------------------------------------------------------------- */
function cofo_scrollIt() {
    "use-strict";
     
    $.scrollIt({
        upKey: 38,
        downKey: 40,
        easing: "swing",
        scrollTime: 300,
        activeClass: "active",
        onPageChange: null,
        topOffset: -15
    });
}
/* ------------------------------------------------------------------- */
/* 05.ScrollSpy
/* ------------------------------------------------------------------- */
function cofo_navScrollSpy() {
    "use-strict";

    // Scroll Spy
    $('body').scrollspy({
        target: '#fixedNavbar',
        offset: 70
    });
}

/* ------------------------------------------------------------------- */
/* 06.Owl Carousel
/* ------------------------------------------------------------------- */
function cofo_owlCarousel(){

    "use-strict";

    // Variables
    var clientsSlider       = $(".testimonials-carousel"),
        screenshotCarousel  = $('.screenshot-carousel');

    // Testimonial Carousel
    clientsSlider.owlCarousel({
        loop:true,
        margin:20,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    // Screenshot Carousel
    screenshotCarousel.owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        dots:false,
        navText: ['<span class="fa fa-arrow-left"></span>','<span class="fa fa-arrow-right"></span>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            768: {
                items:3
            },
            1000:{
                items:4
            }
        }
    });
}

/* ------------------------------------------------------------------- */
/* 07.Counter Up
/* ------------------------------------------------------------------- */
function cofo_counterUp(){
    "use-strict";

    // Variables
    var counterItem         = $('.counter');

    counterItem.counterUp({
        delay: 10,
        time: 1000
    });
}

/* ------------------------------------------------------------------- */
/* 08.Features Tab
/* ------------------------------------------------------------------- */
function cofo_featuresTab(){
    "use-strict";

    // Variables
    var tabLinkWrap         = $('.tab-link-wrap'),
        tabLinkItem         = $('.tab-link-item'),
        tabContentItem      = $('.tab-content-item');

    // Tab Item Click
    tabLinkItem.click(function(){
        let $this           = $(this),
            $thisIndex      = $this.index();

        tabLinkWrap.find(tabLinkItem).removeClass("active");
        $this.addClass("active");
        tabContentItem.removeClass("active");
        tabContentItem.eq($thisIndex).addClass("active");
    });
}

/* ------------------------------------------------------------------- */
/* 09.Magnific Popup
/* ------------------------------------------------------------------- */
function cofo_magnificPopup(){
    "use-strict";

    // Variables
    var youtubePopup        = $(".popup-youtube");

    youtubePopup.magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
}

/* ------------------------------------------------------------------- */
/* 10.Contact Form
/* ------------------------------------------------------------------- */
function cofo_contactForm() {
    "use-strict";

    // Added AutoComplete Attribute Turned Off
    $('.form-input').attr("autocomplete","off");

    $("#contactForm").on("submit",function(event) {

        // E-Mail Validation Function 
        function validateEmail(email) {
            var regexp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return regexp.test(String(email).toLowerCase());
        }

        //  Variables 
        var $this           = $(this),
            name            = $("#contactName").val().trim(),
            email           = $("#contactEmail").val().trim(),
            subject         = $("#contactSubject").val().trim(),
            message         = $("#contactMessage").val().trim(),
            validateEmail   = validateEmail(email);

        // Check empty fields
        if(name===''||email===''||message===''||subject===''){
            if($('div.empty-form').css("display") == "none"){
                $('div.empty-form').stop().slideDown(500).delay(3000).slideUp(500);
            }else {
                return false;
            }
        }else if (!validateEmail===true) {
            if($('div.email-invalid').css("display") == "none"){
                $('div.email-invalid').stop().slideDown(500).delay(3000).slideUp(500);
            }else {
                return false;
            }
        }else {
            // Once the information entered is verified, the mail form is sent. 
            $this.find(':submit').append('<span class="fas fa-spinner fa-pulse ml-3"></span>');
            $("#contactForm").find(':submit').attr('disabled','true');

            $.ajax({
                url: "vendor/send_mail.php?mail=request",
                data: {
                    contact_name:name,
                    contact_email:email,
                    contact_subject:subject,
                    contact_message:message
                },
                type: "POST",
                success: function(response) {
                    $this.find(':submit').find("span").fadeOut();
                    $("#contactForm")[0].reset();   
                    $("#contactForm").find(':submit').removeAttr('disabled');
                    $(".success-form").html(response).slideDown(500).delay(5000).slideUp(500);  
                }
            });
        }
        event.preventDefault();
    });
}    

/* ------------------------------------------------------------------- */
/* 11.Copyright Dynamic Year
/* ------------------------------------------------------------------- */
function cofo_copyrightDynamicYear() {
    "use-strict";

    // Variables
    var fullYearCopyright       = $('#fullYearCopyright'),
        getFullYearDate         = new Date().getFullYear();

    fullYearCopyright.text(getFullYearDate);
}  
/* ------------------------------------------------------------------- */
/* 12.Ripples Effect
/* ------------------------------------------------------------------- */ 
function cofo_ripplesEffect() {
    "use-strict";
    
    $('.hero-ripless-banner').ripples({
        resolution: 500,
        dropRadius: 20,
        perturbance: 0.04
    });
}
/* ------------------------------------------------------------------- */
/* 13.Glitch Effect
/* ------------------------------------------------------------------- */ 
function cofo_glitchEffect() {
    "use-strict";

    $(".glitch-img").mgGlitch();
}