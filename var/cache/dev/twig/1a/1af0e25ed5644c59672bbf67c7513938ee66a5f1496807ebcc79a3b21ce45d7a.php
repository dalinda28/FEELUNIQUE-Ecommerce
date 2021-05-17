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

/* articles/index.html.twig */
class __TwigTemplate_a5b98f8a9147ad8f2cbad9b767f0672c322216a761fce3aeb8d0ae8f01e4e98c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/index.html.twig", 1);
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

        echo "Articles";
        
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
        echo "
    <div class=\"container\">
        <h2>Nos articles</h2>
        <div class=\"row \">

            <div class=\"col-md-3  mt-4\">
                ";
        // line 13
        echo "                 ";
        $this->loadTemplate("articles/filter.html.twig", "articles/index.html.twig", 13)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })())]));
        // line 14
        echo "            </div>

            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 17
            echo "                <div class=\"col-md-3 mt-4\" >

                    <div class=\"card card-product-grid\">
                        ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, $context["article"], "filename", [], "any", false, false, false, 20)) {
                // line 21
                echo "                            <img alt=\"card-img-top\" style=\"height: 250px\" src=\" ";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["article"], "imageFile"), "html", null, true);
                echo "\"
                                 style=\"width: 100%; height: auto;\">
                        ";
            } else {
                // line 24
                echo "                            <img alt=\"card-img-top\" src=\" ";
                echo "./images/articles/empty.jpg";
                echo "\"
                                 style=\"width: 100%; height: auto;\">
                        ";
            }
            // line 27
            echo "                        <div class=\"card-body\" >
                            <figcaption class=\"info-wrap\">
                                <a class=\"text-decoration-none\"
                                   href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 30), "slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\"><h6 class=\"card-title text-dark\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</h6></a>
                                <div>
                                    <p class=\"text-muted\"> ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "categoryType", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
                                </div>
                            </figcaption>
                            <div class=\"font-weight-bold card-text\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "formattedPrice", [], "any", false, false, false, 35), "html", null, true);
            echo " €</div>
                            <div class=\"mt-2\">
                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"
                                   class=\"btn btn-dark float-right\">Ajouter au panier</a>
                                <i class=\"fas fa-shopping-cart\"></i>
                            </div>

                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            <div class=\"m-4\">
";
        // line 48
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "articles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 48,  166 => 46,  151 => 37,  146 => 35,  140 => 32,  133 => 30,  128 => 27,  121 => 24,  114 => 21,  112 => 20,  107 => 17,  103 => 16,  99 => 14,  96 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title 'Articles' %}

{% block body %}

    <div class=\"container\">
        <h2>Nos articles</h2>
        <div class=\"row \">

            <div class=\"col-md-3  mt-4\">
                {# {% include 'articles/filter.html.twig' %}  #}
                 {% include 'articles/filter.html.twig' with {form: form} only %}
            </div>

            {% for article in articles %}
                <div class=\"col-md-3 mt-4\" >

                    <div class=\"card card-product-grid\">
                        {% if article.filename %}
                            <img alt=\"card-img-top\" style=\"height: 250px\" src=\" {{ vich_uploader_asset(article, 'imageFile') }}\"
                                 style=\"width: 100%; height: auto;\">
                        {% else %}
                            <img alt=\"card-img-top\" src=\" {{ './images/articles/empty.jpg' }}\"
                                 style=\"width: 100%; height: auto;\">
                        {% endif %}
                        <div class=\"card-body\" >
                            <figcaption class=\"info-wrap\">
                                <a class=\"text-decoration-none\"
                                   href=\"{{ path('article.show', {id: article.id, slug: article.slug}) }}\"><h6 class=\"card-title text-dark\">{{ article.title }}</h6></a>
                                <div>
                                    <p class=\"text-muted\"> {{ article.categoryType }}</p>
                                </div>
                            </figcaption>
                            <div class=\"font-weight-bold card-text\">{{ article.formattedPrice }} €</div>
                            <div class=\"mt-2\">
                                <a href=\"{{ path('cart_add', {id: article.id}) }}\"
                                   class=\"btn btn-dark float-right\">Ajouter au panier</a>
                                <i class=\"fas fa-shopping-cart\"></i>
                            </div>

                        </div>
                    </div>
                </div>
            {% endfor %}
            <div class=\"m-4\">
{#  {{ knp_pagination_render(articles) }}#}
            </div>
        </div>
    </div>
{% endblock %}", "articles/index.html.twig", "/Users/home/FEELUNIQUE/templates/articles/index.html.twig");
    }
}
