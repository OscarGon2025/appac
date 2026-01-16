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

/* account/ad/edit.html.twig */
class __TwigTemplate_38229503ed0a89ffd7f2c5b0a3bed49a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/ad/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/ad/edit.html.twig"));

        // line 2
        $context["navbar_is_transparent"] = false;
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), ["bootstrap_5_layout.html.twig"], true);
        // line 1
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

        yield "Modifier une annonce — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "    <section class=\"container-lg px-4 py-5 pt-lg-5 mt-5\" id=\"classified-edit\" aria-labelledby=\"classified-edit-title\">
        <nav aria-label=\"Fil d’Ariane\" class=\"mb-3\">
            <ol class=\"breadcrumb bg-transparent px-0 mb-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-decoration-none\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_ad_index");
        yield "\" class=\"text-decoration-none\">Mes annonces</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Modifier</li>
            </ol>
        </nav>

        <header class=\"mb-3 d-flex flex-wrap align-items-center justify-content-between gap-2\">
            <div>
                <h1 id=\"classified-edit-title\" class=\"display-6 fw-bold mb-1\">Modifier mon annonce</h1>
                <div class=\"small text-muted\">
                    ";
        // line 21
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 21, $this->source); })()), "updatedAt", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"me-3\"><i class=\"bi bi-clock me-1\"></i>Modifiée le ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 21, $this->source); })()), "updatedAt", [], "any", false, false, false, 21), "d/m/Y H:i"), "html", null, true);
            yield "</span>";
        }
        // line 22
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 22, $this->source); })()), "publishedAt", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span><i class=\"bi bi-calendar-event me-1\"></i>Publiée le ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 22, $this->source); })()), "publishedAt", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
            yield "</span>";
        }
        // line 23
        yield "                </div>
            </div>

            ";
        // line 26
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 26, $this->source); })()), "status", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "                <span class=\"badge
        ";
            // line 28
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 28, $this->source); })()), "status", [], "any", false, false, false, 28), "value", [], "any", false, false, false, 28) == "APPROVED")) {
                yield "text-bg-success
        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 29
(isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 29, $this->source); })()), "status", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29) == "PENDING")) {
                yield "text-bg-warning
        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 30
(isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 30, $this->source); })()), "status", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30) == "REJECTED")) {
                yield "text-bg-danger
        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 31
(isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 31, $this->source); })()), "status", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31) == "ARCHIVED")) {
                yield "text-bg-secondary
        ";
            } else {
                // line 32
                yield "text-bg-light
        ";
            }
            // line 34
            yield "      \">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 34, $this->source); })()), "status", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34), "html", null, true);
            yield "</span>
            ";
        }
        // line 36
        yield "        </header>

        <div class=\"row g-4\">
            <div class=\"col-lg-8\">
                <div class=\"card shadow-sm border-0\">
                    <div class=\"card-header bg-white py-3\">
                        <strong>Informations de l’annonce</strong>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 45
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

                        <div class=\"mb-3\">
                            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "title", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "form-label fw-semibold"]]);
        yield "
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "title", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Titre de votre annonce"]]);
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "form-label fw-semibold"]]);
        yield "
                            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "description", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "rows" => 7, "placeholder" => "Décrivez l’état, dimensions, accessoires, etc."]]);
        yield "
                        </div>

                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "price", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "form-label fw-semibold"]]);
        yield "
                                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "price", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "inputmode" => "decimal"]]);
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "condition", [], "any", false, false, false, 63), 'label', ["label_attr" => ["class" => "form-label fw-semibold"]]);
        yield "
                                ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "condition", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            </div>
                        </div>

                        <div class=\"mt-3\">
                            ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "location", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "form-label fw-semibold"]]);
        yield "
                            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "location", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ville / zone"]]);
        yield "
                        </div>

                        ";
        // line 74
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "photos", [], "any", true, true, false, 74)) {
            // line 75
            yield "                            <hr class=\"my-4\">
                            <h2 class=\"h5 mb-3\">Photos</h2>

                            <div id=\"photos-collection\"
                                 data-prototype=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "photos", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "prototype", [], "any", false, false, false, 79), 'widget'), "html_attr");
            yield "\"
                                 data-index=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "photos", [], "any", false, false, false, 80)), "html", null, true);
            yield "\">
                                ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "photos", [], "any", false, false, false, 81));
            foreach ($context['_seq'] as $context["_key"] => $context["photoForm"]) {
                // line 82
                yield "                                    <div class=\"photo-item border rounded p-3 mb-3 position-relative\">
                                        <div class=\"mb-2\">
                                            ";
                // line 84
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["photoForm"], "imageFile", [], "any", false, false, false, 84), 'row');
                yield "
                                        </div>

                                        <button type=\"button\"
                                                class=\"btn btn-outline-danger btn-sm remove-photo position-absolute\"
                                                style=\"top:.5rem;right:.5rem;\">
                                            <i class=\"bi bi-x-lg\"></i>
                                        </button>

                                        ";
                // line 93
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["photoForm"], "vars", [], "any", false, false, false, 93), "data", [], "any", false, false, false, 93) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["photoForm"], "vars", [], "any", false, false, false, 93), "data", [], "any", false, false, false, 93), "fileName", [], "any", false, false, false, 93))) {
                    // line 94
                    yield "                                            <div class=\"mt-2\">
                                                <img src=\"";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/classifieds/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["photoForm"], "vars", [], "any", false, false, false, 95), "data", [], "any", false, false, false, 95), "fileName", [], "any", false, false, false, 95))), "ad_thumb"), "html", null, true);
                    yield "\"
                                                     alt=\"Photo\" class=\"img-fluid rounded shadow-sm\">
                                            </div>
                                        ";
                }
                // line 99
                yield "                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['photoForm'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            yield "                            </div>

                            <button type=\"button\" id=\"add-photo\" class=\"btn btn-outline-primary\">
                                <i class=\"bi bi-plus-lg me-1\"></i> Ajouter une photo
                            </button>
                        ";
        }
        // line 107
        yield "
                        <div class=\"d-flex flex-wrap gap-2 mt-4\">
                            <button class=\"btn btn-primary px-4\">
                                <i class=\"bi bi-check2-circle me-1\"></i> Enregistrer
                            </button>
                            <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_ad_index");
        yield "\" class=\"btn btn-outline-secondary\">Annuler</a>
                        </div>

                        ";
        // line 115
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"card shadow-sm border-0 mb-3\">
                    <div class=\"card-header bg-white py-3\">
                        <strong>Actions</strong>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"d-grid gap-2\">
                            <form method=\"post\" action=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_ad_archive", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127)]), "html", null, true);
        yield "\"
                                  onsubmit=\"return confirm('Archiver cette annonce ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("ad_archive_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 129, $this->source); })()), "id", [], "any", false, false, false, 129))), "html", null, true);
        yield "\">
                                <button type=\"submit\" class=\"btn btn-outline-secondary\">
                                    <i class=\"bi bi-archive me-1\"></i> Archiver
                                </button>
                            </form>

                            <form method=\"post\" action=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_ad_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135)]), "html", null, true);
        yield "\"
                                  onsubmit=\"return confirm('Supprimer définitivement cette annonce ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("ad_delete_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 137, $this->source); })()), "id", [], "any", false, false, false, 137))), "html", null, true);
        yield "\">
                                <button type=\"submit\" class=\"btn btn-outline-danger\">
                                    <i class=\"bi bi-trash me-1\"></i> Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class=\"card shadow-sm border-0\">
                    <div class=\"card-header bg-white py-3\">
                        <strong>Conseils</strong>
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"mb-0 ps-3\">
                            <li>Un titre clair et une description détaillée améliorent la visibilité.</li>
                            <li>Un prix cohérent accélère les contacts.</li>
                            <li>Précisez la localisation exacte (port, ville).</li>
                            <li>Ajoutez plusieurs photos nettes.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        #classified-edit .card-header { border-bottom: 1px solid rgba(0,0,0,.05); }
        .photo-item { background: #fff; }
        .photo-item .form-label { font-weight: 600; }
        .photo-item .vich-image a { display: none; }
    </style>

    ";
        // line 170
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 171
        yield "        ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
        <script>
            window.addEventListener('DOMContentLoaded', function () {
                const container = document.getElementById('photos-collection');
                const addBtn = document.getElementById('add-photo');
                if (!container || !addBtn) return;

                const prototypeHtml = container.getAttribute('data-prototype');
                if (!prototypeHtml) { console.warn('[Photos] data-prototype manquant.'); return; }

                function addForm() {
                    let index = parseInt(container.getAttribute('data-index') || '0', 10);
                    const html = prototypeHtml.replace(/__name__/g, index);
                    container.setAttribute('data-index', (index + 1).toString());

                    const wrap = document.createElement('div');
                    wrap.className = 'photo-item border rounded p-3 mb-3 position-relative';
                    wrap.innerHTML = html;

                    const remove = document.createElement('button');
                    remove.type = 'button';
                    remove.className = 'btn btn-outline-danger btn-sm remove-photo position-absolute';
                    remove.style.top = '.5rem';
                    remove.style.right = '.5rem';
                    remove.innerHTML = '<i class=\"bi bi-x-lg\"></i>';
                    remove.addEventListener('click', () => wrap.remove());

                    wrap.appendChild(remove);
                    container.appendChild(wrap);
                }

                function bindExistingRemovers() {
                    container.querySelectorAll('.remove-photo').forEach(btn => {
                        btn.addEventListener('click', () => btn.closest('.photo-item')?.remove());
                    });
                }

                addBtn.addEventListener('click', addForm);
                bindExistingRemovers();
            });
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
        return "account/ad/edit.html.twig";
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
        return array (  420 => 171,  397 => 170,  361 => 137,  356 => 135,  347 => 129,  342 => 127,  327 => 115,  321 => 112,  314 => 107,  306 => 101,  299 => 99,  292 => 95,  289 => 94,  287 => 93,  275 => 84,  271 => 82,  267 => 81,  263 => 80,  259 => 79,  253 => 75,  250 => 74,  244 => 70,  240 => 69,  232 => 64,  228 => 63,  222 => 60,  218 => 59,  210 => 54,  206 => 53,  199 => 49,  195 => 48,  189 => 45,  178 => 36,  172 => 34,  168 => 32,  163 => 31,  159 => 30,  155 => 29,  151 => 28,  148 => 27,  146 => 26,  141 => 23,  134 => 22,  128 => 21,  116 => 12,  112 => 11,  107 => 8,  94 => 7,  70 => 3,  59 => 1,  57 => 5,  55 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% set navbar_is_transparent = false %}
{% block title %}Modifier une annonce — {{ ad.title }}{% endblock %}

{% form_theme form 'bootstrap_5_layout.html.twig' %}

{% block body %}
    <section class=\"container-lg px-4 py-5 pt-lg-5 mt-5\" id=\"classified-edit\" aria-labelledby=\"classified-edit-title\">
        <nav aria-label=\"Fil d’Ariane\" class=\"mb-3\">
            <ol class=\"breadcrumb bg-transparent px-0 mb-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\" class=\"text-decoration-none\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"{{ path('account_ad_index') }}\" class=\"text-decoration-none\">Mes annonces</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Modifier</li>
            </ol>
        </nav>

        <header class=\"mb-3 d-flex flex-wrap align-items-center justify-content-between gap-2\">
            <div>
                <h1 id=\"classified-edit-title\" class=\"display-6 fw-bold mb-1\">Modifier mon annonce</h1>
                <div class=\"small text-muted\">
                    {% if ad.updatedAt %}<span class=\"me-3\"><i class=\"bi bi-clock me-1\"></i>Modifiée le {{ ad.updatedAt|date('d/m/Y H:i') }}</span>{% endif %}
                    {% if ad.publishedAt %}<span><i class=\"bi bi-calendar-event me-1\"></i>Publiée le {{ ad.publishedAt|date('d/m/Y') }}</span>{% endif %}
                </div>
            </div>

            {% if ad.status %}
                <span class=\"badge
        {% if ad.status.value == 'APPROVED' %}text-bg-success
        {% elseif ad.status.value == 'PENDING' %}text-bg-warning
        {% elseif ad.status.value == 'REJECTED' %}text-bg-danger
        {% elseif ad.status.value == 'ARCHIVED' %}text-bg-secondary
        {% else %}text-bg-light
        {% endif %}
      \">{{ ad.status.value }}</span>
            {% endif %}
        </header>

        <div class=\"row g-4\">
            <div class=\"col-lg-8\">
                <div class=\"card shadow-sm border-0\">
                    <div class=\"card-header bg-white py-3\">
                        <strong>Informations de l’annonce</strong>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(form, { attr: { class: 'needs-validation', novalidate: 'novalidate' } }) }}

                        <div class=\"mb-3\">
                            {{ form_label(form.title, null, { label_attr: { class: 'form-label fw-semibold' } }) }}
                            {{ form_widget(form.title, { attr: { class: 'form-control form-control-lg', placeholder: 'Titre de votre annonce' } }) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(form.description, null, { label_attr: { class: 'form-label fw-semibold' } }) }}
                            {{ form_widget(form.description, { attr: { class: 'form-control', rows: 7, placeholder: 'Décrivez l’état, dimensions, accessoires, etc.' } }) }}
                        </div>

                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                {{ form_label(form.price, null, { label_attr: { class: 'form-label fw-semibold' } }) }}
                                {{ form_widget(form.price, { attr: { class: 'form-control', inputmode: 'decimal' } }) }}
                            </div>
                            <div class=\"col-md-6\">
                                {{ form_label(form.condition, null, { label_attr: { class: 'form-label fw-semibold' } }) }}
                                {{ form_widget(form.condition, { attr: { class: 'form-select' } }) }}
                            </div>
                        </div>

                        <div class=\"mt-3\">
                            {{ form_label(form.location, null, { label_attr: { class: 'form-label fw-semibold' } }) }}
                            {{ form_widget(form.location, { attr: { class: 'form-control', placeholder: 'Ville / zone' } }) }}
                        </div>

                        {# ====== FOTOS (CollectionType) ====== #}
                        {% if form.photos is defined %}
                            <hr class=\"my-4\">
                            <h2 class=\"h5 mb-3\">Photos</h2>

                            <div id=\"photos-collection\"
                                 data-prototype=\"{{ form_widget(form.photos.vars.prototype)|e('html_attr') }}\"
                                 data-index=\"{{ form.photos|length }}\">
                                {% for photoForm in form.photos %}
                                    <div class=\"photo-item border rounded p-3 mb-3 position-relative\">
                                        <div class=\"mb-2\">
                                            {{ form_row(photoForm.imageFile) }}
                                        </div>

                                        <button type=\"button\"
                                                class=\"btn btn-outline-danger btn-sm remove-photo position-absolute\"
                                                style=\"top:.5rem;right:.5rem;\">
                                            <i class=\"bi bi-x-lg\"></i>
                                        </button>

                                        {% if photoForm.vars.data and photoForm.vars.data.fileName %}
                                            <div class=\"mt-2\">
                                                <img src=\"{{ asset('uploads/classifieds/' ~ photoForm.vars.data.fileName) | imagine_filter('ad_thumb') }}\"
                                                     alt=\"Photo\" class=\"img-fluid rounded shadow-sm\">
                                            </div>
                                        {% endif %}
                                    </div>
                                {% endfor %}
                            </div>

                            <button type=\"button\" id=\"add-photo\" class=\"btn btn-outline-primary\">
                                <i class=\"bi bi-plus-lg me-1\"></i> Ajouter une photo
                            </button>
                        {% endif %}

                        <div class=\"d-flex flex-wrap gap-2 mt-4\">
                            <button class=\"btn btn-primary px-4\">
                                <i class=\"bi bi-check2-circle me-1\"></i> Enregistrer
                            </button>
                            <a href=\"{{ path('account_ad_index') }}\" class=\"btn btn-outline-secondary\">Annuler</a>
                        </div>

                        {{ form_end(form) }}
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"card shadow-sm border-0 mb-3\">
                    <div class=\"card-header bg-white py-3\">
                        <strong>Actions</strong>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"d-grid gap-2\">
                            <form method=\"post\" action=\"{{ path('account_ad_archive', { id: ad.id }) }}\"
                                  onsubmit=\"return confirm('Archiver cette annonce ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('ad_archive_' ~ ad.id) }}\">
                                <button type=\"submit\" class=\"btn btn-outline-secondary\">
                                    <i class=\"bi bi-archive me-1\"></i> Archiver
                                </button>
                            </form>

                            <form method=\"post\" action=\"{{ path('account_ad_delete', { id: ad.id }) }}\"
                                  onsubmit=\"return confirm('Supprimer définitivement cette annonce ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('ad_delete_' ~ ad.id) }}\">
                                <button type=\"submit\" class=\"btn btn-outline-danger\">
                                    <i class=\"bi bi-trash me-1\"></i> Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class=\"card shadow-sm border-0\">
                    <div class=\"card-header bg-white py-3\">
                        <strong>Conseils</strong>
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"mb-0 ps-3\">
                            <li>Un titre clair et une description détaillée améliorent la visibilité.</li>
                            <li>Un prix cohérent accélère les contacts.</li>
                            <li>Précisez la localisation exacte (port, ville).</li>
                            <li>Ajoutez plusieurs photos nettes.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        #classified-edit .card-header { border-bottom: 1px solid rgba(0,0,0,.05); }
        .photo-item { background: #fff; }
        .photo-item .form-label { font-weight: 600; }
        .photo-item .vich-image a { display: none; }
    </style>

    {% block javascripts %}
        {{ parent() }}
        <script>
            window.addEventListener('DOMContentLoaded', function () {
                const container = document.getElementById('photos-collection');
                const addBtn = document.getElementById('add-photo');
                if (!container || !addBtn) return;

                const prototypeHtml = container.getAttribute('data-prototype');
                if (!prototypeHtml) { console.warn('[Photos] data-prototype manquant.'); return; }

                function addForm() {
                    let index = parseInt(container.getAttribute('data-index') || '0', 10);
                    const html = prototypeHtml.replace(/__name__/g, index);
                    container.setAttribute('data-index', (index + 1).toString());

                    const wrap = document.createElement('div');
                    wrap.className = 'photo-item border rounded p-3 mb-3 position-relative';
                    wrap.innerHTML = html;

                    const remove = document.createElement('button');
                    remove.type = 'button';
                    remove.className = 'btn btn-outline-danger btn-sm remove-photo position-absolute';
                    remove.style.top = '.5rem';
                    remove.style.right = '.5rem';
                    remove.innerHTML = '<i class=\"bi bi-x-lg\"></i>';
                    remove.addEventListener('click', () => wrap.remove());

                    wrap.appendChild(remove);
                    container.appendChild(wrap);
                }

                function bindExistingRemovers() {
                    container.querySelectorAll('.remove-photo').forEach(btn => {
                        btn.addEventListener('click', () => btn.closest('.photo-item')?.remove());
                    });
                }

                addBtn.addEventListener('click', addForm);
                bindExistingRemovers();
            });
        </script>
    {% endblock %}
{% endblock %}
", "account/ad/edit.html.twig", "C:\\wamp64\\www\\appac\\templates\\account\\ad\\edit.html.twig");
    }
}
