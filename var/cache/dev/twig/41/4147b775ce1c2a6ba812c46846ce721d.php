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

/* partials/site_header.html.twig */
class __TwigTemplate_31ca41d8d85974522f2f661664ec3fcc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/site_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/site_header.html.twig"));

        // line 4
        yield "
";
        // line 5
        $context["h"] = ((array_key_exists("header", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 5, $this->source); })()), [])) : ([]));
        // line 6
        yield "
";
        // line 7
        $context["wx"] = ["temp" => ((((CoreExtension::getAttribute($this->env, $this->source,         // line 8
($context["h"] ?? null), "weather", [], "any", true, true, false, 8) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 8, $this->source); })()), "weather", [], "any", false, false, false, 8))) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "weather", [], "any", false, true, false, 8), "temp", [], "any", true, true, false, 8))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 8, $this->source); })()), "weather", [], "any", false, false, false, 8), "temp", [], "any", false, false, false, 8)) : (null)), "wind" => ((((CoreExtension::getAttribute($this->env, $this->source,         // line 9
($context["h"] ?? null), "weather", [], "any", true, true, false, 9) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 9, $this->source); })()), "weather", [], "any", false, false, false, 9))) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "weather", [], "any", false, true, false, 9), "wind", [], "any", true, true, false, 9))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 9, $this->source); })()), "weather", [], "any", false, false, false, 9), "wind", [], "any", false, false, false, 9)) : (null)), "dir" => ((((CoreExtension::getAttribute($this->env, $this->source,         // line 10
($context["h"] ?? null), "weather", [], "any", true, true, false, 10) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 10, $this->source); })()), "weather", [], "any", false, false, false, 10))) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "weather", [], "any", false, true, false, 10), "dir", [], "any", true, true, false, 10))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 10, $this->source); })()), "weather", [], "any", false, false, false, 10), "dir", [], "any", false, false, false, 10)) : (null))];
        // line 12
        yield "
";
        // line 13
        $context["tide"] = ["type" => ((((CoreExtension::getAttribute($this->env, $this->source,         // line 14
($context["h"] ?? null), "tide", [], "any", true, true, false, 14) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 14, $this->source); })()), "tide", [], "any", false, false, false, 14))) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "tide", [], "any", false, true, false, 14), "type", [], "any", true, true, false, 14))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 14, $this->source); })()), "tide", [], "any", false, false, false, 14), "type", [], "any", false, false, false, 14)) : (null)), "time" => ((((CoreExtension::getAttribute($this->env, $this->source,         // line 15
($context["h"] ?? null), "tide", [], "any", true, true, false, 15) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 15, $this->source); })()), "tide", [], "any", false, false, false, 15))) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "tide", [], "any", false, true, false, 15), "time", [], "any", true, true, false, 15))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 15, $this->source); })()), "tide", [], "any", false, false, false, 15), "time", [], "any", false, false, false, 15)) : (null))];
        // line 17
        yield "
<header id=\"siteHeader\" class=\"site-header bg-warning small\" role=\"region\" aria-label=\"Informations météo et marées\">
    <div class=\"container py-1\">
        <div class=\"d-flex align-items-center justify-content-between\">

            ";
        // line 23
        yield "            <div class=\"d-flex align-items-center flex-nowrap overflow-auto me-2\" style=\"gap:.5rem\">

        <span class=\"chip d-inline-flex align-items-center flex-shrink-0\">
          <i class=\"custom-icon bi-geo-alt me-2 fs-5\" aria-hidden=\"true\"></i>
          <strong class=\"text-dark\">Arzal</strong>
        </span>

                <span class=\"chip chip--temp flex-shrink-0\" aria-label=\"Température\">
          <i class=\"bi bi-thermometer-half me-1\" aria-hidden=\"true\"></i>
          ";
        // line 32
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["wx"]) || array_key_exists("wx", $context) ? $context["wx"] : (function () { throw new RuntimeError('Variable "wx" does not exist.', 32, $this->source); })()), "temp", [], "any", false, false, false, 32))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["wx"]) || array_key_exists("wx", $context) ? $context["wx"] : (function () { throw new RuntimeError('Variable "wx" does not exist.', 32, $this->source); })()), "temp", [], "any", false, false, false, 32) . "°C"), "html", null, true)) : ("—°C"));
        yield "
        </span>

                <span class=\"chip chip--wind flex-shrink-0\" aria-label=\"Vent\">
          <i class=\"bi bi-wind me-1\" aria-hidden=\"true\"></i>
          ";
        // line 37
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["wx"]) || array_key_exists("wx", $context) ? $context["wx"] : (function () { throw new RuntimeError('Variable "wx" does not exist.', 37, $this->source); })()), "wind", [], "any", false, false, false, 37))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["wx"]) || array_key_exists("wx", $context) ? $context["wx"] : (function () { throw new RuntimeError('Variable "wx" does not exist.', 37, $this->source); })()), "wind", [], "any", false, false, false, 37) . " km/h"), "html", null, true)) : ("— km/h"));
        yield "
                    ";
        // line 38
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["wx"]) || array_key_exists("wx", $context) ? $context["wx"] : (function () { throw new RuntimeError('Variable "wx" does not exist.', 38, $this->source); })()), "dir", [], "any", false, false, false, 38))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "                        <span class=\"chip--winddir\">(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wx"]) || array_key_exists("wx", $context) ? $context["wx"] : (function () { throw new RuntimeError('Variable "wx" does not exist.', 39, $this->source); })()), "dir", [], "any", false, false, false, 39), "html", null, true);
            yield "°)</span>
                    ";
        }
        // line 41
        yield "        </span>

                <span class=\"chip chip--tide flex-shrink-0\" aria-label=\"Marée\">
          <i class=\"bi bi-water me-1\" aria-hidden=\"true\"></i>
          <span class=\"d-none d-sm-inline\">Marée :</span>
          <strong class=\"ms-1\">";
        // line 46
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["tide"] ?? null), "type", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tide"]) || array_key_exists("tide", $context) ? $context["tide"] : (function () { throw new RuntimeError('Variable "tide" does not exist.', 46, $this->source); })()), "type", [], "any", false, false, false, 46)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tide"]) || array_key_exists("tide", $context) ? $context["tide"] : (function () { throw new RuntimeError('Variable "tide" does not exist.', 46, $this->source); })()), "type", [], "any", false, false, false, 46), "html", null, true)) : ("—"));
        yield "</strong>
          <span class=\"ms-1\">";
        // line 47
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tide"]) || array_key_exists("tide", $context) ? $context["tide"] : (function () { throw new RuntimeError('Variable "tide" does not exist.', 47, $this->source); })()), "time", [], "any", false, false, false, 47))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tide"]) || array_key_exists("tide", $context) ? $context["tide"] : (function () { throw new RuntimeError('Variable "tide" does not exist.', 47, $this->source); })()), "time", [], "any", false, false, false, 47), "H:i"), "html", null, true)) : ("—:—"));
        yield "</span>
        </span>

            </div>

            <a class=\"btn btn-sm btn-outline-dark flex-shrink-0\"
               href=\"https://passeportecluse-arzal-camoel.com/\"
               target=\"_blank\" rel=\"noopener\"
               title=\"Voir horaires des écluses\">
                <i class=\"bi bi-clock-history me-1\" aria-hidden=\"true\"></i>
                Horaires des écluses
            </a>

        </div>
    </div>
</header>
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
        return "partials/site_header.html.twig";
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
        return array (  117 => 47,  113 => 46,  106 => 41,  100 => 39,  98 => 38,  94 => 37,  86 => 32,  75 => 23,  68 => 17,  66 => 15,  65 => 14,  64 => 13,  61 => 12,  59 => 10,  58 => 9,  57 => 8,  56 => 7,  53 => 6,  51 => 5,  48 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/partials/site_header.html.twig
   Renderizado por HeaderController::siteHeader y recibe \"header\"
   con: header.weather { temp, wind, dir } y header.tide { type, time } #}

{% set h = header|default({}) %}

{% set wx = {
    temp: h.weather is defined and h.weather is not null and h.weather.temp is defined ? h.weather.temp : null,
    wind: h.weather is defined and h.weather is not null and h.weather.wind is defined ? h.weather.wind : null,
    dir:  h.weather is defined and h.weather is not null and h.weather.dir  is defined ? h.weather.dir  : null
} %}

{% set tide = {
    type: h.tide is defined and h.tide is not null and h.tide.type is defined ? h.tide.type : null,
    time: h.tide is defined and h.tide is not null and h.tide.time is defined ? h.tide.time : null
} %}

<header id=\"siteHeader\" class=\"site-header bg-warning small\" role=\"region\" aria-label=\"Informations météo et marées\">
    <div class=\"container py-1\">
        <div class=\"d-flex align-items-center justify-content-between\">

            {# Ligne défilable si le contenu dépasse en petit écran #}
            <div class=\"d-flex align-items-center flex-nowrap overflow-auto me-2\" style=\"gap:.5rem\">

        <span class=\"chip d-inline-flex align-items-center flex-shrink-0\">
          <i class=\"custom-icon bi-geo-alt me-2 fs-5\" aria-hidden=\"true\"></i>
          <strong class=\"text-dark\">Arzal</strong>
        </span>

                <span class=\"chip chip--temp flex-shrink-0\" aria-label=\"Température\">
          <i class=\"bi bi-thermometer-half me-1\" aria-hidden=\"true\"></i>
          {{ wx.temp is not null ? (wx.temp ~ '°C') : '—°C' }}
        </span>

                <span class=\"chip chip--wind flex-shrink-0\" aria-label=\"Vent\">
          <i class=\"bi bi-wind me-1\" aria-hidden=\"true\"></i>
          {{ wx.wind is not null ? (wx.wind ~ ' km/h') : '— km/h' }}
                    {% if wx.dir is not null %}
                        <span class=\"chip--winddir\">({{ wx.dir }}°)</span>
                    {% endif %}
        </span>

                <span class=\"chip chip--tide flex-shrink-0\" aria-label=\"Marée\">
          <i class=\"bi bi-water me-1\" aria-hidden=\"true\"></i>
          <span class=\"d-none d-sm-inline\">Marée :</span>
          <strong class=\"ms-1\">{{ tide.type ?? '—' }}</strong>
          <span class=\"ms-1\">{{ tide.time is not null ? (tide.time|date('H:i')) : '—:—' }}</span>
        </span>

            </div>

            <a class=\"btn btn-sm btn-outline-dark flex-shrink-0\"
               href=\"https://passeportecluse-arzal-camoel.com/\"
               target=\"_blank\" rel=\"noopener\"
               title=\"Voir horaires des écluses\">
                <i class=\"bi bi-clock-history me-1\" aria-hidden=\"true\"></i>
                Horaires des écluses
            </a>

        </div>
    </div>
</header>
", "partials/site_header.html.twig", "C:\\wamp64\\www\\appac\\templates\\partials\\site_header.html.twig");
    }
}
