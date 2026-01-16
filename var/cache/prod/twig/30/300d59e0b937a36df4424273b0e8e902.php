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
class __TwigTemplate_b243099342665227bb5fe0b331efb36f extends Template
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
        // line 2
        $context["navbar_is_transparent"] = false;
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["bootstrap_5_layout.html.twig"], true);
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Déposer une annonce";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

                        <div class=\"mb-3\">
                            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "form-label fw-semibold"]]);
        yield "
                            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Ex. Annexe rigide 2,40 m quasi neuve"]]);
        yield "
                            <div class=\"form-text\">Un titre clair et précis attire plus de visiteurs.</div>
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "form-label fw-semibold"]]);
        yield "
                            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "rows" => 7, "placeholder" => "État, dimensions, accessoires inclus, historique, etc."]]);
        yield "
                        </div>

                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "price", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label fw-semibold"]]);
        yield "
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "price", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "inputmode" => "decimal", "placeholder" => "Ex. 250"]]);
        yield "
                                <div class=\"form-text\">Laissez vide si vous souhaitez mettre « À discuter ».</div>
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "condition", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label fw-semibold"]]);
        yield "
                                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "condition", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            </div>
                        </div>

                        <div class=\"mt-3\">
                            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "location", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "form-label fw-semibold"]]);
        yield "
                            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "location", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex. Arzal, Camoël, La Roche-Bernard…"]]);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "photos", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "prototype", [], "any", false, false, false, 65), 'widget'), "html_attr");
            yield "\"
                                 data-index=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "photos", [], "any", false, false, false, 66)), "html", null, true);
            yield "\">
                                ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "photos", [], "any", false, false, false, 67));
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  278 => 129,  267 => 128,  229 => 93,  223 => 90,  216 => 85,  208 => 79,  193 => 70,  189 => 68,  185 => 67,  181 => 66,  177 => 65,  171 => 61,  168 => 60,  162 => 56,  158 => 55,  150 => 50,  146 => 49,  139 => 45,  135 => 44,  127 => 39,  123 => 38,  115 => 33,  111 => 32,  105 => 29,  85 => 12,  81 => 11,  76 => 8,  69 => 7,  58 => 3,  53 => 1,  51 => 5,  49 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "account/ad/new.html.twig", "C:\\wamp64\\www\\appac\\templates\\account\\ad\\new.html.twig");
    }
}
