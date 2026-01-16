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

/* admin/fields/cover_image_preview.html.twig */
class __TwigTemplate_410cab409dec130c3f53afb72921b4a3 extends Template
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
            'field_widget' => [$this, 'block_field_widget'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "@EasyAdmin/crud/field/association.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/fields/cover_image_preview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/fields/cover_image_preview.html.twig"));

        $this->parent = $this->load("@EasyAdmin/crud/field/association.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field_widget"));

        // line 5
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 5, $this->source); })()), "form", [], "any", false, false, false, 5), 'widget');
        yield "

    <div id=\"cover-preview-container-";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 7, $this->source); })()), "uniqueId", [], "any", false, false, false, 7), "html", null, true);
        yield "\" style=\"margin-top: 10px;\">
        ";
        // line 8
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 8, $this->source); })()), "value", [], "any", false, false, false, 8))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/archives/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 9, $this->source); })()), "value", [], "any", false, false, false, 9), "fileName", [], "any", false, false, false, 9))), "html", null, true);
            yield "\"
                 alt=\"";
            // line 10
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 10, $this->source); })()), "value", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 10, $this->source); })()), "value", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 10, $this->source); })()), "value", [], "any", false, false, false, 10), "fileName", [], "any", false, false, false, 10), "html", null, true)));
            yield "\"
                 style=\"max-height: 100px; border-radius: 6px; box-shadow: 0 0 6px rgba(0,0,0,0.3);\">
        ";
        }
        // line 13
        yield "    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const select = document.querySelector('[name=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 17, $this->source); })()), "form", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "full_name", [], "any", false, false, false, 17), "html", null, true);
        yield "\"]');
            const container = document.getElementById('cover-preview-container-";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 18, $this->source); })()), "uniqueId", [], "any", false, false, false, 18), "html", null, true);
        yield "');

            if (!select || !container) return;

            select.addEventListener('change', async () => {
                const id = select.value;
                if (!id) {
                    container.innerHTML = '';
                    return;
                }

                try {
                    // Appel AJAX pour récupérer le nom du fichier via une route JSON
                    const response = await fetch(`/admin/archive-image/\${id}/info`);
                    if (!response.ok) throw new Error('Erreur serveur');
                    const data = await response.json();

                    container.innerHTML = `
                        <img src=\"/uploads/archives/\${data.fileName}\"
                             alt=\"\${data.title || data.fileName}\"
                             style=\"max-height: 100px; border-radius: 6px; box-shadow: 0 0 6px rgba(0,0,0,0.3); margin-top:5px;\">
                    `;
                } catch (e) {
                    console.error('Impossible de charger la miniature :', e);
                }
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/fields/cover_image_preview.html.twig";
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
        return array (  109 => 18,  105 => 17,  99 => 13,  93 => 10,  88 => 9,  86 => 8,  82 => 7,  76 => 5,  63 => 4,  40 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Ce template est pour AssociationField #}
{% extends '@EasyAdmin/crud/field/association.html.twig' %}

{% block field_widget %}
    {{ form_widget(field.form) }}

    <div id=\"cover-preview-container-{{ field.uniqueId }}\" style=\"margin-top: 10px;\">
        {% if field.value is not null %}
            <img src=\"{{ asset('uploads/archives/' ~ field.value.fileName) }}\"
                 alt=\"{{ field.value.title ?: field.value.fileName }}\"
                 style=\"max-height: 100px; border-radius: 6px; box-shadow: 0 0 6px rgba(0,0,0,0.3);\">
        {% endif %}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const select = document.querySelector('[name=\"{{ field.form.vars.full_name }}\"]');
            const container = document.getElementById('cover-preview-container-{{ field.uniqueId }}');

            if (!select || !container) return;

            select.addEventListener('change', async () => {
                const id = select.value;
                if (!id) {
                    container.innerHTML = '';
                    return;
                }

                try {
                    // Appel AJAX pour récupérer le nom du fichier via une route JSON
                    const response = await fetch(`/admin/archive-image/\${id}/info`);
                    if (!response.ok) throw new Error('Erreur serveur');
                    const data = await response.json();

                    container.innerHTML = `
                        <img src=\"/uploads/archives/\${data.fileName}\"
                             alt=\"\${data.title || data.fileName}\"
                             style=\"max-height: 100px; border-radius: 6px; box-shadow: 0 0 6px rgba(0,0,0,0.3); margin-top:5px;\">
                    `;
                } catch (e) {
                    console.error('Impossible de charger la miniature :', e);
                }
            });
        });
    </script>
{% endblock %}
", "admin/fields/cover_image_preview.html.twig", "C:\\wamp64\\www\\appac\\templates\\admin\\fields\\cover_image_preview.html.twig");
    }
}
