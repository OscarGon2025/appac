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
class __TwigTemplate_258815031c4b5b933900ea79e78889ce extends Template
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
        // line 3
        $context["ea"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea();
        // line 9
        $context["ea_field_assets"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 9), "fieldAssets", [Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_DETAIL")], "method", false, false, false, 9);
        // line 4
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((("ea-detail-" . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 6)) . "-") . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 6)), "html", null, true);
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-detail ea-detail-" . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 7)), "html", null, true);
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_head_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_body_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        $context["custom_page_title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 38), "customPageTitle", [($context["pageName"] ?? null), (((($tmp = ($context["entity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "instance", [], "any", false, false, false, 38)) : (null)), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 38), "translationParameters", [], "any", false, false, false, 38), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 38), "translationDomain", [], "any", false, false, false, 38)], "method", false, false, false, 38);
        // line 39
        yield (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["ea"] ?? null), "crud", [], "any", false, false, false, 40), "defaultPageTitle", [null, null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "translationParameters", [], "any", false, false, false, 40)], "method", false, false, false, 40))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 41
($context["custom_page_title"] ?? null))));
        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 55
        yield "    ";
        yield from $this->unwrap()->yieldBlock('detail_fields', $context, $blocks);
        // line 64
        yield "
    ";
        // line 65
        yield from $this->unwrap()->yieldBlock('delete_form', $context, $blocks);
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_detail_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delete_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 66)], false);
        yield "
    ";
        yield from [];
    }

    // line 323
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_detail_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 324
        yield "            ";
        if ((($tmp =  !($context["is_form_fieldset"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 325
            yield "                ";
            yield $this->getTemplateForMacro("macro_render_field", $context, 325, $this->getSourceContext())->macro_render_field(...[($context["entity"] ?? null), ($context["field"] ?? null)]);
            yield "
            ";
        }
        // line 327
        yield "        ";
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
            // line 152
            yield "    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
";
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
            // line 157
            yield "        </div>
    </div>
";
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
            // line 176
            yield "        </div>
    </div>
";
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
            // line 181
            yield "    ";
            // line 182
            yield "    ";
            if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", true, true, false, 182)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", false, false, false, 182), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 183
                yield "        <div class=\"row\">
    ";
            }
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
            // line 188
            yield "    ";
            // line 189
            yield "    ";
            if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", true, true, false, 189)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", false, false, false, 189), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 190
                yield "        </div>
    ";
            }
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
            // line 214
            yield "    </div>
";
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
            // line 265
            yield "                </div>
            </div>
        </fieldset>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 271
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
            // line 272
            yield "    ";
            trigger_deprecation('', '', "The \"render_detail_fields_with_tabs\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 272.");
            // line 273
            yield "
    <div class=\"col-12\">
        <div class=\"nav-tabs-custom form-tabs\">
            <ul class=\"nav nav-tabs\">
                ";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field_layout"] ?? null), "tabs", [], "any", false, false, false, 277));
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
                // line 278
                yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
                // line 279
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 279)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield "\" href=\"#tab-pane-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 279), "html", null, true);
                yield "\" id=\"tab-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 279), "html", null, true);
                yield "\" data-bs-toggle=\"tab\">";
                // line 280
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "customOption", ["icon"], "method", false, false, false, 280)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 281
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "customOption", ["icon"], "method", false, false, false, 281)]);
                }
                // line 283
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 283), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "i18n", [], "any", false, false, false, 283), "translationDomain", [], "any", false, false, false, 283));
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
            // line 287
            yield "            </ul>
            <div class=\"tab-content\">
                ";
            // line 289
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field_layout"] ?? null), "tabs", [], "any", false, false, false, 289));
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
                // line 290
                yield "                    <div id=\"tab-pane-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 290), "html", null, true);
                yield "\" class=\"tab-pane ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 290)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "cssClass", [], "any", true, true, false, 290)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "cssClass", [], "any", false, false, false, 290), "")) : ("")), "html", null, true);
                yield "\">
                        ";
                // line 291
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "help", [], "any", true, true, false, 291)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "help", [], "any", false, false, false, 291), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 292
                    yield "                            <div class=\"content-header-help tab-help\">
                                ";
                    // line 293
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "help", [], "any", false, false, false, 293), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "i18n", [], "any", false, false, false, 293), "translationDomain", [], "any", false, false, false, 293));
                    yield "
                            </div>
                        ";
                }
                // line 296
                yield "                        <div class=\"row\">
                            ";
                // line 297
                yield $this->getTemplateForMacro("macro_render_detail_fields", $context, 297, $this->getSourceContext())->macro_render_detail_fields(...[($context["entity"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["field_layout"] ?? null), "fieldsInTab", [CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 297)], "method", false, false, false, 297)]);
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
            // line 301
            yield "            </div>
        </div>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 306
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
            // line 307
            yield "    ";
            trigger_deprecation('', '', "The \"render_detail_fields\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 307.");
            // line 308
            yield "
    ";
            // line 309
            $context["form_fieldset_is_already_open"] = false;
            // line 310
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
                // line 311
                yield "        ";
                $context["is_form_fieldset"] = CoreExtension::inFilter("field-form_fieldset", CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 311));
                // line 312
                yield "
        ";
                // line 313
                if ((($context["is_form_fieldset"] ?? null) || (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 313) &&  !($context["is_form_fieldset"] ?? null)))) {
                    // line 314
                    yield "            ";
                    if ((($tmp = ($context["form_fieldset_is_already_open"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 315
                        yield "                ";
                        yield $this->getTemplateForMacro("macro_close_form_fieldset", $context, 315, $this->getSourceContext())->macro_close_form_fieldset(...[]);
                        yield "
                ";
                        // line 316
                        $context["form_fieldset_is_already_open"] = false;
                        // line 317
                        yield "            ";
                    }
                    // line 318
                    yield "
            ";
                    // line 319
                    yield $this->getTemplateForMacro("macro_open_form_fieldset", $context, 319, $this->getSourceContext())->macro_open_form_fieldset(...[(((($tmp = ($context["is_form_fieldset"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["field"]) : (null))]);
                    yield "
            ";
                    // line 320
                    $context["form_fieldset_is_already_open"] = true;
                    // line 321
                    yield "        ";
                }
                // line 322
                yield "
        ";
                // line 323
                yield from $this->unwrap()->yieldBlock('detail_field', $context, $blocks);
                // line 328
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
            // line 329
            yield "
    ";
            // line 330
            if ((($tmp = ($context["form_fieldset_is_already_open"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 331
                yield "        ";
                yield $this->getTemplateForMacro("macro_close_form_fieldset", $context, 331, $this->getSourceContext())->macro_close_form_fieldset(...[]);
                yield "
        ";
                // line 332
                $context["form_fieldset_is_already_open"] = false;
                // line 333
                yield "    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 336
    public function macro_open_form_fieldset($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 337
            yield "    ";
            trigger_deprecation('', '', "The \"open_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 337.");
            // line 338
            yield "
    ";
            // line 339
            $context["fieldset_name"] = (((null === ($context["field"] ?? null))) ? (null) : (("content-" . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 339))));
            // line 340
            yield "    ";
            $context["collapsible"] = (((null === ($context["field"] ?? null))) ? (false) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOption", ["collapsible"], "method", false, false, false, 340)));
            // line 341
            yield "    ";
            $context["collapsed"] = (((null === ($context["field"] ?? null))) ? (false) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOption", ["collapsed"], "method", false, false, false, 341)));
            // line 342
            yield "    ";
            $context["fieldset_icon"] = (((null === ($context["field"] ?? null))) ? (null) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 342), "get", ["icon"], "method", true, true, false, 342)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 342), "get", ["icon"], "method", false, false, false, 342), false)) : (false))));
            // line 343
            yield "    ";
            $context["fieldset_label"] = (((null === ($context["field"] ?? null))) ? (null) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 343)));
            // line 344
            yield "    ";
            $context["fieldset_help"] = (((null === ($context["field"] ?? null))) ? (null) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 344)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 344), false)) : (false))));
            // line 345
            yield "    ";
            $context["fieldset_has_header"] = (((($context["collapsible"] ?? null) || ($context["fieldset_icon"] ?? null)) || ($context["fieldset_label"] ?? null)) || ($context["fieldset_help"] ?? null));
            // line 346
            yield "
    <div class=\"";
            // line 347
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", true, true, false, 347) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 347)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 347), "html", null, true)) : (""));
            yield "\">
        <div class=\"form-fieldset\">
            ";
            // line 349
            if ((($tmp = ($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 350
                yield "                <div class=\"form-fieldset-header ";
                yield (((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
                yield " ";
                yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["fieldset_help"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
                yield "\">
                    <div class=\"form-fieldset-title\">
                        <a ";
                // line 352
                if ((($tmp =  !($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 353
                    yield "                            href=\"#\" class=\"not-collapsible\"
                        ";
                } else {
                    // line 355
                    yield "                            href=\"#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fieldset_name"] ?? null), "html", null, true);
                    yield "\" data-bs-toggle=\"collapse\"
                            class=\"form-fieldset-collapse ";
                    // line 356
                    yield (((($tmp = ($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
                    yield "\"
                            aria-expanded=\"";
                    // line 357
                    yield (((($tmp = ($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                    yield "\" aria-controls=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fieldset_name"] ?? null), "html", null, true);
                    yield "\"
                        ";
                }
                // line 359
                yield "                        >
                            ";
                // line 360
                if ((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 361
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-fieldset-collapse-marker"]);
                    yield "
                            ";
                }
                // line 363
                yield "
                            ";
                // line 364
                if ((($tmp = ($context["fieldset_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 365
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["fieldset_icon"] ?? null), "class" => "form-fieldset-icon"]);
                    yield "
                            ";
                }
                // line 367
                yield "                            ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["fieldset_label"] ?? null));
                yield "
                        </a>

                        ";
                // line 370
                if ((($tmp = ($context["fieldset_help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 371
                    yield "                            <div class=\"form-fieldset-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["fieldset_help"] ?? null));
                    yield "</div>
                        ";
                }
                // line 373
                yield "                    </div>
                </div>
            ";
            }
            // line 376
            yield "
            <div ";
            // line 377
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
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 381
    public function macro_close_form_fieldset(...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 382
            yield "    ";
            trigger_deprecation('', '', "The \"close_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 382.");
            // line 383
            yield "
            </dl>
        </div>
    </div>
</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 390
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
            // line 391
            yield "    ";
            trigger_deprecation('', '', "The \"render_field\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 391.");
            // line 392
            yield "
    <div class=\"data-row ";
            // line 393
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 393), "html", null, true);
            yield "\">
        <dt>
            ";
            // line 395
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 395));
            yield "

            ";
            // line 397
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 397))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 398
                yield "                <a tabindex=\"0\" class=\"data-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"right\" data-bs-trigger=\"focus\" data-bs-content=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 398)), "html");
                yield "\">
                    ";
                // line 399
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:circle-info"]);
                yield "
                </a>
            ";
            }
            // line 402
            yield "        </dt>
        <dd>
            ";
            // line 404
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 404), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            yield "
        </dd>
    </div>
";
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
        return array (  1479 => 404,  1475 => 402,  1469 => 399,  1464 => 398,  1462 => 397,  1457 => 395,  1452 => 393,  1449 => 392,  1446 => 391,  1433 => 390,  1422 => 383,  1419 => 382,  1408 => 381,  1391 => 377,  1388 => 376,  1383 => 373,  1377 => 371,  1375 => 370,  1368 => 367,  1362 => 365,  1360 => 364,  1357 => 363,  1351 => 361,  1349 => 360,  1346 => 359,  1339 => 357,  1335 => 356,  1330 => 355,  1326 => 353,  1324 => 352,  1316 => 350,  1314 => 349,  1309 => 347,  1306 => 346,  1303 => 345,  1300 => 344,  1297 => 343,  1294 => 342,  1291 => 341,  1288 => 340,  1286 => 339,  1283 => 338,  1280 => 337,  1268 => 336,  1261 => 333,  1259 => 332,  1254 => 331,  1252 => 330,  1249 => 329,  1235 => 328,  1233 => 323,  1230 => 322,  1227 => 321,  1225 => 320,  1221 => 319,  1218 => 318,  1215 => 317,  1213 => 316,  1208 => 315,  1205 => 314,  1203 => 313,  1200 => 312,  1197 => 311,  1179 => 310,  1177 => 309,  1174 => 308,  1171 => 307,  1158 => 306,  1149 => 301,  1131 => 297,  1128 => 296,  1122 => 293,  1119 => 292,  1117 => 291,  1106 => 290,  1089 => 289,  1085 => 287,  1067 => 283,  1064 => 281,  1062 => 280,  1053 => 279,  1050 => 278,  1033 => 277,  1027 => 273,  1024 => 272,  1011 => 271,  1001 => 265,  989 => 264,  974 => 260,  971 => 259,  966 => 256,  960 => 254,  958 => 253,  955 => 252,  949 => 249,  946 => 248,  940 => 245,  934 => 244,  930 => 243,  925 => 242,  923 => 241,  920 => 240,  914 => 238,  911 => 237,  905 => 235,  903 => 234,  900 => 233,  894 => 231,  891 => 230,  889 => 229,  881 => 227,  879 => 226,  872 => 224,  869 => 223,  866 => 222,  863 => 221,  860 => 220,  857 => 219,  854 => 218,  842 => 217,  835 => 214,  823 => 213,  815 => 209,  809 => 207,  807 => 206,  803 => 204,  798 => 203,  794 => 202,  790 => 200,  788 => 199,  782 => 198,  779 => 197,  776 => 196,  773 => 195,  761 => 194,  753 => 190,  750 => 189,  748 => 188,  736 => 187,  728 => 183,  725 => 182,  723 => 181,  711 => 180,  703 => 176,  691 => 175,  683 => 171,  677 => 168,  674 => 167,  672 => 166,  650 => 165,  647 => 164,  644 => 163,  641 => 162,  629 => 161,  621 => 157,  609 => 156,  601 => 152,  589 => 151,  581 => 147,  573 => 144,  570 => 142,  568 => 141,  564 => 140,  562 => 139,  560 => 138,  555 => 136,  552 => 134,  550 => 133,  541 => 132,  538 => 131,  534 => 130,  529 => 127,  526 => 126,  523 => 125,  520 => 124,  508 => 123,  498 => 119,  496 => 118,  491 => 117,  489 => 116,  484 => 115,  482 => 114,  477 => 113,  475 => 112,  470 => 111,  468 => 110,  463 => 109,  461 => 108,  456 => 107,  454 => 106,  449 => 105,  447 => 104,  442 => 103,  440 => 102,  435 => 101,  433 => 100,  428 => 99,  425 => 98,  413 => 97,  403 => 92,  399 => 90,  392 => 86,  387 => 85,  381 => 81,  377 => 79,  375 => 78,  373 => 77,  371 => 76,  368 => 75,  366 => 73,  364 => 72,  347 => 71,  334 => 70,  329 => 327,  323 => 325,  320 => 324,  313 => 323,  305 => 66,  298 => 65,  293 => 63,  287 => 62,  281 => 60,  275 => 58,  272 => 57,  267 => 56,  260 => 55,  255 => 65,  252 => 64,  249 => 55,  242 => 54,  233 => 51,  227 => 49,  221 => 47,  218 => 46,  213 => 45,  206 => 44,  201 => 41,  200 => 40,  199 => 39,  197 => 38,  190 => 37,  183 => 34,  179 => 33,  174 => 32,  167 => 31,  160 => 28,  156 => 27,  151 => 26,  144 => 25,  132 => 21,  128 => 20,  123 => 19,  116 => 18,  104 => 14,  100 => 13,  95 => 12,  88 => 11,  77 => 7,  66 => 6,  62 => 4,  60 => 9,  58 => 3,  51 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/detail.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\detail.html.twig");
    }
}
