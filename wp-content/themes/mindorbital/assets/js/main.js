// hero slider

    // HERO SLIDER
    var menu = [];
    jQuery('.swiper-slide').each( function(index){
        menu.push( jQuery(this).find('.slide-inner').attr("data-text") );
    });
    var interleaveOffset = 0.5;
    var swiperOptions = {
        loop: true,
        speed: 500,
        parallax: true,
        autoplay: {
            delay: 10000,
            disableOnInteraction: false,
        },
        watchSlidesProgress: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        on: {
            progress: function() {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    var slideProgress = swiper.slides[i].progress;
                    var innerOffset = swiper.width * interleaveOffset;
                    var innerTranslate = slideProgress * innerOffset;
                    swiper.slides[i].querySelector(".slide-inner").style.transform =
                    "translate3d(" + innerTranslate + "px, 0, 0)";
                }      
            },

            touchStart: function() {
              var swiper = this;
              for (var i = 0; i < swiper.slides.length; i++) {
                swiper.slides[i].style.transition = "";
              }
            },

            setTransition: function(speed) {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = speed + "ms";
                    swiper.slides[i].querySelector(".slide-inner").style.transition =
                    speed + "ms";
                }
            }
        }
    };

    var swiper = new Swiper(".swiper-container", swiperOptions);

    // DATA BACKGROUND IMAGE
    var sliderBgSetting = jQuery(".slide-bg-image");
    sliderBgSetting.each(function(indx){
        if (jQuery(this).attr("data-background")){
            jQuery(this).css("background-image", "url(" + jQuery(this).data("background") + ")");
        }
    });

// Back to Top

jQuery(function(){

    //Scroll event
    jQuery(window).scroll(function(){
      var scrolled = jQuery(window).scrollTop();
      if (scrolled > 200) jQuery('.go-top').fadeIn('slow');
      if (scrolled < 200) jQuery('.go-top').fadeOut('slow');
    });
    
    //Click event
    jQuery('.go-top').click(function () {
      jQuery("html, body").animate({ scrollTop: "0" },  500);
    });
  
  });

//Sticky Header

jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 1){  
      jQuery('header').addClass("sticky");
      }
      else{
        jQuery('header').removeClass("sticky");
      }
    });
  