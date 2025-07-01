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

/* security/login.html.twig */
class __TwigTemplate_cef504d8088ea12fdaef7f39aa296da7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Login";
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
        <h2 class=\"text-white text-center mb-4\">Login</h2>

        ";
        // line 10
        if (($context["error"] ?? null)) {
            // line 11
            yield "            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 11), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 11), "security"), "html", null, true);
            yield "</div>
        ";
        }
        // line 13
        yield "
        ";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14)) {
            // line 15
            yield "            <div class=\"alert alert-info mb-3\">
                You are logged in as ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "userIdentifier", [], "any", false, false, false, 16), "html", null, true);
            yield ",
                <a href=\"";
            // line 17
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"text-decoration-underline\">Logout</a>
            </div>
        ";
        }
        // line 20
        yield "
        <form method=\"post\">
            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label text-white\">Email</label>
                <input type=\"email\" value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last_username"] ?? null), "html", null, true);
        yield "\" name=\"email\" id=\"email\" class=\"form-control\" autocomplete=\"email\" required autofocus>
            </div>

            <div class=\"mb-3\">
                <label for=\"password\" class=\"form-label text-white\">Password</label>
                <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" required>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

            <button class=\"btn btn-danger w-100\" type=\"submit\">Login</button>
        </form>

        <p class=\"text-center text-danger mt-3 fst-italic\">
            Pas encore inscrit ? <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-decoration-underline text-danger\">Créer un compte</a>
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
        return "security/login.html.twig";
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
        return array (  128 => 38,  119 => 32,  108 => 24,  102 => 20,  96 => 17,  92 => 16,  89 => 15,  87 => 14,  84 => 13,  78 => 11,  76 => 10,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/login.html.twig", "C:\\wamp64\\www\\symfony\\symfonypro\\templates\\security\\login.html.twig");
    }
}
