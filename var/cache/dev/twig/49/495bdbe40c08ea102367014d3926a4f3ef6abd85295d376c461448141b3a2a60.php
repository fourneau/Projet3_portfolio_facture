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

/* invoice/socialCouncil.html.twig */
class __TwigTemplate_c495cf5393fffe911ae3a48172adc1cfa82432e8fd985e6e1b88d4385d30a056 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/socialCouncil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/socialCouncil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Facturation";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/invoice.css"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/logo1.png"), "html", null, true);
        echo "\" />
    <link href=\"https://fonts.googleapis.com/css2?family=Play&display=swap\" rel=\"stylesheet\"> ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>

<header class=\"m-5\">
    <nav class=\"navbar navbar-expand-lg navbar-invoice fixed-top\">
        <div class=\"container-fluid\">
            <img class=\"logoNav rounded-circle\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/logo1.png"), "html", null, true);
        echo "\" alt=\" \">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <div class=\"me-auto mb-2 mb-lg-0 mx-auto d-flex justify-content-between flex-wrap\">
                    <div class=\"nav-item\">
                        <a class=\"nav-link\" aria-current=\"page\" href=\"/admin\">Tableau de bord administrateur</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

";
        // line 32
        $this->loadTemplate("invoice/headerInvoice.html.twig", "invoice/socialCouncil.html.twig", 32)->display($context);
        // line 33
        echo "
<body>
    <table class=\"invoiceId\">
        <tr>
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["folders"]) || array_key_exists("folders", $context) ? $context["folders"] : (function () { throw new RuntimeError('Variable "folders" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["folderId"]) {
            // line 38
            echo "            <td class=\"t1\">
                <p>Facture n°:
                    <b>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo "|";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folderId"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</b></p>
                </p>
                <p>À l'attention de
                    <select name=\"gender\">
                        <option value=\"\">--</option>
                        <option value=\"Mr\">Monsieur</option>
                        <option value=\"Mme\">Madame</option>
                    </select> ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folderId"], "customer", [], "any", false, false, false, 47), "html", null, true);
            echo "
                </p>
            </td>
            <td class=\"t2\">
                <U>Adresse de facturation: </U>
                <p>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["folderId"], "customer", [], "any", false, false, false, 52), "adress", [], "any", false, false, false, 52), "html", null, true);
            echo "</p>
                <p>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["folderId"], "customer", [], "any", false, false, false, 53), "zipCode", [], "any", false, false, false, 53), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["folderId"], "customer", [], "any", false, false, false, 53), "city", [], "any", false, false, false, 53), "html", null, true);
            echo "</p>
                <p> ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["folderId"], "owner", [], "any", false, false, false, 54), "city", [], "any", false, false, false, 54), "html", null, true);
            echo ", le: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
            echo " </p>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folderId'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </table>
    <div class=\"invoiceBody\">
        <h2 class=\"invoiceTitle\">ABONNEMENT A LA HOT LINE</h2>
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rates"]) || array_key_exists("rates", $context) ? $context["rates"] : (function () { throw new RuntimeError('Variable "rates" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
            // line 62
            echo "        <p>Montant des HONORAIRES HT: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rate"], "ratesubscription", [], "any", false, false, false, 62), "html", null, true);
            echo "€</p>
        <p>Montant T.V.A à: ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rate"], "VATrate", [], "any", false, false, false, 63), "html", null, true);
            echo "%</p>
        <p class=\"total\">Total TTC: ";
            // line 64
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["rate"], "ratesubscription", [], "any", false, false, false, 64) * twig_get_attribute($this->env, $this->source, $context["rate"], "VATrate", [], "any", false, false, false, 64)) / 100) + twig_get_attribute($this->env, $this->source, $context["rate"], "ratesubscription", [], "any", false, false, false, 64)), "html", null, true);
            echo "€</p>
        <hr class=\"invoiceSeparator\">";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        <div class=\"payment\">
            ";
        // line 67
        echo twig_include($this->env, $context, "invoice/paymentTerms.html.twig");
        echo "
        </div>
        <h2 class=\"invoiceTitle\">PRESTATIONS REALISEES AU COURS DU MOIS</h2>
        <U class=\"diligenceTitle mb-3\">Description de la diligence:</U> ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diligences"]) || array_key_exists("diligences", $context) ? $context["diligences"] : (function () { throw new RuntimeError('Variable "diligences" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["diligence"]) {
            // line 71
            echo "        <p class=\"diligence\">- ";
            echo twig_get_attribute($this->env, $this->source, $context["diligence"], "description", [], "any", false, false, false, 71);
            echo "</p>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diligence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        <U class=\"mt-5 mb-1\">Total des diligences: </U> ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diligences"]) || array_key_exists("diligences", $context) ? $context["diligences"] : (function () { throw new RuntimeError('Variable "diligences" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["diligence"]) {
            // line 73
            echo "        <p class=\"total mt-5\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diligence"], "duration", [], "any", false, false, false, 73), "html", null, true);
            echo " minutes</p>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diligence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        <hr class=\"invoiceSeparator\">
        <h2 class=\"invoiceTitle\">TEMPS RESTANT SUR LE BUDGET EN COURS</h2>
        <U class=\"mb-3\">Détail budget temps par période</U> ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diligences"]) || array_key_exists("diligences", $context) ? $context["diligences"] : (function () { throw new RuntimeError('Variable "diligences" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["diligence"]) {
            // line 77
            echo "        <p class=\"detailTime\">- ";
            echo twig_get_attribute($this->env, $this->source, $context["diligence"], "description", [], "any", false, false, false, 77);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diligence"], "duration", [], "any", false, false, false, 77), "html", null, true);
            echo " minutes</p>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diligence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        <p class=\"mt-5\">Temps restant: (\$tempsInitial - \$tempsPassé)</p>
        <hr class=\"invoiceSeparator\">
    </div>
    ";
        // line 81
        $this->loadTemplate("invoice/footerInvoice.html.twig", "invoice/socialCouncil.html.twig", 81)->display($context);
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "    <script src=\" https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js \" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4 \" crossorigin=\"anonymous \"></script>
    <script src=\"https://kit.fontawesome.com/2d0e64c378.js \" crossorigin=\"anonymous \"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js \"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.js"), "html", null, true);
        echo "\"></script>
</body>
<div class=\"invoice text-center m-5 pt-3\">
    <a href=\"/\" class=\"btn\">Éditer la facture</a>
</div>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "invoice/socialCouncil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 81,  279 => 11,  261 => 7,  244 => 85,  239 => 82,  235 => 81,  230 => 78,  220 => 77,  216 => 76,  212 => 74,  204 => 73,  199 => 72,  191 => 71,  187 => 70,  181 => 67,  178 => 66,  170 => 64,  166 => 63,  161 => 62,  157 => 61,  152 => 58,  140 => 54,  134 => 53,  130 => 52,  122 => 47,  110 => 40,  106 => 38,  102 => 37,  96 => 33,  94 => 32,  76 => 17,  69 => 12,  67 => 11,  63 => 10,  59 => 9,  54 => 7,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Facturation{% block title %}{% endblock %}</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"{{ asset('build/invoice.css') }}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('build/logo1.png') }}\" />
    <link href=\"https://fonts.googleapis.com/css2?family=Play&display=swap\" rel=\"stylesheet\"> {% block stylesheets %} {{ encore_entry_link_tags('app') }} {% endblock %}
</head>

<header class=\"m-5\">
    <nav class=\"navbar navbar-expand-lg navbar-invoice fixed-top\">
        <div class=\"container-fluid\">
            <img class=\"logoNav rounded-circle\" src=\"{{ asset( 'build/logo1.png') }}\" alt=\" \">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <div class=\"me-auto mb-2 mb-lg-0 mx-auto d-flex justify-content-between flex-wrap\">
                    <div class=\"nav-item\">
                        <a class=\"nav-link\" aria-current=\"page\" href=\"/admin\">Tableau de bord administrateur</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

{% include \"invoice/headerInvoice.html.twig\" %}

<body>
    <table class=\"invoiceId\">
        <tr>
            {% for folderId in folders %}
            <td class=\"t1\">
                <p>Facture n°:
                    <b>{{ 'now' | date('Y') }}|{{folderId.id}}</b></p>
                </p>
                <p>À l'attention de
                    <select name=\"gender\">
                        <option value=\"\">--</option>
                        <option value=\"Mr\">Monsieur</option>
                        <option value=\"Mme\">Madame</option>
                    </select> {{folderId.customer}}
                </p>
            </td>
            <td class=\"t2\">
                <U>Adresse de facturation: </U>
                <p>{{folderId.customer.adress}}</p>
                <p>{{folderId.customer.zipCode}} {{folderId.customer.city}}</p>
                <p> {{folderId.owner.city}}, le: {{ \"now\"|date(\"d/m/Y\") }} </p>
            </td>
        </tr>
        {% endfor %}
    </table>
    <div class=\"invoiceBody\">
        <h2 class=\"invoiceTitle\">ABONNEMENT A LA HOT LINE</h2>
        {% for rate in rates %}
        <p>Montant des HONORAIRES HT: {{rate.ratesubscription}}€</p>
        <p>Montant T.V.A à: {{rate.VATrate}}%</p>
        <p class=\"total\">Total TTC: {{((rate.ratesubscription * rate.VATrate) / 100) + rate.ratesubscription }}€</p>
        <hr class=\"invoiceSeparator\">{% endfor %}
        <div class=\"payment\">
            {{include('invoice/paymentTerms.html.twig')}}
        </div>
        <h2 class=\"invoiceTitle\">PRESTATIONS REALISEES AU COURS DU MOIS</h2>
        <U class=\"diligenceTitle mb-3\">Description de la diligence:</U> {% for diligence in diligences %}
        <p class=\"diligence\">- {{diligence.description | raw}}</p>{% endfor %}
        <U class=\"mt-5 mb-1\">Total des diligences: </U> {% for diligence in diligences %}
        <p class=\"total mt-5\">{{diligence.duration}} minutes</p>{% endfor %}
        <hr class=\"invoiceSeparator\">
        <h2 class=\"invoiceTitle\">TEMPS RESTANT SUR LE BUDGET EN COURS</h2>
        <U class=\"mb-3\">Détail budget temps par période</U> {% for diligence in diligences %}
        <p class=\"detailTime\">- {{diligence.description | raw}}: {{diligence.duration}} minutes</p>{% endfor %}
        <p class=\"mt-5\">Temps restant: (\$tempsInitial - \$tempsPassé)</p>
        <hr class=\"invoiceSeparator\">
    </div>
    {% include \"invoice/footerInvoice.html.twig\" %} {% block javascripts %} {{ encore_entry_script_tags('app') }} {% endblock %}
    <script src=\" https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js \" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4 \" crossorigin=\"anonymous \"></script>
    <script src=\"https://kit.fontawesome.com/2d0e64c378.js \" crossorigin=\"anonymous \"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js \"></script>
    <script src=\"{{ asset('build/app.js') }}\"></script>
</body>
<div class=\"invoice text-center m-5 pt-3\">
    <a href=\"/\" class=\"btn\">Éditer la facture</a>
</div>

</html>", "invoice/socialCouncil.html.twig", "/home/wilder/Projet3_portfolio_facture/templates/invoice/socialCouncil.html.twig");
    }
}
