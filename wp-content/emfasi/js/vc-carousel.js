(function ($) {

  $(document).ready(function () {

    var owl_home = $(".cas-exit-home");
    var owl_icon_text = $(".vc_icon_text .cont--items");
    var owl_team = $(".vc_carousel_team .cont--inner");
    //var owl_services_features = $("");
    //var owl_gallery = $(".owl-carousel-gallery");
    var owl_cont_data_inner = $(".cont--data-inner");
    var owl_project_related = $(".cont--project-related .grid-index");
    var owl_projects_grid_index = $(".projects-grid-index");
    var owl_section_opinions = $(".section__opinions .cont__opinions");

    setTimeout(function () {

      owl_home.owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        items: 1,
        autoHeight: false,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        responsive: {
          1025: {
            mouseDrag: false,
          }
        }
      });

      if (window.innerWidth >= 1025) {
        /*owl_projects_grid_index.owlCarousel({
          nav: true,
          dots: true,
          items: 6,
          autoWidth: true,
          margin: 30,
          responsive: {
            1025: {
              items: 3,
            },
            1280: {
              items: 4,
            },
            1366: {
              items: 4,
            },
            1500: {
              items: 5,
            },
            1920: {
              items: 6,
              margin: 70,
            }
          }
        });*/

        /*owl_projects_grid_index.on('mousewheel', '.owl-stage-outer', function (e) {
          if (e.originalEvent.deltaY > 0) {
            $(".projects-grid-index .owl-next").trigger("click");
          } else {
            $(".projects-grid-index .owl-prev").trigger("click");
          }
          e.preventDefault();
        });*/
      }

      owl_icon_text.owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        autoplay: false,
        autoplayHoverPause: true,
        smartSpeed: 450,
        mouseDrag: true,
        touchDrag: true,
        responsive: {
          0: {
            items: 2,
            margin: 40,
            slideBy: 2,
          },

          768: {
            items: 3,
            margin: 44,
            slideBy: 3,
          },

          1280: {
            items: 5,
            margin: 80,
            slideBy: 4,
          },
        },
      });


      owl_cont_data_inner.owlCarousel({
        nav: false,
        dots: true,
        responsive: {
          0: {
            autoWidth: false,
            items: 1,
            margin: 50,
          },

          768: {
            autoWidth: true,
            items: 3,
            margin: 62,
          },

          1366: {
            autoWidth: true,
            items: 4,
            margin: 146,
          },
        },
      });

      owl_team.owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        autoplay: false,
        autoplayHoverPause: true,
        smartSpeed: 450,
        mouseDrag: true,
        touchDrag: true,
        responsive: {
          0: {
            items: 1,
            margin: 0,
            stagePadding: 72,
          },

          768: {
            items: 2,
            stagePadding: 100,
          },

          1280: {
            items: 3,
            stagePadding: 100,
            slideBy: 2,
          },
        },
      });

      /*owl_services_features.owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        autoplay: false,
        autoplayHoverPause: true,
        smartSpeed: 450,
        mouseDrag: false,
        touchDrag: true,
        responsive: {
          0: {
            items: 1,
            margin: 50,
          },

          768: {
            items: 3,
            margin: 62,
          },

          1366: {
            items: 4,
            margin: 146,
          },
        },
      });*/

      /*owl_gallery.owlCarousel({
        loop: false,
        dots: true,
        autoplay: false,
        autoplayHoverPause: true,
        smartSpeed: 600,
        mouseDrag: true,
        touchDrag: true,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        autoWidth: false,
        responsive: {
          0: {
            items: 1,
            margin: 11,
          },

          768: {
            items: 2,
            margin: 8,
          },

          1366: {
            items: 2,
            margin: 20,
          },
        },
      });*/


      owl_project_related.owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        //autoPlay: $('.owl-carousel-banner .owl-item').size() > 1 ? true : false,
        autoplay: false,
        autoplayHoverPause: true,
        smartSpeed: 450,
        mouseDrag: true,
        touchDrag: true,
        //animateIn: 'fadeIn',
        responsive: {
          0: {
            items: 1,
          },

          768: {
            items: 3,
            margin: 19,
          },

          1366: {
            items: 4,
            margin: 67,
          },
        },
      });

      owl_section_opinions.owlCarousel({
        loop: false,
        nav: false,
        dots: true,
        autoplay: false,
        autoplayHoverPause: true,
        smartSpeed: 450,
        mouseDrag: false,
        touchDrag: true,
        //animateIn: 'fadeIn',
        responsive: {
          0: {
            items: 1,
          },

          768: {
            items: 2,
            margin: 60,
          },

          1366: {
            items: 3,
            margin: 145,
          },
        },
      });

    }, 200);




    /*setTimeout(function () {
      checkClasses();
      owl_services_features.on('translated.owl.carousel', function (event) {
        checkClasses();
      });
    }, 300);*/


    function checkClasses() {
      var total = owl_services_features.find('.ajax-post-single-services .cont--features-inner .owl-stage .owl-item.active').length;

      owl_services_features.find('.owl-stage .owl-item').removeClass('firstActiveItem lastActiveItem');

      owl_services_features.find('.owl-stage .owl-item.active').each(function (index) {
        if (index === 0) {
          // this is the first one
          $(this).addClass('firstActiveItem');
        }
        if (index === total - 1 && total > 1) {
          // this is the last one
          $(this).addClass('lastActiveItem');
        }
      });
    }

  });

  let width = $(window).width();

  $(document).ready(function () {
    initialize();
  });

  const initialize = () => {
    hScroll();
  };

  function hScroll(amount) {
    amount = amount || 60;

    if (width >= 1025) {
      $('#horitzontal-scroll').bind("DOMMouseScroll mousewheel", function (e) {
        $('#horitzontal-scroll').addClass('not-hover');
        let oEvent = e.originalEvent,
          direction = oEvent.detail ? oEvent.detail * -amount : oEvent.wheelDelta,
          position = $(this).scrollLeft();
        position += direction > 0 ? -amount : amount;
        $(this).scrollLeft(position);

        clearTimeout($.data(this, 'timer'));
        $.data(this, 'timer', setTimeout(function () {
          $('#horitzontal-scroll').removeClass('not-hover');
        }, 500));

        e.preventDefault();
      });
    }
  }

}(jQuery));