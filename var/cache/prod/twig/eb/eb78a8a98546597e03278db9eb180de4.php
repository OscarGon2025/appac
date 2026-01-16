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

/* account/event/edit.html.twig */
class __TwigTemplate_9e0246a68bfba12753034fa7e8a2a821 extends Template
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
        yield "Modifier l’événement";
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
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "slug", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "title", [], "any", false, false, false, 10), "html", null, true);
        yield "</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Modifier</li>
            </ol>
        </nav>

        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h1 class=\"h3 mb-0\">Modifier « ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "title", [], "any", false, false, false, 16), "html", null, true);
        yield " »</h1>
            <span class=\"badge text-bg-secondary\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "type", [], "any", false, false, false, 17), "html", null, true);
        yield "</span>
        </div>

        <div class=\"card shadow-sm rounded-3\">
            <div class=\"card-body\">
                ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "

                <div class=\"row g-3\">
                    <div class=\"col-md-8\">
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 26), 'row');
        yield "
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 27), 'row');
        yield "
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 28), 'row');
        yield "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "startAt", [], "any", false, false, false, 31), 'row');
        yield "
                        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "endAt", [], "any", false, false, false, 32), 'row');
        yield "
                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "registrationOpen", [], "any", false, false, false, 33), 'row');
        yield "
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isMembersOnly", [], "any", false, false, false, 34), 'row');
        yield "
                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "maxParticipants", [], "any", false, false, false, 35), 'row');
        yield "
                    </div>
                    <div class=\"col-md-8\">
                        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "locationName", [], "any", false, false, false, 38), 'row');
        yield "
                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lat", [], "any", false, false, false, 41), 'row');
        yield "
                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lng", [], "any", false, false, false, 44), 'row');
        yield "
                    </div>
                </div>

                <div class=\"d-flex gap-2 mt-4\">
                    <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_events_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"bi bi-chevron-left me-1\"></i>Retour
                    </a>
                    <button class=\"btn btn-primary\">
                        <i class=\"bi bi-save me-1\"></i>Enregistrer
                    </button>
                </div>

                ";
        // line 57
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
            </div>
            <div class=\"card-footer small text-muted\">
                Dernière modification : ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "updatedAt", [], "any", false, false, false, 60), "d/m/Y H:i"), "html", null, true);
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
        return "account/event/edit.html.twig";
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
        return array (  185 => 60,  179 => 57,  168 => 49,  160 => 44,  154 => 41,  148 => 38,  142 => 35,  138 => 34,  134 => 33,  130 => 32,  126 => 31,  120 => 28,  116 => 27,  112 => 26,  105 => 22,  97 => 17,  93 => 16,  82 => 10,  78 => 9,  73 => 6,  66 => 5,  55 => 2,  50 => 1,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "account/event/edit.html.twig", "C:\\wamp64\\www\\appac\\templates\\account\\event\\edit.html.twig");
    }
}
