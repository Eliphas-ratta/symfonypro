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

/* faction/index.html.twig */
class __TwigTemplate_7a8dc21e6ad2320c8c781f28cc7b9d92 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "faction/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Factions of ";
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
        .faction-card {
            height: 320px;
            position: relative;
            overflow: hidden;
        }

        .faction-card img {
            height: 150px;
            object-fit: cover;
        }

        .action-buttons {
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .faction-card.show-actions .action-buttons {
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
        }
    </style>
";
        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 71
        yield "<div class=\"container text-white py-4\">
    <h1 class=\"mb-4\">Factions of ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "Name", [], "any", false, false, false, 72), "html", null, true);
        yield "</h1>

    <a href=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_faction_create", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "id", [], "any", false, false, false, 74)]), "html", null, true);
        yield "\" class=\"btn btn-success mb-4\">
        + Create a New Faction
    </a>

    ";
        // line 78
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-filter mb-4"], "method" => "GET"]);
        yield "
    <div class=\"d-flex justify-content-center\">
        <div class=\"d-flex flex-wrap gap-2 justify-content-center align-items-end\" style=\"max-width: 1000px; width: 100%;\">

            ";
        // line 83
        yield "            <div class=\"input-group\" style=\"width: 250px;\">
                ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Recherche..."]]);
        // line 89
        yield "
                <button class=\"btn btn-danger\" type=\"submit\" style=\"min-width: 45px;\">
                    <i class=\"fas fa-search\"></i>
                </button>
            </div>

            ";
        // line 96
        yield "            <div style=\"width: 200px;\">
                ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "continent", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-select", "onchange" => "this.form.submit()"]]);
        // line 102
        yield "
            </div>

            ";
        // line 106
        yield "            <div>
                <a href=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_factions", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "id", [], "any", false, false, false, 107)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\" style=\"min-width: 120px;\">
                    Réinitialiser
                </a>
            </div>

        </div>
    </div>
    ";
        // line 114
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "

    <div class=\"row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3\">
        ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["factions"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["faction"]) {
            // line 118
            yield "            <div class=\"col\">
                <div class=\"card bg-dark text-white border-0 shadow rounded-4 faction-card position-relative\" id=\"card-";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "id", [], "any", false, false, false, 119), "html", null, true);
            yield "\">
                    ";
            // line 120
            if (CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "ImageFaction", [], "any", false, false, false, 120)) {
                // line 121
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/factions/" . CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "ImageFaction", [], "any", false, false, false, 121))), "html", null, true);
                yield "\" class=\"card-img-top rounded-top-4\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "Name", [], "any", false, false, false, 121), "html", null, true);
                yield "\">
                    ";
            }
            // line 123
            yield "
                    <div class=\"card-body p-2\">
                        <h6 class=\"card-title mb-1 fw-bold\">";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "Name", [], "any", false, false, false, 125), "html", null, true);
            yield "</h6>
                        <p class=\"card-text text-white small mb-0\">";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "Regime", [], "any", false, false, false, 126), "html", null, true);
            yield "</p>
                    </div>

                    <div class=\"action-buttons justify-content-around gap-1 px-3 pb-2\">
                        <a href=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_faction_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "id", [], "any", false, false, false, 130)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning\">Edit</a>
                        <a href=\"";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_faction_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "id", [], "any", false, false, false, 131)]), "html", null, true);
            yield "\"
                           class=\"btn btn-sm btn-outline-danger\"
                           onclick=\"return confirm('Are you sure you want to delete this faction?');\">Delete</a>
                    </div>

                    <button class=\"toggle-btn\" onclick=\"toggleActions(event, ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "id", [], "any", false, false, false, 136), "html", null, true);
            yield ");\">
                        +
                    </button>

                    <a href=\"";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_faction_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["faction"], "id", [], "any", false, false, false, 140)]), "html", null, true);
            yield "\" class=\"overlay-link\"></a>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 143
        if (!$context['_iterated']) {
            // line 144
            yield "            <div class=\"col-12\">
                <p class=\"text-muted\">No factions found in this world.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['faction'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        yield "    </div>
</div>
";
        yield from [];
    }

    // line 152
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 153
        yield "    ";
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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "faction/index.html.twig";
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
        return array (  302 => 153,  295 => 152,  288 => 148,  279 => 144,  277 => 143,  269 => 140,  262 => 136,  254 => 131,  250 => 130,  243 => 126,  239 => 125,  235 => 123,  227 => 121,  225 => 120,  221 => 119,  218 => 118,  213 => 117,  207 => 114,  197 => 107,  194 => 106,  189 => 102,  187 => 97,  184 => 96,  176 => 89,  174 => 84,  171 => 83,  164 => 78,  157 => 74,  152 => 72,  149 => 71,  142 => 70,  73 => 6,  66 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "faction/index.html.twig", "C:\\wamp64\\www\\symfony\\symfonypro\\templates\\faction\\index.html.twig");
    }
}
