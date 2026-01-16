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

/* @EasyAdmin/crud/includes/_filters_modal.html.twig */
class __TwigTemplate_c6fc417b4ac58242f328c8f01761cc00 extends Template
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
        yield "<div id=\"modal-filters\" class=\"modal fade\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header justify-content-between\">
                ";
        // line 5
        $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v0->preRender("ea:Button", Twig\Extension\CoreExtension::toArray(["type" => "button", "size" => "sm", "icon" => "internal:xmark", "data-bs-dismiss" => "modal", "id" => "modal-clear-button", "formtarget" => "_self"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v0->startEmbedComponent("ea:Button", Twig\Extension\CoreExtension::toArray(["type" => "button", "size" => "sm", "icon" => "internal:xmark", "data-bs-dismiss" => "modal", "id" => "modal-clear-button", "formtarget" => "_self"]), $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig", 9980960041);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 9980960041);
            $this->load("@EasyAdmin/crud/includes/_filters_modal.html.twig", 5, "9980960041")->display($embeddedContext, $embeddedBlocks);
            $_v0->finishEmbedComponent();
        }
        // line 8
        yield "                <h5 class=\"modal-title\">
                    ";
        // line 9
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:filter"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", [], "EasyAdminBundle"), "html", null, true);
        yield "
                </h5>
                ";
        // line 11
        $_v1 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v1->preRender("ea:Button", Twig\Extension\CoreExtension::toArray(["type" => "button", "variant" => "primary", "size" => "sm", "data-bs-dismiss" => "modal", "class" => "btn btn-sm btn-primary", "id" => "modal-apply-button", "formtarget" => "_self", "icon" => "internal:check"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v1->startEmbedComponent("ea:Button", Twig\Extension\CoreExtension::toArray(["type" => "button", "variant" => "primary", "size" => "sm", "data-bs-dismiss" => "modal", "class" => "btn btn-sm btn-primary", "id" => "modal-apply-button", "formtarget" => "_self", "icon" => "internal:check"]), $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig", 2242683421);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 2242683421);
            $this->load("@EasyAdmin/crud/includes/_filters_modal.html.twig", 11, "2242683421")->display($embeddedContext, $embeddedBlocks);
            $_v1->finishEmbedComponent();
        }
        // line 14
        yield "            </div>
            <div class=\"modal-body p-0\">
                ";
        // line 17
        yield "                ";
        // line 18
        yield "            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/includes/_filters_modal.html.twig";
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
        return array (  92 => 18,  90 => 17,  86 => 14,  72 => 11,  65 => 9,  62 => 8,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/includes/_filters_modal.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\includes\\_filters_modal.html.twig");
    }
}


/* @EasyAdmin/crud/includes/_filters_modal.html.twig */
class __TwigTemplate_c6fc417b4ac58242f328c8f01761cc00___9980960041 extends Template
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
        // line 5
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.button.clear", [], "EasyAdminBundle"), "html", null, true);
        yield "
                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/includes/_filters_modal.html.twig";
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
        return array (  174 => 6,  155 => 5,  92 => 18,  90 => 17,  86 => 14,  72 => 11,  65 => 9,  62 => 8,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/includes/_filters_modal.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\includes\\_filters_modal.html.twig");
    }
}


/* @EasyAdmin/crud/includes/_filters_modal.html.twig */
class __TwigTemplate_c6fc417b4ac58242f328c8f01761cc00___2242683421 extends Template
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
        // line 11
        return $this->load(($context["__parent__"] ?? null), 11);
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

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.button.apply", [], "EasyAdminBundle"), "html", null, true);
        yield "
                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/includes/_filters_modal.html.twig";
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
        return array (  260 => 12,  241 => 11,  174 => 6,  155 => 5,  92 => 18,  90 => 17,  86 => 14,  72 => 11,  65 => 9,  62 => 8,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/includes/_filters_modal.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\includes\\_filters_modal.html.twig");
    }
}
