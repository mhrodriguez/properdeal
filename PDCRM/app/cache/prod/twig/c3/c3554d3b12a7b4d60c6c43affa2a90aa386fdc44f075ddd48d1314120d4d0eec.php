<?php

/* :dashboard:index.html.twig */
class __TwigTemplate_4d6d28bf07a9a61fe9dd7c2a04fce251fb5270b7cf3bf28c7724bb3addf8aed2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":dashboard:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseabc.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <!-- Page Layout here -->
            <div class=\"row\">
                <nav>
                    <div class=\"nav-wrapper z-depth-1\">
                        <div class=\"col s12  blue darken-1 \">
                            <a href=\"#!\" class=\"breadcrumb\">Dashboard</a>
                        </div>
                    </div>
                </nav>
            </div>

            <div class=\"row\">
                <div class=\"chip\">
                    <i class=\"material-icons left\">visibility</i>
                    Vistos: 0
                </div>
                <div class=\"chip\">
                    <div class=\"chip\">
                        <i class=\"material-icons left\">print</i>
                        Impresos: 0
                    </div>
                </div>
                <div class=\"chip\">
                    <div class=\"chip\">
                        <i class=\"material-icons left\">send</i>
                        Enviados: 0
                    </div>
                </div>
                <div class=\"chip\">
                    <div class=\"chip\">
                        <i class=\"material-icons left\">monetization_on</i>
                        &nbsp;
                    </div>
                </div>
            </div>


            <div class=\"row\">
                <h5>Propiedades Registradas</h5>
                <div id=\"chart2\">&nbsp;</div>
                    <script>
                        \$(function() {
                        ";
        // line 48
        echo $this->env->getExtension('g_chart')->gchartColumnChart((isset($context["dataTable2"]) ? $context["dataTable2"] : null), "chart2", 800, 400, "");
        echo "
                    });
                    </script>
            </div>

            <div class=\"row\">
                <h5>Propiedades Inactivas</h5>
                <h5 class=\".center-align\">";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</h5>
                <div id=\"chart3\">&nbsp;</div>
                <script>
                    \$(function() {
                        ";
        // line 59
        echo $this->env->getExtension('g_chart')->gchartColumnChart((isset($context["dataTable3"]) ? $context["dataTable3"] : null), "chart3", 800, 400, "");
        echo "
                    });
                </script>
            </div>

            <div class=\"row\">
                <div class=\"col s6 m6 l6\">
                    <h5>Top Captadores</h5>
                    <ul class=\"collection\">

                        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topCaptadores"]) ? $context["topCaptadores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["asesor"]) {
            // line 70
            echo "                            <li class=\"collection-item avatar\">

                                ";
            // line 72
            if (($this->getAttribute($context["asesor"], "url_foto", array()) != null)) {
                // line 73
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asesor"], "url_foto", array()), "html", null, true);
                echo "\" alt=\"\" class=\"circle\">
                                ";
            } else {
                // line 75
                echo "                                    ";
                if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                    // asset "3a93b33_0"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33_0") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33_ic_usuario_1.jpg");
                    // line 76
                    echo "                                    <img id=\"imgFotografia\" src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                    echo "\" alt=\"\" class=\"circle\" style=\"width:10%\">
                                    ";
                } else {
                    // asset "3a93b33"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33.jpg");
                    echo "                                    <img id=\"imgFotografia\" src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                    echo "\" alt=\"\" class=\"circle\" style=\"width:10%\">
                                    ";
                }
                unset($context["asset_url"]);
                // line 78
                echo "                                ";
            }
            // line 79
            echo "
                                <span class=\"title\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["asesor"], "nombre", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["asesor"], "total", array()), "html", null, true);
            echo ")</span>
                                <a href=\"#!\" class=\"secondary-content\"><i class=\"material-icons\">grade</i></a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asesor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                    </ul>
                </div>
                <div class=\"col s6 m6 l6\">
                    <h5>Top Prospectadores</h5>
                    <ul class=\"collection\">

                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topProspectadores"]) ? $context["topProspectadores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["asesor"]) {
            // line 91
            echo "                        <li class=\"collection-item avatar\">

                            ";
            // line 93
            if (($this->getAttribute($context["asesor"], "url_foto", array()) != null)) {
                // line 94
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asesor"], "url_foto", array()), "html", null, true);
                echo "\" alt=\"\" class=\"circle\">
                            ";
            } else {
                // line 96
                echo "                                ";
                if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                    // asset "3a93b33_0"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33_0") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33_ic_usuario_1.jpg");
                    // line 97
                    echo "                                <img id=\"imgFotografia\" src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                    echo "\" alt=\"\" class=\"circle\" style=\"width:10%\">
                                ";
                } else {
                    // asset "3a93b33"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33.jpg");
                    echo "                                <img id=\"imgFotografia\" src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                    echo "\" alt=\"\" class=\"circle\" style=\"width:10%\">
                                ";
                }
                unset($context["asset_url"]);
                // line 99
                echo "                            ";
            }
            // line 100
            echo "
                            <span class=\"title\">";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["asesor"], "nombre", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["asesor"], "total", array()), "html", null, true);
            echo "</span>
                            <a href=\"#!\" class=\"secondary-content\"><i class=\"material-icons\">grade</i></a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asesor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                    </ul>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col s6 m6 l6\">
                    <h5>Top Propiedades Enviadas en Portafolio</h5>
                    <ul class=\"collection\">
                        ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topInmueblesEnviados"]) ? $context["topInmueblesEnviados"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
            // line 114
            echo "                            <li class=\"collection-item avatar\">
                                <span class=\"title\">ID: ";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "legacyid", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "colonia", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "calle", array()), "html", null, true);
            echo ")</span>
                                <a href=\"#!\" class=\"secondary-content\"><i class=\"material-icons\">grade</i></a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                    </ul>
                </div>
                <div class=\"col s6 m6 l6\">
                    <h5>Top Propiedades Recomendadas</h5>
                    <ul class=\"collection\">
                        ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topInmueblesRecomendados"]) ? $context["topInmueblesRecomendados"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
            // line 125
            echo "                            <li class=\"collection-item avatar\">
                                <span class=\"title\">ID: ";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "legacyid", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "colonia", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "calle", array()), "html", null, true);
            echo ")</span>
                                <a href=\"#!\" class=\"secondary-content\"><i class=\"material-icons\">grade</i></a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                    </ul>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col s6 m6 l6\">
                    <h5>Venta/Renta</h5>
                    <div id=\"chart1\">&nbsp;</div>
                    <script>
                        \$(function() {
                            ";
        // line 140
        echo $this->env->getExtension('g_chart')->gchartPieChart((isset($context["dataTable1"]) ? $context["dataTable1"] : null), "chart1", 400, 200, "");
        echo "
                        });
                    </script>
                </div>
                <div class=\"col s6 m6 l6\">

                    <h1>Casas</h1>
                    <h2>";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["totalCasas"]) ? $context["totalCasas"] : null), "html", null, true);
        echo "</h2>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col s6 m6 l6\">
                    <h5>Propiedad por Tipo</h5>
                    <div id=\"chart4\">&nbsp;</div>
                    <script>
                        \$(function() {
                            ";
        // line 157
        echo $this->env->getExtension('g_chart')->gchartPieChart((isset($context["dataTable4"]) ? $context["dataTable4"] : null), "chart4", 400, 200, "");
        echo "
                        });
                    </script>
                </div>
                <div class=\"col s6 m6 l6\">

                </div>
            </div>

            <div class=\"row\">
                <div class=\"col s12 m12 l12\">
                    <h5>Resumen de Mis Propiedades</h5>
                    <table class=\"striped\">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Totales Activas</th>
                            <th>Totales Inactivas</th>
                            <th></th>
                            <th>Mes Actual Activas</th>
                            <th>Mes Actual Inactivas</th>
                        </tr>
                        </thead>

                        <tbody>
                        ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reporteTotales"]) ? $context["reporteTotales"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["linea"]) {
            // line 183
            echo "                            <tr>
                                <td>
                                   ";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($context["linea"], "tipoinmuebleNombre", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["linea"], "operacionInmuebleNombre", array()), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($context["linea"], "totalActivo", array()), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["linea"], "totalInactivo", array()), "html", null, true);
            echo "
                                </td>
                                <td>

                                </td>
                                <td>
                                    ";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($context["linea"], "fechaActivo", array()), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($context["linea"], "fechaInactivo", array()), "html", null, true);
            echo "
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "
                        <tr>
                            <td>
                                <p>TOTALES</p>
                            </td>
                            <td>
                                ";
        // line 210
        echo twig_escape_filter($this->env, (isset($context["totalActivas"]) ? $context["totalActivas"] : null), "html", null, true);
        echo "
                            </td>
                            <td>
                                ";
        // line 213
        echo twig_escape_filter($this->env, (isset($context["totalInactivas"]) ? $context["totalInactivas"] : null), "html", null, true);
        echo "
                            </td>
                            <td>

                            </td>
                            <td>
                                ";
        // line 219
        echo twig_escape_filter($this->env, (isset($context["totalMensualActivas"]) ? $context["totalMensualActivas"] : null), "html", null, true);
        echo "
                            </td>
                            <td>
                                ";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["totalMensualInactivas"]) ? $context["totalMensualInactivas"] : null), "html", null, true);
        echo "
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

";
    }

    // line 233
    public function block_javascripts($context, array $blocks = array())
    {
        // line 234
        echo "    <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
    <script type=\"text/javascript\">
        google.load(\"visualization\", \"1\", {packages:[\"corechart\", 'table', 'treemap', 'gauge']});
        google.load('jquery', '1.6.0');
    </script>
";
    }

    // line 241
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 242
        echo "
    <style>
        body {
            background: white;
            height: 100vh;
        }

        h1, h2, h5 {
            width:100%;
            display:flex;
            justify-content: center;
        }
        thead
        {
            background-color: #3a87ad;
            color: white;
        }
    </style>

";
    }

    public function getTemplateName()
    {
        return ":dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 242,  447 => 241,  438 => 234,  435 => 233,  421 => 222,  415 => 219,  406 => 213,  400 => 210,  392 => 204,  382 => 200,  376 => 197,  367 => 191,  361 => 188,  353 => 185,  349 => 183,  345 => 182,  317 => 157,  304 => 147,  294 => 140,  282 => 130,  268 => 126,  265 => 125,  261 => 124,  254 => 119,  240 => 115,  237 => 114,  233 => 113,  223 => 105,  211 => 101,  208 => 100,  205 => 99,  191 => 97,  186 => 96,  180 => 94,  178 => 93,  174 => 91,  170 => 90,  162 => 84,  150 => 80,  147 => 79,  144 => 78,  130 => 76,  125 => 75,  119 => 73,  117 => 72,  113 => 70,  109 => 69,  96 => 59,  89 => 55,  79 => 48,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <!-- Page Layout here -->*/
/*             <div class="row">*/
/*                 <nav>*/
/*                     <div class="nav-wrapper z-depth-1">*/
/*                         <div class="col s12  blue darken-1 ">*/
/*                             <a href="#!" class="breadcrumb">Dashboard</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="chip">*/
/*                     <i class="material-icons left">visibility</i>*/
/*                     Vistos: 0*/
/*                 </div>*/
/*                 <div class="chip">*/
/*                     <div class="chip">*/
/*                         <i class="material-icons left">print</i>*/
/*                         Impresos: 0*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="chip">*/
/*                     <div class="chip">*/
/*                         <i class="material-icons left">send</i>*/
/*                         Enviados: 0*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="chip">*/
/*                     <div class="chip">*/
/*                         <i class="material-icons left">monetization_on</i>*/
/*                         &nbsp;*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*             <div class="row">*/
/*                 <h5>Propiedades Registradas</h5>*/
/*                 <div id="chart2">&nbsp;</div>*/
/*                     <script>*/
/*                         $(function() {*/
/*                         {{ gchart_column_chart(dataTable2, 'chart2', 800, 400, '') }}*/
/*                     });*/
/*                     </script>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <h5>Propiedades Inactivas</h5>*/
/*                 <h5 class=".center-align">{{ "now"|date("d/m/Y") }}</h5>*/
/*                 <div id="chart3">&nbsp;</div>*/
/*                 <script>*/
/*                     $(function() {*/
/*                         {{ gchart_column_chart(dataTable3, 'chart3', 800, 400, '') }}*/
/*                     });*/
/*                 </script>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col s6 m6 l6">*/
/*                     <h5>Top Captadores</h5>*/
/*                     <ul class="collection">*/
/* */
/*                         {%  for asesor in topCaptadores  %}*/
/*                             <li class="collection-item avatar">*/
/* */
/*                                 {% if asesor.url_foto != null %}*/
/*                                     <img src="{{ asesor.url_foto }}" alt="" class="circle">*/
/*                                 {% else %}*/
/*                                     {% image '@FrameworkBundle/Resources/public/images/ic_usuario.jpg' %}*/
/*                                     <img id="imgFotografia" src="{{ asset_url }}" alt="" class="circle" style="width:10%">*/
/*                                     {% endimage %}*/
/*                                 {% endif %}*/
/* */
/*                                 <span class="title">{{ asesor.nombre }} ({{ asesor.total }})</span>*/
/*                                 <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>*/
/*                             </li>*/
/*                         {%  endfor  %}*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="col s6 m6 l6">*/
/*                     <h5>Top Prospectadores</h5>*/
/*                     <ul class="collection">*/
/* */
/*                     {%  for asesor in topProspectadores  %}*/
/*                         <li class="collection-item avatar">*/
/* */
/*                             {% if asesor.url_foto != null %}*/
/*                                 <img src="{{ asesor.url_foto }}" alt="" class="circle">*/
/*                             {% else %}*/
/*                                 {% image '@FrameworkBundle/Resources/public/images/ic_usuario.jpg' %}*/
/*                                 <img id="imgFotografia" src="{{ asset_url }}" alt="" class="circle" style="width:10%">*/
/*                                 {% endimage %}*/
/*                             {% endif %}*/
/* */
/*                             <span class="title">{{ asesor.nombre }} ({{ asesor.total }}</span>*/
/*                             <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>*/
/*                         </li>*/
/*                     {%  endfor  %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col s6 m6 l6">*/
/*                     <h5>Top Propiedades Enviadas en Portafolio</h5>*/
/*                     <ul class="collection">*/
/*                         {%  for inmueble in topInmueblesEnviados  %}*/
/*                             <li class="collection-item avatar">*/
/*                                 <span class="title">ID: {{ inmueble.legacyid }} ({{ inmueble.colonia }} {{ inmueble.calle }})</span>*/
/*                                 <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>*/
/*                             </li>*/
/*                         {%  endfor  %}*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="col s6 m6 l6">*/
/*                     <h5>Top Propiedades Recomendadas</h5>*/
/*                     <ul class="collection">*/
/*                         {%  for inmueble in topInmueblesRecomendados  %}*/
/*                             <li class="collection-item avatar">*/
/*                                 <span class="title">ID: {{ inmueble.legacyid }} ({{ inmueble.colonia }} {{ inmueble.calle }})</span>*/
/*                                 <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col s6 m6 l6">*/
/*                     <h5>Venta/Renta</h5>*/
/*                     <div id="chart1">&nbsp;</div>*/
/*                     <script>*/
/*                         $(function() {*/
/*                             {{ gchart_pie_chart(dataTable1, 'chart1', 400, 200, '') }}*/
/*                         });*/
/*                     </script>*/
/*                 </div>*/
/*                 <div class="col s6 m6 l6">*/
/* */
/*                     <h1>Casas</h1>*/
/*                     <h2>{{ totalCasas }}</h2>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col s6 m6 l6">*/
/*                     <h5>Propiedad por Tipo</h5>*/
/*                     <div id="chart4">&nbsp;</div>*/
/*                     <script>*/
/*                         $(function() {*/
/*                             {{ gchart_pie_chart(dataTable4, 'chart4', 400, 200, '') }}*/
/*                         });*/
/*                     </script>*/
/*                 </div>*/
/*                 <div class="col s6 m6 l6">*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col s12 m12 l12">*/
/*                     <h5>Resumen de Mis Propiedades</h5>*/
/*                     <table class="striped">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th></th>*/
/*                             <th>Totales Activas</th>*/
/*                             <th>Totales Inactivas</th>*/
/*                             <th></th>*/
/*                             <th>Mes Actual Activas</th>*/
/*                             <th>Mes Actual Inactivas</th>*/
/*                         </tr>*/
/*                         </thead>*/
/* */
/*                         <tbody>*/
/*                         {% for linea in reporteTotales %}*/
/*                             <tr>*/
/*                                 <td>*/
/*                                    {{ linea.tipoinmuebleNombre }} - {{ linea.operacionInmuebleNombre }}*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     {{ linea.totalActivo }}*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     {{ linea.totalInactivo }}*/
/*                                 </td>*/
/*                                 <td>*/
/* */
/*                                 </td>*/
/*                                 <td>*/
/*                                     {{ linea.fechaActivo }}*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     {{ linea.fechaInactivo }}*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/* */
/*                         <tr>*/
/*                             <td>*/
/*                                 <p>TOTALES</p>*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ totalActivas }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ totalInactivas }}*/
/*                             </td>*/
/*                             <td>*/
/* */
/*                             </td>*/
/*                             <td>*/
/*                                 {{ totalMensualActivas }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ totalMensualInactivas }}*/
/*                             </td>*/
/*                         </tr>*/
/* */
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script type="text/javascript" src="https://www.google.com/jsapi"></script>*/
/*     <script type="text/javascript">*/
/*         google.load("visualization", "1", {packages:["corechart", 'table', 'treemap', 'gauge']});*/
/*         google.load('jquery', '1.6.0');*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/*     <style>*/
/*         body {*/
/*             background: white;*/
/*             height: 100vh;*/
/*         }*/
/* */
/*         h1, h2, h5 {*/
/*             width:100%;*/
/*             display:flex;*/
/*             justify-content: center;*/
/*         }*/
/*         thead*/
/*         {*/
/*             background-color: #3a87ad;*/
/*             color: white;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
