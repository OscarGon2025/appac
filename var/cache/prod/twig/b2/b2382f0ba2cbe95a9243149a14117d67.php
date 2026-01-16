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
class __TwigTemplate_7105eb4d06eec4f2be4070430dde2764 extends Template
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
        // line 1
        yield "
";
        // line 2
        $context["navbar_is_transparent"] = ((array_key_exists("navbar_is_transparent", $context)) ? (Twig\Extension\CoreExtension::default(($context["navbar_is_transparent"] ?? null), false)) : (false));
        // line 3
        $context["current"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "attributes", [], "any", false, false, false, 3), "get", ["_route"], "method", false, false, false, 3);
        // line 4
        $context["base_classes"] = "navbar navbar-expand-lg festava-navbar navbar-dark";
        // line 5
        $context["state_class"] = (((($tmp = ($context["navbar_is_transparent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("navbar-ghost") : ("nav-solid"));
        // line 6
        yield "
<nav id=\"mainNav\"
     class=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_classes"] ?? null), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["state_class"] ?? null), "html", null, true);
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
        yield (((($context["current"] ?? null) == "app_home")) ? ("active") : (""));
        yield "\"
                       href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"
                       aria-current=\"";
        // line 44
        yield (((($context["current"] ?? null) == "app_home")) ? ("page") : (null));
        yield "\">
                        Accueil
                    </a>
                </li>

                ";
        // line 50
        yield "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 51
        yield (((is_string($_v0 = ($context["current"] ?? null)) && is_string($_v1 = "app_about") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
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
        yield (((is_string($_v2 = ($context["current"] ?? null)) && is_string($_v3 = "app_about") && str_starts_with($_v2, $_v3))) ? ("active") : (""));
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
        yield (((is_string($_v4 = ($context["current"] ?? null)) && is_string($_v5 = "app_about") && str_starts_with($_v4, $_v5))) ? ("active") : (""));
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
        yield (((is_string($_v6 = ($context["current"] ?? null)) && is_string($_v7 = "gallery_index") && str_starts_with($_v6, $_v7))) ? ("active") : (""));
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
        yield (((is_string($_v8 = ($context["current"] ?? null)) && is_string($_v9 = "app_about") && str_starts_with($_v8, $_v9))) ? ("active") : (""));
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        return array (  267 => 124,  261 => 121,  257 => 120,  254 => 119,  248 => 116,  244 => 115,  241 => 114,  238 => 113,  235 => 111,  229 => 100,  225 => 99,  222 => 98,  215 => 93,  211 => 92,  208 => 91,  200 => 85,  196 => 84,  192 => 83,  184 => 78,  181 => 77,  173 => 71,  169 => 70,  165 => 69,  161 => 68,  157 => 67,  149 => 62,  146 => 61,  139 => 56,  131 => 51,  128 => 50,  120 => 44,  116 => 43,  112 => 42,  109 => 41,  104 => 37,  92 => 26,  84 => 20,  80 => 19,  76 => 18,  70 => 15,  67 => 14,  57 => 8,  53 => 6,  51 => 5,  49 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/_navbar.html.twig", "C:\\wamp64\\www\\appac\\templates\\partials\\_navbar.html.twig");
    }
}
