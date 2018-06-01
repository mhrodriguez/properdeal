<?php

/* :consultarinmueble:buscarformvertical.html.twig */
class __TwigTemplate_40313bf335ca4e22a474d7e7244d16c51d50bd07561de90ba32de3d4c9d3346f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":consultarinmueble:buscarformvertical.html.twig", 1);
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
        echo "    <div class=\"row white z-depth-2\">
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
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'widget');
        echo "
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'label');
        echo "
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'widget');
        echo "
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'label');
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'widget');
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'label');
        echo "
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'widget');
        echo "
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'label');
        echo "
                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_colonia", array()), 'widget');
        echo "
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_colonia", array()), 'label');
        echo "
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_colonia", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'widget');
        echo "
                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'label');
        echo "
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'widget');
        echo "
                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'label');
        echo "
                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'widget');
        echo "
                    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'label');
        echo "
                    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'widget');
        echo "
                    ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'label');
        echo "
                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'widget');
        echo "
                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'label');
        echo "
                    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'widget');
        echo "
                    ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'label');
        echo "
                    ";
        // line 95
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
            overflow: hidden;
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
            var selectorEstado = document.getElementById('consultar_inmueble_id_estado');
            var url = 'http://' + window.location.hostname  + '";
        // line 152
        echo $this->env->getExtension('routing')->getPath("municipio_index", array());
        echo "?indexEstado=' + selectorEstado.value;

            \$.ajax({
                url: url,
                dataType: \"json\",
                success: function(data) {
                    var options, index, select, option;

                    // Get the raw DOM object for the select box
                    select = document.getElementById('consultar_inmueble_id_municipio');

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
            var selectorEstado = document.getElementById('consultar_inmueble_id_estado');
            var selectorMunicipio = document.getElementById('consultar_inmueble_id_municipio');
            var url = 'http://' + window.location.hostname  + '";
        // line 187
        echo $this->env->getExtension('routing')->getPath("colonia_index", array());
        echo "?indexMunicipio=' + selectorMunicipio.value + '&indexEstado=' + selectorEstado.value;

            \$.ajax({
                url: url,
                dataType: \"json\",
                success: function(data) {
                    var options, index, select, option;

                    // Get the raw DOM object for the select box
                    select = document.getElementById('consultar_inmueble_id_colonia');

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
        return ":consultarinmueble:buscarformvertical.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 187,  280 => 152,  220 => 95,  216 => 94,  212 => 93,  204 => 88,  200 => 87,  196 => 86,  188 => 81,  184 => 80,  180 => 79,  172 => 74,  168 => 73,  164 => 72,  156 => 67,  152 => 66,  148 => 65,  140 => 60,  136 => 59,  132 => 58,  123 => 52,  119 => 51,  115 => 50,  106 => 44,  102 => 43,  98 => 42,  89 => 36,  85 => 35,  81 => 34,  72 => 28,  68 => 27,  64 => 26,  55 => 20,  51 => 19,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="row white z-depth-2">*/
/*         <div class="formcontainer">*/
/*             <br><br>*/
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     <a class="waves-effect waves-light btn right blue darken-4" onclick="actualizarBusqueda();">*/
/*                         Buscar*/
/*                         <i class="material-icons left">search</i>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.id_tipo_inmueble) }}*/
/*                     {{ form_label(form.id_tipo_inmueble) }}*/
/*                     {{ form_errors(form.id_tipo_inmueble) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.id_operacion_inmueble) }}*/
/*                     {{ form_label(form.id_operacion_inmueble) }}*/
/*                     {{ form_errors(form.id_operacion_inmueble) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.id_estado) }}*/
/*                     {{ form_label(form.id_estado) }}*/
/*                     {{ form_errors(form.id_estado) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.id_municipio) }}*/
/*                     {{ form_label(form.id_municipio) }}*/
/*                     {{ form_errors(form.id_municipio) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.id_colonia) }}*/
/*                     {{ form_label(form.id_colonia) }}*/
/*                     {{ form_errors(form.id_colonia) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.precio) }}*/
/*                     {{ form_label(form.precio) }}*/
/*                     {{ form_errors(form.precio) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.preciomax) }}*/
/*                     {{ form_label(form.preciomax) }}*/
/*                     {{ form_errors(form.preciomax) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.metrosterreno) }}*/
/*                     {{ form_label(form.metrosterreno) }}*/
/*                     {{ form_errors(form.metrosterreno) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.metrosterrenomax) }}*/
/*                     {{ form_label(form.metrosterrenomax) }}*/
/*                     {{ form_errors(form.metrosterrenomax) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.recamaras) }}*/
/*                     {{ form_label(form.recamaras) }}*/
/*                     {{ form_errors(form.recamaras) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.plantas) }}*/
/*                     {{ form_label(form.plantas) }}*/
/*                     {{ form_errors(form.plantas) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     <a class="waves-effect waves-light btn right blue darken-4" onclick="actualizarBusqueda();">*/
/*                         Buscar*/
/*                         <i class="material-icons left">search</i>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <style>*/
/*         body*/
/*         {*/
/*             overflow: hidden;*/
/*         }*/
/*     </style>*/
/* */
/*     <script>*/
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
/*             var selectorEstado = document.getElementById('consultar_inmueble_id_estado');*/
/*             var url = 'http://' + window.location.hostname  + '{{ path('municipio_index', {}) }}?indexEstado=' + selectorEstado.value;*/
/* */
/*             $.ajax({*/
/*                 url: url,*/
/*                 dataType: "json",*/
/*                 success: function(data) {*/
/*                     var options, index, select, option;*/
/* */
/*                     // Get the raw DOM object for the select box*/
/*                     select = document.getElementById('consultar_inmueble_id_municipio');*/
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
/*             var selectorEstado = document.getElementById('consultar_inmueble_id_estado');*/
/*             var selectorMunicipio = document.getElementById('consultar_inmueble_id_municipio');*/
/*             var url = 'http://' + window.location.hostname  + '{{ path('colonia_index', {}) }}?indexMunicipio=' + selectorMunicipio.value + '&indexEstado=' + selectorEstado.value;*/
/* */
/*             $.ajax({*/
/*                 url: url,*/
/*                 dataType: "json",*/
/*                 success: function(data) {*/
/*                     var options, index, select, option;*/
/* */
/*                     // Get the raw DOM object for the select box*/
/*                     select = document.getElementById('consultar_inmueble_id_colonia');*/
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
/*                     'buscar_inmueble%5Bid_operacion_inmueble%5D=' + selectorOperacion.options[selectorOperacion.selectedIndex].value + '&' +*/
/*                     'buscar_inmueble%5Bid_estado%5D=' + selectorEstado.options[selectorEstado.selectedIndex].value + '&' +*/
/*                     'buscar_inmueble%5Bid_municipio%5D=' + selectorMunicipio.options[selectorMunicipio.selectedIndex].value + '&' +*/
/*                     'buscar_inmueble%5Bid_colonia%5D=' + selectorColonia.options[selectorColonia.selectedIndex].value + '&' +*/
/*                     'buscar_inmueble%5Bprecio%5D=' + precio.value + '&' +*/
/*                     'buscar_inmueble%5Bpreciomax%5D=' + preciomax.value + '&' +*/
/*                     'buscar_inmueble%5Bmetrosterreno%5D=' + metrosterreno.value + '&' +*/
/*                     'buscar_inmueble%5Bmetrosterrenomax%5D=' + metrosterrenomax.value + '&' +*/
/*                     'buscar_inmueble%5Brecamaras%5D=' + recamaras.value + '&' +*/
/*                     'buscar_inmueble%5Bplantas%5D=' + plantas.value;*/
/* */
/*             parent.actualizarBusqueda(parametros);*/
/*         }*/
/*     </script>*/
/* */
/* */
/* {% endblock %}*/
/* */
