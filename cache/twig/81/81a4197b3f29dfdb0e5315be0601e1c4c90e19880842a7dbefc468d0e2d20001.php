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

/* partials/search.html.twig */
class __TwigTemplate_455714d90192745eebc8d767dceea878f422d843cd9737681770ccb78634fe55 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
<form class=\"navbar-form navbar-left\" action=\"";
        // line 2
        echo ($context["base_url"] ?? null);
        echo "/search\">
\t<div class=\"input-group\">
\t<input type=\"text\" class=\"form-control\" placeholder=\"Search\" name=\"search\">
\t\t<div class=\"input-group-btn\">
\t\t  <button class=\"btn btn-default\" type=\"submit\">
\t\t    <i class=\"glyphicon glyphicon-search\"></i>
\t\t  </button>
\t\t</div>
\t</div>
</form>";
    }

    public function getTemplateName()
    {
        return "partials/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
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
<form class=\"navbar-form navbar-left\" action=\"{{base_url}}/search\">
\t<div class=\"input-group\">
\t<input type=\"text\" class=\"form-control\" placeholder=\"Search\" name=\"search\">
\t\t<div class=\"input-group-btn\">
\t\t  <button class=\"btn btn-default\" type=\"submit\">
\t\t    <i class=\"glyphicon glyphicon-search\"></i>
\t\t  </button>
\t\t</div>
\t</div>
</form>", "partials/search.html.twig", "C:\\Program Files\\Ampps\\www\\nature\\user\\themes\\theme-bootstrap\\templates\\partials\\search.html.twig");
    }
}
