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
class __TwigTemplate_19401d9011cdee8d3fdd94d168517d35759218fdf2abb400dbf1d7330a8e7a16 extends \Twig\Template
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
    <div class=\"col-sm-9\">  
   
\t   ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 11
            echo "
\t   \t<div class=\"card\">

\t      <h2>";
            // line 14
            echo $this->getAttribute($context["page"], "title", []);
            echo "</h2>

\t      <h5><span class=\"glyphicon glyphicon-calendar\"></span> ";
            // line 16
            echo twig_date_format_filter($this->env, $this->getAttribute($context["page"], "date", []), "F d, Y");
            echo "</h5>

\t      <p> ";
            // line 18
            echo $this->getAttribute($context["page"], "summary", [0 => 500], "method");
            echo "</p>

\t      <a href=\"";
            // line 20
            echo $this->getAttribute($context["page"], "url", []);
            echo "\" class=\"btn btn-default btn-sm\">
\t          <span class=\"glyphicon glyphicon-arrow-right\"></span> Περισσότερα
          </a>

        </div>

\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
    </div>   

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
        return array (  87 => 27,  74 => 20,  69 => 18,  64 => 16,  59 => 14,  54 => 11,  50 => 10,  45 => 7,  42 => 6,  37 => 2,  35 => 4,  29 => 2,);
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
 
    <div class=\"col-sm-9\">  
   
\t   {% for page in collection %}

\t   \t<div class=\"card\">

\t      <h2>{{page.title}}</h2>

\t      <h5><span class=\"glyphicon glyphicon-calendar\"></span> {{page.date|date('F d, Y')}}</h5>

\t      <p> {{page.summary(500)}}</p>

\t      <a href=\"{{page.url}}\" class=\"btn btn-default btn-sm\">
\t          <span class=\"glyphicon glyphicon-arrow-right\"></span> Περισσότερα
          </a>

        </div>

\t   {% endfor %}

    </div>   

{% endblock %}", "blog.html.twig", "C:\\Program Files\\Ampps\\www\\nature\\user\\themes\\theme-bootstrap\\templates\\blog.html.twig");
    }
}
