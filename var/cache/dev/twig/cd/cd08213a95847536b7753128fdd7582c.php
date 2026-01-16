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
class __TwigTemplate_f576b8348f184210cc897b7c553c2286 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/edit.html.twig"));

        // line 3
        $context["navbar_is_transparent"] = false;
        // line 2
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Modifier mon profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    ";
        // line 9
        yield "    ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), ["bootstrap_5_layout.html.twig"], true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [], "any", false, false, false, 21));
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
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
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "firstname", [], "any", false, false, false, 42), 'row', ["label" => "Prénom"]);
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
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "lastname", [], "any", false, false, false, 48), 'row', ["label" => "Nom"]);
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
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "email", [], "any", false, false, false, 54), 'row', ["label" => "Email"]);
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
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "phone", [], "any", false, false, false, 60), 'row', ["label" => "Téléphone"]);
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
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "avatarFile", [], "any", false, false, false, 66), 'row', ["label" => "Photo de profil"]);
            yield "
                                    </div>
                                ";
        }
        // line 69
        yield "
                                ";
        // line 71
        yield "                                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'rest');
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  288 => 86,  280 => 81,  274 => 78,  263 => 71,  260 => 69,  254 => 66,  251 => 65,  249 => 64,  246 => 63,  240 => 60,  237 => 59,  235 => 58,  232 => 57,  226 => 54,  223 => 53,  221 => 52,  218 => 51,  212 => 48,  209 => 47,  207 => 46,  204 => 45,  198 => 42,  195 => 41,  192 => 40,  186 => 36,  177 => 29,  171 => 28,  161 => 24,  156 => 23,  151 => 22,  146 => 21,  139 => 16,  134 => 13,  121 => 12,  109 => 9,  104 => 7,  91 => 6,  68 => 4,  57 => 2,  55 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/account/edit.html.twig #}
{% extends 'base.html.twig' %}
{% set navbar_is_transparent = false %}
{% block title %}Modifier mon profil{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Asegura el tema Bootstrap del componente de formularios #}
    {% form_theme form 'bootstrap_5_layout.html.twig' %}
{% endblock %}

{% block body %}
    <section class=\"section-padding bg-white px-4 py-5 pt-lg-5 mt-5\">
        <div class=\"container\">

            <a href=\"{{ path('app_account') }}\" class=\"btn btn-outline-secondary btn-sm mb-3\">
                ← Retour à mon compte
            </a>

            {# Flashes #}
            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                        {{ message }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                {% endfor %}
            {% endfor %}

            <div class=\"row g-4\">
                <div class=\"col-lg-8\">
                    <div class=\"card shadow-sm border-0\">
                        <div class=\"card-body\">
                            <h1 class=\"h4 mb-3\">Modifier mon profil</h1>

                            {{ form_start(form, { attr: { novalidate: 'novalidate' } }) }}

                            <div class=\"row g-3\">
                                {# Campos típicos, sólo si existen en el form #}
                                {% if form.firstname is defined %}
                                    <div class=\"col-md-6\">
                                        {{ form_row(form.firstname, { label: 'Prénom' }) }}
                                    </div>
                                {% endif %}

                                {% if form.lastname is defined %}
                                    <div class=\"col-md-6\">
                                        {{ form_row(form.lastname, { label: 'Nom' }) }}
                                    </div>
                                {% endif %}

                                {% if form.email is defined %}
                                    <div class=\"col-12\">
                                        {{ form_row(form.email, { label: 'Email' }) }}
                                    </div>
                                {% endif %}

                                {% if form.phone is defined %}
                                    <div class=\"col-md-6\">
                                        {{ form_row(form.phone, { label: 'Téléphone' }) }}
                                    </div>
                                {% endif %}

                                {% if form.avatarFile is defined %}
                                    <div class=\"col-md-6\">
                                        {{ form_row(form.avatarFile, { label: 'Photo de profil' }) }}
                                    </div>
                                {% endif %}

                                {# Renderiza el resto de campos que no hayamos listado arriba #}
                                {{ form_rest(form) }}
                            </div>

                            <div class=\"d-flex align-items-center gap-2 mt-4\">
                                <button type=\"submit\" class=\"btn custom-btn\">
                                    Enregistrer
                                </button>
                                <a href=\"{{ path('app_account') }}\" class=\"btn btn-outline-secondary\">
                                    Annuler
                                </a>
                                <a href=\"{{ path('app_account_change_password') }}\" class=\"btn btn-link ms-auto\">
                                    <i class=\"bi bi-shield-lock me-1\"></i> Changer mon mot de passe
                                </a>
                            </div>

                            {{ form_end(form) }}
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
{% endblock %}
", "account/edit.html.twig", "C:\\wamp64\\www\\appac\\templates\\account\\edit.html.twig");
    }
}
