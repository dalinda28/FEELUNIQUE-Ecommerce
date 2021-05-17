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

/* pages/home.html.twig */
class __TwigTemplate_a50e82ec862f1a75061638fd199c47f0b65486ab9d1c94d7b39588024591107b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\" style=\"width: 1170px; margin-top: 150px;\">
        <div class=\"row\">
            <div class=\"col-md-6 mt-4\">
                <img class=\"img-responsive\" src=\"./images/autres/blog.png\" alt=\"about\"
                     style=\"display: block; max-width: 100%; height: auto;\">
            </div>
            <div class=\"col-md-6\">
                <h2 style=\"font-family: cursive;\">À propos de notre boutique</h2>
                <p> FEELUNIQUE est une plate-forme internationale de vente d'articles uniques et créatifs. On y trouve tout un univers d'objets particuliers et extraordinaires, de créations faites main et de trésors vintage.</p>
                <p> Dans cette époque ou l'automatisme est de plus en plus présent, nous considérons comme notre devoir de maintenir l'aspect humain du commerce. C'est pourquoi nous avons créé un endroit où la créativité peut s'exprimer et prospérer grâce aux individus. Nous aidons notre communauté de vendeurs à transformer leurs idées en entreprises florissantes. Via notre plate-forme, ils sont connectés à des millions d'acheteurs en quête de choses différentes et particulières, avec une touche humaine, pour ces moments de la vie où l'imagination est nécessaire.</p>
            </div>
        </div>

    </div>
    <footer class=\"text-center text-white mt-5\" style=\"background-color: rgb(239, 240, 241)\">
        <!-- Grid container -->
        <div class=\"container p-4\">
            <!-- Section: Iframe -->
            <section class=\"\">
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"ratio ratio-16x9\">
                            <iframe src=\"http://www.youtube.com/embed/wh5m4Zsl8hg?rel=0\" height=\"360\" width=\"640\"
                                    allowfullscreen=\"\" frameborder=\"0\"></iframe>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Iframe -->
        </div>
        <!-- Grid container -->
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title 'Accueil' %}

{% block body %}
    <div class=\"container\" style=\"width: 1170px; margin-top: 150px;\">
        <div class=\"row\">
            <div class=\"col-md-6 mt-4\">
                <img class=\"img-responsive\" src=\"./images/autres/blog.png\" alt=\"about\"
                     style=\"display: block; max-width: 100%; height: auto;\">
            </div>
            <div class=\"col-md-6\">
                <h2 style=\"font-family: cursive;\">À propos de notre boutique</h2>
                <p> FEELUNIQUE est une plate-forme internationale de vente d'articles uniques et créatifs. On y trouve tout un univers d'objets particuliers et extraordinaires, de créations faites main et de trésors vintage.</p>
                <p> Dans cette époque ou l'automatisme est de plus en plus présent, nous considérons comme notre devoir de maintenir l'aspect humain du commerce. C'est pourquoi nous avons créé un endroit où la créativité peut s'exprimer et prospérer grâce aux individus. Nous aidons notre communauté de vendeurs à transformer leurs idées en entreprises florissantes. Via notre plate-forme, ils sont connectés à des millions d'acheteurs en quête de choses différentes et particulières, avec une touche humaine, pour ces moments de la vie où l'imagination est nécessaire.</p>
            </div>
        </div>

    </div>
    <footer class=\"text-center text-white mt-5\" style=\"background-color: rgb(239, 240, 241)\">
        <!-- Grid container -->
        <div class=\"container p-4\">
            <!-- Section: Iframe -->
            <section class=\"\">
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"ratio ratio-16x9\">
                            <iframe src=\"http://www.youtube.com/embed/wh5m4Zsl8hg?rel=0\" height=\"360\" width=\"640\"
                                    allowfullscreen=\"\" frameborder=\"0\"></iframe>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Iframe -->
        </div>
        <!-- Grid container -->
    </footer>
{% endblock %}", "pages/home.html.twig", "/Users/home/FEELUNIQUE/templates/pages/home.html.twig");
    }
}
