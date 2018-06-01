<?php

/* :solicitud:buscarform.html.twig */
class __TwigTemplate_72813e46e78e9900c21bd2aa537fa824b0fd00115173b3f3857ef10df70aff45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":solicitud:buscarform.html.twig", 1);
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "forms/custom_checkbox_widget.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"container\">
    <br/>
    <br/>
    <div class=\"row\">
        <div class=\"formcontainer\">
            <div>
                ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'widget');
        echo "
                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'label');
        echo "
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'widget');
        echo "
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'label');
        echo "
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechabusqueda", array()), 'widget');
        echo "
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechabusqueda", array()), 'label');
        echo "
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechabusqueda", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'widget');
        echo "
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'label');
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'widget');
        echo "
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'label');
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'widget');
        echo "
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'label');
        echo "
                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'errors');
        echo "
                    </div>
                </div>

                <!--div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 60
        echo "                        <br/><br/>
                        ";
        // line 62
        echo "                        ";
        // line 63
        echo "                    </div>
                </div-->

                <br><br>
                <div class=\"row\">
                    <div class=\"input-field col s4\">
                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'widget');
        echo "
                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'label');
        echo "
                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'widget');
        echo "
                        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'label');
        echo "
                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'widget');
        echo "
                        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'label');
        echo "
                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'widget');
        echo "
                        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'label');
        echo "
                        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'widget');
        echo "
                        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'label');
        echo "
                        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'widget');
        echo "
                        ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'label');
        echo "
                        ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccionmax", array()), 'widget');
        echo "
                        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccionmax", array()), 'label');
        echo "
                        ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccionmax", array()), 'errors');
        echo "
                    </div>
                </div>

                <input type=\"submit\" class=\"waves-effect waves-light btn right blue darken-4\" onclick=\"return fechaHoraConFormato();\" value=\"Buscar\">

                </input>

                ";
        // line 115
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

        div {
            background: white;
        }

        #solicitud_caracteristicas label
        {
            margin-right: 20px;
        }
    </style>

    <script>

       // var selectorEstado = document.getElementById('solicitud_id_estado');
       // selectorEstado.value = ";
        // line 139
        echo ";

        \$(document).ready(function() {
            \$('select').material_select();
        });

        function onChangeEstado()
        {
            var url = 'http://' + window.location.hostname  + '";
        // line 147
        echo $this->env->getExtension('routing')->getPath("municipio_index", array());
        echo "?indexEstado=' + selectorEstado.value;

            \$.ajax({
                url: url,
                dataType: \"json\",
                success: function(data) {
                    var options, index, select, option;

                    // Get the raw DOM object for the select box
                    select = document.getElementById('solicitud_id_municipio');

                    // Clear the old options
                    select.options.length = 0;

                    // Load the new options
                    options = data; // Or whatever source information you're working with
                    for (index = 0; index < options.length; ++index) {
                        option = options[index];

                        select.options.add(new Option(option.nombre, index));
                    }

                    \$('select').material_select();

                    onChangeMunicipio();
                }
            });
        }

        function onChangeMunicipio()
        {
            var selectorEstado = document.getElementById('solicitud_id_estado');
            var selectorMunicipio = document.getElementById('solicitud_id_municipio');
            var url = 'http://' + window.location.hostname  + '";
        // line 180
        echo $this->env->getExtension('routing')->getPath("colonia_index", array());
        echo "?indexMunicipio=' + selectorMunicipio.value + '&indexEstado=' + selectorEstado.value;

            \$.ajax({
                url: url,
                dataType: \"json\",
                success: function(data) {
                    var options, index, select, option;

                    // Get the raw DOM object for the select box
                    select = document.getElementById('solicitud_id_colonia');

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

        function onChangeColonia() {

        }

       document.getElementById('buscar_solicitud_precio').required=false;
       document.getElementById('buscar_solicitud_preciomax').required=false;
       document.getElementById('buscar_solicitud_metrosterreno').required=false;
       document.getElementById('buscar_solicitud_metrosterrenomax').required=false;
       document.getElementById('buscar_solicitud_metrosconstruccion').required=false;
       document.getElementById('buscar_solicitud_metrosconstruccionmax').required=false;

    </script>

";
    }

    public function getTemplateName()
    {
        return ":solicitud:buscarform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 180,  305 => 147,  295 => 139,  268 => 115,  257 => 107,  253 => 106,  249 => 105,  243 => 102,  239 => 101,  235 => 100,  226 => 94,  222 => 93,  218 => 92,  212 => 89,  208 => 88,  204 => 87,  195 => 81,  191 => 80,  187 => 79,  181 => 76,  177 => 75,  173 => 74,  167 => 71,  163 => 70,  159 => 69,  151 => 63,  149 => 62,  146 => 60,  137 => 53,  133 => 52,  129 => 51,  123 => 48,  119 => 47,  115 => 46,  106 => 40,  102 => 39,  98 => 38,  89 => 32,  85 => 31,  81 => 30,  72 => 24,  68 => 23,  64 => 22,  58 => 19,  54 => 18,  50 => 17,  43 => 13,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% form_theme form with ['forms/custom_checkbox_widget.html.twig'] %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="container">*/
/*     <br/>*/
/*     <br/>*/
/*     <div class="row">*/
/*         <div class="formcontainer">*/
/*             <div>*/
/*                 {{ form_start(form) }}*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.id_tipo_inmueble) }}*/
/*                         {{ form_label(form.id_tipo_inmueble) }}*/
/*                         {{ form_errors(form.id_tipo_inmueble) }}*/
/*                     </div>*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.id_operacion_inmueble) }}*/
/*                         {{ form_label(form.id_operacion_inmueble) }}*/
/*                         {{ form_errors(form.id_operacion_inmueble) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.fechabusqueda) }}*/
/*                         {{ form_label(form.fechabusqueda) }}*/
/*                         {{ form_errors(form.fechabusqueda) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.id_estado) }}*/
/*                         {{ form_label(form.id_estado) }}*/
/*                         {{ form_errors(form.id_estado) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.ciudad) }}*/
/*                         {{ form_label(form.ciudad) }}*/
/*                         {{ form_errors(form.ciudad) }}*/
/*                     </div>*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.colonia) }}*/
/*                         {{ form_label(form.colonia) }}*/
/*                         {{ form_errors(form.colonia) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <!--div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {# form_label(form.caracteristicas) #}*/
/*                         <br/><br/>*/
/*                         {# form_widget(form.caracteristicas) #}*/
/*                         {# form_errors(form.caracteristicas) #}*/
/*                     </div>*/
/*                 </div-->*/
/* */
/*                 <br><br>*/
/*                 <div class="row">*/
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.id_moneda) }}*/
/*                         {{ form_label(form.id_moneda) }}*/
/*                         {{ form_errors(form.id_moneda) }}*/
/*                     </div>*/
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.precio) }}*/
/*                         {{ form_label(form.precio) }}*/
/*                         {{ form_errors(form.precio) }}*/
/*                     </div>*/
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.preciomax) }}*/
/*                         {{ form_label(form.preciomax) }}*/
/*                         {{ form_errors(form.preciomax) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.metrosterreno) }}*/
/*                         {{ form_label(form.metrosterreno) }}*/
/*                         {{ form_errors(form.metrosterreno) }}*/
/*                     </div>*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.metrosterrenomax) }}*/
/*                         {{ form_label(form.metrosterrenomax) }}*/
/*                         {{ form_errors(form.metrosterrenomax) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.metrosconstruccion) }}*/
/*                         {{ form_label(form.metrosconstruccion) }}*/
/*                         {{ form_errors(form.metrosconstruccion) }}*/
/*                     </div>*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.metrosconstruccionmax) }}*/
/*                         {{ form_label(form.metrosconstruccionmax) }}*/
/*                         {{ form_errors(form.metrosconstruccionmax) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <input type="submit" class="waves-effect waves-light btn right blue darken-4" onclick="return fechaHoraConFormato();" value="Buscar">*/
/* */
/*                 </input>*/
/* */
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <style>*/
/*         body{*/
/*             background-color: white;*/
/*             height: 100vh;*/
/*         }*/
/* */
/*         div {*/
/*             background: white;*/
/*         }*/
/* */
/*         #solicitud_caracteristicas label*/
/*         {*/
/*             margin-right: 20px;*/
/*         }*/
/*     </style>*/
/* */
/*     <script>*/
/* */
/*        // var selectorEstado = document.getElementById('solicitud_id_estado');*/
/*        // selectorEstado.value = {# default_idestado #};*/
/* */
/*         $(document).ready(function() {*/
/*             $('select').material_select();*/
/*         });*/
/* */
/*         function onChangeEstado()*/
/*         {*/
/*             var url = 'http://' + window.location.hostname  + '{{ path('municipio_index', {}) }}?indexEstado=' + selectorEstado.value;*/
/* */
/*             $.ajax({*/
/*                 url: url,*/
/*                 dataType: "json",*/
/*                 success: function(data) {*/
/*                     var options, index, select, option;*/
/* */
/*                     // Get the raw DOM object for the select box*/
/*                     select = document.getElementById('solicitud_id_municipio');*/
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
/* */
/*                     onChangeMunicipio();*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         function onChangeMunicipio()*/
/*         {*/
/*             var selectorEstado = document.getElementById('solicitud_id_estado');*/
/*             var selectorMunicipio = document.getElementById('solicitud_id_municipio');*/
/*             var url = 'http://' + window.location.hostname  + '{{ path('colonia_index', {}) }}?indexMunicipio=' + selectorMunicipio.value + '&indexEstado=' + selectorEstado.value;*/
/* */
/*             $.ajax({*/
/*                 url: url,*/
/*                 dataType: "json",*/
/*                 success: function(data) {*/
/*                     var options, index, select, option;*/
/* */
/*                     // Get the raw DOM object for the select box*/
/*                     select = document.getElementById('solicitud_id_colonia');*/
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
/*                     $('select').material_select();*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         function onChangeColonia() {*/
/* */
/*         }*/
/* */
/*        document.getElementById('buscar_solicitud_precio').required=false;*/
/*        document.getElementById('buscar_solicitud_preciomax').required=false;*/
/*        document.getElementById('buscar_solicitud_metrosterreno').required=false;*/
/*        document.getElementById('buscar_solicitud_metrosterrenomax').required=false;*/
/*        document.getElementById('buscar_solicitud_metrosconstruccion').required=false;*/
/*        document.getElementById('buscar_solicitud_metrosconstruccionmax').required=false;*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
