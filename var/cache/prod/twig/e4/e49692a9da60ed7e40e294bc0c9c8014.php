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

/* domain/index.html.twig */
class __TwigTemplate_636f3d83134fac32afbbe6a3637bca31 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "domain/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Domains of ";
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
        .domain-card {
            height: 320px;
            position: relative;
            overflow: hidden;
        }

        .domain-card img {
            height: 150px;
            object-fit: cover;
        }

        .action-buttons {
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .domain-card.show-actions .action-buttons {
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
    <h1 class=\"mb-4\">Domains of ";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "Name", [], "any", false, false, false, 74), "html", null, true);
        yield "</h1>

    <a href=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domain_create", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "id", [], "any", false, false, false, 76)]), "html", null, true);
        yield "\" class=\"btn btn-success mb-4\">
        + Create a New Domain
    </a>

    ";
        // line 80
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-filter mb-4"], "method" => "GET"]);
        yield "
    <div class=\"d-flex justify-content-center\">
        <div class=\"d-flex flex-wrap gap-2 justify-content-center align-items-end\" style=\"max-width: 1000px; width: 100%;\">
            <div class=\"input-group\" style=\"width: 250px;\">
                ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Search by name"]]);
        // line 89
        yield "
                <button class=\"btn btn-danger\" type=\"submit\" style=\"min-width: 45px;\">
                    <i class=\"fas fa-search\"></i>
                </button>
            </div>

            <div style=\"width: 200px;\">
                ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "races", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-select", "onchange" => "this.form.submit()"]]);
        // line 101
        yield "
            </div>

            <div>
                <a href=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domains", ["worldId" => CoreExtension::getAttribute($this->env, $this->source, ($context["world"] ?? null), "id", [], "any", false, false, false, 105)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\" style=\"min-width: 120px;\">
                    Réinitialiser
                </a>
            </div>
        </div>
    </div>
    ";
        // line 111
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "

    <div class=\"row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3 mt-3\">
        ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["domains"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 115
            yield "            <div class=\"col\">
                <div class=\"card bg-dark text-white border-0 shadow rounded-4 domain-card position-relative\" id=\"card-";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "id", [], "any", false, false, false, 116), "html", null, true);
            yield "\">
                    ";
            // line 117
            if (CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "ImageDomain", [], "any", false, false, false, 117)) {
                // line 118
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/domains/" . CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "ImageDomain", [], "any", false, false, false, 118))), "html", null, true);
                yield "\" class=\"card-img-top rounded-top-4\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "Name", [], "any", false, false, false, 118), "html", null, true);
                yield "\">
                    ";
            }
            // line 120
            yield "
                    <div class=\"card-body p-2\">
                        <h6 class=\"card-title mb-1 fw-bold\">";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "Name", [], "any", false, false, false, 122), "html", null, true);
            yield "</h6>
                        <p class=\"card-text text-white small mb-0\">";
            // line 123
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "Type", [], "any", false, false, false, 123)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "Type", [], "any", false, false, false, 123), "html", null, true)) : ("No type"));
            yield "</p>
                    </div>

                    <div class=\"action-buttons justify-content-around gap-1 px-3 pb-2\">
                        <a href=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domain_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "id", [], "any", false, false, false, 127)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning\">Edit</a>
                        <a href=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domain_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "id", [], "any", false, false, false, 128)]), "html", null, true);
            yield "\"
                           onclick=\"return confirm('Are you sure you want to delete this domain?');\"
                           class=\"btn btn-sm btn-outline-danger\">Delete</a>
                    </div>

                    <button class=\"toggle-btn\" onclick=\"toggleActions(event, ";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "id", [], "any", false, false, false, 133), "html", null, true);
            yield ");\">+</button>
                    <a href=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domain_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "id", [], "any", false, false, false, 134)]), "html", null, true);
            yield "\" class=\"overlay-link\"></a>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 137
        if (!$context['_iterated']) {
            // line 138
            yield "            <div class=\"col-12\">
                <p class=\"text-muted\">No domains found in this world.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "    </div>
</div>
";
        yield from [];
    }

    // line 146
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 147
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
        return "domain/index.html.twig";
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
        return array (  293 => 147,  286 => 146,  279 => 142,  270 => 138,  268 => 137,  260 => 134,  256 => 133,  248 => 128,  244 => 127,  237 => 123,  233 => 122,  229 => 120,  221 => 118,  219 => 117,  215 => 116,  212 => 115,  207 => 114,  201 => 111,  192 => 105,  186 => 101,  184 => 96,  175 => 89,  173 => 84,  166 => 80,  159 => 76,  154 => 74,  151 => 73,  144 => 72,  73 => 6,  66 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "domain/index.html.twig", "C:\\wamp64\\www\\symfony\\symfonypro\\templates\\domain\\index.html.twig");
    }
}
