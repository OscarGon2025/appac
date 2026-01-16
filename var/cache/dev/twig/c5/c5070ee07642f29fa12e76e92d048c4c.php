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

/* @EasyAdmin/crud/detail.html.twig */
class __TwigTemplate_2504358f65df06e0bb97c79033ce69ad extends Template
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
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'detail_fields' => [$this, 'block_detail_fields'],
            'delete_form' => [$this, 'block_delete_form'],
            'detail_field' => [$this, 'block_detail_field'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return $this->load(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["layout"], "method", false, false, false, 4), 4);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/detail.html.twig"));

        // line 3
        $context["ea"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea();
        // line 9
        $context["ea_field_assets"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 9), "fieldAssets", [Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_DETAIL")], "method", false, false, false, 9);
        // line 4
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((("ea-detail-" . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 6)) . "-") . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 6)), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-detail ea-detail-" . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 7)), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_head_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        // line 12
        yield "    ";
        yield from $this->yieldParentBlock("configured_head_contents", $context, $blocks);
        yield "
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "headContents", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 14
            yield "        ";
            yield $context["htmlContent"];
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['htmlContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_body_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        // line 19
        yield "    ";
        yield from $this->yieldParentBlock("configured_body_contents", $context, $blocks);
        yield "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "bodyContents", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 21
            yield "        ";
            yield $context["htmlContent"];
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['htmlContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        // line 26
        yield "    ";
        yield from $this->yieldParentBlock("configured_stylesheets", $context, $blocks);
        yield "
    ";
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "cssAssets", [], "any", false, false, false, 27)], false);
        yield "
    ";
        // line 28
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 28)], false);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        // line 32
        yield "    ";
        yield from $this->yieldParentBlock("configured_javascripts", $context, $blocks);
        yield "
    ";
        // line 33
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "jsAssets", [], "any", false, false, false, 33)], false);
        yield "
    ";
        // line 34
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 34)], false);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 38
        $context["custom_page_title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 38), "customPageTitle", [($context["pageName"] ?? null), (((($tmp = ($context["entity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "instance", [], "any", false, false, false, 38)) : (null)), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 38), "translationParameters", [], "any", false, false, false, 38), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 38), "translationDomain", [], "any", false, false, false, 38)], "method", false, false, false, 38);
        // line 39
        yield (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["ea"] ?? null), "crud", [], "any", false, false, false, 40), "defaultPageTitle", [null, null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "translationParameters", [], "any", false, false, false, 40)], "method", false, false, false, 40))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 41
($context["custom_page_title"] ?? null))));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        // line 45
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 45)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isActionGroup", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 47
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "templatePath", [], "any", false, false, false, 47), ["group" => $context["item"], "entity" => ($context["entity"] ?? null)], false);
                yield "
        ";
            } else {
                // line 49
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "templatePath", [], "any", false, false, false, 49), ["action" => $context["item"]], false);
                yield "
        ";
            }
            // line 51
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 55
        yield "    ";
        yield from $this->unwrap()->yieldBlock('detail_fields', $context, $blocks);
        // line 64
        yield "
    ";
        // line 65
        yield from $this->unwrap()->yieldBlock('delete_form', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_detail_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "detail_fields"));

        // line 56
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "fields", [], "any", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 57
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isFormLayoutField", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 58
                yield "                ";
                yield $this->getTemplateForMacro("macro_render_layout_field", $context, 58, $this->getSourceContext())->macro_render_layout_field(...[$context["field"]]);
                yield "
            ";
            } else {
                // line 60
                yield "                ";
                yield $this->getTemplateForMacro("macro_render_field_contents", $context, 60, $this->getSourceContext())->macro_render_field_contents(...[($context["entity"] ?? null), $context["field"]]);
                yield "
            ";
            }
            // line 62
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delete_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        // line 66
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 66)], false);
        yield "
    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 324
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_detail_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "detail_field"));

        // line 325
        yield "            ";
        if ((($tmp =  !($context["is_form_fieldset"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 326
            yield "                ";
            yield $this->getTemplateForMacro("macro_render_field", $context, 326, $this->getSourceContext())->macro_render_field(...[($context["entity"] ?? null), ($context["field"] ?? null)]);
            yield "
            ";
        }
        // line 328
        yield "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 70
    public function macro_render_field_contents($entity = null, $field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_field_contents"));

            // line 71
            yield "    <div class=\"field-group ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 71), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "htmlAttributes", [], "any", false, false, false, 71));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html");
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
        ";
            // line 72
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 72) === false)) {
                // line 73
                yield "            ";
                // line 75
                yield "        ";
            } else {
                // line 76
                yield "            <div class=\"field-label\">";
                // line 77
                $context["label_html_attributes"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 78
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 78))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 79
                        yield "data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-animation=\"false\"
                        data-bs-html=\"true\" data-bs-custom-class=\"ea-detail-label-tooltip\"
                        data-bs-title=\"";
                        // line 81
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 81)), "html");
                        yield "\"";
                    }
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 85
                yield "<div ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label_html_attributes"] ?? null), "html", null, true);
                yield ">
                    ";
                // line 86
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 86));
                yield "
                </div>
            </div>
        ";
            }
            // line 90
            yield "
        <div class=\"field-value\">
            ";
            // line 92
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 92), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            yield "
        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 97
    public function macro_render_layout_field($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_layout_field"));

            // line 98
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "formType", [], "any", false, false, false, 98) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabListType")) {
                // line 99
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_list", $context, 99, $this->getSourceContext())->macro_render_tab_list(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 100
($context["field"] ?? null), "formType", [], "any", false, false, false, 100) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneGroupOpenType")) {
                // line 101
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_group_open", $context, 101, $this->getSourceContext())->macro_render_tab_group_open(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 102
($context["field"] ?? null), "formType", [], "any", false, false, false, 102) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneGroupCloseType")) {
                // line 103
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_group_close", $context, 103, $this->getSourceContext())->macro_render_tab_group_close(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 104
($context["field"] ?? null), "formType", [], "any", false, false, false, 104) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneOpenType")) {
                // line 105
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_open", $context, 105, $this->getSourceContext())->macro_render_tab_open(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 106
($context["field"] ?? null), "formType", [], "any", false, false, false, 106) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneCloseType")) {
                // line 107
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_close", $context, 107, $this->getSourceContext())->macro_render_tab_close(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 108
($context["field"] ?? null), "formType", [], "any", false, false, false, 108) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnGroupOpenType")) {
                // line 109
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_column_group_open", $context, 109, $this->getSourceContext())->macro_render_column_group_open(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 110
($context["field"] ?? null), "formType", [], "any", false, false, false, 110) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnGroupCloseType")) {
                // line 111
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_column_group_close", $context, 111, $this->getSourceContext())->macro_render_column_group_close(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 112
($context["field"] ?? null), "formType", [], "any", false, false, false, 112) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnOpenType")) {
                // line 113
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_column_open", $context, 113, $this->getSourceContext())->macro_render_column_open(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 114
($context["field"] ?? null), "formType", [], "any", false, false, false, 114) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnCloseType")) {
                // line 115
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_column_close", $context, 115, $this->getSourceContext())->macro_render_column_close(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 116
($context["field"] ?? null), "formType", [], "any", false, false, false, 116) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormFieldsetOpenType")) {
                // line 117
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_fieldset_open", $context, 117, $this->getSourceContext())->macro_render_fieldset_open(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 118
($context["field"] ?? null), "formType", [], "any", false, false, false, 118) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormFieldsetCloseType")) {
                // line 119
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_fieldset_close", $context, 119, $this->getSourceContext())->macro_render_fieldset_close(...[($context["field"] ?? null)]);
                yield "
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 123
    public function macro_render_tab_list($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_list"));

            // line 124
            yield "    ";
            $context["tab_id_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
            // line 125
            yield "    ";
            $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
            // line 126
            yield "    ";
            $context["tab_error_count_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ERROR_COUNT");
            // line 127
            yield "
    <div class=\"nav-tabs-custom form-tabs-tablist\">
        <ul class=\"nav nav-tabs\">
            ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["tabs"], "method", false, false, false, 130));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 131
                yield "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
                // line 132
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield "\" href=\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 132), "html", null, true);
                yield "\" id=\"tablist-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 132), "html", null, true);
                yield "\" data-bs-toggle=\"tab\">";
                // line 133
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", true, true, false, 133)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 133), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 134
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 134), "class" => "tab-nav-item-icon"]);
                }
                // line 136
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 136), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "i18n", [], "any", false, false, false, 136), "translationDomain", [], "any", false, false, false, 136));
                yield "

                        ";
                // line 138
                $context["tab_error_count"] = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_error_count_option_name"] ?? null)], "method", false, false, false, 138);
                // line 139
                if ((($context["tab_error_count"] ?? null) > 0)) {
                    // line 140
                    yield "<span class=\"badge badge-danger\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => ($context["tab_error_count"] ?? null)], "EasyAdminBundle"), "html", null, true);
                    yield "\">";
                    // line 141
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tab_error_count"] ?? null), "html", null, true);
                    // line 142
                    yield "</span>";
                }
                // line 144
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            yield "        </ul>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 151
    public function macro_render_tab_group_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_group_open"));

            // line 152
            yield "    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 156
    public function macro_render_tab_group_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_group_close"));

            // line 157
            yield "        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 161
    public function macro_render_tab_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_open"));

            // line 162
            yield "    ";
            $context["tab_id_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
            // line 163
            yield "    ";
            $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
            // line 164
            yield "
    <div id=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 165), "html", null, true);
            yield "\" class=\"tab-pane ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 165), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["attr"], "method", false, false, false, 165));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html");
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
        ";
            // line 166
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 166)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 167
                yield "            <div class=\"content-header-help tab-help\">
                ";
                // line 168
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 168), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "i18n", [], "any", false, false, false, 168), "translationDomain", [], "any", false, false, false, 168));
                yield "
            </div>
        ";
            }
            // line 171
            yield "
        <div class=\"row\">
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 175
    public function macro_render_tab_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_close"));

            // line 176
            yield "        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 180
    public function macro_render_column_group_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_group_open"));

            // line 181
            yield "    ";
            // line 182
            yield "    ";
            if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", true, true, false, 182)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", false, false, false, 182), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 183
                yield "        <div class=\"row\">
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 187
    public function macro_render_column_group_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_group_close"));

            // line 188
            yield "    ";
            // line 189
            yield "    ";
            if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", true, true, false, 189)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", false, false, false, 189), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 190
                yield "        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 194
    public function macro_render_column_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_open"));

            // line 195
            yield "    ";
            $context["field_icon"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 195);
            // line 196
            yield "    ";
            $context["column_has_title"] = (((((($context["field_icon"] ?? null) != null) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 196) != false)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 196) != null)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 196) != "")) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 196) != null));
            // line 197
            yield "
    <div class=\"form-column ";
            // line 198
            yield (((($tmp =  !($context["column_has_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-column-no-header") : (""));
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 198), "html", null, true);
            yield "\">
        ";
            // line 199
            if ((($tmp = ($context["column_has_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 200
                yield "            <div class=\"form-column-title\">
                <div class=\"form-column-title-content\">
                    ";
                // line 202
                if ((($tmp = ($context["field_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["field_icon"] ?? null), "class" => "form-column-icon"]);
                }
                // line 203
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 203)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 203), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "i18n", [], "any", false, false, false, 203), "translationDomain", [], "any", false, false, false, 203));
                }
                // line 204
                yield "                </div>

                ";
                // line 206
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 207
                    yield "                    <div class=\"form-column-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 207), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "i18n", [], "any", false, false, false, 207), "translationDomain", [], "any", false, false, false, 207));
                    yield "</div>
                ";
                }
                // line 209
                yield "            </div>
        ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 213
    public function macro_render_column_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_close"));

            // line 214
            yield "    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 217
    public function macro_render_fieldset_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_fieldset_open"));

            // line 218
            yield "    ";
            $context["fieldset_has_header"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 218) || CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 218)) || CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 218));
            // line 219
            yield "    ";
            $context["is_collapsible_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_COLLAPSIBLE");
            // line 220
            yield "    ";
            $context["is_collapsed_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_COLLAPSED");
            // line 221
            yield "    ";
            $context["is_collapsible"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["is_collapsible_option_name"] ?? null)], "method", false, false, false, 221);
            // line 222
            yield "    ";
            $context["is_collapsed"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["is_collapsed_option_name"] ?? null)], "method", false, false, false, 222);
            // line 223
            yield "
    <div class=\"form-fieldset ";
            // line 224
            yield (((($tmp =  !($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-fieldset-no-header") : (""));
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 224), "html", null, true);
            yield "\">
        <fieldset>
            ";
            // line 226
            if ((($tmp = ($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 227
                yield "                <div class=\"form-fieldset-header ";
                yield (((($tmp = ($context["is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
                yield " ";
                yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 227))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
                yield "\">
                    <div class=\"form-fieldset-title\">
                        ";
                // line 229
                $context["fieldset_title_contents"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 230
                    yield "                            ";
                    if ((($tmp = ($context["is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 231
                        yield "                                ";
                        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-fieldset-collapse-marker"]);
                        yield "
                            ";
                    }
                    // line 233
                    yield "
                            ";
                    // line 234
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 234)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 235
                        yield "                                ";
                        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 235), "class" => "form-fieldset-icon"]);
                        yield "
                            ";
                    }
                    // line 237
                    yield "
                            ";
                    // line 238
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 238));
                    yield "
                        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 240
                yield "
                        ";
                // line 241
                if ((($tmp = ($context["is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 242
                    yield "                            <a href=\"#content-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "propertyNameWithSuffix", [], "any", false, false, false, 242), "html", null, true);
                    yield "\" data-bs-toggle=\"collapse\"
                               class=\"form-fieldset-title-content form-fieldset-collapse ";
                    // line 243
                    yield (((($tmp = ($context["is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
                    yield "\"
                               aria-expanded=\"";
                    // line 244
                    yield (((($tmp = ($context["is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                    yield "\" aria-controls=\"content-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "propertyNameWithSuffix", [], "any", false, false, false, 244), "html", null, true);
                    yield "\">
                                ";
                    // line 245
                    yield ($context["fieldset_title_contents"] ?? null);
                    yield "
                            </a>
                        ";
                } else {
                    // line 248
                    yield "                            <span class=\"not-collapsible form-fieldset-title-content\">
                                ";
                    // line 249
                    yield ($context["fieldset_title_contents"] ?? null);
                    yield "
                            </span>
                        ";
                }
                // line 252
                yield "
                        ";
                // line 253
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 253)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 254
                    yield "                            <div class=\"form-fieldset-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 254));
                    yield "</div>
                        ";
                }
                // line 256
                yield "                    </div>
                </div>
            ";
            }
            // line 259
            yield "
            <div id=\"content-";
            // line 260
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "propertyNameWithSuffix", [], "any", false, false, false, 260), "html", null, true);
            yield "\" class=\"form-fieldset-body ";
            yield (((($tmp =  !($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("without-header") : (""));
            yield " ";
            yield (((($tmp = ($context["is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapse") : (""));
            yield " ";
            yield (((($tmp =  !($context["is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\">
                <div class=\"row\">
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 264
    public function macro_render_fieldset_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_fieldset_close"));

            // line 265
            yield "                </div>
            </div>
        </fieldset>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 272
    public function macro_render_detail_fields_with_tabs($entity = null, $field_layout = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "field_layout" => $field_layout,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_detail_fields_with_tabs"));

            // line 273
            yield "    ";
            trigger_deprecation('', '', "The \"render_detail_fields_with_tabs\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 273.");
            // line 274
            yield "
    <div class=\"col-12\">
        <div class=\"nav-tabs-custom form-tabs\">
            <ul class=\"nav nav-tabs\">
                ";
            // line 278
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field_layout"] ?? null), "tabs", [], "any", false, false, false, 278));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 279
                yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
                // line 280
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 280)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield "\" href=\"#tab-pane-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 280), "html", null, true);
                yield "\" id=\"tab-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 280), "html", null, true);
                yield "\" data-bs-toggle=\"tab\">";
                // line 281
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "customOption", ["icon"], "method", false, false, false, 281)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 282
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "customOption", ["icon"], "method", false, false, false, 282)]);
                }
                // line 284
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 284), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "i18n", [], "any", false, false, false, 284), "translationDomain", [], "any", false, false, false, 284));
                yield "
                        </a>
                    </li>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            yield "            </ul>
            <div class=\"tab-content\">
                ";
            // line 290
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field_layout"] ?? null), "tabs", [], "any", false, false, false, 290));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 291
                yield "                    <div id=\"tab-pane-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 291), "html", null, true);
                yield "\" class=\"tab-pane ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 291)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "cssClass", [], "any", true, true, false, 291)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "cssClass", [], "any", false, false, false, 291), "")) : ("")), "html", null, true);
                yield "\">
                        ";
                // line 292
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "help", [], "any", true, true, false, 292)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "help", [], "any", false, false, false, 292), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 293
                    yield "                            <div class=\"content-header-help tab-help\">
                                ";
                    // line 294
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "help", [], "any", false, false, false, 294), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "i18n", [], "any", false, false, false, 294), "translationDomain", [], "any", false, false, false, 294));
                    yield "
                            </div>
                        ";
                }
                // line 297
                yield "                        <div class=\"row\">
                            ";
                // line 298
                yield $this->getTemplateForMacro("macro_render_detail_fields", $context, 298, $this->getSourceContext())->macro_render_detail_fields(...[($context["entity"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["field_layout"] ?? null), "fieldsInTab", [CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 298)], "method", false, false, false, 298)]);
                yield "
                        </div>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 302
            yield "            </div>
        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 307
    public function macro_render_detail_fields($entity = null, $fields = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "fields" => $fields,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_detail_fields"));

            // line 308
            yield "    ";
            trigger_deprecation('', '', "The \"render_detail_fields\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 308.");
            // line 309
            yield "
    ";
            // line 310
            $context["form_fieldset_is_already_open"] = false;
            // line 311
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 312
                yield "        ";
                $context["is_form_fieldset"] = CoreExtension::inFilter("field-form_fieldset", CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 312));
                // line 313
                yield "
        ";
                // line 314
                if ((($context["is_form_fieldset"] ?? null) || (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 314) &&  !($context["is_form_fieldset"] ?? null)))) {
                    // line 315
                    yield "            ";
                    if ((($tmp = ($context["form_fieldset_is_already_open"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 316
                        yield "                ";
                        yield $this->getTemplateForMacro("macro_close_form_fieldset", $context, 316, $this->getSourceContext())->macro_close_form_fieldset(...[]);
                        yield "
                ";
                        // line 317
                        $context["form_fieldset_is_already_open"] = false;
                        // line 318
                        yield "            ";
                    }
                    // line 319
                    yield "
            ";
                    // line 320
                    yield $this->getTemplateForMacro("macro_open_form_fieldset", $context, 320, $this->getSourceContext())->macro_open_form_fieldset(...[(((($tmp = ($context["is_form_fieldset"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["field"]) : (null))]);
                    yield "
            ";
                    // line 321
                    $context["form_fieldset_is_already_open"] = true;
                    // line 322
                    yield "        ";
                }
                // line 323
                yield "
        ";
                // line 324
                yield from $this->unwrap()->yieldBlock('detail_field', $context, $blocks);
                // line 329
                yield "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 330
            yield "
    ";
            // line 331
            if ((($tmp = ($context["form_fieldset_is_already_open"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 332
                yield "        ";
                yield $this->getTemplateForMacro("macro_close_form_fieldset", $context, 332, $this->getSourceContext())->macro_close_form_fieldset(...[]);
                yield "
        ";
                // line 333
                $context["form_fieldset_is_already_open"] = false;
                // line 334
                yield "    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 337
    public function macro_open_form_fieldset($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "open_form_fieldset"));

            // line 338
            yield "    ";
            trigger_deprecation('', '', "The \"open_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 338.");
            // line 339
            yield "
    ";
            // line 340
            $context["fieldset_name"] = (((null === ($context["field"] ?? null))) ? (null) : (("content-" . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 340))));
            // line 341
            yield "    ";
            $context["collapsible"] = (((null === ($context["field"] ?? null))) ? (false) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOption", ["collapsible"], "method", false, false, false, 341)));
            // line 342
            yield "    ";
            $context["collapsed"] = (((null === ($context["field"] ?? null))) ? (false) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOption", ["collapsed"], "method", false, false, false, 342)));
            // line 343
            yield "    ";
            $context["fieldset_icon"] = (((null === ($context["field"] ?? null))) ? (null) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 343), "get", ["icon"], "method", true, true, false, 343)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 343), "get", ["icon"], "method", false, false, false, 343), false)) : (false))));
            // line 344
            yield "    ";
            $context["fieldset_label"] = (((null === ($context["field"] ?? null))) ? (null) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 344)));
            // line 345
            yield "    ";
            $context["fieldset_help"] = (((null === ($context["field"] ?? null))) ? (null) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 345)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 345), false)) : (false))));
            // line 346
            yield "    ";
            $context["fieldset_has_header"] = (((($context["collapsible"] ?? null) || ($context["fieldset_icon"] ?? null)) || ($context["fieldset_label"] ?? null)) || ($context["fieldset_help"] ?? null));
            // line 347
            yield "
    <div class=\"";
            // line 348
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", true, true, false, 348) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 348)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 348), "html", null, true)) : (""));
            yield "\">
        <div class=\"form-fieldset\">
            ";
            // line 350
            if ((($tmp = ($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 351
                yield "                <div class=\"form-fieldset-header ";
                yield (((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
                yield " ";
                yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["fieldset_help"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
                yield "\">
                    <div class=\"form-fieldset-title\">
                        <a ";
                // line 353
                if ((($tmp =  !($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 354
                    yield "                            href=\"#\" class=\"not-collapsible\"
                        ";
                } else {
                    // line 356
                    yield "                            href=\"#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fieldset_name"] ?? null), "html", null, true);
                    yield "\" data-bs-toggle=\"collapse\"
                            class=\"form-fieldset-collapse ";
                    // line 357
                    yield (((($tmp = ($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
                    yield "\"
                            aria-expanded=\"";
                    // line 358
                    yield (((($tmp = ($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                    yield "\" aria-controls=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fieldset_name"] ?? null), "html", null, true);
                    yield "\"
                        ";
                }
                // line 360
                yield "                        >
                            ";
                // line 361
                if ((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 362
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-fieldset-collapse-marker"]);
                    yield "
                            ";
                }
                // line 364
                yield "
                            ";
                // line 365
                if ((($tmp = ($context["fieldset_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 366
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["fieldset_icon"] ?? null), "class" => "form-fieldset-icon"]);
                    yield "
                            ";
                }
                // line 368
                yield "                            ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["fieldset_label"] ?? null));
                yield "
                        </a>

                        ";
                // line 371
                if ((($tmp = ($context["fieldset_help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 372
                    yield "                            <div class=\"form-fieldset-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["fieldset_help"] ?? null));
                    yield "</div>
                        ";
                }
                // line 374
                yield "                    </div>
                </div>
            ";
            }
            // line 377
            yield "
            <div ";
            // line 378
            if ((($tmp = ($context["fieldset_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fieldset_name"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"form-fieldset-body ";
            yield (((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapse") : (""));
            yield " ";
            yield (((($tmp =  !($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\">
                <dl class=\"datalist\">
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 382
    public function macro_close_form_fieldset(...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "close_form_fieldset"));

            // line 383
            yield "    ";
            trigger_deprecation('', '', "The \"close_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 383.");
            // line 384
            yield "
            </dl>
        </div>
    </div>
</div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 391
    public function macro_render_field($entity = null, $field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_field"));

            // line 392
            yield "    ";
            trigger_deprecation('', '', "The \"render_field\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 392.");
            // line 393
            yield "
    <div class=\"data-row ";
            // line 394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 394), "html", null, true);
            yield "\">
        <dt>
            ";
            // line 396
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 396));
            yield "

            ";
            // line 398
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 398))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 399
                yield "                <a tabindex=\"0\" class=\"data-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"right\" data-bs-trigger=\"focus\" data-bs-content=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 399)), "html");
                yield "\">
                    ";
                // line 400
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:circle-info"]);
                yield "
                </a>
            ";
            }
            // line 403
            yield "        </dt>
        <dd>
            ";
            // line 405
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 405), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            yield "
        </dd>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/detail.html.twig";
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
        return array (  1662 => 405,  1658 => 403,  1652 => 400,  1647 => 399,  1645 => 398,  1640 => 396,  1635 => 394,  1632 => 393,  1629 => 392,  1613 => 391,  1599 => 384,  1596 => 383,  1582 => 382,  1562 => 378,  1559 => 377,  1554 => 374,  1548 => 372,  1546 => 371,  1539 => 368,  1533 => 366,  1531 => 365,  1528 => 364,  1522 => 362,  1520 => 361,  1517 => 360,  1510 => 358,  1506 => 357,  1501 => 356,  1497 => 354,  1495 => 353,  1487 => 351,  1485 => 350,  1480 => 348,  1477 => 347,  1474 => 346,  1471 => 345,  1468 => 344,  1465 => 343,  1462 => 342,  1459 => 341,  1457 => 340,  1454 => 339,  1451 => 338,  1436 => 337,  1426 => 334,  1424 => 333,  1419 => 332,  1417 => 331,  1414 => 330,  1400 => 329,  1398 => 324,  1395 => 323,  1392 => 322,  1390 => 321,  1386 => 320,  1383 => 319,  1380 => 318,  1378 => 317,  1373 => 316,  1370 => 315,  1368 => 314,  1365 => 313,  1362 => 312,  1344 => 311,  1342 => 310,  1339 => 309,  1336 => 308,  1320 => 307,  1308 => 302,  1290 => 298,  1287 => 297,  1281 => 294,  1278 => 293,  1276 => 292,  1265 => 291,  1248 => 290,  1244 => 288,  1226 => 284,  1223 => 282,  1221 => 281,  1212 => 280,  1209 => 279,  1192 => 278,  1186 => 274,  1183 => 273,  1167 => 272,  1154 => 265,  1139 => 264,  1121 => 260,  1118 => 259,  1113 => 256,  1107 => 254,  1105 => 253,  1102 => 252,  1096 => 249,  1093 => 248,  1087 => 245,  1081 => 244,  1077 => 243,  1072 => 242,  1070 => 241,  1067 => 240,  1061 => 238,  1058 => 237,  1052 => 235,  1050 => 234,  1047 => 233,  1041 => 231,  1038 => 230,  1036 => 229,  1028 => 227,  1026 => 226,  1019 => 224,  1016 => 223,  1013 => 222,  1010 => 221,  1007 => 220,  1004 => 219,  1001 => 218,  986 => 217,  976 => 214,  961 => 213,  950 => 209,  944 => 207,  942 => 206,  938 => 204,  933 => 203,  929 => 202,  925 => 200,  923 => 199,  917 => 198,  914 => 197,  911 => 196,  908 => 195,  893 => 194,  882 => 190,  879 => 189,  877 => 188,  862 => 187,  851 => 183,  848 => 182,  846 => 181,  831 => 180,  820 => 176,  805 => 175,  794 => 171,  788 => 168,  785 => 167,  783 => 166,  761 => 165,  758 => 164,  755 => 163,  752 => 162,  737 => 161,  726 => 157,  711 => 156,  700 => 152,  685 => 151,  674 => 147,  666 => 144,  663 => 142,  661 => 141,  657 => 140,  655 => 139,  653 => 138,  648 => 136,  645 => 134,  643 => 133,  634 => 132,  631 => 131,  627 => 130,  622 => 127,  619 => 126,  616 => 125,  613 => 124,  598 => 123,  585 => 119,  583 => 118,  578 => 117,  576 => 116,  571 => 115,  569 => 114,  564 => 113,  562 => 112,  557 => 111,  555 => 110,  550 => 109,  548 => 108,  543 => 107,  541 => 106,  536 => 105,  534 => 104,  529 => 103,  527 => 102,  522 => 101,  520 => 100,  515 => 99,  512 => 98,  497 => 97,  484 => 92,  480 => 90,  473 => 86,  468 => 85,  462 => 81,  458 => 79,  456 => 78,  454 => 77,  452 => 76,  449 => 75,  447 => 73,  445 => 72,  428 => 71,  412 => 70,  404 => 328,  398 => 326,  395 => 325,  385 => 324,  374 => 66,  364 => 65,  356 => 63,  350 => 62,  344 => 60,  338 => 58,  335 => 57,  330 => 56,  320 => 55,  312 => 65,  309 => 64,  306 => 55,  296 => 54,  284 => 51,  278 => 49,  272 => 47,  269 => 46,  264 => 45,  254 => 44,  246 => 41,  245 => 40,  244 => 39,  242 => 38,  232 => 37,  222 => 34,  218 => 33,  213 => 32,  203 => 31,  193 => 28,  189 => 27,  184 => 26,  174 => 25,  159 => 21,  155 => 20,  150 => 19,  140 => 18,  125 => 14,  121 => 13,  116 => 12,  106 => 11,  89 => 7,  72 => 6,  65 => 4,  63 => 9,  61 => 3,  51 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/detail.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\detail.html.twig");
    }
}
