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

/* capacity/index.html.twig */
class __TwigTemplate_b86f190069e5aeb072378481a059a23d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "capacity/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Capacities of ";
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
        .capacity-card {
            height: 320px;
            position: relative;
            overflow: hidden;
        }

        .capacity-card img {
            height: 150px;
            object-fit: cover;
        }

        .action-buttons {
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .capacity-card.show-actions .action-buttons {
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
            opacity: 1;
        }
    </style>
";
        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 73
        yield "<div class=\"container text-white py-4\">
    <h1 class=\"mb-4\">Capacities of ";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "Name", [], "any", false, false, false, 74), "html", null, true);
        yield "</h1>

    <a href=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_capacity_create", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "id", [], "any", false, false, false, 76)]), "html", null, true);
        yield "\" class=\"btn btn-success mb-4\">
        + Create a New Capacity
    </a>

    ";
        // line 80
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-filter mb-4"], "method" => "GET"]);
        yield "
    <div class=\"d-flex justify-content-center\">
        <div class=\"d-flex flex-wrap gap-2 justify-content-center align-items-end\" style=\"max-width: 1000px; width: 100%;\">

            ";
        // line 85
        yield "            <div class=\"input-group\" style=\"width: 250px;\">
                ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Recherche..."]]);
        // line 91
        yield "
                <button class=\"btn btn-danger\" type=\"submit\" style=\"min-width: 45px;\">
                    <i class=\"fas fa-search\"></i>
                </button>
            </div>

            ";
        // line 98
        yield "            <div style=\"width: 200px;\">
                ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "domains", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-select", "onchange" => "this.form.submit()"]]);
        // line 105
        yield "
            </div>

            ";
        // line 109
        yield "            <div>
                <a href=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_capacities", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "id", [], "any", false, false, false, 110)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\" style=\"min-width: 120px;\">
                    Réinitialiser
                </a>
            </div>

        </div>
    </div>
    ";
        // line 117
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "

    <div class=\"row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3\">
        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["capacities"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["capacity"]) {
            // line 121
            yield "            <div class=\"col\">
                <div class=\"card bg-dark text-white border-0 shadow rounded-4 capacity-card position-relative\" id=\"card-";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "id", [], "any", false, false, false, 122), "html", null, true);
            yield "\">
                    ";
            // line 123
            if (CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "ImageCapacity", [], "any", false, false, false, 123)) {
                // line 124
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/capacities/" . CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "ImageCapacity", [], "any", false, false, false, 124))), "html", null, true);
                yield "\" class=\"card-img-top rounded-top-4\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "Name", [], "any", false, false, false, 124), "html", null, true);
                yield "\">
                    ";
            }
            // line 126
            yield "
                    <div class=\"card-body p-2\">
                        <h6 class=\"card-title mb-1 fw-bold\">";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "Name", [], "any", false, false, false, 128), "html", null, true);
            yield "</h6>
                        <p class=\"card-text text-white small mb-0\">";
            // line 129
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "Type", [], "any", false, false, false, 129)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "Type", [], "any", false, false, false, 129), "html", null, true)) : ("No type"));
            yield "</p>
                    </div>

                    <div class=\"action-buttons justify-content-around gap-1 px-3 pb-2\">
                        <a href=\"";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_capacity_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "id", [], "any", false, false, false, 133)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning\">Edit</a>
                        <a href=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_capacity_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "id", [], "any", false, false, false, 134)]), "html", null, true);
            yield "\"
                           class=\"btn btn-sm btn-outline-danger\"
                           onclick=\"return confirm('Are you sure you want to delete this capacity?');\">Delete</a>
                    </div>

                    <button class=\"toggle-btn\" onclick=\"toggleActions(event, ";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "id", [], "any", false, false, false, 139), "html", null, true);
            yield ");\">
                        +
                    </button>

                    <a href=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_capacity_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["capacity"], "id", [], "any", false, false, false, 143)]), "html", null, true);
            yield "\" class=\"overlay-link\"></a>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 146
        if (!$context['_iterated']) {
            // line 147
            yield "            <div class=\"col-12\">
                <p class=\"text-muted\">No capacities found in this world.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['capacity'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        yield "    </div>
</div>
";
        yield from [];
    }

    // line 155
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 156
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
        return "capacity/index.html.twig";
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
        return array (  304 => 156,  297 => 155,  290 => 151,  281 => 147,  279 => 146,  271 => 143,  264 => 139,  256 => 134,  252 => 133,  245 => 129,  241 => 128,  237 => 126,  229 => 124,  227 => 123,  223 => 122,  220 => 121,  215 => 120,  209 => 117,  199 => 110,  196 => 109,  191 => 105,  189 => 99,  186 => 98,  178 => 91,  176 => 86,  173 => 85,  166 => 80,  159 => 76,  154 => 74,  151 => 73,  144 => 72,  73 => 6,  66 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "capacity/index.html.twig", "C:\\wamp64\\www\\symfony\\symfonypro\\templates\\capacity\\index.html.twig");
    }
}
