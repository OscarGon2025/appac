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

/* account/ad/new.html.twig */
class __TwigTemplate_aacfcb28ac23959f157cd308132a738d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/ad/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/ad/new.html.twig"));

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

        yield "Déposer une annonce";
        
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
        yield "    <section class=\"container-lg px-4 py-5 pt-lg-5 mt-5\" id=\"classified-new\" aria-labelledby=\"classified-new-title\">
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
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Déposer</li>
            </ol>
        </nav>

        <header class=\"mb-4\">
            <h1 id=\"classified-new-title\" class=\"display-6 fw-bold mb-1\">Déposer une nouvelle annonce</h1>
            <p class=\"text-muted mb-0\">Remplissez les informations principales. Votre annonce sera publiée après validation.</p>
        </header>

        <div class=\"row g-4\">
            <div class=\"col-lg-8\">
                <div class=\"card shadow-sm border-0\">
                    <div class=\"card-header bg-white py-3\">
                        <strong>Informations de l’annonce</strong>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

                        <div class=\"mb-3\">
                            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "form-label fw-semibold"]]);
        yield "
                            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Ex. Annexe rigide 2,40 m quasi neuve"]]);
        yield "
                            <div class=\"form-text\">Un titre clair et précis attire plus de visiteurs.</div>
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "form-label fw-semibold"]]);
        yield "
                            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "rows" => 7, "placeholder" => "État, dimensions, accessoires inclus, historique, etc."]]);
        yield "
                        </div>

                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "price", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label fw-semibold"]]);
        yield "
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "price", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "inputmode" => "decimal", "placeholder" => "Ex. 250"]]);
        yield "
                                <div class=\"form-text\">Laissez vide si vous souhaitez mettre « À discuter ».</div>
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "condition", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label fw-semibold"]]);
        yield "
                                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "condition", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            </div>
                        </div>

                        <div class=\"mt-3\">
                            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "location", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "form-label fw-semibold"]]);
        yield "
                            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "location", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex. Arzal, Camoël, La Roche-Bernard…"]]);
        yield "
                        </div>

                        ";
        // line 60
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "photos", [], "any", true, true, false, 60)) {
            // line 61
            yield "                            <hr class=\"my-4\">
                            <h2 class=\"h5 mb-3\">Photos</h2>

                            <div id=\"photos-collection\"
                                 data-prototype=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "photos", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "prototype", [], "any", false, false, false, 65), 'widget'), "html_attr");
            yield "\"
                                 data-index=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "photos", [], "any", false, false, false, 66)), "html", null, true);
            yield "\">
                                ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "photos", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["photoForm"]) {
                // line 68
                yield "                                    <div class=\"photo-item border rounded p-3 mb-3 position-relative\">
                                        <div class=\"mb-2\">
                                            ";
                // line 70
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["photoForm"], "imageFile", [], "any", false, false, false, 70), 'row');
                yield "
                                        </div>

                                        <button type=\"button\" class=\"btn btn-outline-danger btn-sm remove-photo position-absolute\"
                                                style=\"top:.5rem;right:.5rem;\">
                                            <i class=\"bi bi-x-lg\"></i>
                                        </button>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['photoForm'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "                            </div>

                            <button type=\"button\" id=\"add-photo\" class=\"btn btn-outline-primary\">
                                <i class=\"bi bi-plus-lg me-1\"></i> Ajouter une photo
                            </button>
                        ";
        }
        // line 85
        yield "
                        <div class=\"d-flex gap-2 mt-4\">
                            <button class=\"btn btn-primary px-4\">
                                <i class=\"bi bi-check2-circle me-1\"></i> Envoyer
                            </button>
                            <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_ad_index");
        yield "\" class=\"btn btn-outline-secondary\">Annuler</a>
                        </div>

                        ";
        // line 93
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"card shadow-sm border-0\">
                    <div class=\"card-header bg-white py-3\">
                        <strong>Conseils utiles</strong>
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"mb-0 ps-3\">
                            <li>Ajoutez des détails concrets : année, état, accessoires, facture.</li>
                            <li>Indiquez un prix réaliste en € pour accélérer la vente.</li>
                            <li>Précisez la localisation pour faciliter la remise en main propre.</li>
                            <li>Des photos nettes augmentent les contacts.</li>
                        </ul>
                        <hr>
                        <p class=\"small text-muted mb-0\">
                            Après envoi, votre annonce passe en <em>modération</em>.
                            Vous pourrez l’éditer depuis <strong>Mon compte &gt; Mes annonces</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        #classified-new .card-header { border-bottom: 1px solid rgba(0,0,0,.05); }
        .photo-item { background: #fff; }
        .photo-item .form-label { font-weight: 600; }
        .photo-item .vich-image a { display: none; }
    </style>

    ";
        // line 128
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

        // line 129
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

                addBtn.addEventListener('click', addForm);
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
        return "account/ad/new.html.twig";
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
        return array (  320 => 129,  297 => 128,  259 => 93,  253 => 90,  246 => 85,  238 => 79,  223 => 70,  219 => 68,  215 => 67,  211 => 66,  207 => 65,  201 => 61,  198 => 60,  192 => 56,  188 => 55,  180 => 50,  176 => 49,  169 => 45,  165 => 44,  157 => 39,  153 => 38,  145 => 33,  141 => 32,  135 => 29,  115 => 12,  111 => 11,  106 => 8,  93 => 7,  70 => 3,  59 => 1,  57 => 5,  55 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% set navbar_is_transparent = false %}
{% block title %}Déposer une annonce{% endblock %}

{% form_theme form 'bootstrap_5_layout.html.twig' %}

{% block body %}
    <section class=\"container-lg px-4 py-5 pt-lg-5 mt-5\" id=\"classified-new\" aria-labelledby=\"classified-new-title\">
        <nav aria-label=\"Fil d’Ariane\" class=\"mb-3\">
            <ol class=\"breadcrumb bg-transparent px-0 mb-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\" class=\"text-decoration-none\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"{{ path('account_ad_index') }}\" class=\"text-decoration-none\">Mes annonces</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Déposer</li>
            </ol>
        </nav>

        <header class=\"mb-4\">
            <h1 id=\"classified-new-title\" class=\"display-6 fw-bold mb-1\">Déposer une nouvelle annonce</h1>
            <p class=\"text-muted mb-0\">Remplissez les informations principales. Votre annonce sera publiée après validation.</p>
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
                            {{ form_widget(form.title, { attr: { class: 'form-control form-control-lg', placeholder: 'Ex. Annexe rigide 2,40 m quasi neuve' } }) }}
                            <div class=\"form-text\">Un titre clair et précis attire plus de visiteurs.</div>
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(form.description, null, { label_attr: { class: 'form-label fw-semibold' } }) }}
                            {{ form_widget(form.description, { attr: { class: 'form-control', rows: 7, placeholder: 'État, dimensions, accessoires inclus, historique, etc.' } }) }}
                        </div>

                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                {{ form_label(form.price, null, { label_attr: { class: 'form-label fw-semibold' } }) }}
                                {{ form_widget(form.price, { attr: { class: 'form-control', inputmode: 'decimal', placeholder: 'Ex. 250' } }) }}
                                <div class=\"form-text\">Laissez vide si vous souhaitez mettre « À discuter ».</div>
                            </div>
                            <div class=\"col-md-6\">
                                {{ form_label(form.condition, null, { label_attr: { class: 'form-label fw-semibold' } }) }}
                                {{ form_widget(form.condition, { attr: { class: 'form-select' } }) }}
                            </div>
                        </div>

                        <div class=\"mt-3\">
                            {{ form_label(form.location, null, { label_attr: { class: 'form-label fw-semibold' } }) }}
                            {{ form_widget(form.location, { attr: { class: 'form-control', placeholder: 'Ex. Arzal, Camoël, La Roche-Bernard…' } }) }}
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

                                        <button type=\"button\" class=\"btn btn-outline-danger btn-sm remove-photo position-absolute\"
                                                style=\"top:.5rem;right:.5rem;\">
                                            <i class=\"bi bi-x-lg\"></i>
                                        </button>
                                    </div>
                                {% endfor %}
                            </div>

                            <button type=\"button\" id=\"add-photo\" class=\"btn btn-outline-primary\">
                                <i class=\"bi bi-plus-lg me-1\"></i> Ajouter une photo
                            </button>
                        {% endif %}

                        <div class=\"d-flex gap-2 mt-4\">
                            <button class=\"btn btn-primary px-4\">
                                <i class=\"bi bi-check2-circle me-1\"></i> Envoyer
                            </button>
                            <a href=\"{{ path('account_ad_index') }}\" class=\"btn btn-outline-secondary\">Annuler</a>
                        </div>

                        {{ form_end(form) }}
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"card shadow-sm border-0\">
                    <div class=\"card-header bg-white py-3\">
                        <strong>Conseils utiles</strong>
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"mb-0 ps-3\">
                            <li>Ajoutez des détails concrets : année, état, accessoires, facture.</li>
                            <li>Indiquez un prix réaliste en € pour accélérer la vente.</li>
                            <li>Précisez la localisation pour faciliter la remise en main propre.</li>
                            <li>Des photos nettes augmentent les contacts.</li>
                        </ul>
                        <hr>
                        <p class=\"small text-muted mb-0\">
                            Après envoi, votre annonce passe en <em>modération</em>.
                            Vous pourrez l’éditer depuis <strong>Mon compte &gt; Mes annonces</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        #classified-new .card-header { border-bottom: 1px solid rgba(0,0,0,.05); }
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

                addBtn.addEventListener('click', addForm);
            });
        </script>
    {% endblock %}
{% endblock %}
", "account/ad/new.html.twig", "C:\\wamp64\\www\\appac\\templates\\account\\ad\\new.html.twig");
    }
}
