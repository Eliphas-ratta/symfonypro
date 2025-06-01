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

/* guild/form.html.twig */
class __TwigTemplate_3e3bbfec1de23502796a26558bb112e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guild/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guild/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "guild/form.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
    .form-container {
        max-width: 900px;
        margin: 2rem auto;
        background-color: #1f1f1f;
        padding: 2rem;
        border-radius: 20px;
        box-shadow: 0 0 12px rgba(0, 0, 0, 0.4);
        color: white;
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 1.5rem;
        color: #03A9F4;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem 2rem;
    }

    .form-grid .full-width {
        grid-column: span 2;
    }

    .form-container input,
    .form-container textarea,
    .form-container select {
        background-color: #2a2a2a;
        color: white;
        border: 1px solid #444;
        border-radius: 6px;
        padding: 0.5rem;
        width: 100%;
    }

    .form-container button[type=\"submit\"] {
        background-color: #28a745;
        border: none;
        padding: 0.5rem 1.5rem;
        font-weight: bold;
        color: white;
        border-radius: 6px;
        margin-top: 1.5rem;
        display: block;
        margin-left: auto;
    }

    .form-container button[type=\"submit\"]:hover {
        background-color: #218838;
    }

    .checkbox-group {
        background-color: #2a2a2a;
        border-radius: 12px;
        padding: 1rem;
        margin-top: 1.5rem;
        max-height: 300px;
        overflow-y: auto;
    }

    .checkbox-group h4 {
        margin-bottom: 0.8rem;
        font-size: 1.1rem;
        color: #90caf9;
    }

    .checkbox-list label {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #2e2e2e;
        padding: 0.6rem 1rem;
        border-radius: 8px;
        margin-bottom: 0.4rem;
    }

    .checkbox-info {
        display: flex;
        align-items: center;
        gap: 0.8rem;
    }

    .avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 101
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

        // line 102
        yield "<div class=\"form-container\">
    <h2>";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 103, $this->source); })()), "html", null, true);
        yield "</h2>

    ";
        // line 105
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "
    <div class=\"form-grid\">
        <div>
            ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "Name", [], "any", false, false, false, 108), 'label');
        yield "
            ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "Name", [], "any", false, false, false, 109), 'widget');
        yield "
        </div>

        <div>
            ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "Type", [], "any", false, false, false, 113), 'label');
        yield "
            ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "Type", [], "any", false, false, false, 114), 'widget');
        yield "
        </div>

        <div>
            ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "Image_Guild", [], "any", false, false, false, 118), 'label');
        yield "
            ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "Image_Guild", [], "any", false, false, false, 119), 'widget');
        yield "
        </div>

        <div>
            ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "Visibility_id", [], "any", false, false, false, 123), 'label');
        yield "
            ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "Visibility_id", [], "any", false, false, false, 124), 'widget');
        yield "
        </div>

        <div class=\"full-width\">
            ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "Description", [], "any", false, false, false, 128), 'label');
        yield "
            ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "Description", [], "any", false, false, false, 129), 'widget');
        yield "
        </div>
    </div>

    ";
        // line 134
        yield "    <div class=\"checkbox-group\">
        <h4>";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "Guild_Faction", [], "any", false, false, false, 135), 'label');
        yield "</h4>
        <div class=\"checkbox-list\">
            ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "Guild_Faction", [], "any", false, false, false, 137));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 138
            yield "                <label>
                    <div class=\"checkbox-info\">
                        ";
            // line 140
            $context["img"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 140), "attr", [], "any", false, true, false, 140), "data-image", [], "array", true, true, false, 140) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 140), "attr", [], "any", false, false, false, 140), "data-image", [], "array", false, false, false, 140)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 140), "attr", [], "any", false, false, false, 140), "data-image", [], "array", false, false, false, 140)) : (null));
            // line 141
            yield "                        ";
            if ((isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 141, $this->source); })())) {
                // line 142
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/factions/" . (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 142, $this->source); })()))), "html", null, true);
                yield "\" class=\"avatar\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 142), "label", [], "any", false, false, false, 142), "html", null, true);
                yield "\">
                        ";
            }
            // line 144
            yield "                        <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 144), "label", [], "any", false, false, false, 144), "html", null, true);
            yield "</span>
                    </div>
                    ";
            // line 146
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "
                </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "        </div>
    </div>

    ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), 'rest');
        yield "

    <div style=\"text-align: right; margin-top: 1rem;\">
        <button type=\"submit\">Save</button>
    </div>
    ";
        // line 157
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), 'form_end');
        yield "
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
        return "guild/form.html.twig";
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
        return array (  345 => 157,  337 => 152,  332 => 149,  323 => 146,  317 => 144,  309 => 142,  306 => 141,  304 => 140,  300 => 138,  296 => 137,  291 => 135,  288 => 134,  281 => 129,  277 => 128,  270 => 124,  266 => 123,  259 => 119,  255 => 118,  248 => 114,  244 => 113,  237 => 109,  233 => 108,  227 => 105,  222 => 103,  219 => 102,  206 => 101,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .form-container {
        max-width: 900px;
        margin: 2rem auto;
        background-color: #1f1f1f;
        padding: 2rem;
        border-radius: 20px;
        box-shadow: 0 0 12px rgba(0, 0, 0, 0.4);
        color: white;
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 1.5rem;
        color: #03A9F4;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem 2rem;
    }

    .form-grid .full-width {
        grid-column: span 2;
    }

    .form-container input,
    .form-container textarea,
    .form-container select {
        background-color: #2a2a2a;
        color: white;
        border: 1px solid #444;
        border-radius: 6px;
        padding: 0.5rem;
        width: 100%;
    }

    .form-container button[type=\"submit\"] {
        background-color: #28a745;
        border: none;
        padding: 0.5rem 1.5rem;
        font-weight: bold;
        color: white;
        border-radius: 6px;
        margin-top: 1.5rem;
        display: block;
        margin-left: auto;
    }

    .form-container button[type=\"submit\"]:hover {
        background-color: #218838;
    }

    .checkbox-group {
        background-color: #2a2a2a;
        border-radius: 12px;
        padding: 1rem;
        margin-top: 1.5rem;
        max-height: 300px;
        overflow-y: auto;
    }

    .checkbox-group h4 {
        margin-bottom: 0.8rem;
        font-size: 1.1rem;
        color: #90caf9;
    }

    .checkbox-list label {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #2e2e2e;
        padding: 0.6rem 1rem;
        border-radius: 8px;
        margin-bottom: 0.4rem;
    }

    .checkbox-info {
        display: flex;
        align-items: center;
        gap: 0.8rem;
    }

    .avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"form-container\">
    <h2>{{ title }}</h2>

    {{ form_start(form, {'attr': {'enctype': 'multipart/form-data'}}) }}
    <div class=\"form-grid\">
        <div>
            {{ form_label(form.Name) }}
            {{ form_widget(form.Name) }}
        </div>

        <div>
            {{ form_label(form.Type) }}
            {{ form_widget(form.Type) }}
        </div>

        <div>
            {{ form_label(form.Image_Guild) }}
            {{ form_widget(form.Image_Guild) }}
        </div>

        <div>
            {{ form_label(form.Visibility_id) }}
            {{ form_widget(form.Visibility_id) }}
        </div>

        <div class=\"full-width\">
            {{ form_label(form.Description) }}
            {{ form_widget(form.Description) }}
        </div>
    </div>

    {# Factions #}
    <div class=\"checkbox-group\">
        <h4>{{ form_label(form.Guild_Faction) }}</h4>
        <div class=\"checkbox-list\">
            {% for child in form.Guild_Faction %}
                <label>
                    <div class=\"checkbox-info\">
                        {% set img = child.vars.attr['data-image'] ?? null %}
                        {% if img %}
                            <img src=\"{{ asset('uploads/factions/' ~ img) }}\" class=\"avatar\" alt=\"{{ child.vars.label }}\">
                        {% endif %}
                        <span>{{ child.vars.label }}</span>
                    </div>
                    {{ form_widget(child) }}
                </label>
            {% endfor %}
        </div>
    </div>

    {{ form_rest(form) }}

    <div style=\"text-align: right; margin-top: 1rem;\">
        <button type=\"submit\">Save</button>
    </div>
    {{ form_end(form) }}
</div>
{% endblock %}
", "guild/form.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\guild\\form.html.twig");
    }
}
