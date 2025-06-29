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
class __TwigTemplate_2d20a78a48a7b26a10ef02edffa103af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hero/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hero/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hero/show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 84
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

        // line 85
        yield "<div class=\"container text-white my-5\" role=\"main\">
    <div class=\"row g-4 align-items-start hero-flex\">
        <div class=\"col-md-4 text-center\">
            ";
        // line 88
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 88, $this->source); })()), "imageHero", [], "any", false, false, false, 88)) {
            // line 89
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/heroes/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 89, $this->source); })()), "imageHero", [], "any", false, false, false, 89))), "html", null, true);
            yield "\"
                     alt=\"Portrait of ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 90, $this->source); })()), "name", [], "any", false, false, false, 90), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 97, $this->source); })()), "name", [], "any", false, false, false, 97), "html", null, true);
        yield "</h1>
            <p><strong>Age :</strong> ";
        // line 98
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 98, $this->source); })()), "age", [], "any", false, false, false, 98)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 98, $this->source); })()), "age", [], "any", false, false, false, 98), "html", null, true)) : ("Inconnu"));
        yield "</p>
            <p><strong>Taille :</strong> ";
        // line 99
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 99, $this->source); })()), "size", [], "any", false, false, false, 99)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 99, $this->source); })()), "size", [], "any", false, false, false, 99), "html", null, true)) : ("N/A"));
        yield "</p>
            <p><strong>Fonction :</strong> ";
        // line 100
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 100, $this->source); })()), "fonction", [], "any", false, false, false, 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 100, $this->source); })()), "fonction", [], "any", false, false, false, 100), "html", null, true)) : ("Inconnue"));
        yield "</p>
            <p class=\"hero-description\"><strong>Description :</strong><br>";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 101, $this->source); })()), "description", [], "any", false, false, false, 101), "html", null, true);
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
(isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 122, $this->source); })()), "heroFaction", [], "any", false, false, false, 122), "Guilds" => CoreExtension::getAttribute($this->env, $this->source,         // line 123
(isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 123, $this->source); })()), "guilds", [], "any", false, false, false, 123), "Races" => CoreExtension::getAttribute($this->env, $this->source,         // line 124
(isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 124, $this->source); })()), "heroRace", [], "any", false, false, false, 124), "Cities" => CoreExtension::getAttribute($this->env, $this->source,         // line 125
(isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 125, $this->source); })()), "heroCity", [], "any", false, false, false, 125), "Domains" => CoreExtension::getAttribute($this->env, $this->source,         // line 126
(isset($context["hero"]) || array_key_exists("hero", $context) ? $context["hero"] : (function () { throw new RuntimeError('Variable "hero" does not exist.', 126, $this->source); })()), "heroDomain", [], "any", false, false, false, 126)]);
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
                    $context["method"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["methodMap"]) || array_key_exists("methodMap", $context) ? $context["methodMap"] : (function () { throw new RuntimeError('Variable "methodMap" does not exist.', 132, $this->source); })()), $context["section"], [], "array", false, false, false, 132);
                    // line 133
                    yield "                    ";
                    $context["imageAttr"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 133, $this->source); })()), [], "any", false, false, false, 133);
                    // line 134
                    yield "                    ";
                    $context["imagePath"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["imagePaths"]) || array_key_exists("imagePaths", $context) ? $context["imagePaths"] : (function () { throw new RuntimeError('Variable "imagePaths" does not exist.', 134, $this->source); })()), $context["section"], [], "array", false, false, false, 134);
                    // line 135
                    yield "
                    <div class=\"entity-card\" role=\"article\" aria-label=\"";
                    // line 136
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 136), "html", null, true);
                    yield "\">
                        ";
                    // line 137
                    if ((isset($context["imageAttr"]) || array_key_exists("imageAttr", $context) ? $context["imageAttr"] : (function () { throw new RuntimeError('Variable "imageAttr" does not exist.', 137, $this->source); })())) {
                        // line 138
                        yield "                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 138, $this->source); })()) . (isset($context["imageAttr"]) || array_key_exists("imageAttr", $context) ? $context["imageAttr"] : (function () { throw new RuntimeError('Variable "imageAttr" does not exist.', 138, $this->source); })()))), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  353 => 155,  347 => 154,  343 => 152,  336 => 150,  330 => 148,  328 => 147,  323 => 146,  315 => 142,  309 => 139,  304 => 138,  302 => 137,  298 => 136,  295 => 135,  292 => 134,  289 => 133,  286 => 132,  282 => 131,  278 => 130,  271 => 129,  268 => 128,  265 => 126,  264 => 125,  263 => 124,  262 => 123,  261 => 122,  259 => 121,  256 => 120,  254 => 113,  251 => 112,  249 => 105,  242 => 101,  238 => 100,  234 => 99,  230 => 98,  226 => 97,  221 => 94,  214 => 90,  209 => 89,  207 => 88,  202 => 85,  189 => 84,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ hero.name }}{% endblock %}

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
{% endblock %}

{% block body %}
<div class=\"container text-white my-5\" role=\"main\">
    <div class=\"row g-4 align-items-start hero-flex\">
        <div class=\"col-md-4 text-center\">
            {% if hero.imageHero %}
                <img src=\"{{ asset('uploads/heroes/' ~ hero.imageHero) }}\"
                     alt=\"Portrait of {{ hero.name }}\"
                     class=\"hero-image\"
                     role=\"img\">
            {% endif %}
        </div>

        <div class=\"col-md-8\">
            <h1 class=\"text-info fw-bold\" id=\"hero-name\">{{ hero.name }}</h1>
            <p><strong>Age :</strong> {{ hero.age ? hero.age : 'Inconnu' }}</p>
            <p><strong>Taille :</strong> {{ hero.size ?: 'N/A' }}</p>
            <p><strong>Fonction :</strong> {{ hero.fonction ?: 'Inconnue' }}</p>
            <p class=\"hero-description\"><strong>Description :</strong><br>{{ hero.description }}</p>
        </div>
    </div>

    {% set imagePaths = {
        'Factions': 'uploads/factions/',
        'Guilds': 'uploads/guilds/',
        'Races': 'uploads/races/',
        'Cities': 'uploads/cities/',
        'Domains': 'uploads/domains/'
    } %}

    {% set methodMap = {
        'Factions': 'getImageFaction',
        'Guilds': 'getImageGuild',
        'Races': 'getImageRace',
        'Cities': 'getImageCity',
        'Domains': 'getImageDomain'
    } %}

    {% for section, collection in {
        'Factions': hero.heroFaction,
        'Guilds': hero.guilds,
        'Races': hero.heroRace,
        'Cities': hero.heroCity,
        'Domains': hero.heroDomain
    } %}
        {% if collection is defined and collection|length > 0 %}
            <h2 class=\"section-title\" id=\"{{ section|lower }}\">{{ section }}</h2>
            <div class=\"card-group\" role=\"region\" aria-labelledby=\"{{ section|lower }}\">
                {% for item in collection %}
                    {% set method = methodMap[section] %}
                    {% set imageAttr = attribute(item, method) %}
                    {% set imagePath = imagePaths[section] %}

                    <div class=\"entity-card\" role=\"article\" aria-label=\"{{ item.name }}\">
                        {% if imageAttr %}
                            <img src=\"{{ asset(imagePath ~ imageAttr) }}\"
                                 alt=\"{{ item.name }}\"
                                 role=\"img\">
                        {% else %}
                            <img src=\"{{ asset('img/placeholder.png') }}\"
                                 alt=\"Placeholder image\"
                                 role=\"img\">
                        {% endif %}
                        <div class=\"name\">{{ item.name }}</div>
                        {% if item.type is defined %}
                            <div class=\"type\">{{ item.type }}</div>
                        {% endif %}
                    </div>
                {% endfor %}
            </div>
        {% endif %}
    {% endfor %}
</div>
{% endblock %}
", "hero/show.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\hero\\show.html.twig");
    }
}
