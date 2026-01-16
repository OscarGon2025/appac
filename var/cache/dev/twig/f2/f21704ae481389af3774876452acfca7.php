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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_525f9d20c81e7818e4ccb0ada00eb6a1 extends Template
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
            'filters' => [$this, 'block_filters'],
            'global_actions' => [$this, 'block_global_actions'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_row_attributes' => [$this, 'block_entity_row_attributes'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'table_body_empty' => [$this, 'block_table_body_empty'],
            'table_footer' => [$this, 'block_table_footer'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return $this->load(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["layout"], "method", false, false, false, 5), 5);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        // line 4
        $context["ea"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea();
        // line 6
        $context["__internal_trans_default_domain7ef3c118ccfab12c5ee65c5e56454206"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 6), "translationDomain", [], "any", false, false, false, 6);
        // line 11
        $context["ea_field_assets"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 11), "fieldAssets", [Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_INDEX")], "method", false, false, false, 11);
        // line 46
        $context["has_batch_actions"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["batch_actions"] ?? null)) > 0);
        // line 5
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-index-" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["entities"] ?? null)), "name", [], "any", false, false, false, 8)), "html", null, true)) : (""));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-index" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) > 0)) ? ((" ea-index-" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["entities"] ?? null)), "name", [], "any", false, false, false, 9))) : (""))), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_head_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        // line 14
        yield "    ";
        yield from $this->yieldParentBlock("configured_head_contents", $context, $blocks);
        yield "
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "headContents", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 16
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

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_body_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        // line 21
        yield "    ";
        yield from $this->yieldParentBlock("configured_body_contents", $context, $blocks);
        yield "
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "bodyContents", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 23
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

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        // line 28
        yield "    ";
        yield from $this->yieldParentBlock("configured_stylesheets", $context, $blocks);
        yield "
    ";
        // line 29
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "cssAssets", [], "any", false, false, false, 29)], false);
        yield "
    ";
        // line 30
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 30)], false);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        // line 34
        yield "    ";
        yield from $this->yieldParentBlock("configured_javascripts", $context, $blocks);
        yield "
    ";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "jsAssets", [], "any", false, false, false, 35)], false);
        yield "
    ";
        // line 36
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 36)], false);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 40
        $context["custom_page_title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 40), "customPageTitle", ["index", null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "translationParameters", [], "any", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "translationDomain", [], "any", false, false, false, 40)], "method", false, false, false, 40);
        // line 41
        yield (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 42
($context["ea"] ?? null), "crud", [], "any", false, false, false, 42), "defaultPageTitle", ["index", null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 42), "translationParameters", [], "any", false, false, false, 42)], "method", false, false, false, 42), [],         // line 6
($context["__internal_trans_default_domain7ef3c118ccfab12c5ee65c5e56454206"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 43
($context["custom_page_title"] ?? null), [],         // line 6
($context["__internal_trans_default_domain7ef3c118ccfab12c5ee65c5e56454206"] ?? null))));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        // line 48
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) > 0)) {
            // line 49
            yield "        <div class=\"datagrid-filters\">
            ";
            // line 50
            yield from $this->unwrap()->yieldBlock('filters', $context, $blocks);
            // line 63
            yield "        </div>
    ";
        }
        // line 65
        yield "
    ";
        // line 66
        yield from $this->unwrap()->yieldBlock('global_actions', $context, $blocks);
        // line 77
        yield "    ";
        yield from $this->unwrap()->yieldBlock('batch_actions', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_filters(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        // line 51
        yield "                ";
        $context["applied_filters"] = Twig\Extension\CoreExtension::keys(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 51), "query", [], "any", false, true, false, 51), "all", [], "any", false, true, false, 51), "filters", [], "array", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default((($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 51), "query", [], "any", false, false, false, 51), "all", [], "any", false, false, false, 51)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["filters"] ?? null) : null), [])) : ([])));
        // line 52
        yield "                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setAction", ["renderFilters"], "method", false, false, false, 53), "html", null, true);
        yield "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled ";
        yield (((($tmp = ($context["applied_filters"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("action-filters-applied") : (""));
        yield "\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:filter"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("filter.title", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 54), "translationParameters", [], "any", false, false, false, 54), "EasyAdminBundle"), [],         // line 6
($context["__internal_trans_default_domain7ef3c118ccfab12c5ee65c5e56454206"] ?? null)), "html", null, true);
        // line 54
        if ((($tmp = ($context["applied_filters"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " <span class=\"action-filters-button-count\">(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["applied_filters"] ?? null)), "html", null, true);
            yield ")</span>";
        }
        // line 55
        yield "                    </a>
                    ";
        // line 56
        if ((($tmp = ($context["applied_filters"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["filters"], "method", false, false, false, 57), "setAction", ["index"], "method", false, false, false, 57), "html", null, true);
            yield "\" class=\"btn btn-secondary action-filters-reset\">
                            ";
            // line 58
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:xmark"]);
            yield "
                        </a>
                    ";
        }
        // line 61
        yield "                </div>
            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_global_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        // line 67
        yield "        <div class=\"global-actions\">
            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), ($context["global_actions"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 69
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isActionGroup", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 70
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "templatePath", [], "any", false, false, false, 70), ["group" => $context["item"], "entity" => null], false);
                yield "
                ";
            } else {
                // line 72
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "templatePath", [], "any", false, false, false, 72), ["action" => $context["item"]], false);
                yield "
                ";
            }
            // line 74
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "        </div>
    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_batch_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 78
        yield "        ";
        if ((($tmp = ($context["has_batch_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "            <div class=\"batch-actions d-none\">
                ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["batch_actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 81
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 81), ["action" => $context["action"]], false);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "            </div>
        ";
        }
        // line 85
        yield "    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 89
        yield "    ";
        // line 90
        yield "    ";
        $context["sort_field_name"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 90), "get", ["sort"], "method", false, false, false, 90)));
        // line 91
        yield "    ";
        $context["sort_order"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 91), "get", ["sort"], "method", false, false, false, 91));
        // line 92
        yield "    ";
        $context["some_results_are_hidden"] = Twig\Extension\CoreExtension::reduce($this->env, ($context["entities"] ?? null), function ($__some_results_are_hidden__, $__entity__) use ($context, $macros) { $context["some_results_are_hidden"] = $__some_results_are_hidden__; $context["entity"] = $__entity__; return (($context["some_results_are_hidden"] ?? null) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "isAccessible", [], "any", false, false, false, 92)); }, false);
        // line 93
        yield "    ";
        $context["has_footer"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) != 0);
        // line 94
        yield "    ";
        $context["has_search"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 94), "isSearchEnabled", [], "any", false, false, false, 94);
        // line 95
        yield "    ";
        $context["has_filters"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) > 0);
        // line 96
        yield "    ";
        $context["num_results"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null));
        // line 97
        yield "
    <table class=\"table datagrid ";
        // line 98
        yield ((Twig\Extension\CoreExtension::testEmpty(($context["entities"] ?? null))) ? ("datagrid-empty") : (""));
        yield "\">
        ";
        // line 99
        if ((($context["num_results"] ?? null) > 0)) {
            // line 100
            yield "            <thead>
            ";
            // line 101
            yield from $this->unwrap()->yieldBlock('table_head', $context, $blocks);
            // line 140
            yield "            </thead>
        ";
        }
        // line 142
        yield "
        <tbody>
        ";
        // line 144
        yield from $this->unwrap()->yieldBlock('table_body', $context, $blocks);
        // line 232
        yield "        </tbody>

        <tfoot>
        ";
        // line 235
        yield from $this->unwrap()->yieldBlock('table_footer', $context, $blocks);
        // line 237
        yield "        </tfoot>
    </table>

    ";
        // line 240
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) > 0)) {
            // line 241
            yield "        <div class=\"content-panel-footer without-padding without-border\">
            ";
            // line 242
            yield from $this->unwrap()->yieldBlock('paginator', $context, $blocks);
            // line 245
            yield "        </div>
    ";
        }
        // line 247
        yield "
    ";
        // line 248
        yield from $this->unwrap()->yieldBlock('delete_form', $context, $blocks);
        // line 251
        yield "
    ";
        // line 252
        if ((($tmp = ($context["has_filters"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 253
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            yield "
    ";
        }
        // line 255
        yield "
    ";
        // line 256
        if ((($tmp = ($context["has_batch_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 257
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", [], false);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        // line 102
        yield "                <tr>
                    ";
        // line 103
        if ((($tmp = ($context["has_batch_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 104
            yield "                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\" id=\"form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    ";
        }
        // line 110
        yield "
                    ";
        // line 111
        $context["ea_sort_asc"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::ASC");
        // line 112
        yield "                    ";
        $context["ea_sort_desc"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::DESC");
        // line 113
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["entities"] ?? null), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isAccessible", [], "any", false, false, false, 113); })), "fields", [], "any", true, true, false, 113) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["entities"] ?? null), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isAccessible", [], "any", false, false, false, 113); })), "fields", [], "any", false, false, false, 113)))) ? (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["entities"] ?? null), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isAccessible", [], "any", false, false, false, 113); })), "fields", [], "any", false, false, false, 113)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 114
            yield "                        ";
            $context["is_searchable"] = ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 114), "searchFields", [], "any", false, false, false, 114)) || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 114), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 114), "searchFields", [], "any", false, false, false, 114)));
            // line 115
            yield "                        ";
            $context["is_sorting_field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 115), "isSortingField", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 115)], "method", false, false, false, 115);
            // line 116
            yield "                        ";
            $context["next_sort_direction"] = (((($tmp = ($context["is_sorting_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 116), "sortDirection", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 116)], "method", false, false, false, 116) == ($context["ea_sort_desc"] ?? null))) ? (($context["ea_sort_asc"] ?? null)) : (($context["ea_sort_desc"] ?? null)))) : (($context["ea_sort_desc"] ?? null)));
            // line 117
            yield "                        ";
            $context["column_icon"] = (((($tmp = ($context["is_sorting_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($context["next_sort_direction"] ?? null) == ($context["ea_sort_desc"] ?? null))) ? ("internal:sort-arrow-up") : ("internal:sort-arrow-down"))) : ("internal:sort-arrows"));
            // line 118
            yield "
                        <th data-column=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 119), "html", null, true);
            yield "\" class=\"";
            yield (((($tmp = ($context["is_searchable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("searchable") : (""));
            yield " ";
            yield (((($tmp = ($context["is_sorting_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("sorted") : (""));
            yield " ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("field-virtual") : (""));
            yield " header-for-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 119), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return (is_string($_v1 = ($context["class"] ?? null)) && is_string($_v2 = "field-") && str_starts_with($_v1, $_v2)); }), ""), "html", null, true);
            yield " text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 119), "html", null, true);
            yield "\" dir=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 119), "textDirection", [], "any", false, false, false, 119), "html", null, true);
            yield "\">
                            ";
            // line 120
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 121
                yield "                                ";
                $context["sortable_url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", ["page", 1], "method", false, false, false, 121), "set", ["sort", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 121) => ($context["next_sort_direction"] ?? null)]], "method", false, false, false, 121);
                // line 122
                yield "                                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "usePrettyUrls", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 123
                    yield "                                    ";
                    $context["sortable_url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sortable_url"] ?? null), "setController", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 123), "attributes", [], "any", false, false, false, 123), "get", ["crudControllerFqcn"], "method", false, false, false, 123)], "method", false, false, false, 123), "setAction", ["index"], "method", false, false, false, 123);
                    // line 124
                    yield "                                ";
                }
                // line 125
                yield "
                                <a href=\"";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sortable_url"] ?? null), "html", null, true);
                yield "\">
                                    ";
                // line 127
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 127), [],                 // line 6
($context["__internal_trans_default_domain7ef3c118ccfab12c5ee65c5e56454206"] ?? null));
                // line 127
                yield " ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["column_icon"] ?? null)]);
                yield "
                                </a>
                            ";
            } else {
                // line 130
                yield "                                <span>";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 130), [],                 // line 6
($context["__internal_trans_default_domain7ef3c118ccfab12c5ee65c5e56454206"] ?? null));
                // line 130
                yield "</span>
                            ";
            }
            // line 132
            yield "                        </th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "
                    <th class=\"";
        // line 135
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 135), "showEntityActionsAsDropdown", [], "any", false, false, false, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("actions-as-dropdown-table-head") : (""));
        yield "\" dir=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 135), "textDirection", [], "any", false, false, false, 135), "html", null, true);
        yield "\">
                        <span class=\"visually-hidden\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.entity_actions", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 136), "translationParameters", [], "any", false, false, false, 136), "EasyAdminBundle"), [],         // line 6
($context["__internal_trans_default_domain7ef3c118ccfab12c5ee65c5e56454206"] ?? null)), "html", null, true);
        // line 136
        yield "</span>
                    </th>
                </tr>
            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 144
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        // line 145
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["entities"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 146
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 147
                yield "                    <tr data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 147), "html", null, true);
                yield "\" ";
                yield from $this->unwrap()->yieldBlock('entity_row_attributes', $context, $blocks);
                yield ">
                        ";
                // line 148
                if ((($tmp = ($context["has_batch_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 149
                    yield "                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" id=\"form-batch-checkbox-";
                    // line 151
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 151), "html", null, true);
                    yield "\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 151), "html", null, true);
                    yield "\">
                                </div>
                            </td>
                        ";
                }
                // line 155
                yield "
                        ";
                // line 156
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 156));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 157
                    yield "                            ";
                    $context["is_searchable"] = ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 157), "searchFields", [], "any", false, false, false, 157)) || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 157), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 157), "searchFields", [], "any", false, false, false, 157)));
                    // line 158
                    yield "
                            <td data-column=\"";
                    // line 159
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 159), "html", null, true);
                    yield "\" data-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 159), [],                     // line 6
($context["__internal_trans_default_domain7ef3c118ccfab12c5ee65c5e56454206"] ?? null)), "html");
                    // line 159
                    yield "\" class=\"";
                    yield (((($tmp = ($context["is_searchable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("searchable") : (""));
                    yield " ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 159) == ($context["sort_field_name"] ?? null))) ? ("sorted") : (""));
                    yield " text-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 159), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 159), "html", null, true);
                    yield "\" dir=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 159), "textDirection", [], "any", false, false, false, 159), "html", null, true);
                    yield "\" ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "htmlAttributes", [], "any", false, false, false, 159));
                    foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                        yield "=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html_attr");
                        yield "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    yield ">
                                ";
                    // line 160
                    yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 160), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    yield "
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                yield "
                        ";
                // line 164
                yield from $this->unwrap()->yieldBlock('entity_actions', $context, $blocks);
                // line 198
                yield "                    </tr>

                ";
            }
            // line 201
            yield "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 202
            yield "                ";
            yield from $this->unwrap()->yieldBlock('table_body_empty', $context, $blocks);
            // line 222
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entity'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        yield "
            ";
        // line 224
        if ((($tmp = ($context["some_results_are_hidden"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 225
            yield "                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"100\">
                        <span class=\"datagrid-row-empty-message\">";
            // line 227
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock", "class" => "mr-1"]);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            yield "</span>
                    </td>
                </tr>
            ";
        }
        // line 231
        yield "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 147
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_row_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_row_attributes"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 164
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_actions"));

        // line 165
        yield "                            <td class=\"actions ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 165), "showEntityActionsAsDropdown", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("actions-as-dropdown") : (""));
        yield "\">
                                ";
        // line 166
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 166), "count", [], "any", false, false, false, 166) > 0)) {
            // line 167
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 167), "showEntityActionsAsDropdown", [], "any", false, false, false, 167)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 168
                yield "                                        ";
                $context["hasAnyActionWithIcon"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 168), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isActionGroup", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (false) : ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 168)))); })) > 0);
                // line 169
                yield "                                        ";
                $_v3 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
                $preRendered = $_v3->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-actions"]));
                if (null !== $preRendered) {
                    yield $preRendered; 
                } else {
                    $preRenderEvent = $_v3->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-actions"]), $context, "@EasyAdmin/crud/index.html.twig", 35549415901);
                    $embeddedContext = $preRenderEvent->getVariables();
                    $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                    $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                    $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 35549415901);
                    $this->load("@EasyAdmin/crud/index.html.twig", 169, "35549415901")->display($embeddedContext, $embeddedBlocks);
                    $_v3->finishEmbedComponent();
                }
                // line 186
                yield "                                    ";
            } else {
                // line 187
                yield "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 187));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 188
                    yield "                                            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["action"], "isActionGroup", [], "any", false, false, false, 188)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 189
                        yield "                                                ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 189), ["group" => $context["action"], "entity" => ($context["entity"] ?? null)], false);
                        yield "
                                            ";
                    } else {
                        // line 191
                        yield "                                                ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 191), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 191), "showEntityActionsAsDropdown", [], "any", false, false, false, 191)], false);
                        yield "
                                            ";
                    }
                    // line 193
                    yield "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                yield "                                    ";
            }
            // line 195
            yield "                                ";
        }
        // line 196
        yield "                            </td>
                        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 202
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_body_empty(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body_empty"));

        // line 203
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 14));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 204
            yield "                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        ";
            // line 213
            if ((3 == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 213))) {
                // line 214
                yield "                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    ";
                // line 216
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("datagrid.no_results", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 216), "translationParameters", [], "any", false, false, false, 216), "EasyAdminBundle"), [],                 // line 6
($context["__internal_trans_default_domain7ef3c118ccfab12c5ee65c5e56454206"] ?? null)), "html", null, true);
                // line 216
                yield "
                                </td>
                            </tr>
                        ";
            }
            // line 220
            yield "                    ";
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
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        yield "                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 235
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_footer"));

        // line 236
        yield "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 242
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paginator(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator"));

        // line 243
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["crud/paginator"], "method", false, false, false, 243), ["render_detailed_pagination" =>  !($context["some_results_are_hidden"] ?? null)]);
        yield "
            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 248
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delete_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        // line 249
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", [], false);
        yield "
    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  1086 => 249,  1076 => 248,  1065 => 243,  1055 => 242,  1047 => 236,  1037 => 235,  1029 => 221,  1015 => 220,  1009 => 216,  1007 => 6,  1006 => 216,  1002 => 214,  1000 => 213,  989 => 204,  971 => 203,  961 => 202,  952 => 196,  949 => 195,  946 => 194,  940 => 193,  934 => 191,  928 => 189,  925 => 188,  920 => 187,  917 => 186,  902 => 169,  899 => 168,  896 => 167,  894 => 166,  889 => 165,  879 => 164,  863 => 147,  855 => 231,  846 => 227,  842 => 225,  840 => 224,  837 => 223,  831 => 222,  828 => 202,  815 => 201,  810 => 198,  808 => 164,  805 => 163,  796 => 160,  771 => 159,  769 => 6,  766 => 159,  763 => 158,  760 => 157,  756 => 156,  753 => 155,  744 => 151,  740 => 149,  738 => 148,  731 => 147,  728 => 146,  709 => 145,  699 => 144,  688 => 136,  686 => 6,  685 => 136,  679 => 135,  676 => 134,  669 => 132,  665 => 130,  663 => 6,  661 => 130,  654 => 127,  652 => 6,  651 => 127,  647 => 126,  644 => 125,  641 => 124,  638 => 123,  635 => 122,  632 => 121,  630 => 120,  614 => 119,  611 => 118,  608 => 117,  605 => 116,  602 => 115,  599 => 114,  594 => 113,  591 => 112,  589 => 111,  586 => 110,  578 => 104,  576 => 103,  573 => 102,  563 => 101,  551 => 257,  549 => 256,  546 => 255,  540 => 253,  538 => 252,  535 => 251,  533 => 248,  530 => 247,  526 => 245,  524 => 242,  521 => 241,  519 => 240,  514 => 237,  512 => 235,  507 => 232,  505 => 144,  501 => 142,  497 => 140,  495 => 101,  492 => 100,  490 => 99,  486 => 98,  483 => 97,  480 => 96,  477 => 95,  474 => 94,  471 => 93,  468 => 92,  465 => 91,  462 => 90,  460 => 89,  450 => 88,  442 => 85,  438 => 83,  429 => 81,  425 => 80,  422 => 79,  419 => 78,  409 => 77,  400 => 75,  394 => 74,  388 => 72,  382 => 70,  379 => 69,  375 => 68,  372 => 67,  362 => 66,  353 => 61,  347 => 58,  342 => 57,  340 => 56,  337 => 55,  331 => 54,  329 => 6,  326 => 54,  320 => 53,  317 => 52,  314 => 51,  304 => 50,  295 => 77,  293 => 66,  290 => 65,  286 => 63,  284 => 50,  281 => 49,  278 => 48,  268 => 47,  260 => 6,  259 => 43,  258 => 6,  257 => 42,  256 => 41,  254 => 40,  244 => 39,  234 => 36,  230 => 35,  225 => 34,  215 => 33,  205 => 30,  201 => 29,  196 => 28,  186 => 27,  171 => 23,  167 => 22,  162 => 21,  152 => 20,  137 => 16,  133 => 15,  128 => 14,  118 => 13,  101 => 9,  84 => 8,  77 => 5,  75 => 46,  73 => 11,  71 => 6,  69 => 4,  59 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_525f9d20c81e7818e4ccb0ada00eb6a1___35549415901 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 169
        return $this->load(($context["__parent__"] ?? null), 169);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 170
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v4 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v4->preRender("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["withoutDropdownToggleMarker" => true]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v4->startEmbedComponent("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["withoutDropdownToggleMarker" => true]), $context, "@EasyAdmin/crud/index.html.twig", 30054531711);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 30054531711);
            $this->load("@EasyAdmin/crud/index.html.twig", 170, "30054531711")->display($embeddedContext, $embeddedBlocks);
            $_v4->finishEmbedComponent();
        }
        // line 173
        yield "
                                            ";
        // line 174
        $_v5 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v5->preRender("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v5->startEmbedComponent("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/crud/index.html.twig", 30250330661);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 30250330661);
            $this->load("@EasyAdmin/crud/index.html.twig", 174, "30250330661")->display($embeddedContext, $embeddedBlocks);
            $_v5->finishEmbedComponent();
        }
        // line 185
        yield "                                        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  1222 => 185,  1208 => 174,  1205 => 173,  1182 => 170,  1151 => 169,  1086 => 249,  1076 => 248,  1065 => 243,  1055 => 242,  1047 => 236,  1037 => 235,  1029 => 221,  1015 => 220,  1009 => 216,  1007 => 6,  1006 => 216,  1002 => 214,  1000 => 213,  989 => 204,  971 => 203,  961 => 202,  952 => 196,  949 => 195,  946 => 194,  940 => 193,  934 => 191,  928 => 189,  925 => 188,  920 => 187,  917 => 186,  902 => 169,  899 => 168,  896 => 167,  894 => 166,  889 => 165,  879 => 164,  863 => 147,  855 => 231,  846 => 227,  842 => 225,  840 => 224,  837 => 223,  831 => 222,  828 => 202,  815 => 201,  810 => 198,  808 => 164,  805 => 163,  796 => 160,  771 => 159,  769 => 6,  766 => 159,  763 => 158,  760 => 157,  756 => 156,  753 => 155,  744 => 151,  740 => 149,  738 => 148,  731 => 147,  728 => 146,  709 => 145,  699 => 144,  688 => 136,  686 => 6,  685 => 136,  679 => 135,  676 => 134,  669 => 132,  665 => 130,  663 => 6,  661 => 130,  654 => 127,  652 => 6,  651 => 127,  647 => 126,  644 => 125,  641 => 124,  638 => 123,  635 => 122,  632 => 121,  630 => 120,  614 => 119,  611 => 118,  608 => 117,  605 => 116,  602 => 115,  599 => 114,  594 => 113,  591 => 112,  589 => 111,  586 => 110,  578 => 104,  576 => 103,  573 => 102,  563 => 101,  551 => 257,  549 => 256,  546 => 255,  540 => 253,  538 => 252,  535 => 251,  533 => 248,  530 => 247,  526 => 245,  524 => 242,  521 => 241,  519 => 240,  514 => 237,  512 => 235,  507 => 232,  505 => 144,  501 => 142,  497 => 140,  495 => 101,  492 => 100,  490 => 99,  486 => 98,  483 => 97,  480 => 96,  477 => 95,  474 => 94,  471 => 93,  468 => 92,  465 => 91,  462 => 90,  460 => 89,  450 => 88,  442 => 85,  438 => 83,  429 => 81,  425 => 80,  422 => 79,  419 => 78,  409 => 77,  400 => 75,  394 => 74,  388 => 72,  382 => 70,  379 => 69,  375 => 68,  372 => 67,  362 => 66,  353 => 61,  347 => 58,  342 => 57,  340 => 56,  337 => 55,  331 => 54,  329 => 6,  326 => 54,  320 => 53,  317 => 52,  314 => 51,  304 => 50,  295 => 77,  293 => 66,  290 => 65,  286 => 63,  284 => 50,  281 => 49,  278 => 48,  268 => 47,  260 => 6,  259 => 43,  258 => 6,  257 => 42,  256 => 41,  254 => 40,  244 => 39,  234 => 36,  230 => 35,  225 => 34,  215 => 33,  205 => 30,  201 => 29,  196 => 28,  186 => 27,  171 => 23,  167 => 22,  162 => 21,  152 => 20,  137 => 16,  133 => 15,  128 => 14,  118 => 13,  101 => 9,  84 => 8,  77 => 5,  75 => 46,  73 => 11,  71 => 6,  69 => 4,  59 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_525f9d20c81e7818e4ccb0ada00eb6a1___30054531711 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 170
        return $this->load(($context["__parent__"] ?? null), 170);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 171
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:dots-horizontal"]);
        yield "
                                            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  1315 => 171,  1284 => 170,  1222 => 185,  1208 => 174,  1205 => 173,  1182 => 170,  1151 => 169,  1086 => 249,  1076 => 248,  1065 => 243,  1055 => 242,  1047 => 236,  1037 => 235,  1029 => 221,  1015 => 220,  1009 => 216,  1007 => 6,  1006 => 216,  1002 => 214,  1000 => 213,  989 => 204,  971 => 203,  961 => 202,  952 => 196,  949 => 195,  946 => 194,  940 => 193,  934 => 191,  928 => 189,  925 => 188,  920 => 187,  917 => 186,  902 => 169,  899 => 168,  896 => 167,  894 => 166,  889 => 165,  879 => 164,  863 => 147,  855 => 231,  846 => 227,  842 => 225,  840 => 224,  837 => 223,  831 => 222,  828 => 202,  815 => 201,  810 => 198,  808 => 164,  805 => 163,  796 => 160,  771 => 159,  769 => 6,  766 => 159,  763 => 158,  760 => 157,  756 => 156,  753 => 155,  744 => 151,  740 => 149,  738 => 148,  731 => 147,  728 => 146,  709 => 145,  699 => 144,  688 => 136,  686 => 6,  685 => 136,  679 => 135,  676 => 134,  669 => 132,  665 => 130,  663 => 6,  661 => 130,  654 => 127,  652 => 6,  651 => 127,  647 => 126,  644 => 125,  641 => 124,  638 => 123,  635 => 122,  632 => 121,  630 => 120,  614 => 119,  611 => 118,  608 => 117,  605 => 116,  602 => 115,  599 => 114,  594 => 113,  591 => 112,  589 => 111,  586 => 110,  578 => 104,  576 => 103,  573 => 102,  563 => 101,  551 => 257,  549 => 256,  546 => 255,  540 => 253,  538 => 252,  535 => 251,  533 => 248,  530 => 247,  526 => 245,  524 => 242,  521 => 241,  519 => 240,  514 => 237,  512 => 235,  507 => 232,  505 => 144,  501 => 142,  497 => 140,  495 => 101,  492 => 100,  490 => 99,  486 => 98,  483 => 97,  480 => 96,  477 => 95,  474 => 94,  471 => 93,  468 => 92,  465 => 91,  462 => 90,  460 => 89,  450 => 88,  442 => 85,  438 => 83,  429 => 81,  425 => 80,  422 => 79,  419 => 78,  409 => 77,  400 => 75,  394 => 74,  388 => 72,  382 => 70,  379 => 69,  375 => 68,  372 => 67,  362 => 66,  353 => 61,  347 => 58,  342 => 57,  340 => 56,  337 => 55,  331 => 54,  329 => 6,  326 => 54,  320 => 53,  317 => 52,  314 => 51,  304 => 50,  295 => 77,  293 => 66,  290 => 65,  286 => 63,  284 => 50,  281 => 49,  278 => 48,  268 => 47,  260 => 6,  259 => 43,  258 => 6,  257 => 42,  256 => 41,  254 => 40,  244 => 39,  234 => 36,  230 => 35,  225 => 34,  215 => 33,  205 => 30,  201 => 29,  196 => 28,  186 => 27,  171 => 23,  167 => 22,  162 => 21,  152 => 20,  137 => 16,  133 => 15,  128 => 14,  118 => 13,  101 => 9,  84 => 8,  77 => 5,  75 => 46,  73 => 11,  71 => 6,  69 => 4,  59 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_525f9d20c81e7818e4ccb0ada00eb6a1___30250330661 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 174
        return $this->load(($context["__parent__"] ?? null), 174);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 175
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v6 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v6->preRender("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray(["hasSubmenus" => (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 175), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isActionGroup", [], "any", false, false, false, 175); })) > 0)]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v6->startEmbedComponent("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray(["hasSubmenus" => (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 175), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isActionGroup", [], "any", false, false, false, 175); })) > 0)]), $context, "@EasyAdmin/crud/index.html.twig", 32763678681);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 32763678681);
            $this->load("@EasyAdmin/crud/index.html.twig", 175, "32763678681")->display($embeddedContext, $embeddedBlocks);
            $_v6->finishEmbedComponent();
        }
        // line 184
        yield "                                            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  1442 => 184,  1419 => 175,  1388 => 174,  1315 => 171,  1284 => 170,  1222 => 185,  1208 => 174,  1205 => 173,  1182 => 170,  1151 => 169,  1086 => 249,  1076 => 248,  1065 => 243,  1055 => 242,  1047 => 236,  1037 => 235,  1029 => 221,  1015 => 220,  1009 => 216,  1007 => 6,  1006 => 216,  1002 => 214,  1000 => 213,  989 => 204,  971 => 203,  961 => 202,  952 => 196,  949 => 195,  946 => 194,  940 => 193,  934 => 191,  928 => 189,  925 => 188,  920 => 187,  917 => 186,  902 => 169,  899 => 168,  896 => 167,  894 => 166,  889 => 165,  879 => 164,  863 => 147,  855 => 231,  846 => 227,  842 => 225,  840 => 224,  837 => 223,  831 => 222,  828 => 202,  815 => 201,  810 => 198,  808 => 164,  805 => 163,  796 => 160,  771 => 159,  769 => 6,  766 => 159,  763 => 158,  760 => 157,  756 => 156,  753 => 155,  744 => 151,  740 => 149,  738 => 148,  731 => 147,  728 => 146,  709 => 145,  699 => 144,  688 => 136,  686 => 6,  685 => 136,  679 => 135,  676 => 134,  669 => 132,  665 => 130,  663 => 6,  661 => 130,  654 => 127,  652 => 6,  651 => 127,  647 => 126,  644 => 125,  641 => 124,  638 => 123,  635 => 122,  632 => 121,  630 => 120,  614 => 119,  611 => 118,  608 => 117,  605 => 116,  602 => 115,  599 => 114,  594 => 113,  591 => 112,  589 => 111,  586 => 110,  578 => 104,  576 => 103,  573 => 102,  563 => 101,  551 => 257,  549 => 256,  546 => 255,  540 => 253,  538 => 252,  535 => 251,  533 => 248,  530 => 247,  526 => 245,  524 => 242,  521 => 241,  519 => 240,  514 => 237,  512 => 235,  507 => 232,  505 => 144,  501 => 142,  497 => 140,  495 => 101,  492 => 100,  490 => 99,  486 => 98,  483 => 97,  480 => 96,  477 => 95,  474 => 94,  471 => 93,  468 => 92,  465 => 91,  462 => 90,  460 => 89,  450 => 88,  442 => 85,  438 => 83,  429 => 81,  425 => 80,  422 => 79,  419 => 78,  409 => 77,  400 => 75,  394 => 74,  388 => 72,  382 => 70,  379 => 69,  375 => 68,  372 => 67,  362 => 66,  353 => 61,  347 => 58,  342 => 57,  340 => 56,  337 => 55,  331 => 54,  329 => 6,  326 => 54,  320 => 53,  317 => 52,  314 => 51,  304 => 50,  295 => 77,  293 => 66,  290 => 65,  286 => 63,  284 => 50,  281 => 49,  278 => 48,  268 => 47,  260 => 6,  259 => 43,  258 => 6,  257 => 42,  256 => 41,  254 => 40,  244 => 39,  234 => 36,  230 => 35,  225 => 34,  215 => 33,  205 => 30,  201 => 29,  196 => 28,  186 => 27,  171 => 23,  167 => 22,  162 => 21,  152 => 20,  137 => 16,  133 => 15,  128 => 14,  118 => 13,  101 => 9,  84 => 8,  77 => 5,  75 => 46,  73 => 11,  71 => 6,  69 => 4,  59 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_525f9d20c81e7818e4ccb0ada00eb6a1___32763678681 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 175
        return $this->load(($context["__parent__"] ?? null), 175);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 176
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 176));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 177
            yield "                                                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isActionGroup", [], "any", false, false, false, 177)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 178
                yield "                                                            ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:ItemGroup", ["group" => $context["item"], "showBlankIcons" => ($context["hasAnyActionWithIcon"] ?? null), "entity" => ($context["entity"] ?? null)]);
                yield "
                                                        ";
            } else {
                // line 180
                yield "                                                            ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 180) . " dropdown-item-variant-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "variant", [], "any", false, false, false, 180), "value", [], "any", false, false, false, 180)), "url" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 180), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 180), "icon:class" => "action-icon", "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "htmlAttributes", [], "any", false, false, false, 180), "renderAsForm" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isRenderedAsForm", [], "any", false, false, false, 180), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 180)), "label:class" => "action-label", "renderLabelRaw" => true, "showBlankIcons" => ($context["hasAnyActionWithIcon"] ?? null)]);
                yield "
                                                        ";
            }
            // line 182
            yield "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        yield "                                                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  1569 => 183,  1563 => 182,  1557 => 180,  1551 => 178,  1548 => 177,  1535 => 176,  1504 => 175,  1442 => 184,  1419 => 175,  1388 => 174,  1315 => 171,  1284 => 170,  1222 => 185,  1208 => 174,  1205 => 173,  1182 => 170,  1151 => 169,  1086 => 249,  1076 => 248,  1065 => 243,  1055 => 242,  1047 => 236,  1037 => 235,  1029 => 221,  1015 => 220,  1009 => 216,  1007 => 6,  1006 => 216,  1002 => 214,  1000 => 213,  989 => 204,  971 => 203,  961 => 202,  952 => 196,  949 => 195,  946 => 194,  940 => 193,  934 => 191,  928 => 189,  925 => 188,  920 => 187,  917 => 186,  902 => 169,  899 => 168,  896 => 167,  894 => 166,  889 => 165,  879 => 164,  863 => 147,  855 => 231,  846 => 227,  842 => 225,  840 => 224,  837 => 223,  831 => 222,  828 => 202,  815 => 201,  810 => 198,  808 => 164,  805 => 163,  796 => 160,  771 => 159,  769 => 6,  766 => 159,  763 => 158,  760 => 157,  756 => 156,  753 => 155,  744 => 151,  740 => 149,  738 => 148,  731 => 147,  728 => 146,  709 => 145,  699 => 144,  688 => 136,  686 => 6,  685 => 136,  679 => 135,  676 => 134,  669 => 132,  665 => 130,  663 => 6,  661 => 130,  654 => 127,  652 => 6,  651 => 127,  647 => 126,  644 => 125,  641 => 124,  638 => 123,  635 => 122,  632 => 121,  630 => 120,  614 => 119,  611 => 118,  608 => 117,  605 => 116,  602 => 115,  599 => 114,  594 => 113,  591 => 112,  589 => 111,  586 => 110,  578 => 104,  576 => 103,  573 => 102,  563 => 101,  551 => 257,  549 => 256,  546 => 255,  540 => 253,  538 => 252,  535 => 251,  533 => 248,  530 => 247,  526 => 245,  524 => 242,  521 => 241,  519 => 240,  514 => 237,  512 => 235,  507 => 232,  505 => 144,  501 => 142,  497 => 140,  495 => 101,  492 => 100,  490 => 99,  486 => 98,  483 => 97,  480 => 96,  477 => 95,  474 => 94,  471 => 93,  468 => 92,  465 => 91,  462 => 90,  460 => 89,  450 => 88,  442 => 85,  438 => 83,  429 => 81,  425 => 80,  422 => 79,  419 => 78,  409 => 77,  400 => 75,  394 => 74,  388 => 72,  382 => 70,  379 => 69,  375 => 68,  372 => 67,  362 => 66,  353 => 61,  347 => 58,  342 => 57,  340 => 56,  337 => 55,  331 => 54,  329 => 6,  326 => 54,  320 => 53,  317 => 52,  314 => 51,  304 => 50,  295 => 77,  293 => 66,  290 => 65,  286 => 63,  284 => 50,  281 => 49,  278 => 48,  268 => 47,  260 => 6,  259 => 43,  258 => 6,  257 => 42,  256 => 41,  254 => 40,  244 => 39,  234 => 36,  230 => 35,  225 => 34,  215 => 33,  205 => 30,  201 => 29,  196 => 28,  186 => 27,  171 => 23,  167 => 22,  162 => 21,  152 => 20,  137 => 16,  133 => 15,  128 => 14,  118 => 13,  101 => 9,  84 => 8,  77 => 5,  75 => 46,  73 => 11,  71 => 6,  69 => 4,  59 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\index.html.twig");
    }
}
