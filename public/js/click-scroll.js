
(function ($) {
    $(function () {

        var $anchors = $('.smoothscroll, a[href^="#section_"], a[href="#about"], a[href="#actus"], a[href="#partenaires"]');


        function headerOffset() {
            var $nav = $('.festava-navbar:visible').first();
            return $nav.length ? ($nav.outerHeight() || 0) : 0;
        }

        function isBootstrapTrigger(el) {
            var $el = $(el);
            return $el.is('[data-bs-toggle], [data-toggle], [role="tab"], [data-bs-target]');
        }

        $anchors.on('click', function (e) {
            if (isBootstrapTrigger(this)) return;

            var hash = this.hash || '';
            if (!hash || hash === '#') return;


            var samePage = (this.pathname === location.pathname) && (this.hostname === location.hostname);
            if (!samePage) return;

            var $target = $(hash);
            if (!$target.length) return;

            e.preventDefault();

            var offset = Math.max(headerOffset(), 0);
            $('html, body')
                .stop(true)
                .animate(
                    { scrollTop: $target.offset().top - offset },
                    500,
                    function () {

                        if (!$target.is(':focus')) {
                            var had = $target.is('[tabindex]');
                            if (!had) $target.attr('tabindex', '-1');
                            $target.trigger('focus');
                            if (!had) $target.removeAttr('tabindex');
                        }
                    }
                );
        });


    });
})(jQuery);
