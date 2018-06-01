<?php

/* :forms:custom_time_widget.html.twig */
class __TwigTemplate_ec2c2787fa4bbad4ab422bf18846cd35332cea0aaac442618ba30e2ee31c340b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'time_widget' => array($this, 'block_time_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('time_widget', $context, $blocks);
    }

    public function block_time_widget($context, array $blocks = array())
    {
        // line 2
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 3
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 5
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . ""))));
            // line 6
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : null)))) {
                // line 7
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 10
            echo "<table>
        <tr>
            <td>Hora:";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hour", array()), 'widget');
            echo "</td>
            <td>";
            // line 13
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : null)) {
                echo "Minuto: ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "second", array()), 'widget');
            }
            echo "</td>
        </tr>
    </table>

    ";
            // line 17
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : null)))) {
                // line 18
                echo "</div>";
            }
        }
    }

    public function getTemplateName()
    {
        return ":forms:custom_time_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  62 => 17,  48 => 13,  44 => 12,  40 => 10,  35 => 7,  33 => 6,  31 => 5,  28 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block time_widget -%}*/
/* {% if widget == 'single_text' %}*/
/* {{- block('form_widget_simple') -}}*/
/* {% else -%}*/
/* {% set attr = attr|merge({class: (attr.class|default('') ~ '')|trim}) -%}*/
/* {% if datetime is not defined or false == datetime -%}*/
/* <div {{ block('widget_container_attributes') -}}>*/
/* {%- endif -%}*/
/* */
/*     <table>*/
/*         <tr>*/
/*             <td>Hora: {{- form_widget(form.hour) }}</td>*/
/*             <td>{% if with_minutes %}Minuto: {{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}</td>*/
/*         </tr>*/
/*     </table>*/
/* */
/*     {% if datetime is not defined or false == datetime -%}*/
/* </div>*/
/* {%- endif -%}*/
/* {% endif %}*/
/* {%- endblock time_widget %}*/
