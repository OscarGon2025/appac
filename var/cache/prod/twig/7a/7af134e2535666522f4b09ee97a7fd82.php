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

/* emails/user_approved.html.twig */
class __TwigTemplate_ba8a2f45aec85322a23d12c488af6a6d extends Template
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
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Compte approuvé</title>
</head>
<body>
<p>Bonjour ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", false, false, false, 8), "html", null, true);
        yield ",</p>

<p>Votre compte sur notre site a été validé par l'administrateur. Vous pouvez désormais vous connecter.</p>

<p>
    <a href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["login_url"] ?? null), "html", null, true);
        yield "\">Se connecter</a>
</p>

<p>
    Merci et à bientôt ! <br>
    L'équipe APPAC56
</p>
</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/user_approved.html.twig";
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
        return array (  59 => 13,  51 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/user_approved.html.twig", "C:\\wamp64\\www\\appac\\templates\\emails\\user_approved.html.twig");
    }
}
