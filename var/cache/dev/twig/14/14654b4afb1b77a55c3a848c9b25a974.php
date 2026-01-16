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

/* partials/_navbar.html.twig */
class __TwigTemplate_b57efaf31fef2974dc76aa688b5e92c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_navbar.html.twig"));

        // line 1
        yield "
";
        // line 2
        $context["navbar_is_transparent"] = ((array_key_exists("navbar_is_transparent", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["navbar_is_transparent"]) || array_key_exists("navbar_is_transparent", $context) ? $context["navbar_is_transparent"] : (function () { throw new RuntimeError('Variable "navbar_is_transparent" does not exist.', 2, $this->source); })()), false)) : (false));
        // line 3
        $context["current"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "attributes", [], "any", false, false, false, 3), "get", ["_route"], "method", false, false, false, 3);
        // line 4
        $context["base_classes"] = "navbar navbar-expand-lg festava-navbar navbar-dark";
        // line 5
        $context["state_class"] = (((($tmp = (isset($context["navbar_is_transparent"]) || array_key_exists("navbar_is_transparent", $context) ? $context["navbar_is_transparent"] : (function () { throw new RuntimeError('Variable "navbar_is_transparent" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("navbar-ghost") : ("nav-solid"));
        // line 6
        yield "
<nav id=\"mainNav\"
     class=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["base_classes"]) || array_key_exists("base_classes", $context) ? $context["base_classes"] : (function () { throw new RuntimeError('Variable "base_classes" does not exist.', 8, $this->source); })()), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["state_class"]) || array_key_exists("state_class", $context) ? $context["state_class"] : (function () { throw new RuntimeError('Variable "state_class" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "\"
     role=\"navigation\"
     aria-label=\"Navigation principale\">

    <div class=\"container\">
        ";
        // line 14
        yield "        <a class=\"navbar-brand p-0 me-2 d-flex align-items-center\"
           href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"
           aria-label=\"APPAC\">
            <img id=\"brandLogo\"
                 src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo-appac.svg"), "html", null, true);
        yield "\"
                 data-light=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo-appac.svg"), "html", null, true);
        yield "\"
                 data-dark=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo-appac-white.svg"), "html", null, true);
        yield "\"
                 alt=\"APPAC\"
                 class=\"brand-logo\">
        </a>

        ";
        // line 26
        yield "        <button class=\"navbar-toggler\"
                type=\"button\"
                data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarNav\"
                aria-controls=\"navbarNav\"
                aria-expanded=\"false\"
                aria-label=\"Basculer la navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        ";
        // line 37
        yield "        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav align-items-lg-center ms-auto me-lg-5\">

                ";
        // line 41
        yield "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 42
        yield ((((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 42, $this->source); })()) == "app_home")) ? ("active") : (""));
        yield "\"
                       href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"
                       aria-current=\"";
        // line 44
        yield ((((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 44, $this->source); })()) == "app_home")) ? ("page") : (null));
        yield "\">
                        Accueil
                    </a>
                </li>

                ";
        // line 50
        yield "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 51
        yield (((is_string($_v0 = (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 51, $this->source); })())) && is_string($_v1 = "app_about") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
        yield "\"
                       href=\"#\" id=\"aboutDropdown\" role=\"button\"
                       aria-expanded=\"false\">Activités<span class=\"dropdown-arrow\">▾</span>
                    </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"aboutDropdown\">
                    <li><a class=\"dropdown-item\" href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#events-section\">Événements</a></li>
                </ul>


                ";
        // line 61
        yield "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 62
        yield (((is_string($_v2 = (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 62, $this->source); })())) && is_string($_v3 = "app_about") && str_starts_with($_v2, $_v3))) ? ("active") : (""));
        yield "\"
                       href=\"#\" id=\"aboutDropdown\" role=\"button\"
                       aria-expanded=\"false\">Vie de l'association<span class=\"dropdown-arrow\">▾</span>
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"aboutDropdown\">
                        <li><a class=\"dropdown-item\" href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#about\">Qui sommes-nous ?</a></li>
                        <li><a class=\"dropdown-item\" href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("board_member_organigram");
        yield "\">Trombinoscope CA</a></li>
                        <li><a class=\"dropdown-item\" href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#actus\">Actualités</a></li>
                        <li><a class=\"dropdown-item\" href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#\">Nos status</a></li>
                        <li><a class=\"dropdown-item\" href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#\">Archives</a></li>
                    </ul>
                </li>


                ";
        // line 77
        yield "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 78
        yield (((is_string($_v4 = (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 78, $this->source); })())) && is_string($_v5 = "app_about") && str_starts_with($_v4, $_v5))) ? ("active") : (""));
        yield "\"
                       href=\"#\" id=\"aboutDropdown\" role=\"button\"
                       aria-expanded=\"false\">Infos pratiques<span class=\"dropdown-arrow\">▾</span>
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"aboutDropdown\">
                        <li><a class=\"dropdown-item\" href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#\">Règlementation</a></li>
                        <li><a class=\"dropdown-item\" href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#\">Petites annonces</a></li>
                        <li><a class=\"dropdown-item\" href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#partenaires\">Partenaires et Informations</a></li>
                    </ul>
                </li>


                ";
        // line 91
        yield "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 92
        yield (((is_string($_v6 = (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 92, $this->source); })())) && is_string($_v7 = "gallery_index") && str_starts_with($_v6, $_v7))) ? ("active") : (""));
        yield "\"
                       href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery_index");
        yield "\">Galerie photo</a>
                </li>


                ";
        // line 98
        yield "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 99
        yield (((is_string($_v8 = (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 99, $this->source); })())) && is_string($_v9 = "app_about") && str_starts_with($_v8, $_v9))) ? ("active") : (""));
        yield "\"
                       href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#contact\">Contactez-nous</a>
                </li>

";
        // line 111
        yield "
            ";
        // line 113
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 114
            yield "                <div class=\"d-flex gap-2\">
                    <a href=\"";
            // line 115
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            yield "\" class=\"btn btn-outline-light\">Mon compte</a>
                    <a href=\"";
            // line 116
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"btn custom-btn\">Déconnexion</a>
                </div>
            ";
        } else {
            // line 119
            yield "                <div class=\"d-flex gap-2\">
                    <a href=\"";
            // line 120
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn custom-btn\">Connexion</a>
                    <a href=\"";
            // line 121
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"btn btn-outline-light\">S'inscrire</a>
                </div>
            ";
        }
        // line 124
        yield "        </div>
    </div>
</nav>
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
        return "partials/_navbar.html.twig";
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
        return array (  273 => 124,  267 => 121,  263 => 120,  260 => 119,  254 => 116,  250 => 115,  247 => 114,  244 => 113,  241 => 111,  235 => 100,  231 => 99,  228 => 98,  221 => 93,  217 => 92,  214 => 91,  206 => 85,  202 => 84,  198 => 83,  190 => 78,  187 => 77,  179 => 71,  175 => 70,  171 => 69,  167 => 68,  163 => 67,  155 => 62,  152 => 61,  145 => 56,  137 => 51,  134 => 50,  126 => 44,  122 => 43,  118 => 42,  115 => 41,  110 => 37,  98 => 26,  90 => 20,  86 => 19,  82 => 18,  76 => 15,  73 => 14,  63 => 8,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% set navbar_is_transparent = navbar_is_transparent|default(false) %}
{% set current = app.request.attributes.get('_route') %}
{% set base_classes = 'navbar navbar-expand-lg festava-navbar navbar-dark' %}
{% set state_class = navbar_is_transparent ? 'navbar-ghost' : 'nav-solid' %}

<nav id=\"mainNav\"
     class=\"{{ base_classes }} {{ state_class }}\"
     role=\"navigation\"
     aria-label=\"Navigation principale\">

    <div class=\"container\">
        {# Brand #}
        <a class=\"navbar-brand p-0 me-2 d-flex align-items-center\"
           href=\"{{ path('app_home') }}\"
           aria-label=\"APPAC\">
            <img id=\"brandLogo\"
                 src=\"{{ asset('images/logo/logo-appac.svg') }}\"
                 data-light=\"{{ asset('images/logo/logo-appac.svg') }}\"
                 data-dark=\"{{ asset('images/logo/logo-appac-white.svg') }}\"
                 alt=\"APPAC\"
                 class=\"brand-logo\">
        </a>

        {# Toggler mobile #}
        <button class=\"navbar-toggler\"
                type=\"button\"
                data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarNav\"
                aria-controls=\"navbarNav\"
                aria-expanded=\"false\"
                aria-label=\"Basculer la navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        {# Menu #}
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav align-items-lg-center ms-auto me-lg-5\">

                {#Accueil#}
                <li class=\"nav-item\">
                    <a class=\"nav-link {{ current == 'app_home' ? 'active' : '' }}\"
                       href=\"{{ path('app_home') }}\"
                       aria-current=\"{{ current == 'app_home' ? 'page' : null }}\">
                        Accueil
                    </a>
                </li>

                {#Activités#}
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle {{ current starts with 'app_about' ? 'active' : '' }}\"
                       href=\"#\" id=\"aboutDropdown\" role=\"button\"
                       aria-expanded=\"false\">Activités<span class=\"dropdown-arrow\">▾</span>
                    </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"aboutDropdown\">
                    <li><a class=\"dropdown-item\" href=\"{{ path('app_home') }}#events-section\">Événements</a></li>
                </ul>


                {#Vie de l'association#}
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle {{ current starts with 'app_about' ? 'active' : '' }}\"
                       href=\"#\" id=\"aboutDropdown\" role=\"button\"
                       aria-expanded=\"false\">Vie de l'association<span class=\"dropdown-arrow\">▾</span>
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"aboutDropdown\">
                        <li><a class=\"dropdown-item\" href=\"{{ path('app_home') }}#about\">Qui sommes-nous ?</a></li>
                        <li><a class=\"dropdown-item\" href=\"{{ path('board_member_organigram') }}\">Trombinoscope CA</a></li>
                        <li><a class=\"dropdown-item\" href=\"{{ path('app_home') }}#actus\">Actualités</a></li>
                        <li><a class=\"dropdown-item\" href=\"{{ path('app_home') }}#\">Nos status</a></li>
                        <li><a class=\"dropdown-item\" href=\"{{ path('app_home') }}#\">Archives</a></li>
                    </ul>
                </li>


                {#Infos pratiques#}
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle {{ current starts with 'app_about' ? 'active' : '' }}\"
                       href=\"#\" id=\"aboutDropdown\" role=\"button\"
                       aria-expanded=\"false\">Infos pratiques<span class=\"dropdown-arrow\">▾</span>
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"aboutDropdown\">
                        <li><a class=\"dropdown-item\" href=\"{{ path('app_home') }}#\">Règlementation</a></li>
                        <li><a class=\"dropdown-item\" href=\"{{ path('app_home') }}#\">Petites annonces</a></li>
                        <li><a class=\"dropdown-item\" href=\"{{ path('app_home') }}#partenaires\">Partenaires et Informations</a></li>
                    </ul>
                </li>


                {#Galerie photo#}
                <li class=\"nav-item\">
                    <a class=\"nav-link {{ current starts with 'gallery_index' ? 'active' : '' }}\"
                       href=\"{{ path('gallery_index') }}\">Galerie photo</a>
                </li>


                {#Contactez-nous#}
                <li class=\"nav-item\">
                    <a class=\"nav-link {{ current starts with 'app_about' ? 'active' : '' }}\"
                       href=\"{{ path('app_home') }}#contact\">Contactez-nous</a>
                </li>

{#                <li class=\"nav-item\">#}
{#                    <a class=\"nav-link {{ current starts with 'board_member_organigram' ? 'active' : '' }}\"#}
{#                       href=\"{{ path('board_member_organigram') }}\"#}
{#                       aria-current=\"{{ current starts with 'board_member_organigram' ? 'page' : null }}\">#}
{#                        Trombinoscope#}
{#                    </a>#}
{#                </li>#}
{#            </ul>#}

            {# CTA derecha #}
            {% if app.user %}
                <div class=\"d-flex gap-2\">
                    <a href=\"{{ path('app_account') }}\" class=\"btn btn-outline-light\">Mon compte</a>
                    <a href=\"{{ path('app_logout') }}\" class=\"btn custom-btn\">Déconnexion</a>
                </div>
            {% else %}
                <div class=\"d-flex gap-2\">
                    <a href=\"{{ path('app_login') }}\" class=\"btn custom-btn\">Connexion</a>
                    <a href=\"{{ path('app_register') }}\" class=\"btn btn-outline-light\">S'inscrire</a>
                </div>
            {% endif %}
        </div>
    </div>
</nav>
", "partials/_navbar.html.twig", "C:\\wamp64\\www\\appac\\templates\\partials\\_navbar.html.twig");
    }
}
