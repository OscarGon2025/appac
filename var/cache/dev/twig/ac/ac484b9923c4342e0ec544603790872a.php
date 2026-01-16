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

/* security/login.html.twig */
class __TwigTemplate_3d8f6fe6910dcedc8edb0833d5975af1 extends Template
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
        // line 74
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 75
        $context["navbar_is_transparent"] = true;
        // line 76
        $context["body_class"] = "page-login";
        // line 74
        $this->parent = $this->load("base.html.twig", 74);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 77
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

        yield "Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
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

        // line 80
        yield "    <section class=\"login-hero d-flex align-items-center\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-5 col-md-7\">

                    ";
        // line 86
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "flashes", [], "any", false, false, false, 86));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 87
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 88
                yield "                            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " mb-4\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "
                    <div class=\"login-card p-4 p-md-5 rounded-4 shadow-lg\">
                        <div class=\"text-center mb-4\">
                            <h1 class=\"h3 m-0\">Connexion</h1>
                        </div>

                        ";
        // line 97
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 97, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "                            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 98, $this->source); })()), "messageKey", [], "any", false, false, false, 98), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 98, $this->source); })()), "messageData", [], "any", false, false, false, 98), "security"), "html", null, true);
            yield "</div>
                        ";
        }
        // line 100
        yield "
                        ";
        // line 101
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 102
            yield "                            <div class=\"alert alert-info mb-4\">
                                Vous êtes connecté en tant que <strong>";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "userIdentifier", [], "any", false, false, false, 103), "html", null, true);
            yield "</strong>.
                                <a class=\"alert-link\" href=\"";
            // line 104
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Se déconnecter</a>
                            </div>
                        ";
        }
        // line 107
        yield "
                        <form action=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\" novalidate>
                            <div class=\"mb-3\">
                                <label for=\"login_email\" class=\"form-label\">Email</label>
                                <input type=\"email\" id=\"login_email\" name=\"_email\" class=\"form-control\"
                                       placeholder=\"vous@exemple.fr\" value=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 112, $this->source); })()), "html", null, true);
        yield "\" autocomplete=\"email\" required>
                            </div>

                            <div class=\"mb-3\">
                                <label for=\"login_password\" class=\"form-label\">Mot de passe</label>
                                <input type=\"password\" id=\"login_password\" name=\"_password\" class=\"form-control\"
                                       placeholder=\"••••••••\" autocomplete=\"current-password\" required>
                            </div>

                            <div class=\"form-check mb-3\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked>
                                <label class=\"form-check-label\" for=\"remember_me\">Se souvenir de moi</label>
                            </div>

                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                            <div class=\"d-grid gap-2\">
                                <button type=\"submit\" class=\"btn custom-btn\">Se connecter</button>
                            </div>
                        </form>
                    </div>

                    <p class=\"text-center text-white-50 mt-4\">
                        Retour à <a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#actus\" class=\"link-light\">l’accueil</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 143
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

        // line 144
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 145
        if (array_key_exists("google_recaptcha_site", $context)) {
            // line 146
            yield "        <script src=\"https://www.google.com/recaptcha/api.js?render=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["google_recaptcha_site"]) || array_key_exists("google_recaptcha_site", $context) ? $context["google_recaptcha_site"] : (function () { throw new RuntimeError('Variable "google_recaptcha_site" does not exist.', 146, $this->source); })()), "html", null, true);
            yield "\"></script>
        <script>
            grecaptcha.ready(function () {
                document.querySelectorAll('form').forEach(function (form) {
                    form.addEventListener('submit', function(e) {
                        grecaptcha.execute('";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["google_recaptcha_site"]) || array_key_exists("google_recaptcha_site", $context) ? $context["google_recaptcha_site"] : (function () { throw new RuntimeError('Variable "google_recaptcha_site" does not exist.', 151, $this->source); })()), "html", null, true);
            yield "', {action: 'login'}).then(function(token) {
                            let input = document.createElement('input');
                            input.type = 'hidden';
                            input.name = 'g-recaptcha-response';
                            input.value = token;
                            form.appendChild(input);
                            form.submit();
                        });
                        e.preventDefault();
                    });
                });
            });
        </script>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  260 => 151,  251 => 146,  249 => 145,  244 => 144,  231 => 143,  213 => 135,  201 => 126,  184 => 112,  177 => 108,  174 => 107,  168 => 104,  164 => 103,  161 => 102,  159 => 101,  156 => 100,  150 => 98,  148 => 97,  140 => 91,  134 => 90,  123 => 88,  118 => 87,  113 => 86,  106 => 80,  93 => 79,  70 => 77,  59 => 74,  57 => 76,  55 => 75,  42 => 74,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{#{% extends 'base.html.twig' %}#}
{#{% set body_class = 'page-login' %}#}
{#{% block title %}Connexion{% endblock %}#}

{#{% block body %}#}

{#    <section class=\"login-hero d-flex align-items-center\">#}
{#        <div class=\"container\">#}
{#            <div class=\"row justify-content-center\">#}
{#                <div class=\"col-lg-5 col-md-7\">#}

{#                    {% for label, messages in app.flashes %}#}
{#                        {% for message in messages %}#}
{#                            <div class=\"alert alert-{{ label }} mb-4\">{{ message }}</div>#}
{#                        {% endfor %}#}
{#                    {% endfor %}#}

{#                    <div class=\"login-card p-4 p-md-5 rounded-4 shadow-lg\">#}
{#                        <div class=\"text-center mb-4\">#}
{#                            <h1 class=\"h3 m-0\">Connexion</h1>#}
{#                        </div>#}

{#                        {% if error %}#}
{#                            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>#}
{#                        {% endif %}#}

{#                        {% if app.user %}#}
{#                            <div class=\"alert alert-info mb-4\">#}
{#                                Vous êtes connecté en tant que <strong>{{ app.user.userIdentifier }}</strong>.#}
{#                                <a class=\"alert-link\" href=\"{{ path('app_logout') }}\">Se déconnecter</a>#}
{#                            </div>#}
{#                        {% endif %}#}

{#                        <form action=\"{{ path('app_login') }}\" method=\"post\" novalidate>#}
{#                            <div class=\"mb-3\">#}
{#                                <label for=\"login_email\" class=\"form-label\">Email</label>#}
{#                                <input type=\"email\" id=\"login_email\" name=\"_email\" class=\"form-control\"#}
{#                                       placeholder=\"vous@exemple.fr\" value=\"{{ last_username }}\" autocomplete=\"email\" required>#}
{#                            </div>#}

{#                            <div class=\"mb-3\">#}
{#                                <label for=\"login_password\" class=\"form-label\">Mot de passe</label>#}
{#                                <input type=\"password\" id=\"login_password\" name=\"_password\" class=\"form-control\"#}
{#                                       placeholder=\"••••••••\" autocomplete=\"current-password\" required>#}
{#                            </div>#}

{#                            <div class=\"form-check mb-3\">#}
{#                                <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked>#}
{#                                <label class=\"form-check-label\" for=\"remember_me\">Se souvenir de moi</label>#}
{#                            </div>#}

{#                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">#}

{#                            #}{##}{# Champ reCAPTCHA v3 #}
{#                            {{ form_row(loginForm.captcha) }}#}

{#                            <div class=\"d-grid gap-2\">#}
{#                                <button type=\"submit\" class=\"btn custom-btn\">Se connecter</button>#}
{#                            </div>#}
{#                        </form>#}
{#                    </div>#}

{#                    <p class=\"text-center text-white-50 mt-4\">#}
{#                        Retour à <a href=\"{{ path('app_home') }}#actus\" class=\"link-light\">l’accueil</a>#}
{#                    </p>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}
{#    </section>#}

{#{% endblock %}#}

{% extends 'base.html.twig' %}
{% set navbar_is_transparent = true %}
{% set body_class = 'page-login' %}
{% block title %}Connexion{% endblock %}

{% block body %}
    <section class=\"login-hero d-flex align-items-center\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-5 col-md-7\">

                    {# Messages flash #}
                    {% for label, messages in app.flashes %}
                        {% for message in messages %}
                            <div class=\"alert alert-{{ label }} mb-4\">{{ message }}</div>
                        {% endfor %}
                    {% endfor %}

                    <div class=\"login-card p-4 p-md-5 rounded-4 shadow-lg\">
                        <div class=\"text-center mb-4\">
                            <h1 class=\"h3 m-0\">Connexion</h1>
                        </div>

                        {% if error %}
                            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                        {% endif %}

                        {% if app.user %}
                            <div class=\"alert alert-info mb-4\">
                                Vous êtes connecté en tant que <strong>{{ app.user.userIdentifier }}</strong>.
                                <a class=\"alert-link\" href=\"{{ path('app_logout') }}\">Se déconnecter</a>
                            </div>
                        {% endif %}

                        <form action=\"{{ path('app_login') }}\" method=\"post\" novalidate>
                            <div class=\"mb-3\">
                                <label for=\"login_email\" class=\"form-label\">Email</label>
                                <input type=\"email\" id=\"login_email\" name=\"_email\" class=\"form-control\"
                                       placeholder=\"vous@exemple.fr\" value=\"{{ last_username }}\" autocomplete=\"email\" required>
                            </div>

                            <div class=\"mb-3\">
                                <label for=\"login_password\" class=\"form-label\">Mot de passe</label>
                                <input type=\"password\" id=\"login_password\" name=\"_password\" class=\"form-control\"
                                       placeholder=\"••••••••\" autocomplete=\"current-password\" required>
                            </div>

                            <div class=\"form-check mb-3\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked>
                                <label class=\"form-check-label\" for=\"remember_me\">Se souvenir de moi</label>
                            </div>

                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                            <div class=\"d-grid gap-2\">
                                <button type=\"submit\" class=\"btn custom-btn\">Se connecter</button>
                            </div>
                        </form>
                    </div>

                    <p class=\"text-center text-white-50 mt-4\">
                        Retour à <a href=\"{{ path('app_home') }}#actus\" class=\"link-light\">l’accueil</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% if google_recaptcha_site is defined %}
        <script src=\"https://www.google.com/recaptcha/api.js?render={{ google_recaptcha_site }}\"></script>
        <script>
            grecaptcha.ready(function () {
                document.querySelectorAll('form').forEach(function (form) {
                    form.addEventListener('submit', function(e) {
                        grecaptcha.execute('{{ google_recaptcha_site }}', {action: 'login'}).then(function(token) {
                            let input = document.createElement('input');
                            input.type = 'hidden';
                            input.name = 'g-recaptcha-response';
                            input.value = token;
                            form.appendChild(input);
                            form.submit();
                        });
                        e.preventDefault();
                    });
                });
            });
        </script>
    {% endif %}
{% endblock %}
", "security/login.html.twig", "C:\\wamp64\\www\\appac\\templates\\security\\login.html.twig");
    }
}
