<?php

/* SaadTaziGChartBundle:Demo:demo3.html.twig */
class __TwigTemplate_029b6f7b64762e2c46c93d2b61bf8e1bd372fd3b6076487229465a3b5884f140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SaadTaziGChartBundle::layout.html.twig", "SaadTaziGChartBundle:Demo:demo3.html.twig", 1);
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
<div id=\"myArea1\">&nbsp;</div>
<script>
\$(function() {
    ";
        // line 8
        echo $this->env->getExtension('g_chart')->gchartAreaChart((isset($context["dt"]) ? $context["dt"] : null), "myArea1", 500, 400, "coucou");
        echo "
});
</script>

";
    }

    public function getTemplateName()
    {
        return "SaadTaziGChartBundle:Demo:demo3.html.twig";
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
/* <div id="myArea1">&nbsp;</div>*/
/* <script>*/
/* $(function() {*/
/*     {{ gchart_area_chart(dt, 'myArea1', 500, 400, 'coucou') }}*/
/* });*/
/* </script>*/
/* */
/* {% endblock %}*/
