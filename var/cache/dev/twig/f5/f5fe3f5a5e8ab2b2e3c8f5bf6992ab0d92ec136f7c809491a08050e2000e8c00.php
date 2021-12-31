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

/* default/index.html.twig */
class __TwigTemplate_6621bb214fae54af138a25064f36c26ae665d75b3107230611bfd11931eb2284 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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

        echo "Maitre Thibaud Bejat, Avocat au barreau de Paris. Droit du travail et droit social";
        
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

        echo " | Avocat au barreau de Paris";
        
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
        $context['_seq'] = twig_ensure_traversable(        // line 2
(isset($context["background"]) || array_key_exists("background", $context) ? $context["background"] : (function () { throw new RuntimeError('Variable "background" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["imageback"]) {
            // line 3
            echo "<div class=\"d-block w-100\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["imageback"], "imageUpload"), "html", null, true);
            echo "')\" border=\"0\" alt=\"... \">
    <div id=\"carouselExampleWhite\" class=\"carousel carousel-white slide\" data-bs-ride=\"carousel\">
        <div class=\"carousel-indicators \">
            <button type=\"button\" data-bs-target=\"#carouselExampleWhite\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
            <button type=\"button\" data-bs-target=\"#carouselExampleWhite\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
            <button type=\"button\" data-bs-target=\"#carouselExampleWhite\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
        </div>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\" data-bs-interval=\"5000\">
                <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["carousel"]) || array_key_exists("carousel", $context) ? $context["carousel"] : (function () { throw new RuntimeError('Variable "carousel" does not exist.', 12, $this->source); })()), 0, [], "array", false, false, false, 12), "imageUpload"), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"...\">
                <div class=\"carousel-caption d-md-block\">
                    <div class=\"carousel-caption\">
                        <div class=\"about row m-5 align-items-center\">
                            <div class=\"avatar col-4 text-center mt-5\">
                                <img class=\"picture rounded-circle\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/avatarThibaud.png"), "html", null, true);
            echo "\" alt=\"Thibaud Béjat\">
                            </div>
                            <div class=\"col-8\">
                                <div id=\"card-about\" class=\"card-body\">
                                    <h5 class=\"card-title\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), "html", null, true);
            echo "</h5>
                                    <h6 class=\"card-text1\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 22, $this->source); })()), "subtitle", [], "any", false, false, false, 22), "html", null, true);
            echo "</h6>
                                    <div class=\"card-text\">
                                        <p>";
            // line 24
            echo twig_get_attribute($this->env, $this->source, (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24);
            echo "</p>
                                    </div>
                                </div>
                                <div class=\"text-center pt-5 d-none d-md-block\">
                                    <a href=\"/#contact\" class=\"btn bg-white\">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\" data-bs-interval=\"5000\">
                <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["carousel"]) || array_key_exists("carousel", $context) ? $context["carousel"] : (function () { throw new RuntimeError('Variable "carousel" does not exist.', 36, $this->source); })()), 1, [], "array", false, false, false, 36), "imageUpload"), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"...\">
                <div class=\"carousel-caption d-md-block\">
                    <div class=\"carousel-caption\">
                        <div class=\"about row m-5 align-items-center\">
                            <div class=\"avatar col-4 text-center mt-5\">
                                <img class=\"picture rounded-circle\" src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/avatarThibaud.png"), "html", null, true);
            echo "\" alt=\"Thibaud Béjat\">
                            </div>
                            <div class=\"col-8\">
                                <div id=\"card-about\" class=\"card-body\">
                                    <h5 class=\"card-title\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 45, $this->source); })()), "title", [], "any", false, false, false, 45), "html", null, true);
            echo "</h5>
                                    <h6 class=\"card-text1\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 46, $this->source); })()), "subtitle", [], "any", false, false, false, 46), "html", null, true);
            echo "</h6>
                                    <div class=\"card-text\">
                                        <p>";
            // line 48
            echo twig_get_attribute($this->env, $this->source, (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48);
            echo "</p>
                                    </div>
                                </div>
                                <div class=\"text-center pt-5 d-none d-md-block\">
                                    <a href=\"/#contact\" class=\"btn bg-white\">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["carousel"]) || array_key_exists("carousel", $context) ? $context["carousel"] : (function () { throw new RuntimeError('Variable "carousel" does not exist.', 60, $this->source); })()), 2, [], "array", false, false, false, 60), "imageUpload"), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"...\">
                <div class=\"carousel-caption d-md-block\">
                    <div class=\"carousel-caption\">
                        <div class=\"about row m-5 align-items-center\">
                            <div class=\"avatar col-4 text-center mt-5\">
                                <img class=\"picture rounded-circle\" src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/avatarThibaud.png"), "html", null, true);
            echo "\" alt=\"Thibaud Béjat\">
                            </div>
                            <div class=\"col-8\">
                                <div id=\"card-about\" class=\"card-body\">
                                    <h5 class=\"card-title\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 69, $this->source); })()), "title", [], "any", false, false, false, 69), "html", null, true);
            echo "</h5>
                                    <h6 class=\"card-text1\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 70, $this->source); })()), "subtitle", [], "any", false, false, false, 70), "html", null, true);
            echo "</h6>
                                    <div class=\"card-text\">
                                        <p>";
            // line 72
            echo twig_get_attribute($this->env, $this->source, (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 72, $this->source); })()), "description", [], "any", false, false, false, 72);
            echo "</p>
                                    </div>
                                </div>
                                <div class=\"text-center pt-5 d-none d-md-block\">
                                    <a href=\"/#contact\" class=\"btn bg-white\">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"text-center pt-5  d-md-block\">
        <a href=\"/#contact\" class=\"btn2 bg-white\" style=\"width:130px\">Contact</a>
    </div>
    <div class=\" mb-5 mt-2\" id=\"compétences\"></div>
    <br>
    <hr class=\"separateur separator--line mt-5\">
    <h1 class=\"titre mt-3 mb-3\">COMPÉTENCES</h1>
    <hr class=\"separateur separator--line\">
    <div class=\"container my-5 py-5\">
        <div class=\"article row g-5\">
            ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["expertises"]) || array_key_exists("expertises", $context) ? $context["expertises"] : (function () { throw new RuntimeError('Variable "expertises" does not exist.', 95, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["expertise"]) {
                // line 96
                echo "            <div class=\"news col-sm-6\">
                <div class=\"card_5\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <h5 class=\"m-4\">";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["expertise"], "title", [], "any", false, false, false, 100), "html", null, true);
                echo "</h5>
                        </div>
                        <div class=\"exp_description1 p-3\">
                            <p class=\"exp_description m-4\">";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["expertise"], "description", [], "any", false, false, false, 103);
                echo "</p>
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expertise'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "        </div>
    </div>
    <div class=\"my-5\" id=\"actualités\"></div>
    <br>
    <br>
    <hr class=\"separateur separator--line mt-5\">
    <h1 class=\"titre mt-3 mb-3\">ACTUALITÉS</h1>
    <hr class=\"separateur separator--line mb-5\">
    <div class=\"row-link\">
        <a class=\"nav-link1\" aria-current=\"page\" href=\"";
            // line 118
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualities");
            echo "\">Toutes les actualités</a>
        <a class=\"nav-link1\" aria-current=\"page\" href=\"";
            // line 119
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newspaper");
            echo "\">Journal Officiel</a>
        <a class=\"nav-link1\" aria-current=\"page\" href=\"";
            // line 120
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("important_actualities");
            echo "\">Les Décisions importantes</a>
    </div>
    <div class=\"container my-5 py-5\">
        <div class=\"article row g-5\">
            ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 124, $this->source); })()));
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
                // line 125
                echo "            <div class=\"news col-sm-6\">
                <div class=\"card_5\">
                    <div class=\"row\">
                        <div class=\"col-10\">
                            <h5 class=\"p-3\">
                                ";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "title", [], "any", false, false, false, 130), "html", null, true);
                echo "
                            </h5>
                        </div>
                        <div class=\"col-2\">
                            <div class=\"logo mt-4\">
                                <img class=\"img-news\" src=";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["new"], "newscategory", [], "any", false, false, false, 135), "logo", [], "any", false, false, false, 135), "html", null, true);
                echo ">
                            </div>
                        </div>
                    </div>
                    <h6 class=\"p-3\">
                        ";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["new"], "newscategory", [], "any", false, false, false, 140), "name", [], "any", false, false, false, 140), "html", null, true);
                echo "
                    </h6>
                    <div class=\"new_description mb-4\">
                        <p>";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["new"], "description", [], "any", false, false, false, 143);
                echo "</p>
                    </div>
                    <div class=\"p-1 text-center\">
                        <a href=\"#myModal";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 146), "html", null, true);
                echo " \" data-bs-target=\"#myModal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 146), "html", null, true);
                echo "\" data-bs-toggle=\"modal\" class=\"btn bg-white rounded align-center\">
\t\t\t        En savoir plus
\t\t\t        </a>
                        <div class=\"modal fade\" id=\"myModal";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 149), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle \" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\" modal-header\">
                                        <h5 class=\"modal-title \" id=\"exampleModalLongTitle\">";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "title", [], "any", false, false, false, 153), "html", null, true);
                echo "</h5>
                                    </div>
                                    <div class=\"modal-body\">
                                        <div class=\"container-fluid\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-12\">
                                                    <h6>";
                // line 159
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["new"], "newscategory", [], "any", false, false, false, 159), "name", [], "any", false, false, false, 159), "html", null, true);
                echo "</h6>
                                                    <div class=\"row \">
                                                        <div class=\"col-10 m-5\">
                                                            ";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "subtitle", [], "any", false, false, false, 162), "html", null, true);
                echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-12 ml-auto\">";
                // line 168
                echo twig_get_attribute($this->env, $this->source, $context["new"], "description", [], "any", false, false, false, 168);
                echo "</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class=\"card-date m-3\">
                            ";
                // line 181
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "date", [], "any", false, false, false, 181), "d-m-Y"), "html", null, true);
                echo "
                        </p>
                    </div>
                </div>
            </div>
            ";
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
            // line 187
            echo "        </div>
        <div class=\"mb-5 mt-2\" id=\"contact\"></div>
    </div>
    <hr class=\"separateur separator--line mb-5\">
    <h1 class=\"titre mt-3 mb-3\">CONTACT</h1>
    <hr class=\"separateur separator--line mb-5\">
    <div class=\"container py-5\">
        <div class=\" contact row gx-5\">
            <div class=\"col-xl-6 col-lg-6 col-md-10 col-sm-12\">";
            // line 195
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
            // line 196
            echo "                <div class=\"form\">
                    ";
            // line 197
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), 'form_start');
            echo "
                    <div class=\"m-3 \">";
            // line 198
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "firstname", [], "any", false, false, false, 198), 'widget');
            echo "</div>
                    <div class=\"form-error\">
                        ";
            // line 200
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "firstname", [], "any", false, false, false, 200), 'errors');
            echo "
                    </div>
                    <div class=\"m-3\">";
            // line 202
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "lastname", [], "any", false, false, false, 202), 'widget');
            echo "</div>
                    <div class=\"form-error\">
                        ";
            // line 204
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "lastname", [], "any", false, false, false, 204), 'errors');
            echo "
                    </div>
                    <div class=\"m-3\">";
            // line 206
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "email", [], "any", false, false, false, 206), 'widget');
            echo "</div>
                    <div class=\"form-error\">
                        ";
            // line 208
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "email", [], "any", false, false, false, 208), 'errors');
            echo "
                    </div>
                    <div class=\"m-3\">";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "phone_number", [], "any", false, false, false, 210), 'widget');
            echo "</div>
                    <div class=\"form-error\">
                        ";
            // line 212
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "phone_number", [], "any", false, false, false, 212), 'errors');
            echo "
                    </div>
                    <div class=\"message m-3\">";
            // line 214
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "message", [], "any", false, false, false, 214), 'widget');
            echo "</div>
                    <div class=\"form-error\">
                        ";
            // line 216
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "message", [], "any", false, false, false, 216), 'errors');
            echo "
                    </div>
                </div>
                <div class=\"m-3 p-3\">";
            // line 219
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), "checkbox", [], "any", false, false, false, 219), 'widget');
            echo "</div>
                <div class=\"text-center\">
                    <button class=\"btn m-5 bg-white rounded text-center\">";
            // line 221
            echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 221, $this->source); })()), "Envoyer")) : ("Envoyer")), "html", null, true);
            echo "</button>
                </div>
                ";
            // line 223
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), 'form_end');
            echo "
            </div>
            <div class=\"map1 col-6 pt-3\">
                <iframe class=\"map\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.978548696972!2d2.2912774158180307!3d48.87768547928943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f932e07fec1%3A0xe493fc5a9e79c52d!2s52%20Rue%20des%20Acacias%2C%2075017%20Paris!5e0!3m2!1sfr!2sfr!4v1623337638778!5m2!1sfr!2sfr\"
                    loading=\"lazy\"></iframe>
            </div>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageback'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 232,  512 => 223,  507 => 221,  502 => 219,  496 => 216,  491 => 214,  486 => 212,  481 => 210,  476 => 208,  471 => 206,  466 => 204,  461 => 202,  456 => 200,  451 => 198,  447 => 197,  444 => 196,  442 => 195,  432 => 187,  412 => 181,  396 => 168,  387 => 162,  381 => 159,  372 => 153,  365 => 149,  357 => 146,  351 => 143,  345 => 140,  337 => 135,  329 => 130,  322 => 125,  305 => 124,  298 => 120,  294 => 119,  290 => 118,  279 => 109,  267 => 103,  261 => 100,  255 => 96,  251 => 95,  225 => 72,  220 => 70,  216 => 69,  209 => 65,  201 => 60,  186 => 48,  181 => 46,  177 => 45,  170 => 41,  162 => 36,  147 => 24,  142 => 22,  138 => 21,  131 => 17,  123 => 12,  110 => 3,  107 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block metadescription %}Maitre Thibaud Bejat, Avocat au barreau de Paris. Droit du travail et droit social{% endblock %} {% block title %} | Avocat au barreau de Paris{% endblock %} {% block body %} {% for imageback in
background %}
<div class=\"d-block w-100\" style=\"background-image:url('{{ vich_uploader_asset(imageback, 'imageUpload') }}')\" border=\"0\" alt=\"... \">
    <div id=\"carouselExampleWhite\" class=\"carousel carousel-white slide\" data-bs-ride=\"carousel\">
        <div class=\"carousel-indicators \">
            <button type=\"button\" data-bs-target=\"#carouselExampleWhite\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
            <button type=\"button\" data-bs-target=\"#carouselExampleWhite\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
            <button type=\"button\" data-bs-target=\"#carouselExampleWhite\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
        </div>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\" data-bs-interval=\"5000\">
                <img src=\"{{vich_uploader_asset(carousel[0], 'imageUpload')}}\" class=\"d-block w-100\" alt=\"...\">
                <div class=\"carousel-caption d-md-block\">
                    <div class=\"carousel-caption\">
                        <div class=\"about row m-5 align-items-center\">
                            <div class=\"avatar col-4 text-center mt-5\">
                                <img class=\"picture rounded-circle\" src=\"{{ asset( 'build/avatarThibaud.png') }}\" alt=\"Thibaud Béjat\">
                            </div>
                            <div class=\"col-8\">
                                <div id=\"card-about\" class=\"card-body\">
                                    <h5 class=\"card-title\">{{about.title}}</h5>
                                    <h6 class=\"card-text1\">{{about.subtitle}}</h6>
                                    <div class=\"card-text\">
                                        <p>{{about.description|raw}}</p>
                                    </div>
                                </div>
                                <div class=\"text-center pt-5 d-none d-md-block\">
                                    <a href=\"/#contact\" class=\"btn bg-white\">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\" data-bs-interval=\"5000\">
                <img src=\"{{vich_uploader_asset(carousel[1], 'imageUpload')}}\" class=\"d-block w-100\" alt=\"...\">
                <div class=\"carousel-caption d-md-block\">
                    <div class=\"carousel-caption\">
                        <div class=\"about row m-5 align-items-center\">
                            <div class=\"avatar col-4 text-center mt-5\">
                                <img class=\"picture rounded-circle\" src=\"{{ asset( 'build/avatarThibaud.png') }}\" alt=\"Thibaud Béjat\">
                            </div>
                            <div class=\"col-8\">
                                <div id=\"card-about\" class=\"card-body\">
                                    <h5 class=\"card-title\">{{about.title}}</h5>
                                    <h6 class=\"card-text1\">{{about.subtitle}}</h6>
                                    <div class=\"card-text\">
                                        <p>{{about.description|raw}}</p>
                                    </div>
                                </div>
                                <div class=\"text-center pt-5 d-none d-md-block\">
                                    <a href=\"/#contact\" class=\"btn bg-white\">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{vich_uploader_asset(carousel[2], 'imageUpload')}}\" class=\"d-block w-100\" alt=\"...\">
                <div class=\"carousel-caption d-md-block\">
                    <div class=\"carousel-caption\">
                        <div class=\"about row m-5 align-items-center\">
                            <div class=\"avatar col-4 text-center mt-5\">
                                <img class=\"picture rounded-circle\" src=\"{{ asset( 'build/avatarThibaud.png') }}\" alt=\"Thibaud Béjat\">
                            </div>
                            <div class=\"col-8\">
                                <div id=\"card-about\" class=\"card-body\">
                                    <h5 class=\"card-title\">{{about.title}}</h5>
                                    <h6 class=\"card-text1\">{{about.subtitle}}</h6>
                                    <div class=\"card-text\">
                                        <p>{{about.description|raw}}</p>
                                    </div>
                                </div>
                                <div class=\"text-center pt-5 d-none d-md-block\">
                                    <a href=\"/#contact\" class=\"btn bg-white\">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"text-center pt-5  d-md-block\">
        <a href=\"/#contact\" class=\"btn2 bg-white\" style=\"width:130px\">Contact</a>
    </div>
    <div class=\" mb-5 mt-2\" id=\"compétences\"></div>
    <br>
    <hr class=\"separateur separator--line mt-5\">
    <h1 class=\"titre mt-3 mb-3\">COMPÉTENCES</h1>
    <hr class=\"separateur separator--line\">
    <div class=\"container my-5 py-5\">
        <div class=\"article row g-5\">
            {% for expertise in expertises %}
            <div class=\"news col-sm-6\">
                <div class=\"card_5\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <h5 class=\"m-4\">{{expertise.title}}</h5>
                        </div>
                        <div class=\"exp_description1 p-3\">
                            <p class=\"exp_description m-4\">{{expertise.description|raw}}</p>
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
    <div class=\"my-5\" id=\"actualités\"></div>
    <br>
    <br>
    <hr class=\"separateur separator--line mt-5\">
    <h1 class=\"titre mt-3 mb-3\">ACTUALITÉS</h1>
    <hr class=\"separateur separator--line mb-5\">
    <div class=\"row-link\">
        <a class=\"nav-link1\" aria-current=\"page\" href=\"{{path( 'actualities')}}\">Toutes les actualités</a>
        <a class=\"nav-link1\" aria-current=\"page\" href=\"{{path( 'newspaper')}}\">Journal Officiel</a>
        <a class=\"nav-link1\" aria-current=\"page\" href=\"{{path( 'important_actualities')}}\">Les Décisions importantes</a>
    </div>
    <div class=\"container my-5 py-5\">
        <div class=\"article row g-5\">
            {% for new in news %}
            <div class=\"news col-sm-6\">
                <div class=\"card_5\">
                    <div class=\"row\">
                        <div class=\"col-10\">
                            <h5 class=\"p-3\">
                                {{new.title}}
                            </h5>
                        </div>
                        <div class=\"col-2\">
                            <div class=\"logo mt-4\">
                                <img class=\"img-news\" src={{ new.newscategory.logo }}>
                            </div>
                        </div>
                    </div>
                    <h6 class=\"p-3\">
                        {{new.newscategory.name}}
                    </h6>
                    <div class=\"new_description mb-4\">
                        <p>{{ new.description|raw }}</p>
                    </div>
                    <div class=\"p-1 text-center\">
                        <a href=\"#myModal{{ loop.index }} \" data-bs-target=\"#myModal{{ loop.index }}\" data-bs-toggle=\"modal\" class=\"btn bg-white rounded align-center\">
\t\t\t        En savoir plus
\t\t\t        </a>
                        <div class=\"modal fade\" id=\"myModal{{ loop.index }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle \" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\" modal-header\">
                                        <h5 class=\"modal-title \" id=\"exampleModalLongTitle\">{{new.title}}</h5>
                                    </div>
                                    <div class=\"modal-body\">
                                        <div class=\"container-fluid\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-12\">
                                                    <h6>{{new.newscategory.name}}</h6>
                                                    <div class=\"row \">
                                                        <div class=\"col-10 m-5\">
                                                            {{new.subtitle}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-12 ml-auto\">{{new.description|raw}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class=\"card-date m-3\">
                            {{new.date|date(\"d-m-Y\")}}
                        </p>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
        <div class=\"mb-5 mt-2\" id=\"contact\"></div>
    </div>
    <hr class=\"separateur separator--line mb-5\">
    <h1 class=\"titre mt-3 mb-3\">CONTACT</h1>
    <hr class=\"separateur separator--line mb-5\">
    <div class=\"container py-5\">
        <div class=\" contact row gx-5\">
            <div class=\"col-xl-6 col-lg-6 col-md-10 col-sm-12\">{% form_theme form 'bootstrap_4_layout.html.twig' %}
                <div class=\"form\">
                    {{ form_start(form) }}
                    <div class=\"m-3 \">{{form_widget(form.firstname)}}</div>
                    <div class=\"form-error\">
                        {{ form_errors(form.firstname) }}
                    </div>
                    <div class=\"m-3\">{{form_widget(form.lastname)}}</div>
                    <div class=\"form-error\">
                        {{ form_errors(form.lastname) }}
                    </div>
                    <div class=\"m-3\">{{form_widget(form.email)}}</div>
                    <div class=\"form-error\">
                        {{ form_errors(form.email) }}
                    </div>
                    <div class=\"m-3\">{{form_widget(form.phone_number)}}</div>
                    <div class=\"form-error\">
                        {{ form_errors(form.phone_number) }}
                    </div>
                    <div class=\"message m-3\">{{form_widget(form.message)}}</div>
                    <div class=\"form-error\">
                        {{ form_errors(form.message) }}
                    </div>
                </div>
                <div class=\"m-3 p-3\">{{form_widget(form.checkbox)}}</div>
                <div class=\"text-center\">
                    <button class=\"btn m-5 bg-white rounded text-center\">{{ button_label|default('Envoyer') }}</button>
                </div>
                {{ form_end(form) }}
            </div>
            <div class=\"map1 col-6 pt-3\">
                <iframe class=\"map\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.978548696972!2d2.2912774158180307!3d48.87768547928943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f932e07fec1%3A0xe493fc5a9e79c52d!2s52%20Rue%20des%20Acacias%2C%2075017%20Paris!5e0!3m2!1sfr!2sfr!4v1623337638778!5m2!1sfr!2sfr\"
                    loading=\"lazy\"></iframe>
            </div>
        </div>
    </div>
</div>
{% endfor %} {% endblock %}", "default/index.html.twig", "/home/wilder/Projet3_portfolio_facture/templates/default/index.html.twig");
    }
}
