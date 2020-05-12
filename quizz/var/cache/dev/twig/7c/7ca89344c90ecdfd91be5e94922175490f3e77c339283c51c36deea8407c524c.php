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

/* base.html.twig */
class __TwigTemplate_0e3cb873c6603205e688047308c35c10a02892663cece026518ecef654e1ae22 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        echo " ";
        // line 14
        echo "    <!-- Font Awesome -->
    <link
      rel=\"stylesheet\"
      href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\"
    />
    <!-- Google Fonts -->
    <link
      rel=\"stylesheet\"
      href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\"
    />
    <!-- Bootstrap core CSS -->
    <link
      href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css\"
      rel=\"stylesheet\"
    />
    <!-- Material Design Bootstrap -->
    <link
      href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css\"
      rel=\"stylesheet\"
    />
    <link rel=\"stylesheet\" href=\"/main.css\" />
  </head>
  <body>
    <div class=\"container-fluid m-0 p-0\">
      <!--Navbar-->
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <!-- Navbar brand -->
        <a class=\"navbar-brand\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Tha QUIZ</a>

        <!-- Collapse button -->

        <!-- Collapsible content -->
        <div class=\"collapse navbar-collapse\" id=\"basicExampleNav\">
          <!-- Links -->
          <ul class=\"navbar-nav d-flex justify-content-between w-100 ml-2\">
            <div class=\"d-flex\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home </a>
              </li>
              ";
        // line 53
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 54
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_quizzes");
            echo "\">Profile</a>
              </li>
              ";
        }
        // line 58
        echo "            </div>
            ";
        // line 59
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 60
            echo "            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">LOGOUT</a>
            </li>
            ";
        } else {
            // line 64
            echo "            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">LOGIN</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">REGISTER</a>
            </li>
            ";
        }
        // line 71
        echo "          </ul>

          ";
        // line 73
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 74
            echo "          <form class=\"form-inline\">
            <div class=\"md-form my-0\">
              <input
                class=\"form-control mr-sm-2\"
                type=\"text\"
                placeholder=\"Search\"
                aria-label=\"Search\"
              />
            </div>
          </form>
          ";
        }
        // line 85
        echo "        </div>
        <!-- Collapsible content -->
      </nav>
    </div>
    <!--/.Navbar-->
    ";
        // line 90
        $this->displayBlock('body', $context, $blocks);
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 90,  208 => 6,  189 => 5,  177 => 91,  173 => 90,  166 => 85,  153 => 74,  151 => 73,  147 => 71,  141 => 68,  135 => 65,  132 => 64,  126 => 61,  123 => 60,  121 => 59,  118 => 58,  112 => 55,  109 => 54,  107 => 53,  102 => 51,  89 => 41,  60 => 14,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %} {#
    <link
      rel=\"stylesheet\"
      href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
      integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\"
      crossorigin=\"anonymous\"
    />
    #}
    <!-- Font Awesome -->
    <link
      rel=\"stylesheet\"
      href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\"
    />
    <!-- Google Fonts -->
    <link
      rel=\"stylesheet\"
      href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\"
    />
    <!-- Bootstrap core CSS -->
    <link
      href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css\"
      rel=\"stylesheet\"
    />
    <!-- Material Design Bootstrap -->
    <link
      href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css\"
      rel=\"stylesheet\"
    />
    <link rel=\"stylesheet\" href=\"/main.css\" />
  </head>
  <body>
    <div class=\"container-fluid m-0 p-0\">
      <!--Navbar-->
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <!-- Navbar brand -->
        <a class=\"navbar-brand\" href=\"{{ path(\"app_home\") }}\">Tha QUIZ</a>

        <!-- Collapse button -->

        <!-- Collapsible content -->
        <div class=\"collapse navbar-collapse\" id=\"basicExampleNav\">
          <!-- Links -->
          <ul class=\"navbar-nav d-flex justify-content-between w-100 ml-2\">
            <div class=\"d-flex\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path(\"app_home\") }}\">Home </a>
              </li>
              {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path(\"app_my_quizzes\") }}\">Profile</a>
              </li>
              {% endif %}
            </div>
            {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path(\"app_logout\") }}\">LOGOUT</a>
            </li>
            {% else %}
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path(\"app_login\") }}\">LOGIN</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path(\"app_register\") }}\">REGISTER</a>
            </li>
            {% endif %}
          </ul>

          {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
          <form class=\"form-inline\">
            <div class=\"md-form my-0\">
              <input
                class=\"form-control mr-sm-2\"
                type=\"text\"
                placeholder=\"Search\"
                aria-label=\"Search\"
              />
            </div>
          </form>
          {% endif %}
        </div>
        <!-- Collapsible content -->
      </nav>
    </div>
    <!--/.Navbar-->
    {% block body %}{% endblock %} {% block javascripts %}{% endblock %}
  </body>
</html>
", "base.html.twig", "/Users/artkodes/Projects/MVC_My_Quiz/quizz/templates/base.html.twig");
    }
}
