(function ($) {
    $(function () {
        // Smooth scroll solo si el destino existe
        $(document).on('click', 'a[href^="#"]', function (e) {
            var id = this.getAttribute('href');
            if (!id || id === '#') return;

            var $target = $(id);
            if ($target.length === 0) return; // <- evita offset() undefined

            e.preventDefault();
            $('html, body').animate({ scrollTop: $target.offset().top }, 500);
        });

        // Si el script original usa otros selectores, siempre chequear length
        // Ejemplo genérico:
        function safeOffset($el) {
            return ($el && $el.length) ? $el.offset().top : null;
        }
        // ...usa safeOffset(...) donde toque
    });
})(jQuery);
