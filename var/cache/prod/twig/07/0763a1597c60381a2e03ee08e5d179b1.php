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

/* @VichUploader/Collector/mapping_collector.html.twig */
class __TwigTemplate_f66fff4f4acd4eb572207fa161ee4742 extends Template
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
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 5
            yield "        ";
            yield Twig\Extension\CoreExtension::source($this->env, "@VichUploader/Collector/icon.svg");
            yield "
        <span class=\"sf-toolbar-value\">";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappingsCount", [], "any", false, false, false, 6), "html", null, true);
            yield "</span>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        yield "
    ";
        // line 9
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 10
            yield "        <div class=\"sf-toolbar-info-piece\">
            <b>Mappings</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-grey\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappingsCount", [], "any", false, false, false, 12), "html", null, true);
            yield "</span>
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        yield "
    ";
        // line 16
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
        yield "
";
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "    ";
        // line 21
        yield "    <span class=\"label\">
        <span class=\"icon\">
            ";
        // line 23
        yield Twig\Extension\CoreExtension::source($this->env, "@VichUploader/Collector/icon.svg");
        yield "
        </span>
        <strong>VichUploader</strong>
    </span>
";
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        yield "    <h2>VichUploaderBundle Mappings</h2>
    <table>
        <thead>
            <tr>
                <th scope=\"col\" rowspan=\"2\">Field</th>
                <th scope=\"col\" rowspan=\"2\">Mapping</th>
                <th scope=\"col\" colspan=\"5\" style=\"text-align: center\">Properties</th>
            </tr>
            <tr>
                <th scope=\"col\">Filename</th>
                <th scope=\"col\">Size</th>
                <th scope=\"col\">Mime Type</th>
                <th scope=\"col\">Original Name</th>
                <th scope=\"col\">Dimensions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappings", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["class"] => $context["data"]) {
            // line 48
            yield "                <tr>
                    <th scope=\"row\" colspan=\"7\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["class"], "html", null, true);
            yield "</th>
                </tr>
                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["data"]);
            foreach ($context['_seq'] as $context["_key"] => $context["mdata"]) {
                // line 52
                yield "                    <tr>
                        <td>";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "propertyName", [], "any", false, false, false, 53), "html", null, true);
                yield "</td>
                        <td>";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "mapping", [], "any", false, false, false, 54), "html", null, true);
                yield "</td>
                        <td>";
                // line 55
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "fileNameProperty", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "fileNameProperty", [], "any", false, false, false, 55), "<span class=\"text-danger\">Not Set</span>")) : ("<span class=\"text-danger\">Not Set</span>"));
                yield "</td>
                        <td>";
                // line 56
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "size", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "size", [], "any", false, false, false, 56), "<span class=\"text-danger\">Not Set</span>")) : ("<span class=\"text-danger\">Not Set</span>"));
                yield "</td>
                        <td>";
                // line 57
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "mimeType", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "mimeType", [], "any", false, false, false, 57), "<span class=\"text-danger\">Not Set</span>")) : ("<span class=\"text-danger\">Not Set</span>"));
                yield "</td>
                        <td>";
                // line 58
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "originalName", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "originalName", [], "any", false, false, false, 58), "<span class=\"text-danger\">Not Set</span>")) : ("<span class=\"text-danger\">Not Set</span>"));
                yield "</td>
                        <td>";
                // line 59
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "dimensions", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "dimensions", [], "any", false, false, false, 59), "<span class=\"text-danger\">Not Set</span>")) : ("<span class=\"text-danger\">Not Set</span>"));
                yield "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['mdata'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['class'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "        </tbody>
    </table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@VichUploader/Collector/mapping_collector.html.twig";
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
        return array (  207 => 63,  201 => 62,  192 => 59,  188 => 58,  184 => 57,  180 => 56,  176 => 55,  172 => 54,  168 => 53,  165 => 52,  161 => 51,  156 => 49,  153 => 48,  149 => 47,  130 => 30,  123 => 29,  113 => 23,  109 => 21,  107 => 20,  100 => 19,  93 => 16,  90 => 15,  83 => 12,  79 => 10,  77 => 9,  74 => 8,  68 => 6,  63 => 5,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@VichUploader/Collector/mapping_collector.html.twig", "C:\\wamp64\\www\\appac\\vendor\\vich\\uploader-bundle\\templates\\Collector\\mapping_collector.html.twig");
    }
}
