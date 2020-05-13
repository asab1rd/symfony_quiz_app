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
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 54
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
            echo "\">Dashboard</a>
              </li>
              ";
        }
        // line 58
        echo "              <li class=\"nav-item\">
                ";
        // line 59
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 60
            echo "                <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_quizzes");
            echo "\">Profile</a>
                ";
        } else {
            // line 62
            echo "                <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_quizzes");
            echo "\">Results</a>

                ";
        }
        // line 65
        echo "              </li>

            </div>
            ";
        // line 68
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 69
            echo "            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">LOGOUT</a>
            </li>
            ";
        } else {
            // line 73
            echo "            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">LOGIN</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">REGISTER</a>
            </li>
            ";
        }
        // line 80
        echo "          </ul>

          ";
        // line 82
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 83
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
        // line 94
        echo "        </div>
        <!-- Collapsible content -->
      </nav>
    </div>
    <!--/.Navbar-->
    ";
        // line 99
        $this->displayBlock('body', $context, $blocks);
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 100
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

    // line 99
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
        return array (  246 => 99,  228 => 6,  209 => 5,  197 => 100,  193 => 99,  186 => 94,  173 => 83,  171 => 82,  167 => 80,  161 => 77,  155 => 74,  152 => 73,  146 => 70,  143 => 69,  141 => 68,  136 => 65,  129 => 62,  123 => 60,  121 => 59,  118 => 58,  112 => 55,  109 => 54,  107 => 53,  102 => 51,  89 => 41,  60 => 14,  57 => 6,  53 => 5,  47 => 1,);
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
              {% if is_granted('ROLE_ADMIN') %}
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path(\"app_dashboard\") }}\">Dashboard</a>
              </li>
              {% endif %}
              <li class=\"nav-item\">
                {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                <a class=\"nav-link\" href=\"{{ path(\"app_my_quizzes\") }}\">Profile</a>
                {% else %}
                <a class=\"nav-link\" href=\"{{ path(\"app_my_quizzes\") }}\">Results</a>

                {% endif %}
              </li>

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
