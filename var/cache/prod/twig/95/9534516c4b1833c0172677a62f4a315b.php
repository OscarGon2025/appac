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

/* membership/thanks.html.twig */
class __TwigTemplate_748934a5996cb2c905154b0475149cac extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Merci pour votre soutien";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <section class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body p-4 p-md-5\">
                        <h1 class=\"h3 mb-3\">Merci 🙌</h1>
                        <p class=\"text-muted mb-4\">
                            Votre paiement a été traité par HelloAsso. Nous mettons à jour votre adhésion
                            automatiquement dès que la notification (webhook) nous parvient.
                        </p>

                        ";
        // line 17
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "                            <div class=\"alert alert-info d-flex align-items-center gap-2\">
                                <i class=\"bi bi-info-circle\"></i>
                                <div>
                                    Vous pouvez vérifier l’état de votre adhésion depuis votre espace.
                                </div>
                            </div>

                            <div class=\"d-flex flex-wrap gap-2 mt-3\">
                                <a href=\"";
            // line 26
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            yield "\" class=\"btn btn-primary\">
                                    Mon espace
                                </a>
                                <a href=\"";
            // line 29
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\" class=\"btn btn-outline-secondary\">
                                    Retour à l’accueil
                                </a>
                            </div>
                        ";
        } else {
            // line 34
            yield "                            <p class=\"mb-3\">
                                Si vous aviez un compte, connectez-vous pour voir l’état de votre adhésion.
                                Sinon, vous pouvez créer un compte pour la prochaine fois.
                            </p>
                            <div class=\"d-flex flex-wrap gap-2\">
                                <a href=\"";
            // line 39
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-primary\">Se connecter</a>
                                <a href=\"";
            // line 40
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"btn btn-outline-secondary\">Créer un compte</a>
                                <a href=\"";
            // line 41
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\" class=\"btn btn-link\">Accueil</a>
                            </div>
                        ";
        }
        // line 44
        yield "                    </div>
                </div>

                <p class=\"text-muted small mt-3\">
                    Remarque : la mise à jour du statut est indépendante de cette page (c’est le webhook HelloAsso qui fait foi).
                </p>
            </div>
        </div>
    </section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "membership/thanks.html.twig";
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
        return array (  130 => 44,  124 => 41,  120 => 40,  116 => 39,  109 => 34,  101 => 29,  95 => 26,  85 => 18,  83 => 17,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "membership/thanks.html.twig", "C:\\wamp64\\www\\appac\\templates\\membership\\thanks.html.twig");
    }
}
