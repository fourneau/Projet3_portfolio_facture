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

/* _footer.html.twig */
class __TwigTemplate_5e50c0dadbac162aef067dd2e922c5a8bdfa7700f5678b9e3f901dcfed9da4b4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "
<div class=\"row\">
    <!--Grid column-->
    <div class=\"col-xl-4 col-lg-4 col-md-5 col-sm-5\">
        <ul>
            <li>
                <a href=\"/\" class=\"text-white\">À propos</a>
            </li>
            <li>
                <a href=\"#compétences\" class=\"text-white\">Compétences</a>
            </li>
            <li>
                <a href=\"#actualités\" class=\"text-white\">Actualités</a>
            </li>
            <li>
                <a href=\"#contact\" class=\"text-white\">Contact</a>
            </li>
            <li>
                <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("legal_mention");
        echo "\" class=\"text-white\">Mentions légales</a>
            </li>
            <li>
                <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("data_protection");
        echo "\" class=\"text-white\">Politique de protection des données</a>
            </li>
    </div>
    <div class=\"col-xl-4 col-lg-4 col-md-2 col-sm-2\">
        <a href=\"/\"><i class=\"far fa-arrow-alt-circle-up col-2 text-white\" style=\"font-size: 30px; color: white text-center\"></i></a>
        <p>RETOUR EN HAUT</p>
    </div>
    <div class=\"col-xl-4 col-lg-4 col-md-5 col-sm-5\">
        <ul>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["footers"]) || array_key_exists("footers", $context) ? $context["footers"] : (function () { throw new RuntimeError('Variable "footers" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["footer"]) {
            // line 33
            echo "            <li>
                <a>Thibaud Béjat</a>
            </li>
            <li>
                <a>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footer"], "city", [], "any", false, false, false, 37), "html", null, true);
            echo "</a>
            </li>
            <li>
                <a>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footer"], "email", [], "any", false, false, false, 40), "html", null, true);
            echo "</a>
            </li>
            <li>
                <a>Tél: ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footer"], "phone", [], "any", false, false, false, 43), "html", null, true);
            echo "</a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </ul>
    </div>
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["footers"]) || array_key_exists("footers", $context) ? $context["footers"] : (function () { throw new RuntimeError('Variable "footers" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["footer"]) {
            // line 49
            echo "    <div class \"text-center p-3 text-white\">
        © Thibaud Béjat Avocat - ";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footer"], "yearcopyright", [], "any", false, false, false, 50), " Y "), "html", null, true);
            echo " - Tous droits réservés
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  152 => 53,  143 => 50,  140 => 49,  136 => 48,  132 => 46,  123 => 43,  117 => 40,  111 => 37,  105 => 33,  101 => 32,  89 => 23,  83 => 20,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block footer %}

<div class=\"row\">
    <!--Grid column-->
    <div class=\"col-xl-4 col-lg-4 col-md-5 col-sm-5\">
        <ul>
            <li>
                <a href=\"/\" class=\"text-white\">À propos</a>
            </li>
            <li>
                <a href=\"#compétences\" class=\"text-white\">Compétences</a>
            </li>
            <li>
                <a href=\"#actualités\" class=\"text-white\">Actualités</a>
            </li>
            <li>
                <a href=\"#contact\" class=\"text-white\">Contact</a>
            </li>
            <li>
                <a href=\"{{path('legal_mention')}}\" class=\"text-white\">Mentions légales</a>
            </li>
            <li>
                <a href=\"{{path('data_protection')}}\" class=\"text-white\">Politique de protection des données</a>
            </li>
    </div>
    <div class=\"col-xl-4 col-lg-4 col-md-2 col-sm-2\">
        <a href=\"/\"><i class=\"far fa-arrow-alt-circle-up col-2 text-white\" style=\"font-size: 30px; color: white text-center\"></i></a>
        <p>RETOUR EN HAUT</p>
    </div>
    <div class=\"col-xl-4 col-lg-4 col-md-5 col-sm-5\">
        <ul>
            {% for footer in footers %}
            <li>
                <a>Thibaud Béjat</a>
            </li>
            <li>
                <a>{{ footer.city }}</a>
            </li>
            <li>
                <a>{{ footer.email }}</a>
            </li>
            <li>
                <a>Tél: {{ footer.phone }}</a>
            </li>
            {% endfor %}
        </ul>
    </div>
    {% for footer in footers %}
    <div class \"text-center p-3 text-white\">
        © Thibaud Béjat Avocat - {{ footer.yearcopyright|date(\" Y \") }} - Tous droits réservés
    </div>
    {% endfor %}

</div>{% endblock %}", "_footer.html.twig", "/home/wilder/Projet3_portfolio_facture/templates/_footer.html.twig");
    }
}
