
(function ($) {
    $(document).ready(function () {
        var background_posotion_number = 0;
        setInterval(function text_home_scroll() {
            background_posotion_number = background_posotion_number - 1;
            $(".home-text").css('background-position-x', background_posotion_number + 'px');
            console.log(background_posotion_number);
        }, 10);
    });

    $('.mini-cart img').on('mouseover', function () {
        $(this).find('img').attr('src', '/wp-content/uploads/2022/10/icon-tienda_preview_rev_1.png');
    });

}(jQuery));