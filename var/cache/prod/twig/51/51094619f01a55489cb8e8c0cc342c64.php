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

/* @EasyAdmin/components/ActionMenu/ActionList/Item.html.twig */
class __TwigTemplate_bf75f4ef3cb05095f7d3b8ac0c63874f extends Template
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
        $propsNames = [];        if (isset($context['__props']['label'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "label" in template "@EasyAdmin/components/ActionMenu/ActionList/Item.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'label';        
        $context['attributes'] = $context['attributes']->remove('label');        
        if (!isset($context['label'])) {            $context['label'] = null;
        }        
        if (isset($context['__context']['label'])) {
            $context['label'] = null;
        }
        if (isset($context['__props']['renderLabelRaw'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "renderLabelRaw" in template "@EasyAdmin/components/ActionMenu/ActionList/Item.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'renderLabelRaw';        
        $context['attributes'] = $context['attributes']->remove('renderLabelRaw');        
        if (!isset($context['renderLabelRaw'])) {            $context['renderLabelRaw'] = false;
        }        
        if (isset($context['__context']['renderLabelRaw'])) {
            $context['renderLabelRaw'] = false;
        }
        if (isset($context['__props']['icon'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "icon" in template "@EasyAdmin/components/ActionMenu/ActionList/Item.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'icon';        
        $context['attributes'] = $context['attributes']->remove('icon');        
        if (!isset($context['icon'])) {            $context['icon'] = null;
        }        
        if (isset($context['__context']['icon'])) {
            $context['icon'] = null;
        }
        if (isset($context['__props']['url'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "url" in template "@EasyAdmin/components/ActionMenu/ActionList/Item.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'url';        
        $context['attributes'] = $context['attributes']->remove('url');        
        if (!isset($context['url'])) {            $context['url'] = null;
        }        
        if (isset($context['__context']['url'])) {
            $context['url'] = null;
        }
        if (isset($context['__props']['htmlAttributes'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "htmlAttributes" in template "@EasyAdmin/components/ActionMenu/ActionList/Item.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'htmlAttributes';        
        $context['attributes'] = $context['attributes']->remove('htmlAttributes');        
        if (!isset($context['htmlAttributes'])) {            $context['htmlAttributes'] = [];
        }        
        if (isset($context['__context']['htmlAttributes'])) {
            $context['htmlAttributes'] = [];
        }
        if (isset($context['__props']['renderAsForm'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "renderAsForm" in template "@EasyAdmin/components/ActionMenu/ActionList/Item.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'renderAsForm';        
        $context['attributes'] = $context['attributes']->remove('renderAsForm');        
        if (!isset($context['renderAsForm'])) {            $context['renderAsForm'] = false;
        }        
        if (isset($context['__context']['renderAsForm'])) {
            $context['renderAsForm'] = false;
        }
        if (isset($context['__props']['showBlankIcons'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "showBlankIcons" in template "@EasyAdmin/components/ActionMenu/ActionList/Item.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'showBlankIcons';        
        $context['attributes'] = $context['attributes']->remove('showBlankIcons');        
        if (!isset($context['showBlankIcons'])) {            $context['showBlankIcons'] = true;
        }        
        if (isset($context['__context']['showBlankIcons'])) {
            $context['showBlankIcons'] = true;
        }
        $attributesKeys = array_keys($context['attributes']->all());
        foreach ($context as $key => $value) {
            if (in_array($key, $attributesKeys) && !in_array($key, $propsNames)) {
unset($context[$key]);
            }
        }
        // line 10
        yield "
<li>
    ";
        // line 12
        $context["formId"] = (((($tmp = ($context["renderAsForm"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("ea-form-" . Twig\Extension\CoreExtension::random($this->env->getCharset())) . Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (""));
        // line 13
        yield "    ";
        if ((($tmp = ($context["renderAsForm"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "        <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
            yield "\" method=\"POST\" ";
            if ((($tmp = ($context["formId"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formId"] ?? null), "html", null, true);
                yield "\"";
            }
            yield "></form>
    ";
        }
        // line 16
        yield "
    <a ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "defaults", [Twig\Extension\CoreExtension::merge(["class" => "dropdown-item"], ($context["htmlAttributes"] ?? null))], "method", false, false, false, 17), "html", null, true);
        yield "
        ";
        // line 18
        if ((($tmp = ($context["renderAsForm"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "            href=\"#\"
            onclick=\"event.preventDefault(); document.getElementById('";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formId"] ?? null), "html", null, true);
            yield "').submit();\"
        ";
        } else {
            // line 22
            yield "            href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
            yield "\"
        ";
        }
        // line 24
        yield "    >
        ";
        // line 25
        if ((($tmp = ($context["icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "            ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", [ ...CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "nested", ["icon"], "method", false, false, false, 26), "defaults", [["name" => ($context["icon"] ?? null)]], "method", false, false, false, 26)]);
            yield "
        ";
        } elseif ((($tmp =         // line 27
($context["showBlankIcons"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "            ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:blank"]);
            yield "
        ";
        }
        // line 30
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "nested", ["label"], "method", false, false, false, 30), "html", null, true);
            yield ">";
            yield (((($tmp = ($context["renderLabelRaw"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["label"] ?? null)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true)));
            yield "</span>";
        }
        // line 31
        yield "    </a>
</li>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/components/ActionMenu/ActionList/Item.html.twig";
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
        return array (  197 => 31,  188 => 30,  182 => 28,  180 => 27,  175 => 26,  173 => 25,  170 => 24,  164 => 22,  159 => 20,  156 => 19,  154 => 18,  150 => 17,  147 => 16,  135 => 14,  132 => 13,  130 => 12,  126 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/components/ActionMenu/ActionList/Item.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\components\\ActionMenu\\ActionList\\Item.html.twig");
    }
}
