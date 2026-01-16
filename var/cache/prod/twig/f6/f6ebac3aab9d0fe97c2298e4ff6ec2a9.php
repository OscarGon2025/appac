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
class __TwigTemplate_1f2d408df745369a842458b108d5f84b extends Template
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
        $this->parent = $this->load("@EasyAdmin/crud/field/association.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "form", [], "any", false, false, false, 5), 'widget');
        yield "

    <div id=\"cover-preview-container-";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 7), "html", null, true);
        yield "\" style=\"margin-top: 10px;\">
        ";
        // line 8
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 8))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/archives/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 9), "fileName", [], "any", false, false, false, 9))), "html", null, true);
            yield "\"
                 alt=\"";
            // line 10
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 10), "fileName", [], "any", false, false, false, 10), "html", null, true)));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "form", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "full_name", [], "any", false, false, false, 17), "html", null, true);
        yield "\"]');
            const container = document.getElementById('cover-preview-container-";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 18), "html", null, true);
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
        return array (  91 => 18,  87 => 17,  81 => 13,  75 => 10,  70 => 9,  68 => 8,  64 => 7,  58 => 5,  51 => 4,  40 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/fields/cover_image_preview.html.twig", "C:\\wamp64\\www\\appac\\templates\\admin\\fields\\cover_image_preview.html.twig");
    }
}
