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
class __TwigTemplate_7514b2b6e92d38d591e6ca9e7069dff3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action_group.html.twig"));

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
            $preRendered = $_v0->preRender("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "variant", [], "any", false, false, false, 8), "htmlElement" => CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "cssClass", [], "any", false, false, false, 8) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "addedCssClass", [], "any", false, false, false, 8)), "href" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "isLink", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "linkUrl", [], "any", false, false, false, 8)) : (null)), "action" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "isForm", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "linkUrl", [], "any", false, false, false, 8)) : (null)), "method" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "isForm", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("POST") : (null)), "icon" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "icon", [], "any", false, false, false, 8), "htmlAttributes" => Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlAttributes", [], "any", false, false, false, 8), ["data-action-group-name-main-action" => true, "onclick" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "isButton", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("window.location='" . CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "linkUrl", [], "any", false, false, false, 8)) . "'")) : (null))]), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !(null === ($context["v"] ?? null)); })]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v0->startEmbedComponent("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "variant", [], "any", false, false, false, 8), "htmlElement" => CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "cssClass", [], "any", false, false, false, 8) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "addedCssClass", [], "any", false, false, false, 8)), "href" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "isLink", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "linkUrl", [], "any", false, false, false, 8)) : (null)), "action" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "isForm", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "linkUrl", [], "any", false, false, false, 8)) : (null)), "method" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "isForm", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("POST") : (null)), "icon" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "icon", [], "any", false, false, false, 8), "htmlAttributes" => Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlAttributes", [], "any", false, false, false, 8), ["data-action-group-name-main-action" => true, "onclick" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "htmlElement", [], "any", false, false, false, 8), "isButton", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("window.location='" . CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "linkUrl", [], "any", false, false, false, 8)) . "'")) : (null))]), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !(null === ($context["v"] ?? null)); })]), $context, "@EasyAdmin/crud/action_group.html.twig", 7386223461);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 7386223461);
                $this->load("@EasyAdmin/crud/action_group.html.twig", 8, "7386223461")->display($embeddedContext, $embeddedBlocks);
                $_v0->finishEmbedComponent();
            }
            // line 11
            yield "
        ";
            // line 12
            $_v1 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
            $preRendered = $_v1->preRender("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "variant", [], "any", false, false, false, 12), "htmlElement" => "button", "type" => "button", "class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "cssClass", [], "any", false, false, false, 12) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "addedCssClass", [], "any", false, false, false, 12)) . " dropdown-toggle dropdown-toggle-split"), "htmlAttributes" => ["data-bs-toggle" => "dropdown", "aria-expanded" => "false"], "label:class" => "visually-hidden"]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v1->startEmbedComponent("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "variant", [], "any", false, false, false, 12), "htmlElement" => "button", "type" => "button", "class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "cssClass", [], "any", false, false, false, 12) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "addedCssClass", [], "any", false, false, false, 12)) . " dropdown-toggle dropdown-toggle-split"), "htmlAttributes" => ["data-bs-toggle" => "dropdown", "aria-expanded" => "false"], "label:class" => "visually-hidden"]), $context, "@EasyAdmin/crud/action_group.html.twig", 33275517451);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 33275517451);
                $this->load("@EasyAdmin/crud/action_group.html.twig", 12, "33275517451")->display($embeddedContext, $embeddedBlocks);
                $_v1->finishEmbedComponent();
            }
            // line 15
            yield "    ";
        } else {
            yield " ";
            // line 16
            yield "        ";
            $_v2 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
            $preRendered = $_v2->preRender("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "variant", [], "any", false, false, false, 16), "class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "cssClass", [], "any", false, false, false, 16) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "addedCssClass", [], "any", false, false, false, 16)) . " dropdown-toggle"), "htmlElement" => "button", "type" => "button", "icon" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "icon", [], "any", false, false, false, 16), "htmlAttributes" => ["data-bs-toggle" => "dropdown", "aria-expanded" => "false"]]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v2->startEmbedComponent("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "variant", [], "any", false, false, false, 16), "class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "cssClass", [], "any", false, false, false, 16) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "addedCssClass", [], "any", false, false, false, 16)) . " dropdown-toggle"), "htmlElement" => "button", "type" => "button", "icon" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "icon", [], "any", false, false, false, 16), "htmlAttributes" => ["data-bs-toggle" => "dropdown", "aria-expanded" => "false"]]), $context, "@EasyAdmin/crud/action_group.html.twig", 32419136241);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 32419136241);
                $this->load("@EasyAdmin/crud/action_group.html.twig", 16, "32419136241")->display($embeddedContext, $embeddedBlocks);
                $_v2->finishEmbedComponent();
            }
            // line 19
            yield "    ";
        }
        // line 20
        yield "
    ";
        // line 21
        $_v3 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v3->preRender("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-menu"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v3->startEmbedComponent("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-menu"]), $context, "@EasyAdmin/crud/action_group.html.twig", 19536556721);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 19536556721);
            $this->load("@EasyAdmin/crud/action_group.html.twig", 21, "19536556721")->display($embeddedContext, $embeddedBlocks);
            $_v3->finishEmbedComponent();
        }
        // line 35
        yield "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  140 => 35,  126 => 21,  123 => 20,  120 => 19,  105 => 16,  101 => 15,  87 => 12,  84 => 11,  69 => 8,  66 => 7,  52 => 6,  49 => 5,  47 => 4,  45 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/action_group.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action_group.html.twig");
    }
}


/* @EasyAdmin/crud/action_group.html.twig */
class __TwigTemplate_7514b2b6e92d38d591e6ca9e7069dff3___7386223461 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action_group.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "label", [], "any", false, false, false, 9) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["main_action"] ?? null), "label", [], "any", false, false, false, 9));
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  234 => 9,  203 => 8,  140 => 35,  126 => 21,  123 => 20,  120 => 19,  105 => 16,  101 => 15,  87 => 12,  84 => 11,  69 => 8,  66 => 7,  52 => 6,  49 => 5,  47 => 4,  45 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/action_group.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action_group.html.twig");
    }
}


/* @EasyAdmin/crud/action_group.html.twig */
class __TwigTemplate_7514b2b6e92d38d591e6ca9e7069dff3___33275517451 extends Template
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
        // line 12
        return $this->load(($context["__parent__"] ?? null), 12);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action_group.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.toggle_dropdown"), "html", null, true);
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
        return array (  338 => 13,  307 => 12,  234 => 9,  203 => 8,  140 => 35,  126 => 21,  123 => 20,  120 => 19,  105 => 16,  101 => 15,  87 => 12,  84 => 11,  69 => 8,  66 => 7,  52 => 6,  49 => 5,  47 => 4,  45 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/action_group.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action_group.html.twig");
    }
}


/* @EasyAdmin/crud/action_group.html.twig */
class __TwigTemplate_7514b2b6e92d38d591e6ca9e7069dff3___32419136241 extends Template
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
        // line 16
        return $this->load(($context["__parent__"] ?? null), 16);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action_group.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "label", [], "any", false, false, false, 17) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "label", [], "any", false, false, false, 17));
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  442 => 17,  411 => 16,  338 => 13,  307 => 12,  234 => 9,  203 => 8,  140 => 35,  126 => 21,  123 => 20,  120 => 19,  105 => 16,  101 => 15,  87 => 12,  84 => 11,  69 => 8,  66 => 7,  52 => 6,  49 => 5,  47 => 4,  45 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/action_group.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action_group.html.twig");
    }
}


/* @EasyAdmin/crud/action_group.html.twig */
class __TwigTemplate_7514b2b6e92d38d591e6ca9e7069dff3___19536556721 extends Template
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
        // line 21
        return $this->load(($context["__parent__"] ?? null), 21);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action_group.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "items", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            yield "            ";
            if ((is_iterable($context["item"]) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", true, true, false, 23))) {
                // line 24
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 24) == "divider")) {
                    // line 25
                    yield "                    ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Divider");
                    yield "
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 26
$context["item"], "type", [], "any", false, false, false, 26) == "header")) {
                    // line 27
                    yield "                    ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Header", ["label" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 27), "renderLabelRaw" => "true"]);
                    yield "
                ";
                }
                // line 29
                yield "            ";
            } else {
                // line 30
                yield "                ";
                // line 31
                yield "                ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["label" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 31), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 31), "class" => ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 31) . " dropdown-item-variant-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "variant", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31)), "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "htmlAttributes", [], "any", false, false, false, 31), "renderAsForm" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isRenderedAsForm", [], "any", false, false, false, 31), "url" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 31), "renderLabelRaw" => "true", "showBlankIcons" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "hasAnyActionWithIcon", [], "any", false, false, false, 31)]);
                yield "
            ";
            }
            // line 33
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  595 => 34,  589 => 33,  583 => 31,  581 => 30,  578 => 29,  572 => 27,  570 => 26,  565 => 25,  562 => 24,  559 => 23,  546 => 22,  515 => 21,  442 => 17,  411 => 16,  338 => 13,  307 => 12,  234 => 9,  203 => 8,  140 => 35,  126 => 21,  123 => 20,  120 => 19,  105 => 16,  101 => 15,  87 => 12,  84 => 11,  69 => 8,  66 => 7,  52 => 6,  49 => 5,  47 => 4,  45 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/action_group.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action_group.html.twig");
    }
}
