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

/* account/nouveau_membre.html.twig */
class __TwigTemplate_bb525af940f0ca8c1bef21144587c04d extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/nouveau_membre.html.twig"));

        // line 1
        $context["currentYear"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y");
        // line 2
        yield "
";
        // line 3
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "
    ";
            // line 5
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 5), "hasActiveMembershipForYear", [($context["currentYear"] ?? null)], "method", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 6
                yield "        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adhesion");
                yield "\" class=\"btn btn-primary\">
            S’abonner
        </a>
    ";
            } else {
                // line 10
                yield "        <span class=\"badge bg-success\">Adhésion ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentYear"] ?? null), "html", null, true);
                yield " active</span>
    ";
            }
        } else {
            // line 13
            yield "    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-outline-primary\">
        Connexion
    </a>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "account/nouveau_membre.html.twig";
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
        return array (  72 => 13,  65 => 10,  57 => 6,  55 => 5,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "account/nouveau_membre.html.twig", "C:\\wamp64\\www\\appac\\templates\\account\\nouveau_membre.html.twig");
    }
}
