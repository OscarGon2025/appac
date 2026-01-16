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

/* classified_ad/show.html.twig */
class __TwigTemplate_275f9f9382c860947ec1626000923d42 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classified_ad/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classified_ad/show.html.twig"));

        // line 3
        $context["navbar_is_transparent"] = false;
        // line 2
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        yield " — Petites annonces";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "    <section class=\"container-lg px-4 py-5 pt-lg-5 mt-5\" id=\"ad-show\">
        <nav aria-label=\"Fil d’Ariane\" class=\"mb-3\">
            <ol class=\"breadcrumb bg-transparent px-0 mb-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-decoration-none\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classified_index");
        yield "\" class=\"text-decoration-none\">Petites annonces</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12)), "truncate", [40, "…"], "method", false, false, false, 12), "html", null, true);
        yield "</li>
            </ol>
        </nav>

        <div class=\"row g-4\">
            ";
        // line 20
        yield "            <div class=\"col-lg-7\">
                ";
        // line 21
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 21, $this->source); })()), "photos", [], "any", false, false, false, 21)) > 0)) {
            // line 22
            yield "                    <div id=\"adPhotos\" class=\"carousel slide rounded overflow-hidden shadow-sm\">
                        <div class=\"carousel-inner\">
                            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 24, $this->source); })()), "photos", [], "any", false, false, false, 24));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 25
                yield "                                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "fileName", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 26
                    yield "                                    <div class=\"carousel-item ";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                    yield "\">
                                        <img
                                            src=\"";
                    // line 28
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/classifieds/" . CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "fileName", [], "any", false, false, false, 28))), "ad_large"), "html", null, true);
                    yield "\"
                                            class=\"d-block w-100 ad-photo\"
                                            alt=\"";
                    // line 30
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 30, $this->source); })()), "title", [], "any", false, false, false, 30) . " — photo ") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30)), "html", null, true);
                    yield "\"
                                            loading=\"lazy\">
                                    </div>
                                ";
                }
                // line 34
                yield "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "                        </div>

                        ";
            // line 37
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 37, $this->source); })()), "photos", [], "any", false, false, false, 37)) > 1)) {
                // line 38
                yield "                            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#adPhotos\" data-bs-slide=\"prev\" aria-label=\"Précédente\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            </button>
                            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#adPhotos\" data-bs-slide=\"next\" aria-label=\"Suivante\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            </button>
                        ";
            }
            // line 45
            yield "                    </div>
                ";
        } else {
            // line 47
            yield "                    <div class=\"ratio ratio-16x9 bg-light rounded d-flex align-items-center justify-content-center text-muted\">
                        <span>Aucune photo</span>
                    </div>
                ";
        }
        // line 51
        yield "            </div>

            ";
        // line 56
        yield "            <div class=\"col-lg-5\">
                <div class=\"card shadow-sm border-0\">
                    <div class=\"card-body\">
                        ";
        // line 59
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 59, $this->source); })()), "status", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "                            <span class=\"badge
              ";
            // line 61
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 61, $this->source); })()), "status", [], "any", false, false, false, 61), "value", [], "any", false, false, false, 61) == "APPROVED")) {
                yield "text-bg-success
              ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 62
(isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 62, $this->source); })()), "status", [], "any", false, false, false, 62), "value", [], "any", false, false, false, 62) == "PENDING")) {
                yield "text-bg-warning
              ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 63
(isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 63, $this->source); })()), "status", [], "any", false, false, false, 63), "value", [], "any", false, false, false, 63) == "REJECTED")) {
                yield "text-bg-danger
              ";
            } else {
                // line 64
                yield "text-bg-secondary
              ";
            }
            // line 66
            yield "            \">Disponible</span>
                        ";
        }
        // line 68
        yield "
                        <h1 class=\"h3 mt-2 mb-3\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 69, $this->source); })()), "title", [], "any", false, false, false, 69), "html", null, true);
        yield "</h1>

                        <ul class=\"list-unstyled small text-muted mb-3\">
                            ";
        // line 72
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 72, $this->source); })()), "condition", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<li><strong>État :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 72, $this->source); })()), "condition", [], "any", false, false, false, 72), "html", null, true);
            yield "</li>";
        }
        // line 73
        yield "                            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 73, $this->source); })()), "location", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<li><strong>Localisation :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 73, $this->source); })()), "location", [], "any", false, false, false, 73), "html", null, true);
            yield "</li>";
        }
        // line 74
        yield "                            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 74, $this->source); })()), "publishedAt", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<li><strong>Publiée :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 74, $this->source); })()), "publishedAt", [], "any", false, false, false, 74), "d/m/Y"), "html", null, true);
            yield "</li>";
        }
        // line 75
        yield "                        </ul>

                        <div class=\"d-flex align-items-baseline justify-content-end mb-3\">
            <span class=\"fs-3 fw-bold\">
              ";
        // line 79
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 79, $this->source); })()), "price", [], "any", false, false, false, 79))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 79, $this->source); })()), "price", [], "any", false, false, false, 79), 0, ",", " "), "html", null, true);
            yield " €";
        } else {
            yield "-";
        }
        // line 80
        yield "            </span>
                        </div>

                        ";
        // line 83
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 83, $this->source); })()), "description", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "                            <h2 class=\"h6\">Description</h2>
                            <p>";
            // line 85
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 85, $this->source); })()), "description", [], "any", false, false, false, 85), "html", null, true));
            yield "</p>
                        ";
        }
        // line 87
        yield "
                        <a href=\"mailto:contact@appac56.fr?subject=ANNONCE%20";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88), "html", null, true);
        yield "\"
                           class=\"btn btn-primary w-100 mt-3\">Contacter le vendeur</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* altura agradable y cover */
        #ad-show .ad-photo {
            aspect-ratio: 16/9;
            object-fit: cover;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "classified_ad/show.html.twig";
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
        return array (  306 => 88,  303 => 87,  298 => 85,  295 => 84,  293 => 83,  288 => 80,  281 => 79,  275 => 75,  268 => 74,  261 => 73,  255 => 72,  249 => 69,  246 => 68,  242 => 66,  238 => 64,  233 => 63,  229 => 62,  225 => 61,  222 => 60,  220 => 59,  215 => 56,  211 => 51,  205 => 47,  201 => 45,  192 => 38,  190 => 37,  186 => 35,  172 => 34,  165 => 30,  160 => 28,  154 => 26,  151 => 25,  134 => 24,  130 => 22,  128 => 21,  125 => 20,  117 => 12,  113 => 11,  109 => 10,  104 => 7,  91 => 6,  67 => 4,  56 => 2,  54 => 3,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/classified_ad/index.html.twig #}
{% extends 'base.html.twig' %}
{% set navbar_is_transparent = false %}
{% block title %}{{ ad.title }} — Petites annonces{% endblock %}

{% block body %}
    <section class=\"container-lg px-4 py-5 pt-lg-5 mt-5\" id=\"ad-show\">
        <nav aria-label=\"Fil d’Ariane\" class=\"mb-3\">
            <ol class=\"breadcrumb bg-transparent px-0 mb-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\" class=\"text-decoration-none\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_classified_index') }}\" class=\"text-decoration-none\">Petites annonces</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ ad.title|u.truncate(40, '…') }}</li>
            </ol>
        </nav>

        <div class=\"row g-4\">
            {# =========================
       Columna de fotos
       ========================= #}
            <div class=\"col-lg-7\">
                {% if ad.photos|length > 0 %}
                    <div id=\"adPhotos\" class=\"carousel slide rounded overflow-hidden shadow-sm\">
                        <div class=\"carousel-inner\">
                            {% for photo in ad.photos %}
                                {% if photo.fileName %}
                                    <div class=\"carousel-item {{ loop.first ? 'active' : '' }}\">
                                        <img
                                            src=\"{{ asset('uploads/classifieds/' ~ photo.fileName) | imagine_filter('ad_large') }}\"
                                            class=\"d-block w-100 ad-photo\"
                                            alt=\"{{ ad.title ~ ' — photo ' ~ loop.index }}\"
                                            loading=\"lazy\">
                                    </div>
                                {% endif %}
                            {% endfor %}
                        </div>

                        {% if ad.photos|length > 1 %}
                            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#adPhotos\" data-bs-slide=\"prev\" aria-label=\"Précédente\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            </button>
                            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#adPhotos\" data-bs-slide=\"next\" aria-label=\"Suivante\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            </button>
                        {% endif %}
                    </div>
                {% else %}
                    <div class=\"ratio ratio-16x9 bg-light rounded d-flex align-items-center justify-content-center text-muted\">
                        <span>Aucune photo</span>
                    </div>
                {% endif %}
            </div>

            {# =========================
       Columna info
       ========================= #}
            <div class=\"col-lg-5\">
                <div class=\"card shadow-sm border-0\">
                    <div class=\"card-body\">
                        {% if ad.status %}
                            <span class=\"badge
              {% if ad.status.value == 'APPROVED' %}text-bg-success
              {% elseif ad.status.value == 'PENDING' %}text-bg-warning
              {% elseif ad.status.value == 'REJECTED' %}text-bg-danger
              {% else %}text-bg-secondary
              {% endif %}
            \">Disponible</span>
                        {% endif %}

                        <h1 class=\"h3 mt-2 mb-3\">{{ ad.title }}</h1>

                        <ul class=\"list-unstyled small text-muted mb-3\">
                            {% if ad.condition %}<li><strong>État :</strong> {{ ad.condition }}</li>{% endif %}
                            {% if ad.location %}<li><strong>Localisation :</strong> {{ ad.location }}</li>{% endif %}
                            {% if ad.publishedAt %}<li><strong>Publiée :</strong> {{ ad.publishedAt|date('d/m/Y') }}</li>{% endif %}
                        </ul>

                        <div class=\"d-flex align-items-baseline justify-content-end mb-3\">
            <span class=\"fs-3 fw-bold\">
              {% if ad.price is not null %}{{ ad.price|number_format(0, ',', ' ') }} €{% else %}-{% endif %}
            </span>
                        </div>

                        {% if ad.description %}
                            <h2 class=\"h6\">Description</h2>
                            <p>{{ ad.description|nl2br }}</p>
                        {% endif %}

                        <a href=\"mailto:contact@appac56.fr?subject=ANNONCE%20{{ ad.id }}\"
                           class=\"btn btn-primary w-100 mt-3\">Contacter le vendeur</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* altura agradable y cover */
        #ad-show .ad-photo {
            aspect-ratio: 16/9;
            object-fit: cover;
        }
    </style>
{% endblock %}
", "classified_ad/show.html.twig", "C:\\wamp64\\www\\appac\\templates\\classified_ad\\show.html.twig");
    }
}
