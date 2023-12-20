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
\t\t\t\theight: 600px;
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
        echo "\t<nav id=\"nav-1\" class=\"navbar navbar-expand-lg bg-color fixed-top\" style=\"background-color: #007bff;\">
\t\t<div class=\"container-fluid d-flex justify-content-between align-items-center\">
\t\t\t<div>
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo1.jpg"), "html", null, true);
        echo "\" width=\"100px\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<h1 style=\"color: white; text-transform: uppercase; font-size: 2em; font-family: 'Kdam Thmor Pro', sans-serif;\">Laboratoire médicale</h1>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
        // line 124
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "request", [], "any", false, false, false, 124), "get", ["_route"], "method", false, false, false, 124) == "app_home")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" style=\"color: white; margin-right:1em; font-size: 0.8em;\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
        // line 127
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "request", [], "any", false, false, false, 127), "get", ["_route"], "method", false, false, false, 127) == "a_propos")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">A Propos</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
        // line 130
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "request", [], "any", false, false, false, 130), "get", ["_route"], "method", false, false, false, 130) == "services")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Services</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase \" href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 137
        echo "\t\t\t\t\t";
        // line 164
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
\t\t<div class=\"signin\">
\t\t\t<div class=\"back-img\">
\t\t\t\t<div class=\"sign-in-text\">
\t\t\t\t\t<h2 class=\"active\">
\t\t\t\t\t\t<a  class=\"btn btn-success\" href=\"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Se connecter
\t\t\t\t\t\t</a>
\t\t\t\t\t</h2>
\t\t\t\t\t<h2 class=\"nonactive\">
\t\t\t\t\t\t<a  class=\"btn btn-danger\" href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">
\t\t\t\t\t\t\tCreer votre compte
\t\t\t\t\t\t</a>
\t\t\t\t\t</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"layer\"></div>
\t\t\t\t<p class=\"point\">&#9650;</p>
\t\t\t</div>
\t\t\t<div class=\"form-section\">
\t\t\t\t<form
\t\t\t\t\tmethod=\"post\" action=\"";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
\t\t\t\t\t<!-- Email -->
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-control-label\">Email</label>
\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"email\" id=\"inputEmail\" placeholder=\"Votre mail\" required autofocus>
\t\t\t\t\t</div>
\t
\t\t\t\t\t<!-- Password -->
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-control-label\">mot de pass</label>
\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Votre mot de pass\" required>
\t\t\t\t\t</div>
\t
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t
\t\t\t\t\t
\t\t\t\t\t<!-- Checkbox -->
\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"remember_me\" checked>
\t\t\t\t\t\t<span class=\"keep-text\">Keep me Signed In</span>
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"d-grid gap-2\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t<section id=\"4\" style=\"background-color: #007bff; color: white; margin-top: 5vh;\">
\t\t<div>
\t\t\t
\t\t\t<footer class=\"w-100 py-4 flex-shrink-0\">
\t\t\t\t<div class=\"container py-4\">
\t\t\t\t\t<div class=\"row gy-4 gx-5\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t<h5 class=\"h4\">LABORATOIRE MÉDICALE
                             </h5>
                               <p class=\"small\">Nos équipes de biologistes, techniciens préleveurs et secrétaires médicales sont présents pour vous accompagner tout au long de votre parcours de soins.</p>

\t\t\t\t\t\t\t<p class=\"small mb-0\">&copy; Copyrights. All rights reserved.
\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">CDA </a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6\">
\t\t\t\t\t\t\t<h5 class=\"mb-3\">Quick links</h5>
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"";
        // line 232
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Home</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">About</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"";
        // line 238
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"";
        // line 241
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">FAQ</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6\">
\t\t\t\t\t\t\t<h5 class=\"mb-3\">RECRUTEMENT
                               </h5>
\t\t\t\t\t\t\t   <h6>Rejoignez-nous</h6>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t<h5 class=\"mb-3\">Newsletter</h5>
\t\t\t\t\t\t\t<p class=\"small\">Abounnez à nous Newsletter</p>
\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"votre email\" aria-label=\"Recipient's username\" aria-describedby=\"button-addon2\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" id=\"button-addon2\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paper-plane\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t</div>
\t</section>
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
        return array (  362 => 241,  356 => 238,  347 => 232,  311 => 199,  295 => 186,  282 => 176,  275 => 172,  265 => 164,  263 => 137,  258 => 133,  250 => 130,  242 => 127,  234 => 124,  220 => 113,  216 => 112,  211 => 109,  201 => 108,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
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
\t\t\t\theight: 600px;
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
\t<nav id=\"nav-1\" class=\"navbar navbar-expand-lg bg-color fixed-top\" style=\"background-color: #007bff;\">
\t\t<div class=\"container-fluid d-flex justify-content-between align-items-center\">
\t\t\t<div>
\t\t\t\t<a class=\"navbar-brand\" href=\"{{path('app_home')}}\">
\t\t\t\t\t<img src=\"{{ asset('images/logo1.jpg') }}\" width=\"100px\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<h1 style=\"color: white; text-transform: uppercase; font-size: 2em; font-family: 'Kdam Thmor Pro', sans-serif;\">Laboratoire médicale</h1>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_home' ? 'active' : '' }}\" href=\"{{path('app_home')}}\" style=\"color: white; margin-right:1em; font-size: 0.8em;\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'a_propos' ? 'active' : '' }}\" href=\"{{path('app_home')}}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">A Propos</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'services' ? 'active' : '' }}\" href=\"{{path('app_home')}}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Services</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase \" href=\"{{path('app_contact')}}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t\t{# <li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase \" href=\"{{path('app_contact')}}\" style=\"color: white; margin-right:1em; font-size: 0.8em; margin-left:1em;\">Contact</a></li> #}
\t\t\t\t\t{# {% if app.user %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_logout' ? 'active' : '' }}\" href=\"{{ path('app_logout') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Déconnexion</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_SECRETAIRE') %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_logout' ? 'active' : '' }}\" href=\"{{ path('secretaire') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Dasbord</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif is_granted('ROLE_PATIENT') %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_logout' ? 'active' : '' }}\" href=\"{{ path('admin') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Dasbord</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif is_granted('ROLE_LABORANTIN') %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_logout' ? 'active' : '' }}\" href=\"{{ path('laborantin') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Dasbord</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_login' ? 'active' : '' }}\" href=\"{{ path('app_login') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Se connecter</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_register' ? 'active' : '' }}\" href=\"{{ path('app_register') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Inscription</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %} #}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
\t\t<div class=\"signin\">
\t\t\t<div class=\"back-img\">
\t\t\t\t<div class=\"sign-in-text\">
\t\t\t\t\t<h2 class=\"active\">
\t\t\t\t\t\t<a  class=\"btn btn-success\" href=\"{{path('app_login')}}\">Se connecter
\t\t\t\t\t\t</a>
\t\t\t\t\t</h2>
\t\t\t\t\t<h2 class=\"nonactive\">
\t\t\t\t\t\t<a  class=\"btn btn-danger\" href=\"{{path('app_register')}}\">
\t\t\t\t\t\t\tCreer votre compte
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
\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"email\" id=\"inputEmail\" placeholder=\"Votre mail\" required autofocus>
\t\t\t\t\t</div>
\t
\t\t\t\t\t<!-- Password -->
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-control-label\">mot de pass</label>
\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Votre mot de pass\" required>
\t\t\t\t\t</div>
\t
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t
\t\t\t\t\t
\t\t\t\t\t<!-- Checkbox -->
\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"remember_me\" checked>
\t\t\t\t\t\t<span class=\"keep-text\">Keep me Signed In</span>
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"d-grid gap-2\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t<section id=\"4\" style=\"background-color: #007bff; color: white; margin-top: 5vh;\">
\t\t<div>
\t\t\t
\t\t\t<footer class=\"w-100 py-4 flex-shrink-0\">
\t\t\t\t<div class=\"container py-4\">
\t\t\t\t\t<div class=\"row gy-4 gx-5\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t<h5 class=\"h4\">LABORATOIRE MÉDICALE
                             </h5>
                               <p class=\"small\">Nos équipes de biologistes, techniciens préleveurs et secrétaires médicales sont présents pour vous accompagner tout au long de votre parcours de soins.</p>

\t\t\t\t\t\t\t<p class=\"small mb-0\">&copy; Copyrights. All rights reserved.
\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">CDA </a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6\">
\t\t\t\t\t\t\t<h5 class=\"mb-3\">Quick links</h5>
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"{{ path('app_logout') }}\">Home</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">About</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"{{ path('app_contact') }}\">Contact</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"{{ path('app_logout') }}\">FAQ</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6\">
\t\t\t\t\t\t\t<h5 class=\"mb-3\">RECRUTEMENT
                               </h5>
\t\t\t\t\t\t\t   <h6>Rejoignez-nous</h6>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t<h5 class=\"mb-3\">Newsletter</h5>
\t\t\t\t\t\t\t<p class=\"small\">Abounnez à nous Newsletter</p>
\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"votre email\" aria-label=\"Recipient's username\" aria-describedby=\"button-addon2\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" id=\"button-addon2\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paper-plane\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t</div>
\t</section>
\t{% endblock %}", "security/login.html.twig", "C:\\Users\\HP\\Desktop\\CFA\\Projet_Symfony\\templates\\security\\login.html.twig");
    }
}
