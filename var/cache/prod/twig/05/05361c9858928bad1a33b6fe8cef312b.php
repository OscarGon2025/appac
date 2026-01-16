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

/* account/event/new.html.twig */
class __TwigTemplate_eafc329bd529a143728022021682a675 extends Template
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
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["bootstrap_5_layout.html.twig"], true);
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Créer un événement";
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
        yield "    <div class=\"container py-4\">
        <nav aria-label=\"breadcrumb\" class=\"mb-3\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_events_index");
        yield "\">Mes événements</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Nouveau</li>
            </ol>
        </nav>

        <h1 class=\"h3 mb-4\">Créer un événement</h1>

        <div class=\"card shadow-sm rounded-3\">
            <div class=\"card-body\">
                ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "

                <div class=\"row g-3\">
                    <div class=\"col-md-8\">
                        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 22), 'row');
        yield "
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 23), 'row');
        yield "
                        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 24), 'row');
        yield "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "startAt", [], "any", false, false, false, 27), 'row');
        yield "
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "endAt", [], "any", false, false, false, 28), 'row');
        yield "
                        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "registrationOpen", [], "any", false, false, false, 29), 'row');
        yield "
                        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isMembersOnly", [], "any", false, false, false, 30), 'row');
        yield "
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "maxParticipants", [], "any", false, false, false, 31), 'row');
        yield "
                    </div>
                    <div class=\"col-md-8\">
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "locationName", [], "any", false, false, false, 34), 'row');
        yield "
                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lat", [], "any", false, false, false, 37), 'row');
        yield "
                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lng", [], "any", false, false, false, 40), 'row');
        yield "
                    </div>
                </div>

                <div class=\"d-flex gap-2 mt-4\">
                    <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_events_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"bi bi-chevron-left me-1\"></i>Retour
                    </a>
                    <button class=\"btn btn-primary\">
                        <i class=\"bi bi-check2-circle me-1\"></i>Créer
                    </button>
                </div>

                ";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
            </div>
        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "account/event/new.html.twig";
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
        return array (  164 => 53,  153 => 45,  145 => 40,  139 => 37,  133 => 34,  127 => 31,  123 => 30,  119 => 29,  115 => 28,  111 => 27,  105 => 24,  101 => 23,  97 => 22,  90 => 18,  78 => 9,  73 => 6,  66 => 5,  55 => 2,  50 => 1,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "account/event/new.html.twig", "C:\\wamp64\\www\\appac\\templates\\account\\event\\new.html.twig");
    }
}
