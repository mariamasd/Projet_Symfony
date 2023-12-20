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

/* user/index.html.twig */
class __TwigTemplate_a9ca1629b4d7317b4de86557185cdd1c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        echo "Profile patient!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 7
        echo "\t<nav class=\"navbar navbar-expand-lg bg-color fixed-top\" style=\"background-color: #007bff;\">
\t\t<div class=\"container-fluid d-flex justify-content-between align-items-center\">
\t\t\t<div>
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Labo-logo.png"), "html", null, true);
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
        // line 22
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", ["_route"], "method", false, false, false, 22) == "app_home")) ? ("active") : (""));
        echo "\" href=\"#1\" style=\"color: white; margin-right:1em; font-size: 1em;\">
\t\t\t\t\t\t\t<i class=\"bi bi-person-circle\"></i>
\t\t\t\t\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "firstname", [], "any", false, false, false, 24), "html", null, true);
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t<section style=\"margin-top: 100px;\">
\t\t<div class=\"d-flex align-items-start\">
\t\t\t<div class=\"nav flex-column nav-pills me-3\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t\t<button class=\"nav-link active\" id=\"v-pills-home-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-home\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">Home</button>
\t\t\t\t<button class=\"nav-link\" id=\"v-pills-profile-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-profile\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Mes rendez vous</button>
\t\t\t\t<button class=\"nav-link\" id=\"v-pills-disabled-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-disabled\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-disabled\" aria-selected=\"false\">Planing</button>
\t\t\t\t<button class=\"nav-link\" id=\"v-pills-messages-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-messages\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">Messages</button>
\t\t\t\t<div style=\"margin-top:500px;margin-left:15px;font-size:32px;\">
\t\t\t\t\t<a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t\t\t\t<button class=\"nav-link mt-25\" id=\"v-pills-settings-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-settings\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">
\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-left\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"tab-content\" id=\"v-pills-tabContent\">
\t\t\t\t<div class=\"tab-pane fade show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\" tabindex=\"0\">
\t\t\t\t\t<section id=\"1\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12\" style=\"background: linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.1)), url('";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image1.webp"), "html", null, true);
        echo "') no-repeat center/cover; height: 80vh; display: flex; flex-direction: column; align-items: center; justify-content: center; width: 200vh; height:100vh\">
\t\t\t\t\t\t\t\t\t<div style=\"text-align: center; color: white;\">
\t\t\t\t\t\t\t\t\t\t<h1 style=\"font-size: 3em; color: #007bff;\">SOINS MÉDICAUX SANS RDV</h1>
\t\t\t\t\t\t\t\t\t\t<h3 style=\"font-size: 1.5em; color: #0056b3;\">POUR ADULTES ET ENFANTS</h3>
\t\t\t\t\t\t\t\t\t\t<p style=\"color: #003366;\">Lundi - Samedi : 7h00 - 19h30</p>
\t\t\t\t\t\t\t\t\t\t<p style=\"color: #00284d;\">Dimanche : 7h00 - 16h30</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<a href=";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rendez_vous");
        echo " style=\"display: inline-block; background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;\">Réserver</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-profile\" role=\"tabpanel\" aria-labelledby=\"v-pills-profile-tab\" tabindex=\"0\">
\t\t\t\t\t<div class=\"card w-75 mb-3\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">RendezVous</h5>
\t\t\t\t\t\t\t<a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rendez_vous");
        echo "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-plus-circle\"></i>Prendre un rendez Vous</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<h2>Liste des Rendez-vous</h2>

\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Identifiant</th>
\t\t\t\t\t\t\t\t\t";
        // line 86
        echo "\t\t\t\t\t\t\t\t\t<th scope=\"col\">Motif</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Analyse</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Date du rendezVous</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Heure</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 94
        if (array_key_exists("donnees", $context)) {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 95, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 96
                echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"p-2\">";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 97), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 99
                echo "\t\t\t\t\t\t\t\t\t\t\t<td class=\"p-2\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "motif", [], "any", false, false, false, 99), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"p-2\">";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "analyses", [], "any", false, false, false, 100), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"p-2\">";
                // line 101
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "creneau", [], "any", false, false, false, 101), "date", [], "any", false, false, false, 101), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"p-2\">";
                // line 102
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "creneau", [], "any", false, false, false, 102), "date", [], "any", false, false, false, 102), "H:i"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_action", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 107)]), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_action", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-trash3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "\t\t\t\t\t\t\t\t";
        } else {
            // line 117
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"6\">No data available.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        // line 121
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-disabled\" role=\"tabpanel\" aria-labelledby=\"v-pills-disabled-tab\" tabindex=\"0\">dETAIL</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-messages\" role=\"tabpanel\" aria-labelledby=\"v-pills-messages-tab\" tabindex=\"0\">mESSAGE</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-settings\" role=\"tabpanel\" aria-labelledby=\"v-pills-settings-tab\" tabindex=\"0\"></div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/index.html.twig";
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
        return array (  265 => 121,  259 => 117,  256 => 116,  244 => 110,  238 => 107,  230 => 102,  226 => 101,  222 => 100,  217 => 99,  213 => 97,  210 => 96,  205 => 95,  203 => 94,  193 => 86,  177 => 72,  163 => 61,  152 => 53,  136 => 40,  117 => 24,  112 => 22,  98 => 11,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile patient!
{% endblock %}

{% block container %}
\t<nav class=\"navbar navbar-expand-lg bg-color fixed-top\" style=\"background-color: #007bff;\">
\t\t<div class=\"container-fluid d-flex justify-content-between align-items-center\">
\t\t\t<div>
\t\t\t\t<a class=\"navbar-brand\" href=\"{{path('app_home')}}\">
\t\t\t\t\t<img src=\"{{ asset('images/Labo-logo.png') }}\" width=\"100px\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<h1 style=\"color: white; text-transform: uppercase; font-size: 2em; font-family: 'Kdam Thmor Pro', sans-serif;\">Laboratoire médicale</h1>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_home' ? 'active' : '' }}\" href=\"#1\" style=\"color: white; margin-right:1em; font-size: 1em;\">
\t\t\t\t\t\t\t<i class=\"bi bi-person-circle\"></i>
\t\t\t\t\t\t\t{{ user.firstname }}
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t<section style=\"margin-top: 100px;\">
\t\t<div class=\"d-flex align-items-start\">
\t\t\t<div class=\"nav flex-column nav-pills me-3\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t\t<button class=\"nav-link active\" id=\"v-pills-home-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-home\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">Home</button>
\t\t\t\t<button class=\"nav-link\" id=\"v-pills-profile-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-profile\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Mes rendez vous</button>
\t\t\t\t<button class=\"nav-link\" id=\"v-pills-disabled-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-disabled\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-disabled\" aria-selected=\"false\">Planing</button>
\t\t\t\t<button class=\"nav-link\" id=\"v-pills-messages-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-messages\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">Messages</button>
\t\t\t\t<div style=\"margin-top:500px;margin-left:15px;font-size:32px;\">
\t\t\t\t\t<a href=\"{{path(\"app_logout\")}}\">
\t\t\t\t\t\t<button class=\"nav-link mt-25\" id=\"v-pills-settings-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-settings\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">
\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-left\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"tab-content\" id=\"v-pills-tabContent\">
\t\t\t\t<div class=\"tab-pane fade show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\" tabindex=\"0\">
\t\t\t\t\t<section id=\"1\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12\" style=\"background: linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.1)), url('{{ asset('images/image1.webp') }}') no-repeat center/cover; height: 80vh; display: flex; flex-direction: column; align-items: center; justify-content: center; width: 200vh; height:100vh\">
\t\t\t\t\t\t\t\t\t<div style=\"text-align: center; color: white;\">
\t\t\t\t\t\t\t\t\t\t<h1 style=\"font-size: 3em; color: #007bff;\">SOINS MÉDICAUX SANS RDV</h1>
\t\t\t\t\t\t\t\t\t\t<h3 style=\"font-size: 1.5em; color: #0056b3;\">POUR ADULTES ET ENFANTS</h3>
\t\t\t\t\t\t\t\t\t\t<p style=\"color: #003366;\">Lundi - Samedi : 7h00 - 19h30</p>
\t\t\t\t\t\t\t\t\t\t<p style=\"color: #00284d;\">Dimanche : 7h00 - 16h30</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<a href={{path('app_rendez_vous')}} style=\"display: inline-block; background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;\">Réserver</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-profile\" role=\"tabpanel\" aria-labelledby=\"v-pills-profile-tab\" tabindex=\"0\">
\t\t\t\t\t<div class=\"card w-75 mb-3\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">RendezVous</h5>
\t\t\t\t\t\t\t<a href=\"{{ path('app_rendez_vous') }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-plus-circle\"></i>Prendre un rendez Vous</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<h2>Liste des Rendez-vous</h2>

\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Identifiant</th>
\t\t\t\t\t\t\t\t\t{# <th scope=\"col\">Patient</th> #}
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Motif</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Analyse</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Date du rendezVous</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Heure</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t{% if donnees is defined %}
\t\t\t\t\t\t\t\t\t{% for key, item in donnees %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"p-2\">{{ item.id }}</td>
\t\t\t\t\t\t\t\t\t\t\t{# <td class=\"p-2\">{{ item.patient }}</td> #}
\t\t\t\t\t\t\t\t\t\t\t<td class=\"p-2\">{{ item.motif }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"p-2\">{{ item.analyses }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"p-2\">{{ item.creneau.date|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"p-2\">{{ item.creneau.date|date('H:i') }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('edit_action', { 'id': item.id }) }}\" class=\"btn btn-warning btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('delete_action', { 'id': item.id }) }}\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-trash3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"6\">No data available.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-disabled\" role=\"tabpanel\" aria-labelledby=\"v-pills-disabled-tab\" tabindex=\"0\">dETAIL</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-messages\" role=\"tabpanel\" aria-labelledby=\"v-pills-messages-tab\" tabindex=\"0\">mESSAGE</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-settings\" role=\"tabpanel\" aria-labelledby=\"v-pills-settings-tab\" tabindex=\"0\"></div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "user/index.html.twig", "C:\\Users\\HP\\Desktop\\CFA\\Projet_Symfony\\templates\\user\\index.html.twig");
    }
}
