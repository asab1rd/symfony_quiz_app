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

/* quiz/done.html.twig */
class __TwigTemplate_a3ad7cdc7d53b8d2652af531aa8b5ea11767a8573ae2dd3515d743d844e7d073 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/done.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/done.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/done.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Profile!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"row justify-content-around\">
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizzes"]) || array_key_exists("quizzes", $context) ? $context["quizzes"] : (function () { throw new RuntimeError('Variable "quizzes" does not exist.', 5, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 6
            echo "  <div class=\"card w-25 m-1\">
    <!-- Card content -->
    <div
      class=\"card-body ";
            // line 9
            echo ((twig_get_attribute($this->env, $this->source,             // line 10
$context["quiz"], "finished", [], "any", false, false, false, 10)) ? ("success-color-dark white-text") : ("warning-color-dark white-text"));
            // line 13
            echo "  rounded-bottom\"
    >
      <!-- Title -->
      <h4 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["quiz"], "category", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</h4>
      <hr class=\"hr-light\" />
      <!-- Text -->
      <p class=\"card-text white-text mb-4\">
        ";
            // line 20
            echo ((twig_get_attribute($this->env, $this->source, $context["quiz"], "finished", [], "any", false, false, false, 20)) ? ("Finished. Bravo for this category!") : (((("Not
        finished. Current question : " . twig_get_attribute($this->env, $this->source,             // line 21
$context["quiz"], "currentQuestion", [], "any", false, false, false, 21)) . " <br />
        Current score : ") . twig_get_attribute($this->env, $this->source,             // line 22
$context["quiz"], "score", [], "any", false, false, false, 22))));
            echo "
      </p>
      <!-- Link -->
      ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["quiz"], "finished", [], "any", false, false, false, 25)) {
                // line 26
                echo "      <h5>
        Score : ";
                // line 27
                echo ((0 <= twig_compare(twig_get_attribute($this->env, $this->source, $context["quiz"], "score", [], "any", false, false, false, 27), 5)) ? ((twig_get_attribute($this->env, $this->source, $context["quiz"], "score", [], "any", false, false, false, 27) . "
        <i class=\"fas fa-thumbs-up\"></i>")) : ((twig_get_attribute($this->env, $this->source,                 // line 28
$context["quiz"], "score", [], "any", false, false, false, 28) . "
        <i class=\"far fa-thumbs-down\"></i>")));
                // line 29
                echo "
      </h5>
      ";
            } else {
                // line 32
                echo "      <a
        href=\"game/";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["quiz"], "category", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33), "html", null, true);
                echo "\"
        class=\"white-text d-flex justify-content-end\"
      >
        <h5>CONTINUE <i class=\"far fa-arrow-alt-circle-right\"></i></h5>
      </a>
      ";
            }
            // line 39
            echo "    </div>
  </div>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "  <div class=\"row justify-content-around mt-5\">
    <div class=\"alert alert-primary mt-5\" role=\"alert\">
      You have played no quiz at the moment.
      <a
      href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_show_categories");
            echo "\"
      class=\"dark-text d-flex justify-content-end\"
    >
      <h5>PLAY <i class=\"far fa-arrow-alt-circle-right\"></i></h5>
    </a>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quiz/done.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 54,  165 => 46,  159 => 42,  152 => 39,  143 => 33,  140 => 32,  135 => 29,  132 => 28,  130 => 27,  127 => 26,  125 => 25,  119 => 22,  117 => 21,  115 => 20,  108 => 16,  103 => 13,  101 => 10,  100 => 9,  95 => 6,  90 => 5,  86 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}Profile!{% endblock %} {% block
body %}

<div class=\"row justify-content-around\">
  {% for quiz in quizzes %}
  <div class=\"card w-25 m-1\">
    <!-- Card content -->
    <div
      class=\"card-body {{
        quiz.finished
          ? 'success-color-dark white-text'
          : 'warning-color-dark white-text'
      }}  rounded-bottom\"
    >
      <!-- Title -->
      <h4 class=\"card-title\">{{ quiz.category.name }}</h4>
      <hr class=\"hr-light\" />
      <!-- Text -->
      <p class=\"card-text white-text mb-4\">
        {{ (quiz.finished ? 'Finished. Bravo for this category!' : 'Not
        finished. Current question : '~ quiz.currentQuestion ~' <br />
        Current score : ' ~ quiz.score) | raw}}
      </p>
      <!-- Link -->
      {% if quiz.finished %}
      <h5>
        Score : {{ (quiz.score >= 5 ? quiz.score ~ '
        <i class=\"fas fa-thumbs-up\"></i>' : quiz.score ~ '
        <i class=\"far fa-thumbs-down\"></i>') | raw }}
      </h5>
      {% else %}
      <a
        href=\"game/{{ quiz.category.id }}\"
        class=\"white-text d-flex justify-content-end\"
      >
        <h5>CONTINUE <i class=\"far fa-arrow-alt-circle-right\"></i></h5>
      </a>
      {% endif %}
    </div>
  </div>
  {% else %}
  <div class=\"row justify-content-around mt-5\">
    <div class=\"alert alert-primary mt-5\" role=\"alert\">
      You have played no quiz at the moment.
      <a
      href=\"{{ path(\"quiz_show_categories\")}}\"
      class=\"dark-text d-flex justify-content-end\"
    >
      <h5>PLAY <i class=\"far fa-arrow-alt-circle-right\"></i></h5>
    </a>
    </div>
  </div>
  {% endfor %}
</div>
{% endblock %}
", "quiz/done.html.twig", "/Users/artkodes/Projects/MVC_My_Quiz/quizz/templates/quiz/done.html.twig");
    }
}
