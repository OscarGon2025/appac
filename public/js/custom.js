// public/js/custom.js
(function () {
    // --- Navbar : passe de transparente à solide au défilement (uniquement si elle a 'is-transparent')
    var nav = document.getElementById('mainNav');

    function toSolid() {
        if (!nav) return;
        nav.classList.add('nav-solid');
        nav.classList.remove('is-transparent', 'position-absolute', 'top-0', 'start-0', 'w-100');
    }

    function toTransparent() {
        if (!nav) return;
        nav.classList.remove('nav-solid');
        nav.classList.add('is-transparent', 'position-absolute', 'top-0', 'start-0', 'w-100');
    }

    function hasTransparentNav() {
        return !!(nav && nav.classList.contains('is-transparent'));
    }

    function onScrollNav() {
        if (!hasTransparentNav()) return; // pages enfants : déjà solide
        if (window.scrollY > 10) toSolid();
        else toTransparent();
    }

    // S’il y a un héros : applique la logique de défilement ; sinon, force l’état solide
    var hero = document.querySelector('.hero-section');
    if (hasTransparentNav()) {
        if (!hero) {
            toSolid();
        } else {
            onScrollNav();
            window.addEventListener('scroll', onScrollNav, { passive: true });
            window.addEventListener('resize', onScrollNav);
            var video = hero.querySelector('video');
            if (video) {
                video.addEventListener('loadeddata', onScrollNav);
                video.addEventListener('error', onScrollNav);
            }
        }
    }

    // --- Bouton retour en haut (si le bouton existe dans le pied de page)
    var backBtn = document.querySelector('.site-footer .back-to-top');
    if (backBtn) {
        var showAt = 200;
        function onScrollBack() {
            if (window.scrollY > showAt) backBtn.style.display = 'inline-flex';
            else backBtn.style.display = 'none';
        }
        onScrollBack();
        window.addEventListener('scroll', onScrollBack, { passive: true });
        backBtn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // --- Fermer le menu mobile au clic sur un lien (UX mobile)
    var navCollapse = document.getElementById('navbarNav');
    if (navCollapse) {
        navCollapse.addEventListener('click', function (e) {
            var t = e.target;
            if (t.matches('.nav-link, .dropdown-item')) {
                var bsCollapse = bootstrap.Collapse.getInstance(navCollapse);
                if (bsCollapse) bsCollapse.hide();
            }
        });
    }
})();
(function () {

    var nav  = document.getElementById('mainNav');
    var logo = document.getElementById('brandLogo');

    if (!nav || !logo) return;

    function onScroll() {
        var scrolled = window.scrollY > 10;          // umbral
        nav.classList.toggle('is-scrolled', scrolled);
        var light = logo.getAttribute('data-light');
        var dark  = logo.getAttribute('data-dark');
        if (light && dark) {
            logo.src = scrolled ? dark : light;
        }
    }


    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
})();
