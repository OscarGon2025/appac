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

/* @EasyAdmin/crud/action_group.html.twig */
class __TwigTemplate_b33779b4fc79cb83d92bc73b29d6c8b4 extends Template
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
        $context["has_main_action"] = CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "hasMainAction", [], "any", false, false, false, 3);
        // line 4
        $context["main_action"] = CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "mainAction", [], "any", false, false, false, 4);
        // line 5
        yield "
<div class=\"btn-group action-group\" ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "htmlAttributes", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "trans", [], "any", true, true, false, 6)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["value"])) : ($context["value"])), "html");
            yield "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ">
    ";
        // line 7
        if ((($tmp = ($context["has_main_action"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " ";
            // line 8
            yield "        ";
            $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
            $preRendered = $_v0->preRender("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "variant", [], "any", false, false, false, 8), "htmlElement" => CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "cssClass", [], "any", false, false, false, 8) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "addedCssClass", [], "any", false, false, false, 8)), "href" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "isLink", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "linkUrl", [], "any", false, false, false, 8)) : (null)), "action" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "isForm", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "linkUrl", [], "any", false, false, false, 8)) : (null)), "method" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "isForm", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("POST") : (null)), "icon" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "icon", [], "any", false, false, false, 8)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "icon", [], "any", false, false, false, 8)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "icon", [], "any", false, false, false, 8))), "htmlAttributes" => Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlAttributes", [], "any", false, false, false, 8), ["data-action-group-name-main-action" => true, "onclick" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "isButton", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("window.location='" . CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "linkUrl", [], "any", false, false, false, 8)) . "'")) : (null))]), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !(null === ($context["v"] ?? null)); })]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v0->startEmbedComponent("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "variant", [], "any", false, false, false, 8), "htmlElement" => CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "cssClass", [], "any", false, false, false, 8) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "addedCssClass", [], "any", false, false, false, 8)), "href" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "isLink", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "linkUrl", [], "any", false, false, false, 8)) : (null)), "action" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "isForm", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "linkUrl", [], "any", false, false, false, 8)) : (null)), "method" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "isForm", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("POST") : (null)), "icon" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "icon", [], "any", false, false, false, 8)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "icon", [], "any", false, false, false, 8)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "icon", [], "any", false, false, false, 8))), "htmlAttributes" => Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlAttributes", [], "any", false, false, false, 8), ["data-action-group-name-main-action" => true, "onclick" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "isButton", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("window.location='" . CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "linkUrl", [], "any", false, false, false, 8)) . "'")) : (null))]), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !(null === ($context["v"] ?? null)); })]), $context, "@EasyAdmin/crud/action_group.html.twig", 7386223461);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 7386223461);
                $this->load("@EasyAdmin/crud/action_group.html.twig", 8, "7386223461")->display($embeddedContext, $embeddedBlocks);
                $_v0->finishEmbedComponent();
            }
            // line 12
            yield "
        ";
            // line 13
            $_v1 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
            $preRendered = $_v1->preRender("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "variant", [], "any", false, false, false, 13), "htmlElement" => "button", "type" => "button", "class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "cssClass", [], "any", false, false, false, 13) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "addedCssClass", [], "any", false, false, false, 13)) . " dropdown-toggle dropdown-toggle-split"), "htmlAttributes" => ["data-bs-toggle" => "dropdown", "aria-expanded" => "false"], "label:class" => "visually-hidden"]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v1->startEmbedComponent("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "variant", [], "any", false, false, false, 13), "htmlElement" => "button", "type" => "button", "class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "cssClass", [], "any", false, false, false, 13) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "addedCssClass", [], "any", false, false, false, 13)) . " dropdown-toggle dropdown-toggle-split"), "htmlAttributes" => ["data-bs-toggle" => "dropdown", "aria-expanded" => "false"], "label:class" => "visually-hidden"]), $context, "@EasyAdmin/crud/action_group.html.twig", 29748985831);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 29748985831);
                $this->load("@EasyAdmin/crud/action_group.html.twig", 13, "29748985831")->display($embeddedContext, $embeddedBlocks);
                $_v1->finishEmbedComponent();
            }
            // line 16
            yield "    ";
        } else {
            yield " ";
            // line 17
            yield "        ";
            $_v2 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
            $preRendered = $_v2->preRender("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "variant", [], "any", false, false, false, 17), "class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "cssClass", [], "any", false, false, false, 17) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "addedCssClass", [], "any", false, false, false, 17)) . " dropdown-toggle"), "htmlElement" => "button", "type" => "button", "icon" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "icon", [], "any", false, false, false, 17), "htmlAttributes" => ["data-bs-toggle" => "dropdown", "aria-expanded" => "false"]]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v2->startEmbedComponent("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "variant", [], "any", false, false, false, 17), "class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "cssClass", [], "any", false, false, false, 17) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "addedCssClass", [], "any", false, false, false, 17)) . " dropdown-toggle"), "htmlElement" => "button", "type" => "button", "icon" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "icon", [], "any", false, false, false, 17), "htmlAttributes" => ["data-bs-toggle" => "dropdown", "aria-expanded" => "false"]]), $context, "@EasyAdmin/crud/action_group.html.twig", 30574258061);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 30574258061);
                $this->load("@EasyAdmin/crud/action_group.html.twig", 17, "30574258061")->display($embeddedContext, $embeddedBlocks);
                $_v2->finishEmbedComponent();
            }
            // line 21
            yield "    ";
        }
        // line 22
        yield "
    ";
        // line 23
        $_v3 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v3->preRender("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-menu"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v3->startEmbedComponent("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-menu"]), $context, "@EasyAdmin/crud/action_group.html.twig", 25918203721);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 25918203721);
            $this->load("@EasyAdmin/crud/action_group.html.twig", 23, "25918203721")->display($embeddedContext, $embeddedBlocks);
            $_v3->finishEmbedComponent();
        }
        // line 38
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/action_group.html.twig";
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
        return array (  137 => 38,  123 => 23,  120 => 22,  117 => 21,  102 => 17,  98 => 16,  84 => 13,  81 => 12,  66 => 8,  63 => 7,  49 => 6,  46 => 5,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/action_group.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action_group.html.twig");
    }
}


/* @EasyAdmin/crud/action_group.html.twig */
class __TwigTemplate_b33779b4fc79cb83d92bc73b29d6c8b4___7386223461 extends Template
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
        // line 8
        return $this->load(($context["__parent__"] ?? null), 8);
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

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $context["main_action_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "label", [], "any", false, false, false, 9));
        // line 10
        if ((($tmp =  !(($context["main_action_label"] ?? null) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield ($context["main_action_label"] ?? null);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/action_group.html.twig";
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
        return array (  224 => 10,  216 => 9,  197 => 8,  137 => 38,  123 => 23,  120 => 22,  117 => 21,  102 => 17,  98 => 16,  84 => 13,  81 => 12,  66 => 8,  63 => 7,  49 => 6,  46 => 5,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/action_group.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action_group.html.twig");
    }
}


/* @EasyAdmin/crud/action_group.html.twig */
class __TwigTemplate_b33779b4fc79cb83d92bc73b29d6c8b4___29748985831 extends Template
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
        // line 13
        return $this->load(($context["__parent__"] ?? null), 13);
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

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.toggle_dropdown", [], "EasyAdminBundle"), "html", null, true);
        yield "
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/action_group.html.twig";
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
        return array (  304 => 14,  285 => 13,  224 => 10,  216 => 9,  197 => 8,  137 => 38,  123 => 23,  120 => 22,  117 => 21,  102 => 17,  98 => 16,  84 => 13,  81 => 12,  66 => 8,  63 => 7,  49 => 6,  46 => 5,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/action_group.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action_group.html.twig");
    }
}


/* @EasyAdmin/crud/action_group.html.twig */
class __TwigTemplate_b33779b4fc79cb83d92bc73b29d6c8b4___30574258061 extends Template
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
        // line 17
        return $this->load(($context["__parent__"] ?? null), 17);
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

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $context["group_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "label", [], "any", false, false, false, 18));
        // line 19
        if ((($tmp =  !(($context["group_label"] ?? null) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield ($context["group_label"] ?? null);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/action_group.html.twig";
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
        return array (  398 => 19,  390 => 18,  371 => 17,  304 => 14,  285 => 13,  224 => 10,  216 => 9,  197 => 8,  137 => 38,  123 => 23,  120 => 22,  117 => 21,  102 => 17,  98 => 16,  84 => 13,  81 => 12,  66 => 8,  63 => 7,  49 => 6,  46 => 5,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/action_group.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action_group.html.twig");
    }
}


/* @EasyAdmin/crud/action_group.html.twig */
class __TwigTemplate_b33779b4fc79cb83d92bc73b29d6c8b4___25918203721 extends Template
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
        // line 23
        return $this->load(($context["__parent__"] ?? null), 23);
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

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "items", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            yield "            ";
            if ((is_iterable($context["item"]) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", true, true, false, 25))) {
                // line 26
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 26) == "divider")) {
                    // line 27
                    yield "                    ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Divider");
                    yield "
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 28
$context["item"], "type", [], "any", false, false, false, 28) == "header")) {
                    // line 29
                    yield "                    ";
                    $context["item_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 29));
                    // line 30
                    yield "                    ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Header", ["label" => ($context["item_label"] ?? null), "renderLabelRaw" => "true"]);
                    yield "
                ";
                }
                // line 32
                yield "            ";
            } else {
                // line 33
                yield "                ";
                // line 34
                yield "                ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 34)), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 34), "class" => ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 34) . " dropdown-item-variant-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "variant", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34)), "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "htmlAttributes", [], "any", false, false, false, 34), "renderAsForm" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isRenderedAsForm", [], "any", false, false, false, 34), "url" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 34), "renderLabelRaw" => "true", "showBlankIcons" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "hasAnyActionWithIcon", [], "any", false, false, false, 34)]);
                yield "
            ";
            }
            // line 36
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/action_group.html.twig";
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
        return array (  527 => 37,  521 => 36,  515 => 34,  513 => 33,  510 => 32,  504 => 30,  501 => 29,  499 => 28,  494 => 27,  491 => 26,  488 => 25,  478 => 24,  459 => 23,  398 => 19,  390 => 18,  371 => 17,  304 => 14,  285 => 13,  224 => 10,  216 => 9,  197 => 8,  137 => 38,  123 => 23,  120 => 22,  117 => 21,  102 => 17,  98 => 16,  84 => 13,  81 => 12,  66 => 8,  63 => 7,  49 => 6,  46 => 5,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/action_group.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action_group.html.twig");
    }
}
