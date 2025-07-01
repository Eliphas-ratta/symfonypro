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

/* guild/form.html.twig */
class __TwigTemplate_e51f3c0adbda5d317a6c55b827f2eb6e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "guild/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
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
    .form-container {
        max-width: 900px;
        margin: 2rem auto;
        background-color: #1f1f1f;
        padding: 2rem;
        border-radius: 20px;
        box-shadow: 0 0 12px rgba(0, 0, 0, 0.4);
        color: white;
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 1.5rem;
        color: #03A9F4;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem 2rem;
    }

    .form-grid .full-width {
        grid-column: span 2;
    }

    .form-container input,
    .form-container textarea,
    .form-container select {
        background-color: #2a2a2a;
        color: white;
        border: 1px solid #444;
        border-radius: 6px;
        padding: 0.5rem;
        width: 100%;
    }

    .form-container button[type=\"submit\"] {
        background-color: #28a745;
        border: none;
        padding: 0.5rem 1.5rem;
        font-weight: bold;
        color: white;
        border-radius: 6px;
        margin-top: 1.5rem;
        display: block;
        margin-left: auto;
    }

    .form-container button[type=\"submit\"]:hover {
        background-color: #218838;
    }

    .checkbox-group {
        background-color: #2a2a2a;
        border-radius: 12px;
        padding: 1rem;
        margin-top: 1.5rem;
        max-height: 300px;
        overflow-y: auto;
    }

    .checkbox-group h4 {
        margin-bottom: 0.8rem;
        font-size: 1.1rem;
        color: #90caf9;
    }

    .checkbox-list label {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #2e2e2e;
        padding: 0.6rem 1rem;
        border-radius: 8px;
        margin-bottom: 0.4rem;
    }

    .checkbox-info {
        display: flex;
        align-items: center;
        gap: 0.8rem;
    }

    .avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }
</style>
";
        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 102
        yield "<div class=\"form-container\">
    <h2>";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h2>

    ";
        // line 105
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "
    <div class=\"form-grid\">
        <div>
            ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Name", [], "any", false, false, false, 108), 'label');
        yield "
            ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Name", [], "any", false, false, false, 109), 'widget');
        yield "
        </div>

        <div>
            ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Type", [], "any", false, false, false, 113), 'label');
        yield "
            ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Type", [], "any", false, false, false, 114), 'widget');
        yield "
        </div>

        <div>
            ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Image_Guild", [], "any", false, false, false, 118), 'label');
        yield "
            ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Image_Guild", [], "any", false, false, false, 119), 'widget');
        yield "
        </div>

        <div>
            ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Visibility_id", [], "any", false, false, false, 123), 'label');
        yield "
            ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Visibility_id", [], "any", false, false, false, 124), 'widget');
        yield "
        </div>

        <div class=\"full-width\">
            ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Description", [], "any", false, false, false, 128), 'label');
        yield "
            ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Description", [], "any", false, false, false, 129), 'widget');
        yield "
        </div>
    </div>

    ";
        // line 134
        yield "    <div class=\"checkbox-group\">
        <h4>";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Guild_Faction", [], "any", false, false, false, 135), 'label');
        yield "</h4>
        <div class=\"checkbox-list\">
            ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Guild_Faction", [], "any", false, false, false, 137));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 138
            yield "                <label>
                    <div class=\"checkbox-info\">
                        ";
            // line 140
            $context["img"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 140), "attr", [], "any", false, true, false, 140), "data-image", [], "array", true, true, false, 140) &&  !(null === (($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 140), "attr", [], "any", false, false, false, 140)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["data-image"] ?? null) : null)))) ? ((($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 140), "attr", [], "any", false, false, false, 140)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["data-image"] ?? null) : null)) : (null));
            // line 141
            yield "                        ";
            if (($context["img"] ?? null)) {
                // line 142
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/factions/" . ($context["img"] ?? null))), "html", null, true);
                yield "\" class=\"avatar\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 142), "label", [], "any", false, false, false, 142), "html", null, true);
                yield "\">
                        ";
            }
            // line 144
            yield "                        <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 144), "label", [], "any", false, false, false, 144), "html", null, true);
            yield "</span>
                    </div>
                    ";
            // line 146
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "
                </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "        </div>
    </div>

    ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "

    <div style=\"text-align: right; margin-top: 1rem;\">
        <button type=\"submit\">Save</button>
    </div>
    ";
        // line 157
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "guild/form.html.twig";
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
        return array (  303 => 157,  295 => 152,  290 => 149,  281 => 146,  275 => 144,  267 => 142,  264 => 141,  262 => 140,  258 => 138,  254 => 137,  249 => 135,  246 => 134,  239 => 129,  235 => 128,  228 => 124,  224 => 123,  217 => 119,  213 => 118,  206 => 114,  202 => 113,  195 => 109,  191 => 108,  185 => 105,  180 => 103,  177 => 102,  170 => 101,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "guild/form.html.twig", "C:\\wamp64\\www\\symfony\\symfonypro\\templates\\guild\\form.html.twig");
    }
}
