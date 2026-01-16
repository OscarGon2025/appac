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

/* admin/album/index_hierarchy.html.twig */
class __TwigTemplate_2f3e0fef90e184a2ebc3ae5f03f51d89 extends Template
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
            'page_content' => [$this, 'block_page_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 20
        return "@EasyAdmin/crud/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("@EasyAdmin/crud/index.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "    <h1 class=\"mb-4\">Albums (vue hiérarchique)</h1>

    <ul class=\"album-list mb-5\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["entities"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 27
            yield "            ";
            $context["entity"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["album"], "instance", [], "any", true, true, false, 27) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["album"], "instance", [], "any", false, false, false, 27)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["album"], "instance", [], "any", false, false, false, 27)) : ($context["album"]));
            // line 28
            yield "            ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "parent", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 29
                yield "                <li>
                    <strong>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "title", [], "any", false, false, false, 30), "html", null, true);
                yield "</strong>
                    ";
                // line 31
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "children", [], "any", false, false, false, 31)) > 0)) {
                    // line 32
                    yield "                        ";
                    yield from $this->load("admin/fields/album_hierarchy.html.twig", 32)->unwrap()->yield(CoreExtension::merge($context, ["value" => CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "children", [], "any", false, false, false, 32)]));
                    // line 33
                    yield "                    ";
                }
                // line 34
                yield "                </li>
            ";
            }
            // line 36
            yield "        ";
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
        unset($context['_seq'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "    </ul>

    ";
        // line 39
        yield from $this->yieldParentBlock("page_content", $context, $blocks);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/album/index_hierarchy.html.twig";
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
        return array (  123 => 39,  119 => 37,  105 => 36,  101 => 34,  98 => 33,  95 => 32,  93 => 31,  89 => 30,  86 => 29,  83 => 28,  80 => 27,  63 => 26,  58 => 23,  51 => 22,  40 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/album/index_hierarchy.html.twig", "C:\\wamp64\\www\\appac\\templates\\admin\\album\\index_hierarchy.html.twig");
    }
}
