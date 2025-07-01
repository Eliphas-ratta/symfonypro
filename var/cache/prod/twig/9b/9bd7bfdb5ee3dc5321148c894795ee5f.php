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

/* hero/show.html.twig */
class __TwigTemplate_b4a8541a11b2c6a43cf70cbc2fc4a976 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "hero/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
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

    .hero-image {
        max-width: 300px;
        width: 100%;
        border-radius: 1rem;
        object-fit: cover;
    }

    .hero-description {
        white-space: pre-line;
    }

    .hero-flex {
        display: flex;
        flex-wrap: wrap;
    }

    @media (max-width: 768px) {
        .hero-flex {
            flex-direction: column !important;
            align-items: center !important;
            text-align: center;
        }

        .hero-flex .col-md-4,
        .hero-flex .col-md-8 {
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
        yield "<div class=\"container text-white my-5\" role=\"main\">
    <div class=\"row g-4 align-items-start hero-flex\">
        <div class=\"col-md-4 text-center\">
            ";
        // line 88
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "imageHero", [], "any", false, false, false, 88)) {
            // line 89
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/heroes/" . CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "imageHero", [], "any", false, false, false, 89))), "html", null, true);
            yield "\"
                     alt=\"Portrait of ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "name", [], "any", false, false, false, 90), "html", null, true);
            yield "\"
                     class=\"hero-image\"
                     role=\"img\">
            ";
        }
        // line 94
        yield "        </div>

        <div class=\"col-md-8\">
            <h1 class=\"text-info fw-bold\" id=\"hero-name\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "name", [], "any", false, false, false, 97), "html", null, true);
        yield "</h1>
            <p><strong>Age :</strong> ";
        // line 98
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "age", [], "any", false, false, false, 98)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "age", [], "any", false, false, false, 98), "html", null, true)) : ("Inconnu"));
        yield "</p>
            <p><strong>Taille :</strong> ";
        // line 99
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "size", [], "any", false, false, false, 99)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "size", [], "any", false, false, false, 99), "html", null, true)) : ("N/A"));
        yield "</p>
            <p><strong>Fonction :</strong> ";
        // line 100
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "fonction", [], "any", false, false, false, 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "fonction", [], "any", false, false, false, 100), "html", null, true)) : ("Inconnue"));
        yield "</p>
            <p class=\"hero-description\"><strong>Description :</strong><br>";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "description", [], "any", false, false, false, 101), "html", null, true);
        yield "</p>
        </div>
    </div>

    ";
        // line 105
        $context["imagePaths"] = ["Factions" => "uploads/factions/", "Guilds" => "uploads/guilds/", "Races" => "uploads/races/", "Cities" => "uploads/cities/", "Domains" => "uploads/domains/"];
        // line 112
        yield "
    ";
        // line 113
        $context["methodMap"] = ["Factions" => "getImageFaction", "Guilds" => "getImageGuild", "Races" => "getImageRace", "Cities" => "getImageCity", "Domains" => "getImageDomain"];
        // line 120
        yield "
    ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Factions" => CoreExtension::getAttribute($this->env, $this->source,         // line 122
($context["hero"] ?? null), "heroFaction", [], "any", false, false, false, 122), "Guilds" => CoreExtension::getAttribute($this->env, $this->source,         // line 123
($context["hero"] ?? null), "guilds", [], "any", false, false, false, 123), "Races" => CoreExtension::getAttribute($this->env, $this->source,         // line 124
($context["hero"] ?? null), "heroRace", [], "any", false, false, false, 124), "Cities" => CoreExtension::getAttribute($this->env, $this->source,         // line 125
($context["hero"] ?? null), "heroCity", [], "any", false, false, false, 125), "Domains" => CoreExtension::getAttribute($this->env, $this->source,         // line 126
($context["hero"] ?? null), "heroDomain", [], "any", false, false, false, 126)]);
        foreach ($context['_seq'] as $context["section"] => $context["collection"]) {
            // line 128
            yield "        ";
            if ((true && (Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["collection"]) > 0))) {
                // line 129
                yield "            <h2 class=\"section-title\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["section"]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["section"], "html", null, true);
                yield "</h2>
            <div class=\"card-group\" role=\"region\" aria-labelledby=\"";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["section"]), "html", null, true);
                yield "\">
                ";
                // line 131
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["collection"]);
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 132
                    yield "                    ";
                    $context["method"] = (($_v0 = ($context["methodMap"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["section"]] ?? null) : null);
                    // line 133
                    yield "                    ";
                    $context["imageAttr"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], ($context["method"] ?? null), [], "any", false, false, false, 133);
                    // line 134
                    yield "                    ";
                    $context["imagePath"] = (($_v1 = ($context["imagePaths"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["section"]] ?? null) : null);
                    // line 135
                    yield "
                    <div class=\"entity-card\" role=\"article\" aria-label=\"";
                    // line 136
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 136), "html", null, true);
                    yield "\">
                        ";
                    // line 137
                    if (($context["imageAttr"] ?? null)) {
                        // line 138
                        yield "                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["imagePath"] ?? null) . ($context["imageAttr"] ?? null))), "html", null, true);
                        yield "\"
                                 alt=\"";
                        // line 139
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 139), "html", null, true);
                        yield "\"
                                 role=\"img\">
                        ";
                    } else {
                        // line 142
                        yield "                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/placeholder.png"), "html", null, true);
                        yield "\"
                                 alt=\"Placeholder image\"
                                 role=\"img\">
                        ";
                    }
                    // line 146
                    yield "                        <div class=\"name\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 146), "html", null, true);
                    yield "</div>
                        ";
                    // line 147
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", true, true, false, 147)) {
                        // line 148
                        yield "                            <div class=\"type\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 148), "html", null, true);
                        yield "</div>
                        ";
                    }
                    // line 150
                    yield "                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                yield "            </div>
        ";
            }
            // line 154
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['section'], $context['collection'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "hero/show.html.twig";
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
        return array (  311 => 155,  305 => 154,  301 => 152,  294 => 150,  288 => 148,  286 => 147,  281 => 146,  273 => 142,  267 => 139,  262 => 138,  260 => 137,  256 => 136,  253 => 135,  250 => 134,  247 => 133,  244 => 132,  240 => 131,  236 => 130,  229 => 129,  226 => 128,  223 => 126,  222 => 125,  221 => 124,  220 => 123,  219 => 122,  217 => 121,  214 => 120,  212 => 113,  209 => 112,  207 => 105,  200 => 101,  196 => 100,  192 => 99,  188 => 98,  184 => 97,  179 => 94,  172 => 90,  167 => 89,  165 => 88,  160 => 85,  153 => 84,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "hero/show.html.twig", "C:\\wamp64\\www\\symfony\\symfonypro\\templates\\hero\\show.html.twig");
    }
}
