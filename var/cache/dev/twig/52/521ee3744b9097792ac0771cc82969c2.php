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

/* account/index.html.twig */
class __TwigTemplate_8e5457fe9419f66a240891f9bf181871 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        // line 4
        $context["navbar_is_transparent"] = false;
        // line 2
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Mon compte";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <section id=\"account\" class=\"section-padding bg-white px-4 py-5 pt-lg-5 mt-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h1 class=\"display-5 fw-bold mb-4\">Bienvenue dans votre espace membre</h1>
                </div>
            </div>

            <div class=\"row gx-4 gy-4\">
                ";
        // line 20
        yield "                <div class=\"col-md-6\">
                    <div class=\"card shadow-sm h-100 border-0\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title d-flex align-items-center gap-2 mb-3\">
                                <i class=\"bi bi-person-circle\"></i> Mes informations
                            </h5>

                            <dl class=\"row mb-0\">
                                <dt class=\"col-sm-4\">Email</dt>
                                <dd class=\"col-sm-8\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "email", [], "any", false, false, false, 29), "html", null, true);
        yield "</dd>

                                ";
        // line 31
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "firstname", [], "any", false, false, false, 31))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "                                    <dt class=\"col-sm-4\">Prénom</dt>
                                    <dd class=\"col-sm-8\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "firstname", [], "any", false, false, false, 33), "html", null, true);
            yield "</dd>
                                ";
        }
        // line 35
        yield "
                                ";
        // line 36
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "lastname", [], "any", false, false, false, 36))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                                    <dt class=\"col-sm-4\">Nom</dt>
                                    <dd class=\"col-sm-8\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "lastname", [], "any", false, false, false, 38), "html", null, true);
            yield "</dd>
                                ";
        }
        // line 40
        yield "                            </dl>
                        </div>
                    </div>
                </div>

                ";
        // line 48
        yield "                <div class=\"col-md-6\">
                    <div class=\"card shadow-sm h-100 border-0\">
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title d-flex align-items-center gap-2 mb-3\">
                                <i class=\"bi bi-lightning-charge\"></i> Mes actions
                            </h5>

                            <div class=\"d-grid gap-2\">

                                ";
        // line 58
        yield "                                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_ad_index");
        yield "\" class=\"btn btn-outline-primary\">
                                    <i class=\"bi bi-megaphone me-1\"></i> Mes annonces
                                </a>
                                <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_ad_new");
        yield "\" class=\"btn btn-success\">
                                    <i class=\"bi bi-plus-lg me-1\"></i> Déposer une annonce
                                </a>

                                <hr class=\"my-2\">

                                ";
        // line 68
        yield "                                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_events_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                    <i class=\"bi bi-calendar3 me-1\"></i> Voir mes événements
                                </a>
                                <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_events_my_outings");
        yield "\" class=\"btn btn-info text-white\">
                                    <i class=\"bi bi-flag me-1\"></i> Mes sorties inscrites
                                </a>


                                <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_events_new");
        yield "\" class=\"btn btn-warning text-white\">
                                    <i class=\"bi bi-plus-circle me-1\"></i> Créer un événement
                                </a>

                                <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_edit");
        yield "\" class=\"btn btn-warning px-4 py-2\">
                                    ✏️ Modifier mon profil
                                </a>


                                <hr class=\"my-2\">


                                ";
        // line 88
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 89
            yield "                                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            yield "\" class=\"btn btn-dark\">
                                        <i class=\"bi bi-speedometer2 me-1\"></i> Accéder au back-office
                                    </a>
                                    <hr class=\"my-2\">
                                ";
        }
        // line 94
        yield "
                                ";
        // line 96
        yield "
                                <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn btn-outline-danger\">
                                    <i class=\"bi bi-box-arrow-right me-1\"></i> Se déconnecter
                                </a>
                                ";
        // line 107
        yield "
                                ";
        // line 109
        yield "                                <form method=\"post\"
                                      action=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_delete");
        yield "\"
                                      class=\"d-grid\"
                                      onsubmit=\"return confirm('Cette action est irréversible. Êtes-vous sûr de vouloir supprimer votre compte ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_account" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113))), "html", null, true);
        yield "\">
                                    <button type=\"submit\" class=\"btn btn-danger\">
                                        <i class=\"bi bi-trash me-1\"></i> Supprimer mon compte
                                    </button>
                                    <small class=\"text-muted mt-1\">Action irréversible</small>
                                </form>

                            </div>

                            <div class=\"mt-auto\"></div>
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
        return "account/index.html.twig";
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
        return array (  255 => 113,  249 => 110,  246 => 109,  243 => 107,  237 => 97,  234 => 96,  231 => 94,  222 => 89,  220 => 88,  209 => 80,  202 => 76,  194 => 71,  187 => 68,  178 => 61,  171 => 58,  160 => 48,  153 => 40,  148 => 38,  145 => 37,  143 => 36,  140 => 35,  135 => 33,  132 => 32,  130 => 31,  125 => 29,  114 => 20,  103 => 8,  90 => 7,  67 => 5,  56 => 2,  54 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/account/index.html.twig #}
{% extends 'base.html.twig' %}

{% set navbar_is_transparent = false %}
{% block title %}Mon compte{% endblock %}

{% block body %}
    <section id=\"account\" class=\"section-padding bg-white px-4 py-5 pt-lg-5 mt-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h1 class=\"display-5 fw-bold mb-4\">Bienvenue dans votre espace membre</h1>
                </div>
            </div>

            <div class=\"row gx-4 gy-4\">
                {# ======================
         Mes informations
         ====================== #}
                <div class=\"col-md-6\">
                    <div class=\"card shadow-sm h-100 border-0\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title d-flex align-items-center gap-2 mb-3\">
                                <i class=\"bi bi-person-circle\"></i> Mes informations
                            </h5>

                            <dl class=\"row mb-0\">
                                <dt class=\"col-sm-4\">Email</dt>
                                <dd class=\"col-sm-8\">{{ app.user.email }}</dd>

                                {% if app.user.firstname is not empty %}
                                    <dt class=\"col-sm-4\">Prénom</dt>
                                    <dd class=\"col-sm-8\">{{ app.user.firstname }}</dd>
                                {% endif %}

                                {% if app.user.lastname is not empty %}
                                    <dt class=\"col-sm-4\">Nom</dt>
                                    <dd class=\"col-sm-8\">{{ app.user.lastname }}</dd>
                                {% endif %}
                            </dl>
                        </div>
                    </div>
                </div>

                {# ======================
         Mes actions
         ====================== #}
                <div class=\"col-md-6\">
                    <div class=\"card shadow-sm h-100 border-0\">
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title d-flex align-items-center gap-2 mb-3\">
                                <i class=\"bi bi-lightning-charge\"></i> Mes actions
                            </h5>

                            <div class=\"d-grid gap-2\">

                                {# --- Annonces --- #}
                                <a href=\"{{ path('account_ad_index') }}\" class=\"btn btn-outline-primary\">
                                    <i class=\"bi bi-megaphone me-1\"></i> Mes annonces
                                </a>
                                <a href=\"{{ path('account_ad_new') }}\" class=\"btn btn-success\">
                                    <i class=\"bi bi-plus-lg me-1\"></i> Déposer une annonce
                                </a>

                                <hr class=\"my-2\">

                                {# --- Événements (espace membre) --- #}
                                <a href=\"{{ path('account_events_index') }}\" class=\"btn btn-outline-secondary\">
                                    <i class=\"bi bi-calendar3 me-1\"></i> Voir mes événements
                                </a>
                                <a href=\"{{ path('account_events_my_outings') }}\" class=\"btn btn-info text-white\">
                                    <i class=\"bi bi-flag me-1\"></i> Mes sorties inscrites
                                </a>


                                <a href=\"{{ path('account_events_new') }}\" class=\"btn btn-warning text-white\">
                                    <i class=\"bi bi-plus-circle me-1\"></i> Créer un événement
                                </a>

                                <a href=\"{{ path('app_account_edit') }}\" class=\"btn btn-warning px-4 py-2\">
                                    ✏️ Modifier mon profil
                                </a>


                                <hr class=\"my-2\">


                                {% if is_granted('ROLE_ADMIN') %}
                                    <a href=\"{{ path('admin') }}\" class=\"btn btn-dark\">
                                        <i class=\"bi bi-speedometer2 me-1\"></i> Accéder au back-office
                                    </a>
                                    <hr class=\"my-2\">
                                {% endif %}

                                {# Déconnexion (ajuste si tu usas logout en POST) #}

                                <a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-danger\">
                                    <i class=\"bi bi-box-arrow-right me-1\"></i> Se déconnecter
                                </a>
                                {# Si tu logout es POST:
              <form method=\"post\" action=\"{{ path('app_logout') }}\" class=\"d-grid\">
                <button class=\"btn btn-outline-danger\" type=\"submit\">
                  <i class=\"bi bi-box-arrow-right me-1\"></i> Se déconnecter
                </button>
              </form>
                                #}

                                {# --- Supprimer mon compte (POST + CSRF + confirm) --- #}
                                <form method=\"post\"
                                      action=\"{{ path('app_account_delete') }}\"
                                      class=\"d-grid\"
                                      onsubmit=\"return confirm('Cette action est irréversible. Êtes-vous sûr de vouloir supprimer votre compte ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_account' ~ app.user.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-danger\">
                                        <i class=\"bi bi-trash me-1\"></i> Supprimer mon compte
                                    </button>
                                    <small class=\"text-muted mt-1\">Action irréversible</small>
                                </form>

                            </div>

                            <div class=\"mt-auto\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "account/index.html.twig", "C:\\wamp64\\www\\appac\\templates\\account\\index.html.twig");
    }
}
