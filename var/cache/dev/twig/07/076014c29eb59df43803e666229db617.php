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

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_954c0d22da616b6dd73919e4365c7cef extends Template
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
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <style>
        .config-symfony-version-lts {
            border: 0;
            color: var(--color-muted);
            font-size: 21px;
            line-height: 33px;
        }
        .config-symfony-version-lts[title] {
            text-decoration: none;
        }
        .config-symfony-version-status-badge {
            background-color: var(--badge-background);
            border-radius: 4px;
            color: var(--badge-color);
            display: inline-block;
            font-size: 15px;
            font-weight: bold;
            margin: 10px 0 5px;
            padding: 3px 7px;
            white-space: nowrap;
        }
        .config-symfony-version-status-badge.status-success {
            background-color: var(--badge-success-background);
            color: var(--badge-success-color);
        }
        .config-symfony-version-status-badge.status-warning {
            background-color: var(--badge-warning-background);
            color: var(--badge-warning-color);
        }
        .config-symfony-version-status-badge.status-error {
            background-color: var(--badge-danger-background);
            color: var(--badge-danger-color);
        }
        .config-symfony-version-roadmap-link {
            display: inline-block;
            margin: 10px 5px 5px;
        }
        .config-symfony-eol {
            margin-top: 5px;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 50
        yield "    ";
        if (("unknown" == CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 50))) {
            // line 51
            yield "        ";
            $context["block_status"] = "";
            // line 52
            yield "        ";
            $context["symfony_version_status"] = "Unable to retrieve information about the Symfony version.";
            // line 53
            yield "    ";
        } elseif (("eol" == CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 53))) {
            // line 54
            yield "        ";
            $context["block_status"] = "red";
            // line 55
            yield "        ";
            $context["symfony_version_status"] = "This Symfony version will no longer receive security fixes.";
            // line 56
            yield "    ";
        } elseif (("eom" == CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 56))) {
            // line 57
            yield "        ";
            $context["block_status"] = "yellow";
            // line 58
            yield "        ";
            $context["symfony_version_status"] = "This Symfony version will only receive security fixes.";
            // line 59
            yield "    ";
        } elseif (("dev" == CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 59))) {
            // line 60
            yield "        ";
            $context["block_status"] = "yellow";
            // line 61
            yield "        ";
            $context["symfony_version_status"] = "This Symfony version is still in the development phase.";
            // line 62
            yield "    ";
        } else {
            // line 63
            yield "        ";
            $context["block_status"] = "";
            // line 64
            yield "        ";
            $context["symfony_version_status"] = "";
            // line 65
            yield "    ";
        }
        // line 66
        yield "
    ";
        // line 67
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 68
            yield "        <span class=\"sf-toolbar-label\">
            ";
            // line 69
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/symfony.svg");
            yield "
        </span>
        <span class=\"sf-toolbar-value\">";
            // line 71
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", true, true, false, 71)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 71), "html", null, true)) : ("n/a"));
            yield "</span>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        yield "
    ";
        // line 74
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 75
            yield "        ";
            if ((($tmp = ($context["symfony_version_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 76
                yield "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <span>";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["symfony_version_status"] ?? null), "html", null, true);
                yield "</span>
                </div>
            </div>
        ";
            }
            // line 82
            yield "
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    ";
            // line 87
            if ((($tmp = ($context["profiler_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 88
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["profiler_url"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 88), "html", null, true);
                yield "</a>
                    ";
            } else {
                // line 90
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 90), "html", null, true);
                yield "
                    ";
            }
            // line 92
            yield "                </span>
            </div>

            ";
            // line 95
            if ((($tmp =  !("n/a" === CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 95))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 96
                yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 98), "html", null, true);
                yield "</span>
                </div>
            ";
            }
            // line 101
            yield "
            ";
            // line 102
            if ((($tmp =  !("n/a" === CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 102))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 103
                yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 105
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("green") : ("red"));
                yield "\">";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("enabled") : ("disabled"));
                yield "</span>
                </div>
            ";
            }
            // line 108
            yield "        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span";
            // line 113
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, false, 113) . CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 113)), "html", null, true);
                yield "\"";
            }
            yield ">
                    ";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, false, 114), "html", null, true);
            yield "
                    &nbsp; <a href=\"";
            // line 115
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_phpinfo");
            yield "\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                ";
            // line 121
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebugInfo", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 122
                yield "                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_xdebug");
                yield "\" title=\"View xdebug_info()\">
                ";
            }
            // line 124
            yield "                <span class=\"sf-toolbar-status sf-toolbar-status-";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebug", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("green") : ("gray"));
            yield "\">Xdebug ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebug", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✓") : ("✗"));
            yield "</span>
                ";
            // line 125
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebugInfo", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 126
                yield "                    </a>
                ";
            }
            // line 128
            yield "                <span class=\"sf-toolbar-status sf-toolbar-status-";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("green") : ("gray"));
            yield "\">APCu ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✓") : ("✗"));
            yield "</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 129
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("green") : ("red"));
            yield "\">OPcache ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✓") : ("✗"));
            yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sapiName", [], "any", false, false, false, 134), "html", null, true);
            yield "</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            ";
            // line 139
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", true, true, false, 139)) {
                // line 140
                yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        <a href=\"https://symfony.com/doc/";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 143), "html", null, true);
                yield "/index.html\" rel=\"help\">
                            Read Symfony ";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 144), "html", null, true);
                yield " Docs
                        </a>
                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"https://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            ";
            }
            // line 157
            yield "        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 159
        yield "
    ";
        // line 160
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true, "name" => "config", "status" => ($context["block_status"] ?? null), "additional_classes" => "sf-toolbar-block-right"]);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 163
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 164
        yield "    <span class=\"label label-status-";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 164) == "eol")) ? ("red") : (((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 164), ["eom", "dev"])) ? ("yellow") : (""))));
        yield "\">
        <span class=\"icon\">";
        // line 165
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/config.svg");
        yield "</span>
        <strong>Configuration</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 170
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 171
        yield "    <h2>Symfony Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">
                ";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 176), "html", null, true);
        yield "

                ";
        // line 178
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonylts", [], "any", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 179
            yield "                    <abbr class=\"config-symfony-version-lts\" title=\"This is a Long-Term Support version\">(LTS)</abbr>
                ";
        }
        // line 181
        yield "            </span>
            <span class=\"label\">Symfony version</span>
        </div>

        ";
        // line 185
        if ((($tmp =  !("n/a" === CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 185))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 186
            yield "            <div class=\"metric\">
                <span class=\"value\">";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 187), "html", null, true);
            yield "</span>
                <span class=\"label\">Environment</span>
            </div>
        ";
        }
        // line 191
        yield "
        ";
        // line 192
        if ((($tmp =  !("n/a" === CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 192))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 193
            yield "            <div class=\"metric\">
                <span class=\"value\">";
            // line 194
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 194)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("enabled") : ("disabled"));
            yield "</span>
                <span class=\"label\">Debug</span>
            </div>
        ";
        }
        // line 198
        yield "    </div>

    ";
        // line 200
        $context["symfony_status"] = ["dev" => "In Development", "stable" => "Maintained", "eom" => "Security Fixes Only", "eol" => "Unmaintained"];
        // line 201
        yield "    ";
        $context["symfony_status_class"] = ["dev" => "warning", "stable" => "success", "eom" => "warning", "eol" => "error"];
        // line 202
        yield "
    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">
                    <span class=\"config-symfony-version-status-badge status-";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = ($context["symfony_status_class"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 207)] ?? null) : null), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), (($_v1 = ($context["symfony_status"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 207)] ?? null) : null)), "html", null, true);
        yield "</span>
                </span>
                <span class=\"label\">Your Symfony version status</span>
            </div>

            ";
        // line 212
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonylts", [], "any", false, false, false, 212)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 213
            yield "                <div class=\"metric\">
                    <span class=\"value config-symfony-eol\">
                        ";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyeom", [], "any", false, false, false, 215), "html", null, true);
            yield "
                    </span>
                    <span class=\"label\">Bug fixes ";
            // line 217
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 217), ["eom", "eol"])) ? ("ended on") : ("until"));
            yield "</span>
                </div>
            ";
        }
        // line 220
        yield "
            <div class=\"metric\">
                <span class=\"value config-symfony-eol\">
                    ";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyeol", [], "any", false, false, false, 223), "html", null, true);
        yield "
                </span>
                <span class=\"label\">
                    ";
        // line 226
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonylts", [], "any", false, false, false, 226)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Security fixes") : ("Bug fixes and security fixes"));
        yield "
                    ";
        // line 227
        yield ((("eol" == CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 227))) ? ("ended on") : ("until"));
        yield "</span>
            </div>
        </div>
    </div>

    <a class=\"config-symfony-version-roadmap-link\" href=\"https://symfony.com/releases/";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyminorversion", [], "any", false, false, false, 232), "html", null, true);
        yield "\">View Symfony ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 232), "html", null, true);
        yield " release details</a>

    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, false, 238), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 238)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " <span class=\"unit\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 238), "html", null, true);
            yield "</span>";
        }
        yield "</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phparchitecture", [], "any", false, false, false, 243), "html", null, true);
        yield " <span class=\"unit\">bits</span></span>
            <span class=\"label\">Architecture</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpintllocale", [], "any", false, false, false, 248), "html", null, true);
        yield "</span>
            <span class=\"label\">Intl locale</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phptimezone", [], "any", false, false, false, 253), "html", null, true);
        yield "</span>
            <span class=\"label\">Timezone</span>
        </div>
    </div>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value value-is-icon ";
        // line 261
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, false, 261)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("value-shows-no-color") : (""));
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "zendopcachestatus", [], "any", true, true, false, 261)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "zendopcachestatus", [], "any", false, false, false, 261), "")) : ("")), "html", null, true);
        yield "\">";
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, false, 261)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                <span class=\"label\">OPcache</span>
            </div>

            <div class=\"metric\">
                <span class=\"value value-is-icon ";
        // line 266
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, false, 266)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("value-shows-no-color") : (""));
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "apcustatus", [], "any", true, true, false, 266)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "apcustatus", [], "any", false, false, false, 266), "")) : ("")), "html", null, true);
        yield "\">";
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, false, 266)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                <span class=\"label\">APCu</span>
            </div>

            <div class=\"metric\">
                <span class=\"value value-is-icon ";
        // line 271
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasxdebug", [], "any", false, false, false, 271)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("value-shows-no-color") : (""));
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "xdebugstatus", [], "any", true, true, false, 271)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "xdebugstatus", [], "any", false, false, false, 271), "")) : ("")), "html", null, true);
        yield "\">";
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasxdebug", [], "any", false, false, false, 271)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                <span class=\"label\">Xdebug</span>
            </div>
        </div>
    </div>

    <p>
        <a href=\"";
        // line 278
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_phpinfo");
        yield "\">View full PHP configuration</a>
    </p>

    ";
        // line 281
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 281)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 282
            yield "        <h2>Enabled Bundles <small>(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 282)), "html", null, true);
            yield ")</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 291
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 291))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 292
                yield "                <tr>
                    <th scope=\"row\" class=\"font-normal\">";
                // line 293
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "</th>
                    <td class=\"font-normal\">";
                // line 294
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 294)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[$context["name"]] ?? null) : null));
                yield "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['name'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            yield "            </tbody>
        </table>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Collector/config.html.twig";
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
        return array (  679 => 297,  670 => 294,  666 => 293,  663 => 292,  659 => 291,  646 => 282,  644 => 281,  638 => 278,  624 => 271,  612 => 266,  600 => 261,  589 => 253,  581 => 248,  573 => 243,  560 => 238,  549 => 232,  541 => 227,  537 => 226,  531 => 223,  526 => 220,  520 => 217,  515 => 215,  511 => 213,  509 => 212,  499 => 207,  492 => 202,  489 => 201,  487 => 200,  483 => 198,  476 => 194,  473 => 193,  471 => 192,  468 => 191,  461 => 187,  458 => 186,  456 => 185,  450 => 181,  446 => 179,  444 => 178,  439 => 176,  432 => 171,  422 => 170,  410 => 165,  405 => 164,  395 => 163,  385 => 160,  382 => 159,  377 => 157,  361 => 144,  357 => 143,  352 => 140,  350 => 139,  342 => 134,  332 => 129,  325 => 128,  321 => 126,  319 => 125,  312 => 124,  306 => 122,  304 => 121,  295 => 115,  291 => 114,  283 => 113,  276 => 108,  268 => 105,  264 => 103,  262 => 102,  259 => 101,  253 => 98,  249 => 96,  247 => 95,  242 => 92,  236 => 90,  228 => 88,  226 => 87,  219 => 82,  212 => 78,  208 => 76,  205 => 75,  203 => 74,  200 => 73,  194 => 71,  189 => 69,  186 => 68,  184 => 67,  181 => 66,  178 => 65,  175 => 64,  172 => 63,  169 => 62,  166 => 61,  163 => 60,  160 => 59,  157 => 58,  154 => 57,  151 => 56,  148 => 55,  145 => 54,  142 => 53,  139 => 52,  136 => 51,  133 => 50,  123 => 49,  70 => 4,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@WebProfiler/Collector/config.html.twig", "C:\\wamp64\\www\\appac\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\config.html.twig");
    }
}
