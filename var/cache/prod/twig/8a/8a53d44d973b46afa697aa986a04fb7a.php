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

/* domain/show.html.twig */
class __TwigTemplate_0aec362800cde98b4847a020f9a097eb extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "domain/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["domain"] ?? null), "Name", [], "any", false, false, false, 3), "html", null, true);
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

        /* Nouvelle disposition pour les capacités */
        .capacity-card {
            background-color: #1a1a1a;
            border-radius: 12px;
            padding: 1rem;
            display: flex;
            align-items: center;
            color: white;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .capacity-card img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 10px;
            background-color: #ccc;
        }

        .capacity-info {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .capacity-info .name {
            font-weight: bold;
            font-size: 1rem;
        }

        .capacity-info .description {
            font-size: 0.8rem;
            color: #aaa;
        }
    </style>
";
        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 91
        yield "<div class=\"container text-white my-5\">
    <div class=\"row g-4 align-items-start\">
        <div class=\"col-md-4 text-center\">
            ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["domain"] ?? null), "ImageDomain", [], "any", false, false, false, 94)) {
            // line 95
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/domains/" . CoreExtension::getAttribute($this->env, $this->source, ($context["domain"] ?? null), "ImageDomain", [], "any", false, false, false, 95))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["domain"] ?? null), "Name", [], "any", false, false, false, 95), "html", null, true);
            yield "\" class=\"img-fluid rounded-4\">
            ";
        }
        // line 97
        yield "        </div>

        <div class=\"col-md-8\">
            <h2 class=\"text-primary fw-bold\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["domain"] ?? null), "Name", [], "any", false, false, false, 100), "html", null, true);
        yield "</h2>
            <p><strong>Type :</strong> ";
        // line 101
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["domain"] ?? null), "Type", [], "any", false, false, false, 101)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["domain"] ?? null), "Type", [], "any", false, false, false, 101), "html", null, true)) : ("N/A"));
        yield "</p>
            <p><strong>Description :</strong><br> ";
        // line 102
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["domain"] ?? null), "Description", [], "any", false, false, false, 102)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["domain"] ?? null), "Description", [], "any", false, false, false, 102), "html", null, true)) : ("No description"));
        yield "</p>
        </div>
    </div>

    ";
        // line 107
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["domain"] ?? null), "capacities", [], "any", false, false, false, 107))) {
            // line 108
            yield "        <div class=\"section-title\">Capacités associées</div>
        <div>
            ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["domain"] ?? null), "capacities", [], "any", false, false, false, 110));
            foreach ($context['_seq'] as $context["_key"] => $context["capacity"]) {
                // line 111
                yield "                <div class=\"capacity-card\">
                    ";
                // line 112
                if (CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "ImageCapacity", [], "any", false, false, false, 112)) {
                    // line 113
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/capacities/" . CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "ImageCapacity", [], "any", false, false, false, 113))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "Name", [], "any", false, false, false, 113), "html", null, true);
                    yield "\">
                    ";
                } else {
                    // line 115
                    yield "                        <div style=\"width:100px;height:100px;background:#ccc;border-radius:10px;display:flex;align-items:center;justify-content:center;\">Image<br>Capacity</div>
                    ";
                }
                // line 117
                yield "                    <div class=\"capacity-info\">
                        <div class=\"name\">";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "Name", [], "any", false, false, false, 118), "html", null, true);
                yield "</div>
                        <div class=\"description\">";
                // line 119
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "Description", [], "any", false, false, false, 119)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "Description", [], "any", false, false, false, 119), "html", null, true)) : ("Aucune description"));
                yield "</div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['capacity'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            yield "        </div>
    ";
        }
        // line 125
        yield "
    ";
        // line 127
        yield "    ";
        $context["heroes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["domain"] ?? null), "getHeroes", [], "method", false, false, false, 127);
        // line 128
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["heroes"] ?? null))) {
            // line 129
            yield "        <div class=\"section-title\">Héros associés</div>
        <div class=\"card-group\">
            ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["heroes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["hero"]) {
                // line 132
                yield "                <div class=\"entity-card\">
                    ";
                // line 133
                if (CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "ImageHero", [], "any", false, false, false, 133)) {
                    // line 134
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/heroes/" . CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "ImageHero", [], "any", false, false, false, 134))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 134), "html", null, true);
                    yield "\">
                    ";
                } else {
                    // line 136
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/placeholder.png"), "html", null, true);
                    yield "\" alt=\"No image\">
                    ";
                }
                // line 138
                yield "                    <div class=\"name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 138), "html", null, true);
                yield "</div>
                    <div class=\"type\">";
                // line 139
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Fonction", [], "any", false, false, false, 139)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Fonction", [], "any", false, false, false, 139), "html", null, true)) : (""));
                yield "</div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['hero'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            yield "        </div>
    ";
        }
        // line 144
        yield "
    ";
        // line 146
        yield "    ";
        $context["races"] = CoreExtension::getAttribute($this->env, $this->source, ($context["domain"] ?? null), "getDomainRace", [], "method", false, false, false, 146);
        // line 147
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["races"] ?? null))) {
            // line 148
            yield "        <div class=\"section-title\">Races associées</div>
        <div class=\"card-group\">
            ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["races"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["race"]) {
                // line 151
                yield "                <div class=\"entity-card\">
                    ";
                // line 152
                if (CoreExtension::getAttribute($this->env, $this->source, $context["race"], "ImageRace", [], "any", false, false, false, 152)) {
                    // line 153
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/races/" . CoreExtension::getAttribute($this->env, $this->source, $context["race"], "ImageRace", [], "any", false, false, false, 153))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["race"], "Name", [], "any", false, false, false, 153), "html", null, true);
                    yield "\">
                    ";
                } else {
                    // line 155
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/placeholder.png"), "html", null, true);
                    yield "\" alt=\"No image\">
                    ";
                }
                // line 157
                yield "                    <div class=\"name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["race"], "Name", [], "any", false, false, false, 157), "html", null, true);
                yield "</div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['race'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            yield "        </div>
    ";
        }
        // line 162
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "domain/show.html.twig";
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
        return array (  355 => 162,  351 => 160,  341 => 157,  335 => 155,  327 => 153,  325 => 152,  322 => 151,  318 => 150,  314 => 148,  311 => 147,  308 => 146,  305 => 144,  301 => 142,  292 => 139,  287 => 138,  281 => 136,  273 => 134,  271 => 133,  268 => 132,  264 => 131,  260 => 129,  257 => 128,  254 => 127,  251 => 125,  247 => 123,  237 => 119,  233 => 118,  230 => 117,  226 => 115,  218 => 113,  216 => 112,  213 => 111,  209 => 110,  205 => 108,  202 => 107,  195 => 102,  191 => 101,  187 => 100,  182 => 97,  174 => 95,  172 => 94,  167 => 91,  160 => 90,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "domain/show.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\domain\\show.html.twig");
    }
}
