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

/* world/index.html.twig */
class __TwigTemplate_ee9ac60aab359aa1709f15331e42f1d5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "world/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Your Worlds";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container my-5 \">
    <div class=\"\"> 
    <h2 class=\"mb-4\">Create a New World</h2>

";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "

    <div class=\"mb-3\">
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Name", [], "any", false, false, false, 13), 'label');
        yield "
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Name", [], "any", false, false, false, 14), 'widget');
        yield "
    </div>
    <div class=\"mb-3\">
        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Description", [], "any", false, false, false, 17), 'label');
        yield "
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Description", [], "any", false, false, false, 18), 'widget');
        yield "
    </div>
    <div class=\"mb-3\">
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Worldimage", [], "any", false, false, false, 21), 'label');
        yield "
        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Worldimage", [], "any", false, false, false, 22), 'widget');
        yield "
    </div>
    <button type=\"submit\" class=\"btn btn-danger\">Create World</button>
";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
</div>

<hr class=\"my-5\">

<h2>Your Worlds</h2>

";
        // line 32
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["userWorlds"] ?? null))) {
            // line 33
            yield "    <div class=\"row\">
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["userWorlds"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["world"]) {
                // line 35
                yield "            <div class=\"col-md-4 mb-3\">
                <div class=\"card bg-dark text-white\">
                    ";
                // line 37
                if (CoreExtension::getAttribute($this->env, $this->source, $context["world"], "worldimage", [], "any", false, false, false, 37)) {
                    // line 38
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/world_images/" . CoreExtension::getAttribute($this->env, $this->source, $context["world"], "worldimage", [], "any", false, false, false, 38))), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"...\">
                    ";
                }
                // line 40
                yield "                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["world"], "name", [], "any", false, false, false, 41), "html", null, true);
                yield "</h5>
                        <p class=\"card-text\">";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["world"], "description", [], "any", false, false, false, 42), 0, 100) . "..."), "html", null, true);
                yield "</p>
                        <a href=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_world_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["world"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                yield "\" class=\"btn btn-outline-light\">Open</a>
                    </div>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['world'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "    </div>
";
        } else {
            // line 50
            yield "    <p class=\"text-muted\">You haven't created any worlds yet.</p>
";
        }
        // line 52
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "world/index.html.twig";
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
        return array (  173 => 52,  169 => 50,  165 => 48,  154 => 43,  150 => 42,  146 => 41,  143 => 40,  137 => 38,  135 => 37,  131 => 35,  127 => 34,  124 => 33,  122 => 32,  112 => 25,  106 => 22,  102 => 21,  96 => 18,  92 => 17,  86 => 14,  82 => 13,  76 => 10,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "world/index.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\world\\index.html.twig");
    }
}
