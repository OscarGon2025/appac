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

/* includes/recaptacha.html.twig */
class __TwigTemplate_72e65cbf8dc4d437b2c6a6b130396f6c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/recaptacha.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/recaptacha.html.twig"));

        // line 1
        yield "
";
        // line 7
        yield "
";
        // line 11
        yield "
";
        // line 22
        yield "

<script>
    grecaptcha.ready(function() {
        document.querySelectorAll('form').forEach(function(form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                grecaptcha.execute('";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "', {action: 'submit'}).then(function(token) {
                    var recaptchaInput = document.createElement('input');
                    recaptchaInput.type = 'hidden';
                    recaptchaInput.name = 'registration_form[captcha]';
                    recaptchaInput.value = token;
                    form.appendChild(recaptchaInput);
                    form.submit();
                });
            });
        });
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "includes/recaptacha.html.twig";
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
        return array (  66 => 29,  57 => 22,  54 => 11,  51 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{#{% if recaptcha_site_key is defined %}#}
{#    <script src=\"https://www.google.com/recaptcha/api.js?render={{ recaptcha_site_key }}\"></script>#}
{#    <script>#}
{#        document.addEventListener('DOMContentLoaded', function() {#}
{#            const forms = document.querySelectorAll('form[data-recaptcha=\"true\"]');#}

{#            forms.forEach(function(form) {#}
{#                const captchaInput = form.querySelector('input[name\$=\"[captcha]\"]');#}
{#                if (!captchaInput) return;#}

{#                grecaptcha.ready(function() {#}
{#                    const action = form.dataset.recaptchaAction || 'default';#}
{#                    grecaptcha.execute('{{ recaptcha_site_key }}', {action: action}).then(function(token) {#}
{#                        captchaInput.value = token;#}
{#                    });#}
{#                });#}
{#            });#}
{#        });#}
{#    </script>#}
{#{% endif %}#}


<script>
    grecaptcha.ready(function() {
        document.querySelectorAll('form').forEach(function(form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                grecaptcha.execute('{{ recaptcha_site_key }}', {action: 'submit'}).then(function(token) {
                    var recaptchaInput = document.createElement('input');
                    recaptchaInput.type = 'hidden';
                    recaptchaInput.name = 'registration_form[captcha]';
                    recaptchaInput.value = token;
                    form.appendChild(recaptchaInput);
                    form.submit();
                });
            });
        });
    });
</script>
", "includes/recaptacha.html.twig", "C:\\wamp64\\www\\appac\\templates\\includes\\recaptacha.html.twig");
    }
}
