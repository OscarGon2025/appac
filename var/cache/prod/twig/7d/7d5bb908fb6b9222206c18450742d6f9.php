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
class __TwigTemplate_d579dbc271b86815fed3aeaf0c36f989 extends Template
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
        return array (  69 => 13,  62 => 10,  54 => 6,  52 => 5,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "account/nouveau_membre.html.twig", "C:\\wamp64\\www\\appac\\templates\\account\\nouveau_membre.html.twig");
    }
}
