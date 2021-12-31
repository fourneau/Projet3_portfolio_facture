<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* _navbar.html.twig */
class __TwigTemplate_0afd703704ea8d5acd2daba9835e0093f47f7712f4c8144b35dd7eec96a26bf7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "
<nav class=\"navbar navbar-expand-lg navbar-light custom fixed-top\" style=\"background-color: #4886af;\">
    <div class=\"container-fluid\">
        <img class=\"logoNav rounded-circle\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/logo1.png"), "html", null, true);
        echo "\" alt=\" \">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <div class=\"me-auto mb-2 mb-lg-0 mx-auto d-flex justify-content-between flex-wrap\">
                <div class=\"nav-item\">
                    <a class=\"nav-link\" aria-current=\"page\" href=\"/\">Accueil</a>
                </div>
                <div class=\"nav-item\">
                    <a class=\"nav-link\" aria-current=\"page\" href=\"/#compétences\">Compétences</a>
                </div>
                <div class=\"nav-item\">
                    <a class=\"nav-link\" aria-current=\"page\" href=\"/#actualités\">Actualités</a>
                </div>
                <div class=\"nav-item\">
                    <a class=\"nav-link\" aria-current=\"page\" href=\"/#contact\">Contact</a>
                </div>
            </div>
        </div>
    </div>

</nav>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "_navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}

<nav class=\"navbar navbar-expand-lg navbar-light custom fixed-top\" style=\"background-color: #4886af;\">
    <div class=\"container-fluid\">
        <img class=\"logoNav rounded-circle\" src=\"{{ asset( 'build/logo1.png') }}\" alt=\" \">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <div class=\"me-auto mb-2 mb-lg-0 mx-auto d-flex justify-content-between flex-wrap\">
                <div class=\"nav-item\">
                    <a class=\"nav-link\" aria-current=\"page\" href=\"/\">Accueil</a>
                </div>
                <div class=\"nav-item\">
                    <a class=\"nav-link\" aria-current=\"page\" href=\"/#compétences\">Compétences</a>
                </div>
                <div class=\"nav-item\">
                    <a class=\"nav-link\" aria-current=\"page\" href=\"/#actualités\">Actualités</a>
                </div>
                <div class=\"nav-item\">
                    <a class=\"nav-link\" aria-current=\"page\" href=\"/#contact\">Contact</a>
                </div>
            </div>
        </div>
    </div>

</nav>


{% endblock %}", "_navbar.html.twig", "/home/wilder/Projet3_portfolio_facture/templates/_navbar.html.twig");
    }
}
