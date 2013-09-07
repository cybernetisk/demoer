(function($) {
    $.fn.popout.defaults = {
        width: 300
    };

    $.fn.popout = function(action) {
        var $this = $(this);

        if (action == "open") {
            $this.css({right:0});
        } else if (action == "close") {
            $this.css({right:-width});
        }

        // Return this for chaining
        return this;
    };
})(jQuery);
