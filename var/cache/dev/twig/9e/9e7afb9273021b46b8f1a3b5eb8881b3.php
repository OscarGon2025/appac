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
class __TwigTemplate_53ace9edcefac136fcf9ba67b7852914 extends Template
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

        // line 4
        $context["navbar_is_transparent"] = false;
        // line 2
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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

        yield "Mon compte";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 29), "email", [], "any", false, false, false, 29), "html", null, true);
        yield "</dd>

                                ";
        // line 31
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 31), "firstname", [], "any", false, false, false, 31))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "                                    <dt class=\"col-sm-4\">Prénom</dt>
                                    <dd class=\"col-sm-8\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 33), "firstname", [], "any", false, false, false, 33), "html", null, true);
            yield "</dd>
                                ";
        }
        // line 35
        yield "
                                ";
        // line 36
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 36), "lastname", [], "any", false, false, false, 36))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                                    <dt class=\"col-sm-4\">Nom</dt>
                                    <dd class=\"col-sm-8\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 38), "lastname", [], "any", false, false, false, 38), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_account" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113))), "html", null, true);
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
        return array (  240 => 113,  234 => 110,  231 => 109,  228 => 107,  222 => 97,  219 => 96,  216 => 94,  207 => 89,  205 => 88,  194 => 80,  187 => 76,  179 => 71,  172 => 68,  163 => 61,  156 => 58,  145 => 48,  138 => 40,  133 => 38,  130 => 37,  128 => 36,  125 => 35,  120 => 33,  117 => 32,  115 => 31,  110 => 29,  99 => 20,  88 => 8,  78 => 7,  61 => 5,  53 => 2,  51 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "account/index.html.twig", "C:\\wamp64\\www\\appac\\templates\\account\\index.html.twig");
    }
}
