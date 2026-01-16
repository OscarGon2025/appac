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

/* account/event/edit.html.twig */
class __TwigTemplate_1be12df4d284b50504351845b5137f28 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/event/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/event/edit.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), ["bootstrap_5_layout.html.twig"], true);
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Modifier l’événement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"container py-4\">
        <nav aria-label=\"breadcrumb\" class=\"mb-3\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_events_index");
        yield "\">Mes événements</a></li>
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "slug", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        yield "</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Modifier</li>
            </ol>
        </nav>

        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h1 class=\"h3 mb-0\">Modifier « ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        yield " »</h1>
            <span class=\"badge text-bg-secondary\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "type", [], "any", false, false, false, 17), "html", null, true);
        yield "</span>
        </div>

        <div class=\"card shadow-sm rounded-3\">
            <div class=\"card-body\">
                ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        yield "

                <div class=\"row g-3\">
                    <div class=\"col-md-8\">
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "title", [], "any", false, false, false, 26), 'row');
        yield "
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'row');
        yield "
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "type", [], "any", false, false, false, 28), 'row');
        yield "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "startAt", [], "any", false, false, false, 31), 'row');
        yield "
                        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "endAt", [], "any", false, false, false, 32), 'row');
        yield "
                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "registrationOpen", [], "any", false, false, false, 33), 'row');
        yield "
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "isMembersOnly", [], "any", false, false, false, 34), 'row');
        yield "
                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "maxParticipants", [], "any", false, false, false, 35), 'row');
        yield "
                    </div>
                    <div class=\"col-md-8\">
                        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "locationName", [], "any", false, false, false, 38), 'row');
        yield "
                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "lat", [], "any", false, false, false, 41), 'row');
        yield "
                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "lng", [], "any", false, false, false, 44), 'row');
        yield "
                    </div>
                </div>

                <div class=\"d-flex gap-2 mt-4\">
                    <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_events_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"bi bi-chevron-left me-1\"></i>Retour
                    </a>
                    <button class=\"btn btn-primary\">
                        <i class=\"bi bi-save me-1\"></i>Enregistrer
                    </button>
                </div>

                ";
        // line 57
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
        yield "
            </div>
            <div class=\"card-footer small text-muted\">
                Dernière modification : ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 60, $this->source); })()), "updatedAt", [], "any", false, false, false, 60), "d/m/Y H:i"), "html", null, true);
        yield "
            </div>
        </div>
    </div>
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
        return "account/event/edit.html.twig";
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
        return array (  215 => 60,  209 => 57,  198 => 49,  190 => 44,  184 => 41,  178 => 38,  172 => 35,  168 => 34,  164 => 33,  160 => 32,  156 => 31,  150 => 28,  146 => 27,  142 => 26,  135 => 22,  127 => 17,  123 => 16,  112 => 10,  108 => 9,  103 => 6,  90 => 5,  67 => 2,  56 => 1,  54 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title 'Modifier l’événement' %}
{% form_theme form 'bootstrap_5_layout.html.twig' %}

{% block body %}
    <div class=\"container py-4\">
        <nav aria-label=\"breadcrumb\" class=\"mb-3\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('account_events_index') }}\">Mes événements</a></li>
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_event_show', {slug: event.slug}) }}\">{{ event.title }}</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Modifier</li>
            </ol>
        </nav>

        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h1 class=\"h3 mb-0\">Modifier « {{ event.title }} »</h1>
            <span class=\"badge text-bg-secondary\">{{ event.type }}</span>
        </div>

        <div class=\"card shadow-sm rounded-3\">
            <div class=\"card-body\">
                {{ form_start(form) }}

                <div class=\"row g-3\">
                    <div class=\"col-md-8\">
                        {{ form_row(form.title) }}
                        {{ form_row(form.description) }}
                        {{ form_row(form.type) }}
                    </div>
                    <div class=\"col-md-4\">
                        {{ form_row(form.startAt) }}
                        {{ form_row(form.endAt) }}
                        {{ form_row(form.registrationOpen) }}
                        {{ form_row(form.isMembersOnly) }}
                        {{ form_row(form.maxParticipants) }}
                    </div>
                    <div class=\"col-md-8\">
                        {{ form_row(form.locationName) }}
                    </div>
                    <div class=\"col-md-2\">
                        {{ form_row(form.lat) }}
                    </div>
                    <div class=\"col-md-2\">
                        {{ form_row(form.lng) }}
                    </div>
                </div>

                <div class=\"d-flex gap-2 mt-4\">
                    <a href=\"{{ path('account_events_index') }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"bi bi-chevron-left me-1\"></i>Retour
                    </a>
                    <button class=\"btn btn-primary\">
                        <i class=\"bi bi-save me-1\"></i>Enregistrer
                    </button>
                </div>

                {{ form_end(form) }}
            </div>
            <div class=\"card-footer small text-muted\">
                Dernière modification : {{ event.updatedAt|date('d/m/Y H:i') }}
            </div>
        </div>
    </div>
{% endblock %}
", "account/event/edit.html.twig", "C:\\wamp64\\www\\appac\\templates\\account\\event\\edit.html.twig");
    }
}
