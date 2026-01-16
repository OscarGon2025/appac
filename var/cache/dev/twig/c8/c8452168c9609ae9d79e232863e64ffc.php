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

/* @EasyAdmin/crud/field/boolean.html.twig */
class __TwigTemplate_b27321bc53b883c3634e04c10c88b695 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/boolean.html.twig"));

        // line 4
        $context["ea"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea();
        // line 6
        yield "
";
        // line 7
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 7), "currentAction", [], "any", false, false, false, 7) == "detail") ||  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 7), "get", ["renderAsSwitch"], "method", false, false, false, 7))) {
            // line 8
            yield "    ";
            $context["badge_is_hidden"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 8), "currentAction", [], "any", false, false, false, 8) == "index") && (((CoreExtension::getAttribute($this->env, $this->source,             // line 10
($context["field"] ?? null), "value", [], "any", false, false, false, 10) == true) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 10), "get", ["hideValueWhenTrue"], "method", false, false, false, 10) == true)) || ((CoreExtension::getAttribute($this->env, $this->source,             // line 12
($context["field"] ?? null), "value", [], "any", false, false, false, 12) == false) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 12), "get", ["hideValueWhenFalse"], "method", false, false, false, 12) == true))));
            // line 14
            yield "
    ";
            // line 15
            if ((($tmp =  !($context["badge_is_hidden"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 16
                yield "        <span class=\"badge ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 16) == true)) ? ("badge-boolean-true") : ("badge-boolean-false"));
                yield "\">
            ";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 17) == true)) ? ("label.true") : ("label.false")), [], "EasyAdminBundle"), "html", null, true);
                yield "
        </span>
    ";
            }
        } else {
            // line 21
            yield "    <div class=\"form-check form-switch\">
        <input type=\"checkbox\" class=\"form-check-input\" id=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 22), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 22) == true)) ? ("checked") : (""));
            yield "
            data-toggle-url=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 23), "get", ["toggleUrl"], "method", false, false, false, 23), "html", null, true);
            yield "\"
            ";
            // line 24
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "formTypeOption", ["disabled"], "method", false, false, false, 24) == true)) ? ("disabled") : (""));
            yield " autocomplete=\"off\">
        <label class=\"form-check-label\" for=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 25), "html", null, true);
            yield "\"></label>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/field/boolean.html.twig";
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
        return array (  91 => 25,  87 => 24,  83 => 23,  77 => 22,  74 => 21,  67 => 17,  62 => 16,  60 => 15,  57 => 14,  55 => 12,  54 => 10,  52 => 8,  50 => 7,  47 => 6,  45 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/field/boolean.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\field\\boolean.html.twig");
    }
}
