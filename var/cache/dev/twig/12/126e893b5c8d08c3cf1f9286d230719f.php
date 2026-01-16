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

/* @EasyAdmin/includes/_encore_link_tags.html.twig */
class __TwigTemplate_bae05d288e2bec8da4368122fb0da392 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/includes/_encore_link_tags.html.twig"));

        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["assets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["encore_asset"]) {
            // line 3
            yield "    ";
            // line 4
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('encore_entry_link_tags')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["encore_asset"], "value", [], "any", false, false, false, 4), CoreExtension::getAttribute($this->env, $this->source, $context["encore_asset"], "webpackPackageName", [], "any", false, false, false, 4), CoreExtension::getAttribute($this->env, $this->source, $context["encore_asset"], "webpackEntrypointName", [], "any", false, false, false, 4), CoreExtension::getAttribute($this->env, $this->source, $context["encore_asset"], "htmlAttributes", [], "any", false, false, false, 4)), "html", null, true);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['encore_asset'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/includes/_encore_link_tags.html.twig";
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
        return array (  51 => 4,  49 => 3,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/includes/_encore_link_tags.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\includes\\_encore_link_tags.html.twig");
    }
}
