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
class __TwigTemplate_306cd4be0dd43a86c1685247149c84db extends Template
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
        return array (  78 => 80,  75 => 73,  72 => 67,  69 => 60,  66 => 58,  63 => 53,  60 => 50,  57 => 34,  54 => 22,  51 => 20,  48 => 13,  45 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "registration/index.html.twig", "C:\\wamp64\\www\\appac\\templates\\registration\\index.html.twig");
    }
}
