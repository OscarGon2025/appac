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

/* @EasyAdmin/crud/paginator.html.twig */
class __TwigTemplate_89a70908be88ba190ff85e02f8005789 extends Template
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
        // line 3
        $context["ea"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea();
        // line 5
        yield "
<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        ";
        // line 8
        if ((($tmp = ((array_key_exists("render_detailed_pagination", $context)) ? (($context["render_detailed_pagination"] ?? null)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "            ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.results", ["%count%" => Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "numResults", [], "any", false, false, false, 9))], "EasyAdminBundle");
            yield "
        ";
        }
        // line 11
        yield "    </div>
    ";
        // line 12
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 12) || CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 12))) {
            // line 13
            yield "        <nav class=\"pager list-pagination-paginator ";
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("first-page") : (""));
            yield " ";
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("last-page") : (""));
            yield "\">
            <ul class=\"pagination\">
                <li class=\"page-item page-item-previous ";
            // line 15
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 16
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("#") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "previousPage", [], "any", false, false, false, 16)], "method", false, false, false, 16), "html", null, true)));
            yield "\">
                        ";
            // line 17
            if (("rtl" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 17), "textDirection", [], "any", false, false, false, 17))) {
                // line 18
                yield "                            ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "mx-1", "aria-hidden" => "true"]);
                yield "
                        ";
            } else {
                // line 20
                yield "                            ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-left", "class" => "mx-1", "aria-hidden" => "true"]);
                yield "
                        ";
            }
            // line 22
            yield "
                        <span class=\"btn-label\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", [], "EasyAdminBundle"), "html", null, true);
            yield "</span>
                    </a>
                </li>

                ";
            // line 27
            if ((($tmp = ((array_key_exists("render_detailed_pagination", $context)) ? (($context["render_detailed_pagination"] ?? null)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 28
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "pageRange", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 29
                    yield "                        <li class=\"page-item ";
                    yield ((($context["page"] == CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 29))) ? ("active") : (""));
                    yield " ";
                    yield (((null === $context["page"])) ? ("disabled") : (""));
                    yield "\">
                            ";
                    // line 30
                    if ((null === $context["page"])) {
                        // line 31
                        yield "                                <span class=\"page-link\">&hellip;</span>
                            ";
                    } else {
                        // line 33
                        yield "                                <a class=\"page-link\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [$context["page"]], "method", false, false, false, 33), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</a>
                            ";
                    }
                    // line 35
                    yield "                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                yield "                ";
            } else {
                // line 38
                yield "                    <li class=\"page-item active ";
                yield (((null === CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 38))) ? ("disabled") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 39)], "method", false, false, false, 39), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 39), "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            // line 42
            yield "
                <li class=\"page-item page-item-next ";
            // line 43
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 44
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("#") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "nextPage", [], "any", false, false, false, 44)], "method", false, false, false, 44), "html", null, true)));
            yield "\">
                        <span class=\"btn-label\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", [], "EasyAdminBundle"), "html", null, true);
            yield "</span>

                        ";
            // line 47
            if (("rtl" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 47), "textDirection", [], "any", false, false, false, 47))) {
                // line 48
                yield "                            ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-left", "class" => "mx-1", "aria-hidden" => "true"]);
                yield "
                        ";
            } else {
                // line 50
                yield "                            ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "mx-1", "aria-hidden" => "true"]);
                yield "
                        ";
            }
            // line 52
            yield "                    </a>
                </li>
            </ul>
        </nav>
    ";
        }
        // line 57
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/paginator.html.twig";
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
        return array (  190 => 57,  183 => 52,  177 => 50,  171 => 48,  169 => 47,  164 => 45,  160 => 44,  156 => 43,  153 => 42,  145 => 39,  140 => 38,  137 => 37,  130 => 35,  122 => 33,  118 => 31,  116 => 30,  109 => 29,  104 => 28,  102 => 27,  95 => 23,  92 => 22,  86 => 20,  80 => 18,  78 => 17,  74 => 16,  70 => 15,  62 => 13,  60 => 12,  57 => 11,  51 => 9,  49 => 8,  44 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/paginator.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\paginator.html.twig");
    }
}
