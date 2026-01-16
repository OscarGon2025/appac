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

/* classified_ad/index.html.twig */
class __TwigTemplate_03ee5650ac3838fd44b3b817010c2547 extends Template
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
        // line 2
        $context["navbar_is_transparent"] = false;
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Petites annonces";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "    <section class=\"container-lg px-4 py-5 pt-lg-5 mt-5\" id=\"classified-index\" aria-labelledby=\"classified-index-title\">
        <nav aria-label=\"Fil d’Ariane\" class=\"mb-3\">
            <ol class=\"breadcrumb bg-transparent px-0 mb-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-decoration-none\">Accueil</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Petites annonces</li>
            </ol>
        </nav>

        <header class=\"d-flex flex-column flex-md-row align-items-md-end justify-content-between gap-3 mb-4\">
            <div>
                <h1 id=\"classified-index-title\" class=\"display-6 fw-bold mb-1\">Toutes les petites annonces</h1>
                <p class=\"text-muted mb-0\">Recherchez par mots-clés, prix, état et localisation.</p>
            </div>
        </header>

        ";
        // line 22
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "            <div class=\"mb-3 text-end\">
                <a class=\"btn btn-success\" href=\"";
            // line 24
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_ad_new");
            yield "\">
                    <i class=\"bi bi-plus-lg me-1\"></i> Déposer une annonce
                </a>
            </div>
        ";
        }
        // line 29
        yield "
        ";
        // line 33
        yield "        <form method=\"get\" class=\"row g-3 align-items-end mb-4\" role=\"search\" aria-label=\"Filtres petites annonces\">
            <div class=\"col-12 col-md-4\">
                <label for=\"f-q\" class=\"form-label\">Recherche</label>
                <input id=\"f-q\" name=\"q\" type=\"search\" class=\"form-control\" placeholder=\"Titre ou description\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["q"] ?? null), "html", null, true);
        yield "\">
            </div>

            <div class=\"col-6 col-md-2\">
                <label for=\"f-min\" class=\"form-label\">Prix min</label>
                <input id=\"f-min\" name=\"min\" type=\"number\" min=\"0\" class=\"form-control\" value=\"";
        // line 41
        yield (((($tmp =  !(null === ($context["min"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["min"] ?? null), "html", null, true)) : (""));
        yield "\">
            </div>

            <div class=\"col-6 col-md-2\">
                <label for=\"f-max\" class=\"form-label\">Prix max</label>
                <input id=\"f-max\" name=\"max\" type=\"number\" min=\"0\" class=\"form-control\" value=\"";
        // line 46
        yield (((($tmp =  !(null === ($context["max"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["max"] ?? null), "html", null, true)) : (""));
        yield "\">
            </div>

            <div class=\"col-6 col-md-2\">
                <label for=\"f-condition\" class=\"form-label\">État</label>
                <select id=\"f-condition\" name=\"condition\" class=\"form-select\">
                    <option value=\"\" ";
        // line 52
        yield ((Twig\Extension\CoreExtension::testEmpty(($context["condition"] ?? null))) ? ("selected") : (""));
        yield ">— Tous —</option>
                    <option value=\"NEW\" ";
        // line 53
        yield (((($context["condition"] ?? null) == "NEW")) ? ("selected") : (""));
        yield ">Neuf</option>
                    <option value=\"USED\" ";
        // line 54
        yield (((($context["condition"] ?? null) == "USED")) ? ("selected") : (""));
        yield ">Occasion</option>
                    <option value=\"REFURB\" ";
        // line 55
        yield (((($context["condition"] ?? null) == "REFURB")) ? ("selected") : (""));
        yield ">Reconditionné</option>
                </select>
            </div>

            <div class=\"col-6 col-md-2\">
                <label for=\"f-location\" class=\"form-label\">Localisation</label>
                <input id=\"f-location\" name=\"location\" type=\"text\" class=\"form-control\" placeholder=\"Ville / zone\" value=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["location"] ?? null), "html", null, true);
        yield "\">
            </div>

            <div class=\"col-6 col-md-2\">
                <label for=\"f-sort\" class=\"form-label\">Trier par</label>
                <select id=\"f-sort\" name=\"sort\" class=\"form-select\">
                    <option value=\"recent\" ";
        // line 67
        yield (((($context["sort"] ?? null) == "recent")) ? ("selected") : (""));
        yield ">Plus récents</option>
                    <option value=\"price_asc\" ";
        // line 68
        yield (((($context["sort"] ?? null) == "price_asc")) ? ("selected") : (""));
        yield ">Prix: croissant</option>
                    <option value=\"price_desc\" ";
        // line 69
        yield (((($context["sort"] ?? null) == "price_desc")) ? ("selected") : (""));
        yield ">Prix: décroissant</option>
                </select>
            </div>

            <div class=\"col-6 col-md-2\">
                <label for=\"f-perPage\" class=\"form-label\">Par page</label>
                <select id=\"f-perPage\" name=\"perPage\" class=\"form-select\">
                    ";
        // line 76
        $context["per"] = ((array_key_exists("perPage", $context)) ? (Twig\Extension\CoreExtension::default(($context["perPage"] ?? null), 12)) : (12));
        // line 77
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([12, 24, 36]);
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 78
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["n"], "html", null, true);
            yield "\" ";
            yield (((($context["per"] ?? null) == $context["n"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["n"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['n'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "                </select>
            </div>

            <div class=\"col-12 col-md-2\">
                <button class=\"btn btn-primary w-100\">Filtrer</button>
            </div>
            <div class=\"col-12 col-md-auto\">
                <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classified_index");
        yield "\" class=\"btn btn-outline-secondary\">Effacer</a>
            </div>
        </form>

        ";
        // line 92
        yield "        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <div class=\"text-muted\">
                ";
        // line 94
        if ((($context["total"] ?? null) > 0)) {
            // line 95
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
            yield " résultat";
            yield (((($context["total"] ?? null) > 1)) ? ("s") : (""));
            yield "
                ";
        } else {
            // line 97
            yield "                    Aucun résultat.
                ";
        }
        // line 99
        yield "            </div>
        </div>

        ";
        // line 105
        yield "        <div class=\"row\">
            ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["ads"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 107
            yield "                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <article class=\"card h-100 shadow-sm\">

                        ";
            // line 111
            yield "                        ";
            $context["thumb"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholders/classified_no_image.png");
            // line 112
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "photos", [], "any", true, true, false, 112) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "photos", [], "any", false, false, false, 112)) > 0))) {
                // line 113
                yield "                            ";
                $context["first"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "photos", [], "any", false, false, false, 113));
                // line 114
                yield "                            ";
                if ((($tmp = ($context["first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 115
                    yield "                                ";
                    // line 116
                    yield "                                ";
                    $context["vichUrl"] = ((($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(($context["first"] ?? null), "imageFile") &&  !(null === $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(($context["first"] ?? null), "imageFile")))) ? ($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(($context["first"] ?? null), "imageFile")) : (null));
                    // line 117
                    yield "
                                ";
                    // line 118
                    if ((($tmp = ($context["vichUrl"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 119
                        yield "                                    ";
                        $context["thumb"] = ($context["vichUrl"] ?? null);
                        // line 120
                        yield "                                ";
                    } else {
                        // line 121
                        yield "                                    ";
                        // line 122
                        yield "                                    ";
                        $context["fileName"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "fileName", [], "any", true, true, false, 122) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "fileName", [], "any", false, false, false, 122)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "fileName", [], "any", false, false, false, 122)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "filename", [], "any", true, true, false, 122) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "filename", [], "any", false, false, false, 122)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "filename", [], "any", false, false, false, 122)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "name", [], "any", true, true, false, 122) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "name", [], "any", false, false, false, 122)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "name", [], "any", false, false, false, 122)) : (null))))));
                        // line 123
                        yield "                                    ";
                        if ((($tmp = ($context["fileName"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 124
                            yield "                                        ";
                            $context["thumb"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/classifieds/" . ($context["fileName"] ?? null)));
                            // line 125
                            yield "                                    ";
                        }
                        // line 126
                        yield "                                ";
                    }
                    // line 127
                    yield "                            ";
                }
                // line 128
                yield "                        ";
            }
            // line 129
            yield "
                        <img
                            src=\"";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(($context["thumb"] ?? null), "ad_thumb"), "html", null, true);
            yield "\"
                            class=\"card-img-top\"
                            alt=\"";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "title", [], "any", false, false, false, 133), "html", null, true);
            yield "\"
                            loading=\"lazy\"
                        >

                        <div class=\"card-body d-flex flex-column\">
                            <h3 class=\"h5 card-title mb-2\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "title", [], "any", false, false, false, 138), "html", null, true);
            yield "</h3>

                            <ul class=\"list-unstyled small text-muted mb-3\">
                                ";
            // line 141
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "location", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<li><i class=\"bi bi-geo-alt me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "location", [], "any", false, false, false, 141), "html", null, true);
                yield "</li>";
            }
            // line 142
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "publishedAt", [], "any", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<li><i class=\"bi bi-clock me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "publishedAt", [], "any", false, false, false, 142), "d/m/Y"), "html", null, true);
                yield "</li>";
            }
            // line 143
            yield "                            </ul>

                            ";
            // line 145
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "description", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 146
                yield "                                ";
                $context["excerpt"] = Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "description", [], "any", false, false, false, 146));
                // line 147
                yield "                                <p class=\"card-text mb-3\">";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["excerpt"] ?? null)) > 120)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["excerpt"] ?? null), 0, 120) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["excerpt"] ?? null), "html", null, true)));
                yield "</p>
                            ";
            }
            // line 149
            yield "
                            <div class=\"d-flex align-items-center justify-content-between mt-auto pt-2\">
              <span class=\"fw-semibold fs-5\">
                ";
            // line 152
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "price", [], "any", false, false, false, 152))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 153
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "price", [], "any", false, false, false, 153), 0, ",", " "), "html", null, true);
                yield " €
                ";
            } else {
                // line 155
                yield "                    -
                ";
            }
            // line 157
            yield "              </span>

                                <a class=\"btn btn-outline-primary btn-sm\" href=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classified_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "id", [], "any", false, false, false, 159)]), "html", null, true);
            yield "\">
                                    Voir
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 166
        if (!$context['_iterated']) {
            // line 167
            yield "                <div class=\"col-12 text-center\">
                    <div class=\"alert alert-light border\">
                        Aucun résultat ne correspond à vos filtres. Essayez d’élargir la recherche.
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ad'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "        </div>

        ";
        // line 178
        yield "        ";
        if ((($context["pages"] ?? null) > 1)) {
            // line 179
            yield "            ";
            $context["currentQuery"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 179), "query", [], "any", false, false, false, 179), "all", [], "any", false, false, false, 179);
            // line 180
            yield "            <nav aria-label=\"Pagination des annonces\">
                <ul class=\"pagination justify-content-center\">
                    ";
            // line 182
            $context["prev"] = (($context["page"] ?? null) - 1);
            // line 183
            yield "                    ";
            $context["next"] = (($context["page"] ?? null) + 1);
            // line 184
            yield "
                    <li class=\"page-item ";
            // line 185
            yield (((($context["page"] ?? null) == 1)) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classified_index", Twig\Extension\CoreExtension::merge(($context["currentQuery"] ?? null), ["page" => 1])), "html", null, true);
            yield "\" aria-label=\"Première\">«</a>
                    </li>
                    <li class=\"page-item ";
            // line 188
            yield (((($context["page"] ?? null) == 1)) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classified_index", Twig\Extension\CoreExtension::merge(($context["currentQuery"] ?? null), ["page" => ($context["prev"] ?? null)])), "html", null, true);
            yield "\" aria-label=\"Précédente\">‹</a>
                    </li>

                    ";
            // line 192
            $context["start"] = ((((($context["page"] ?? null) - 2) > 1)) ? ((($context["page"] ?? null) - 2)) : (1));
            // line 193
            yield "                    ";
            $context["end"] = ((((($context["page"] ?? null) + 2) < ($context["pages"] ?? null))) ? ((($context["page"] ?? null) + 2)) : (($context["pages"] ?? null)));
            // line 194
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(($context["start"] ?? null), ($context["end"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 195
                yield "                        <li class=\"page-item ";
                yield ((($context["p"] == ($context["page"] ?? null))) ? ("active") : (""));
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classified_index", Twig\Extension\CoreExtension::merge(($context["currentQuery"] ?? null), ["page" => $context["p"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            yield "
                    <li class=\"page-item ";
            // line 200
            yield (((($context["page"] ?? null) == ($context["pages"] ?? null))) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classified_index", Twig\Extension\CoreExtension::merge(($context["currentQuery"] ?? null), ["page" => ($context["next"] ?? null)])), "html", null, true);
            yield "\" aria-label=\"Suivante\">›</a>
                    </li>
                    <li class=\"page-item ";
            // line 203
            yield (((($context["page"] ?? null) == ($context["pages"] ?? null))) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classified_index", Twig\Extension\CoreExtension::merge(($context["currentQuery"] ?? null), ["page" => ($context["pages"] ?? null)])), "html", null, true);
            yield "\" aria-label=\"Dernière\">»</a>
                    </li>
                </ul>
            </nav>
        ";
        }
        // line 209
        yield "    </section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "classified_ad/index.html.twig";
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
        return array (  498 => 209,  490 => 204,  486 => 203,  481 => 201,  477 => 200,  474 => 199,  463 => 196,  458 => 195,  453 => 194,  450 => 193,  448 => 192,  442 => 189,  438 => 188,  433 => 186,  429 => 185,  426 => 184,  423 => 183,  421 => 182,  417 => 180,  414 => 179,  411 => 178,  407 => 173,  396 => 167,  394 => 166,  382 => 159,  378 => 157,  374 => 155,  368 => 153,  366 => 152,  361 => 149,  355 => 147,  352 => 146,  350 => 145,  346 => 143,  339 => 142,  333 => 141,  327 => 138,  319 => 133,  314 => 131,  310 => 129,  307 => 128,  304 => 127,  301 => 126,  298 => 125,  295 => 124,  292 => 123,  289 => 122,  287 => 121,  284 => 120,  281 => 119,  279 => 118,  276 => 117,  273 => 116,  271 => 115,  268 => 114,  265 => 113,  262 => 112,  259 => 111,  254 => 107,  249 => 106,  246 => 105,  241 => 99,  237 => 97,  229 => 95,  227 => 94,  223 => 92,  216 => 87,  207 => 80,  194 => 78,  189 => 77,  187 => 76,  177 => 69,  173 => 68,  169 => 67,  160 => 61,  151 => 55,  147 => 54,  143 => 53,  139 => 52,  130 => 46,  122 => 41,  114 => 36,  109 => 33,  106 => 29,  98 => 24,  95 => 23,  93 => 22,  78 => 10,  73 => 7,  66 => 6,  55 => 4,  50 => 1,  48 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "classified_ad/index.html.twig", "C:\\wamp64\\www\\appac\\templates\\classified_ad\\index.html.twig");
    }
}
