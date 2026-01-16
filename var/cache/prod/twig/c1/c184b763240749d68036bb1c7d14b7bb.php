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

/* @EasyAdmin/components/Alert.html.twig */
class __TwigTemplate_482aabfdb3984f4a8c86a3abfca3ca52 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "defaults", [["class" => CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "defaultCssClass", [], "method", false, false, false, 1), "role" => "alert"]], "method", false, false, false, 1), "html", null, true);
        yield ">
    ";
        // line 2
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 3
        yield "
    ";
        // line 4
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "withDismissButton", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "        ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Button", ["type" => "button", "isInvisible" => true, "icon" => "internal:xmark", "class" => "btn-close", "data-bs-dismiss" => "alert", "aria-label" => "Close"]);
            yield "
    ";
        }
        // line 7
        yield "</div>
";
        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/components/Alert.html.twig";
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
        return array (  67 => 2,  61 => 7,  55 => 5,  53 => 4,  50 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/components/Alert.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\components\\Alert.html.twig");
    }
}
