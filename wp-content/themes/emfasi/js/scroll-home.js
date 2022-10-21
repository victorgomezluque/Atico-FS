
(function ($) {
    $(document).ready(function () {
        var background_posotion_number = 0;
        setInterval(function text_home_scroll() {
            background_posotion_number = background_posotion_number - 1;
            $(".home-text").css('background-position-x', background_posotion_number + 'px');
            console.log(background_posotion_number);
        }, 10);
    });
}(jQuery));