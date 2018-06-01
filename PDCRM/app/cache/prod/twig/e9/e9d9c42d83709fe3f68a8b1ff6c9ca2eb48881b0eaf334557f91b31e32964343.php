<?php

/* :tarea:new.html.twig */
class __TwigTemplate_40dca8f8ca19423b56e108a1cf1b53860fd97b72c1044cc6b3ced2a036f8988e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":tarea:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseabc.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "forms/custom_time_widget.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"row white z-depth-2\">
        <div class=\"formcontainer\">
            <div>
                <br/>
                <h5>Bitácora</h5>
                <br/><br/>
                ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'widget');
        echo "
                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'label');
        echo "
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'errors');
        echo "
                    </div>
                </div>

                <!--div class=\"row\">
                    <div class=\"input-field col s12 activelabel\"-->
                        ";
        // line 26
        echo "                        ";
        // line 27
        echo "                        ";
        // line 28
        echo "                    <!--/div>
                </div-->

                <div class=\"row\">
                    <div class=\"input-field col s12 activelabel\">
                        <div class=\"datepicker\">
                            Fecha:
                            <input type=\"text\" id=\"tarea_fecha\" name=\"tarea_fecha\" required=\"required\" />
                            <a id=\"fechaError\" style=\"visibility:hidden;color:black\">Fecha inválida<br></a>
                            <div id=\"tarea_fecha_time\" class=\"\">
                                <table>
                                    <tr>
                                        <td>Hora:<select id=\"tarea_hora\" name=\"tarea_hora\">
                                                <option value=\"0\"  selected=\"selected\">00</option>            <option value=\"1\" >01</option>            <option value=\"2\" >02</option>            <option value=\"3\" >03</option>            <option value=\"4\" >04</option>            <option value=\"5\" >05</option>            <option value=\"6\" >06</option>            <option value=\"7\" >07</option>            <option value=\"8\" >08</option>            <option value=\"9\" >09</option>            <option value=\"10\" >10</option>            <option value=\"11\" >11</option>            <option value=\"12\" >12</option>            <option value=\"13\" >13</option>            <option value=\"14\" >14</option>            <option value=\"15\" >15</option>            <option value=\"16\" >16</option>            <option value=\"17\" >17</option>            <option value=\"18\" >18</option>            <option value=\"19\" >19</option>            <option value=\"20\" >20</option>            <option value=\"21\" >21</option>            <option value=\"22\" >22</option>            <option value=\"23\" >23</option></select>
                                        </td>
                                        <td>Minuto: <select id=\"tarea_minuto\" name=\"tarea_minuto\">
                                                <option value=\"0\" >00</option>
                                                <option value=\"10\" >10</option><option value=\"20\" >20</option>            <option value=\"30\" >30</option>            <option value=\"40\" >40</option>            <option value=\"50\" >50</option></select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_accion", array()), 'widget');
        echo "
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_accion", array()), 'label');
        echo "
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_accion", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_prospecto", array()), 'widget');
        echo "
                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_prospecto", array()), 'label');
        echo "
                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_prospecto", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "propiedad", array()), 'widget');
        echo "
                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "propiedad", array()), 'label');
        echo "
                        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "propiedad", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comentarios", array()), 'widget');
        echo "
                        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comentarios", array()), 'label');
        echo "
                        ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comentarios", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "agregarmicalendario", array()), 'widget');
        echo "
                        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "agregarmicalendario", array()), 'label');
        echo "
                        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "agregarmicalendario", array()), 'errors');
        echo "
                    </div>
                </div>

                ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "indexSelectedAsesor", array()), 'row');
        echo "

                <input id=\"fecha\"  type=\"hidden\"/>

                <input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue darken-4 center\" onclick=\"return fechaHoraConFormato();\"/>

                ";
        // line 101
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>
        </div>
    </div>


    <style>
        body{
            background-color: white;
            height: 100vh;
        }

        #tarea_fecha_time {
            float: left;
        }

        .activelabel label {
            font-size: 0.8rem;
            -webkit-transform: translateY(-140%);
            transform: translateY(-140%);
        }

    </style>

    <script>
        \$(document).ready(function() {
            \$('select').material_select();
        });

        \$('#tarea_fecha').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15, // Creates a dropdown of 15 years to control year
            format: 'yyyy-mm-dd',
            monthsFull: [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ],
            monthsShort: [ 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic' ],
            weekdaysFull: [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sabado' ],
            weekdaysShort: [ 'Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab' ],
            weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],
            today: 'Hoy',
            clear: 'Limpiar',
            close: 'Cerrar',
            labelMonthNext: 'Siguiente mes',
            labelMonthPrev: 'Mes anterior',
            labelMonthSelect: 'Selecciona un mes',
            labelYearSelect: 'Selecciona un año'
        });

        function fechaHoraConFormato()
        {
            if (document.getElementById('tarea_fecha').value == \"\")
            {
                document.getElementById('fechaError').style.visibility=\"\";
                return false;
            }

            document.getElementById('tarea_fecha').value += ' ' + pad(document.getElementById('tarea_hora').value) + ':' +
                    pad(document.getElementById('tarea_minuto').value) + ':00';

            return true;
        }

        function pad(d) {
            return (d < 10) ? '0' + d.toString() : d.toString();
        }

        function onChangeAsesor()
        {
            var selectorAsesor = document.getElementById('tarea_id_usuario');
            var url = 'http://' + window.location.hostname + '";
        // line 169
        echo $this->env->getExtension('routing')->getPath("prospecto_index", array());
        echo ".json?indexAsesor=' + selectorAsesor.value;

            \$.ajax({
                url: url,
                dataType: \"json\",
                success: function(data) {
                    var options, index, select, option;

                    // Get the raw DOM object for the select box
                    select = document.getElementById('tarea_id_prospecto');

                    // Clear the old options
                    select.options.length = 0;

                    // Load the new options
                    options = data; // Or whatever source information you're working with
                    for (index = 0; index < options.length; ++index) {
                        option = options[index];

                        select.options.add(new Option(option.nombre, index));
                    }

                    \$('select').material_select();
                }
            });
        }

        document.getElementById('tarea_id_usuario').value = ";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "indexSelectedAsesor", array()), "html", null, true);
        echo ";

    </script>

";
    }

    public function getTemplateName()
    {
        return ":tarea:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 196,  265 => 169,  194 => 101,  185 => 95,  178 => 91,  174 => 90,  170 => 89,  161 => 83,  157 => 82,  153 => 81,  144 => 75,  140 => 74,  136 => 73,  127 => 67,  123 => 66,  119 => 65,  110 => 59,  106 => 58,  102 => 57,  71 => 28,  69 => 27,  67 => 26,  58 => 19,  54 => 18,  50 => 17,  43 => 13,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% form_theme form with ['forms/custom_time_widget.html.twig'] %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="row white z-depth-2">*/
/*         <div class="formcontainer">*/
/*             <div>*/
/*                 <br/>*/
/*                 <h5>Bitácora</h5>*/
/*                 <br/><br/>*/
/*                 {{ form_start(form) }}*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.id_usuario) }}*/
/*                         {{ form_label(form.id_usuario) }}*/
/*                         {{ form_errors(form.id_usuario) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <!--div class="row">*/
/*                     <div class="input-field col s12 activelabel"-->*/
/*                         {# form_widget(form.fecha) #}*/
/*                         {# form_label(form.fecha) #}*/
/*                         {# form_errors(form.fecha) #}*/
/*                     <!--/div>*/
/*                 </div-->*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12 activelabel">*/
/*                         <div class="datepicker">*/
/*                             Fecha:*/
/*                             <input type="text" id="tarea_fecha" name="tarea_fecha" required="required" />*/
/*                             <a id="fechaError" style="visibility:hidden;color:black">Fecha inválida<br></a>*/
/*                             <div id="tarea_fecha_time" class="">*/
/*                                 <table>*/
/*                                     <tr>*/
/*                                         <td>Hora:<select id="tarea_hora" name="tarea_hora">*/
/*                                                 <option value="0"  selected="selected">00</option>            <option value="1" >01</option>            <option value="2" >02</option>            <option value="3" >03</option>            <option value="4" >04</option>            <option value="5" >05</option>            <option value="6" >06</option>            <option value="7" >07</option>            <option value="8" >08</option>            <option value="9" >09</option>            <option value="10" >10</option>            <option value="11" >11</option>            <option value="12" >12</option>            <option value="13" >13</option>            <option value="14" >14</option>            <option value="15" >15</option>            <option value="16" >16</option>            <option value="17" >17</option>            <option value="18" >18</option>            <option value="19" >19</option>            <option value="20" >20</option>            <option value="21" >21</option>            <option value="22" >22</option>            <option value="23" >23</option></select>*/
/*                                         </td>*/
/*                                         <td>Minuto: <select id="tarea_minuto" name="tarea_minuto">*/
/*                                                 <option value="0" >00</option>*/
/*                                                 <option value="10" >10</option><option value="20" >20</option>            <option value="30" >30</option>            <option value="40" >40</option>            <option value="50" >50</option></select>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.id_accion) }}*/
/*                         {{ form_label(form.id_accion) }}*/
/*                         {{ form_errors(form.id_accion) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.id_prospecto) }}*/
/*                         {{ form_label(form.id_prospecto) }}*/
/*                         {{ form_errors(form.id_prospecto) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.propiedad) }}*/
/*                         {{ form_label(form.propiedad) }}*/
/*                         {{ form_errors(form.propiedad) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.comentarios) }}*/
/*                         {{ form_label(form.comentarios) }}*/
/*                         {{ form_errors(form.comentarios) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.agregarmicalendario) }}*/
/*                         {{ form_label(form.agregarmicalendario) }}*/
/*                         {{ form_errors(form.agregarmicalendario) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 {{ form_row(form.indexSelectedAsesor) }}*/
/* */
/*                 <input id="fecha"  type="hidden"/>*/
/* */
/*                 <input type="submit" value="Guardar" class="waves-effect waves-light btn blue darken-4 center" onclick="return fechaHoraConFormato();"/>*/
/* */
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <style>*/
/*         body{*/
/*             background-color: white;*/
/*             height: 100vh;*/
/*         }*/
/* */
/*         #tarea_fecha_time {*/
/*             float: left;*/
/*         }*/
/* */
/*         .activelabel label {*/
/*             font-size: 0.8rem;*/
/*             -webkit-transform: translateY(-140%);*/
/*             transform: translateY(-140%);*/
/*         }*/
/* */
/*     </style>*/
/* */
/*     <script>*/
/*         $(document).ready(function() {*/
/*             $('select').material_select();*/
/*         });*/
/* */
/*         $('#tarea_fecha').pickadate({*/
/*             selectMonths: true, // Creates a dropdown to control month*/
/*             selectYears: 15, // Creates a dropdown of 15 years to control year*/
/*             format: 'yyyy-mm-dd',*/
/*             monthsFull: [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ],*/
/*             monthsShort: [ 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic' ],*/
/*             weekdaysFull: [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sabado' ],*/
/*             weekdaysShort: [ 'Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab' ],*/
/*             weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],*/
/*             today: 'Hoy',*/
/*             clear: 'Limpiar',*/
/*             close: 'Cerrar',*/
/*             labelMonthNext: 'Siguiente mes',*/
/*             labelMonthPrev: 'Mes anterior',*/
/*             labelMonthSelect: 'Selecciona un mes',*/
/*             labelYearSelect: 'Selecciona un año'*/
/*         });*/
/* */
/*         function fechaHoraConFormato()*/
/*         {*/
/*             if (document.getElementById('tarea_fecha').value == "")*/
/*             {*/
/*                 document.getElementById('fechaError').style.visibility="";*/
/*                 return false;*/
/*             }*/
/* */
/*             document.getElementById('tarea_fecha').value += ' ' + pad(document.getElementById('tarea_hora').value) + ':' +*/
/*                     pad(document.getElementById('tarea_minuto').value) + ':00';*/
/* */
/*             return true;*/
/*         }*/
/* */
/*         function pad(d) {*/
/*             return (d < 10) ? '0' + d.toString() : d.toString();*/
/*         }*/
/* */
/*         function onChangeAsesor()*/
/*         {*/
/*             var selectorAsesor = document.getElementById('tarea_id_usuario');*/
/*             var url = 'http://' + window.location.hostname + '{{ path('prospecto_index', {}) }}.json?indexAsesor=' + selectorAsesor.value;*/
/* */
/*             $.ajax({*/
/*                 url: url,*/
/*                 dataType: "json",*/
/*                 success: function(data) {*/
/*                     var options, index, select, option;*/
/* */
/*                     // Get the raw DOM object for the select box*/
/*                     select = document.getElementById('tarea_id_prospecto');*/
/* */
/*                     // Clear the old options*/
/*                     select.options.length = 0;*/
/* */
/*                     // Load the new options*/
/*                     options = data; // Or whatever source information you're working with*/
/*                     for (index = 0; index < options.length; ++index) {*/
/*                         option = options[index];*/
/* */
/*                         select.options.add(new Option(option.nombre, index));*/
/*                     }*/
/* */
/*                     $('select').material_select();*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         document.getElementById('tarea_id_usuario').value = {{ form.vars.value.indexSelectedAsesor }};*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
