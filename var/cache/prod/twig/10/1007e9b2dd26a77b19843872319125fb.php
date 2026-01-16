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

/* @EasyAdmin/crud/field/code_editor.html.twig */
class __TwigTemplate_2ccd7dd749eff29ebe43a1e55eee9e8f extends Template
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
        // line 4
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "crud", [], "any", false, false, false, 4), "currentAction", [], "any", false, false, false, 4) == "detail")) {
            // line 5
            yield "    ";
            yield $this->getTemplateForMacro("macro_render_code_editor", $context, 5, $this->getSourceContext())->macro_render_code_editor(...[($context["field"] ?? null)]);
            yield "
";
        } else {
            // line 7
            yield "    ";
            $context["html_id"] = ("ea-code-editor-" . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 7));
            // line 8
            yield "    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["html_id"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 9
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:code"]);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.code_editor.view_code", [], "EasyAdminBundle"), "html", null, true);
            yield "
    </a>

    <div class=\"modal fade\" id=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["html_id"] ?? null), "html", null, true);
            yield "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header d-flex justify-content-between\">
                    <h5 class=\"modal-title\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 16)), "html", null, true);
            yield "</h5>
                    ";
            // line 17
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Button", ["type" => "button", "isInvisible" => true, "icon" => "internal:xmark", "data-bs-dismiss" => "modal", "aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close", [], "EasyAdminBundle")]);
            yield "
                </div>
                <div class=\"modal-body\">
                    ";
            // line 20
            yield $this->getTemplateForMacro("macro_render_code_editor", $context, 20, $this->getSourceContext())->macro_render_code_editor(...[($context["field"] ?? null)]);
            yield "
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 26
        yield "
";
        yield from [];
    }

    // line 27
    public function macro_render_code_editor($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 28
            yield "    ";
            $context["configuredHeight"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 28), "get", ["height"], "method", false, false, false, 28);
            // line 29
            yield "    <textarea
            readonly
            style=\"";
            // line 31
            yield (((null === ($context["configuredHeight"] ?? null))) ? ("max-height: 500px;") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("max-height: unset; height: " . ($context["configuredHeight"] ?? null)) . "px"), "html", null, true)));
            yield "\"
            data-ea-code-editor-field=\"true\"
            data-language=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 33), "get", ["language"], "method", false, false, false, 33), "html");
            yield "\"
            data-tab-size=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 34), "get", ["tabSize"], "method", false, false, false, 34), "html");
            yield "\"
            data-indent-with-tabs=\"";
            // line 35
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 35), "get", ["indentWithTabs"], "method", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\"
            data-show-line-numbers=\"";
            // line 36
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 36), "get", ["showLineNumbers"], "method", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\"
            data-number-of-rows=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 37), "get", ["numOfRows"], "method", false, false, false, 37), "html");
            yield "\"
    >";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 39));
            // line 40
            yield "</textarea>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/field/code_editor.html.twig";
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
        return array (  144 => 40,  142 => 39,  138 => 37,  134 => 36,  130 => 35,  126 => 34,  122 => 33,  117 => 31,  113 => 29,  110 => 28,  98 => 27,  92 => 26,  83 => 20,  77 => 17,  73 => 16,  66 => 12,  58 => 9,  53 => 8,  50 => 7,  44 => 5,  42 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/field/code_editor.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\field\\code_editor.html.twig");
    }
}
