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

/* photo/_album_menu.html.twig */
class __TwigTemplate_8f4062ca7f7d665e7d5d3b6c9c5f11bf extends Template
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

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "
";
        // line 28
        yield "
";
        yield from [];
    }

    // line 2
    public function macro_render_album_menu($album = null, $level = null, $selectedAlbum = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "album" => $album,
            "level" => $level,
            "selectedAlbum" => $selectedAlbum,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 3
            yield "    ";
            if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["album"] ?? null), "isPrivate", [], "any", false, false, false, 3) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
                // line 4
                yield "        ";
                $context["prefix"] = "";
                // line 5
                yield "
        ";
                // line 7
                yield "        ";
                if ((($context["level"] ?? null) == 0)) {
                    // line 8
                    yield "            ";
                    $context["prefix"] = "— ";
                    // line 9
                    yield "        ";
                } else {
                    // line 10
                    yield "            ";
                    $context["arrows"] = "";
                    // line 11
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["level"] ?? null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 12
                        yield "                ";
                        $context["arrows"] = (($context["arrows"] ?? null) . "➤ ");
                        // line 13
                        yield "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    yield "            ";
                    $context["prefix"] = ($context["arrows"] ?? null);
                    // line 15
                    yield "        ";
                }
                // line 16
                yield "
        <option value=\"";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["album"] ?? null), "id", [], "any", false, false, false, 17), "html", null, true);
                yield "\"
                class=\"level-";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["level"] ?? null), "html", null, true);
                yield "\"
                ";
                // line 19
                if ((($context["selectedAlbum"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, ($context["album"] ?? null), "id", [], "any", false, false, false, 19))) {
                    yield "selected";
                }
                yield ">
            ";
                // line 20
                yield ($context["prefix"] ?? null);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["album"] ?? null), "title", [], "any", false, false, false, 20), "html", null, true);
                yield "
        </option>

        ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["album"] ?? null), "children", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 24
                    yield "            ";
                    yield $this->getTemplateForMacro("macro_render_album_menu", $context, 24, $this->getSourceContext())->macro_render_album_menu(...[$context["child"], (($context["level"] ?? null) + 1), ($context["selectedAlbum"] ?? null)]);
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                yield "    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "photo/_album_menu.html.twig";
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
        return array (  143 => 26,  134 => 24,  130 => 23,  123 => 20,  117 => 19,  113 => 18,  109 => 17,  106 => 16,  103 => 15,  100 => 14,  94 => 13,  91 => 12,  86 => 11,  83 => 10,  80 => 9,  77 => 8,  74 => 7,  71 => 5,  68 => 4,  65 => 3,  51 => 2,  45 => 28,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "photo/_album_menu.html.twig", "C:\\wamp64\\www\\appac\\templates\\photo\\_album_menu.html.twig");
    }
}
