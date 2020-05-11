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

/* quiz/quizzes.html.twig */
class __TwigTemplate_42da679c96f24b9b4ace319e9addfe70a7823d22aff6af4aea01fb71205f8899 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/quizzes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/quizzes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/quizzes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<div class=\"container\">
  <div class=\"row justify-content-around mt-5\">
    <div class=\"row flex-column\">
      <h3 class=\"question\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 5, $this->source); })()), "question", [], "any", false, false, false, 5), "html", null, true);
        echo "</h3>
      <form class=\"reponse-form\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["nextRoute"]) || array_key_exists("nextRoute", $context) ? $context["nextRoute"] : (function () { throw new RuntimeError('Variable "nextRoute" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\" method=\"post\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 7, $this->source); })()), "reponses", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 8
            echo "        <div class=\"form-check reponse\">
          <input
            type=\"radio\"
            class=\"form-check-input\"
            name=\"reponse_id\"
            value=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\"
            id=\"reponse";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\"
          />
          <label class=\"form-check-label\" for=\"reponse\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 17
$context["reponse"], "reponse", [], "any", false, false, false, 17), "html", null, true);
            // line 18
            echo "</label>
        </div>
        ";
            // line 25
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        <button type=\"submit\" class=\"btn btn-dark btn-sm btn-rounded mt-5\">
          Submit Response
        </button>
      </form>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quiz/quizzes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 26,  107 => 25,  103 => 18,  101 => 17,  100 => 16,  95 => 14,  91 => 13,  84 => 8,  80 => 7,  76 => 6,  72 => 5,  67 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block body %}
<div class=\"container\">
  <div class=\"row justify-content-around mt-5\">
    <div class=\"row flex-column\">
      <h3 class=\"question\">{{ question.question }}</h3>
      <form class=\"reponse-form\" action=\"{{ nextRoute }}\" method=\"post\">
        {% for reponse in question.reponses %}
        <div class=\"form-check reponse\">
          <input
            type=\"radio\"
            class=\"form-check-input\"
            name=\"reponse_id\"
            value=\"{{ reponse.id }}\"
            id=\"reponse{{ reponse.id }}\"
          />
          <label class=\"form-check-label\" for=\"reponse\">{{
            reponse.reponse
          }}</label>
        </div>
        {#
        <div class=\"reponse\">
          <label for=\"reponse\">{{ reponse.reponse }}</label>
          <input type=\"radio\" name=\"reponse_id\" value=\"{{ reponse.id }}\" />
        </div>
        #} {% endfor %}
        <button type=\"submit\" class=\"btn btn-dark btn-sm btn-rounded mt-5\">
          Submit Response
        </button>
      </form>
    </div>
  </div>
</div>
{% endblock %}
", "quiz/quizzes.html.twig", "/Users/artkodes/Projects/MVC_My_Quiz/quizz/templates/quiz/quizzes.html.twig");
    }
}
