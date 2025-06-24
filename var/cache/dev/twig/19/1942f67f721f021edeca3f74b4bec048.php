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

/* faction/show.html.twig */
class __TwigTemplate_211d3f6f2a7f389e75670225ccce4a1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "faction/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "faction/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "faction/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 3, $this->source); })()), "Name", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .section-title {
            margin-top: 3rem;
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            color: #fff;
        }

        .card-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.5rem;
            margin-top: 1rem;
        }

        .entity-card {
            background-color: #111111;
            border-radius: 12px;
            padding: 1rem;
            width: 140px;
            text-align: center;
            color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }

        .entity-card img {
            width: 100%;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 0.5rem;
        }

        .entity-card .name {
            font-weight: bold;
            font-size: 0.95rem;
        }

        .entity-card .type {
            font-size: 0.8rem;
            color: #aaa;
        }

        .faction-image {
            max-width: 300px;
            width: 100%;
            border-radius: 1rem;
            object-fit: cover;
        }

        .faction-description {
            white-space: pre-line;
        }

        .info-label {
            font-weight: bold;
        }

        .faction-flex {
            display: flex;
            flex-wrap: wrap;
        }

        @media (max-width: 768px) {
            .faction-flex {
                flex-direction: column !important;
                align-items: center !important;
                text-align: center;
            }

            .faction-flex .col-md-4,
            .faction-flex .col-md-8 {
                max-width: 100%;
                flex: 0 0 100%;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 88
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

        // line 89
        yield "<div class=\"container text-white my-5\">
    <div class=\"row g-4 align-items-start faction-flex\">
        <div class=\"col-md-4 text-center\">
            ";
        // line 92
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 92, $this->source); })()), "ImageFaction", [], "any", false, false, false, 92)) {
            // line 93
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/factions/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 93, $this->source); })()), "ImageFaction", [], "any", false, false, false, 93))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 93, $this->source); })()), "Name", [], "any", false, false, false, 93), "html", null, true);
            yield "\" class=\"faction-image\">
            ";
        }
        // line 95
        yield "        </div>

        <div class=\"col-md-8\">
            <h2 class=\"text-warning fw-bold\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 98, $this->source); })()), "Name", [], "any", false, false, false, 98), "html", null, true);
        yield "</h2>
            <p><span class=\"info-label\">Type :</span> ";
        // line 99
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 99, $this->source); })()), "Type", [], "any", false, false, false, 99)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 99, $this->source); })()), "Type", [], "any", false, false, false, 99), "html", null, true)) : ("Inconnu"));
        yield "</p>
            <p><span class=\"info-label\">Régime :</span> ";
        // line 100
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 100, $this->source); })()), "Regime", [], "any", false, false, false, 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 100, $this->source); })()), "Regime", [], "any", false, false, false, 100), "html", null, true)) : ("Inconnu"));
        yield "</p>
            <p><span class=\"info-label\">Capitale :</span> ";
        // line 101
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 101, $this->source); })()), "Capital", [], "any", false, false, false, 101)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 101, $this->source); })()), "Capital", [], "any", false, false, false, 101), "html", null, true)) : ("Inconnue"));
        yield "</p>
            <p class=\"faction-description\">
                <span class=\"info-label\">Description :</span><br>
                ";
        // line 104
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 104, $this->source); })()), "Description", [], "any", false, false, false, 104)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 104, $this->source); })()), "Description", [], "any", false, false, false, 104), "html", null, true)) : ("Aucune description fournie."));
        yield "
            </p>
        </div>
    </div>

    ";
        // line 109
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 109, $this->source); })()), "FactionContinent", [], "any", false, false, false, 109)) > 0)) {
            // line 110
            yield "        <div class=\"section-title\">Continents</div>
        <div class=\"card-group\">
            ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 112, $this->source); })()), "FactionContinent", [], "any", false, false, false, 112));
            foreach ($context['_seq'] as $context["_key"] => $context["continent"]) {
                // line 113
                yield "                <div class=\"entity-card\">
                    ";
                // line 114
                if (CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "ImageContinent", [], "any", false, false, false, 114)) {
                    // line 115
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/continents/" . CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "ImageContinent", [], "any", false, false, false, 115))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "Name", [], "any", false, false, false, 115), "html", null, true);
                    yield "\">
                    ";
                }
                // line 117
                yield "                    <div class=\"name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "Name", [], "any", false, false, false, 117), "html", null, true);
                yield "</div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['continent'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            yield "        </div>
    ";
        }
        // line 122
        yield "
    ";
        // line 123
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 123, $this->source); })()), "FactionCity", [], "any", false, false, false, 123)) > 0)) {
            // line 124
            yield "        <div class=\"section-title\">Cities</div>
        <div class=\"card-group\">
            ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 126, $this->source); })()), "FactionCity", [], "any", false, false, false, 126));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 127
                yield "                <div class=\"entity-card\">
                    ";
                // line 128
                if (CoreExtension::getAttribute($this->env, $this->source, $context["city"], "ImageCity", [], "any", false, false, false, 128)) {
                    // line 129
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cities/" . CoreExtension::getAttribute($this->env, $this->source, $context["city"], "ImageCity", [], "any", false, false, false, 129))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["city"], "Name", [], "any", false, false, false, 129), "html", null, true);
                    yield "\">
                    ";
                }
                // line 131
                yield "                    <div class=\"name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["city"], "Name", [], "any", false, false, false, 131), "html", null, true);
                yield "</div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['city'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            yield "        </div>
    ";
        }
        // line 136
        yield "
    ";
        // line 137
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 137, $this->source); })()), "FactionGuild", [], "any", false, false, false, 137)) > 0)) {
            // line 138
            yield "        <div class=\"section-title\">Guilds</div>
        <div class=\"card-group\">
            ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 140, $this->source); })()), "FactionGuild", [], "any", false, false, false, 140));
            foreach ($context['_seq'] as $context["_key"] => $context["guild"]) {
                // line 141
                yield "                <div class=\"entity-card\">
                    ";
                // line 142
                if (CoreExtension::getAttribute($this->env, $this->source, $context["guild"], "ImageGuild", [], "any", false, false, false, 142)) {
                    // line 143
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/guilds/" . CoreExtension::getAttribute($this->env, $this->source, $context["guild"], "ImageGuild", [], "any", false, false, false, 143))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guild"], "Name", [], "any", false, false, false, 143), "html", null, true);
                    yield "\">
                    ";
                }
                // line 145
                yield "                    <div class=\"name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guild"], "Name", [], "any", false, false, false, 145), "html", null, true);
                yield "</div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['guild'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            yield "        </div>
    ";
        }
        // line 150
        yield "
    ";
        // line 151
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 151, $this->source); })()), "FactionHero", [], "any", false, false, false, 151)) > 0)) {
            // line 152
            yield "    <div class=\"section-title\">Heroes</div>
    <div class=\"card-group\">
        ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["faction"]) || array_key_exists("faction", $context) ? $context["faction"] : (function () { throw new RuntimeError('Variable "faction" does not exist.', 154, $this->source); })()), "FactionHero", [], "any", false, false, false, 154));
            foreach ($context['_seq'] as $context["_key"] => $context["hero"]) {
                // line 155
                yield "            <div class=\"entity-card\">
                ";
                // line 156
                if (CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "ImageHero", [], "any", false, false, false, 156)) {
                    // line 157
                    yield "                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/heroes/" . CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "ImageHero", [], "any", false, false, false, 157))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 157), "html", null, true);
                    yield "\">
                ";
                }
                // line 159
                yield "                <div class=\"name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 159), "html", null, true);
                yield "</div>
                <div class=\"type\">";
                // line 160
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Fonction", [], "any", false, false, false, 160)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Fonction", [], "any", false, false, false, 160), "html", null, true)) : ("Fonction inconnue"));
                yield "</div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['hero'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            yield "    </div>
";
        }
        // line 165
        yield "
</div>
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
        return "faction/show.html.twig";
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
        return array (  414 => 165,  410 => 163,  401 => 160,  396 => 159,  388 => 157,  386 => 156,  383 => 155,  379 => 154,  375 => 152,  373 => 151,  370 => 150,  366 => 148,  356 => 145,  348 => 143,  346 => 142,  343 => 141,  339 => 140,  335 => 138,  333 => 137,  330 => 136,  326 => 134,  316 => 131,  308 => 129,  306 => 128,  303 => 127,  299 => 126,  295 => 124,  293 => 123,  290 => 122,  286 => 120,  276 => 117,  268 => 115,  266 => 114,  263 => 113,  259 => 112,  255 => 110,  253 => 109,  245 => 104,  239 => 101,  235 => 100,  231 => 99,  227 => 98,  222 => 95,  214 => 93,  212 => 92,  207 => 89,  194 => 88,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ faction.Name }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .section-title {
            margin-top: 3rem;
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            color: #fff;
        }

        .card-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.5rem;
            margin-top: 1rem;
        }

        .entity-card {
            background-color: #111111;
            border-radius: 12px;
            padding: 1rem;
            width: 140px;
            text-align: center;
            color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }

        .entity-card img {
            width: 100%;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 0.5rem;
        }

        .entity-card .name {
            font-weight: bold;
            font-size: 0.95rem;
        }

        .entity-card .type {
            font-size: 0.8rem;
            color: #aaa;
        }

        .faction-image {
            max-width: 300px;
            width: 100%;
            border-radius: 1rem;
            object-fit: cover;
        }

        .faction-description {
            white-space: pre-line;
        }

        .info-label {
            font-weight: bold;
        }

        .faction-flex {
            display: flex;
            flex-wrap: wrap;
        }

        @media (max-width: 768px) {
            .faction-flex {
                flex-direction: column !important;
                align-items: center !important;
                text-align: center;
            }

            .faction-flex .col-md-4,
            .faction-flex .col-md-8 {
                max-width: 100%;
                flex: 0 0 100%;
            }
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container text-white my-5\">
    <div class=\"row g-4 align-items-start faction-flex\">
        <div class=\"col-md-4 text-center\">
            {% if faction.ImageFaction %}
                <img src=\"{{ asset('uploads/factions/' ~ faction.ImageFaction) }}\" alt=\"{{ faction.Name }}\" class=\"faction-image\">
            {% endif %}
        </div>

        <div class=\"col-md-8\">
            <h2 class=\"text-warning fw-bold\">{{ faction.Name }}</h2>
            <p><span class=\"info-label\">Type :</span> {{ faction.Type ?: 'Inconnu' }}</p>
            <p><span class=\"info-label\">Régime :</span> {{ faction.Regime ?: 'Inconnu' }}</p>
            <p><span class=\"info-label\">Capitale :</span> {{ faction.Capital ?: 'Inconnue' }}</p>
            <p class=\"faction-description\">
                <span class=\"info-label\">Description :</span><br>
                {{ faction.Description ?: 'Aucune description fournie.' }}
            </p>
        </div>
    </div>

    {% if faction.FactionContinent|length > 0 %}
        <div class=\"section-title\">Continents</div>
        <div class=\"card-group\">
            {% for continent in faction.FactionContinent %}
                <div class=\"entity-card\">
                    {% if continent.ImageContinent %}
                        <img src=\"{{ asset('uploads/continents/' ~ continent.ImageContinent) }}\" alt=\"{{ continent.Name }}\">
                    {% endif %}
                    <div class=\"name\">{{ continent.Name }}</div>
                </div>
            {% endfor %}
        </div>
    {% endif %}

    {% if faction.FactionCity|length > 0 %}
        <div class=\"section-title\">Cities</div>
        <div class=\"card-group\">
            {% for city in faction.FactionCity %}
                <div class=\"entity-card\">
                    {% if city.ImageCity %}
                        <img src=\"{{ asset('uploads/cities/' ~ city.ImageCity) }}\" alt=\"{{ city.Name }}\">
                    {% endif %}
                    <div class=\"name\">{{ city.Name }}</div>
                </div>
            {% endfor %}
        </div>
    {% endif %}

    {% if faction.FactionGuild|length > 0 %}
        <div class=\"section-title\">Guilds</div>
        <div class=\"card-group\">
            {% for guild in faction.FactionGuild %}
                <div class=\"entity-card\">
                    {% if guild.ImageGuild %}
                        <img src=\"{{ asset('uploads/guilds/' ~ guild.ImageGuild) }}\" alt=\"{{ guild.Name }}\">
                    {% endif %}
                    <div class=\"name\">{{ guild.Name }}</div>
                </div>
            {% endfor %}
        </div>
    {% endif %}

    {% if faction.FactionHero|length > 0 %}
    <div class=\"section-title\">Heroes</div>
    <div class=\"card-group\">
        {% for hero in faction.FactionHero %}
            <div class=\"entity-card\">
                {% if hero.ImageHero %}
                    <img src=\"{{ asset('uploads/heroes/' ~ hero.ImageHero) }}\" alt=\"{{ hero.Name }}\">
                {% endif %}
                <div class=\"name\">{{ hero.Name }}</div>
                <div class=\"type\">{{ hero.Fonction ?: 'Fonction inconnue' }}</div>
            </div>
        {% endfor %}
    </div>
{% endif %}

</div>
{% endblock %}
", "faction/show.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\faction\\show.html.twig");
    }
}
