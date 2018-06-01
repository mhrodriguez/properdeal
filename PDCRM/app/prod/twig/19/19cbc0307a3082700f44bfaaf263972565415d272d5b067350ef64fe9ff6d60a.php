<?php

/* :tarea:new.html.twig */
class __TwigTemplate_712b60f603d0440d9ceb8b90271283dd57c4c26efa5ad0142aa2d5e4914592f2 extends Twig_Template
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

                <div class=\"row\">
                    <div class=\"input-field col s12 activelabel\">
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fecha", array()), 'widget');
        echo "
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fecha", array()), 'label');
        echo "
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fecha", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_accion", array()), 'widget');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_accion", array()), 'label');
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_accion", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_prospecto", array()), 'widget');
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_prospecto", array()), 'label');
        echo "
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_prospecto", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "propiedad", array()), 'widget');
        echo "
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "propiedad", array()), 'label');
        echo "
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "propiedad", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comentarios", array()), 'widget');
        echo "
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comentarios", array()), 'label');
        echo "
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comentarios", array()), 'errors');
        echo "
                    </div>
                </div>

                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "indexSelectedAsesor", array()), 'row');
        echo "

                <input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue darken-4 center\" onclick=\"return fechaHoraConFormato();\"/>

                ";
        // line 67
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

        #tarea_fecha_time_hour {
            float: left;
        }

        #tarea_fecha_time_hour {
            float: left;
        }

        #tarea_fecha_time {
            float: left;
        }

        #tarea_fecha_time_hour
        {
            float:left;
        }

        #tarea_fecha_time_minute
        {
            float:left;
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

        \$('#tarea_fecha_date').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15, // Creates a dropdown of 15 years to control year
            format: 'yyyy-mm-dd'
        });

        function fechaHoraConFormato()
        {
            var fechaHora = document.getElementById('tarea_fecha_date').value += ' ' + pad(document.getElementById('tarea_fecha_time_hour').value) + ':' +
                    pad(document.getElementById('tarea_fecha_time_minute').value) + ':00';

            return fechaHora;
        }

        function pad(d) {
            return (d < 10) ? '0' + d.toString() : d.toString();
        }

        function onChangeAsesor()
        {
            var selectorAsesor = document.getElementById('tarea_id_usuario');
            var url = 'http://' + window.location.hostname + '";
        // line 136
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
        // line 163
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
        return array (  259 => 163,  229 => 136,  157 => 67,  150 => 63,  143 => 59,  139 => 58,  135 => 57,  126 => 51,  122 => 50,  118 => 49,  109 => 43,  105 => 42,  101 => 41,  92 => 35,  88 => 34,  84 => 33,  75 => 27,  71 => 26,  67 => 25,  58 => 19,  54 => 18,  50 => 17,  43 => 13,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
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
/*                 <div class="row">*/
/*                     <div class="input-field col s12 activelabel">*/
/*                         {{ form_widget(form.fecha) }}*/
/*                         {{ form_label(form.fecha) }}*/
/*                         {{ form_errors(form.fecha) }}*/
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
/*                 {{ form_row(form.indexSelectedAsesor) }}*/
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
/*         #tarea_fecha_time_hour {*/
/*             float: left;*/
/*         }*/
/* */
/*         #tarea_fecha_time_hour {*/
/*             float: left;*/
/*         }*/
/* */
/*         #tarea_fecha_time {*/
/*             float: left;*/
/*         }*/
/* */
/*         #tarea_fecha_time_hour*/
/*         {*/
/*             float:left;*/
/*         }*/
/* */
/*         #tarea_fecha_time_minute*/
/*         {*/
/*             float:left;*/
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
/* */
/*         });*/
/* */
/*         $('#tarea_fecha_date').pickadate({*/
/*             selectMonths: true, // Creates a dropdown to control month*/
/*             selectYears: 15, // Creates a dropdown of 15 years to control year*/
/*             format: 'yyyy-mm-dd'*/
/*         });*/
/* */
/*         function fechaHoraConFormato()*/
/*         {*/
/*             var fechaHora = document.getElementById('tarea_fecha_date').value += ' ' + pad(document.getElementById('tarea_fecha_time_hour').value) + ':' +*/
/*                     pad(document.getElementById('tarea_fecha_time_minute').value) + ':00';*/
/* */
/*             return fechaHora;*/
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
