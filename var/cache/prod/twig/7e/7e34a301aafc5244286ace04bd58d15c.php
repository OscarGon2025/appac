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

/* actus/index.html.twig */
class __TwigTemplate_492deae9cf7f27e9f42b68445a8eab0f extends Template
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
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Actus";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    <section class=\"container-lg px-4 py-5 pt-lg-5 mt-5\" id=\"actus-index\" aria-labelledby=\"actus-title\">

    <header class=\"d-flex flex-column flex-md-row align-items-md-end justify-content-between gap-3 mb-4\">
            <div>
                <h1 id=\"actus-title\" class=\"display-6 fw-bold mb-1\">Derniers articles</h1>
                <p class=\"text-muted mb-0\">Actualités de l’association et infos utiles pour les plaisanciers</p>
            </div>

            ";
        // line 14
        yield "            <form class=\"d-flex gap-2 align-items-center\" role=\"search\" aria-label=\"Filtrer les actus\" onsubmit=\"return false\">
                <div class=\"input-group\">
                    <span class=\"input-group-text\" id=\"search-addon\"><i class=\"bi bi-search\"></i></span>
                    <input type=\"search\" class=\"form-control\" id=\"actus-search\" placeholder=\"Rechercher un article…\" aria-describedby=\"search-addon\">
                </div>
                <select class=\"form-select\" id=\"actus-filter\" aria-label=\"Filtrer par type\">
                    <option value=\"\">Tous</option>
                    <option value=\"pinned\">À la une</option>
                    <option value=\"members\">Réservé aux membres</option>
                    <option value=\"recent\">Publié récemment</option>
                </select>
            </form>
        </header>

        <div class=\"row g-4\" id=\"actus-grid\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 30
            yield "                ";
            // line 31
            yield "                ";
            $context["excerpt"] = Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "content", [], "any", false, false, false, 31));
            // line 32
            yield "                ";
            $context["excerpt"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["excerpt"] ?? null)) > 180)) ? ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["excerpt"] ?? null), 0, 180) . "…")) : (($context["excerpt"] ?? null)));
            // line 33
            yield "
                <div class=\"col-xl-3 col-lg-4 col-md-6\">
                    <article class=\"custom-block-wrap h-100 card border-0 shadow-sm actus-item\"
                             data-pinned=\"";
            // line 36
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pinned", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
                             data-members=\"";
            // line 37
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "isMembersOnly", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
                             data-recent=\"";
            // line 38
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["a"], "publishedAt", [], "any", false, false, false, 38)) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "publishedAt", [], "any", false, false, false, 38), "U") > $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate("now", "-30 days"), "U")))) ? ("1") : ("0"));
            yield "\"
                             itemscope itemtype=\"https://schema.org/Article\">
                        ";
            // line 41
            yield "
";
            // line 58
            yield "
                        ";
            // line 60
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "coverImage", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 61
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 61)]), "html", null, true);
                yield "\" class=\"ratio ratio-16x9 d-block\">
                                <img
                                    src=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/archives/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "coverImage", [], "any", false, false, false, 63), "fileName", [], "any", false, false, false, 63))), "html", null, true);
                yield "\"
                                    class=\"object-fit-cover rounded-top\"
                                    alt=\"";
                // line 65
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "coverImage", [], "any", false, false, false, 65), "title", [], "any", false, false, false, 65)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "coverImage", [], "any", false, false, false, 65), "title", [], "any", false, false, false, 65), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 65), "html", null, true)));
                yield "\"
                                    loading=\"lazy\"
                                    itemprop=\"image\">
                            </a>
                        ";
            } else {
                // line 70
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 70)]), "html", null, true);
                yield "\"
                               class=\"ratio ratio-16x9 d-flex align-items-center justify-content-center rounded-top text-decoration-none\"
                               style=\"background:#eef2f6;\">
                                <i class=\"bi bi-newspaper\" style=\"font-size:2rem; color:#94a3b8;\"></i>
                            </a>
                        ";
            }
            // line 76
            yield "

                        <div class=\"custom-block card-body d-flex flex-column\">
                            <div class=\"d-flex align-items-center gap-2 mb-2\">
                                ";
            // line 80
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pinned", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"badge text-bg-warning\">À la une</span>";
            }
            // line 81
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "isMembersOnly", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"badge text-bg-secondary\">Membres</span>";
            }
            // line 82
            yield "                            </div>

                            <h2 class=\"h5 card-title mb-2\" itemprop=\"headline\">
                                <a href=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 85)]), "html", null, true);
            yield "\" class=\"stretched-link text-decoration-none\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 85), "html", null, true);
            yield "</a>
                            </h2>

                            <p class=\"text-muted small mb-2\">
                                ";
            // line 89
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "publishedAt", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 90
                yield "                                    <i class=\"bi bi-calendar-event me-1\" aria-hidden=\"true\"></i>
                                    <time datetime=\"";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "publishedAt", [], "any", false, false, false, 91), "c"), "html", null, true);
                yield "\" itemprop=\"datePublished\">
                                        ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "publishedAt", [], "any", false, false, false, 92), "d/m/Y H:i"), "html", null, true);
                yield "
                                    </time>
                                ";
            }
            // line 95
            yield "                            </p>

                            <p class=\"card-text mb-3\" itemprop=\"description\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["excerpt"] ?? null), "html", null, true);
            yield "</p>

                            <div class=\"mt-auto\">
                                <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 100)]), "html", null, true);
            yield "\" aria-label=\"Lire l’article « ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 100), "html", null, true);
            yield " »\">Lire</a>
                            </div>
                        </div>
                    </article>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 105
        if (!$context['_iterated']) {
            // line 106
            yield "                ";
            // line 107
            yield "                <div class=\"col-12\">
                    <div class=\"text-center py-5 border rounded-3 bg-light\">
                        <p class=\"mb-1 fs-5\">Aucun article pour le moment.</p>
                        <p class=\"text-muted mb-0\">Revenez bientôt, de nouvelles actus arrivent ⛵</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "        </div>

        ";
        // line 117
        yield "        ";
        // line 118
        yield "    </section>

    ";
        // line 121
        yield "    <script>
        (function () {
            const q = document.getElementById('actus-search');
            const f = document.getElementById('actus-filter');
            const cards = Array.from(document.querySelectorAll('#actus-grid .actus-item'));

            function normalize(s){ return (s || '').toString().toLowerCase().normalize('NFD').replace(/[\\u0300-\\u036f]/g,''); }

            function apply() {
                const term = normalize(q?.value || '');
                const filter = f?.value || '';
                cards.forEach(card => {
                    const title = normalize(card.querySelector('.card-title')?.innerText);
                    const text  = normalize(card.querySelector('.card-text')?.innerText);
                    const matchTerm = !term || title.includes(term) || text.includes(term);

                    let matchFilter = true;
                    if (filter === 'pinned')   matchFilter = card.dataset.pinned === '1';
                    if (filter === 'members')  matchFilter = card.dataset.members === '1';
                    if (filter === 'recent')   matchFilter = card.dataset.recent === '1';

                    card.parentElement.style.display = (matchTerm && matchFilter) ? '' : 'none';
                });
            }
            q?.addEventListener('input', apply, { passive: true });
            f?.addEventListener('change', apply);
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
        return "actus/index.html.twig";
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
        return array (  258 => 121,  254 => 118,  252 => 117,  248 => 114,  236 => 107,  234 => 106,  232 => 105,  220 => 100,  214 => 97,  210 => 95,  204 => 92,  200 => 91,  197 => 90,  195 => 89,  186 => 85,  181 => 82,  176 => 81,  172 => 80,  166 => 76,  156 => 70,  148 => 65,  143 => 63,  137 => 61,  134 => 60,  131 => 58,  128 => 41,  123 => 38,  119 => 37,  115 => 36,  110 => 33,  107 => 32,  104 => 31,  102 => 30,  97 => 29,  80 => 14,  70 => 5,  63 => 4,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "actus/index.html.twig", "C:\\wamp64\\www\\appac\\templates\\actus\\index.html.twig");
    }
}
