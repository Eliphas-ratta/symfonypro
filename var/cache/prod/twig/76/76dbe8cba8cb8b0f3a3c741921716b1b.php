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

/* city/show.html.twig */
class __TwigTemplate_05642052c2ca60b949d0dd8c96ae817a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "city/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["city"] ?? null), "Name", [], "any", false, false, false, 3), "html", null, true);
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

        .city-image {
            max-width: 300px;
            width: 100%;
            border-radius: 1rem;
            object-fit: cover;
        }

        .city-description {
            white-space: pre-line;
        }

        .city-flex {
            display: flex;
            flex-wrap: wrap;
        }

        @media (max-width: 768px) {
            .city-flex {
                flex-direction: column !important;
                align-items: center !important;
                text-align: center;
            }

            .city-flex .col-md-4,
            .city-flex .col-md-8 {
                max-width: 100%;
                flex: 0 0 100%;
            }
        }
    </style>
";
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "<div class=\"container text-white my-5\">
    <div class=\"row g-4 align-items-start city-flex\">
        <div class=\"col-md-4 text-center\">
            ";
        // line 88
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["city"] ?? null), "ImageCity", [], "any", false, false, false, 88)) {
            // line 89
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cities/" . CoreExtension::getAttribute($this->env, $this->source, ($context["city"] ?? null), "ImageCity", [], "any", false, false, false, 89))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["city"] ?? null), "Name", [], "any", false, false, false, 89), "html", null, true);
            yield "\" class=\"city-image\">
            ";
        }
        // line 91
        yield "        </div>

        <div class=\"col-md-8\">
            <h2 class=\"fw-bold text-info\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["city"] ?? null), "Name", [], "any", false, false, false, 94), "html", null, true);
        yield "</h2>
            <p class=\"city-description\"><strong>Description :</strong><br>";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["city"] ?? null), "Description", [], "any", false, false, false, 95), "html", null, true);
        yield "</p>
        </div>
    </div>

    ";
        // line 100
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["city"] ?? null), "cityFaction", [], "any", false, false, false, 100)) > 0)) {
            // line 101
            yield "        <div class=\"section-title\">Factions</div>
        <div class=\"card-group\">
            ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["city"] ?? null), "cityFaction", [], "any", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["faction"]) {
                // line 104
                yield "                <div class=\"entity-card\">
                    ";
                // line 105
                if (CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "ImageFaction", [], "any", false, false, false, 105)) {
                    // line 106
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/factions/" . CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "ImageFaction", [], "any", false, false, false, 106))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "Name", [], "any", false, false, false, 106), "html", null, true);
                    yield "\">
                    ";
                } else {
                    // line 108
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/placeholder.png"), "html", null, true);
                    yield "\" alt=\"No image\">
                    ";
                }
                // line 110
                yield "                    <div class=\"name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "Name", [], "any", false, false, false, 110), "html", null, true);
                yield "</div>
                    <div class=\"type\">";
                // line 111
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "Type", [], "any", false, false, false, 111)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "Type", [], "any", false, false, false, 111), "html", null, true)) : (""));
                yield "</div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['faction'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            yield "        </div>
    ";
        }
        // line 116
        yield "
    ";
        // line 118
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["city"] ?? null), "getCityHero", [], "any", true, true, false, 118) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["city"] ?? null), "getCityHero", [], "any", false, false, false, 118)) > 0))) {
            // line 119
            yield "        <div class=\"section-title\">Héros associés</div>
        <div class=\"card-group\">
            ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["city"] ?? null), "getCityHero", [], "any", false, false, false, 121));
            foreach ($context['_seq'] as $context["_key"] => $context["hero"]) {
                // line 122
                yield "                <div class=\"entity-card\">
                    ";
                // line 123
                if (CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "ImageHero", [], "any", false, false, false, 123)) {
                    // line 124
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/heroes/" . CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "ImageHero", [], "any", false, false, false, 124))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 124), "html", null, true);
                    yield "\">
                    ";
                } else {
                    // line 126
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/placeholder.png"), "html", null, true);
                    yield "\" alt=\"No image\">
                    ";
                }
                // line 128
                yield "                    <div class=\"name\">
                        <a href=\"";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 129)]), "html", null, true);
                yield "\" class=\"text-decoration-none text-white\">
                            ";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 130), "html", null, true);
                yield "
                        </a>
                    </div>
                    <div class=\"type\">";
                // line 133
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Fonction", [], "any", false, false, false, 133)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Fonction", [], "any", false, false, false, 133), "html", null, true)) : (""));
                yield "</div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['hero'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            yield "        </div>
    ";
        }
        // line 138
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "city/show.html.twig";
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
        return array (  299 => 138,  295 => 136,  286 => 133,  280 => 130,  276 => 129,  273 => 128,  267 => 126,  259 => 124,  257 => 123,  254 => 122,  250 => 121,  246 => 119,  243 => 118,  240 => 116,  236 => 114,  227 => 111,  222 => 110,  216 => 108,  208 => 106,  206 => 105,  203 => 104,  199 => 103,  195 => 101,  192 => 100,  185 => 95,  181 => 94,  176 => 91,  168 => 89,  166 => 88,  161 => 85,  154 => 84,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "city/show.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\city\\show.html.twig");
    }
}
