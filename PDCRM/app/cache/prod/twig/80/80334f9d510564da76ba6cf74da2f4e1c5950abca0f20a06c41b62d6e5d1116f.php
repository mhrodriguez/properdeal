<?php

/* :municipio:index.json.twig */
class __TwigTemplate_6f0c838dc4ccf4209f45b3f1d96b00ad2d491a30043f856bff1b55f7c1c07d04 extends Twig_Template
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
