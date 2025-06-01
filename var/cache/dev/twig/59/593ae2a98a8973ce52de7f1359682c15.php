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

/* world/index.html.twig */
class __TwigTemplate_6bf189983216f8eee41303c773874295 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "world/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "world/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "world/index.html.twig", 1);
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

        yield "Your Worlds";
        
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
        yield "<div class=\"container my-5 \">
    <div class=\"\"> 
    <h2 class=\"mb-4\">Create a New World</h2>

";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "

    <div class=\"mb-3\">
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "Name", [], "any", false, false, false, 13), 'label');
        yield "
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "Name", [], "any", false, false, false, 14), 'widget');
        yield "
    </div>
    <div class=\"mb-3\">
        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "Description", [], "any", false, false, false, 17), 'label');
        yield "
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "Description", [], "any", false, false, false, 18), 'widget');
        yield "
    </div>
    <div class=\"mb-3\">
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "Worldimage", [], "any", false, false, false, 21), 'label');
        yield "
        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "Worldimage", [], "any", false, false, false, 22), 'widget');
        yield "
    </div>
    <button type=\"submit\" class=\"btn btn-danger\">Create World</button>
";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_end');
        yield "
</div>

<hr class=\"my-5\">

<h2>Your Worlds</h2>

";
        // line 32
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["userWorlds"]) || array_key_exists("userWorlds", $context) ? $context["userWorlds"] : (function () { throw new RuntimeError('Variable "userWorlds" does not exist.', 32, $this->source); })()))) {
            // line 33
            yield "    <div class=\"row\">
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["userWorlds"]) || array_key_exists("userWorlds", $context) ? $context["userWorlds"] : (function () { throw new RuntimeError('Variable "userWorlds" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["world"]) {
                // line 35
                yield "            <div class=\"col-md-4 mb-3\">
                <div class=\"card bg-dark text-white\">
                    ";
                // line 37
                if (CoreExtension::getAttribute($this->env, $this->source, $context["world"], "worldimage", [], "any", false, false, false, 37)) {
                    // line 38
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/world_images/" . CoreExtension::getAttribute($this->env, $this->source, $context["world"], "worldimage", [], "any", false, false, false, 38))), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"...\">
                    ";
                }
                // line 40
                yield "                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["world"], "name", [], "any", false, false, false, 41), "html", null, true);
                yield "</h5>
                        <p class=\"card-text\">";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["world"], "description", [], "any", false, false, false, 42), 0, 100) . "..."), "html", null, true);
                yield "</p>
                        <a href=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_world_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["world"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                yield "\" class=\"btn btn-outline-light\">Open</a>
                    </div>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['world'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "    </div>
";
        } else {
            // line 50
            yield "    <p class=\"text-muted\">You haven't created any worlds yet.</p>
";
        }
        // line 52
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
        return "world/index.html.twig";
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
        return array (  203 => 52,  199 => 50,  195 => 48,  184 => 43,  180 => 42,  176 => 41,  173 => 40,  167 => 38,  165 => 37,  161 => 35,  157 => 34,  154 => 33,  152 => 32,  142 => 25,  136 => 22,  132 => 21,  126 => 18,  122 => 17,  116 => 14,  112 => 13,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Your Worlds{% endblock %}

{% block body %}
<div class=\"container my-5 \">
    <div class=\"\"> 
    <h2 class=\"mb-4\">Create a New World</h2>

{{ form_start(form, {'attr': {'enctype': 'multipart/form-data'}}) }}

    <div class=\"mb-3\">
        {{ form_label(form.Name) }}
        {{ form_widget(form.Name) }}
    </div>
    <div class=\"mb-3\">
        {{ form_label(form.Description) }}
        {{ form_widget(form.Description) }}
    </div>
    <div class=\"mb-3\">
        {{ form_label(form.Worldimage) }}
        {{ form_widget(form.Worldimage) }}
    </div>
    <button type=\"submit\" class=\"btn btn-danger\">Create World</button>
{{ form_end(form) }}
</div>

<hr class=\"my-5\">

<h2>Your Worlds</h2>

{% if userWorlds is not empty %}
    <div class=\"row\">
        {% for world in userWorlds %}
            <div class=\"col-md-4 mb-3\">
                <div class=\"card bg-dark text-white\">
                    {% if world.worldimage %}
                        <img src=\"{{ asset('uploads/world_images/' ~ world.worldimage) }}\" class=\"card-img-top\" alt=\"...\">
                    {% endif %}
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ world.name }}</h5>
                        <p class=\"card-text\">{{ world.description|slice(0, 100) ~ '...' }}</p>
                        <a href=\"{{ path('app_world_show', {id: world.id}) }}\" class=\"btn btn-outline-light\">Open</a>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% else %}
    <p class=\"text-muted\">You haven't created any worlds yet.</p>
{% endif %}
</div>
{% endblock %}
", "world/index.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\world\\index.html.twig");
    }
}
