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

/* admin/ListRv.html.twig */
class __TwigTemplate_7871f6842282e2fd8acba27e13fd9c84 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ListRv.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ListRv.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/ListRv.html.twig", 1);
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

        echo "Hello HomeController!
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
        echo "
\t<!DOCTYPE html>
\t<html lang=\"en\">
\t\t<head>
\t\t\t<meta charset=\"UTF-8\">
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t\t<style>
\t\t\t\tbody {
\t\t\t\t\tmargin: 0;
\t\t\t\t\tfont-family: Arial, sans-serif;
\t\t\t\t\tbackground-color: #f0f8ff; /* Light Blue background color */
\t\t\t\t}

\t\t\t\th2 {
\t\t\t\t\ttext-align: center;
\t\t\t\t\tcolor: #000080; /* Navy Blue text color */
\t\t\t\t\tpadding: 20px 0;
\t\t\t\t}

\t\t\t\t.table-container {
\t\t\t\t\twidth: 80%;
\t\t\t\t\tmargin: 0 auto; /* Center the table */
\t\t\t\t\toverflow-x: auto;
\t\t\t\t\tbox-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
\t\t\t\t\tbackground-color: #add8e6; /* Light Blue background color for the table */
\t\t\t\t}

\t\t\t\ttable {
\t\t\t\t\twidth: 100%;
\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\tmargin-top: 20px;
\t\t\t\t}

\t\t\t\tth,
\t\t\t\ttd {
\t\t\t\t\tborder: 1px solid #dddddd;
\t\t\t\t\ttext-align: left;
\t\t\t\t\tpadding: 8px;
\t\t\t\t}

\t\t\t\tth {
\t\t\t\t\tbackground-color: #000080; /* Navy Blue header background color */
\t\t\t\t\tcolor: #ffffff; /* White text color for the header */
\t\t\t\t}
\t\t\t</style>
\t\t</head>
\t\t<body>

\t\t\t<h2>Liste des Rendez-vous</h2>

\t\t\t<div class=\"table-container\">
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\">Identifiant</th>
\t\t\t\t\t\t\t";
        // line 63
        echo "\t\t\t\t\t\t\t<th scope=\"col\">Motif</th>
\t\t\t\t\t\t\t<th scope=\"col\">Analyse</th>
\t\t\t\t\t\t\t<th scope=\"col\">Date du rendezVous</th>
\t\t\t\t\t\t\t<th scope=\"col\">Heure</th>
\t\t\t\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 71
        if (array_key_exists("donnees", $context)) {
            // line 72
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 72, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 73
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"p-2\">";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 74), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t";
                // line 76
                echo "\t\t\t\t\t\t\t\t\t<td class=\"p-2\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "motif", [], "any", false, false, false, 76), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"p-2\">";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "analyses", [], "any", false, false, false, 77), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"p-2\">";
                // line 78
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "creneau", [], "any", false, false, false, 78), "date", [], "any", false, false, false, 78), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"p-2\">";
                // line 79
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "creneau", [], "any", false, false, false, 79), "date", [], "any", false, false, false, 79), "H:i"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"p-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_action", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 84)]), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_action", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-trash3\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t\t\t\t";
        } else {
            // line 94
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"6\">No data available.</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        // line 98
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>

\t\t</body>
\t</html>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/ListRv.html.twig";
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
        return array (  218 => 98,  212 => 94,  209 => 93,  197 => 87,  191 => 84,  183 => 79,  179 => 78,  175 => 77,  170 => 76,  166 => 74,  163 => 73,  158 => 72,  156 => 71,  146 => 63,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!
{% endblock %}

{% block container %}

\t<!DOCTYPE html>
\t<html lang=\"en\">
\t\t<head>
\t\t\t<meta charset=\"UTF-8\">
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t\t<style>
\t\t\t\tbody {
\t\t\t\t\tmargin: 0;
\t\t\t\t\tfont-family: Arial, sans-serif;
\t\t\t\t\tbackground-color: #f0f8ff; /* Light Blue background color */
\t\t\t\t}

\t\t\t\th2 {
\t\t\t\t\ttext-align: center;
\t\t\t\t\tcolor: #000080; /* Navy Blue text color */
\t\t\t\t\tpadding: 20px 0;
\t\t\t\t}

\t\t\t\t.table-container {
\t\t\t\t\twidth: 80%;
\t\t\t\t\tmargin: 0 auto; /* Center the table */
\t\t\t\t\toverflow-x: auto;
\t\t\t\t\tbox-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
\t\t\t\t\tbackground-color: #add8e6; /* Light Blue background color for the table */
\t\t\t\t}

\t\t\t\ttable {
\t\t\t\t\twidth: 100%;
\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\tmargin-top: 20px;
\t\t\t\t}

\t\t\t\tth,
\t\t\t\ttd {
\t\t\t\t\tborder: 1px solid #dddddd;
\t\t\t\t\ttext-align: left;
\t\t\t\t\tpadding: 8px;
\t\t\t\t}

\t\t\t\tth {
\t\t\t\t\tbackground-color: #000080; /* Navy Blue header background color */
\t\t\t\t\tcolor: #ffffff; /* White text color for the header */
\t\t\t\t}
\t\t\t</style>
\t\t</head>
\t\t<body>

\t\t\t<h2>Liste des Rendez-vous</h2>

\t\t\t<div class=\"table-container\">
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\">Identifiant</th>
\t\t\t\t\t\t\t{# <th scope=\"col\">Patient</th> #}
\t\t\t\t\t\t\t<th scope=\"col\">Motif</th>
\t\t\t\t\t\t\t<th scope=\"col\">Analyse</th>
\t\t\t\t\t\t\t<th scope=\"col\">Date du rendezVous</th>
\t\t\t\t\t\t\t<th scope=\"col\">Heure</th>
\t\t\t\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% if donnees is defined %}
\t\t\t\t\t\t\t{% for key, item in donnees %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"p-2\">{{ item.id }}</td>
\t\t\t\t\t\t\t\t\t{# <td class=\"p-2\">{{ item.patient }}</td> #}
\t\t\t\t\t\t\t\t\t<td class=\"p-2\">{{ item.motif }}</td>
\t\t\t\t\t\t\t\t\t<td class=\"p-2\">{{ item.analyses }}</td>
\t\t\t\t\t\t\t\t\t<td class=\"p-2\">{{ item.creneau.date|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t\t<td class=\"p-2\">{{ item.creneau.date|date('H:i') }}</td>
\t\t\t\t\t\t\t\t\t<td class=\"p-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('edit_action', { 'id': item.id }) }}\" class=\"btn btn-warning btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('delete_action', { 'id': item.id }) }}\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-trash3\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"6\">No data available.</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>

\t\t</body>
\t</html>

{% endblock %}
", "admin/ListRv.html.twig", "C:\\Users\\HP\\Desktop\\CFA\\Projet_Symfony\\templates\\admin\\ListRv.html.twig");
    }
}
