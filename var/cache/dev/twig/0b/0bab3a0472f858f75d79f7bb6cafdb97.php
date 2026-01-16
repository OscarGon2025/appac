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

/* partials/_classifieds_home.html.twig */
class __TwigTemplate_48c0792cb62a2a84161f2b0101551d60 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_classifieds_home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_classifieds_home.html.twig"));

        // line 2
        yield "<section id=\"classifieds\" class=\"section-padding bg-white\" aria-labelledby=\"classifieds-title\">
    <div class=\"container\">
        <div class=\"row mb-4\">
            <div class=\"col-12 text-center\">
                <h2 id=\"classifieds-title\" class=\"mb-2\">Petites annonces</h2>
                <p class=\"text-muted mb-0\">Les dernières annonces approuvées par l’association</p>
            </div>
        </div>

        <div class=\"row\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["latestAds"]) || array_key_exists("latestAds", $context) ? $context["latestAds"] : (function () { throw new RuntimeError('Variable "latestAds" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 13
            yield "                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <article class=\"card h-100 shadow-sm\">
                        ";
            // line 16
            yield "                        ";
            $context["thumb"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholders/classified_no_image.png");
            // line 17
            yield "
                        ";
            // line 18
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "photos", [], "any", true, true, false, 18) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "photos", [], "any", false, false, false, 18)) > 0))) {
                // line 19
                yield "                            ";
                $context["first"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "photos", [], "any", false, false, false, 19));
                // line 20
                yield "                            ";
                if ((($tmp = (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 20, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 21
                    yield "                                ";
                    // line 22
                    yield "                                ";
                    $context["vichUrl"] = ((($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 22, $this->source); })()), "imageFile") &&  !(null === $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 22, $this->source); })()), "imageFile")))) ? ($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 22, $this->source); })()), "imageFile")) : (null));
                    // line 23
                    yield "
                                ";
                    // line 24
                    if ((($tmp = (isset($context["vichUrl"]) || array_key_exists("vichUrl", $context) ? $context["vichUrl"] : (function () { throw new RuntimeError('Variable "vichUrl" does not exist.', 24, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 25
                        yield "                                    ";
                        $context["thumb"] = (isset($context["vichUrl"]) || array_key_exists("vichUrl", $context) ? $context["vichUrl"] : (function () { throw new RuntimeError('Variable "vichUrl" does not exist.', 25, $this->source); })());
                        // line 26
                        yield "                                ";
                    } else {
                        // line 27
                        yield "                                    ";
                        // line 28
                        yield "                                    ";
                        $context["fileName"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "fileName", [], "any", true, true, false, 28) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 28, $this->source); })()), "fileName", [], "any", false, false, false, 28)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 28, $this->source); })()), "fileName", [], "any", false, false, false, 28)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "filename", [], "any", true, true, false, 28) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 28, $this->source); })()), "filename", [], "any", false, false, false, 28)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 28, $this->source); })()), "filename", [], "any", false, false, false, 28)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "name", [], "any", true, true, false, 28) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28)) : (null))))));
                        // line 29
                        yield "                                    ";
                        if ((($tmp = (isset($context["fileName"]) || array_key_exists("fileName", $context) ? $context["fileName"] : (function () { throw new RuntimeError('Variable "fileName" does not exist.', 29, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 30
                            yield "                                        ";
                            $context["thumb"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/classifieds/" . (isset($context["fileName"]) || array_key_exists("fileName", $context) ? $context["fileName"] : (function () { throw new RuntimeError('Variable "fileName" does not exist.', 30, $this->source); })())));
                            // line 31
                            yield "                                    ";
                        }
                        // line 32
                        yield "                                ";
                    }
                    // line 33
                    yield "                            ";
                }
                // line 34
                yield "                        ";
            }
            // line 35
            yield "
                        <img
                            src=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["thumb"]) || array_key_exists("thumb", $context) ? $context["thumb"] : (function () { throw new RuntimeError('Variable "thumb" does not exist.', 37, $this->source); })()), "ad_thumb"), "html", null, true);
            yield "\"
                            class=\"card-img-top\"
                            alt=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "title", [], "any", false, false, false, 39), "html", null, true);
            yield "\"
                            loading=\"lazy\"
                        >

                        <div class=\"card-body d-flex flex-column\">
                            <h3 class=\"h6 card-title mb-2 text-truncate\" title=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "title", [], "any", false, false, false, 44), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "title", [], "any", false, false, false, 44), "html", null, true);
            yield "</h3>
                            ";
            // line 45
            if (CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "description", [], "any", true, true, false, 45)) {
                // line 46
                yield "                                <p class=\"card-text text-muted small mb-3\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "description", [], "any", false, false, false, 46)), "truncate", [120, "…", false], "method", false, false, false, 46), "html", null, true);
                yield "</p>
                            ";
            }
            // line 48
            yield "
                            <div class=\"mt-auto d-flex align-items-center justify-content-between\">
                <span class=\"fw-semibold\">
                  ";
            // line 51
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "price", [], "any", false, false, false, 51))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 52
                yield "                      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "price", [], "any", false, false, false, 52), 0, ",", " "), "html", null, true);
                yield " €
                  ";
            } else {
                // line 54
                yield "                      -
                  ";
            }
            // line 56
            yield "                </span>
                                <a class=\"btn btn-outline-primary btn-sm\" href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classified_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\">
                                    Voir
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 64
        if (!$context['_iterated']) {
            // line 65
            yield "                <div class=\"col-12 text-center\">
                    <p class=\"text-muted mb-0\">Aucune annonce pour le moment.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ad'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "        </div>

        <div class=\"text-center mt-3 d-flex gap-2 justify-content-center\">
            <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classified_index");
        yield "\" class=\"btn custom-btn px-4\">
                Voir toutes les annonces
            </a>
            ";
        // line 75
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "                <a class=\"btn btn-success px-4\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_ad_new");
            yield "\">
                    Déposer une annonce
                </a>
            ";
        }
        // line 80
        yield "        </div>
    </div>
</section>
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
        return "partials/_classifieds_home.html.twig";
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
        return array (  217 => 80,  209 => 76,  207 => 75,  201 => 72,  196 => 69,  187 => 65,  185 => 64,  173 => 57,  170 => 56,  166 => 54,  160 => 52,  158 => 51,  153 => 48,  147 => 46,  145 => 45,  139 => 44,  131 => 39,  126 => 37,  122 => 35,  119 => 34,  116 => 33,  113 => 32,  110 => 31,  107 => 30,  104 => 29,  101 => 28,  99 => 27,  96 => 26,  93 => 25,  91 => 24,  88 => 23,  85 => 22,  83 => 21,  80 => 20,  77 => 19,  75 => 18,  72 => 17,  69 => 16,  65 => 13,  60 => 12,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Partial: Section Petites Annonces (Home) #}
<section id=\"classifieds\" class=\"section-padding bg-white\" aria-labelledby=\"classifieds-title\">
    <div class=\"container\">
        <div class=\"row mb-4\">
            <div class=\"col-12 text-center\">
                <h2 id=\"classifieds-title\" class=\"mb-2\">Petites annonces</h2>
                <p class=\"text-muted mb-0\">Les dernières annonces approuvées par l’association</p>
            </div>
        </div>

        <div class=\"row\">
            {% for ad in latestAds %}
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <article class=\"card h-100 shadow-sm\">
                        {# ------- Miniature ------- #}
                        {% set thumb = asset('images/placeholders/classified_no_image.png') %}

                        {% if ad.photos is defined and ad.photos|length > 0 %}
                            {% set first = ad.photos|first %}
                            {% if first %}
                                {# 1) VichUploader: ajusta 'imageFile' si tu campo se llama distinto #}
                                {% set vichUrl = vich_uploader_asset(first, 'imageFile') ?? null %}

                                {% if vichUrl %}
                                    {% set thumb = vichUrl %}
                                {% else %}
                                    {# 2) Fallback a nombre de archivo en la entidad #}
                                    {% set fileName = attribute(first, 'fileName') ?? attribute(first, 'filename') ?? attribute(first, 'name') ?? null %}
                                    {% if fileName %}
                                        {% set thumb = asset('uploads/classifieds/' ~ fileName) %}
                                    {% endif %}
                                {% endif %}
                            {% endif %}
                        {% endif %}

                        <img
                            src=\"{{ thumb | imagine_filter('ad_thumb') }}\"
                            class=\"card-img-top\"
                            alt=\"{{ ad.title }}\"
                            loading=\"lazy\"
                        >

                        <div class=\"card-body d-flex flex-column\">
                            <h3 class=\"h6 card-title mb-2 text-truncate\" title=\"{{ ad.title }}\">{{ ad.title }}</h3>
                            {% if ad.description is defined %}
                                <p class=\"card-text text-muted small mb-3\">{{ ad.description|u.truncate(120, '…', false) }}</p>
                            {% endif %}

                            <div class=\"mt-auto d-flex align-items-center justify-content-between\">
                <span class=\"fw-semibold\">
                  {% if ad.price is not null %}
                      {{ ad.price|number_format(0, ',', ' ') }} €
                  {% else %}
                      -
                  {% endif %}
                </span>
                                <a class=\"btn btn-outline-primary btn-sm\" href=\"{{ path('app_classified_show', { id: ad.id }) }}\">
                                    Voir
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            {% else %}
                <div class=\"col-12 text-center\">
                    <p class=\"text-muted mb-0\">Aucune annonce pour le moment.</p>
                </div>
            {% endfor %}
        </div>

        <div class=\"text-center mt-3 d-flex gap-2 justify-content-center\">
            <a href=\"{{ path('app_classified_index') }}\" class=\"btn custom-btn px-4\">
                Voir toutes les annonces
            </a>
            {% if is_granted('ROLE_USER') %}
                <a class=\"btn btn-success px-4\" href=\"{{ path('account_ad_new') }}\">
                    Déposer une annonce
                </a>
            {% endif %}
        </div>
    </div>
</section>
", "partials/_classifieds_home.html.twig", "C:\\wamp64\\www\\appac\\templates\\partials\\_classifieds_home.html.twig");
    }
}
