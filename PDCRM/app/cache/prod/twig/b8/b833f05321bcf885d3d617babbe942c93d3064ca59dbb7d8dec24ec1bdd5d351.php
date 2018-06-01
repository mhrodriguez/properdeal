<?php

/* :prospecto:index.html.twig */
class __TwigTemplate_b6fbf1b72d7f86505e07615418ea1917098c065d27ea40432e709476e8961bc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":prospecto:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
            <br/>
            <div class=\"row\">
                <nav>
                    <div class=\"nav-wrapper z-depth-1\">
                        <div class=\"col s12  blue darken-1 \">
                            <a href=\"#!\" class=\"breadcrumb\">Prospectos</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class=\"row\">
                <div class=\"col s12 m12 l12\">
                    <div id=\"chart1\">&nbsp;</div>
                    <script>
                        \$(function() {
                            ";
        // line 22
        echo $this->env->getExtension('g_chart')->gchartPieChart((isset($context["dataTable1"]) ? $context["dataTable1"] : null), "chart1", 650, 300, "");
        echo "
                        });
                    </script>
                </div>
            </div>

            <div class=\"row\">

            </div>

            <div class=\"row\">
                <div class=\"col s6 m6 l6\">
                    <p>
                        <a><i class=\"material-icons left\">account_circle</i>Prospectos: ";
        // line 35
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["prospectos"]) ? $context["prospectos"] : null)), "html", null, true);
        echo "</a>
                    </p>
                    <p>
                        <a><i class=\"material-icons left\">turned_in</i>Solicitudes recientes: ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["countSolicitudes"]) ? $context["countSolicitudes"] : null), "html", null, true);
        echo "</a>
                    </p>
                    <p>
                        <a><i class=\"material-icons left\">trending_up</i>Promedio de ventas: \$ ";
        // line 41
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["promedioVentas"]) ? $context["promedioVentas"] : null), 2, ".", ","), "html", null, true);
        echo "</a>
                    </p>
                    <p>
                        <a><i class=\"material-icons left\">trending_up</i>Promedio de rentas: \$ ";
        // line 44
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["promedioRentas"]) ? $context["promedioRentas"] : null), 2, ".", ","), "html", null, true);
        echo "</a>
                    </p>

                </div>
                <div class=\"col s6 m6 l6\">
                    <div class=\"row\">
                        <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("prospecto_new", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-1 right\"><i class=\"material-icons left\">add</i>Nuevo Prospecto</a>
                    </div>

                    <div class=\"row\">
                    ";
        // line 54
        if ((isset($context["activo"]) ? $context["activo"] : null)) {
            // line 55
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("prospecto_index", array());
            echo ".xlsx\" class=\"waves-effect waves-light btn blue darken-1 right\" style=\"width:208px\">Generar Excel</a>
                    ";
        } else {
            // line 57
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("prospecto_index", array());
            echo ".xlsx?activo=0\" class=\"waves-effect waves-light btn blue darken-1 right\" style=\"width:208px\">Generar Excel</a>
                    ";
        }
        // line 59
        echo "                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col s6 m6 l6\">
                    <input id=\"txtProspectoBuscar\" placeholder=\"Nombre\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["buscar"]) ? $context["buscar"] : null), "html", null, true);
        echo "\"/>
                    <button type=\"button\" onclick=\"buscar();\" class=\"waves-effect waves-light btn blue darken-1 right\">Buscar</button>
                    <script>
                        function buscar() {
                            txtProspectoBuscar = document.getElementById('txtProspectoBuscar');
                            url = '";
        // line 70
        echo $this->env->getExtension('routing')->getPath("prospecto_index", array());
        echo "?buscar=' + txtProspectoBuscar.value + '&activo=";
        echo twig_escape_filter($this->env, (isset($context["activo"]) ? $context["activo"] : null), "html", null, true);
        echo "';
                            window.location = url;
                        }
                    </script>
                </div>
                <div class=\"col s6 m6 l6\">
                    ";
        // line 76
        if ((isset($context["activo"]) ? $context["activo"] : null)) {
            // line 77
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("prospecto_index", array());
            echo "?activo=0\" class=\"right\">Ver Inactivos</a>
                    ";
        } else {
            // line 79
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("prospecto_index", array());
            echo "\" class=\"right\">Ver Activos</a>
                    ";
        }
        // line 81
        echo "                </div>
            </div>

            ";
        // line 84
        if (array_key_exists("numpaginas", $context)) {
            // line 85
            echo "                ";
            if (((isset($context["numpaginas"]) ? $context["numpaginas"] : null) > 0)) {
                // line 86
                echo "                    <div class=\"row\">
                        <ul class=\"pagination\">
                            ";
                // line 88
                if (((isset($context["paginaactual"]) ? $context["paginaactual"] : null) != 1)) {
                    // line 89
                    echo "                                <li class=\"waves-effect\"><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("prospecto_index", array());
                    echo "?pagina=";
                    echo twig_escape_filter($this->env, ((isset($context["paginaactual"]) ? $context["paginaactual"] : null) - 1), "html", null, true);
                    echo "&buscar=";
                    echo twig_escape_filter($this->env, (isset($context["buscar"]) ? $context["buscar"] : null), "html", null, true);
                    echo "&activo=";
                    echo twig_escape_filter($this->env, (isset($context["activo"]) ? $context["activo"] : null), "html", null, true);
                    echo "\"><i class=\"material-icons\">chevron_left</i></a></li>
                            ";
                }
                // line 91
                echo "
                            ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numpaginas"]) ? $context["numpaginas"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 93
                    echo "                                ";
                    if (($context["p"] == (isset($context["paginaactual"]) ? $context["paginaactual"] : null))) {
                        // line 94
                        echo "                                    <li class=\"active blue darken-1\"><a href=\"#!\">";
                        echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                        echo "</a></li>
                                ";
                    } else {
                        // line 96
                        echo "                                    <li class=\"waves-effect\"><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("prospecto_index", array());
                        echo "?pagina=";
                        echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                        echo "&buscar=";
                        echo twig_escape_filter($this->env, (isset($context["buscar"]) ? $context["buscar"] : null), "html", null, true);
                        echo "&activo=";
                        echo twig_escape_filter($this->env, (isset($context["activo"]) ? $context["activo"] : null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                        echo "</a></li>
                                ";
                    }
                    // line 98
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "
                            ";
                // line 100
                if (((isset($context["paginaactual"]) ? $context["paginaactual"] : null) != (isset($context["numpaginas"]) ? $context["numpaginas"] : null))) {
                    // line 101
                    echo "                                <li class=\"waves-effect\"><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("prospecto_index", array());
                    echo "?pagina=";
                    echo twig_escape_filter($this->env, ((isset($context["paginaactual"]) ? $context["paginaactual"] : null) + 1), "html", null, true);
                    echo "&buscar=";
                    echo twig_escape_filter($this->env, (isset($context["buscar"]) ? $context["buscar"] : null), "html", null, true);
                    echo "&activo=";
                    echo twig_escape_filter($this->env, (isset($context["activo"]) ? $context["activo"] : null), "html", null, true);
                    echo "\"><i class=\"material-icons\">chevron_right</i></a></li>
                            ";
                }
                // line 103
                echo "                        </ul>
                    </div>
                ";
            }
            // line 106
            echo "            ";
        }
        // line 107
        echo "
            <div class=\"row\">

                <table class=\"striped\">
                    <thead>
                    <tr>
                        <th data-field=\"id\">Prospecto</th>
                        <th></th>
                        <th>Operaciones</th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 120
        $context["tamano"] = twig_length_filter($this->env, (isset($context["prospectos"]) ? $context["prospectos"] : null));
        // line 121
        echo "                    ";
        if (((isset($context["tamano"]) ? $context["tamano"] : null) > 0)) {
            // line 122
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["tamano"]) ? $context["tamano"] : null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                // line 123
                echo "                        ";
                $context["prospecto"] = $this->getAttribute((isset($context["prospectos"]) ? $context["prospectos"] : null), $context["index"], array(), "array");
                // line 124
                echo "                            <tr>
                                <td>
                                    <h5>";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "apellidos", array()), "html", null, true);
                echo "</h5>

                                    ";
                // line 128
                if ( !(null === $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "tipo_prospecto_nombre", array()))) {
                    // line 129
                    echo "                                    Tipo: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "tipo_prospecto_nombre", array()), "html", null, true);
                    echo "<br/>
                                    ";
                }
                // line 131
                echo "
                                    Oportunidad: \$ ";
                // line 132
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "presupuesto", array()), 2, ".", ","), "html", null, true);
                echo "<br/>

                                    ";
                // line 134
                $context["inmuebles"] = $this->getAttribute((isset($context["prospectoinmuebles"]) ? $context["prospectoinmuebles"] : null), $context["index"], array(), "array");
                // line 135
                echo "
                                    ";
                // line 136
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["inmuebles"]) ? $context["inmuebles"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
                    // line 137
                    echo "
                                    <div>
                                        ID: ";
                    // line 139
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "legacyid", array()), "html", null, true);
                    echo "<br>
                                        ";
                    // line 140
                    if ((twig_length_filter($this->env, $this->getAttribute($context["inmueble"], "Imagenes", array())) > 0)) {
                        // line 141
                        echo "                                            <img class=\"imginmueble\" src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["inmueble"], "Imagenes", array()), 0, array(), "array"), "getWebPath", array(), "method"), "html", null, true);
                        echo "\" style=\"width:40px; height:30px\"/>
                                        ";
                    }
                    // line 143
                    echo "                                    </div>

                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo "
                                </td>
                                <td>
                                    ";
                // line 149
                if ( !(null === $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "telefono", array()))) {
                    // line 150
                    echo "                                        <p><i class=\"material-icons left\">phone</i>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "telefono", array()), "html", null, true);
                    echo "</p>
                                    ";
                }
                // line 152
                echo "                                    ";
                if ( !(null === $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "telefono_movil", array()))) {
                    // line 153
                    echo "                                        <p><i class=\"material-icons left\">phone</i>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "telefono_movil", array()), "html", null, true);
                    echo "</p>
                                    ";
                }
                // line 155
                echo "                                    ";
                if ( !(null === $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "email", array()))) {
                    // line 156
                    echo "                                    <p><a href=\"#!\"><i class=\"material-icons left\">email</i>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "email", array()), "html", null, true);
                    echo "</a></p>
                                    ";
                }
                // line 158
                echo "                                    <p>Alta: ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "fecha_creacion", array()), "d/m/Y"), "html", null, true);
                echo "</p>
                                </td>
                                <td>
                                    <div>
                                    <a href=\"";
                // line 162
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prospecto_detalle", array("id" => $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"tooltipped\" data-tooltip=\"Detalle\" data-position=\"top\"><i class=\"material-icons left\">visibility</i></a>

                                    ";
                // line 164
                if ((null === $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "idsolicitud", array()))) {
                    // line 165
                    echo "                                    <a href=\"#\" onclick=\"var url; if (window.location.href.indexOf('#') > 0) { url = window.location.href.substring(0, window.location.href.indexOf('#')); } else { url = window.location.href; } window.location.href='";
                    echo $this->env->getExtension('routing')->getPath("solicitud_new", array());
                    echo "?idProspecto=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "id", array()), "html", null, true);
                    echo "&url=' + url.replace(/&/g, 'AMP');\" class=\"tooltipped\" data-tooltip=\"Solicitud\" data-position=\"top\"><i class=\"material-icons left\">turned_in</i></a>
                                    ";
                } else {
                    // line 167
                    echo "                                    <a href=\"#\" onclick=\"var url; if (window.location.href.indexOf('#') > 0) { url = window.location.href.substring(0, window.location.href.indexOf('#')); } else { url = window.location.href; } window.location.href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_edit", array("id" => $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "idsolicitud", array()))), "html", null, true);
                    echo "?url=' + url.replace(/&/g, 'AMP');\" class=\"tooltipped\" data-tooltip=\"Solicitud\" data-position=\"top\"><i class=\"material-icons left\">turned_in</i></a>
                                    ";
                }
                // line 169
                echo "
                                    <a href=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prospecto_edit", array("id" => $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"tooltipped\" data-tooltip=\"Editar\" data-position=\"top\"><i class=\"material-icons left\">edit</i></a>
                                    <a href=\"";
                // line 171
                echo $this->env->getExtension('routing')->getPath("mensaje_new", array());
                echo "?tipoMensaje=5&idProspecto=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "id", array()), "html", null, true);
                echo "\" class=\"tooltipped\" data-tooltip=\"Enviar mensaje\" data-position=\"top\">
                                        <i class=\"material-icons left\">question_answer</i>
                                    </a>
                                    <a href=\"";
                // line 174
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inmueble_portafolioprospecto", array("idprospecto" => $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"tooltipped\" data-tooltip=\"Ver Portafolio\" data-position=\"top\"><i class=\"material-icons left\">business_center</i></a>
                                    <a href=\"";
                // line 175
                echo $this->env->getExtension('routing')->getPath("archivop_index", array());
                echo "?idProspecto=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "id", array()), "html", null, true);
                echo "\" class=\"tooltipped\" data-tooltip=\"Subir archivos\" data-position=\"top\"><i class=\"material-icons left\">description</i></a>

                                    <a href=\"";
                // line 177
                echo $this->env->getExtension('routing')->getPath("tarea_prospecto", array());
                echo "?idProspecto=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "id", array()), "html", null, true);
                echo "\" class=\"tooltipped\" data-tooltip=\"Actividad\" data-position=\"top\">
                                        <i class=\"material-icons left\">date_range</i>
                                    </a>
                                    <a class=\"tooltipped\" data-tooltip=\"Borrar\" data-position=\"top\" href=\"";
                // line 180
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prospecto_borrar", array("id" => $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "id", array()))), "html", null, true);
                echo "\" onclick=\"if (confirm('¿Está seguro que desea borrar este registro?')) { return true; } else { return false; }\"><i class=\"material-icons left\">delete</i></a>

                                    <br><br>

                                    ";
                // line 184
                if (($this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "activo", array()) == true)) {
                    // line 185
                    echo "                                        <p>Activo<i class=\"material-icons left\">play_circle_outline</i></p>

                                        <a href=\"";
                    // line 187
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prospecto_switchactivo", array("id" => $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "id", array()))), "html", null, true);
                    echo "\">Desactivar</a>
                                    ";
                } else {
                    // line 189
                    echo "                                        <p>Inactivo<i class=\"material-icons left\">not_interested</i></p>

                                        <a href=\"";
                    // line 191
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prospecto_switchactivo", array("id" => $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "id", array()))), "html", null, true);
                    echo "\">Activar</a>
                                    ";
                }
                // line 193
                echo "
                                    </div>
                                    <script>
                                        \$(document).ready(function(){
                                        \$('.tooltipped').tooltip();
                                        });
                                    </script>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "                    ";
        }
        // line 204
        echo "                    </tbody>
                </table>
            </div>

            ";
        // line 208
        if (array_key_exists("numpaginas", $context)) {
            // line 209
            echo "                ";
            if (((isset($context["numpaginas"]) ? $context["numpaginas"] : null) > 0)) {
                // line 210
                echo "                    <div class=\"row\">
                        <ul class=\"pagination\">

                            ";
                // line 213
                if (((isset($context["paginaactual"]) ? $context["paginaactual"] : null) != 1)) {
                    // line 214
                    echo "                            <li class=\"waves-effect\"><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("prospecto_index", array());
                    echo "?pagina=";
                    echo twig_escape_filter($this->env, ((isset($context["paginaactual"]) ? $context["paginaactual"] : null) - 1), "html", null, true);
                    echo "&buscar=";
                    echo twig_escape_filter($this->env, (isset($context["buscar"]) ? $context["buscar"] : null), "html", null, true);
                    echo "&activo=";
                    echo twig_escape_filter($this->env, (isset($context["activo"]) ? $context["activo"] : null), "html", null, true);
                    echo "\"><i class=\"material-icons\">chevron_left</i></a></li>
                            ";
                }
                // line 216
                echo "
                            ";
                // line 217
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numpaginas"]) ? $context["numpaginas"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 218
                    echo "                                ";
                    if (($context["p"] == (isset($context["paginaactual"]) ? $context["paginaactual"] : null))) {
                        // line 219
                        echo "                                    <li class=\"active blue darken-1\"><a href=\"#!\">";
                        echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                        echo "</a></li>
                                ";
                    } else {
                        // line 221
                        echo "                                    <li class=\"waves-effect\"><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("prospecto_index", array());
                        echo "?pagina=";
                        echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                        echo "&buscar=";
                        echo twig_escape_filter($this->env, (isset($context["buscar"]) ? $context["buscar"] : null), "html", null, true);
                        echo "&activo=";
                        echo twig_escape_filter($this->env, (isset($context["activo"]) ? $context["activo"] : null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                        echo "</a></li>
                                ";
                    }
                    // line 223
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 224
                echo "
                            ";
                // line 225
                if (((isset($context["paginaactual"]) ? $context["paginaactual"] : null) != (isset($context["numpaginas"]) ? $context["numpaginas"] : null))) {
                    // line 226
                    echo "                            <li class=\"waves-effect\"><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("prospecto_index", array());
                    echo "?pagina=";
                    echo twig_escape_filter($this->env, ((isset($context["paginaactual"]) ? $context["paginaactual"] : null) + 1), "html", null, true);
                    echo "&buscar=";
                    echo twig_escape_filter($this->env, (isset($context["buscar"]) ? $context["buscar"] : null), "html", null, true);
                    echo "&activo=";
                    echo twig_escape_filter($this->env, (isset($context["activo"]) ? $context["activo"] : null), "html", null, true);
                    echo "\"><i class=\"material-icons\">chevron_right</i></a></li>
                            ";
                }
                // line 228
                echo "                        </ul>
                    </div>
                ";
            }
            // line 231
            echo "            ";
        }
        // line 232
        echo "
            <div class=\"row\">
                <div class=\"col s6 m6 l6\">
                    <table class=\"striped\">
                        <thead>
                        <tr>
                            <th data-field=\"id\">
                                <p><a><i class=\"material-icons left\">insert_invitation</i>Prospectos sin actividad</a></p>
                            </th>
                            <th data-field=\"id\">
                               <p><a><i class=\"material-icons left\">insert_invitation</i>Último Envío</a></p>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prospectonoseguimiento"]) ? $context["prospectonoseguimiento"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["prospectoseg"]) {
            // line 248
            echo "                            <tr>
                                <td>
                                    <b>";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute($context["prospectoseg"], "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prospectoseg"], "apellidos", array()), "html", null, true);
            echo "</b><br>
                                    Registrado por: ";
            // line 251
            echo twig_escape_filter($this->env, $this->getAttribute($context["prospectoseg"], "nombre_encargado", array()), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 254
            if ( !(null === $this->getAttribute($context["prospectoseg"], "fecha", array()))) {
                // line 255
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["prospectoseg"], "fecha", array()), "d/m/Y"), "html", null, true);
                echo "
                                    ";
            }
            // line 257
            echo "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prospectoseg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"col s6 m6 l6\">
                    <table class=\"striped\">
                        <thead>
                        <tr>
                            <th data-field=\"id\">
                                <p><a><i class=\"material-icons left\">insert_invitation</i>Pendientes de seguimiento</a></p>
                            </th>
                            <th data-field=\"id\">
                                <p><a><i class=\"material-icons left\">insert_invitation</i>Última actividad</a></p>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 276
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prospectoseguimiento"]) ? $context["prospectoseguimiento"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["prospectoseg"]) {
            // line 277
            echo "                            <tr>
                                <td>
                                    <b>";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($context["prospectoseg"], "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prospectoseg"], "apellidos", array()), "html", null, true);
            echo "</b></b><br>
                                    Registrado por: ";
            // line 280
            echo twig_escape_filter($this->env, $this->getAttribute($context["prospectoseg"], "nombre_encargado", array()), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 283
            if ( !(null === $this->getAttribute($context["prospectoseg"], "fecha", array()))) {
                // line 284
                echo "                                    <div class=\"chip\">
                                    ";
                // line 285
                echo twig_escape_filter($this->env, $this->getAttribute($context["prospectoseg"], "accion_nombre", array()), "html", null, true);
                echo "
                                    </div>
                                    <br><br>
                                    &nbsp;&nbsp;&nbsp;";
                // line 288
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["prospectoseg"], "fecha", array()), "d/m/Y"), "html", null, true);
                echo "
                                    ";
            }
            // line 290
            echo "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prospectoseg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        echo "                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
    <script type=\"text/javascript\">
        google.load(\"visualization\", \"1\", {packages:[\"corechart\", 'table', 'treemap', 'gauge']});
        google.load('jquery', '1.6.0');
    </script>

";
    }

    // line 309
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 310
        echo "
    <style>
        body {
            background: white;
            height: 100vh;
        }

        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted darkblue;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: white;
            color: cornflowerblue;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

            /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
        }
    </style>

";
    }

    public function getTemplateName()
    {
        return ":prospecto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  700 => 310,  697 => 309,  679 => 293,  671 => 290,  666 => 288,  660 => 285,  657 => 284,  655 => 283,  649 => 280,  643 => 279,  639 => 277,  635 => 276,  617 => 260,  609 => 257,  603 => 255,  601 => 254,  595 => 251,  589 => 250,  585 => 248,  581 => 247,  564 => 232,  561 => 231,  556 => 228,  544 => 226,  542 => 225,  539 => 224,  533 => 223,  519 => 221,  513 => 219,  510 => 218,  506 => 217,  503 => 216,  491 => 214,  489 => 213,  484 => 210,  481 => 209,  479 => 208,  473 => 204,  470 => 203,  455 => 193,  450 => 191,  446 => 189,  441 => 187,  437 => 185,  435 => 184,  428 => 180,  420 => 177,  413 => 175,  409 => 174,  401 => 171,  397 => 170,  394 => 169,  388 => 167,  380 => 165,  378 => 164,  373 => 162,  365 => 158,  359 => 156,  356 => 155,  350 => 153,  347 => 152,  341 => 150,  339 => 149,  334 => 146,  326 => 143,  320 => 141,  318 => 140,  314 => 139,  310 => 137,  306 => 136,  303 => 135,  301 => 134,  296 => 132,  293 => 131,  287 => 129,  285 => 128,  278 => 126,  274 => 124,  271 => 123,  266 => 122,  263 => 121,  261 => 120,  246 => 107,  243 => 106,  238 => 103,  226 => 101,  224 => 100,  221 => 99,  215 => 98,  201 => 96,  195 => 94,  192 => 93,  188 => 92,  185 => 91,  173 => 89,  171 => 88,  167 => 86,  164 => 85,  162 => 84,  157 => 81,  151 => 79,  145 => 77,  143 => 76,  132 => 70,  124 => 65,  116 => 59,  110 => 57,  104 => 55,  102 => 54,  95 => 50,  86 => 44,  80 => 41,  74 => 38,  68 => 35,  52 => 22,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <!-- Page Layout here -->*/
/*             <br/>*/
/*             <div class="row">*/
/*                 <nav>*/
/*                     <div class="nav-wrapper z-depth-1">*/
/*                         <div class="col s12  blue darken-1 ">*/
/*                             <a href="#!" class="breadcrumb">Prospectos</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col s12 m12 l12">*/
/*                     <div id="chart1">&nbsp;</div>*/
/*                     <script>*/
/*                         $(function() {*/
/*                             {{ gchart_pie_chart(dataTable1, 'chart1', 650, 300, '') }}*/
/*                         });*/
/*                     </script>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/* */
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col s6 m6 l6">*/
/*                     <p>*/
/*                         <a><i class="material-icons left">account_circle</i>Prospectos: {{ prospectos|length }}</a>*/
/*                     </p>*/
/*                     <p>*/
/*                         <a><i class="material-icons left">turned_in</i>Solicitudes recientes: {{ countSolicitudes }}</a>*/
/*                     </p>*/
/*                     <p>*/
/*                         <a><i class="material-icons left">trending_up</i>Promedio de ventas: $ {{ promedioVentas|number_format(2, '.', ',') }}</a>*/
/*                     </p>*/
/*                     <p>*/
/*                         <a><i class="material-icons left">trending_up</i>Promedio de rentas: $ {{ promedioRentas|number_format(2, '.', ',') }}</a>*/
/*                     </p>*/
/* */
/*                 </div>*/
/*                 <div class="col s6 m6 l6">*/
/*                     <div class="row">*/
/*                         <a href="{{ path('prospecto_new', {}) }}" class="waves-effect waves-light btn blue darken-1 right"><i class="material-icons left">add</i>Nuevo Prospecto</a>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                     {% if activo %}*/
/*                     <a href="{{ path('prospecto_index', {}) }}.xlsx" class="waves-effect waves-light btn blue darken-1 right" style="width:208px">Generar Excel</a>*/
/*                     {% else %}*/
/*                         <a href="{{ path('prospecto_index', {}) }}.xlsx?activo=0" class="waves-effect waves-light btn blue darken-1 right" style="width:208px">Generar Excel</a>*/
/*                     {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col s6 m6 l6">*/
/*                     <input id="txtProspectoBuscar" placeholder="Nombre" value="{{ buscar }}"/>*/
/*                     <button type="button" onclick="buscar();" class="waves-effect waves-light btn blue darken-1 right">Buscar</button>*/
/*                     <script>*/
/*                         function buscar() {*/
/*                             txtProspectoBuscar = document.getElementById('txtProspectoBuscar');*/
/*                             url = '{{ path('prospecto_index', {}) }}?buscar=' + txtProspectoBuscar.value + '&activo={{ activo }}';*/
/*                             window.location = url;*/
/*                         }*/
/*                     </script>*/
/*                 </div>*/
/*                 <div class="col s6 m6 l6">*/
/*                     {% if activo %}*/
/*                         <a href="{{ path('prospecto_index', {}) }}?activo=0" class="right">Ver Inactivos</a>*/
/*                     {% else %}*/
/*                         <a href="{{ path('prospecto_index', {}) }}" class="right">Ver Activos</a>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {% if numpaginas is defined %}*/
/*                 {% if numpaginas>0 %}*/
/*                     <div class="row">*/
/*                         <ul class="pagination">*/
/*                             {% if paginaactual != 1 %}*/
/*                                 <li class="waves-effect"><a href="{{ path('prospecto_index', {}) }}?pagina={{ paginaactual-1 }}&buscar={{ buscar }}&activo={{ activo }}"><i class="material-icons">chevron_left</i></a></li>*/
/*                             {% endif %}*/
/* */
/*                             {% for p in 1..numpaginas %}*/
/*                                 {% if p == paginaactual %}*/
/*                                     <li class="active blue darken-1"><a href="#!">{{ p }}</a></li>*/
/*                                 {% else %}*/
/*                                     <li class="waves-effect"><a href="{{ path('prospecto_index', {}) }}?pagina={{ p }}&buscar={{ buscar }}&activo={{ activo }}">{{ p }}</a></li>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/* */
/*                             {% if paginaactual != numpaginas %}*/
/*                                 <li class="waves-effect"><a href="{{ path('prospecto_index', {}) }}?pagina={{ paginaactual+1 }}&buscar={{ buscar }}&activo={{ activo }}"><i class="material-icons">chevron_right</i></a></li>*/
/*                             {% endif %}*/
/*                         </ul>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/*             <div class="row">*/
/* */
/*                 <table class="striped">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th data-field="id">Prospecto</th>*/
/*                         <th></th>*/
/*                         <th>Operaciones</th>*/
/*                     </tr>*/
/*                     </thead>*/
/* */
/*                     <tbody>*/
/*                     {% set tamano = prospectos|length %}*/
/*                     {% if tamano > 0 %}*/
/*                     {% for index in 0..tamano-1 %}*/
/*                         {% set prospecto = prospectos[index]  %}*/
/*                             <tr>*/
/*                                 <td>*/
/*                                     <h5>{{ prospecto.nombre }} {{ prospecto.apellidos }}</h5>*/
/* */
/*                                     {% if prospecto.tipo_prospecto_nombre is not null  %}*/
/*                                     Tipo: {{ prospecto.tipo_prospecto_nombre }}<br/>*/
/*                                     {% endif %}*/
/* */
/*                                     Oportunidad: $ {{ prospecto.presupuesto|number_format(2, '.', ',') }}<br/>*/
/* */
/*                                     {% set inmuebles = prospectoinmuebles[index] %}*/
/* */
/*                                     {% for inmueble in inmuebles %}*/
/* */
/*                                     <div>*/
/*                                         ID: {{ inmueble.legacyid }}<br>*/
/*                                         {% if (inmueble.Imagenes|length>0) %}*/
/*                                             <img class="imginmueble" src="{{ inmueble.Imagenes[0].getWebPath() }}" style="width:40px; height:30px"/>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/* */
/*                                     {% endfor %}*/
/* */
/*                                 </td>*/
/*                                 <td>*/
/*                                     {% if prospecto.telefono is not null %}*/
/*                                         <p><i class="material-icons left">phone</i>{{ prospecto.telefono }}</p>*/
/*                                     {% endif %}*/
/*                                     {% if prospecto.telefono_movil is not null  %}*/
/*                                         <p><i class="material-icons left">phone</i>{{ prospecto.telefono_movil }}</p>*/
/*                                     {% endif %}*/
/*                                     {% if prospecto.email is not null  %}*/
/*                                     <p><a href="#!"><i class="material-icons left">email</i>{{ prospecto.email }}</a></p>*/
/*                                     {% endif %}*/
/*                                     <p>Alta: {{ prospecto.fecha_creacion | date('d/m/Y') }}</p>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <div>*/
/*                                     <a href="{{ path('prospecto_detalle', {'id':prospecto.id}) }}" class="tooltipped" data-tooltip="Detalle" data-position="top"><i class="material-icons left">visibility</i></a>*/
/* */
/*                                     {% if prospecto.idsolicitud is null %}*/
/*                                     <a href="#" onclick="var url; if (window.location.href.indexOf('#') > 0) { url = window.location.href.substring(0, window.location.href.indexOf('#')); } else { url = window.location.href; } window.location.href='{{ path('solicitud_new', {})  }}?idProspecto={{ prospecto.id }}&url=' + url.replace(/&/g, 'AMP');" class="tooltipped" data-tooltip="Solicitud" data-position="top"><i class="material-icons left">turned_in</i></a>*/
/*                                     {% else %}*/
/*                                     <a href="#" onclick="var url; if (window.location.href.indexOf('#') > 0) { url = window.location.href.substring(0, window.location.href.indexOf('#')); } else { url = window.location.href; } window.location.href='{{ path('solicitud_edit', {'id': prospecto.idsolicitud})  }}?url=' + url.replace(/&/g, 'AMP');" class="tooltipped" data-tooltip="Solicitud" data-position="top"><i class="material-icons left">turned_in</i></a>*/
/*                                     {% endif %}*/
/* */
/*                                     <a href="{{ path('prospecto_edit', {'id':prospecto.id}) }}" class="tooltipped" data-tooltip="Editar" data-position="top"><i class="material-icons left">edit</i></a>*/
/*                                     <a href="{{ path('mensaje_new', {}) }}?tipoMensaje=5&idProspecto={{ prospecto.id }}" class="tooltipped" data-tooltip="Enviar mensaje" data-position="top">*/
/*                                         <i class="material-icons left">question_answer</i>*/
/*                                     </a>*/
/*                                     <a href="{{ path('inmueble_portafolioprospecto', {'idprospecto':prospecto.id}) }}" class="tooltipped" data-tooltip="Ver Portafolio" data-position="top"><i class="material-icons left">business_center</i></a>*/
/*                                     <a href="{{ path ('archivop_index', {}) }}?idProspecto={{ prospecto.id }}" class="tooltipped" data-tooltip="Subir archivos" data-position="top"><i class="material-icons left">description</i></a>*/
/* */
/*                                     <a href="{{ path('tarea_prospecto', {}) }}?idProspecto={{ prospecto.id }}" class="tooltipped" data-tooltip="Actividad" data-position="top">*/
/*                                         <i class="material-icons left">date_range</i>*/
/*                                     </a>*/
/*                                     <a class="tooltipped" data-tooltip="Borrar" data-position="top" href="{{ path('prospecto_borrar', {'id':prospecto.id}) }}" onclick="if (confirm('¿Está seguro que desea borrar este registro?')) { return true; } else { return false; }"><i class="material-icons left">delete</i></a>*/
/* */
/*                                     <br><br>*/
/* */
/*                                     {% if prospecto.activo == true %}*/
/*                                         <p>Activo<i class="material-icons left">play_circle_outline</i></p>*/
/* */
/*                                         <a href="{{ path('prospecto_switchactivo', {'id':prospecto.id}) }}">Desactivar</a>*/
/*                                     {% else %}*/
/*                                         <p>Inactivo<i class="material-icons left">not_interested</i></p>*/
/* */
/*                                         <a href="{{ path('prospecto_switchactivo', {'id':prospecto.id}) }}">Activar</a>*/
/*                                     {% endif %}*/
/* */
/*                                     </div>*/
/*                                     <script>*/
/*                                         $(document).ready(function(){*/
/*                                         $('.tooltipped').tooltip();*/
/*                                         });*/
/*                                     </script>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/* */
/*             {% if numpaginas is defined %}*/
/*                 {% if numpaginas>0 %}*/
/*                     <div class="row">*/
/*                         <ul class="pagination">*/
/* */
/*                             {% if paginaactual != 1 %}*/
/*                             <li class="waves-effect"><a href="{{ path('prospecto_index', {}) }}?pagina={{ paginaactual-1 }}&buscar={{ buscar }}&activo={{ activo }}"><i class="material-icons">chevron_left</i></a></li>*/
/*                             {% endif %}*/
/* */
/*                             {% for p in 1..numpaginas %}*/
/*                                 {% if p == paginaactual %}*/
/*                                     <li class="active blue darken-1"><a href="#!">{{ p }}</a></li>*/
/*                                 {% else %}*/
/*                                     <li class="waves-effect"><a href="{{ path('prospecto_index', {}) }}?pagina={{ p }}&buscar={{ buscar }}&activo={{ activo }}">{{ p }}</a></li>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/* */
/*                             {% if paginaactual != numpaginas %}*/
/*                             <li class="waves-effect"><a href="{{ path('prospecto_index', {}) }}?pagina={{ paginaactual+1 }}&buscar={{ buscar }}&activo={{ activo }}"><i class="material-icons">chevron_right</i></a></li>*/
/*                             {% endif %}*/
/*                         </ul>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/*             <div class="row">*/
/*                 <div class="col s6 m6 l6">*/
/*                     <table class="striped">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th data-field="id">*/
/*                                 <p><a><i class="material-icons left">insert_invitation</i>Prospectos sin actividad</a></p>*/
/*                             </th>*/
/*                             <th data-field="id">*/
/*                                <p><a><i class="material-icons left">insert_invitation</i>Último Envío</a></p>*/
/*                             </th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% for prospectoseg in prospectonoseguimiento %}*/
/*                             <tr>*/
/*                                 <td>*/
/*                                     <b>{{ prospectoseg.nombre }} {{ prospectoseg.apellidos }}</b><br>*/
/*                                     Registrado por: {{ prospectoseg.nombre_encargado }}*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     {% if prospectoseg.fecha is not null %}*/
/*                                     {{ prospectoseg.fecha|date("d/m/Y") }}*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 <div class="col s6 m6 l6">*/
/*                     <table class="striped">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th data-field="id">*/
/*                                 <p><a><i class="material-icons left">insert_invitation</i>Pendientes de seguimiento</a></p>*/
/*                             </th>*/
/*                             <th data-field="id">*/
/*                                 <p><a><i class="material-icons left">insert_invitation</i>Última actividad</a></p>*/
/*                             </th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% for prospectoseg in prospectoseguimiento %}*/
/*                             <tr>*/
/*                                 <td>*/
/*                                     <b>{{ prospectoseg.nombre }} {{ prospectoseg.apellidos }}</b></b><br>*/
/*                                     Registrado por: {{ prospectoseg.nombre_encargado }}*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     {% if prospectoseg.fecha is not null %}*/
/*                                     <div class="chip">*/
/*                                     {{ prospectoseg.accion_nombre }}*/
/*                                     </div>*/
/*                                     <br><br>*/
/*                                     &nbsp;&nbsp;&nbsp;{{ prospectoseg.fecha|date("d/m/Y") }}*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <script type="text/javascript" src="https://www.google.com/jsapi"></script>*/
/*     <script type="text/javascript">*/
/*         google.load("visualization", "1", {packages:["corechart", 'table', 'treemap', 'gauge']});*/
/*         google.load('jquery', '1.6.0');*/
/*     </script>*/
/* */
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
/*         .tooltip {*/
/*             position: relative;*/
/*             display: inline-block;*/
/*             border-bottom: 1px dotted darkblue;*/
/*         }*/
/* */
/*         .tooltip .tooltiptext {*/
/*             visibility: hidden;*/
/*             width: 120px;*/
/*             background-color: white;*/
/*             color: cornflowerblue;*/
/*             text-align: center;*/
/*             border-radius: 6px;*/
/*             padding: 5px 0;*/
/* */
/*             /* Position the tooltip *//* */
/*             position: absolute;*/
/*             z-index: 1;*/
/*         }*/
/* */
/*         .tooltip:hover .tooltiptext {*/
/*             visibility: visible;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
