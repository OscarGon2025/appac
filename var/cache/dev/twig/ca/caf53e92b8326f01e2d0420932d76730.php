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
class __TwigTemplate_8f2dc50ce11d6461a575b16c9dacc0e1 extends Template
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
        // line 41
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 41, $this->source); })()), "cover", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "                        <figure class=\"mb-4\">
                            <img class=\"img-fluid rounded shadow-sm w-100\"
                                 src=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/covers/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 44, $this->source); })()), "cover", [], "any", false, false, false, 44))), "html", null, true);
            yield "\"
                                 alt=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 45, $this->source); })()), "title", [], "any", false, false, false, 45), "html", null, true);
            yield "\" itemprop=\"image\" loading=\"lazy\">
                        </figure>
                    ";
        }
        // line 48
        yield "
                    <div class=\"content fs-5\" itemprop=\"articleBody\">
                        ";
        // line 50
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 50, $this->source); })()), "content", [], "any", false, false, false, 50);
        yield "
                    </div>

                    ";
        // line 54
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "attachments", [], "any", true, true, false, 54) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 54, $this->source); })()), "attachments", [], "any", false, false, false, 54)) > 0))) {
            // line 55
            yield "                        <div class=\"mt-4\">
                            <h2 class=\"h5 mb-3\"><i class=\"bi bi-paperclip me-2\"></i>Pièces jointes</h2>
                            <ul class=\"list-group\">
                                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 58, $this->source); })()), "attachments", [], "any", false, false, false, 58));
            foreach ($context['_seq'] as $context["_key"] => $context["att"]) {
                // line 59
                yield "                                    ";
                $context["mime"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["att"], "mimeType", [], "any", true, true, false, 59) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["att"], "mimeType", [], "any", false, false, false, 59)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["att"], "mimeType", [], "any", false, false, false, 59)) : (""));
                // line 60
                yield "                                    ";
                // line 61
                yield "                                    ";
                $context["icon"] = "bi-file-earmark";
                // line 62
                yield "                                    ";
                if ((is_string($_v0 = (isset($context["mime"]) || array_key_exists("mime", $context) ? $context["mime"] : (function () { throw new RuntimeError('Variable "mime" does not exist.', 62, $this->source); })())) && is_string($_v1 = "image/") && str_starts_with($_v0, $_v1))) {
                    // line 63
                    yield "                                        ";
                    $context["icon"] = "bi-file-image";
                    // line 64
                    yield "                                    ";
                } elseif ((is_string($_v2 = (isset($context["mime"]) || array_key_exists("mime", $context) ? $context["mime"] : (function () { throw new RuntimeError('Variable "mime" does not exist.', 64, $this->source); })())) && is_string($_v3 = "application/pdf") && str_starts_with($_v2, $_v3))) {
                    // line 65
                    yield "                                        ";
                    $context["icon"] = "bi-file-earmark-pdf";
                    // line 66
                    yield "                                    ";
                } elseif ((is_string($_v4 = (isset($context["mime"]) || array_key_exists("mime", $context) ? $context["mime"] : (function () { throw new RuntimeError('Variable "mime" does not exist.', 66, $this->source); })())) && is_string($_v5 = "video/") && str_starts_with($_v4, $_v5))) {
                    // line 67
                    yield "                                        ";
                    $context["icon"] = "bi-file-play";
                    // line 68
                    yield "                                    ";
                } elseif ((is_string($_v6 = (isset($context["mime"]) || array_key_exists("mime", $context) ? $context["mime"] : (function () { throw new RuntimeError('Variable "mime" does not exist.', 68, $this->source); })())) && is_string($_v7 = "audio/") && str_starts_with($_v6, $_v7))) {
                    // line 69
                    yield "                                        ";
                    $context["icon"] = "bi-file-music";
                    // line 70
                    yield "                                    ";
                } elseif (((is_string($_v8 = (isset($context["mime"]) || array_key_exists("mime", $context) ? $context["mime"] : (function () { throw new RuntimeError('Variable "mime" does not exist.', 70, $this->source); })())) && is_string($_v9 = "application/vnd.ms-excel") && str_starts_with($_v8, $_v9)) || CoreExtension::inFilter("spreadsheet", (isset($context["mime"]) || array_key_exists("mime", $context) ? $context["mime"] : (function () { throw new RuntimeError('Variable "mime" does not exist.', 70, $this->source); })())))) {
                    // line 71
                    yield "                                        ";
                    $context["icon"] = "bi-file-earmark-excel";
                    // line 72
                    yield "                                    ";
                } elseif (CoreExtension::inFilter("word", (isset($context["mime"]) || array_key_exists("mime", $context) ? $context["mime"] : (function () { throw new RuntimeError('Variable "mime" does not exist.', 72, $this->source); })()))) {
                    // line 73
                    yield "                                        ";
                    $context["icon"] = "bi-file-earmark-word";
                    // line 74
                    yield "                                    ";
                }
                // line 75
                yield "
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center gap-3\">
                                        <div class=\"d-flex align-items-center gap-2 text-truncate\">
                                            <i class=\"bi ";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 78, $this->source); })()), "html", null, true);
                yield " fs-5 text-secondary\"></i>
                                            <span class=\"text-truncate\">";
                // line 79
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["att"], "title", [], "any", true, true, false, 79) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["att"], "title", [], "any", false, false, false, 79)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["att"], "title", [], "any", false, false, false, 79), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["att"], "originalName", [], "any", false, false, false, 79), "html", null, true)));
                yield "</span>
                                        </div>
                                        <div class=\"d-flex align-items-center gap-2\">
                    <span class=\"text-muted small\">
                      ";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["att"], "size", [], "any", false, false, false, 83) / 1024), 0, ",", " "), "html", null, true);
                yield " Ko
                    </span>
                                            ";
                // line 86
                yield "                                            <a class=\"btn btn-sm btn-outline-secondary\"
                                               href=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attachments/" . CoreExtension::getAttribute($this->env, $this->source, $context["att"], "fileName", [], "any", false, false, false, 87))), "html", null, true);
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
            // line 94
            yield "                            </ul>
                        </div>
                    ";
        }
        // line 97
        yield "
                    ";
        // line 99
        yield "                    ";
        if ((array_key_exists("prev", $context) || array_key_exists("next", $context))) {
            // line 100
            yield "                        <hr class=\"my-4\">
                        <nav class=\"d-flex justify-content-between\">
                            <div>
                                ";
            // line 103
            if ((array_key_exists("prev", $context) && (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 103, $this->source); })()))) {
                // line 104
                yield "                                    <a class=\"btn btn-outline-dark\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 104, $this->source); })()), "slug", [], "any", false, false, false, 104)]), "html", null, true);
                yield "\">
                                        <i class=\"bi bi-arrow-left me-1\"></i> ";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 105, $this->source); })()), "title", [], "any", false, false, false, 105), "html", null, true);
                yield "
                                    </a>
                                ";
            }
            // line 108
            yield "                            </div>
                            <div>
                                ";
            // line 110
            if ((array_key_exists("next", $context) && (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 110, $this->source); })()))) {
                // line 111
                yield "                                    <a class=\"btn btn-outline-dark\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 111, $this->source); })()), "slug", [], "any", false, false, false, 111)]), "html", null, true);
                yield "\">
                                        ";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 112, $this->source); })()), "title", [], "any", false, false, false, 112), "html", null, true);
                yield " <i class=\"bi bi-arrow-right ms-1\"></i>
                                    </a>
                                ";
            }
            // line 115
            yield "                            </div>
                        </nav>
                    ";
        }
        // line 118
        yield "                </article>
            </div>

            <aside class=\"col-lg-4\">
                <div class=\"position-sticky\" style=\"top: 6rem;\">
                    <div class=\"card shadow-sm mb-3\">
                        <div class=\"card-body\">
                            <div class=\"d-grid gap-2\">
                                <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_index");
        yield "\" class=\"btn btn-outline-dark\">
                                    <i class=\"bi bi-chevron-left me-1\"></i>Retour aux actus
                                </a>
                                <button class=\"btn btn-dark\" id=\"copyLinkBtn\" type=\"button\">
                                    <i class=\"bi bi-link-45deg me-1\"></i>Copier le lien
                                </button>
                                <a class=\"btn btn-outline-secondary\"
                                   href=\"mailto:?subject=";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 133, $this->source); })()), "title", [], "any", false, false, false, 133)), "html", null, true);
        yield "&body=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "request", [], "any", false, false, false, 133), "uri", [], "any", false, false, false, 133)), "html", null, true);
        yield "\">
                                    <i class=\"bi bi-envelope me-1\"></i>Partager par e-mail
                                </a>
                            </div>
                        </div>
                    </div>

                    ";
        // line 140
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", true, true, false, 140) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 140, $this->source); })()), "author", [], "any", false, false, false, 140))) {
            // line 141
            yield "                        <div class=\"card shadow-sm\">
                            <div class=\"card-body\">
                                <h2 class=\"h6 text-uppercase text-muted mb-3\">À propos de l’auteur</h2>
                                <div class=\"d-flex align-items-center gap-3\">
                                    <i class=\"bi bi-person-circle fs-1 text-secondary\"></i>
                                    <div>
                                        <div class=\"fw-semibold\">
                                            ";
            // line 148
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, true, false, 148), "firstName", [], "any", true, true, false, 148) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 148, $this->source); })()), "author", [], "any", false, false, false, 148), "firstName", [], "any", false, false, false, 148)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 148, $this->source); })()), "author", [], "any", false, false, false, 148), "firstName", [], "any", false, false, false, 148), "html", null, true)) : (""));
            yield " ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, true, false, 148), "lastName", [], "any", true, true, false, 148) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 148, $this->source); })()), "author", [], "any", false, false, false, 148), "lastName", [], "any", false, false, false, 148)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 148, $this->source); })()), "author", [], "any", false, false, false, 148), "lastName", [], "any", false, false, false, 148), "html", null, true)) : (""));
            yield "
                                        </div>
                                        ";
            // line 150
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 150, $this->source); })()), "publishedAt", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 151
                yield "                                            <div class=\"small text-muted\">
                                                Publié le ";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 152, $this->source); })()), "publishedAt", [], "any", false, false, false, 152), "d/m/Y"), "html", null, true);
                yield "
                                            </div>
                                        ";
            }
            // line 155
            yield "                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 160
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
        return array (  411 => 160,  404 => 155,  398 => 152,  395 => 151,  393 => 150,  386 => 148,  377 => 141,  375 => 140,  363 => 133,  353 => 126,  343 => 118,  338 => 115,  332 => 112,  327 => 111,  325 => 110,  321 => 108,  315 => 105,  310 => 104,  308 => 103,  303 => 100,  300 => 99,  297 => 97,  292 => 94,  279 => 87,  276 => 86,  271 => 83,  264 => 79,  260 => 78,  255 => 75,  252 => 74,  249 => 73,  246 => 72,  243 => 71,  240 => 70,  237 => 69,  234 => 68,  231 => 67,  228 => 66,  225 => 65,  222 => 64,  219 => 63,  216 => 62,  213 => 61,  211 => 60,  208 => 59,  204 => 58,  199 => 55,  196 => 54,  190 => 50,  186 => 48,  180 => 45,  176 => 44,  172 => 42,  170 => 41,  165 => 38,  159 => 34,  156 => 33,  148 => 30,  144 => 28,  141 => 27,  135 => 24,  129 => 22,  127 => 21,  122 => 19,  111 => 11,  106 => 9,  100 => 5,  87 => 4,  64 => 2,  41 => 1,);
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

                    {% if article.cover %}
                        <figure class=\"mb-4\">
                            <img class=\"img-fluid rounded shadow-sm w-100\"
                                 src=\"{{ asset('uploads/covers/' ~ article.cover) }}\"
                                 alt=\"{{ article.title }}\" itemprop=\"image\" loading=\"lazy\">
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
