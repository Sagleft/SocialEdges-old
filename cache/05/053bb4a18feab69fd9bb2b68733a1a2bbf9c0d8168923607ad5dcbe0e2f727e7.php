<?php

/* head.tmpl */
class __TwigTemplate_be119624bd5de2db9df44bad2697d7ca25bfcb45a2cc6d057ffb48ca9a9c2724 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["version"] = "1.0.12";
        // line 2
        echo "<head>
\t<meta charset=\"utf-8\"/>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/bootstrap.min.css\"/>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/styles.css?v=";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"/>
\t<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
\t<script src=\"/js/bootstrap.min.js\"></script>
\t<script src=\"/js/events.js?v=";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
\t<title>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", []), "html", null, true);
        echo "</title>
</head>";
    }

    public function getTemplateName()
    {
        return "head.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  32 => 8,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "head.tmpl", "D:\\Open_server\\OSPanel\\domains\\edges\\templates\\head.tmpl");
    }
}
