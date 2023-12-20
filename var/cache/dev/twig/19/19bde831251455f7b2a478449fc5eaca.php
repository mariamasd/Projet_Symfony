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

/* security/login.html.twig */
class __TwigTemplate_7300dbf8b8c5f4a0b7bdae1f7cf5c143 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Log in!
\t";
        
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
        echo "\t\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t\t<style>
\t\t\tbody {
\t\t\t\tpadding: 50px;
\t\t\t\tfont-family: 'Roboto', sans-serif;
\t\t\t\tbackground-color: #F5F5F5;
\t\t\t}
\t
\t\t\t.signin {
\t\t\t\tposition: relative;
\t\t\t\theight: 700px;
\t\t\t\twidth: 500px;
\t\t\t\tmargin: auto;
\t\t\t\tbox-shadow: 0 30px 125px -5px #000;
\t\t\t}
\t
\t\t\t.back-img {
\t\t\t\tposition: relative;
\t\t\t\twidth: 100%;
\t\t\t\theight: 250px;
\t\t\t\tbackground: url('https://img.freepik.com/photos-gratuite/experience-pour-biotechnologie-science-chimie_23-2150365003.jpg?w=2000') no-repeat center center;
\t\t\t\tbackground-size: cover;
\t\t\t}
\t
\t\t\t.layer {
\t\t\t\tbackground-color: rgba(33, 150, 243, 0.5);
\t\t\t\tposition: absolute;
\t\t\t\ttop: 0;
\t\t\t\tleft: 0;
\t\t\t\twidth: 100%;
\t\t\t\theight: 100%;
\t\t\t}
\t
\t\t\t.active {
\t\t\t\tpadding-left: 25px;
\t\t\t\tcolor: #fff;
\t\t\t}
\t
\t\t\t.nonactive {
\t\t\t\tcolor: rgba(255, 255, 255, 0.6);
\t\t\t}
\t
\t\t\t.sign-in-text {
\t\t\t\ttop: 175px;
\t\t\t\tposition: absolute;
\t\t\t\tz-index: 1;
\t\t\t}
\t
\t\t\th2 {
\t\t\t\tpadding-left: 15px;
\t\t\t\tfont-size: 25px;
\t\t\t\ttext-transform: uppercase;
\t\t\t\tdisplay: inline-block;
\t\t\t\tfont-weight: 300;
\t\t\t}
\t
\t\t\t.point {
\t\t\t\tposition: absolute;
\t\t\t\tz-index: 1;
\t\t\t\tcolor: #fff;
\t\t\t\ttop: 235px;
\t\t\t\tpadding-left: 50px;
\t\t\t\tfont-size: 20px;
\t\t\t}
\t
\t\t\t/* form-section */
\t\t\t.form-section {
\t\t\t\tpadding: 70px 90px;
\t\t\t}
\t
\t\t\t.keep-text {
\t\t\t\tfont-size: 15px;
\t\t\t\tcolor: #BDBDBD;
\t\t\t}
\t
\t\t\t.forgot-text {
\t\t\t\tfont-size: 12px;
\t\t\t\tcolor: #BDBDBD;
\t\t\t\ttext-align: right;
\t\t\t}
\t
\t\t\t/* sign-in-btn */
\t\t\t.sign-in-btn {
\t\t\t\twidth: 100%;
\t\t\t\theight: 75px;
\t\t\t\tposition: absolute;
\t\t\t\tbottom: 0;
\t\t\t\tborder-radius: 0;
\t\t\t\tbackground-color: rgba(63, 78, 191, 1);
\t\t\t}
\t
\t\t\t.from-signin {
\t\t\t\tborder-radius: 3%;
\t\t\t\tbackground-image: linear-gradient(to right bottom, #e3ecfb, #dce4fb, #d7dcfa, #d5d3f8, #d5caf4);
\t\t\t\tmargin-top: 2rem;
\t\t\t\tpadding: 1rem;
\t\t\t\tbox-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
\t\t\t}
\t\t</style>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 108
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 109
        echo "\t\t<div class=\"signin\">
\t\t\t<div class=\"back-img\">
\t\t\t\t<div class=\"sign-in-text\">
\t\t\t\t\t<h2 class=\"active\">
\t\t\t\t\t\t<a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Sign In
\t\t\t\t\t\t</a>
\t\t\t\t\t</h2>
\t\t\t\t\t<h2 class=\"nonactive\">
\t\t\t\t\t\t<a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">
\t\t\t\t\t\t\tSign Up
\t\t\t\t\t\t</a>
\t\t\t\t\t</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"layer\"></div>
\t\t\t\t<p class=\"point\">&#9650;</p>
\t\t\t</div>
\t\t\t<div class=\"form-section\">
\t\t\t\t<form
\t\t\t\t\tmethod=\"post\" action=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
\t\t\t\t\t<!-- Email -->
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-control-label\">Email</label>
\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"email\" id=\"inputEmail\" placeholder=\"Your email\" required autofocus>
\t\t\t\t\t</div>
\t
\t\t\t\t\t<!-- Password -->
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-control-label\">Password</label>
\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Your password\" required>
\t\t\t\t\t</div>
\t
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t
\t\t\t\t\t<p class=\"forgot-text\">Forgot Password?</p>
\t\t\t\t\t<!-- Checkbox -->
\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"remember_me\" checked>
\t\t\t\t\t\t<span class=\"keep-text\">Keep me Signed In</span>
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"d-grid gap-2\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
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
        return array (  253 => 140,  237 => 127,  224 => 117,  217 => 113,  211 => 109,  201 => 108,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

\t{% block title %}Log in!
\t{% endblock %}
\t
\t{% block stylesheets %}
\t\t{{ parent() }}
\t\t<style>
\t\t\tbody {
\t\t\t\tpadding: 50px;
\t\t\t\tfont-family: 'Roboto', sans-serif;
\t\t\t\tbackground-color: #F5F5F5;
\t\t\t}
\t
\t\t\t.signin {
\t\t\t\tposition: relative;
\t\t\t\theight: 700px;
\t\t\t\twidth: 500px;
\t\t\t\tmargin: auto;
\t\t\t\tbox-shadow: 0 30px 125px -5px #000;
\t\t\t}
\t
\t\t\t.back-img {
\t\t\t\tposition: relative;
\t\t\t\twidth: 100%;
\t\t\t\theight: 250px;
\t\t\t\tbackground: url('https://img.freepik.com/photos-gratuite/experience-pour-biotechnologie-science-chimie_23-2150365003.jpg?w=2000') no-repeat center center;
\t\t\t\tbackground-size: cover;
\t\t\t}
\t
\t\t\t.layer {
\t\t\t\tbackground-color: rgba(33, 150, 243, 0.5);
\t\t\t\tposition: absolute;
\t\t\t\ttop: 0;
\t\t\t\tleft: 0;
\t\t\t\twidth: 100%;
\t\t\t\theight: 100%;
\t\t\t}
\t
\t\t\t.active {
\t\t\t\tpadding-left: 25px;
\t\t\t\tcolor: #fff;
\t\t\t}
\t
\t\t\t.nonactive {
\t\t\t\tcolor: rgba(255, 255, 255, 0.6);
\t\t\t}
\t
\t\t\t.sign-in-text {
\t\t\t\ttop: 175px;
\t\t\t\tposition: absolute;
\t\t\t\tz-index: 1;
\t\t\t}
\t
\t\t\th2 {
\t\t\t\tpadding-left: 15px;
\t\t\t\tfont-size: 25px;
\t\t\t\ttext-transform: uppercase;
\t\t\t\tdisplay: inline-block;
\t\t\t\tfont-weight: 300;
\t\t\t}
\t
\t\t\t.point {
\t\t\t\tposition: absolute;
\t\t\t\tz-index: 1;
\t\t\t\tcolor: #fff;
\t\t\t\ttop: 235px;
\t\t\t\tpadding-left: 50px;
\t\t\t\tfont-size: 20px;
\t\t\t}
\t
\t\t\t/* form-section */
\t\t\t.form-section {
\t\t\t\tpadding: 70px 90px;
\t\t\t}
\t
\t\t\t.keep-text {
\t\t\t\tfont-size: 15px;
\t\t\t\tcolor: #BDBDBD;
\t\t\t}
\t
\t\t\t.forgot-text {
\t\t\t\tfont-size: 12px;
\t\t\t\tcolor: #BDBDBD;
\t\t\t\ttext-align: right;
\t\t\t}
\t
\t\t\t/* sign-in-btn */
\t\t\t.sign-in-btn {
\t\t\t\twidth: 100%;
\t\t\t\theight: 75px;
\t\t\t\tposition: absolute;
\t\t\t\tbottom: 0;
\t\t\t\tborder-radius: 0;
\t\t\t\tbackground-color: rgba(63, 78, 191, 1);
\t\t\t}
\t
\t\t\t.from-signin {
\t\t\t\tborder-radius: 3%;
\t\t\t\tbackground-image: linear-gradient(to right bottom, #e3ecfb, #dce4fb, #d7dcfa, #d5d3f8, #d5caf4);
\t\t\t\tmargin-top: 2rem;
\t\t\t\tpadding: 1rem;
\t\t\t\tbox-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
\t\t\t}
\t\t</style>
\t{% endblock %}
\t
\t{% block container %}
\t\t<div class=\"signin\">
\t\t\t<div class=\"back-img\">
\t\t\t\t<div class=\"sign-in-text\">
\t\t\t\t\t<h2 class=\"active\">
\t\t\t\t\t\t<a href=\"{{path('app_login')}}\">Sign In
\t\t\t\t\t\t</a>
\t\t\t\t\t</h2>
\t\t\t\t\t<h2 class=\"nonactive\">
\t\t\t\t\t\t<a href=\"{{path('app_register')}}\">
\t\t\t\t\t\t\tSign Up
\t\t\t\t\t\t</a>
\t\t\t\t\t</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"layer\"></div>
\t\t\t\t<p class=\"point\">&#9650;</p>
\t\t\t</div>
\t\t\t<div class=\"form-section\">
\t\t\t\t<form
\t\t\t\t\tmethod=\"post\" action=\"{{ path('app_login') }}\">
\t\t\t\t\t<!-- Email -->
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-control-label\">Email</label>
\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"email\" id=\"inputEmail\" placeholder=\"Your email\" required autofocus>
\t\t\t\t\t</div>
\t
\t\t\t\t\t<!-- Password -->
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-control-label\">Password</label>
\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Your password\" required>
\t\t\t\t\t</div>
\t
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t
\t\t\t\t\t<p class=\"forgot-text\">Forgot Password?</p>
\t\t\t\t\t<!-- Checkbox -->
\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"remember_me\" checked>
\t\t\t\t\t\t<span class=\"keep-text\">Keep me Signed In</span>
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"d-grid gap-2\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t{% endblock %}", "security/login.html.twig", "C:\\Users\\mariama.saddoudiallo\\OneDrive - Acelys\\Desktop\\ProjetSymfonyCDA\\laboratoire\\templates\\security\\login.html.twig");
    }
}
