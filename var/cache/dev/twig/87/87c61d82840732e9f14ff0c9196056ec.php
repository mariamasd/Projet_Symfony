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

/* admin/dashboard.html.twig */
class __TwigTemplate_a0af7ad9f117c6c7d09b7b5df7514156 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "admin/dashboard.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        echo "Bienvenue dans la page admin
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        // line 7
        echo "\t<div class=\"card-body\">
\t\t<h5 class=\"card-title\">Analyse</h5>
\t\t<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_analyses");
        echo "\" class=\"btn btn-primary\">
\t\t\t<i class=\"bi bi-plus-circle\"></i>Ajouter une Analyse</a>
\t</div>
\t<div class=\"card-body\">
\t\t<h5 class=\"card-title\">rendez vous</h5>
\t\t<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list");
        echo "\" class=\"btn btn-primary\">
\t\t\t<i class=\"bi bi-plus-circle\"></i>Voir les RV</a>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "\t<div class=\"card-body\">
\t\t<h5 class=\"card-title\">Creneau</h5>
\t\t<a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_creneau");
        echo "\" class=\"btn btn-primary\">
\t\t\t<i class=\"bi bi-plus-circle\"></i>Ajouter un creneau</a>
\t</div>
\t<h1>Liste des creneaux</h1>
\t<div class=\"table-responsive\">
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">Identifiant</th>
\t\t\t\t\t";
        // line 32
        echo "\t\t\t\t\t<th scope=\"col\">date Analyse</th>
\t\t\t\t\t<th scope=\"col\">heure
\t\t\t\t\t</th>
\t\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"p-2\">1</td>
\t\t\t\t\t<td class=\"p-2\">2023-08-14</td>
\t\t\t\t\t<td class=\"p-2\">12 : 00
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"p-2\">
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_action", ["id" => "1"]);
        echo "\" class=\"btn btn-warning btn-sm\">
\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_action", ["id" => "1"]);
        echo "\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t<i class=\"bi bi-trash3\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
        // line 63
        echo "
\t\t\t";
        // line 70
        echo "\t\t\t\t";
        // line 90
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
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
        return array (  180 => 90,  178 => 70,  175 => 63,  167 => 52,  161 => 49,  142 => 32,  130 => 22,  126 => 20,  116 => 19,  102 => 14,  94 => 9,  90 => 7,  80 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/admin/my-custom-page.html.twig #}
{% extends '@EasyAdmin/page/content.html.twig' %}

{% block content_title %}Bienvenue dans la page admin
{% endblock %}
{% block page_actions %}
\t<div class=\"card-body\">
\t\t<h5 class=\"card-title\">Analyse</h5>
\t\t<a href=\"{{path('app_analyses')}}\" class=\"btn btn-primary\">
\t\t\t<i class=\"bi bi-plus-circle\"></i>Ajouter une Analyse</a>
\t</div>
\t<div class=\"card-body\">
\t\t<h5 class=\"card-title\">rendez vous</h5>
\t\t<a href=\"{{path('app_list')}}\" class=\"btn btn-primary\">
\t\t\t<i class=\"bi bi-plus-circle\"></i>Voir les RV</a>
\t</div>
{% endblock %}

{% block main %}
\t<div class=\"card-body\">
\t\t<h5 class=\"card-title\">Creneau</h5>
\t\t<a href=\"{{path('app_creneau')}}\" class=\"btn btn-primary\">
\t\t\t<i class=\"bi bi-plus-circle\"></i>Ajouter un creneau</a>
\t</div>
\t<h1>Liste des creneaux</h1>
\t<div class=\"table-responsive\">
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">Identifiant</th>
\t\t\t\t\t{# <th scope=\"col\">Patient</th> #}
\t\t\t\t\t<th scope=\"col\">date Analyse</th>
\t\t\t\t\t<th scope=\"col\">heure
\t\t\t\t\t</th>
\t\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"p-2\">1</td>
\t\t\t\t\t<td class=\"p-2\">2023-08-14</td>
\t\t\t\t\t<td class=\"p-2\">12 : 00
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"p-2\">
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ path('edit_action', { 'id':'1' }) }}\" class=\"btn btn-warning btn-sm\">
\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ path('delete_action', { 'id':'1' }) }}\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t<i class=\"bi bi-trash3\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t{# {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"6\">No data available.55</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %} #}

\t\t\t{# 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if creneaux  is defined %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for key, item in donnees %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"p-2\">{{ item.id }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <td class=\"p-2\">{{ item.patient }}</td> #}
\t\t\t\t{# <td class=\"p-2\">{{ item.date|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"p-2\">{{ item.date|date('H:i') }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('edit_action', { 'id': item.id }) }}\" class=\"btn btn-warning btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('delete_action', { 'id': item.id }) }}\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-trash3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"6\">No data available.55</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %} #}
\t\t\t</tbody>
\t\t</table>
\t</div>
</div>{% endblock %}
", "admin/dashboard.html.twig", "C:\\Users\\mariama.saddoudiallo\\OneDrive - Acelys\\Desktop\\ProjetSymfonyCDA\\laboratoire\\templates\\admin\\dashboard.html.twig");
    }
}
