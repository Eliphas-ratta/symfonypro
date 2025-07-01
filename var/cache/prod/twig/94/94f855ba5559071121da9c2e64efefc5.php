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

/* home/index.html.twig */
class __TwigTemplate_840ae22c029fe42064184a81733b5b5c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Home | Project Fantasia";
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
        yield "<div class=\"container my-5 text-white\">

    <!-- Section d'introduction -->
    <section class=\"text-center mb-5\">
        <h3 class=\"display-4 fw-bold h3home\">Welcome to Project Fantasia</h3>
        <p class=\"fs-5 mt-3\">
            Project Fantasia is a world-building tool designed for fantasy lovers, writers, and game masters.
            Create rich universes filled with factions, races, heroes, guilds and more — all in one place.
        </p>
    </section>

   <section class=\"row justify-content-center mb-5\">
    <div class=\"col-md-8\">
        <div class=\"card border-0 text-white shadow rounded-4 text-center p-4 d-flex flex-column align-items-center bg-dark\">
            
          
            <img src=\"/images/create_world_knight.jpeg\" alt=\"Armored knight creating a world\" 
                 class=\"img-fluid rounded-4 mb-4 \" style=\"max-width: 400px;\">

            <h3 class=\"card-title mb-4\">Start Building Your World</h3>
            <p class=\"card-text\">
                Dive into our intuitive interface to create your own fantasy world. Add custom continents, factions, races, heroes, and link them together.
                Whether you're crafting a campaign or designing a lore-rich story, Project Fantasia gives you full control.
            </p>
            <div class=\"mt-4\">
                <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_world");
        yield "\" class=\"btn btn-danger px-4 py-2\">Create Your World</a>
            </div>
        </div>
    </div>
</section>




    <section aria-labelledby=\"how-to-use-title\" class=\"p-8 bg-neutral-800 text-white text-center\">
    <h2 id=\"how-to-use-title\" class=\"display-5 fw-bold mb-4\">How to Use the Site</h2>

    <div class=\"d-flex justify-content-center mb-4\">
        <img src=\"/images/How_to_use_goblin.jpeg\" alt=\"A fantasy goblin writing in a book\" class=\"img-fluid rounded shadow\" style=\"max-width: 300px;\">
    </div>

    <p class=\"mb-4 mx-auto\" style=\"max-width: 700px;\">
        Welcome to our fantasy world builder! Here’s a quick guide on how to navigate and use the platform:
    </p>

    <ul class=\"text-start mx-auto\" style=\"max-width: 700px;\">
        <li><strong>Create a World:</strong> Go to the <em>World</em> section and start your own world by entering its name and details.</li>
        <li><strong>Add Content:</strong> Inside your world, you can create factions, heroes, guilds, races, continents, domains, and more. Each category has a form with fields to guide your input.</li>
        <li><strong>Manage Your Worlds:</strong> View and edit your worlds anytime from your profile. You can invite other users to collaborate or view your worlds with specific roles.</li>
        <li><strong>Visualize Your Universe:</strong> Navigate through the cards to see the details of each hero, guild, or faction. Use search and filters to easily find your data.</li>
        <li><strong>Safe Storage:</strong> All your content is safely stored and linked to your account. Make sure to log in to save your work!</li>
    </ul>
</section>





</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  97 => 31,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home/index.html.twig", "C:\\wamp64\\www\\symfony\\symfonypro\\templates\\home\\index.html.twig");
    }
}
