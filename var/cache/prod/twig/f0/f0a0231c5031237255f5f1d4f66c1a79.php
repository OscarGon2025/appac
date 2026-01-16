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
class __TwigTemplate_bbfc6eae37c93b85d67196e2da24227b extends Template
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
            'table_body_row' => [$this, 'block_table_body_row'],
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
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-index-" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["entities"] ?? null)), "name", [], "any", false, false, false, 8)), "html", null, true)) : (""));
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-index" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) > 0)) ? ((" ea-index-" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["entities"] ?? null)), "name", [], "any", false, false, false, 9))) : (""))), "html", null, true);
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_head_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_body_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        $context["custom_page_title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 40), "customPageTitle", ["index", null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "translationParameters", [], "any", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "translationDomain", [], "any", false, false, false, 40)], "method", false, false, false, 40);
        // line 41
        yield (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 42
($context["ea"] ?? null), "crud", [], "any", false, false, false, 42), "defaultPageTitle", ["index", null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 42), "translationParameters", [], "any", false, false, false, 42)], "method", false, false, false, 42), [],         // line 6
($context["__internal_trans_default_domain7ef3c118ccfab12c5ee65c5e56454206"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 43
($context["custom_page_title"] ?? null), [],         // line 6
($context["__internal_trans_default_domain7ef3c118ccfab12c5ee65c5e56454206"] ?? null))));
        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_filters(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_global_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_batch_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 89
        yield "    ";
        // line 90
        yield "    ";
        $context["sort_params"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 90), "query", [], "any", false, true, false, 90), "all", [], "any", false, true, false, 90), "sort", [], "array", true, true, false, 90)) ? (Twig\Extension\CoreExtension::default((($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 90), "query", [], "any", false, false, false, 90), "all", [], "any", false, false, false, 90)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["sort"] ?? null) : null), [])) : ([]));
        // line 91
        yield "    ";
        $context["sort_field_name"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys(($context["sort_params"] ?? null)));
        // line 92
        yield "    ";
        $context["sort_order"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["sort_params"] ?? null));
        // line 93
        yield "    ";
        $context["some_results_are_hidden"] = Twig\Extension\CoreExtension::reduce($this->env, ($context["entities"] ?? null), function ($__some_results_are_hidden__, $__entity__) use ($context, $macros) { $context["some_results_are_hidden"] = $__some_results_are_hidden__; $context["entity"] = $__entity__; return (($context["some_results_are_hidden"] ?? null) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "isAccessible", [], "any", false, false, false, 93)); }, false);
        // line 94
        yield "    ";
        $context["has_footer"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) != 0);
        // line 95
        yield "    ";
        $context["has_search"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 95), "isSearchEnabled", [], "any", false, false, false, 95);
        // line 96
        yield "    ";
        $context["has_filters"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) > 0);
        // line 97
        yield "    ";
        $context["num_results"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null));
        // line 98
        yield "
    <table class=\"table datagrid ";
        // line 99
        yield ((Twig\Extension\CoreExtension::testEmpty(($context["entities"] ?? null))) ? ("datagrid-empty") : (""));
        yield "\">
        ";
        // line 100
        if ((($context["num_results"] ?? null) > 0)) {
            // line 101
            yield "            <thead>
            ";
            // line 102
            yield from $this->unwrap()->yieldBlock('table_head', $context, $blocks);
            // line 141
            yield "            </thead>
        ";
        }
        // line 143
        yield "
        <tbody>
        ";
        // line 145
        yield from $this->unwrap()->yieldBlock('table_body', $context, $blocks);
        // line 235
        yield "        </tbody>

        <tfoot>
        ";
        // line 238
        yield from $this->unwrap()->yieldBlock('table_footer', $context, $blocks);
        // line 240
        yield "        </tfoot>
    </table>

    ";
        // line 243
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) > 0)) {
            // line 244
            yield "        <div class=\"content-panel-footer without-padding without-border\">
            ";
            // line 245
            yield from $this->unwrap()->yieldBlock('paginator', $context, $blocks);
            // line 248
            yield "        </div>
    ";
        }
        // line 250
        yield "
    ";
        // line 251
        yield from $this->unwrap()->yieldBlock('delete_form', $context, $blocks);
        // line 254
        yield "
    ";
        // line 255
        if ((($tmp = ($context["has_filters"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 256
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            yield "
    ";
        }
        // line 258
        yield "
    ";
        // line 259
        if ((($tmp = ($context["has_batch_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 260
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", [], false);
            yield "
    ";
        }
        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 103
        yield "                <tr>
                    ";
        // line 104
        if ((($tmp = ($context["has_batch_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\" id=\"form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    ";
        }
        // line 111
        yield "
                    ";
        // line 112
        $context["ea_sort_asc"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::ASC");
        // line 113
        yield "                    ";
        $context["ea_sort_desc"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::DESC");
        // line 114
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["entities"] ?? null), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isAccessible", [], "any", false, false, false, 114); })), "fields", [], "any", true, true, false, 114) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["entities"] ?? null), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isAccessible", [], "any", false, false, false, 114); })), "fields", [], "any", false, false, false, 114)))) ? (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["entities"] ?? null), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isAccessible", [], "any", false, false, false, 114); })), "fields", [], "any", false, false, false, 114)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 115
            yield "                        ";
            $context["is_searchable"] = ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 115), "searchFields", [], "any", false, false, false, 115)) || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 115), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 115), "searchFields", [], "any", false, false, false, 115)));
            // line 116
            yield "                        ";
            $context["is_sorting_field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 116), "isSortingField", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 116)], "method", false, false, false, 116);
            // line 117
            yield "                        ";
            $context["next_sort_direction"] = (((($tmp = ($context["is_sorting_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 117), "sortDirection", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 117)], "method", false, false, false, 117) == ($context["ea_sort_desc"] ?? null))) ? (($context["ea_sort_asc"] ?? null)) : (($context["ea_sort_desc"] ?? null)))) : (($context["ea_sort_desc"] ?? null)));
            // line 118
            yield "                        ";
            $context["column_icon"] = (((($tmp = ($context["is_sorting_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($context["next_sort_direction"] ?? null) == ($context["ea_sort_desc"] ?? null))) ? ("internal:sort-arrow-up") : ("internal:sort-arrow-down"))) : ("internal:sort-arrows"));
            // line 119
            yield "
                        <th data-column=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 120), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 120), "html", null, true);
            yield " ";
            yield (((($tmp = ($context["is_searchable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("searchable") : (""));
            yield " ";
            yield (((($tmp = ($context["is_sorting_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("sorted") : (""));
            yield " ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("field-virtual") : (""));
            yield " header-for-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 120), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return (is_string($_v2 = ($context["class"] ?? null)) && is_string($_v3 = "field-") && str_starts_with($_v2, $_v3)); }), ""), "html", null, true);
            yield " text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 120), "html", null, true);
            yield "\" dir=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 120), "textDirection", [], "any", false, false, false, 120), "html", null, true);
            yield "\">
                            ";
            // line 121
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 122
                yield "                                ";
                $context["sortable_url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", ["page", 1], "method", false, false, false, 122), "set", ["sort", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 122) => ($context["next_sort_direction"] ?? null)]], "method", false, false, false, 122);
                // line 123
                yield "                                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "usePrettyUrls", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 124
                    yield "                                    ";
                    $context["sortable_url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sortable_url"] ?? null), "setController", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 124), "attributes", [], "any", false, false, false, 124), "get", ["crudControllerFqcn"], "method", false, false, false, 124)], "method", false, false, false, 124), "setAction", ["index"], "method", false, false, false, 124);
                    // line 125
                    yield "                                ";
                }
                // line 126
                yield "
                                <a href=\"";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sortable_url"] ?? null), "html", null, true);
                yield "\">
                                    ";
                // line 128
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 128), [],                 // line 6
($context["__internal_trans_default_domain7ef3c118ccfab12c5ee65c5e56454206"] ?? null));
                // line 128
                yield " ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["column_icon"] ?? null)]);
                yield "
                                </a>
                            ";
            } else {
                // line 131
                yield "                                <span>";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 131), [],                 // line 6
($context["__internal_trans_default_domain7ef3c118ccfab12c5ee65c5e56454206"] ?? null));
                // line 131
                yield "</span>
                            ";
            }
            // line 133
            yield "                        </th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "
                    <th class=\"";
        // line 136
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 136), "showEntityActionsAsDropdown", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("actions-as-dropdown-table-head") : (""));
        yield "\" dir=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 136), "textDirection", [], "any", false, false, false, 136), "html", null, true);
        yield "\">
                        <span class=\"visually-hidden\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.entity_actions", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 137), "translationParameters", [], "any", false, false, false, 137), "EasyAdminBundle"), [],         // line 6
($context["__internal_trans_default_domain7ef3c118ccfab12c5ee65c5e56454206"] ?? null)), "html", null, true);
        // line 137
        yield "</span>
                    </th>
                </tr>
            ";
        yield from [];
    }

    // line 145
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 146
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
            // line 147
            yield "                ";
            yield from $this->unwrap()->yieldBlock('table_body_row', $context, $blocks);
            // line 204
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
            // line 205
            yield "                ";
            yield from $this->unwrap()->yieldBlock('table_body_empty', $context, $blocks);
            // line 225
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entity'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        yield "
            ";
        // line 227
        if ((($tmp = ($context["some_results_are_hidden"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 228
            yield "                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"100\">
                        <span class=\"datagrid-row-empty-message\">";
            // line 230
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock", "class" => "mr-1"]);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            yield "</span>
                    </td>
                </tr>
            ";
        }
        // line 234
        yield "        ";
        yield from [];
    }

    // line 147
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_body_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 148
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "isAccessible", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 149
            yield "                    <tr data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValueAsString", [], "any", false, false, false, 149), "html", null, true);
            yield "\" ";
            yield from $this->unwrap()->yieldBlock('entity_row_attributes', $context, $blocks);
            yield ">
                        ";
            // line 150
            if ((($tmp = ($context["has_batch_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 151
                yield "                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" id=\"form-batch-checkbox-";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["loop"] ?? null), "index0", [], "any", false, false, false, 153), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 153), "html", null, true);
                yield "\">
                                </div>
                            </td>
                        ";
            }
            // line 157
            yield "
                        ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "fields", [], "any", false, false, false, 158));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 159
                yield "                            ";
                $context["is_searchable"] = ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 159), "searchFields", [], "any", false, false, false, 159)) || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 159), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 159), "searchFields", [], "any", false, false, false, 159)));
                // line 160
                yield "
                            <td data-column=\"";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 161), "html", null, true);
                yield "\" data-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 161), [],                 // line 6
($context["__internal_trans_default_domain7ef3c118ccfab12c5ee65c5e56454206"] ?? null)), "html");
                // line 161
                yield "\" class=\"";
                yield (((($tmp = ($context["is_searchable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("searchable") : (""));
                yield " ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 161) == ($context["sort_field_name"] ?? null))) ? ("sorted") : (""));
                yield " text-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 161), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 161), "html", null, true);
                yield "\" dir=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 161), "textDirection", [], "any", false, false, false, 161), "html", null, true);
                yield "\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "htmlAttributes", [], "any", false, false, false, 161));
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
                // line 162
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 162), ["field" => $context["field"], "entity" => ($context["entity"] ?? null)], false);
                yield "
                            </td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            yield "
                        ";
            // line 166
            yield from $this->unwrap()->yieldBlock('entity_actions', $context, $blocks);
            // line 200
            yield "                    </tr>

                ";
        }
        // line 203
        yield "                ";
        yield from [];
    }

    // line 149
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_row_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 166
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 167
        yield "                            <td class=\"actions ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 167), "showEntityActionsAsDropdown", [], "any", false, false, false, 167)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("actions-as-dropdown") : (""));
        yield "\">
                                ";
        // line 168
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 168), "count", [], "any", false, false, false, 168) > 0)) {
            // line 169
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 169), "showEntityActionsAsDropdown", [], "any", false, false, false, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 170
                yield "                                        ";
                $context["hasAnyActionWithIcon"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 170), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isActionGroup", [], "any", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (false) : ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 170)))); })) > 0);
                // line 171
                yield "                                        ";
                $_v4 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
                $preRendered = $_v4->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-actions"]));
                if (null !== $preRendered) {
                    yield $preRendered; 
                } else {
                    $preRenderEvent = $_v4->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-actions"]), $context, "@EasyAdmin/crud/index.html.twig", 32907355891);
                    $embeddedContext = $preRenderEvent->getVariables();
                    $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                    $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                    $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 32907355891);
                    $this->load("@EasyAdmin/crud/index.html.twig", 171, "32907355891")->display($embeddedContext, $embeddedBlocks);
                    $_v4->finishEmbedComponent();
                }
                // line 188
                yield "                                    ";
            } else {
                // line 189
                yield "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 189));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 190
                    yield "                                            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["action"], "isActionGroup", [], "any", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 191
                        yield "                                                ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 191), ["group" => $context["action"], "entity" => ($context["entity"] ?? null)], false);
                        yield "
                                            ";
                    } else {
                        // line 193
                        yield "                                                ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 193), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 193), "showEntityActionsAsDropdown", [], "any", false, false, false, 193)], false);
                        yield "
                                            ";
                    }
                    // line 195
                    yield "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 196
                yield "                                    ";
            }
            // line 197
            yield "                                ";
        }
        // line 198
        yield "                            </td>
                        ";
        yield from [];
    }

    // line 205
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_body_empty(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 206
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
            // line 207
            yield "                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        ";
            // line 216
            if ((3 == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 216))) {
                // line 217
                yield "                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    ";
                // line 219
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("datagrid.no_results", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 219), "translationParameters", [], "any", false, false, false, 219), "EasyAdminBundle"), [],                 // line 6
($context["__internal_trans_default_domain7ef3c118ccfab12c5ee65c5e56454206"] ?? null)), "html", null, true);
                // line 219
                yield "
                                </td>
                            </tr>
                        ";
            }
            // line 223
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
        // line 224
        yield "                ";
        yield from [];
    }

    // line 238
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 239
        yield "        ";
        yield from [];
    }

    // line 245
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paginator(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 246
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["crud/paginator"], "method", false, false, false, 246), ["render_detailed_pagination" =>  !($context["some_results_are_hidden"] ?? null)]);
        yield "
            ";
        yield from [];
    }

    // line 251
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delete_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 252
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", [], false);
        yield "
    ";
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
        return array (  984 => 252,  977 => 251,  969 => 246,  962 => 245,  957 => 239,  950 => 238,  945 => 224,  931 => 223,  925 => 219,  923 => 6,  922 => 219,  918 => 217,  916 => 216,  905 => 207,  887 => 206,  880 => 205,  874 => 198,  871 => 197,  868 => 196,  862 => 195,  856 => 193,  850 => 191,  847 => 190,  842 => 189,  839 => 188,  824 => 171,  821 => 170,  818 => 169,  816 => 168,  811 => 167,  804 => 166,  794 => 149,  789 => 203,  784 => 200,  782 => 166,  779 => 165,  770 => 162,  745 => 161,  743 => 6,  740 => 161,  737 => 160,  734 => 159,  730 => 158,  727 => 157,  718 => 153,  714 => 151,  712 => 150,  705 => 149,  702 => 148,  695 => 147,  690 => 234,  681 => 230,  677 => 228,  675 => 227,  672 => 226,  666 => 225,  663 => 205,  650 => 204,  647 => 147,  628 => 146,  621 => 145,  613 => 137,  611 => 6,  610 => 137,  604 => 136,  601 => 135,  594 => 133,  590 => 131,  588 => 6,  586 => 131,  579 => 128,  577 => 6,  576 => 128,  572 => 127,  569 => 126,  566 => 125,  563 => 124,  560 => 123,  557 => 122,  555 => 121,  537 => 120,  534 => 119,  531 => 118,  528 => 117,  525 => 116,  522 => 115,  517 => 114,  514 => 113,  512 => 112,  509 => 111,  501 => 105,  499 => 104,  496 => 103,  489 => 102,  480 => 260,  478 => 259,  475 => 258,  469 => 256,  467 => 255,  464 => 254,  462 => 251,  459 => 250,  455 => 248,  453 => 245,  450 => 244,  448 => 243,  443 => 240,  441 => 238,  436 => 235,  434 => 145,  430 => 143,  426 => 141,  424 => 102,  421 => 101,  419 => 100,  415 => 99,  412 => 98,  409 => 97,  406 => 96,  403 => 95,  400 => 94,  397 => 93,  394 => 92,  391 => 91,  388 => 90,  386 => 89,  379 => 88,  374 => 85,  370 => 83,  361 => 81,  357 => 80,  354 => 79,  351 => 78,  344 => 77,  338 => 75,  332 => 74,  326 => 72,  320 => 70,  317 => 69,  313 => 68,  310 => 67,  303 => 66,  297 => 61,  291 => 58,  286 => 57,  284 => 56,  281 => 55,  275 => 54,  273 => 6,  270 => 54,  264 => 53,  261 => 52,  258 => 51,  251 => 50,  245 => 77,  243 => 66,  240 => 65,  236 => 63,  234 => 50,  231 => 49,  228 => 48,  221 => 47,  216 => 6,  215 => 43,  214 => 6,  213 => 42,  212 => 41,  210 => 40,  203 => 39,  196 => 36,  192 => 35,  187 => 34,  180 => 33,  173 => 30,  169 => 29,  164 => 28,  157 => 27,  145 => 23,  141 => 22,  136 => 21,  129 => 20,  117 => 16,  113 => 15,  108 => 14,  101 => 13,  90 => 9,  79 => 8,  75 => 5,  73 => 46,  71 => 11,  69 => 6,  67 => 4,  60 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_bbfc6eae37c93b85d67196e2da24227b___32907355891 extends Template
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
        // line 171
        return $this->load(($context["__parent__"] ?? null), 171);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 172
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $_v5 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v5->preRender("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["withoutDropdownToggleMarker" => true]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v5->startEmbedComponent("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["withoutDropdownToggleMarker" => true]), $context, "@EasyAdmin/crud/index.html.twig", 15632922551);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 15632922551);
            $this->load("@EasyAdmin/crud/index.html.twig", 172, "15632922551")->display($embeddedContext, $embeddedBlocks);
            $_v5->finishEmbedComponent();
        }
        // line 175
        yield "
                                            ";
        // line 176
        $_v6 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v6->preRender("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v6->startEmbedComponent("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/crud/index.html.twig", 15141576381);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 15141576381);
            $this->load("@EasyAdmin/crud/index.html.twig", 176, "15141576381")->display($embeddedContext, $embeddedBlocks);
            $_v6->finishEmbedComponent();
        }
        // line 187
        yield "                                        ";
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
        return array (  1102 => 187,  1088 => 176,  1085 => 175,  1065 => 172,  1046 => 171,  984 => 252,  977 => 251,  969 => 246,  962 => 245,  957 => 239,  950 => 238,  945 => 224,  931 => 223,  925 => 219,  923 => 6,  922 => 219,  918 => 217,  916 => 216,  905 => 207,  887 => 206,  880 => 205,  874 => 198,  871 => 197,  868 => 196,  862 => 195,  856 => 193,  850 => 191,  847 => 190,  842 => 189,  839 => 188,  824 => 171,  821 => 170,  818 => 169,  816 => 168,  811 => 167,  804 => 166,  794 => 149,  789 => 203,  784 => 200,  782 => 166,  779 => 165,  770 => 162,  745 => 161,  743 => 6,  740 => 161,  737 => 160,  734 => 159,  730 => 158,  727 => 157,  718 => 153,  714 => 151,  712 => 150,  705 => 149,  702 => 148,  695 => 147,  690 => 234,  681 => 230,  677 => 228,  675 => 227,  672 => 226,  666 => 225,  663 => 205,  650 => 204,  647 => 147,  628 => 146,  621 => 145,  613 => 137,  611 => 6,  610 => 137,  604 => 136,  601 => 135,  594 => 133,  590 => 131,  588 => 6,  586 => 131,  579 => 128,  577 => 6,  576 => 128,  572 => 127,  569 => 126,  566 => 125,  563 => 124,  560 => 123,  557 => 122,  555 => 121,  537 => 120,  534 => 119,  531 => 118,  528 => 117,  525 => 116,  522 => 115,  517 => 114,  514 => 113,  512 => 112,  509 => 111,  501 => 105,  499 => 104,  496 => 103,  489 => 102,  480 => 260,  478 => 259,  475 => 258,  469 => 256,  467 => 255,  464 => 254,  462 => 251,  459 => 250,  455 => 248,  453 => 245,  450 => 244,  448 => 243,  443 => 240,  441 => 238,  436 => 235,  434 => 145,  430 => 143,  426 => 141,  424 => 102,  421 => 101,  419 => 100,  415 => 99,  412 => 98,  409 => 97,  406 => 96,  403 => 95,  400 => 94,  397 => 93,  394 => 92,  391 => 91,  388 => 90,  386 => 89,  379 => 88,  374 => 85,  370 => 83,  361 => 81,  357 => 80,  354 => 79,  351 => 78,  344 => 77,  338 => 75,  332 => 74,  326 => 72,  320 => 70,  317 => 69,  313 => 68,  310 => 67,  303 => 66,  297 => 61,  291 => 58,  286 => 57,  284 => 56,  281 => 55,  275 => 54,  273 => 6,  270 => 54,  264 => 53,  261 => 52,  258 => 51,  251 => 50,  245 => 77,  243 => 66,  240 => 65,  236 => 63,  234 => 50,  231 => 49,  228 => 48,  221 => 47,  216 => 6,  215 => 43,  214 => 6,  213 => 42,  212 => 41,  210 => 40,  203 => 39,  196 => 36,  192 => 35,  187 => 34,  180 => 33,  173 => 30,  169 => 29,  164 => 28,  157 => 27,  145 => 23,  141 => 22,  136 => 21,  129 => 20,  117 => 16,  113 => 15,  108 => 14,  101 => 13,  90 => 9,  79 => 8,  75 => 5,  73 => 46,  71 => 11,  69 => 6,  67 => 4,  60 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_bbfc6eae37c93b85d67196e2da24227b___15632922551 extends Template
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
        // line 172
        return $this->load(($context["__parent__"] ?? null), 172);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 173
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:dots-horizontal"]);
        yield "
                                            ";
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
        return array (  1180 => 173,  1161 => 172,  1102 => 187,  1088 => 176,  1085 => 175,  1065 => 172,  1046 => 171,  984 => 252,  977 => 251,  969 => 246,  962 => 245,  957 => 239,  950 => 238,  945 => 224,  931 => 223,  925 => 219,  923 => 6,  922 => 219,  918 => 217,  916 => 216,  905 => 207,  887 => 206,  880 => 205,  874 => 198,  871 => 197,  868 => 196,  862 => 195,  856 => 193,  850 => 191,  847 => 190,  842 => 189,  839 => 188,  824 => 171,  821 => 170,  818 => 169,  816 => 168,  811 => 167,  804 => 166,  794 => 149,  789 => 203,  784 => 200,  782 => 166,  779 => 165,  770 => 162,  745 => 161,  743 => 6,  740 => 161,  737 => 160,  734 => 159,  730 => 158,  727 => 157,  718 => 153,  714 => 151,  712 => 150,  705 => 149,  702 => 148,  695 => 147,  690 => 234,  681 => 230,  677 => 228,  675 => 227,  672 => 226,  666 => 225,  663 => 205,  650 => 204,  647 => 147,  628 => 146,  621 => 145,  613 => 137,  611 => 6,  610 => 137,  604 => 136,  601 => 135,  594 => 133,  590 => 131,  588 => 6,  586 => 131,  579 => 128,  577 => 6,  576 => 128,  572 => 127,  569 => 126,  566 => 125,  563 => 124,  560 => 123,  557 => 122,  555 => 121,  537 => 120,  534 => 119,  531 => 118,  528 => 117,  525 => 116,  522 => 115,  517 => 114,  514 => 113,  512 => 112,  509 => 111,  501 => 105,  499 => 104,  496 => 103,  489 => 102,  480 => 260,  478 => 259,  475 => 258,  469 => 256,  467 => 255,  464 => 254,  462 => 251,  459 => 250,  455 => 248,  453 => 245,  450 => 244,  448 => 243,  443 => 240,  441 => 238,  436 => 235,  434 => 145,  430 => 143,  426 => 141,  424 => 102,  421 => 101,  419 => 100,  415 => 99,  412 => 98,  409 => 97,  406 => 96,  403 => 95,  400 => 94,  397 => 93,  394 => 92,  391 => 91,  388 => 90,  386 => 89,  379 => 88,  374 => 85,  370 => 83,  361 => 81,  357 => 80,  354 => 79,  351 => 78,  344 => 77,  338 => 75,  332 => 74,  326 => 72,  320 => 70,  317 => 69,  313 => 68,  310 => 67,  303 => 66,  297 => 61,  291 => 58,  286 => 57,  284 => 56,  281 => 55,  275 => 54,  273 => 6,  270 => 54,  264 => 53,  261 => 52,  258 => 51,  251 => 50,  245 => 77,  243 => 66,  240 => 65,  236 => 63,  234 => 50,  231 => 49,  228 => 48,  221 => 47,  216 => 6,  215 => 43,  214 => 6,  213 => 42,  212 => 41,  210 => 40,  203 => 39,  196 => 36,  192 => 35,  187 => 34,  180 => 33,  173 => 30,  169 => 29,  164 => 28,  157 => 27,  145 => 23,  141 => 22,  136 => 21,  129 => 20,  117 => 16,  113 => 15,  108 => 14,  101 => 13,  90 => 9,  79 => 8,  75 => 5,  73 => 46,  71 => 11,  69 => 6,  67 => 4,  60 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_bbfc6eae37c93b85d67196e2da24227b___15141576381 extends Template
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
        // line 176
        return $this->load(($context["__parent__"] ?? null), 176);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 177
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $_v7 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v7->preRender("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray(["hasSubmenus" => (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 177), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isActionGroup", [], "any", false, false, false, 177); })) > 0)]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v7->startEmbedComponent("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray(["hasSubmenus" => (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 177), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isActionGroup", [], "any", false, false, false, 177); })) > 0)]), $context, "@EasyAdmin/crud/index.html.twig", 7596295201);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 7596295201);
            $this->load("@EasyAdmin/crud/index.html.twig", 177, "7596295201")->display($embeddedContext, $embeddedBlocks);
            $_v7->finishEmbedComponent();
        }
        // line 186
        yield "                                            ";
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
        return array (  1286 => 186,  1266 => 177,  1247 => 176,  1180 => 173,  1161 => 172,  1102 => 187,  1088 => 176,  1085 => 175,  1065 => 172,  1046 => 171,  984 => 252,  977 => 251,  969 => 246,  962 => 245,  957 => 239,  950 => 238,  945 => 224,  931 => 223,  925 => 219,  923 => 6,  922 => 219,  918 => 217,  916 => 216,  905 => 207,  887 => 206,  880 => 205,  874 => 198,  871 => 197,  868 => 196,  862 => 195,  856 => 193,  850 => 191,  847 => 190,  842 => 189,  839 => 188,  824 => 171,  821 => 170,  818 => 169,  816 => 168,  811 => 167,  804 => 166,  794 => 149,  789 => 203,  784 => 200,  782 => 166,  779 => 165,  770 => 162,  745 => 161,  743 => 6,  740 => 161,  737 => 160,  734 => 159,  730 => 158,  727 => 157,  718 => 153,  714 => 151,  712 => 150,  705 => 149,  702 => 148,  695 => 147,  690 => 234,  681 => 230,  677 => 228,  675 => 227,  672 => 226,  666 => 225,  663 => 205,  650 => 204,  647 => 147,  628 => 146,  621 => 145,  613 => 137,  611 => 6,  610 => 137,  604 => 136,  601 => 135,  594 => 133,  590 => 131,  588 => 6,  586 => 131,  579 => 128,  577 => 6,  576 => 128,  572 => 127,  569 => 126,  566 => 125,  563 => 124,  560 => 123,  557 => 122,  555 => 121,  537 => 120,  534 => 119,  531 => 118,  528 => 117,  525 => 116,  522 => 115,  517 => 114,  514 => 113,  512 => 112,  509 => 111,  501 => 105,  499 => 104,  496 => 103,  489 => 102,  480 => 260,  478 => 259,  475 => 258,  469 => 256,  467 => 255,  464 => 254,  462 => 251,  459 => 250,  455 => 248,  453 => 245,  450 => 244,  448 => 243,  443 => 240,  441 => 238,  436 => 235,  434 => 145,  430 => 143,  426 => 141,  424 => 102,  421 => 101,  419 => 100,  415 => 99,  412 => 98,  409 => 97,  406 => 96,  403 => 95,  400 => 94,  397 => 93,  394 => 92,  391 => 91,  388 => 90,  386 => 89,  379 => 88,  374 => 85,  370 => 83,  361 => 81,  357 => 80,  354 => 79,  351 => 78,  344 => 77,  338 => 75,  332 => 74,  326 => 72,  320 => 70,  317 => 69,  313 => 68,  310 => 67,  303 => 66,  297 => 61,  291 => 58,  286 => 57,  284 => 56,  281 => 55,  275 => 54,  273 => 6,  270 => 54,  264 => 53,  261 => 52,  258 => 51,  251 => 50,  245 => 77,  243 => 66,  240 => 65,  236 => 63,  234 => 50,  231 => 49,  228 => 48,  221 => 47,  216 => 6,  215 => 43,  214 => 6,  213 => 42,  212 => 41,  210 => 40,  203 => 39,  196 => 36,  192 => 35,  187 => 34,  180 => 33,  173 => 30,  169 => 29,  164 => 28,  157 => 27,  145 => 23,  141 => 22,  136 => 21,  129 => 20,  117 => 16,  113 => 15,  108 => 14,  101 => 13,  90 => 9,  79 => 8,  75 => 5,  73 => 46,  71 => 11,  69 => 6,  67 => 4,  60 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_bbfc6eae37c93b85d67196e2da24227b___7596295201 extends Template
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
        // line 177
        return $this->load(($context["__parent__"] ?? null), 177);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 178
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 178));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 179
            yield "                                                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isActionGroup", [], "any", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 180
                yield "                                                            ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:ItemGroup", ["group" => $context["item"], "showBlankIcons" => ($context["hasAnyActionWithIcon"] ?? null), "entity" => ($context["entity"] ?? null)]);
                yield "
                                                        ";
            } else {
                // line 182
                yield "                                                            ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 182) . " dropdown-item-variant-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "variant", [], "any", false, false, false, 182), "value", [], "any", false, false, false, 182)), "url" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 182), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 182), "icon:class" => "action-icon", "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "htmlAttributes", [], "any", false, false, false, 182), "renderAsForm" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isRenderedAsForm", [], "any", false, false, false, 182), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 182)), "label:class" => "action-label", "renderLabelRaw" => true, "showBlankIcons" => ($context["hasAnyActionWithIcon"] ?? null)]);
                yield "
                                                        ";
            }
            // line 184
            yield "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        yield "                                                ";
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
        return array (  1395 => 185,  1389 => 184,  1383 => 182,  1377 => 180,  1374 => 179,  1364 => 178,  1345 => 177,  1286 => 186,  1266 => 177,  1247 => 176,  1180 => 173,  1161 => 172,  1102 => 187,  1088 => 176,  1085 => 175,  1065 => 172,  1046 => 171,  984 => 252,  977 => 251,  969 => 246,  962 => 245,  957 => 239,  950 => 238,  945 => 224,  931 => 223,  925 => 219,  923 => 6,  922 => 219,  918 => 217,  916 => 216,  905 => 207,  887 => 206,  880 => 205,  874 => 198,  871 => 197,  868 => 196,  862 => 195,  856 => 193,  850 => 191,  847 => 190,  842 => 189,  839 => 188,  824 => 171,  821 => 170,  818 => 169,  816 => 168,  811 => 167,  804 => 166,  794 => 149,  789 => 203,  784 => 200,  782 => 166,  779 => 165,  770 => 162,  745 => 161,  743 => 6,  740 => 161,  737 => 160,  734 => 159,  730 => 158,  727 => 157,  718 => 153,  714 => 151,  712 => 150,  705 => 149,  702 => 148,  695 => 147,  690 => 234,  681 => 230,  677 => 228,  675 => 227,  672 => 226,  666 => 225,  663 => 205,  650 => 204,  647 => 147,  628 => 146,  621 => 145,  613 => 137,  611 => 6,  610 => 137,  604 => 136,  601 => 135,  594 => 133,  590 => 131,  588 => 6,  586 => 131,  579 => 128,  577 => 6,  576 => 128,  572 => 127,  569 => 126,  566 => 125,  563 => 124,  560 => 123,  557 => 122,  555 => 121,  537 => 120,  534 => 119,  531 => 118,  528 => 117,  525 => 116,  522 => 115,  517 => 114,  514 => 113,  512 => 112,  509 => 111,  501 => 105,  499 => 104,  496 => 103,  489 => 102,  480 => 260,  478 => 259,  475 => 258,  469 => 256,  467 => 255,  464 => 254,  462 => 251,  459 => 250,  455 => 248,  453 => 245,  450 => 244,  448 => 243,  443 => 240,  441 => 238,  436 => 235,  434 => 145,  430 => 143,  426 => 141,  424 => 102,  421 => 101,  419 => 100,  415 => 99,  412 => 98,  409 => 97,  406 => 96,  403 => 95,  400 => 94,  397 => 93,  394 => 92,  391 => 91,  388 => 90,  386 => 89,  379 => 88,  374 => 85,  370 => 83,  361 => 81,  357 => 80,  354 => 79,  351 => 78,  344 => 77,  338 => 75,  332 => 74,  326 => 72,  320 => 70,  317 => 69,  313 => 68,  310 => 67,  303 => 66,  297 => 61,  291 => 58,  286 => 57,  284 => 56,  281 => 55,  275 => 54,  273 => 6,  270 => 54,  264 => 53,  261 => 52,  258 => 51,  251 => 50,  245 => 77,  243 => 66,  240 => 65,  236 => 63,  234 => 50,  231 => 49,  228 => 48,  221 => 47,  216 => 6,  215 => 43,  214 => 6,  213 => 42,  212 => 41,  210 => 40,  203 => 39,  196 => 36,  192 => 35,  187 => 34,  180 => 33,  173 => 30,  169 => 29,  164 => 28,  157 => 27,  145 => 23,  141 => 22,  136 => 21,  129 => 20,  117 => 16,  113 => 15,  108 => 14,  101 => 13,  90 => 9,  79 => 8,  75 => 5,  73 => 46,  71 => 11,  69 => 6,  67 => 4,  60 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\index.html.twig");
    }
}
