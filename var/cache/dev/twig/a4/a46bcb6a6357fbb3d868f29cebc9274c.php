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

/* race/show.html.twig */
class __TwigTemplate_9cc5af67b3d8e8a83c16282b2c530414 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "race/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "race/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "race/show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["race"]) || array_key_exists("race", $context) ? $context["race"] : (function () { throw new RuntimeError('Variable "race" does not exist.', 3, $this->source); })()), "Name", [], "any", false, false, false, 3), "html", null, true);
        
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

        .race-image {
            max-width: 300px;
            width: 100%;
            border-radius: 1rem;
            object-fit: cover;
        }

        .race-description {
            white-space: pre-line;
        }

        .info-label {
            font-weight: bold;
        }

        .race-flex {
            display: flex;
            flex-wrap: wrap;
        }

        @media (max-width: 768px) {
            .race-flex {
                flex-direction: column !important;
                align-items: center !important;
                text-align: center;
            }

            .race-flex .col-md-4,
            .race-flex .col-md-8 {
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
    

    <div class=\"row g-4 align-items-start race-flex\">
        <div class=\"col-md-4 text-center\">
            ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["race"]) || array_key_exists("race", $context) ? $context["race"] : (function () { throw new RuntimeError('Variable "race" does not exist.', 94, $this->source); })()), "ImageRace", [], "any", false, false, false, 94)) {
            // line 95
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/races/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["race"]) || array_key_exists("race", $context) ? $context["race"] : (function () { throw new RuntimeError('Variable "race" does not exist.', 95, $this->source); })()), "ImageRace", [], "any", false, false, false, 95))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["race"]) || array_key_exists("race", $context) ? $context["race"] : (function () { throw new RuntimeError('Variable "race" does not exist.', 95, $this->source); })()), "Name", [], "any", false, false, false, 95), "html", null, true);
            yield "\" class=\"race-image\">
            ";
        }
        // line 97
        yield "        </div>

        <div class=\"col-md-8\">
            <h2 class=\"text-info fw-bold\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["race"]) || array_key_exists("race", $context) ? $context["race"] : (function () { throw new RuntimeError('Variable "race" does not exist.', 100, $this->source); })()), "Name", [], "any", false, false, false, 100), "html", null, true);
        yield "</h2>
            <p class=\"race-description\">
                <span class=\"info-label\">Description :</span><br>
                ";
        // line 103
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["race"]) || array_key_exists("race", $context) ? $context["race"] : (function () { throw new RuntimeError('Variable "race" does not exist.', 103, $this->source); })()), "Description", [], "any", false, false, false, 103)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["race"]) || array_key_exists("race", $context) ? $context["race"] : (function () { throw new RuntimeError('Variable "race" does not exist.', 103, $this->source); })()), "Description", [], "any", false, false, false, 103), "html", null, true)) : ("Aucune description fournie."));
        yield "
            </p>
        </div>
    </div>

    ";
        // line 109
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["race"]) || array_key_exists("race", $context) ? $context["race"] : (function () { throw new RuntimeError('Variable "race" does not exist.', 109, $this->source); })()), "RaceDomain", [], "any", false, false, false, 109)) > 0)) {
            // line 110
            yield "        <div class=\"section-title\">Domaines Associés</div>
        <div class=\"card-group\">
            ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["race"]) || array_key_exists("race", $context) ? $context["race"] : (function () { throw new RuntimeError('Variable "race" does not exist.', 112, $this->source); })()), "RaceDomain", [], "any", false, false, false, 112));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 113
                yield "                <div class=\"entity-card\">
                    ";
                // line 114
                if (CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "ImageDomain", [], "any", false, false, false, 114)) {
                    // line 115
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/domains/" . CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "ImageDomain", [], "any", false, false, false, 115))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "Name", [], "any", false, false, false, 115), "html", null, true);
                    yield "\">
                    ";
                }
                // line 117
                yield "                    <div class=\"name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "Name", [], "any", false, false, false, 117), "html", null, true);
                yield "</div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            yield "        </div>
    ";
        }
        // line 122
        yield "
    ";
        // line 124
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["race"]) || array_key_exists("race", $context) ? $context["race"] : (function () { throw new RuntimeError('Variable "race" does not exist.', 124, $this->source); })()), "RaceHero", [], "any", false, false, false, 124)) > 0)) {
            // line 125
            yield "        <div class=\"section-title\">Héros Associés</div>
        <div class=\"card-group\">
            ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["race"]) || array_key_exists("race", $context) ? $context["race"] : (function () { throw new RuntimeError('Variable "race" does not exist.', 127, $this->source); })()), "RaceHero", [], "any", false, false, false, 127));
            foreach ($context['_seq'] as $context["_key"] => $context["hero"]) {
                // line 128
                yield "                <div class=\"entity-card\">
                    ";
                // line 129
                if (CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "ImageHero", [], "any", false, false, false, 129)) {
                    // line 130
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/heroes/" . CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "ImageHero", [], "any", false, false, false, 130))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 130), "html", null, true);
                    yield "\">
                    ";
                }
                // line 132
                yield "                    <div class=\"name\">
                        <a href=\"";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 133)]), "html", null, true);
                yield "\" class=\"text-decoration-none text-white\">
                            ";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 134), "html", null, true);
                yield "
                        </a>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['hero'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            yield "        </div>
    ";
        }
        // line 141
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
        return "race/show.html.twig";
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
        return array (  330 => 141,  326 => 139,  315 => 134,  311 => 133,  308 => 132,  300 => 130,  298 => 129,  295 => 128,  291 => 127,  287 => 125,  284 => 124,  281 => 122,  277 => 120,  267 => 117,  259 => 115,  257 => 114,  254 => 113,  250 => 112,  246 => 110,  243 => 109,  235 => 103,  229 => 100,  224 => 97,  216 => 95,  214 => 94,  207 => 89,  194 => 88,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ race.Name }}{% endblock %}

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

        .race-image {
            max-width: 300px;
            width: 100%;
            border-radius: 1rem;
            object-fit: cover;
        }

        .race-description {
            white-space: pre-line;
        }

        .info-label {
            font-weight: bold;
        }

        .race-flex {
            display: flex;
            flex-wrap: wrap;
        }

        @media (max-width: 768px) {
            .race-flex {
                flex-direction: column !important;
                align-items: center !important;
                text-align: center;
            }

            .race-flex .col-md-4,
            .race-flex .col-md-8 {
                max-width: 100%;
                flex: 0 0 100%;
            }
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container text-white my-5\">
    

    <div class=\"row g-4 align-items-start race-flex\">
        <div class=\"col-md-4 text-center\">
            {% if race.ImageRace %}
                <img src=\"{{ asset('uploads/races/' ~ race.ImageRace) }}\" alt=\"{{ race.Name }}\" class=\"race-image\">
            {% endif %}
        </div>

        <div class=\"col-md-8\">
            <h2 class=\"text-info fw-bold\">{{ race.Name }}</h2>
            <p class=\"race-description\">
                <span class=\"info-label\">Description :</span><br>
                {{ race.Description ?: 'Aucune description fournie.' }}
            </p>
        </div>
    </div>

    {# Domaines associés #}
    {% if race.RaceDomain|length > 0 %}
        <div class=\"section-title\">Domaines Associés</div>
        <div class=\"card-group\">
            {% for domain in race.RaceDomain %}
                <div class=\"entity-card\">
                    {% if domain.ImageDomain %}
                        <img src=\"{{ asset('uploads/domains/' ~ domain.ImageDomain) }}\" alt=\"{{ domain.Name }}\">
                    {% endif %}
                    <div class=\"name\">{{ domain.Name }}</div>
                </div>
            {% endfor %}
        </div>
    {% endif %}

    {# Héros associés #}
    {% if race.RaceHero|length > 0 %}
        <div class=\"section-title\">Héros Associés</div>
        <div class=\"card-group\">
            {% for hero in race.RaceHero %}
                <div class=\"entity-card\">
                    {% if hero.ImageHero %}
                        <img src=\"{{ asset('uploads/heroes/' ~ hero.ImageHero) }}\" alt=\"{{ hero.Name }}\">
                    {% endif %}
                    <div class=\"name\">
                        <a href=\"{{ path('app_hero_show', { id: hero.id }) }}\" class=\"text-decoration-none text-white\">
                            {{ hero.Name }}
                        </a>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}
</div>
{% endblock %}
", "race/show.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\race\\show.html.twig");
    }
}
