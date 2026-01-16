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

/* registration/index.html.twig */
class __TwigTemplate_a2c92b0df52386cb5bbe10f57287fab3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        // line 3
        yield "
";
        // line 5
        yield "
";
        // line 13
        yield "
";
        // line 20
        yield "
";
        // line 22
        yield "
";
        // line 34
        yield "
";
        // line 50
        yield "
";
        // line 53
        yield "
";
        // line 58
        yield "
";
        // line 60
        yield "
";
        // line 67
        yield "
";
        // line 73
        yield "
";
        // line 80
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  81 => 80,  78 => 73,  75 => 67,  72 => 60,  69 => 58,  66 => 53,  63 => 50,  60 => 34,  57 => 22,  54 => 20,  51 => 13,  48 => 5,  45 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "registration/index.html.twig", "C:\\wamp64\\www\\appac\\templates\\registration\\index.html.twig");
    }
}
