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
class __TwigTemplate_4816f0d0158a1b868f188bb09916dc67 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "continent/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["continent"] ?? null), "Name", [], "any", false, false, false, 3), "html", null, true);
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
    <div class=\"row g-4 align-items-start continent-flex\">
        <div class=\"col-md-4 text-center\">
            ";
        // line 92
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["continent"] ?? null), "ImageContinent", [], "any", false, false, false, 92)) {
            // line 93
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/continents/" . CoreExtension::getAttribute($this->env, $this->source, ($context["continent"] ?? null), "ImageContinent", [], "any", false, false, false, 93))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["continent"] ?? null), "Name", [], "any", false, false, false, 93), "html", null, true);
            yield "\" class=\"continent-image\">
            ";
        }
        // line 95
        yield "        </div>

        <div class=\"col-md-8\">
            <h2 class=\"text-warning fw-bold\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["continent"] ?? null), "Name", [], "any", false, false, false, 98), "html", null, true);
        yield "</h2>
            <p class=\"continent-description\">
                <span class=\"info-label\">Description :</span><br>
                ";
        // line 101
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["continent"] ?? null), "Description", [], "any", false, false, false, 101)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["continent"] ?? null), "Description", [], "any", false, false, false, 101), "html", null, true)) : ("Aucune description disponible."));
        yield "
            </p>
        </div>
    </div>

    ";
        // line 107
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["continent"] ?? null), "ContinentFaction", [], "any", false, false, false, 107))) {
            // line 108
            yield "        <div class=\"section-title\">Factions liées</div>
        <div class=\"card-group\">
            ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["continent"] ?? null), "ContinentFaction", [], "any", false, false, false, 110));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["continent"] ?? null), "ContinentFaction", [], "any", false, false, false, 126));
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
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["world"], "id", [], "any", false, false, false, 129) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["continent"] ?? null), "ContinentWorld", [], "any", false, false, false, 129), "id", [], "any", false, false, false, 129))) {
                        // line 130
                        yield "                    ";
                        $context["allGuilds"] = Twig\Extension\CoreExtension::merge(($context["allGuilds"] ?? null), [$context["guild"]]);
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
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["allGuilds"] ?? null))) {
            // line 137
            yield "        <div class=\"section-title\">Guildes associées</div>
        <div class=\"card-group\">
            ";
            // line 139
            $context["shownGuilds"] = [];
            // line 140
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["allGuilds"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["guild"]) {
                // line 141
                yield "                ";
                if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["guild"], "id", [], "any", false, false, false, 141), ($context["shownGuilds"] ?? null))) {
                    // line 142
                    yield "                    ";
                    $context["shownGuilds"] = Twig\Extension\CoreExtension::merge(($context["shownGuilds"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, $context["guild"], "id", [], "any", false, false, false, 142)]);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["continent"] ?? null), "ContinentFaction", [], "any", false, false, false, 159));
        foreach ($context['_seq'] as $context["_key"] => $context["faction"]) {
            // line 160
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "FactionHero", [], "any", false, false, false, 160));
            foreach ($context['_seq'] as $context["_key"] => $context["hero"]) {
                // line 161
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "HeroWorld", [], "any", false, false, false, 161), "id", [], "any", false, false, false, 161) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["continent"] ?? null), "ContinentWorld", [], "any", false, false, false, 161), "id", [], "any", false, false, false, 161))) {
                    // line 162
                    yield "                ";
                    $context["allHeroes"] = Twig\Extension\CoreExtension::merge(($context["allHeroes"] ?? null), [$context["hero"]]);
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
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["allHeroes"] ?? null))) {
            // line 168
            yield "        <div class=\"section-title\">Héros associés</div>
        <div class=\"card-group\">
            ";
            // line 170
            $context["shownHeroes"] = [];
            // line 171
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["allHeroes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["hero"]) {
                // line 172
                yield "                ";
                if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 172), ($context["shownHeroes"] ?? null))) {
                    // line 173
                    yield "                    ";
                    $context["shownHeroes"] = Twig\Extension\CoreExtension::merge(($context["shownHeroes"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 173)]);
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
        return array (  456 => 187,  452 => 185,  446 => 184,  440 => 181,  435 => 180,  429 => 178,  421 => 176,  419 => 175,  416 => 174,  413 => 173,  410 => 172,  405 => 171,  403 => 170,  399 => 168,  397 => 167,  394 => 166,  388 => 165,  382 => 164,  379 => 163,  376 => 162,  373 => 161,  368 => 160,  363 => 159,  360 => 158,  357 => 156,  353 => 154,  347 => 153,  341 => 150,  336 => 149,  330 => 147,  322 => 145,  320 => 144,  317 => 143,  314 => 142,  311 => 141,  306 => 140,  304 => 139,  300 => 137,  298 => 136,  295 => 135,  289 => 134,  283 => 133,  277 => 132,  274 => 131,  271 => 130,  268 => 129,  263 => 128,  258 => 127,  253 => 126,  250 => 125,  247 => 123,  243 => 121,  234 => 118,  229 => 117,  223 => 115,  215 => 113,  213 => 112,  210 => 111,  206 => 110,  202 => 108,  199 => 107,  191 => 101,  185 => 98,  180 => 95,  172 => 93,  170 => 92,  165 => 89,  158 => 88,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "continent/show.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\continent\\show.html.twig");
    }
}
