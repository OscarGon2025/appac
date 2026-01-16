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

/* admin/fields/album_hierarchy.html.twig */
class __TwigTemplate_c10c359baef9069c2da487a17f713310 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/fields/album_hierarchy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/fields/album_hierarchy.html.twig"));

        // line 1
        yield "
";
        // line 15
        yield "
";
        // line 17
        $macros["͜macros"] = $this->macros["͜macros"] = $this;
        // line 18
        yield "<div class=\"album-children\">
    ";
        // line 19
        yield $macros["͜macros"]->getTemplateForMacro("macro_renderChildren", $context, 19, $this->getSourceContext())->macro_renderChildren(...[(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 19, $this->source); })())]);
        yield "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 2
    public function macro_renderChildren($children = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "children" => $children,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderChildren"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderChildren"));

            // line 3
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 3, $this->source); })())) > 0)) {
                // line 4
                yield "        <ul style=\"margin-left: 20px;\">
            ";
                // line 5
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 5, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 6
                    yield "                <li>
                    ";
                    // line 7
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, false, 7), "html", null, true);
                    yield "
                    ";
                    // line 9
                    yield "                    ";
                    yield $this->getTemplateForMacro("macro_renderChildren", $context, 9, $this->getSourceContext())->macro_renderChildren(...[CoreExtension::getAttribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 9)]);
                    yield "
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                yield "        </ul>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/fields/album_hierarchy.html.twig";
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
        return array (  118 => 12,  108 => 9,  104 => 7,  101 => 6,  97 => 5,  94 => 4,  91 => 3,  73 => 2,  59 => 19,  56 => 18,  54 => 17,  51 => 15,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% macro renderChildren(children) %}
    {% if children|length > 0 %}
        <ul style=\"margin-left: 20px;\">
            {% for child in children %}
                <li>
                    {{ child.title }}
                    {# Pour afficher les sous-sous-albums #}
                    {{ _self.renderChildren(child.children) }}
                </li>
            {% endfor %}
        </ul>
    {% endif %}
{% endmacro %}

{# Affichage principal #}
{% import _self as macros %}
<div class=\"album-children\">
    {{ macros.renderChildren(value) }}
</div>
", "admin/fields/album_hierarchy.html.twig", "C:\\wamp64\\www\\appac\\templates\\admin\\fields\\album_hierarchy.html.twig");
    }
}
