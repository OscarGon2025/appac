/* ============================================================================
   APPAC - JS global (navbar, layout, formulaires)
   ============================================================================ */

(function () {
  "use strict";

  /* ======================================================
     Helpers
     ====================================================== */
  function isMobile() {
    return window.innerWidth < 992; // Bootstrap lg breakpoint
  }

  function qs(sel, root) {
    return (root || document).querySelector(sel);
  }

  function qsa(sel, root) {
    return Array.prototype.slice.call((root || document).querySelectorAll(sel));
  }

  /* ======================================================
     1) NAVBAR : transparente ⇄ solide + padding dynamique
     + fermeture mobile fiable (toggler / X / liens)
     ====================================================== */
  (function navbarInit() {
    var nav = document.getElementById("mainNav");
    if (!nav) return;

    var hero = document.querySelector(".hero-section");
    var topbar = document.getElementById("siteHeader");
    var navCollapse = document.getElementById("navbarNav");
    var toggler = document.querySelector('[data-bs-target="#navbarNav"], [data-bs-toggle="collapse"][aria-controls="navbarNav"]');

    // Page login : on force un état stable et on sort (pas de scroll logic)
    if (document.body.classList.contains("login-page")) {
      nav.classList.add("nav-login", "nav-solid");
      nav.classList.remove("is-transparent", "position-absolute", "top-0", "start-0", "w-100");
      updateNavbarPadding();
      return;
    }

    function hasTransparentNav() {
      return nav.classList.contains("is-transparent");
    }

    function toSolid() {
      nav.classList.add("nav-solid");
      nav.classList.remove("is-transparent", "position-absolute", "top-0", "start-0", "w-100");
    }

    function toTransparent() {
      nav.classList.remove("nav-solid");
      nav.classList.add("is-transparent", "position-absolute", "top-0", "start-0", "w-100");
    }

    function onScrollNav() {
      if (!hasTransparentNav()) return; // pages enfants => déjà solide
      if (window.scrollY > 10) toSolid();
      else toTransparent();
      updateNavbarPadding();
    }

    // Padding dynamique du body en fonction de la hauteur topbar + navbar
    function computeNavbarHeight() {
      var h = 0;
      if (topbar) h += topbar.offsetHeight || 0;

      // Si la navbar est en overlay (absolute/transparente), on n'ajoute pas sa hauteur
      var navIsOverlay = nav.classList.contains("position-absolute") || nav.classList.contains("is-transparent");
      if (!navIsOverlay) h += nav.offsetHeight || 0;

      return h;
    }

    function updateNavbarPadding() {
      var h = computeNavbarHeight();
      document.documentElement.style.setProperty("--navbar-h", h + "px");
    }

    // Init état nav
    if (hasTransparentNav()) {
      if (!hero) {
        toSolid();
      } else {
        onScrollNav();
        window.addEventListener("scroll", onScrollNav, { passive: true });
        window.addEventListener("resize", onScrollNav);

        var video = hero.querySelector("video");
        if (video) {
          video.addEventListener("loadeddata", onScrollNav);
          video.addEventListener("error", onScrollNav);
        }
      }
    } else {
      // navbar non transparente => on set le padding direct
      updateNavbarPadding();
    }

    window.addEventListener("load", updateNavbarPadding);
    window.addEventListener("resize", updateNavbarPadding);
    setTimeout(updateNavbarPadding, 200);
    setTimeout(updateNavbarPadding, 600);

    // ResizeObserver (menu open/close change la hauteur)
    try {
      var ro = new ResizeObserver(updateNavbarPadding);
      ro.observe(nav);
      if (topbar) ro.observe(topbar);
      if (navCollapse) ro.observe(navCollapse);
    } catch (e) {
      // ignore
    }

    // --- Fermeture mobile du menu (liens + bouton close + toggler) ---
    if (!navCollapse || typeof window.bootstrap === "undefined" || !window.bootstrap.Collapse) return;

    function getCollapseInstance() {
      // getOrCreateInstance existe sur Bootstrap 5.2+
      if (window.bootstrap.Collapse.getOrCreateInstance) {
        return window.bootstrap.Collapse.getOrCreateInstance(navCollapse, { toggle: false });
      }
      var inst = window.bootstrap.Collapse.getInstance(navCollapse);
      if (!inst) inst = new window.bootstrap.Collapse(navCollapse, { toggle: false });
      return inst;
    }

    function hideMenu() {
      if (!isMobile()) return;
      var inst = getCollapseInstance();
      inst.hide();
    }

    // 1) Event delegation dans le collapse
    navCollapse.addEventListener("click", function (e) {
      var t = e.target;

      // Si clic sur un dropdown-toggle => on ne ferme pas le menu
      if (t && (t.classList.contains("dropdown-toggle") || t.closest(".dropdown-toggle"))) {
        // Important: on laisse Bootstrap gérer l'ouverture du dropdown
        // mais on évite que notre logique ferme le collapse.
        return;
      }

      // Si clic sur un lien normal => ferme
      if (t && (t.matches(".nav-link:not(.dropdown-toggle), .dropdown-item") || t.closest(".nav-link:not(.dropdown-toggle), .dropdown-item"))) {
        hideMenu();
        return;
      }

      // Si tu as un bouton X custom dans le menu, donne-lui une de ces classes/attributs
      // <button class="js-nav-close">×</button>  OU  data-nav-close="1"
      if (t && (t.matches(".js-nav-close, [data-nav-close='1'], [data-bs-dismiss='collapse']") || t.closest(".js-nav-close, [data-nav-close='1'], [data-bs-dismiss='collapse']"))) {
        hideMenu();
        return;
      }
    });

    // 2) Si ton "X" est en réalité le même toggler (icône qui change),
    // Bootstrap gère déjà open/close. Mais au cas où ton X est un autre élément,
    // tu peux aussi lui mettre class js-nav-close / data-nav-close=1.

    // 3) Quand on ouvre/ferme, on recalc padding
    navCollapse.addEventListener("shown.bs.collapse", updateNavbarPadding);
    navCollapse.addEventListener("hidden.bs.collapse", updateNavbarPadding);

    // 4) Sécurité : si on passe desktop, on ferme le menu mobile
    window.addEventListener("resize", function () {
      if (!isMobile()) {
        var inst = window.bootstrap.Collapse.getInstance(navCollapse);
        if (inst) inst.hide();
      }
    });
  })();

  /* ======================================================
     2) Changement de logo (clair / foncé) selon le scroll
     ====================================================== */
  (function logoSwitch() {
    var nav = document.getElementById("mainNav");
    var logo = document.getElementById("brandLogo");
    if (!nav || !logo) return;

    // Sur login : logo clair (fond blanc) et stop
    if (document.body.classList.contains("login-page")) {
      var loginLogo = logo.getAttribute("data-light");
      if (loginLogo) logo.src = loginLogo;
      return;
    }

    function onScroll() {
      var scrolled = window.scrollY > 10;
      nav.classList.toggle("is-scrolled", scrolled);

      var light = logo.getAttribute("data-light");
      var dark = logo.getAttribute("data-dark");
      if (light && dark) {
        logo.src = scrolled ? dark : light;
      }
    }

    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
  })();

  /* ======================================================
     3) Bouton "Retour en haut" (si présent)
     ====================================================== */
  (function backToTop() {
    var backBtn = document.querySelector(".site-footer .back-to-top");
    if (!backBtn) return;

    var showAt = 200;

    function onScrollBack() {
      backBtn.style.display = window.scrollY > showAt ? "inline-flex" : "none";
    }

    onScrollBack();
    window.addEventListener("scroll", onScrollBack, { passive: true });

    backBtn.addEventListener("click", function (e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  })();

  /* ======================================================
     4) reCAPTCHA v3 – initialisation universelle
     ====================================================== */
  window.AppacRecaptchaInit = function (siteKey) {
    if (!siteKey) return;

    function bindRecaptchaToForms() {
      if (!window.grecaptcha || !grecaptcha.execute) {
        setTimeout(bindRecaptchaToForms, 300);
        return;
      }

      document.querySelectorAll("form").forEach(function (form) {
        // Évite les doubles bindings
        if (form.dataset.recaptchaBound === "1") return;
        form.dataset.recaptchaBound = "1";

        form.addEventListener(
          "submit",
          function (e) {
            // Si déjà en cours, ne pas boucler
            if (form.dataset.recaptchaSubmitting === "1") return;

            e.preventDefault();
            form.dataset.recaptchaSubmitting = "1";

            grecaptcha
              .execute(siteKey, { action: "submit" })
              .then(function (token) {
                var input = form.querySelector('input[name="g-recaptcha-response"]');
                if (!input) {
                  input = document.createElement("input");
                  input.type = "hidden";
                  input.name = "g-recaptcha-response";
                  form.appendChild(input);
                }
                input.value = token;

                // Laisse le submit continuer
                form.submit();
              })
              .catch(function () {
                // En cas d’erreur, on autorise à resoumettre
                form.dataset.recaptchaSubmitting = "0";
                form.submit(); // ou tu peux choisir de bloquer et afficher un message
              });
          },
          { passive: false }
        );
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
     5) Formulaire d’inscription – UI mot de passe
     ====================================================== */
  document.addEventListener("DOMContentLoaded", function () {
    var pwd1 = document.getElementById("registration_form_password_first");

    function attachToggle(inputId, btnId) {
      var input = document.getElementById(inputId);
      var btn = document.getElementById(btnId);
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

    attachToggle("registration_form_password_first", "pw-toggle-1");
    attachToggle("registration_form_password_second", "pw-toggle-2");

    var meter = document.getElementById("pw-meter");
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
      if (!meter || !meterFill || !meterText) return;
      var sc = score(val);
      var pct = (sc / 4) * 100;

      meter.style.opacity = val ? "1" : "0";
      meterFill.style.width = pct + "%";
      meterText.textContent = labels[sc];
    }

    if (pwd1) {
      pwd1.addEventListener("input", function (e) {
        render(e.target.value);
      });
      render(pwd1.value);
    }
  });
})();
