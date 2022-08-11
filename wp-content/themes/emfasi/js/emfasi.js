(function ($) {


    $(document).ready(function () {

        $('.slick-products').slick({
            infinite: false,
            slidesToShow: 4,
            slidesToScroll: 2,
            dots: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [{
                breakpoint: 1500,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    dots: true,
                },
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    dots: true,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2.2,
                    slidesToScroll: 2,
                    dots: false,
                },

            }
            ]
        });

        $('.front-slide').slick({
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 5000,
        });
        $('.front-slide-contact').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 5000,
        });

        $('.slick-products-sponsors').slick({
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [{
                breakpoint: 1500,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    dots: true,
                },
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    dots: true,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2.2,
                    slidesToScroll: 2,
                    dots: false,
                },

            }
            ]
        });




        fixedServices();

        setTimeout(function () {
            $('.cta-fixed').addClass('active');
        }, 2000);

        $(".cont--promoted-page .cont--item a").hover(
            function () {
                $(".cont--promoted-page .cont--item a").addClass('inactive');
                $(this).removeClass('inactive');

                $("body").removeClass('color-logo-white');
                $("body").removeClass('color-menu_prinicipal-white');

                $(".owl-carousel-banner .owl-item .item").addClass('hover-item');
            },
            function () {
                $(".cont--promoted-page .cont--item a").removeClass('inactive');

                $("body").addClass('color-logo-white');
                $("body").addClass('color-menu_prinicipal-white');

                $(".owl-carousel-banner .owl-item .item").removeClass('hover-item');
            }
        );

        $(".projects-grid-index .projects a").hover(
            function () {
                $(".projects-grid-index .projects a").addClass('hover-projects');
                //$("#page").css("background-image", +'"' + $("#page").css('background-image', 'url(' + $(this).children(".cont--img").children("img").attr("src") + '') + ')');
                //$("#page").addClass('hover-projects-img');
                $(this).removeClass('hover-projects');

            },
            function () {
                $(".projects-grid-index .projects a").removeClass('hover-projects');
                //$("#page").css("background-image", "none");
                //$("#page").removeClass('hover-projects-img');
            }
        );

        $('body').on('click', ".services-index article", function (e) {
            var $content_service = $(this).find('.block_cont__info');
            $(".services-index article").removeClass('active');
            $(".services-index article").addClass('hoverclick');
            $(this).removeClass('hoverclick');
            $(this).addClass('active');

            $('.services-index article').not(this).each(function () {
                $(this).find('.block_cont__info').slideUp();
                $(this).find('.block_cont__info').removeClass('open');
            });


            if ($content_service.hasClass('open')) {
                $content_service.removeClass('open');
                $content_service.slideUp();
            } else {
                $content_service.addClass('open');
                $content_service.slideDown();
            }

        });

        $('body').on('click', ".services-index article.active", function (e) {
            $(this).removeClass('active');
            $(".services-index article").removeClass('hoverclick');
        });
        $(".services-index article").hover(
            function () {
                $(".services-index article").addClass('hover');
                $(this).addClass('hover-div');
                $(this).removeClass('hover');

            },
            function () {

                $(".services-index article").removeClass('hover');
                $(".services-index article").removeClass('hover-div');

            }
        );


        //FAQs
        $('body').on('click', ".cont__questions .cont__question", function (e) {
            var $content_service = $(this).find('.block_cont__info');
            $(".cont__questions .cont__question").removeClass('active');
            $(".cont__questions .cont__question").addClass('hoverclick');
            $(this).removeClass('hoverclick');
            $(this).addClass('active');

            $('.cont__questions .cont__question').not(this).each(function () {
                $(this).find('.block_cont__info').slideUp();
                $(this).find('.block_cont__info').removeClass('open');
            });


            if ($content_service.hasClass('open')) {
                $content_service.removeClass('open');
                $content_service.slideUp();
            } else {
                $content_service.addClass('open');
                $content_service.slideDown();
            }

        });

        $('body').on('click', ".cont__questions .cont__question.active", function (e) {
            $(this).removeClass('active');
            $(".cont__questions .cont__question").removeClass('hoverclick');
        });
        $(".cont__questions .cont__question").hover(
            function () {
                $(".cont__questions .cont__question").addClass('hover');
                $(this).addClass('hover-div');
                $(this).removeClass('hover');

            },
            function () {

                $(".cont__questions .cont__question").removeClass('hover');
                $(".cont__questions .cont__question").removeClass('hover-div');

            }
        );


        $("#primary-menu .menu-item  a").hover(
            function () {
                //$(".main-navigation").css('background', '#222222');
                $(".main-navigation").addClass('hover');
                //$(".google-partner-menu").css('opacity', '0.2');
                $(".cont--more-info").css('opacity', '0.2');

            },
            function () {
                //$(".main-navigation").css('background', '#ffffff');
                $(".main-navigation").removeClass('hover');
                //$(".google-partner-menu").css('opacity', '1');
                $(".cont--more-info").css('opacity', '1');


            }
        );

        $('body').on('click', ".vc_infotwocolumns .cont--right .vc_listoverlay_item .cont--moreinfo", function (e) {
            $('body').addClass('overlay-opened overlay-mini');
            $(this).parent().parent().parent().find('.cont--overlay').addClass('open');
        });

        $('body').on('click', ".ajax-post-single-services > article .cont--header .cont--text .see-more", function (e) {
            $('body').addClass('overlay-opened overlay-mini');
            $(this).parent().find('.cont--overlay, .cont-info-overlay').addClass('open');
        });

        $('body').on('click', ".section__text-image .cont__more-information .cont__more-info-title", function (e) {
            $('body').addClass('overlay-opened overlay-mini');
            $(this).parent().find('.cont--overlay, .cont__more-info-overlay').addClass('open');
        });

        $('body').on('click', ".section__opinions .cont__opinion .cont__view-more", function (e) {
            $('body').addClass('overlay-opened overlay-mini');
            $id = $(this).attr('id');
            $id = $id.substr($id.indexOf("-") + 1);
            $('.cont__more-info-overlay#option-' + $id + ', .cont__more-info-overlay#option-' + $id + ' .cont--overlay').addClass('open');
        });

        $('body').on('click', ".cont--overlay .cont--close", function (e) {
            $('body').removeClass('overlay-mini');

            if (!$('body').hasClass('post-open')) {
                $('body').removeClass('overlay-opened');
            }
            $(this).parent().removeClass('open');
            $(".cont-info-overlay").removeClass('open');
            $(".cont__more-info-overlay").removeClass('open');
        });

        $("body").on("click", ".cont--video .cont--play", function () {
            $(this).parent().addClass('play-video');
            var video = $(this).parent().find('.cont--video-inner iframe');

            var symbol = video[0].src.indexOf("?") > -1 ? "&" : "?";
            video[0].src += symbol + "autoplay=1&mute=1";
        });


        $("body").on('click', 'a[href^="#"]', function (event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 700);
        });



        var scroll = 0;
        $(window).on('scroll', function () {
            if (scroll)
                ctaScroll();
            fixedServices();
            scroll++;
        });


        function ctaUp() {
            $('.cont--more-info').addClass('active');
        }

        function ctaDown() {
            //$('.cont--more-info').removeClass('active');
        }

        function ctaScroll() {
            if (isScrolledIntoView('#footer-wrapper')) {
                ctaDown();
            } else {
                ctaUp();
            }
        };

        function fixedServices() {
            fixedHeader('.ajax-post-single-services > article .cont--header .cont--text-container');
        }

        function isScrolledIntoView(elem) {
            var docViewTop = $(window).scrollTop();
            var docViewBottom = docViewTop + $(window).height();
            var $elem = $(elem);
            if ($elem.length) {
                var elemTop = $elem.offset().top;
                return ((docViewBottom >= elemTop));
            }
        }

        function fixedHeader(elem) {
            var docViewTop = $(window).scrollTop();
            var docViewBottom = docViewTop + $(window).height();
            var $elem = $(elem);
            if ($elem.length) {
                var elemTop = $elem.offset().top + $elem.height();

                if (docViewBottom >= elemTop) {
                    var top_position = (docViewBottom - elemTop);
                    $('.ajax-post-single-services > article .cont--header .fixed-thumbnail.cont--bg').css('top', -top_position);
                    $('.ajax-post-single-services > article .cont--data').css('bottom', top_position);
                } else {
                    $('.ajax-post-single-services > article .cont--header .fixed-thumbnail.cont--bg').css('top', '0');
                    $('.ajax-post-single-services > article .cont--data').css('bottom', '0');
                }
            }
        }


        load_more_projects();
        $(document).ajaxComplete(function () {
            load_more_projects();
        });

        function load_more_projects() {
            if ($('.projects-grid-index').length) {
                if ($('.elm-wrapper .elm-button').attr("data-page") >= $('.number_max_page').html()) {
                    $('.elm-wrapper').css('display', 'none');
                }
            }
        }



    });

}(jQuery));