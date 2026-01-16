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

/* public/home.html.twig */
class __TwigTemplate_a67e461bf13d98d36d1524f9e57afe8a extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        $context["navbar_is_transparent"] = true;
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Association des Plaisanciers d'Arzal";
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link
        rel=\"stylesheet\"
        href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"
        integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
        crossorigin=\"\"
    />
    <style>

        .leaflet-map { height: 380px; }
        @media (min-width: 992px){ .leaflet-map { height: 480px; } }
    </style>
";
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "
    ";
        // line 29
        yield "    <section class=\"hero-section\" id=\"section_1\" aria-label=\"Bannière d’accueil\">
        <div class=\"section-overlay\"></div>

        <div class=\"container d-flex justify-content-center align-items-center\">
            <div class=\"row\">
                <div class=\"col-12 mt-auto mb-5 text-center\">
                    <small class=\"text-uppercase\">Association des Plaisanciers d'Arzal</small>
                    <h1 class=\"text-white mb-5\">Bienvenue sur notre site&nbsp;!</h1>
                    <a class=\"btn custom-btn smoothscroll\" href=\"#about\" aria-label=\"Découvrir l’association\">Découvrir</a>
                </div>

                <div class=\"col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center\">
                    <div class=\"date-wrap\">
                        <h5 class=\"text-white mb-0\">
                            <i class=\"custom-icon bi-clock me-2\" aria-hidden=\"true\"></i>
                            Prochain événement : 12 Octobre 2025
                        </h5>
                    </div>

                    <div class=\"location-wrap mx-auto py-3 py-lg-0\">
                        <h5 class=\"text-white mb-0\">
                            <i class=\"custom-icon bi-geo-alt me-2\" aria-hidden=\"true\"></i>
                            Port de plaisance d'Arzal (Morbihan)
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"video-wrap\" aria-hidden=\"true\">
            <video autoplay loop muted playsinline class=\"custom-video\">
                <source src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("video/istockphoto-1293944549-640_adpp_is.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
            </video>
        </div>
    </section>

    ";
        // line 68
        yield "    <section id=\"about\" class=\"about-section section-padding text-white\" aria-labelledby=\"about-title\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-xl-8 col-lg-9\">
                    <div class=\"text-center mb-4\">
                        <h2 id=\"about-title\" class=\"display-6 fw-bold mb-3 text-white\">Qui sommes-nous&nbsp;?</h2>
";
        // line 78
        yield "                    </div>

                    <hr class=\"border-light opacity-25 my-4\">

                    <div class=\"fs-5 opacity-85\">
                        <p class=\"mb-3 text-white\">L’APPAC, Association des usagers du Port de Plaisanciers d’Arzal-Camoël, situé en Bretagne,
                            est une association loi 1901 qui rassemble des passionnés de navigation et de plaisance, propriétaires de bateaux
                            présents sur le port d’Arzal-Camoël.</p>

                        <ul class=\"list-unstyled ps-0 mb-4\">
                            <li class=\"d-flex align-items-start gap-2 mb-2 text-white\">
";
        // line 90
        yield "                                <span>L’association organise régulièrement des évènements, des rendez-vous en escales, des rencontres et ateliers
                                    pour renforcer les liens entre ses membres.</span>
                            </li>
                            <li class=\"d-flex align-items-start gap-2 text-white\">
";
        // line 95
        yield "                                <span>L’APPAC joue également un rôle important dans la représentation des plaisanciers auprès des autorités portuaires,
                                    des administrations et autres organismes en lien avec la plaisance. Elle veille à ce que les intérêts des usagers du
                                    port soient bien pris en compte.</span>
                            </li>
                        </ul>

                        <p class=\"mb-1 text-white\">
                            <strong>Venez nous rejoindre pour apporter vos compétences et votre convivialité !</strong>
                        </p>
                        <p class=\"mb-4 text-white\">À bientôt&nbsp;⛵</p>
                    </div>

                    <div class=\"text-center\">
                        <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adhesion");
        yield "\" class=\"btn custom-btn px-4\" aria-label=\"Aller aux actualités\">S'abonner</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 118
        yield "    <section id=\"actus\" class=\"news-section section-padding\" aria-labelledby=\"actus-title\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 text-center\">
                    <h2 id=\"actus-title\" class=\"mb-4\">Derniers articles</h2>
                </div>

                ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["actus"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 126
            yield "                    <div class=\"col-lg-4 col-md-6 mb-4\">
                        <article class=\"custom-block-wrap h-100\">
                            ";
            // line 128
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "cover", [], "any", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 129
                yield "                                <img
                                    src=\"";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/covers/" . CoreExtension::getAttribute($this->env, $this->source, $context["a"], "cover", [], "any", false, false, false, 130))), "html", null, true);
                yield "\"
                                    class=\"custom-block-image img-fluid\"
                                    alt=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 132), "html", null, true);
                yield "\"
                                    loading=\"lazy\">
                            ";
            }
            // line 135
            yield "
                            <div class=\"custom-block\">
                                <h3 class=\"h5 mb-2\">
                                    <a href=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 138)]), "html", null, true);
            yield "\" class=\"custom-btn\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 138), "html", null, true);
            yield "</a>
                                    ";
            // line 139
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pinned", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"badge text-bg-warning ms-1\">À la une</span>";
            }
            // line 140
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "isMembersOnly", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"badge text-bg-secondary ms-1\">Membres</span>";
            }
            // line 141
            yield "                                </h3>

                                <p class=\"text-muted mb-2\">
                                    ";
            // line 144
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "publishedAt", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "publishedAt", [], "any", false, false, false, 144), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "
                                </p>

                                ";
            // line 147
            $context["excerpt"] = Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "content", [], "any", false, false, false, 147));
            // line 148
            yield "                                <p class=\"mb-3\">
                                    ";
            // line 149
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["excerpt"] ?? null)) > 160)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["excerpt"] ?? null), 0, 160) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["excerpt"] ?? null), "html", null, true)));
            yield "
                                </p>

                                <a class=\"btn custom-btn\" href=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 152)]), "html", null, true);
            yield "\">Lire</a>
                            </div>
                        </article>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 156
        if (!$context['_iterated']) {
            // line 157
            yield "                    <div class=\"col-12 text-center\">
                        <p>Aucun article pour le moment.</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        yield "            </div>
            <div class=\"text-center mt-3\">
                <a href=\"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_index");
        yield "\" class=\"btn custom-btn px-4\">
                    Voir tous les articles
                </a>
            </div>
        </div>
    </section>

    ";
        // line 173
        yield "    <section id=\"events-section\" class=\"section-padding bg-light\" aria-labelledby=\"events-title\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-12 text-center\">
                    <h2 id=\"events-title\" class=\"mb-3\">Prochains événements</h2>
                    <p class=\"text-muted mb-0\">Découvrez nos sorties et activités à venir</p>
                </div>
            </div>

            <div class=\"row\">
                ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["events"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 184
            yield "                    <div class=\"col-lg-4 col-md-6 mb-4\">
                        <div class=\"card h-100 shadow-sm\">
                            <div class=\"card-body d-flex flex-column\">
                                <h5 class=\"card-title\">";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 187), "html", null, true);
            yield "</h5>

                                <p class=\"card-text mb-1\">
                                    <strong>Date :</strong> ";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startAt", [], "any", false, false, false, 190), "d/m/Y H:i"), "html", null, true);
            yield "
                                    ";
            // line 191
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "endAt", [], "any", false, false, false, 191)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " – ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "endAt", [], "any", false, false, false, 191), "d/m/Y H:i"), "html", null, true);
            }
            // line 192
            yield "                                </p>

                                ";
            // line 194
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "locationName", [], "any", false, false, false, 194)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 195
                yield "                                    <p class=\"card-text mb-1\">
                                        <strong>Lieu :</strong> ";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "locationName", [], "any", false, false, false, 196), "html", null, true);
                yield "
                                    </p>
                                ";
            }
            // line 199
            yield "
                                <p class=\"card-text mb-2\">
                                    <strong>Statut :</strong>
                                    ";
            // line 202
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 202) == "PUBLISHED")) {
                // line 203
                yield "                                        <span class=\"badge bg-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 203), "html", null, true);
                yield "</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 204
$context["event"], "status", [], "any", false, false, false, 204) == "DRAFT")) {
                // line 205
                yield "                                        <span class=\"badge bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 205), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 207
                yield "                                        <span class=\"badge bg-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 207), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 209
            yield "                                </p>

                                ";
            // line 211
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 211)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 212
                yield "                                    ";
                $context["spots_left"] = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "spotsLeft", [], "method", false, false, false, 212);
                // line 213
                yield "                                    ";
                $context["percent"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 213) > 0)) ? (Twig\Extension\CoreExtension::round((((CoreExtension::getAttribute($this->env, $this->source,                 // line 214
$context["event"], "maxParticipants", [], "any", false, false, false, 214) - ($context["spots_left"] ?? null)) / CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 214)) * 100), 0, "ceil")) : (0));
                // line 216
                yield "                                    <p class=\"mb-1\">
                                        <strong>Places disponibles :</strong>
                                        ";
                // line 218
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["spots_left"] ?? null), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 218), "html", null, true);
                yield "
                                    </p>
                                    <div class=\"progress mb-2\" style=\"height:10px;\">
                                        <div
                                            class=\"progress-bar ";
                // line 222
                if ((($context["percent"] ?? null) < 50)) {
                    yield "bg-success";
                } elseif ((($context["percent"] ?? null) < 80)) {
                    yield "bg-warning";
                } else {
                    yield "bg-danger";
                }
                yield "\"
                                            role=\"progressbar\"
                                            style=\"width: ";
                // line 224
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["percent"] ?? null), "html", null, true);
                yield "%;\"
                                            aria-valuenow=\"";
                // line 225
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["percent"] ?? null), "html", null, true);
                yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                        </div>
                                    </div>
                                ";
            }
            // line 229
            yield "
                                <a href=\"";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 230)]), "html", null, true);
            yield "\" class=\"btn btn-primary mt-auto\">
                                    Voir détails
                                </a>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 236
        if (!$context['_iterated']) {
            // line 237
            yield "                    <div class=\"col-12 text-center\">
                        <p class=\"text-muted\">Aucun événement à venir pour le moment.</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        yield "            </div>

            <div class=\"text-center mt-3\">
                <a href=\"";
        // line 244
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\" class=\"btn custom-btn px-4\">
                    Voir tous les événements
                </a>
            </div>
        </div>
    </section>


    ";
        // line 255
        yield "
    ";
        // line 256
        yield from $this->load("partials/_classifieds_home.html.twig", 256)->unwrap()->yield($context);
        // line 257
        yield "



    ";
        // line 264
        yield "    <section id=\"partenaires\" class=\"py-5 bg-light\" aria-labelledby=\"partners-title\">
        <div class=\"container\">
            <h2 id=\"partners-title\" class=\"text-center mb-4\">Partenaires et Informations</h2>

";
        // line 288
        yield "
            <div class=\"row justify-content-center g-4\">
                ";
        // line 290
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["partners"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
            // line 291
            yield "                    <div class=\"col-6 col-md-4 col-lg-3\">
                        <a href=\"";
            // line 292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 292), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\"
                           class=\"partner-card\">
                            <div class=\"partner-card-body\">
                                ";
            // line 295
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "logo", [], "any", false, false, false, 295)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 296
                yield "                                    <img
                                        src=\"";
                // line 297
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "logo", [], "any", false, false, false, 297)), "html", null, true);
                yield "\"
                                        alt=\"";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "label", [], "any", false, false, false, 298), "html", null, true);
                yield "\"
                                        loading=\"lazy\">
                                ";
            } else {
                // line 301
                yield "                                    <span class=\"partner-label\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "label", [], "any", false, false, false, 301), "html", null, true);
                yield "</span>
                                ";
            }
            // line 303
            yield "                            </div>
                        </a>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 306
        if (!$context['_iterated']) {
            // line 307
            yield "                    <p class=\"text-center mb-0\">Aucun partenaire pour le moment.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['partner'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        yield "            </div>

        </div>
    </section>

    ";
        // line 315
        yield "    <section id=\"contact\" class=\"section-padding bg-white pb-0\" aria-labelledby=\"contact-title\">
        <div class=\"container\">
            <div class=\"row mb-4\">
                <div class=\"col-12 text-center\">
                    <h2 id=\"contact-title\" class=\"mb-2\">Contactez-nous</h2>
                    <p class=\"text-muted mb-0\">Une question ? Un message ? Appac est à votre écoute.</p>
                </div>
            </div>

            <div class=\"row g-4\">
                <div class=\"col-lg-6\">
                    <div class=\"card h-100 shadow-sm\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Coordonnées</h5>
                            <ul class=\"list-unstyled mb-0\">
                                <li class=\"mb-1\"><i class=\"bi bi-geo-alt me-2\"></i><strong>Capitainerie d’Arzal-Camoël</strong></li>
                                <li class=\"mb-1\"><i class=\"bi bi-pin-map me-2\"></i> Port d’Arzal-Camoël, 56190 Arzal</li>
                                <li class=\"mb-1\"><i class=\"bi bi-envelope me-2\"></i><a href=\"mailto:contact@appac56.fr\">contact@appac56.fr</a></li>
                                <li class=\"mb-1\"><i class=\"bi bi-telephone me-2\"></i> 02 00 00 00 00</li>
                                <li class=\"mb-0\"><i class=\"bi bi-clock me-2\"></i> Lun–Dim : 09:00–18:00</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-6\">
                    <div class=\"card h-100 shadow-sm\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Envoyer un message</h5>
                            <form action=\"#\" method=\"post\" class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    <label for=\"c-name\" class=\"form-label\">Nom</label>
                                    <input id=\"c-name\" name=\"name\" type=\"text\" class=\"form-control\" required>
                                </div>
                                <div class=\"col-md-6\">
                                    <label for=\"c-email\" class=\"form-label\">Email</label>
                                    <input id=\"c-email\" name=\"email\" type=\"email\" class=\"form-control\" required>
                                </div>
                                <div class=\"col-12\">
                                    <label for=\"c-message\" class=\"form-label\">Message</label>
                                    <textarea id=\"c-message\" name=\"message\" rows=\"4\" class=\"form-control\" required></textarea>
                                </div>
                                <div class=\"col-12\">
                                    <button type=\"submit\" class=\"btn custom-btn\">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 368
        yield "        <div class=\"container-fluid px-0 mt-4\">
            <div id=\"leaflet-map\" class=\"leaflet-map w-100\"
                 data-lat=\"47.50017\" data-lng=\"-2.37828\" data-zoom=\"15\"></div>
        </div>
    </section>

";
        yield from [];
    }

    // line 378
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 379
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script
        src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"
        integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
        crossorigin=\"\">
    </script>
    <script>
        (function () {
            var el = document.getElementById('leaflet-map');
            if (!el || typeof L === 'undefined') return;

            var lat = parseFloat(el.dataset.lat || '47.50017');
            var lng = parseFloat(el.dataset.lng || '-2.37828');
            var zoom = parseInt(el.dataset.zoom || '15', 10);

            var map = L.map(el, { scrollWheelZoom: false }).setView([lat, lng], zoom);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; OpenStreetMap'
            }).addTo(map);

            var marker = L.marker([lat, lng]).addTo(map);
            marker.bindPopup('<strong>Capitainerie d’&nbsp;Arzal-Camoël</strong><br>Port d’Arzal-Camoël').openPopup();

            // Assurer un rendu correct après mise en page/redimensionnement
            setTimeout(function(){ map.invalidateSize(); }, 250);
            window.addEventListener('resize', function(){ map.invalidateSize(); });
        })();
    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "public/home.html.twig";
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
        return array (  625 => 379,  618 => 378,  607 => 368,  553 => 315,  546 => 309,  539 => 307,  537 => 306,  530 => 303,  524 => 301,  518 => 298,  514 => 297,  511 => 296,  509 => 295,  503 => 292,  500 => 291,  495 => 290,  491 => 288,  485 => 264,  479 => 257,  477 => 256,  474 => 255,  463 => 244,  458 => 241,  449 => 237,  447 => 236,  436 => 230,  433 => 229,  426 => 225,  422 => 224,  411 => 222,  402 => 218,  398 => 216,  396 => 214,  394 => 213,  391 => 212,  389 => 211,  385 => 209,  379 => 207,  373 => 205,  371 => 204,  366 => 203,  364 => 202,  359 => 199,  353 => 196,  350 => 195,  348 => 194,  344 => 192,  339 => 191,  335 => 190,  329 => 187,  324 => 184,  319 => 183,  307 => 173,  297 => 163,  293 => 161,  284 => 157,  282 => 156,  273 => 152,  267 => 149,  264 => 148,  262 => 147,  256 => 144,  251 => 141,  246 => 140,  242 => 139,  236 => 138,  231 => 135,  225 => 132,  220 => 130,  217 => 129,  215 => 128,  211 => 126,  206 => 125,  197 => 118,  187 => 108,  172 => 95,  166 => 90,  153 => 78,  145 => 68,  137 => 60,  104 => 29,  101 => 25,  94 => 24,  75 => 10,  68 => 9,  57 => 6,  52 => 1,  50 => 4,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "public/home.html.twig", "C:\\wamp64\\www\\appac\\templates\\public\\home.html.twig");
    }
}
