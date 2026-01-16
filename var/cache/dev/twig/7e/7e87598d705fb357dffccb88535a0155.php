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

/* registration/register.html.twig */
class __TwigTemplate_b13803de9c206391aa52efce9ccd6060 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Créer un compte";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <section class=\"container px-4 py-5 pt-lg-5 mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 col-lg-5\">

                <h1 class=\"mb-4 text-center\">Créer un compte</h1>

                ";
        // line 13
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 14
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                yield "                        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " mb-3\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
                ";
        // line 19
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), 'form_start');
        yield "

                <div class=\"mb-3\">
                    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), 'label');
        yield "
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre email"]]);
        yield "
                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), 'errors');
        yield "
                </div>

                ";
        // line 28
        yield "                <div class=\"mb-3\">
                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "password", [], "any", false, false, false, 29), "first", [], "any", false, false, false, 29), 'label');
        yield "
                    <div class=\"input-group\">
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "password", [], "any", false, false, false, 31), "first", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe"]]);
        yield "
                        <button id=\"pw-toggle-1\" class=\"btn btn-outline-secondary\" type=\"button\" aria-pressed=\"false\">
                            <span data-eye>Afficher</span>
                        </button>
                    </div>
                    <small class=\"form-text text-muted d-block\">
                        8+ caractères, majuscules, minuscules, chiffres, symboles.
                    </small>
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "password", [], "any", false, false, false, 39), "first", [], "any", false, false, false, 39), 'errors');
        yield "
                </div>

                ";
        // line 43
        yield "                <div class=\"mb-3\">
                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "password", [], "any", false, false, false, 44), "second", [], "any", false, false, false, 44), 'label');
        yield "
                    <div class=\"input-group\">
                        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "password", [], "any", false, false, false, 46), "second", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Confirmez le mot de passe"]]);
        yield "
                        <button id=\"pw-toggle-2\" class=\"btn btn-outline-secondary\" type=\"button\" aria-pressed=\"false\">
                            <span data-eye>Afficher</span>
                        </button>
                    </div>
                    ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "password", [], "any", false, false, false, 51), "second", [], "any", false, false, false, 51), 'errors');
        yield "
                </div>

                ";
        // line 55
        yield "                <div id=\"pw-meter\" class=\"mt-2\"
                     style=\"height:8px;background:#eee;border-radius:4px;overflow:hidden;opacity:0;transition:opacity .2s;\">
                    <div id=\"pw-meter-fill\" style=\"height:100%;width:0%;background:#0d6efd;transition:width .25s\"></div>
                </div>
                <small id=\"pw-meter-text\" class=\"text-muted d-block mt-1\"></small>

                ";
        // line 62
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "captcha", [], "any", true, true, false, 62) && array_key_exists("recaptcha_site", $context))) {
            // line 63
            yield "                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "captcha", [], "any", false, false, false, 63), 'widget');
            yield "
                    ";
            // line 64
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "captcha", [], "any", false, false, false, 64), 'errors');
            yield "
                ";
        }
        // line 66
        yield "
                <div class=\"d-grid mt-3\">
                    ";
        // line 68
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "submit", [], "any", true, true, false, 68)) {
            // line 69
            yield "                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "submit", [], "any", false, false, false, 69), 'row');
            yield "
                    ";
        } else {
            // line 71
            yield "                        <button type=\"submit\" class=\"btn btn-primary btn-block\">Créer mon compte</button>
                    ";
        }
        // line 73
        yield "                </div>

                ";
        // line 76
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), 'form_end');
        yield "

                <p class=\"text-center mt-3\">
                    Déjà inscrit ? <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Connectez-vous</a>
                </p>

            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    ";
        // line 91
        yield "    ";
        if (array_key_exists("recaptcha_site", $context)) {
            // line 92
            yield "        <script src=\"https://www.google.com/recaptcha/api.js?render=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site"]) || array_key_exists("recaptcha_site", $context) ? $context["recaptcha_site"] : (function () { throw new RuntimeError('Variable "recaptcha_site" does not exist.', 92, $this->source); })()), "html", null, true);
            yield "\"></script>
        <script>
            grecaptcha.ready(function () {
                grecaptcha.execute('";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site"]) || array_key_exists("recaptcha_site", $context) ? $context["recaptcha_site"] : (function () { throw new RuntimeError('Variable "recaptcha_site" does not exist.', 95, $this->source); })()), "html", null, true);
            yield "', {action: 'register'})
                    .then(function (token) {
                        const el = document.querySelector('input[name=\"registration_form[captcha]\"]');
                        if (el) el.value = token;
                    })
                    .catch(function(){ /* evita \"Uncaught (in promise) null\" en dev */ });
            });
        </script>
    ";
        }
        // line 104
        yield "
    <script>
        // Mostrar/ocultar contraseña
        function togglePw(btnId, inputSelector) {
            const btn = document.getElementById(btnId);
            const input = document.querySelector(inputSelector);
            if (!btn || !input) return;
            btn.addEventListener('click', function () {
                const isText = input.type === 'text';
                input.type = isText ? 'password' : 'text';
                this.setAttribute('aria-pressed', (!isText).toString());
                this.querySelector('[data-eye]').textContent = isText ? 'Afficher' : 'Masquer';
            });
        }
        togglePw('pw-toggle-1', '[name=\"registration_form[password][first]\"]');
        togglePw('pw-toggle-2', '[name=\"registration_form[password][second]\"]');

        // Barra de complejidad
        (function(){
            const input = document.querySelector('[name=\"registration_form[password][first]\"]');
            const bar   = document.getElementById('pw-meter');
            const fill  = document.getElementById('pw-meter-fill');
            const text  = document.getElementById('pw-meter-text');
            if (!input || !bar || !fill || !text) return;

            function scorePw(pw){
                let s = 0;
                if (pw.length >= 8) s += 25;
                if (/[a-z]/.test(pw) && /[A-Z]/.test(pw)) s += 25;
                if (/\\d/.test(pw)) s += 25;
                if (/[^A-Za-z0-9]/.test(pw)) s += 25;
                return Math.min(s, 100);
            }

            input.addEventListener('input', function(){
                const v = input.value || '';
                if (v.length === 0) { bar.style.opacity = '0'; text.textContent = ''; fill.style.width = '0%'; return; }
                bar.style.opacity = '1';
                const s = scorePw(v);
                fill.style.width = s + '%';
                let label = 'Faible';
                if (s >= 75) label = 'Excellente';
                else if (s >= 50) label = 'Bonne';
                else if (s >= 25) label = 'Moyenne';
                text.textContent = 'Sécurité du mot de passe : ' + label;
            });
        })();
    </script>
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
        return "registration/register.html.twig";
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
        return array (  313 => 104,  301 => 95,  294 => 92,  291 => 91,  285 => 88,  272 => 87,  254 => 79,  247 => 76,  243 => 73,  239 => 71,  233 => 69,  231 => 68,  227 => 66,  222 => 64,  217 => 63,  214 => 62,  206 => 55,  200 => 51,  192 => 46,  187 => 44,  184 => 43,  178 => 39,  167 => 31,  162 => 29,  159 => 28,  153 => 24,  149 => 23,  145 => 22,  139 => 19,  136 => 18,  130 => 17,  119 => 15,  114 => 14,  109 => 13,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer un compte{% endblock %}

{% block body %}
    <section class=\"container px-4 py-5 pt-lg-5 mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 col-lg-5\">

                <h1 class=\"mb-4 text-center\">Créer un compte</h1>

                {# Flash messages #}
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ label }} mb-3\">{{ message }}</div>
                    {% endfor %}
                {% endfor %}

                {{ form_start(registrationForm) }}

                <div class=\"mb-3\">
                    {{ form_label(registrationForm.email) }}
                    {{ form_widget(registrationForm.email, { attr: { class: 'form-control', placeholder: 'Votre email' } }) }}
                    {{ form_errors(registrationForm.email) }}
                </div>

                {# Password 1 #}
                <div class=\"mb-3\">
                    {{ form_label(registrationForm.password.first) }}
                    <div class=\"input-group\">
                        {{ form_widget(registrationForm.password.first, { attr: { class: 'form-control', placeholder: 'Mot de passe' } }) }}
                        <button id=\"pw-toggle-1\" class=\"btn btn-outline-secondary\" type=\"button\" aria-pressed=\"false\">
                            <span data-eye>Afficher</span>
                        </button>
                    </div>
                    <small class=\"form-text text-muted d-block\">
                        8+ caractères, majuscules, minuscules, chiffres, symboles.
                    </small>
                    {{ form_errors(registrationForm.password.first) }}
                </div>

                {# Password 2 #}
                <div class=\"mb-3\">
                    {{ form_label(registrationForm.password.second) }}
                    <div class=\"input-group\">
                        {{ form_widget(registrationForm.password.second, { attr: { class: 'form-control', placeholder: 'Confirmez le mot de passe' } }) }}
                        <button id=\"pw-toggle-2\" class=\"btn btn-outline-secondary\" type=\"button\" aria-pressed=\"false\">
                            <span data-eye>Afficher</span>
                        </button>
                    </div>
                    {{ form_errors(registrationForm.password.second) }}
                </div>

                {# Barre de complexité #}
                <div id=\"pw-meter\" class=\"mt-2\"
                     style=\"height:8px;background:#eee;border-radius:4px;overflow:hidden;opacity:0;transition:opacity .2s;\">
                    <div id=\"pw-meter-fill\" style=\"height:100%;width:0%;background:#0d6efd;transition:width .25s\"></div>
                </div>
                <small id=\"pw-meter-text\" class=\"text-muted d-block mt-1\"></small>

                {# reCAPTCHA v3: solo si el campo existe y recibes la clé #}
                {% if registrationForm.captcha is defined and recaptcha_site is defined %}
                    {{ form_widget(registrationForm.captcha) }}
                    {{ form_errors(registrationForm.captcha) }}
                {% endif %}

                <div class=\"d-grid mt-3\">
                    {% if registrationForm.submit is defined %}
                        {{ form_row(registrationForm.submit) }}
                    {% else %}
                        <button type=\"submit\" class=\"btn btn-primary btn-block\">Créer mon compte</button>
                    {% endif %}
                </div>

                {# IMPORTANTE: cierra el formulario sin render_rest:false, así incluye _token y ocultos #}
                {{ form_end(registrationForm) }}

                <p class=\"text-center mt-3\">
                    Déjà inscrit ? <a href=\"{{ path('app_login') }}\">Connectez-vous</a>
                </p>

            </div>
        </div>
    </section>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    {# reCAPTCHA solo si pasas la clé desde el controller #}
    {% if recaptcha_site is defined %}
        <script src=\"https://www.google.com/recaptcha/api.js?render={{ recaptcha_site }}\"></script>
        <script>
            grecaptcha.ready(function () {
                grecaptcha.execute('{{ recaptcha_site }}', {action: 'register'})
                    .then(function (token) {
                        const el = document.querySelector('input[name=\"registration_form[captcha]\"]');
                        if (el) el.value = token;
                    })
                    .catch(function(){ /* evita \"Uncaught (in promise) null\" en dev */ });
            });
        </script>
    {% endif %}

    <script>
        // Mostrar/ocultar contraseña
        function togglePw(btnId, inputSelector) {
            const btn = document.getElementById(btnId);
            const input = document.querySelector(inputSelector);
            if (!btn || !input) return;
            btn.addEventListener('click', function () {
                const isText = input.type === 'text';
                input.type = isText ? 'password' : 'text';
                this.setAttribute('aria-pressed', (!isText).toString());
                this.querySelector('[data-eye]').textContent = isText ? 'Afficher' : 'Masquer';
            });
        }
        togglePw('pw-toggle-1', '[name=\"registration_form[password][first]\"]');
        togglePw('pw-toggle-2', '[name=\"registration_form[password][second]\"]');

        // Barra de complejidad
        (function(){
            const input = document.querySelector('[name=\"registration_form[password][first]\"]');
            const bar   = document.getElementById('pw-meter');
            const fill  = document.getElementById('pw-meter-fill');
            const text  = document.getElementById('pw-meter-text');
            if (!input || !bar || !fill || !text) return;

            function scorePw(pw){
                let s = 0;
                if (pw.length >= 8) s += 25;
                if (/[a-z]/.test(pw) && /[A-Z]/.test(pw)) s += 25;
                if (/\\d/.test(pw)) s += 25;
                if (/[^A-Za-z0-9]/.test(pw)) s += 25;
                return Math.min(s, 100);
            }

            input.addEventListener('input', function(){
                const v = input.value || '';
                if (v.length === 0) { bar.style.opacity = '0'; text.textContent = ''; fill.style.width = '0%'; return; }
                bar.style.opacity = '1';
                const s = scorePw(v);
                fill.style.width = s + '%';
                let label = 'Faible';
                if (s >= 75) label = 'Excellente';
                else if (s >= 50) label = 'Bonne';
                else if (s >= 25) label = 'Moyenne';
                text.textContent = 'Sécurité du mot de passe : ' + label;
            });
        })();
    </script>
{% endblock %}
", "registration/register.html.twig", "C:\\wamp64\\www\\appac\\templates\\registration\\register.html.twig");
    }
}
