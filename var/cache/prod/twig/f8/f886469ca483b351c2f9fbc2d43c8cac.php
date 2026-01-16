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

/* admin/fields/enum_value.html.twig */
class __TwigTemplate_41beaae83de0e4513b903de577917231 extends Template
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
        // line 2
        $context["v"] = (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 2))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 2), "value", [], "any", false, false, false, 2)) : (null));
        // line 3
        if ((($tmp = ($context["v"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    <span class=\"badge
    ";
            // line 5
            if ((($context["v"] ?? null) == "APPROVED")) {
                yield " text-bg-success
    ";
            } elseif ((            // line 6
($context["v"] ?? null) == "PENDING")) {
                yield " text-bg-warning
    ";
            } elseif ((            // line 7
($context["v"] ?? null) == "REJECTED")) {
                yield " text-bg-danger
    ";
            } elseif ((            // line 8
($context["v"] ?? null) == "ARCHIVED")) {
                yield " text-bg-secondary
    ";
            } else {
                // line 9
                yield " text-bg-light
    ";
            }
            // line 11
            yield "  \">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["v"] ?? null), "html", null, true);
            yield "</span>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/fields/enum_value.html.twig";
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
        return array (  70 => 11,  66 => 9,  61 => 8,  57 => 7,  53 => 6,  49 => 5,  46 => 4,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/fields/enum_value.html.twig", "C:\\wamp64\\www\\appac\\templates\\admin\\fields\\enum_value.html.twig");
    }
}
