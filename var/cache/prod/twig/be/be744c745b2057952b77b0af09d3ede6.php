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

/* registration/register.html.twig */
class __TwigTemplate_7df917ad207e249cfc99c8217d9afe02 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Register";
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
        yield "<div class=\"d-flex flex-column align-items-center bg-custom-dark\" style=\"min-height: 100vh; padding-top: 2rem; padding-bottom: 2rem;\">
    <div class=\"p-4 rounded-4 shadow bg-custom-card register-card\">
        <h2 class=\"text-white text-center mb-4\">Register</h2>

        ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "
            <div class=\"mb-3\">
                ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "username", [], "any", false, false, false, 12), 'label', ["label_attr" => ["class" => "form-label text-white"]]);
        yield "
                ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "username", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "username", [], "any", false, false, false, 14), 'errors');
        yield "
            </div>

            <div class=\"mb-3\">
                ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "form-label text-white"]]);
        yield "
                ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 20), 'errors');
        yield "
            </div>

            <div class=\"mb-3\">
                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "form-label text-white"], "label" => "Password"]);
        yield "
                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 26), 'errors');
        yield "
            </div>

            <div class=\"mb-3\">
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "profileImage", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "form-label text-white"], "label" => "Profile Picture"]);
        yield "
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "profileImage", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "profileImage", [], "any", false, false, false, 32), 'errors');
        yield "
            </div>

            <div class=\"form-check mb-3\">
                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-check-label text-white"]]);
        yield "
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 38), 'errors');
        yield "
            </div>

            <button type=\"submit\" class=\"btn btn-danger w-100\">Register</button>
        ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        yield "

        <p class=\"text-center text-danger mt-3 fst-italic\">
            Déjà inscrit : <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-decoration-underline text-danger\">Login</a>
        </p>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/register.html.twig";
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
        return array (  162 => 45,  156 => 42,  149 => 38,  145 => 37,  141 => 36,  134 => 32,  130 => 31,  126 => 30,  119 => 26,  115 => 25,  111 => 24,  104 => 20,  100 => 19,  96 => 18,  89 => 14,  85 => 13,  81 => 12,  76 => 10,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "registration/register.html.twig", "C:\\wamp64\\www\\symfony\\symfonypro\\templates\\registration\\register.html.twig");
    }
}
