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

/* mail_test/index.html.twig */
class __TwigTemplate_7123a3419051fdd06df84f0ddd29f9cd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail_test/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail_test/index.html.twig"));

        // line 2
        yield "
";
        // line 4
        yield "
";
        // line 10
        yield "
";
        // line 13
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
        return "mail_test/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  57 => 13,  54 => 10,  51 => 4,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#{% extends 'base.html.twig' %}#}

{#{% block title %}Hello MailTestController!{% endblock %}#}

{#{% block body %}#}
{#<style>#}
{#    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }#}
{#    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }#}
{#</style>#}

{#<div class=\"example-wrapper\">#}
{#    <h1>Hello {{ controller_name }}! ✅</h1>#}

{#    This friendly message is coming from:#}
{#    <ul>#}
{#        <li>Your controller at <code>C:/wamp64/www/appac/src/Controller/MailTestController.php</code></li>#}
{#        <li>Your template at <code>C:/wamp64/www/appac/templates/mail_test/index.html.twig</code></li>#}
{#    </ul>#}
{#</div>#}
{#{% endblock %}#}
", "mail_test/index.html.twig", "C:\\wamp64\\www\\appac\\templates\\mail_test\\index.html.twig");
    }
}
