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

/* analyses/index.html.twig */
class __TwigTemplate_ce567dc203ed00f0312cfafa035d9910 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "analyses/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "analyses/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "analyses/index.html.twig", 1);
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

        echo "Analyses
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
        echo "        <nav class=\"navbar navbar-expand-lg bg-color fixed-top\" style=\"background-color: #007bff;\">
            <div class=\"container-fluid d-flex justify-content-between align-items-center\">
                <div>
                    <a class=\"navbar-brand\" href=\"#\">
                        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Labo-logo.png"), "html", null, true);
        echo "\" width=\"100px\">
                    </a>
                </div>
                <h1 style=\"color: white; text-transform: uppercase; font-size: 2em; font-family: 'Kdam Thmor Pro', sans-serif;\">Laboratoire médicale</h1>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
    
                ";
        // line 28
        echo "            </div>
        </nav>
        <section style=\"margin-top: 100px;\">
    
            <h1>Analyses</h1>
            <style>
                .form-border {
                    height: 100vh;
                    width: 200vh;
                    border: 1px solid blue;
                    border-radius: 5px;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }
    
                .form-label {
                    border-radius: 5px;
                }
    
                button[type=\"submit\"] {
                    background-color: blue;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    padding: 10px 20px;
                    cursor: pointer;
                    margin-top: 20px;
                }
            </style>
            <h1>Ajouter une analyses</h1>
            ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_start', ["attr" => ["class" => "form-border"]]);
        echo "
                 ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "nom", [], "any", false, false, false, 60), 'row', ["label_attr" => ["class" => "form-label"]]);
        echo "
                 ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "type", [], "any", false, false, false, 61), 'row', ["label_attr" => ["class" => "form-label"]]);
        echo "
                 <button type=\"submit\">Submit</button>
                 ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        echo "
    
    
        </section>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "analyses/index.html.twig";
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
        return array (  152 => 63,  147 => 61,  143 => 60,  139 => 59,  106 => 28,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

    {% block title %}Analyses
    {% endblock %}
    
    {% block container %}
        <nav class=\"navbar navbar-expand-lg bg-color fixed-top\" style=\"background-color: #007bff;\">
            <div class=\"container-fluid d-flex justify-content-between align-items-center\">
                <div>
                    <a class=\"navbar-brand\" href=\"#\">
                        <img src=\"{{ asset('images/Labo-logo.png') }}\" width=\"100px\">
                    </a>
                </div>
                <h1 style=\"color: white; text-transform: uppercase; font-size: 2em; font-family: 'Kdam Thmor Pro', sans-serif;\">Laboratoire médicale</h1>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
    
                {# <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                                    <ul class=\"navbar-nav ms-auto\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_home' ? 'active' : '' }}\" href=\"{{path(\"admin\")}}\" style=\"color: white; margin-right:1em; font-size: 1em;\">
                                                Dashbord
                                            </a>
                                        </li>
                                    </ul>
                                </div> #}
            </div>
        </nav>
        <section style=\"margin-top: 100px;\">
    
            <h1>Analyses</h1>
            <style>
                .form-border {
                    height: 100vh;
                    width: 200vh;
                    border: 1px solid blue;
                    border-radius: 5px;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }
    
                .form-label {
                    border-radius: 5px;
                }
    
                button[type=\"submit\"] {
                    background-color: blue;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    padding: 10px 20px;
                    cursor: pointer;
                    margin-top: 20px;
                }
            </style>
            <h1>Ajouter une analyses</h1>
            {{ form_start(form, {'attr': {'class': 'form-border'}}) }}
                 {{ form_row(form.nom, {'label_attr': {'class': 'form-label'}}) }}
                 {{ form_row(form.type, {'label_attr': {'class': 'form-label'}}) }}
                 <button type=\"submit\">Submit</button>
                 {{ form_end(form) }}
    
    
        </section>
    {% endblock %}
    ", "analyses/index.html.twig", "C:\\Users\\HP\\Desktop\\CFA\\Projet_Symfony\\templates\\analyses\\index.html.twig");
    }
}
