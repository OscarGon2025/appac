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

/* @EasyAdmin/page/login.html.twig */
class __TwigTemplate_be072012dec52dbc061d9e5ce2bcf541 extends Template
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
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'header_logo' => [$this, 'block_header_logo'],
            'login_form_wrapper' => [$this, 'block_login_form_wrapper'],
            'login_form_credentials_wrapper' => [$this, 'block_login_form_credentials_wrapper'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return $this->load((((null != ($context["ea"] ?? null))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["layout"], "method", false, false, false, 3)) : ("@EasyAdmin/page/login_minimal.html.twig")), 3);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/page/login.html.twig"));

        // line 2
        $context["ea"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea();
        // line 4
        $context["__internal_trans_default_domain9f7ade5f6d7e8f6a94a457ea1b324986"] = (((null != ($context["ea"] ?? null))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 4), "translationDomain", [], "any", false, false, false, 4)) : (((array_key_exists("translation_domain", $context)) ? ((((array_key_exists("translation_domain", $context) &&  !(null === $context["translation_domain"]))) ? ($context["translation_domain"]) : ("messages"))) : (""))));
        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        yield "page-login";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield ((array_key_exists("page_title", $context)) ? (($context["page_title"] ?? null)) : ((((null != ($context["ea"] ?? null))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 7)) : (""))));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_favicon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 10
        yield "    ";
        if ((($tmp = ((array_key_exists("favicon_path", $context)) ? (Twig\Extension\CoreExtension::default(($context["favicon_path"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "        <link rel=\"shortcut icon\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["favicon_path"] ?? null), "html", null, true);
            yield "\">
    ";
        } else {
            // line 13
            yield "        ";
            yield from $this->yieldParentBlock("head_favicon", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wrapper_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        // line 18
        yield "    ";
        $context["page_title"] =         $this->unwrap()->renderBlock("page_title", $context, $blocks);
        // line 19
        yield "    ";
        $context["_username_label"] = ((array_key_exists("username_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["username_label"] ?? null), [],         // line 4
($context["__internal_trans_default_domain9f7ade5f6d7e8f6a94a457ea1b324986"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.username", [], "EasyAdminBundle")));
        // line 20
        yield "    ";
        $context["_password_label"] = ((array_key_exists("password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["password_label"] ?? null), [],         // line 4
($context["__internal_trans_default_domain9f7ade5f6d7e8f6a94a457ea1b324986"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.password", [], "EasyAdminBundle")));
        // line 21
        yield "    ";
        $context["_forgot_password_label"] = ((array_key_exists("forgot_password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["forgot_password_label"] ?? null), [],         // line 4
($context["__internal_trans_default_domain9f7ade5f6d7e8f6a94a457ea1b324986"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.forgot_password", [], "EasyAdminBundle")));
        // line 22
        yield "    ";
        $context["_remember_me_label"] = ((array_key_exists("remember_me_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["remember_me_label"] ?? null), [],         // line 4
($context["__internal_trans_default_domain9f7ade5f6d7e8f6a94a457ea1b324986"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.remember_me", [], "EasyAdminBundle")));
        // line 23
        yield "    ";
        $context["_sign_in_label"] = ((array_key_exists("sign_in_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["sign_in_label"] ?? null), [],         // line 4
($context["__internal_trans_default_domain9f7ade5f6d7e8f6a94a457ea1b324986"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.sign_in", [], "EasyAdminBundle")));
        // line 24
        yield "
    ";
        // line 25
        yield from $this->load("@EasyAdmin/flash_messages.html.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "
    <div class=\"login-wrapper\">
        <header class=\"main-header\">
            <div id=\"header-logo\">
                ";
        // line 30
        yield from $this->unwrap()->yieldBlock('header_logo', $context, $blocks);
        // line 43
        yield "            </div>
        </header>

        <section class=\"content\">
            ";
        // line 47
        if ((($tmp = ((array_key_exists("error", $context)) ? (Twig\Extension\CoreExtension::default(($context["error"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "                <div class=\"w-100 alert alert-danger rounded mb-3\">
                    ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 49), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 49), "security"), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 52
        yield "
            ";
        // line 53
        yield from $this->unwrap()->yieldBlock('login_form_wrapper', $context, $blocks);
        // line 97
        yield "        </section>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        // line 31
        yield "                    ";
        if ((($tmp = ($context["page_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "                        ";
            if ((null != ($context["ea"] ?? null))) {
                // line 33
                yield "                            <a class=\"logo ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["page_title"] ?? null)) > 14)) ? ("logo-long") : (""));
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(($context["page_title"] ?? null)), "html", null, true);
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 33));
                yield "\">
                                ";
                // line 34
                yield ($context["page_title"] ?? null);
                yield "
                            </a>
                        ";
            } else {
                // line 37
                yield "                            <div class=\"logo ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["page_title"] ?? null)) > 14)) ? ("logo-long") : (""));
                yield "\">
                                ";
                // line 38
                yield ($context["page_title"] ?? null);
                yield "
                            </div>
                        ";
            }
            // line 41
            yield "                    ";
        }
        // line 42
        yield "                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_login_form_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_form_wrapper"));

        // line 54
        yield "            <form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("action", $context)) ? (Twig\Extension\CoreExtension::default(($context["action"] ?? null), "")) : ("")), "html", null, true);
        yield "\">
                ";
        // line 55
        if ((($tmp = ((array_key_exists("csrf_token_intention", $context)) ? (Twig\Extension\CoreExtension::default(($context["csrf_token_intention"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(($context["csrf_token_intention"] ?? null)), "html", null, true);
            yield "\">
                ";
        }
        // line 58
        yield "
                <input type=\"hidden\" name=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("target_path_parameter", $context)) ? (Twig\Extension\CoreExtension::default(($context["target_path_parameter"] ?? null), "_target_path")) : ("_target_path")), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("target_path", $context)) ? (Twig\Extension\CoreExtension::default(($context["target_path"] ?? null), (((null != ($context["ea"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 59))) : ("/")))) : ((((null != ($context["ea"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 59))) : ("/")))), "html", null, true);
        yield "\" />

                ";
        // line 61
        yield from $this->unwrap()->yieldBlock('login_form_credentials_wrapper', $context, $blocks);
        // line 82
        yield "
                ";
        // line 83
        if ((($tmp = ((array_key_exists("remember_me_enabled", $context)) ? (Twig\Extension\CoreExtension::default(($context["remember_me_enabled"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "                    <div class=\"form-group\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("remember_me_parameter", $context)) ? (Twig\Extension\CoreExtension::default(($context["remember_me_parameter"] ?? null), "_remember_me")) : ("_remember_me")), "html", null, true);
            yield "\" ";
            yield (((($tmp = ((array_key_exists("remember_me_checked", $context)) ? (Twig\Extension\CoreExtension::default(($context["remember_me_checked"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
            yield ">
                        <label class=\"form-check-label\" for=\"remember_me\">
                            ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_remember_me_label"] ?? null), "html", null, true);
            yield "
                        </label>
                    </div>
                ";
        }
        // line 91
        yield "
                ";
        // line 92
        $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v0->preRender("ea:Button", Twig\Extension\CoreExtension::toArray(["type" => "submit", "variant" => "primary", "size" => "lg", "isBlock" => true, "htmlAttributes" => "{class: 'btn-block'}"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v0->startEmbedComponent("ea:Button", Twig\Extension\CoreExtension::toArray(["type" => "submit", "variant" => "primary", "size" => "lg", "isBlock" => true, "htmlAttributes" => "{class: 'btn-block'}"]), $context, "@EasyAdmin/page/login.html.twig", 13169386621);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 13169386621);
            $this->load("@EasyAdmin/page/login.html.twig", 92, "13169386621")->display($embeddedContext, $embeddedBlocks);
            $_v0->finishEmbedComponent();
        }
        // line 93
        yield "            </form>

            <script src=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login.js", Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage::PACKAGE_NAME")), "html", null, true);
        yield "\"></script>
            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_login_form_credentials_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_form_credentials_wrapper"));

        // line 62
        yield "                    <div class=\"form-group\">
                        <label class=\"form-control-label required\" for=\"username\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_username_label"] ?? null), "html", null, true);
        yield "</label>
                        <div class=\"form-widget\">
                            <input type=\"text\" id=\"username\" name=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("username_parameter", $context)) ? (Twig\Extension\CoreExtension::default(($context["username_parameter"] ?? null), "_username")) : ("_username")), "html", null, true);
        yield "\" class=\"form-control\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("last_username", $context)) ? (Twig\Extension\CoreExtension::default(($context["last_username"] ?? null), "")) : ("")), "html", null, true);
        yield "\" required autofocus autocomplete=\"username\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-control-label required\" for=\"password\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_password_label"] ?? null), "html", null, true);
        yield "</label>
                        <div class=\"form-widget\">
                            <input type=\"password\" id=\"password\" name=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("password_parameter", $context)) ? (Twig\Extension\CoreExtension::default(($context["password_parameter"] ?? null), "_password")) : ("_password")), "html", null, true);
        yield "\" class=\"form-control\" required autocomplete=\"current-password\">
                        </div>

                        ";
        // line 75
        if ((($tmp = ((array_key_exists("forgot_password_enabled", $context)) ? (Twig\Extension\CoreExtension::default(($context["forgot_password_enabled"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "                            <div class=\"form-text\">
                                <a href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("forgot_password_path", $context)) ? (Twig\Extension\CoreExtension::default(($context["forgot_password_path"] ?? null), "#")) : ("#")), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_forgot_password_label"] ?? null), "html", null, true);
            yield "</a>
                            </div>
                        ";
        }
        // line 80
        yield "                    </div>
                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/page/login.html.twig";
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
        return array (  403 => 80,  395 => 77,  392 => 76,  390 => 75,  384 => 72,  379 => 70,  369 => 65,  364 => 63,  361 => 62,  351 => 61,  341 => 95,  337 => 93,  323 => 92,  320 => 91,  313 => 87,  306 => 85,  303 => 84,  301 => 83,  298 => 82,  296 => 61,  289 => 59,  286 => 58,  280 => 56,  278 => 55,  273 => 54,  263 => 53,  255 => 42,  252 => 41,  246 => 38,  241 => 37,  235 => 34,  226 => 33,  223 => 32,  220 => 31,  210 => 30,  200 => 97,  198 => 53,  195 => 52,  189 => 49,  186 => 48,  184 => 47,  178 => 43,  176 => 30,  170 => 26,  168 => 25,  165 => 24,  163 => 4,  161 => 23,  159 => 4,  157 => 22,  155 => 4,  153 => 21,  151 => 4,  149 => 20,  147 => 4,  145 => 19,  142 => 18,  132 => 17,  120 => 13,  114 => 11,  111 => 10,  101 => 9,  84 => 7,  67 => 6,  60 => 3,  58 => 4,  56 => 2,  46 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/page/login.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\page\\login.html.twig");
    }
}


/* @EasyAdmin/page/login.html.twig */
class __TwigTemplate_be072012dec52dbc061d9e5ce2bcf541___13169386621 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 92
        return $this->load(($context["__parent__"] ?? null), 92);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/page/login.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_sign_in_label"] ?? null), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/page/login.html.twig";
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
        return array (  466 => 92,  403 => 80,  395 => 77,  392 => 76,  390 => 75,  384 => 72,  379 => 70,  369 => 65,  364 => 63,  361 => 62,  351 => 61,  341 => 95,  337 => 93,  323 => 92,  320 => 91,  313 => 87,  306 => 85,  303 => 84,  301 => 83,  298 => 82,  296 => 61,  289 => 59,  286 => 58,  280 => 56,  278 => 55,  273 => 54,  263 => 53,  255 => 42,  252 => 41,  246 => 38,  241 => 37,  235 => 34,  226 => 33,  223 => 32,  220 => 31,  210 => 30,  200 => 97,  198 => 53,  195 => 52,  189 => 49,  186 => 48,  184 => 47,  178 => 43,  176 => 30,  170 => 26,  168 => 25,  165 => 24,  163 => 4,  161 => 23,  159 => 4,  157 => 22,  155 => 4,  153 => 21,  151 => 4,  149 => 20,  147 => 4,  145 => 19,  142 => 18,  132 => 17,  120 => 13,  114 => 11,  111 => 10,  101 => 9,  84 => 7,  67 => 6,  60 => 3,  58 => 4,  56 => 2,  46 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/page/login.html.twig", "C:\\wamp64\\www\\appac\\vendor\\easycorp\\easyadmin-bundle\\templates\\page\\login.html.twig");
    }
}
