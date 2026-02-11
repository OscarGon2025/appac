/* ============================================================================
   APPAC - JS global (navbar, layout, formulaires)
   ============================================================================ */

/* ======================================================
   1) NAVBAR : transparente ⇄ solide + padding dynamique
   ====================================================== */

(function () {
    var nav = document.getElementById('mainNav');
    if (!nav) return;

    // Si on est sur la page login
    if (document.body.classList.contains('login-page')) {
        nav.classList.add('nav-login'); // on ajoute une classe spéciale
        return; // stop le reste du JS navbar transparente/scroll
    }
})();


(function () {
    var nav   = document.getElementById('mainNav');
    var hero  = document.querySelector('.hero-section');
    var topbar = document.getElementById('siteHeader');

    if (!nav) return;

    // Passer en nav solide (pour pages enfants ou scroll > seuil)
    function toSolid() {
        nav.classList.add('nav-solid');
        nav.classList.remove('is-transparent', 'position-absolute', 'top-0', 'start-0', 'w-100');
    }

    // Revenir à la nav transparente (uniquement sur la home avec héro)
    function toTransparent() {
        nav.classList.remove('nav-solid');
        nav.classList.add('is-transparent', 'position-absolute', 'top-0', 'start-0', 'w-100');
    }

    function hasTransparentNav() {
        return nav.classList.contains('is-transparent');
    }

    function onScrollNav() {
        if (!hasTransparentNav()) return; // pages enfants : déjà solide
        if (window.scrollY > 10) toSolid();
        else toTransparent();
        updateNavbarPadding(); // recalculer l’offset si l’état change
    }

    // --- Padding dynamique du body en fonction de la hauteur topbar + navbar ---
    // Si la navbar est en position absolue/transparente sur le héro, on n’ajoute pas son hauteur.
    function computeNavbarHeight() {
        var h = 0;
        if (topbar) h += topbar.offsetHeight || 0;

        var navIsAbsoluteOverlay = nav.classList.contains('position-absolute') || nav.classList.contains('is-transparent');
        if (!navIsAbsoluteOverlay) {
            h += nav.offsetHeight || 0;
        }
        return h;
    }

    function updateNavbarPadding() {
        var h = computeNavbarHeight();
        document.documentElement.style.setProperty('--navbar-h', h + 'px');
    }

    // Init état nav
    if (hasTransparentNav()) {
        if (!hero) {
            // Si pas de héro, forcer mode solide
            toSolid();
        } else {
            // Mode dynamique avec héro
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

    // Recalcul padding initial + sur resize
    window.addEventListener('load', updateNavbarPadding);
    window.addEventListener('resize', updateNavbarPadding);

    // Recalculs différés pour menus/FOUC/mesures tardives
    setTimeout(updateNavbarPadding, 200);
    setTimeout(updateNavbarPadding, 600);

    // Observer les changements de taille de la navbar (ouverture/fermeture menu)
    try {
        var ro = new ResizeObserver(updateNavbarPadding);
        ro.observe(nav);
        if (topbar) ro.observe(topbar);
    } catch (e) {

    }
})();


/* ======================================================
   2) Changement de logo (clair / foncé) selon le scroll
   ====================================================== */
/*(function () {
    var nav  = document.getElementById('mainNav');
    var logo = document.getElementById('brandLogo');
    if (!nav || !logo) return;

    function onScroll() {
        var scrolled = window.scrollY > 10;
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
*/

/* ======================================================
   2) Changement de logo (clair / foncé) selon le scroll
   ====================================================== */
/* Logo et navbar sur login */
(function () {
    var nav  = document.getElementById('mainNav');
    var logo = document.getElementById('brandLogo');
    if (!nav || !logo) return;

    if (document.body.classList.contains('login-page')) {
        nav.classList.add('nav-login'); // ajoute classe CSS spéciale
        var loginLogo = logo.getAttribute('data-light'); // logo "clair" visible sur fond blanc
        if (loginLogo) logo.src = loginLogo;
        return; // stop le reste du JS
    }

    // Effet scroll normal sur les autres pages
    function onScroll() {
        var scrolled = window.scrollY > 10;
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



/* ======================================================
   3) Fermer le menu mobile au clic sur un lien (UX mobile)
   ====================================================== */
/*(function () {
    var navCollapse = document.getElementById('navbarNav'); // id de la div .collapse
    if (!navCollapse || typeof bootstrap === 'undefined' || !bootstrap.Collapse) return;

    navCollapse.addEventListener('click', function (e) {
        var t = e.target;
        if (t.matches('.nav-link, .dropdown-item')) {
            var bsCollapse = bootstrap.Collapse.getInstance(navCollapse);
            if (bsCollapse) bsCollapse.hide();
        }
    });
})(); */

/* ======================================================
   3) Navbar mobile – dropdown sans fermeture du burger (Correction)
   ====================================================== */

(function () {
    var navCollapse = document.getElementById('navbarNav');
    if (!navCollapse || typeof bootstrap === 'undefined') return;

    var isMobile = () => window.innerWidth < 992;

    // Empêche la fermeture du collapse uniquement quand on clique sur un dropdown toggle
    navCollapse.querySelectorAll('.dropdown-toggle').forEach(function (toggle) {
        toggle.addEventListener('click', function (e) {
            if (isMobile()) {
                e.stopPropagation(); // bloque seulement pour le dropdown
            }
        });
    });

    // Fermer le menu SEULEMENT quand on clique sur un vrai lien
    navCollapse.querySelectorAll('.nav-link:not(.dropdown-toggle), .dropdown-item').forEach(function (link) {
        link.addEventListener('click', function () {
            if (!isMobile()) return;
            var bsCollapse = bootstrap.Collapse.getInstance(navCollapse);
            if (bsCollapse) bsCollapse.hide();
        });
    });
})();


/* ======================================================
   4) Bouton "Retour en haut" (si présent dans le footer)
   ====================================================== */
(function () {
    var backBtn = document.querySelector('.site-footer .back-to-top');
    if (!backBtn) return;

    var showAt = 200;
    function onScrollBack() {
        backBtn.style.display = (window.scrollY > showAt) ? 'inline-flex' : 'none';
    }
    onScrollBack();
    window.addEventListener('scroll', onScrollBack, { passive: true });

    backBtn.addEventListener('click', function (e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
})();

/* ======================================================
   5) reCAPTCHA v3 – initialisation universelle
   ====================================================== */
/**
 * Appelée depuis base.html.twig si recaptcha_site est défini:
 *   window.addEventListener('load', () => AppacRecaptchaInit('{{ recaptcha_site }}'));
 */
window.AppacRecaptchaInit = function (siteKey) {
    function bindRecaptchaToForms() {
        if (!window.grecaptcha || !grecaptcha.execute) {
            setTimeout(bindRecaptchaToForms, 300);
            return;
        }
        document.querySelectorAll('form').forEach(function (form) {
            if (form.dataset.recaptchaBound === '1') return;
            form.dataset.recaptchaBound = '1';

            form.addEventListener('submit', function (e) {
                e.preventDefault();
                grecaptcha.execute(siteKey, { action: 'submit' }).then(function (token) {
                    var input = form.querySelector('input[name="g-recaptcha-response"]');
                    if (!input) {
                        input = document.createElement('input');
                        input.type = 'hidden';
                        input.name = 'g-recaptcha-response';
                        form.appendChild(input);
                    }
                    input.value = token;
                    form.submit();
                });
            }, { passive: false });
        });
    }

    if (window.grecaptcha && grecaptcha.ready) {
        grecaptcha.ready(bindRecaptchaToForms);
    } else {
        setTimeout(function () {
            if (window.grecaptcha && grecaptcha.ready) grecaptcha.ready(bindRecaptchaToForms);
            else bindRecaptchaToForms();
        }, 500);
    }
};

/* ======================================================
   6) Formulaire d’inscription – UI mot de passe
   ====================================================== */
document.addEventListener("DOMContentLoaded", function () {
    var pwd1 = document.getElementById("registration_form_password_first");
    var pwd2 = document.getElementById("registration_form_password_second");

    // --- Toggle Afficher/Masquer ---
    function attachToggle(inputId, btnId) {
        var input = document.getElementById(inputId);
        var btn   = document.getElementById(btnId);
        if (!input || !btn) return;
        btn.addEventListener("click", function (e) {
            e.preventDefault();
            var isPwd = input.type === "password";
            input.type = isPwd ? "text" : "password";
            btn.setAttribute("aria-pressed", String(isPwd));
            var eye = btn.querySelector("[data-eye]");
            if (eye) eye.textContent = isPwd ? "Masquer" : "Afficher";
        });
    }
    attachToggle("registration_form_password_first",  "pw-toggle-1");
    attachToggle("registration_form_password_second", "pw-toggle-2");

    // --- Indicateur de complexité ---
    var meter     = document.getElementById("pw-meter");
    var meterFill = document.getElementById("pw-meter-fill");
    var meterText = document.getElementById("pw-meter-text");

    function score(v) {
        var s = 0;
        if (!v) return 0;
        if (v.length >= 8) s++;
        if (/[a-z]/.test(v) && /[A-Z]/.test(v)) s++;
        if (/\d/.test(v)) s++;
        if (/[^A-Za-z0-9]/.test(v)) s++;
        return s; // 0..4
    }
    var labels = ["Très faible", "Faible", "Moyenne", "Bonne", "Excellente"];

    function render(val) {
        var sc = score(val);
        var pct = (sc / 4) * 100;
        if (meter && meterFill && meterText) {
            meter.style.opacity = val ? "1" : "0";
            meterFill.style.width = pct + "%";
            meterText.textContent = labels[sc];
        }
    }

    if (pwd1) {
        pwd1.addEventListener("input", function (e) { render(e.target.value); });
        render(pwd1.value);
    }
});
