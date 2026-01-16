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

/* @KarserRecaptcha3/Form/karser_recaptcha3_widget.html.twig */
class __TwigTemplate_6501b637551091c775a5bed3c299b0d5 extends Template
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
            'karser_recaptcha3_widget' => [$this, 'block_karser_recaptcha3_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KarserRecaptcha3/Form/karser_recaptcha3_widget.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('karser_recaptcha3_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_karser_recaptcha3_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "karser_recaptcha3_widget"));

        // line 2
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "hidden")) : ("hidden"));
        // line 3
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "

    ";
        // line 5
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 5), "enabled", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            $context["validJsId"] = Twig\Extension\CoreExtension::replace(($context["id"] ?? null), ["-" => "_"]);
            // line 7
            yield "        <script type=\"text/javascript\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 7), "script_nonce_csp", [], "any", true, true, false, 7)) {
                yield "nonce=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 7), "script_nonce_csp", [], "any", false, false, false, 7), "html", null, true);
                yield "\"";
            }
            yield ">
            var recaptchaCallback_";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validJsId"] ?? null), "html", null, true);
            yield " = function() {
                grecaptcha.execute('";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 9), "site_key", [], "any", false, false, false, 9), "html", null, true);
            yield "', {action: '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 9), "action_name", [], "any", false, false, false, 9), "html", null, true);
            yield "'}).then(function(token) {
                    document.getElementById('";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "').value = token;
                });
                setTimeout(recaptchaCallback_";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validJsId"] ?? null), "html", null, true);
            yield ", 100000);
            };
        </script>
        <script type=\"text/javascript\" src=\"https://";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 15), "host", [], "any", false, false, false, 15), "html", null, true);
            yield "/recaptcha/api.js?render=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 15), "site_key", [], "any", false, false, false, 15), "html", null, true);
            yield "&hl=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 15), "locale", [], "any", false, false, false, 15), "html", null, true);
            yield "&onload=recaptchaCallback_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validJsId"] ?? null), "html", null, true);
            yield "\" async defer";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 15), "script_nonce_csp", [], "any", true, true, false, 15)) {
                yield " nonce=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 15), "script_nonce_csp", [], "any", false, false, false, 15), "html", null, true);
                yield "\"";
            }
            yield "></script>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@KarserRecaptcha3/Form/karser_recaptcha3_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  104 => 15,  98 => 12,  93 => 10,  87 => 9,  83 => 8,  74 => 7,  72 => 6,  70 => 5,  65 => 3,  63 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@KarserRecaptcha3/Form/karser_recaptcha3_widget.html.twig", "C:\\wamp64\\www\\appac\\vendor\\karser\\karser-recaptcha3-bundle\\Resources\\views\\Form\\karser_recaptcha3_widget.html.twig");
    }
}
