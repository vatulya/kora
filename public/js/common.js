(function(window, document, $) {

    $(document).ready(function() {
        $('.image-lightbox').iLightbox();
    });
    $('.resizeme').each(function (i, el) {
        var $el = $(el),
            $container = $el.parents('.image-container'),
            options = {},
            h = $el.data('resize-height') || $container.height() || 0,
            w = $el.data('resize-width') || $container.width() || 0;
        if (h > 0) {
            options['height'] = h;
        }
        if (w > 0) {
            options['width'] = w;
        }
        $el.aeImageResize(options);
    });

})(window, window.document, window.jQuery);