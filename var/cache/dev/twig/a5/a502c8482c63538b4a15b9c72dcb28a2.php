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

/* continent/index.html.twig */
class __TwigTemplate_b29f38b20d77ddaca943d7174fcb477f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "continent/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "continent/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "continent/index.html.twig", 1);
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

        yield "Continents of ";
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
    .continent-card {
        height: 320px;
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }

    .continent-card img {
        height: 150px;
        object-fit: cover;
    }

    .action-buttons {
        display: none;
        opacity: 0;
        transition: opacity 0.3s ease;
        position: absolute;
        bottom: 50px;
        left: 0;
        width: 100%;
        justify-content: center;
        z-index: 3;
        pointer-events: none;
    }

    .continent-card.show-actions .action-buttons {
        display: flex;
        opacity: 1;
        pointer-events: auto;
    }

    .toggle-btn {
        position: absolute;
        bottom: 10px;
        right: 10px;
        z-index: 4;
        background-color: rgba(0, 0, 0, 0.6);
        border: none;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        color: white;
        cursor: pointer;
    }

    .card-body,
    .action-buttons {
        z-index: 2;
        position: relative;
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

    // line 73
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

        // line 74
        yield "<div class=\"container text-white py-4\">
    <h1 class=\"mb-4\">Continents of ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["world"]) || array_key_exists("world", $context) ? $context["world"] : (function () { throw new RuntimeError('Variable "world" does not exist.', 75, $this->source); })()), "Name", [], "any", false, false, false, 75), "html", null, true);
        yield "</h1>

    <a href=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_continent_create", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["world"]) || array_key_exists("world", $context) ? $context["world"] : (function () { throw new RuntimeError('Variable "world" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)]), "html", null, true);
        yield "\" class=\"btn btn-success mb-4\">
        + Create a New Continent
    </a>

    ";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_start', ["method" => "GET", "attr" => ["class" => "form-filter mb-4"]]);
        yield "
    <div class=\"d-flex justify-content-center\">
        <div class=\"input-group\" style=\"width: 250px;\">
            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "name", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Recherche..."]]);
        // line 89
        yield "
            <button class=\"btn btn-danger\" type=\"submit\">
                <i class=\"fas fa-search\"></i>
            </button>
        </div>
    </div>
    ";
        // line 95
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_end');
        yield "

    <div class=\"row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3\">
        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["continents"]) || array_key_exists("continents", $context) ? $context["continents"] : (function () { throw new RuntimeError('Variable "continents" does not exist.', 98, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["continent"]) {
            // line 99
            yield "            <div class=\"col\">
                <div class=\"card bg-dark text-white border-0 shadow rounded-4 continent-card\"
                     id=\"card-";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "id", [], "any", false, false, false, 101), "html", null, true);
            yield "\"
                     data-url=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_continent_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            yield "\"
                     onclick=\"handleCardClick(event, this)\">
                    
                    ";
            // line 105
            if (CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "ImageContinent", [], "any", false, false, false, 105)) {
                // line 106
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/continents/" . CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "ImageContinent", [], "any", false, false, false, 106))), "html", null, true);
                yield "\"
                             class=\"card-img-top rounded-top-4\"
                             alt=\"";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "Name", [], "any", false, false, false, 108), "html", null, true);
                yield "\">
                    ";
            }
            // line 110
            yield "
                    <div class=\"card-body p-2\">
                        <h6 class=\"card-title mb-1 fw-bold\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "Name", [], "any", false, false, false, 112), "html", null, true);
            yield "</h6>
                        <p class=\"card-text text-white small mb-0\">
                            ";
            // line 114
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "Description", [], "any", false, false, false, 114)) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "Description", [], "any", false, false, false, 114), 0, 40) . "..."), "html", null, true)) : ("No description"));
            yield "
                        </p>
                    </div>

                    <div class=\"action-buttons gap-1 px-3 pb-2\">
                        <a href=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_continent_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "id", [], "any", false, false, false, 119)]), "html", null, true);
            yield "\"
                           class=\"btn btn-sm btn-outline-warning\"
                           onclick=\"event.stopPropagation();\">Edit</a>

                        <a href=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_continent_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "id", [], "any", false, false, false, 123)]), "html", null, true);
            yield "\"
                           class=\"btn btn-sm btn-outline-danger\"
                           onclick=\"event.stopPropagation(); return confirm('Are you sure?');\">Delete</a>
                    </div>

                    <button class=\"toggle-btn\"
                            onclick=\"toggleActions(event, ";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "id", [], "any", false, false, false, 129), "html", null, true);
            yield ");\">
                        <span id=\"toggle-icon-";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "id", [], "any", false, false, false, 130), "html", null, true);
            yield "\">+</span>
                    </button>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 134
        if (!$context['_iterated']) {
            // line 135
            yield "            <div class=\"col-12\">
                <p class=\"text-muted\">No continents found in this world.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['continent'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 143
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

        // line 144
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    // Définir le comportement au clic sur une carte continent
    function handleCardClick(event, element) {
        if (!element.classList.contains('show-actions')) {
            const url = element.getAttribute('data-url');
            if (url) {
                window.location.href = url;
            }
        }
    }

    // Toggle des actions (edit/delete)
    function toggleActions(event, id) {
        event.stopPropagation();
        event.preventDefault();
        const card = document.getElementById(`card-\${id}`);
        const icon = document.getElementById(`toggle-icon-\${id}`);
        const isOpen = card.classList.toggle('show-actions');
        icon.textContent = isOpen ? '−' : '+';
    }

    // Rendre accessibles dans le HTML inline
    window.handleCardClick = handleCardClick;
    window.toggleActions = toggleActions;
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
        return "continent/index.html.twig";
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
        return array (  345 => 144,  332 => 143,  319 => 139,  310 => 135,  308 => 134,  299 => 130,  295 => 129,  286 => 123,  279 => 119,  271 => 114,  266 => 112,  262 => 110,  257 => 108,  251 => 106,  249 => 105,  243 => 102,  239 => 101,  235 => 99,  230 => 98,  224 => 95,  216 => 89,  214 => 84,  208 => 81,  201 => 77,  196 => 75,  193 => 74,  180 => 73,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Continents of {{ world.Name }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .continent-card {
        height: 320px;
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }

    .continent-card img {
        height: 150px;
        object-fit: cover;
    }

    .action-buttons {
        display: none;
        opacity: 0;
        transition: opacity 0.3s ease;
        position: absolute;
        bottom: 50px;
        left: 0;
        width: 100%;
        justify-content: center;
        z-index: 3;
        pointer-events: none;
    }

    .continent-card.show-actions .action-buttons {
        display: flex;
        opacity: 1;
        pointer-events: auto;
    }

    .toggle-btn {
        position: absolute;
        bottom: 10px;
        right: 10px;
        z-index: 4;
        background-color: rgba(0, 0, 0, 0.6);
        border: none;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        color: white;
        cursor: pointer;
    }

    .card-body,
    .action-buttons {
        z-index: 2;
        position: relative;
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
    <h1 class=\"mb-4\">Continents of {{ world.Name }}</h1>

    <a href=\"{{ path('app_continent_create', { worldId: world.id }) }}\" class=\"btn btn-success mb-4\">
        + Create a New Continent
    </a>

    {{ form_start(form, { method: 'GET', attr: { class: 'form-filter mb-4' } }) }}
    <div class=\"d-flex justify-content-center\">
        <div class=\"input-group\" style=\"width: 250px;\">
            {{ form_widget(form.name, {
                attr: {
                    class: 'form-control',
                    placeholder: 'Recherche...'
                }
            }) }}
            <button class=\"btn btn-danger\" type=\"submit\">
                <i class=\"fas fa-search\"></i>
            </button>
        </div>
    </div>
    {{ form_end(form) }}

    <div class=\"row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3\">
        {% for continent in continents %}
            <div class=\"col\">
                <div class=\"card bg-dark text-white border-0 shadow rounded-4 continent-card\"
                     id=\"card-{{ continent.id }}\"
                     data-url=\"{{ path('app_continent_show', { id: continent.id }) }}\"
                     onclick=\"handleCardClick(event, this)\">
                    
                    {% if continent.ImageContinent %}
                        <img src=\"{{ asset('uploads/continents/' ~ continent.ImageContinent) }}\"
                             class=\"card-img-top rounded-top-4\"
                             alt=\"{{ continent.Name }}\">
                    {% endif %}

                    <div class=\"card-body p-2\">
                        <h6 class=\"card-title mb-1 fw-bold\">{{ continent.Name }}</h6>
                        <p class=\"card-text text-white small mb-0\">
                            {{ continent.Description|length > 0 ? continent.Description[:40] ~ '...' : 'No description' }}
                        </p>
                    </div>

                    <div class=\"action-buttons gap-1 px-3 pb-2\">
                        <a href=\"{{ path('app_continent_edit', { id: continent.id }) }}\"
                           class=\"btn btn-sm btn-outline-warning\"
                           onclick=\"event.stopPropagation();\">Edit</a>

                        <a href=\"{{ path('app_continent_delete', { id: continent.id }) }}\"
                           class=\"btn btn-sm btn-outline-danger\"
                           onclick=\"event.stopPropagation(); return confirm('Are you sure?');\">Delete</a>
                    </div>

                    <button class=\"toggle-btn\"
                            onclick=\"toggleActions(event, {{ continent.id }});\">
                        <span id=\"toggle-icon-{{ continent.id }}\">+</span>
                    </button>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <p class=\"text-muted\">No continents found in this world.</p>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    // Définir le comportement au clic sur une carte continent
    function handleCardClick(event, element) {
        if (!element.classList.contains('show-actions')) {
            const url = element.getAttribute('data-url');
            if (url) {
                window.location.href = url;
            }
        }
    }

    // Toggle des actions (edit/delete)
    function toggleActions(event, id) {
        event.stopPropagation();
        event.preventDefault();
        const card = document.getElementById(`card-\${id}`);
        const icon = document.getElementById(`toggle-icon-\${id}`);
        const isOpen = card.classList.toggle('show-actions');
        icon.textContent = isOpen ? '−' : '+';
    }

    // Rendre accessibles dans le HTML inline
    window.handleCardClick = handleCardClick;
    window.toggleActions = toggleActions;
</script>
{% endblock %}


", "continent/index.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\continent\\index.html.twig");
    }
}
