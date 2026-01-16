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

/* account/edit.html.twig */
class __TwigTemplate_ba7a45cc6d80957088440b80798c96c5 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        $context["navbar_is_transparent"] = false;
        // line 2
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modifier mon profil";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    ";
        // line 9
        yield "    ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["bootstrap_5_layout.html.twig"], true);
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "    <section class=\"section-padding bg-white px-4 py-5 pt-lg-5 mt-5\">
        <div class=\"container\">

            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        yield "\" class=\"btn btn-outline-secondary btn-sm mb-3\">
                ← Retour à mon compte
            </a>

            ";
        // line 21
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 22
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 23
                yield "                    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                        ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "
            <div class=\"row g-4\">
                <div class=\"col-lg-8\">
                    <div class=\"card shadow-sm border-0\">
                        <div class=\"card-body\">
                            <h1 class=\"h4 mb-3\">Modifier mon profil</h1>

                            ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                            <div class=\"row g-3\">
                                ";
        // line 40
        yield "                                ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", true, true, false, 40)) {
            // line 41
            yield "                                    <div class=\"col-md-6\">
                                        ";
            // line 42
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 42), 'row', ["label" => "Prénom"]);
            yield "
                                    </div>
                                ";
        }
        // line 45
        yield "
                                ";
        // line 46
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", true, true, false, 46)) {
            // line 47
            yield "                                    <div class=\"col-md-6\">
                                        ";
            // line 48
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 48), 'row', ["label" => "Nom"]);
            yield "
                                    </div>
                                ";
        }
        // line 51
        yield "
                                ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", true, true, false, 52)) {
            // line 53
            yield "                                    <div class=\"col-12\">
                                        ";
            // line 54
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 54), 'row', ["label" => "Email"]);
            yield "
                                    </div>
                                ";
        }
        // line 57
        yield "
                                ";
        // line 58
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", true, true, false, 58)) {
            // line 59
            yield "                                    <div class=\"col-md-6\">
                                        ";
            // line 60
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 60), 'row', ["label" => "Téléphone"]);
            yield "
                                    </div>
                                ";
        }
        // line 63
        yield "
                                ";
        // line 64
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "avatarFile", [], "any", true, true, false, 64)) {
            // line 65
            yield "                                    <div class=\"col-md-6\">
                                        ";
            // line 66
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "avatarFile", [], "any", false, false, false, 66), 'row', ["label" => "Photo de profil"]);
            yield "
                                    </div>
                                ";
        }
        // line 69
        yield "
                                ";
        // line 71
        yield "                                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
                            </div>

                            <div class=\"d-flex align-items-center gap-2 mt-4\">
                                <button type=\"submit\" class=\"btn custom-btn\">
                                    Enregistrer
                                </button>
                                <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        yield "\" class=\"btn btn-outline-secondary\">
                                    Annuler
                                </a>
                                <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_change_password");
        yield "\" class=\"btn btn-link ms-auto\">
                                    <i class=\"bi bi-shield-lock me-1\"></i> Changer mon mot de passe
                                </a>
                            </div>

                            ";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4\">
                    <div class=\"card shadow-sm border-0\">
                        <div class=\"card-body\">
                            <h2 class=\"h6 text-muted mb-2\">Conseils</h2>
                            <ul class=\"small mb-0 ps-3\">
                                <li>Vérifiez vos informations avant d’enregistrer.</li>
                                <li>Utilisez un email que vous consultez régulièrement.</li>
                                <li>Vous pouvez changer votre mot de passe à tout moment.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "account/edit.html.twig";
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
        return array (  246 => 86,  238 => 81,  232 => 78,  221 => 71,  218 => 69,  212 => 66,  209 => 65,  207 => 64,  204 => 63,  198 => 60,  195 => 59,  193 => 58,  190 => 57,  184 => 54,  181 => 53,  179 => 52,  176 => 51,  170 => 48,  167 => 47,  165 => 46,  162 => 45,  156 => 42,  153 => 41,  150 => 40,  144 => 36,  135 => 29,  129 => 28,  119 => 24,  114 => 23,  109 => 22,  104 => 21,  97 => 16,  92 => 13,  85 => 12,  79 => 9,  74 => 7,  67 => 6,  56 => 4,  51 => 2,  49 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "account/edit.html.twig", "C:\\wamp64\\www\\appac\\templates\\account\\edit.html.twig");
    }
}
