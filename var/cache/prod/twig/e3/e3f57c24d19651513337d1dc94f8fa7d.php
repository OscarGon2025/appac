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

/* board_member/organigram.html.twig */
class __TwigTemplate_b7a64ba0b641ae23693631309e37861a extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Organigramme";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .organigramme {
            display: flex;
            /*flex-direction: row;*/
            flex-wrap: wrap;
            justify-content: center;
            /*align-items: center;*/
            gap: 1.5rem;
            padding: 1rem;
        }

        .board-member {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 220px;
            border: 1px solid #0e3657;
            border-radius: 10px;
            padding: 1rem;
            background-color: #6c8dc6;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .board-member:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .board-member img {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 0.75rem;
        }

        .board-member .name {
            font-weight: 600;
            font-size: 1.1rem;
            color: #222;
        }

        .board-member .role {
            font-size: 0.95rem;
            color: #090909;
        }

        @media (max-width: 768px) {
            .board-member {
                width: 180px;
            }

            .board-member img {
                width: 140px;
                height: 140px;
            }
        }


    </style>
";
        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 72
        yield "    <section class=\"container my-5\">
        <h1 class=\"mb-4 text-center\">Organigramme</h1>

        <div class=\"organigramme\">
            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["members"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 77
            yield "                <div class=\"board-member\">
                    ";
            // line 78
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["member"], "photoName", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 79
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["member"], "photoFile"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, false, 79), "html", null, true);
                yield "\">
                    ";
            } else {
                // line 81
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default_user.png"), "html", null, true);
                yield "\" alt=\"Photo par défaut\">
                    ";
            }
            // line 83
            yield "                    <div class=\"name\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "surname", [], "any", false, false, false, 83), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, false, 83), "html", null, true);
            yield "</div>
                    <div class=\"role\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "role", [], "any", false, false, false, 84), "html", null, true);
            yield "</div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['member'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "        </div>
    </section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "board_member/organigram.html.twig";
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
        return array (  193 => 87,  184 => 84,  177 => 83,  171 => 81,  163 => 79,  161 => 78,  158 => 77,  154 => 76,  148 => 72,  141 => 71,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "board_member/organigram.html.twig", "C:\\wamp64\\www\\appac\\templates\\board_member\\organigram.html.twig");
    }
}
