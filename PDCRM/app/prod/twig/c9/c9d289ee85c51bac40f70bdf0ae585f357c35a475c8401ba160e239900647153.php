<?php

/* :dashboard:index.html.twig */
class __TwigTemplate_c0005c9bcd1d23d39d896ba0bb9c658131fd5d8b9d692b083443aee6d4abd3ed extends Twig_Template
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
                <h5>Propiedades Registradas</h5>
                <div id=\"chart2\">&nbsp;</div>
                    <script>
                        \$(function() {
                        ";
        // line 22
        echo $this->env->getExtension('g_chart')->gchartColumnChart((isset($context["dataTable2"]) ? $context["dataTable2"] : null), "chart2", 800, 400, "");
        echo "
                    });
                    </script>
            </div>

            <div class=\"row\">
                <div class=\"col s6 m6 l6\">
                    <h5>Top Captadores</h5>
                </div>
                <div class=\"col s6 m6 l6\">
                    <h5>Top Prospectadores</h5>
                    <ul class=\"collection\">

                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topProspectadores"]) ? $context["topProspectadores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["asesor"]) {
            // line 36
            echo "                        <li class=\"collection-item avatar\">

                            ";
            // line 38
            if (($this->getAttribute($context["asesor"], "url_foto", array()) != null)) {
                // line 39
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asesor"], "url_foto", array()), "html", null, true);
                echo "\" alt=\"\" class=\"circle\">
                            ";
            } else {
                // line 41
                echo "                                ";
                if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                    // asset "3a93b33_0"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33_0") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33_ic_usuario_1.jpg");
                    // line 42
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
                // line 44
                echo "                            ";
            }
            // line 45
            echo "
                            <span class=\"title\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["asesor"], "nombre", array()), "html", null, true);
            echo "</span>
                            <a href=\"#!\" class=\"secondary-content\"><i class=\"material-icons\">grade</i></a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asesor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    </ul>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col s6 m6 l6\">
                    <div id=\"chart1\">&nbsp;</div>
                    <script>
                        \$(function() {
                            ";
        // line 59
        echo $this->env->getExtension('g_chart')->gchartPieChart((isset($context["dataTable1"]) ? $context["dataTable1"] : null), "chart1", 400, 200, "");
        echo "
                        });
                    </script>
                </div>
                <div class=\"col s6 m6 l6\">

                    <h1>Casas</h1>
                    <h2>0</h2>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col s12 m12 l12\">
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
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reporteTotales"]) ? $context["reporteTotales"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["linea"]) {
            // line 86
            echo "                            <tr>
                                <td>
                                   ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["linea"], "tipoinmuebleNombre", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["linea"], "operacionInmuebleNombre", array()), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["linea"], "totalActivo", array()), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["linea"], "totalInactivo", array()), "html", null, true);
            echo "
                                </td>
                                <td>

                                </td>
                                <td>
                                    ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["linea"], "fechaActivo", array()), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["linea"], "fechaInactivo", array()), "html", null, true);
            echo "
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                        </tbody>
                    </table>
                </div>
            </div>

";
    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        // line 115
        echo "    <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
    <script type=\"text/javascript\">
        google.load(\"visualization\", \"1\", {packages:[\"corechart\", 'table', 'treemap', 'gauge']});
        google.load('jquery', '1.6.0');
    </script>
";
    }

    // line 122
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 123
        echo "
    <style>
        body {
            background: white;
            height: 300vh;
        }

        h1, h2, h5 {
            width:100%;
            display:flex;
            justify-content: center;
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
        return array (  231 => 123,  228 => 122,  219 => 115,  216 => 114,  207 => 107,  197 => 103,  191 => 100,  182 => 94,  176 => 91,  168 => 88,  164 => 86,  160 => 85,  131 => 59,  120 => 50,  110 => 46,  107 => 45,  104 => 44,  90 => 42,  85 => 41,  79 => 39,  77 => 38,  73 => 36,  69 => 35,  53 => 22,  33 => 4,  30 => 3,  11 => 1,);
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
/*                 <div class="col s6 m6 l6">*/
/*                     <h5>Top Captadores</h5>*/
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
/*                             <span class="title">{{ asesor.nombre }}</span>*/
/*                             <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>*/
/*                         </li>*/
/*                     {%  endfor  %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col s6 m6 l6">*/
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
/*                     <h2>0</h2>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col s12 m12 l12">*/
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
/*             height: 300vh;*/
/*         }*/
/* */
/*         h1, h2, h5 {*/
/*             width:100%;*/
/*             display:flex;*/
/*             justify-content: center;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
