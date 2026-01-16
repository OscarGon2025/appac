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

/* admin/fields/enum_value.html.twig */
class __TwigTemplate_ddac6752d87cbc3950697dffd8be72cc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/fields/enum_value.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/fields/enum_value.html.twig"));

        // line 2
        $context["v"] = (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 2, $this->source); })()), "value", [], "any", false, false, false, 2))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 2, $this->source); })()), "value", [], "any", false, false, false, 2), "value", [], "any", false, false, false, 2)) : (null));
        // line 3
        if ((($tmp = (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    <span class=\"badge
    ";
            // line 5
            if (((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 5, $this->source); })()) == "APPROVED")) {
                yield " text-bg-success
    ";
            } elseif ((            // line 6
(isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 6, $this->source); })()) == "PENDING")) {
                yield " text-bg-warning
    ";
            } elseif ((            // line 7
(isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 7, $this->source); })()) == "REJECTED")) {
                yield " text-bg-danger
    ";
            } elseif ((            // line 8
(isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 8, $this->source); })()) == "ARCHIVED")) {
                yield " text-bg-secondary
    ";
            } else {
                // line 9
                yield " text-bg-light
    ";
            }
            // line 11
            yield "  \">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 11, $this->source); })()), "html", null, true);
            yield "</span>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/fields/enum_value.html.twig";
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
        return array (  76 => 11,  72 => 9,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  52 => 4,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/fields/enum_badge.html.twig #}
{% set v = field.value is not null ? attribute(field.value, 'value') : null %}
{% if v %}
    <span class=\"badge
    {% if v == 'APPROVED' %} text-bg-success
    {% elseif v == 'PENDING' %} text-bg-warning
    {% elseif v == 'REJECTED' %} text-bg-danger
    {% elseif v == 'ARCHIVED' %} text-bg-secondary
    {% else %} text-bg-light
    {% endif %}
  \">{{ v }}</span>
{% endif %}
", "admin/fields/enum_value.html.twig", "C:\\wamp64\\www\\appac\\templates\\admin\\fields\\enum_value.html.twig");
    }
}
