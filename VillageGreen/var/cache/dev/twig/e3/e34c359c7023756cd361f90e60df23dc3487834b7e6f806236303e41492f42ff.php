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

/* villagegreen/produits.html.twig */
class __TwigTemplate_c904cf979a111500619ad2da51a7e6b2adf188bd38606c70ee1504632dda3d3a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "villagegreen/produits.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "villagegreen/produits.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Produits";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<br>
<br>
<br>
<section class=\"articles row g-3\">

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "
    
    
    <br>
        <div class=\" card card-fluid col-5 rounded-3 border-5 article-produits\">
        <img src=\" ";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/picture/" . twig_get_attribute($this->env, $this->source, $context["product"], "picture", [], "any", false, false, false, 17))), "html", null, true);
            echo "\" class=\"card-img-top img-fluid img_produits\" alt=\"\">
            <div class=\"card-body\">
                <h2 class=\"card-title\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</h2>
                    
                <p class=\"card-text\">";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["product"], "shortwording", [], "any", false, false, false, 21);
            echo "</p>
                <h3 class=\"card-text prix\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 22), "html", null, true);
            echo "€</h3>
                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"btn btn-submit\">Lire la suite</a>
            </div>
        </div>
        
      
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        <br>
        <br>
        <br>
        <br>
        <br>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "villagegreen/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 29,  109 => 23,  105 => 22,  101 => 21,  96 => 19,  91 => 17,  84 => 12,  80 => 11,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produits{% endblock %}

{% block body %}
<br>
<br>
<br>
<section class=\"articles row g-3\">

    {% for product in products %}

    
    
    <br>
        <div class=\" card card-fluid col-5 rounded-3 border-5 article-produits\">
        <img src=\" {{ asset('uploads/picture/' ~ product.picture) }}\" class=\"card-img-top img-fluid img_produits\" alt=\"\">
            <div class=\"card-body\">
                <h2 class=\"card-title\">{{ product.name }}</h2>
                    
                <p class=\"card-text\">{{ product.shortwording | raw }}</p>
                <h3 class=\"card-text prix\">{{product.price}}€</h3>
                <a href=\"{{ path('show', {'id' : product.id}) }}\" class=\"btn btn-submit\">Lire la suite</a>
            </div>
        </div>
        
      
    {% endfor %}
        <br>
        <br>
        <br>
        <br>
        <br>
</section>
{% endblock %}", "villagegreen/produits.html.twig", "C:\\Users\\Erika\\Desktop\\projets\\village_green\\VillageGreen\\templates\\villagegreen\\produits.html.twig");
    }
}
