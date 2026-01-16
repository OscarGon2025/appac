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

/* @EasyAdmin/crud/form_theme.html.twig */
class __TwigTemplate_06898150d1b9a4c390c9b1828c030025 extends Template
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

        // line 2
        $_trait_0 = $this->load("@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig", 2);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_end' => [$this, 'block_form_end'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'collection_row' => [$this, 'block_collection_row'],
                'collection_widget' => [$this, 'block_collection_widget'],
                'collection_entry_row' => [$this, 'block_collection_entry_row'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'ea_crud_rest' => [$this, 'block_ea_crud_rest'],
                'ea_crud_widget' => [$this, 'block_ea_crud_widget'],
                'ea_crud_widget_panels' => [$this, 'block_ea_crud_widget_panels'],
                'ea_crud_widget_fieldsets' => [$this, 'block_ea_crud_widget_fieldsets'],
                'ea_autocomplete_widget' => [$this, 'block_ea_autocomplete_widget'],
                'ea_autocomplete_inner_label' => [$this, 'block_ea_autocomplete_inner_label'],
                'ea_code_editor_widget' => [$this, 'block_ea_code_editor_widget'],
                'ea_text_editor_widget' => [$this, 'block_ea_text_editor_widget'],
                'ea_form_row_row' => [$this, 'block_ea_form_row_row'],
                'ea_form_column_group_open_row' => [$this, 'block_ea_form_column_group_open_row'],
                'ea_form_column_group_close_row' => [$this, 'block_ea_form_column_group_close_row'],
                'ea_form_column_open_row' => [$this, 'block_ea_form_column_open_row'],
                'ea_form_column_close_row' => [$this, 'block_ea_form_column_close_row'],
                'ea_form_fieldset_open_ealabel' => [$this, 'block_ea_form_fieldset_open_ealabel'],
                'ea_form_fieldset_open_label' => [$this, 'block_ea_form_fieldset_open_label'],
                'ea_form_fieldset_open_row' => [$this, 'block_ea_form_fieldset_open_row'],
                'ea_form_fieldset_close_row' => [$this, 'block_ea_form_fieldset_close_row'],
                'ea_form_tablist_row' => [$this, 'block_ea_form_tablist_row'],
                'ea_form_tabpane_group_open_row' => [$this, 'block_ea_form_tabpane_group_open_row'],
                'ea_form_tabpane_group_close_row' => [$this, 'block_ea_form_tabpane_group_close_row'],
                'ea_form_tabpane_open_row' => [$this, 'block_ea_form_tabpane_open_row'],
                'ea_form_tabpane_close_row' => [$this, 'block_ea_form_tabpane_close_row'],
                'ea_filters_widget' => [$this, 'block_ea_filters_widget'],
                'comparison_widget' => [$this, 'block_comparison_widget'],
                'ea_numeric_filter_widget' => [$this, 'block_ea_numeric_filter_widget'],
                'ea_datetime_filter_widget' => [$this, 'block_ea_datetime_filter_widget'],
                'ea_fileupload_widget' => [$this, 'block_ea_fileupload_widget'],
                'TODO_ea_fileupload_widget' => [$this, 'block_TODO_ea_fileupload_widget'],
                'ea_slug_widget' => [$this, 'block_ea_slug_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "
";
        // line 4
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 14
        yield "
";
        // line 15
        yield from $this->unwrap()->yieldBlock('form_end', $context, $blocks);
        // line 21
        yield "
";
        // line 22
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 29
        yield "
";
        // line 31
        yield "
";
        // line 32
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 42
        yield "
";
        // line 43
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 51
        yield "
";
        // line 52
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 57
        yield "
";
        // line 58
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 63
        yield "
";
        // line 64
        yield from $this->unwrap()->yieldBlock('file_widget', $context, $blocks);
        // line 72
        yield "
";
        // line 74
        yield "
";
        // line 75
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 120
        yield "
";
        // line 121
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        yield "
";
        // line 133
        yield from $this->unwrap()->yieldBlock('collection_row', $context, $blocks);
        // line 159
        yield "
";
        // line 160
        yield from $this->unwrap()->yieldBlock('collection_widget', $context, $blocks);
        // line 189
        yield "
";
        // line 190
        yield from $this->unwrap()->yieldBlock('collection_entry_row', $context, $blocks);
        // line 233
        yield "
";
        // line 234
        yield from $this->unwrap()->yieldBlock('form_widget_compound', $context, $blocks);
        // line 251
        yield "
";
        // line 252
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 257
        yield "
";
        // line 259
        yield "
";
        // line 260
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 304
        yield "
";
        // line 306
        yield "
";
        // line 307
        yield from $this->unwrap()->yieldBlock('empty_collection', $context, $blocks);
        // line 312
        yield "
";
        // line 313
        yield from $this->unwrap()->yieldBlock('vich_file_row', $context, $blocks);
        // line 317
        yield "
";
        // line 318
        yield from $this->unwrap()->yieldBlock('vich_file_widget', $context, $blocks);
        // line 352
        yield "
";
        // line 353
        yield from $this->unwrap()->yieldBlock('vich_image_row', $context, $blocks);
        // line 357
        yield "
";
        // line 358
        yield from $this->unwrap()->yieldBlock('vich_image_widget', $context, $blocks);
        // line 400
        yield "
";
        // line 401
        yield from $this->unwrap()->yieldBlock('ea_crud_rest', $context, $blocks);
        // line 404
        yield "
";
        // line 406
        yield from $this->unwrap()->yieldBlock('ea_crud_widget', $context, $blocks);
        // line 411
        yield "
";
        // line 413
        yield from $this->unwrap()->yieldBlock('ea_crud_widget_panels', $context, $blocks);
        // line 418
        yield "
";
        // line 419
        yield from $this->unwrap()->yieldBlock('ea_crud_widget_fieldsets', $context, $blocks);
        // line 484
        yield "
";
        // line 486
        yield from $this->unwrap()->yieldBlock('ea_autocomplete_widget', $context, $blocks);
        // line 489
        yield "
";
        // line 490
        yield from $this->unwrap()->yieldBlock('ea_autocomplete_inner_label', $context, $blocks);
        // line 494
        yield "
";
        // line 496
        yield from $this->unwrap()->yieldBlock('ea_code_editor_widget', $context, $blocks);
        // line 506
        yield "
";
        // line 508
        yield from $this->unwrap()->yieldBlock('ea_text_editor_widget', $context, $blocks);
        // line 519
        yield "
";
        // line 521
        yield from $this->unwrap()->yieldBlock('ea_form_row_row', $context, $blocks);
        // line 524
        yield "
";
        // line 525
        yield from $this->unwrap()->yieldBlock('ea_form_column_group_open_row', $context, $blocks);
        // line 531
        yield "
";
        // line 532
        yield from $this->unwrap()->yieldBlock('ea_form_column_group_close_row', $context, $blocks);
        // line 539
        yield "
";
        // line 540
        yield from $this->unwrap()->yieldBlock('ea_form_column_open_row', $context, $blocks);
        // line 559
        yield "
";
        // line 560
        yield from $this->unwrap()->yieldBlock('ea_form_column_close_row', $context, $blocks);
        // line 563
        yield "
";
        // line 564
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_open_ealabel', $context, $blocks);
        // line 575
        yield "
";
        // line 576
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_open_label', $context, $blocks);
        // line 597
        yield "
";
        // line 598
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_open_row', $context, $blocks);
        // line 610
        yield "
";
        // line 611
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_close_row', $context, $blocks);
        // line 617
        yield "
";
        // line 618
        yield from $this->unwrap()->yieldBlock('ea_form_tablist_row', $context, $blocks);
        // line 646
        yield "
";
        // line 647
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_group_open_row', $context, $blocks);
        // line 651
        yield "
";
        // line 652
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_group_close_row', $context, $blocks);
        // line 656
        yield "
";
        // line 657
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_open_row', $context, $blocks);
        // line 670
        yield "
";
        // line 671
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_close_row', $context, $blocks);
        // line 675
        yield "
";
        // line 677
        yield from $this->unwrap()->yieldBlock('ea_filters_widget', $context, $blocks);
        // line 699
        yield "
";
        // line 700
        yield from $this->unwrap()->yieldBlock('comparison_widget', $context, $blocks);
        // line 703
        yield "
";
        // line 704
        yield from $this->unwrap()->yieldBlock('ea_numeric_filter_widget', $context, $blocks);
        // line 714
        yield "
";
        // line 715
        yield from $this->unwrap()->yieldBlock('ea_datetime_filter_widget', $context, $blocks);
        // line 718
        yield "
";
        // line 719
        yield from $this->unwrap()->yieldBlock('ea_fileupload_widget', $context, $blocks);
        // line 781
        yield "
";
        // line 782
        yield from $this->unwrap()->yieldBlock('TODO_ea_fileupload_widget', $context, $blocks);
        // line 849
        yield "
";
        // line 850
        yield from $this->unwrap()->yieldBlock('ea_slug_widget', $context, $blocks);
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    ";
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5)) > 0) && CoreExtension::inFilter("ea_crud", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 5), "block_prefixes", [], "any", false, false, false, 5), [])) : ([]))))) {
            // line 6
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors', ["attr" => ["errorClass" => "global-invalid-feedback"]]);
            yield "
    ";
        }
        // line 8
        yield "
    ";
        // line 9
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        yield "
    ";
        // line 10
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "request", [], "any", false, false, false, 10), "query", [], "any", false, false, false, 10), "get", ["referrer"], "method", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "        <input type=\"hidden\" name=\"referrer\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", ["referrer"], "method", false, false, false, 11), "html", null, true);
            yield "\">
    ";
        }
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "        ";
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? null))) {
            // line 17
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            yield "
        ";
        }
        // line 19
        yield "    </form>
";
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 24
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 25
                yield "            <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "errorClass", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "errorClass", [], "any", false, false, false, 25), "")) : ("")), "html", null, true);
                yield " invalid-feedback d-block\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 25), "html", null, true);
                yield "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "    ";
        }
        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        if (( !array_key_exists("type", $context) || !CoreExtension::inFilter(($context["type"] ?? null), ["file", "hidden"]))) {
            // line 34
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 34), "")) : ("")))]);
        }
        // line 36
        if ((array_key_exists("type", $context) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 37
            yield "        ";
            // line 38
            $context["required"] = false;
        }
        // line 40
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        if ((($context["widget"] ?? null) != "single_text")) {
            // line 45
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 45), "")) : ("")) . " form-inline"))]);
        }
        // line 47
        yield "<div class=\"datetime-widget datetime-widget-datetime\">";
        // line 48
        yield from $this->yieldParentBlock("datetime_widget", $context, $blocks);
        // line 49
        yield "</div>
";
        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield "<div class=\"datetime-widget datetime-widget-date\">";
        // line 54
        yield from $this->yieldParentBlock("date_widget", $context, $blocks);
        // line 55
        yield "</div>";
        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        yield "<div class=\"datetime-widget datetime-widget-time\">";
        // line 60
        yield from $this->yieldParentBlock("time_widget", $context, $blocks);
        // line 61
        yield "</div>";
        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 65
        if ((($tmp = ((array_key_exists("vich", $context)) ? (Twig\Extension\CoreExtension::default(($context["vich"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "file")) : ("file"));
            // line 67
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 69
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 76
        yield "    ";
        $context["row_attr"] = Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 77
($context["row_attr"] ?? null), "class", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 77), "")) : ("")) . " form-group")]);
        // line 79
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 79), "ea_vars", [], "any", false, false, false, 79), "field", [], "any", false, false, false, 79);
        // line 80
        yield "
    <div class=\"";
        // line 81
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", true, true, false, 81) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 81)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 81), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", true, true, false, 81) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", false, false, false, 81)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", false, false, false, 81), "html", null, true)) : (""))));
        yield "\">";
        // line 82
        $context["row_class"] = ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 82)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 82), "mb-3")) : ("mb-3")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 82)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 82), "mb-3")) : ("mb-3"))));
        // line 83
        yield "<div ";
        $_v0 = $context;
        $_v1 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((($context["row_class"] ?? null) . (((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) ? (" has-error") : (""))))])];
        if (!is_iterable($_v1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 83, $this->getSourceContext());
        }
        $_v1 = CoreExtension::toArray($_v1);
        $context = $_v1 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v0;
        yield ">";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 85
        yield "<div class=\"form-widget\">
                ";
        // line 86
        $context["has_prepend_html"] =  !(null === ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", true, true, false, 86)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", false, false, false, 86), null)) : (null)));
        // line 87
        yield "                ";
        $context["has_append_html"] =  !(null === ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", false, false, false, 87), null)) : (null)));
        // line 88
        yield "                ";
        $context["has_input_groups"] = (($context["has_prepend_html"] ?? null) || ($context["has_append_html"] ?? null));
        // line 89
        yield "
                ";
        // line 90
        if ((($tmp = ($context["has_input_groups"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<div class=\"input-group\">";
        }
        // line 91
        yield "                    ";
        if ((($tmp = ($context["has_prepend_html"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">";
            // line 93
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", false, false, false, 93);
            yield "</span>
                        </div>
                    ";
        }
        // line 96
        yield "
                    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        yield "

                    ";
        // line 99
        if ((($tmp = ($context["has_append_html"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 100
            yield "                        <span class=\"input-group-text\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", false, false, false, 100);
            yield "</span>
                    ";
        }
        // line 102
        yield "                ";
        if ((($tmp = ($context["has_input_groups"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "</div>";
        }
        // line 103
        yield "
                ";
        // line 104
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 104) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 104)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 104)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "                    <small class=\"form-text form-help\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 105), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            yield "</small>
                ";
        } elseif ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 106
($context["form"] ?? null), "vars", [], "any", false, true, false, 106), "help", [], "any", true, true, false, 106) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 106), "help", [], "any", false, false, false, 106)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 106), "help", [], "any", false, false, false, 106)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 107
            yield "                    <small class=\"form-text form-help\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 107), "help", [], "any", false, false, false, 107), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 107), "help_translation_parameters", [], "any", false, false, false, 107), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 107), "translation_domain", [], "any", false, false, false, 107));
            yield "</small>
                ";
        }
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 111
        yield "</div>
        </div>
    </div>

    ";
        // line 116
        yield "    ";
        if ((null === ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", true, true, false, 116)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 116), null)) : (null)))) {
            // line 117
            yield "        <div class=\"flex-fill\"></div>
    ";
        }
        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 122
        yield "    ";
        if (("ea-autocomplete" == ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-ea-widget", [], "array", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default((($_v2 = ($context["attr"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["data-ea-widget"] ?? null) : null), false)) : (false)))) {
            // line 123
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-ea-i18n-no-results-found" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-results-found", [], "EasyAdminBundle"), "data-ea-i18n-no-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-more-results", [], "EasyAdminBundle"), "data-ea-i18n-loading-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.loading-more-results", [], "EasyAdminBundle")]);
            // line 128
            yield "    ";
        }
        // line 129
        yield "
    ";
        // line 130
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 134
        yield "    ";
        if ((array_key_exists("prototype", $context) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 134))) {
            // line 135
            yield "        ";
            $context["row_attr"] = Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
            // line 136
            yield "    ";
        }
        // line 137
        yield "
    ";
        // line 138
        $context["maxKey"] = 0;
        // line 139
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 139)));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 140
            yield "        ";
            if (CoreExtension::matches("/^\\d+\$/", $context["key"])) {
                // line 141
                yield "            ";
                $context["intKey"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber($context["key"], 0, "", "", "");
                // line 142
                yield "            ";
                if ((($context["intKey"] ?? null) > ($context["maxKey"] ?? null))) {
                    // line 143
                    yield "                ";
                    $context["maxKey"] = ($context["intKey"] ?? null);
                    // line 144
                    yield "            ";
                }
                // line 145
                yield "        ";
            }
            // line 146
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield "
    ";
        // line 148
        $context["row_attr"] = Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["data-ea-collection-field" => "true", "data-entry-is-complex" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 150
($context["form"] ?? null), "vars", [], "any", false, false, false, 150), "ea_vars", [], "any", false, false, false, 150), "field", [], "any", false, false, false, 150) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 150), "ea_vars", [], "any", false, false, false, 150), "field", [], "any", false, false, false, 150), "customOptions", [], "any", false, false, false, 150), "get", ["entryIsComplex"], "method", false, false, false, 150))) ? ("true") : ("false")), "data-allow-add" => (((($tmp =         // line 151
($context["allow_add"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-allow-delete" => (((($tmp =         // line 152
($context["allow_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-num-items" => ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 153
($context["form"] ?? null), "children", [], "any", false, false, false, 153))) ? (0) : ((($context["maxKey"] ?? null) + 1))), "data-form-type-name-placeholder" => ((        // line 154
array_key_exists("prototype", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 154), "name", [], "any", false, false, false, 154)) : (""))]);
        // line 156
        yield "
    ";
        // line 157
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 160
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 161
        yield "    ";
        // line 163
        yield "    ";
        $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (is_iterable(($context["value"] ?? null)) && Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))));
        // line 164
        yield "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 164), "ea_vars", [], "any", false, true, false, 164), "field", [], "any", false, true, false, 164), "fieldFqcn", [], "any", true, true, false, 164)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 164), "ea_vars", [], "any", false, false, false, 164), "field", [], "any", false, false, false, 164), "fieldFqcn", [], "any", false, false, false, 164), false)) : (false)));
        // line 165
        yield "
    <div class=\"ea-form-collection-items\">
        ";
        // line 167
        if ((($tmp = ($context["isEmptyCollection"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 168
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("empty_collection", $context, $blocks);
            yield "
        ";
        } elseif ((($tmp =         // line 169
($context["is_array_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 170
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
            yield "
        ";
        } else {
            // line 172
            yield "            <div class=\"accordion\">
                ";
            // line 173
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
            yield "
            </div>
        ";
        }
        // line 176
        yield "    </div>

    ";
        // line 178
        if ((($context["isEmptyCollection"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 178), "prototype", [], "any", true, true, false, 178))) {
            // line 179
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-empty-collection" =>             $this->unwrap()->renderBlock("empty_collection", $context, $blocks)]);
            // line 180
            yield "    ";
        }
        // line 181
        yield "
    ";
        // line 182
        if ((((array_key_exists("allow_add", $context)) ? (Twig\Extension\CoreExtension::default(($context["allow_add"] ?? null), false)) : (false)) &&  !($context["disabled"] ?? null))) {
            // line 183
            yield "        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            ";
            // line 184
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:plus", "class" => "pr-1"]);
            yield "
            ";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            yield "
        </button>
    ";
        }
        yield from [];
    }

    // line 190
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_entry_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 191
        yield "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 191), "ea_vars", [], "any", false, true, false, 191), "field", [], "any", false, true, false, 191), "fieldFqcn", [], "any", true, true, false, 191)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 191), "ea_vars", [], "any", false, false, false, 191), "field", [], "any", false, false, false, 191), "fieldFqcn", [], "any", false, false, false, 191), false)) : (false)));
        // line 192
        yield "    ";
        $context["is_complex"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 192), "ea_vars", [], "any", false, true, false, 192), "field", [], "any", false, true, false, 192), "customOptions", [], "any", false, true, false, 192), "get", ["entryIsComplex"], "method", true, true, false, 192) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 192), "ea_vars", [], "any", false, false, false, 192), "field", [], "any", false, false, false, 192), "customOptions", [], "any", false, false, false, 192), "get", ["entryIsComplex"], "method", false, false, false, 192)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 192), "ea_vars", [], "any", false, false, false, 192), "field", [], "any", false, false, false, 192), "customOptions", [], "any", false, false, false, 192), "get", ["entryIsComplex"], "method", false, false, false, 192)) : (false));
        // line 193
        yield "    ";
        $context["to_string_method"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 193), "ea_vars", [], "any", false, true, false, 193), "field", [], "any", false, true, false, 193), "customOptions", [], "any", false, true, false, 193), "get", ["entryToStringMethod"], "method", true, true, false, 193) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 193), "ea_vars", [], "any", false, false, false, 193), "field", [], "any", false, false, false, 193), "customOptions", [], "any", false, false, false, 193), "get", ["entryToStringMethod"], "method", false, false, false, 193)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 193), "ea_vars", [], "any", false, false, false, 193), "field", [], "any", false, false, false, 193), "customOptions", [], "any", false, false, false, 193), "get", ["entryToStringMethod"], "method", false, false, false, 193)) : (null));
        // line 194
        yield "    ";
        $context["allows_deleting_items"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 194), "allow_delete", [], "any", true, true, false, 194)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 194), "allow_delete", [], "any", false, false, false, 194), false)) : (false));
        // line 195
        yield "    ";
        $context["render_expanded"] = ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 195), "valid", [], "any", false, false, false, 195) || ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 195), "ea_vars", [], "any", false, true, false, 195), "field", [], "any", false, true, false, 195), "customOptions", [], "any", false, true, false, 195), "get", ["renderExpanded"], "method", true, true, false, 195)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 195), "ea_vars", [], "any", false, false, false, 195), "field", [], "any", false, false, false, 195), "customOptions", [], "any", false, false, false, 195), "get", ["renderExpanded"], "method", false, false, false, 195), false)) : (false)));
        // line 196
        yield "    ";
        $context["delete_item_button"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 197
            yield "        <button type=\"button\" class=\"btn btn-link btn-link-danger field-collection-delete-button\"
                title=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            yield "\">
            ";
            // line 199
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:delete"]);
            yield "
        </button>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 202
        yield "
    <div class=\"field-collection-item ";
        // line 203
        yield (((($tmp = ($context["is_complex"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("field-collection-item-complex") : (""));
        yield " ";
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 203), "valid", [], "any", false, false, false, 203)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""));
        yield "\">
        ";
        // line 204
        if ((($tmp = ((array_key_exists("is_array_field", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_array_field"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 205
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            yield "
            ";
            // line 206
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
            ";
            // line 207
            if ((($context["allows_deleting_items"] ?? null) &&  !($context["disabled"] ?? null))) {
                // line 208
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["delete_item_button"] ?? null), "html", null, true);
                yield "
            ";
            }
            // line 210
            yield "        ";
        } else {
            // line 211
            yield "            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button ";
            // line 213
            yield (((($tmp = ($context["render_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "-contents\">
                        ";
            // line 214
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-collection-item-collapse-marker"]);
            yield "
                        ";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->representAsString(($context["value"] ?? null), ($context["to_string_method"] ?? null)), "html", null, true);
            yield "
                    </button>

                    ";
            // line 218
            if ((($context["allows_deleting_items"] ?? null) &&  !($context["disabled"] ?? null))) {
                // line 219
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["delete_item_button"] ?? null), "html", null, true);
                yield "
                    ";
            }
            // line 221
            yield "                </h2>
                <div id=\"";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "-contents\" class=\"accordion-collapse collapse ";
            yield (((($tmp = ($context["render_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\">
                    <div class=\"accordion-body\">
                        <div class=\"row\">
                            ";
            // line 225
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 231
        yield "    </div>
";
        yield from [];
    }

    // line 234
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_compound(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 235
        yield "    <div class=\"form-widget-compound\">
        ";
        // line 236
        if (CoreExtension::inFilter("collection", ($context["block_prefixes"] ?? null))) {
            // line 237
            yield "            ";
            // line 239
            yield "            ";
            $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (is_iterable(($context["value"] ?? null)) && Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))));
            // line 240
            yield "            ";
            if ((($tmp = ($context["isEmptyCollection"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 241
                yield "                ";
                yield from                 $this->unwrap()->yieldBlock("empty_collection", $context, $blocks);
                yield "
            ";
            }
            // line 243
            yield "            ";
            if ((($context["isEmptyCollection"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 243), "prototype", [], "any", true, true, false, 243))) {
                // line 244
                yield "                ";
                $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-empty-collection" =>                 $this->unwrap()->renderBlock("empty_collection", $context, $blocks)]);
                // line 245
                yield "            ";
            }
            // line 246
            yield "        ";
        }
        // line 247
        yield "
        ";
        // line 248
        yield from $this->yieldParentBlock("form_widget_compound", $context, $blocks);
        yield "
    </div>
";
        yield from [];
    }

    // line 252
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 253
        yield "<div class=\"form-group field-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "field", [], "any", false, true, false, 253), "css_class", [], "any", true, true, false, 253)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "field", [], "any", false, false, false, 253), "css_class", [], "any", false, false, false, 253), "")) : ("")), "html", null, true);
        yield "\">";
        // line 254
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 255
        yield "</div>";
        yield from [];
    }

    // line 260
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 261
        if ((($context["label"] ?? null) === false)) {
        } else {
            // line 265
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 266
                $context["element"] = "legend";
                // line 267
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 267)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 267), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 269
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null), "class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 269)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 269), "")) : ("")) . " form-control-label"))]);
            }
            // line 271
            if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 272
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 272)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 272), "")) : ("")) . " required"))]);
            }
            // line 274
            if ((($context["label"] ?? null) === "")) {
            } elseif ((null ===             // line 277
($context["label"] ?? null))) {
                // line 278
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 279
                    $context["label"] = Twig\Extension\CoreExtension::replace(($context["label_format"] ?? null), ["%name%" =>                     // line 280
($context["name"] ?? null), "%id%" =>                     // line 281
($context["id"] ?? null)]);
                } else {
                    // line 284
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 287
            yield "<";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if ((($tmp = ($context["label_attr"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $_v3 = $context;
                $_v4 = ["attr" => ($context["label_attr"] ?? null)];
                if (!is_iterable($_v4)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 287, $this->getSourceContext());
                }
                $_v4 = CoreExtension::toArray($_v4);
                $context = $_v4 + $context + $this->env->getGlobals();
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                $context = $_v3;
            }
            yield ">";
            // line 288
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 289
                if ((((array_key_exists("label_html", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_html"] ?? null), false)) : (false)) === false)) {
                    // line 290
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
                } else {
                    // line 292
                    yield ($context["label"] ?? null);
                }
            } else {
                // line 295
                if ((((array_key_exists("label_html", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_html"] ?? null), false)) : (false)) === false)) {
                    // line 296
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 298
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 301
            yield "</";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            yield ">";
        }
        yield from [];
    }

    // line 307
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_empty_collection(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 308
        yield "    <div class=\"empty collection-empty\">
        ";
        // line 309
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "templatePath", ["label/empty"], "method", false, false, false, 309));
        yield "
    </div>
";
        yield from [];
    }

    // line 313
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_file_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 314
        yield "    ";
        $context["force_error"] = true;
        // line 315
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 318
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 319
        yield "    <div class=\"ea-vich-file\">
        ";
        // line 320
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("download_uri", $context)) ? (Twig\Extension\CoreExtension::default(($context["download_uri"] ?? null), "")) : ("")))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 321
            yield "            <a class=\"ea-vich-file-name\" href=\"";
            yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["download_uri"] ?? null), "html", null, true)));
            yield "\">
                ";
            // line 322
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:file-lines"]);
            // line 323
            if ((($tmp = ((array_key_exists("download_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["download_label"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 324
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["download_label"] ?? null), [], "VichUploaderBundle"), "html", null, true);
            } else {
                // line 326
                yield ((Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["download_uri"] ?? null), "/"))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["download_uri"] ?? null), "/")), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle"), "html", null, true)));
            }
            // line 328
            yield "</a>
        ";
        }
        // line 330
        yield "
        ";
        // line 331
        $context["file_upload_js"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 332
            yield "            var newFile = document.getElementById('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 332), "vars", [], "any", false, false, false, 332), "id", [], "any", false, false, false, 332), "html", null, true);
            yield "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 335), "vars", [], "any", false, false, false, 335), "id", [], "any", false, false, false, 335), "html", null, true);
            yield "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 337
        yield "
        <div class=\"ea-vich-file-actions\">
            ";
        // line 340
        yield "            <div class=\"btn btn-secondary input-file-container\">
                ";
        // line 341
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:upload"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        yield "
                ";
        // line 342
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 342), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        yield "
            </div>

            ";
        // line 345
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 345)) {
            // line 346
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 346), 'row');
            yield "
            ";
        }
        // line 348
        yield "        </div>
        <div class=\"small\" id=\"";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 349), "vars", [], "any", false, false, false, 349), "id", [], "any", false, false, false, 349), "html", null, true);
        yield "_new_file_name\"></div>
    </div>
";
        yield from [];
    }

    // line 353
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_image_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 354
        yield "    ";
        $context["force_error"] = true;
        // line 355
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 358
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_image_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 359
        yield "    ";
        $context["formTypeOptions"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea_vars"] ?? null), "field", [], "any", false, true, false, 359), "formTypeOptions", [], "any", true, true, false, 359)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea_vars"] ?? null), "field", [], "any", false, false, false, 359), "formTypeOptions", [], "any", false, false, false, 359), "")) : (""));
        // line 360
        yield "    <div class=\"ea-vich-image\">
        ";
        // line 361
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("image_uri", $context)) ? (Twig\Extension\CoreExtension::default(($context["image_uri"] ?? null), "")) : ("")))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 362
            yield "            ";
            if (Twig\Extension\CoreExtension::testEmpty(((array_key_exists("download_uri", $context)) ? (Twig\Extension\CoreExtension::default(($context["download_uri"] ?? null), "")) : ("")))) {
                // line 363
                yield "                <div class=\"ea-lightbox-thumbnail\">
                    <img style=\"cursor: initial\" src=\"";
                // line 364
                yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image_uri"] ?? null), "html", null, true)));
                yield "\">
                </div>
            ";
            } else {
                // line 367
                yield "                ";
                $context["_lightbox_id"] = ("ea-lightbox-" . ($context["id"] ?? null));
                // line 368
                yield "
                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#";
                // line 369
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_lightbox_id"] ?? null), "html", null, true);
                yield "\">
                    <img src=\"";
                // line 370
                yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image_uri"] ?? null), "html", null, true)));
                yield "\">
                </a>

                <div id=\"";
                // line 373
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_lightbox_id"] ?? null), "html", null, true);
                yield "\" class=\"ea-lightbox\">
                    <img src=\"";
                // line 374
                yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["download_uri"] ?? null), "html", null, true)));
                yield "\">
                </div>
            ";
            }
            // line 377
            yield "        ";
        }
        // line 378
        yield "
        ";
        // line 379
        $context["file_upload_js"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 380
            yield "            var newFile = document.getElementById('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 380), "vars", [], "any", false, false, false, 380), "id", [], "any", false, false, false, 380), "html", null, true);
            yield "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 383), "vars", [], "any", false, false, false, 383), "id", [], "any", false, false, false, 383), "html", null, true);
            yield "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 385
        yield "
        <div class=\"ea-vich-image-actions\">
            ";
        // line 388
        yield "            <div class=\"btn btn-secondary input-file-container\">
                ";
        // line 389
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:upload"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        yield "
                ";
        // line 390
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 390), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        yield "
            </div>

            ";
        // line 393
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 393)) {
            // line 394
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 394), 'row');
            yield "
            ";
        }
        // line 396
        yield "        </div>
        <div class=\"small\" id=\"";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 397), "vars", [], "any", false, false, false, 397), "id", [], "any", false, false, false, 397), "html", null, true);
        yield "_new_file_name\"></div>
    </div>
";
        yield from [];
    }

    // line 401
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_rest(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 402
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
";
        yield from [];
    }

    // line 406
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 407
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 408
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 413
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_widget_panels(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 414
        yield "    ";
        trigger_deprecation('', '', "The \"ea_crud_widget_panels\" block is deprecated because the form layout building logic has been revamped. Check \"ea_crud_widget\" block in `form_theme.html.page` for more details."." in \"@EasyAdmin/crud/form_theme.html.twig\" at line 414.");
        // line 415
        yield "
    ";
        // line 416
        yield from         $this->unwrap()->yieldBlock("ea_crud_widget_fieldsets", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 419
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_widget_fieldsets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 420
        yield "    ";
        trigger_deprecation('', '', "The \"ea_crud_widget_fieldsets\" block is deprecated because the form layout building logic has been revamped. Check \"ea_crud_widget\" block in `form_theme.html.page` for more details."." in \"@EasyAdmin/crud/form_theme.html.twig\" at line 420.");
        // line 421
        yield "
    ";
        // line 422
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "vars", [], "any", false, false, false, 422), "ea_crud_form", [], "any", false, false, false, 422), "form_fieldsets", [], "any", false, false, false, 422), function ($__fieldset_config__) use ($context, $macros) { $context["fieldset_config"] = $__fieldset_config__; return ( !CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "form_tab", [], "any", false, false, false, 422) || (CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "form_tab", [], "any", false, false, false, 422) == ($context["tab_name"] ?? null))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["fieldset_name"] => $context["fieldset_config"]) {
            // line 423
            yield "        ";
            $context["fieldset_has_header"] = ((((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", true, true, false, 423)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", false, false, false, 423), false)) : (false)) || ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", true, true, false, 423)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 423), false)) : (false))) || ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 423)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 423), false)) : (false)));
            // line 424
            yield "
        ";
            // line 425
            $context["collapsible"] = CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "collapsible", [], "any", false, false, false, 425);
            // line 426
            yield "        ";
            $context["collapsed"] = CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "collapsed", [], "any", false, false, false, 426);
            // line 427
            yield "
        <div class=\"";
            // line 428
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", true, true, false, 428) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", false, false, false, 428)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", false, false, false, 428), "html", null, true)) : (""));
            yield "\">
            <fieldset class=\"form-fieldset\">
                ";
            // line 430
            if ((($tmp = ($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 431
                yield "                    <div class=\"form-fieldset-header ";
                yield (((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
                yield " ";
                yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 431)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 431), false)) : (false)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
                yield "\">
                        <div class=\"form-fieldset-title\">
                            <a ";
                // line 433
                if ((($tmp =  !($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 434
                    yield "                                href=\"#\" class=\"not-collapsible\"
                            ";
                } else {
                    // line 436
                    yield "                                href=\"#content-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fieldset_name"], "html", null, true);
                    yield "\" data-bs-toggle=\"collapse\"
                                class=\"form-fieldset-collapse ";
                    // line 437
                    yield (((($tmp = ($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
                    yield "\"
                                aria-expanded=\"";
                    // line 438
                    yield (((($tmp = ($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                    yield "\" aria-controls=\"content-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fieldset_name"], "html", null, true);
                    yield "\"
                            ";
                }
                // line 440
                yield "                            >
                                ";
                // line 441
                if ((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 442
                    yield "                                    ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-fieldset-collapse-marker"]);
                    yield "
                                ";
                }
                // line 444
                yield "
                                ";
                // line 445
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", true, true, false, 445)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 445), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 446
                    yield "                                    ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 446), "class" => "form-fieldset-icon"]);
                    yield "
                                ";
                }
                // line 448
                yield "                                ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", false, false, false, 448));
                yield "
                            </a>

                            ";
                // line 451
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 451)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 451), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 452
                    yield "                                <div class=\"form-fieldset-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 452));
                    yield "</div>
                            ";
                }
                // line 454
                yield "                        </div>
                    </div>
                ";
            }
            // line 457
            yield "
                <div id=\"content-";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fieldset_name"], "html", null, true);
            yield "\" class=\"form-fieldset-body ";
            yield (((($tmp =  !($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("without-header") : (""));
            yield " ";
            yield (((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapse") : (""));
            yield " ";
            yield (((($tmp =  !($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\">
                    <div class=\"row\">
                        ";
            // line 460
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!CoreExtension::inFilter("hidden", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 460), "block_prefixes", [], "any", false, false, false, 460)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 460), "ea_crud_form", [], "any", false, false, false, 460), "form_fieldset", [], "any", false, false, false, 460) == $context["fieldset_name"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 461
                yield "                            ";
                if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 461), "ea_crud_form", [], "any", false, false, false, 461), "form_tab", [], "any", false, false, false, 461) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 461), "ea_crud_form", [], "any", false, false, false, 461), "form_tab", [], "any", false, false, false, 461) == ($context["tab_name"] ?? null)))) {
                    // line 462
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    yield "
                            ";
                }
                // line 464
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 465
            yield "                    </div>
                </div>
            </fieldset>
        </div>
    ";
            $context['_iterated'] = true;
        }
        // line 469
        if (!$context['_iterated']) {
            // line 470
            yield "        ";
            // line 481
            yield "        ";
            yield $this->getTemplateForMacro("macro_recursiveFieldsetForm", $context, 481, $this->getSourceContext())->macro_recursiveFieldsetForm(...[($context["form"] ?? null)]);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['fieldset_name'], $context['fieldset_config'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 486
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_autocomplete_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 487
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 487), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["required" => ($context["required"] ?? null)])]);
        yield "
";
        yield from [];
    }

    // line 490
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_autocomplete_inner_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 491
        yield "    ";
        $context["name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 491), "name", [], "any", false, false, false, 491);
        // line 492
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 496
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_code_editor_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 497
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-ea-code-editor-field" => "true", "data-language" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 499
($context["form"] ?? null), "vars", [], "any", false, false, false, 499), "ea_vars", [], "any", false, false, false, 499), "field", [], "any", false, false, false, 499), "customOptions", [], "any", false, false, false, 499), "get", ["language"], "method", false, false, false, 499), "data-tab-size" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 500
($context["form"] ?? null), "vars", [], "any", false, false, false, 500), "ea_vars", [], "any", false, false, false, 500), "field", [], "any", false, false, false, 500), "customOptions", [], "any", false, false, false, 500), "get", ["tabSize"], "method", false, false, false, 500), "data-indent-with-tabs" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 501
($context["form"] ?? null), "vars", [], "any", false, false, false, 501), "ea_vars", [], "any", false, false, false, 501), "field", [], "any", false, false, false, 501), "customOptions", [], "any", false, false, false, 501), "get", ["indentWithTabs"], "method", false, false, false, 501)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-show-line-numbers" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 502
($context["form"] ?? null), "vars", [], "any", false, false, false, 502), "ea_vars", [], "any", false, false, false, 502), "field", [], "any", false, false, false, 502), "customOptions", [], "any", false, false, false, 502), "get", ["showLineNumbers"], "method", false, false, false, 502)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-number-of-rows" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 503
($context["form"] ?? null), "vars", [], "any", false, false, false, 503), "ea_vars", [], "any", false, false, false, 503), "field", [], "any", false, false, false, 503), "customOptions", [], "any", false, false, false, 503), "get", ["numOfRows"], "method", false, false, false, 503)])]);
        // line 504
        yield "
";
        yield from [];
    }

    // line 508
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_text_editor_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 509
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => "ea-text-editor-content d-none", "data-number-of-rows" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 511
($context["form"] ?? null), "vars", [], "any", false, true, false, 511), "ea_vars", [], "any", false, true, false, 511), "field", [], "any", false, true, false, 511), "customOptions", [], "any", false, true, false, 511), "get", ["numOfRows"], "method", true, true, false, 511)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 511), "ea_vars", [], "any", false, false, false, 511), "field", [], "any", false, false, false, 511), "customOptions", [], "any", false, false, false, 511), "get", ["numOfRows"], "method", false, false, false, 511), 5)) : (5)), "data-trix-editor-config" => json_encode(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 512
($context["form"] ?? null), "vars", [], "any", false, true, false, 512), "ea_vars", [], "any", false, true, false, 512), "field", [], "any", false, true, false, 512), "customOptions", [], "any", false, true, false, 512), "get", ["trixEditorConfig"], "method", true, true, false, 512)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 512), "ea_vars", [], "any", false, false, false, 512), "field", [], "any", false, false, false, 512), "customOptions", [], "any", false, false, false, 512), "get", ["trixEditorConfig"], "method", false, false, false, 512), null)) : (null)))])]);
        // line 513
        yield "

    <div class=\"ea-text-editor-wrapper ";
        // line 515
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 515)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 515), "")) : ("")) . (((($tmp =  !($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" has-error") : (""))), "html", null, true);
        yield "\">
        <trix-editor input=\"";
        // line 516
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\" class=\"trix-content\"></trix-editor>
    </div>
";
        yield from [];
    }

    // line 521
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_row_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 522
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 522), "row_attr", [], "any", false, false, false, 522), "class", [], "any", false, false, false, 522), "html", null, true);
        yield "\"></div>
";
        yield from [];
    }

    // line 525
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_group_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 526
        yield "    ";
        // line 527
        yield "    ";
        if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 527), "ea_is_inside_tab", [], "any", true, true, false, 527)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 527), "ea_is_inside_tab", [], "any", false, false, false, 527), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 528
            yield "        <div class=\"row\">
    ";
        }
        yield from [];
    }

    // line 532
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_group_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 533
        yield "    ";
        // line 535
        yield "    ";
        if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 535), "ea_is_inside_tab", [], "any", true, true, false, 535)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 535), "ea_is_inside_tab", [], "any", false, false, false, 535), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 536
            yield "        </div>
    ";
        }
        yield from [];
    }

    // line 540
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 541
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 541), "ea_vars", [], "any", false, false, false, 541), "field", [], "any", false, false, false, 541);
        // line 542
        yield "    ";
        $context["field_icon"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 542);
        // line 543
        yield "    ";
        $context["column_has_title"] = (((((($context["field_icon"] ?? null) != null) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 543) != false)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 543) != null)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 543) != "")) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 543) != null));
        // line 544
        yield "
    <div class=\"form-column ";
        // line 545
        yield (((($tmp =  !($context["column_has_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-column-no-header") : (""));
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 545), "html", null, true);
        yield "\">
        ";
        // line 546
        if ((($tmp = ($context["column_has_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 547
            yield "            <div class=\"form-column-title\">
                <div class=\"form-column-title-content\">
                    ";
            // line 549
            if ((($tmp = ($context["field_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["field_icon"] ?? null), "class" => "form-column-icon"]);
            }
            // line 550
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 550)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", true, true, false, 550)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 550), "")) : ("")), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "i18n", [], "any", false, false, false, 550), "translationDomain", [], "any", false, false, false, 550));
            }
            // line 551
            yield "                </div>

                ";
            // line 553
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 553)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 554
                yield "                    <div class=\"form-column-help\">";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 554), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "i18n", [], "any", false, false, false, 554), "translationDomain", [], "any", false, false, false, 554));
                yield "</div>
                ";
            }
            // line 556
            yield "            </div>
        ";
        }
        yield from [];
    }

    // line 560
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 561
        yield "    </div>
";
        yield from [];
    }

    // line 564
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_open_ealabel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 565
        yield "    ";
        if ((($tmp = ($context["ea_is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 566
            yield "        ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-fieldset-collapse-marker"]);
            yield "
    ";
        }
        // line 568
        yield "
    ";
        // line 569
        if ((($tmp = ($context["ea_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 570
            yield "        ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["ea_icon"] ?? null), "class" => "form-fieldset-icon"]);
            yield "
    ";
        }
        // line 572
        yield "
    ";
        // line 573
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 573), "label", [], "any", false, false, false, 573));
        yield "
";
        yield from [];
    }

    // line 576
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_open_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 577
        yield "    <div class=\"form-fieldset-header ";
        yield (((($tmp = ($context["ea_is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
        yield " ";
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["ea_help"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
        yield "\">
        <div class=\"form-fieldset-title\">
            ";
        // line 579
        if ((($tmp = ($context["ea_is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 580
            yield "                <a href=\"#content-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 580), "name", [], "any", false, false, false, 580), "html", null, true);
            yield "\" data-bs-toggle=\"collapse\"
                   class=\"form-fieldset-title-content form-fieldset-collapse ";
            // line 581
            yield (((($tmp = ($context["ea_is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
            yield "\"
                   aria-expanded=\"";
            // line 582
            yield (((($tmp = ($context["ea_is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
            yield "\" aria-controls=\"content-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 582), "name", [], "any", false, false, false, 582), "html", null, true);
            yield "\">
                    ";
            // line 583
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'ealabel');
            yield "
                </a>
            ";
        } else {
            // line 586
            yield "                <span class=\"not-collapsible form-fieldset-title-content\">
                    ";
            // line 587
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'ealabel');
            yield "
                </span>
            ";
        }
        // line 590
        yield "
            ";
        // line 591
        if ((($tmp = ($context["ea_help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 592
            yield "                <div class=\"form-fieldset-help\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["ea_help"] ?? null));
            yield "</div>
            ";
        }
        // line 594
        yield "        </div>
    </div>
";
        yield from [];
    }

    // line 598
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 599
        yield "    ";
        $context["fieldset_has_header"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 599), "label", [], "any", false, false, false, 599) || ($context["ea_icon"] ?? null)) || ($context["ea_help"] ?? null));
        // line 600
        yield "
    <div class=\"form-fieldset ";
        // line 601
        yield (((($tmp =  !($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-fieldset-no-header") : (""));
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ea_css_class"] ?? null), "html", null, true);
        yield "\">
        <fieldset>
            ";
        // line 603
        if ((($tmp = ($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 604
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            yield "
            ";
        }
        // line 606
        yield "
            <div id=\"content-";
        // line 607
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 607), "name", [], "any", false, false, false, 607), "html", null, true);
        yield "\" class=\"form-fieldset-body ";
        yield (((($tmp =  !($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("without-header") : (""));
        yield " ";
        yield (((($tmp = ($context["ea_is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapse") : (""));
        yield " ";
        yield (((($tmp =  !($context["ea_is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
        yield "\">
                <div class=\"row\">
";
        yield from [];
    }

    // line 611
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 612
        yield "                </div>
            </div>
        </fieldset>
    </div>
";
        yield from [];
    }

    // line 618
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tablist_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 619
        yield "    ";
        $context["tab_id_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
        // line 620
        yield "    ";
        $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
        // line 621
        yield "    ";
        $context["tab_error_count_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ERROR_COUNT");
        // line 622
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 622), "ea_vars", [], "any", false, false, false, 622), "field", [], "any", false, false, false, 622);
        // line 623
        yield "
    <div class=\"nav-tabs-custom form-tabs-tablist\">
        <ul class=\"nav nav-tabs\">
            ";
        // line 626
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["tabs"], "method", false, false, false, 626));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 627
            yield "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
            // line 628
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 628)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield "\" href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 628), "html", null, true);
            yield "\" id=\"tablist-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 628), "html", null, true);
            yield "\" data-bs-toggle=\"tab\">";
            // line 629
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", true, true, false, 629)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 629), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 630
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 630), "class" => "tab-nav-item-icon"]);
            }
            // line 632
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 632), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "i18n", [], "any", false, false, false, 632), "translationDomain", [], "any", false, false, false, 632));
            yield "

                        ";
            // line 634
            $context["tab_error_count"] = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_error_count_option_name"] ?? null)], "method", false, false, false, 634);
            // line 635
            if ((($context["tab_error_count"] ?? null) > 0)) {
                // line 636
                yield "<span class=\"badge badge-danger\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => ($context["tab_error_count"] ?? null)], "EasyAdminBundle"), "html", null, true);
                yield "\">";
                // line 637
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tab_error_count"] ?? null), "html", null, true);
                // line 638
                yield "</span>";
            }
            // line 640
            yield "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 643
        yield "        </ul>
    </div>
";
        yield from [];
    }

    // line 647
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_group_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 648
        yield "    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
";
        yield from [];
    }

    // line 652
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_group_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 653
        yield "        </div>
    </div>
";
        yield from [];
    }

    // line 657
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 658
        yield "    ";
        $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
        // line 659
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 659), "ea_vars", [], "any", false, false, false, 659), "field", [], "any", false, false, false, 659);
        // line 660
        yield "
    <div id=\"";
        // line 661
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ea_tab_id"] ?? null), "html", null, true);
        yield "\" class=\"tab-pane ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 661)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "active";
        }
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ea_css_class"] ?? null), "html", null, true);
        yield "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 661), "attr", [], "any", false, false, false, 661));
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
        // line 662
        if ((($tmp = ($context["ea_help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 663
            yield "            <div class=\"content-header-help tab-help\">
                ";
            // line 664
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["ea_help"] ?? null), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "i18n", [], "any", false, false, false, 664), "translationDomain", [], "any", false, false, false, 664));
            yield "
            </div>
        ";
        }
        // line 667
        yield "
        <div class=\"row\">
";
        yield from [];
    }

    // line 671
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 672
        yield "        </div>
    </div>
";
        yield from [];
    }

    // line 677
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_filters_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 678
        yield "    ";
        $context["applied_filters"] = Twig\Extension\CoreExtension::keys(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "request", [], "any", false, true, false, 678), "query", [], "any", false, true, false, 678), "all", [], "method", false, true, false, 678), "filters", [], "array", true, true, false, 678)) ? (Twig\Extension\CoreExtension::default((($_v5 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "request", [], "any", false, false, false, 678), "query", [], "any", false, false, false, 678), "all", [], "method", false, false, false, 678)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["filters"] ?? null) : null), [])) : ([])));
        // line 679
        yield "
    ";
        // line 680
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
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
            // line 681
            yield "        <div class=\"col-12\">
            <div class=\"filter-field px-3\" data-filter-property=\"";
            // line 682
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 682), "name", [], "any", false, false, false, 682), "html", null, true);
            yield "\">
                <div class=\"filter-heading\" id=\"filter-heading-";
            // line 683
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 683), "html", null, true);
            yield "\">
                    <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 684
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 684), "name", [], "any", false, false, false, 684), ($context["applied_filters"] ?? null))) {
                yield "checked";
            }
            yield ">
                    <a data-bs-toggle=\"collapse\" href=\"#filter-content-";
            // line 685
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 685), "html", null, true);
            yield "\" aria-expanded=\"";
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 685), "name", [], "any", false, false, false, 685), ($context["applied_filters"] ?? null))) ? ("true") : ("false"));
            yield "\" aria-controls=\"filter-content-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 685), "html", null, true);
            yield "\"
                        ";
            // line 686
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 686), "label_attr", [], "any", true, true, false, 686)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 686), "label_attr", [], "any", false, false, false, 686), [])) : ([])));
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
            // line 687
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 687), "label", [], "any", true, true, false, 687)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 687), "label", [], "any", false, false, false, 687), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 687), "name", [], "any", false, false, false, 687)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 687), "name", [], "any", false, false, false, 687)))), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "i18n", [], "any", false, false, false, 687), "translationDomain", [], "any", false, false, false, 687)), "html", null, true);
            yield "
                    </a>
                </div>
                <div id=\"filter-content-";
            // line 690
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 690), "html", null, true);
            yield "\" class=\"filter-content collapse ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 690), "name", [], "any", false, false, false, 690), ($context["applied_filters"] ?? null))) {
                yield "show";
            }
            yield "\" aria-labelledby=\"filter-heading-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 690), "html", null, true);
            yield "\">
                    <div class=\"form-widget\">
                        ";
            // line 692
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            yield "
                    </div>
                </div>
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
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 700
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_comparison_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 701
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 701), "attr", [], "any", false, false, false, 701), ["data-ea-comparison-id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 701), "id", [], "any", false, false, false, 701)])]);
        yield "
";
        yield from [];
    }

    // line 704
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_numeric_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 705
        yield "    <div class=\"form-widget-compound\">
        ";
        // line 706
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 706), 'row');
        yield "
        ";
        // line 707
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 707), 'row');
        yield "
        <div data-ea-value2-of-comparison-id=\"";
        // line 708
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 708), "vars", [], "any", false, false, false, 708), "id", [], "any", false, false, false, 708), "html", null, true);
        yield "\" class=\"";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 708), "vars", [], "any", false, false, false, 708), "value", [], "any", false, false, false, 708) != "between")) ? ("d-none") : (""));
        yield "\">
            ";
        // line 709
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 709), 'row');
        yield "
        </div>
    </div>";
        // line 712
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield from [];
    }

    // line 715
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_datetime_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 716
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("ea_numeric_filter_widget", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 719
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_fileupload_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 720
        yield "    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 722
        $context["placeholder"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.choose_file", [], "EasyAdminBundle");
        // line 723
        yield "            ";
        $context["title"] = "";
        // line 724
        yield "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 725
        yield "            ";
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 726
            yield "                ";
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 727
                yield "                    ";
                $context["placeholder"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 728
                yield "                ";
            } else {
                // line 729
                yield "                    ";
                $context["placeholder"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 729);
                // line 730
                yield "                    ";
                $context["title"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 730));
                // line 731
                yield "                ";
            }
            // line 732
            yield "            ";
        }
        // line 733
        yield "            <div class=\"custom-file\">
                ";
        // line 734
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 734), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 734), "vars", [], "any", false, false, false, 734), "attr", [], "any", false, false, false, 734), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "class" => "d-none"])]);
        yield "
                ";
        // line 735
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 735), 'label', ["label_attr" => ["class" => "custom-file-label"]] + (CoreExtension::testEmpty($_label_ = ($context["placeholder"] ?? null)) ? [] : ["label" => $_label_]));
        yield "
            </div>
            <div class=\"input-group-text\">";
        // line 738
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 739
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 740
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(Twig\Extension\CoreExtension::reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 740)); })), "html", null, true);
                yield "
                    ";
            } else {
                // line 742
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 742)), "html", null, true);
                yield "
                    ";
            }
        }
        // line 745
        if ((($tmp = ($context["allow_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 746
            yield "                    <label class=\"btn ea-fileupload-delete-btn ";
            yield ((Twig\Extension\CoreExtension::testEmpty(($context["currentFiles"] ?? null))) ? ("d-none") : (""));
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 746), "vars", [], "any", false, false, false, 746), "id", [], "any", false, false, false, 746), "html", null, true);
            yield "\">
                        ";
            // line 747
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:delete"]);
            yield "
                    </label>
                ";
        }
        // line 750
        yield "                <label class=\"btn\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 750), "vars", [], "any", false, false, false, 750), "id", [], "any", false, false, false, 750), "html", null, true);
        yield "\">
                    ";
        // line 751
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:folder-open"]);
        yield "
                </label>
            </div>
        </div>
        ";
        // line 755
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 756
            yield "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 759
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 760
                yield "                        <tr>
                            <td>
                                ";
                // line 762
                if ((($tmp = ($context["download_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 762))), "html", null, true);
                    yield "\">";
                }
                // line 763
                yield "                                    <span title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 763)), "html", null, true);
                yield "\">
                                        ";
                // line 764
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:file-lines"]);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 764), "html", null, true);
                yield "
                                    </span>
                                ";
                // line 766
                if ((($tmp = ($context["download_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "</a>";
                }
                // line 767
                yield "                            </td>
                            <td class=\"text-right file-size\">";
                // line 768
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 768)), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 771
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 775
        yield "        ";
        if ((($tmp = ($context["allow_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 776
            yield "            <div class=\"d-none\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 776), 'widget', ["label" => false]);
            yield "</div>
        ";
        }
        // line 778
        yield "    </div>
    ";
        // line 779
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 779), 'errors');
        yield "
";
        yield from [];
    }

    // line 782
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_TODO_ea_fileupload_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 783
        yield "    ";
        $context["placeholder"] = "";
        // line 784
        yield "    ";
        $context["title"] = "";
        // line 785
        yield "    ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 786
        yield "    ";
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 787
            yield "        ";
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 788
                yield "            ";
                $context["placeholder"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 789
                yield "        ";
            } else {
                // line 790
                yield "            ";
                $context["placeholder"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 790);
                // line 791
                yield "            ";
                $context["title"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 791));
                // line 792
                yield "        ";
            }
            // line 793
            yield "    ";
        }
        // line 794
        yield "
    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 797
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 797), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 797), "vars", [], "any", false, false, false, 797), "attr", [], "any", false, false, false, 797), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "class" => "form-control"])]);
        yield "

            ";
        // line 799
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 800
            yield "                <span class=\"input-group-text\">
                    ";
            // line 801
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 802
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(Twig\Extension\CoreExtension::reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 802)); })), "html", null, true);
                yield "
                    ";
            } else {
                // line 804
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 804)), "html", null, true);
                yield "
                    ";
            }
            // line 806
            yield "                </span>
            ";
        }
        // line 808
        yield "
            ";
        // line 809
        if ((($context["currentFiles"] ?? null) && ($context["allow_delete"] ?? null))) {
            // line 810
            yield "                <button class=\"btn ea-fileupload-delete-btn\">
                    ";
            // line 811
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:delete"]);
            yield "
                </button>
            ";
        }
        // line 814
        yield "
            ";
        // line 815
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 816
            yield "                <button class=\"btn\">
                    ";
            // line 817
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:folder-open"]);
            yield "
                </button>
            ";
        }
        // line 820
        yield "        </div>

        ";
        // line 822
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 823
            yield "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 826
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 827
                yield "                        <tr>
                            <td>
                                ";
                // line 829
                if ((($tmp = ($context["download_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 829))), "html", null, true);
                    yield "\">";
                }
                // line 830
                yield "                                    <span title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 830)), "html", null, true);
                yield "\">
                                        ";
                // line 831
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:file-lines"]);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 831), "html", null, true);
                yield "
                                    </span>
                                    ";
                // line 833
                if ((($tmp = ($context["download_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "</a>";
                }
                // line 834
                yield "                            </td>
                            <td class=\"text-right file-size\">";
                // line 835
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 835)), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 838
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 842
        yield "        ";
        if ((($tmp = ($context["allow_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 843
            yield "            <div class=\"d-none\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 843), 'widget', ["label" => false]);
            yield "</div>
        ";
        }
        // line 845
        yield "    </div>

    ";
        // line 847
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 847), 'errors');
        yield "
";
        yield from [];
    }

    // line 850
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_slug_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 851
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-ea-slug-field" => "", "data-target" => json_encode(Twig\Extension\CoreExtension::map($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(),         // line 853
($context["target"] ?? null), "|"), function ($__name__) use ($context, $macros) { $context["name"] = $__name__; return CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 853), "children", [], "any", false, false, false, 853)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[($context["name"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 853), "id", [], "any", false, false, false, 853); }))]);
        // line 855
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-confirm-text", [], "array", true, true, false, 855)) {
            // line 856
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-confirm-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($_v7 =             // line 857
($context["attr"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["data-confirm-text"] ?? null) : null))]);
            // line 859
            yield "    ";
        }
        // line 860
        yield "
    <div class=\"input-group\">
        ";
        // line 862
        yield from         $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        yield "
        <button type=\"button\" class=\"btn\"
                data-icon-locked=\"";
        // line 864
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock"]), "html");
        yield "\"
                data-icon-unlocked=\"";
        // line 865
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock-open-solid"]), "html");
        yield "\">
            ";
        // line 866
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock"]);
        yield "
        </button>
    </div>
";
        yield from [];
    }

    // line 470
    public function macro_recursiveFieldsetForm($form = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 471
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!CoreExtension::inFilter("hidden", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 471), "block_prefixes", [], "any", false, false, false, 471)) && ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 471), "ea_crud_form", [], "any", false, true, false, 471), "form_tab", [], "any", true, true, false, 471) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 471), "ea_crud_form", [], "any", false, false, false, 471), "form_tab", [], "any", false, false, false, 471)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 471), "ea_crud_form", [], "any", false, true, false, 471), "form_tabs", [], "any", true, true, false, 471))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 472
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 472), "ea_crud_form", [], "any", false, true, false, 472), "form_tabs", [], "any", true, true, false, 472)) {
                    // line 473
                    yield "                    ";
                    // line 474
                    yield "                    ";
                    yield $this->getTemplateForMacro("macro_recursiveFieldsetForm", $context, 474, $this->getSourceContext())->macro_recursiveFieldsetForm(...[$context["field"]]);
                    yield "
                ";
                } else {
                    // line 476
                    yield "                    ";
                    // line 477
                    yield "                    ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    yield "
                ";
                }
                // line 479
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 480
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/form_theme.html.twig";
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
        return array (  2767 => 480,  2761 => 479,  2755 => 477,  2753 => 476,  2747 => 474,  2745 => 473,  2742 => 472,  2737 => 471,  2725 => 470,  2716 => 866,  2712 => 865,  2708 => 864,  2703 => 862,  2699 => 860,  2696 => 859,  2694 => 857,  2692 => 856,  2689 => 855,  2687 => 853,  2685 => 851,  2678 => 850,  2671 => 847,  2667 => 845,  2661 => 843,  2658 => 842,  2652 => 838,  2643 => 835,  2640 => 834,  2636 => 833,  2629 => 831,  2624 => 830,  2618 => 829,  2614 => 827,  2610 => 826,  2605 => 823,  2603 => 822,  2599 => 820,  2593 => 817,  2590 => 816,  2588 => 815,  2585 => 814,  2579 => 811,  2576 => 810,  2574 => 809,  2571 => 808,  2567 => 806,  2561 => 804,  2555 => 802,  2553 => 801,  2550 => 800,  2548 => 799,  2543 => 797,  2538 => 794,  2535 => 793,  2532 => 792,  2529 => 791,  2526 => 790,  2523 => 789,  2520 => 788,  2517 => 787,  2514 => 786,  2511 => 785,  2508 => 784,  2505 => 783,  2498 => 782,  2491 => 779,  2488 => 778,  2482 => 776,  2479 => 775,  2473 => 771,  2464 => 768,  2461 => 767,  2457 => 766,  2450 => 764,  2445 => 763,  2439 => 762,  2435 => 760,  2431 => 759,  2426 => 756,  2424 => 755,  2417 => 751,  2412 => 750,  2406 => 747,  2399 => 746,  2397 => 745,  2390 => 742,  2384 => 740,  2382 => 739,  2380 => 738,  2375 => 735,  2371 => 734,  2368 => 733,  2365 => 732,  2362 => 731,  2359 => 730,  2356 => 729,  2353 => 728,  2350 => 727,  2347 => 726,  2344 => 725,  2341 => 724,  2338 => 723,  2336 => 722,  2332 => 720,  2325 => 719,  2317 => 716,  2310 => 715,  2305 => 712,  2300 => 709,  2294 => 708,  2290 => 707,  2286 => 706,  2283 => 705,  2276 => 704,  2268 => 701,  2261 => 700,  2238 => 692,  2227 => 690,  2221 => 687,  2207 => 686,  2199 => 685,  2193 => 684,  2189 => 683,  2185 => 682,  2182 => 681,  2165 => 680,  2162 => 679,  2159 => 678,  2152 => 677,  2145 => 672,  2138 => 671,  2131 => 667,  2125 => 664,  2122 => 663,  2120 => 662,  2098 => 661,  2095 => 660,  2092 => 659,  2089 => 658,  2082 => 657,  2075 => 653,  2068 => 652,  2061 => 648,  2054 => 647,  2047 => 643,  2039 => 640,  2036 => 638,  2034 => 637,  2030 => 636,  2028 => 635,  2026 => 634,  2021 => 632,  2018 => 630,  2016 => 629,  2007 => 628,  2004 => 627,  2000 => 626,  1995 => 623,  1992 => 622,  1989 => 621,  1986 => 620,  1983 => 619,  1976 => 618,  1967 => 612,  1960 => 611,  1946 => 607,  1943 => 606,  1937 => 604,  1935 => 603,  1928 => 601,  1925 => 600,  1922 => 599,  1915 => 598,  1908 => 594,  1902 => 592,  1900 => 591,  1897 => 590,  1891 => 587,  1888 => 586,  1882 => 583,  1876 => 582,  1872 => 581,  1867 => 580,  1865 => 579,  1857 => 577,  1850 => 576,  1843 => 573,  1840 => 572,  1834 => 570,  1832 => 569,  1829 => 568,  1823 => 566,  1820 => 565,  1813 => 564,  1807 => 561,  1800 => 560,  1793 => 556,  1787 => 554,  1785 => 553,  1781 => 551,  1776 => 550,  1772 => 549,  1768 => 547,  1766 => 546,  1760 => 545,  1757 => 544,  1754 => 543,  1751 => 542,  1748 => 541,  1741 => 540,  1734 => 536,  1731 => 535,  1729 => 533,  1722 => 532,  1715 => 528,  1712 => 527,  1710 => 526,  1703 => 525,  1695 => 522,  1688 => 521,  1680 => 516,  1676 => 515,  1672 => 513,  1670 => 512,  1669 => 511,  1667 => 509,  1660 => 508,  1654 => 504,  1652 => 503,  1651 => 502,  1650 => 501,  1649 => 500,  1648 => 499,  1646 => 497,  1639 => 496,  1631 => 492,  1628 => 491,  1621 => 490,  1613 => 487,  1606 => 486,  1594 => 481,  1592 => 470,  1590 => 469,  1582 => 465,  1576 => 464,  1570 => 462,  1567 => 461,  1563 => 460,  1552 => 458,  1549 => 457,  1544 => 454,  1538 => 452,  1536 => 451,  1529 => 448,  1523 => 446,  1521 => 445,  1518 => 444,  1512 => 442,  1510 => 441,  1507 => 440,  1500 => 438,  1496 => 437,  1491 => 436,  1487 => 434,  1485 => 433,  1477 => 431,  1475 => 430,  1470 => 428,  1467 => 427,  1464 => 426,  1462 => 425,  1459 => 424,  1456 => 423,  1451 => 422,  1448 => 421,  1445 => 420,  1438 => 419,  1431 => 416,  1428 => 415,  1425 => 414,  1418 => 413,  1406 => 408,  1401 => 407,  1394 => 406,  1386 => 402,  1379 => 401,  1371 => 397,  1368 => 396,  1362 => 394,  1360 => 393,  1354 => 390,  1348 => 389,  1345 => 388,  1341 => 385,  1335 => 383,  1328 => 380,  1326 => 379,  1323 => 378,  1320 => 377,  1314 => 374,  1310 => 373,  1304 => 370,  1300 => 369,  1297 => 368,  1294 => 367,  1288 => 364,  1285 => 363,  1282 => 362,  1280 => 361,  1277 => 360,  1274 => 359,  1267 => 358,  1259 => 355,  1256 => 354,  1249 => 353,  1241 => 349,  1238 => 348,  1232 => 346,  1230 => 345,  1224 => 342,  1218 => 341,  1215 => 340,  1211 => 337,  1205 => 335,  1198 => 332,  1196 => 331,  1193 => 330,  1189 => 328,  1186 => 326,  1183 => 324,  1181 => 323,  1179 => 322,  1174 => 321,  1172 => 320,  1169 => 319,  1162 => 318,  1154 => 315,  1151 => 314,  1144 => 313,  1136 => 309,  1133 => 308,  1126 => 307,  1118 => 301,  1114 => 298,  1111 => 296,  1109 => 295,  1105 => 292,  1102 => 290,  1100 => 289,  1098 => 288,  1083 => 287,  1079 => 284,  1076 => 281,  1075 => 280,  1074 => 279,  1072 => 278,  1070 => 277,  1068 => 274,  1065 => 272,  1063 => 271,  1060 => 269,  1057 => 267,  1055 => 266,  1053 => 265,  1050 => 261,  1043 => 260,  1038 => 255,  1036 => 254,  1030 => 253,  1023 => 252,  1015 => 248,  1012 => 247,  1009 => 246,  1006 => 245,  1003 => 244,  1000 => 243,  994 => 241,  991 => 240,  988 => 239,  986 => 237,  984 => 236,  981 => 235,  974 => 234,  968 => 231,  959 => 225,  951 => 222,  948 => 221,  942 => 219,  940 => 218,  934 => 215,  930 => 214,  924 => 213,  920 => 211,  917 => 210,  911 => 208,  909 => 207,  905 => 206,  900 => 205,  898 => 204,  892 => 203,  889 => 202,  882 => 199,  878 => 198,  875 => 197,  872 => 196,  869 => 195,  866 => 194,  863 => 193,  860 => 192,  857 => 191,  850 => 190,  841 => 185,  837 => 184,  834 => 183,  832 => 182,  829 => 181,  826 => 180,  823 => 179,  821 => 178,  817 => 176,  811 => 173,  808 => 172,  802 => 170,  800 => 169,  795 => 168,  793 => 167,  789 => 165,  786 => 164,  783 => 163,  781 => 161,  774 => 160,  767 => 157,  764 => 156,  762 => 154,  761 => 153,  760 => 152,  759 => 151,  758 => 150,  757 => 148,  754 => 147,  748 => 146,  745 => 145,  742 => 144,  739 => 143,  736 => 142,  733 => 141,  730 => 140,  725 => 139,  723 => 138,  720 => 137,  717 => 136,  714 => 135,  711 => 134,  704 => 133,  697 => 130,  694 => 129,  691 => 128,  688 => 123,  685 => 122,  678 => 121,  671 => 117,  668 => 116,  662 => 111,  660 => 110,  654 => 107,  652 => 106,  647 => 105,  645 => 104,  642 => 103,  637 => 102,  631 => 100,  629 => 99,  624 => 97,  621 => 96,  615 => 93,  612 => 92,  609 => 91,  605 => 90,  602 => 89,  599 => 88,  596 => 87,  594 => 86,  591 => 85,  589 => 84,  577 => 83,  575 => 82,  572 => 81,  569 => 80,  566 => 79,  564 => 77,  562 => 76,  555 => 75,  549 => 69,  546 => 67,  544 => 66,  542 => 65,  535 => 64,  530 => 61,  528 => 60,  526 => 59,  519 => 58,  514 => 55,  512 => 54,  510 => 53,  503 => 52,  497 => 49,  495 => 48,  493 => 47,  490 => 45,  488 => 44,  481 => 43,  476 => 40,  473 => 38,  471 => 37,  469 => 36,  466 => 34,  464 => 33,  457 => 32,  451 => 27,  440 => 25,  435 => 24,  432 => 23,  425 => 22,  419 => 19,  413 => 17,  410 => 16,  403 => 15,  394 => 11,  392 => 10,  388 => 9,  385 => 8,  379 => 6,  376 => 5,  369 => 4,  364 => 850,  361 => 849,  359 => 782,  356 => 781,  354 => 719,  351 => 718,  349 => 715,  346 => 714,  344 => 704,  341 => 703,  339 => 700,  336 => 699,  334 => 677,  331 => 675,  329 => 671,  326 => 670,  324 => 657,  321 => 656,  319 => 652,  316 => 651,  314 => 647,  311 => 646,  309 => 618,  306 => 617,  304 => 611,  301 => 610,  299 => 598,  296 => 597,  294 => 576,  291 => 575,  289 => 564,  286 => 563,  284 => 560,  281 => 559,  279 => 540,  276 => 539,  274 => 532,  271 => 531,  269 => 525,  266 => 524,  264 => 521,  261 => 519,  259 => 508,  256 => 506,  254 => 496,  251 => 494,  249 => 490,  246 => 489,  244 => 486,  241 => 484,  239 => 419,  236 => 418,  234 => 413,  231 => 411,  229 => 406,  226 => 404,  224 => 401,  221 => 400,  219 => 358,  216 => 357,  214 => 353,  211 => 352,  209 => 318,  206 => 317,  204 => 313,  201 => 312,  199 => 307,  196 => 306,  193 => 304,  191 => 260,  188 => 259,  185 => 257,  183 => 252,  180 => 251,  178 => 234,  175 => 233,  173 => 190,  170 => 189,  168 => 160,  165 => 159,  163 => 133,  160 => 132,  158 => 121,  155 => 120,  153 => 75,  150 => 74,  147 => 72,  145 => 64,  142 => 63,  140 => 58,  137 => 57,  135 => 52,  132 => 51,  130 => 43,  127 => 42,  125 => 32,  122 => 31,  119 => 29,  117 => 22,  114 => 21,  112 => 15,  109 => 14,  107 => 4,  104 => 3,  35 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/form_theme.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\form_theme.html.twig");
    }
}
