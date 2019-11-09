<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* blog.html.twig */
class __TwigTemplate_89ed0facc2c1af0aaad55507e895f69927de0880ab367f54b7936825c5093a16 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 4
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 2
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        // line 7
        echo "
      
\t   ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 10
            echo "
\t   \t<div class=\"row\">

\t\t    <div class=\"col-sm-12\">

\t\t\t      <h2>";
            // line 15
            echo $this->getAttribute($context["page"], "title", []);
            echo "</h2>

\t\t\t      <h5><span class=\"glyphicon glyphicon-calendar\"></span> ";
            // line 17
            echo twig_date_format_filter($this->env, $this->getAttribute($context["page"], "date", []), "F d, Y");
            echo "</h5>

\t\t\t      <p> ";
            // line 19
            echo $this->getAttribute($context["page"], "summary", [0 => 500], "method");
            echo "</p>

\t\t\t      <a href=\"";
            // line 21
            echo $this->getAttribute($context["page"], "url", []);
            echo "\" class=\"btn btn-default btn-sm\">
\t\t\t          <span class=\"glyphicon glyphicon-arrow-right\"></span> Περισσότερα
\t\t\t      </a>

\t\t\t</div>

        </div>
\t      
\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
\t   ";
        // line 31
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 32
            echo "
\t\t    ";
            // line 33
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 33)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 34
            echo "    
\t   ";
        }
        // line 36
        echo "   
    

";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 36,  100 => 34,  98 => 33,  95 => 32,  93 => 31,  90 => 30,  75 => 21,  70 => 19,  65 => 17,  60 => 15,  53 => 10,  49 => 9,  45 => 7,  42 => 6,  37 => 2,  35 => 4,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'partials/base.html.twig' %}

{% set collection=page.collection() %}

{% block content %}

      
\t   {% for page in collection %}

\t   \t<div class=\"row\">

\t\t    <div class=\"col-sm-12\">

\t\t\t      <h2>{{page.title}}</h2>

\t\t\t      <h5><span class=\"glyphicon glyphicon-calendar\"></span> {{page.date|date('F d, Y')}}</h5>

\t\t\t      <p> {{page.summary(500)}}</p>

\t\t\t      <a href=\"{{page.url}}\" class=\"btn btn-default btn-sm\">
\t\t\t          <span class=\"glyphicon glyphicon-arrow-right\"></span> Περισσότερα
\t\t\t      </a>

\t\t\t</div>

        </div>
\t      
\t   {% endfor %}

\t   {% if config.plugins.pagination.enabled and collection.params.pagination %}

\t\t    {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
    
\t   {% endif %}
   
    

{% endblock %}", "blog.html.twig", "C:\\Program Files\\Ampps\\www\\nature\\user\\themes\\theme-bootstrap\\templates\\blog.html.twig");
    }
}
