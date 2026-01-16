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

/* event/index.html.twig */
class __TwigTemplate_25224da81f546b433fc2ae7ca2a02685 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        // line 3
        $context["navbar_is_transparent"] = false;
        // line 2
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Événements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <section class=\"section-padding bg-white px-4 py-5 pt-lg-5 mt-5\">
        <div class=\"container\">
            <div class=\"d-flex align-items-end justify-content-between flex-wrap gap-2 mb-4\">
                <div>
                    <h1 class=\"h2 mb-1\">Tous les événements</h1>
                    <p class=\"text-muted mb-0\">
                        Retrouvez l’ensemble des sorties et activités à venir (et récentes).
                    </p>
                </div>
                <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\" class=\"btn btn-outline-secondary\">
                    Rafraîchir
                </a>
            </div>

            ";
        // line 22
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 22, $this->source); })()))) {
            // line 23
            yield "                <div class=\"alert alert-light border\">
                    Aucun événement pour le moment.
                </div>
            ";
        } else {
            // line 27
            yield "                <div class=\"row g-4\">
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 29
                yield "                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card h-100 shadow-sm\">

                                ";
                // line 33
                yield "                                <div class=\"card-body d-flex flex-column\">
                                    <h2 class=\"h5 mb-2\">
                                        <a href=\"";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 35)]), "html", null, true);
                yield "\"
                                           class=\"text-decoration-none\">
                                            ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 37), "html", null, true);
                yield "
                                        </a>
                                    </h2>

                                    <div class=\"d-flex flex-wrap gap-2 mb-2\">
                                        ";
                // line 43
                yield "                                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 44
                    yield "                                            <span class=\"badge bg-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 44), "html", null, true);
                    yield "</span>
                                        ";
                }
                // line 46
                yield "
                                        ";
                // line 48
                yield "                                        ";
                if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "isMembersOnly", [], "any", true, true, false, 48) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["event"], "isMembersOnly", [], "any", false, false, false, 48)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "isMembersOnly", [], "any", false, false, false, 48)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 49
                    yield "                                            <span class=\"badge text-bg-dark\">
                      <i class=\"bi bi-lock-fill me-1\"></i>Membres
                    </span>
                                        ";
                }
                // line 53
                yield "
                                        ";
                // line 55
                yield "                                        ";
                $context["status"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", true, true, false, 55) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 55)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 55)) : ("")));
                // line 56
                yield "                                        ";
                if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 56, $this->source); })()) == "PUBLISHED")) {
                    // line 57
                    yield "                                            <span class=\"badge bg-success\">Publié</span>
                                        ";
                } elseif (CoreExtension::inFilter(                // line 58
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 58, $this->source); })()), ["REVIEW", "PENDING", "PENDING_APPROVAL", "EN_ATTENTE", "AWAITING"])) {
                    // line 59
                    yield "                                            <span class=\"badge bg-warning text-dark\">
                      <i class=\"bi bi-hourglass-split me-1\"></i>En attente de validation
                    </span>
                                        ";
                } elseif ((                // line 62
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 62, $this->source); })()) == "DRAFT")) {
                    // line 63
                    yield "                                            <span class=\"badge bg-secondary\">Brouillon</span>
                                        ";
                } else {
                    // line 65
                    yield "                                            ";
                    if ((($tmp = (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 65, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 66
                        yield "                                                <span class=\"badge bg-danger\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 66, $this->source); })()), "html", null, true);
                        yield "</span>
                                            ";
                    }
                    // line 68
                    yield "                                        ";
                }
                // line 69
                yield "                                    </div>

                                    ";
                // line 72
                yield "                                    <ul class=\"list-unstyled small text-muted mb-3\">
                                        <li class=\"mb-1\">
                                            <i class=\"bi bi-calendar-event me-1\"></i>
                                            Début :
                                            ";
                // line 76
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startAt", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startAt", [], "any", false, false, false, 76), "d/m/Y H:i"), "html", null, true)) : ("—"));
                yield "
                                            ";
                // line 77
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "endAt", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 78
                    yield "                                                <span class=\"mx-1\">–</span>
                                                ";
                    // line 79
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "endAt", [], "any", false, false, false, 79), "d/m/Y H:i"), "html", null, true);
                    yield "
                                            ";
                }
                // line 81
                yield "                                        </li>

                                        ";
                // line 83
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "locationName", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 84
                    yield "                                            <li class=\"mb-1\">
                                                <i class=\"bi bi-geo-alt me-1\"></i>
                                                ";
                    // line 86
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "locationName", [], "any", false, false, false, 86), "html", null, true);
                    yield "
                                            </li>
                                        ";
                }
                // line 89
                yield "
                                        ";
                // line 91
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "createdBy", [], "any", true, true, false, 91) && CoreExtension::getAttribute($this->env, $this->source, $context["event"], "createdBy", [], "any", false, false, false, 91))) {
                    // line 92
                    yield "                                            <li class=\"mb-1\">
                                                <i class=\"bi bi-person-circle me-1\"></i>
                                                Organisé par : ";
                    // line 94
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "createdBy", [], "any", false, false, false, 94), "html", null, true);
                    yield "
                                            </li>
                                        ";
                }
                // line 97
                yield "                                    </ul>

                                    ";
                // line 100
                yield "                                    ";
                if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", true, true, false, 100) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 100)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 100)) : (null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 101
                    yield "                                        ";
                    $context["spots_left"] = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "spotsLeft", [], "method", false, false, false, 101);
                    // line 102
                    yield "                                        ";
                    $context["pct"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 102) > 0)) ? (Twig\Extension\CoreExtension::round((((CoreExtension::getAttribute($this->env, $this->source,                     // line 103
$context["event"], "maxParticipants", [], "any", false, false, false, 103) - (isset($context["spots_left"]) || array_key_exists("spots_left", $context) ? $context["spots_left"] : (function () { throw new RuntimeError('Variable "spots_left" does not exist.', 103, $this->source); })())) / CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 103)) * 100), 0, "ceil")) : (0));
                    // line 106
                    yield "
                                        <div class=\"mb-2\">
                                            <div class=\"d-flex justify-content-between small\">
                                                <span>Places disponibles</span>
                                                <span>";
                    // line 110
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["spots_left"]) || array_key_exists("spots_left", $context) ? $context["spots_left"] : (function () { throw new RuntimeError('Variable "spots_left" does not exist.', 110, $this->source); })()), "html", null, true);
                    yield "/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 110), "html", null, true);
                    yield "</span>
                                            </div>
                                            <div class=\"progress\" style=\"height: 8px;\">
                                                <div class=\"progress-bar
                          ";
                    // line 114
                    if (((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 114, $this->source); })()) < 50)) {
                        yield "bg-success
                          ";
                    } elseif ((                    // line 115
(isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 115, $this->source); })()) < 80)) {
                        yield "bg-warning
                          ";
                    } else {
                        // line 116
                        yield "bg-danger";
                    }
                    yield "\"
                                                     role=\"progressbar\"
                                                     style=\"width: ";
                    // line 118
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 118, $this->source); })()), "html", null, true);
                    yield "%;\"
                                                     aria-valuenow=\"";
                    // line 119
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 119, $this->source); })()), "html", null, true);
                    yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                </div>
                                            </div>
                                        </div>
                                    ";
                }
                // line 124
                yield "
                                    ";
                // line 126
                yield "                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", true, true, false, 126) && CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 126))) {
                    // line 127
                    yield "                                        ";
                    $context["excerpt"] = Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 127));
                    // line 128
                    yield "                                        <p class=\"mb-3\">
                                            ";
                    // line 129
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["excerpt"]) || array_key_exists("excerpt", $context) ? $context["excerpt"] : (function () { throw new RuntimeError('Variable "excerpt" does not exist.', 129, $this->source); })())) > 140)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["excerpt"]) || array_key_exists("excerpt", $context) ? $context["excerpt"] : (function () { throw new RuntimeError('Variable "excerpt" does not exist.', 129, $this->source); })()), 0, 140) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["excerpt"]) || array_key_exists("excerpt", $context) ? $context["excerpt"] : (function () { throw new RuntimeError('Variable "excerpt" does not exist.', 129, $this->source); })()), "html", null, true)));
                    yield "
                                        </p>
                                    ";
                }
                // line 132
                yield "
                                    ";
                // line 134
                yield "                                    <div class=\"mt-auto pt-2\">
                                        <a href=\"";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 135)]), "html", null, true);
                yield "\"
                                           class=\"btn btn-primary w-100\">
                                            Voir les détails
                                        </a>
                                    </div>
                                </div>

                                ";
                // line 143
                yield "                                <div class=\"card-footer bg-white border-0 pt-0 pb-3 px-3 small text-muted\">
                                    ";
                // line 144
                if (CoreExtension::inFilter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 144, $this->source); })()), ["REVIEW", "PENDING", "PENDING_APPROVAL", "EN_ATTENTE", "AWAITING"])) {
                    // line 145
                    yield "                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        Cet événement est en attente d’approbation de l’administration.
                                    ";
                } elseif ((                // line 147
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 147, $this->source); })()) == "DRAFT")) {
                    // line 148
                    yield "                                        <i class=\"bi bi-pencil-square me-1\"></i>
                                        Brouillon — non visible publiquement.
                                    ";
                }
                // line 151
                yield "                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            yield "                </div>
            ";
        }
        // line 157
        yield "        </div>
    </section>
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
        return "event/index.html.twig";
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
        return array (  392 => 157,  388 => 155,  379 => 151,  374 => 148,  372 => 147,  368 => 145,  366 => 144,  363 => 143,  353 => 135,  350 => 134,  347 => 132,  341 => 129,  338 => 128,  335 => 127,  332 => 126,  329 => 124,  321 => 119,  317 => 118,  311 => 116,  306 => 115,  302 => 114,  293 => 110,  287 => 106,  285 => 103,  283 => 102,  280 => 101,  277 => 100,  273 => 97,  267 => 94,  263 => 92,  260 => 91,  257 => 89,  251 => 86,  247 => 84,  245 => 83,  241 => 81,  236 => 79,  233 => 78,  231 => 77,  227 => 76,  221 => 72,  217 => 69,  214 => 68,  208 => 66,  205 => 65,  201 => 63,  199 => 62,  194 => 59,  192 => 58,  189 => 57,  186 => 56,  183 => 55,  180 => 53,  174 => 49,  171 => 48,  168 => 46,  162 => 44,  159 => 43,  151 => 37,  146 => 35,  142 => 33,  137 => 29,  133 => 28,  130 => 27,  124 => 23,  122 => 22,  114 => 17,  103 => 8,  90 => 7,  67 => 5,  56 => 2,  54 => 3,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/event/index.html.twig #}
{% extends 'base.html.twig' %}
{% set navbar_is_transparent = false %}

{% block title %}Événements{% endblock %}

{% block body %}
    <section class=\"section-padding bg-white px-4 py-5 pt-lg-5 mt-5\">
        <div class=\"container\">
            <div class=\"d-flex align-items-end justify-content-between flex-wrap gap-2 mb-4\">
                <div>
                    <h1 class=\"h2 mb-1\">Tous les événements</h1>
                    <p class=\"text-muted mb-0\">
                        Retrouvez l’ensemble des sorties et activités à venir (et récentes).
                    </p>
                </div>
                <a href=\"{{ path('app_event_index') }}\" class=\"btn btn-outline-secondary\">
                    Rafraîchir
                </a>
            </div>

            {% if events is empty %}
                <div class=\"alert alert-light border\">
                    Aucun événement pour le moment.
                </div>
            {% else %}
                <div class=\"row g-4\">
                    {% for event in events %}
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card h-100 shadow-sm\">

                                {# ——— En-tête / Titre + badges ——— #}
                                <div class=\"card-body d-flex flex-column\">
                                    <h2 class=\"h5 mb-2\">
                                        <a href=\"{{ path('app_event_show', { slug: event.slug }) }}\"
                                           class=\"text-decoration-none\">
                                            {{ event.title }}
                                        </a>
                                    </h2>

                                    <div class=\"d-flex flex-wrap gap-2 mb-2\">
                                        {# Type d’événement #}
                                        {% if event.type %}
                                            <span class=\"badge bg-secondary\">{{ event.type }}</span>
                                        {% endif %}

                                        {# Visibilité membres #}
                                        {% if event.isMembersOnly ?? false %}
                                            <span class=\"badge text-bg-dark\">
                      <i class=\"bi bi-lock-fill me-1\"></i>Membres
                    </span>
                                        {% endif %}

                                        {# Statut de publication — gère “en attente d’approbation” #}
                                        {% set status = (event.status ?? '')|upper %}
                                        {% if status == 'PUBLISHED' %}
                                            <span class=\"badge bg-success\">Publié</span>
                                        {% elseif status in ['REVIEW','PENDING','PENDING_APPROVAL','EN_ATTENTE','AWAITING'] %}
                                            <span class=\"badge bg-warning text-dark\">
                      <i class=\"bi bi-hourglass-split me-1\"></i>En attente de validation
                    </span>
                                        {% elseif status == 'DRAFT' %}
                                            <span class=\"badge bg-secondary\">Brouillon</span>
                                        {% else %}
                                            {% if status %}
                                                <span class=\"badge bg-danger\">{{ status }}</span>
                                            {% endif %}
                                        {% endif %}
                                    </div>

                                    {# ——— Métadonnées : dates, lieu ——— #}
                                    <ul class=\"list-unstyled small text-muted mb-3\">
                                        <li class=\"mb-1\">
                                            <i class=\"bi bi-calendar-event me-1\"></i>
                                            Début :
                                            {{ event.startAt ? event.startAt|date('d/m/Y H:i') : '—' }}
                                            {% if event.endAt %}
                                                <span class=\"mx-1\">–</span>
                                                {{ event.endAt|date('d/m/Y H:i') }}
                                            {% endif %}
                                        </li>

                                        {% if event.locationName %}
                                            <li class=\"mb-1\">
                                                <i class=\"bi bi-geo-alt me-1\"></i>
                                                {{ event.locationName }}
                                            </li>
                                        {% endif %}

                                        {# Optionnel: organisateur si existe #}
                                        {% if event.createdBy is defined and event.createdBy %}
                                            <li class=\"mb-1\">
                                                <i class=\"bi bi-person-circle me-1\"></i>
                                                Organisé par : {{ event.createdBy }}
                                            </li>
                                        {% endif %}
                                    </ul>

                                    {# ——— Aforo / places disponibles ——— #}
                                    {% if event.maxParticipants ?? null %}
                                        {% set spots_left = event.spotsLeft() %}
                                        {% set pct = event.maxParticipants > 0
                                            ? (((event.maxParticipants - spots_left) / event.maxParticipants) * 100)|round(0, 'ceil')
                                            : 0
                                        %}

                                        <div class=\"mb-2\">
                                            <div class=\"d-flex justify-content-between small\">
                                                <span>Places disponibles</span>
                                                <span>{{ spots_left }}/{{ event.maxParticipants }}</span>
                                            </div>
                                            <div class=\"progress\" style=\"height: 8px;\">
                                                <div class=\"progress-bar
                          {% if pct < 50 %}bg-success
                          {% elseif pct < 80 %}bg-warning
                          {% else %}bg-danger{% endif %}\"
                                                     role=\"progressbar\"
                                                     style=\"width: {{ pct }}%;\"
                                                     aria-valuenow=\"{{ pct }}\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                </div>
                                            </div>
                                        </div>
                                    {% endif %}

                                    {# ——— Extrait (si tienes un campo description/contenu) ——— #}
                                    {% if event.description is defined and event.description %}
                                        {% set excerpt = event.description|striptags %}
                                        <p class=\"mb-3\">
                                            {{ excerpt|length > 140 ? excerpt|slice(0,140) ~ '…' : excerpt }}
                                        </p>
                                    {% endif %}

                                    {# ——— CTA ——— #}
                                    <div class=\"mt-auto pt-2\">
                                        <a href=\"{{ path('app_event_show', { slug: event.slug }) }}\"
                                           class=\"btn btn-primary w-100\">
                                            Voir les détails
                                        </a>
                                    </div>
                                </div>

                                {# ——— Pied de carte (optionnel) ——— #}
                                <div class=\"card-footer bg-white border-0 pt-0 pb-3 px-3 small text-muted\">
                                    {% if status in ['REVIEW','PENDING','PENDING_APPROVAL','EN_ATTENTE','AWAITING'] %}
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        Cet événement est en attente d’approbation de l’administration.
                                    {% elseif status == 'DRAFT' %}
                                        <i class=\"bi bi-pencil-square me-1\"></i>
                                        Brouillon — non visible publiquement.
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    </section>
{% endblock %}
", "event/index.html.twig", "C:\\wamp64\\www\\appac\\templates\\event\\index.html.twig");
    }
}
