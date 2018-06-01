<?php

/* :municipio:index.json.twig */
class __TwigTemplate_bb0612c39718036178da949d8b5ed01a8acf4ae03c7a8b1a86987be5c5bd368e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["municipios"]) ? $context["municipios"] : null)), "html", null, true);
    }

    public function getTemplateName()
    {
        return ":municipio:index.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ municipios|json_encode() }}*/
