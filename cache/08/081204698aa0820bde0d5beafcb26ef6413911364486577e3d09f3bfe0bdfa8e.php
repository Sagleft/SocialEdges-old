<?php

/* main.tmpl */
class __TwigTemplate_f8a8be35c7fa89c5e24533d7cd6fb4e773f4bdfad56831afa7de90d8b59cf896 extends Twig_Template
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
        echo "<html>
\t";
        // line 2
        $this->loadTemplate("head.tmpl", "main.tmpl", 2)->display($context);
        // line 3
        echo "\t<body>
\t\t";
        // line 4
        $context["version"] = "1.0.26";
        // line 5
        echo "\t\t";
        $this->loadTemplate("parts/preloader.tmpl", "main.tmpl", 5)->display($context);
        // line 6
        echo "\t\t<div id=\"WebGL_output\"></div>
\t\t<div id=\"pointInfo_container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5\" style=\"text-align: right;\">
\t\t\t\t\t<img src=\"\" class=\"img-circle\" id=\"pointInfo_userAvatar\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-7\" style=\"text-align: left;\">
\t\t\t\t\t<span id=\"pointInfo_userNick\"></span><br/>
\t\t\t\t\t<span id=\"pintInfo_userID\"></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"/js/three.js\"></script>
\t\t<script src=\"/js/controls/OrbitControls.js\"></script>
\t\t<script src=\"/js/lines/LineSegmentsGeometry.js\"></script>
\t\t<script src=\"/js/lines/LineGeometry.js\"></script>
\t\t<script src=\"/js/lines/LineMaterial.js\"></script>
\t\t<script src=\"/js/lines/LineSegments2.js\"></script>
\t\t<script src=\"/js/lines/Line2.js\"></script>
\t\t
\t\t<script src=\"/js/libs/tween.min.js\"></script>
\t\t
\t\t";
        // line 29
        echo "\t\t<script src=\"/js/renderers/CSS3DRenderer.js\"></script>
\t\t
\t\t<script src=\"/js/functions.js?v=";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
\t\t<script src=\"/js/loader.js?v=";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "main.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 32,  60 => 31,  56 => 29,  32 => 6,  29 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main.tmpl", "D:\\Open_server\\OSPanel\\domains\\edges\\templates\\main.tmpl");
    }
}
