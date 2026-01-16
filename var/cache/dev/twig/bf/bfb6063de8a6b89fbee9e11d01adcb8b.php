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

/* event/show.html.twig */
class __TwigTemplate_60dcc142b851ade44631018324eb5f57 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/show.html.twig"));

        // line 3
        $context["navbar_is_transparent"] = false;
        // line 2
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    ";
        // line 9
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 9, $this->source); })()), "lat", [], "any", false, false, false, 9) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 9, $this->source); })()), "lng", [], "any", false, false, false, 9))) {
            // line 10
            yield "        <link rel=\"stylesheet\"
              href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"
              integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\" crossorigin=\"\">
        <style>
            .leaflet-map{height:240px;border-radius:.5rem}
            @media (min-width: 992px){ .leaflet-map{height:300px} }
        </style>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 20
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

        // line 21
        yield "    <section class=\"section-padding bg-white px-4 py-5 pt-lg-5 mt-5\">
        <div class=\"container\">

            ";
        // line 25
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["label"] => $context["msgs"]) {
            // line 26
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["msgs"]);
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 27
                yield "                    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                        ";
                // line 28
                yield $context["msg"];
                yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['msgs'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "
            <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm mb-3\">← Retour à la liste</a>

            <div class=\"row g-4\">
                <div class=\"col-lg-8\">
                    <h1 class=\"h2 mb-2\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 38, $this->source); })()), "title", [], "any", false, false, false, 38), "html", null, true);
        yield "</h1>

                    <div class=\"d-flex flex-wrap gap-2 mb-3\">
                        ";
        // line 41
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 41, $this->source); })()), "type", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "                            <span class=\"badge bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 42, $this->source); })()), "type", [], "any", false, false, false, 42), "html", null, true);
            yield "</span>
                        ";
        }
        // line 44
        yield "
                        ";
        // line 45
        $context["status"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "status", [], "any", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 45, $this->source); })()), "status", [], "any", false, false, false, 45)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 45, $this->source); })()), "status", [], "any", false, false, false, 45)) : ("")));
        // line 46
        yield "                        ";
        if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 46, $this->source); })()) == "PUBLISHED")) {
            // line 47
            yield "                            <span class=\"badge bg-success\">Publié</span>
                        ";
        } elseif (CoreExtension::inFilter(        // line 48
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 48, $this->source); })()), ["REVIEW", "PENDING", "PENDING_APPROVAL", "EN_ATTENTE", "AWAITING"])) {
            // line 49
            yield "                            <span class=\"badge bg-warning text-dark\"><i class=\"bi bi-hourglass-split me-1\"></i>En attente</span>
                        ";
        } elseif ((        // line 50
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 50, $this->source); })()) == "DRAFT")) {
            // line 51
            yield "                            <span class=\"badge bg-secondary\">Brouillon</span>
                        ";
        } elseif ((($tmp =         // line 52
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 52, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "                            <span class=\"badge bg-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 53, $this->source); })()), "html", null, true);
            yield "</span>
                        ";
        }
        // line 55
        yield "
                        ";
        // line 56
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 56, $this->source); })()), "isMembersOnly", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "                            <span class=\"badge text-bg-dark\"><i class=\"bi bi-lock-fill me-1\"></i>Membres</span>
                        ";
        }
        // line 59
        yield "                    </div>

                    <ul class=\"list-unstyled text-muted small mb-3\">
                        <li class=\"mb-1\">
                            <i class=\"bi bi-calendar-event me-1\"></i>
                            Début : ";
        // line 64
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 64, $this->source); })()), "startAt", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 64, $this->source); })()), "startAt", [], "any", false, false, false, 64), "d/m/Y H:i"), "html", null, true)) : ("—"));
        yield "
                            ";
        // line 65
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 65, $this->source); })()), "endAt", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "                                <span class=\"mx-1\">–</span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 66, $this->source); })()), "endAt", [], "any", false, false, false, 66), "d/m/Y H:i"), "html", null, true);
            yield "
                            ";
        }
        // line 68
        yield "                        </li>
                        ";
        // line 69
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 69, $this->source); })()), "locationName", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "                            <li class=\"mb-1\"><i class=\"bi bi-geo-alt me-1\"></i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 70, $this->source); })()), "locationName", [], "any", false, false, false, 70), "html", null, true);
            yield "</li>
                        ";
        }
        // line 72
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 72, $this->source); })()), "createdBy", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 73
            yield "                            <li class=\"mb-1\"><i class=\"bi bi-person-circle me-1\"></i>Organisé par : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 73, $this->source); })()), "createdBy", [], "any", false, false, false, 73), "html", null, true);
            yield "</li>
                        ";
        }
        // line 75
        yield "                    </ul>

                    ";
        // line 77
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "                        <div class=\"mt-2 fs-6\">";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78);
            yield "</div>
                    ";
        }
        // line 80
        yield "                </div>

                <div class=\"col-lg-4\">
                    <div class=\"card shadow-sm mb-3\">
                        <div class=\"card-body\">

                            ";
        // line 87
        yield "                            ";
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 87, $this->source); })()), "maxParticipants", [], "any", false, false, false, 87))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 88
            yield "                                ";
            $context["spots_left"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 88, $this->source); })()), "spotsLeft", [], "method", false, false, false, 88);
            // line 89
            yield "                                ";
            $context["pct"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 89, $this->source); })()), "maxParticipants", [], "any", false, false, false, 89) > 0)) ? (Twig\Extension\CoreExtension::round((((CoreExtension::getAttribute($this->env, $this->source,             // line 90
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 90, $this->source); })()), "maxParticipants", [], "any", false, false, false, 90) - (isset($context["spots_left"]) || array_key_exists("spots_left", $context) ? $context["spots_left"] : (function () { throw new RuntimeError('Variable "spots_left" does not exist.', 90, $this->source); })())) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 90, $this->source); })()), "maxParticipants", [], "any", false, false, false, 90)) * 100), 0, "ceil")) : (0));
            // line 92
            yield "                                <div class=\"mb-2\">
                                    <div class=\"d-flex justify-content-between small\">
                                        <span>Places</span><span>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["spots_left"]) || array_key_exists("spots_left", $context) ? $context["spots_left"] : (function () { throw new RuntimeError('Variable "spots_left" does not exist.', 94, $this->source); })()), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 94, $this->source); })()), "maxParticipants", [], "any", false, false, false, 94), "html", null, true);
            yield "</span>
                                    </div>
                                    <div class=\"progress\" style=\"height:8px;\">
                                        <div class=\"progress-bar
                      ";
            // line 98
            if (((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 98, $this->source); })()) < 50)) {
                yield "bg-success";
            } elseif (((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 98, $this->source); })()) < 80)) {
                yield "bg-warning";
            } else {
                yield "bg-danger";
            }
            yield "\"
                                             role=\"progressbar\" style=\"width: ";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 99, $this->source); })()), "html", null, true);
            yield "%\"
                                             aria-valuenow=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 100, $this->source); })()), "html", null, true);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                </div>
                            ";
        }
        // line 104
        yield "
                            ";
        // line 106
        yield "                            ";
        $context["is_pending"] = CoreExtension::inFilter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 106, $this->source); })()), ["REVIEW", "PENDING", "PENDING_APPROVAL", "EN_ATTENTE", "AWAITING"]);
        // line 107
        yield "                            ";
        $context["is_published"] = ((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 107, $this->source); })()) == "PUBLISHED");
        // line 108
        yield "                            ";
        $context["is_past"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 108, $this->source); })()), "endAt", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 108, $this->source); })()), "endAt", [], "any", false, false, false, 108) < $this->extensions['Twig\Extension\CoreExtension']->convertDate())) : ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 108, $this->source); })()), "startAt", [], "any", false, false, false, 108) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 108, $this->source); })()), "startAt", [], "any", false, false, false, 108) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("-2 hours")))));
        // line 109
        yield "                            ";
        $context["requires_login"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 109, $this->source); })()), "isMembersOnly", [], "any", false, false, false, 109) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109));
        // line 110
        yield "                            ";
        $context["is_full"] = (((((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "maxParticipants", [], "any", true, true, false, 110) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 110, $this->source); })()), "maxParticipants", [], "any", false, false, false, 110)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 110, $this->source); })()), "maxParticipants", [], "any", false, false, false, 110)) : (0)) > 0) && ((((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "spotsLeft", [], "method", true, true, false, 110) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 110, $this->source); })()), "spotsLeft", [], "method", false, false, false, 110)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 110, $this->source); })()), "spotsLeft", [], "method", false, false, false, 110)) : (0)) <= 0));
        // line 111
        yield "
                            ";
        // line 112
        if ((($tmp = (isset($context["is_pending"]) || array_key_exists("is_pending", $context) ? $context["is_pending"] : (function () { throw new RuntimeError('Variable "is_pending" does not exist.', 112, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 113
            yield "                                <div class=\"alert alert-warning py-2 small mb-3\">
                                    <i class=\"bi bi-info-circle me-1\"></i>L’événement est en attente de validation.
                                </div>
                            ";
        }
        // line 117
        yield "                            ";
        if ((($tmp = (isset($context["is_past"]) || array_key_exists("is_past", $context) ? $context["is_past"] : (function () { throw new RuntimeError('Variable "is_past" does not exist.', 117, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 118
            yield "                                <div class=\"alert alert-light border py-2 small mb-3\">
                                    <i class=\"bi bi-clock-history me-1\"></i>Cet événement est passé.
                                </div>
                            ";
        }
        // line 122
        yield "                            ";
        if ((($tmp = (isset($context["is_full"]) || array_key_exists("is_full", $context) ? $context["is_full"] : (function () { throw new RuntimeError('Variable "is_full" does not exist.', 122, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 123
            yield "                                <div class=\"alert alert-danger py-2 small mb-3\">
                                    <i class=\"bi bi-people-fill me-1\"></i>Complet — plus d’inscriptions possibles.
                                </div>
                            ";
        }
        // line 127
        yield "
                            ";
        // line 129
        yield "                            ";
        $context["is_registered"] = ((array_key_exists("is_registered", $context)) ? (        // line 130
(isset($context["is_registered"]) || array_key_exists("is_registered", $context) ? $context["is_registered"] : (function () { throw new RuntimeError('Variable "is_registered" does not exist.', 130, $this->source); })())) : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 131
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "user", [], "any", false, false, false, 131) && CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "isRegisteredBy", [], "any", true, true, false, 131))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 131, $this->source); })()), "isRegisteredBy", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "user", [], "any", false, false, false, 131)], "method", false, false, false, 131)) : (false))));
        // line 132
        yield "
                            ";
        // line 133
        if ((($tmp = (isset($context["requires_login"]) || array_key_exists("requires_login", $context) ? $context["requires_login"] : (function () { throw new RuntimeError('Variable "requires_login" does not exist.', 133, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 134
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-primary w-100\">Se connecter pour s’inscrire</a>

                            ";
        } elseif ((($tmp =         // line 136
(isset($context["is_past"]) || array_key_exists("is_past", $context) ? $context["is_past"] : (function () { throw new RuntimeError('Variable "is_past" does not exist.', 136, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 137
            yield "                                <button class=\"btn btn-outline-secondary w-100\" disabled>Événement terminé</button>

                            ";
        } elseif ((        // line 139
(isset($context["is_full"]) || array_key_exists("is_full", $context) ? $context["is_full"] : (function () { throw new RuntimeError('Variable "is_full" does not exist.', 139, $this->source); })()) &&  !(isset($context["is_registered"]) || array_key_exists("is_registered", $context) ? $context["is_registered"] : (function () { throw new RuntimeError('Variable "is_registered" does not exist.', 139, $this->source); })()))) {
            // line 140
            yield "                                <button class=\"btn btn-outline-secondary w-100\" disabled>Complet</button>

                            ";
        } elseif (( !        // line 142
(isset($context["is_published"]) || array_key_exists("is_published", $context) ? $context["is_published"] : (function () { throw new RuntimeError('Variable "is_published" does not exist.', 142, $this->source); })()) &&  !(isset($context["is_registered"]) || array_key_exists("is_registered", $context) ? $context["is_registered"] : (function () { throw new RuntimeError('Variable "is_registered" does not exist.', 142, $this->source); })()))) {
            // line 143
            yield "                                <button class=\"btn btn-outline-secondary w-100\" disabled>Indisponible</button>

                            ";
        } else {
            // line 146
            yield "                                ";
            if ((($tmp = (isset($context["is_registered"]) || array_key_exists("is_registered", $context) ? $context["is_registered"] : (function () { throw new RuntimeError('Variable "is_registered" does not exist.', 146, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 147
                yield "                                    <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_unregister", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 147, $this->source); })()), "id", [], "any", false, false, false, 147)]), "html", null, true);
                yield "\" class=\"d-grid gap-2\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("event_unregister_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 148, $this->source); })()), "id", [], "any", false, false, false, 148))), "html", null, true);
                yield "\">
                                        <button class=\"btn btn-outline-danger w-100\">
                                            <i class=\"bi bi-x-circle me-1\"></i>Se désinscrire
                                        </button>
                                    </form>
                                ";
            } else {
                // line 154
                yield "                                    <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_register", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 154, $this->source); })()), "id", [], "any", false, false, false, 154)]), "html", null, true);
                yield "\" class=\"d-grid gap-2\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("event_register_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 155, $this->source); })()), "id", [], "any", false, false, false, 155))), "html", null, true);
                yield "\">
                                        <button class=\"btn btn-primary w-100\">
                                            <i class=\"bi bi-check2-circle me-1\"></i>Je m’inscris
                                        </button>
                                    </form>
                                ";
            }
            // line 161
            yield "                            ";
        }
        // line 162
        yield "                        </div>
                    </div>

                    ";
        // line 166
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 166, $this->source); })()), "lat", [], "any", false, false, false, 166) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 166, $this->source); })()), "lng", [], "any", false, false, false, 166))) {
            // line 167
            yield "                        <div class=\"card shadow-sm\">
                            <div class=\"card-body\">
                                <h3 class=\"h6 mb-2\">Localisation</h3>
                                <div id=\"leaflet-map\" class=\"leaflet-map w-100\"
                                     data-lat=\"";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 171, $this->source); })()), "lat", [], "any", false, false, false, 171), "html", null, true);
            yield "\"
                                     data-lng=\"";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 172, $this->source); })()), "lng", [], "any", false, false, false, 172), "html", null, true);
            yield "\"
                                     data-zoom=\"14\"></div>
                            </div>
                        </div>
                    ";
        }
        // line 177
        yield "                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 183
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 184
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 185
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 185, $this->source); })()), "lat", [], "any", false, false, false, 185) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 185, $this->source); })()), "lng", [], "any", false, false, false, 185))) {
            // line 186
            yield "        <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"
                integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\" crossorigin=\"\"></script>
        <script>
            (function () {
                var el = document.getElementById('leaflet-map');
                if (!el || typeof L === 'undefined') return;
                var lat = parseFloat(el.dataset.lat), lng = parseFloat(el.dataset.lng);
                var zoom = parseInt(el.dataset.zoom || '14', 10);
                var map = L.map(el, { scrollWheelZoom: false }).setView([lat, lng], zoom);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19, attribution: '&copy; OpenStreetMap'
                }).addTo(map);
                L.marker([lat, lng]).addTo(map);
                setTimeout(function(){ map.invalidateSize(); }, 250);
                window.addEventListener('resize', function(){ map.invalidateSize(); });
            })();
        </script>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "event/show.html.twig";
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
        return array (  526 => 186,  524 => 185,  519 => 184,  506 => 183,  491 => 177,  483 => 172,  479 => 171,  473 => 167,  470 => 166,  465 => 162,  462 => 161,  453 => 155,  448 => 154,  439 => 148,  434 => 147,  431 => 146,  426 => 143,  424 => 142,  420 => 140,  418 => 139,  414 => 137,  412 => 136,  406 => 134,  404 => 133,  401 => 132,  399 => 131,  398 => 130,  396 => 129,  393 => 127,  387 => 123,  384 => 122,  378 => 118,  375 => 117,  369 => 113,  367 => 112,  364 => 111,  361 => 110,  358 => 109,  355 => 108,  352 => 107,  349 => 106,  346 => 104,  339 => 100,  335 => 99,  325 => 98,  316 => 94,  312 => 92,  310 => 90,  308 => 89,  305 => 88,  302 => 87,  294 => 80,  288 => 78,  286 => 77,  282 => 75,  276 => 73,  273 => 72,  267 => 70,  265 => 69,  262 => 68,  256 => 66,  254 => 65,  250 => 64,  243 => 59,  239 => 57,  237 => 56,  234 => 55,  228 => 53,  226 => 52,  223 => 51,  221 => 50,  218 => 49,  216 => 48,  213 => 47,  210 => 46,  208 => 45,  205 => 44,  199 => 42,  197 => 41,  191 => 38,  184 => 34,  181 => 33,  175 => 32,  165 => 28,  160 => 27,  155 => 26,  150 => 25,  145 => 21,  132 => 20,  113 => 10,  110 => 9,  105 => 7,  92 => 6,  69 => 4,  58 => 2,  56 => 3,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/event/show.html.twig #}
{% extends 'base.html.twig' %}
{% set navbar_is_transparent = false %}
{% block title %}{{ event.title }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Cargamos Leaflet solo si hay coordenadas (OJO: event.lat / event.lng) #}
    {% if event.lat and event.lng %}
        <link rel=\"stylesheet\"
              href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"
              integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\" crossorigin=\"\">
        <style>
            .leaflet-map{height:240px;border-radius:.5rem}
            @media (min-width: 992px){ .leaflet-map{height:300px} }
        </style>
    {% endif %}
{% endblock %}

{% block body %}
    <section class=\"section-padding bg-white px-4 py-5 pt-lg-5 mt-5\">
        <div class=\"container\">

            {# --- flashes del controlador (registro / baja) --- #}
            {% for label, msgs in app.flashes %}
                {% for msg in msgs %}
                    <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                        {{ msg|raw }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                {% endfor %}
            {% endfor %}

            <a href=\"{{ path('app_event_index') }}\" class=\"btn btn-outline-secondary btn-sm mb-3\">← Retour à la liste</a>

            <div class=\"row g-4\">
                <div class=\"col-lg-8\">
                    <h1 class=\"h2 mb-2\">{{ event.title }}</h1>

                    <div class=\"d-flex flex-wrap gap-2 mb-3\">
                        {% if event.type %}
                            <span class=\"badge bg-secondary\">{{ event.type }}</span>
                        {% endif %}

                        {% set status = (event.status ?? '')|upper %}
                        {% if status == 'PUBLISHED' %}
                            <span class=\"badge bg-success\">Publié</span>
                        {% elseif status in ['REVIEW','PENDING','PENDING_APPROVAL','EN_ATTENTE','AWAITING'] %}
                            <span class=\"badge bg-warning text-dark\"><i class=\"bi bi-hourglass-split me-1\"></i>En attente</span>
                        {% elseif status == 'DRAFT' %}
                            <span class=\"badge bg-secondary\">Brouillon</span>
                        {% elseif status %}
                            <span class=\"badge bg-danger\">{{ status }}</span>
                        {% endif %}

                        {% if event.isMembersOnly %}
                            <span class=\"badge text-bg-dark\"><i class=\"bi bi-lock-fill me-1\"></i>Membres</span>
                        {% endif %}
                    </div>

                    <ul class=\"list-unstyled text-muted small mb-3\">
                        <li class=\"mb-1\">
                            <i class=\"bi bi-calendar-event me-1\"></i>
                            Début : {{ event.startAt ? event.startAt|date('d/m/Y H:i') : '—' }}
                            {% if event.endAt %}
                                <span class=\"mx-1\">–</span>{{ event.endAt|date('d/m/Y H:i') }}
                            {% endif %}
                        </li>
                        {% if event.locationName %}
                            <li class=\"mb-1\"><i class=\"bi bi-geo-alt me-1\"></i>{{ event.locationName }}</li>
                        {% endif %}
                        {% if event.createdBy %}
                            <li class=\"mb-1\"><i class=\"bi bi-person-circle me-1\"></i>Organisé par : {{ event.createdBy }}</li>
                        {% endif %}
                    </ul>

                    {% if event.description %}
                        <div class=\"mt-2 fs-6\">{{ event.description|raw }}</div>
                    {% endif %}
                </div>

                <div class=\"col-lg-4\">
                    <div class=\"card shadow-sm mb-3\">
                        <div class=\"card-body\">

                            {# ---- Aforo ---- #}
                            {% if event.maxParticipants is not null %}
                                {% set spots_left = event.spotsLeft() %}
                                {% set pct = event.maxParticipants > 0
                                    ? (((event.maxParticipants - spots_left) / event.maxParticipants) * 100)|round(0, 'ceil')
                                    : 0 %}
                                <div class=\"mb-2\">
                                    <div class=\"d-flex justify-content-between small\">
                                        <span>Places</span><span>{{ spots_left }}/{{ event.maxParticipants }}</span>
                                    </div>
                                    <div class=\"progress\" style=\"height:8px;\">
                                        <div class=\"progress-bar
                      {% if pct < 50 %}bg-success{% elseif pct < 80 %}bg-warning{% else %}bg-danger{% endif %}\"
                                             role=\"progressbar\" style=\"width: {{ pct }}%\"
                                             aria-valuenow=\"{{ pct }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                </div>
                            {% endif %}

                            {# ---- Lógica de CTA ---- #}
                            {% set is_pending = status in ['REVIEW','PENDING','PENDING_APPROVAL','EN_ATTENTE','AWAITING'] %}
                            {% set is_published = status == 'PUBLISHED' %}
                            {% set is_past = event.endAt ? (event.endAt < date()) : (event.startAt and event.startAt < date('-2 hours')) %}
                            {% set requires_login = event.isMembersOnly and not app.user %}
                            {% set is_full = (event.maxParticipants ?? 0) > 0 and (event.spotsLeft() ?? 0) <= 0 %}

                            {% if is_pending %}
                                <div class=\"alert alert-warning py-2 small mb-3\">
                                    <i class=\"bi bi-info-circle me-1\"></i>L’événement est en attente de validation.
                                </div>
                            {% endif %}
                            {% if is_past %}
                                <div class=\"alert alert-light border py-2 small mb-3\">
                                    <i class=\"bi bi-clock-history me-1\"></i>Cet événement est passé.
                                </div>
                            {% endif %}
                            {% if is_full %}
                                <div class=\"alert alert-danger py-2 small mb-3\">
                                    <i class=\"bi bi-people-fill me-1\"></i>Complet — plus d’inscriptions possibles.
                                </div>
                            {% endif %}

                            {# Si tu ya tienes un método isRegisteredBy(User) úsalo; si no, el controlador puede pasar la variable #}
                            {% set is_registered = (is_registered is defined)
                                ? is_registered
                                : (app.user and event.isRegisteredBy is defined ? event.isRegisteredBy(app.user) : false) %}

                            {% if requires_login %}
                                <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary w-100\">Se connecter pour s’inscrire</a>

                            {% elseif is_past %}
                                <button class=\"btn btn-outline-secondary w-100\" disabled>Événement terminé</button>

                            {% elseif is_full and not is_registered %}
                                <button class=\"btn btn-outline-secondary w-100\" disabled>Complet</button>

                            {% elseif not is_published and not is_registered %}
                                <button class=\"btn btn-outline-secondary w-100\" disabled>Indisponible</button>

                            {% else %}
                                {% if is_registered %}
                                    <form method=\"post\" action=\"{{ path('app_event_unregister', { id: event.id }) }}\" class=\"d-grid gap-2\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('event_unregister_' ~ event.id) }}\">
                                        <button class=\"btn btn-outline-danger w-100\">
                                            <i class=\"bi bi-x-circle me-1\"></i>Se désinscrire
                                        </button>
                                    </form>
                                {% else %}
                                    <form method=\"post\" action=\"{{ path('app_event_register', { id: event.id }) }}\" class=\"d-grid gap-2\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('event_register_' ~ event.id) }}\">
                                        <button class=\"btn btn-primary w-100\">
                                            <i class=\"bi bi-check2-circle me-1\"></i>Je m’inscris
                                        </button>
                                    </form>
                                {% endif %}
                            {% endif %}
                        </div>
                    </div>

                    {# ---- Mapa ---- #}
                    {% if event.lat and event.lng %}
                        <div class=\"card shadow-sm\">
                            <div class=\"card-body\">
                                <h3 class=\"h6 mb-2\">Localisation</h3>
                                <div id=\"leaflet-map\" class=\"leaflet-map w-100\"
                                     data-lat=\"{{ event.lat }}\"
                                     data-lng=\"{{ event.lng }}\"
                                     data-zoom=\"14\"></div>
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </section>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% if event.lat and event.lng %}
        <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"
                integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\" crossorigin=\"\"></script>
        <script>
            (function () {
                var el = document.getElementById('leaflet-map');
                if (!el || typeof L === 'undefined') return;
                var lat = parseFloat(el.dataset.lat), lng = parseFloat(el.dataset.lng);
                var zoom = parseInt(el.dataset.zoom || '14', 10);
                var map = L.map(el, { scrollWheelZoom: false }).setView([lat, lng], zoom);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19, attribution: '&copy; OpenStreetMap'
                }).addTo(map);
                L.marker([lat, lng]).addTo(map);
                setTimeout(function(){ map.invalidateSize(); }, 250);
                window.addEventListener('resize', function(){ map.invalidateSize(); });
            })();
        </script>
    {% endif %}
{% endblock %}
", "event/show.html.twig", "C:\\wamp64\\www\\appac\\templates\\event\\show.html.twig");
    }
}
