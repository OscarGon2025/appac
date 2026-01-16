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
class __TwigTemplate_f675869da38a9c973c65ddb3d4d07012 extends Template
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

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 2), "html", null, true);
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
        yield "</li>
            </ol>
        </nav>

        <div class=\"row g-4\">
            <div class=\"col-lg-8\">
                <article itemscope itemtype=\"https://schema.org/Article\">
                    <header class=\"mb-3\">
                        <h1 class=\"display-6 fw-bold mb-2\" itemprop=\"headline\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 19), "html", null, true);
        yield "</h1>
                        <div class=\"d-flex flex-wrap gap-2 align-items-center text-muted small\">
                            ";
        // line 21
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "publishedAt", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                                <span title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "publishedAt", [], "any", false, false, false, 22), "Y-m-d H:i"), "html", null, true);
            yield "\">
                <i class=\"bi bi-calendar-event me-1\"></i>
                Publié le ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "publishedAt", [], "any", false, false, false, 24), "d/m/Y \\à H:i"), "html", null, true);
            yield "
              </span>
                            ";
        }
        // line 27
        yield "                            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", true, true, false, 27) && CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 27))) {
            // line 28
            yield "                                <span class=\"text-body-secondary\">
                • <i class=\"bi bi-person-circle ms-1 me-1\"></i>
                ";
            // line 30
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, true, false, 30), "firstName", [], "any", true, true, false, 30) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 30), "firstName", [], "any", false, false, false, 30)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 30), "firstName", [], "any", false, false, false, 30), "html", null, true)) : (""));
            yield " ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, true, false, 30), "lastName", [], "any", true, true, false, 30) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 30), "lastName", [], "any", false, false, false, 30)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 30), "lastName", [], "any", false, false, false, 30), "html", null, true)) : (""));
            yield "
              </span>
                            ";
        }
        // line 33
        yield "                            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "isMembersOnly", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "cover", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "                        <figure class=\"mb-4\">
                            <img class=\"img-fluid rounded shadow-sm w-100\"
                                 src=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/covers/" . CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "cover", [], "any", false, false, false, 44))), "html", null, true);
            yield "\"
                                 alt=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 45), "html", null, true);
            yield "\" itemprop=\"image\" loading=\"lazy\">
                        </figure>
                    ";
        }
        // line 48
        yield "
                    <div class=\"content fs-5\" itemprop=\"articleBody\">
                        ";
        // line 50
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 50);
        yield "
                    </div>

                    ";
        // line 54
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "attachments", [], "any", true, true, false, 54) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "attachments", [], "any", false, false, false, 54)) > 0))) {
            // line 55
            yield "                        <div class=\"mt-4\">
                            <h2 class=\"h5 mb-3\"><i class=\"bi bi-paperclip me-2\"></i>Pièces jointes</h2>
                            <ul class=\"list-group\">
                                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "attachments", [], "any", false, false, false, 58));
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
                if ((is_string($_v0 = ($context["mime"] ?? null)) && is_string($_v1 = "image/") && str_starts_with($_v0, $_v1))) {
                    // line 63
                    yield "                                        ";
                    $context["icon"] = "bi-file-image";
                    // line 64
                    yield "                                    ";
                } elseif ((is_string($_v2 = ($context["mime"] ?? null)) && is_string($_v3 = "application/pdf") && str_starts_with($_v2, $_v3))) {
                    // line 65
                    yield "                                        ";
                    $context["icon"] = "bi-file-earmark-pdf";
                    // line 66
                    yield "                                    ";
                } elseif ((is_string($_v4 = ($context["mime"] ?? null)) && is_string($_v5 = "video/") && str_starts_with($_v4, $_v5))) {
                    // line 67
                    yield "                                        ";
                    $context["icon"] = "bi-file-play";
                    // line 68
                    yield "                                    ";
                } elseif ((is_string($_v6 = ($context["mime"] ?? null)) && is_string($_v7 = "audio/") && str_starts_with($_v6, $_v7))) {
                    // line 69
                    yield "                                        ";
                    $context["icon"] = "bi-file-music";
                    // line 70
                    yield "                                    ";
                } elseif (((is_string($_v8 = ($context["mime"] ?? null)) && is_string($_v9 = "application/vnd.ms-excel") && str_starts_with($_v8, $_v9)) || CoreExtension::inFilter("spreadsheet", ($context["mime"] ?? null)))) {
                    // line 71
                    yield "                                        ";
                    $context["icon"] = "bi-file-earmark-excel";
                    // line 72
                    yield "                                    ";
                } elseif (CoreExtension::inFilter("word", ($context["mime"] ?? null))) {
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
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
            if ((array_key_exists("prev", $context) && ($context["prev"] ?? null))) {
                // line 104
                yield "                                    <a class=\"btn btn-outline-dark\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["prev"] ?? null), "slug", [], "any", false, false, false, 104)]), "html", null, true);
                yield "\">
                                        <i class=\"bi bi-arrow-left me-1\"></i> ";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["prev"] ?? null), "title", [], "any", false, false, false, 105), "html", null, true);
                yield "
                                    </a>
                                ";
            }
            // line 108
            yield "                            </div>
                            <div>
                                ";
            // line 110
            if ((array_key_exists("next", $context) && ($context["next"] ?? null))) {
                // line 111
                yield "                                    <a class=\"btn btn-outline-dark\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["next"] ?? null), "slug", [], "any", false, false, false, 111)]), "html", null, true);
                yield "\">
                                        ";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["next"] ?? null), "title", [], "any", false, false, false, 112), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 133)), "html", null, true);
        yield "&body=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 133), "uri", [], "any", false, false, false, 133)), "html", null, true);
        yield "\">
                                    <i class=\"bi bi-envelope me-1\"></i>Partager par e-mail
                                </a>
                            </div>
                        </div>
                    </div>

                    ";
        // line 140
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", true, true, false, 140) && CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 140))) {
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
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, true, false, 148), "firstName", [], "any", true, true, false, 148) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 148), "firstName", [], "any", false, false, false, 148)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 148), "firstName", [], "any", false, false, false, 148), "html", null, true)) : (""));
            yield " ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, true, false, 148), "lastName", [], "any", true, true, false, 148) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 148), "lastName", [], "any", false, false, false, 148)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 148), "lastName", [], "any", false, false, false, 148), "html", null, true)) : (""));
            yield "
                                        </div>
                                        ";
            // line 150
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "publishedAt", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 151
                yield "                                            <div class=\"small text-muted\">
                                                Publié le ";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "publishedAt", [], "any", false, false, false, 152), "d/m/Y"), "html", null, true);
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
        return array (  396 => 160,  389 => 155,  383 => 152,  380 => 151,  378 => 150,  371 => 148,  362 => 141,  360 => 140,  348 => 133,  338 => 126,  328 => 118,  323 => 115,  317 => 112,  312 => 111,  310 => 110,  306 => 108,  300 => 105,  295 => 104,  293 => 103,  288 => 100,  285 => 99,  282 => 97,  277 => 94,  264 => 87,  261 => 86,  256 => 83,  249 => 79,  245 => 78,  240 => 75,  237 => 74,  234 => 73,  231 => 72,  228 => 71,  225 => 70,  222 => 69,  219 => 68,  216 => 67,  213 => 66,  210 => 65,  207 => 64,  204 => 63,  201 => 62,  198 => 61,  196 => 60,  193 => 59,  189 => 58,  184 => 55,  181 => 54,  175 => 50,  171 => 48,  165 => 45,  161 => 44,  157 => 42,  155 => 41,  150 => 38,  144 => 34,  141 => 33,  133 => 30,  129 => 28,  126 => 27,  120 => 24,  114 => 22,  112 => 21,  107 => 19,  96 => 11,  91 => 9,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "actus/show.html.twig", "C:\\wamp64\\www\\appac\\templates\\actus\\show.html.twig");
    }
}
