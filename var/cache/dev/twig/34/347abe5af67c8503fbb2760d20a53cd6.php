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

/* board_member/index.html.twig */
class __TwigTemplate_345cf4bea258971340f0ad6c9332ef84 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "board_member/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "board_member/index.html.twig"));

        // line 2
        yield "
";
        // line 4
        yield "
";
        // line 8
        yield "
";
        // line 11
        yield "
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
        return "board_member/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  57 => 11,  54 => 8,  51 => 4,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#{% extends 'base.html.twig' %}#}

{#{% block title %}Organigramme{% endblock %}#}

{#{% block body %}#}
{#    <section class=\"container my-5 text-center\">#}
{#        <h1 class=\"mb-4\">Conseil d'administration</h1>#}

{#        <div id=\"organigramme\" style=\"height: 600px;\"></div>#}
{#    </section>#}

{#    <script src=\"https://balkan.app/js/OrgChart.js\"></script>#}
{#    <script>#}
{#        document.addEventListener('DOMContentLoaded', function() {#}
{#            const chart = new OrgChart(document.getElementById('organigramme'), {#}
{#                template: \"olivia\",#}
{#                enableSearch: false,#}
{#                mouseScrool: OrgChart.none,#}
{#                nodeBinding: {#}
{#                    field_0: \"name\",#}
{#                    field_1: \"title\",#}
{#                    img_0: \"image\"#}
{#                },#}
{#                nodes: {{ data|raw }}#}
{#            });#}
{#        });#}
{#    </script>#}
{#{% endblock %}#}
", "board_member/index.html.twig", "C:\\wamp64\\www\\appac\\templates\\board_member\\index.html.twig");
    }
}
