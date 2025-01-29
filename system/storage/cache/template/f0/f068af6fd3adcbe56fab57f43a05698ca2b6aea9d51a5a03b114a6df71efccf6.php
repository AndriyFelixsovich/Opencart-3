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

/* multishop/template/common/menu.twig */
class __TwigTemplate_709107ad185bf2c5bccbe508392faf838f50e3bb2a80eeec1285628b8ef3eb4a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["categories"] ?? null)) {
            // line 2
            echo "    <a class=\"btn d-flex align-items-center justify-content-between bg-primary w-100\" data-toggle=\"collapse\"
       href=\"#navbar-vertical\" style=\"height: 65px; padding: 0 30px;\">
        <h6 class=\"text-dark m-0\"><i class=\"fa fa-bars mr-2\"></i>
            ";
            // line 5
            echo ($context["text_category"] ?? null);
            echo "
        </h6>
        <i class=\"fa fa-angle-down text-dark\"></i>
    </a>
    <nav class=\"collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light\"
         id=\"navbar-vertical\" style=\"width: calc(100% - 30px); z-index: 999;\">
        <div class=\"navbar-nav w-100\">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 13
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "                    <div class=\"nav-item dropdown dropright\">
                        <a href=\"";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 15);
                    echo "\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">
                            ";
                    // line 16
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 16);
                    echo "
                            <i class=\"fa fa-angle-right float-right mt-1\"></i></a>
                        <div class=\"dropdown-menu position-absolute rounded-0 border-0 m-0\">
                            ";
                    // line 19
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 19));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 20
                        echo "                            <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 20);
                        echo "\" class=\"dropdown-item\">
                                ";
                        // line 21
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 21);
                        echo "
                            </a>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 24
                    echo "                        </div>
                    </div>
                ";
                } else {
                    // line 27
                    echo "                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 27);
                    echo "\" class=\"nav-item nav-link\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27);
                    echo "</a>
                ";
                }
                // line 29
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </div>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "multishop/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 30,  105 => 29,  97 => 27,  92 => 24,  83 => 21,  78 => 20,  74 => 19,  68 => 16,  64 => 15,  61 => 14,  58 => 13,  54 => 12,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if categories %}
    <a class=\"btn d-flex align-items-center justify-content-between bg-primary w-100\" data-toggle=\"collapse\"
       href=\"#navbar-vertical\" style=\"height: 65px; padding: 0 30px;\">
        <h6 class=\"text-dark m-0\"><i class=\"fa fa-bars mr-2\"></i>
            {{ text_category }}
        </h6>
        <i class=\"fa fa-angle-down text-dark\"></i>
    </a>
    <nav class=\"collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light\"
         id=\"navbar-vertical\" style=\"width: calc(100% - 30px); z-index: 999;\">
        <div class=\"navbar-nav w-100\">
            {% for category in categories %}
                {% if category.children %}
                    <div class=\"nav-item dropdown dropright\">
                        <a href=\"{{ category.href }}\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">
                            {{ category.name }}
                            <i class=\"fa fa-angle-right float-right mt-1\"></i></a>
                        <div class=\"dropdown-menu position-absolute rounded-0 border-0 m-0\">
                            {% for child in category.children %}
                            <a href=\"{{ child.href }}\" class=\"dropdown-item\">
                                {{ child.name }}
                            </a>
                            {% endfor %}
                        </div>
                    </div>
                {% else %}
                    <a href=\"{{ category.href }}\" class=\"nav-item nav-link\">{{ category.name }}</a>
                {% endif %}
            {% endfor %}
        </div>
    </nav>
{% endif %}", "multishop/template/common/menu.twig", "D:\\server6\\OSPanel\\home\\opencart3\\catalog\\view\\theme\\multishop\\template\\common\\menu.twig");
    }
}
