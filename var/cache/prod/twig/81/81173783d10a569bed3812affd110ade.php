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

/* account/edit_account.html.twig */
class __TwigTemplate_acaaef0c1157becfd1be74398f773170 extends Template
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
        yield "Mon compte - Modifier mes informations";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"container py-5\">
        <h1 class=\"text-center mb-5 fw-bold\">Mon compte</h1>

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            yield "            <div class=\"alert alert-success text-center mb-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "
        <div class=\"row g-5 justify-content-center\">
            <!-- Bloc Informations personnelles -->
            <div class=\"col-md-6\">
                <div class=\"card shadow-lg border-0 rounded-4\">
                    <div class=\"card-header bg-dark text-light text-center rounded-top-4 py-3\">
                        <h4 class=\"m-0\">✏️ Modifier mes informations</h4>
                    </div>
                    <div class=\"card-body p-4\">
                        ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["profileForm"] ?? null), 'form_start');
        yield "
                        <div class=\"mb-3\">
                            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "email", [], "any", false, false, false, 23), 'label');
        yield "
                            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "email", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "email", [], "any", false, false, false, 25), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "firstName", [], "any", false, false, false, 29), 'label');
        yield "
                            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "firstName", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "lastName", [], "any", false, false, false, 34), 'label');
        yield "
                            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "lastName", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>

                        <div class=\"text-end mt-4\">
                            <button type=\"submit\" class=\"btn btn-warning px-4\">💾 Enregistrer</button>
                        </div>
                        ";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["profileForm"] ?? null), 'form_end');
        yield "
                    </div>
                </div>
            </div>

            <!-- Bloc Changer le mot de passe -->
            <div class=\"col-md-6\">
                <div class=\"card shadow-lg border-0 rounded-4\">
                    <div class=\"card-header bg-dark text-light text-center rounded-top-4 py-3\">
                        <h4 class=\"m-0\">🔒 Modifier mon mot de passe</h4>
                    </div>
                    <div class=\"card-body p-4\">
                        ";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["passwordForm"] ?? null), 'form_start');
        yield "
                        <div class=\"mb-3\">
                            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["passwordForm"] ?? null), "plainPassword", [], "any", false, false, false, 55), "first", [], "any", false, false, false, 55), 'label');
        yield "
                            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["passwordForm"] ?? null), "plainPassword", [], "any", false, false, false, 56), "first", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["passwordForm"] ?? null), "plainPassword", [], "any", false, false, false, 57), "first", [], "any", false, false, false, 57), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["passwordForm"] ?? null), "plainPassword", [], "any", false, false, false, 61), "second", [], "any", false, false, false, 61), 'label');
        yield "
                            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["passwordForm"] ?? null), "plainPassword", [], "any", false, false, false, 62), "second", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["passwordForm"] ?? null), "plainPassword", [], "any", false, false, false, 63), "second", [], "any", false, false, false, 63), 'errors');
        yield "
                        </div>

                        <div class=\"text-end mt-4\">
                            <button type=\"submit\" class=\"btn btn-primary px-4\">🔑 Changer le mot de passe</button>
                        </div>
                        ";
        // line 69
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["passwordForm"] ?? null), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>

        <div class=\"text-center mt-5\">
            <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        yield "\" class=\"btn btn-outline-secondary\">
                ← Retour à mon espace
            </a>
        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "account/edit_account.html.twig";
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
        return array (  205 => 76,  195 => 69,  186 => 63,  182 => 62,  178 => 61,  171 => 57,  167 => 56,  163 => 55,  158 => 53,  143 => 41,  134 => 35,  130 => 34,  123 => 30,  119 => 29,  112 => 25,  108 => 24,  104 => 23,  99 => 21,  88 => 12,  79 => 10,  75 => 9,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "account/edit_account.html.twig", "C:\\wamp64\\www\\appac\\templates\\account\\edit_account.html.twig");
    }
}
