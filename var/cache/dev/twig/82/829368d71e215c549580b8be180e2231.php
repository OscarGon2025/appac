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
class __TwigTemplate_ec623e35f3831308a74d4aa77332c32f extends Template
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

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/nouveau_membre.html.twig"));

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
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "hasActiveMembershipForYear", [(isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 5, $this->source); })())], "method", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 10, $this->source); })()), "html", null, true);
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  75 => 13,  68 => 10,  60 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set currentYear = \"now\"|date(\"Y\") %}

{% if is_granted('IS_AUTHENTICATED_FULLY') %}

    {% if not app.user.hasActiveMembershipForYear(currentYear) %}
        <a href=\"{{ path('app_adhesion') }}\" class=\"btn btn-primary\">
            S’abonner
        </a>
    {% else %}
        <span class=\"badge bg-success\">Adhésion {{ currentYear }} active</span>
    {% endif %}
{% else %}
    <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-primary\">
        Connexion
    </a>
{% endif %}
", "account/nouveau_membre.html.twig", "C:\\wamp64\\www\\appac\\templates\\account\\nouveau_membre.html.twig");
    }
}
