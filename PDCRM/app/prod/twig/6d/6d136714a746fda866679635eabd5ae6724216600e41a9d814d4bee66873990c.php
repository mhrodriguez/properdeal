<?php

/* SaadTaziGChartBundle:chart:visualizationChart.html.twig */
class __TwigTemplate_6c8af8102b05c829b13f2361114f1afa8468c9dadcafff9409c27320edf71743 extends Twig_Template
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
        if ((((isset($context["chartType"]) ? $context["chartType"] : null) == "Calendar") || ((isset($context["chartType"]) ? $context["chartType"] : null) == "Timeline"))) {
            // line 2
            echo "    ";
            $context["data"] = twig_replace_filter(twig_replace_filter(twig_replace_filter(twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : null)), array("\"new Date[[[" => "new Date(", "new Date\"" => "")), array("]]]\"" => ")", "]]]\"" => ")")), array("id\":\"role_tooltip" => "role\": \"tooltip", "id\":\"role_tooltip" => "role\": \"tooltip"));
        } elseif ((        // line 3
(isset($context["chartType"]) ? $context["chartType"] : null) == "Interval")) {
            // line 4
            echo "    ";
            $context["data"] = twig_replace_filter(twig_replace_filter(twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : null)), array("\"new Date(" => "new Date(", "new Date\"" => "")), array("id\":\"role_interval_" => "role\": \"interval\", id: \"", "id\":\"role_interval_" => "role\": \"interval\", id: \""));
        } elseif ((        // line 5
(isset($context["chartType"]) ? $context["chartType"] : null) == "Gantt")) {
            // line 6
            echo "    ";
            $context["data"] = twig_replace_filter(twig_replace_filter(twig_replace_filter(twig_replace_filter(twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : null)), array("\"new Date[[[" => "new Date(", "new Date\"" => "")), array("\"daysToMilliseconds[[[" => "daysToMilliseconds(", "\"daysToMilliseconds[[[" => "daysToMilliseconds(")), array("]]]\"" => ")", "]]]\"" => ")")), array("id\":\"role_tooltip" => "role\": \"tooltip", "id\":\"role_tooltip" => "role\": \"tooltip"));
            // line 7
            echo "    var daysToMilliseconds = function (days) {
      return days * 24 * 60 * 60 * 1000;
    }
";
        } else {
            // line 11
            echo "    ";
            $context["data"] = twig_replace_filter(twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : null)), array("\"new Date(" => "new Date(", "new Date\"" => ""));
        }
        // line 13
        echo "var data";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo " = new google.visualization.DataTable(";
        echo (isset($context["data"]) ? $context["data"] : null);
        echo ");

";
        // line 16
        if (((isset($context["chartType"]) ? $context["chartType"] : null) == "Interval")) {
            // line 17
            echo "    var chart";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo " = new google.visualization.LineChart(document.getElementById('";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "'));
";
        } elseif ((        // line 18
(isset($context["chartType"]) ? $context["chartType"] : null) == "Donut")) {
            // line 19
            echo "    var chart";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo " = new google.visualization.PieChart(document.getElementById('";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "'));
";
        } elseif ((        // line 20
(isset($context["chartType"]) ? $context["chartType"] : null) == "Trendlines")) {
            // line 21
            echo "    var chart";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo " = new google.visualization.ScatterChart(document.getElementById('";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "'));
";
        } elseif ((        // line 22
(isset($context["chartType"]) ? $context["chartType"] : null) == "Waterfall")) {
            // line 23
            echo "    var chart";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo " = new google.visualization.CandlestickChart(document.getElementById('";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "'));
";
        } else {
            // line 25
            echo "    var chart";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo " = new google.visualization.";
            echo twig_escape_filter($this->env, (isset($context["chartType"]) ? $context["chartType"] : null), "html", null, true);
            echo "(document.getElementById('";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "'));
";
        }
        // line 27
        if ( !twig_test_empty((isset($context["events"]) ? $context["events"] : null))) {
            // line 28
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 29
                echo "        google.visualization.events.addListener(chart";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo ", '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventName", array()), "html", null, true);
                echo "', ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "callbackFunc", array()), "html", null, true);
                echo ");
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 32
        echo "chart";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo ".draw(data";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo ", ";
        echo twig_jsonencode_filter((isset($context["config"]) ? $context["config"] : null));
        echo ");
";
    }

    public function getTemplateName()
    {
        return "SaadTaziGChartBundle:chart:visualizationChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 32,  106 => 29,  101 => 28,  99 => 27,  89 => 25,  81 => 23,  79 => 22,  72 => 21,  70 => 20,  63 => 19,  61 => 18,  54 => 17,  52 => 16,  44 => 13,  40 => 11,  34 => 7,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if chartType == 'Calendar' or chartType == 'Timeline' %}*/
/*     {% set data = data | json_encode | replace({"\"new Date[[[": 'new Date(', "new Date\"": ""}) | replace({"]]]\"": ')', "]]]\"": ")"}) | replace({"id\":\"role_tooltip": "role\": \"tooltip", "id\":\"role_tooltip": "role\": \"tooltip"}) %}*/
/* {% elseif chartType == 'Interval' %}*/
/*     {% set data = data | json_encode | replace({"\"new Date(": 'new Date(', "new Date\"": ""}) | replace({"id\":\"role_interval_": "role\": \"interval\", id: \"", "id\":\"role_interval_": "role\": \"interval\", id: \""}) %}*/
/* {% elseif chartType == 'Gantt' %}*/
/*     {% set data = data | json_encode | replace({"\"new Date[[[": 'new Date(', "new Date\"": ""}) | replace({'"daysToMilliseconds[[[': 'daysToMilliseconds(', '"daysToMilliseconds[[[': 'daysToMilliseconds('}) | replace({"]]]\"": ')', "]]]\"": ")"}) | replace({"id\":\"role_tooltip": "role\": \"tooltip", "id\":\"role_tooltip": "role\": \"tooltip"}) %}*/
/*     var daysToMilliseconds = function (days) {*/
/*       return days * 24 * 60 * 60 * 1000;*/
/*     }*/
/* {% else %}*/
/*     {% set data = data | json_encode | replace({"\"new Date(": 'new Date(', "new Date\"": ""}) %}*/
/* {% endif %}*/
/* var data{{ id }} = new google.visualization.DataTable({{ data | raw }});*/
/* */
/* {# Create and draw the visualization. #}*/
/* {% if chartType == 'Interval' %}*/
/*     var chart{{ id }} = new google.visualization.LineChart(document.getElementById('{{ id }}'));*/
/* {% elseif chartType == 'Donut' %}*/
/*     var chart{{ id }} = new google.visualization.PieChart(document.getElementById('{{ id }}'));*/
/* {% elseif chartType == 'Trendlines' %}*/
/*     var chart{{ id }} = new google.visualization.ScatterChart(document.getElementById('{{ id }}'));*/
/* {% elseif chartType == 'Waterfall' %}*/
/*     var chart{{ id }} = new google.visualization.CandlestickChart(document.getElementById('{{ id }}'));*/
/* {% else %}*/
/*     var chart{{ id }} = new google.visualization.{{ chartType }}(document.getElementById('{{ id }}'));*/
/* {% endif %}*/
/* {% if events is not empty %}*/
/*     {% for event in events %}*/
/*         google.visualization.events.addListener(chart{{ id }}, '{{ event.eventName }}', {{ event.callbackFunc }});*/
/*     {% endfor %}*/
/* {% endif %}*/
/* chart{{ id }}.draw(data{{ id }}, {{ config | json_encode | raw }});*/
/* */
