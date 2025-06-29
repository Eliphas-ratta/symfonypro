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

/* hero/index.html.twig */
class __TwigTemplate_1a8222adb37107944b06b180362ca837 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hero/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hero/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hero/index.html.twig", 1);
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

        yield "Heroes of ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["world"]) || array_key_exists("world", $context) ? $context["world"] : (function () { throw new RuntimeError('Variable "world" does not exist.', 3, $this->source); })()), "Name", [], "any", false, false, false, 3), "html", null, true);
        
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
    .hero-card {
        height: 320px;
        position: relative;
        overflow: hidden;
    }

    .hero-card img {
        height: 150px;
        object-fit: cover;
    }

    .action-buttons {
        display: none;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .hero-card.show-actions .action-buttons {
        display: flex;
        opacity: 1;
    }

    .toggle-btn {
        position: absolute;
        bottom: 10px;
        right: 10px;
        z-index: 3;
        background-color: rgba(0, 0, 0, 0.6);
        border: none;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        color: white;
    }

    .card-body, .action-buttons {
        z-index: 2;
        position: relative;
    }

    .overlay-link {
        position: absolute;
        inset: 0;
        z-index: 1;
    }

    .form-filter label {
        font-weight: bold;
    }

    .form-filter select,
    .form-filter input {
        background-color: #2a2a2a;
        border: 1px solid #555;
        color: #fff;
    }

    .form-filter input::placeholder {
        color: #fff;
        opacity: 1;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 72
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

        // line 73
        yield "<div class=\"container text-white py-4\">
    <h1 class=\"mb-4\" role=\"heading\" aria-level=\"1\">Heroes of ";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["world"]) || array_key_exists("world", $context) ? $context["world"] : (function () { throw new RuntimeError('Variable "world" does not exist.', 74, $this->source); })()), "Name", [], "any", false, false, false, 74), "html", null, true);
        yield "</h1>

    <a href=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero_create", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["world"]) || array_key_exists("world", $context) ? $context["world"] : (function () { throw new RuntimeError('Variable "world" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)]), "html", null, true);
        yield "\" class=\"btn btn-success mb-4\" role=\"button\" aria-label=\"Create a new hero\">
        + Create a New Hero
    </a>

    ";
        // line 80
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form_start', ["attr" => ["class" => "form-filter mb-4", "role" => "search"], "method" => "GET"]);
        yield "
    <div class=\"d-flex justify-content-center\">
        <div class=\"d-flex flex-wrap gap-2 justify-content-center align-items-end\" style=\"max-width: 1000px; width: 100%;\">
            <div class=\"input-group\" style=\"width: 250px;\">
                ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "name", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Search hero by name", "aria-label" => "Search hero by name"]]);
        // line 90
        yield "
                <button class=\"btn btn-danger\" type=\"submit\" style=\"min-width: 45px;\" aria-label=\"Submit search\">
                    <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                </button>
            </div>

            <div style=\"width: 200px;\">
                ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "factions", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-select", "onchange" => "this.form.submit()", "aria-label" => "Filter by faction"]]);
        // line 103
        yield "
            </div>
            <div style=\"width: 200px;\">
                ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "guilds", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-select", "onchange" => "this.form.submit()", "aria-label" => "Filter by guild"]]);
        // line 112
        yield "
            </div>
            <div style=\"width: 200px;\">
                ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "races", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => "form-select", "onchange" => "this.form.submit()", "aria-label" => "Filter by race"]]);
        // line 121
        yield "
            </div>

            <div>
                <a href=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["world"]) || array_key_exists("world", $context) ? $context["world"] : (function () { throw new RuntimeError('Variable "world" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, false, 125)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\" style=\"min-width: 120px;\" role=\"button\" aria-label=\"Reset filters\">
                    Réinitialiser
                </a>
            </div>
        </div>
    </div>
    ";
        // line 131
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), 'form_end');
        yield "

    <div class=\"row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3\">
        ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["heroes"]) || array_key_exists("heroes", $context) ? $context["heroes"] : (function () { throw new RuntimeError('Variable "heroes" does not exist.', 134, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hero"]) {
            // line 135
            yield "            <div class=\"col\">
                <div class=\"card bg-dark text-white border-0 shadow rounded-4 hero-card position-relative\" id=\"card-";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 136), "html", null, true);
            yield "\" role=\"region\" aria-labelledby=\"hero-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 136), "html", null, true);
            yield "-name\">
                    ";
            // line 137
            if (CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "ImageHero", [], "any", false, false, false, 137)) {
                // line 138
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/heroes/" . CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "ImageHero", [], "any", false, false, false, 138))), "html", null, true);
                yield "\" class=\"card-img-top rounded-top-4\" alt=\"Image of ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 138), "html", null, true);
                yield "\">
                    ";
            }
            // line 140
            yield "
                    <div class=\"card-body p-2\">
                        <h6 id=\"hero-";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 142), "html", null, true);
            yield "-name\" class=\"card-title mb-1 fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 142), "html", null, true);
            yield "</h6>
                        <p class=\"card-text small mb-0 text-white\">";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Fonction", [], "any", false, false, false, 143), "html", null, true);
            yield "</p>
                    </div>

                    <div class=\"action-buttons justify-content-around gap-1 px-3 pb-2\">
                        <a href=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 147)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning\" aria-label=\"Edit ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 147), "html", null, true);
            yield "\">Edit</a>
                        <a href=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 148)]), "html", null, true);
            yield "\"
                           class=\"btn btn-sm btn-outline-danger\"
                           onclick=\"return confirm('Are you sure you want to delete this hero?');\"
                           aria-label=\"Delete ";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 151), "html", null, true);
            yield "\">Delete</a>
                    </div>

                    <button class=\"toggle-btn\" onclick=\"toggleActions(event, ";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 154), "html", null, true);
            yield ");\" aria-label=\"Toggle action buttons for ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 154), "html", null, true);
            yield "\">
                        +
                    </button>

                    <a href=\"";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 158)]), "html", null, true);
            yield "\" class=\"overlay-link\" aria-label=\"View details of ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 158), "html", null, true);
            yield "\"></a>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 161
        if (!$context['_iterated']) {
            // line 162
            yield "            <div class=\"col-12\">
                <p class=\"text-muted\">No heroes found in this world.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['hero'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 170
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 171
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    function toggleActions(event, id) {
        event.stopPropagation();
        event.preventDefault();
        const card = document.getElementById(`card-\${id}`);
        card.classList.toggle('show-actions');
    }
</script>
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
        return "hero/index.html.twig";
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
        return array (  377 => 171,  364 => 170,  351 => 166,  342 => 162,  340 => 161,  330 => 158,  321 => 154,  315 => 151,  309 => 148,  303 => 147,  296 => 143,  290 => 142,  286 => 140,  278 => 138,  276 => 137,  270 => 136,  267 => 135,  262 => 134,  256 => 131,  247 => 125,  241 => 121,  239 => 115,  234 => 112,  232 => 106,  227 => 103,  225 => 97,  216 => 90,  214 => 84,  207 => 80,  200 => 76,  195 => 74,  192 => 73,  179 => 72,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Heroes of {{ world.Name }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .hero-card {
        height: 320px;
        position: relative;
        overflow: hidden;
    }

    .hero-card img {
        height: 150px;
        object-fit: cover;
    }

    .action-buttons {
        display: none;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .hero-card.show-actions .action-buttons {
        display: flex;
        opacity: 1;
    }

    .toggle-btn {
        position: absolute;
        bottom: 10px;
        right: 10px;
        z-index: 3;
        background-color: rgba(0, 0, 0, 0.6);
        border: none;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        color: white;
    }

    .card-body, .action-buttons {
        z-index: 2;
        position: relative;
    }

    .overlay-link {
        position: absolute;
        inset: 0;
        z-index: 1;
    }

    .form-filter label {
        font-weight: bold;
    }

    .form-filter select,
    .form-filter input {
        background-color: #2a2a2a;
        border: 1px solid #555;
        color: #fff;
    }

    .form-filter input::placeholder {
        color: #fff;
        opacity: 1;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container text-white py-4\">
    <h1 class=\"mb-4\" role=\"heading\" aria-level=\"1\">Heroes of {{ world.Name }}</h1>

    <a href=\"{{ path('app_hero_create', { worldId: world.id }) }}\" class=\"btn btn-success mb-4\" role=\"button\" aria-label=\"Create a new hero\">
        + Create a New Hero
    </a>

    {{ form_start(form, { attr: { class: 'form-filter mb-4', role: 'search' }, method: 'GET' }) }}
    <div class=\"d-flex justify-content-center\">
        <div class=\"d-flex flex-wrap gap-2 justify-content-center align-items-end\" style=\"max-width: 1000px; width: 100%;\">
            <div class=\"input-group\" style=\"width: 250px;\">
                {{ form_widget(form.name, {
                    attr: {
                        class: 'form-control',
                        placeholder: 'Search hero by name',
                        'aria-label': 'Search hero by name'
                    }
                }) }}
                <button class=\"btn btn-danger\" type=\"submit\" style=\"min-width: 45px;\" aria-label=\"Submit search\">
                    <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                </button>
            </div>

            <div style=\"width: 200px;\">
                {{ form_widget(form.factions, {
                    attr: {
                        class: 'form-select',
                        onchange: 'this.form.submit()',
                        'aria-label': 'Filter by faction'
                    }
                }) }}
            </div>
            <div style=\"width: 200px;\">
                {{ form_widget(form.guilds, {
                    attr: {
                        class: 'form-select',
                        onchange: 'this.form.submit()',
                        'aria-label': 'Filter by guild'
                    }
                }) }}
            </div>
            <div style=\"width: 200px;\">
                {{ form_widget(form.races, {
                    attr: {
                        class: 'form-select',
                        onchange: 'this.form.submit()',
                        'aria-label': 'Filter by race'
                    }
                }) }}
            </div>

            <div>
                <a href=\"{{ path('app_hero', { worldId: world.id }) }}\" class=\"btn btn-secondary\" style=\"min-width: 120px;\" role=\"button\" aria-label=\"Reset filters\">
                    Réinitialiser
                </a>
            </div>
        </div>
    </div>
    {{ form_end(form) }}

    <div class=\"row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3\">
        {% for hero in heroes %}
            <div class=\"col\">
                <div class=\"card bg-dark text-white border-0 shadow rounded-4 hero-card position-relative\" id=\"card-{{ hero.id }}\" role=\"region\" aria-labelledby=\"hero-{{ hero.id }}-name\">
                    {% if hero.ImageHero %}
                        <img src=\"{{ asset('uploads/heroes/' ~ hero.ImageHero) }}\" class=\"card-img-top rounded-top-4\" alt=\"Image of {{ hero.Name }}\">
                    {% endif %}

                    <div class=\"card-body p-2\">
                        <h6 id=\"hero-{{ hero.id }}-name\" class=\"card-title mb-1 fw-bold\">{{ hero.Name }}</h6>
                        <p class=\"card-text small mb-0 text-white\">{{ hero.Fonction }}</p>
                    </div>

                    <div class=\"action-buttons justify-content-around gap-1 px-3 pb-2\">
                        <a href=\"{{ path('app_hero_edit', { id: hero.id }) }}\" class=\"btn btn-sm btn-outline-warning\" aria-label=\"Edit {{ hero.Name }}\">Edit</a>
                        <a href=\"{{ path('app_hero_delete', { id: hero.id }) }}\"
                           class=\"btn btn-sm btn-outline-danger\"
                           onclick=\"return confirm('Are you sure you want to delete this hero?');\"
                           aria-label=\"Delete {{ hero.Name }}\">Delete</a>
                    </div>

                    <button class=\"toggle-btn\" onclick=\"toggleActions(event, {{ hero.id }});\" aria-label=\"Toggle action buttons for {{ hero.Name }}\">
                        +
                    </button>

                    <a href=\"{{ path('app_hero_show', { id: hero.id }) }}\" class=\"overlay-link\" aria-label=\"View details of {{ hero.Name }}\"></a>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <p class=\"text-muted\">No heroes found in this world.</p>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    function toggleActions(event, id) {
        event.stopPropagation();
        event.preventDefault();
        const card = document.getElementById(`card-\${id}`);
        card.classList.toggle('show-actions');
    }
</script>
{% endblock %}
", "hero/index.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\hero\\index.html.twig");
    }
}
