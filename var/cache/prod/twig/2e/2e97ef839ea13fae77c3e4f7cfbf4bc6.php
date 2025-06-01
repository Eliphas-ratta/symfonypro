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
class __TwigTemplate_b8c98b669dafcec48aaefc9df78c4896 extends Template
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
        yield "</head>

<body>
<header class=\"navbar navbar-expand-lg navbar-dark bg-gray px-3 py-3\">
    <div class=\"container-fluid\">
        <!-- Logo -->
        <a class=\"navbar-brand\" href=\"#\"><h1>Project Fantasia</h1></a>

        <!-- Bouton burger -->
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#mainNavbar\"
                aria-controls=\"mainNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <!-- Menu -->
        <div class=\"collapse navbar-collapse\" id=\"mainNavbar\">
            <div class=\"d-flex justify-content-between align-items-center w-100\">

                <!-- Menu centré -->
                <ul class=\"navbar-nav mx-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item\"><a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\">Home</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_world");
        yield "\" class=\"nav-link\">Worlds</a></li>

                    ";
        // line 36
        if ($this->extensions['App\Twig\AppExtension']->getCurrentWorld()) {
            // line 37
            yield "                        <li class=\"nav-item\"><span class=\"nav-link text-info small\">World: <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "Name", [], "any", false, false, false, 37), "html", null, true);
            yield "</strong></span></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" class=\"nav-link\">Heroes</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_factions", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" class=\"nav-link\">Factions</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_races", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" class=\"nav-link\">Races</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_continents", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\" class=\"nav-link\">Continents</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domains", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"nav-link\">Domains</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_capacities", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"nav-link\">Capacities</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guilds", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" class=\"nav-link\">Guilds</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_city", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"nav-link\">Cities</a></li>

                    ";
        }
        // line 48
        yield "                </ul>

                <!-- Connexion à droite -->
                <ul class=\"navbar-nav mb-2 mb-lg-0\">
                    ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 52)) {
            // line 53
            yield "                        <li class=\"nav-item\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" class=\"nav-link\">Profile</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 54
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"nav-link text-danger\">Logout</a></li>
                    ";
        } else {
            // line 56
            yield "                        <li class=\"nav-item\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"nav-link\">Login</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 57
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"nav-link\">Register</a></li>
                    ";
        }
        // line 59
        yield "                </ul>

            </div>
        </div>
    </div>
</header>


";
        // line 67
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 68
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "

";
        // line 70
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 73
        yield "</body>
</html>
";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Welcome!";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "        ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
    ";
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 71
        yield "    ";
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
        return array (  234 => 71,  227 => 70,  217 => 67,  209 => 11,  202 => 10,  191 => 5,  184 => 73,  182 => 70,  177 => 68,  175 => 67,  165 => 59,  160 => 57,  155 => 56,  150 => 54,  145 => 53,  143 => 52,  137 => 48,  131 => 45,  127 => 44,  123 => 43,  119 => 42,  115 => 41,  111 => 40,  107 => 39,  103 => 38,  98 => 37,  96 => 36,  91 => 34,  87 => 33,  65 => 13,  63 => 10,  58 => 8,  52 => 5,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\base.html.twig");
    }
}
