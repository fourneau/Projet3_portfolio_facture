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

/* invoice/paymentTerms.html.twig */
class __TwigTemplate_7ae60c20969976eb3439397794103e21f0db47761255ef53282d969be4e4a14a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/paymentTerms.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/paymentTerms.html.twig"));

        // line 1
        echo "<div class=\"paymentTerms\">
    <h2 class=\"paymentTermsTitle\">MODALITES DE PAIEMENT</h2>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paymentterms"]) || array_key_exists("paymentterms", $context) ? $context["paymentterms"] : (function () { throw new RuntimeError('Variable "paymentterms" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["paymentterm"]) {
            // line 4
            echo "    <p>";
            echo twig_get_attribute($this->env, $this->source, $context["paymentterm"], "modalites", [], "any", false, false, false, 4);
            echo "</p>
    <p>RIB : ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paymentterm"], "ribNumber", [], "any", false, false, false, 5), "html", null, true);
            echo "</p>
    <p>IBAN : ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paymentterm"], "IBAN", [], "any", false, false, false, 6), "html", null, true);
            echo " – BIC : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paymentterm"], "BIC", [], "any", false, false, false, 6), "html", null, true);
            echo "</p>
    <p>Domiciliation : ";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["paymentterm"], "domiciliation", [], "any", false, false, false, 7);
            echo "</p>
    <p>";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["paymentterm"], "lawrecall", [], "any", false, false, false, 8);
            echo "
    </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentterm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "invoice/paymentTerms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  70 => 8,  66 => 7,  60 => 6,  56 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"paymentTerms\">
    <h2 class=\"paymentTermsTitle\">MODALITES DE PAIEMENT</h2>
    {% for paymentterm in paymentterms %}
    <p>{{paymentterm.modalites | raw}}</p>
    <p>RIB : {{paymentterm.ribNumber}}</p>
    <p>IBAN : {{paymentterm.IBAN}} – BIC : {{paymentterm.BIC}}</p>
    <p>Domiciliation : {{paymentterm.domiciliation | raw}}</p>
    <p>{{paymentterm.lawrecall | raw}}
    </p>
    {% endfor %}
</div>", "invoice/paymentTerms.html.twig", "/home/wilder/Projet3_portfolio_facture/templates/invoice/paymentTerms.html.twig");
    }
}
