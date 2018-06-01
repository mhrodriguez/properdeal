<?php

/* SaadTaziGChartBundle:Demo:demo2.html.twig */
class __TwigTemplate_31f2b869f31b94ba502a39044164bec2fda4519928e593e300fa8f68bdc0b15c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SaadTaziGChartBundle::layout.html.twig", "SaadTaziGChartBundle:Demo:demo2.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SaadTaziGChartBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div id=\"myTable1\">&nbsp;</div>
<script>
\$(function() {
    ";
        // line 8
        echo $this->env->getExtension('g_chart')->gchartTable((isset($context["dt"]) ? $context["dt"] : null), "myTable1");
        echo "
});
</script>
        
";
    }

    public function getTemplateName()
    {
        return "SaadTaziGChartBundle:Demo:demo2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "SaadTaziGChartBundle::layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/* <div id="myTable1">&nbsp;</div>*/
/* <script>*/
/* $(function() {*/
/*     {{ gchart_table(dt, 'myTable1') }}*/
/* });*/
/* </script>*/
/*         */
/* {% endblock %}*/
