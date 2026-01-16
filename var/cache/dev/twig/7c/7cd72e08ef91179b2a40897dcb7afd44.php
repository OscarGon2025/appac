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

/* account/my_outings.html.twig */
class __TwigTemplate_f8d2d76607755e184a8ecec2c9b3ab68 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/my_outings.html.twig"));

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

        yield "Mes sorties inscrites";
        
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
        yield "    <section class=\"section-padding bg-white px-4 py-5 pt-lg-5 mt-5\">
        <div class=\"container\">
            <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        yield "\" class=\"btn btn-outline-secondary btn-sm mb-4\">
                ← Retour à mon compte
            </a>

            <h1 class=\"h3 mb-4\">Mes sorties inscrites</h1>

            ";
        // line 14
        if (Twig\Extension\CoreExtension::testEmpty(($context["events"] ?? null))) {
            // line 15
            yield "                <div class=\"alert alert-light border\">
                    Vous n’êtes inscrit(e) à aucune sortie pour le moment.
                </div>
            ";
        } else {
            // line 19
            yield "                <div class=\"row g-4\">
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 21
                yield "                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card h-100 shadow-sm\">
                                <div class=\"card-body d-flex flex-column\">
                                    <h5 class=\"card-title mb-2\">";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "title", [], "any", false, false, false, 24), "html", null, true);
                yield "</h5>
                                    <p class=\"small text-muted mb-1\">
                                        <i class=\"bi bi-calendar-event me-1\"></i>
                                        ";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "startAt", [], "any", false, false, false, 27), "d/m/Y H:i"), "html", null, true);
                yield "
                                        ";
                // line 28
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "endAt", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " – ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "endAt", [], "any", false, false, false, 28), "d/m/Y H:i"), "html", null, true);
                }
                // line 29
                yield "                                    </p>
                                    ";
                // line 30
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "locationName", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 31
                    yield "                                        <p class=\"small text-muted mb-3\">
                                            <i class=\"bi bi-geo-alt me-1\"></i> ";
                    // line 32
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "locationName", [], "any", false, false, false, 32), "html", null, true);
                    yield "
                                        </p>
                                    ";
                }
                // line 35
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["e"], "slug", [], "any", false, false, false, 35)]), "html", null, true);
                yield "\" class=\"btn btn-outline-primary mt-auto\">
                                        <i class=\"bi bi-eye me-1\"></i> Voir détails
                                    </a>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "                </div>
            ";
        }
        // line 44
        yield "        </div>
    </section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "account/my_outings.html.twig";
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
        return array (  168 => 44,  164 => 42,  150 => 35,  144 => 32,  141 => 31,  139 => 30,  136 => 29,  131 => 28,  127 => 27,  121 => 24,  116 => 21,  112 => 20,  109 => 19,  103 => 15,  101 => 14,  92 => 8,  88 => 6,  78 => 5,  61 => 3,  53 => 1,  51 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "account/my_outings.html.twig", "C:\\wamp64\\www\\appac\\templates\\account\\my_outings.html.twig");
    }
}
