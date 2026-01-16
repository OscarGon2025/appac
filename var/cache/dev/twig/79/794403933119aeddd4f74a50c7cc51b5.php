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

/* @Turbo/components/Frame.html.twig */
class __TwigTemplate_c3d9db7fb56df3119bf86829d7e5999d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Turbo/components/Frame.html.twig"));

        // line 1
        $propsNames = [];        if (isset($context['__props']['id'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "id" in template "@Turbo/components/Frame.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'id';        
        $context['attributes'] = $context['attributes']->remove('id');        
        if (!isset($context['id'])) {            throw new \Twig\Error\RuntimeError("id should be defined for component @Turbo/components/Frame.html.twig.");            
        }        
        $attributesKeys = array_keys($context['attributes']->all());
        foreach ($context as $key => $value) {
            if (in_array($key, $attributesKeys) && !in_array($key, $propsNames)) {
unset($context[$key]);
            }
        }
        // line 3
        yield "<turbo-frame id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["attributes"] ?? null), "html", null, true);
        yield ">";
        // line 4
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 5
        yield "</turbo-frame>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Turbo/components/Frame.html.twig";
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
        return array (  78 => 4,  69 => 5,  67 => 4,  61 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Turbo/components/Frame.html.twig", "C:\\wamp64\\www\\appac\\vendor\\symfony\\ux-turbo\\templates\\components\\Frame.html.twig");
    }
}
