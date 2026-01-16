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

/* @EasyAdmin/flash_messages.html.twig */
class __TwigTemplate_7793cbe55d4a6acb1eeea178d1740e8e extends Template
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
        // line 2
        $context["ea"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea();
        // line 3
        $context["__internal_trans_default_domaind444a0e6281c9ff51a4b0b3518ca397b"] = (((null != ($context["ea"] ?? null))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 3), "translationDomain", [], "any", false, false, false, 3)) : (((array_key_exists("translation_domain", $context)) ? ((((array_key_exists("translation_domain", $context) &&  !(null === $context["translation_domain"]))) ? ($context["translation_domain"]) : ("messages"))) : (""))));
        // line 4
        yield "
";
        // line 5
        $context["flash_messages"] = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 5);
        // line 6
        yield "
";
        // line 7
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["flash_messages"] ?? null)) > 0)) {
            // line 8
            yield "    <div id=\"flash-messages\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["flash_messages"] ?? null));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 10
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 11
                    yield "                ";
                    // line 13
                    yield "                ";
                    $context["translated_message"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], [],                     // line 3
($context["__internal_trans_default_domaind444a0e6281c9ff51a4b0b3518ca397b"] ?? null));
                    // line 14
                    yield "                ";
                    $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
                    $preRendered = $_v0->preRender("ea:Alert", Twig\Extension\CoreExtension::toArray(["variant" => $context["label"], "withDismissButton" => true]));
                    if (null !== $preRendered) {
                        yield $preRendered; 
                    } else {
                        $preRenderEvent = $_v0->startEmbedComponent("ea:Alert", Twig\Extension\CoreExtension::toArray(["variant" => $context["label"], "withDismissButton" => true]), $context, "@EasyAdmin/flash_messages.html.twig", 15523601871);
                        $embeddedContext = $preRenderEvent->getVariables();
                        $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                        $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                        $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 15523601871);
                        $this->load("@EasyAdmin/flash_messages.html.twig", 14, "15523601871")->display($embeddedContext, $embeddedBlocks);
                        $_v0->finishEmbedComponent();
                    }
                    // line 17
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/flash_messages.html.twig";
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
        return array (  101 => 19,  95 => 18,  89 => 17,  74 => 14,  72 => 3,  70 => 13,  68 => 11,  63 => 10,  59 => 9,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/flash_messages.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\flash_messages.html.twig");
    }
}


/* @EasyAdmin/flash_messages.html.twig */
class __TwigTemplate_7793cbe55d4a6acb1eeea178d1740e8e___15523601871 extends Template
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
        // line 14
        return $this->load(($context["__parent__"] ?? null), 14);
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

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield ($context["translated_message"] ?? null);
        yield "
                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/flash_messages.html.twig";
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
        return array (  181 => 15,  162 => 14,  101 => 19,  95 => 18,  89 => 17,  74 => 14,  72 => 3,  70 => 13,  68 => 11,  63 => 10,  59 => 9,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/flash_messages.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\flash_messages.html.twig");
    }
}
