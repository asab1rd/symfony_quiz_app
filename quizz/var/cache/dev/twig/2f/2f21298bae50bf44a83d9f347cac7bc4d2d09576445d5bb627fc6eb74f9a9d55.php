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

/* security/dashboard.html.twig */
class __TwigTemplate_550154f4df958059144e041766b4434412e2a098c841998ff46bcaaf05a624d8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/dashboard.html.twig", 1);
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

        echo "Log in!";
        
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
        echo "<div class=\"container\">
  <div class=\"d-flex justify-content-around mt-4\">
    <h3 class=\"text-dark\">Users Stats</h3>
  </div>
  <hr class=\"hr-dark\" />
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            echo " ";
            $context["isAnonymous"] = (twig_get_attribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 8) === "anonymous");
            // line 10
            echo "  <div class=\"card user m-3\">
    <div
      class=\"card-body ";
            // line 12
            echo ((            // line 13
(isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 13, $this->source); })())) ? ("primary-color-dark
          warning-color") : ("elegant-color text-white"));
            // line 17
            echo "  rounded-bottom\"
    >
      <h4 class=\"card-title\">
        ";
            // line 20
            echo twig_escape_filter($this->env, (((isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 20, $this->source); })())) ? (("Anonymous : " . twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 20))) : (("Email : " . twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 20)))), "html", null, true);
            echo "
      </h4>
      <hr class=\"hr-light\" />
      <div class=\"card-user-info\">
        ";
            // line 24
            if ((isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 24, $this->source); })())) {
                // line 25
                echo "        <p class=\"mb-4\">
          This user is an anonymous user and will be deleted soon
        </p>
        ";
            }
            // line 28
            echo " ";
            // line 29
            echo " ";
            $context["lastQuiz"] = 0;
            echo " ";
            $context["doneQuizzes"] = 0;
            // line 30
            echo " ";
            $context["notFinished"] = 0;
            $context["bestScore"] = 0;
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(            // line 31
(isset($context["quizzes"]) || array_key_exists("quizzes", $context) ? $context["quizzes"] : (function () { throw new RuntimeError('Variable "quizzes" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
                echo " ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["quiz"], "user", [], "any", false, false, false, 31), $context["user"])) {
                    echo " ";
                    $context["bestScore"] = ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["quiz"], "score", [], "any", false, false, false, 31),                     // line 32
(isset($context["bestScore"]) || array_key_exists("bestScore", $context) ? $context["bestScore"] : (function () { throw new RuntimeError('Variable "bestScore" does not exist.', 32, $this->source); })()))) ? (twig_get_attribute($this->env, $this->source, $context["quiz"], "score", [], "any", false, false, false, 32)) : ((isset($context["bestScore"]) || array_key_exists("bestScore", $context) ? $context["bestScore"] : (function () { throw new RuntimeError('Variable "bestScore" does not exist.', 32, $this->source); })())));
                    echo " ";
                    $context["doneQuizzes"] = ((isset($context["doneQuizzes"]) || array_key_exists("doneQuizzes", $context) ? $context["doneQuizzes"] : (function () { throw new RuntimeError('Variable "doneQuizzes" does not exist.', 32, $this->source); })()) + 1);
                    // line 33
                    echo " ";
                    $context["notFinished"] = ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["quiz"], "finished", [], "any", false, false, false, 33), 0)) ? (((isset($context["notFinished"]) || array_key_exists("notFinished", $context) ? $context["notFinished"] : (function () { throw new RuntimeError('Variable "notFinished" does not exist.', 33, $this->source); })()) + 1)) : (                    // line 34
(isset($context["notFinished"]) || array_key_exists("notFinished", $context) ? $context["notFinished"] : (function () { throw new RuntimeError('Variable "notFinished" does not exist.', 34, $this->source); })())));
                    echo " ";
                    $context["lastQuiz"] = $context["quiz"];
                    echo " ";
                }
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
        <p class=\"mb-2\">TOTAL DONE QUIZZES : ";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["doneQuizzes"]) || array_key_exists("doneQuizzes", $context) ? $context["doneQuizzes"] : (function () { throw new RuntimeError('Variable "doneQuizzes" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "</p>
        ";
            // line 37
            if (1 === twig_compare((isset($context["notFinished"]) || array_key_exists("notFinished", $context) ? $context["notFinished"] : (function () { throw new RuntimeError('Variable "notFinished" does not exist.', 37, $this->source); })()), 0)) {
                // line 38
                echo "        <p class=\"mb-2\">NOT FINISHED QUIZZES : ";
                echo twig_escape_filter($this->env, (isset($context["notFinished"]) || array_key_exists("notFinished", $context) ? $context["notFinished"] : (function () { throw new RuntimeError('Variable "notFinished" does not exist.', 38, $this->source); })()), "html", null, true);
                echo "</p>
        ";
            }
            // line 40
            echo "        <p class=\"mb-2\">BEST SCORE : ";
            echo twig_escape_filter($this->env, (isset($context["bestScore"]) || array_key_exists("bestScore", $context) ? $context["bestScore"] : (function () { throw new RuntimeError('Variable "bestScore" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "</p>
        ";
            // line 41
            if ( !((isset($context["lastQuiz"]) || array_key_exists("lastQuiz", $context) ? $context["lastQuiz"] : (function () { throw new RuntimeError('Variable "lastQuiz" does not exist.', 41, $this->source); })()) === 0)) {
                // line 42
                echo "        <p class=\"mb-2\">LAST QUIZ : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lastQuiz"]) || array_key_exists("lastQuiz", $context) ? $context["lastQuiz"] : (function () { throw new RuntimeError('Variable "lastQuiz" does not exist.', 42, $this->source); })()), "category", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
                echo "</p>
        ";
            }
            // line 44
            echo "      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 48,  191 => 44,  185 => 42,  183 => 41,  178 => 40,  172 => 38,  170 => 37,  166 => 36,  163 => 35,  152 => 34,  150 => 33,  146 => 32,  140 => 31,  134 => 30,  129 => 29,  127 => 28,  121 => 25,  119 => 24,  112 => 20,  107 => 17,  104 => 13,  103 => 12,  99 => 10,  93 => 8,  86 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}Log in!{% endblock %} {% block
body %}
<div class=\"container\">
  <div class=\"d-flex justify-content-around mt-4\">
    <h3 class=\"text-dark\">Users Stats</h3>
  </div>
  <hr class=\"hr-dark\" />
  {% for user in users %} {% set isAnonymous = user.status is same as
  (\"anonymous\") %}
  <div class=\"card user m-3\">
    <div
      class=\"card-body {{
        isAnonymous
          ? 'primary-color-dark
          warning-color'
          : 'elegant-color text-white'
      }}  rounded-bottom\"
    >
      <h4 class=\"card-title\">
        {{ isAnonymous ? \"Anonymous : \" ~ user.email : \"Email : \" ~ user.email }}
      </h4>
      <hr class=\"hr-light\" />
      <div class=\"card-user-info\">
        {% if isAnonymous %}
        <p class=\"mb-4\">
          This user is an anonymous user and will be deleted soon
        </p>
        {% endif %} {####################### QUIZZ ANALYSIS
        ########################} {% set lastQuiz = 0 %} {% set doneQuizzes = 0
        %} {% set notFinished = 0 %}{% set bestScore = 0 %} {% for quiz in
        quizzes %} {% if quiz.user == user %} {% set bestScore = quiz.score >
        bestScore ? quiz.score : bestScore %} {% set doneQuizzes = doneQuizzes +
        1 %} {% set notFinished = quiz.finished == 0 ? notFinished + 1 :
        notFinished %} {% set lastQuiz = quiz %} {% endif %} {% endfor %}

        <p class=\"mb-2\">TOTAL DONE QUIZZES : {{ doneQuizzes }}</p>
        {% if notFinished > 0 %}
        <p class=\"mb-2\">NOT FINISHED QUIZZES : {{ notFinished }}</p>
        {% endif %}
        <p class=\"mb-2\">BEST SCORE : {{ bestScore }}</p>
        {% if lastQuiz is not same as(0) %}
        <p class=\"mb-2\">LAST QUIZ : {{ lastQuiz.category.name }}</p>
        {% endif %}
      </div>
    </div>
  </div>
  {% endfor %}
</div>
{% endblock body %}
", "security/dashboard.html.twig", "/Users/artkodes/Projects/MVC_My_Quiz/quizz/templates/security/dashboard.html.twig");
    }
}
