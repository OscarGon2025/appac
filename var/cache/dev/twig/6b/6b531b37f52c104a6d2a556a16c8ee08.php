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

/* actus/show.html.twig */
class __TwigTemplate_fe17bf45ae493885626a5ae40dfc6211 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actus/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actus/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2), "html", null, true);
        
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
        yield "    <section class=\"container-lg px-4 py-5 pt-lg-5 mt-5\">
        <nav aria-label=\"Fil d'Ariane\" class=\"mb-3\">
            <ol class=\"breadcrumb bg-transparent px-0 py-5 border-bottom\">
                <li class=\"breadcrumb-item\">
                    <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_index");
        yield "\" class=\"text-decoration-none\">Actus</a>
                </li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        yield "</li>
            </ol>
        </nav>

        <div class=\"row g-4\">
            <div class=\"col-lg-8\">
                <article itemscope itemtype=\"https://schema.org/Article\">
                    <header class=\"mb-3\">
                        <h1 class=\"display-6 fw-bold mb-2\" itemprop=\"headline\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), "html", null, true);
        yield "</h1>
                        <div class=\"d-flex flex-wrap gap-2 align-items-center text-muted small\">
                            ";
        // line 21
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 21, $this->source); })()), "publishedAt", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                                <span title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 22, $this->source); })()), "publishedAt", [], "any", false, false, false, 22), "Y-m-d H:i"), "html", null, true);
            yield "\">
                <i class=\"bi bi-calendar-event me-1\"></i>
                Publié le ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 24, $this->source); })()), "publishedAt", [], "any", false, false, false, 24), "d/m/Y \\à H:i"), "html", null, true);
            yield "
              </span>
                            ";
        }
        // line 27
        yield "                            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", true, true, false, 27) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 27, $this->source); })()), "author", [], "any", false, false, false, 27))) {
            // line 28
            yield "                                <span class=\"text-body-secondary\">
                • <i class=\"bi bi-person-circle ms-1 me-1\"></i>
                ";
            // line 30
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, true, false, 30), "firstName", [], "any", true, true, false, 30) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "author", [], "any", false, false, false, 30), "firstName", [], "any", false, false, false, 30)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "author", [], "any", false, false, false, 30), "firstName", [], "any", false, false, false, 30), "html", null, true)) : (""));
            yield " ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, true, false, 30), "lastName", [], "any", true, true, false, 30) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "author", [], "any", false, false, false, 30), "lastName", [], "any", false, false, false, 30)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "author", [], "any", false, false, false, 30), "lastName", [], "any", false, false, false, 30), "html", null, true)) : (""));
            yield "
              </span>
                            ";
        }
        // line 33
        yield "                            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 33, $this->source); })()), "isMembersOnly", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "                                <span class=\"badge rounded-pill text-bg-secondary\">
                <i class=\"bi bi-lock me-1\"></i> Réservé aux membres
              </span>
                            ";
        }
        // line 38
        yield "                        </div>
                    </header>

";
        // line 48
        yield "

";
        // line 51
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 51, $this->source); })()), "coverImage", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "                        <figure class=\"mb-4\">
                            <img
                                class=\"img-fluid rounded shadow-sm w-100\"
                                src=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/archives/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 55, $this->source); })()), "coverImage", [], "any", false, false, false, 55), "fileName", [], "any", false, false, false, 55))), "html", null, true);
            yield "\"
                                alt=\"";
            // line 56
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 56, $this->source); })()), "coverImage", [], "any", false, false, false, 56), "title", [], "any", false, false, false, 56)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 56, $this->source); })()), "coverImage", [], "any", false, false, false, 56), "title", [], "any", false, false, false, 56), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 56, $this->source); })()), "title", [], "any", false, false, false, 56), "html", null, true)));
            yield "\"
                                itemprop=\"image\"
                                loading=\"lazy\"
                                style=\"max-height: 500px; object-fit: cover;\"
                            >
                            ";
            // line 61
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 61, $this->source); })()), "coverImage", [], "any", false, false, false, 61), "title", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 62
                yield "                                <figcaption class=\"text-muted small mt-2 text-center\">
                                    ";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 63, $this->source); })()), "coverImage", [], "any", false, false, false, 63), "title", [], "any", false, false, false, 63), "html", null, true);
                yield "
                                </figcaption>
                            ";
            }
            // line 66
            yield "                        </figure>
                    ";
        }
        // line 68
        yield "

                    <div class=\"content fs-5\" itemprop=\"articleBody\">
                        ";
        // line 71
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 71, $this->source); })()), "content", [], "any", false, false, false, 71);
        yield "
                    </div>

                    ";
        // line 75
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "attachments", [], "any", true, true, false, 75) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 75, $this->source); })()), "attachments", [], "any", false, false, false, 75)) > 0))) {
            // line 76
            yield "                        <div class=\"mt-4\">
                            <h2 class=\"h5 mb-3\"><i class=\"bi bi-paperclip me-2\"></i>Pièces jointes</h2>
                            <ul class=\"list-group\">
                                ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 79, $this->source); })()), "attachments", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["att"]) {
                // line 80
                yield "                                    ";
                $context["mime"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["att"], "mimeType", [], "any", true, true, false, 80) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["att"], "mimeType", [], "any", false, false, false, 80)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["att"], "mimeType", [], "any", false, false, false, 80)) : (""));
                // line 81
                yield "                                    ";
                // line 82
                yield "                                    ";
                $context["icon"] = "bi-file-earmark";
                // line 83
                yield "                                    ";
                if ((is_string($_v0 = (isset($context["mime"]) || array_key_exists("mime", $context) ? $context["mime"] : (function () { throw new RuntimeError('Variable "mime" does not exist.', 83, $this->source); })())) && is_string($_v1 = "image/") && str_starts_with($_v0, $_v1))) {
                    // line 84
                    yield "                                        ";
                    $context["icon"] = "bi-file-image";
                    // line 85
                    yield "                                    ";
                } elseif ((is_string($_v2 = (isset($context["mime"]) || array_key_exists("mime", $context) ? $context["mime"] : (function () { throw new RuntimeError('Variable "mime" does not exist.', 85, $this->source); })())) && is_string($_v3 = "application/pdf") && str_starts_with($_v2, $_v3))) {
                    // line 86
                    yield "                                        ";
                    $context["icon"] = "bi-file-earmark-pdf";
                    // line 87
                    yield "                                    ";
                } elseif ((is_string($_v4 = (isset($context["mime"]) || array_key_exists("mime", $context) ? $context["mime"] : (function () { throw new RuntimeError('Variable "mime" does not exist.', 87, $this->source); })())) && is_string($_v5 = "video/") && str_starts_with($_v4, $_v5))) {
                    // line 88
                    yield "                                        ";
                    $context["icon"] = "bi-file-play";
                    // line 89
                    yield "                                    ";
                } elseif ((is_string($_v6 = (isset($context["mime"]) || array_key_exists("mime", $context) ? $context["mime"] : (function () { throw new RuntimeError('Variable "mime" does not exist.', 89, $this->source); })())) && is_string($_v7 = "audio/") && str_starts_with($_v6, $_v7))) {
                    // line 90
                    yield "                                        ";
                    $context["icon"] = "bi-file-music";
                    // line 91
                    yield "                                    ";
                } elseif (((is_string($_v8 = (isset($context["mime"]) || array_key_exists("mime", $context) ? $context["mime"] : (function () { throw new RuntimeError('Variable "mime" does not exist.', 91, $this->source); })())) && is_string($_v9 = "application/vnd.ms-excel") && str_starts_with($_v8, $_v9)) || CoreExtension::inFilter("spreadsheet", (isset($context["mime"]) || array_key_exists("mime", $context) ? $context["mime"] : (function () { throw new RuntimeError('Variable "mime" does not exist.', 91, $this->source); })())))) {
                    // line 92
                    yield "                                        ";
                    $context["icon"] = "bi-file-earmark-excel";
                    // line 93
                    yield "                                    ";
                } elseif (CoreExtension::inFilter("word", (isset($context["mime"]) || array_key_exists("mime", $context) ? $context["mime"] : (function () { throw new RuntimeError('Variable "mime" does not exist.', 93, $this->source); })()))) {
                    // line 94
                    yield "                                        ";
                    $context["icon"] = "bi-file-earmark-word";
                    // line 95
                    yield "                                    ";
                }
                // line 96
                yield "
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center gap-3\">
                                        <div class=\"d-flex align-items-center gap-2 text-truncate\">
                                            <i class=\"bi ";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 99, $this->source); })()), "html", null, true);
                yield " fs-5 text-secondary\"></i>
                                            <span class=\"text-truncate\">";
                // line 100
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["att"], "title", [], "any", true, true, false, 100) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["att"], "title", [], "any", false, false, false, 100)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["att"], "title", [], "any", false, false, false, 100), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["att"], "originalName", [], "any", false, false, false, 100), "html", null, true)));
                yield "</span>
                                        </div>
                                        <div class=\"d-flex align-items-center gap-2\">
                    <span class=\"text-muted small\">
                      ";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["att"], "size", [], "any", false, false, false, 104) / 1024), 0, ",", " "), "html", null, true);
                yield " Ko
                    </span>
                                            ";
                // line 107
                yield "                                            <a class=\"btn btn-sm btn-outline-secondary\"
                                               href=\"";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attachments/" . CoreExtension::getAttribute($this->env, $this->source, $context["att"], "fileName", [], "any", false, false, false, 108))), "html", null, true);
                yield "\"
                                               target=\"_blank\" rel=\"noopener\">
                                                <i class=\"bi bi-download me-1\"></i>Télécharger
                                            </a>
                                        </div>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['att'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            yield "                            </ul>
                        </div>
                    ";
        }
        // line 118
        yield "
                    ";
        // line 120
        yield "                    ";
        if ((array_key_exists("prev", $context) || array_key_exists("next", $context))) {
            // line 121
            yield "                        <hr class=\"my-4\">
                        <nav class=\"d-flex justify-content-between\">
                            <div>
                                ";
            // line 124
            if ((array_key_exists("prev", $context) && (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 124, $this->source); })()))) {
                // line 125
                yield "                                    <a class=\"btn btn-outline-dark\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 125, $this->source); })()), "slug", [], "any", false, false, false, 125)]), "html", null, true);
                yield "\">
                                        <i class=\"bi bi-arrow-left me-1\"></i> ";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 126, $this->source); })()), "title", [], "any", false, false, false, 126), "html", null, true);
                yield "
                                    </a>
                                ";
            }
            // line 129
            yield "                            </div>
                            <div>
                                ";
            // line 131
            if ((array_key_exists("next", $context) && (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 131, $this->source); })()))) {
                // line 132
                yield "                                    <a class=\"btn btn-outline-dark\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 132, $this->source); })()), "slug", [], "any", false, false, false, 132)]), "html", null, true);
                yield "\">
                                        ";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 133, $this->source); })()), "title", [], "any", false, false, false, 133), "html", null, true);
                yield " <i class=\"bi bi-arrow-right ms-1\"></i>
                                    </a>
                                ";
            }
            // line 136
            yield "                            </div>
                        </nav>
                    ";
        }
        // line 139
        yield "                </article>
            </div>

            <aside class=\"col-lg-4\">
                <div class=\"position-sticky\" style=\"top: 6rem;\">
                    <div class=\"card shadow-sm mb-3\">
                        <div class=\"card-body\">
                            <div class=\"d-grid gap-2\">
                                <a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_index");
        yield "\" class=\"btn btn-outline-dark\">
                                    <i class=\"bi bi-chevron-left me-1\"></i>Retour aux actus
                                </a>
                                <button class=\"btn btn-dark\" id=\"copyLinkBtn\" type=\"button\">
                                    <i class=\"bi bi-link-45deg me-1\"></i>Copier le lien
                                </button>
                                <a class=\"btn btn-outline-secondary\"
                                   href=\"mailto:?subject=";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 154, $this->source); })()), "title", [], "any", false, false, false, 154)), "html", null, true);
        yield "&body=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "request", [], "any", false, false, false, 154), "uri", [], "any", false, false, false, 154)), "html", null, true);
        yield "\">
                                    <i class=\"bi bi-envelope me-1\"></i>Partager par e-mail
                                </a>
                            </div>
                        </div>
                    </div>

                    ";
        // line 161
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", true, true, false, 161) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 161, $this->source); })()), "author", [], "any", false, false, false, 161))) {
            // line 162
            yield "                        <div class=\"card shadow-sm\">
                            <div class=\"card-body\">
                                <h2 class=\"h6 text-uppercase text-muted mb-3\">À propos de l’auteur</h2>
                                <div class=\"d-flex align-items-center gap-3\">
                                    <i class=\"bi bi-person-circle fs-1 text-secondary\"></i>
                                    <div>
                                        <div class=\"fw-semibold\">
                                            ";
            // line 169
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, true, false, 169), "firstName", [], "any", true, true, false, 169) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 169, $this->source); })()), "author", [], "any", false, false, false, 169), "firstName", [], "any", false, false, false, 169)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 169, $this->source); })()), "author", [], "any", false, false, false, 169), "firstName", [], "any", false, false, false, 169), "html", null, true)) : (""));
            yield " ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, true, false, 169), "lastName", [], "any", true, true, false, 169) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 169, $this->source); })()), "author", [], "any", false, false, false, 169), "lastName", [], "any", false, false, false, 169)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 169, $this->source); })()), "author", [], "any", false, false, false, 169), "lastName", [], "any", false, false, false, 169), "html", null, true)) : (""));
            yield "
                                        </div>
                                        ";
            // line 171
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 171, $this->source); })()), "publishedAt", [], "any", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 172
                yield "                                            <div class=\"small text-muted\">
                                                Publié le ";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 173, $this->source); })()), "publishedAt", [], "any", false, false, false, 173), "d/m/Y"), "html", null, true);
                yield "
                                            </div>
                                        ";
            }
            // line 176
            yield "                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 181
        yield "                </div>
            </aside>
        </div>
    </section>

    <script>
        (function () {
            const btn = document.getElementById('copyLinkBtn');
            if (!btn) return;
            btn.addEventListener('click', async () => {
                try {
                    await navigator.clipboard.writeText(window.location.href);
                    btn.classList.replace('btn-dark','btn-success');
                    btn.innerHTML = '<i class=\"bi bi-check2 me-1\"></i>Lien copié';
                    setTimeout(() => {
                        btn.classList.replace('btn-success','btn-dark');
                        btn.innerHTML = '<i class=\"bi bi-link-45deg me-1\"></i>Copier le lien';
                    }, 2500);
                } catch (e) {}
            });
        })();
    </script>
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
        return "actus/show.html.twig";
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
        return array (  435 => 181,  428 => 176,  422 => 173,  419 => 172,  417 => 171,  410 => 169,  401 => 162,  399 => 161,  387 => 154,  377 => 147,  367 => 139,  362 => 136,  356 => 133,  351 => 132,  349 => 131,  345 => 129,  339 => 126,  334 => 125,  332 => 124,  327 => 121,  324 => 120,  321 => 118,  316 => 115,  303 => 108,  300 => 107,  295 => 104,  288 => 100,  284 => 99,  279 => 96,  276 => 95,  273 => 94,  270 => 93,  267 => 92,  264 => 91,  261 => 90,  258 => 89,  255 => 88,  252 => 87,  249 => 86,  246 => 85,  243 => 84,  240 => 83,  237 => 82,  235 => 81,  232 => 80,  228 => 79,  223 => 76,  220 => 75,  214 => 71,  209 => 68,  205 => 66,  199 => 63,  196 => 62,  194 => 61,  186 => 56,  182 => 55,  177 => 52,  174 => 51,  170 => 48,  165 => 38,  159 => 34,  156 => 33,  148 => 30,  144 => 28,  141 => 27,  135 => 24,  129 => 22,  127 => 21,  122 => 19,  111 => 11,  106 => 9,  100 => 5,  87 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ article.title }}{% endblock %}

{% block body %}
    <section class=\"container-lg px-4 py-5 pt-lg-5 mt-5\">
        <nav aria-label=\"Fil d'Ariane\" class=\"mb-3\">
            <ol class=\"breadcrumb bg-transparent px-0 py-5 border-bottom\">
                <li class=\"breadcrumb-item\">
                    <a href=\"{{ path('actus_index') }}\" class=\"text-decoration-none\">Actus</a>
                </li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ article.title }}</li>
            </ol>
        </nav>

        <div class=\"row g-4\">
            <div class=\"col-lg-8\">
                <article itemscope itemtype=\"https://schema.org/Article\">
                    <header class=\"mb-3\">
                        <h1 class=\"display-6 fw-bold mb-2\" itemprop=\"headline\">{{ article.title }}</h1>
                        <div class=\"d-flex flex-wrap gap-2 align-items-center text-muted small\">
                            {% if article.publishedAt %}
                                <span title=\"{{ article.publishedAt|date('Y-m-d H:i') }}\">
                <i class=\"bi bi-calendar-event me-1\"></i>
                Publié le {{ article.publishedAt|date('d/m/Y \\\\à H:i') }}
              </span>
                            {% endif %}
                            {% if article.author is defined and article.author %}
                                <span class=\"text-body-secondary\">
                • <i class=\"bi bi-person-circle ms-1 me-1\"></i>
                {{ article.author.firstName ?? '' }} {{ article.author.lastName ?? '' }}
              </span>
                            {% endif %}
                            {% if article.isMembersOnly %}
                                <span class=\"badge rounded-pill text-bg-secondary\">
                <i class=\"bi bi-lock me-1\"></i> Réservé aux membres
              </span>
                            {% endif %}
                        </div>
                    </header>

{#                    {% if article.cover %}#}
{#                        <figure class=\"mb-4\">#}
{#                            <img class=\"img-fluid rounded shadow-sm w-100\"#}
{#                                 src=\"{{ asset('uploads/covers/' ~ article.cover) }}\"#}
{#                                 alt=\"{{ article.title }}\" itemprop=\"image\" loading=\"lazy\">#}
{#                        </figure>#}
{#                    {% endif %}#}


{#                    Modifs pour ajouter les images de couverture venant des archives#}
                    {% if article.coverImage %}
                        <figure class=\"mb-4\">
                            <img
                                class=\"img-fluid rounded shadow-sm w-100\"
                                src=\"{{ asset('uploads/archives/' ~ article.coverImage.fileName) }}\"
                                alt=\"{{ article.coverImage.title ?: article.title }}\"
                                itemprop=\"image\"
                                loading=\"lazy\"
                                style=\"max-height: 500px; object-fit: cover;\"
                            >
                            {% if article.coverImage.title %}
                                <figcaption class=\"text-muted small mt-2 text-center\">
                                    {{ article.coverImage.title }}
                                </figcaption>
                            {% endif %}
                        </figure>
                    {% endif %}


                    <div class=\"content fs-5\" itemprop=\"articleBody\">
                        {{ article.content|raw }}
                    </div>

                    {# --- PIÈCES JOINTES --- #}
                    {% if article.attachments is defined and article.attachments|length > 0 %}
                        <div class=\"mt-4\">
                            <h2 class=\"h5 mb-3\"><i class=\"bi bi-paperclip me-2\"></i>Pièces jointes</h2>
                            <ul class=\"list-group\">
                                {% for att in article.attachments %}
                                    {% set mime = att.mimeType ?? '' %}
                                    {# Mappage d’icônes : utiliser 'in' pour sous-chaînes #}
                                    {% set icon = 'bi-file-earmark' %}
                                    {% if mime starts with 'image/' %}
                                        {% set icon = 'bi-file-image' %}
                                    {% elseif mime starts with 'application/pdf' %}
                                        {% set icon = 'bi-file-earmark-pdf' %}
                                    {% elseif mime starts with 'video/' %}
                                        {% set icon = 'bi-file-play' %}
                                    {% elseif mime starts with 'audio/' %}
                                        {% set icon = 'bi-file-music' %}
                                    {% elseif mime starts with 'application/vnd.ms-excel' or 'spreadsheet' in mime %}
                                        {% set icon = 'bi-file-earmark-excel' %}
                                    {% elseif 'word' in mime %}
                                        {% set icon = 'bi-file-earmark-word' %}
                                    {% endif %}

                                    <li class=\"list-group-item d-flex justify-content-between align-items-center gap-3\">
                                        <div class=\"d-flex align-items-center gap-2 text-truncate\">
                                            <i class=\"bi {{ icon }} fs-5 text-secondary\"></i>
                                            <span class=\"text-truncate\">{{ att.title ?? att.originalName }}</span>
                                        </div>
                                        <div class=\"d-flex align-items-center gap-2\">
                    <span class=\"text-muted small\">
                      {{ (att.size/1024)|number_format(0, ',', ' ') }} Ko
                    </span>
                                            {# TODO : remplacer par ta route de téléchargement sécurisé quand tu l’auras #}
                                            <a class=\"btn btn-sm btn-outline-secondary\"
                                               href=\"{{ asset('uploads/attachments/' ~ att.fileName) }}\"
                                               target=\"_blank\" rel=\"noopener\">
                                                <i class=\"bi bi-download me-1\"></i>Télécharger
                                            </a>
                                        </div>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                    {% endif %}

                    {# Navigation Précédent/Suivant optionnelle #}
                    {% if prev is defined or next is defined %}
                        <hr class=\"my-4\">
                        <nav class=\"d-flex justify-content-between\">
                            <div>
                                {% if prev is defined and prev %}
                                    <a class=\"btn btn-outline-dark\" href=\"{{ path('actus_show', { slug: prev.slug }) }}\">
                                        <i class=\"bi bi-arrow-left me-1\"></i> {{ prev.title }}
                                    </a>
                                {% endif %}
                            </div>
                            <div>
                                {% if next is defined and next %}
                                    <a class=\"btn btn-outline-dark\" href=\"{{ path('actus_show', { slug: next.slug }) }}\">
                                        {{ next.title }} <i class=\"bi bi-arrow-right ms-1\"></i>
                                    </a>
                                {% endif %}
                            </div>
                        </nav>
                    {% endif %}
                </article>
            </div>

            <aside class=\"col-lg-4\">
                <div class=\"position-sticky\" style=\"top: 6rem;\">
                    <div class=\"card shadow-sm mb-3\">
                        <div class=\"card-body\">
                            <div class=\"d-grid gap-2\">
                                <a href=\"{{ path('actus_index') }}\" class=\"btn btn-outline-dark\">
                                    <i class=\"bi bi-chevron-left me-1\"></i>Retour aux actus
                                </a>
                                <button class=\"btn btn-dark\" id=\"copyLinkBtn\" type=\"button\">
                                    <i class=\"bi bi-link-45deg me-1\"></i>Copier le lien
                                </button>
                                <a class=\"btn btn-outline-secondary\"
                                   href=\"mailto:?subject={{ article.title|url_encode }}&body={{ app.request.uri|url_encode }}\">
                                    <i class=\"bi bi-envelope me-1\"></i>Partager par e-mail
                                </a>
                            </div>
                        </div>
                    </div>

                    {% if article.author is defined and article.author %}
                        <div class=\"card shadow-sm\">
                            <div class=\"card-body\">
                                <h2 class=\"h6 text-uppercase text-muted mb-3\">À propos de l’auteur</h2>
                                <div class=\"d-flex align-items-center gap-3\">
                                    <i class=\"bi bi-person-circle fs-1 text-secondary\"></i>
                                    <div>
                                        <div class=\"fw-semibold\">
                                            {{ article.author.firstName ?? '' }} {{ article.author.lastName ?? '' }}
                                        </div>
                                        {% if article.publishedAt %}
                                            <div class=\"small text-muted\">
                                                Publié le {{ article.publishedAt|date('d/m/Y') }}
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endif %}
                </div>
            </aside>
        </div>
    </section>

    <script>
        (function () {
            const btn = document.getElementById('copyLinkBtn');
            if (!btn) return;
            btn.addEventListener('click', async () => {
                try {
                    await navigator.clipboard.writeText(window.location.href);
                    btn.classList.replace('btn-dark','btn-success');
                    btn.innerHTML = '<i class=\"bi bi-check2 me-1\"></i>Lien copié';
                    setTimeout(() => {
                        btn.classList.replace('btn-success','btn-dark');
                        btn.innerHTML = '<i class=\"bi bi-link-45deg me-1\"></i>Copier le lien';
                    }, 2500);
                } catch (e) {}
            });
        })();
    </script>
{% endblock %}
", "actus/show.html.twig", "C:\\wamp64\\www\\appac\\templates\\actus\\show.html.twig");
    }
}
