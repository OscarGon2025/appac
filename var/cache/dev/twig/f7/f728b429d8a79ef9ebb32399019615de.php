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

/* admin/album/index_hierarchy.html.twig */
class __TwigTemplate_7979759f6dc727c90f08535d06c55231 extends Template
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
            'page_content' => [$this, 'block_page_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 20
        return "@EasyAdmin/crud/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/album/index_hierarchy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/album/index_hierarchy.html.twig"));

        $this->parent = $this->load("@EasyAdmin/crud/index.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 23
        yield "    <h1 class=\"mb-4\">Albums (vue hiérarchique)</h1>

    <ul class=\"album-list mb-5\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 26, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 27
            yield "            ";
            $context["entity"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["album"], "instance", [], "any", true, true, false, 27) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["album"], "instance", [], "any", false, false, false, 27)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["album"], "instance", [], "any", false, false, false, 27)) : ($context["album"]));
            // line 28
            yield "            ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })()), "parent", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 29
                yield "                <li>
                    <strong>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "title", [], "any", false, false, false, 30), "html", null, true);
                yield "</strong>
                    ";
                // line 31
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 31, $this->source); })()), "children", [], "any", false, false, false, 31)) > 0)) {
                    // line 32
                    yield "                        ";
                    yield from $this->load("admin/fields/album_hierarchy.html.twig", 32)->unwrap()->yield(CoreExtension::merge($context, ["value" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 32, $this->source); })()), "children", [], "any", false, false, false, 32)]));
                    // line 33
                    yield "                    ";
                }
                // line 34
                yield "                </li>
            ";
            }
            // line 36
            yield "        ";
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
        unset($context['_seq'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "    </ul>

    ";
        // line 39
        yield from $this->yieldParentBlock("page_content", $context, $blocks);
        yield "
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
        return "admin/album/index_hierarchy.html.twig";
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
        return array (  141 => 39,  137 => 37,  123 => 36,  119 => 34,  116 => 33,  113 => 32,  111 => 31,  107 => 30,  104 => 29,  101 => 28,  98 => 27,  81 => 26,  76 => 23,  63 => 22,  40 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#{% extends '@EasyAdmin/crud/index.html.twig' %}#}

{#{% block content %}#}
{#    <h1>Albums</h1>#}

{#    <ul class=\"album-list\">#}
{#        {% for album in entities %}#}
{#            {% if not album.parent %}#}
{#                <li>#}
{#                    {{ album.title }}#}
{#                    {% if album.children|length > 0 %}#}
{#                        {% include 'admin/fields/album_hierarchy.html.twig' with { value: album.children } %}#}
{#                    {% endif %}#}
{#                </li>#}
{#            {% endif %}#}
{#        {% endfor %}#}
{#    </ul>#}
{#{% endblock %}#}

{% extends '@EasyAdmin/crud/index.html.twig' %}

{% block page_content %}
    <h1 class=\"mb-4\">Albums (vue hiérarchique)</h1>

    <ul class=\"album-list mb-5\">
        {% for album in entities %}
            {% set entity = album.instance ?? album %}
            {% if not entity.parent %}
                <li>
                    <strong>{{ entity.title }}</strong>
                    {% if entity.children|length > 0 %}
                        {% include 'admin/fields/album_hierarchy.html.twig' with { value: entity.children } %}
                    {% endif %}
                </li>
            {% endif %}
        {% endfor %}
    </ul>

    {{ parent() }}
{% endblock %}
", "admin/album/index_hierarchy.html.twig", "C:\\wamp64\\www\\appac\\templates\\admin\\album\\index_hierarchy.html.twig");
    }
}
