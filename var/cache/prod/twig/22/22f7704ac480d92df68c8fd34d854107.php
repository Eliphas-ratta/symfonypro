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
class __TwigTemplate_a5168a9bd24932ab71fd549e6440fe3b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "world/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - Dashboard";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container my-5\">
    <h2 class=\"mb-4\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</h2>
    <p>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "description", [], "any", false, false, false, 8), "html", null, true);
        yield "</p>

 ";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "worldimage", [], "any", false, false, false, 10)) {
            // line 11
            yield "    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/world_images/" . CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "worldimage", [], "any", false, false, false, 11))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
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
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["factions"] ?? null))) {
            // line 33
            yield "                <ul>
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["factions"] ?? null));
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
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["heroes"] ?? null))) {
            // line 47
            yield "                <ul>
                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["heroes"] ?? null));
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
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["guilds"] ?? null))) {
            // line 61
            yield "                <ul>
                    ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["guilds"] ?? null));
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
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["races"] ?? null))) {
            // line 75
            yield "                <ul>
                    ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["races"] ?? null));
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
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["continents"] ?? null))) {
            // line 89
            yield "                <ul>
                    ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["continents"] ?? null));
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
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["domains"] ?? null))) {
            // line 103
            yield "                <ul>
                    ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["domains"] ?? null));
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
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["capacities"] ?? null))) {
            // line 117
            yield "                <ul>
                    ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["capacities"] ?? null));
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
        return array (  352 => 125,  348 => 123,  344 => 121,  333 => 119,  329 => 118,  326 => 117,  324 => 116,  317 => 111,  313 => 109,  309 => 107,  298 => 105,  294 => 104,  291 => 103,  289 => 102,  282 => 97,  278 => 95,  274 => 93,  263 => 91,  259 => 90,  256 => 89,  254 => 88,  247 => 83,  243 => 81,  239 => 79,  228 => 77,  224 => 76,  221 => 75,  219 => 74,  212 => 69,  208 => 67,  204 => 65,  193 => 63,  189 => 62,  186 => 61,  184 => 60,  177 => 55,  173 => 53,  169 => 51,  158 => 49,  154 => 48,  151 => 47,  149 => 46,  142 => 41,  138 => 39,  134 => 37,  123 => 35,  119 => 34,  116 => 33,  114 => 32,  93 => 13,  85 => 11,  83 => 10,  78 => 8,  74 => 7,  71 => 6,  64 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "world/show.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\world\\show.html.twig");
    }
}
