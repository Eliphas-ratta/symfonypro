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
class __TwigTemplate_73301e2374a01dd9a511d90169353627 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "faction/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "Name", [], "any", false, false, false, 3), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 89
        yield "<div class=\"container text-white my-5\">
    <div class=\"row g-4 align-items-start faction-flex\">
        <div class=\"col-md-4 text-center\">
            ";
        // line 92
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "ImageFaction", [], "any", false, false, false, 92)) {
            // line 93
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/factions/" . CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "ImageFaction", [], "any", false, false, false, 93))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "Name", [], "any", false, false, false, 93), "html", null, true);
            yield "\" class=\"faction-image\">
            ";
        }
        // line 95
        yield "        </div>

        <div class=\"col-md-8\">
            <h2 class=\"text-warning fw-bold\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "Name", [], "any", false, false, false, 98), "html", null, true);
        yield "</h2>
            <p><span class=\"info-label\">Type :</span> ";
        // line 99
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "Type", [], "any", false, false, false, 99)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "Type", [], "any", false, false, false, 99), "html", null, true)) : ("Inconnu"));
        yield "</p>
            <p><span class=\"info-label\">Régime :</span> ";
        // line 100
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "Regime", [], "any", false, false, false, 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "Regime", [], "any", false, false, false, 100), "html", null, true)) : ("Inconnu"));
        yield "</p>
            <p><span class=\"info-label\">Capitale :</span> ";
        // line 101
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "Capital", [], "any", false, false, false, 101)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "Capital", [], "any", false, false, false, 101), "html", null, true)) : ("Inconnue"));
        yield "</p>
            <p class=\"faction-description\">
                <span class=\"info-label\">Description :</span><br>
                ";
        // line 104
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "Description", [], "any", false, false, false, 104)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "Description", [], "any", false, false, false, 104), "html", null, true)) : ("Aucune description fournie."));
        yield "
            </p>
        </div>
    </div>

    ";
        // line 109
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "FactionContinent", [], "any", false, false, false, 109)) > 0)) {
            // line 110
            yield "        <div class=\"section-title\">Continents</div>
        <div class=\"card-group\">
            ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "FactionContinent", [], "any", false, false, false, 112));
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "FactionCity", [], "any", false, false, false, 123)) > 0)) {
            // line 124
            yield "        <div class=\"section-title\">Cities</div>
        <div class=\"card-group\">
            ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "FactionCity", [], "any", false, false, false, 126));
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "FactionGuild", [], "any", false, false, false, 137)) > 0)) {
            // line 138
            yield "        <div class=\"section-title\">Guilds</div>
        <div class=\"card-group\">
            ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "FactionGuild", [], "any", false, false, false, 140));
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "FactionHero", [], "any", false, false, false, 151)) > 0)) {
            // line 152
            yield "    <div class=\"section-title\">Heroes</div>
    <div class=\"card-group\">
        ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["faction"] ?? null), "FactionHero", [], "any", false, false, false, 154));
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
        return array (  372 => 165,  368 => 163,  359 => 160,  354 => 159,  346 => 157,  344 => 156,  341 => 155,  337 => 154,  333 => 152,  331 => 151,  328 => 150,  324 => 148,  314 => 145,  306 => 143,  304 => 142,  301 => 141,  297 => 140,  293 => 138,  291 => 137,  288 => 136,  284 => 134,  274 => 131,  266 => 129,  264 => 128,  261 => 127,  257 => 126,  253 => 124,  251 => 123,  248 => 122,  244 => 120,  234 => 117,  226 => 115,  224 => 114,  221 => 113,  217 => 112,  213 => 110,  211 => 109,  203 => 104,  197 => 101,  193 => 100,  189 => 99,  185 => 98,  180 => 95,  172 => 93,  170 => 92,  165 => 89,  158 => 88,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "faction/show.html.twig", "C:\\wamp64\\www\\symfony\\symfonypro\\templates\\faction\\show.html.twig");
    }
}
