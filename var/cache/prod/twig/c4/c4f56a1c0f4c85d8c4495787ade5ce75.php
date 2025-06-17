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

/* capacity/show.html.twig */
class __TwigTemplate_78f9f12167dac5a7dd84e4dc2f62e7d1 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "capacity/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["capacity"] ?? null), "Name", [], "any", false, false, false, 3), "html", null, true);
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
    .section-title {
        margin-top: 3rem;
        font-size: 1.5rem;
        font-weight: bold;
        text-align: center;
        color: #fff;
    }

    .card-group {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1.5rem;
        margin-top: 1rem;
    }

    .entity-card {
        background-color: #1f1f1f;
        border-radius: 12px;
        padding: 1rem;
        width: 140px;
        text-align: center;
        color: white;
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }

    .entity-card img {
        width: 100%;
        height: 120px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 0.5rem;
    }

    .entity-card .name {
        font-weight: bold;
        font-size: 0.95rem;
    }

    .entity-card .type {
        font-size: 0.8rem;
        color: #aaa;
    }

    .capacity-image {
        max-width: 300px;
        width: 100%;
        border-radius: 1rem;
        object-fit: cover;
    }

    .capacity-description {
        white-space: pre-line;
    }

    .capacity-flex {
        display: flex;
        flex-wrap: wrap;
    }

    @media (max-width: 768px) {
        .capacity-flex {
            flex-direction: column !important;
            align-items: center !important;
            text-align: center;
        }

        .capacity-flex .col-md-4,
        .capacity-flex .col-md-8 {
            max-width: 100%;
            flex: 0 0 100%;
        }
    }
</style>
";
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "<div class=\"container text-white my-5\">
    <div class=\"row g-4 align-items-start capacity-flex\">
        <div class=\"col-md-4 text-center\">
            ";
        // line 88
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["capacity"] ?? null), "ImageCapacity", [], "any", false, false, false, 88)) {
            // line 89
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/capacities/" . CoreExtension::getAttribute($this->env, $this->source, ($context["capacity"] ?? null), "ImageCapacity", [], "any", false, false, false, 89))), "html", null, true);
            yield "\" class=\"capacity-image\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["capacity"] ?? null), "Name", [], "any", false, false, false, 89), "html", null, true);
            yield "\">
            ";
        }
        // line 91
        yield "        </div>
        <div class=\"col-md-8\">
            <h2 class=\"fw-bold text-primary\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["capacity"] ?? null), "Name", [], "any", false, false, false, 93), "html", null, true);
        yield "</h2>
            <p><strong>Type:</strong> ";
        // line 94
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["capacity"] ?? null), "Type", [], "any", false, false, false, 94)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["capacity"] ?? null), "Type", [], "any", false, false, false, 94), "html", null, true)) : ("N/A"));
        yield "</p>
            <p class=\"capacity-description\"><strong>Description:</strong><br>";
        // line 95
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["capacity"] ?? null), "Description", [], "any", false, false, false, 95)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["capacity"] ?? null), "Description", [], "any", false, false, false, 95), "html", null, true)) : ("No description available"));
        yield "</p>
        </div>
    </div>

    ";
        // line 99
        $context["filteredDomains"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["capacity"] ?? null), "Domain", [], "any", false, false, false, 99), function ($__d__) use ($context, $macros) { $context["d"] = $__d__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["d"] ?? null), "DomainWorld", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["capacity"] ?? null), "CapacityWorld", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99)); });
        // line 100
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filteredDomains"] ?? null)) > 0)) {
            // line 101
            yield "        <div class=\"section-title\">Associated Domains</div>
        <div class=\"card-group\">
            ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["filteredDomains"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 104
                yield "                <div class=\"entity-card\">
                    ";
                // line 105
                if (CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "ImageDomain", [], "any", false, false, false, 105)) {
                    // line 106
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/domains/" . CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "ImageDomain", [], "any", false, false, false, 106))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "Name", [], "any", false, false, false, 106), "html", null, true);
                    yield "\">
                    ";
                }
                // line 108
                yield "                    <div class=\"name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "Name", [], "any", false, false, false, 108), "html", null, true);
                yield "</div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            yield "        </div>
    ";
        }
        // line 113
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "capacity/show.html.twig";
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
        return array (  234 => 113,  230 => 111,  220 => 108,  212 => 106,  210 => 105,  207 => 104,  203 => 103,  199 => 101,  196 => 100,  194 => 99,  187 => 95,  183 => 94,  179 => 93,  175 => 91,  167 => 89,  165 => 88,  160 => 85,  153 => 84,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "capacity/show.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\capacity\\show.html.twig");
    }
}
