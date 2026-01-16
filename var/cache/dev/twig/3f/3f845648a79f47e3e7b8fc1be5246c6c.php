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
class __TwigTemplate_7441b754d4deb959922d5b61b8c6be45 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classified_ad/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classified_ad/index.html.twig"));

        // line 2
        $context["navbar_is_transparent"] = false;
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Petites annonces";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "\">
            </div>

            <div class=\"col-6 col-md-2\">
                <label for=\"f-min\" class=\"form-label\">Prix min</label>
                <input id=\"f-min\" name=\"min\" type=\"number\" min=\"0\" class=\"form-control\" value=\"";
        // line 41
        yield (((($tmp =  !(null === (isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 41, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 41, $this->source); })()), "html", null, true)) : (""));
        yield "\">
            </div>

            <div class=\"col-6 col-md-2\">
                <label for=\"f-max\" class=\"form-label\">Prix max</label>
                <input id=\"f-max\" name=\"max\" type=\"number\" min=\"0\" class=\"form-control\" value=\"";
        // line 46
        yield (((($tmp =  !(null === (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 46, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 46, $this->source); })()), "html", null, true)) : (""));
        yield "\">
            </div>

            <div class=\"col-6 col-md-2\">
                <label for=\"f-condition\" class=\"form-label\">État</label>
                <select id=\"f-condition\" name=\"condition\" class=\"form-select\">
                    <option value=\"\" ";
        // line 52
        yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 52, $this->source); })()))) ? ("selected") : (""));
        yield ">— Tous —</option>
                    <option value=\"NEW\" ";
        // line 53
        yield ((((isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 53, $this->source); })()) == "NEW")) ? ("selected") : (""));
        yield ">Neuf</option>
                    <option value=\"USED\" ";
        // line 54
        yield ((((isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 54, $this->source); })()) == "USED")) ? ("selected") : (""));
        yield ">Occasion</option>
                    <option value=\"REFURB\" ";
        // line 55
        yield ((((isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 55, $this->source); })()) == "REFURB")) ? ("selected") : (""));
        yield ">Reconditionné</option>
                </select>
            </div>

            <div class=\"col-6 col-md-2\">
                <label for=\"f-location\" class=\"form-label\">Localisation</label>
                <input id=\"f-location\" name=\"location\" type=\"text\" class=\"form-control\" placeholder=\"Ville / zone\" value=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 61, $this->source); })()), "html", null, true);
        yield "\">
            </div>

            <div class=\"col-6 col-md-2\">
                <label for=\"f-sort\" class=\"form-label\">Trier par</label>
                <select id=\"f-sort\" name=\"sort\" class=\"form-select\">
                    <option value=\"recent\" ";
        // line 67
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 67, $this->source); })()) == "recent")) ? ("selected") : (""));
        yield ">Plus récents</option>
                    <option value=\"price_asc\" ";
        // line 68
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 68, $this->source); })()) == "price_asc")) ? ("selected") : (""));
        yield ">Prix: croissant</option>
                    <option value=\"price_desc\" ";
        // line 69
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 69, $this->source); })()) == "price_desc")) ? ("selected") : (""));
        yield ">Prix: décroissant</option>
                </select>
            </div>

            <div class=\"col-6 col-md-2\">
                <label for=\"f-perPage\" class=\"form-label\">Par page</label>
                <select id=\"f-perPage\" name=\"perPage\" class=\"form-select\">
                    ";
        // line 76
        $context["per"] = ((array_key_exists("perPage", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["perPage"]) || array_key_exists("perPage", $context) ? $context["perPage"] : (function () { throw new RuntimeError('Variable "perPage" does not exist.', 76, $this->source); })()), 12)) : (12));
        // line 77
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([12, 24, 36]);
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 78
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["n"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["per"]) || array_key_exists("per", $context) ? $context["per"] : (function () { throw new RuntimeError('Variable "per" does not exist.', 78, $this->source); })()) == $context["n"])) ? ("selected") : (""));
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
        if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 94, $this->source); })()) > 0)) {
            // line 95
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 95, $this->source); })()), "html", null, true);
            yield " résultat";
            yield ((((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 95, $this->source); })()) > 1)) ? ("s") : (""));
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ads"]) || array_key_exists("ads", $context) ? $context["ads"] : (function () { throw new RuntimeError('Variable "ads" does not exist.', 106, $this->source); })()));
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
                if ((($tmp = (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 114, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 115
                    yield "                                ";
                    // line 116
                    yield "                                ";
                    $context["vichUrl"] = ((($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 116, $this->source); })()), "imageFile") &&  !(null === $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 116, $this->source); })()), "imageFile")))) ? ($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 116, $this->source); })()), "imageFile")) : (null));
                    // line 117
                    yield "
                                ";
                    // line 118
                    if ((($tmp = (isset($context["vichUrl"]) || array_key_exists("vichUrl", $context) ? $context["vichUrl"] : (function () { throw new RuntimeError('Variable "vichUrl" does not exist.', 118, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 119
                        yield "                                    ";
                        $context["thumb"] = (isset($context["vichUrl"]) || array_key_exists("vichUrl", $context) ? $context["vichUrl"] : (function () { throw new RuntimeError('Variable "vichUrl" does not exist.', 119, $this->source); })());
                        // line 120
                        yield "                                ";
                    } else {
                        // line 121
                        yield "                                    ";
                        // line 122
                        yield "                                    ";
                        $context["fileName"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "fileName", [], "any", true, true, false, 122) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 122, $this->source); })()), "fileName", [], "any", false, false, false, 122)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 122, $this->source); })()), "fileName", [], "any", false, false, false, 122)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "filename", [], "any", true, true, false, 122) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 122, $this->source); })()), "filename", [], "any", false, false, false, 122)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 122, $this->source); })()), "filename", [], "any", false, false, false, 122)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "name", [], "any", true, true, false, 122) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 122, $this->source); })()), "name", [], "any", false, false, false, 122)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 122, $this->source); })()), "name", [], "any", false, false, false, 122)) : (null))))));
                        // line 123
                        yield "                                    ";
                        if ((($tmp = (isset($context["fileName"]) || array_key_exists("fileName", $context) ? $context["fileName"] : (function () { throw new RuntimeError('Variable "fileName" does not exist.', 123, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 124
                            yield "                                        ";
                            $context["thumb"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/classifieds/" . (isset($context["fileName"]) || array_key_exists("fileName", $context) ? $context["fileName"] : (function () { throw new RuntimeError('Variable "fileName" does not exist.', 124, $this->source); })())));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["thumb"]) || array_key_exists("thumb", $context) ? $context["thumb"] : (function () { throw new RuntimeError('Variable "thumb" does not exist.', 131, $this->source); })()), "ad_thumb"), "html", null, true);
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
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["excerpt"]) || array_key_exists("excerpt", $context) ? $context["excerpt"] : (function () { throw new RuntimeError('Variable "excerpt" does not exist.', 147, $this->source); })())) > 120)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["excerpt"]) || array_key_exists("excerpt", $context) ? $context["excerpt"] : (function () { throw new RuntimeError('Variable "excerpt" does not exist.', 147, $this->source); })()), 0, 120) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["excerpt"]) || array_key_exists("excerpt", $context) ? $context["excerpt"] : (function () { throw new RuntimeError('Variable "excerpt" does not exist.', 147, $this->source); })()), "html", null, true)));
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
        if (((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 178, $this->source); })()) > 1)) {
            // line 179
            yield "            ";
            $context["currentQuery"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 179, $this->source); })()), "request", [], "any", false, false, false, 179), "query", [], "any", false, false, false, 179), "all", [], "any", false, false, false, 179);
            // line 180
            yield "            <nav aria-label=\"Pagination des annonces\">
                <ul class=\"pagination justify-content-center\">
                    ";
            // line 182
            $context["prev"] = ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 182, $this->source); })()) - 1);
            // line 183
            yield "                    ";
            $context["next"] = ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 183, $this->source); })()) + 1);
            // line 184
            yield "
                    <li class=\"page-item ";
            // line 185
            yield ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 185, $this->source); })()) == 1)) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classified_index", Twig\Extension\CoreExtension::merge((isset($context["currentQuery"]) || array_key_exists("currentQuery", $context) ? $context["currentQuery"] : (function () { throw new RuntimeError('Variable "currentQuery" does not exist.', 186, $this->source); })()), ["page" => 1])), "html", null, true);
            yield "\" aria-label=\"Première\">«</a>
                    </li>
                    <li class=\"page-item ";
            // line 188
            yield ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 188, $this->source); })()) == 1)) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classified_index", Twig\Extension\CoreExtension::merge((isset($context["currentQuery"]) || array_key_exists("currentQuery", $context) ? $context["currentQuery"] : (function () { throw new RuntimeError('Variable "currentQuery" does not exist.', 189, $this->source); })()), ["page" => (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 189, $this->source); })())])), "html", null, true);
            yield "\" aria-label=\"Précédente\">‹</a>
                    </li>

                    ";
            // line 192
            $context["start"] = (((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 192, $this->source); })()) - 2) > 1)) ? (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 192, $this->source); })()) - 2)) : (1));
            // line 193
            yield "                    ";
            $context["end"] = (((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 193, $this->source); })()) + 2) < (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 193, $this->source); })()))) ? (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 193, $this->source); })()) + 2)) : ((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 193, $this->source); })())));
            // line 194
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 194, $this->source); })()), (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 194, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 195
                yield "                        <li class=\"page-item ";
                yield ((($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 195, $this->source); })()))) ? ("active") : (""));
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classified_index", Twig\Extension\CoreExtension::merge((isset($context["currentQuery"]) || array_key_exists("currentQuery", $context) ? $context["currentQuery"] : (function () { throw new RuntimeError('Variable "currentQuery" does not exist.', 196, $this->source); })()), ["page" => $context["p"]])), "html", null, true);
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
            yield ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 200, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 200, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classified_index", Twig\Extension\CoreExtension::merge((isset($context["currentQuery"]) || array_key_exists("currentQuery", $context) ? $context["currentQuery"] : (function () { throw new RuntimeError('Variable "currentQuery" does not exist.', 201, $this->source); })()), ["page" => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 201, $this->source); })())])), "html", null, true);
            yield "\" aria-label=\"Suivante\">›</a>
                    </li>
                    <li class=\"page-item ";
            // line 203
            yield ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 203, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 203, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classified_index", Twig\Extension\CoreExtension::merge((isset($context["currentQuery"]) || array_key_exists("currentQuery", $context) ? $context["currentQuery"] : (function () { throw new RuntimeError('Variable "currentQuery" does not exist.', 204, $this->source); })()), ["page" => (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 204, $this->source); })())])), "html", null, true);
            yield "\" aria-label=\"Dernière\">»</a>
                    </li>
                </ul>
            </nav>
        ";
        }
        // line 209
        yield "    </section>
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
        return array (  528 => 209,  520 => 204,  516 => 203,  511 => 201,  507 => 200,  504 => 199,  493 => 196,  488 => 195,  483 => 194,  480 => 193,  478 => 192,  472 => 189,  468 => 188,  463 => 186,  459 => 185,  456 => 184,  453 => 183,  451 => 182,  447 => 180,  444 => 179,  441 => 178,  437 => 173,  426 => 167,  424 => 166,  412 => 159,  408 => 157,  404 => 155,  398 => 153,  396 => 152,  391 => 149,  385 => 147,  382 => 146,  380 => 145,  376 => 143,  369 => 142,  363 => 141,  357 => 138,  349 => 133,  344 => 131,  340 => 129,  337 => 128,  334 => 127,  331 => 126,  328 => 125,  325 => 124,  322 => 123,  319 => 122,  317 => 121,  314 => 120,  311 => 119,  309 => 118,  306 => 117,  303 => 116,  301 => 115,  298 => 114,  295 => 113,  292 => 112,  289 => 111,  284 => 107,  279 => 106,  276 => 105,  271 => 99,  267 => 97,  259 => 95,  257 => 94,  253 => 92,  246 => 87,  237 => 80,  224 => 78,  219 => 77,  217 => 76,  207 => 69,  203 => 68,  199 => 67,  190 => 61,  181 => 55,  177 => 54,  173 => 53,  169 => 52,  160 => 46,  152 => 41,  144 => 36,  139 => 33,  136 => 29,  128 => 24,  125 => 23,  123 => 22,  108 => 10,  103 => 7,  90 => 6,  67 => 4,  56 => 1,  54 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% set navbar_is_transparent = false %}

{% block title %}Petites annonces{% endblock %}

{% block body %}
    <section class=\"container-lg px-4 py-5 pt-lg-5 mt-5\" id=\"classified-index\" aria-labelledby=\"classified-index-title\">
        <nav aria-label=\"Fil d’Ariane\" class=\"mb-3\">
            <ol class=\"breadcrumb bg-transparent px-0 mb-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\" class=\"text-decoration-none\">Accueil</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Petites annonces</li>
            </ol>
        </nav>

        <header class=\"d-flex flex-column flex-md-row align-items-md-end justify-content-between gap-3 mb-4\">
            <div>
                <h1 id=\"classified-index-title\" class=\"display-6 fw-bold mb-1\">Toutes les petites annonces</h1>
                <p class=\"text-muted mb-0\">Recherchez par mots-clés, prix, état et localisation.</p>
            </div>
        </header>

        {% if is_granted('ROLE_USER') %}
            <div class=\"mb-3 text-end\">
                <a class=\"btn btn-success\" href=\"{{ path('account_ad_new') }}\">
                    <i class=\"bi bi-plus-lg me-1\"></i> Déposer une annonce
                </a>
            </div>
        {% endif %}

        {# =======================
     Filtres
     ======================= #}
        <form method=\"get\" class=\"row g-3 align-items-end mb-4\" role=\"search\" aria-label=\"Filtres petites annonces\">
            <div class=\"col-12 col-md-4\">
                <label for=\"f-q\" class=\"form-label\">Recherche</label>
                <input id=\"f-q\" name=\"q\" type=\"search\" class=\"form-control\" placeholder=\"Titre ou description\" value=\"{{ q }}\">
            </div>

            <div class=\"col-6 col-md-2\">
                <label for=\"f-min\" class=\"form-label\">Prix min</label>
                <input id=\"f-min\" name=\"min\" type=\"number\" min=\"0\" class=\"form-control\" value=\"{{ min is not null ? min }}\">
            </div>

            <div class=\"col-6 col-md-2\">
                <label for=\"f-max\" class=\"form-label\">Prix max</label>
                <input id=\"f-max\" name=\"max\" type=\"number\" min=\"0\" class=\"form-control\" value=\"{{ max is not null ? max }}\">
            </div>

            <div class=\"col-6 col-md-2\">
                <label for=\"f-condition\" class=\"form-label\">État</label>
                <select id=\"f-condition\" name=\"condition\" class=\"form-select\">
                    <option value=\"\" {{ condition is empty ? 'selected' : '' }}>— Tous —</option>
                    <option value=\"NEW\" {{ condition == 'NEW' ? 'selected' : '' }}>Neuf</option>
                    <option value=\"USED\" {{ condition == 'USED' ? 'selected' : '' }}>Occasion</option>
                    <option value=\"REFURB\" {{ condition == 'REFURB' ? 'selected' : '' }}>Reconditionné</option>
                </select>
            </div>

            <div class=\"col-6 col-md-2\">
                <label for=\"f-location\" class=\"form-label\">Localisation</label>
                <input id=\"f-location\" name=\"location\" type=\"text\" class=\"form-control\" placeholder=\"Ville / zone\" value=\"{{ location }}\">
            </div>

            <div class=\"col-6 col-md-2\">
                <label for=\"f-sort\" class=\"form-label\">Trier par</label>
                <select id=\"f-sort\" name=\"sort\" class=\"form-select\">
                    <option value=\"recent\" {{ sort == 'recent' ? 'selected' : '' }}>Plus récents</option>
                    <option value=\"price_asc\" {{ sort == 'price_asc' ? 'selected' : '' }}>Prix: croissant</option>
                    <option value=\"price_desc\" {{ sort == 'price_desc' ? 'selected' : '' }}>Prix: décroissant</option>
                </select>
            </div>

            <div class=\"col-6 col-md-2\">
                <label for=\"f-perPage\" class=\"form-label\">Par page</label>
                <select id=\"f-perPage\" name=\"perPage\" class=\"form-select\">
                    {% set per = perPage|default(12) %}
                    {% for n in [12, 24, 36] %}
                        <option value=\"{{ n }}\" {{ per == n ? 'selected' : '' }}>{{ n }}</option>
                    {% endfor %}
                </select>
            </div>

            <div class=\"col-12 col-md-2\">
                <button class=\"btn btn-primary w-100\">Filtrer</button>
            </div>
            <div class=\"col-12 col-md-auto\">
                <a href=\"{{ path('app_classified_index') }}\" class=\"btn btn-outline-secondary\">Effacer</a>
            </div>
        </form>

        {# Résumé de résultats #}
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <div class=\"text-muted\">
                {% if total > 0 %}
                    {{ total }} résultat{{ total > 1 ? 's' : '' }}
                {% else %}
                    Aucun résultat.
                {% endif %}
            </div>
        </div>

        {# =======================
     Grid des annonces
     ======================= #}
        <div class=\"row\">
            {% for ad in ads %}
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <article class=\"card h-100 shadow-sm\">

                        {# ------- Miniature sûre (VichUploader + fallback) ------- #}
                        {% set thumb = asset('images/placeholders/classified_no_image.png') %}
                        {% if ad.photos is defined and ad.photos|length > 0 %}
                            {% set first = ad.photos|first %}
                            {% if first %}
                                {# Ajusta 'imageFile' al nombre real del campo uploadable en tu entidad Photo #}
                                {% set vichUrl = vich_uploader_asset(first, 'imageFile') ?? null %}

                                {% if vichUrl %}
                                    {% set thumb = vichUrl %}
                                {% else %}
                                    {# Fallback a propiedades comunes si no usas Vich en Photo #}
                                    {% set fileName = attribute(first, 'fileName') ?? attribute(first, 'filename') ?? attribute(first, 'name') ?? null %}
                                    {% if fileName %}
                                        {% set thumb = asset('uploads/classifieds/' ~ fileName) %}
                                    {% endif %}
                                {% endif %}
                            {% endif %}
                        {% endif %}

                        <img
                            src=\"{{ thumb | imagine_filter('ad_thumb') }}\"
                            class=\"card-img-top\"
                            alt=\"{{ ad.title }}\"
                            loading=\"lazy\"
                        >

                        <div class=\"card-body d-flex flex-column\">
                            <h3 class=\"h5 card-title mb-2\">{{ ad.title }}</h3>

                            <ul class=\"list-unstyled small text-muted mb-3\">
                                {% if ad.location %}<li><i class=\"bi bi-geo-alt me-1\"></i>{{ ad.location }}</li>{% endif %}
                                {% if ad.publishedAt %}<li><i class=\"bi bi-clock me-1\"></i>{{ ad.publishedAt|date('d/m/Y') }}</li>{% endif %}
                            </ul>

                            {% if ad.description %}
                                {% set excerpt = ad.description|striptags %}
                                <p class=\"card-text mb-3\">{{ excerpt|length > 120 ? excerpt|slice(0, 120) ~ '…' : excerpt }}</p>
                            {% endif %}

                            <div class=\"d-flex align-items-center justify-content-between mt-auto pt-2\">
              <span class=\"fw-semibold fs-5\">
                {% if ad.price is not null %}
                    {{ ad.price|number_format(0, ',', ' ') }} €
                {% else %}
                    -
                {% endif %}
              </span>

                                <a class=\"btn btn-outline-primary btn-sm\" href=\"{{ path('app_classified_show', { id: ad.id }) }}\">
                                    Voir
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            {% else %}
                <div class=\"col-12 text-center\">
                    <div class=\"alert alert-light border\">
                        Aucun résultat ne correspond à vos filtres. Essayez d’élargir la recherche.
                    </div>
                </div>
            {% endfor %}
        </div>

        {# =======================
     Pagination
     ======================= #}
        {% if pages > 1 %}
            {% set currentQuery = app.request.query.all %}
            <nav aria-label=\"Pagination des annonces\">
                <ul class=\"pagination justify-content-center\">
                    {% set prev = page - 1 %}
                    {% set next = page + 1 %}

                    <li class=\"page-item {{ page == 1 ? 'disabled' : '' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_classified_index', currentQuery|merge({'page': 1})) }}\" aria-label=\"Première\">«</a>
                    </li>
                    <li class=\"page-item {{ page == 1 ? 'disabled' : '' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_classified_index', currentQuery|merge({'page': prev})) }}\" aria-label=\"Précédente\">‹</a>
                    </li>

                    {% set start = page - 2 > 1 ? page - 2 : 1 %}
                    {% set end   = page + 2 < pages ? page + 2 : pages %}
                    {% for p in start..end %}
                        <li class=\"page-item {{ p == page ? 'active' : '' }}\">
                            <a class=\"page-link\" href=\"{{ path('app_classified_index', currentQuery|merge({'page': p})) }}\">{{ p }}</a>
                        </li>
                    {% endfor %}

                    <li class=\"page-item {{ page == pages ? 'disabled' : '' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_classified_index', currentQuery|merge({'page': next})) }}\" aria-label=\"Suivante\">›</a>
                    </li>
                    <li class=\"page-item {{ page == pages ? 'disabled' : '' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_classified_index', currentQuery|merge({'page': pages})) }}\" aria-label=\"Dernière\">»</a>
                    </li>
                </ul>
            </nav>
        {% endif %}
    </section>
{% endblock %}
", "classified_ad/index.html.twig", "C:\\wamp64\\www\\appac\\templates\\classified_ad\\index.html.twig");
    }
}
