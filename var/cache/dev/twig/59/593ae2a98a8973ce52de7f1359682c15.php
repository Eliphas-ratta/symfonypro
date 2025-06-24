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
        background-color: #111111;
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

    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }
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

    .card-img-top {
        height: 200px;
        object-fit: cover;
        border-top-left-radius: 0.375rem;
        border-top-right-radius: 0.375rem;
    }

    .card {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .card-body {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-top: 1rem;
    }

    .card-buttons form {
        display: inline;
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
    <h2>Create a New World</h2>

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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "Worldimage", [], "any", false, false, false, 113), 'label');
        yield "
            ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "Worldimage", [], "any", false, false, false, 114), 'widget');
        yield "
        </div>

        <div class=\"full-width\">
            ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "Description", [], "any", false, false, false, 118), 'label');
        yield "
            ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "Description", [], "any", false, false, false, 119), 'widget');
        yield "
        </div>
    </div>

    ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), 'rest');
        yield "

    <div style=\"text-align: right; margin-top: 1rem;\">
        <button type=\"submit\" class=\"btn btn-success\">Create World</button>
    </div>
    ";
        // line 128
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'form_end');
        yield "
</div>

<hr class=\"my-5\">

<h2 class=\"text-center mb-4\">Your Worlds</h2>

";
        // line 135
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["userWorlds"]) || array_key_exists("userWorlds", $context) ? $context["userWorlds"] : (function () { throw new RuntimeError('Variable "userWorlds" does not exist.', 135, $this->source); })()))) {
            // line 136
            yield "<div class=\"container my-4\">
    <div class=\"row row-cols-2 row-cols-lg-3 g-4\">
        ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["userWorlds"]) || array_key_exists("userWorlds", $context) ? $context["userWorlds"] : (function () { throw new RuntimeError('Variable "userWorlds" does not exist.', 138, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["world"]) {
                // line 139
                yield "            <div class=\"col\">
                <div class=\"card bg-dark text-white\">
                    ";
                // line 141
                if (CoreExtension::getAttribute($this->env, $this->source, $context["world"], "worldimage", [], "any", false, false, false, 141)) {
                    // line 142
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/world_images/" . CoreExtension::getAttribute($this->env, $this->source, $context["world"], "worldimage", [], "any", false, false, false, 142))), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"...\">
                    ";
                }
                // line 144
                yield "                    <div class=\"card-body d-flex flex-column\">
                        <div>
                            <h5 class=\"card-title\">";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["world"], "name", [], "any", false, false, false, 146), "html", null, true);
                yield "</h5>
                            <p class=\"card-text\">";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["world"], "description", [], "any", false, false, false, 147), 0, 100) . "..."), "html", null, true);
                yield "</p>
                        </div>
                        <div class=\"card-buttons\">
                            <a href=\"";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_world_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["world"], "id", [], "any", false, false, false, 150)]), "html", null, true);
                yield "\" class=\"btn btn-outline-light\">Open</a>
                            <a href=\"";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_world_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["world"], "id", [], "any", false, false, false, 151)]), "html", null, true);
                yield "\" class=\"btn btn-outline-warning\">Edit</a>
                            <form method=\"post\" action=\"";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_world_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["world"], "id", [], "any", false, false, false, 152)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Are you sure you want to delete this world?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["world"], "id", [], "any", false, false, false, 153))), "html", null, true);
                yield "\">
                                <button class=\"btn btn-outline-danger\">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['world'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            yield "    </div>
</div>
";
        } else {
            // line 164
            yield "    <p class=\"text-muted text-center\">You haven't created any worlds yet.</p>
";
        }
        // line 166
        yield "
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
        return array (  352 => 166,  348 => 164,  343 => 161,  329 => 153,  325 => 152,  321 => 151,  317 => 150,  311 => 147,  307 => 146,  303 => 144,  297 => 142,  295 => 141,  291 => 139,  287 => 138,  283 => 136,  281 => 135,  271 => 128,  263 => 123,  256 => 119,  252 => 118,  245 => 114,  241 => 113,  234 => 109,  230 => 108,  224 => 105,  219 => 102,  206 => 101,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Your Worlds{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .form-container {
        max-width: 900px;
        margin: 2rem auto;
        background-color: #111111;
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

    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }
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

    .card-img-top {
        height: 200px;
        object-fit: cover;
        border-top-left-radius: 0.375rem;
        border-top-right-radius: 0.375rem;
    }

    .card {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .card-body {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-top: 1rem;
    }

    .card-buttons form {
        display: inline;
    }

</style>
{% endblock %}

{% block body %}
<div class=\"form-container\">
    <h2>Create a New World</h2>

    {{ form_start(form, {'attr': {'enctype': 'multipart/form-data'}}) }}
    <div class=\"form-grid\">
        <div>
            {{ form_label(form.Name) }}
            {{ form_widget(form.Name) }}
        </div>

        <div>
            {{ form_label(form.Worldimage) }}
            {{ form_widget(form.Worldimage) }}
        </div>

        <div class=\"full-width\">
            {{ form_label(form.Description) }}
            {{ form_widget(form.Description) }}
        </div>
    </div>

    {{ form_rest(form) }}

    <div style=\"text-align: right; margin-top: 1rem;\">
        <button type=\"submit\" class=\"btn btn-success\">Create World</button>
    </div>
    {{ form_end(form) }}
</div>

<hr class=\"my-5\">

<h2 class=\"text-center mb-4\">Your Worlds</h2>

{% if userWorlds is not empty %}
<div class=\"container my-4\">
    <div class=\"row row-cols-2 row-cols-lg-3 g-4\">
        {% for world in userWorlds %}
            <div class=\"col\">
                <div class=\"card bg-dark text-white\">
                    {% if world.worldimage %}
                        <img src=\"{{ asset('uploads/world_images/' ~ world.worldimage) }}\" class=\"card-img-top\" alt=\"...\">
                    {% endif %}
                    <div class=\"card-body d-flex flex-column\">
                        <div>
                            <h5 class=\"card-title\">{{ world.name }}</h5>
                            <p class=\"card-text\">{{ world.description|slice(0, 100) ~ '...' }}</p>
                        </div>
                        <div class=\"card-buttons\">
                            <a href=\"{{ path('app_world_show', {id: world.id}) }}\" class=\"btn btn-outline-light\">Open</a>
                            <a href=\"{{ path('app_world_edit', {id: world.id}) }}\" class=\"btn btn-outline-warning\">Edit</a>
                            <form method=\"post\" action=\"{{ path('app_world_delete', {id: world.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this world?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ world.id) }}\">
                                <button class=\"btn btn-outline-danger\">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>
{% else %}
    <p class=\"text-muted text-center\">You haven't created any worlds yet.</p>
{% endif %}

{% endblock %}
", "world/index.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\world\\index.html.twig");
    }
}
