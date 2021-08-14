/* Template Name: Uplon - Bootstrap 4 Landing Page Tamplat
   Author: CoderThemes
   File Description: Main JS file of the template
*/


! function($) {
    "use strict";

    var Uplon = function() {};

    Uplon.prototype.initStickyMenu = function() {
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
        
            if (scroll >= 50) {
                $(".sticky").addClass("nav-sticky");
            } else {
                $(".sticky").removeClass("nav-sticky");
            }
        });
    },

    Uplon.prototype.initSmoothLink = function() {
        $('.navbar-nav a').on('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 0
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    },

    Uplon.prototype.initScrollspy = function() {
        $("#navbarCollapse").scrollspy({
            offset:20
        });
    },

    Uplon.prototype.initTestimonial = function() {
        $("#owl-demo").owlCarousel({
            loop:true,
            margin:10,
            dots: true,
            autoplay: true,
            autoplayTimeout: 4000,
            responsive:{
                0:{
                    items:1
                }
            }
        });

    },

    Uplon.prototype.initBacktoTop = function() {
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        }); 
        $('.back-to-top').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 1000);
            return false;
        });
    },

    

    Uplon.prototype.init = function() {
        this.initStickyMenu();
        this.initSmoothLink();
        this.initScrollspy();
        this.initTestimonial();
        this.initBacktoTop();
    },
    //init
    $.Uplon = new Uplon, $.Uplon.Constructor = Uplon
}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.Uplon.init();
}(window.jQuery);