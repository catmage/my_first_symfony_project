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

/* registration/register.html.twig */
class __TwigTemplate_7dc407e5005a3772e0dceb1fb40fc3fee224b2fd9a4bc218f058d2ba267004a8 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<article>
    <br>
    <br>
    <br>
    <br>
    <form method=\"POST\" action=\"#\">
            <h1 class=\"text-center\">Créer vos identifiants</h1>
                <br>
                <br>
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
                    <div class=\"container form-group row\">
                        <div class=\"col-md-4 offset-md-2 \">
                            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), 'row', ["label" => "Email", "id" => "email", "attr" => ["class" => "form-control"]]);
        echo "
                            <span id=\"missEmail\"></span>
                            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "plainPassword", [], "any", false, false, false, 21), "first", [], "any", false, false, false, 21), 'row', ["label" => "Mot de passe", "id" => "motdepasse", "attr" => ["class" => "form-control"]]);
        echo "
                            <span id=\"missPassword\"></span>
                        </div>
                        <div class=\"col-md-4 offset-md-1 \">
                            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "plainPassword", [], "any", false, false, false, 25), "second", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => "form-control confirmation_motdepasse"]]);
        echo "
                            <label class=\"mdp confi_mdp\" for=\"mdp\">Confirmation de mot de passe</label>
                                           ";
        // line 28
        echo "                        </div>
                            <span class=\"col-md-4 offset-md-2 \" id=\"missMotdepasse\"></span>
                                
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <h1 class=\"text-center\">Créer vos identifiants</h1>
                              <br>
                              <br>
                              <br>
                              <br>
                        <div class=\"col-md-4 container-fluid\"><div class=\"form-group float-left inscription\">
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "firstname", [], "any", false, false, false, 42), 'row', ["label" => "Prenom", "id" => "prenom", "attr" => ["placeholder" => "Prenom", "class" => "form-control"]]);
        echo "
                            <span id=\"missPrenom\"></span>
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "lastname", [], "any", false, false, false, 44), 'row', ["label" => "Nom", "id" => "nom", "attr" => ["class" => "form-control"]]);
        echo "
                            <span id=\"missNom\"></span>
                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "address", [], "any", false, false, false, 46), 'row', ["label" => "Adresse", "id" => "adresse", "attr" => ["class" => "form-control"]]);
        echo "
                            <span id=\"missAdresse\"></span>
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "city", [], "any", false, false, false, 48), 'row', ["label" => "Ville", "id" => "ville", "attr" => ["class" => "form-control"]]);
        echo "
                            <span id=\"missVille\"></span>
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "zipcode", [], "any", false, false, false, 50), 'row', ["label" => "Code postal", "id" => "codepostal", "attr" => ["class" => "form-control"]]);
        echo "
                            <span id=\"missCodepostal\"></span>
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "country", [], "any", false, false, false, 52), 'row', ["label" => "Pays", "id" => "pays", "attr" => ["class" => "form-control"]]);
        echo "
                            <span id=\"missPays\"></span>
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "phone", [], "any", false, false, false, 54), 'row', ["label" => "Numero de telephone", "id" => "telephone", "attr" => ["class" => "form-control"]]);
        echo "
                            <span id=\"missTelephone\"></span>
                            <br>
                            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "agreeTerms", [], "any", false, false, false, 57), 'row', ["label" => "J'accepte les conditions", "id" => "checkbox", "attr" => ["class" => "form-check-input"]]);
        echo "
                            <span id=\"missCheckbox\"></span>
                            <br>
                            <button type=\"submit\" class=\"btn btn-submit\" id=\"boutonenvoi\">Valider</button>
                            ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), 'form_end');
        echo "
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class=\"col-md-5 d-none d-xl-block d-flex\">
                        <img class=\"rounded float-right img_telephone\" src=\"Charte/BODY/ESPACE CLIENT/CADRE numero.png\" alt=\"\" >
                    </div>
                    <br><br><br><br><br><br><br>
                 <img class=\"img-fluid partenaires_inscription\" src=\"Charte/BODY/ESPACE CLIENT/bas de page pictos.png\" alt=\"\">
                        <br>
                        <br>
                        
        ";
        // line 77
        echo "        
    </form>
</article>
";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 80,  185 => 77,  167 => 61,  160 => 57,  154 => 54,  149 => 52,  144 => 50,  139 => 48,  134 => 46,  129 => 44,  124 => 42,  108 => 28,  103 => 25,  96 => 21,  91 => 19,  85 => 16,  74 => 7,  67 => 6,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}


{% block body %}
<article>
    <br>
    <br>
    <br>
    <br>
    <form method=\"POST\" action=\"#\">
            <h1 class=\"text-center\">Créer vos identifiants</h1>
                <br>
                <br>
                {{ form_start(registrationForm) }}
                    <div class=\"container form-group row\">
                        <div class=\"col-md-4 offset-md-2 \">
                            {{ form_row(registrationForm.email, {'label':'Email', 'id':'email', 'attr':{'class':'form-control'}}) }}
                            <span id=\"missEmail\"></span>
                            {{ form_row(registrationForm.plainPassword.first, { 'label': 'Mot de passe', 'id':'motdepasse', 'attr':{'class':'form-control'}}) }}
                            <span id=\"missPassword\"></span>
                        </div>
                        <div class=\"col-md-4 offset-md-1 \">
                            {{form_row(registrationForm.plainPassword.second, { 'attr':{'class':'form-control confirmation_motdepasse'}}) }}
                            <label class=\"mdp confi_mdp\" for=\"mdp\">Confirmation de mot de passe</label>
                                           {# <input type=\"text\" class=\"form-control\" id=\"motdepasse\" placeholder=\"\" required>  #}
                        </div>
                            <span class=\"col-md-4 offset-md-2 \" id=\"missMotdepasse\"></span>
                                
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <h1 class=\"text-center\">Créer vos identifiants</h1>
                              <br>
                              <br>
                              <br>
                              <br>
                        <div class=\"col-md-4 container-fluid\"><div class=\"form-group float-left inscription\">
                            {{ form_row(registrationForm.firstname, {'label':'Prenom', 'id':'prenom', 'attr':{'placeholder':'Prenom', 'class':'form-control'}}) }}
                            <span id=\"missPrenom\"></span>
                            {{ form_row(registrationForm.lastname, {'label':'Nom', 'id':'nom', 'attr':{'class':'form-control'}}) }}
                            <span id=\"missNom\"></span>
                            {{ form_row(registrationForm.address, {'label': 'Adresse', 'id':'adresse',  'attr':{'class':'form-control'}}) }}
                            <span id=\"missAdresse\"></span>
                            {{ form_row(registrationForm.city, {'label': 'Ville', 'id':'ville', 'attr':{'class':'form-control'}}) }}
                            <span id=\"missVille\"></span>
                            {{ form_row(registrationForm.zipcode, {'label': 'Code postal', 'id':'codepostal', 'attr':{'class':'form-control'}}) }}
                            <span id=\"missCodepostal\"></span>
                            {{ form_row(registrationForm.country, {'label': 'Pays', 'id':'pays', 'attr':{'class':'form-control'}}) }}
                            <span id=\"missPays\"></span>
                            {{ form_row(registrationForm.phone, {'label': 'Numero de telephone', 'id':'telephone', 'attr':{'class':'form-control'} })}}
                            <span id=\"missTelephone\"></span>
                            <br>
                            {{ form_row(registrationForm.agreeTerms, {'label':'J\\'accepte les conditions', 'id':'checkbox', 'attr':{'class': 'form-check-input'} }) }}
                            <span id=\"missCheckbox\"></span>
                            <br>
                            <button type=\"submit\" class=\"btn btn-submit\" id=\"boutonenvoi\">Valider</button>
                            {{ form_end(registrationForm) }}
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class=\"col-md-5 d-none d-xl-block d-flex\">
                        <img class=\"rounded float-right img_telephone\" src=\"Charte/BODY/ESPACE CLIENT/CADRE numero.png\" alt=\"\" >
                    </div>
                    <br><br><br><br><br><br><br>
                 <img class=\"img-fluid partenaires_inscription\" src=\"Charte/BODY/ESPACE CLIENT/bas de page pictos.png\" alt=\"\">
                        <br>
                        <br>
                        
        {# </div> #}
        
    </form>
</article>
{% block javascripts %}
{% endblock %}
{% endblock %}


", "registration/register.html.twig", "C:\\Users\\Erika\\Desktop\\projets\\village_green2\\village_green\\VillageGreen\\templates\\registration\\register.html.twig");
    }
}
