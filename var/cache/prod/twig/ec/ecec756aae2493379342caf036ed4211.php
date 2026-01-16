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

/* partials/_classifieds_home.html.twig */
class __TwigTemplate_7278a9eb482e7579c5242b9096a0154d extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<section id=\"classifieds\" class=\"section-padding bg-white\" aria-labelledby=\"classifieds-title\">
    <div class=\"container\">
        <div class=\"row mb-4\">
            <div class=\"col-12 text-center\">
                <h2 id=\"classifieds-title\" class=\"mb-2\">Petites annonces</h2>
                <p class=\"text-muted mb-0\">Les dernières annonces approuvées par l’association</p>
            </div>
        </div>

        <div class=\"row\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["latestAds"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 13
            yield "                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <article class=\"card h-100 shadow-sm\">
                        ";
            // line 16
            yield "                        ";
            $context["thumb"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholders/classified_no_image.png");
            // line 17
            yield "
                        ";
            // line 18
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "photos", [], "any", true, true, false, 18) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "photos", [], "any", false, false, false, 18)) > 0))) {
                // line 19
                yield "                            ";
                $context["first"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "photos", [], "any", false, false, false, 19));
                // line 20
                yield "                            ";
                if ((($tmp = ($context["first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 21
                    yield "                                ";
                    // line 22
                    yield "                                ";
                    $context["vichUrl"] = ((($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(($context["first"] ?? null), "imageFile") &&  !(null === $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(($context["first"] ?? null), "imageFile")))) ? ($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(($context["first"] ?? null), "imageFile")) : (null));
                    // line 23
                    yield "
                                ";
                    // line 24
                    if ((($tmp = ($context["vichUrl"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 25
                        yield "                                    ";
                        $context["thumb"] = ($context["vichUrl"] ?? null);
                        // line 26
                        yield "                                ";
                    } else {
                        // line 27
                        yield "                                    ";
                        // line 28
                        yield "                                    ";
                        $context["fileName"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "fileName", [], "any", true, true, false, 28) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "fileName", [], "any", false, false, false, 28)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "fileName", [], "any", false, false, false, 28)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "filename", [], "any", true, true, false, 28) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "filename", [], "any", false, false, false, 28)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "filename", [], "any", false, false, false, 28)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "name", [], "any", true, true, false, 28) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "name", [], "any", false, false, false, 28)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "name", [], "any", false, false, false, 28)) : (null))))));
                        // line 29
                        yield "                                    ";
                        if ((($tmp = ($context["fileName"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 30
                            yield "                                        ";
                            $context["thumb"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/classifieds/" . ($context["fileName"] ?? null)));
                            // line 31
                            yield "                                    ";
                        }
                        // line 32
                        yield "                                ";
                    }
                    // line 33
                    yield "                            ";
                }
                // line 34
                yield "                        ";
            }
            // line 35
            yield "
                        <img
                            src=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(($context["thumb"] ?? null), "ad_thumb"), "html", null, true);
            yield "\"
                            class=\"card-img-top\"
                            alt=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "title", [], "any", false, false, false, 39), "html", null, true);
            yield "\"
                            loading=\"lazy\"
                        >

                        <div class=\"card-body d-flex flex-column\">
                            <h3 class=\"h6 card-title mb-2 text-truncate\" title=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "title", [], "any", false, false, false, 44), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "title", [], "any", false, false, false, 44), "html", null, true);
            yield "</h3>
                            ";
            // line 45
            if (CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "description", [], "any", true, true, false, 45)) {
                // line 46
                yield "                                <p class=\"card-text text-muted small mb-3\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "description", [], "any", false, false, false, 46)), 0, 120) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "description", [], "any", false, false, false, 46)) > 120)) ? ("…") : (""))), "html", null, true);
                yield "</p>
                            ";
            }
            // line 48
            yield "
                            <div class=\"mt-auto d-flex align-items-center justify-content-between\">
                <span class=\"fw-semibold\">
                  ";
            // line 51
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "price", [], "any", false, false, false, 51))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 52
                yield "                      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "price", [], "any", false, false, false, 52), 0, ",", " "), "html", null, true);
                yield " €
                  ";
            } else {
                // line 54
                yield "                      -
                  ";
            }
            // line 56
            yield "                </span>
                                <a class=\"btn btn-outline-primary btn-sm\" href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classified_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\">
                                    Voir
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 64
        if (!$context['_iterated']) {
            // line 65
            yield "                <div class=\"col-12 text-center\">
                    <p class=\"text-muted mb-0\">Aucune annonce pour le moment.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ad'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "        </div>

        <div class=\"text-center mt-3 d-flex gap-2 justify-content-center\">
            <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classified_index");
        yield "\" class=\"btn custom-btn px-4\">
                Voir toutes les annonces
            </a>
            ";
        // line 75
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "                <a class=\"btn btn-success px-4\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_ad_new");
            yield "\">
                    Déposer une annonce
                </a>
            ";
        }
        // line 80
        yield "        </div>
    </div>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_classifieds_home.html.twig";
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
        return array (  211 => 80,  203 => 76,  201 => 75,  195 => 72,  190 => 69,  181 => 65,  179 => 64,  167 => 57,  164 => 56,  160 => 54,  154 => 52,  152 => 51,  147 => 48,  141 => 46,  139 => 45,  133 => 44,  125 => 39,  120 => 37,  116 => 35,  113 => 34,  110 => 33,  107 => 32,  104 => 31,  101 => 30,  98 => 29,  95 => 28,  93 => 27,  90 => 26,  87 => 25,  85 => 24,  82 => 23,  79 => 22,  77 => 21,  74 => 20,  71 => 19,  69 => 18,  66 => 17,  63 => 16,  59 => 13,  54 => 12,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/_classifieds_home.html.twig", "C:\\wamp64\\www\\appac\\templates\\partials\\_classifieds_home.html.twig");
    }
}
