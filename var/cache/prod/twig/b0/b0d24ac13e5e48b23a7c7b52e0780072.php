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
class __TwigTemplate_25cdc1153c66d5a3407a2fb7f5da618b extends Template
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
        // line 1
        yield from $this->unwrap()->yieldBlock('karser_recaptcha3_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_karser_recaptcha3_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  95 => 15,  89 => 12,  84 => 10,  78 => 9,  74 => 8,  65 => 7,  63 => 6,  61 => 5,  56 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@KarserRecaptcha3/Form/karser_recaptcha3_widget.html.twig", "C:\\wamp64\\www\\appac\\vendor\\karser\\karser-recaptcha3-bundle\\Resources\\views\\Form\\karser_recaptcha3_widget.html.twig");
    }
}
