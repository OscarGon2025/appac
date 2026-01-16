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

/* @EasyAdmin/crud/action.html.twig */
class __TwigTemplate_5ea3a47cd96c2b33d9b9dfd0c719c6da extends Template
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
        yield "
";
        // line 5
        $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v0->preRender("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "variant", [], "any", false, false, false, 5), "isInvisible" => CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "usesTextStyle", [], "any", false, false, false, 5), "class" => (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlElement", [], "any", false, false, false, 5), "isLink", [], "any", false, false, false, 5) && ((array_key_exists("isIncludedInDropdown", $context)) ? (Twig\Extension\CoreExtension::default(($context["isIncludedInDropdown"] ?? null), false)) : (false)))) ? ("dropdown-item") : ("")) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "cssClass", [], "any", false, false, false, 5)), "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlAttributes", [], "any", false, false, false, 5), "htmlElement" => CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlElement", [], "any", false, false, false, 5), "type" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "buttonType", [], "any", false, false, false, 5), "value", [], "any", false, false, false, 5), "icon" => CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 5), "href" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlElement", [], "any", false, false, false, 5), "isLink", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "linkUrl", [], "any", false, false, false, 5)) : (null)), "action" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlElement", [], "any", false, false, false, 5), "isForm", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "linkUrl", [], "any", false, false, false, 5)) : (null)), "method" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlElement", [], "any", false, false, false, 5), "isForm", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("POST") : (null))]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v0->startEmbedComponent("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "variant", [], "any", false, false, false, 5), "isInvisible" => CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "usesTextStyle", [], "any", false, false, false, 5), "class" => (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlElement", [], "any", false, false, false, 5), "isLink", [], "any", false, false, false, 5) && ((array_key_exists("isIncludedInDropdown", $context)) ? (Twig\Extension\CoreExtension::default(($context["isIncludedInDropdown"] ?? null), false)) : (false)))) ? ("dropdown-item") : ("")) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "cssClass", [], "any", false, false, false, 5)), "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlAttributes", [], "any", false, false, false, 5), "htmlElement" => CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlElement", [], "any", false, false, false, 5), "type" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "buttonType", [], "any", false, false, false, 5), "value", [], "any", false, false, false, 5), "icon" => CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 5), "href" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlElement", [], "any", false, false, false, 5), "isLink", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "linkUrl", [], "any", false, false, false, 5)) : (null)), "action" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlElement", [], "any", false, false, false, 5), "isForm", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "linkUrl", [], "any", false, false, false, 5)) : (null)), "method" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlElement", [], "any", false, false, false, 5), "isForm", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("POST") : (null))]), $context, "@EasyAdmin/crud/action.html.twig", 33184894721);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 33184894721);
            $this->load("@EasyAdmin/crud/action.html.twig", 5, "33184894721")->display($embeddedContext, $embeddedBlocks);
            $_v0->finishEmbedComponent();
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/action.html.twig";
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
        return array (  45 => 5,  42 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/action.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action.html.twig");
    }
}


/* @EasyAdmin/crud/action.html.twig */
class __TwigTemplate_5ea3a47cd96c2b33d9b9dfd0c719c6da___33184894721 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        return $this->load(($context["__parent__"] ?? null), 5);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $context["action_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["outerScope"] ?? null), "action", [], "any", false, false, false, 6), "label", [], "any", false, false, false, 6));
        // line 7
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["action_label"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"action-label\">";
            yield ($context["action_label"] ?? null);
            yield "</span>";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/action.html.twig";
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
        return array (  142 => 7,  134 => 6,  45 => 5,  42 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/action.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action.html.twig");
    }
}
