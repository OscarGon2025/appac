<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/_footer.html.twig */
class __TwigTemplate_49196ef3513fa5233a21b058dce032ea extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        // line 2
        yield "<footer class=\"site-footer pt-5 pb-4 bg-black text-white-50\" role=\"contentinfo\" aria-label=\"Pied de page\">
    <div class=\"container\">
        <div class=\"row g-4\">

            ";
        // line 7
        yield "            <div class=\"col-12 col-md-6 col-lg-4\">
                <h5 class=\"text-white mb-3\">APPAC — Arzal-Camoël</h5>
                <address class=\"mb-2\">
                    <span>Port de plaisance d’Arzal</span><br>
                    <span>56190 Arzal, Morbihan — France</span>
                </address>
                <p class=\"mb-2\">
                    <a class=\"link-light link-underline-opacity-0\" href=\"mailto:contact@appac56.fr\">contact@appac56.fr</a>
                </p>
                ";
        // line 17
        yield "                ";
        // line 18
        yield "            </div>

            ";
        // line 21
        yield "            <nav class=\"col-6 col-md-3 col-lg-2\" aria-label=\"Liens rapides\">
                <h6 class=\"text-white mb-3\">Navigation</h6>
                <ul class=\"list-unstyled m-0\">
                    <li><a class=\"footer-link\" href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#about\">Qui sommes-nous ?</a></li>
                    <li><a class=\"footer-link\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#actus\">Actus</a></li>
                    <li><a class=\"footer-link\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\">Événements</a></li>
                    <li><a class=\"footer-link\" href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#partenaires\">Partenaires</a></li>
                    ";
        // line 29
        yield "                    ";
        // line 30
        yield "                </ul>
            </nav>

            ";
        // line 34
        yield "            <div class=\"col-6 col-md-3 col-lg-2\">
                <h6 class=\"text-white mb-3\">Suivez-nous</h6>
                <ul class=\"list-unstyled m-0\">
                    <li><a class=\"footer-link\" href=\"#\" target=\"_blank\" rel=\"noopener\"><i class=\"bi bi-facebook me-1\"></i> Facebook</a></li>
                    <li><a class=\"footer-link\" href=\"#\" target=\"_blank\" rel=\"noopener\"><i class=\"bi bi-instagram me-1\"></i> Instagram</a></li>
                    <li><a class=\"footer-link\" href=\"#\" target=\"_blank\" rel=\"noopener\"><i class=\"bi bi-youtube me-1\"></i> YouTube</a></li>
                </ul>
            </div>

            ";
        // line 44
        yield "            <div class=\"col-12 col-lg-4\">
                <h6 class=\"text-white mb-3\">Restez informé(e)</h6>
                <form class=\"d-flex gap-2\" action=\"#\" method=\"post\" aria-label=\"Inscription newsletter\">
                    <label for=\"newsletter-email\" class=\"visually-hidden\">E-mail</label>
                    <input id=\"newsletter-email\" name=\"email\" type=\"email\" class=\"form-control bg-transparent text-white\"
                           placeholder=\"Votre e-mail\" required>
                    <button class=\"btn btn-outline-light\" type=\"submit\">S’inscrire</button>
                </form>
                <small class=\"d-block mt-2\">En vous inscrivant, vous acceptez de recevoir nos actualités.</small>
            </div>
        </div>

        <hr class=\"border-secondary my-4\">

        <div class=\"d-flex flex-column flex-lg-row align-items-center justify-content-between gap-2\">
            <p class=\"m-0\">
                © ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Association des Plaisanciers d'Arzal — Tous droits réservés.
            </p>
            <ul class=\"list-inline m-0\">
                ";
        // line 64
        yield "                <li class=\"list-inline-item\">Mentions légales</li>
";
        // line 66
        yield "                <li class=\"list-inline-item\">·</li>
                <li class=\"list-inline-item\">Politique de confidentialité</li>
";
        // line 69
        yield "                <li class=\"list-inline-item\">·</li>
                <li class=\"list-inline-item\">CGU</li>
                ";
        // line 72
        yield "                <li class=\"list-inline-item\">·</li>
                <li class=\"list-inline-item\">RGPD</li>
                ";
        // line 75
        yield "
            </ul>
        </div>
    </div>

    ";
        // line 81
        yield "    <button type=\"button\" class=\"back-to-top btn btn-light btn-sm\" aria-label=\"Revenir en haut\">
        <i class=\"bi bi-chevron-up\"></i>
    </button>
</footer>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  156 => 81,  149 => 75,  145 => 72,  141 => 69,  137 => 66,  134 => 64,  128 => 60,  110 => 44,  99 => 34,  94 => 30,  92 => 29,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  71 => 21,  67 => 18,  65 => 17,  54 => 7,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Footer APPAC — templates/partials/_footer.html.twig #}
<footer class=\"site-footer pt-5 pb-4 bg-black text-white-50\" role=\"contentinfo\" aria-label=\"Pied de page\">
    <div class=\"container\">
        <div class=\"row g-4\">

            {# Columna 1: Adresse #}
            <div class=\"col-12 col-md-6 col-lg-4\">
                <h5 class=\"text-white mb-3\">APPAC — Arzal-Camoël</h5>
                <address class=\"mb-2\">
                    <span>Port de plaisance d’Arzal</span><br>
                    <span>56190 Arzal, Morbihan — France</span>
                </address>
                <p class=\"mb-2\">
                    <a class=\"link-light link-underline-opacity-0\" href=\"mailto:contact@appac56.fr\">contact@appac56.fr</a>
                </p>
                {# Optionnel: Portable #}
                {# <p class=\"mb-0\"><a class=\"link-light link-underline-opacity-0\" href=\"tel:+33XXXXXXXXX\">+33 X XX XX XX XX</a></p> #}
            </div>

            {# Columna 2: liens rapides  #}
            <nav class=\"col-6 col-md-3 col-lg-2\" aria-label=\"Liens rapides\">
                <h6 class=\"text-white mb-3\">Navigation</h6>
                <ul class=\"list-unstyled m-0\">
                    <li><a class=\"footer-link\" href=\"{{ path('app_home') }}#about\">Qui sommes-nous ?</a></li>
                    <li><a class=\"footer-link\" href=\"{{ path('app_home') }}#actus\">Actus</a></li>
                    <li><a class=\"footer-link\" href=\"{{ path('app_event_index') }}\">Événements</a></li>
                    <li><a class=\"footer-link\" href=\"{{ path('app_home') }}#partenaires\">Partenaires</a></li>
                    {# routes  #}
                    {# <li><a class=\"footer-link\" href=\"{{ path('app_contact') }}\">Contact</a></li> #}
                </ul>
            </nav>

            {# Columna 3: Reseaux  #}
            <div class=\"col-6 col-md-3 col-lg-2\">
                <h6 class=\"text-white mb-3\">Suivez-nous</h6>
                <ul class=\"list-unstyled m-0\">
                    <li><a class=\"footer-link\" href=\"#\" target=\"_blank\" rel=\"noopener\"><i class=\"bi bi-facebook me-1\"></i> Facebook</a></li>
                    <li><a class=\"footer-link\" href=\"#\" target=\"_blank\" rel=\"noopener\"><i class=\"bi bi-instagram me-1\"></i> Instagram</a></li>
                    <li><a class=\"footer-link\" href=\"#\" target=\"_blank\" rel=\"noopener\"><i class=\"bi bi-youtube me-1\"></i> YouTube</a></li>
                </ul>
            </div>

            {# Columna 4: Optionel #}
            <div class=\"col-12 col-lg-4\">
                <h6 class=\"text-white mb-3\">Restez informé(e)</h6>
                <form class=\"d-flex gap-2\" action=\"#\" method=\"post\" aria-label=\"Inscription newsletter\">
                    <label for=\"newsletter-email\" class=\"visually-hidden\">E-mail</label>
                    <input id=\"newsletter-email\" name=\"email\" type=\"email\" class=\"form-control bg-transparent text-white\"
                           placeholder=\"Votre e-mail\" required>
                    <button class=\"btn btn-outline-light\" type=\"submit\">S’inscrire</button>
                </form>
                <small class=\"d-block mt-2\">En vous inscrivant, vous acceptez de recevoir nos actualités.</small>
            </div>
        </div>

        <hr class=\"border-secondary my-4\">

        <div class=\"d-flex flex-column flex-lg-row align-items-center justify-content-between gap-2\">
            <p class=\"m-0\">
                © {{ \"now\"|date(\"Y\") }} Association des Plaisanciers d'Arzal — Tous droits réservés.
            </p>
            <ul class=\"list-inline m-0\">
                {# Crea estas rutas si aún no existen #}
                <li class=\"list-inline-item\">Mentions légales</li>
{#                <a class=\"footer-link\" href=\"{{ path('app_legal') }}\">/a>#}
                <li class=\"list-inline-item\">·</li>
                <li class=\"list-inline-item\">Politique de confidentialité</li>
{#                <a class=\"footer-link\" href=\"{{ path('app_privacy') }}\"></a>#}
                <li class=\"list-inline-item\">·</li>
                <li class=\"list-inline-item\">CGU</li>
                {#                <a class=\"footer-link\" href=\"{{ path('app_cgu') }}\"></a>#}
                <li class=\"list-inline-item\">·</li>
                <li class=\"list-inline-item\">RGPD</li>
                {#                <a class=\"footer-link\" href=\"{{ path('app_RGPD') }}\"></a>#}

            </ul>
        </div>
    </div>

    {# Bouton Back-to-top #}
    <button type=\"button\" class=\"back-to-top btn btn-light btn-sm\" aria-label=\"Revenir en haut\">
        <i class=\"bi bi-chevron-up\"></i>
    </button>
</footer>
", "partials/_footer.html.twig", "C:\\wamp64\\www\\appac\\templates\\partials\\_footer.html.twig");
    }
}
