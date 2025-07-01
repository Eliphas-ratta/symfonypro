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

/* hero/form.html.twig */
class __TwigTemplate_e60810e0e803895bbcb8ceb2fdbf5891 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "hero/form.html.twig", 1);
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
        yield "    ";
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

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 92
        yield "<div class=\"form-container\">
    <h2>";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h2>

    ";
        // line 95
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "

    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Name", [], "any", false, false, false, 97), 'row');
        yield "
    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Fonction", [], "any", false, false, false, 98), 'row');
        yield "
    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Age", [], "any", false, false, false, 99), 'row');
        yield "
    ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Size", [], "any", false, false, false, 100), 'row');
        yield "
    ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Description", [], "any", false, false, false, 101), 'row');
        yield "
    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Image_Hero", [], "any", false, false, false, 102), 'row');
        yield "

    ";
        // line 105
        yield "    <div class=\"checkbox-group\">
        <h4>";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "guilds", [], "any", false, false, false, 106), 'label');
        yield "</h4>
        <div class=\"checkbox-list\">
            ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "guilds", [], "any", false, false, false, 108));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 109
            yield "                <label>
                    <div class=\"checkbox-info\">
                        ";
            // line 111
            $context["img"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 111), "attr", [], "any", false, true, false, 111), "data-image", [], "array", true, true, false, 111) &&  !(null === (($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 111), "attr", [], "any", false, false, false, 111)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["data-image"] ?? null) : null)))) ? ((($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 111), "attr", [], "any", false, false, false, 111)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["data-image"] ?? null) : null)) : (null));
            // line 112
            yield "                        ";
            if (($context["img"] ?? null)) {
                // line 113
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/guilds/" . ($context["img"] ?? null))), "html", null, true);
                yield "\" class=\"avatar\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 113), "label", [], "any", false, false, false, 113), "html", null, true);
                yield "\">
                        ";
            }
            // line 115
            yield "                        <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 115), "label", [], "any", false, false, false, 115), "html", null, true);
            yield "</span>
                    </div>
                    ";
            // line 117
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "
                </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "        </div>
    </div>

    ";
        // line 124
        yield "    <div class=\"checkbox-group\">
        <h4>";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "HeroFaction", [], "any", false, false, false, 125), 'label');
        yield "</h4>
        <div class=\"checkbox-list\">
            ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "HeroFaction", [], "any", false, false, false, 127));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 128
            yield "                <label>
                    <div class=\"checkbox-info\">
                        ";
            // line 130
            $context["img"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 130), "attr", [], "any", false, true, false, 130), "data-image", [], "array", true, true, false, 130) &&  !(null === (($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 130), "attr", [], "any", false, false, false, 130)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["data-image"] ?? null) : null)))) ? ((($_v3 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 130), "attr", [], "any", false, false, false, 130)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["data-image"] ?? null) : null)) : (null));
            // line 131
            yield "                        ";
            if (($context["img"] ?? null)) {
                // line 132
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/factions/" . ($context["img"] ?? null))), "html", null, true);
                yield "\" class=\"avatar\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 132), "label", [], "any", false, false, false, 132), "html", null, true);
                yield "\">
                        ";
            }
            // line 134
            yield "                        <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 134), "label", [], "any", false, false, false, 134), "html", null, true);
            yield "</span>
                    </div>
                    ";
            // line 136
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "
                </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "        </div>
    </div>

    ";
        // line 143
        yield "    <div class=\"checkbox-group\">
        <h4>";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "HeroRace", [], "any", false, false, false, 144), 'label');
        yield "</h4>
        <div class=\"checkbox-list\">
            ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "HeroRace", [], "any", false, false, false, 146));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 147
            yield "                <label>
                    <div class=\"checkbox-info\">
                        ";
            // line 149
            $context["img"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 149), "attr", [], "any", false, true, false, 149), "data-image", [], "array", true, true, false, 149) &&  !(null === (($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 149), "attr", [], "any", false, false, false, 149)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["data-image"] ?? null) : null)))) ? ((($_v5 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 149), "attr", [], "any", false, false, false, 149)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["data-image"] ?? null) : null)) : (null));
            // line 150
            yield "                        ";
            if (($context["img"] ?? null)) {
                // line 151
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/races/" . ($context["img"] ?? null))), "html", null, true);
                yield "\" class=\"avatar\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 151), "label", [], "any", false, false, false, 151), "html", null, true);
                yield "\">
                        ";
            }
            // line 153
            yield "                        <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 153), "label", [], "any", false, false, false, 153), "html", null, true);
            yield "</span>
                    </div>
                    ";
            // line 155
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "
                </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        yield "        </div>
    </div>

    ";
        // line 162
        yield "    <div class=\"checkbox-group\">
        <h4>";
        // line 163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "HeroDomain", [], "any", false, false, false, 163), 'label');
        yield "</h4>
        <div class=\"checkbox-list\">
            ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "HeroDomain", [], "any", false, false, false, 165));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 166
            yield "                <label>
                    <div class=\"checkbox-info\">
                        ";
            // line 168
            $context["img"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 168), "attr", [], "any", false, true, false, 168), "data-image", [], "array", true, true, false, 168) &&  !(null === (($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 168), "attr", [], "any", false, false, false, 168)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["data-image"] ?? null) : null)))) ? ((($_v7 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 168), "attr", [], "any", false, false, false, 168)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["data-image"] ?? null) : null)) : (null));
            // line 169
            yield "                        ";
            if (($context["img"] ?? null)) {
                // line 170
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/domains/" . ($context["img"] ?? null))), "html", null, true);
                yield "\" class=\"avatar\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 170), "label", [], "any", false, false, false, 170), "html", null, true);
                yield "\">
                        ";
            }
            // line 172
            yield "                        <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 172), "label", [], "any", false, false, false, 172), "html", null, true);
            yield "</span>
                    </div>
                    ";
            // line 174
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "
                </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        yield "        </div>
    </div>

    ";
        // line 181
        yield "<div class=\"checkbox-group\">
    <h4>";
        // line 182
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "HeroCity", [], "any", false, false, false, 182), 'label');
        yield "</h4>
    <div class=\"checkbox-list\">
        ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "HeroCity", [], "any", false, false, false, 184));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 185
            yield "            <label>
                <div class=\"checkbox-info\">
                    ";
            // line 187
            $context["img"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 187), "attr", [], "any", false, true, false, 187), "data-image", [], "array", true, true, false, 187) &&  !(null === (($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 187), "attr", [], "any", false, false, false, 187)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["data-image"] ?? null) : null)))) ? ((($_v9 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 187), "attr", [], "any", false, false, false, 187)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["data-image"] ?? null) : null)) : (null));
            // line 188
            yield "                    ";
            if (($context["img"] ?? null)) {
                // line 189
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cities/" . ($context["img"] ?? null))), "html", null, true);
                yield "\" class=\"avatar\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 189), "label", [], "any", false, false, false, 189), "html", null, true);
                yield "\">
                    ";
            }
            // line 191
            yield "                    <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 191), "label", [], "any", false, false, false, 191), "html", null, true);
            yield "</span>
                </div>
                ";
            // line 193
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "
            </label>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        yield "    </div>
</div>


    ";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
<div style=\"text-align: right; margin-top: 1rem;\">
    <button type=\"submit\">Save</button>
</div>
";
        // line 204
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
        return "hero/form.html.twig";
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
        return array (  459 => 204,  452 => 200,  446 => 196,  437 => 193,  431 => 191,  423 => 189,  420 => 188,  418 => 187,  414 => 185,  410 => 184,  405 => 182,  402 => 181,  397 => 177,  388 => 174,  382 => 172,  374 => 170,  371 => 169,  369 => 168,  365 => 166,  361 => 165,  356 => 163,  353 => 162,  348 => 158,  339 => 155,  333 => 153,  325 => 151,  322 => 150,  320 => 149,  316 => 147,  312 => 146,  307 => 144,  304 => 143,  299 => 139,  290 => 136,  284 => 134,  276 => 132,  273 => 131,  271 => 130,  267 => 128,  263 => 127,  258 => 125,  255 => 124,  250 => 120,  241 => 117,  235 => 115,  227 => 113,  224 => 112,  222 => 111,  218 => 109,  214 => 108,  209 => 106,  206 => 105,  201 => 102,  197 => 101,  193 => 100,  189 => 99,  185 => 98,  181 => 97,  176 => 95,  171 => 93,  168 => 92,  161 => 91,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "hero/form.html.twig", "C:\\wamp64\\www\\symfony\\symfonypro\\templates\\hero\\form.html.twig");
    }
}
