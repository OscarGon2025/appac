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

/* admin/fields/archive_image_preview.html.twig */
class __TwigTemplate_13720d43e0dd55351d4660d776b769be extends Template
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
        // line 2
        yield "
<div class=\"archive-image-field\">
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "form", [], "any", false, false, false, 4), 'widget');
        yield "

    ";
        // line 7
        yield "    <div style=\"margin-top: 10px;\">
        <img id=\"archiveImagePreview\"
             src=\"";
        // line 9
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "data", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("/uploads/archives/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "data", [], "any", false, false, false, 9), "fileName", [], "any", false, false, false, 9)), "html", null, true)) : (""));
        yield "\"
             style=\"max-height: 80px; border-radius: 4px; display: ";
        // line 10
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "data", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("block") : ("none"));
        yield ";\"
             alt=\"Aperçu de l'image\">
    </div>
</div>

<script>
    (function() {
        const select = document.getElementById('";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "form", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), "html", null, true);
        yield "');
        const preview = document.getElementById('archiveImagePreview');
        if (!select || !preview) return;

        select.addEventListener('change', function() {
            const selectedOption = select.selectedOptions[0];
            if (!selectedOption || !selectedOption.value) {
                preview.style.display = 'none';
                preview.src = '';
                return;
            }

            // L'URL de l'image dans /uploads/archives/<fileName>
            const fileName = selectedOption.dataset.filename;
            if (fileName) {
                preview.src = '/uploads/archives/' + fileName;
                preview.style.display = 'block';
            } else {
                preview.style.display = 'none';
            }
        });
    })();
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/fields/archive_image_preview.html.twig";
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
        return array (  69 => 17,  59 => 10,  55 => 9,  51 => 7,  46 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/fields/archive_image_preview.html.twig", "C:\\wamp64\\www\\appac\\templates\\admin\\fields\\archive_image_preview.html.twig");
    }
}
