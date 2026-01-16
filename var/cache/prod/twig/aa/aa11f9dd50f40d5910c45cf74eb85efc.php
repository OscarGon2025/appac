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

/* @EasyAdmin/crud/field/text_editor.html.twig */
class __TwigTemplate_8582d29f6887575b3d78174a94e17e12 extends Template
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
        // line 4
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "crud", [], "any", false, false, false, 4), "currentAction", [], "any", false, false, false, 4) == "detail")) {
            // line 5
            yield "    ";
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 5), "html", null, true));
            yield "
";
        } else {
            // line 7
            yield "    ";
            $context["html_id"] = ("ea-text-editor-" . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 7));
            // line 8
            yield "    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["html_id"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 9
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:file-lines"]);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.text_editor.view_content", [], "EasyAdminBundle"), "html", null, true);
            yield "
    </a>

    <div class=\"modal fade\" id=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["html_id"] ?? null), "html", null, true);
            yield "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header d-flex justify-content-between\">
                    <h5 class=\"modal-title\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 16)), "html", null, true);
            yield "</h5>
                    ";
            // line 17
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Button", ["type" => "button", "isInvisible" => true, "icon" => "internal:xmark", "data-bs-dismiss" => "modal", "aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close", [], "EasyAdminBundle")]);
            yield "
                </div>
                <div class=\"modal-body\">
                    ";
            // line 20
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 20), "html", null, true));
            yield "
                </div>
            </div>
        </div>
    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/field/text_editor.html.twig";
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
        return array (  83 => 20,  77 => 17,  73 => 16,  66 => 12,  58 => 9,  53 => 8,  50 => 7,  44 => 5,  42 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/field/text_editor.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\field\\text_editor.html.twig");
    }
}
