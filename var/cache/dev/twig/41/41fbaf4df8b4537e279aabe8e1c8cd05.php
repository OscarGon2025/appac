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

/* account/event/index.html.twig */
class __TwigTemplate_a30406772d64702934aafd60a41a07d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/event/index.html.twig"));

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

        yield "Mes événements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "    <div class=\"container px-4 py-5 pt-lg-5 mt-5\">
        <div class=\"d-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0\">Mes événements</h1>
            <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_events_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"bi bi-plus-lg me-1\"></i>Nouveau
            </a>
        </div>

        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["success"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            yield "            <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["info"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "            <div class=\"alert alert-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            yield "            <div class=\"alert alert-warning\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
        ";
        // line 23
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 23, $this->source); })()))) {
            // line 24
            yield "            <div class=\"text-center text-muted py-5\">
                <i class=\"bi bi-calendar2-event display-6 d-block mb-2\"></i>
                <p class=\"mb-0\">Vous n’avez pas encore créé d’événement.</p>
            </div>
        ";
        } else {
            // line 29
            yield "            <div class=\"row g-4\">
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 31
                yield "                    <div class=\"col-12 col-md-6 col-lg-4\">
                        <div class=\"card h-100 shadow-sm rounded-3\">
                            <div class=\"card-body d-flex flex-column\">
                                <div class=\"d-flex justify-content-between align-items-start mb-2\">
                                    <h2 class=\"h5 mb-0\">";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 35), "html", null, true);
                yield "</h2>
                                    <span class=\"badge text-bg-secondary\">";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 36), "html", null, true);
                yield "</span>
                                </div>

                                <p class=\"text-muted small mb-3\">
                                    <i class=\"bi bi-geo-alt me-1\"></i>";
                // line 40
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "locationName", [], "any", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["event"], "locationName", [], "any", false, false, false, 40)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "locationName", [], "any", false, false, false, 40), "html", null, true)) : ("Lieu à préciser"));
                yield "
                                </p>

                                <div class=\"mb-3\">
                                    <i class=\"bi bi-clock me-1\"></i>
                                    <strong>Début:</strong>
                                    ";
                // line 46
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startAt", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startAt", [], "any", false, false, false, 46), "d/m/Y H:i"), "html", null, true)) : ("—"));
                yield "
                                    ";
                // line 47
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "endAt", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 48
                    yield "                                        <span class=\"text-muted\"> → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "endAt", [], "any", false, false, false, 48), "d/m/Y H:i"), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 50
                yield "                                </div>

                                <div class=\"mt-auto d-flex gap-2\">
                                    <a href=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 53)]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary btn-sm\">
                                        <i class=\"bi bi-eye me-1\"></i>Voir
                                    </a>
                                    <a href=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_events_edit", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 56)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-sm\">
                                        <i class=\"bi bi-pencil me-1\"></i>Éditer
                                    </a>
                                </div>
                            </div>
                            <div class=\"card-footer bg-transparent small text-muted\">
                                Mis à jour le ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "updatedAt", [], "any", false, false, false, 62), "d/m/Y H:i"), "html", null, true);
                yield "
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "            </div>
        ";
        }
        // line 69
        yield "    </div>
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
        return "account/event/index.html.twig";
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
        return array (  246 => 69,  242 => 67,  231 => 62,  222 => 56,  216 => 53,  211 => 50,  205 => 48,  203 => 47,  199 => 46,  190 => 40,  183 => 36,  179 => 35,  173 => 31,  169 => 30,  166 => 29,  159 => 24,  157 => 23,  154 => 22,  145 => 20,  140 => 19,  131 => 17,  126 => 16,  117 => 14,  113 => 13,  105 => 8,  100 => 5,  87 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title 'Mes événements' %}

{% block body %}
    <div class=\"container px-4 py-5 pt-lg-5 mt-5\">
        <div class=\"d-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0\">Mes événements</h1>
            <a href=\"{{ path('account_events_new') }}\" class=\"btn btn-primary\">
                <i class=\"bi bi-plus-lg me-1\"></i>Nouveau
            </a>
        </div>

        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {% endfor %}
        {% for message in app.flashes('info') %}
            <div class=\"alert alert-info\">{{ message }}</div>
        {% endfor %}
        {% for message in app.flashes('warning') %}
            <div class=\"alert alert-warning\">{{ message }}</div>
        {% endfor %}

        {% if events is empty %}
            <div class=\"text-center text-muted py-5\">
                <i class=\"bi bi-calendar2-event display-6 d-block mb-2\"></i>
                <p class=\"mb-0\">Vous n’avez pas encore créé d’événement.</p>
            </div>
        {% else %}
            <div class=\"row g-4\">
                {% for event in events %}
                    <div class=\"col-12 col-md-6 col-lg-4\">
                        <div class=\"card h-100 shadow-sm rounded-3\">
                            <div class=\"card-body d-flex flex-column\">
                                <div class=\"d-flex justify-content-between align-items-start mb-2\">
                                    <h2 class=\"h5 mb-0\">{{ event.title }}</h2>
                                    <span class=\"badge text-bg-secondary\">{{ event.type }}</span>
                                </div>

                                <p class=\"text-muted small mb-3\">
                                    <i class=\"bi bi-geo-alt me-1\"></i>{{ event.locationName ?? 'Lieu à préciser' }}
                                </p>

                                <div class=\"mb-3\">
                                    <i class=\"bi bi-clock me-1\"></i>
                                    <strong>Début:</strong>
                                    {{ event.startAt ? event.startAt|date('d/m/Y H:i') : '—' }}
                                    {% if event.endAt %}
                                        <span class=\"text-muted\"> → {{ event.endAt|date('d/m/Y H:i') }}</span>
                                    {% endif %}
                                </div>

                                <div class=\"mt-auto d-flex gap-2\">
                                    <a href=\"{{ path('app_event_show', {slug: event.slug}) }}\" class=\"btn btn-outline-secondary btn-sm\">
                                        <i class=\"bi bi-eye me-1\"></i>Voir
                                    </a>
                                    <a href=\"{{ path('account_events_edit', {slug: event.slug}) }}\" class=\"btn btn-primary btn-sm\">
                                        <i class=\"bi bi-pencil me-1\"></i>Éditer
                                    </a>
                                </div>
                            </div>
                            <div class=\"card-footer bg-transparent small text-muted\">
                                Mis à jour le {{ event.updatedAt|date('d/m/Y H:i') }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% endif %}
    </div>
{% endblock %}
", "account/event/index.html.twig", "C:\\wamp64\\www\\appac\\templates\\account\\event\\index.html.twig");
    }
}
