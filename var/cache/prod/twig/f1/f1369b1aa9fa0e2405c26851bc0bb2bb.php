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
class __TwigTemplate_7ba429f599ca6f2973eac8bf4512408f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "continent/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Continents of ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "Name", [], "any", false, false, false, 3), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .continent-card {
            height: 320px;
            position: relative;
            overflow: hidden;
        }

        .continent-card img {
            height: 150px;
            object-fit: cover;
        }

        .action-buttons {
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    gap: 0.5rem;
    transition: max-height 0.3s ease, opacity 0.3s ease;
}

.continent-card.show-actions .action-buttons {
    max-height: 50px;
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
    </style>
";
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "<div class=\"container text-white py-4\">
    <h1 class=\"mb-4\">Continents of ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "Name", [], "any", false, false, false, 64), "html", null, true);
        yield "</h1>

    <a href=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_continent_create", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "id", [], "any", false, false, false, 66)]), "html", null, true);
        yield "\" class=\"btn btn-success mb-4\">
        + Create a New Continent
    </a>

    <div class=\"row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3\">
        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["continents"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["continent"]) {
            // line 72
            yield "            <div class=\"col\">
                <div class=\"card bg-dark text-white border-0 shadow rounded-4 continent-card position-relative\" id=\"card-";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "id", [], "any", false, false, false, 73), "html", null, true);
            yield "\">
                    ";
            // line 74
            if (CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "ImageContinent", [], "any", false, false, false, 74)) {
                // line 75
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/continents/" . CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "ImageContinent", [], "any", false, false, false, 75))), "html", null, true);
                yield "\" class=\"card-img-top rounded-top-4\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "Name", [], "any", false, false, false, 75), "html", null, true);
                yield "\">
                    ";
            }
            // line 77
            yield "
                    <div class=\"card-body p-2\">
                        <h6 class=\"card-title mb-1 fw-bold\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "Name", [], "any", false, false, false, 79), "html", null, true);
            yield "</h6>
                        <p class=\"card-text text-muted small mb-0\">
                            ";
            // line 81
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "Description", [], "any", false, false, false, 81)) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "Description", [], "any", false, false, false, 81), 0, 40) . "..."), "html", null, true)) : ("No description"));
            yield "
                        </p>
                    </div>

                    <div class=\"action-buttons justify-content-around gap-1 px-3 pb-2\">
                        <a href=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_continent_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning\">Edit</a>
                        <a href=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_continent_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            yield "\"
                           onclick=\"return confirm('Are you sure you want to delete this continent?');\"
                           class=\"btn btn-sm btn-outline-danger\">Delete</a>
                    </div>

                    <button class=\"toggle-btn\">
                    <span id=\"toggle-icon-";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "id", [], "any", false, false, false, 93), "html", null, true);
            yield "\">+</span>
                    </button>



                    <a href=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_continent_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["continent"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            yield "\" class=\"overlay-link\"></a>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 101
        if (!$context['_iterated']) {
            // line 102
            yield "            <div class=\"col-12\">
                <p class=\"text-muted\">No continents found in this world.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['continent'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "    </div>
</div>
";
        yield from [];
    }

    // line 110
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 111
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
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
        return array (  250 => 111,  243 => 110,  236 => 106,  227 => 102,  225 => 101,  217 => 98,  209 => 93,  200 => 87,  196 => 86,  188 => 81,  183 => 79,  179 => 77,  171 => 75,  169 => 74,  165 => 73,  162 => 72,  157 => 71,  149 => 66,  144 => 64,  141 => 63,  134 => 62,  73 => 6,  66 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "continent/index.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\continent\\index.html.twig");
    }
}
