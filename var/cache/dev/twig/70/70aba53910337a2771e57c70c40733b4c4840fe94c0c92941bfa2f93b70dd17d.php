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

/* cart/index.html.twig */
class __TwigTemplate_d5b602986422156eb5d9536e4b435d3297d244306e6602b44189b79e0cad2fb0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "panier";
        
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
        echo "    <div class=\"container\" style=\"width: 1170px; margin-top: 100px;\">
        <div class=\"bg-light p-3\">
            <h1 class=\"text-center\">Votre panier</h1>
        </div>
        ";
        // line 10
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 10, $this->source); })())), 0))) {
            // line 11
            echo "            <table class=\"table\">
                <form action=\"\" method=\"get\" class=\"cart\">
                    <thead>
                    <tr>
                        <th>Articles</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Frais de livraison</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 25
                echo "                        <tr>
                            <td>
                                <a class=\"text-dark\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 27), "slug", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 27), "title", [], "any", false, false, false, 27), "html", null, true);
                echo "</a>
                            </td>
                            <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 29), "price", [], "any", false, false, false, 29), "html", null, true);
                echo " €</td>
                            <td>
                                <a class=\"btn btn-info\" href= ";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_less", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo ">
                                    -
                                </a>
                                ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 34), "html", null, true);
                echo "

                                <a class=\"btn btn-info\" href= ";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo ">
                                    +
                                </a>
                            </td>

                            <td>Offerte !</td>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 42), "price", [], "any", false, false, false, 42) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 42)), "html", null, true);
                echo " €</td>
                            <td>
                                <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\"
                                        class=\"btn btn-danger btn-sm\">
                                    Supprimer<i class=\"fas fa-trash\"></i>
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan=\"4\" class=\"text-right\">Total :</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 55, $this->source); })()), "html", null, true);
            echo " €</td>
                        <td><a href='";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("save_order");
            echo "' class=\"btn btn-success float-right m-2\">
                                <i class=\"fas fa-check-circle\"></i>
                                Commander
                            </a></td>
                    </tr>
                    </tfoot>
                </form>
            </table>
        ";
        } else {
            // line 65
            echo "            <p> Le panier est vide ! Accédez à la <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
            echo "\"> liste de nos articles </a>. </p>
        ";
        }
        // line 67
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 67,  191 => 65,  179 => 56,  175 => 55,  169 => 51,  156 => 44,  151 => 42,  142 => 36,  137 => 34,  131 => 31,  126 => 29,  119 => 27,  115 => 25,  111 => 24,  96 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title 'panier' %}

{% block body %}
    <div class=\"container\" style=\"width: 1170px; margin-top: 100px;\">
        <div class=\"bg-light p-3\">
            <h1 class=\"text-center\">Votre panier</h1>
        </div>
        {% if items | length > 0 %}
            <table class=\"table\">
                <form action=\"\" method=\"get\" class=\"cart\">
                    <thead>
                    <tr>
                        <th>Articles</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Frais de livraison</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for item in items %}
                        <tr>
                            <td>
                                <a class=\"text-dark\" href=\"{{ path('article.show', {id: item.article.id, slug: item.article.slug}) }}\">{{ item.article.title }}</a>
                            </td>
                            <td>{{ item.article.price }} €</td>
                            <td>
                                <a class=\"btn btn-info\" href= {{ path('cart_less' , {'id': item.article.id} ) }}>
                                    -
                                </a>
                                {{ item.quantity }}

                                <a class=\"btn btn-info\" href= {{ path('cart_add' , {'id': item.article.id} ) }}>
                                    +
                                </a>
                            </td>

                            <td>Offerte !</td>
                            <td>{{ item.article.price * item.quantity }} €</td>
                            <td>
                                <a href=\"{{ path('cart_remove', {'id': item.article.id}) }}\"
                                        class=\"btn btn-danger btn-sm\">
                                    Supprimer<i class=\"fas fa-trash\"></i>
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan=\"4\" class=\"text-right\">Total :</td>
                        <td>{{ total }} €</td>
                        <td><a href='{{ path('save_order') }}' class=\"btn btn-success float-right m-2\">
                                <i class=\"fas fa-check-circle\"></i>
                                Commander
                            </a></td>
                    </tr>
                    </tfoot>
                </form>
            </table>
        {% else %}
            <p> Le panier est vide ! Accédez à la <a href=\"{{ path('articles') }}\"> liste de nos articles </a>. </p>
        {% endif %}
    </div>
{% endblock %}", "cart/index.html.twig", "/Users/home/FEELUNIQUE/templates/cart/index.html.twig");
    }
}
