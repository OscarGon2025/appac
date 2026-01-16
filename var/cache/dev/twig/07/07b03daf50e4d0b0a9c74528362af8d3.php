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

/* @EasyAdmin/crud/includes/_batch_action_modal.html.twig */
class __TwigTemplate_5186279b780cbbc5a6ae34251307cce3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/includes/_batch_action_modal.html.twig"));

        // line 1
        yield "<div id=\"modal-batch-action\" class=\"modal fade\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4 id=\"batch-action-confirmation-title\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("batch_action_modal.title", [], "EasyAdminBundle"), "html", null, true);
        yield "</h4>
                <p>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("batch_action_modal.content", [], "EasyAdminBundle"), "html", null, true);
        yield "</p>
            </div>
            <div class=\"modal-footer\">
                ";
        // line 9
        $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v0->preRender("ea:Button", Twig\Extension\CoreExtension::toArray(["type" => "button", "data-bs-dismiss" => "modal"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v0->startEmbedComponent("ea:Button", Twig\Extension\CoreExtension::toArray(["type" => "button", "data-bs-dismiss" => "modal"]), $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", 23930638861);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 23930638861);
            $this->load("@EasyAdmin/crud/includes/_batch_action_modal.html.twig", 9, "23930638861")->display($embeddedContext, $embeddedBlocks);
            $_v0->finishEmbedComponent();
        }
        // line 12
        yield "                ";
        $_v1 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v1->preRender("ea:Button", Twig\Extension\CoreExtension::toArray(["type" => "button", "variant" => "danger", "icon" => "internal:check", "data-bs-dismiss" => "modal", "id" => "modal-batch-action-button"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v1->startEmbedComponent("ea:Button", Twig\Extension\CoreExtension::toArray(["type" => "button", "variant" => "danger", "icon" => "internal:check", "data-bs-dismiss" => "modal", "id" => "modal-batch-action-button"]), $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", 29254269311);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 29254269311);
            $this->load("@EasyAdmin/crud/includes/_batch_action_modal.html.twig", 12, "29254269311")->display($embeddedContext, $embeddedBlocks);
            $_v1->finishEmbedComponent();
        }
        // line 15
        yield "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/includes/_batch_action_modal.html.twig";
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
        return array (  90 => 15,  75 => 12,  61 => 9,  55 => 6,  51 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\includes\\_batch_action_modal.html.twig");
    }
}


/* @EasyAdmin/crud/includes/_batch_action_modal.html.twig */
class __TwigTemplate_5186279b780cbbc5a6ae34251307cce3___23930638861 extends Template
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
        // line 9
        return $this->load(($context["__parent__"] ?? null), 9);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/includes/_batch_action_modal.html.twig"));

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

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.cancel", [], "EasyAdminBundle"), "html", null, true);
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
        return "@EasyAdmin/crud/includes/_batch_action_modal.html.twig";
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
        return array (  187 => 10,  156 => 9,  90 => 15,  75 => 12,  61 => 9,  55 => 6,  51 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\includes\\_batch_action_modal.html.twig");
    }
}


/* @EasyAdmin/crud/includes/_batch_action_modal.html.twig */
class __TwigTemplate_5186279b780cbbc5a6ae34251307cce3___29254269311 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/includes/_batch_action_modal.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("batch_action_modal.action", [], "EasyAdminBundle"), "html", null, true);
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
        return "@EasyAdmin/crud/includes/_batch_action_modal.html.twig";
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
        return array (  291 => 13,  260 => 12,  187 => 10,  156 => 9,  90 => 15,  75 => 12,  61 => 9,  55 => 6,  51 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\includes\\_batch_action_modal.html.twig");
    }
}
