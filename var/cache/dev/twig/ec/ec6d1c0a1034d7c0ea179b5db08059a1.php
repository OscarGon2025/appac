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
class __TwigTemplate_2ebda355dd9e98c11474415d78e0aa01 extends Template
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

        // line 3
        $_trait_0 = $this->load("@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig", 3);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 3, $this->source);
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/form_theme.html.twig"));

        // line 2
        $context["ea"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea();
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 15
        yield "
";
        // line 16
        yield from $this->unwrap()->yieldBlock('form_end', $context, $blocks);
        // line 22
        yield "
";
        // line 23
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 30
        yield "
";
        // line 32
        yield "
";
        // line 33
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 43
        yield "
";
        // line 44
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 52
        yield "
";
        // line 53
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 58
        yield "
";
        // line 59
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 64
        yield "
";
        // line 65
        yield from $this->unwrap()->yieldBlock('file_widget', $context, $blocks);
        // line 73
        yield "
";
        // line 75
        yield "
";
        // line 76
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 121
        yield "
";
        // line 122
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 133
        yield "
";
        // line 134
        yield from $this->unwrap()->yieldBlock('collection_row', $context, $blocks);
        // line 160
        yield "
";
        // line 161
        yield from $this->unwrap()->yieldBlock('collection_widget', $context, $blocks);
        // line 190
        yield "
";
        // line 191
        yield from $this->unwrap()->yieldBlock('collection_entry_row', $context, $blocks);
        // line 234
        yield "
";
        // line 235
        yield from $this->unwrap()->yieldBlock('form_widget_compound', $context, $blocks);
        // line 252
        yield "
";
        // line 253
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 258
        yield "
";
        // line 260
        yield "
";
        // line 261
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 305
        yield "
";
        // line 307
        yield "
";
        // line 308
        yield from $this->unwrap()->yieldBlock('empty_collection', $context, $blocks);
        // line 313
        yield "
";
        // line 314
        yield from $this->unwrap()->yieldBlock('vich_file_row', $context, $blocks);
        // line 318
        yield "
";
        // line 319
        yield from $this->unwrap()->yieldBlock('vich_file_widget', $context, $blocks);
        // line 353
        yield "
";
        // line 354
        yield from $this->unwrap()->yieldBlock('vich_image_row', $context, $blocks);
        // line 358
        yield "
";
        // line 359
        yield from $this->unwrap()->yieldBlock('vich_image_widget', $context, $blocks);
        // line 425
        yield "
";
        // line 426
        yield from $this->unwrap()->yieldBlock('ea_crud_rest', $context, $blocks);
        // line 429
        yield "
";
        // line 431
        yield from $this->unwrap()->yieldBlock('ea_crud_widget', $context, $blocks);
        // line 436
        yield "
";
        // line 438
        yield from $this->unwrap()->yieldBlock('ea_crud_widget_panels', $context, $blocks);
        // line 443
        yield "
";
        // line 444
        yield from $this->unwrap()->yieldBlock('ea_crud_widget_fieldsets', $context, $blocks);
        // line 509
        yield "
";
        // line 511
        yield from $this->unwrap()->yieldBlock('ea_autocomplete_widget', $context, $blocks);
        // line 514
        yield "
";
        // line 515
        yield from $this->unwrap()->yieldBlock('ea_autocomplete_inner_label', $context, $blocks);
        // line 519
        yield "
";
        // line 521
        yield from $this->unwrap()->yieldBlock('ea_code_editor_widget', $context, $blocks);
        // line 531
        yield "
";
        // line 533
        yield from $this->unwrap()->yieldBlock('ea_text_editor_widget', $context, $blocks);
        // line 544
        yield "
";
        // line 546
        yield from $this->unwrap()->yieldBlock('ea_form_row_row', $context, $blocks);
        // line 549
        yield "
";
        // line 550
        yield from $this->unwrap()->yieldBlock('ea_form_column_group_open_row', $context, $blocks);
        // line 556
        yield "
";
        // line 557
        yield from $this->unwrap()->yieldBlock('ea_form_column_group_close_row', $context, $blocks);
        // line 564
        yield "
";
        // line 565
        yield from $this->unwrap()->yieldBlock('ea_form_column_open_row', $context, $blocks);
        // line 584
        yield "
";
        // line 585
        yield from $this->unwrap()->yieldBlock('ea_form_column_close_row', $context, $blocks);
        // line 588
        yield "
";
        // line 589
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_open_ealabel', $context, $blocks);
        // line 600
        yield "
";
        // line 601
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_open_label', $context, $blocks);
        // line 622
        yield "
";
        // line 623
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_open_row', $context, $blocks);
        // line 635
        yield "
";
        // line 636
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_close_row', $context, $blocks);
        // line 642
        yield "
";
        // line 643
        yield from $this->unwrap()->yieldBlock('ea_form_tablist_row', $context, $blocks);
        // line 671
        yield "
";
        // line 672
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_group_open_row', $context, $blocks);
        // line 676
        yield "
";
        // line 677
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_group_close_row', $context, $blocks);
        // line 681
        yield "
";
        // line 682
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_open_row', $context, $blocks);
        // line 695
        yield "
";
        // line 696
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_close_row', $context, $blocks);
        // line 700
        yield "
";
        // line 702
        yield from $this->unwrap()->yieldBlock('ea_filters_widget', $context, $blocks);
        // line 724
        yield "
";
        // line 725
        yield from $this->unwrap()->yieldBlock('comparison_widget', $context, $blocks);
        // line 728
        yield "
";
        // line 729
        yield from $this->unwrap()->yieldBlock('ea_numeric_filter_widget', $context, $blocks);
        // line 739
        yield "
";
        // line 740
        yield from $this->unwrap()->yieldBlock('ea_datetime_filter_widget', $context, $blocks);
        // line 743
        yield "
";
        // line 744
        yield from $this->unwrap()->yieldBlock('ea_fileupload_widget', $context, $blocks);
        // line 806
        yield "
";
        // line 807
        yield from $this->unwrap()->yieldBlock('TODO_ea_fileupload_widget', $context, $blocks);
        // line 874
        yield "
";
        // line 875
        yield from $this->unwrap()->yieldBlock('ea_slug_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 6
        yield "    ";
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 6), "errors", [], "any", false, false, false, 6)) > 0) && CoreExtension::inFilter("ea_crud", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 6), "block_prefixes", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 6), "block_prefixes", [], "any", false, false, false, 6), [])) : ([]))))) {
            // line 7
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors', ["attr" => ["errorClass" => "global-invalid-feedback"]]);
            yield "
    ";
        }
        // line 9
        yield "
    ";
        // line 10
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        yield "
    ";
        // line 11
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", ["referrer"], "method", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "        <input type=\"hidden\" name=\"referrer\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 12), "query", [], "any", false, false, false, 12), "get", ["referrer"], "method", false, false, false, 12), "html", null, true);
            yield "\">
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_end"));

        // line 17
        yield "        ";
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? null))) {
            // line 18
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            yield "
        ";
        }
        // line 20
        yield "    </form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 24
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 25
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 26
                yield "            <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "errorClass", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "errorClass", [], "any", false, false, false, 26), "")) : ("")), "html", null, true);
                yield " invalid-feedback d-block\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 26), "html", null, true);
                yield "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 34
        if (( !array_key_exists("type", $context) || !CoreExtension::inFilter(($context["type"] ?? null), ["file", "hidden"]))) {
            // line 35
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 35), "")) : ("")))]);
        }
        // line 37
        if ((array_key_exists("type", $context) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 38
            yield "        ";
            // line 39
            $context["required"] = false;
        }
        // line 41
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 45
        if ((($context["widget"] ?? null) != "single_text")) {
            // line 46
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 46), "")) : ("")) . " form-inline"))]);
        }
        // line 48
        yield "<div class=\"datetime-widget datetime-widget-datetime\">";
        // line 49
        yield from $this->yieldParentBlock("datetime_widget", $context, $blocks);
        // line 50
        yield "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 54
        yield "<div class=\"datetime-widget datetime-widget-date\">";
        // line 55
        yield from $this->yieldParentBlock("date_widget", $context, $blocks);
        // line 56
        yield "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 60
        yield "<div class=\"datetime-widget datetime-widget-time\">";
        // line 61
        yield from $this->yieldParentBlock("time_widget", $context, $blocks);
        // line 62
        yield "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        // line 66
        if ((($tmp = ((array_key_exists("vich", $context)) ? (Twig\Extension\CoreExtension::default(($context["vich"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "file")) : ("file"));
            // line 68
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 70
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 77
        yield "    ";
        $context["row_attr"] = Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 78
($context["row_attr"] ?? null), "class", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 78), "")) : ("")) . " form-group")]);
        // line 80
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 80), "ea_vars", [], "any", false, false, false, 80), "field", [], "any", false, false, false, 80);
        // line 81
        yield "
    <div class=\"";
        // line 82
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", true, true, false, 82) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 82)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 82), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", true, true, false, 82) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", false, false, false, 82)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", false, false, false, 82), "html", null, true)) : (""))));
        yield "\">";
        // line 83
        $context["row_class"] = ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 83)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 83), "mb-3")) : ("mb-3")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 83)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 83), "mb-3")) : ("mb-3"))));
        // line 84
        yield "<div ";
        $_v0 = $context;
        $_v1 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((($context["row_class"] ?? null) . (((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) ? (" has-error") : (""))))])];
        if (!is_iterable($_v1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 84, $this->getSourceContext());
        }
        $_v1 = CoreExtension::toArray($_v1);
        $context = $_v1 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v0;
        yield ">";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 86
        yield "<div class=\"form-widget\">
                ";
        // line 87
        $context["has_prepend_html"] =  !(null === ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", false, false, false, 87), null)) : (null)));
        // line 88
        yield "                ";
        $context["has_append_html"] =  !(null === ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", false, false, false, 88), null)) : (null)));
        // line 89
        yield "                ";
        $context["has_input_groups"] = (($context["has_prepend_html"] ?? null) || ($context["has_append_html"] ?? null));
        // line 90
        yield "
                ";
        // line 91
        if ((($tmp = ($context["has_input_groups"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<div class=\"input-group\">";
        }
        // line 92
        yield "                    ";
        if ((($tmp = ($context["has_prepend_html"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">";
            // line 94
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", false, false, false, 94);
            yield "</span>
                        </div>
                    ";
        }
        // line 97
        yield "
                    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        yield "

                    ";
        // line 100
        if ((($tmp = ($context["has_append_html"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "                        <span class=\"input-group-text\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", false, false, false, 101);
            yield "</span>
                    ";
        }
        // line 103
        yield "                ";
        if ((($tmp = ($context["has_input_groups"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "</div>";
        }
        // line 104
        yield "
                ";
        // line 105
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 105) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 105)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 105)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "                    <small class=\"form-text form-help\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 106), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            yield "</small>
                ";
        } elseif ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 107
($context["form"] ?? null), "vars", [], "any", false, true, false, 107), "help", [], "any", true, true, false, 107) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 107), "help", [], "any", false, false, false, 107)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 107), "help", [], "any", false, false, false, 107)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "                    <small class=\"form-text form-help\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 108), "help", [], "any", false, false, false, 108), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 108), "help_translation_parameters", [], "any", false, false, false, 108), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 108), "translation_domain", [], "any", false, false, false, 108));
            yield "</small>
                ";
        }
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 112
        yield "</div>
        </div>
    </div>

    ";
        // line 117
        yield "    ";
        if ((null === ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", true, true, false, 117)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 117), null)) : (null)))) {
            // line 118
            yield "        <div class=\"flex-fill\"></div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 122
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 123
        yield "    ";
        if (("ea-autocomplete" == ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-ea-widget", [], "array", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default((($_v2 = ($context["attr"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["data-ea-widget"] ?? null) : null), false)) : (false)))) {
            // line 124
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-ea-i18n-no-results-found" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-results-found", [], "EasyAdminBundle"), "data-ea-i18n-no-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-more-results", [], "EasyAdminBundle"), "data-ea-i18n-loading-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.loading-more-results", [], "EasyAdminBundle")]);
            // line 129
            yield "    ";
        }
        // line 130
        yield "
    ";
        // line 131
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 134
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_row"));

        // line 135
        yield "    ";
        if ((array_key_exists("prototype", $context) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 135))) {
            // line 136
            yield "        ";
            $context["row_attr"] = Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
            // line 137
            yield "    ";
        }
        // line 138
        yield "
    ";
        // line 139
        $context["maxKey"] = 0;
        // line 140
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 140)));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 141
            yield "        ";
            if (CoreExtension::matches("/^\\d+\$/", $context["key"])) {
                // line 142
                yield "            ";
                $context["intKey"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber($context["key"], 0, "", "", "");
                // line 143
                yield "            ";
                if ((($context["intKey"] ?? null) > ($context["maxKey"] ?? null))) {
                    // line 144
                    yield "                ";
                    $context["maxKey"] = ($context["intKey"] ?? null);
                    // line 145
                    yield "            ";
                }
                // line 146
                yield "        ";
            }
            // line 147
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        yield "
    ";
        // line 149
        $context["row_attr"] = Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["data-ea-collection-field" => "true", "data-entry-is-complex" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 151
($context["form"] ?? null), "vars", [], "any", false, false, false, 151), "ea_vars", [], "any", false, false, false, 151), "field", [], "any", false, false, false, 151) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 151), "ea_vars", [], "any", false, false, false, 151), "field", [], "any", false, false, false, 151), "customOptions", [], "any", false, false, false, 151), "get", ["entryIsComplex"], "method", false, false, false, 151))) ? ("true") : ("false")), "data-allow-add" => (((($tmp =         // line 152
($context["allow_add"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-allow-delete" => (((($tmp =         // line 153
($context["allow_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-num-items" => ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 154
($context["form"] ?? null), "children", [], "any", false, false, false, 154))) ? (0) : ((($context["maxKey"] ?? null) + 1))), "data-form-type-name-placeholder" => ((        // line 155
array_key_exists("prototype", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 155), "name", [], "any", false, false, false, 155)) : (""))]);
        // line 157
        yield "
    ";
        // line 158
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 162
        yield "    ";
        // line 164
        yield "    ";
        $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (is_iterable(($context["value"] ?? null)) && Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))));
        // line 165
        yield "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 165), "ea_vars", [], "any", false, true, false, 165), "field", [], "any", false, true, false, 165), "fieldFqcn", [], "any", true, true, false, 165)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 165), "ea_vars", [], "any", false, false, false, 165), "field", [], "any", false, false, false, 165), "fieldFqcn", [], "any", false, false, false, 165), false)) : (false)));
        // line 166
        yield "
    <div class=\"ea-form-collection-items\">
        ";
        // line 168
        if ((($tmp = ($context["isEmptyCollection"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 169
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("empty_collection", $context, $blocks);
            yield "
        ";
        } elseif ((($tmp =         // line 170
($context["is_array_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 171
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
            yield "
        ";
        } else {
            // line 173
            yield "            <div class=\"accordion\">
                ";
            // line 174
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
            yield "
            </div>
        ";
        }
        // line 177
        yield "    </div>

    ";
        // line 179
        if ((($context["isEmptyCollection"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 179), "prototype", [], "any", true, true, false, 179))) {
            // line 180
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-empty-collection" =>             $this->unwrap()->renderBlock("empty_collection", $context, $blocks)]);
            // line 181
            yield "    ";
        }
        // line 182
        yield "
    ";
        // line 183
        if ((((array_key_exists("allow_add", $context)) ? (Twig\Extension\CoreExtension::default(($context["allow_add"] ?? null), false)) : (false)) &&  !($context["disabled"] ?? null))) {
            // line 184
            yield "        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            ";
            // line 185
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:plus", "class" => "pr-1"]);
            yield "
            ";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            yield "
        </button>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 191
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_entry_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_entry_row"));

        // line 192
        yield "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 192), "ea_vars", [], "any", false, true, false, 192), "field", [], "any", false, true, false, 192), "fieldFqcn", [], "any", true, true, false, 192)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 192), "ea_vars", [], "any", false, false, false, 192), "field", [], "any", false, false, false, 192), "fieldFqcn", [], "any", false, false, false, 192), false)) : (false)));
        // line 193
        yield "    ";
        $context["is_complex"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 193), "ea_vars", [], "any", false, true, false, 193), "field", [], "any", false, true, false, 193), "customOptions", [], "any", false, true, false, 193), "get", ["entryIsComplex"], "method", true, true, false, 193) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 193), "ea_vars", [], "any", false, false, false, 193), "field", [], "any", false, false, false, 193), "customOptions", [], "any", false, false, false, 193), "get", ["entryIsComplex"], "method", false, false, false, 193)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 193), "ea_vars", [], "any", false, false, false, 193), "field", [], "any", false, false, false, 193), "customOptions", [], "any", false, false, false, 193), "get", ["entryIsComplex"], "method", false, false, false, 193)) : (false));
        // line 194
        yield "    ";
        $context["to_string_method"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 194), "ea_vars", [], "any", false, true, false, 194), "field", [], "any", false, true, false, 194), "customOptions", [], "any", false, true, false, 194), "get", ["entryToStringMethod"], "method", true, true, false, 194) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 194), "ea_vars", [], "any", false, false, false, 194), "field", [], "any", false, false, false, 194), "customOptions", [], "any", false, false, false, 194), "get", ["entryToStringMethod"], "method", false, false, false, 194)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 194), "ea_vars", [], "any", false, false, false, 194), "field", [], "any", false, false, false, 194), "customOptions", [], "any", false, false, false, 194), "get", ["entryToStringMethod"], "method", false, false, false, 194)) : (null));
        // line 195
        yield "    ";
        $context["allows_deleting_items"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 195), "allow_delete", [], "any", true, true, false, 195)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 195), "allow_delete", [], "any", false, false, false, 195), false)) : (false));
        // line 196
        yield "    ";
        $context["render_expanded"] = ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 196), "valid", [], "any", false, false, false, 196) || ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 196), "ea_vars", [], "any", false, true, false, 196), "field", [], "any", false, true, false, 196), "customOptions", [], "any", false, true, false, 196), "get", ["renderExpanded"], "method", true, true, false, 196)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 196), "ea_vars", [], "any", false, false, false, 196), "field", [], "any", false, false, false, 196), "customOptions", [], "any", false, false, false, 196), "get", ["renderExpanded"], "method", false, false, false, 196), false)) : (false)));
        // line 197
        yield "    ";
        $context["delete_item_button"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 198
            yield "        <button type=\"button\" class=\"btn btn-link btn-link-danger field-collection-delete-button\"
                title=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            yield "\">
            ";
            // line 200
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:delete"]);
            yield "
        </button>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 203
        yield "
    <div class=\"field-collection-item ";
        // line 204
        yield (((($tmp = ($context["is_complex"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("field-collection-item-complex") : (""));
        yield " ";
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 204), "valid", [], "any", false, false, false, 204)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""));
        yield "\">
        ";
        // line 205
        if ((($tmp = ((array_key_exists("is_array_field", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_array_field"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 206
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            yield "
            ";
            // line 207
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
            ";
            // line 208
            if ((($context["allows_deleting_items"] ?? null) &&  !($context["disabled"] ?? null))) {
                // line 209
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["delete_item_button"] ?? null), "html", null, true);
                yield "
            ";
            }
            // line 211
            yield "        ";
        } else {
            // line 212
            yield "            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button ";
            // line 214
            yield (((($tmp = ($context["render_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "-contents\">
                        ";
            // line 215
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-collection-item-collapse-marker"]);
            yield "
                        ";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->representAsString(($context["value"] ?? null), ($context["to_string_method"] ?? null)), "html", null, true);
            yield "
                    </button>

                    ";
            // line 219
            if ((($context["allows_deleting_items"] ?? null) &&  !($context["disabled"] ?? null))) {
                // line 220
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["delete_item_button"] ?? null), "html", null, true);
                yield "
                    ";
            }
            // line 222
            yield "                </h2>
                <div id=\"";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "-contents\" class=\"accordion-collapse collapse ";
            yield (((($tmp = ($context["render_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\">
                    <div class=\"accordion-body\">
                        <div class=\"row\">
                            ";
            // line 226
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 232
        yield "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 235
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_compound(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 236
        yield "    <div class=\"form-widget-compound\">
        ";
        // line 237
        if (CoreExtension::inFilter("collection", ($context["block_prefixes"] ?? null))) {
            // line 238
            yield "            ";
            // line 240
            yield "            ";
            $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (is_iterable(($context["value"] ?? null)) && Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))));
            // line 241
            yield "            ";
            if ((($tmp = ($context["isEmptyCollection"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 242
                yield "                ";
                yield from                 $this->unwrap()->yieldBlock("empty_collection", $context, $blocks);
                yield "
            ";
            }
            // line 244
            yield "            ";
            if ((($context["isEmptyCollection"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 244), "prototype", [], "any", true, true, false, 244))) {
                // line 245
                yield "                ";
                $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-empty-collection" =>                 $this->unwrap()->renderBlock("empty_collection", $context, $blocks)]);
                // line 246
                yield "            ";
            }
            // line 247
            yield "        ";
        }
        // line 248
        yield "
        ";
        // line 249
        yield from $this->yieldParentBlock("form_widget_compound", $context, $blocks);
        yield "
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 253
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        // line 254
        yield "<div class=\"form-group field-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 254), "css_class", [], "any", true, true, false, 254)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 254), "css_class", [], "any", false, false, false, 254), "")) : ("")), "html", null, true);
        yield "\">";
        // line 255
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 256
        yield "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 261
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 262
        if ((($context["label"] ?? null) === false)) {
        } else {
            // line 266
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 267
                $context["element"] = "legend";
                // line 268
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 268)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 268), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 270
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null), "class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 270)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 270), "")) : ("")) . " form-control-label"))]);
            }
            // line 272
            if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 273
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 273)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 273), "")) : ("")) . " required"))]);
            }
            // line 275
            if ((($context["label"] ?? null) === "")) {
            } elseif ((null ===             // line 278
($context["label"] ?? null))) {
                // line 279
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 280
                    $context["label"] = Twig\Extension\CoreExtension::replace(($context["label_format"] ?? null), ["%name%" =>                     // line 281
($context["name"] ?? null), "%id%" =>                     // line 282
($context["id"] ?? null)]);
                } else {
                    // line 285
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 288
            yield "<";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if ((($tmp = ($context["label_attr"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $_v3 = $context;
                $_v4 = ["attr" => ($context["label_attr"] ?? null)];
                if (!is_iterable($_v4)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 288, $this->getSourceContext());
                }
                $_v4 = CoreExtension::toArray($_v4);
                $context = $_v4 + $context + $this->env->getGlobals();
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                $context = $_v3;
            }
            yield ">";
            // line 289
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 290
                if ((((array_key_exists("label_html", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_html"] ?? null), false)) : (false)) === false)) {
                    // line 291
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
                } else {
                    // line 293
                    yield ($context["label"] ?? null);
                }
            } else {
                // line 296
                if ((((array_key_exists("label_html", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_html"] ?? null), false)) : (false)) === false)) {
                    // line 297
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 299
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 302
            yield "</";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            yield ">";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 308
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_empty_collection(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 309
        yield "    <div class=\"empty collection-empty\">
        ";
        // line 310
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["label/empty"], "method", false, false, false, 310));
        yield "
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 314
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_file_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 315
        yield "    ";
        $context["force_error"] = true;
        // line 316
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 319
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 320
        yield "    <div class=\"ea-vich-file\">
        ";
        // line 321
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("download_uri", $context)) ? (Twig\Extension\CoreExtension::default(($context["download_uri"] ?? null), "")) : ("")))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 322
            yield "            <a class=\"ea-vich-file-name\" href=\"";
            yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["download_uri"] ?? null), "html", null, true)));
            yield "\">
                ";
            // line 323
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:file-lines"]);
            // line 324
            if ((($tmp = ((array_key_exists("download_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["download_label"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 325
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["download_label"] ?? null), [], "VichUploaderBundle"), "html", null, true);
            } else {
                // line 327
                yield ((Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["download_uri"] ?? null), "/"))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["download_uri"] ?? null), "/")), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle"), "html", null, true)));
            }
            // line 329
            yield "</a>
        ";
        }
        // line 331
        yield "
        ";
        // line 332
        $context["file_upload_js"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 333
            yield "            var newFile = document.getElementById('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 333), "vars", [], "any", false, false, false, 333), "id", [], "any", false, false, false, 333), "html", null, true);
            yield "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
            // line 336
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 336), "vars", [], "any", false, false, false, 336), "id", [], "any", false, false, false, 336), "html", null, true);
            yield "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 338
        yield "
        <div class=\"ea-vich-file-actions\">
            ";
        // line 341
        yield "            <div class=\"btn btn-secondary input-file-container\">
                ";
        // line 342
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:upload"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        yield "
                ";
        // line 343
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 343), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        yield "
            </div>

            ";
        // line 346
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 346)) {
            // line 347
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 347), 'row');
            yield "
            ";
        }
        // line 349
        yield "        </div>
        <div class=\"small\" id=\"";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 350), "vars", [], "any", false, false, false, 350), "id", [], "any", false, false, false, 350), "html", null, true);
        yield "_new_file_name\"></div>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 354
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_image_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 355
        yield "    ";
        $context["force_error"] = true;
        // line 356
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 359
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_image_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 360
        yield "    ";
        $context["formTypeOptions"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea_vars"] ?? null), "field", [], "any", false, true, false, 360), "formTypeOptions", [], "any", true, true, false, 360)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea_vars"] ?? null), "field", [], "any", false, false, false, 360), "formTypeOptions", [], "any", false, false, false, 360), "")) : (""));
        // line 361
        yield "    <div class=\"ea-vich-image\">
        ";
        // line 362
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("image_uri", $context)) ? (Twig\Extension\CoreExtension::default(($context["image_uri"] ?? null), "")) : ("")))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 363
            yield "            ";
            if (Twig\Extension\CoreExtension::testEmpty(((array_key_exists("download_uri", $context)) ? (Twig\Extension\CoreExtension::default(($context["download_uri"] ?? null), "")) : ("")))) {
                // line 364
                yield "                <div class=\"ea-lightbox-thumbnail\">
                    ";
                // line 365
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 365) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 365)))) {
                    // line 366
                    yield "                        ";
                    // line 367
                    yield "                            <img style=\"cursor: initial\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 367)), "html", null, true);
                    yield "\">
                        ";
                    // line 371
                    yield "                    ";
                } else {
                    // line 372
                    yield "                        <img style=\"cursor: initial\" src=\"";
                    yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image_uri"] ?? null), "html", null, true)));
                    yield "\">
                    ";
                }
                // line 374
                yield "                </div>
            ";
            } else {
                // line 376
                yield "                ";
                $context["_lightbox_id"] = ("ea-lightbox-" . ($context["id"] ?? null));
                // line 377
                yield "
                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#";
                // line 378
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_lightbox_id"] ?? null), "html", null, true);
                yield "\">
                    ";
                // line 379
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 379) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 379)))) {
                    // line 380
                    yield "                        ";
                    // line 381
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 381)), "html", null, true);
                    yield "\">
                        ";
                    // line 385
                    yield "                    ";
                } else {
                    // line 386
                    yield "                        <img src=\"";
                    yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image_uri"] ?? null), "html", null, true)));
                    yield "\">
                    ";
                }
                // line 388
                yield "                </a>

                <div id=\"";
                // line 390
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_lightbox_id"] ?? null), "html", null, true);
                yield "\" class=\"ea-lightbox\">
                    ";
                // line 391
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 391) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 391)))) {
                    // line 392
                    yield "                        ";
                    // line 393
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 393)), "html", null, true);
                    yield "\">
                        ";
                    // line 397
                    yield "                    ";
                } else {
                    // line 398
                    yield "                        <img src=\"";
                    yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["download_uri"] ?? null), "html", null, true)));
                    yield "\">
                    ";
                }
                // line 400
                yield "                </div>
            ";
            }
            // line 402
            yield "        ";
        }
        // line 403
        yield "
        ";
        // line 404
        $context["file_upload_js"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 405
            yield "            var newFile = document.getElementById('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 405), "vars", [], "any", false, false, false, 405), "id", [], "any", false, false, false, 405), "html", null, true);
            yield "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
            // line 408
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 408), "vars", [], "any", false, false, false, 408), "id", [], "any", false, false, false, 408), "html", null, true);
            yield "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 410
        yield "
        <div class=\"ea-vich-image-actions\">
            ";
        // line 413
        yield "            <div class=\"btn btn-secondary input-file-container\">
                ";
        // line 414
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:upload"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        yield "
                ";
        // line 415
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 415), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        yield "
            </div>

            ";
        // line 418
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 418)) {
            // line 419
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 419), 'row');
            yield "
            ";
        }
        // line 421
        yield "        </div>
        <div class=\"small\" id=\"";
        // line 422
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 422), "vars", [], "any", false, false, false, 422), "id", [], "any", false, false, false, 422), "html", null, true);
        yield "_new_file_name\"></div>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 426
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_rest(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_rest"));

        // line 427
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 431
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_widget"));

        // line 432
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 433
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 438
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_widget_panels(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_widget_panels"));

        // line 439
        yield "    ";
        trigger_deprecation('', '', "The \"ea_crud_widget_panels\" block is deprecated because the form layout building logic has been revamped. Check \"ea_crud_widget\" block in `form_theme.html.page` for more details."." in \"@EasyAdmin/crud/form_theme.html.twig\" at line 439.");
        // line 440
        yield "
    ";
        // line 441
        yield from         $this->unwrap()->yieldBlock("ea_crud_widget_fieldsets", $context, $blocks);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 444
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_widget_fieldsets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_widget_fieldsets"));

        // line 445
        yield "    ";
        trigger_deprecation('', '', "The \"ea_crud_widget_fieldsets\" block is deprecated because the form layout building logic has been revamped. Check \"ea_crud_widget\" block in `form_theme.html.page` for more details."." in \"@EasyAdmin/crud/form_theme.html.twig\" at line 445.");
        // line 446
        yield "
    ";
        // line 447
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "vars", [], "any", false, false, false, 447), "ea_crud_form", [], "any", false, false, false, 447), "form_fieldsets", [], "any", false, false, false, 447), function ($__fieldset_config__) use ($context, $macros) { $context["fieldset_config"] = $__fieldset_config__; return ( !CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "form_tab", [], "any", false, false, false, 447) || (CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "form_tab", [], "any", false, false, false, 447) == ($context["tab_name"] ?? null))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["fieldset_name"] => $context["fieldset_config"]) {
            // line 448
            yield "        ";
            $context["fieldset_has_header"] = ((((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", true, true, false, 448)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", false, false, false, 448), false)) : (false)) || ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", true, true, false, 448)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 448), false)) : (false))) || ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 448)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 448), false)) : (false)));
            // line 449
            yield "
        ";
            // line 450
            $context["collapsible"] = CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "collapsible", [], "any", false, false, false, 450);
            // line 451
            yield "        ";
            $context["collapsed"] = CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "collapsed", [], "any", false, false, false, 451);
            // line 452
            yield "
        <div class=\"";
            // line 453
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", true, true, false, 453) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", false, false, false, 453)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", false, false, false, 453), "html", null, true)) : (""));
            yield "\">
            <fieldset class=\"form-fieldset\">
                ";
            // line 455
            if ((($tmp = ($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 456
                yield "                    <div class=\"form-fieldset-header ";
                yield (((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
                yield " ";
                yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 456)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 456), false)) : (false)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
                yield "\">
                        <div class=\"form-fieldset-title\">
                            <a ";
                // line 458
                if ((($tmp =  !($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 459
                    yield "                                href=\"#\" class=\"not-collapsible\"
                            ";
                } else {
                    // line 461
                    yield "                                href=\"#content-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fieldset_name"], "html", null, true);
                    yield "\" data-bs-toggle=\"collapse\"
                                class=\"form-fieldset-collapse ";
                    // line 462
                    yield (((($tmp = ($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
                    yield "\"
                                aria-expanded=\"";
                    // line 463
                    yield (((($tmp = ($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                    yield "\" aria-controls=\"content-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fieldset_name"], "html", null, true);
                    yield "\"
                            ";
                }
                // line 465
                yield "                            >
                                ";
                // line 466
                if ((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 467
                    yield "                                    ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-fieldset-collapse-marker"]);
                    yield "
                                ";
                }
                // line 469
                yield "
                                ";
                // line 470
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", true, true, false, 470)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 470), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 471
                    yield "                                    ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 471), "class" => "form-fieldset-icon"]);
                    yield "
                                ";
                }
                // line 473
                yield "                                ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", false, false, false, 473));
                yield "
                            </a>

                            ";
                // line 476
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 476)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 476), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 477
                    yield "                                <div class=\"form-fieldset-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 477));
                    yield "</div>
                            ";
                }
                // line 479
                yield "                        </div>
                    </div>
                ";
            }
            // line 482
            yield "
                <div id=\"content-";
            // line 483
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
            // line 485
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!CoreExtension::inFilter("hidden", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 485), "block_prefixes", [], "any", false, false, false, 485)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 485), "ea_crud_form", [], "any", false, false, false, 485), "form_fieldset", [], "any", false, false, false, 485) == $context["fieldset_name"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 486
                yield "                            ";
                if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 486), "ea_crud_form", [], "any", false, false, false, 486), "form_tab", [], "any", false, false, false, 486) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 486), "ea_crud_form", [], "any", false, false, false, 486), "form_tab", [], "any", false, false, false, 486) == ($context["tab_name"] ?? null)))) {
                    // line 487
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    yield "
                            ";
                }
                // line 489
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 490
            yield "                    </div>
                </div>
            </fieldset>
        </div>
    ";
            $context['_iterated'] = true;
        }
        // line 494
        if (!$context['_iterated']) {
            // line 495
            yield "        ";
            // line 506
            yield "        ";
            yield $this->getTemplateForMacro("macro_recursiveFieldsetForm", $context, 506, $this->getSourceContext())->macro_recursiveFieldsetForm(...[($context["form"] ?? null)]);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['fieldset_name'], $context['fieldset_config'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 511
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_autocomplete_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_autocomplete_widget"));

        // line 512
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 512), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["required" => ($context["required"] ?? null)])]);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 515
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_autocomplete_inner_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_autocomplete_inner_label"));

        // line 516
        yield "    ";
        $context["name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 516), "name", [], "any", false, false, false, 516);
        // line 517
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 521
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_code_editor_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_code_editor_widget"));

        // line 522
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-ea-code-editor-field" => "true", "data-language" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 524
($context["form"] ?? null), "vars", [], "any", false, false, false, 524), "ea_vars", [], "any", false, false, false, 524), "field", [], "any", false, false, false, 524), "customOptions", [], "any", false, false, false, 524), "get", ["language"], "method", false, false, false, 524), "data-tab-size" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 525
($context["form"] ?? null), "vars", [], "any", false, false, false, 525), "ea_vars", [], "any", false, false, false, 525), "field", [], "any", false, false, false, 525), "customOptions", [], "any", false, false, false, 525), "get", ["tabSize"], "method", false, false, false, 525), "data-indent-with-tabs" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 526
($context["form"] ?? null), "vars", [], "any", false, false, false, 526), "ea_vars", [], "any", false, false, false, 526), "field", [], "any", false, false, false, 526), "customOptions", [], "any", false, false, false, 526), "get", ["indentWithTabs"], "method", false, false, false, 526)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-show-line-numbers" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 527
($context["form"] ?? null), "vars", [], "any", false, false, false, 527), "ea_vars", [], "any", false, false, false, 527), "field", [], "any", false, false, false, 527), "customOptions", [], "any", false, false, false, 527), "get", ["showLineNumbers"], "method", false, false, false, 527)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-number-of-rows" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 528
($context["form"] ?? null), "vars", [], "any", false, false, false, 528), "ea_vars", [], "any", false, false, false, 528), "field", [], "any", false, false, false, 528), "customOptions", [], "any", false, false, false, 528), "get", ["numOfRows"], "method", false, false, false, 528)])]);
        // line 529
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 533
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_text_editor_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_text_editor_widget"));

        // line 534
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => "ea-text-editor-content d-none", "data-number-of-rows" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 536
($context["form"] ?? null), "vars", [], "any", false, true, false, 536), "ea_vars", [], "any", false, true, false, 536), "field", [], "any", false, true, false, 536), "customOptions", [], "any", false, true, false, 536), "get", ["numOfRows"], "method", true, true, false, 536)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 536), "ea_vars", [], "any", false, false, false, 536), "field", [], "any", false, false, false, 536), "customOptions", [], "any", false, false, false, 536), "get", ["numOfRows"], "method", false, false, false, 536), 5)) : (5)), "data-trix-editor-config" => json_encode(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 537
($context["form"] ?? null), "vars", [], "any", false, true, false, 537), "ea_vars", [], "any", false, true, false, 537), "field", [], "any", false, true, false, 537), "customOptions", [], "any", false, true, false, 537), "get", ["trixEditorConfig"], "method", true, true, false, 537)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 537), "ea_vars", [], "any", false, false, false, 537), "field", [], "any", false, false, false, 537), "customOptions", [], "any", false, false, false, 537), "get", ["trixEditorConfig"], "method", false, false, false, 537), null)) : (null)))])]);
        // line 538
        yield "

    <div class=\"ea-text-editor-wrapper ";
        // line 540
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 540)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 540), "")) : ("")) . (((($tmp =  !($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" has-error") : (""))), "html", null, true);
        yield "\">
        <trix-editor input=\"";
        // line 541
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\" class=\"trix-content\"></trix-editor>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 546
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_row_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_row_row"));

        // line 547
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 547), "row_attr", [], "any", false, false, false, 547), "class", [], "any", false, false, false, 547), "html", null, true);
        yield "\"></div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 550
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_group_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_column_group_open_row"));

        // line 551
        yield "    ";
        // line 552
        yield "    ";
        if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 552), "ea_is_inside_tab", [], "any", true, true, false, 552)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 552), "ea_is_inside_tab", [], "any", false, false, false, 552), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 553
            yield "        <div class=\"row\">
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 557
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_group_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_column_group_close_row"));

        // line 558
        yield "    ";
        // line 560
        yield "    ";
        if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 560), "ea_is_inside_tab", [], "any", true, true, false, 560)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 560), "ea_is_inside_tab", [], "any", false, false, false, 560), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 561
            yield "        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 565
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_column_open_row"));

        // line 566
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 566), "ea_vars", [], "any", false, false, false, 566), "field", [], "any", false, false, false, 566);
        // line 567
        yield "    ";
        $context["field_icon"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 567);
        // line 568
        yield "    ";
        $context["column_has_title"] = (((((($context["field_icon"] ?? null) != null) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 568) != false)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 568) != null)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 568) != "")) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 568) != null));
        // line 569
        yield "
    <div class=\"form-column ";
        // line 570
        yield (((($tmp =  !($context["column_has_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-column-no-header") : (""));
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 570), "html", null, true);
        yield "\">
        ";
        // line 571
        if ((($tmp = ($context["column_has_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 572
            yield "            <div class=\"form-column-title\">
                <div class=\"form-column-title-content\">
                    ";
            // line 574
            if ((($tmp = ($context["field_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["field_icon"] ?? null), "class" => "form-column-icon"]);
            }
            // line 575
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 575)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", true, true, false, 575)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 575), "")) : ("")), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 575), "translationDomain", [], "any", false, false, false, 575));
            }
            // line 576
            yield "                </div>

                ";
            // line 578
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 578)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 579
                yield "                    <div class=\"form-column-help\">";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 579), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 579), "translationDomain", [], "any", false, false, false, 579));
                yield "</div>
                ";
            }
            // line 581
            yield "            </div>
        ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 585
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_column_close_row"));

        // line 586
        yield "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 589
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_open_ealabel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_fieldset_open_ealabel"));

        // line 590
        yield "    ";
        if ((($tmp = ($context["ea_is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 591
            yield "        ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-fieldset-collapse-marker"]);
            yield "
    ";
        }
        // line 593
        yield "
    ";
        // line 594
        if ((($tmp = ($context["ea_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 595
            yield "        ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["ea_icon"] ?? null), "class" => "form-fieldset-icon"]);
            yield "
    ";
        }
        // line 597
        yield "
    ";
        // line 598
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 598), "label", [], "any", false, false, false, 598));
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 601
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_open_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_fieldset_open_label"));

        // line 602
        yield "    <div class=\"form-fieldset-header ";
        yield (((($tmp = ($context["ea_is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
        yield " ";
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["ea_help"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
        yield "\">
        <div class=\"form-fieldset-title\">
            ";
        // line 604
        if ((($tmp = ($context["ea_is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 605
            yield "                <a href=\"#content-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 605), "name", [], "any", false, false, false, 605), "html", null, true);
            yield "\" data-bs-toggle=\"collapse\"
                   class=\"form-fieldset-title-content form-fieldset-collapse ";
            // line 606
            yield (((($tmp = ($context["ea_is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
            yield "\"
                   aria-expanded=\"";
            // line 607
            yield (((($tmp = ($context["ea_is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
            yield "\" aria-controls=\"content-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 607), "name", [], "any", false, false, false, 607), "html", null, true);
            yield "\">
                    ";
            // line 608
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'ealabel');
            yield "
                </a>
            ";
        } else {
            // line 611
            yield "                <span class=\"not-collapsible form-fieldset-title-content\">
                    ";
            // line 612
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'ealabel');
            yield "
                </span>
            ";
        }
        // line 615
        yield "
            ";
        // line 616
        if ((($tmp = ($context["ea_help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 617
            yield "                <div class=\"form-fieldset-help\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["ea_help"] ?? null));
            yield "</div>
            ";
        }
        // line 619
        yield "        </div>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 623
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_fieldset_open_row"));

        // line 624
        yield "    ";
        $context["fieldset_has_header"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 624), "label", [], "any", false, false, false, 624) || ($context["ea_icon"] ?? null)) || ($context["ea_help"] ?? null));
        // line 625
        yield "
    <div class=\"form-fieldset ";
        // line 626
        yield (((($tmp =  !($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-fieldset-no-header") : (""));
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ea_css_class"] ?? null), "html", null, true);
        yield "\">
        <fieldset>
            ";
        // line 628
        if ((($tmp = ($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 629
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            yield "
            ";
        }
        // line 631
        yield "
            <div id=\"content-";
        // line 632
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 632), "name", [], "any", false, false, false, 632), "html", null, true);
        yield "\" class=\"form-fieldset-body ";
        yield (((($tmp =  !($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("without-header") : (""));
        yield " ";
        yield (((($tmp = ($context["ea_is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapse") : (""));
        yield " ";
        yield (((($tmp =  !($context["ea_is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
        yield "\">
                <div class=\"row\">
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 636
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_fieldset_close_row"));

        // line 637
        yield "                </div>
            </div>
        </fieldset>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 643
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tablist_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_tablist_row"));

        // line 644
        yield "    ";
        $context["tab_id_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
        // line 645
        yield "    ";
        $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
        // line 646
        yield "    ";
        $context["tab_error_count_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ERROR_COUNT");
        // line 647
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 647), "ea_vars", [], "any", false, false, false, 647), "field", [], "any", false, false, false, 647);
        // line 648
        yield "
    <div class=\"nav-tabs-custom form-tabs-tablist\">
        <ul class=\"nav nav-tabs\">
            ";
        // line 651
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["tabs"], "method", false, false, false, 651));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 652
            yield "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
            // line 653
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 653)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield "\" href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 653), "html", null, true);
            yield "\" id=\"tablist-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 653), "html", null, true);
            yield "\" data-bs-toggle=\"tab\">";
            // line 654
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", true, true, false, 654)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 654), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 655
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 655), "class" => "tab-nav-item-icon"]);
            }
            // line 657
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 657), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 657), "translationDomain", [], "any", false, false, false, 657));
            yield "

                        ";
            // line 659
            $context["tab_error_count"] = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_error_count_option_name"] ?? null)], "method", false, false, false, 659);
            // line 660
            if ((($context["tab_error_count"] ?? null) > 0)) {
                // line 661
                yield "<span class=\"badge badge-danger\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => ($context["tab_error_count"] ?? null)], "EasyAdminBundle"), "html", null, true);
                yield "\">";
                // line 662
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tab_error_count"] ?? null), "html", null, true);
                // line 663
                yield "</span>";
            }
            // line 665
            yield "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 668
        yield "        </ul>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 672
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_group_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_tabpane_group_open_row"));

        // line 673
        yield "    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 677
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_group_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_tabpane_group_close_row"));

        // line 678
        yield "        </div>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 682
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_tabpane_open_row"));

        // line 683
        yield "    ";
        $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
        // line 684
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 684), "ea_vars", [], "any", false, false, false, 684), "field", [], "any", false, false, false, 684);
        // line 685
        yield "
    <div id=\"";
        // line 686
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ea_tab_id"] ?? null), "html", null, true);
        yield "\" class=\"tab-pane ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 686)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "active";
        }
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ea_css_class"] ?? null), "html", null, true);
        yield "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 686), "attr", [], "any", false, false, false, 686));
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
        // line 687
        if ((($tmp = ($context["ea_help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 688
            yield "            <div class=\"content-header-help tab-help\">
                ";
            // line 689
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["ea_help"] ?? null), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 689), "translationDomain", [], "any", false, false, false, 689));
            yield "
            </div>
        ";
        }
        // line 692
        yield "
        <div class=\"row\">
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 696
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_tabpane_close_row"));

        // line 697
        yield "        </div>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 702
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_filters_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_filters_widget"));

        // line 703
        yield "    ";
        $context["applied_filters"] = Twig\Extension\CoreExtension::keys(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 703), "query", [], "any", false, true, false, 703), "all", [], "method", false, true, false, 703), "filters", [], "array", true, true, false, 703)) ? (Twig\Extension\CoreExtension::default((($_v5 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 703), "query", [], "any", false, false, false, 703), "all", [], "method", false, false, false, 703)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["filters"] ?? null) : null), [])) : ([])));
        // line 704
        yield "
    ";
        // line 705
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
            // line 706
            yield "        <div class=\"col-12\">
            <div class=\"filter-field px-3\" data-filter-property=\"";
            // line 707
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 707), "name", [], "any", false, false, false, 707), "html", null, true);
            yield "\">
                <div class=\"filter-heading\" id=\"filter-heading-";
            // line 708
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 708), "html", null, true);
            yield "\">
                    <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 709
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 709), "name", [], "any", false, false, false, 709), ($context["applied_filters"] ?? null))) {
                yield "checked";
            }
            yield ">
                    <a data-bs-toggle=\"collapse\" href=\"#filter-content-";
            // line 710
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 710), "html", null, true);
            yield "\" aria-expanded=\"";
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 710), "name", [], "any", false, false, false, 710), ($context["applied_filters"] ?? null))) ? ("true") : ("false"));
            yield "\" aria-controls=\"filter-content-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 710), "html", null, true);
            yield "\"
                        ";
            // line 711
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 711), "label_attr", [], "any", true, true, false, 711)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 711), "label_attr", [], "any", false, false, false, 711), [])) : ([])));
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
            // line 712
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 712), "label", [], "any", true, true, false, 712)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 712), "label", [], "any", false, false, false, 712), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 712), "name", [], "any", false, false, false, 712)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 712), "name", [], "any", false, false, false, 712)))), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 712), "translationDomain", [], "any", false, false, false, 712)), "html", null, true);
            yield "
                    </a>
                </div>
                <div id=\"filter-content-";
            // line 715
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 715), "html", null, true);
            yield "\" class=\"filter-content collapse ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 715), "name", [], "any", false, false, false, 715), ($context["applied_filters"] ?? null))) {
                yield "show";
            }
            yield "\" aria-labelledby=\"filter-heading-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 715), "html", null, true);
            yield "\">
                    <div class=\"form-widget\">
                        ";
            // line 717
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 725
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_comparison_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "comparison_widget"));

        // line 726
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 726), "attr", [], "any", false, false, false, 726), ["data-ea-comparison-id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 726), "id", [], "any", false, false, false, 726)])]);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 729
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_numeric_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_numeric_filter_widget"));

        // line 730
        yield "    <div class=\"form-widget-compound\">
        ";
        // line 731
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 731), 'row');
        yield "
        ";
        // line 732
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 732), 'row');
        yield "
        <div data-ea-value2-of-comparison-id=\"";
        // line 733
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 733), "vars", [], "any", false, false, false, 733), "id", [], "any", false, false, false, 733), "html", null, true);
        yield "\" class=\"";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 733), "vars", [], "any", false, false, false, 733), "value", [], "any", false, false, false, 733) != "between")) ? ("d-none") : (""));
        yield "\">
            ";
        // line 734
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 734), 'row');
        yield "
        </div>
    </div>";
        // line 737
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 740
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_datetime_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_datetime_filter_widget"));

        // line 741
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("ea_numeric_filter_widget", $context, $blocks);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 744
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_fileupload_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_fileupload_widget"));

        // line 745
        yield "    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 747
        $context["placeholder"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.choose_file", [], "EasyAdminBundle");
        // line 748
        yield "            ";
        $context["title"] = "";
        // line 749
        yield "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 750
        yield "            ";
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 751
            yield "                ";
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 752
                yield "                    ";
                $context["placeholder"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 753
                yield "                ";
            } else {
                // line 754
                yield "                    ";
                $context["placeholder"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 754);
                // line 755
                yield "                    ";
                $context["title"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 755));
                // line 756
                yield "                ";
            }
            // line 757
            yield "            ";
        }
        // line 758
        yield "            <div class=\"custom-file\">
                ";
        // line 759
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 759), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 759), "vars", [], "any", false, false, false, 759), "attr", [], "any", false, false, false, 759), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "class" => "d-none"])]);
        yield "
                ";
        // line 760
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 760), 'label', ["label_attr" => ["class" => "custom-file-label"]] + (CoreExtension::testEmpty($_label_ = ($context["placeholder"] ?? null)) ? [] : ["label" => $_label_]));
        yield "
            </div>
            <div class=\"input-group-text\">";
        // line 763
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 764
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 765
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(Twig\Extension\CoreExtension::reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 765)); })), "html", null, true);
                yield "
                    ";
            } else {
                // line 767
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 767)), "html", null, true);
                yield "
                    ";
            }
        }
        // line 770
        if ((($tmp = ($context["allow_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 771
            yield "                    <label class=\"btn ea-fileupload-delete-btn ";
            yield ((Twig\Extension\CoreExtension::testEmpty(($context["currentFiles"] ?? null))) ? ("d-none") : (""));
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 771), "vars", [], "any", false, false, false, 771), "id", [], "any", false, false, false, 771), "html", null, true);
            yield "\">
                        ";
            // line 772
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:delete"]);
            yield "
                    </label>
                ";
        }
        // line 775
        yield "                <label class=\"btn\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 775), "vars", [], "any", false, false, false, 775), "id", [], "any", false, false, false, 775), "html", null, true);
        yield "\">
                    ";
        // line 776
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:folder-open"]);
        yield "
                </label>
            </div>
        </div>
        ";
        // line 780
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 781
            yield "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 784
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 785
                yield "                        <tr>
                            <td>
                                ";
                // line 787
                if ((($tmp = ($context["download_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 787))), "html", null, true);
                    yield "\">";
                }
                // line 788
                yield "                                    <span title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 788)), "html", null, true);
                yield "\">
                                        ";
                // line 789
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:file-lines"]);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 789), "html", null, true);
                yield "
                                    </span>
                                ";
                // line 791
                if ((($tmp = ($context["download_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "</a>";
                }
                // line 792
                yield "                            </td>
                            <td class=\"text-right file-size\">";
                // line 793
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 793)), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 796
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 800
        yield "        ";
        if ((($tmp = ($context["allow_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 801
            yield "            <div class=\"d-none\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 801), 'widget', ["label" => false]);
            yield "</div>
        ";
        }
        // line 803
        yield "    </div>
    ";
        // line 804
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 804), 'errors');
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 807
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_TODO_ea_fileupload_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "TODO_ea_fileupload_widget"));

        // line 808
        yield "    ";
        $context["placeholder"] = "";
        // line 809
        yield "    ";
        $context["title"] = "";
        // line 810
        yield "    ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 811
        yield "    ";
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 812
            yield "        ";
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 813
                yield "            ";
                $context["placeholder"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 814
                yield "        ";
            } else {
                // line 815
                yield "            ";
                $context["placeholder"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 815);
                // line 816
                yield "            ";
                $context["title"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 816));
                // line 817
                yield "        ";
            }
            // line 818
            yield "    ";
        }
        // line 819
        yield "
    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 822
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 822), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 822), "vars", [], "any", false, false, false, 822), "attr", [], "any", false, false, false, 822), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "class" => "form-control"])]);
        yield "

            ";
        // line 824
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 825
            yield "                <span class=\"input-group-text\">
                    ";
            // line 826
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 827
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(Twig\Extension\CoreExtension::reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 827)); })), "html", null, true);
                yield "
                    ";
            } else {
                // line 829
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 829)), "html", null, true);
                yield "
                    ";
            }
            // line 831
            yield "                </span>
            ";
        }
        // line 833
        yield "
            ";
        // line 834
        if ((($context["currentFiles"] ?? null) && ($context["allow_delete"] ?? null))) {
            // line 835
            yield "                <button class=\"btn ea-fileupload-delete-btn\">
                    ";
            // line 836
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:delete"]);
            yield "
                </button>
            ";
        }
        // line 839
        yield "
            ";
        // line 840
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 841
            yield "                <button class=\"btn\">
                    ";
            // line 842
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:folder-open"]);
            yield "
                </button>
            ";
        }
        // line 845
        yield "        </div>

        ";
        // line 847
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 848
            yield "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 851
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 852
                yield "                        <tr>
                            <td>
                                ";
                // line 854
                if ((($tmp = ($context["download_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 854))), "html", null, true);
                    yield "\">";
                }
                // line 855
                yield "                                    <span title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 855)), "html", null, true);
                yield "\">
                                        ";
                // line 856
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:file-lines"]);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 856), "html", null, true);
                yield "
                                    </span>
                                    ";
                // line 858
                if ((($tmp = ($context["download_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "</a>";
                }
                // line 859
                yield "                            </td>
                            <td class=\"text-right file-size\">";
                // line 860
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 860)), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 863
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 867
        yield "        ";
        if ((($tmp = ($context["allow_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 868
            yield "            <div class=\"d-none\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 868), 'widget', ["label" => false]);
            yield "</div>
        ";
        }
        // line 870
        yield "    </div>

    ";
        // line 872
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 872), 'errors');
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 875
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_slug_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_slug_widget"));

        // line 876
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-ea-slug-field" => "", "data-target" => json_encode(Twig\Extension\CoreExtension::map($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(),         // line 878
($context["target"] ?? null), "|"), function ($__name__) use ($context, $macros) { $context["name"] = $__name__; return CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 878), "children", [], "any", false, false, false, 878)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[($context["name"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 878), "id", [], "any", false, false, false, 878); }))]);
        // line 880
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-confirm-text", [], "array", true, true, false, 880)) {
            // line 881
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-confirm-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($_v7 =             // line 882
($context["attr"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["data-confirm-text"] ?? null) : null))]);
            // line 884
            yield "    ";
        }
        // line 885
        yield "
    <div class=\"input-group\">
        ";
        // line 887
        yield from         $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        yield "
        <button type=\"button\" class=\"btn\"
                data-icon-locked=\"";
        // line 889
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock"]), "html");
        yield "\"
                data-icon-unlocked=\"";
        // line 890
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock-open-solid"]), "html");
        yield "\">
            ";
        // line 891
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock"]);
        yield "
        </button>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 495
    public function macro_recursiveFieldsetForm($form = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "recursiveFieldsetForm"));

            // line 496
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!CoreExtension::inFilter("hidden", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 496), "block_prefixes", [], "any", false, false, false, 496)) && ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 496), "ea_crud_form", [], "any", false, true, false, 496), "form_tab", [], "any", true, true, false, 496) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 496), "ea_crud_form", [], "any", false, false, false, 496), "form_tab", [], "any", false, false, false, 496)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 496), "ea_crud_form", [], "any", false, true, false, 496), "form_tabs", [], "any", true, true, false, 496))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 497
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 497), "ea_crud_form", [], "any", false, true, false, 497), "form_tabs", [], "any", true, true, false, 497)) {
                    // line 498
                    yield "                    ";
                    // line 499
                    yield "                    ";
                    yield $this->getTemplateForMacro("macro_recursiveFieldsetForm", $context, 499, $this->getSourceContext())->macro_recursiveFieldsetForm(...[$context["field"]]);
                    yield "
                ";
                } else {
                    // line 501
                    yield "                    ";
                    // line 502
                    yield "                    ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    yield "
                ";
                }
                // line 504
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 505
            yield "        ";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  3126 => 505,  3120 => 504,  3114 => 502,  3112 => 501,  3106 => 499,  3104 => 498,  3101 => 497,  3096 => 496,  3081 => 495,  3069 => 891,  3065 => 890,  3061 => 889,  3056 => 887,  3052 => 885,  3049 => 884,  3047 => 882,  3045 => 881,  3042 => 880,  3040 => 878,  3038 => 876,  3028 => 875,  3018 => 872,  3014 => 870,  3008 => 868,  3005 => 867,  2999 => 863,  2990 => 860,  2987 => 859,  2983 => 858,  2976 => 856,  2971 => 855,  2965 => 854,  2961 => 852,  2957 => 851,  2952 => 848,  2950 => 847,  2946 => 845,  2940 => 842,  2937 => 841,  2935 => 840,  2932 => 839,  2926 => 836,  2923 => 835,  2921 => 834,  2918 => 833,  2914 => 831,  2908 => 829,  2902 => 827,  2900 => 826,  2897 => 825,  2895 => 824,  2890 => 822,  2885 => 819,  2882 => 818,  2879 => 817,  2876 => 816,  2873 => 815,  2870 => 814,  2867 => 813,  2864 => 812,  2861 => 811,  2858 => 810,  2855 => 809,  2852 => 808,  2842 => 807,  2832 => 804,  2829 => 803,  2823 => 801,  2820 => 800,  2814 => 796,  2805 => 793,  2802 => 792,  2798 => 791,  2791 => 789,  2786 => 788,  2780 => 787,  2776 => 785,  2772 => 784,  2767 => 781,  2765 => 780,  2758 => 776,  2753 => 775,  2747 => 772,  2740 => 771,  2738 => 770,  2731 => 767,  2725 => 765,  2723 => 764,  2721 => 763,  2716 => 760,  2712 => 759,  2709 => 758,  2706 => 757,  2703 => 756,  2700 => 755,  2697 => 754,  2694 => 753,  2691 => 752,  2688 => 751,  2685 => 750,  2682 => 749,  2679 => 748,  2677 => 747,  2673 => 745,  2663 => 744,  2652 => 741,  2642 => 740,  2634 => 737,  2629 => 734,  2623 => 733,  2619 => 732,  2615 => 731,  2612 => 730,  2602 => 729,  2591 => 726,  2581 => 725,  2555 => 717,  2544 => 715,  2538 => 712,  2524 => 711,  2516 => 710,  2510 => 709,  2506 => 708,  2502 => 707,  2499 => 706,  2482 => 705,  2479 => 704,  2476 => 703,  2466 => 702,  2456 => 697,  2446 => 696,  2436 => 692,  2430 => 689,  2427 => 688,  2425 => 687,  2403 => 686,  2400 => 685,  2397 => 684,  2394 => 683,  2384 => 682,  2374 => 678,  2364 => 677,  2354 => 673,  2344 => 672,  2334 => 668,  2326 => 665,  2323 => 663,  2321 => 662,  2317 => 661,  2315 => 660,  2313 => 659,  2308 => 657,  2305 => 655,  2303 => 654,  2294 => 653,  2291 => 652,  2287 => 651,  2282 => 648,  2279 => 647,  2276 => 646,  2273 => 645,  2270 => 644,  2260 => 643,  2248 => 637,  2238 => 636,  2221 => 632,  2218 => 631,  2212 => 629,  2210 => 628,  2203 => 626,  2200 => 625,  2197 => 624,  2187 => 623,  2177 => 619,  2171 => 617,  2169 => 616,  2166 => 615,  2160 => 612,  2157 => 611,  2151 => 608,  2145 => 607,  2141 => 606,  2136 => 605,  2134 => 604,  2126 => 602,  2116 => 601,  2106 => 598,  2103 => 597,  2097 => 595,  2095 => 594,  2092 => 593,  2086 => 591,  2083 => 590,  2073 => 589,  2064 => 586,  2054 => 585,  2044 => 581,  2038 => 579,  2036 => 578,  2032 => 576,  2027 => 575,  2023 => 574,  2019 => 572,  2017 => 571,  2011 => 570,  2008 => 569,  2005 => 568,  2002 => 567,  1999 => 566,  1989 => 565,  1979 => 561,  1976 => 560,  1974 => 558,  1964 => 557,  1954 => 553,  1951 => 552,  1949 => 551,  1939 => 550,  1928 => 547,  1918 => 546,  1907 => 541,  1903 => 540,  1899 => 538,  1897 => 537,  1896 => 536,  1894 => 534,  1884 => 533,  1875 => 529,  1873 => 528,  1872 => 527,  1871 => 526,  1870 => 525,  1869 => 524,  1867 => 522,  1857 => 521,  1846 => 517,  1843 => 516,  1833 => 515,  1822 => 512,  1812 => 511,  1797 => 506,  1795 => 495,  1793 => 494,  1785 => 490,  1779 => 489,  1773 => 487,  1770 => 486,  1766 => 485,  1755 => 483,  1752 => 482,  1747 => 479,  1741 => 477,  1739 => 476,  1732 => 473,  1726 => 471,  1724 => 470,  1721 => 469,  1715 => 467,  1713 => 466,  1710 => 465,  1703 => 463,  1699 => 462,  1694 => 461,  1690 => 459,  1688 => 458,  1680 => 456,  1678 => 455,  1673 => 453,  1670 => 452,  1667 => 451,  1665 => 450,  1662 => 449,  1659 => 448,  1654 => 447,  1651 => 446,  1648 => 445,  1638 => 444,  1628 => 441,  1625 => 440,  1622 => 439,  1612 => 438,  1597 => 433,  1592 => 432,  1582 => 431,  1571 => 427,  1561 => 426,  1550 => 422,  1547 => 421,  1541 => 419,  1539 => 418,  1533 => 415,  1527 => 414,  1524 => 413,  1520 => 410,  1514 => 408,  1507 => 405,  1505 => 404,  1502 => 403,  1499 => 402,  1495 => 400,  1489 => 398,  1486 => 397,  1481 => 393,  1479 => 392,  1477 => 391,  1473 => 390,  1469 => 388,  1463 => 386,  1460 => 385,  1455 => 381,  1453 => 380,  1451 => 379,  1447 => 378,  1444 => 377,  1441 => 376,  1437 => 374,  1431 => 372,  1428 => 371,  1423 => 367,  1421 => 366,  1419 => 365,  1416 => 364,  1413 => 363,  1411 => 362,  1408 => 361,  1405 => 360,  1395 => 359,  1384 => 356,  1381 => 355,  1371 => 354,  1360 => 350,  1357 => 349,  1351 => 347,  1349 => 346,  1343 => 343,  1337 => 342,  1334 => 341,  1330 => 338,  1324 => 336,  1317 => 333,  1315 => 332,  1312 => 331,  1308 => 329,  1305 => 327,  1302 => 325,  1300 => 324,  1298 => 323,  1293 => 322,  1291 => 321,  1288 => 320,  1278 => 319,  1267 => 316,  1264 => 315,  1254 => 314,  1243 => 310,  1240 => 309,  1230 => 308,  1219 => 302,  1215 => 299,  1212 => 297,  1210 => 296,  1206 => 293,  1203 => 291,  1201 => 290,  1199 => 289,  1184 => 288,  1180 => 285,  1177 => 282,  1176 => 281,  1175 => 280,  1173 => 279,  1171 => 278,  1169 => 275,  1166 => 273,  1164 => 272,  1161 => 270,  1158 => 268,  1156 => 267,  1154 => 266,  1151 => 262,  1141 => 261,  1133 => 256,  1131 => 255,  1125 => 254,  1115 => 253,  1104 => 249,  1101 => 248,  1098 => 247,  1095 => 246,  1092 => 245,  1089 => 244,  1083 => 242,  1080 => 241,  1077 => 240,  1075 => 238,  1073 => 237,  1070 => 236,  1060 => 235,  1051 => 232,  1042 => 226,  1034 => 223,  1031 => 222,  1025 => 220,  1023 => 219,  1017 => 216,  1013 => 215,  1007 => 214,  1003 => 212,  1000 => 211,  994 => 209,  992 => 208,  988 => 207,  983 => 206,  981 => 205,  975 => 204,  972 => 203,  965 => 200,  961 => 199,  958 => 198,  955 => 197,  952 => 196,  949 => 195,  946 => 194,  943 => 193,  940 => 192,  930 => 191,  918 => 186,  914 => 185,  911 => 184,  909 => 183,  906 => 182,  903 => 181,  900 => 180,  898 => 179,  894 => 177,  888 => 174,  885 => 173,  879 => 171,  877 => 170,  872 => 169,  870 => 168,  866 => 166,  863 => 165,  860 => 164,  858 => 162,  848 => 161,  838 => 158,  835 => 157,  833 => 155,  832 => 154,  831 => 153,  830 => 152,  829 => 151,  828 => 149,  825 => 148,  819 => 147,  816 => 146,  813 => 145,  810 => 144,  807 => 143,  804 => 142,  801 => 141,  796 => 140,  794 => 139,  791 => 138,  788 => 137,  785 => 136,  782 => 135,  772 => 134,  762 => 131,  759 => 130,  756 => 129,  753 => 124,  750 => 123,  740 => 122,  730 => 118,  727 => 117,  721 => 112,  719 => 111,  713 => 108,  711 => 107,  706 => 106,  704 => 105,  701 => 104,  696 => 103,  690 => 101,  688 => 100,  683 => 98,  680 => 97,  674 => 94,  671 => 93,  668 => 92,  664 => 91,  661 => 90,  658 => 89,  655 => 88,  653 => 87,  650 => 86,  648 => 85,  636 => 84,  634 => 83,  631 => 82,  628 => 81,  625 => 80,  623 => 78,  621 => 77,  611 => 76,  602 => 70,  599 => 68,  597 => 67,  595 => 66,  585 => 65,  577 => 62,  575 => 61,  573 => 60,  563 => 59,  555 => 56,  553 => 55,  551 => 54,  541 => 53,  532 => 50,  530 => 49,  528 => 48,  525 => 46,  523 => 45,  513 => 44,  505 => 41,  502 => 39,  500 => 38,  498 => 37,  495 => 35,  493 => 34,  483 => 33,  474 => 28,  463 => 26,  458 => 25,  455 => 24,  445 => 23,  436 => 20,  430 => 18,  427 => 17,  417 => 16,  405 => 12,  403 => 11,  399 => 10,  396 => 9,  390 => 7,  387 => 6,  377 => 5,  369 => 875,  366 => 874,  364 => 807,  361 => 806,  359 => 744,  356 => 743,  354 => 740,  351 => 739,  349 => 729,  346 => 728,  344 => 725,  341 => 724,  339 => 702,  336 => 700,  334 => 696,  331 => 695,  329 => 682,  326 => 681,  324 => 677,  321 => 676,  319 => 672,  316 => 671,  314 => 643,  311 => 642,  309 => 636,  306 => 635,  304 => 623,  301 => 622,  299 => 601,  296 => 600,  294 => 589,  291 => 588,  289 => 585,  286 => 584,  284 => 565,  281 => 564,  279 => 557,  276 => 556,  274 => 550,  271 => 549,  269 => 546,  266 => 544,  264 => 533,  261 => 531,  259 => 521,  256 => 519,  254 => 515,  251 => 514,  249 => 511,  246 => 509,  244 => 444,  241 => 443,  239 => 438,  236 => 436,  234 => 431,  231 => 429,  229 => 426,  226 => 425,  224 => 359,  221 => 358,  219 => 354,  216 => 353,  214 => 319,  211 => 318,  209 => 314,  206 => 313,  204 => 308,  201 => 307,  198 => 305,  196 => 261,  193 => 260,  190 => 258,  188 => 253,  185 => 252,  183 => 235,  180 => 234,  178 => 191,  175 => 190,  173 => 161,  170 => 160,  168 => 134,  165 => 133,  163 => 122,  160 => 121,  158 => 76,  155 => 75,  152 => 73,  150 => 65,  147 => 64,  145 => 59,  142 => 58,  140 => 53,  137 => 52,  135 => 44,  132 => 43,  130 => 33,  127 => 32,  124 => 30,  122 => 23,  119 => 22,  117 => 16,  114 => 15,  112 => 5,  109 => 4,  107 => 2,  35 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/form_theme.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\form_theme.html.twig");
    }
}
