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
class __TwigTemplate_3ddab5c1795f04485bad4e8ac0f2c4a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hero/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hero/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hero/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 92
        yield "<div class=\"form-container\">
    <h2>";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 93, $this->source); })()), "html", null, true);
        yield "</h2>

    ";
        // line 95
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "

    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "Name", [], "any", false, false, false, 97), 'row');
        yield "
    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "Fonction", [], "any", false, false, false, 98), 'row');
        yield "
    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "Age", [], "any", false, false, false, 99), 'row');
        yield "
    ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "Size", [], "any", false, false, false, 100), 'row');
        yield "
    ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "Description", [], "any", false, false, false, 101), 'row');
        yield "
    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "Image_Hero", [], "any", false, false, false, 102), 'row');
        yield "

    ";
        // line 105
        yield "    <div class=\"checkbox-group\">
        <h4>";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "guilds", [], "any", false, false, false, 106), 'label');
        yield "</h4>
        <div class=\"checkbox-list\">
            ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "guilds", [], "any", false, false, false, 108));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 109
            yield "                <label>
                    <div class=\"checkbox-info\">
                        ";
            // line 111
            $context["img"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 111), "attr", [], "any", false, true, false, 111), "data-image", [], "array", true, true, false, 111) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 111), "attr", [], "any", false, false, false, 111), "data-image", [], "array", false, false, false, 111)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 111), "attr", [], "any", false, false, false, 111), "data-image", [], "array", false, false, false, 111)) : (null));
            // line 112
            yield "                        ";
            if ((isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 112, $this->source); })())) {
                // line 113
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/guilds/" . (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 113, $this->source); })()))), "html", null, true);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "HeroFaction", [], "any", false, false, false, 125), 'label');
        yield "</h4>
        <div class=\"checkbox-list\">
            ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "HeroFaction", [], "any", false, false, false, 127));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 128
            yield "                <label>
                    <div class=\"checkbox-info\">
                        ";
            // line 130
            $context["img"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 130), "attr", [], "any", false, true, false, 130), "data-image", [], "array", true, true, false, 130) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 130), "attr", [], "any", false, false, false, 130), "data-image", [], "array", false, false, false, 130)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 130), "attr", [], "any", false, false, false, 130), "data-image", [], "array", false, false, false, 130)) : (null));
            // line 131
            yield "                        ";
            if ((isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 131, $this->source); })())) {
                // line 132
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/factions/" . (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 132, $this->source); })()))), "html", null, true);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "HeroRace", [], "any", false, false, false, 144), 'label');
        yield "</h4>
        <div class=\"checkbox-list\">
            ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "HeroRace", [], "any", false, false, false, 146));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 147
            yield "                <label>
                    <div class=\"checkbox-info\">
                        ";
            // line 149
            $context["img"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 149), "attr", [], "any", false, true, false, 149), "data-image", [], "array", true, true, false, 149) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 149), "attr", [], "any", false, false, false, 149), "data-image", [], "array", false, false, false, 149)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 149), "attr", [], "any", false, false, false, 149), "data-image", [], "array", false, false, false, 149)) : (null));
            // line 150
            yield "                        ";
            if ((isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 150, $this->source); })())) {
                // line 151
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/races/" . (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 151, $this->source); })()))), "html", null, true);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "HeroDomain", [], "any", false, false, false, 163), 'label');
        yield "</h4>
        <div class=\"checkbox-list\">
            ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "HeroDomain", [], "any", false, false, false, 165));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 166
            yield "                <label>
                    <div class=\"checkbox-info\">
                        ";
            // line 168
            $context["img"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 168), "attr", [], "any", false, true, false, 168), "data-image", [], "array", true, true, false, 168) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 168), "attr", [], "any", false, false, false, 168), "data-image", [], "array", false, false, false, 168)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 168), "attr", [], "any", false, false, false, 168), "data-image", [], "array", false, false, false, 168)) : (null));
            // line 169
            yield "                        ";
            if ((isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 169, $this->source); })())) {
                // line 170
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/domains/" . (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 170, $this->source); })()))), "html", null, true);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "HeroCity", [], "any", false, false, false, 182), 'label');
        yield "</h4>
    <div class=\"checkbox-list\">
        ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "HeroCity", [], "any", false, false, false, 184));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 185
            yield "            <label>
                <div class=\"checkbox-info\">
                    ";
            // line 187
            $context["img"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 187), "attr", [], "any", false, true, false, 187), "data-image", [], "array", true, true, false, 187) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 187), "attr", [], "any", false, false, false, 187), "data-image", [], "array", false, false, false, 187)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 187), "attr", [], "any", false, false, false, 187), "data-image", [], "array", false, false, false, 187)) : (null));
            // line 188
            yield "                    ";
            if ((isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 188, $this->source); })())) {
                // line 189
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cities/" . (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 189, $this->source); })()))), "html", null, true);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), 'rest');
        yield "
<div style=\"text-align: right; margin-top: 1rem;\">
    <button type=\"submit\">Save</button>
</div>
";
        // line 204
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), 'form_end');
        yield "

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  501 => 204,  494 => 200,  488 => 196,  479 => 193,  473 => 191,  465 => 189,  462 => 188,  460 => 187,  456 => 185,  452 => 184,  447 => 182,  444 => 181,  439 => 177,  430 => 174,  424 => 172,  416 => 170,  413 => 169,  411 => 168,  407 => 166,  403 => 165,  398 => 163,  395 => 162,  390 => 158,  381 => 155,  375 => 153,  367 => 151,  364 => 150,  362 => 149,  358 => 147,  354 => 146,  349 => 144,  346 => 143,  341 => 139,  332 => 136,  326 => 134,  318 => 132,  315 => 131,  313 => 130,  309 => 128,  305 => 127,  300 => 125,  297 => 124,  292 => 120,  283 => 117,  277 => 115,  269 => 113,  266 => 112,  264 => 111,  260 => 109,  256 => 108,  251 => 106,  248 => 105,  243 => 102,  239 => 101,  235 => 100,  231 => 99,  227 => 98,  223 => 97,  218 => 95,  213 => 93,  210 => 92,  197 => 91,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
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
{% endblock %}

{% block body %}
<div class=\"form-container\">
    <h2>{{ title }}</h2>

    {{ form_start(form, {'attr': {'enctype': 'multipart/form-data'}}) }}

    {{ form_row(form.Name) }}
    {{ form_row(form.Fonction) }}
    {{ form_row(form.Age) }}
    {{ form_row(form.Size) }}
    {{ form_row(form.Description) }}
    {{ form_row(form.Image_Hero) }}

    {# GUILDS #}
    <div class=\"checkbox-group\">
        <h4>{{ form_label(form.guilds) }}</h4>
        <div class=\"checkbox-list\">
            {% for child in form.guilds %}
                <label>
                    <div class=\"checkbox-info\">
                        {% set img = child.vars.attr['data-image'] ?? null %}
                        {% if img %}
                            <img src=\"{{ asset('uploads/guilds/' ~ img) }}\" class=\"avatar\" alt=\"{{ child.vars.label }}\">
                        {% endif %}
                        <span>{{ child.vars.label }}</span>
                    </div>
                    {{ form_widget(child) }}
                </label>
            {% endfor %}
        </div>
    </div>

    {# FACTIONS #}
    <div class=\"checkbox-group\">
        <h4>{{ form_label(form.HeroFaction) }}</h4>
        <div class=\"checkbox-list\">
            {% for child in form.HeroFaction %}
                <label>
                    <div class=\"checkbox-info\">
                        {% set img = child.vars.attr['data-image'] ?? null %}
                        {% if img %}
                            <img src=\"{{ asset('uploads/factions/' ~ img) }}\" class=\"avatar\" alt=\"{{ child.vars.label }}\">
                        {% endif %}
                        <span>{{ child.vars.label }}</span>
                    </div>
                    {{ form_widget(child) }}
                </label>
            {% endfor %}
        </div>
    </div>

    {# RACES #}
    <div class=\"checkbox-group\">
        <h4>{{ form_label(form.HeroRace) }}</h4>
        <div class=\"checkbox-list\">
            {% for child in form.HeroRace %}
                <label>
                    <div class=\"checkbox-info\">
                        {% set img = child.vars.attr['data-image'] ?? null %}
                        {% if img %}
                            <img src=\"{{ asset('uploads/races/' ~ img) }}\" class=\"avatar\" alt=\"{{ child.vars.label }}\">
                        {% endif %}
                        <span>{{ child.vars.label }}</span>
                    </div>
                    {{ form_widget(child) }}
                </label>
            {% endfor %}
        </div>
    </div>

    {# DOMAINS #}
    <div class=\"checkbox-group\">
        <h4>{{ form_label(form.HeroDomain) }}</h4>
        <div class=\"checkbox-list\">
            {% for child in form.HeroDomain %}
                <label>
                    <div class=\"checkbox-info\">
                        {% set img = child.vars.attr['data-image'] ?? null %}
                        {% if img %}
                            <img src=\"{{ asset('uploads/domains/' ~ img) }}\" class=\"avatar\" alt=\"{{ child.vars.label }}\">
                        {% endif %}
                        <span>{{ child.vars.label }}</span>
                    </div>
                    {{ form_widget(child) }}
                </label>
            {% endfor %}
        </div>
    </div>

    {# CITIES #}
<div class=\"checkbox-group\">
    <h4>{{ form_label(form.HeroCity) }}</h4>
    <div class=\"checkbox-list\">
        {% for child in form.HeroCity %}
            <label>
                <div class=\"checkbox-info\">
                    {% set img = child.vars.attr['data-image'] ?? null %}
                    {% if img %}
                        <img src=\"{{ asset('uploads/cities/' ~ img) }}\" class=\"avatar\" alt=\"{{ child.vars.label }}\">
                    {% endif %}
                    <span>{{ child.vars.label }}</span>
                </div>
                {{ form_widget(child) }}
            </label>
        {% endfor %}
    </div>
</div>


    {{ form_rest(form) }}
<div style=\"text-align: right; margin-top: 1rem;\">
    <button type=\"submit\">Save</button>
</div>
{{ form_end(form) }}

</div>
{% endblock %}
", "hero/form.html.twig", "C:\\wamp64\\www\\Site_Fantasia\\Project_fantasia\\templates\\hero\\form.html.twig");
    }
}
