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

/* @EasyAdmin/crud/field/country.html.twig */
class __TwigTemplate_d36c93b748677bfb19f96eddc14cb3f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/country.html.twig"));

        // line 6
        $context["show_flag"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 6), "get", ["showFlag"], "method", false, false, false, 6);
        // line 7
        $context["show_name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 7), "get", ["showName"], "method", false, false, false, 7);
        // line 8
        yield "
";
        // line 9
        if ((($context["show_flag"] ?? null) &&  !($context["show_name"] ?? null))) {
            // line 10
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["flag_code"] => $context["country_name"]) {
                // line 11
                yield "        ";
                if ((($tmp =  !(null === $context["flag_code"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 12
                    yield "            ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Flag", ["countryCode" => $context["flag_code"], "height" => "17"]);
                    yield "
        ";
                }
                // line 14
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['flag_code'], $context['country_name'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } elseif ((        // line 15
($context["show_name"] ?? null) &&  !($context["show_flag"] ?? null))) {
            // line 16
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 16), ", "), "html", null, true);
            yield "
";
        } else {
            // line 18
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["flag_code"] => $context["country_name"]) {
                // line 19
                yield "        <span>";
                // line 20
                if ((($tmp = ($context["show_flag"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 21
                    if ((($tmp =  !(null === $context["flag_code"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 22
                        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Flag", ["countryCode" => $context["flag_code"], "height" => "17"]);
                    }
                }
                // line 26
                if ((($tmp = ($context["show_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 27
                    yield (((true &&  !(null === $context["country_name"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["country_name"], "html", null, true)) : (""));
                }
                // line 29
                yield "</span>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['flag_code'], $context['country_name'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/field/country.html.twig";
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
        return array (  102 => 29,  99 => 27,  97 => 26,  93 => 22,  91 => 21,  89 => 20,  87 => 19,  82 => 18,  76 => 16,  74 => 15,  68 => 14,  62 => 12,  59 => 11,  54 => 10,  52 => 9,  49 => 8,  47 => 7,  45 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/field/country.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\field\\country.html.twig");
    }
}
