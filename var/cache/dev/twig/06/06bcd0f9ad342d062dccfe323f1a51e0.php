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
class __TwigTemplate_ca012dc50b2cf8b7922e495ee4e32613 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["recaptcha_site_key"] ?? null), "html", null, true);
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
        return array (  63 => 29,  54 => 22,  51 => 11,  48 => 7,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "includes/recaptacha.html.twig", "C:\\wamp64\\www\\appac\\templates\\includes\\recaptacha.html.twig");
    }
}
