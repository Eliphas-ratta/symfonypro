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
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        yield "\">

    
    ";
        // line 9
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
    
    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 14
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
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\">Home</a></li>
                        <li class=\"nav-item\"><a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_world");
        yield "\" class=\"nav-link\">Worlds</a></li>

                        ";
        // line 35
        if ($this->extensions['App\Twig\AppExtension']->getCurrentWorld()) {
            // line 36
            yield "                            <li class=\"nav-item\"><span class=\"nav-link text-info small\">World: <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "Name", [], "any", false, false, false, 36), "html", null, true);
            yield "</strong></span></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" class=\"nav-link\">Heroes</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_factions", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" class=\"nav-link\">Factions</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_races", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" class=\"nav-link\">Races</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_continents", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" class=\"nav-link\">Continents</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domains", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\" class=\"nav-link\">Domains</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_capacities", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"nav-link\">Capacities</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guilds", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"nav-link\">Guilds</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_city", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['App\Twig\AppExtension']->getCurrentWorld(), "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" class=\"nav-link\">Cities</a></li>
                        ";
        }
        // line 46
        yield "                    </ul>

                    <ul class=\"navbar-nav mb-2 mb-lg-0\">
                        ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 49)) {
            // line 50
            yield "                            <li class=\"nav-item\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" class=\"nav-link\">Profile</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 51
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"nav-link text-danger\">Logout</a></li>
                        ";
        } else {
            // line 53
            yield "                            <li class=\"nav-item\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"nav-link\">Login</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 54
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"nav-link\">Register</a></li>
                        ";
        }
        // line 56
        yield "                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main class=\"flex-grow-1 w-100\">
        ";
        // line 63
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 64
        yield "    </main>

    ";
        // line 66
        yield from $this->loadTemplate("includes/footer.html.twig", "base.html.twig", 66)->unwrap()->yield($context);
        // line 67
        yield "
    ";
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

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "        ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
    ";
        yield from [];
    }

    // line 63
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
        yield "      
    ";
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
        return array (  242 => 71,  235 => 70,  225 => 63,  217 => 12,  210 => 11,  199 => 5,  192 => 73,  190 => 70,  185 => 68,  182 => 67,  180 => 66,  176 => 64,  174 => 63,  165 => 56,  160 => 54,  155 => 53,  150 => 51,  145 => 50,  143 => 49,  138 => 46,  133 => 44,  129 => 43,  125 => 42,  121 => 41,  117 => 40,  113 => 39,  109 => 38,  105 => 37,  100 => 36,  98 => 35,  93 => 33,  89 => 32,  69 => 14,  67 => 11,  62 => 9,  56 => 6,  52 => 5,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\symfony\\symfonypro\\templates\\base.html.twig");
    }
}
