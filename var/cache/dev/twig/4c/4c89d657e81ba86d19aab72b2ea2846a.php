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
class __TwigTemplate_4db36ee4384a94d2469a2ff9c80be6c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photo/_album_menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photo/_album_menu.html.twig"));

        // line 1
        yield "
";
        // line 28
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_album_menu"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_album_menu"));

            // line 3
            yield "    ";
            if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 3, $this->source); })()), "isPrivate", [], "any", false, false, false, 3) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
                // line 4
                yield "        ";
                $context["prefix"] = "";
                // line 5
                yield "
        ";
                // line 7
                yield "        ";
                if (((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 7, $this->source); })()) == 0)) {
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
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 11, $this->source); })())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 12
                        yield "                ";
                        $context["arrows"] = ((isset($context["arrows"]) || array_key_exists("arrows", $context) ? $context["arrows"] : (function () { throw new RuntimeError('Variable "arrows" does not exist.', 12, $this->source); })()) . "➤ ");
                        // line 13
                        yield "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    yield "            ";
                    $context["prefix"] = (isset($context["arrows"]) || array_key_exists("arrows", $context) ? $context["arrows"] : (function () { throw new RuntimeError('Variable "arrows" does not exist.', 14, $this->source); })());
                    // line 15
                    yield "        ";
                }
                // line 16
                yield "
        <option value=\"";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
                yield "\"
                class=\"level-";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 18, $this->source); })()), "html", null, true);
                yield "\"
                ";
                // line 19
                if (((isset($context["selectedAlbum"]) || array_key_exists("selectedAlbum", $context) ? $context["selectedAlbum"] : (function () { throw new RuntimeError('Variable "selectedAlbum" does not exist.', 19, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19))) {
                    yield "selected";
                }
                yield ">
            ";
                // line 20
                yield (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 20, $this->source); })());
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), "html", null, true);
                yield "
        </option>

        ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 23, $this->source); })()), "children", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 24
                    yield "            ";
                    yield $this->getTemplateForMacro("macro_render_album_menu", $context, 24, $this->getSourceContext())->macro_render_album_menu(...[$context["child"], ((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 24, $this->source); })()) + 1), (isset($context["selectedAlbum"]) || array_key_exists("selectedAlbum", $context) ? $context["selectedAlbum"] : (function () { throw new RuntimeError('Variable "selectedAlbum" does not exist.', 24, $this->source); })())]);
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                yield "    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  161 => 26,  152 => 24,  148 => 23,  141 => 20,  135 => 19,  131 => 18,  127 => 17,  124 => 16,  121 => 15,  118 => 14,  112 => 13,  109 => 12,  104 => 11,  101 => 10,  98 => 9,  95 => 8,  92 => 7,  89 => 5,  86 => 4,  83 => 3,  63 => 2,  51 => 28,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% macro render_album_menu(album, level, selectedAlbum) %}
    {% if not album.isPrivate or is_granted('ROLE_USER') %}
        {% set prefix = '' %}

        {# On ajoute les symboles en fonction du niveau de dossier #}
        {% if level == 0 %}
            {% set prefix = '— ' %}
        {% else %}
            {% set arrows = '' %}
            {% for i in 1..level %}
                {% set arrows = arrows ~ '➤ ' %}
            {% endfor %}
            {% set prefix = arrows %}
        {% endif %}

        <option value=\"{{ album.id }}\"
                class=\"level-{{ level }}\"
                {% if selectedAlbum == album.id %}selected{% endif %}>
            {{ prefix|raw }}{{ album.title }}
        </option>

        {% for child in album.children %}
            {{ _self.render_album_menu(child, level + 1, selectedAlbum) }}
        {% endfor %}
    {% endif %}
{% endmacro %}

", "photo/_album_menu.html.twig", "C:\\wamp64\\www\\appac\\templates\\photo\\_album_menu.html.twig");
    }
}
