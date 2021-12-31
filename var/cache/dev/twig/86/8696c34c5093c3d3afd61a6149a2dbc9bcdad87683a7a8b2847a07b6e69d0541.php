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

/* invoice/headerInvoice.html.twig */
class __TwigTemplate_4ef463b4b949e73d60e62d53f27be2d9671b26121d9324c84c1928faa018ab17 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/headerInvoice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/headerInvoice.html.twig"));

        // line 1
        echo "<div class=\"headerInvoice\">
    <img class=\"logoInvoice\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/logo1.png"), "html", null, true);
        echo "\" /> ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["owners"]) || array_key_exists("owners", $context) ? $context["owners"] : (function () { throw new RuntimeError('Variable "owners" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
            // line 3
            echo "    <h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["owner"], "firstname", [], "any", false, false, false, 3), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["owner"], "lastname", [], "any", false, false, false, 3), "html", null, true);
            echo "</h3>
    <h4>Avocat</h4>
</div>

<table class=\"subHeaderInvoice\">
    <tr class=\"coordonneesInvoice\">
        <td class=\"t1\">
            <p>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["owner"], "adress", [], "any", false, false, false, 10), "html", null, true);
            echo "</p>
            <p>Toque: ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["owner"], "toquenumber", [], "any", false, false, false, 11), "html", null, true);
            echo "</p>
        </td>
        <td class=\"t2\">
            <p>Téléphone: ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["owner"], "phone", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
            <p> Télécopie : ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["owner"], "fax", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "invoice/headerInvoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  79 => 15,  75 => 14,  69 => 11,  65 => 10,  52 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"headerInvoice\">
    <img class=\"logoInvoice\" src=\"{{ asset( 'build/logo1.png') }}\" /> {% for owner in owners %}
    <h3>{{owner.firstname}} {{owner.lastname}}</h3>
    <h4>Avocat</h4>
</div>

<table class=\"subHeaderInvoice\">
    <tr class=\"coordonneesInvoice\">
        <td class=\"t1\">
            <p>{{owner.adress}}</p>
            <p>Toque: {{owner.toquenumber}}</p>
        </td>
        <td class=\"t2\">
            <p>Téléphone: {{owner.phone}}</p>
            <p> Télécopie : {{owner.fax}}</p>
        </td>
    </tr>
    {% endfor %}
</table>", "invoice/headerInvoice.html.twig", "/home/wilder/Projet3_portfolio_facture/templates/invoice/headerInvoice.html.twig");
    }
}
