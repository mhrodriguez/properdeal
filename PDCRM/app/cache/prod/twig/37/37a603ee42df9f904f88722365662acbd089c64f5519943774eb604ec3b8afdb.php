<?php

/* SaadTaziGChartBundle:Demo:demo.html.twig */
class __TwigTemplate_5d10d187481fa59cf96a8bd213a48b043916e899675f49d0fe3cc17a4c7fbcac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SaadTaziGChartBundle::layout.html.twig", "SaadTaziGChartBundle:Demo:demo.html.twig", 1);
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

<div id=\"myTableTreeMap\" style=\"width: 1100px;height:500px;\">&nbsp;</div>
<script>
\$(function() {
";
        // line 9
        echo $this->env->getExtension('g_chart')->gchartTreeMap((isset($context["dt10"]) ? $context["dt10"] : null), "myTableTreeMap", 1100, 500, "", array("minColor" => "#f00", "midColor" => "#ddd", "maxColor" => "#0d0", "headerHeight" => 15, "fontColor" => "black", "showScale" => true));
        // line 15
        echo "
});
</script>
<hr/>
<h2>QR Code Demo</h2>
<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('g_chart')->getQrCodeUrl("hello Montréal"), "html", null, true);
        echo "\"/>
<hr/>
<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('g_chart')->getQrCodeUrl("hello Montréal", array("width" => 200, "height" => 200, "encoding" => "ISO-8859-1", "correctionLevel" => "M")), "html", null, true);
        echo "\"/>
<hr/>

<h2>Visualization Chart Demo</h2>

<div id=\"chart1\">&nbsp;</div>
<script>
\$(function() {
";
        // line 30
        echo $this->env->getExtension('g_chart')->gchartPieChart((isset($context["dataTable1"]) ? $context["dataTable1"] : null), "chart1", 400, 200, "coucou");
        echo "
});
</script>
<hr/>

<div id=\"chart2\">&nbsp;</div>
<script>
\$(function() {
";
        // line 38
        echo $this->env->getExtension('g_chart')->gchartColumnChart((isset($context["dataTable2"]) ? $context["dataTable2"] : null), "chart2", 400, 200, "coucou");
        echo "
});
</script>
<hr/>

<div id=\"chart22\">&nbsp;</div>
<script>
\$(function() {
";
        // line 46
        echo $this->env->getExtension('g_chart')->gchartColumnChart((isset($context["dataTable8"]) ? $context["dataTable8"] : null), "chart22", 400, 200, "coucou chart 8");
        echo "
});
</script>   
<hr/>

<h2>linechart with options</h2>
<div id=\"chart3\">&nbsp;</div>
<script>
\$(function() {
";
        // line 55
        echo $this->env->getExtension('g_chart')->gchartLineChart((isset($context["dataTable2"]) ? $context["dataTable2"] : null), "chart3", 400, 200, "coucou", array("hAxis" => array("title" => "Hello", "titleTextStyle" => array("color" => "#FF0000"))));
        echo "
});
</script>
<hr/>
dataTable2
<div id=\"chart4\">&nbsp;</div>
<script>
\$(function() {
";
        // line 63
        echo $this->env->getExtension('g_chart')->gchartBarChart((isset($context["dataTable2"]) ? $context["dataTable2"] : null), "chart4", 400, 200, "coucou");
        echo "
});
</script>
<hr/>
dataTable5
<div id=\"chartfromMatrix5\">&nbsp;</div>
<script>
\$(function() {
";
        // line 71
        echo $this->env->getExtension('g_chart')->gchartBarChart((isset($context["dataTable5"]) ? $context["dataTable5"] : null), "chartfromMatrix5", 400, 200, "from table5");
        echo "
});
</script>
<hr/>

dataTable6
<div id=\"chartfromMatrix6\">&nbsp;</div>
<script>
\$(function() {
";
        // line 80
        echo $this->env->getExtension('g_chart')->gchartBarChart((isset($context["dataTable6"]) ? $context["dataTable6"] : null), "chartfromMatrix6", 400, 200, "from table6");
        echo "
});
</script>
<hr/>

dataTable2
<div id=\"chart5\">&nbsp;</div>
<script>
\$(function() {
";
        // line 89
        echo $this->env->getExtension('g_chart')->gchartAreaChart((isset($context["dataTable2"]) ? $context["dataTable2"] : null), "chart5", 400, 200, "coucou");
        echo "
});
</script>
<hr/>

dataTable4
<div id=\"chart6\">&nbsp;</div>
<script>
\$(function() {
";
        // line 98
        echo $this->env->getExtension('g_chart')->gchartScatterChart((isset($context["dataTable4"]) ? $context["dataTable4"] : null), "chart6", 400, 200, "coucou", "x label", "y label");
        echo "
});
</script>
<hr/>

dataTable2
<div id=\"chart7\">&nbsp;</div>
<script>
\$(function() {
";
        // line 107
        echo $this->env->getExtension('g_chart')->gchartComboChart((isset($context["dataTable2"]) ? $context["dataTable2"] : null), "chart7", 400, 200, "line", "combo", array("series" => array(1 => array("type" => "bars"))));
        echo "
});
</script>
<hr/>

dataTable1
<div id=\"gauge1\">&nbsp;</div>
<script>
\$(function() {
";
        // line 116
        echo $this->env->getExtension('g_chart')->gchartGauge((isset($context["dataTable1"]) ? $context["dataTable1"] : null), "gauge1", 400, 200, "coucou");
        echo "
});
</script>
<hr/>

dataTable2
<div id=\"table1\">&nbsp;</div>
<script>
\$(function() {
";
        // line 125
        echo $this->env->getExtension('g_chart')->gchartTable((isset($context["dataTable2"]) ? $context["dataTable2"] : null), "table1");
        echo "
});
</script>
<hr/>

dataTable7
<div id=\"chartfromMatrix7\">&nbsp;</div>
<script>
\$(function() {
";
        // line 134
        echo $this->env->getExtension('g_chart')->gchartTable((isset($context["dataTable7"]) ? $context["dataTable7"] : null), "chartfromMatrix7", 400, 200, "from table7");
        echo "
});
</script>
<hr/>

dt
<div id=\"myTable1\">&nbsp;</div>
<script>
\$(function() {
";
        // line 143
        echo $this->env->getExtension('g_chart')->gchartTable((isset($context["dt"]) ? $context["dt"] : null), "myTable1");
        echo "
});
</script>
<hr/>

dt9
<div id=\"myTableCandleStick\">&nbsp;</div>
<script>
\$(function() {
";
        // line 152
        echo $this->env->getExtension('g_chart')->gchartCandleStickChart((isset($context["dt9"]) ? $context["dt9"] : null), "myTableCandleStick", 400, 200);
        echo "
});
</script>
<hr/>

<h2>Simple Chart Demo</h2>
rawDataTable1
<img src=\"";
        // line 159
        echo $this->env->getExtension('g_chart')->getPieChartUrl((isset($context["rawDataTable1"]) ? $context["rawDataTable1"] : null), "chart3", 400, 200, "simple chart");
        echo "\"/>
<hr/>
rawDataTable1
<img src=\"";
        // line 162
        echo $this->env->getExtension('g_chart')->getPieChart3DUrl((isset($context["rawDataTable1"]) ? $context["rawDataTable1"] : null), "chart3", 400, 200, "simple chart");
        echo "\"/>
<hr/>

generic gchart_get_icon_url: <img src=\"";
        // line 165
        echo $this->env->getExtension('g_chart')->getIconUrl("d_bubble_icon_text_small", "ski|bb|Wheeee!|FFFFFF|000000");
        echo "\"/>
<img src=\"";
        // line 166
        echo $this->env->getExtension('g_chart')->getIconUrl("d_bubble_icon_text_small", array(0 => "ski", 1 => "bb", 2 => "Wheeee with array!", 3 => "FFFFFF", 4 => "000000"));
        echo "\"/>
<hr/>
gchart_get_letter_pin_url: <img src=\"";
        // line 168
        echo $this->env->getExtension('g_chart')->getLetterPinUrl("ip", "ffee44", "cccccc", true);
        echo "\"/><br/>
gchart_get_icon_pin_url: <img src=\"";
        // line 169
        echo $this->env->getExtension('g_chart')->getIconPinUrl("star", "ffee44");
        echo "\"/>
gchart_get_icon_pin_url: <img src=\"";
        // line 170
        echo $this->env->getExtension('g_chart')->getIconPinUrl("star", "ffee44", false, "pin_star");
        echo "\"/>
";
    }

    public function getTemplateName()
    {
        return "SaadTaziGChartBundle:Demo:demo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 170,  262 => 169,  258 => 168,  253 => 166,  249 => 165,  243 => 162,  237 => 159,  227 => 152,  215 => 143,  203 => 134,  191 => 125,  179 => 116,  167 => 107,  155 => 98,  143 => 89,  131 => 80,  119 => 71,  108 => 63,  97 => 55,  85 => 46,  74 => 38,  63 => 30,  52 => 22,  47 => 20,  40 => 15,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "SaadTaziGChartBundle::layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/* */
/* <div id="myTableTreeMap" style="width: 1100px;height:500px;">&nbsp;</div>*/
/* <script>*/
/* $(function() {*/
/* {{ gchart_treemap(dt10, 'myTableTreeMap', 1100, 500, '', {*/
/*             'minColor': '#f00',*/
/*             'midColor': '#ddd',*/
/*             'maxColor': '#0d0',*/
/*             'headerHeight': 15,*/
/*             'fontColor': 'black',*/
/*             'showScale': true}) }}*/
/* });*/
/* </script>*/
/* <hr/>*/
/* <h2>QR Code Demo</h2>*/
/* <img src="{{ gchart_get_qrcode_url('hello Montréal') }}"/>*/
/* <hr/>*/
/* <img src="{{ gchart_get_qrcode_url('hello Montréal', {'width':200, 'height': 200, 'encoding': 'ISO-8859-1', 'correctionLevel': 'M'}) }}"/>*/
/* <hr/>*/
/* */
/* <h2>Visualization Chart Demo</h2>*/
/* */
/* <div id="chart1">&nbsp;</div>*/
/* <script>*/
/* $(function() {*/
/* {{ gchart_pie_chart(dataTable1, 'chart1', 400, 200, 'coucou') }}*/
/* });*/
/* </script>*/
/* <hr/>*/
/* */
/* <div id="chart2">&nbsp;</div>*/
/* <script>*/
/* $(function() {*/
/* {{ gchart_column_chart(dataTable2, 'chart2', 400, 200, 'coucou') }}*/
/* });*/
/* </script>*/
/* <hr/>*/
/* */
/* <div id="chart22">&nbsp;</div>*/
/* <script>*/
/* $(function() {*/
/* {{ gchart_column_chart(dataTable8, 'chart22', 400, 200, 'coucou chart 8') }}*/
/* });*/
/* </script>   */
/* <hr/>*/
/* */
/* <h2>linechart with options</h2>*/
/* <div id="chart3">&nbsp;</div>*/
/* <script>*/
/* $(function() {*/
/* {{ gchart_line_chart(dataTable2, 'chart3', 400, 200, 'coucou',{'hAxis': {'title': 'Hello',  'titleTextStyle': {'color': '#FF0000'}}}) }}*/
/* });*/
/* </script>*/
/* <hr/>*/
/* dataTable2*/
/* <div id="chart4">&nbsp;</div>*/
/* <script>*/
/* $(function() {*/
/* {{ gchart_bar_chart(dataTable2, 'chart4', 400, 200, 'coucou') }}*/
/* });*/
/* </script>*/
/* <hr/>*/
/* dataTable5*/
/* <div id="chartfromMatrix5">&nbsp;</div>*/
/* <script>*/
/* $(function() {*/
/* {{ gchart_bar_chart(dataTable5, 'chartfromMatrix5', 400, 200, 'from table5') }}*/
/* });*/
/* </script>*/
/* <hr/>*/
/* */
/* dataTable6*/
/* <div id="chartfromMatrix6">&nbsp;</div>*/
/* <script>*/
/* $(function() {*/
/* {{ gchart_bar_chart(dataTable6, 'chartfromMatrix6', 400, 200, 'from table6') }}*/
/* });*/
/* </script>*/
/* <hr/>*/
/* */
/* dataTable2*/
/* <div id="chart5">&nbsp;</div>*/
/* <script>*/
/* $(function() {*/
/* {{ gchart_area_chart(dataTable2, 'chart5', 400, 200, 'coucou') }}*/
/* });*/
/* </script>*/
/* <hr/>*/
/* */
/* dataTable4*/
/* <div id="chart6">&nbsp;</div>*/
/* <script>*/
/* $(function() {*/
/* {{ gchart_scatter_chart(dataTable4, 'chart6', 400, 200, 'coucou', 'x label', 'y label') }}*/
/* });*/
/* </script>*/
/* <hr/>*/
/* */
/* dataTable2*/
/* <div id="chart7">&nbsp;</div>*/
/* <script>*/
/* $(function() {*/
/* {{ gchart_combo_chart(dataTable2, 'chart7', 400, 200, 'line', 'combo', {'series': {1: {'type': 'bars'} } }) }}*/
/* });*/
/* </script>*/
/* <hr/>*/
/* */
/* dataTable1*/
/* <div id="gauge1">&nbsp;</div>*/
/* <script>*/
/* $(function() {*/
/* {{ gchart_gauge(dataTable1, 'gauge1', 400, 200, 'coucou') }}*/
/* });*/
/* </script>*/
/* <hr/>*/
/* */
/* dataTable2*/
/* <div id="table1">&nbsp;</div>*/
/* <script>*/
/* $(function() {*/
/* {{ gchart_table(dataTable2, 'table1') }}*/
/* });*/
/* </script>*/
/* <hr/>*/
/* */
/* dataTable7*/
/* <div id="chartfromMatrix7">&nbsp;</div>*/
/* <script>*/
/* $(function() {*/
/* {{ gchart_table(dataTable7, 'chartfromMatrix7', 400, 200, 'from table7') }}*/
/* });*/
/* </script>*/
/* <hr/>*/
/* */
/* dt*/
/* <div id="myTable1">&nbsp;</div>*/
/* <script>*/
/* $(function() {*/
/* {{ gchart_table(dt, 'myTable1') }}*/
/* });*/
/* </script>*/
/* <hr/>*/
/* */
/* dt9*/
/* <div id="myTableCandleStick">&nbsp;</div>*/
/* <script>*/
/* $(function() {*/
/* {{ gchart_candlestick_chart(dt9, 'myTableCandleStick', 400, 200) }}*/
/* });*/
/* </script>*/
/* <hr/>*/
/* */
/* <h2>Simple Chart Demo</h2>*/
/* rawDataTable1*/
/* <img src="{{ gchart_get_pie_chart_url(rawDataTable1, 'chart3', 400, 200, 'simple chart') }}"/>*/
/* <hr/>*/
/* rawDataTable1*/
/* <img src="{{ gchart_get_pie_chart3d_url(rawDataTable1, 'chart3', 400, 200, 'simple chart') }}"/>*/
/* <hr/>*/
/* */
/* generic gchart_get_icon_url: <img src="{{ gchart_get_icon_url('d_bubble_icon_text_small', 'ski|bb|Wheeee!|FFFFFF|000000') }}"/>*/
/* <img src="{{ gchart_get_icon_url('d_bubble_icon_text_small', ['ski', 'bb', 'Wheeee with array!','FFFFFF','000000']) }}"/>*/
/* <hr/>*/
/* gchart_get_letter_pin_url: <img src="{{ gchart_get_letter_pin_url('ip', 'ffee44', 'cccccc', true) }}"/><br/>*/
/* gchart_get_icon_pin_url: <img src="{{ gchart_get_icon_pin_url('star', 'ffee44') }}"/>*/
/* gchart_get_icon_pin_url: <img src="{{ gchart_get_icon_pin_url('star', 'ffee44', false, 'pin_star') }}"/>*/
/* {% endblock %}*/
