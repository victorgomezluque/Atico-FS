"use strict";

(function ($) {

    $(document).ready(function () {
        if ($('.slider-scroll-content .panel').length) {
            initialize_carousel_scroll();
        }
    });



    $('body').on('click', 'article.post > a, article.projects > a, article.services > a', function (e) {
        e.preventDefault();

        loadPost($(this));
    });



    window.onpopstate = function (e) {
        // set the content for the page that was stored in the state object
        var newPageUrl = location.href;
        var state = e.state;
        var query = '.grid-index article > a[href="' + newPageUrl + '"]';

        if (state) {
            loadPost($(query), false);
        } else {
            if ($(query).length) {
                loadPost($(query));
            } else if ($('.single-post-ajax').length) {
                closePost(false);
            } else {
                window.location.href = newPageUrl;
            }
        }
    };

    $('body').on('click', '.close-post', function (event) {
        closePost();
    }); // Función que carga el post pasando elemento

    function closePost() {
        var push = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : true;
        $('.single-post-ajax').addClass('single-post-loading');
        $('.single-post-ajax').addClass('single-post-animating');
        $('body').removeClass('post-open overlay-opened');
        $('#wrapper-navbar .navbar-toggler').removeClass('active close-post');

        if (push) {
            history.go(-1);
        }

        setTimeout(function () {
            $('body.search-results').removeClass('woocommerce');
            $('.single-post-ajax').remove();
        }, 1000);
    }

    function loadContent(data, href, push) {
        $('.loader-holder').remove();
        $('.site-header').removeClass('hide');
        $('.single-post-ajax .wrapper').append(data);
        $('body').addClass('post-open overlay-opened hide-text text-transform');
        $('body').removeClass('overlay-loading');
        $('.cont__post_anchors .cont_post_anchors--menu a:first-child').addClass('active');
        $('.cont__post_content_top').css('padding-top', $('.cont__post_content_top--title').height());
        var title = $('.single-post-ajax').find('h1').text() + ' - emfasi';
        $('.single-post-ajax').removeClass('single-post-animating');
        var state = window.history.state;


        if (push) {
            if (!state) {
                state = {
                    'uid': 1
                };
            } else {
                state.uid = state.uid + 1;
            }

            history.pushState(state, title, href);
            var hostname = 'https://' + location.hostname;
            if (typeof __gaTracker === "function") {
                __gaTracker('set', 'page', href.replace(hostname, ''));
                __gaTracker('set', 'title', title);
                __gaTracker('send', 'pageview');
            }

        }

        setTimeout(function () {
            $('body').removeClass('hide-text');
        }, 200);

        setTimeout(function () {
            $('body').removeClass('text-transform');
        }, 1500);
    }

    function loadPost($element) {
        var push = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
        var id = $element.attr('data-post-id'),
            type = $element.attr('data-post-type'),
            href = $element.attr('href');
        var img = '';

        $('body').addClass('overlay-loading');
        if ($element.closest('.grid-index-full-bg').length) {
            img = $element.find('.cont--img').html();
            img = '<div class="full-img">' + img + '</div>';
        }
        if (id.length && href.length) {
            var data = {
                'action': 'get_ajax_posts',
                'id': id,
                'type': type,
            };
            var timeStart = Date.now();
            var successDelay = 600;
            $.ajax({
                // you can also use $.post here
                url: ajax_custom.ajaxurl,
                // AJAX handler
                global: false,
                data: data,
                type: 'POST',
                beforeSend: function beforeSend(xhr) {
                    $('body').append(
                        '<div class="single-post ajax-overlay single-post-ajax single-post-loading single-post-animating">' +
                        '<header id="masthead" class="site-header hide" style="">' +
                        '<div class="cont--header">' +
                        '<div></div>' +
                        '<div class="cont--header-right">' +
                        '<div class="cont--header-right-item cont--menu__open active close-ajax">' +
                        '<i class="icon icon-font-icn-menu close-post"></i>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</header>' +
                        '<div class="wrapper">' + img + '</div>' +
                        '<div class="loader-holder">' +
                        '<div class="loader">' +
                        '<div class="loader__figure"></div>' +
                        '</div>' +
                        '</div>' +
                        '</div>');

                    setTimeout(function () {
                        $('.single-post-ajax').removeClass('single-post-loading');
                    }, 30);

                },
                success: function success(data) {
                    if (data) {
                        if (Date.now() - timeStart < successDelay) {
                            ;
                            setTimeout(function () {
                                loadContent(data, href, push);
                            }, successDelay - (Date.now() - timeStart));
                        } else {
                            loadContent(data, href, push);
                        }

                        setTimeout(function () {
                            startCarousels();
                            imgFixed();
                        }, 500);

                        setTimeout(function () {
                            initialize_carousel_scroll();

                            var amount = 60;
                            $('.single-post').bind("DOMMouseScroll mousewheel", function (e) {
                                let oEvent = e.originalEvent,
                                    direction = oEvent.detail ? oEvent.detail * -amount : oEvent.wheelDelta,
                                    position = $(this).scrollTop();
                                position += direction > 0 ? -amount : amount;
                                $(this).scrollTop(position);

                                e.preventDefault();
                            });
                        }, 800);

                    }
                },
                error: function error(jqXHR, textStatus, errorThrown) {

                }
            });
        }
    }

    function startCarousels() {
        //var owl_gallery = $(".owl-carousel-gallery");
        var owl_project_related = $(".cont--project-related .grid-index");
        var owl_cont_data_inner = $(".cont--data-inner");

        //setTimeout(function() {


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
            autoplay: false,
            autoplayHoverPause: true,
            smartSpeed: 600,
            mouseDrag: true,
            touchDrag: true,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
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
        //}, 500);
    }

    function imgFixed() {
        var scroll = 0;
        $('.ajax-overlay').on('scroll', function () {
            if (scroll)
                isScrolledIntoBottomView('.ajax-post-single-services > article .cont--header > .cont-text-data > .cont--text-container');
            scroll++;
        });
    }

    function initialize_carousel_scroll() {
        if (!$('.slider-scroll-content .panel').length) {
            return
        }

        $('.slider-scroll-container').each(function (i) {
            var el = this
            var $el = $(el);
            if (!$el.find('img').is(":visible")) {
                $el.hide();
            } else {
                //onImagesLoaded(el, function () {
                    createScene($el);
                //});
            }

        });
    }


    /*function onImagesLoaded(container, event) {
        var images = container.getElementsByTagName("img");
        var loaded = images.length;
        console.log(loaded);
        for (var i = 0; i < images.length; i++) {
            if (images[i].complete) {
                loaded--;
            } else {
                images[i].addEventListener("load", function () {
                    console.log('e');
                    loaded--;
                    if (loaded == 0) {
                        console.log('f');
                        event();
                    }
                });
            }
            if (loaded == 0) {
                event();
            }
        }
    }*/


    function createScene(el) {

        console.log(el.find('.slider-scroll-content'));
        if ((el.width() + 30) > el.find('.slider-scroll-content').width()) {
            return
        }

        var newId = 'slider-' + Math.random().toString(36).substr(2, 9);
        el.attr('id', newId);
        var innerNewId = 'slides-' + Math.random().toString(36).substr(2, 9);
        el.find('.slider-scroll-content').attr('id', innerNewId);
        var controller
        var llosTween
        var leftLimit
        var llosScene
        var slides = document.querySelector('#' + innerNewId)
        var speed = 4000
        controller = new ScrollMagic.Controller()
        leftLimit = (slides.offsetWidth - el.width()) * (-1)
        llosTween = new TimelineLite().fromTo('#' + innerNewId, speed, {
            x: 0,
        }, {
            ease: Linear.easeNone,
            x: leftLimit + 'px',
        })
        llosScene = new ScrollMagic.Scene({
            triggerHook: 'onLeave',
            triggerElement: '#' + newId,
            duration: speed,
            offset: 0,
        }).setPin('#' + newId).setTween(llosTween).addTo(controller)
        $(window).scrollTop(0);

        //function callback (event) {
        //console.log("Event fired! (" + event.type + ")");
        //var state = llosScene.state();
        //console.log(state);
        //}
        // add listeners
        //llosScene.on("change update progress start end enter leave", callback);
    }

    function isScrolledIntoBottomView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var $elem = $(elem);
        if ($elem.length) {
            var elemTop = $elem.offset().top + $elem.height();

            if (docViewBottom >= elemTop) {
                var top_position = (docViewBottom - elemTop);
                $('.ajax-overlay .full-img').css('top', -top_position);
                $('.ajax-post-single-services > article .cont--data').css('bottom', top_position);
            } else {
                $('.ajax-overlay .full-img').css('top', '0');
                $('.ajax-post-single-services > article .cont--data').css('bottom', '0');
            }
        }
    }


})(jQuery);