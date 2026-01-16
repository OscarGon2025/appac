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

/* base.html.twig */
class __TwigTemplate_947aa0a8d32c8a93fddcc3e15fe91a2b extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, viewport-fit=cover\">

    <title>";
        // line 8
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    ";
        // line 11
        yield "    <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-festava-live.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    ";
        // line 16
        yield "    <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/custom.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    ";
        // line 19
        yield "    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap\" rel=\"stylesheet\">

    ";
        // line 23
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 24
        yield "
    <style>
        html { scroll-behavior: smooth; }
        :root { --navbar-h: 0px; }
    </style>

    ";
        // line 31
        yield "    ";
        if (array_key_exists("recaptcha_site", $context)) {
            // line 32
            yield "        <script src=\"https://www.google.com/recaptcha/api.js?render=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["recaptcha_site"] ?? null), "html", null, true);
            yield "\"></script>
    ";
        }
        // line 34
        yield "</head>

";
        // line 37
        $context["body_class"] = ((array_key_exists("body_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["body_class"] ?? null), "")) : (""));
        // line 38
        $context["navbar_is_transparent"] = ((array_key_exists("navbar_is_transparent", $context)) ? (Twig\Extension\CoreExtension::default(($context["navbar_is_transparent"] ?? null), false)) : (false));
        // line 39
        yield "
<body class=\"with-fixed-navbar ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["body_class"] ?? null), "html", null, true);
        yield "\">

";
        // line 43
        yield "<header id=\"siteHeader\">
    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_header"));
        yield "
</header>

";
        // line 48
        yield from $this->load("partials/_navbar.html.twig", 48)->unwrap()->yield(CoreExtension::merge($context, ["navbar_is_transparent" => ($context["navbar_is_transparent"] ?? null)]));
        // line 49
        yield "
<main id=\"main-content\">
    ";
        // line 51
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 52
        yield "</main>

";
        // line 54
        yield from $this->load("partials/_footer.html.twig", 54)->unwrap()->yield($context);
        // line 55
        yield "
";
        // line 57
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/click-scroll-safe.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        yield "\"></script>

";
        // line 63
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 64
        yield "
";
        // line 66
        if (array_key_exists("recaptcha_site", $context)) {
            // line 67
            yield "    <script>
        window.addEventListener('load', function () {
            if (window.AppacRecaptchaInit) {
                AppacRecaptchaInit('";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["recaptcha_site"] ?? null), "html", null, true);
            yield "');
            }
        });
    </script>
";
        }
        // line 75
        yield "


";
        // line 91
        yield "
";
        // line 93
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\"
        crossorigin=\"anonymous\">
</script>

<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        // Sélectionne tous les dropdowns de la navbar
        const dropdowns = document.querySelectorAll('.navbar .dropdown');

        // Fonction utilitaire : détecter si on est sur mobile (fenêtre < 992px)
        const isMobile = () => window.innerWidth < 992;

        dropdowns.forEach(function(dropdown) {
            const toggle = dropdown.querySelector('.dropdown-toggle');
            const menu = dropdown.querySelector('.dropdown-menu');

            if (!toggle || !menu) return;

            // Survol (ordinateur uniquement)
            dropdown.addEventListener('mouseenter', function() {
                if (isMobile()) return;
                menu.classList.add('show');
                toggle.setAttribute('aria-expanded', 'true');
            });

            dropdown.addEventListener('mouseleave', function() {
                if (isMobile()) return;
                menu.classList.remove('show');
                toggle.setAttribute('aria-expanded', 'false');
            });

            //  Clic (mobile uniquement)
            toggle.addEventListener('click', function(e) {
                if (!isMobile()) return; // Desktop → on laisse le hover gérer
                e.preventDefault();
                const isOpen = menu.classList.contains('show');
                // Ferme tous les autres dropdowns
                document.querySelectorAll('.navbar .dropdown-menu.show').forEach(m => m.classList.remove('show'));
                // Ouvre ou ferme
                menu.classList.toggle('show', !isOpen);
            });
        });

        // Ferme les menus au redimensionnement
        window.addEventListener('resize', () => {
            document.querySelectorAll('.navbar .dropdown-menu.show').forEach(m => m.classList.remove('show'));
        });
    });
</script>


</body>
</html>
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Site des Plaisanciers";
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  287 => 63,  277 => 51,  267 => 23,  256 => 8,  196 => 93,  193 => 91,  188 => 75,  180 => 70,  175 => 67,  173 => 66,  170 => 64,  168 => 63,  163 => 61,  159 => 60,  155 => 59,  151 => 58,  146 => 57,  143 => 55,  141 => 54,  137 => 52,  135 => 51,  131 => 49,  129 => 48,  123 => 44,  120 => 43,  115 => 40,  112 => 39,  110 => 38,  108 => 37,  104 => 34,  98 => 32,  95 => 31,  87 => 24,  85 => 23,  79 => 19,  73 => 16,  68 => 13,  64 => 12,  59 => 11,  54 => 8,  46 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\appac\\templates\\base.html.twig");
    }
}
