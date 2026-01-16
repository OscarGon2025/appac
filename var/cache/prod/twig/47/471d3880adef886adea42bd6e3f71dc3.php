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
class __TwigTemplate_911329cb26a4a7f5527b07eebb0bcd65 extends Template
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
        return array (  60 => 29,  51 => 22,  48 => 11,  45 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "includes/recaptacha.html.twig", "C:\\wamp64\\www\\appac\\templates\\includes\\recaptacha.html.twig");
    }
}
