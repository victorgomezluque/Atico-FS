(function ($) {

    $(document).ready(function () {

        function getScrollbarWidth() {
            return window.innerWidth - document.documentElement.clientWidth;
        }

        $('body').on('click', '.cont--menu__open:not(.close-ajax)', function (e) {

            e.preventDefault();

            var scrollWidth = getScrollbarWidth();
            var selector = '.main-navigation';

            $('body').toggleClass('menu-open');


            $(this).toggleClass('active');
            $(selector).toggleClass('show');

            var padding_body = ($('body').hasClass('menu-open')) ? scrollWidth : 0;
            $('body').css('padding-right', padding_body);
            $('.site-header').css('padding-right', padding_body);
        });


    });

}(jQuery));