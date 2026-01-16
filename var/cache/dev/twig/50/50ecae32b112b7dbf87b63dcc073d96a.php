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

/* photo/gallery.html.twig */
class __TwigTemplate_cb56f5015b85daab04be6e202cdbbad7 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photo/gallery.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photo/gallery.html.twig"));

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

        yield "Galerie photo";
        
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
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css\" rel=\"stylesheet\">

    <style>
        /* Disposition générale */
        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 1rem;
            padding: 1rem;
        }

        /* Bloc vignette */
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease-in-out;
            aspect-ratio: 220 / 180;
            background-color: #ffffff;
        }

        .gallery-item:hover {
            transform: scale(1.03);
        }

        /* Lien autour de l’image */
        .gallery-item a {
            display: block;
            width: 100%;
            height: 100%;
            position: relative;
        }

        /* Image */
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
        }

        /* Légende (titre de la photo) */
        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            text-align: center;
            font-size: 0.9rem;
            padding: 0.4rem 0.6rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        /* Responsive */
        @media (max-width: 576px) {
            .gallery-item {
                aspect-ratio: 1 / 1; /* format carré sur mobile */
            }
        }

        /* Filtre album */
        .album-filter {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .album-filter select {
            padding: 0.4rem 0.6rem;
            font-size: 1rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 90
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

        // line 91
        yield "    <section class=\"container px-4 py-5 pt-lg-5 mt-5\">
        <h1 class=\"mb-4 text-center\">Galerie photo</h1>

        ";
        // line 95
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "flashes", [], "any", false, false, false, 95));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 96
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 97
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "
        ";
        // line 102
        yield "        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["albums"]) || array_key_exists("albums", $context) ? $context["albums"] : (function () { throw new RuntimeError('Variable "albums" does not exist.', 102, $this->source); })())) > 0)) {
            // line 103
            yield "            <div class=\"mb-4 text-center\">
                <form method=\"get\" id=\"albumFilterForm\">
                    <label for=\"albumSelect\">Filtrer par album :</label>
                    <select id=\"albumSelect\" name=\"album\" onchange=\"document.getElementById('albumFilterForm').submit()\">
                        <option value=\"\">Tous les albums</option>
                        ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["albums"]) || array_key_exists("albums", $context) ? $context["albums"] : (function () { throw new RuntimeError('Variable "albums" does not exist.', 108, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
                // line 109
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["album"], "id", [], "any", false, false, false, 109), "html", null, true);
                yield "\"
                                    ";
                // line 110
                if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["selectedAlbum"]) || array_key_exists("selectedAlbum", $context) ? $context["selectedAlbum"] : (function () { throw new RuntimeError('Variable "selectedAlbum" does not exist.', 110, $this->source); })())) && ((isset($context["selectedAlbum"]) || array_key_exists("selectedAlbum", $context) ? $context["selectedAlbum"] : (function () { throw new RuntimeError('Variable "selectedAlbum" does not exist.', 110, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["album"], "id", [], "any", false, false, false, 110)))) {
                    yield "selected";
                }
                yield ">
                                ";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["album"], "title", [], "any", false, false, false, 111), "html", null, true);
                yield "
                            </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['album'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            yield "                    </select>
                </form>
            </div>
        ";
        }
        // line 118
        yield "
        <div class=\"gallery-container\">
            ";
        // line 120
        $context["hasPhotos"] = false;
        // line 121
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 122
            yield "                ";
            $context["hasPhotos"] = true;
            // line 123
            yield "                <div class=\"gallery-item\">
                    <a href=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "fileName", [], "any", false, false, false, 124))), "html", null, true);
            yield "\"
                       data-lightbox=\"galerie\"
                       data-title=\"";
            // line 126
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "title", [], "any", false, false, false, 126)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "title", [], "any", false, false, false, 126), "html", null, true)) : ("Photo"));
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "description", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "description", [], "any", false, false, false, 126), "html", null, true);
            }
            yield "\">

                        ";
            // line 129
            yield "                        ";
            $context["imagePath"] = (($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["photo"], "imageFile")) ? ($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["photo"], "imageFile")) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "fileName", [], "any", false, false, false, 129)))));
            // line 130
            yield "
                        ";
            // line 131
            if ((($tmp = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 131, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 132
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 132, $this->source); })()), "thumbnail_small"), "html", null, true);
                yield "\"
                                 alt=\"\"
                                 loading=\"lazy\">
                        ";
            } else {
                // line 136
                yield "                            <div class=\"text-center text-muted\" style=\"height:180px; line-height:180px; background:#f0f0f0;\">
                                Image indisponible
                            </div>
                        ";
            }
            // line 140
            yield "


                        ";
            // line 143
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "title", [], "any", false, false, false, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 144
                yield "                            <div class=\"gallery-caption\">
                                ";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "title", [], "any", false, false, false, 145), "html", null, true);
                yield "
                            </div>
                        ";
            }
            // line 148
            yield "                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['photo'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        yield "
            ";
        // line 152
        if ((($tmp =  !(isset($context["hasPhotos"]) || array_key_exists("hasPhotos", $context) ? $context["hasPhotos"] : (function () { throw new RuntimeError('Variable "hasPhotos" does not exist.', 152, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 153
            yield "                <p class=\"text-center text-muted mt-4\">Aucune photo publique n’a encore été ajoutée.</p>
            ";
        }
        // line 155
        yield "        </div>
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 160
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

        // line 161
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 163
        yield "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js\"></script>
    <script>
        lightbox.option({
            resizeDuration: 200,
            wrapAround: true,
            fadeDuration: 150,
            imageFadeDuration: 150,
            albumLabel: \"Photo %1 sur %2\"
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
        return "photo/gallery.html.twig";
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
        return array (  401 => 163,  396 => 161,  383 => 160,  369 => 155,  365 => 153,  363 => 152,  360 => 151,  352 => 148,  346 => 145,  343 => 144,  341 => 143,  336 => 140,  330 => 136,  322 => 132,  320 => 131,  317 => 130,  314 => 129,  305 => 126,  300 => 124,  297 => 123,  294 => 122,  289 => 121,  287 => 120,  283 => 118,  277 => 114,  268 => 111,  262 => 110,  257 => 109,  253 => 108,  246 => 103,  243 => 102,  240 => 100,  234 => 99,  223 => 97,  218 => 96,  213 => 95,  208 => 91,  195 => 90,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Galerie photo{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css\" rel=\"stylesheet\">

    <style>
        /* Disposition générale */
        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 1rem;
            padding: 1rem;
        }

        /* Bloc vignette */
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease-in-out;
            aspect-ratio: 220 / 180;
            background-color: #ffffff;
        }

        .gallery-item:hover {
            transform: scale(1.03);
        }

        /* Lien autour de l’image */
        .gallery-item a {
            display: block;
            width: 100%;
            height: 100%;
            position: relative;
        }

        /* Image */
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
        }

        /* Légende (titre de la photo) */
        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            text-align: center;
            font-size: 0.9rem;
            padding: 0.4rem 0.6rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        /* Responsive */
        @media (max-width: 576px) {
            .gallery-item {
                aspect-ratio: 1 / 1; /* format carré sur mobile */
            }
        }

        /* Filtre album */
        .album-filter {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .album-filter select {
            padding: 0.4rem 0.6rem;
            font-size: 1rem;
        }
    </style>
{% endblock %}


{% block body %}
    <section class=\"container px-4 py-5 pt-lg-5 mt-5\">
        <h1 class=\"mb-4 text-center\">Galerie photo</h1>

        {# Messages flash #}
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }}\">{{ message }}</div>
            {% endfor %}
        {% endfor %}

        {# Filtre par album #}
        {% if albums|length > 0 %}
            <div class=\"mb-4 text-center\">
                <form method=\"get\" id=\"albumFilterForm\">
                    <label for=\"albumSelect\">Filtrer par album :</label>
                    <select id=\"albumSelect\" name=\"album\" onchange=\"document.getElementById('albumFilterForm').submit()\">
                        <option value=\"\">Tous les albums</option>
                        {% for album in albums %}
                            <option value=\"{{ album.id }}\"
                                    {% if selectedAlbum is not empty and selectedAlbum == album.id %}selected{% endif %}>
                                {{ album.title }}
                            </option>
                        {% endfor %}
                    </select>
                </form>
            </div>
        {% endif %}

        <div class=\"gallery-container\">
            {% set hasPhotos = false %}
            {% for photo in photos %}
                {% set hasPhotos = true %}
                <div class=\"gallery-item\">
                    <a href=\"{{ asset('uploads/photos/' ~ photo.fileName) }}\"
                       data-lightbox=\"galerie\"
                       data-title=\"{{ photo.title ?: 'Photo' }}{% if photo.description %} - {{ photo.description }}{% endif %}\">

                        {# Affichage des images dans la galerie #}
                        {% set imagePath = vich_uploader_asset(photo, 'imageFile') ?: asset('uploads/photos/' ~ photo.fileName) %}

                        {% if imagePath %}
                            <img src=\"{{ imagePath | imagine_filter('thumbnail_small') }}\"
                                 alt=\"\"
                                 loading=\"lazy\">
                        {% else %}
                            <div class=\"text-center text-muted\" style=\"height:180px; line-height:180px; background:#f0f0f0;\">
                                Image indisponible
                            </div>
                        {% endif %}



                        {% if photo.title %}
                            <div class=\"gallery-caption\">
                                {{ photo.title }}
                            </div>
                        {% endif %}
                    </a>
                </div>
            {% endfor %}

            {% if not hasPhotos %}
                <p class=\"text-center text-muted mt-4\">Aucune photo publique n’a encore été ajoutée.</p>
            {% endif %}
        </div>
    </section>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {# Lightbox2 JS #}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js\"></script>
    <script>
        lightbox.option({
            resizeDuration: 200,
            wrapAround: true,
            fadeDuration: 150,
            imageFadeDuration: 150,
            albumLabel: \"Photo %1 sur %2\"
        });
    </script>
{% endblock %}
", "photo/gallery.html.twig", "C:\\wamp64\\www\\appac\\templates\\photo\\gallery.html.twig");
    }
}
