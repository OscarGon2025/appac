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
class __TwigTemplate_bcddf708a1516de56e900fca58523d55 extends Template
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
        // line 3
        $context["navbar_is_transparent"] = false;
        // line 2
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    ";
        // line 9
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "lat", [], "any", false, false, false, 9) && CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "lng", [], "any", false, false, false, 9))) {
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
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "    <section class=\"section-padding bg-white px-4 py-5 pt-lg-5 mt-5\">
        <div class=\"container\">

            ";
        // line 25
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 25));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "title", [], "any", false, false, false, 38), "html", null, true);
        yield "</h1>

                    <div class=\"d-flex flex-wrap gap-2 mb-3\">
                        ";
        // line 41
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "type", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "                            <span class=\"badge bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "type", [], "any", false, false, false, 42), "html", null, true);
            yield "</span>
                        ";
        }
        // line 44
        yield "
                        ";
        // line 45
        $context["status"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "status", [], "any", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "status", [], "any", false, false, false, 45)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "status", [], "any", false, false, false, 45)) : ("")));
        // line 46
        yield "                        ";
        if ((($context["status"] ?? null) == "PUBLISHED")) {
            // line 47
            yield "                            <span class=\"badge bg-success\">Publié</span>
                        ";
        } elseif (CoreExtension::inFilter(        // line 48
($context["status"] ?? null), ["REVIEW", "PENDING", "PENDING_APPROVAL", "EN_ATTENTE", "AWAITING"])) {
            // line 49
            yield "                            <span class=\"badge bg-warning text-dark\"><i class=\"bi bi-hourglass-split me-1\"></i>En attente</span>
                        ";
        } elseif ((        // line 50
($context["status"] ?? null) == "DRAFT")) {
            // line 51
            yield "                            <span class=\"badge bg-secondary\">Brouillon</span>
                        ";
        } elseif ((($tmp =         // line 52
($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "                            <span class=\"badge bg-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["status"] ?? null), "html", null, true);
            yield "</span>
                        ";
        }
        // line 55
        yield "
                        ";
        // line 56
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "isMembersOnly", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "startAt", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "startAt", [], "any", false, false, false, 64), "d/m/Y H:i"), "html", null, true)) : ("—"));
        yield "
                            ";
        // line 65
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "endAt", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "                                <span class=\"mx-1\">–</span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "endAt", [], "any", false, false, false, 66), "d/m/Y H:i"), "html", null, true);
            yield "
                            ";
        }
        // line 68
        yield "                        </li>
                        ";
        // line 69
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "locationName", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "                            <li class=\"mb-1\"><i class=\"bi bi-geo-alt me-1\"></i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "locationName", [], "any", false, false, false, 70), "html", null, true);
            yield "</li>
                        ";
        }
        // line 72
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "createdBy", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 73
            yield "                            <li class=\"mb-1\"><i class=\"bi bi-person-circle me-1\"></i>Organisé par : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "createdBy", [], "any", false, false, false, 73), "html", null, true);
            yield "</li>
                        ";
        }
        // line 75
        yield "                    </ul>

                    ";
        // line 77
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "description", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "                        <div class=\"mt-2 fs-6\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "description", [], "any", false, false, false, 78);
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
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "maxParticipants", [], "any", false, false, false, 87))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 88
            yield "                                ";
            $context["spots_left"] = CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "spotsLeft", [], "method", false, false, false, 88);
            // line 89
            yield "                                ";
            $context["pct"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "maxParticipants", [], "any", false, false, false, 89) > 0)) ? (Twig\Extension\CoreExtension::round((((CoreExtension::getAttribute($this->env, $this->source,             // line 90
($context["event"] ?? null), "maxParticipants", [], "any", false, false, false, 90) - ($context["spots_left"] ?? null)) / CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "maxParticipants", [], "any", false, false, false, 90)) * 100), 0, "ceil")) : (0));
            // line 92
            yield "                                <div class=\"mb-2\">
                                    <div class=\"d-flex justify-content-between small\">
                                        <span>Places</span><span>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["spots_left"] ?? null), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "maxParticipants", [], "any", false, false, false, 94), "html", null, true);
            yield "</span>
                                    </div>
                                    <div class=\"progress\" style=\"height:8px;\">
                                        <div class=\"progress-bar
                      ";
            // line 98
            if ((($context["pct"] ?? null) < 50)) {
                yield "bg-success";
            } elseif ((($context["pct"] ?? null) < 80)) {
                yield "bg-warning";
            } else {
                yield "bg-danger";
            }
            yield "\"
                                             role=\"progressbar\" style=\"width: ";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pct"] ?? null), "html", null, true);
            yield "%\"
                                             aria-valuenow=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pct"] ?? null), "html", null, true);
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
        $context["is_pending"] = CoreExtension::inFilter(($context["status"] ?? null), ["REVIEW", "PENDING", "PENDING_APPROVAL", "EN_ATTENTE", "AWAITING"]);
        // line 107
        yield "                            ";
        $context["is_published"] = (($context["status"] ?? null) == "PUBLISHED");
        // line 108
        yield "                            ";
        $context["is_past"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "endAt", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "endAt", [], "any", false, false, false, 108) < $this->extensions['Twig\Extension\CoreExtension']->convertDate())) : ((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "startAt", [], "any", false, false, false, 108) && (CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "startAt", [], "any", false, false, false, 108) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("-2 hours")))));
        // line 109
        yield "                            ";
        $context["requires_login"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "isMembersOnly", [], "any", false, false, false, 109) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 109));
        // line 110
        yield "                            ";
        $context["is_full"] = (((((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "maxParticipants", [], "any", true, true, false, 110) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "maxParticipants", [], "any", false, false, false, 110)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "maxParticipants", [], "any", false, false, false, 110)) : (0)) > 0) && ((((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "spotsLeft", [], "method", true, true, false, 110) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "spotsLeft", [], "method", false, false, false, 110)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "spotsLeft", [], "method", false, false, false, 110)) : (0)) <= 0));
        // line 111
        yield "
                            ";
        // line 112
        if ((($tmp = ($context["is_pending"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 113
            yield "                                <div class=\"alert alert-warning py-2 small mb-3\">
                                    <i class=\"bi bi-info-circle me-1\"></i>L’événement est en attente de validation.
                                </div>
                            ";
        }
        // line 117
        yield "                            ";
        if ((($tmp = ($context["is_past"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 118
            yield "                                <div class=\"alert alert-light border py-2 small mb-3\">
                                    <i class=\"bi bi-clock-history me-1\"></i>Cet événement est passé.
                                </div>
                            ";
        }
        // line 122
        yield "                            ";
        if ((($tmp = ($context["is_full"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
($context["is_registered"] ?? null)) : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 131
($context["app"] ?? null), "user", [], "any", false, false, false, 131) && CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "isRegisteredBy", [], "any", true, true, false, 131))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "isRegisteredBy", [CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 131)], "method", false, false, false, 131)) : (false))));
        // line 132
        yield "
                            ";
        // line 133
        if ((($tmp = ($context["requires_login"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 134
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-primary w-100\">Se connecter pour s’inscrire</a>

                            ";
        } elseif ((($tmp =         // line 136
($context["is_past"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 137
            yield "                                <button class=\"btn btn-outline-secondary w-100\" disabled>Événement terminé</button>

                            ";
        } elseif ((        // line 139
($context["is_full"] ?? null) &&  !($context["is_registered"] ?? null))) {
            // line 140
            yield "                                <button class=\"btn btn-outline-secondary w-100\" disabled>Complet</button>

                            ";
        } elseif (( !        // line 142
($context["is_published"] ?? null) &&  !($context["is_registered"] ?? null))) {
            // line 143
            yield "                                <button class=\"btn btn-outline-secondary w-100\" disabled>Indisponible</button>

                            ";
        } else {
            // line 146
            yield "                                ";
            if ((($tmp = ($context["is_registered"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 147
                yield "                                    <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_unregister", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "id", [], "any", false, false, false, 147)]), "html", null, true);
                yield "\" class=\"d-grid gap-2\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("event_unregister_" . CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "id", [], "any", false, false, false, 148))), "html", null, true);
                yield "\">
                                        <button class=\"btn btn-outline-danger w-100\">
                                            <i class=\"bi bi-x-circle me-1\"></i>Se désinscrire
                                        </button>
                                    </form>
                                ";
            } else {
                // line 154
                yield "                                    <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_register", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "id", [], "any", false, false, false, 154)]), "html", null, true);
                yield "\" class=\"d-grid gap-2\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("event_register_" . CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "id", [], "any", false, false, false, 155))), "html", null, true);
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "lat", [], "any", false, false, false, 166) && CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "lng", [], "any", false, false, false, 166))) {
            // line 167
            yield "                        <div class=\"card shadow-sm\">
                            <div class=\"card-body\">
                                <h3 class=\"h6 mb-2\">Localisation</h3>
                                <div id=\"leaflet-map\" class=\"leaflet-map w-100\"
                                     data-lat=\"";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "lat", [], "any", false, false, false, 171), "html", null, true);
            yield "\"
                                     data-lng=\"";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "lng", [], "any", false, false, false, 172), "html", null, true);
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
        yield from [];
    }

    // line 183
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 184
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 185
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "lat", [], "any", false, false, false, 185) && CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "lng", [], "any", false, false, false, 185))) {
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
        return array (  472 => 186,  470 => 185,  465 => 184,  458 => 183,  449 => 177,  441 => 172,  437 => 171,  431 => 167,  428 => 166,  423 => 162,  420 => 161,  411 => 155,  406 => 154,  397 => 148,  392 => 147,  389 => 146,  384 => 143,  382 => 142,  378 => 140,  376 => 139,  372 => 137,  370 => 136,  364 => 134,  362 => 133,  359 => 132,  357 => 131,  356 => 130,  354 => 129,  351 => 127,  345 => 123,  342 => 122,  336 => 118,  333 => 117,  327 => 113,  325 => 112,  322 => 111,  319 => 110,  316 => 109,  313 => 108,  310 => 107,  307 => 106,  304 => 104,  297 => 100,  293 => 99,  283 => 98,  274 => 94,  270 => 92,  268 => 90,  266 => 89,  263 => 88,  260 => 87,  252 => 80,  246 => 78,  244 => 77,  240 => 75,  234 => 73,  231 => 72,  225 => 70,  223 => 69,  220 => 68,  214 => 66,  212 => 65,  208 => 64,  201 => 59,  197 => 57,  195 => 56,  192 => 55,  186 => 53,  184 => 52,  181 => 51,  179 => 50,  176 => 49,  174 => 48,  171 => 47,  168 => 46,  166 => 45,  163 => 44,  157 => 42,  155 => 41,  149 => 38,  142 => 34,  139 => 33,  133 => 32,  123 => 28,  118 => 27,  113 => 26,  108 => 25,  103 => 21,  96 => 20,  83 => 10,  80 => 9,  75 => 7,  68 => 6,  57 => 4,  52 => 2,  50 => 3,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "event/show.html.twig", "C:\\wamp64\\www\\appac\\templates\\event\\show.html.twig");
    }
}
