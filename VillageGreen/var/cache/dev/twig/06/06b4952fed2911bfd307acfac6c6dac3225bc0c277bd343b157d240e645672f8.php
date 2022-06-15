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

/* base.html.twig */
class __TwigTemplate_d55604b376d96af7415fc56270510a05e91dfe0dcdc43e3c4fa360da3246115a extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        ";
        // line 6
        echo "<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
   
    <meta charset=\" utf-8 \">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
 
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo " 
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.css"), "html", null, true);
        echo "\"> 
    </head>
    <body>
   

    <div class=\"container\" name=\"background\">
        <header>
            <nav class=\"navbar d-xl-none navbar-dark bg-secondary\">
                <a href=\"/\" class=\"navbar-left\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Charte/HEADER/logo village green.png"), "html", null, true);
        echo "\" class=\"logo_mobile\"></a> 
                <a class=\"navbar-brand\" href=\"#\"></a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                  <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                      <img class=\"nav-link-img\"  src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Charte/HEADER/picto pays.png"), "html", null, true);
        echo "\"  href=\"\">
                      <img class=\"nav-link-img\"  src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Charte/HEADER/picto panier.png"), "html", null, true);
        echo "\"  href=\"\"></li>
                    <li class=\"nav-item\"><a class=\"nav-link \" href=\"#\">Infos</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link \" href=\"#\">Espace client</a></li>
                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">Menu</a>
                      <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" href=\"/produits\">Produits</a>
                        <a class=\"dropdown-item\" href=\"#\">Service</a>
                        <a class=\"dropdown-item\" href=\"#\">Aide</a>
                        <a class=\"dropdown-item\" href=\"#\">A propos</a>
                      </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">Catégories</a>
                        <div class=\"dropdown-menu\">
                          <a class=\"dropdown-item\" href=\"/guitare\">Guitare</a>
                          <a class=\"dropdown-item\" href=\"/batterie\">Batterie</a>
                          <a class=\"dropdown-item\" href=\"/clavier\">Clavier</a>
                          <a class=\"dropdown-item\" href=\"/studio\">Studio</a>
                          <a class=\"dropdown-item\" href=\"/sono\">Sono</a>
                          <a class=\"dropdown-item\" href=\"/eclairage\">Eclairage</a>
                          <a class=\"dropdown-item\" href=\"/dj\">DJ</a>
                          <a class=\"dropdown-item\" href=\"/cases\">Cases</a>
                          <a class=\"dropdown-item\" href=\"/accessoires\">Accessoires</a>
                        </div>
                      </li>
                  </ul>
                </nav>
            <div class=\"d-none d-xl-block d-flex container-fluid\" >

                <div class=\"\">
                    <a href=\"/\"><img class=\"img-fluid img_logo \" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Charte/HEADER/logo village green.png"), "html", null, true);
        echo "\" alt=\" \"></a> 
                </div>
            
                <div class=\"\">

                    <nav class=\"navbar\"> 
                        <a class=\"navzero\" href=\"/inscription\">Inscription</a>
                        <a class=\"navone\" href=\" \">Infos</a>
                        <a class=\"navtwo\" href=\"/login\">Espace client</a>
                        <div class=\"\">
                            <img class=\"nav-link-img\"  src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Charte/HEADER/picto panier.png"), "html", null, true);
        echo "\"  href=\"\">
                            <img class=\"nav-link-img\"  src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Charte/HEADER/picto pays.png"), "html", null, true);
        echo "\"  href=\"\">
                        </div>
                    </nav>
                    
                    <nav class=\"secondary_bar\">
                        <a class=\"secondary \" href=\"/produits\">Produits</a>
                        <a class=\"secondary \" href=\" \">Service</a>
                        <a class=\"secondary \" href=\" \">Aide</a>
                        <a class=\"secondary \" href=\" \">A propos</a>
                    </nav> 
                
                    <nav class=\"dark_navbar bg-dark\">
                        <a class=\"dark\" href=\"Guitare.html\">Guitare</a>
                        <a class=\"dark\" href=\"Batterie.html\">Batterie</a>
                        <a class=\"dark\" href=\"Clavier.html\">Clavier</a>
                        <a class=\"dark\" href=\"Studio.html\">Studio</a>
                        <a class=\"dark\" href=\"Sono.html\">Sono</a>
                        <a class=\"dark\" href=\"Eclairage.html\">Eclairage</a>
                        <a class=\"dark\" href=\"Dj.html\">DJ</a>
                        <a class=\"dark\" href=\"Cases.html\">Cases</a>
                        <a class=\"dark\" href=\"Accessoires.html\">Accessoires</a> 
                    </nav>
                </div>  
                
             </div>
        </header>
        ";
        // line 104
        $this->displayBlock('body', $context, $blocks);
        // line 107
        echo "            <footer>
        <div class=\"container\">
            <img class=\"img-fluid image_footer\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Charte/FOOTER/footer SIMPLE.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
    </footer>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
        ";
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
        // line 119
        echo " 
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.js"), "html", null, true);
        echo "\"></script>


</body>
</html>             ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "VillageGreen";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "            
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 104
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 105
        echo "        
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "           
    
  
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 116,  251 => 115,  243 => 105,  236 => 104,  228 => 17,  221 => 16,  208 => 13,  196 => 120,  193 => 119,  191 => 115,  182 => 109,  178 => 107,  176 => 104,  147 => 78,  143 => 77,  130 => 67,  96 => 36,  92 => 35,  81 => 27,  70 => 19,  67 => 18,  65 => 16,  59 => 13,  50 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
   
    <meta charset=\" utf-8 \">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>{% block title %}VillageGreen{% endblock %}</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
 
        {% block stylesheets %}
            
        {% endblock %} 
        <link rel=\"stylesheet\" href=\"{{ asset('build/app.css') }}\"> 
    </head>
    <body>
   

    <div class=\"container\" name=\"background\">
        <header>
            <nav class=\"navbar d-xl-none navbar-dark bg-secondary\">
                <a href=\"/\" class=\"navbar-left\"><img src=\"{{ asset('Charte/HEADER/logo village green.png') }}\" class=\"logo_mobile\"></a> 
                <a class=\"navbar-brand\" href=\"#\"></a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                  <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                      <img class=\"nav-link-img\"  src=\"{{ asset('Charte/HEADER/picto pays.png') }}\"  href=\"\">
                      <img class=\"nav-link-img\"  src=\"{{ asset('Charte/HEADER/picto panier.png') }}\"  href=\"\"></li>
                    <li class=\"nav-item\"><a class=\"nav-link \" href=\"#\">Infos</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link \" href=\"#\">Espace client</a></li>
                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">Menu</a>
                      <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" href=\"/produits\">Produits</a>
                        <a class=\"dropdown-item\" href=\"#\">Service</a>
                        <a class=\"dropdown-item\" href=\"#\">Aide</a>
                        <a class=\"dropdown-item\" href=\"#\">A propos</a>
                      </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">Catégories</a>
                        <div class=\"dropdown-menu\">
                          <a class=\"dropdown-item\" href=\"/guitare\">Guitare</a>
                          <a class=\"dropdown-item\" href=\"/batterie\">Batterie</a>
                          <a class=\"dropdown-item\" href=\"/clavier\">Clavier</a>
                          <a class=\"dropdown-item\" href=\"/studio\">Studio</a>
                          <a class=\"dropdown-item\" href=\"/sono\">Sono</a>
                          <a class=\"dropdown-item\" href=\"/eclairage\">Eclairage</a>
                          <a class=\"dropdown-item\" href=\"/dj\">DJ</a>
                          <a class=\"dropdown-item\" href=\"/cases\">Cases</a>
                          <a class=\"dropdown-item\" href=\"/accessoires\">Accessoires</a>
                        </div>
                      </li>
                  </ul>
                </nav>
            <div class=\"d-none d-xl-block d-flex container-fluid\" >

                <div class=\"\">
                    <a href=\"/\"><img class=\"img-fluid img_logo \" src=\"{{ asset('Charte/HEADER/logo village green.png') }}\" alt=\" \"></a> 
                </div>
            
                <div class=\"\">

                    <nav class=\"navbar\"> 
                        <a class=\"navzero\" href=\"/inscription\">Inscription</a>
                        <a class=\"navone\" href=\" \">Infos</a>
                        <a class=\"navtwo\" href=\"/login\">Espace client</a>
                        <div class=\"\">
                            <img class=\"nav-link-img\"  src=\"{{ asset('Charte/HEADER/picto panier.png') }}\"  href=\"\">
                            <img class=\"nav-link-img\"  src=\"{{ asset('Charte/HEADER/picto pays.png') }}\"  href=\"\">
                        </div>
                    </nav>
                    
                    <nav class=\"secondary_bar\">
                        <a class=\"secondary \" href=\"/produits\">Produits</a>
                        <a class=\"secondary \" href=\" \">Service</a>
                        <a class=\"secondary \" href=\" \">Aide</a>
                        <a class=\"secondary \" href=\" \">A propos</a>
                    </nav> 
                
                    <nav class=\"dark_navbar bg-dark\">
                        <a class=\"dark\" href=\"Guitare.html\">Guitare</a>
                        <a class=\"dark\" href=\"Batterie.html\">Batterie</a>
                        <a class=\"dark\" href=\"Clavier.html\">Clavier</a>
                        <a class=\"dark\" href=\"Studio.html\">Studio</a>
                        <a class=\"dark\" href=\"Sono.html\">Sono</a>
                        <a class=\"dark\" href=\"Eclairage.html\">Eclairage</a>
                        <a class=\"dark\" href=\"Dj.html\">DJ</a>
                        <a class=\"dark\" href=\"Cases.html\">Cases</a>
                        <a class=\"dark\" href=\"Accessoires.html\">Accessoires</a> 
                    </nav>
                </div>  
                
             </div>
        </header>
        {% block body %}
        
          {% endblock %}
            <footer>
        <div class=\"container\">
            <img class=\"img-fluid image_footer\" src=\"{{ asset('Charte/FOOTER/footer SIMPLE.png') }}\" alt=\"\">
        </div>
    </footer>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
        {% block javascripts %}
           
    
  
        {% endblock %} 
<script src=\"{{ asset('build/app.js') }}\"></script>


</body>
</html>             ", "base.html.twig", "C:\\Users\\Erika\\Desktop\\projets\\village_green2\\village_green\\VillageGreen\\templates\\base.html.twig");
    }
}
