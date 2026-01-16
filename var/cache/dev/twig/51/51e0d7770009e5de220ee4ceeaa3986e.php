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

/* @EasyAdmin/crud/filters.html.twig */
class __TwigTemplate_585cf250cba89f069e756edf7dd86dcf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/filters.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["filters_form"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "crud", [], "any", false, false, false, 3), "formThemes", [], "any", false, false, false, 3), false);
        // line 4
        yield "
";
        // line 5
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["filters_form"] ?? null), 'form_start', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["filters_form"] ?? null), "vars", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6), "data-ea-filters-form-id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["filters_form"] ?? null), "vars", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7)]]);
        // line 8
        yield "
    ";
        // line 11
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->flattenArray(($context["form_action_query_string_as_array"] ?? null)));
        foreach ($context['_seq'] as $context["paramName"] => $context["paramValue"]) {
            // line 12
            yield "        <input type=\"hidden\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["paramName"], "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["paramValue"], "html", null, true);
            yield "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['paramName'], $context['paramValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "
    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["filters_form"] ?? null), 'widget');
        yield "
";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["filters_form"] ?? null), 'form_end');
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
        return "@EasyAdmin/crud/filters.html.twig";
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
        return array (  80 => 16,  76 => 15,  73 => 14,  62 => 12,  57 => 11,  54 => 8,  52 => 7,  51 => 6,  50 => 5,  47 => 4,  45 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/filters.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\filters.html.twig");
    }
}
