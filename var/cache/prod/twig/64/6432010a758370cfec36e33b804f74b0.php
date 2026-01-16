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
class __TwigTemplate_4b6db723afd07cd806b65bf4ab09b132 extends Template
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
        $this->parent = $this->load("base.html.twig", 195);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 197
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Galerie photo";
        yield from [];
    }

    // line 199
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 313
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 314
        yield "    <section class=\"container px-4 py-5 pt-lg-5 mt-5\">
        <h1 class=\"mb-4 text-center\">Galerie photo</h1>

        ";
        // line 318
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 318));
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["albums"] ?? null)) > 0)) {
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
            $context['_seq'] = CoreExtension::ensureTraversable(($context["albums"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
                // line 362
                yield "                            ";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["album"], "parent", [], "any", false, false, false, 362)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 363
                    yield "                                ";
                    yield $macros["͜macros"]->getTemplateForMacro("macro_render_album_menu", $context, 363, $this->getSourceContext())->macro_render_album_menu(...[$context["album"], 0, ($context["selectedAlbum"] ?? null)]);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["photos"] ?? null));
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
            if ((($tmp = ($context["imagePath"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 386
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(($context["imagePath"] ?? null), "thumbnail_small"), "html", null, true);
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
        if ((($tmp =  !($context["hasPhotos"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 403
            yield "                <p class=\"text-center text-muted mt-4\">Aucune photo publique n’a encore été ajoutée.</p>
            ";
        }
        // line 405
        yield "        </div>
    </section>
";
        yield from [];
    }

    // line 409
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
            // line 329
            yield "                    ";
            // line 330
            yield "                    ";
            if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["album"] ?? null), "isPrivate", [], "any", false, false, false, 330) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
                // line 331
                yield "                        ";
                // line 332
                yield "                        ";
                $context["prefix"] = "— ";
                // line 333
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["level"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 334
                    yield "                            ";
                    $context["prefix"] = (($context["prefix"] ?? null) . "— ");
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["album"] ?? null), "id", [], "any", false, false, false, 337), "html", null, true);
                yield "\" ";
                if ((($context["selectedAlbum"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, ($context["album"] ?? null), "id", [], "any", false, false, false, 337))) {
                    yield "selected";
                }
                yield ">
                            ";
                // line 338
                yield ($context["prefix"] ?? null);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["album"] ?? null), "title", [], "any", false, false, false, 338), "html", null, true);
                yield "
                        </option>

                        ";
                // line 341
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["album"] ?? null), "children", [], "any", false, false, false, 341));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 342
                    yield "                            ";
                    yield $this->getTemplateForMacro("macro_render_album_options", $context, 342, $this->getSourceContext())->macro_render_album_options(...[$context["child"], (($context["level"] ?? null) + 1), ($context["selectedAlbum"] ?? null)]);
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
        return array (  464 => 345,  461 => 344,  452 => 342,  448 => 341,  441 => 338,  433 => 337,  430 => 336,  424 => 335,  421 => 334,  416 => 333,  413 => 332,  411 => 331,  408 => 330,  406 => 329,  392 => 328,  374 => 410,  367 => 409,  360 => 405,  356 => 403,  354 => 402,  351 => 401,  343 => 398,  337 => 396,  335 => 395,  332 => 394,  326 => 390,  318 => 386,  316 => 385,  313 => 384,  311 => 383,  302 => 381,  297 => 379,  294 => 378,  291 => 377,  286 => 376,  284 => 375,  281 => 374,  277 => 371,  270 => 366,  264 => 365,  258 => 363,  255 => 362,  250 => 361,  248 => 360,  244 => 358,  239 => 346,  235 => 326,  232 => 325,  229 => 323,  223 => 322,  212 => 320,  207 => 319,  202 => 318,  197 => 314,  190 => 313,  72 => 200,  65 => 199,  54 => 197,  43 => 195,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "photo/gallery.html.twig", "C:\\wamp64\\www\\appac\\templates\\photo\\gallery.html.twig");
    }
}
