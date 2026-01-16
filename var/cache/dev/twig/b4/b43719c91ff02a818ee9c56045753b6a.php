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

/* photo/upload.html.twig */
class __TwigTemplate_c6b6f03d30ffde502ad06b52079fe16e extends Template
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
        // line 27
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photo/upload.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photo/upload.html.twig"));

        $this->parent = $this->load("base.html.twig", 27);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
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

        yield "Ajouter une photo";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
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

        // line 32
        yield "    <section class=\"container my-5\">
        <h1 class=\"mb-4 text-center\">Ajouter une photo</h1>

        ";
        // line 36
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "flashes", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 37
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 38
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " mb-3\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "
        ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "

        <div class=\"mb-3\">
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "imageFile", [], "any", false, false, false, 45), 'label');
        yield "
            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "imageFile", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "imageFile", [], "any", false, false, false, 47), 'errors');
        yield "
        </div>

        <div class=\"mb-3\">
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "title", [], "any", false, false, false, 51), 'label');
        yield "
            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "title", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre de la photo"]]);
        yield "
            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "title", [], "any", false, false, false, 53), 'errors');
        yield "
        </div>

        <div class=\"mb-3\">
            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "description", [], "any", false, false, false, 57), 'label');
        yield "
            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "description", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "rows" => 3, "placeholder" => "Description ou légende"]]);
        yield "
            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "description", [], "any", false, false, false, 59), 'errors');
        yield "
        </div>

        <div class=\"mb-3\">
            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "visibility", [], "any", false, false, false, 63), 'label');
        yield "
            <div>
                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "visibility", [], "any", false, false, false, 65), 'widget');
        yield "
            </div>
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "visibility", [], "any", false, false, false, 67), 'errors');
        yield "
        </div>

        <div class=\"d-grid mt-3\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Ajouter la photo</button>
        </div>

        ";
        // line 74
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_end');
        yield "
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
        return "photo/upload.html.twig";
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
        return array (  206 => 74,  196 => 67,  191 => 65,  186 => 63,  179 => 59,  175 => 58,  171 => 57,  164 => 53,  160 => 52,  156 => 51,  149 => 47,  145 => 46,  141 => 45,  135 => 42,  132 => 41,  126 => 40,  115 => 38,  110 => 37,  105 => 36,  100 => 32,  87 => 31,  64 => 29,  41 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#{% extends 'base.html.twig' %}#}

{#{% block title %}Ajouter une photo{% endblock %}#}

{#{% block body %}#}
{#    <section class=\"container py-5\">#}
{#        <h1>Ajouter une photo</h1>#}

{#        {% for label, messages in app.flashes %}#}
{#            {% for message in messages %}#}
{#                <div class=\"alert alert-{{ label }}\">{{ message }}</div>#}
{#            {% endfor %}#}
{#        {% endfor %}#}

{#        {{ form_start(form) }}#}
{#        {{ form_row(form.imageFile) }}#}
{#        {{ form_row(form.title) }}#}
{#        {{ form_row(form.description) }}#}
{#        {{ form_row(form.visibility) }}#}

{#        <button class=\"btn btn-success mt-3\">Enregistrer</button>#}
{#        {{ form_end(form) }}#}
{#    </section>#}
{#{% endblock %}#}


{% extends 'base.html.twig' %}

{% block title %}Ajouter une photo{% endblock %}

{% block body %}
    <section class=\"container my-5\">
        <h1 class=\"mb-4 text-center\">Ajouter une photo</h1>

        {# Messages flash #}
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }} mb-3\">{{ message }}</div>
            {% endfor %}
        {% endfor %}

        {{ form_start(form, {'attr': {'enctype': 'multipart/form-data'}}) }}

        <div class=\"mb-3\">
            {{ form_label(form.imageFile) }}
            {{ form_widget(form.imageFile, {'attr': {'class': 'form-control'}}) }}
            {{ form_errors(form.imageFile) }}
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.title) }}
            {{ form_widget(form.title, {'attr': {'class': 'form-control', 'placeholder': 'Titre de la photo'}}) }}
            {{ form_errors(form.title) }}
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.description) }}
            {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': 3, 'placeholder': 'Description ou légende'}}) }}
            {{ form_errors(form.description) }}
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.visibility) }}
            <div>
                {{ form_widget(form.visibility) }}
            </div>
            {{ form_errors(form.visibility) }}
        </div>

        <div class=\"d-grid mt-3\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Ajouter la photo</button>
        </div>

        {{ form_end(form) }}
    </section>
{% endblock %}
", "photo/upload.html.twig", "C:\\wamp64\\www\\appac\\templates\\photo\\upload.html.twig");
    }
}
