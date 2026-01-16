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

/* admin/fields/album_hierarchy.html.twig */
class __TwigTemplate_1426e6a7fe467e435b9b41f4fae1d8f0 extends Template
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
        yield "
";
        // line 15
        yield "
";
        // line 17
        $macros["͜macros"] = $this->macros["͜macros"] = $this;
        // line 18
        yield "<div class=\"album-children\">
    ";
        // line 19
        yield $macros["͜macros"]->getTemplateForMacro("macro_renderChildren", $context, 19, $this->getSourceContext())->macro_renderChildren(...[($context["value"] ?? null)]);
        yield "
</div>
";
        yield from [];
    }

    // line 2
    public function macro_renderChildren($children = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "children" => $children,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 3
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["children"] ?? null)) > 0)) {
                // line 4
                yield "        <ul style=\"margin-left: 20px;\">
            ";
                // line 5
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["children"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 6
                    yield "                <li>
                    ";
                    // line 7
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, false, 7), "html", null, true);
                    yield "
                    ";
                    // line 9
                    yield "                    ";
                    yield $this->getTemplateForMacro("macro_renderChildren", $context, 9, $this->getSourceContext())->macro_renderChildren(...[CoreExtension::getAttribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 9)]);
                    yield "
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                yield "        </ul>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/fields/album_hierarchy.html.twig";
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
        return array (  100 => 12,  90 => 9,  86 => 7,  83 => 6,  79 => 5,  76 => 4,  73 => 3,  61 => 2,  53 => 19,  50 => 18,  48 => 17,  45 => 15,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/fields/album_hierarchy.html.twig", "C:\\wamp64\\www\\appac\\templates\\admin\\fields\\album_hierarchy.html.twig");
    }
}
