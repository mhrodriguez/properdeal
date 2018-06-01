<?php

/* :buscarinmueble:buscarformvertical.html.twig */
class __TwigTemplate_a3abcf4bee525a98f94ed744e1b2ba6ccac39326e2d278eaecdb6e95f7d37b51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":buscarinmueble:buscarformvertical.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<br/><br/>
<div class=\"container z-depth-1\" style=\"background-color: white\">
        <div class=\"formcontainer\">
            <br><br>
                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        <a class=\"waves-effect waves-light btn right blue darken-4\" onclick=\"actualizarBusqueda();\">
                            Buscar
                            <i class=\"material-icons left\">search</i>
                        </a>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'widget');
        echo "
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'label');
        echo "
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'widget');
        echo "
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'label');
        echo "
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'widget');
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'label');
        echo "
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'widget');
        echo "
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'label');
        echo "
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_colonia", array()), 'widget');
        echo "
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_colonia", array()), 'label');
        echo "
                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_colonia", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'widget');
        echo "
                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'label');
        echo "
                        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'errors');
        echo "
                    </div>
             </div>
                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'widget');
        echo "
                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'label');
        echo "
                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'widget');
        echo "
                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'label');
        echo "
                        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'widget');
        echo "
                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'label');
        echo "
                        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'widget');
        echo "
                        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'label');
        echo "
                        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'widget');
        echo "
                        ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'label');
        echo "
                        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                        <div class=\"input-field col s12\">
                            <a class=\"waves-effect waves-light btn right blue darken-4\" onclick=\"actualizarBusqueda();\">
                                Buscar
                                <i class=\"material-icons left\">search</i>
                            </a>
                        </div>
                </div>
        </div>
</div>

<style>
        body
        {
            background-color: #ECECEC;
        }
</style>

<script>

        \$(document).ready(function() {
            \$('select').material_select();
        });

        var selectorTipoInmueble = document.getElementById('buscar_inmueble_id_tipo_inmueble');

        var selectorOperacion = document.getElementById('buscar_inmueble_id_operacion_inmueble');
        selectorOperacion.options.add(new Option(\"Todos\", -1), 0);

        var selectorEstado = document.getElementById('buscar_inmueble_id_estado');
        selectorEstado.options.add(new Option(\"Todos\", -1), 0);

        var selectorMunicipio = document.getElementById('buscar_inmueble_id_municipio');
        selectorMunicipio.options.add(new Option(\"Todos\", -1), 0);

        var selectorColonia = document.getElementById('buscar_inmueble_id_colonia');
        selectorColonia.options.add(new Option(\"Todos\", -1), 0);

        var precio = document.getElementById('buscar_inmueble_precio');

        var preciomax = document.getElementById('buscar_inmueble_preciomax');

        var metrosterreno = document.getElementById('buscar_inmueble_metrosterreno');

        var metrosterrenomax = document.getElementById('buscar_inmueble_metrosterrenomax');

        var recamaras = document.getElementById('buscar_inmueble_recamaras');

        var plantas = document.getElementById('buscar_inmueble_plantas');

        function onChangeEstado()
        {
            var selectorEstado = document.getElementById('buscar_inmueble_id_estado');
            var url = 'http://' + window.location.hostname  + '";
        // line 153
        echo $this->env->getExtension('routing')->getPath("municipio_index", array());
        echo "?indexEstado=' + selectorEstado.value;

            \$.ajax({
                url: url,
                dataType: \"json\",
                success: function(data) {
                    var options, index, select, option;

                    // Get the raw DOM object for the select box
                    select = document.getElementById('buscar_inmueble_id_municipio');

                    // Clear the old options
                    select.options.length = 0;

                    select.options.add(new Option('Todos', -1));

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
            var selectorEstado = document.getElementById('buscar_inmueble_id_estado');
            var selectorMunicipio = document.getElementById('buscar_inmueble_id_municipio');
            var url = 'http://' + window.location.hostname  + '";
        // line 188
        echo $this->env->getExtension('routing')->getPath("colonia_index", array());
        echo "?indexMunicipio=' + selectorMunicipio.value + '&indexEstado=' + selectorEstado.value;

            \$.ajax({
                url: url,
                dataType: \"json\",
                success: function(data) {
                    var options, index, select, option;

                    // Get the raw DOM object for the select box
                    select = document.getElementById('buscar_inmueble_id_colonia');

                    // Clear the old options
                    select.options.length = 0;
                    select.options.add(new Option('Todos', -1));

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

        function actualizarBusqueda()
        {
            var parametros = 'buscar_inmueble%5Bid_tipo_inmueble%5D=' + selectorTipoInmueble.options[selectorTipoInmueble.selectedIndex].value + '&' +
            'buscar_inmueble%5Bid_operacion_inmueble%5D=' + selectorOperacion.options[selectorOperacion.selectedIndex].value + '&' +
            'buscar_inmueble%5Bid_estado%5D=' + selectorEstado.options[selectorEstado.selectedIndex].value + '&' +
            'buscar_inmueble%5Bid_municipio%5D=' + selectorMunicipio.options[selectorMunicipio.selectedIndex].value + '&' +
            'buscar_inmueble%5Bid_colonia%5D=' + selectorColonia.options[selectorColonia.selectedIndex].value + '&' +
            'buscar_inmueble%5Bprecio%5D=' + precio.value + '&' +
            'buscar_inmueble%5Bpreciomax%5D=' + preciomax.value + '&' +
            'buscar_inmueble%5Bmetrosterreno%5D=' + metrosterreno.value + '&' +
            'buscar_inmueble%5Bmetrosterrenomax%5D=' + metrosterrenomax.value + '&' +
            'buscar_inmueble%5Brecamaras%5D=' + recamaras.value + '&' +
            'buscar_inmueble%5Bplantas%5D=' + plantas.value;

            parent.actualizarBusqueda(parametros);
        }
</script>


";
    }

    public function getTemplateName()
    {
        return ":buscarinmueble:buscarformvertical.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 188,  281 => 153,  221 => 96,  217 => 95,  213 => 94,  205 => 89,  201 => 88,  197 => 87,  189 => 82,  185 => 81,  181 => 80,  173 => 75,  169 => 74,  165 => 73,  157 => 68,  153 => 67,  149 => 66,  141 => 61,  137 => 60,  133 => 59,  124 => 53,  120 => 52,  116 => 51,  107 => 45,  103 => 44,  99 => 43,  90 => 37,  86 => 36,  82 => 35,  73 => 29,  69 => 28,  65 => 27,  56 => 21,  52 => 20,  48 => 19,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* <br/><br/>*/
/* <div class="container z-depth-1" style="background-color: white">*/
/*         <div class="formcontainer">*/
/*             <br><br>*/
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         <a class="waves-effect waves-light btn right blue darken-4" onclick="actualizarBusqueda();">*/
/*                             Buscar*/
/*                             <i class="material-icons left">search</i>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.id_tipo_inmueble) }}*/
/*                         {{ form_label(form.id_tipo_inmueble) }}*/
/*                         {{ form_errors(form.id_tipo_inmueble) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.id_operacion_inmueble) }}*/
/*                         {{ form_label(form.id_operacion_inmueble) }}*/
/*                         {{ form_errors(form.id_operacion_inmueble) }}*/
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
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.id_municipio) }}*/
/*                         {{ form_label(form.id_municipio) }}*/
/*                         {{ form_errors(form.id_municipio) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.id_colonia) }}*/
/*                         {{ form_label(form.id_colonia) }}*/
/*                         {{ form_errors(form.id_colonia) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.precio) }}*/
/*                         {{ form_label(form.precio) }}*/
/*                         {{ form_errors(form.precio) }}*/
/*                     </div>*/
/*              </div>*/
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.preciomax) }}*/
/*                         {{ form_label(form.preciomax) }}*/
/*                         {{ form_errors(form.preciomax) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.metrosterreno) }}*/
/*                         {{ form_label(form.metrosterreno) }}*/
/*                         {{ form_errors(form.metrosterreno) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.metrosterrenomax) }}*/
/*                         {{ form_label(form.metrosterrenomax) }}*/
/*                         {{ form_errors(form.metrosterrenomax) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.recamaras) }}*/
/*                         {{ form_label(form.recamaras) }}*/
/*                         {{ form_errors(form.recamaras) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.plantas) }}*/
/*                         {{ form_label(form.plantas) }}*/
/*                         {{ form_errors(form.plantas) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                         <div class="input-field col s12">*/
/*                             <a class="waves-effect waves-light btn right blue darken-4" onclick="actualizarBusqueda();">*/
/*                                 Buscar*/
/*                                 <i class="material-icons left">search</i>*/
/*                             </a>*/
/*                         </div>*/
/*                 </div>*/
/*         </div>*/
/* </div>*/
/* */
/* <style>*/
/*         body*/
/*         {*/
/*             background-color: #ECECEC;*/
/*         }*/
/* </style>*/
/* */
/* <script>*/
/* */
/*         $(document).ready(function() {*/
/*             $('select').material_select();*/
/*         });*/
/* */
/*         var selectorTipoInmueble = document.getElementById('buscar_inmueble_id_tipo_inmueble');*/
/* */
/*         var selectorOperacion = document.getElementById('buscar_inmueble_id_operacion_inmueble');*/
/*         selectorOperacion.options.add(new Option("Todos", -1), 0);*/
/* */
/*         var selectorEstado = document.getElementById('buscar_inmueble_id_estado');*/
/*         selectorEstado.options.add(new Option("Todos", -1), 0);*/
/* */
/*         var selectorMunicipio = document.getElementById('buscar_inmueble_id_municipio');*/
/*         selectorMunicipio.options.add(new Option("Todos", -1), 0);*/
/* */
/*         var selectorColonia = document.getElementById('buscar_inmueble_id_colonia');*/
/*         selectorColonia.options.add(new Option("Todos", -1), 0);*/
/* */
/*         var precio = document.getElementById('buscar_inmueble_precio');*/
/* */
/*         var preciomax = document.getElementById('buscar_inmueble_preciomax');*/
/* */
/*         var metrosterreno = document.getElementById('buscar_inmueble_metrosterreno');*/
/* */
/*         var metrosterrenomax = document.getElementById('buscar_inmueble_metrosterrenomax');*/
/* */
/*         var recamaras = document.getElementById('buscar_inmueble_recamaras');*/
/* */
/*         var plantas = document.getElementById('buscar_inmueble_plantas');*/
/* */
/*         function onChangeEstado()*/
/*         {*/
/*             var selectorEstado = document.getElementById('buscar_inmueble_id_estado');*/
/*             var url = 'http://' + window.location.hostname  + '{{ path('municipio_index', {}) }}?indexEstado=' + selectorEstado.value;*/
/* */
/*             $.ajax({*/
/*                 url: url,*/
/*                 dataType: "json",*/
/*                 success: function(data) {*/
/*                     var options, index, select, option;*/
/* */
/*                     // Get the raw DOM object for the select box*/
/*                     select = document.getElementById('buscar_inmueble_id_municipio');*/
/* */
/*                     // Clear the old options*/
/*                     select.options.length = 0;*/
/* */
/*                     select.options.add(new Option('Todos', -1));*/
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
/*             var selectorEstado = document.getElementById('buscar_inmueble_id_estado');*/
/*             var selectorMunicipio = document.getElementById('buscar_inmueble_id_municipio');*/
/*             var url = 'http://' + window.location.hostname  + '{{ path('colonia_index', {}) }}?indexMunicipio=' + selectorMunicipio.value + '&indexEstado=' + selectorEstado.value;*/
/* */
/*             $.ajax({*/
/*                 url: url,*/
/*                 dataType: "json",*/
/*                 success: function(data) {*/
/*                     var options, index, select, option;*/
/* */
/*                     // Get the raw DOM object for the select box*/
/*                     select = document.getElementById('buscar_inmueble_id_colonia');*/
/* */
/*                     // Clear the old options*/
/*                     select.options.length = 0;*/
/*                     select.options.add(new Option('Todos', -1));*/
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
/*         function actualizarBusqueda()*/
/*         {*/
/*             var parametros = 'buscar_inmueble%5Bid_tipo_inmueble%5D=' + selectorTipoInmueble.options[selectorTipoInmueble.selectedIndex].value + '&' +*/
/*             'buscar_inmueble%5Bid_operacion_inmueble%5D=' + selectorOperacion.options[selectorOperacion.selectedIndex].value + '&' +*/
/*             'buscar_inmueble%5Bid_estado%5D=' + selectorEstado.options[selectorEstado.selectedIndex].value + '&' +*/
/*             'buscar_inmueble%5Bid_municipio%5D=' + selectorMunicipio.options[selectorMunicipio.selectedIndex].value + '&' +*/
/*             'buscar_inmueble%5Bid_colonia%5D=' + selectorColonia.options[selectorColonia.selectedIndex].value + '&' +*/
/*             'buscar_inmueble%5Bprecio%5D=' + precio.value + '&' +*/
/*             'buscar_inmueble%5Bpreciomax%5D=' + preciomax.value + '&' +*/
/*             'buscar_inmueble%5Bmetrosterreno%5D=' + metrosterreno.value + '&' +*/
/*             'buscar_inmueble%5Bmetrosterrenomax%5D=' + metrosterrenomax.value + '&' +*/
/*             'buscar_inmueble%5Brecamaras%5D=' + recamaras.value + '&' +*/
/*             'buscar_inmueble%5Bplantas%5D=' + plantas.value;*/
/* */
/*             parent.actualizarBusqueda(parametros);*/
/*         }*/
/* </script>*/
/* */
/* */
/* {% endblock %}*/
/* */
