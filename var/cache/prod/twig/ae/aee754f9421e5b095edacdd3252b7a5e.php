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

/* race/show.html.twig */
class __TwigTemplate_07b96ceae3a8211314a6000d9567a0dc extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "race/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["race"] ?? null), "Name", [], "any", false, false, false, 3), "html", null, true);
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
            background-color: #111111;
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

        .race-image {
            max-width: 300px;
            width: 100%;
            border-radius: 1rem;
            object-fit: cover;
        }

        .race-description {
            white-space: pre-line;
        }

        .info-label {
            font-weight: bold;
        }

        .race-flex {
            display: flex;
            flex-wrap: wrap;
        }

        @media (max-width: 768px) {
            .race-flex {
                flex-direction: column !important;
                align-items: center !important;
                text-align: center;
            }

            .race-flex .col-md-4,
            .race-flex .col-md-8 {
                max-width: 100%;
                flex: 0 0 100%;
            }
        }
    </style>
";
        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 89
        yield "<div class=\"container text-white my-5\">
    

    <div class=\"row g-4 align-items-start race-flex\">
        <div class=\"col-md-4 text-center\">
            ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["race"] ?? null), "ImageRace", [], "any", false, false, false, 94)) {
            // line 95
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/races/" . CoreExtension::getAttribute($this->env, $this->source, ($context["race"] ?? null), "ImageRace", [], "any", false, false, false, 95))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["race"] ?? null), "Name", [], "any", false, false, false, 95), "html", null, true);
            yield "\" class=\"race-image\">
            ";
        }
        // line 97
        yield "        </div>

        <div class=\"col-md-8\">
            <h2 class=\"text-info fw-bold\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["race"] ?? null), "Name", [], "any", false, false, false, 100), "html", null, true);
        yield "</h2>
            <p class=\"race-description\">
                <span class=\"info-label\">Description :</span><br>
                ";
        // line 103
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["race"] ?? null), "Description", [], "any", false, false, false, 103)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["race"] ?? null), "Description", [], "any", false, false, false, 103), "html", null, true)) : ("Aucune description fournie."));
        yield "
            </p>
        </div>
    </div>

    ";
        // line 109
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["race"] ?? null), "RaceDomain", [], "any", false, false, false, 109)) > 0)) {
            // line 110
            yield "        <div class=\"section-title\">Domaines Associés</div>
        <div class=\"card-group\">
            ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["race"] ?? null), "RaceDomain", [], "any", false, false, false, 112));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 113
                yield "                <div class=\"entity-card\">
                    ";
                // line 114
                if (CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "ImageDomain", [], "any", false, false, false, 114)) {
                    // line 115
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/domains/" . CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "ImageDomain", [], "any", false, false, false, 115))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "Name", [], "any", false, false, false, 115), "html", null, true);
                    yield "\">
                    ";
                }
                // line 117
                yield "                    <div class=\"name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domain"], "Name", [], "any", false, false, false, 117), "html", null, true);
                yield "</div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            yield "        </div>
    ";
        }
        // line 122
        yield "
    ";
        // line 124
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["race"] ?? null), "RaceHero", [], "any", false, false, false, 124)) > 0)) {
            // line 125
            yield "        <div class=\"section-title\">Héros Associés</div>
        <div class=\"card-group\">
            ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["race"] ?? null), "RaceHero", [], "any", false, false, false, 127));
            foreach ($context['_seq'] as $context["_key"] => $context["hero"]) {
                // line 128
                yield "                <div class=\"entity-card\">
                    ";
                // line 129
                if (CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "ImageHero", [], "any", false, false, false, 129)) {
                    // line 130
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/heroes/" . CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "ImageHero", [], "any", false, false, false, 130))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 130), "html", null, true);
                    yield "\">
                    ";
                }
                // line 132
                yield "                    <div class=\"name\">
                        <a href=\"";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hero_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 133)]), "html", null, true);
                yield "\" class=\"text-decoration-none text-white\">
                            ";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hero"], "Name", [], "any", false, false, false, 134), "html", null, true);
                yield "
                        </a>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['hero'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            yield "        </div>
    ";
        }
        // line 141
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "race/show.html.twig";
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
        return array (  288 => 141,  284 => 139,  273 => 134,  269 => 133,  266 => 132,  258 => 130,  256 => 129,  253 => 128,  249 => 127,  245 => 125,  242 => 124,  239 => 122,  235 => 120,  225 => 117,  217 => 115,  215 => 114,  212 => 113,  208 => 112,  204 => 110,  201 => 109,  193 => 103,  187 => 100,  182 => 97,  174 => 95,  172 => 94,  165 => 89,  158 => 88,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "race/show.html.twig", "C:\\wamp64\\www\\symfony\\symfonypro\\templates\\race\\show.html.twig");
    }
}
