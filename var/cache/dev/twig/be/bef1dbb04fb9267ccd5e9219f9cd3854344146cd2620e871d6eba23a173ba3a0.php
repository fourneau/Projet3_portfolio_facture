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

/* invoice/footerInvoice.html.twig */
class __TwigTemplate_61416515c4483c4e218cd74fc7470f20a2d61a3c9f794e26df0929f2bcdfdbc7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/footerInvoice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/footerInvoice.html.twig"));

        // line 1
        echo "<div class=\"footerInvoice\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["owners"]) || array_key_exists("owners", $context) ? $context["owners"] : (function () { throw new RuntimeError('Variable "owners" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new RuntimeError('Variable "abouts" does not exist.', 2, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
                // line 3
                echo "    <ul>
        <li class=\"footerInvoice\">
            <a>";
                // line 5
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["owner"], "firstname", [], "any", false, false, false, 5), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["owner"], "lastname", [], "any", false, false, false, 5), "html", null, true);
                echo "</a>
        </li>
        <li class=\"footerInvoice\">
            <a>";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "subtitle", [], "any", false, false, false, 8), "html", null, true);
                echo "</a>
        </li>
        <li class=\"footerInvoice\">
            <a>";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["owner"], "email", [], "any", false, false, false, 11), "html", null, true);
                echo "</a>
        </li>
        <li class=\"footerInvoice\">
            <a>N° de SIRET : ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["owner"], "siretnumber", [], "any", false, false, false, 14), "html", null, true);
                echo "</a>
        </li>
    </ul>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['about'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "invoice/footerInvoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 18,  88 => 17,  78 => 14,  72 => 11,  66 => 8,  58 => 5,  54 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footerInvoice\">
    {% for owner in owners %} {% for about in abouts %}
    <ul>
        <li class=\"footerInvoice\">
            <a>{{owner.firstname}} {{owner.lastname}}</a>
        </li>
        <li class=\"footerInvoice\">
            <a>{{about.subtitle}}</a>
        </li>
        <li class=\"footerInvoice\">
            <a>{{owner.email}}</a>
        </li>
        <li class=\"footerInvoice\">
            <a>N° de SIRET : {{owner.siretnumber}}</a>
        </li>
    </ul>
    {% endfor %} {% endfor %}
</div>", "invoice/footerInvoice.html.twig", "/home/wilder/Projet3_portfolio_facture/templates/invoice/footerInvoice.html.twig");
    }
}
