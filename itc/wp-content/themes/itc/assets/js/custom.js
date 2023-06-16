jQuery(document).ready(function ($) {
    var nav = $(".header");
    if (nav.length) {
      var offsetTop = nav.offset().top,
        TH = $(".header").height(),
        headerHeight = nav.height(),
        injectSpace = $("<div />", {
          height: headerHeight,
        }).insertAfter(".header");
      injectSpace.hide();
      $(window).on("load scroll resize", function () {
        if ($(window).scrollTop() > offsetTop) {
          nav.addClass("fixed");
          injectSpace.show();
        } else {
          nav.removeClass("fixed");
          injectSpace.hide();
        }
      });
    }
    if($('.section-banner-home').length > 0 || $('.section-banner-child').length > 0){
        $('.header').addClass('header-home');
    }


    $('.owl-carousel.js-leadership-content').owlCarousel({
        dots: false,
        nav: true,
        navText: ['<img class="icon-prev" src="'+ _templateURL +'/assets/images/icons-next.png"  />', '<img class="icon-next" src="'+ _templateURL +'/assets/images/icons-next.png" />'],
        responsive: {
           0: {
               items: 1,
               loop: true
           }
        }
    });
    
});