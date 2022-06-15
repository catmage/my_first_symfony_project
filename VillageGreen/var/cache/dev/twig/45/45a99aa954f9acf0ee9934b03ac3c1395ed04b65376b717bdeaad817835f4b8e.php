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

/* villagegreen/home.html.twig */
class __TwigTemplate_c972dd1a6f06faea98196eb2bcfc096a48eef00e0db3d988e7bf6b3e9063b8ea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "villagegreen/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "villagegreen/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <article class=\"pt-5\">    
            <div class=\"d-none d-xl-block container-fluid\">
                <a href=\"#\"><img class=\"img-fluid pub_guitare\" src=\"Charte/BODY/pub guitare.png\"  alt=\"\"></a>
                <a href=\"#\"><img class=\"img-fluid banniere_droite_prix\" src=\"Charte/BODY/banniere droite prix.png\" alt=\" \"></a>
            </div>  
            <div class=\"d-xl-none container-fluid\">
                <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                      <div class=\"carousel-item active\">
                        <img class=\"d-block w-100\" src=\"Charte/BODY/pub guitare.png\" alt=\"First slide\">
                      </div>
                      <div class=\"carousel-item\">
                        <img class=\"d-block w-100 img-fluid banniere_de_droite_prix\" src=\"Charte/BODY/banniere_prix_mobile.png\" alt=\"Second slide\">
                      </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                      <span class=\"sr-only\"></span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                      <span class=\"sr-only\"></span>
                    </a>
                  </div>
            </div>  
                     
            <div class=\"container-fluid\">
                <img class=\"img-fluid banniere_centre\" src=\"Charte/BODY/banniere centre 4 pictos.png\" alt=\"\"  >
            </div>              
            <div class=\"container-fluid\" name=\"box\">
                <a class=\"cat\"> Nos catégories</a>
            </div>
            <br>
            <div class=\"container-fluid\" name=\"categories\">
                <a href=\"/guitare\">
                <img class=\"img-fluid image_categories\"src=\"Charte/BODY/CATEGORIES guitare.png\" alt=\"\">
                </a>
                <a href=\"/batterie\">
                <img class=\"img-fluid image_categories\"src=\"Charte/BODY/CATEGORIES batterie.png\" alt=\"\">
                </a>
                <a href=\"/clavier\">
                <img class=\"img-fluid image_categories\"src=\"Charte/BODY/CATEGORIES piano.png\" alt=\"\" >
                </a>
                <a href=\"/studio\">
                <img class=\"img-fluid image_categories\"src=\"Charte/BODY/CATEGORIES micro.png\" alt=\"\">
                </a>
                <br>
                <a href=\"/sono\">
                <img class=\"img-fluid image_categories\"src=\"Charte/BODY/CATEGORIES sono.png\" alt=\"\">
                </a>
                <a href=\"/cases\">
                <img class=\"img-fluid image_categories\"src=\"Charte/BODY/CATEGORIES cases.png\" alt=\"\" >
                </a> 
                <a href=\"/accessoires\">
                <img class=\"img-fluid image_categories\" src=\"Charte/BODY/CATEGORIES cable.png\" alt=\"\" >
                </a>
                <a href=\"/vents\">
                <img class=\"img-fluid image_categories\" src=\"Charte/BODY/CATEGORIES saxo.png\" alt=\"\" >
                </a>
                <div class=\"container-fluid d-none d-xl-block\" >
                    <a class=\"m_ventes\">Nos meilleures ventes</a><a class=\"partenaires\">Nos partenaires</a><br>
                    <a href=\"top_v_guitare.html\"><img class=\"img-fluid guitare_accueil\" src=\"Charte/BODY/TOP VENTES guitare.png\" alt=\"\"></a>
                    <a href=\"top_v_saxo.html\"><img class=\"img-fluid saxophone_accueil\" src=\"Charte/BODY/TOP VENTES saxo.png\" alt=\"\"></a>
                    <a href=\"top_v_piano.html\"><img class=\"img-fluid piano_accueil\" src=\"Charte/BODY/TOP VENTES piano.png\" alt=\"\"></a>
                    <img class=\"img-fluid logos_partenaires\" src=\"Charte/BODY/partenaires 4 logos.png\" alt=\"\" >
                </div>
                <div class=\"container-fluid d-xl-none\" >
                    <br><a class=\"meilleures_ventes\">Nos meilleures ventes</a><br>
                    <a href=\"top_v_guitare.html\"><img class=\"img-fluid guitare_accueil\" src=\"Charte/BODY/TOP VENTES guitare.png\" alt=\"\"></a>
                    <a href=\"top_v_saxo.html\"><img class=\"img-fluid saxophone_accueil\" src=\"Charte/BODY/TOP VENTES saxo.png\" alt=\"\"></a>
                    <a href=\"top_v_piano.html\"><img class=\"img-fluid piano_accueil\" src=\"Charte/BODY/TOP VENTES piano.png\" alt=\"\"></a><br>
                    <a class=\"nos_partenaires\">Nos partenaires</a><br>
                    <img class=\"img-fluid logos_partenaires\" src=\"Charte/BODY/partenaires 4 logos.png\" alt=\"\" >
                </div>
            </div>

        </article> 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "villagegreen/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <article class=\"pt-5\">    
            <div class=\"d-none d-xl-block container-fluid\">
                <a href=\"#\"><img class=\"img-fluid pub_guitare\" src=\"Charte/BODY/pub guitare.png\"  alt=\"\"></a>
                <a href=\"#\"><img class=\"img-fluid banniere_droite_prix\" src=\"Charte/BODY/banniere droite prix.png\" alt=\" \"></a>
            </div>  
            <div class=\"d-xl-none container-fluid\">
                <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                      <div class=\"carousel-item active\">
                        <img class=\"d-block w-100\" src=\"Charte/BODY/pub guitare.png\" alt=\"First slide\">
                      </div>
                      <div class=\"carousel-item\">
                        <img class=\"d-block w-100 img-fluid banniere_de_droite_prix\" src=\"Charte/BODY/banniere_prix_mobile.png\" alt=\"Second slide\">
                      </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                      <span class=\"sr-only\"></span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                      <span class=\"sr-only\"></span>
                    </a>
                  </div>
            </div>  
                     
            <div class=\"container-fluid\">
                <img class=\"img-fluid banniere_centre\" src=\"Charte/BODY/banniere centre 4 pictos.png\" alt=\"\"  >
            </div>              
            <div class=\"container-fluid\" name=\"box\">
                <a class=\"cat\"> Nos catégories</a>
            </div>
            <br>
            <div class=\"container-fluid\" name=\"categories\">
                <a href=\"/guitare\">
                <img class=\"img-fluid image_categories\"src=\"Charte/BODY/CATEGORIES guitare.png\" alt=\"\">
                </a>
                <a href=\"/batterie\">
                <img class=\"img-fluid image_categories\"src=\"Charte/BODY/CATEGORIES batterie.png\" alt=\"\">
                </a>
                <a href=\"/clavier\">
                <img class=\"img-fluid image_categories\"src=\"Charte/BODY/CATEGORIES piano.png\" alt=\"\" >
                </a>
                <a href=\"/studio\">
                <img class=\"img-fluid image_categories\"src=\"Charte/BODY/CATEGORIES micro.png\" alt=\"\">
                </a>
                <br>
                <a href=\"/sono\">
                <img class=\"img-fluid image_categories\"src=\"Charte/BODY/CATEGORIES sono.png\" alt=\"\">
                </a>
                <a href=\"/cases\">
                <img class=\"img-fluid image_categories\"src=\"Charte/BODY/CATEGORIES cases.png\" alt=\"\" >
                </a> 
                <a href=\"/accessoires\">
                <img class=\"img-fluid image_categories\" src=\"Charte/BODY/CATEGORIES cable.png\" alt=\"\" >
                </a>
                <a href=\"/vents\">
                <img class=\"img-fluid image_categories\" src=\"Charte/BODY/CATEGORIES saxo.png\" alt=\"\" >
                </a>
                <div class=\"container-fluid d-none d-xl-block\" >
                    <a class=\"m_ventes\">Nos meilleures ventes</a><a class=\"partenaires\">Nos partenaires</a><br>
                    <a href=\"top_v_guitare.html\"><img class=\"img-fluid guitare_accueil\" src=\"Charte/BODY/TOP VENTES guitare.png\" alt=\"\"></a>
                    <a href=\"top_v_saxo.html\"><img class=\"img-fluid saxophone_accueil\" src=\"Charte/BODY/TOP VENTES saxo.png\" alt=\"\"></a>
                    <a href=\"top_v_piano.html\"><img class=\"img-fluid piano_accueil\" src=\"Charte/BODY/TOP VENTES piano.png\" alt=\"\"></a>
                    <img class=\"img-fluid logos_partenaires\" src=\"Charte/BODY/partenaires 4 logos.png\" alt=\"\" >
                </div>
                <div class=\"container-fluid d-xl-none\" >
                    <br><a class=\"meilleures_ventes\">Nos meilleures ventes</a><br>
                    <a href=\"top_v_guitare.html\"><img class=\"img-fluid guitare_accueil\" src=\"Charte/BODY/TOP VENTES guitare.png\" alt=\"\"></a>
                    <a href=\"top_v_saxo.html\"><img class=\"img-fluid saxophone_accueil\" src=\"Charte/BODY/TOP VENTES saxo.png\" alt=\"\"></a>
                    <a href=\"top_v_piano.html\"><img class=\"img-fluid piano_accueil\" src=\"Charte/BODY/TOP VENTES piano.png\" alt=\"\"></a><br>
                    <a class=\"nos_partenaires\">Nos partenaires</a><br>
                    <img class=\"img-fluid logos_partenaires\" src=\"Charte/BODY/partenaires 4 logos.png\" alt=\"\" >
                </div>
            </div>

        </article> 

{% endblock %}", "villagegreen/home.html.twig", "C:\\Users\\Erika\\Desktop\\projets\\village_green2\\village_green\\VillageGreen\\templates\\villagegreen\\home.html.twig");
    }
}
