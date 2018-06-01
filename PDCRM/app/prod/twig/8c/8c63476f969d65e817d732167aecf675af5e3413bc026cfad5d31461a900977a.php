<?php

/* :forms:custom_checkbox_widget.html.twig */
class __TwigTemplate_0a41c7d5777fd7db6891f84c728549e87c80ad2587a7a04fa3b2d0e1628ce7bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('checkbox_widget', $context, $blocks);
    }

    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 2
        echo "<br/>
    <input type=\"checkbox\" ";
        // line 3
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
    }

    public function getTemplateName()
    {
        return ":forms:custom_checkbox_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  20 => 1,);
    }
}
/* {%- block checkbox_widget -%}*/
/* 	<br/>*/
/*     <input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock checkbox_widget -%}*/
