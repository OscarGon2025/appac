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
class __TwigTemplate_36d9ae16639778a339a3adac19b2335e extends Template
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
        // line 3
        $context["navbar_is_transparent"] = false;
        // line 2
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Événements";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        if (Twig\Extension\CoreExtension::testEmpty(($context["events"] ?? null))) {
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
            $context['_seq'] = CoreExtension::ensureTraversable(($context["events"] ?? null));
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
                if ((($context["status"] ?? null) == "PUBLISHED")) {
                    // line 57
                    yield "                                            <span class=\"badge bg-success\">Publié</span>
                                        ";
                } elseif (CoreExtension::inFilter(                // line 58
($context["status"] ?? null), ["REVIEW", "PENDING", "PENDING_APPROVAL", "EN_ATTENTE", "AWAITING"])) {
                    // line 59
                    yield "                                            <span class=\"badge bg-warning text-dark\">
                      <i class=\"bi bi-hourglass-split me-1\"></i>En attente de validation
                    </span>
                                        ";
                } elseif ((                // line 62
($context["status"] ?? null) == "DRAFT")) {
                    // line 63
                    yield "                                            <span class=\"badge bg-secondary\">Brouillon</span>
                                        ";
                } else {
                    // line 65
                    yield "                                            ";
                    if ((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 66
                        yield "                                                <span class=\"badge bg-danger\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["status"] ?? null), "html", null, true);
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
$context["event"], "maxParticipants", [], "any", false, false, false, 103) - ($context["spots_left"] ?? null)) / CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 103)) * 100), 0, "ceil")) : (0));
                    // line 106
                    yield "
                                        <div class=\"mb-2\">
                                            <div class=\"d-flex justify-content-between small\">
                                                <span>Places disponibles</span>
                                                <span>";
                    // line 110
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["spots_left"] ?? null), "html", null, true);
                    yield "/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 110), "html", null, true);
                    yield "</span>
                                            </div>
                                            <div class=\"progress\" style=\"height: 8px;\">
                                                <div class=\"progress-bar
                          ";
                    // line 114
                    if ((($context["pct"] ?? null) < 50)) {
                        yield "bg-success
                          ";
                    } elseif ((                    // line 115
($context["pct"] ?? null) < 80)) {
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
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pct"] ?? null), "html", null, true);
                    yield "%;\"
                                                     aria-valuenow=\"";
                    // line 119
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pct"] ?? null), "html", null, true);
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
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["excerpt"] ?? null)) > 140)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["excerpt"] ?? null), 0, 140) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["excerpt"] ?? null), "html", null, true)));
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
                if (CoreExtension::inFilter(($context["status"] ?? null), ["REVIEW", "PENDING", "PENDING_APPROVAL", "EN_ATTENTE", "AWAITING"])) {
                    // line 145
                    yield "                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        Cet événement est en attente d’approbation de l’administration.
                                    ";
                } elseif ((                // line 147
($context["status"] ?? null) == "DRAFT")) {
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
        return array (  362 => 157,  358 => 155,  349 => 151,  344 => 148,  342 => 147,  338 => 145,  336 => 144,  333 => 143,  323 => 135,  320 => 134,  317 => 132,  311 => 129,  308 => 128,  305 => 127,  302 => 126,  299 => 124,  291 => 119,  287 => 118,  281 => 116,  276 => 115,  272 => 114,  263 => 110,  257 => 106,  255 => 103,  253 => 102,  250 => 101,  247 => 100,  243 => 97,  237 => 94,  233 => 92,  230 => 91,  227 => 89,  221 => 86,  217 => 84,  215 => 83,  211 => 81,  206 => 79,  203 => 78,  201 => 77,  197 => 76,  191 => 72,  187 => 69,  184 => 68,  178 => 66,  175 => 65,  171 => 63,  169 => 62,  164 => 59,  162 => 58,  159 => 57,  156 => 56,  153 => 55,  150 => 53,  144 => 49,  141 => 48,  138 => 46,  132 => 44,  129 => 43,  121 => 37,  116 => 35,  112 => 33,  107 => 29,  103 => 28,  100 => 27,  94 => 23,  92 => 22,  84 => 17,  73 => 8,  66 => 7,  55 => 5,  50 => 2,  48 => 3,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "event/index.html.twig", "C:\\wamp64\\www\\appac\\templates\\event\\index.html.twig");
    }
}
