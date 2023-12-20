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

/* contact/index.html.twig */
class __TwigTemplate_8ab645cbc2ab8149029360e3a6c8364b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        echo "Contact";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "<style type=\"text/css\">
        body{
            background: #fff1c1;
        }
        .contact-form{
            background: #fff;
            margin-top: 10%;
            margin-bottom: 5%;
            width: 70%;
        }
        .contact-form .form-control{
            border-radius:1rem;
        }
        .contact-image{
            text-align: center;
        }
        .contact-image img{
            border-radius: 6rem;
            width: 11%;
            margin-top: -3%;
            transform: rotate(29deg);
        }
        .contact-form form{
            padding: 14%;
        }
        .contact-form form .row{
            margin-bottom: -7%;
        }
        .contact-form h3{
            margin-bottom: 8%;
            margin-top: -10%;
            text-align: center;
            color: #0062cc;
        }
        .contact-form .btnContact {
            width: 50%;
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            background: #dc3545;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
        }
        .btnContactSubmit
        {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            color: #fff;
            background-color: #0062cc;
            border: none;
            cursor: pointer;
        }    </style>

<nav id=\"nav-1\" class=\"navbar navbar-expand-lg bg-color fixed-top\" style=\"background-color: #007bff;\">
\t\t<div class=\"container-fluid d-flex justify-content-between align-items-center\">
\t\t\t<div>
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 65
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
        // line 76
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "request", [], "any", false, false, false, 76), "get", ["_route"], "method", false, false, false, 76) == "app_home")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" style=\"color: white; margin-right:1em; font-size: 0.8em;\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
        // line 79
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "request", [], "any", false, false, false, 79), "get", ["_route"], "method", false, false, false, 79) == "a_propos")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">A Propos</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
        // line 82
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "request", [], "any", false, false, false, 82), "get", ["_route"], "method", false, false, false, 82) == "services")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Services</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
        // line 85
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "request", [], "any", false, false, false, 85), "get", ["_route"], "method", false, false, false, 85) == "contact")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" style=\"color: white; margin-right:1em; font-size: 0.8em; margin-left:1em;\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 87
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87)) {
            // line 88
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<button class=\"btn btn-danger\"><a class=\"nav-link text-uppercase ";
            // line 89
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "get", ["_route"], "method", false, false, false, 89) == "app_logout")) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Déconnexion</a></button>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 91
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91)) {
                // line 92
                echo "\t\t\t\t\t\t\t";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SECRETAIRE")) {
                    // line 93
                    echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
                    // line 94
                    echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "request", [], "any", false, false, false, 94), "get", ["_route"], "method", false, false, false, 94) == "app_logout")) ? ("active") : (""));
                    echo "\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("secretaire");
                    echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Dasbord</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PATIENT")) {
                    // line 97
                    echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
                    // line 98
                    echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "request", [], "any", false, false, false, 98), "get", ["_route"], "method", false, false, false, 98) == "app_logout")) ? ("active") : (""));
                    echo "\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                    echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Dasbord</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LABORANTIN")) {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
                    // line 102
                    echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "request", [], "any", false, false, false, 102), "get", ["_route"], "method", false, false, false, 102) == "app_logout")) ? ("active") : (""));
                    echo "\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("laborantin");
                    echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Dasbord</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                }
                // line 105
                echo "\t\t\t\t\t\t";
            }
            // line 106
            echo "
\t\t\t\t\t";
        } else {
            // line 108
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t    <button type=\"button\" class=\"btn btn-outline-success\">\t<a class=\"nav-link text-uppercase ";
            // line 109
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "request", [], "any", false, false, false, 109), "get", ["_route"], "method", false, false, false, 109) == "app_login")) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Se connecter</a></button>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 113
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
    <div class=\"container contact-form\">
        <div class=\"contact-image\">
            <img src=\"https://image.ibb.co/kUagtU/rocket_contact.png\" alt=\"rocket_contact\"/>
        </div>
        <form method=\"post\">
            <h3>Contactez nous!</h3>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"txtName\" class=\"form-control\" placeholder=\"Votre Nom *\" value=\"\" />
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"txtEmail\" class=\"form-control\" placeholder=\"Votre Email *\" value=\"\" />
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"txtPhone\" class=\"form-control\" placeholder=\"Votre téléphone *\" value=\"\" />
                    </div>
                    <div class=\"form-group\">
                        <br><br>
                        <input type=\"submit\" name=\"btnSubmit\" class=\"btnContact\" value=\"Envoyer\" />
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <textarea name=\"txtMsg\" class=\"form-control\" placeholder=\"Votre Message *\" style=\"width: 100%; height: 150px;\"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
  <section id=\"4\" style=\"background-color: #007bff; color: white; margin-top: 5vh;\">
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
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Home</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">About</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"";
        // line 175
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "contact/index.html.twig";
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
        return array (  336 => 175,  330 => 172,  321 => 166,  266 => 113,  257 => 109,  254 => 108,  250 => 106,  247 => 105,  239 => 102,  236 => 101,  228 => 98,  225 => 97,  217 => 94,  214 => 93,  211 => 92,  209 => 91,  202 => 89,  199 => 88,  197 => 87,  190 => 85,  182 => 82,  174 => 79,  166 => 76,  152 => 65,  148 => 64,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact{% endblock %}

{% block container %}
<style type=\"text/css\">
        body{
            background: #fff1c1;
        }
        .contact-form{
            background: #fff;
            margin-top: 10%;
            margin-bottom: 5%;
            width: 70%;
        }
        .contact-form .form-control{
            border-radius:1rem;
        }
        .contact-image{
            text-align: center;
        }
        .contact-image img{
            border-radius: 6rem;
            width: 11%;
            margin-top: -3%;
            transform: rotate(29deg);
        }
        .contact-form form{
            padding: 14%;
        }
        .contact-form form .row{
            margin-bottom: -7%;
        }
        .contact-form h3{
            margin-bottom: 8%;
            margin-top: -10%;
            text-align: center;
            color: #0062cc;
        }
        .contact-form .btnContact {
            width: 50%;
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            background: #dc3545;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
        }
        .btnContactSubmit
        {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            color: #fff;
            background-color: #0062cc;
            border: none;
            cursor: pointer;
        }    </style>

<nav id=\"nav-1\" class=\"navbar navbar-expand-lg bg-color fixed-top\" style=\"background-color: #007bff;\">
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
\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_home' ? 'active' : '' }}\" href=\"{{ path('app_home') }}\" style=\"color: white; margin-right:1em; font-size: 0.8em;\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'a_propos' ? 'active' : '' }}\" href=\"{{ path('app_home') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">A Propos</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'services' ? 'active' : '' }}\" href=\"{{ path('app_home') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Services</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'contact' ? 'active' : '' }}\" href=\"{{ path('app_contact') }}\" style=\"color: white; margin-right:1em; font-size: 0.8em; margin-left:1em;\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<button class=\"btn btn-danger\"><a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_logout' ? 'active' : '' }}\" href=\"{{ path('app_logout') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Déconnexion</a></button>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t{% if is_granted('ROLE_SECRETAIRE') %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_logout' ? 'active' : '' }}\" href=\"{{ path('secretaire') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Dasbord</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% elseif is_granted('ROLE_PATIENT') %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_logout' ? 'active' : '' }}\" href=\"{{ path('admin') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Dasbord</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% elseif is_granted('ROLE_LABORANTIN') %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_logout' ? 'active' : '' }}\" href=\"{{ path('laborantin') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Dasbord</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t    <button type=\"button\" class=\"btn btn-outline-success\">\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_login' ? 'active' : '' }}\" href=\"{{ path('app_login') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Se connecter</a></button>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
    <div class=\"container contact-form\">
        <div class=\"contact-image\">
            <img src=\"https://image.ibb.co/kUagtU/rocket_contact.png\" alt=\"rocket_contact\"/>
        </div>
        <form method=\"post\">
            <h3>Contactez nous!</h3>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"txtName\" class=\"form-control\" placeholder=\"Votre Nom *\" value=\"\" />
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"txtEmail\" class=\"form-control\" placeholder=\"Votre Email *\" value=\"\" />
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"txtPhone\" class=\"form-control\" placeholder=\"Votre téléphone *\" value=\"\" />
                    </div>
                    <div class=\"form-group\">
                        <br><br>
                        <input type=\"submit\" name=\"btnSubmit\" class=\"btnContact\" value=\"Envoyer\" />
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <textarea name=\"txtMsg\" class=\"form-control\" placeholder=\"Votre Message *\" style=\"width: 100%; height: 150px;\"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
  <section id=\"4\" style=\"background-color: #007bff; color: white; margin-top: 5vh;\">
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
{% endblock %}", "contact/index.html.twig", "C:\\Users\\HP\\Desktop\\CFA\\Projet_Symfony\\templates\\contact\\index.html.twig");
    }
}
