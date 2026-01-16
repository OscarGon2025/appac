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

/* photo/new.html.twig */
class __TwigTemplate_a6d22d7ec1a1836a904a32ebc2e43768 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photo/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photo/new.html.twig"));

        // line 2
        yield "
";
        // line 4
        yield "
";
        // line 8
        yield "
";
        // line 14
        yield "
";
        // line 20
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
        return "photo/new.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  60 => 20,  57 => 14,  54 => 8,  51 => 4,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#{% extends 'base.html.twig' %}#}

{#{% block title %}Ajouter une photo{% endblock %}#}

{#{% block body %}#}
{#    <section class=\"container py-5\">#}
{#        <h1>Ajouter une photo</h1>#}

{#        {% for label, messages in app.flashes %}#}
{#            {% for message in messages %}#}
{#                <div class=\"alert alert-{{ label }}\">{{ message }}</div>#}
{#            {% endfor %}#}
{#        {% endfor %}#}

{#        {{ form_start(form) }}#}
{#        {{ form_row(form.imageFile) }}#}
{#        {{ form_row(form.title) }}#}
{#        {{ form_row(form.description) }}#}
{#        {{ form_row(form.visibility) }}#}

{#        <button class=\"btn btn-success mt-3\">Enregistrer</button>#}
{#        {{ form_end(form) }}#}
{#    </section>#}
{#{% endblock %}#}
", "photo/new.html.twig", "C:\\wamp64\\www\\appac\\templates\\photo\\new.html.twig");
    }
}
