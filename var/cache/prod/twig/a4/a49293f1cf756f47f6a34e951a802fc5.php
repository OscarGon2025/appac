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

/* @EasyAdmin/crud/edit.html.twig */
class __TwigTemplate_cf0a435aecede562d1e629d8a79efc37 extends Template
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
            'head_javascript' => [$this, 'block_head_javascript'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'edit_form' => [$this, 'block_edit_form'],
            'delete_form' => [$this, 'block_delete_form'],
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
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["edit_form"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 5), "formThemes", [], "any", false, false, false, 5), false);
        // line 7
        $context["__internal_trans_default_domain9a405b95c40d2ff6721767e3fff5ad5e"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 7), "translationDomain", [], "any", false, false, false, 7);
        // line 12
        $context["ea_field_assets"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 12), "fieldAssets", [Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_EDIT")], "method", false, false, false, 12);
        // line 4
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((("ea-edit-" . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 9)) . "-") . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 9)), "html", null, true);
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-edit ea-edit-" . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 10)), "html", null, true);
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "    ";
        yield from $this->yieldParentBlock("head_javascript", $context, $blocks);
        yield "
    <script src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("form.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 16), "defaultAssetPackageName", [], "any", false, false, false, 16)), "html", null, true);
        yield "\"></script>
";
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_head_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "    ";
        yield from $this->yieldParentBlock("configured_head_contents", $context, $blocks);
        yield "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "headContents", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 22
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

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_body_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        yield from $this->yieldParentBlock("configured_body_contents", $context, $blocks);
        yield "
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "bodyContents", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 29
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

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "    ";
        yield from $this->yieldParentBlock("configured_stylesheets", $context, $blocks);
        yield "
    ";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "cssAssets", [], "any", false, false, false, 35)], false);
        yield "
    ";
        // line 36
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 36)], false);
        yield "
";
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "    ";
        yield from $this->yieldParentBlock("configured_javascripts", $context, $blocks);
        yield "
    ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "jsAssets", [], "any", false, false, false, 41)], false);
        yield "
    ";
        // line 42
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 42)], false);
        yield "
";
        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        $context["custom_page_title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 46), "customPageTitle", [($context["pageName"] ?? null), (((($tmp = ($context["entity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "instance", [], "any", false, false, false, 46)) : (null)), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 46), "translationParameters", [], "any", false, false, false, 46), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 46), "translationDomain", [], "any", false, false, false, 46)], "method", false, false, false, 46);
        // line 47
        yield (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["ea"] ?? null), "crud", [], "any", false, false, false, 48), "defaultPageTitle", [null, null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 48), "translationParameters", [], "any", false, false, false, 48)], "method", false, false, false, 48), [],         // line 7
($context["__internal_trans_default_domain9a405b95c40d2ff6721767e3fff5ad5e"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 49
($context["custom_page_title"] ?? null), [],         // line 7
($context["__internal_trans_default_domain9a405b95c40d2ff6721767e3fff5ad5e"] ?? null))));
        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 53)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 54
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isActionGroup", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 55
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "templatePath", [], "any", false, false, false, 55), ["group" => $context["item"], "entity" => ($context["entity"] ?? null)], false);
                yield "
        ";
            } else {
                // line 57
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "templatePath", [], "any", false, false, false, 57), ["action" => $context["item"]], false);
                yield "
        ";
            }
            // line 59
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "    ";
        yield from $this->unwrap()->yieldBlock('edit_form', $context, $blocks);
        // line 66
        yield "
    ";
        // line 67
        yield from $this->unwrap()->yieldBlock('delete_form', $context, $blocks);
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_edit_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield "        ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form');
        yield "
    ";
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delete_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 68)], false);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/edit.html.twig";
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
        return array (  307 => 68,  300 => 67,  292 => 64,  285 => 63,  280 => 67,  277 => 66,  274 => 63,  267 => 62,  258 => 59,  252 => 57,  246 => 55,  243 => 54,  238 => 53,  231 => 52,  226 => 7,  225 => 49,  224 => 7,  223 => 48,  222 => 47,  220 => 46,  213 => 45,  206 => 42,  202 => 41,  197 => 40,  190 => 39,  183 => 36,  179 => 35,  174 => 34,  167 => 33,  155 => 29,  151 => 28,  146 => 27,  139 => 26,  127 => 22,  123 => 21,  118 => 20,  111 => 19,  104 => 16,  99 => 15,  92 => 14,  81 => 10,  70 => 9,  66 => 4,  64 => 12,  62 => 7,  60 => 5,  58 => 3,  51 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/edit.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\edit.html.twig");
    }
}
