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

/* @LiipImagine/Form/form_div_layout.html.twig */
class __TwigTemplate_01a67cd6690a2cb371faae4650c97092 extends Template
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
            'liip_imagine_image_widget' => [$this, 'block_liip_imagine_image_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LiipImagine/Form/form_div_layout.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('liip_imagine_image_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_liip_imagine_image_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "liip_imagine_image_widget"));

        // line 2
        yield "    ";
        if ((($tmp = ($context["image_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "        <div>
            ";
            // line 4
            if ((($tmp = ($context["link_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 5
                yield "                <a href=\"";
                yield (((($tmp = ($context["link_filter"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(($context["link_url"] ?? null), ($context["link_filter"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link_url"] ?? null), "html", null, true)));
                yield "\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["link_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                    yield "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield ">
            ";
            }
            // line 7
            yield "
            <img src=\"";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(($context["image_path"] ?? null), ($context["image_filter"] ?? null)), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["image_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield " />

            ";
            // line 10
            if ((($tmp = ($context["link_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 11
                yield "                </a>
            ";
            }
            // line 13
            yield "        </div>
    ";
        }
        // line 15
        yield "
    ";
        // line 16
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@LiipImagine/Form/form_div_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  122 => 16,  119 => 15,  115 => 13,  111 => 11,  109 => 10,  92 => 8,  89 => 7,  71 => 5,  69 => 4,  66 => 3,  63 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@LiipImagine/Form/form_div_layout.html.twig", "C:\\wamp64\\www\\appac\\vendor\\liip\\imagine-bundle\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
