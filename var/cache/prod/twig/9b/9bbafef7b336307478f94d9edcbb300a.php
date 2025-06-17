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

/* guild/show.html.twig */
class __TwigTemplate_2b1655952ab615df19d2fba74751a1d0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "guild/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["guild"] ?? null), "Name", [], "any", false, false, false, 3), "html", null, true);
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

    .guild-image {
        max-width: 300px;
        width: 100%;
        border-radius: 1rem;
        object-fit: cover;
    }

    .guild-description {
        white-space: pre-line;
    }

    .guild-flex {
        display: flex;
        flex-wrap: wrap;
    }

    @media (max-width: 768px) {
        .guild-flex {
            flex-direction: column !important;
            align-items: center !important;
            text-align: center;
        }

        .guild-flex .col-md-4,
        .guild-flex .col-md-8 {
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
    <div class=\"row g-4 align-items-start guild-flex\">
        <div class=\"col-md-4 text-center\">
            ";
        // line 88
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["guild"] ?? null), "ImageGuild", [], "any", false, false, false, 88)) {
            // line 89
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/guilds/" . CoreExtension::getAttribute($this->env, $this->source, ($context["guild"] ?? null), "ImageGuild", [], "any", false, false, false, 89))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["guild"] ?? null), "Name", [], "any", false, false, false, 89), "html", null, true);
            yield "\" class=\"guild-image\">
            ";
        }
        // line 91
        yield "        </div>
        <div class=\"col-md-8\">
            <h2 class=\"fw-bold text-primary\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["guild"] ?? null), "Name", [], "any", false, false, false, 93), "html", null, true);
        yield "</h2>
            <p><strong>Type:</strong> ";
        // line 94
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["guild"] ?? null), "Type", [], "any", false, false, false, 94)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["guild"] ?? null), "Type", [], "any", false, false, false, 94), "html", null, true)) : ("N/A"));
        yield "</p>
            <p class=\"guild-description\"><strong>Description:</strong><br>";
        // line 95
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["guild"] ?? null), "Description", [], "any", false, false, false, 95)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["guild"] ?? null), "Description", [], "any", false, false, false, 95), "html", null, true)) : ("No description available"));
        yield "</p>
            <p><strong>Visibility:</strong> ";
        // line 96
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["guild"] ?? null), "VisibilityId", [], "any", false, false, false, 96)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["guild"] ?? null), "VisibilityId", [], "any", false, false, false, 96), "Visibility", [], "any", false, false, false, 96), "html", null, true)) : ("None"));
        yield "</p>
        </div>
    </div>

    ";
        // line 100
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["guild"] ?? null), "GuildFaction", [], "any", false, false, false, 100)) > 0)) {
            // line 101
            yield "        <div class=\"section-title\">Factions</div>
        <div class=\"card-group\">
            ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["guild"] ?? null), "GuildFaction", [], "any", false, false, false, 103));
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
        // line 117
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["guild"] ?? null), "GuildContinent", [], "any", false, false, false, 117)) > 0)) {
            // line 118
            yield "        <div class=\"section-title\">Continents</div>
        <div class=\"card-group\">
            ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["guild"] ?? null), "GuildContinent", [], "any", false, false, false, 120));
            foreach ($context['_seq'] as $context["_key"] => $context["continent"]) {
                // line 121
                yield "                <div class=\"entity-card\">
                    ";
                // line 122
                if (CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "ImageContinent", [], "any", false, false, false, 122)) {
                    // line 123
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/continents/" . CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "ImageContinent", [], "any", false, false, false, 123))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "Name", [], "any", false, false, false, 123), "html", null, true);
                    yield "\">
                    ";
                } else {
                    // line 125
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/placeholder.png"), "html", null, true);
                    yield "\" alt=\"No image\">
                    ";
                }
                // line 127
                yield "                    <div class=\"name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "Name", [], "any", false, false, false, 127), "html", null, true);
                yield "</div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['continent'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            yield "        </div>
    ";
        }
        // line 132
        yield "
    ";
        // line 133
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["guild"] ?? null), "heroes", [], "any", false, false, false, 133)) > 0)) {
            // line 134
            yield "        <div class=\"section-title\">Héros</div>
        <div class=\"card-group\">
            ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["guild"] ?? null), "heroes", [], "any", false, false, false, 136));
            foreach ($context['_seq'] as $context["_key"] => $context["hero"]) {
                // line 137
                yield "                <div class=\"entity-card\">
                    ";
                // line 138
                if (CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "ImageHero", [], "any", false, false, false, 138)) {
                    // line 139
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/heroes/" . CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "ImageHero", [], "any", false, false, false, 139))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 139), "html", null, true);
                    yield "\">
                    ";
                } else {
                    // line 141
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/placeholder.png"), "html", null, true);
                    yield "\" alt=\"No image\">
                    ";
                }
                // line 143
                yield "                    <div class=\"name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 143), "html", null, true);
                yield "</div>
                    <div class=\"type\">";
                // line 144
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Fonction", [], "any", false, false, false, 144)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Fonction", [], "any", false, false, false, 144), "html", null, true)) : (""));
                yield "</div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['hero'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            yield "        </div>
    ";
        }
        // line 149
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "guild/show.html.twig";
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
        return array (  341 => 149,  337 => 147,  328 => 144,  323 => 143,  317 => 141,  309 => 139,  307 => 138,  304 => 137,  300 => 136,  296 => 134,  294 => 133,  291 => 132,  287 => 130,  277 => 127,  271 => 125,  263 => 123,  261 => 122,  258 => 121,  254 => 120,  250 => 118,  248 => 117,  245 => 116,  241 => 114,  232 => 111,  227 => 110,  221 => 108,  213 => 106,  211 => 105,  208 => 104,  204 => 103,  200 => 101,  198 => 100,  191 => 96,  187 => 95,  183 => 94,  179 => 93,  175 => 91,  167 => 89,  165 => 88,  160 => 85,  153 => 84,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "guild/show.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\guild\\show.html.twig");
    }
}
