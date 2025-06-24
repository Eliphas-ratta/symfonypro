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

/* base.html.twig */
class __TwigTemplate_fe8d2f5e44ed6d549d5d483250350f68 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html> 
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫</text></svg>\">
    
    ";
        // line 8
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
    
    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 13
        yield "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Uncial+Antiqua&display=swap\" rel=\"stylesheet\">

</head>

<body class=\"d-flex flex-column min-vh-100 bg-custom-dark\">
    <header class=\"navbar navbar-expand-lg navbar-dark bg-gray px-3 py-3\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand fantasy-title\" href=\"#\"><h1>Project Fantasia</h1></a>

            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#mainNavbar\"
                    aria-controls=\"mainNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"mainNavbar\">
                <div class=\"d-flex justify-content-between align-items-center w-100\">
                    <ul class=\"navbar-nav mx-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item\"><a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\">Home</a></li>
                        <li class=\"nav-item\"><a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_world");
        yield "\" class=\"nav-link\">Worlds</a></li>

                        ";
        // line 34
        if ($this->extensions['App\Twig\AppExtension']->getCurrentWorld()) {
            // line 35
            yield "                            <li class=\"nav-item\"><span class=\"nav-link text-info small\">World: <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "Name", [], "any", false, false, false, 35), "html", null, true);
            yield "</strong></span></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" class=\"nav-link\">Heroes</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_factions", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" class=\"nav-link\">Factions</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_races", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" class=\"nav-link\">Races</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_continents", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" class=\"nav-link\">Continents</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domains", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" class=\"nav-link\">Domains</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_capacities", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\" class=\"nav-link\">Capacities</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guilds", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"nav-link\">Guilds</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_city", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"nav-link\">Cities</a></li>
                        ";
        }
        // line 45
        yield "                    </ul>

                    <ul class=\"navbar-nav mb-2 mb-lg-0\">
                        ";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) {
            // line 49
            yield "                            <li class=\"nav-item\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" class=\"nav-link\">Profile</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 50
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"nav-link text-danger\">Logout</a></li>
                        ";
        } else {
            // line 52
            yield "                            <li class=\"nav-item\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"nav-link\">Login</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 53
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"nav-link\">Register</a></li>
                        ";
        }
        // line 55
        yield "                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main class=\"flex-grow-1 w-100\">
        ";
        // line 62
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 63
        yield "    </main>

    ";
        // line 65
        yield from $this->loadTemplate("includes/footer.html.twig", "base.html.twig", 65)->unwrap()->yield($context);
        // line 66
        yield "
    ";
        // line 67
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "

    ";
        // line 69
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 72
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "        ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 62
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 69
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

        // line 70
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
        return "base.html.twig";
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
        return array (  292 => 70,  279 => 69,  257 => 62,  243 => 11,  230 => 10,  207 => 5,  194 => 72,  192 => 69,  187 => 67,  184 => 66,  182 => 65,  178 => 63,  176 => 62,  167 => 55,  162 => 53,  157 => 52,  152 => 50,  147 => 49,  145 => 48,  140 => 45,  135 => 43,  131 => 42,  127 => 41,  123 => 40,  119 => 39,  115 => 38,  111 => 37,  107 => 36,  102 => 35,  100 => 34,  95 => 32,  91 => 31,  71 => 13,  69 => 10,  64 => 8,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html> 
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫</text></svg>\">
    
    {{ encore_entry_link_tags('app') }}
    
    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Uncial+Antiqua&display=swap\" rel=\"stylesheet\">

</head>

<body class=\"d-flex flex-column min-vh-100 bg-custom-dark\">
    <header class=\"navbar navbar-expand-lg navbar-dark bg-gray px-3 py-3\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand fantasy-title\" href=\"#\"><h1>Project Fantasia</h1></a>

            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#mainNavbar\"
                    aria-controls=\"mainNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"mainNavbar\">
                <div class=\"d-flex justify-content-between align-items-center w-100\">
                    <ul class=\"navbar-nav mx-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item\"><a href=\"{{ path('app_home') }}\" class=\"nav-link\">Home</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('app_world') }}\" class=\"nav-link\">Worlds</a></li>

                        {% if current_world() %}
                            <li class=\"nav-item\"><span class=\"nav-link text-info small\">World: <strong>{{ current_world().Name }}</strong></span></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_hero', { worldId: current_world().id }) }}\" class=\"nav-link\">Heroes</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_factions', { worldId: current_world().id }) }}\" class=\"nav-link\">Factions</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_races', { worldId: current_world().id }) }}\" class=\"nav-link\">Races</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_continents', { worldId: current_world().id }) }}\" class=\"nav-link\">Continents</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_domains', { worldId: current_world().id }) }}\" class=\"nav-link\">Domains</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_capacities', { worldId: current_world().id }) }}\" class=\"nav-link\">Capacities</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_guilds', { worldId: current_world().id }) }}\" class=\"nav-link\">Guilds</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_city', { worldId: current_world().id }) }}\" class=\"nav-link\">Cities</a></li>
                        {% endif %}
                    </ul>

                    <ul class=\"navbar-nav mb-2 mb-lg-0\">
                        {% if app.user %}
                            <li class=\"nav-item\"><a href=\"{{ path('app_profile') }}\" class=\"nav-link\">Profile</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_logout') }}\" class=\"nav-link text-danger\">Logout</a></li>
                        {% else %}
                            <li class=\"nav-item\"><a href=\"{{ path('app_login') }}\" class=\"nav-link\">Login</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('app_register') }}\" class=\"nav-link\">Register</a></li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main class=\"flex-grow-1 w-100\">
        {% block body %}{% endblock %}
    </main>

    {% include 'includes/footer.html.twig' %}

    {{ encore_entry_script_tags('app') }}

    {% block javascripts %}
      
    {% endblock %}
</body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\base.html.twig");
    }
}
