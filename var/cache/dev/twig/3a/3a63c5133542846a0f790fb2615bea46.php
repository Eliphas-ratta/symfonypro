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

/* world/show.html.twig */
class __TwigTemplate_efa82886e9da87026e4a2660b89be5a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "world/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "world/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "world/show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["world"]) || array_key_exists("world", $context) ? $context["world"] : (function () { throw new RuntimeError('Variable "world" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container my-5\">
    <h2 class=\"mb-4\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["world"]) || array_key_exists("world", $context) ? $context["world"] : (function () { throw new RuntimeError('Variable "world" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</h2>
    <p>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["world"]) || array_key_exists("world", $context) ? $context["world"] : (function () { throw new RuntimeError('Variable "world" does not exist.', 8, $this->source); })()), "description", [], "any", false, false, false, 8), "html", null, true);
        yield "</p>

 ";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["world"]) || array_key_exists("world", $context) ? $context["world"] : (function () { throw new RuntimeError('Variable "world" does not exist.', 10, $this->source); })()), "worldimage", [], "any", false, false, false, 10)) {
            // line 11
            yield "    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/world_images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["world"]) || array_key_exists("world", $context) ? $context["world"] : (function () { throw new RuntimeError('Variable "world" does not exist.', 11, $this->source); })()), "worldimage", [], "any", false, false, false, 11))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["world"]) || array_key_exists("world", $context) ? $context["world"] : (function () { throw new RuntimeError('Variable "world" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
            yield "\" class=\"img-fluid mb-4\" style=\"max-width: 300px; height: auto; border-radius: 10px;\">
";
        }
        // line 13
        yield "

    <!-- Onglets de navigation -->
    <ul class=\"nav nav-tabs\" id=\"worldTabs\" role=\"tablist\">
        <li class=\"nav-item\"><a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#factions\">Factions</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#heroes\">Heroes</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#guilds\">Guilds</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#races\">Races</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#continents\">Continents</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#domains\">Domains of Magic</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#capacities\">Magical Capacities</a></li>
    </ul>

    <!-- Contenu des onglets -->
    <div class=\"tab-content mt-4\">

        <!-- Factions -->
        <div class=\"tab-pane fade show active\" id=\"factions\">
            <h3>Factions</h3>
            ";
        // line 32
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["factions"]) || array_key_exists("factions", $context) ? $context["factions"] : (function () { throw new RuntimeError('Variable "factions" does not exist.', 32, $this->source); })()))) {
            // line 33
            yield "                <ul>
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["factions"]) || array_key_exists("factions", $context) ? $context["factions"] : (function () { throw new RuntimeError('Variable "factions" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["faction"]) {
                // line 35
                yield "                        <li><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_faction_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "name", [], "any", false, false, false, 35), "html", null, true);
                yield "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['faction'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "                </ul>
            ";
        } else {
            // line 39
            yield "                <p class=\"text-muted\">No factions yet.</p>
            ";
        }
        // line 41
        yield "        </div>

        <!-- Heroes -->
        <div class=\"tab-pane fade\" id=\"heroes\">
            <h3>Heroes</h3>
            ";
        // line 46
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["heroes"]) || array_key_exists("heroes", $context) ? $context["heroes"] : (function () { throw new RuntimeError('Variable "heroes" does not exist.', 46, $this->source); })()))) {
            // line 47
            yield "                <ul>
                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["heroes"]) || array_key_exists("heroes", $context) ? $context["heroes"] : (function () { throw new RuntimeError('Variable "heroes" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["hero"]) {
                // line 49
                yield "                        <li><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "name", [], "any", false, false, false, 49), "html", null, true);
                yield "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['hero'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "                </ul>
            ";
        } else {
            // line 53
            yield "                <p class=\"text-muted\">No heroes yet.</p>
            ";
        }
        // line 55
        yield "        </div>

        <!-- Guilds -->
        <div class=\"tab-pane fade\" id=\"guilds\">
            <h3>Guilds</h3>
            ";
        // line 60
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["guilds"]) || array_key_exists("guilds", $context) ? $context["guilds"] : (function () { throw new RuntimeError('Variable "guilds" does not exist.', 60, $this->source); })()))) {
            // line 61
            yield "                <ul>
                    ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["guilds"]) || array_key_exists("guilds", $context) ? $context["guilds"] : (function () { throw new RuntimeError('Variable "guilds" does not exist.', 62, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["guild"]) {
                // line 63
                yield "                        <li><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guild_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["guild"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guild"], "name", [], "any", false, false, false, 63), "html", null, true);
                yield "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['guild'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "                </ul>
            ";
        } else {
            // line 67
            yield "                <p class=\"text-muted\">No guilds yet.</p>
            ";
        }
        // line 69
        yield "        </div>

        <!-- Races -->
        <div class=\"tab-pane fade\" id=\"races\">
            <h3>Races</h3>
            ";
        // line 74
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["races"]) || array_key_exists("races", $context) ? $context["races"] : (function () { throw new RuntimeError('Variable "races" does not exist.', 74, $this->source); })()))) {
            // line 75
            yield "                <ul>
                    ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["races"]) || array_key_exists("races", $context) ? $context["races"] : (function () { throw new RuntimeError('Variable "races" does not exist.', 76, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["race"]) {
                // line 77
                yield "                        <li><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_race_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["race"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["race"], "name", [], "any", false, false, false, 77), "html", null, true);
                yield "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['race'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "                </ul>
            ";
        } else {
            // line 81
            yield "                <p class=\"text-muted\">No races yet.</p>
            ";
        }
        // line 83
        yield "        </div>

        <!-- Continents -->
        <div class=\"tab-pane fade\" id=\"continents\">
            <h3>Continents</h3>
            ";
        // line 88
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["continents"]) || array_key_exists("continents", $context) ? $context["continents"] : (function () { throw new RuntimeError('Variable "continents" does not exist.', 88, $this->source); })()))) {
            // line 89
            yield "                <ul>
                    ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["continents"]) || array_key_exists("continents", $context) ? $context["continents"] : (function () { throw new RuntimeError('Variable "continents" does not exist.', 90, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["continent"]) {
                // line 91
                yield "                        <li><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_continent_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "id", [], "any", false, false, false, 91)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "name", [], "any", false, false, false, 91), "html", null, true);
                yield "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['continent'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "                </ul>
            ";
        } else {
            // line 95
            yield "                <p class=\"text-muted\">No continents yet.</p>
            ";
        }
        // line 97
        yield "        </div>

        <!-- Domains -->
        <div class=\"tab-pane fade\" id=\"domains\">
            <h3>Domains of Magic</h3>
            ";
        // line 102
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["domains"]) || array_key_exists("domains", $context) ? $context["domains"] : (function () { throw new RuntimeError('Variable "domains" does not exist.', 102, $this->source); })()))) {
            // line 103
            yield "                <ul>
                    ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["domains"]) || array_key_exists("domains", $context) ? $context["domains"] : (function () { throw new RuntimeError('Variable "domains" does not exist.', 104, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 105
                yield "                        <li><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domain_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "id", [], "any", false, false, false, 105)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "name", [], "any", false, false, false, 105), "html", null, true);
                yield "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            yield "                </ul>
            ";
        } else {
            // line 109
            yield "                <p class=\"text-muted\">No domains yet.</p>
            ";
        }
        // line 111
        yield "        </div>

        <!-- Capacities -->
        <div class=\"tab-pane fade\" id=\"capacities\">
            <h3>Magical Capacities</h3>
            ";
        // line 116
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["capacities"]) || array_key_exists("capacities", $context) ? $context["capacities"] : (function () { throw new RuntimeError('Variable "capacities" does not exist.', 116, $this->source); })()))) {
            // line 117
            yield "                <ul>
                    ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["capacities"]) || array_key_exists("capacities", $context) ? $context["capacities"] : (function () { throw new RuntimeError('Variable "capacities" does not exist.', 118, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["capacity"]) {
                // line 119
                yield "                        <li><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_capacity_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "id", [], "any", false, false, false, 119)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "name", [], "any", false, false, false, 119), "html", null, true);
                yield "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['capacity'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            yield "                </ul>
            ";
        } else {
            // line 123
            yield "                <p class=\"text-muted\">No magical capacities yet.</p>
            ";
        }
        // line 125
        yield "        </div>

    </div>
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
        return "world/show.html.twig";
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
        return array (  382 => 125,  378 => 123,  374 => 121,  363 => 119,  359 => 118,  356 => 117,  354 => 116,  347 => 111,  343 => 109,  339 => 107,  328 => 105,  324 => 104,  321 => 103,  319 => 102,  312 => 97,  308 => 95,  304 => 93,  293 => 91,  289 => 90,  286 => 89,  284 => 88,  277 => 83,  273 => 81,  269 => 79,  258 => 77,  254 => 76,  251 => 75,  249 => 74,  242 => 69,  238 => 67,  234 => 65,  223 => 63,  219 => 62,  216 => 61,  214 => 60,  207 => 55,  203 => 53,  199 => 51,  188 => 49,  184 => 48,  181 => 47,  179 => 46,  172 => 41,  168 => 39,  164 => 37,  153 => 35,  149 => 34,  146 => 33,  144 => 32,  123 => 13,  115 => 11,  113 => 10,  108 => 8,  104 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ world.name }} - Dashboard{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <h2 class=\"mb-4\">{{ world.name }}</h2>
    <p>{{ world.description }}</p>

 {% if world.worldimage %}
    <img src=\"{{ asset('uploads/world_images/' ~ world.worldimage) }}\" alt=\"{{ world.name }}\" class=\"img-fluid mb-4\" style=\"max-width: 300px; height: auto; border-radius: 10px;\">
{% endif %}


    <!-- Onglets de navigation -->
    <ul class=\"nav nav-tabs\" id=\"worldTabs\" role=\"tablist\">
        <li class=\"nav-item\"><a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#factions\">Factions</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#heroes\">Heroes</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#guilds\">Guilds</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#races\">Races</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#continents\">Continents</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#domains\">Domains of Magic</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#capacities\">Magical Capacities</a></li>
    </ul>

    <!-- Contenu des onglets -->
    <div class=\"tab-content mt-4\">

        <!-- Factions -->
        <div class=\"tab-pane fade show active\" id=\"factions\">
            <h3>Factions</h3>
            {% if factions is not empty %}
                <ul>
                    {% for faction in factions %}
                        <li><a href=\"{{ path('app_faction_show', {id: faction.id}) }}\">{{ faction.name }}</a></li>
                    {% endfor %}
                </ul>
            {% else %}
                <p class=\"text-muted\">No factions yet.</p>
            {% endif %}
        </div>

        <!-- Heroes -->
        <div class=\"tab-pane fade\" id=\"heroes\">
            <h3>Heroes</h3>
            {% if heroes is not empty %}
                <ul>
                    {% for hero in heroes %}
                        <li><a href=\"{{ path('app_hero_show', {id: hero.id}) }}\">{{ hero.name }}</a></li>
                    {% endfor %}
                </ul>
            {% else %}
                <p class=\"text-muted\">No heroes yet.</p>
            {% endif %}
        </div>

        <!-- Guilds -->
        <div class=\"tab-pane fade\" id=\"guilds\">
            <h3>Guilds</h3>
            {% if guilds is not empty %}
                <ul>
                    {% for guild in guilds %}
                        <li><a href=\"{{ path('app_guild_show', {id: guild.id}) }}\">{{ guild.name }}</a></li>
                    {% endfor %}
                </ul>
            {% else %}
                <p class=\"text-muted\">No guilds yet.</p>
            {% endif %}
        </div>

        <!-- Races -->
        <div class=\"tab-pane fade\" id=\"races\">
            <h3>Races</h3>
            {% if races is not empty %}
                <ul>
                    {% for race in races %}
                        <li><a href=\"{{ path('app_race_show', {id: race.id}) }}\">{{ race.name }}</a></li>
                    {% endfor %}
                </ul>
            {% else %}
                <p class=\"text-muted\">No races yet.</p>
            {% endif %}
        </div>

        <!-- Continents -->
        <div class=\"tab-pane fade\" id=\"continents\">
            <h3>Continents</h3>
            {% if continents is not empty %}
                <ul>
                    {% for continent in continents %}
                        <li><a href=\"{{ path('app_continent_show', {id: continent.id}) }}\">{{ continent.name }}</a></li>
                    {% endfor %}
                </ul>
            {% else %}
                <p class=\"text-muted\">No continents yet.</p>
            {% endif %}
        </div>

        <!-- Domains -->
        <div class=\"tab-pane fade\" id=\"domains\">
            <h3>Domains of Magic</h3>
            {% if domains is not empty %}
                <ul>
                    {% for domain in domains %}
                        <li><a href=\"{{ path('app_domain_show', {id: domain.id}) }}\">{{ domain.name }}</a></li>
                    {% endfor %}
                </ul>
            {% else %}
                <p class=\"text-muted\">No domains yet.</p>
            {% endif %}
        </div>

        <!-- Capacities -->
        <div class=\"tab-pane fade\" id=\"capacities\">
            <h3>Magical Capacities</h3>
            {% if capacities is not empty %}
                <ul>
                    {% for capacity in capacities %}
                        <li><a href=\"{{ path('app_capacity_show', {id: capacity.id}) }}\">{{ capacity.name }}</a></li>
                    {% endfor %}
                </ul>
            {% else %}
                <p class=\"text-muted\">No magical capacities yet.</p>
            {% endif %}
        </div>

    </div>
</div>
{% endblock %}
", "world/show.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\world\\show.html.twig");
    }
}
