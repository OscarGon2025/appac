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
class __TwigTemplate_69f1fc1cbe1562e9b71ccdca29bd6ade extends Template
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

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/ad/index.html.twig"));

        // line 2
        $context["navbar_is_transparent"] = false;
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Mes annonces";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
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

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["ads"]) || array_key_exists("ads", $context) ? $context["ads"] : (function () { throw new RuntimeError('Variable "ads" does not exist.', 14, $this->source); })()))) {
            // line 15
            yield "            <div class=\"alert alert-light border\">Vous n’avez pas encore d’annonces.</div>
        ";
        } else {
            // line 17
            yield "            <div class=\"row\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ads"]) || array_key_exists("ads", $context) ? $context["ads"] : (function () { throw new RuntimeError('Variable "ads" does not exist.', 18, $this->source); })()));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
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
        return array (  239 => 68,  235 => 66,  221 => 58,  217 => 57,  210 => 53,  206 => 52,  199 => 48,  193 => 45,  186 => 41,  181 => 38,  175 => 36,  172 => 35,  166 => 33,  162 => 31,  157 => 30,  153 => 29,  149 => 28,  145 => 27,  142 => 26,  140 => 25,  134 => 22,  129 => 19,  125 => 18,  122 => 17,  118 => 15,  116 => 14,  108 => 9,  103 => 6,  90 => 5,  67 => 3,  56 => 1,  54 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% set navbar_is_transparent = false %}
{% block title %}Mes annonces{% endblock %}

{% block body %}
    <section class=\"container-lg px-4 py-5 pt-lg-5 mt-5\" id=\"account-ads\">
        <header class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"h3 mb-0\">Mes annonces</h1>
            <a class=\"btn btn-success\" href=\"{{ path('account_ad_new') }}\">
                <i class=\"bi bi-plus-lg me-1\"></i> Déposer une annonce
            </a>
        </header>

        {% if ads is empty %}
            <div class=\"alert alert-light border\">Vous n’avez pas encore d’annonces.</div>
        {% else %}
            <div class=\"row\">
                {% for ad in ads %}
                    <div class=\"col-md-6 col-lg-4 mb-4\">
                        <article class=\"card h-100 shadow-sm\">
                            <div class=\"card-body d-flex flex-column\">
                                <h2 class=\"h5 mb-1\">{{ ad.title }}</h2>

                                <div class=\"small text-muted mb-2 d-flex align-items-center gap-2\">
                                    {% if ad.status %}
                                        <span class=\"badge
                    {% if ad.status.value == 'APPROVED' %}text-bg-success
                    {% elseif ad.status.value == 'PENDING' %}text-bg-warning
                    {% elseif ad.status.value == 'REJECTED' %}text-bg-danger
                    {% elseif ad.status.value == 'ARCHIVED' %}text-bg-secondary
                    {% else %}text-bg-light
                    {% endif %}
                  \">{{ ad.status.value }}</span>
                                    {% endif %}
                                    {% if ad.updatedAt %}
                                        <span><i class=\"bi bi-clock me-1\"></i>{{ ad.updatedAt|date('d/m/Y H:i') }}</span>
                                    {% endif %}
                                </div>

                                <p class=\"mb-3\">
                                    {{ ad.description|default('')|striptags|slice(0,120) ~ (ad.description is defined and ad.description|length > 120 ? '…' : '') }}
                                </p>

                                <div class=\"mt-auto d-flex gap-2\">
                                    <a class=\"btn btn-outline-primary btn-sm\" href=\"{{ path('app_classified_show', { id: ad.id }) }}\">
                                        Voir public
                                    </a>
                                    <a class=\"btn btn-primary btn-sm\" href=\"{{ path('account_ad_edit', { id: ad.id }) }}\">
                                        Modifier
                                    </a>

                                    <form method=\"post\" action=\"{{ path('account_ad_archive', { id: ad.id }) }}\" onsubmit=\"return confirm('Archiver cette annonce ?');\" class=\"d-inline-block ms-auto\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('ad_archive_' ~ ad.id) }}\">
                                        <button class=\"btn btn-outline-secondary btn-sm\" type=\"submit\">Archiver</button>
                                    </form>

                                    <form method=\"post\" action=\"{{ path('account_ad_delete', { id: ad.id }) }}\" onsubmit=\"return confirm('Supprimer définitivement ?');\" class=\"d-inline-block\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('ad_delete_' ~ ad.id) }}\">
                                        <button class=\"btn btn-outline-danger btn-sm\" type=\"submit\">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </article>
                    </div>
                {% endfor %}
            </div>
        {% endif %}
    </section>
{% endblock %}
", "account/ad/index.html.twig", "C:\\wamp64\\www\\appac\\templates\\account\\ad\\index.html.twig");
    }
}
