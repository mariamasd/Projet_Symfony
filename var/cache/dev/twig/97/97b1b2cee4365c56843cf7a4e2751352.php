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
class __TwigTemplate_f0ffa97f3b3c44ce1ba9a04dba433418 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'container' => [$this, 'block_container'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<style>
\t\t/* Your registration styles go here */
\t\tbody {
\t\t\tpadding: 50px;
\t\t\tfont-family: 'Roboto', sans-serif;
\t\t\tbackground-color: #F5F5F5;
\t\t}

\t\t.signin {
\t\t\tposition: relative;
\t\t\theight: 700px;
\t\t\twidth: 500px;
\t\t\tmargin: auto;
\t\t\tbox-shadow: 0 30px 125px -5px #000;
\t\t}

\t\t.back-img {
\t\t\tposition: relative;
\t\t\twidth: 100%;
\t\t\theight: 250px;
\t\t\tbackground: url('https://img.freepik.com/photos-gratuite/experience-pour-biotechnologie-science-chimie_23-2150365003.jpg?w=2000') no-repeat center center;
\t\t\tbackground-size: cover;
\t\t}

\t\t.layer {
\t\t\tbackground-color: rgba(33, 150, 243, 0.5);
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\twidth: 100%;
\t\t\theight: 100%;
\t\t}

\t\t.active {
\t\t\tpadding-left: 25px;
\t\t\tcolor: #fff;
\t\t}

\t\t.nonactive {
\t\t\tcolor: rgba(255, 255, 255, 0.6);
\t\t}

\t\t.sign-in-text {
\t\t\ttop: 175px;
\t\t\tposition: absolute;
\t\t\tz-index: 1;
\t\t}

\t\th2 {
\t\t\tpadding-left: 15px;
\t\t\tfont-size: 25px;
\t\t\ttext-transform: uppercase;
\t\t\tdisplay: inline-block;
\t\t\tfont-weight: 300;
\t\t}

\t\t.point {
\t\t\tposition: absolute;
\t\t\tz-index: 1;
\t\t\tcolor: #fff;
\t\t\ttop: 235px;
\t\t\tpadding-left: 50px;
\t\t\tfont-size: 20px;
\t\t}

\t\t/* form-section */
\t\t.form-section {
\t\t\tpadding: 70px 90px;
\t\t}

\t\t.keep-text {
\t\t\tfont-size: 15px;
\t\t\tcolor: #BDBDBD;
\t\t}

\t\t.forgot-text {
\t\t\tfont-size: 12px;
\t\t\tcolor: #BDBDBD;
\t\t\ttext-align: right;
\t\t}

\t\t/* sign-in-btn */
\t\t.sign-in-btn {
\t\t\twidth: 100%;
\t\t\theight: 75px;
\t\t\tposition: absolute;
\t\t\tbottom: 0;
\t\t\tborder-radius: 0;
\t\t\tbackground-color: rgba(63, 78, 191, 1);
\t\t}

\t\t.from-signin {
\t\t\tborder-radius: 3%;
\t\t\tbackground-image: linear-gradient(to right bottom, #e3ecfb, #dce4fb, #d7dcfa, #d5d3f8, #d5caf4);
\t\t\tmargin-top: 2rem;
\t\t\tpadding: 1rem;
\t\t\tbox-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 109
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 110
        echo "\t<div class=\"signin\">
\t\t<div class=\"back-img\">
\t\t\t<div class=\"sign-in-text\">
\t\t\t\t<h2 class=\"nonactive\">
\t\t\t\t\t<a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Sign In
\t\t\t\t\t</a>
\t\t\t\t</h2>
\t\t\t\t<h2 class=\"active\">
\t\t\t\t\t<a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">
\t\t\t\t\t\tSign Up
\t\t\t\t\t</a>
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div class=\"layer\"></div>
\t\t\t<p class=\"point\">&#9650;</p>
\t\t</div>
\t\t<div class=\"form-section\">

\t\t\t";
        // line 128
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'form_start');
        echo "
\t\t\t";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "_token", [], "any", false, false, false, 129), 'widget');
        echo "

\t\t\t<form action=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" method=\"POST\" class=\"col-lg-12 login-form\">
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"InputEmail1\" class=\"form-label\">Adresse Email</label>
\t\t\t\t\t";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "email", [], "any", false, false, false, 134), 'widget');
        echo "
\t\t\t\t\t<div id=\"emailHelp\" class=\"form-text\">Ne confondez pas votre Adresse email.</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"InputEmail1\" class=\"form-label\">Votre prénom</label>
\t\t\t\t\t";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "firstname", [], "any", false, false, false, 139), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"InputEmail1\" class=\"form-label\">Votre nom</label>
\t\t\t\t\t";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "lastname", [], "any", false, false, false, 143), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"InputPassword1\" class=\"form-label\">Mot de Passe</label>
\t\t\t\t\t";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "plainPassword", [], "any", false, false, false, 147), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"InputPassword1\" class=\"form-label\">Accepter les terms de site</label>
\t\t\t\t\t";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "agreeTerms", [], "any", false, false, false, 151), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-text-center\">S'inscrire</button>
\t\t\t</form>

\t\t\t";
        // line 156
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), 'form_end');
        echo "
\t\t</div>
\t\t<div class=\"col-lg-3 col-md-2\"></div>
\t</div>
</div>
<section
\tid=\"4\" style=\" background-color: #007bff; color: white; margin-top: 5vh;\"><!-- Footer content goes here -->
</section>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  290 => 156,  282 => 151,  275 => 147,  268 => 143,  261 => 139,  253 => 134,  247 => 131,  242 => 129,  238 => 128,  225 => 118,  218 => 114,  212 => 110,  202 => 109,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription
{% endblock %}

{% block stylesheets %}
\t{{ parent() }}
\t<style>
\t\t/* Your registration styles go here */
\t\tbody {
\t\t\tpadding: 50px;
\t\t\tfont-family: 'Roboto', sans-serif;
\t\t\tbackground-color: #F5F5F5;
\t\t}

\t\t.signin {
\t\t\tposition: relative;
\t\t\theight: 700px;
\t\t\twidth: 500px;
\t\t\tmargin: auto;
\t\t\tbox-shadow: 0 30px 125px -5px #000;
\t\t}

\t\t.back-img {
\t\t\tposition: relative;
\t\t\twidth: 100%;
\t\t\theight: 250px;
\t\t\tbackground: url('https://img.freepik.com/photos-gratuite/experience-pour-biotechnologie-science-chimie_23-2150365003.jpg?w=2000') no-repeat center center;
\t\t\tbackground-size: cover;
\t\t}

\t\t.layer {
\t\t\tbackground-color: rgba(33, 150, 243, 0.5);
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\twidth: 100%;
\t\t\theight: 100%;
\t\t}

\t\t.active {
\t\t\tpadding-left: 25px;
\t\t\tcolor: #fff;
\t\t}

\t\t.nonactive {
\t\t\tcolor: rgba(255, 255, 255, 0.6);
\t\t}

\t\t.sign-in-text {
\t\t\ttop: 175px;
\t\t\tposition: absolute;
\t\t\tz-index: 1;
\t\t}

\t\th2 {
\t\t\tpadding-left: 15px;
\t\t\tfont-size: 25px;
\t\t\ttext-transform: uppercase;
\t\t\tdisplay: inline-block;
\t\t\tfont-weight: 300;
\t\t}

\t\t.point {
\t\t\tposition: absolute;
\t\t\tz-index: 1;
\t\t\tcolor: #fff;
\t\t\ttop: 235px;
\t\t\tpadding-left: 50px;
\t\t\tfont-size: 20px;
\t\t}

\t\t/* form-section */
\t\t.form-section {
\t\t\tpadding: 70px 90px;
\t\t}

\t\t.keep-text {
\t\t\tfont-size: 15px;
\t\t\tcolor: #BDBDBD;
\t\t}

\t\t.forgot-text {
\t\t\tfont-size: 12px;
\t\t\tcolor: #BDBDBD;
\t\t\ttext-align: right;
\t\t}

\t\t/* sign-in-btn */
\t\t.sign-in-btn {
\t\t\twidth: 100%;
\t\t\theight: 75px;
\t\t\tposition: absolute;
\t\t\tbottom: 0;
\t\t\tborder-radius: 0;
\t\t\tbackground-color: rgba(63, 78, 191, 1);
\t\t}

\t\t.from-signin {
\t\t\tborder-radius: 3%;
\t\t\tbackground-image: linear-gradient(to right bottom, #e3ecfb, #dce4fb, #d7dcfa, #d5d3f8, #d5caf4);
\t\t\tmargin-top: 2rem;
\t\t\tpadding: 1rem;
\t\t\tbox-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
\t\t}
\t</style>
{% endblock %}

{% block container %}
\t<div class=\"signin\">
\t\t<div class=\"back-img\">
\t\t\t<div class=\"sign-in-text\">
\t\t\t\t<h2 class=\"nonactive\">
\t\t\t\t\t<a href=\"{{ path('app_login') }}\">Sign In
\t\t\t\t\t</a>
\t\t\t\t</h2>
\t\t\t\t<h2 class=\"active\">
\t\t\t\t\t<a href=\"{{ path('app_register') }}\">
\t\t\t\t\t\tSign Up
\t\t\t\t\t</a>
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div class=\"layer\"></div>
\t\t\t<p class=\"point\">&#9650;</p>
\t\t</div>
\t\t<div class=\"form-section\">

\t\t\t{{ form_start(form) }}
\t\t\t{{ form_widget(form._token) }}

\t\t\t<form action=\"{{ path('app_register') }}\" method=\"POST\" class=\"col-lg-12 login-form\">
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"InputEmail1\" class=\"form-label\">Adresse Email</label>
\t\t\t\t\t{{ form_widget(form.email) }}
\t\t\t\t\t<div id=\"emailHelp\" class=\"form-text\">Ne confondez pas votre Adresse email.</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"InputEmail1\" class=\"form-label\">Votre prénom</label>
\t\t\t\t\t{{ form_widget(form.firstname) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"InputEmail1\" class=\"form-label\">Votre nom</label>
\t\t\t\t\t{{ form_widget(form.lastname) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"InputPassword1\" class=\"form-label\">Mot de Passe</label>
\t\t\t\t\t{{ form_widget(form.plainPassword) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"InputPassword1\" class=\"form-label\">Accepter les terms de site</label>
\t\t\t\t\t{{ form_widget(form.agreeTerms) }}
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-text-center\">S'inscrire</button>
\t\t\t</form>

\t\t\t{{ form_end(form) }}
\t\t</div>
\t\t<div class=\"col-lg-3 col-md-2\"></div>
\t</div>
</div>
<section
\tid=\"4\" style=\" background-color: #007bff; color: white; margin-top: 5vh;\"><!-- Footer content goes here -->
</section>{% endblock %}
", "registration/register.html.twig", "C:\\Users\\HP\\Desktop\\CFA\\Projet_Symfony\\templates\\registration\\register.html.twig");
    }
}
