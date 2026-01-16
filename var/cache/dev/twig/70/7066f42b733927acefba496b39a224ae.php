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
class __TwigTemplate_ef1e6fc18aa6f176f31eb0812caed9e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/fields/archive_image_preview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/fields/archive_image_preview.html.twig"));

        // line 2
        yield "
<div class=\"archive-image-field\">
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 4, $this->source); })()), "form", [], "any", false, false, false, 4), 'widget');
        yield "

    ";
        // line 7
        yield "    <div style=\"margin-top: 10px;\">
        <img id=\"archiveImagePreview\"
             src=\"";
        // line 9
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 9, $this->source); })()), "data", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("/uploads/archives/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 9, $this->source); })()), "data", [], "any", false, false, false, 9), "fileName", [], "any", false, false, false, 9)), "html", null, true)) : (""));
        yield "\"
             style=\"max-height: 80px; border-radius: 4px; display: ";
        // line 10
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 10, $this->source); })()), "data", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("block") : ("none"));
        yield ";\"
             alt=\"Aperçu de l'image\">
    </div>
</div>

<script>
    (function() {
        const select = document.getElementById('";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 17, $this->source); })()), "form", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  75 => 17,  65 => 10,  61 => 9,  57 => 7,  52 => 4,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/fields/archive_image_preview.html.twig #}

<div class=\"archive-image-field\">
    {{ form_widget(field.form) }}

    {# Aperçu de l’image sélectionnée #}
    <div style=\"margin-top: 10px;\">
        <img id=\"archiveImagePreview\"
             src=\"{{ field.data ? '/uploads/archives/' ~ field.data.fileName : '' }}\"
             style=\"max-height: 80px; border-radius: 4px; display: {{ field.data ? 'block' : 'none' }};\"
             alt=\"Aperçu de l'image\">
    </div>
</div>

<script>
    (function() {
        const select = document.getElementById('{{ field.form.vars.id }}');
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
", "admin/fields/archive_image_preview.html.twig", "C:\\wamp64\\www\\appac\\templates\\admin\\fields\\archive_image_preview.html.twig");
    }
}
