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

/* partials/base.html.twig */
class __TwigTemplate_8a4238b518c76ba25539305dbf7928ab80e8d102778f0de035d35f9deb8fbe60 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang = \"en\">
   <head>
      ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 41
        echo "   </head>
      <body>
         ";
        // line 44
        echo "         ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 44)->display($context);
        // line 45
        echo "
         <div class = \"container\">
            ";
        // line 47
        $this->loadTemplate("partials/tntsearch.html.twig", "partials/base.html.twig", 47)->display($context);
        // line 48
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "         </div>

         <div class = \"footer\">
            <div class = \"container\">
               <p class = \"text-muted\">Bootstrap Theme for <a href = \"http://getgrav.org\">Grav</a></p>
            </div>
         </div>
      </body>
   ";
        // line 57
        $this->displayBlock('bottom', $context, $blocks);
        // line 58
        echo "</html>";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "      <meta charset = \"utf-8\">
      <meta http-equiv = \"X-UA-Compatible\" content = \"IE = edge\">
      <meta name = \"viewport\" content = \"width = device-width, initial-scale = 1\">
      ";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "description", [])) {
            // line 9
            echo "      <meta name = \"description\" content = \"";
            echo $this->getAttribute(($context["header"] ?? null), "description", []);
            echo "\">
      ";
        } else {
            // line 11
            echo "      <meta name = \"description\" content = \"";
            echo $this->getAttribute(($context["site"] ?? null), "description", []);
            echo "\">
      ";
        }
        // line 13
        echo "      ";
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 14
            echo "      <meta name = \"robots\" content = \"";
            echo $this->getAttribute(($context["header"] ?? null), "robots", []);
            echo "\">
      ";
        }
        // line 16
        echo "      <link rel = \"icon\" type = \"image/png\" href=\"";
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\">

      <title>";
        // line 18
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>

      ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
      ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "
      ";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 21
        echo "         ";
        // line 22
        echo "         ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bootstrap.min.css"], "method");
        // line 23
        echo "
         ";
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bootstrap-custom.css"], "method");
        // line 26
        echo " 

         ";
        // line 28
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
      ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        // line 32
        echo "        
         ";
        // line 33
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.min.js"], "method");
        // line 34
        echo "         ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/bootstrap.min.js"], "method");
        // line 35
        echo "        
                
         ";
        // line 37
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
      ";
    }

    // line 48
    public function block_content($context, array $blocks = [])
    {
    }

    // line 57
    public function block_bottom($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 57,  177 => 48,  171 => 37,  167 => 35,  164 => 34,  162 => 33,  159 => 32,  156 => 31,  150 => 28,  146 => 26,  143 => 25,  140 => 23,  137 => 22,  135 => 21,  132 => 20,  127 => 39,  125 => 31,  122 => 30,  120 => 20,  111 => 18,  105 => 16,  99 => 14,  96 => 13,  90 => 11,  84 => 9,  82 => 8,  77 => 5,  74 => 4,  70 => 58,  68 => 57,  58 => 49,  55 => 48,  53 => 47,  49 => 45,  46 => 44,  42 => 41,  40 => 4,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang = \"en\">
   <head>
      {% block head %}
      <meta charset = \"utf-8\">
      <meta http-equiv = \"X-UA-Compatible\" content = \"IE = edge\">
      <meta name = \"viewport\" content = \"width = device-width, initial-scale = 1\">
      {% if header.description %}
      <meta name = \"description\" content = \"{{ header.description }}\">
      {% else %}
      <meta name = \"description\" content = \"{{ site.description }}\">
      {% endif %}
      {% if header.robots %}
      <meta name = \"robots\" content = \"{{ header.robots }}\">
      {% endif %}
      <link rel = \"icon\" type = \"image/png\" href=\"{{ theme_url }}/images/favicon.png\">

      <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>

      {% block stylesheets %}
         {# Bootstrap core CSS #}
         {% do assets.addCss('theme://css/bootstrap.min.css') %}

         {# Custom styles for this theme #}
        {% do assets.addCss('theme://css/bootstrap-custom.css') %}
 

         {{ assets.css() }}
      {% endblock %}

      {% block javascripts %}
        
         {% do assets.addJs('theme://js/jquery.min.js') %}
         {% do assets.addJs('theme://js/bootstrap.min.js') %}
        
                
         {{ assets.js() }}
      {% endblock %}

      {% endblock head %}
   </head>
      <body>
         {# include the header + navigation #}
         {% include 'partials/header.html.twig' %}

         <div class = \"container\">
            {% include 'partials/tntsearch.html.twig' %}
            {% block content %}{% endblock %}
         </div>

         <div class = \"footer\">
            <div class = \"container\">
               <p class = \"text-muted\">Bootstrap Theme for <a href = \"http://getgrav.org\">Grav</a></p>
            </div>
         </div>
      </body>
   {% block bottom %}{% endblock %}
</html>", "partials/base.html.twig", "C:\\Program Files\\Ampps\\www\\nature\\user\\themes\\theme-bootstrap\\templates\\partials\\base.html.twig");
    }
}
