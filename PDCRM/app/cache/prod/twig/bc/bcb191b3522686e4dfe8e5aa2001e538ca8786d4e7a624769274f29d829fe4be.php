<?php

/* :consultarinmueble:buscarformvertical.html.twig */
class __TwigTemplate_8946bc25231badd5f3e5d410cea4dfd88ea6abc62d5a9c3372748bea48f402bd extends Twig_Template
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
                    <a class=\"waves-effect btn right blue darken-4\" onclick=\"actualizarBusqueda();\">
                        Buscar
                        <i class=\"material-icons left\">search</i>
                    </a>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'widget');
        echo "
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'label');
        echo "
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'errors');
        echo "
                </div>
            </div>


            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'widget');
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'label');
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'widget');
        echo "
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'label');
        echo "
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'widget');
        echo "
                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'label');
        echo "
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'widget');
        echo "
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'label');
        echo "
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'widget');
        echo "
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'label');
        echo "
                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'widget');
        echo "
                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'label');
        echo "
                    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'widget');
        echo "
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'label');
        echo "
                    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'widget');
        echo "
                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'label');
        echo "
                    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'widget');
        echo "
                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'label');
        echo "
                    ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'widget');
        echo "
                    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'label');
        echo "
                    ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccionmax", array()), 'widget');
        echo "
                    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccionmax", array()), 'label');
        echo "
                    ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccionmax", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciometroterrenomin", array()), 'widget');
        echo "
                    ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciometroterrenomin", array()), 'label');
        echo "
                    ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciometroterrenomin", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciometroterrenomax", array()), 'widget');
        echo "
                    ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciometroterrenomax", array()), 'label');
        echo "
                    ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciometroterrenomax", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciometroconstruccionmin", array()), 'widget');
        echo "
                    ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciometroconstruccionmin", array()), 'label');
        echo "
                    ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciometroconstruccionmin", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciometroconstruccionmax", array()), 'widget');
        echo "
                    ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciometroconstruccionmax", array()), 'label');
        echo "
                    ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciometroconstruccionmax", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "amueblado", array()), 'widget');
        echo "
                    ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "amueblado", array()), 'label');
        echo "
                    ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "amueblado", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "alberca", array()), 'widget');
        echo "
                    ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "alberca", array()), 'label');
        echo "
                    ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "alberca", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mostrarinactivas", array()), 'widget');
        echo "
                    ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mostrarinactivas", array()), 'label');
        echo "
                    ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mostrarinactivas", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'widget');
        echo "
                    ";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'label');
        echo "
                    ";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'widget');
        echo "
                    ";
        // line 175
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'label');
        echo "
                    ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    <a class=\"waves-effect btn right blue darken-4\" onclick=\"actualizarBusqueda();\">
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
        selectorOperacion.selectedIndex=0;

        var selectorEstado = document.getElementById('buscar_inmueble_id_estado');
        selectorEstado.options.add(new Option(\"Todos\", -1), 0);
        selectorEstado.selectedIndex=0;

        var selectorMunicipio = document.getElementById('buscar_inmueble_id_municipio');
        selectorMunicipio.options.add(new Option(\"Todos\", -1), 0);
        selectorMunicipio.selectedIndex=0;

        var selectorUsuario = document.getElementById('buscar_inmueble_id_usuario');
        selectorUsuario.options.add(new Option(\"Todos\", -1), 0);

        //var ciudad = document.getElementById('buscar_inmueble_ciudad');

        var colonia = document.getElementById('buscar_inmueble_colonia');

        var precio = document.getElementById('buscar_inmueble_precio');

        var preciomax = document.getElementById('buscar_inmueble_preciomax');

        var metrosterreno = document.getElementById('buscar_inmueble_metrosterreno');

        var metrosterrenomax = document.getElementById('buscar_inmueble_metrosterrenomax');

        var recamaras = document.getElementById('buscar_inmueble_recamaras');

        var plantas = document.getElementById('buscar_inmueble_plantas');

        var metrosconstruccion = document.getElementById('buscar_inmueble_metrosconstruccion');

        var metrosconstruccionmax = document.getElementById('buscar_inmueble_metrosconstruccionmax');

        var preciometroterrenomin = document.getElementById('buscar_inmueble_preciometroterrenomin');
        var preciometroterrenomax = document.getElementById('buscar_inmueble_preciometroterrenomax');
        var preciometroconstruccionmin = document.getElementById('buscar_inmueble_preciometroconstruccionmin');
        var preciometroconstruccionmax = document.getElementById('buscar_inmueble_preciometroconstruccionmax');

        var amueblado = document.getElementById('buscar_inmueble_amueblado');
        var alberca = document.getElementById('buscar_inmueble_alberca');
        var mostrarinactivas = document.getElementById('buscar_inmueble_mostrarinactivas');

        //document.getElementById('buscar_inmueble_id_municipio').addEventListener('change', onChangeEstado, false);

        function onChangeEstado()
        {

            var selectorEstado = document.getElementById('buscar_inmueble_id_estado');
            var url = 'http://' + window.location.hostname  + '";
        // line 256
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

                    //onChangeMunicipio();
                }
            });
        }
/*
        function onChangeMunicipio()
        {
            var selectorEstado = document.getElementById('consultar_inmueble_id_estado');
            var selectorMunicipio = document.getElementById('consultar_inmueble_id_municipio');
            var url = 'http://' + window.location.hostname  + '";
        // line 290
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
*/
        function onChangeColonia() {

        }

        function actualizarBusqueda()
        {
            if (alberca.checked)
            {
                boolalberca=1;
            }
            else
            {
                boolalberca=0;
            }

            if (amueblado.checked)
            {
                boolamueblado=1;
            }
            else
            {
                boolamueblado=0;
            }

            if (mostrarinactivas.checked)
            {
                boolmostrarinactivas=1;
            }
            else
            {
                boolmostrarinactivas=0;
            }

            var parametros = 'buscar_inmueble%5Bid_tipo_inmueble%5D=' + selectorTipoInmueble.options[selectorTipoInmueble.selectedIndex].value + '&' +
                    'buscar_inmueble%5Bid_operacion_inmueble%5D=' + selectorOperacion.options[selectorOperacion.selectedIndex].value + '&' +
                    'buscar_inmueble%5Bid_estado%5D=' + selectorEstado.options[selectorEstado.selectedIndex].value + '&' +
                    'buscar_inmueble%5Bid_municipio%5D=' + selectorMunicipio.options[selectorMunicipio.selectedIndex].value + '&' +
                    'buscar_inmueble%5Bcolonia%5D=' + colonia.value + '&' +
                    'buscar_inmueble%5Bprecio%5D=' + precio.value + '&' +
                    'buscar_inmueble%5Bpreciomax%5D=' + preciomax.value + '&' +
                    'buscar_inmueble%5Bmetrosterreno%5D=' + metrosterreno.value + '&' +
                    'buscar_inmueble%5Bmetrosterrenomax%5D=' + metrosterrenomax.value + '&' +
                    'buscar_inmueble%5Brecamaras%5D=' + recamaras.value + '&' +
                    'buscar_inmueble%5Bplantas%5D=' + plantas.value + '&' +

                    'buscar_inmueble%5Bmetrosconstruccion%5D=' + metrosconstruccion.value + '&' +
                    'buscar_inmueble%5Bmetrosconstruccionmax%5D=' + metrosconstruccionmax.value + '&' +

                    'buscar_inmueble%5Bpreciometroterrenomin%5D=' + preciometroterrenomin.value + '&' +
                    'buscar_inmueble%5Bpreciometroterrenomax%5D=' + preciometroterrenomax.value + '&' +
                    'buscar_inmueble%5Bpreciometroconstruccionmin%5D=' + preciometroconstruccionmin.value + '&' +
                    'buscar_inmueble%5Bpreciometroconstruccionmax%5D=' + preciometroconstruccionmax.value + '&' +

                    'buscar_inmueble%5Bid_usuario%5D=' + selectorUsuario.options[selectorUsuario.selectedIndex].value + '&' +

                    'buscar_inmueble%5Balberca%5D=' + boolalberca + '&' +
                    'buscar_inmueble%5Bamueblado%5D=' + boolamueblado + '&' +
                    'buscar_inmueble%5Bmostrarinactivas%5D=' + boolmostrarinactivas;


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
        return array (  511 => 290,  474 => 256,  391 => 176,  387 => 175,  383 => 174,  375 => 169,  371 => 168,  367 => 167,  358 => 161,  354 => 160,  350 => 159,  341 => 153,  337 => 152,  333 => 151,  324 => 145,  320 => 144,  316 => 143,  307 => 137,  303 => 136,  299 => 135,  290 => 129,  286 => 128,  282 => 127,  273 => 121,  269 => 120,  265 => 119,  256 => 113,  252 => 112,  248 => 111,  239 => 105,  235 => 104,  231 => 103,  223 => 98,  219 => 97,  215 => 96,  206 => 90,  202 => 89,  198 => 88,  190 => 83,  186 => 82,  182 => 81,  174 => 76,  170 => 75,  166 => 74,  158 => 69,  154 => 68,  150 => 67,  141 => 61,  137 => 60,  133 => 59,  124 => 53,  120 => 52,  116 => 51,  107 => 45,  103 => 44,  99 => 43,  90 => 37,  86 => 36,  82 => 35,  73 => 29,  69 => 28,  65 => 27,  55 => 20,  51 => 19,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
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
/*                     <a class="waves-effect btn right blue darken-4" onclick="actualizarBusqueda();">*/
/*                         Buscar*/
/*                         <i class="material-icons left">search</i>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.id_usuario) }}*/
/*                     {{ form_label(form.id_usuario) }}*/
/*                     {{ form_errors(form.id_usuario) }}*/
/*                 </div>*/
/*             </div>*/
/* */
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
/*                     {{ form_widget(form.colonia) }}*/
/*                     {{ form_label(form.colonia) }}*/
/*                     {{ form_errors(form.colonia) }}*/
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
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.metrosconstruccion) }}*/
/*                     {{ form_label(form.metrosconstruccion) }}*/
/*                     {{ form_errors(form.metrosconstruccion) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.metrosconstruccionmax) }}*/
/*                     {{ form_label(form.metrosconstruccionmax) }}*/
/*                     {{ form_errors(form.metrosconstruccionmax) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.preciometroterrenomin) }}*/
/*                     {{ form_label(form.preciometroterrenomin) }}*/
/*                     {{ form_errors(form.preciometroterrenomin) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.preciometroterrenomax) }}*/
/*                     {{ form_label(form.preciometroterrenomax) }}*/
/*                     {{ form_errors(form.preciometroterrenomax) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.preciometroconstruccionmin) }}*/
/*                     {{ form_label(form.preciometroconstruccionmin) }}*/
/*                     {{ form_errors(form.preciometroconstruccionmin) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.preciometroconstruccionmax) }}*/
/*                     {{ form_label(form.preciometroconstruccionmax) }}*/
/*                     {{ form_errors(form.preciometroconstruccionmax) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.amueblado) }}*/
/*                     {{ form_label(form.amueblado) }}*/
/*                     {{ form_errors(form.amueblado) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.alberca) }}*/
/*                     {{ form_label(form.alberca) }}*/
/*                     {{ form_errors(form.alberca) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.mostrarinactivas) }}*/
/*                     {{ form_label(form.mostrarinactivas) }}*/
/*                     {{ form_errors(form.mostrarinactivas) }}*/
/*                 </div>*/
/*             </div>*/
/* */
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
/*                     <a class="waves-effect btn right blue darken-4" onclick="actualizarBusqueda();">*/
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
/*         selectorOperacion.selectedIndex=0;*/
/* */
/*         var selectorEstado = document.getElementById('buscar_inmueble_id_estado');*/
/*         selectorEstado.options.add(new Option("Todos", -1), 0);*/
/*         selectorEstado.selectedIndex=0;*/
/* */
/*         var selectorMunicipio = document.getElementById('buscar_inmueble_id_municipio');*/
/*         selectorMunicipio.options.add(new Option("Todos", -1), 0);*/
/*         selectorMunicipio.selectedIndex=0;*/
/* */
/*         var selectorUsuario = document.getElementById('buscar_inmueble_id_usuario');*/
/*         selectorUsuario.options.add(new Option("Todos", -1), 0);*/
/* */
/*         //var ciudad = document.getElementById('buscar_inmueble_ciudad');*/
/* */
/*         var colonia = document.getElementById('buscar_inmueble_colonia');*/
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
/*         var metrosconstruccion = document.getElementById('buscar_inmueble_metrosconstruccion');*/
/* */
/*         var metrosconstruccionmax = document.getElementById('buscar_inmueble_metrosconstruccionmax');*/
/* */
/*         var preciometroterrenomin = document.getElementById('buscar_inmueble_preciometroterrenomin');*/
/*         var preciometroterrenomax = document.getElementById('buscar_inmueble_preciometroterrenomax');*/
/*         var preciometroconstruccionmin = document.getElementById('buscar_inmueble_preciometroconstruccionmin');*/
/*         var preciometroconstruccionmax = document.getElementById('buscar_inmueble_preciometroconstruccionmax');*/
/* */
/*         var amueblado = document.getElementById('buscar_inmueble_amueblado');*/
/*         var alberca = document.getElementById('buscar_inmueble_alberca');*/
/*         var mostrarinactivas = document.getElementById('buscar_inmueble_mostrarinactivas');*/
/* */
/*         //document.getElementById('buscar_inmueble_id_municipio').addEventListener('change', onChangeEstado, false);*/
/* */
/*         function onChangeEstado()*/
/*         {*/
/* */
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
/*                     //onChangeMunicipio();*/
/*                 }*/
/*             });*/
/*         }*/
/* /**/
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
/* *//* */
/*         function onChangeColonia() {*/
/* */
/*         }*/
/* */
/*         function actualizarBusqueda()*/
/*         {*/
/*             if (alberca.checked)*/
/*             {*/
/*                 boolalberca=1;*/
/*             }*/
/*             else*/
/*             {*/
/*                 boolalberca=0;*/
/*             }*/
/* */
/*             if (amueblado.checked)*/
/*             {*/
/*                 boolamueblado=1;*/
/*             }*/
/*             else*/
/*             {*/
/*                 boolamueblado=0;*/
/*             }*/
/* */
/*             if (mostrarinactivas.checked)*/
/*             {*/
/*                 boolmostrarinactivas=1;*/
/*             }*/
/*             else*/
/*             {*/
/*                 boolmostrarinactivas=0;*/
/*             }*/
/* */
/*             var parametros = 'buscar_inmueble%5Bid_tipo_inmueble%5D=' + selectorTipoInmueble.options[selectorTipoInmueble.selectedIndex].value + '&' +*/
/*                     'buscar_inmueble%5Bid_operacion_inmueble%5D=' + selectorOperacion.options[selectorOperacion.selectedIndex].value + '&' +*/
/*                     'buscar_inmueble%5Bid_estado%5D=' + selectorEstado.options[selectorEstado.selectedIndex].value + '&' +*/
/*                     'buscar_inmueble%5Bid_municipio%5D=' + selectorMunicipio.options[selectorMunicipio.selectedIndex].value + '&' +*/
/*                     'buscar_inmueble%5Bcolonia%5D=' + colonia.value + '&' +*/
/*                     'buscar_inmueble%5Bprecio%5D=' + precio.value + '&' +*/
/*                     'buscar_inmueble%5Bpreciomax%5D=' + preciomax.value + '&' +*/
/*                     'buscar_inmueble%5Bmetrosterreno%5D=' + metrosterreno.value + '&' +*/
/*                     'buscar_inmueble%5Bmetrosterrenomax%5D=' + metrosterrenomax.value + '&' +*/
/*                     'buscar_inmueble%5Brecamaras%5D=' + recamaras.value + '&' +*/
/*                     'buscar_inmueble%5Bplantas%5D=' + plantas.value + '&' +*/
/* */
/*                     'buscar_inmueble%5Bmetrosconstruccion%5D=' + metrosconstruccion.value + '&' +*/
/*                     'buscar_inmueble%5Bmetrosconstruccionmax%5D=' + metrosconstruccionmax.value + '&' +*/
/* */
/*                     'buscar_inmueble%5Bpreciometroterrenomin%5D=' + preciometroterrenomin.value + '&' +*/
/*                     'buscar_inmueble%5Bpreciometroterrenomax%5D=' + preciometroterrenomax.value + '&' +*/
/*                     'buscar_inmueble%5Bpreciometroconstruccionmin%5D=' + preciometroconstruccionmin.value + '&' +*/
/*                     'buscar_inmueble%5Bpreciometroconstruccionmax%5D=' + preciometroconstruccionmax.value + '&' +*/
/* */
/*                     'buscar_inmueble%5Bid_usuario%5D=' + selectorUsuario.options[selectorUsuario.selectedIndex].value + '&' +*/
/* */
/*                     'buscar_inmueble%5Balberca%5D=' + boolalberca + '&' +*/
/*                     'buscar_inmueble%5Bamueblado%5D=' + boolamueblado + '&' +*/
/*                     'buscar_inmueble%5Bmostrarinactivas%5D=' + boolmostrarinactivas;*/
/* */
/* */
/*             parent.actualizarBusqueda(parametros);*/
/*         }*/
/*     </script>*/
/* */
/* */
/* {% endblock %}*/
/* */
