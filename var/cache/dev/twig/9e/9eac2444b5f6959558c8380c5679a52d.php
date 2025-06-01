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

/* continent/show.html.twig */
class __TwigTemplate_170e47bdd3b55a9ea9fbd31a41806da3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "continent/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "continent/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "continent/show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["continent"]) || array_key_exists("continent", $context) ? $context["continent"] : (function () { throw new RuntimeError('Variable "continent" does not exist.', 3, $this->source); })()), "Name", [], "any", false, false, false, 3), "html", null, true);
        
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
        .continent-image {
            max-width: 300px;
            width: 100%;
            border-radius: 1rem;
            object-fit: cover;
        }

        .continent-description {
            white-space: pre-line;
        }

        .info-label {
            font-weight: bold;
        }

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
            background-color: #1f1f1f;
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

        .continent-flex {
            display: flex;
            flex-wrap: wrap;
        }

        @media (max-width: 768px) {
            .continent-flex {
                flex-direction: column !important;
                align-items: center !important;
                text-align: center;
            }

            .continent-flex .col-md-4,
            .continent-flex .col-md-8 {
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
    <div class=\"row g-4 align-items-start continent-flex\">
        <div class=\"col-md-4 text-center\">
            ";
        // line 92
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["continent"]) || array_key_exists("continent", $context) ? $context["continent"] : (function () { throw new RuntimeError('Variable "continent" does not exist.', 92, $this->source); })()), "ImageContinent", [], "any", false, false, false, 92)) {
            // line 93
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/continents/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["continent"]) || array_key_exists("continent", $context) ? $context["continent"] : (function () { throw new RuntimeError('Variable "continent" does not exist.', 93, $this->source); })()), "ImageContinent", [], "any", false, false, false, 93))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["continent"]) || array_key_exists("continent", $context) ? $context["continent"] : (function () { throw new RuntimeError('Variable "continent" does not exist.', 93, $this->source); })()), "Name", [], "any", false, false, false, 93), "html", null, true);
            yield "\" class=\"continent-image\">
            ";
        }
        // line 95
        yield "        </div>

        <div class=\"col-md-8\">
            <h2 class=\"text-warning fw-bold\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["continent"]) || array_key_exists("continent", $context) ? $context["continent"] : (function () { throw new RuntimeError('Variable "continent" does not exist.', 98, $this->source); })()), "Name", [], "any", false, false, false, 98), "html", null, true);
        yield "</h2>
            <p class=\"continent-description\">
                <span class=\"info-label\">Description :</span><br>
                ";
        // line 101
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["continent"]) || array_key_exists("continent", $context) ? $context["continent"] : (function () { throw new RuntimeError('Variable "continent" does not exist.', 101, $this->source); })()), "Description", [], "any", false, false, false, 101)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["continent"]) || array_key_exists("continent", $context) ? $context["continent"] : (function () { throw new RuntimeError('Variable "continent" does not exist.', 101, $this->source); })()), "Description", [], "any", false, false, false, 101), "html", null, true)) : ("Aucune description disponible."));
        yield "
            </p>
        </div>
    </div>

    ";
        // line 107
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["continent"]) || array_key_exists("continent", $context) ? $context["continent"] : (function () { throw new RuntimeError('Variable "continent" does not exist.', 107, $this->source); })()), "ContinentFaction", [], "any", false, false, false, 107))) {
            // line 108
            yield "        <div class=\"section-title\">Factions liées</div>
        <div class=\"card-group\">
            ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["continent"]) || array_key_exists("continent", $context) ? $context["continent"] : (function () { throw new RuntimeError('Variable "continent" does not exist.', 110, $this->source); })()), "ContinentFaction", [], "any", false, false, false, 110));
            foreach ($context['_seq'] as $context["_key"] => $context["faction"]) {
                // line 111
                yield "                <div class=\"entity-card\">
                    ";
                // line 112
                if (CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "ImageFaction", [], "any", false, false, false, 112)) {
                    // line 113
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/factions/" . CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "ImageFaction", [], "any", false, false, false, 113))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "Name", [], "any", false, false, false, 113), "html", null, true);
                    yield "\">
                    ";
                } else {
                    // line 115
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/placeholder.png"), "html", null, true);
                    yield "\" alt=\"No image\">
                    ";
                }
                // line 117
                yield "                    <div class=\"name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "Name", [], "any", false, false, false, 117), "html", null, true);
                yield "</div>
                    <div class=\"type\">";
                // line 118
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "Type", [], "any", false, false, false, 118)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "Type", [], "any", false, false, false, 118), "html", null, true)) : (""));
                yield "</div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['faction'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            yield "        </div>
    ";
        }
        // line 123
        yield "
    ";
        // line 125
        yield "    ";
        $context["allGuilds"] = [];
        // line 126
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["continent"]) || array_key_exists("continent", $context) ? $context["continent"] : (function () { throw new RuntimeError('Variable "continent" does not exist.', 126, $this->source); })()), "ContinentFaction", [], "any", false, false, false, 126));
        foreach ($context['_seq'] as $context["_key"] => $context["faction"]) {
            // line 127
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "FactionGuild", [], "any", false, false, false, 127));
            foreach ($context['_seq'] as $context["_key"] => $context["guild"]) {
                // line 128
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["guild"], "GuildWorld", [], "any", false, false, false, 128));
                foreach ($context['_seq'] as $context["_key"] => $context["world"]) {
                    // line 129
                    yield "                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["world"], "id", [], "any", false, false, false, 129) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["continent"]) || array_key_exists("continent", $context) ? $context["continent"] : (function () { throw new RuntimeError('Variable "continent" does not exist.', 129, $this->source); })()), "ContinentWorld", [], "any", false, false, false, 129), "id", [], "any", false, false, false, 129))) {
                        // line 130
                        yield "                    ";
                        $context["allGuilds"] = Twig\Extension\CoreExtension::merge((isset($context["allGuilds"]) || array_key_exists("allGuilds", $context) ? $context["allGuilds"] : (function () { throw new RuntimeError('Variable "allGuilds" does not exist.', 130, $this->source); })()), [$context["guild"]]);
                        // line 131
                        yield "                ";
                    }
                    // line 132
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['world'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['guild'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['faction'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "
    ";
        // line 136
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["allGuilds"]) || array_key_exists("allGuilds", $context) ? $context["allGuilds"] : (function () { throw new RuntimeError('Variable "allGuilds" does not exist.', 136, $this->source); })()))) {
            // line 137
            yield "        <div class=\"section-title\">Guildes associées</div>
        <div class=\"card-group\">
            ";
            // line 139
            $context["shownGuilds"] = [];
            // line 140
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allGuilds"]) || array_key_exists("allGuilds", $context) ? $context["allGuilds"] : (function () { throw new RuntimeError('Variable "allGuilds" does not exist.', 140, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["guild"]) {
                // line 141
                yield "                ";
                if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["guild"], "id", [], "any", false, false, false, 141), (isset($context["shownGuilds"]) || array_key_exists("shownGuilds", $context) ? $context["shownGuilds"] : (function () { throw new RuntimeError('Variable "shownGuilds" does not exist.', 141, $this->source); })()))) {
                    // line 142
                    yield "                    ";
                    $context["shownGuilds"] = Twig\Extension\CoreExtension::merge((isset($context["shownGuilds"]) || array_key_exists("shownGuilds", $context) ? $context["shownGuilds"] : (function () { throw new RuntimeError('Variable "shownGuilds" does not exist.', 142, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["guild"], "id", [], "any", false, false, false, 142)]);
                    // line 143
                    yield "                    <div class=\"entity-card\">
                        ";
                    // line 144
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["guild"], "ImageGuild", [], "any", false, false, false, 144)) {
                        // line 145
                        yield "                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/guilds/" . CoreExtension::getAttribute($this->env, $this->source, $context["guild"], "ImageGuild", [], "any", false, false, false, 145))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guild"], "Name", [], "any", false, false, false, 145), "html", null, true);
                        yield "\">
                        ";
                    } else {
                        // line 147
                        yield "                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/placeholder.png"), "html", null, true);
                        yield "\" alt=\"No image\">
                        ";
                    }
                    // line 149
                    yield "                        <div class=\"name\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guild"], "Name", [], "any", false, false, false, 149), "html", null, true);
                    yield "</div>
                        <div class=\"type\">";
                    // line 150
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["guild"], "Type", [], "any", false, false, false, 150)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guild"], "Type", [], "any", false, false, false, 150), "html", null, true)) : (""));
                    yield "</div>
                    </div>
                ";
                }
                // line 153
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['guild'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            yield "        </div>
    ";
        }
        // line 156
        yield "
    ";
        // line 158
        yield "    ";
        $context["allHeroes"] = [];
        // line 159
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["continent"]) || array_key_exists("continent", $context) ? $context["continent"] : (function () { throw new RuntimeError('Variable "continent" does not exist.', 159, $this->source); })()), "ContinentFaction", [], "any", false, false, false, 159));
        foreach ($context['_seq'] as $context["_key"] => $context["faction"]) {
            // line 160
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "FactionHero", [], "any", false, false, false, 160));
            foreach ($context['_seq'] as $context["_key"] => $context["hero"]) {
                // line 161
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "HeroWorld", [], "any", false, false, false, 161), "id", [], "any", false, false, false, 161) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["continent"]) || array_key_exists("continent", $context) ? $context["continent"] : (function () { throw new RuntimeError('Variable "continent" does not exist.', 161, $this->source); })()), "ContinentWorld", [], "any", false, false, false, 161), "id", [], "any", false, false, false, 161))) {
                    // line 162
                    yield "                ";
                    $context["allHeroes"] = Twig\Extension\CoreExtension::merge((isset($context["allHeroes"]) || array_key_exists("allHeroes", $context) ? $context["allHeroes"] : (function () { throw new RuntimeError('Variable "allHeroes" does not exist.', 162, $this->source); })()), [$context["hero"]]);
                    // line 163
                    yield "            ";
                }
                // line 164
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['hero'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['faction'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "
    ";
        // line 167
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["allHeroes"]) || array_key_exists("allHeroes", $context) ? $context["allHeroes"] : (function () { throw new RuntimeError('Variable "allHeroes" does not exist.', 167, $this->source); })()))) {
            // line 168
            yield "        <div class=\"section-title\">Héros associés</div>
        <div class=\"card-group\">
            ";
            // line 170
            $context["shownHeroes"] = [];
            // line 171
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allHeroes"]) || array_key_exists("allHeroes", $context) ? $context["allHeroes"] : (function () { throw new RuntimeError('Variable "allHeroes" does not exist.', 171, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["hero"]) {
                // line 172
                yield "                ";
                if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 172), (isset($context["shownHeroes"]) || array_key_exists("shownHeroes", $context) ? $context["shownHeroes"] : (function () { throw new RuntimeError('Variable "shownHeroes" does not exist.', 172, $this->source); })()))) {
                    // line 173
                    yield "                    ";
                    $context["shownHeroes"] = Twig\Extension\CoreExtension::merge((isset($context["shownHeroes"]) || array_key_exists("shownHeroes", $context) ? $context["shownHeroes"] : (function () { throw new RuntimeError('Variable "shownHeroes" does not exist.', 173, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 173)]);
                    // line 174
                    yield "                    <div class=\"entity-card\">
                        ";
                    // line 175
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "ImageHero", [], "any", false, false, false, 175)) {
                        // line 176
                        yield "                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/heroes/" . CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "ImageHero", [], "any", false, false, false, 176))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 176), "html", null, true);
                        yield "\">
                        ";
                    } else {
                        // line 178
                        yield "                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/placeholder.png"), "html", null, true);
                        yield "\" alt=\"No image\">
                        ";
                    }
                    // line 180
                    yield "                        <div class=\"name\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 180), "html", null, true);
                    yield "</div>
                        <div class=\"type\">";
                    // line 181
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Fonction", [], "any", false, false, false, 181)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Fonction", [], "any", false, false, false, 181), "html", null, true)) : (""));
                    yield "</div>
                    </div>
                ";
                }
                // line 184
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['hero'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            yield "        </div>
    ";
        }
        // line 187
        yield "</div>
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
        return "continent/show.html.twig";
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
        return array (  498 => 187,  494 => 185,  488 => 184,  482 => 181,  477 => 180,  471 => 178,  463 => 176,  461 => 175,  458 => 174,  455 => 173,  452 => 172,  447 => 171,  445 => 170,  441 => 168,  439 => 167,  436 => 166,  430 => 165,  424 => 164,  421 => 163,  418 => 162,  415 => 161,  410 => 160,  405 => 159,  402 => 158,  399 => 156,  395 => 154,  389 => 153,  383 => 150,  378 => 149,  372 => 147,  364 => 145,  362 => 144,  359 => 143,  356 => 142,  353 => 141,  348 => 140,  346 => 139,  342 => 137,  340 => 136,  337 => 135,  331 => 134,  325 => 133,  319 => 132,  316 => 131,  313 => 130,  310 => 129,  305 => 128,  300 => 127,  295 => 126,  292 => 125,  289 => 123,  285 => 121,  276 => 118,  271 => 117,  265 => 115,  257 => 113,  255 => 112,  252 => 111,  248 => 110,  244 => 108,  241 => 107,  233 => 101,  227 => 98,  222 => 95,  214 => 93,  212 => 92,  207 => 89,  194 => 88,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ continent.Name }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .continent-image {
            max-width: 300px;
            width: 100%;
            border-radius: 1rem;
            object-fit: cover;
        }

        .continent-description {
            white-space: pre-line;
        }

        .info-label {
            font-weight: bold;
        }

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
            background-color: #1f1f1f;
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

        .continent-flex {
            display: flex;
            flex-wrap: wrap;
        }

        @media (max-width: 768px) {
            .continent-flex {
                flex-direction: column !important;
                align-items: center !important;
                text-align: center;
            }

            .continent-flex .col-md-4,
            .continent-flex .col-md-8 {
                max-width: 100%;
                flex: 0 0 100%;
            }
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container text-white my-5\">
    <div class=\"row g-4 align-items-start continent-flex\">
        <div class=\"col-md-4 text-center\">
            {% if continent.ImageContinent %}
                <img src=\"{{ asset('uploads/continents/' ~ continent.ImageContinent) }}\" alt=\"{{ continent.Name }}\" class=\"continent-image\">
            {% endif %}
        </div>

        <div class=\"col-md-8\">
            <h2 class=\"text-warning fw-bold\">{{ continent.Name }}</h2>
            <p class=\"continent-description\">
                <span class=\"info-label\">Description :</span><br>
                {{ continent.Description ?: 'Aucune description disponible.' }}
            </p>
        </div>
    </div>

    {# Factions #}
    {% if continent.ContinentFaction is not empty %}
        <div class=\"section-title\">Factions liées</div>
        <div class=\"card-group\">
            {% for faction in continent.ContinentFaction %}
                <div class=\"entity-card\">
                    {% if faction.ImageFaction %}
                        <img src=\"{{ asset('uploads/factions/' ~ faction.ImageFaction) }}\" alt=\"{{ faction.Name }}\">
                    {% else %}
                        <img src=\"{{ asset('img/placeholder.png') }}\" alt=\"No image\">
                    {% endif %}
                    <div class=\"name\">{{ faction.Name }}</div>
                    <div class=\"type\">{{ faction.Type ?: '' }}</div>
                </div>
            {% endfor %}
        </div>
    {% endif %}

    {# Guildes liées #}
    {% set allGuilds = [] %}
    {% for faction in continent.ContinentFaction %}
        {% for guild in faction.FactionGuild %}
            {% for world in guild.GuildWorld %}
                {% if world.id == continent.ContinentWorld.id %}
                    {% set allGuilds = allGuilds|merge([guild]) %}
                {% endif %}
            {% endfor %}
        {% endfor %}
    {% endfor %}

    {% if allGuilds is not empty %}
        <div class=\"section-title\">Guildes associées</div>
        <div class=\"card-group\">
            {% set shownGuilds = [] %}
            {% for guild in allGuilds %}
                {% if guild.id not in shownGuilds %}
                    {% set shownGuilds = shownGuilds|merge([guild.id]) %}
                    <div class=\"entity-card\">
                        {% if guild.ImageGuild %}
                            <img src=\"{{ asset('uploads/guilds/' ~ guild.ImageGuild) }}\" alt=\"{{ guild.Name }}\">
                        {% else %}
                            <img src=\"{{ asset('img/placeholder.png') }}\" alt=\"No image\">
                        {% endif %}
                        <div class=\"name\">{{ guild.Name }}</div>
                        <div class=\"type\">{{ guild.Type ?: '' }}</div>
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}

    {# Héros liés #}
    {% set allHeroes = [] %}
    {% for faction in continent.ContinentFaction %}
        {% for hero in faction.FactionHero %}
            {% if hero.HeroWorld.id == continent.ContinentWorld.id %}
                {% set allHeroes = allHeroes|merge([hero]) %}
            {% endif %}
        {% endfor %}
    {% endfor %}

    {% if allHeroes is not empty %}
        <div class=\"section-title\">Héros associés</div>
        <div class=\"card-group\">
            {% set shownHeroes = [] %}
            {% for hero in allHeroes %}
                {% if hero.id not in shownHeroes %}
                    {% set shownHeroes = shownHeroes|merge([hero.id]) %}
                    <div class=\"entity-card\">
                        {% if hero.ImageHero %}
                            <img src=\"{{ asset('uploads/heroes/' ~ hero.ImageHero) }}\" alt=\"{{ hero.Name }}\">
                        {% else %}
                            <img src=\"{{ asset('img/placeholder.png') }}\" alt=\"No image\">
                        {% endif %}
                        <div class=\"name\">{{ hero.Name }}</div>
                        <div class=\"type\">{{ hero.Fonction ?: '' }}</div>
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}
</div>
{% endblock %}
", "continent/show.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\continent\\show.html.twig");
    }
}
