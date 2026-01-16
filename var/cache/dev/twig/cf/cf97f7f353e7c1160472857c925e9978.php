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
class __TwigTemplate_6813d307aa017ccf6eaf18c6708a8f4f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
<main>
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Site des Plaisanciers";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  311 => 63,  295 => 51,  279 => 23,  262 => 8,  199 => 93,  196 => 91,  191 => 75,  183 => 70,  178 => 67,  176 => 66,  173 => 64,  171 => 63,  166 => 61,  162 => 60,  158 => 59,  154 => 58,  149 => 57,  146 => 55,  144 => 54,  140 => 52,  138 => 51,  134 => 49,  132 => 48,  126 => 44,  123 => 43,  118 => 40,  115 => 39,  113 => 38,  111 => 37,  107 => 34,  101 => 32,  98 => 31,  90 => 24,  88 => 23,  82 => 19,  76 => 16,  71 => 13,  67 => 12,  62 => 11,  57 => 8,  49 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\appac\\templates\\base.html.twig");
    }
}
