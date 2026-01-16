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
class __TwigTemplate_01eadb4ccddf1b0d2f736c01eaf8997a extends Template
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
        // line 195
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photo/gallery.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photo/gallery.html.twig"));

        $this->parent = $this->load("base.html.twig", 195);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 197
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

    // line 199
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

        // line 200
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

        .gallery-item a {
            display: block;
            width: 100%;
            height: 100%;
            position: relative;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
        }

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

        @media (max-width: 576px) {
            .gallery-item {
                aspect-ratio: 1 / 1;
            }
        }

        .album-filter {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .album-filter select {
            padding: 0.4rem 0.6rem;
            font-size: 1rem;
        }

        select#albumSelect {
            padding: 0.5rem 1rem;
            font-size: 1rem;
            border-radius: 8px;
            border: 1px solid #ccc;
            background-color: #fff;
            min-width: 200px;
        }

        select#albumSelect option {
            padding-left: 0.5rem;
        }

        #albumSelect {
            cursor: pointer;
        }

        #albumSelect option.level-0 {
            color: #1e88e5; /* Bleu pour les albums principaux */
            font-weight: 600;
        }

        #albumSelect option.level-1 {
            color: #43a047; /* Vert pour les sous-albums */
        }

        #albumSelect option.level-2 {
            color: #fb8c00; /* Orange pour les sous-sous-albums */
        }

        #albumSelect option.level-3 {
            color: #8e24aa; /* Violet pour les niveaux encore plus profonds */
        }


    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 313
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

        // line 314
        yield "    <section class=\"container px-4 py-5 pt-lg-5 mt-5\">
        <h1 class=\"mb-4 text-center\">Galerie photo</h1>

        ";
        // line 318
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 318, $this->source); })()), "flashes", [], "any", false, false, false, 318));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 319
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 320
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
            // line 322
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 323
        yield "
        ";
        // line 325
        yield "        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["albums"]) || array_key_exists("albums", $context) ? $context["albums"] : (function () { throw new RuntimeError('Variable "albums" does not exist.', 325, $this->source); })())) > 0)) {
            // line 326
            yield "            <div class=\"mb-4 text-center\">

                ";
            // line 346
            yield "
                <form method=\"get\" id=\"albumFilterForm\">
                    <label for=\"albumSelect\">Filtrer par album :</label>
";
            // line 358
            yield "                    <select id=\"albumSelect\" name=\"album\" onchange=\"document.getElementById('albumFilterForm').submit()\">
                        <option value=\"\">Tous les albums</option>
                        ";
            // line 360
            $macros["͜macros"] = $this->load("photo/_album_menu.html.twig", 360)->unwrap();
            // line 361
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["albums"]) || array_key_exists("albums", $context) ? $context["albums"] : (function () { throw new RuntimeError('Variable "albums" does not exist.', 361, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
                // line 362
                yield "                            ";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["album"], "parent", [], "any", false, false, false, 362)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 363
                    yield "                                ";
                    yield $macros["͜macros"]->getTemplateForMacro("macro_render_album_menu", $context, 363, $this->getSourceContext())->macro_render_album_menu(...[$context["album"], 0, (isset($context["selectedAlbum"]) || array_key_exists("selectedAlbum", $context) ? $context["selectedAlbum"] : (function () { throw new RuntimeError('Variable "selectedAlbum" does not exist.', 363, $this->source); })())]);
                    yield "
                            ";
                }
                // line 365
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['album'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 366
            yield "                    </select>

                </form>
            </div>
        ";
        }
        // line 371
        yield "

        ";
        // line 374
        yield "        <div class=\"gallery-container\">
            ";
        // line 375
        $context["hasPhotos"] = false;
        // line 376
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 376, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 377
            yield "                ";
            $context["hasPhotos"] = true;
            // line 378
            yield "                <div class=\"gallery-item\">
                    <a href=\"";
            // line 379
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "fileName", [], "any", false, false, false, 379))), "html", null, true);
            yield "\"
                       data-lightbox=\"galerie\"
                       data-title=\"";
            // line 381
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "title", [], "any", false, false, false, 381)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "title", [], "any", false, false, false, 381), "html", null, true)) : ("Photo"));
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "description", [], "any", false, false, false, 381)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "description", [], "any", false, false, false, 381), "html", null, true);
            }
            yield "\">

                        ";
            // line 383
            $context["imagePath"] = (($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["photo"], "imageFile")) ? ($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["photo"], "imageFile")) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "fileName", [], "any", false, false, false, 383)))));
            // line 384
            yield "
                        ";
            // line 385
            if ((($tmp = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 385, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 386
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 386, $this->source); })()), "thumbnail_small"), "html", null, true);
                yield "\"
                                 alt=\"\"
                                 loading=\"lazy\">
                        ";
            } else {
                // line 390
                yield "                            <div class=\"text-center text-muted\" style=\"height:180px; line-height:180px; background:#f0f0f0;\">
                                Image indisponible
                            </div>
                        ";
            }
            // line 394
            yield "
                        ";
            // line 395
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "title", [], "any", false, false, false, 395)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 396
                yield "                            <div class=\"gallery-caption\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "title", [], "any", false, false, false, 396), "html", null, true);
                yield "</div>
                        ";
            }
            // line 398
            yield "                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['photo'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 401
        yield "
            ";
        // line 402
        if ((($tmp =  !(isset($context["hasPhotos"]) || array_key_exists("hasPhotos", $context) ? $context["hasPhotos"] : (function () { throw new RuntimeError('Variable "hasPhotos" does not exist.', 402, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 403
            yield "                <p class=\"text-center text-muted mt-4\">Aucune photo publique n’a encore été ajoutée.</p>
            ";
        }
        // line 405
        yield "        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 409
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

        // line 410
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 328
    public function macro_render_album_options($album = null, $level = null, $selectedAlbum = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "album" => $album,
            "level" => $level,
            "selectedAlbum" => $selectedAlbum,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_album_options"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_album_options"));

            // line 329
            yield "                    ";
            // line 330
            yield "                    ";
            if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 330, $this->source); })()), "isPrivate", [], "any", false, false, false, 330) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
                // line 331
                yield "                        ";
                // line 332
                yield "                        ";
                $context["prefix"] = "— ";
                // line 333
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 333, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 334
                    yield "                            ";
                    $context["prefix"] = ((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 334, $this->source); })()) . "— ");
                    // line 335
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 336
                yield "
                        <option value=\"";
                // line 337
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 337, $this->source); })()), "id", [], "any", false, false, false, 337), "html", null, true);
                yield "\" ";
                if (((isset($context["selectedAlbum"]) || array_key_exists("selectedAlbum", $context) ? $context["selectedAlbum"] : (function () { throw new RuntimeError('Variable "selectedAlbum" does not exist.', 337, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 337, $this->source); })()), "id", [], "any", false, false, false, 337))) {
                    yield "selected";
                }
                yield ">
                            ";
                // line 338
                yield (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 338, $this->source); })());
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 338, $this->source); })()), "title", [], "any", false, false, false, 338), "html", null, true);
                yield "
                        </option>

                        ";
                // line 341
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 341, $this->source); })()), "children", [], "any", false, false, false, 341));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 342
                    yield "                            ";
                    yield $this->getTemplateForMacro("macro_render_album_options", $context, 342, $this->getSourceContext())->macro_render_album_options(...[$context["child"], ((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 342, $this->source); })()) + 1), (isset($context["selectedAlbum"]) || array_key_exists("selectedAlbum", $context) ? $context["selectedAlbum"] : (function () { throw new RuntimeError('Variable "selectedAlbum" does not exist.', 342, $this->source); })())]);
                    yield "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 344
                yield "                    ";
            }
            // line 345
            yield "                ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
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
        return array (  530 => 345,  527 => 344,  518 => 342,  514 => 341,  507 => 338,  499 => 337,  496 => 336,  490 => 335,  487 => 334,  482 => 333,  479 => 332,  477 => 331,  474 => 330,  472 => 329,  452 => 328,  428 => 410,  415 => 409,  402 => 405,  398 => 403,  396 => 402,  393 => 401,  385 => 398,  379 => 396,  377 => 395,  374 => 394,  368 => 390,  360 => 386,  358 => 385,  355 => 384,  353 => 383,  344 => 381,  339 => 379,  336 => 378,  333 => 377,  328 => 376,  326 => 375,  323 => 374,  319 => 371,  312 => 366,  306 => 365,  300 => 363,  297 => 362,  292 => 361,  290 => 360,  286 => 358,  281 => 346,  277 => 326,  274 => 325,  271 => 323,  265 => 322,  254 => 320,  249 => 319,  244 => 318,  239 => 314,  226 => 313,  102 => 200,  89 => 199,  66 => 197,  43 => 195,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{#{% extends 'base.html.twig' %}#}

{#{% block title %}Galerie photo{% endblock %}#}

{#{% block stylesheets %}#}
{#    {{ parent() }}#}
{#    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css\" rel=\"stylesheet\">#}

{#    <style>#}
{#        /* Disposition générale */#}
{#        .gallery-container {#}
{#            display: grid;#}
{#            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));#}
{#            gap: 1rem;#}
{#            padding: 1rem;#}
{#        }#}

{#        /* Bloc vignette */#}
{#        .gallery-item {#}
{#            position: relative;#}
{#            overflow: hidden;#}
{#            border-radius: 12px;#}
{#            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);#}
{#            transition: transform 0.2s ease-in-out;#}
{#            aspect-ratio: 220 / 180;#}
{#            background-color: #ffffff;#}
{#        }#}

{#        .gallery-item:hover {#}
{#            transform: scale(1.03);#}
{#        }#}

{#        /* Lien autour de l’image */#}
{#        .gallery-item a {#}
{#            display: block;#}
{#            width: 100%;#}
{#            height: 100%;#}
{#            position: relative;#}
{#        }#}

{#        /* Image */#}
{#        .gallery-item img {#}
{#            width: 100%;#}
{#            height: 100%;#}
{#            object-fit: cover;#}
{#            object-position: center;#}
{#            display: block;#}
{#        }#}

{#        /* Légende (titre de la photo) */#}
{#        .gallery-caption {#}
{#            position: absolute;#}
{#            bottom: 0;#}
{#            left: 0;#}
{#            width: 100%;#}
{#            background: rgba(0, 0, 0, 0.6);#}
{#            color: #fff;#}
{#            text-align: center;#}
{#            font-size: 0.9rem;#}
{#            padding: 0.4rem 0.6rem;#}
{#            white-space: nowrap;#}
{#            overflow: hidden;#}
{#            text-overflow: ellipsis;#}
{#            border-bottom-left-radius: 12px;#}
{#            border-bottom-right-radius: 12px;#}
{#        }#}

{#        /* Responsive */#}
{#        @media (max-width: 576px) {#}
{#            .gallery-item {#}
{#                aspect-ratio: 1 / 1; /* format carré sur mobile */#}
{#            }#}
{#        }#}

{#        /* Filtre album */#}
{#        .album-filter {#}
{#            margin-bottom: 1.5rem;#}
{#            text-align: center;#}
{#        }#}

{#        .album-filter select {#}
{#            padding: 0.4rem 0.6rem;#}
{#            font-size: 1rem;#}
{#        }#}
{#    </style>#}
{#{% endblock %}#}


{#{% block body %}#}
{#    <section class=\"container px-4 py-5 pt-lg-5 mt-5\">#}
{#        <h1 class=\"mb-4 text-center\">Galerie photo</h1>#}

{#        #}{# Messages flash #}
{#        {% for label, messages in app.flashes %}#}
{#            {% for message in messages %}#}
{#                <div class=\"alert alert-{{ label }}\">{{ message }}</div>#}
{#            {% endfor %}#}
{#        {% endfor %}#}

{#        #}{# Filtre par album #}
{#        {% if albums|length > 0 %}#}
{#            <div class=\"mb-4 text-center\">#}

{#                {% macro render_album_options(album, level, selectedAlbum) %}#}
{#                    {% set prefix = '&nbsp;&nbsp;&nbsp;' ~ ('— ' if level > 0 else '') %}#}
{#                    <option value=\"{{ album.id }}\" {% if selectedAlbum == album.id %}selected{% endif %}>#}
{#                        {{ prefix|raw }}{{ album.title }}#}
{#                    </option>#}
{#                    {% for child in album.children %}#}
{#                        {{ _self.render_album_options(child, level + 1, selectedAlbum) }}#}
{#                    {% endfor %}#}
{#                {% endmacro %}#}


{#                <form method=\"get\" id=\"albumFilterForm\">#}
{#                    <label for=\"albumSelect\">Filtrer par album :</label>#}
{#                    <select id=\"albumSelect\" name=\"album\" onchange=\"document.getElementById('albumFilterForm').submit()\">#}
{#                        <option value=\"\">Tous les albums</option>#}
{#                        {% for album in albums %}#}
{#                            <option value=\"{{ album.id }}\"#}
{#                                    {% if selectedAlbum is not empty and selectedAlbum == album.id %}selected{% endif %}>#}
{#                                {{ album.title }}#}
{#                            </option>#}
{#                        {% endfor %}#}
{#                    </select>#}
{#                    <select id=\"albumSelect\" name=\"album\" onchange=\"document.getElementById('albumFilterForm').submit()\">#}
{#                        <option value=\"\">Tous les albums</option>#}
{#                        {% import _self as macros %}#}
{#                        {% for album in albums %}#}
{#                            {{ macros.render_album_options(album, 0, selectedAlbum) }}#}
{#                        {% endfor %}#}
{#                    </select>#}

{#                </form>#}
{#            </div>#}
{#        {% endif %}#}

{#        <div class=\"gallery-container\">#}
{#            {% set hasPhotos = false %}#}
{#            {% for photo in photos %}#}
{#                {% set hasPhotos = true %}#}
{#                <div class=\"gallery-item\">#}
{#                    <a href=\"{{ asset('uploads/photos/' ~ photo.fileName) }}\"#}
{#                       data-lightbox=\"galerie\"#}
{#                       data-title=\"{{ photo.title ?: 'Photo' }}{% if photo.description %} - {{ photo.description }}{% endif %}\">#}

{#                        #}{# Affichage des images dans la galerie #}
{#                        {% set imagePath = vich_uploader_asset(photo, 'imageFile') ?: asset('uploads/photos/' ~ photo.fileName) %}#}

{#                        {% if imagePath %}#}
{#                            <img src=\"{{ imagePath | imagine_filter('thumbnail_small') }}\"#}
{#                                 alt=\"\"#}
{#                                 loading=\"lazy\">#}
{#                        {% else %}#}
{#                            <div class=\"text-center text-muted\" style=\"height:180px; line-height:180px; background:#f0f0f0;\">#}
{#                                Image indisponible#}
{#                            </div>#}
{#                        {% endif %}#}



{#                        {% if photo.title %}#}
{#                            <div class=\"gallery-caption\">#}
{#                                {{ photo.title }}#}
{#                            </div>#}
{#                        {% endif %}#}
{#                    </a>#}
{#                </div>#}
{#            {% endfor %}#}

{#            {% if not hasPhotos %}#}
{#                <p class=\"text-center text-muted mt-4\">Aucune photo publique n’a encore été ajoutée.</p>#}
{#            {% endif %}#}
{#        </div>#}
{#    </section>#}

{#{% endblock %}#}

{#{% block javascripts %}#}
{#    {{ parent() }}#}
{#    #}{# Lightbox2 JS #}
{#    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js\"></script>#}
{#    <script>#}
{#        lightbox.option({#}
{#            resizeDuration: 200,#}
{#            wrapAround: true,#}
{#            fadeDuration: 150,#}
{#            imageFadeDuration: 150,#}
{#            albumLabel: \"Photo %1 sur %2\"#}
{#        });#}
{#    </script>#}
{#{% endblock %}#}

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

        .gallery-item a {
            display: block;
            width: 100%;
            height: 100%;
            position: relative;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
        }

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

        @media (max-width: 576px) {
            .gallery-item {
                aspect-ratio: 1 / 1;
            }
        }

        .album-filter {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .album-filter select {
            padding: 0.4rem 0.6rem;
            font-size: 1rem;
        }

        select#albumSelect {
            padding: 0.5rem 1rem;
            font-size: 1rem;
            border-radius: 8px;
            border: 1px solid #ccc;
            background-color: #fff;
            min-width: 200px;
        }

        select#albumSelect option {
            padding-left: 0.5rem;
        }

        #albumSelect {
            cursor: pointer;
        }

        #albumSelect option.level-0 {
            color: #1e88e5; /* Bleu pour les albums principaux */
            font-weight: 600;
        }

        #albumSelect option.level-1 {
            color: #43a047; /* Vert pour les sous-albums */
        }

        #albumSelect option.level-2 {
            color: #fb8c00; /* Orange pour les sous-sous-albums */
        }

        #albumSelect option.level-3 {
            color: #8e24aa; /* Violet pour les niveaux encore plus profonds */
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

        {# Filtre par album avec hiérarchie #}
        {% if albums|length > 0 %}
            <div class=\"mb-4 text-center\">

                {% macro render_album_options(album, level, selectedAlbum) %}
                    {# Ne pas afficher les albums privés pour les visiteurs #}
                    {% if not album.isPrivate or is_granted('ROLE_USER') %}
                        {# Au moins un tiret pour l'album principal, puis un par niveau de sous-album #}
                        {% set prefix = '— ' %}
                        {% for i in 1..level %}
                            {% set prefix = prefix ~ '— ' %}
                        {% endfor %}

                        <option value=\"{{ album.id }}\" {% if selectedAlbum == album.id %}selected{% endif %}>
                            {{ prefix|raw }}{{ album.title }}
                        </option>

                        {% for child in album.children %}
                            {{ _self.render_album_options(child, level + 1, selectedAlbum) }}
                        {% endfor %}
                    {% endif %}
                {% endmacro %}

                <form method=\"get\" id=\"albumFilterForm\">
                    <label for=\"albumSelect\">Filtrer par album :</label>
{#                    <select id=\"albumSelect\" name=\"album\" onchange=\"document.getElementById('albumFilterForm').submit()\">#}
{#                        <option value=\"\">Tous les albums</option>#}
{#                        {% import 'photo/_album_menu.html.twig' as macros %}#}
{#                        {% for album in albums %}#}
{#                            {% if not album.parent %}#}
{#                                {{ macros.render_album_menu(album, 0) }}#}
{#                            {% endif %}#}
{#                        {% endfor %}#}
{#                    </select>#}
                    <select id=\"albumSelect\" name=\"album\" onchange=\"document.getElementById('albumFilterForm').submit()\">
                        <option value=\"\">Tous les albums</option>
                        {% import 'photo/_album_menu.html.twig' as macros %}
                        {% for album in albums %}
                            {% if not album.parent %}
                                {{ macros.render_album_menu(album, 0, selectedAlbum) }}
                            {% endif %}
                        {% endfor %}
                    </select>

                </form>
            </div>
        {% endif %}


        {# Galerie photo #}
        <div class=\"gallery-container\">
            {% set hasPhotos = false %}
            {% for photo in photos %}
                {% set hasPhotos = true %}
                <div class=\"gallery-item\">
                    <a href=\"{{ asset('uploads/photos/' ~ photo.fileName) }}\"
                       data-lightbox=\"galerie\"
                       data-title=\"{{ photo.title ?: 'Photo' }}{% if photo.description %} - {{ photo.description }}{% endif %}\">

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
                            <div class=\"gallery-caption\">{{ photo.title }}</div>
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
