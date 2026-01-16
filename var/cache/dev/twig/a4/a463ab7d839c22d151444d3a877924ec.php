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
class __TwigTemplate_7cdeeb9343bc8a549fcdfc99420d2710 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/home.html.twig"));

        // line 4
        $context["navbar_is_transparent"] = true;
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Association des Plaisanciers d'Arzal";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
                        <p class=\"lead opacity-75 mb-0\">
                            Ami(e)s plaisanciers du Port d’Arzal-Camoël, bienvenue sur le site de l’association
                            <strong>APPAC</strong>.
                        </p>
                    </div>

                    <hr class=\"border-light opacity-25 my-4\">

                    <div class=\"fs-5 opacity-85\">
                        <p class=\"mb-3 text-white\">…Laissez naviguer votre curiosité à la découverte&nbsp;:</p>

                        <ul class=\"list-unstyled ps-0 mb-4\">
                            <li class=\"d-flex align-items-start gap-2 mb-2 text-white\">
                                <i class=\"bi bi-life-preserver\" aria-hidden=\"true\"></i>
                                <span>Nos engagements et les démarches pour la défense des intérêts des plaisanciers</span>
                            </li>
                            <li class=\"d-flex align-items-start gap-2 text-white\">
                                <i class=\"bi bi-emoji-smile\" aria-hidden=\"true\"></i>
                                <span>Nos activités festives et diverses autour du plaisir de la plaisance</span>
                            </li>
                        </ul>

                        <p class=\"mb-1 text-white\">
                            Alors, <em>cap sur «&nbsp;Qui sommes-nous&nbsp;? / Présentation de l’APPAC&nbsp;»</em> et,
                            si vous appréciez aussi la convivialité, <strong>n’hésitez pas à nous rejoindre&nbsp;!</strong>
                        </p>
                        <p class=\"mb-4 text-white\">À bientôt&nbsp;⛵</p>
                    </div>

                    <div class=\"text-center\">
                        <a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adhesion");
        yield "\" class=\"btn custom-btn px-4\" aria-label=\"Aller aux actualités\">S'abonner</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 114
        yield "    <section id=\"actus\" class=\"news-section section-padding\" aria-labelledby=\"actus-title\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 text-center\">
                    <h2 id=\"actus-title\" class=\"mb-4\">Derniers articles</h2>
                </div>

                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["actus"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 122
            yield "                    <div class=\"col-lg-4 col-md-6 mb-4\">
                        <article class=\"custom-block-wrap h-100\">
                            ";
            // line 124
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "cover", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 125
                yield "                                <img
                                    src=\"";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/covers/" . CoreExtension::getAttribute($this->env, $this->source, $context["a"], "cover", [], "any", false, false, false, 126))), "html", null, true);
                yield "\"
                                    class=\"custom-block-image img-fluid\"
                                    alt=\"";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 128), "html", null, true);
                yield "\"
                                    loading=\"lazy\">
                            ";
            }
            // line 131
            yield "
                            <div class=\"custom-block\">
                                <h3 class=\"h5 mb-2\">
                                    <a href=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 134)]), "html", null, true);
            yield "\" class=\"custom-btn\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 134), "html", null, true);
            yield "</a>
                                    ";
            // line 135
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pinned", [], "any", false, false, false, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"badge text-bg-warning ms-1\">À la une</span>";
            }
            // line 136
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "isMembersOnly", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"badge text-bg-secondary ms-1\">Membres</span>";
            }
            // line 137
            yield "                                </h3>

                                <p class=\"text-muted mb-2\">
                                    ";
            // line 140
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "publishedAt", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "publishedAt", [], "any", false, false, false, 140), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "
                                </p>

                                ";
            // line 143
            $context["excerpt"] = Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "content", [], "any", false, false, false, 143));
            // line 144
            yield "                                <p class=\"mb-3\">
                                    ";
            // line 145
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["excerpt"] ?? null)) > 160)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["excerpt"] ?? null), 0, 160) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["excerpt"] ?? null), "html", null, true)));
            yield "
                                </p>

                                <a class=\"btn custom-btn\" href=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 148)]), "html", null, true);
            yield "\">Lire</a>
                            </div>
                        </article>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 152
        if (!$context['_iterated']) {
            // line 153
            yield "                    <div class=\"col-12 text-center\">
                        <p>Aucun article pour le moment.</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        yield "            </div>
            <div class=\"text-center mt-3\">
                <a href=\"";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_index");
        yield "\" class=\"btn custom-btn px-4\">
                    Voir tous les articles
                </a>
            </div>
        </div>
    </section>

    ";
        // line 169
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
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["events"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 180
            yield "                    <div class=\"col-lg-4 col-md-6 mb-4\">
                        <div class=\"card h-100 shadow-sm\">
                            <div class=\"card-body d-flex flex-column\">
                                <h5 class=\"card-title\">";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 183), "html", null, true);
            yield "</h5>

                                <p class=\"card-text mb-1\">
                                    <strong>Date :</strong> ";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startAt", [], "any", false, false, false, 186), "d/m/Y H:i"), "html", null, true);
            yield "
                                    ";
            // line 187
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "endAt", [], "any", false, false, false, 187)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " – ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "endAt", [], "any", false, false, false, 187), "d/m/Y H:i"), "html", null, true);
            }
            // line 188
            yield "                                </p>

                                ";
            // line 190
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "locationName", [], "any", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 191
                yield "                                    <p class=\"card-text mb-1\">
                                        <strong>Lieu :</strong> ";
                // line 192
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "locationName", [], "any", false, false, false, 192), "html", null, true);
                yield "
                                    </p>
                                ";
            }
            // line 195
            yield "
                                <p class=\"card-text mb-2\">
                                    <strong>Statut :</strong>
                                    ";
            // line 198
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 198) == "PUBLISHED")) {
                // line 199
                yield "                                        <span class=\"badge bg-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 199), "html", null, true);
                yield "</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 200
$context["event"], "status", [], "any", false, false, false, 200) == "DRAFT")) {
                // line 201
                yield "                                        <span class=\"badge bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 201), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 203
                yield "                                        <span class=\"badge bg-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 203), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 205
            yield "                                </p>

                                ";
            // line 207
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 208
                yield "                                    ";
                $context["spots_left"] = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "spotsLeft", [], "method", false, false, false, 208);
                // line 209
                yield "                                    ";
                $context["percent"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 209) > 0)) ? (Twig\Extension\CoreExtension::round((((CoreExtension::getAttribute($this->env, $this->source,                 // line 210
$context["event"], "maxParticipants", [], "any", false, false, false, 210) - ($context["spots_left"] ?? null)) / CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 210)) * 100), 0, "ceil")) : (0));
                // line 212
                yield "                                    <p class=\"mb-1\">
                                        <strong>Places disponibles :</strong>
                                        ";
                // line 214
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["spots_left"] ?? null), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 214), "html", null, true);
                yield "
                                    </p>
                                    <div class=\"progress mb-2\" style=\"height:10px;\">
                                        <div
                                            class=\"progress-bar ";
                // line 218
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
                // line 220
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["percent"] ?? null), "html", null, true);
                yield "%;\"
                                            aria-valuenow=\"";
                // line 221
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["percent"] ?? null), "html", null, true);
                yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                        </div>
                                    </div>
                                ";
            }
            // line 225
            yield "
                                <a href=\"";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 226)]), "html", null, true);
            yield "\" class=\"btn btn-primary mt-auto\">
                                    Voir détails
                                </a>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 232
        if (!$context['_iterated']) {
            // line 233
            yield "                    <div class=\"col-12 text-center\">
                        <p class=\"text-muted\">Aucun événement à venir pour le moment.</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        yield "            </div>

            <div class=\"text-center mt-3\">
                <a href=\"";
        // line 240
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\" class=\"btn custom-btn px-4\">
                    Voir tous les événements
                </a>
            </div>
        </div>
    </section>


    ";
        // line 251
        yield "
    ";
        // line 252
        yield from $this->load("partials/_classifieds_home.html.twig", 252)->unwrap()->yield($context);
        // line 253
        yield "



    ";
        // line 260
        yield "    <section id=\"partenaires\" class=\"py-5 bg-light\" aria-labelledby=\"partners-title\">
        <div class=\"container\">
            <h2 id=\"partners-title\" class=\"text-center mb-4\">Nos partenaires</h2>

            <div class=\"row justify-content-center\">
                ";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["partners"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
            // line 266
            yield "                    <div class=\"col-6 col-md-3 text-center mb-4\">
                        <a href=\"";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 267), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\">
                            ";
            // line 268
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "logo", [], "any", false, false, false, 268)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 269
                yield "                                <img
                                    src=\"";
                // line 270
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "logo", [], "any", false, false, false, 270)), "html", null, true);
                yield "\"
                                    alt=\"";
                // line 271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "label", [], "any", false, false, false, 271), "html", null, true);
                yield "\"
                                    class=\"img-fluid\"
                                    style=\"max-height:100px\"
                                    loading=\"lazy\">
                            ";
            } else {
                // line 276
                yield "                                <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "label", [], "any", false, false, false, 276), "html", null, true);
                yield "</span>
                            ";
            }
            // line 278
            yield "                        </a>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 280
        if (!$context['_iterated']) {
            // line 281
            yield "                    <p class=\"text-center mb-0\">Aucun partenaire pour le moment.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['partner'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        yield "            </div>
        </div>
    </section>

    ";
        // line 288
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
        // line 341
        yield "        <div class=\"container-fluid px-0 mt-4\">
            <div id=\"leaflet-map\" class=\"leaflet-map w-100\"
                 data-lat=\"47.50017\" data-lng=\"-2.37828\" data-zoom=\"15\"></div>
        </div>
    </section>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 351
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 352
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  643 => 352,  633 => 351,  619 => 341,  565 => 288,  559 => 283,  552 => 281,  550 => 280,  544 => 278,  538 => 276,  530 => 271,  526 => 270,  523 => 269,  521 => 268,  517 => 267,  514 => 266,  509 => 265,  502 => 260,  496 => 253,  494 => 252,  491 => 251,  480 => 240,  475 => 237,  466 => 233,  464 => 232,  453 => 226,  450 => 225,  443 => 221,  439 => 220,  428 => 218,  419 => 214,  415 => 212,  413 => 210,  411 => 209,  408 => 208,  406 => 207,  402 => 205,  396 => 203,  390 => 201,  388 => 200,  383 => 199,  381 => 198,  376 => 195,  370 => 192,  367 => 191,  365 => 190,  361 => 188,  356 => 187,  352 => 186,  346 => 183,  341 => 180,  336 => 179,  324 => 169,  314 => 159,  310 => 157,  301 => 153,  299 => 152,  290 => 148,  284 => 145,  281 => 144,  279 => 143,  273 => 140,  268 => 137,  263 => 136,  259 => 135,  253 => 134,  248 => 131,  242 => 128,  237 => 126,  234 => 125,  232 => 124,  228 => 122,  223 => 121,  214 => 114,  204 => 104,  166 => 68,  158 => 60,  125 => 29,  122 => 25,  112 => 24,  90 => 10,  80 => 9,  63 => 6,  55 => 1,  53 => 4,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "public/home.html.twig", "C:\\wamp64\\www\\appac\\templates\\public\\home.html.twig");
    }
}
