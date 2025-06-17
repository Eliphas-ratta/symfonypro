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

/* capacity/show.html.twig */
class __TwigTemplate_5dbbf41eedc93a34966124be26442617 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "capacity/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "capacity/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "capacity/show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["capacity"]) || array_key_exists("capacity", $context) ? $context["capacity"] : (function () { throw new RuntimeError('Variable "capacity" does not exist.', 3, $this->source); })()), "Name", [], "any", false, false, false, 3), "html", null, true);
        
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

    .capacity-image {
        max-width: 300px;
        width: 100%;
        border-radius: 1rem;
        object-fit: cover;
    }

    .capacity-description {
        white-space: pre-line;
    }

    .capacity-flex {
        display: flex;
        flex-wrap: wrap;
    }

    @media (max-width: 768px) {
        .capacity-flex {
            flex-direction: column !important;
            align-items: center !important;
            text-align: center;
        }

        .capacity-flex .col-md-4,
        .capacity-flex .col-md-8 {
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
        yield "<div class=\"container text-white my-5\">
    <div class=\"row g-4 align-items-start capacity-flex\">
        <div class=\"col-md-4 text-center\">
            ";
        // line 88
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["capacity"]) || array_key_exists("capacity", $context) ? $context["capacity"] : (function () { throw new RuntimeError('Variable "capacity" does not exist.', 88, $this->source); })()), "ImageCapacity", [], "any", false, false, false, 88)) {
            // line 89
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/capacities/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["capacity"]) || array_key_exists("capacity", $context) ? $context["capacity"] : (function () { throw new RuntimeError('Variable "capacity" does not exist.', 89, $this->source); })()), "ImageCapacity", [], "any", false, false, false, 89))), "html", null, true);
            yield "\" class=\"capacity-image\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["capacity"]) || array_key_exists("capacity", $context) ? $context["capacity"] : (function () { throw new RuntimeError('Variable "capacity" does not exist.', 89, $this->source); })()), "Name", [], "any", false, false, false, 89), "html", null, true);
            yield "\">
            ";
        }
        // line 91
        yield "        </div>
        <div class=\"col-md-8\">
            <h2 class=\"fw-bold text-primary\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["capacity"]) || array_key_exists("capacity", $context) ? $context["capacity"] : (function () { throw new RuntimeError('Variable "capacity" does not exist.', 93, $this->source); })()), "Name", [], "any", false, false, false, 93), "html", null, true);
        yield "</h2>
            <p><strong>Type:</strong> ";
        // line 94
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["capacity"]) || array_key_exists("capacity", $context) ? $context["capacity"] : (function () { throw new RuntimeError('Variable "capacity" does not exist.', 94, $this->source); })()), "Type", [], "any", false, false, false, 94)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["capacity"]) || array_key_exists("capacity", $context) ? $context["capacity"] : (function () { throw new RuntimeError('Variable "capacity" does not exist.', 94, $this->source); })()), "Type", [], "any", false, false, false, 94), "html", null, true)) : ("N/A"));
        yield "</p>
            <p class=\"capacity-description\"><strong>Description:</strong><br>";
        // line 95
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["capacity"]) || array_key_exists("capacity", $context) ? $context["capacity"] : (function () { throw new RuntimeError('Variable "capacity" does not exist.', 95, $this->source); })()), "Description", [], "any", false, false, false, 95)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["capacity"]) || array_key_exists("capacity", $context) ? $context["capacity"] : (function () { throw new RuntimeError('Variable "capacity" does not exist.', 95, $this->source); })()), "Description", [], "any", false, false, false, 95), "html", null, true)) : ("No description available"));
        yield "</p>
        </div>
    </div>

    ";
        // line 99
        $context["filteredDomains"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["capacity"]) || array_key_exists("capacity", $context) ? $context["capacity"] : (function () { throw new RuntimeError('Variable "capacity" does not exist.', 99, $this->source); })()), "Domain", [], "any", false, false, false, 99), function ($__d__) use ($context, $macros) { $context["d"] = $__d__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 99, $this->source); })()), "DomainWorld", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["capacity"]) || array_key_exists("capacity", $context) ? $context["capacity"] : (function () { throw new RuntimeError('Variable "capacity" does not exist.', 99, $this->source); })()), "CapacityWorld", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99)); });
        // line 100
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["filteredDomains"]) || array_key_exists("filteredDomains", $context) ? $context["filteredDomains"] : (function () { throw new RuntimeError('Variable "filteredDomains" does not exist.', 100, $this->source); })())) > 0)) {
            // line 101
            yield "        <div class=\"section-title\">Associated Domains</div>
        <div class=\"card-group\">
            ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filteredDomains"]) || array_key_exists("filteredDomains", $context) ? $context["filteredDomains"] : (function () { throw new RuntimeError('Variable "filteredDomains" does not exist.', 103, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 104
                yield "                <div class=\"entity-card\">
                    ";
                // line 105
                if (CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "ImageDomain", [], "any", false, false, false, 105)) {
                    // line 106
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/domains/" . CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "ImageDomain", [], "any", false, false, false, 106))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "Name", [], "any", false, false, false, 106), "html", null, true);
                    yield "\">
                    ";
                }
                // line 108
                yield "                    <div class=\"name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "Name", [], "any", false, false, false, 108), "html", null, true);
                yield "</div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            yield "        </div>
    ";
        }
        // line 113
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
        return "capacity/show.html.twig";
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
        return array (  276 => 113,  272 => 111,  262 => 108,  254 => 106,  252 => 105,  249 => 104,  245 => 103,  241 => 101,  238 => 100,  236 => 99,  229 => 95,  225 => 94,  221 => 93,  217 => 91,  209 => 89,  207 => 88,  202 => 85,  189 => 84,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ capacity.Name }}{% endblock %}

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

    .capacity-image {
        max-width: 300px;
        width: 100%;
        border-radius: 1rem;
        object-fit: cover;
    }

    .capacity-description {
        white-space: pre-line;
    }

    .capacity-flex {
        display: flex;
        flex-wrap: wrap;
    }

    @media (max-width: 768px) {
        .capacity-flex {
            flex-direction: column !important;
            align-items: center !important;
            text-align: center;
        }

        .capacity-flex .col-md-4,
        .capacity-flex .col-md-8 {
            max-width: 100%;
            flex: 0 0 100%;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container text-white my-5\">
    <div class=\"row g-4 align-items-start capacity-flex\">
        <div class=\"col-md-4 text-center\">
            {% if capacity.ImageCapacity %}
                <img src=\"{{ asset('uploads/capacities/' ~ capacity.ImageCapacity) }}\" class=\"capacity-image\" alt=\"{{ capacity.Name }}\">
            {% endif %}
        </div>
        <div class=\"col-md-8\">
            <h2 class=\"fw-bold text-primary\">{{ capacity.Name }}</h2>
            <p><strong>Type:</strong> {{ capacity.Type ?: 'N/A' }}</p>
            <p class=\"capacity-description\"><strong>Description:</strong><br>{{ capacity.Description ?: 'No description available' }}</p>
        </div>
    </div>

    {% set filteredDomains = capacity.Domain|filter(d => d.DomainWorld.id == capacity.CapacityWorld.id) %}
    {% if filteredDomains|length > 0 %}
        <div class=\"section-title\">Associated Domains</div>
        <div class=\"card-group\">
            {% for domain in filteredDomains %}
                <div class=\"entity-card\">
                    {% if domain.ImageDomain %}
                        <img src=\"{{ asset('uploads/domains/' ~ domain.ImageDomain) }}\" alt=\"{{ domain.Name }}\">
                    {% endif %}
                    <div class=\"name\">{{ domain.Name }}</div>
                </div>
            {% endfor %}
        </div>
    {% endif %}
</div>
{% endblock %}
", "capacity/show.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\capacity\\show.html.twig");
    }
}
