<?php

/* parts/preloader.tmpl */
class __TwigTemplate_43231bf68b6c690e6d4f4afeec3f402a2dce632a81b2e87b61154f60a684d65f extends Twig_Template
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
        echo "<div class=\"loader\" id=\"page_loader\">
\t<div class=\"circle\"></div>
\t<div class=\"circle\"></div>
\t<div class=\"circle\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "parts/preloader.tmpl";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "parts/preloader.tmpl", "D:\\Open_server\\OSPanel\\domains\\edges\\templates\\parts\\preloader.tmpl");
    }
}
