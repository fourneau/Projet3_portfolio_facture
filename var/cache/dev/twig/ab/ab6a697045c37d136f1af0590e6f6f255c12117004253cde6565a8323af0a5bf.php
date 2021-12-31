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

/* default/journal.html.twig */
class __TwigTemplate_006766aaad2f7cedc8f9e265548ac0c52404e4a5ad6037813098bc4accd521be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'metadescription' => [$this, 'block_metadescription'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/journal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/journal.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/journal.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_metadescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metadescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metadescription"));

        echo "Actualités du journal officiel - Droit du travail et droit sociale";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " | Journal Officiel";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["background"]) || array_key_exists("background", $context) ? $context["background"] : (function () { throw new RuntimeError('Variable "background" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["imageback"]) {
            // line 2
            echo "<div class=\"d-block w-100\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["imageback"], "imageUpload"), "html", null, true);
            echo "')\" border=\"0\" alt=\"... \">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageback'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "    <div class=\"mb-5\" id=\"actualités\"></div>
    <br><br>
    <hr class=\"separateur separator--line mt-5\">
    <h1 class=\"titre mt-5 mb-5\">JOURNAL OFFICIEL</h1>
    <hr class=\"separateur separator--line\">
    <div class=\"container mb-5\">
        <div class=\"row-link mb-5\">
            <a class=\"nav-link1\" aria-current=\"page\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualities");
        echo "\">Toutes les actualités</a>
            <a class=\"nav-link1\" aria-current=\"page\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newspaper");
        echo "\">Journal Officiel</a>
            <a class=\"nav-link1\" aria-current=\"page\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("important_actualities");
        echo "\">Les Décisions importantes</a>
        </div>
        <div class=\"article row g-5\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 16, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["new"], "getImportance", [], "any", false, false, false, 16), 2))) {
                // line 17
                echo "            <div class=\"news col-sm-6\">
                <div class=\"card_5\">
                    <div class=\"row\">
                        <div class=\"col-10\">
                            <h5 class=\"m-4\"> ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "title", [], "any", false, false, false, 21), "html", null, true);
                echo " </h5>
                        </div>
                        <div class=\"col-2\">
                            <div class=\"logo mt-4\">
                                <img class=\"img-news\" src=";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["new"], "newscategory", [], "any", false, false, false, 25), "logo", [], "any", false, false, false, 25), "html", null, true);
                echo ">
                            </div>
                        </div>
                    </div>
                    <h6 class=\"m-4\"> ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["new"], "newscategory", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
                echo " </h6>
                    <div class=\"new_description pb-5\">
                        <p>";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["new"], "description", [], "any", false, false, false, 31);
                echo "</p>
                    </div>
                    <div class=\"p-1 text-center \">
                        <a href=\"#myModal";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34), "html", null, true);
                echo "\" data-bs-target=\"#myModal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34), "html", null, true);
                echo "\" data-bs-toggle=\"modal\" class=\" btn bg-white rounded align-center mt-3\"> En savoir plus </a>
                        <div class=\"modal fade\" id=\"myModal";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 35), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\" modal-header\">
                                        <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "title", [], "any", false, false, false, 39), "html", null, true);
                echo "</h5>
                                    </div>
                                    <div class=\"modal-body \">
                                        <div class=\"container-fluid \">
                                            <div class=\"row \">
                                                <div class=\"col-sm-12\">
                                                    <h6>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["new"], "newscategory", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
                echo "</h6>
                                                    <div class=\"row\">
                                                        <div class=\"col-10 m-5\">
                                                            ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "subtitle", [], "any", false, false, false, 48), "html", null, true);
                echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-12 ml-auto\">";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "description", [], "any", false, false, false, 54), "html", null, true);
                echo "</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class=\"card-date m-3\"> ";
                // line 66
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "date", [], "any", false, false, false, 66), "d-m-Y"), "html", null, true);
                echo " </p>
                    </div>
                </div>
            </div>
            ";
            } else {
                // line 70
                echo " ";
            }
            echo " ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/journal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 71,  251 => 70,  243 => 66,  228 => 54,  219 => 48,  213 => 45,  204 => 39,  197 => 35,  191 => 34,  185 => 31,  180 => 29,  173 => 25,  166 => 21,  160 => 17,  141 => 16,  135 => 13,  131 => 12,  127 => 11,  118 => 4,  109 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block metadescription %}Actualités du journal officiel - Droit du travail et droit sociale{% endblock %} {% block title %} | Journal Officiel{% endblock %} {% block body %} {% for imageback in background %}
<div class=\"d-block w-100\" style=\"background-image:url('{{ vich_uploader_asset(imageback, 'imageUpload') }}')\" border=\"0\" alt=\"... \">
    {% endfor %}
    <div class=\"mb-5\" id=\"actualités\"></div>
    <br><br>
    <hr class=\"separateur separator--line mt-5\">
    <h1 class=\"titre mt-5 mb-5\">JOURNAL OFFICIEL</h1>
    <hr class=\"separateur separator--line\">
    <div class=\"container mb-5\">
        <div class=\"row-link mb-5\">
            <a class=\"nav-link1\" aria-current=\"page\" href=\"{{path('actualities')}}\">Toutes les actualités</a>
            <a class=\"nav-link1\" aria-current=\"page\" href=\"{{path('newspaper')}}\">Journal Officiel</a>
            <a class=\"nav-link1\" aria-current=\"page\" href=\"{{path('important_actualities')}}\">Les Décisions importantes</a>
        </div>
        <div class=\"article row g-5\">
            {% for new in news %} {% if new.getImportance == 2 %}
            <div class=\"news col-sm-6\">
                <div class=\"card_5\">
                    <div class=\"row\">
                        <div class=\"col-10\">
                            <h5 class=\"m-4\"> {{new.title}} </h5>
                        </div>
                        <div class=\"col-2\">
                            <div class=\"logo mt-4\">
                                <img class=\"img-news\" src={{new.newscategory.logo}}>
                            </div>
                        </div>
                    </div>
                    <h6 class=\"m-4\"> {{new.newscategory.name}} </h6>
                    <div class=\"new_description pb-5\">
                        <p>{{new.description|raw}}</p>
                    </div>
                    <div class=\"p-1 text-center \">
                        <a href=\"#myModal{{ loop.index }}\" data-bs-target=\"#myModal{{ loop.index }}\" data-bs-toggle=\"modal\" class=\" btn bg-white rounded align-center mt-3\"> En savoir plus </a>
                        <div class=\"modal fade\" id=\"myModal{{ loop.index }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\" modal-header\">
                                        <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">{{new.title}}</h5>
                                    </div>
                                    <div class=\"modal-body \">
                                        <div class=\"container-fluid \">
                                            <div class=\"row \">
                                                <div class=\"col-sm-12\">
                                                    <h6>{{new.newscategory.name}}</h6>
                                                    <div class=\"row\">
                                                        <div class=\"col-10 m-5\">
                                                            {{new.subtitle}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-12 ml-auto\">{{new.description}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class=\"card-date m-3\"> {{new.date|date(\"d-m-Y\")}} </p>
                    </div>
                </div>
            </div>
            {% else %} {% endif %} {% endfor %}
        </div>
    </div>
    {% endblock %}", "default/journal.html.twig", "/home/wilder/Projet3_portfolio_facture/templates/default/journal.html.twig");
    }
}
