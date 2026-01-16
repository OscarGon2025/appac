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

/* registration/index.html.twig */
class __TwigTemplate_fad00a0fceb5ebf75b0679141fdc1860 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        // line 3
        yield "
";
        // line 5
        yield "
";
        // line 13
        yield "
";
        // line 20
        yield "
";
        // line 22
        yield "
";
        // line 34
        yield "
";
        // line 50
        yield "
";
        // line 53
        yield "
";
        // line 58
        yield "
";
        // line 60
        yield "
";
        // line 67
        yield "
";
        // line 73
        yield "
";
        // line 80
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  84 => 80,  81 => 73,  78 => 67,  75 => 60,  72 => 58,  69 => 53,  66 => 50,  63 => 34,  60 => 22,  57 => 20,  54 => 13,  51 => 5,  48 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/registration/register.html.twig #}
{#{% extends 'base.html.twig' %}#}

{#{% block title %}Créer un compte{% endblock %}#}

{#{% block body %}#}
{#    <section class=\"container min-vh-100 d-flex align-items-center justify-content-center py-5\">#}
{#        <div class=\"col-12 col-md-9 col-lg-6 col-xl-5\">#}
{#            <div class=\"card shadow-lg rounded-4 border-0\">#}
{#                <div class=\"card-body p-4 p-sm-5\">#}
{#                    <h1 class=\"h3 fw-bold text-center mb-1\">Créer un compte</h1>#}
{#                    <p class=\"text-muted text-center mb-4\">Rejoignez l’APPAC en quelques secondes</p>#}

{#                    #}{# Mensajes flash (por si los usas) #}
{#                    {% for label, messages in app.flashes %}#}
{#                        {% for message in messages %}#}
{#                            <div class=\"alert alert-{{ label }} mb-3\" role=\"alert\">{{ message }}</div>#}
{#                        {% endfor %}#}
{#                    {% endfor %}#}

{#                    {{ form_start(registrationForm, { attr: { novalidate: 'novalidate' } }) }}#}

{#                    #}{# Email #}
{#                    <div class=\"mb-3\">#}
{#                        {{ form_label(registrationForm.email, 'Adresse e-mail', { label_attr: { class: 'form-label fw-semibold' } }) }}#}
{#                        <div class=\"input-group\">#}
{#                            <span class=\"input-group-text\"><i class=\"bi bi-envelope\"></i></span>#}
{#                            {{ form_widget(registrationForm.email, {#}
{#                                attr: { class: 'form-control form-control-lg', placeholder: 'votre@email.fr' }#}
{#                            }) }}#}
{#                        </div>#}
{#                        {{ form_errors(registrationForm.email) }}#}
{#                    </div>#}

{#                    #}{# Mot de passe con mostrar/ocultar #}
{#                    <div class=\"mb-3\">#}
{#                        {{ form_label(registrationForm.password, 'Mot de passe', { label_attr: { class: 'form-label fw-semibold' } }) }}#}
{#                        <div class=\"input-group\">#}
{#                            <span class=\"input-group-text\"><i class=\"bi bi-lock\"></i></span>#}
{#                            {{ form_widget(registrationForm.password, {#}
{#                                attr: { class: 'form-control form-control-lg', placeholder: '••••••••', autocomplete: 'new-password', id: 'password-field' }#}
{#                            }) }}#}
{#                            <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"toggle-password\" aria-label=\"Afficher/Masquer le mot de passe\">#}
{#                                <i class=\"bi bi-eye\"></i>#}
{#                            </button>#}
{#                        </div>#}
{#                        <div class=\"form-text\">8 caractères minimum, avec lettres et chiffres de préférence.</div>#}
{#                        {{ form_errors(registrationForm.password) }}#}
{#                    </div>#}

{#                    #}{# Resto de campos ocultos (CSRF, etc.) #}
{#                    {{ form_rest(registrationForm) }}#}

{#                    <button class=\"btn btn-primary btn-lg w-100 mt-2\">#}
{#                        Créer mon compte#}
{#                    </button>#}
{#                    {{ form_end(registrationForm) }}#}

{#                    <hr class=\"my-4\">#}

{#                    <div class=\"text-center\">#}
{#                        <small class=\"text-muted\">Déjà inscrit ?</small>#}
{#                        <a href=\"{{ path('app_login') }}\" class=\"ms-1 fw-semibold\">Se connecter</a>#}
{#                    </div>#}
{#                </div>#}
{#            </div>#}

{#            <p class=\"text-center text-muted mt-3 mb-0\" style=\"font-size:.9rem\">#}
{#                En créant un compte, vous acceptez nos <a href=\"#\" class=\"text-decoration-underline\">conditions d’utilisation</a>.#}
{#            </p>#}
{#        </div>#}
{#    </section>#}

{#    #}{# Pequeño script para alternar la visibilidad del password #}
{#    <script>#}
{#        (function () {#}
{#            const btn = document.getElementById('toggle-password');#}
{#            const input = document.getElementById('password-field');#}
{#            if (!btn || !input) return;#}

{#            btn.addEventListener('click', function () {#}
{#                const isText = input.getAttribute('type') === 'text';#}
{#                input.setAttribute('type', isText ? 'password' : 'text');#}
{#                this.innerHTML = isText ? '<i class=\"bi bi-eye\"></i>' : '<i class=\"bi bi-eye-slash\"></i>';#}
{#            });#}
{#        })();#}
{#    </script>#}
{#{% endblock %}#}
", "registration/index.html.twig", "C:\\wamp64\\www\\appac\\templates\\registration\\index.html.twig");
    }
}
