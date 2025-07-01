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

/* race/index.html.twig */
class __TwigTemplate_3888616ef709850b1868e277c91d6a54 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "race/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Races of ";
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
        .race-card {
            height: 320px;
            position: relative;
            overflow: hidden;
        }

        .race-card img {
            height: 150px;
            object-fit: cover;
        }

        .action-buttons {
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .race-card.show-actions .action-buttons {
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

        .form-filter input {
            background-color: #2a2a2a;
            border: 1px solid #555;
            color: #fff;
        }

        .form-filter input::placeholder {
    color: #fff; /* blanc */
    opacity: 1;  /* s'assurer qu'il ne soit pas estompé */
}

    </style>
";
        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 69
        yield "<div class=\"container text-white py-4\">
    <h1 class=\"mb-4\">Races of ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "Name", [], "any", false, false, false, 70), "html", null, true);
        yield "</h1>

    <a href=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_race_create", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "id", [], "any", false, false, false, 72)]), "html", null, true);
        yield "\" class=\"btn btn-success mb-4\">
        + Create a New Race
    </a>

    ";
        // line 77
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["method" => "GET", "attr" => ["class" => "form-filter mb-4"]]);
        yield "
    <div class=\"d-flex justify-content-center\">
        <div class=\"input-group\" style=\"width: 250px;\">
            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Recherche..."]]);
        // line 85
        yield "
            <button class=\"btn btn-danger\" type=\"submit\">
                <i class=\"fas fa-search\"></i>
            </button>
        </div>
    </div>
    ";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "

    <div class=\"row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3\">
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["races"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["race"]) {
            // line 95
            yield "            <div class=\"col\">
                <div class=\"card bg-dark text-white border-0 shadow rounded-4 race-card position-relative\" id=\"card-";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["race"], "id", [], "any", false, false, false, 96), "html", null, true);
            yield "\">
                    ";
            // line 97
            if (CoreExtension::getAttribute($this->env, $this->source, $context["race"], "ImageRace", [], "any", false, false, false, 97)) {
                // line 98
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/races/" . CoreExtension::getAttribute($this->env, $this->source, $context["race"], "ImageRace", [], "any", false, false, false, 98))), "html", null, true);
                yield "\" class=\"card-img-top rounded-top-4\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["race"], "Name", [], "any", false, false, false, 98), "html", null, true);
                yield "\">
                    ";
            }
            // line 100
            yield "
                    <div class=\"card-body p-2\">
                        <h6 class=\"card-title mb-1 fw-bold\">";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["race"], "Name", [], "any", false, false, false, 102), "html", null, true);
            yield "</h6>
                        <p class=\"card-text text-white small mb-0\">
                            ";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["race"], "RaceHero", [], "any", false, false, false, 104)), "html", null, true);
            yield " hero";
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["race"], "RaceHero", [], "any", false, false, false, 104)) > 1)) ? ("es") : (""));
            yield "
                        </p>
                    </div>

                    <div class=\"action-buttons justify-content-around gap-1 px-3 pb-2\">
                        <a href=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_race_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["race"], "id", [], "any", false, false, false, 109)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning\">Edit</a>
                        <a href=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_race_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["race"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            yield "\"
                           class=\"btn btn-sm btn-outline-danger\"
                           onclick=\"return confirm('Are you sure you want to delete this race?');\">Delete</a>
                    </div>

                    <button class=\"toggle-btn\" onclick=\"toggleActions(event, ";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["race"], "id", [], "any", false, false, false, 115), "html", null, true);
            yield ");\">+</button>

                    <a href=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_race_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["race"], "id", [], "any", false, false, false, 117)]), "html", null, true);
            yield "\" class=\"overlay-link\"></a>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 120
        if (!$context['_iterated']) {
            // line 121
            yield "            <div class=\"col-12\">
                <p class=\"text-muted\">No races found in this world.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['race'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "    </div>
</div>
";
        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 130
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
        return "race/index.html.twig";
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
        return array (  276 => 130,  269 => 129,  262 => 125,  253 => 121,  251 => 120,  243 => 117,  238 => 115,  230 => 110,  226 => 109,  216 => 104,  211 => 102,  207 => 100,  199 => 98,  197 => 97,  193 => 96,  190 => 95,  185 => 94,  179 => 91,  171 => 85,  169 => 80,  162 => 77,  155 => 72,  150 => 70,  147 => 69,  140 => 68,  73 => 6,  66 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "race/index.html.twig", "C:\\wamp64\\www\\symfony\\symfonypro\\templates\\race\\index.html.twig");
    }
}
