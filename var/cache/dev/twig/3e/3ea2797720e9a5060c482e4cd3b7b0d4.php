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
class __TwigTemplate_05546bce400291024d7faf8392fc479d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "domain/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "domain/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "domain/show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 3, $this->source); })()), "Name", [], "any", false, false, false, 3), "html", null, true);
        
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 90
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

        // line 91
        yield "<div class=\"container text-white my-5\">
    <div class=\"row g-4 align-items-start\">
        <div class=\"col-md-4 text-center\">
            ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 94, $this->source); })()), "ImageDomain", [], "any", false, false, false, 94)) {
            // line 95
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/domains/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 95, $this->source); })()), "ImageDomain", [], "any", false, false, false, 95))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 95, $this->source); })()), "Name", [], "any", false, false, false, 95), "html", null, true);
            yield "\" class=\"img-fluid rounded-4\">
            ";
        }
        // line 97
        yield "        </div>

        <div class=\"col-md-8\">
            <h2 class=\"text-primary fw-bold\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 100, $this->source); })()), "Name", [], "any", false, false, false, 100), "html", null, true);
        yield "</h2>
            <p><strong>Type :</strong> ";
        // line 101
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 101, $this->source); })()), "Type", [], "any", false, false, false, 101)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 101, $this->source); })()), "Type", [], "any", false, false, false, 101), "html", null, true)) : ("N/A"));
        yield "</p>
            <p><strong>Description :</strong><br> ";
        // line 102
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 102, $this->source); })()), "Description", [], "any", false, false, false, 102)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 102, $this->source); })()), "Description", [], "any", false, false, false, 102), "html", null, true)) : ("No description"));
        yield "</p>
        </div>
    </div>

    ";
        // line 107
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 107, $this->source); })()), "capacities", [], "any", false, false, false, 107))) {
            // line 108
            yield "        <div class=\"section-title\">Capacités associées</div>
        <div>
            ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 110, $this->source); })()), "capacities", [], "any", false, false, false, 110));
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
        $context["heroes"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 127, $this->source); })()), "getHeroes", [], "method", false, false, false, 127);
        // line 128
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["heroes"]) || array_key_exists("heroes", $context) ? $context["heroes"] : (function () { throw new RuntimeError('Variable "heroes" does not exist.', 128, $this->source); })()))) {
            // line 129
            yield "        <div class=\"section-title\">Héros associés</div>
        <div class=\"card-group\">
            ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["heroes"]) || array_key_exists("heroes", $context) ? $context["heroes"] : (function () { throw new RuntimeError('Variable "heroes" does not exist.', 131, $this->source); })()));
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
        $context["races"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 146, $this->source); })()), "getDomainRace", [], "method", false, false, false, 146);
        // line 147
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["races"]) || array_key_exists("races", $context) ? $context["races"] : (function () { throw new RuntimeError('Variable "races" does not exist.', 147, $this->source); })()))) {
            // line 148
            yield "        <div class=\"section-title\">Races associées</div>
        <div class=\"card-group\">
            ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["races"]) || array_key_exists("races", $context) ? $context["races"] : (function () { throw new RuntimeError('Variable "races" does not exist.', 150, $this->source); })()));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  397 => 162,  393 => 160,  383 => 157,  377 => 155,  369 => 153,  367 => 152,  364 => 151,  360 => 150,  356 => 148,  353 => 147,  350 => 146,  347 => 144,  343 => 142,  334 => 139,  329 => 138,  323 => 136,  315 => 134,  313 => 133,  310 => 132,  306 => 131,  302 => 129,  299 => 128,  296 => 127,  293 => 125,  289 => 123,  279 => 119,  275 => 118,  272 => 117,  268 => 115,  260 => 113,  258 => 112,  255 => 111,  251 => 110,  247 => 108,  244 => 107,  237 => 102,  233 => 101,  229 => 100,  224 => 97,  216 => 95,  214 => 94,  209 => 91,  196 => 90,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ domain.Name }}{% endblock %}

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
{% endblock %}

{% block body %}
<div class=\"container text-white my-5\">
    <div class=\"row g-4 align-items-start\">
        <div class=\"col-md-4 text-center\">
            {% if domain.ImageDomain %}
                <img src=\"{{ asset('uploads/domains/' ~ domain.ImageDomain) }}\" alt=\"{{ domain.Name }}\" class=\"img-fluid rounded-4\">
            {% endif %}
        </div>

        <div class=\"col-md-8\">
            <h2 class=\"text-primary fw-bold\">{{ domain.Name }}</h2>
            <p><strong>Type :</strong> {{ domain.Type ?: 'N/A' }}</p>
            <p><strong>Description :</strong><br> {{ domain.Description ?: 'No description' }}</p>
        </div>
    </div>

    {# Capacités associées (version horizontale) #}
    {% if domain.capacities is not empty %}
        <div class=\"section-title\">Capacités associées</div>
        <div>
            {% for capacity in domain.capacities %}
                <div class=\"capacity-card\">
                    {% if capacity.ImageCapacity %}
                        <img src=\"{{ asset('uploads/capacities/' ~ capacity.ImageCapacity) }}\" alt=\"{{ capacity.Name }}\">
                    {% else %}
                        <div style=\"width:100px;height:100px;background:#ccc;border-radius:10px;display:flex;align-items:center;justify-content:center;\">Image<br>Capacity</div>
                    {% endif %}
                    <div class=\"capacity-info\">
                        <div class=\"name\">{{ capacity.Name }}</div>
                        <div class=\"description\">{{ capacity.Description ?: 'Aucune description' }}</div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}

    {# Héros associés #}
    {% set heroes = domain.getHeroes() %}
    {% if heroes is not empty %}
        <div class=\"section-title\">Héros associés</div>
        <div class=\"card-group\">
            {% for hero in heroes %}
                <div class=\"entity-card\">
                    {% if hero.ImageHero %}
                        <img src=\"{{ asset('uploads/heroes/' ~ hero.ImageHero) }}\" alt=\"{{ hero.Name }}\">
                    {% else %}
                        <img src=\"{{ asset('img/placeholder.png') }}\" alt=\"No image\">
                    {% endif %}
                    <div class=\"name\">{{ hero.Name }}</div>
                    <div class=\"type\">{{ hero.Fonction ?: '' }}</div>
                </div>
            {% endfor %}
        </div>
    {% endif %}

    {# Races associées #}
    {% set races = domain.getDomainRace() %}
    {% if races is not empty %}
        <div class=\"section-title\">Races associées</div>
        <div class=\"card-group\">
            {% for race in races %}
                <div class=\"entity-card\">
                    {% if race.ImageRace %}
                        <img src=\"{{ asset('uploads/races/' ~ race.ImageRace) }}\" alt=\"{{ race.Name }}\">
                    {% else %}
                        <img src=\"{{ asset('img/placeholder.png') }}\" alt=\"No image\">
                    {% endif %}
                    <div class=\"name\">{{ race.Name }}</div>
                </div>
            {% endfor %}
        </div>
    {% endif %}
</div>
{% endblock %}
", "domain/show.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\domain\\show.html.twig");
    }
}
