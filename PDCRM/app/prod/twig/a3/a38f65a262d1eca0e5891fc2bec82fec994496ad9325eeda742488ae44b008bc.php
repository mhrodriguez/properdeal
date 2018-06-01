<?php

/* :forms:custom_radio_widget.html.twig */
class __TwigTemplate_b3f1ce5e4944a514f074314129fd7670f9de996bf826ef1e9ee36c7f120d56d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'radio_widget' => array($this, 'block_radio_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('radio_widget', $context, $blocks);
    }

    public function block_radio_widget($context, array $blocks = array())
    {
        // line 2
        echo "<br/>
    <input type=\"radio\" ";
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
        return ":forms:custom_radio_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  20 => 1,);
    }
}
/* {%- block radio_widget -%}*/
/*     <br/>*/
/*     <input type="radio" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock radio_widget -%}*/
