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

/* account/ad/index.html.twig */
class __TwigTemplate_985f2822c8893cb2143525ffdc9f7cbe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/ad/index.html.twig"));

        // line 2
        $context["navbar_is_transparent"] = false;
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Mes annonces";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <section class=\"container-lg px-4 py-5 pt-lg-5 mt-5\" id=\"account-ads\">
        <header class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"h3 mb-0\">Mes annonces</h1>
            <a class=\"btn btn-success\" href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_ad_new");
        yield "\">
                <i class=\"bi bi-plus-lg me-1\"></i> Déposer une annonce
            </a>
        </header>

        ";
        // line 14
        if (Twig\Extension\CoreExtension::testEmpty(($context["ads"] ?? null))) {
            // line 15
            yield "            <div class=\"alert alert-light border\">Vous n’avez pas encore d’annonces.</div>
        ";
        } else {
            // line 17
            yield "            <div class=\"row\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["ads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
                // line 19
                yield "                    <div class=\"col-md-6 col-lg-4 mb-4\">
                        <article class=\"card h-100 shadow-sm\">
                            <div class=\"card-body d-flex flex-column\">
                                <h2 class=\"h5 mb-1\">";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "title", [], "any", false, false, false, 22), "html", null, true);
                yield "</h2>

                                <div class=\"small text-muted mb-2 d-flex align-items-center gap-2\">
                                    ";
                // line 25
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "status", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 26
                    yield "                                        <span class=\"badge
                    ";
                    // line 27
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "status", [], "any", false, false, false, 27), "value", [], "any", false, false, false, 27) == "APPROVED")) {
                        yield "text-bg-success
                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 28
$context["ad"], "status", [], "any", false, false, false, 28), "value", [], "any", false, false, false, 28) == "PENDING")) {
                        yield "text-bg-warning
                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 29
$context["ad"], "status", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29) == "REJECTED")) {
                        yield "text-bg-danger
                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 30
$context["ad"], "status", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30) == "ARCHIVED")) {
                        yield "text-bg-secondary
                    ";
                    } else {
                        // line 31
                        yield "text-bg-light
                    ";
                    }
                    // line 33
                    yield "                  \">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "status", [], "any", false, false, false, 33), "value", [], "any", false, false, false, 33), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 35
                yield "                                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "updatedAt", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 36
                    yield "                                        <span><i class=\"bi bi-clock me-1\"></i>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "updatedAt", [], "any", false, false, false, 36), "d/m/Y H:i"), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 38
                yield "                                </div>

                                <p class=\"mb-3\">
                                    ";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(((CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "description", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "description", [], "any", false, false, false, 41), "")) : (""))), 0, 120) . (((CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "description", [], "any", true, true, false, 41) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "description", [], "any", false, false, false, 41)) > 120))) ? ("…") : (""))), "html", null, true);
                yield "
                                </p>

                                <div class=\"mt-auto d-flex gap-2\">
                                    <a class=\"btn btn-outline-primary btn-sm\" href=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classified_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\">
                                        Voir public
                                    </a>
                                    <a class=\"btn btn-primary btn-sm\" href=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_ad_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                yield "\">
                                        Modifier
                                    </a>

                                    <form method=\"post\" action=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_ad_archive", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Archiver cette annonce ?');\" class=\"d-inline-block ms-auto\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("ad_archive_" . CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "id", [], "any", false, false, false, 53))), "html", null, true);
                yield "\">
                                        <button class=\"btn btn-outline-secondary btn-sm\" type=\"submit\">Archiver</button>
                                    </form>

                                    <form method=\"post\" action=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_ad_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Supprimer définitivement ?');\" class=\"d-inline-block\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("ad_delete_" . CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "id", [], "any", false, false, false, 58))), "html", null, true);
                yield "\">
                                        <button class=\"btn btn-outline-danger btn-sm\" type=\"submit\">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </article>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ad'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "            </div>
        ";
        }
        // line 68
        yield "    </section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "account/ad/index.html.twig";
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
        return array (  224 => 68,  220 => 66,  206 => 58,  202 => 57,  195 => 53,  191 => 52,  184 => 48,  178 => 45,  171 => 41,  166 => 38,  160 => 36,  157 => 35,  151 => 33,  147 => 31,  142 => 30,  138 => 29,  134 => 28,  130 => 27,  127 => 26,  125 => 25,  119 => 22,  114 => 19,  110 => 18,  107 => 17,  103 => 15,  101 => 14,  93 => 9,  88 => 6,  78 => 5,  61 => 3,  53 => 1,  51 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "account/ad/index.html.twig", "C:\\wamp64\\www\\appac\\templates\\account\\ad\\index.html.twig");
    }
}
