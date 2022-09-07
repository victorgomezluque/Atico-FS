(function($) {

    $("body").on('focusin', 'form input, form textarea', function() {
        if ($(this).val().length <= 0 && this.name.length) {
            var labelFor = $('label.' + this.name);
            labelFor.addClass("active");
        }
        $(this).focusout(function() {
            if ($(this).val().length <= 0 && this.name.length) {
                var labelFor = $('label.' + this.name);
                labelFor.removeClass("active");
            }
        });

    });

    $('form input, form textarea').each(function() {
        var val = $(this).val();
        if (val.length && this.name.length) {
            var labelFor = $('label.' + this.name);
            labelFor.addClass("active");
        }
    });

    $(document).ajaxComplete(function() {
        $('form input, form textarea').each(function() {
            var val = $(this).val();
            if (val.length && this.name.length) {
                var labelFor = $('label.' + this.name);
                labelFor.addClass("active");
            }
        });

    });


})(jQuery);