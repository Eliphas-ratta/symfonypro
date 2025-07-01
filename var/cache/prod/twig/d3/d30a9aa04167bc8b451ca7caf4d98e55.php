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

/* hero/index.html.twig */
class __TwigTemplate_936cf9ae9eceb9a272bac32613d6871c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "hero/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Heroes of ";
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
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .hero-card {
        height: 320px;
        position: relative;
        overflow: hidden;
    }

    .hero-card img {
        height: 150px;
        object-fit: cover;
    }

    .action-buttons {
        display: none;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .hero-card.show-actions .action-buttons {
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
    <h1 class=\"mb-4\" role=\"heading\" aria-level=\"1\">Heroes of ";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "Name", [], "any", false, false, false, 74), "html", null, true);
        yield "</h1>

    <a href=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero_create", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "id", [], "any", false, false, false, 76)]), "html", null, true);
        yield "\" class=\"btn btn-success mb-4\" role=\"button\" aria-label=\"Create a new hero\">
        + Create a New Hero
    </a>

    ";
        // line 80
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-filter mb-4", "role" => "search"], "method" => "GET"]);
        yield "
    <div class=\"d-flex justify-content-center\">
        <div class=\"d-flex flex-wrap gap-2 justify-content-center align-items-end\" style=\"max-width: 1000px; width: 100%;\">
            <div class=\"input-group\" style=\"width: 250px;\">
                ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Search hero by name", "aria-label" => "Search hero by name"]]);
        // line 90
        yield "
                <button class=\"btn btn-danger\" type=\"submit\" style=\"min-width: 45px;\" aria-label=\"Submit search\">
                    <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                </button>
            </div>

            <div style=\"width: 200px;\">
                ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "factions", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-select", "onchange" => "this.form.submit()", "aria-label" => "Filter by faction"]]);
        // line 103
        yield "
            </div>
            <div style=\"width: 200px;\">
                ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "guilds", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-select", "onchange" => "this.form.submit()", "aria-label" => "Filter by guild"]]);
        // line 112
        yield "
            </div>
            <div style=\"width: 200px;\">
                ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "races", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => "form-select", "onchange" => "this.form.submit()", "aria-label" => "Filter by race"]]);
        // line 121
        yield "
            </div>

            <div>
                <a href=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "id", [], "any", false, false, false, 125)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\" style=\"min-width: 120px;\" role=\"button\" aria-label=\"Reset filters\">
                    Réinitialiser
                </a>
            </div>
        </div>
    </div>
    ";
        // line 131
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "

    <div class=\"row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3\">
        ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["heroes"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hero"]) {
            // line 135
            yield "            <div class=\"col\">
                <div class=\"card bg-dark text-white border-0 shadow rounded-4 hero-card position-relative\" id=\"card-";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 136), "html", null, true);
            yield "\" role=\"region\" aria-labelledby=\"hero-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 136), "html", null, true);
            yield "-name\">
                    ";
            // line 137
            if (CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "ImageHero", [], "any", false, false, false, 137)) {
                // line 138
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/heroes/" . CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "ImageHero", [], "any", false, false, false, 138))), "html", null, true);
                yield "\" class=\"card-img-top rounded-top-4\" alt=\"Image of ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 138), "html", null, true);
                yield "\">
                    ";
            }
            // line 140
            yield "
                    <div class=\"card-body p-2\">
                        <h6 id=\"hero-";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 142), "html", null, true);
            yield "-name\" class=\"card-title mb-1 fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 142), "html", null, true);
            yield "</h6>
                        <p class=\"card-text small mb-0 text-white\">";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Fonction", [], "any", false, false, false, 143), "html", null, true);
            yield "</p>
                    </div>

                    <div class=\"action-buttons justify-content-around gap-1 px-3 pb-2\">
                        <a href=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 147)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning\" aria-label=\"Edit ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 147), "html", null, true);
            yield "\">Edit</a>
                        <a href=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 148)]), "html", null, true);
            yield "\"
                           class=\"btn btn-sm btn-outline-danger\"
                           onclick=\"return confirm('Are you sure you want to delete this hero?');\"
                           aria-label=\"Delete ";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 151), "html", null, true);
            yield "\">Delete</a>
                    </div>

                    <button class=\"toggle-btn\" onclick=\"toggleActions(event, ";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 154), "html", null, true);
            yield ");\" aria-label=\"Toggle action buttons for ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 154), "html", null, true);
            yield "\">
                        +
                    </button>

                    <a href=\"";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 158)]), "html", null, true);
            yield "\" class=\"overlay-link\" aria-label=\"View details of ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 158), "html", null, true);
            yield "\"></a>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 161
        if (!$context['_iterated']) {
            // line 162
            yield "            <div class=\"col-12\">
                <p class=\"text-muted\">No heroes found in this world.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['hero'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "    </div>
</div>
";
        yield from [];
    }

    // line 170
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 171
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
        return "hero/index.html.twig";
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
        return array (  323 => 171,  316 => 170,  309 => 166,  300 => 162,  298 => 161,  288 => 158,  279 => 154,  273 => 151,  267 => 148,  261 => 147,  254 => 143,  248 => 142,  244 => 140,  236 => 138,  234 => 137,  228 => 136,  225 => 135,  220 => 134,  214 => 131,  205 => 125,  199 => 121,  197 => 115,  192 => 112,  190 => 106,  185 => 103,  183 => 97,  174 => 90,  172 => 84,  165 => 80,  158 => 76,  153 => 74,  150 => 73,  143 => 72,  73 => 6,  66 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "hero/index.html.twig", "C:\\wamp64\\www\\symfony\\symfonypro\\templates\\hero\\index.html.twig");
    }
}
