<?php

/* :inmueble:new.html.twig */
class __TwigTemplate_ef0251674c425952f6de076a288660db2498593c1328a52f877faa9d64d25561 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":inmueble:new.html.twig", 1);
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
        echo "
<div class=\"container\">
    <br/>
    <div class=\"row\">
        <nav>
            <div class=\"nav-wrapper z-depth-1\">
                <div class=\"col s12  blue darken-1 \">
                    <a href=\"#\" class=\"breadcrumb\">Propiedades</a>
                    <a href=\"#\" class=\"breadcrumb\">Nueva</a>
                </div>
            </div>
        </nav>
    </div>
    <br/>
    <div class=\"row\">
        <div class=\"formcontainer\">
            <div>
                ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'widget');
        echo "
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'label');
        echo "
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'widget');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'label');
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'widget');
        echo "
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'label');
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zonas", array()), 'label');
        echo "
                        <br/><br/>
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zonas", array()), 'widget');
        echo "
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zonas", array()), 'errors');
        echo "
                    </div>
                </div>
                <br/>
                <div class=\"row\">
                    <div class=\"input-field col s8\">
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "calle", array()), 'widget');
        echo "
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "calle", array()), 'label');
        echo "
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "calle", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s2\">
                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numero", array()), 'widget');
        echo "
                        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numero", array()), 'label');
        echo "
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numero", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s2\">
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numeroint", array()), 'widget');
        echo "
                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numeroint", array()), 'label');
        echo "
                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numeroint", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_primera", array()), 'widget');
        echo "
                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_primera", array()), 'label');
        echo "
                        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_primera", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_segunda", array()), 'widget');
        echo "
                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_segunda", array()), 'label');
        echo "
                        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_segunda", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'widget');
        echo "
                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'label');
        echo "
                        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'widget');
        echo "
                        ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'label');
        echo "
                        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_colonia", array()), 'widget');
        echo "
                        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_colonia", array()), 'label');
        echo "
                        ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_colonia", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()), 'widget');
        echo "
                        ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()), 'label');
        echo "
                        ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <button class=\"btn btn-primary\" type=\"button\" onclick=\"buscarDireccion();\">Ubicar dirección en mapa</button>
                    <div id=\"map-canvas\" style=\"height:400px\" class=\"form-control\"></div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latlng", array()), 'widget');
        echo "
                        ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latlng", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'widget');
        echo "
                        ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'label');
        echo "
                        ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'widget');
        echo "
                        ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'label');
        echo "
                        ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'widget');
        echo "
                        ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'label');
        echo "
                        ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'widget');
        echo "
                        ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'label');
        echo "
                        ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'widget');
        echo "
                        ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'label');
        echo "
                        ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'widget');
        echo "
                        ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'label');
        echo "
                        ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array()), 'label');
        echo "
                        <br/><br/>
                        ";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array()), 'widget');
        echo "
                        ";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array()), 'errors');
        echo "
                    </div>
                </div>

                <input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue darken-4 right\"/>
                <a href=\"";
        // line 174
        echo $this->env->getExtension('routing')->getPath("inmueble_index", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-4 right\">Cancelar<a/>

                ";
        // line 176
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>

            <!-- Modal Structure -->
            <div id=\"modalDirecciones\" class=\"modal\">
                <div class=\"modal-content\">
                    <h5>Seleccione la ubicación deseada:</h5>
                    <div id=\"panelDirecciones\" hidden=\"hidden\">
                        <ul id=\"lvwDirecciones\" class=\"collection\"></ul>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <a href=\"#!\" class=\" modal-action modal-close waves-effect waves-green btn-flat\">Cerrar</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        body{
            background-color: white;
            height: 150vh;
        }

        #inmueble_zonas label
        {
            margin-right: 20px;
        }

        #inmueble_caracteristicas label
        {
            margin-right: 20px;
        }
    </style>

    <script type=\"text/javascript\"
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCmOj1JP2fKLOHkJSKhAdrIVOJlovubgkY\">
    </script>

    ";
        // line 215
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "840e211_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_840e211_0") : $this->env->getExtension('asset')->getAssetUrl("js/840e211_part_1_mapsIntegracion_1.js");
            // line 216
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "840e211"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_840e211") : $this->env->getExtension('asset')->getAssetUrl("js/840e211.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 218
        echo "
    <script type=\"text/javascript\">
        var mapOptions = {
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.TERRAIN
        };
        var direccionResultados = [];
        var direccionActual;

        setMapControl(document.getElementById('map-canvas'), mapOptions);

        function buscarDireccion() {

            var direccion = document.getElementById('inmueble_calle').value + ' ' +
                    document.getElementById('inmueble_numero').value + ' ' +
                    document.getElementById('inmueble_id_colonia').options[document.getElementById('inmueble_id_colonia').selectedIndex].innerHTML + ' ' +
                    document.getElementById('inmueble_id_municipio').options[document.getElementById('inmueble_id_municipio').selectedIndex].innerHTML + ' ' +
                    document.getElementById('inmueble_cp').value + ' ' +
                    document.getElementById('inmueble_id_estado').options[document.getElementById('inmueble_id_estado').selectedIndex].innerHTML;

            var posiciones = geocodeDireccion(direccion, direccionCodificada);

            return false;
        }

        function direccionCodificada(operacionExitosa, resultados, mensajeError) {
            var panelDirecciones = document.getElementById('panelDirecciones');
            var lvwDirecciones = document.getElementById('lvwDirecciones');

            if (!operacionExitosa) {
                alert(mensajeError);
                return;
            }
            else {
                // Remover resultados de la anterior busqueda
                resetBusquedaMapa();
            }

            // Mostrar listado de direcciones
            panelDirecciones.hidden = \"\";

            direccionResultados = resultados;
            for (var i = 0; i < resultados.length; i++) {
                var nuevoElemento = document.createElement('a');
                nuevoElemento.setAttribute('href', \"#!\");
                nuevoElemento.setAttribute('id', \"direccionitem\" + i);
                nuevoElemento.setAttribute('class', \"collection-item\");
                nuevoElemento.setAttribute('data-geocode', i);
                nuevoElemento.setAttribute('onclick', \"direccion_onclick(document.getElementById('direccionitem\" + i + \"'));\");
                nuevoElemento.innerHTML = resultados[i].formatted_address;

                lvwDirecciones.appendChild(nuevoElemento);
            }

            \$('#modalDirecciones').openModal();
        }

        function resetBusquedaMapa() {

            var lvwDirecciones = document.getElementById('lvwDirecciones');

            while (lvwDirecciones.firstChild) {
                lvwDirecciones.removeChild(lvwDirecciones.firstChild);
            }

            removerTodosMarcadoresDeMapa();

            document.getElementById('inmueble_latlng').value = null;
        }

        function direccion_onclick(control) {
            \$('#modalDirecciones').closeModal();

            removerTodosMarcadoresDeMapa();

            mostrarMarcadorEnMapa(direccionResultados[control.getAttribute('data-geocode')]);

            direccionActual = direccionResultados[control.getAttribute('data-geocode')]

            document.getElementById('inmueble_latlng').value = direccionActual.geometry.location.lat() + ',' +  direccionActual.geometry.location.lng();
        }

        function function_onchange() {
            resetBusquedaMapa();
        }

        /* Eventos */
        document.getElementById('inmueble_calle').addEventListener('change', function_onchange, false);
        document.getElementById('inmueble_numero').addEventListener('change', function_onchange, false);
        document.getElementById('inmueble_id_colonia').addEventListener('change', function_onchange, false);
        document.getElementById('inmueble_cp').addEventListener('change', function_onchange, false);

    </script>

    <script>

        var selectorEstado = document.getElementById('inmueble_id_estado');
        selectorEstado.value = ";
        // line 315
        echo twig_escape_filter($this->env, (isset($context["default_idestado"]) ? $context["default_idestado"] : null), "html", null, true);
        echo ";

        \$(document).ready(function() {
            \$('select').material_select();
        });

        function onChangeEstado()
        {
            resetBusquedaMapa();

            var url = 'http://' + window.location.hostname  + '";
        // line 325
        echo $this->env->getExtension('routing')->getPath("municipio_index", array());
        echo "?indexEstado=' + selectorEstado.value;

            \$.ajax({
                url: url,
                dataType: \"json\",
                success: function(data) {
                    var options, index, select, option;

                    // Get the raw DOM object for the select box
                    select = document.getElementById('inmueble_id_municipio');

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
            resetBusquedaMapa();

            var selectorEstado = document.getElementById('inmueble_id_estado');
            var selectorMunicipio = document.getElementById('inmueble_id_municipio');
            var url = 'http://' + window.location.hostname  + '";
        // line 360
        echo $this->env->getExtension('routing')->getPath("colonia_index", array());
        echo "?indexMunicipio=' + selectorMunicipio.value + '&indexEstado=' + selectorEstado.value;

            \$.ajax({
                url: url,
                dataType: \"json\",
                success: function(data) {
                    var options, index, select, option;

                    // Get the raw DOM object for the select box
                    select = document.getElementById('inmueble_id_colonia');

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
            resetBusquedaMapa();
        }

        //onChangeEstado();

    </script>

";
    }

    public function getTemplateName()
    {
        return ":inmueble:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  607 => 360,  569 => 325,  556 => 315,  457 => 218,  443 => 216,  439 => 215,  397 => 176,  392 => 174,  384 => 169,  380 => 168,  375 => 166,  366 => 160,  362 => 159,  358 => 158,  352 => 155,  348 => 154,  344 => 153,  335 => 147,  331 => 146,  327 => 145,  321 => 142,  317 => 141,  313 => 140,  304 => 134,  300 => 133,  296 => 132,  290 => 129,  286 => 128,  282 => 127,  273 => 121,  269 => 120,  255 => 109,  251 => 108,  247 => 107,  238 => 101,  234 => 100,  230 => 99,  224 => 96,  220 => 95,  216 => 94,  207 => 88,  203 => 87,  199 => 86,  190 => 80,  186 => 79,  182 => 78,  176 => 75,  172 => 74,  168 => 73,  159 => 67,  155 => 66,  151 => 65,  145 => 62,  141 => 61,  137 => 60,  131 => 57,  127 => 56,  123 => 55,  114 => 49,  110 => 48,  105 => 46,  96 => 40,  92 => 39,  88 => 38,  82 => 35,  78 => 34,  74 => 33,  65 => 27,  61 => 26,  57 => 25,  50 => 21,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="container">*/
/*     <br/>*/
/*     <div class="row">*/
/*         <nav>*/
/*             <div class="nav-wrapper z-depth-1">*/
/*                 <div class="col s12  blue darken-1 ">*/
/*                     <a href="#" class="breadcrumb">Propiedades</a>*/
/*                     <a href="#" class="breadcrumb">Nueva</a>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/*     <br/>*/
/*     <div class="row">*/
/*         <div class="formcontainer">*/
/*             <div>*/
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
/*                         {{ form_label(form.zonas) }}*/
/*                         <br/><br/>*/
/*                         {{ form_widget(form.zonas) }}*/
/*                         {{ form_errors(form.zonas) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <br/>*/
/*                 <div class="row">*/
/*                     <div class="input-field col s8">*/
/*                         {{ form_widget(form.calle) }}*/
/*                         {{ form_label(form.calle) }}*/
/*                         {{ form_errors(form.calle) }}*/
/*                     </div>*/
/*                     <div class="input-field col s2">*/
/*                         {{ form_widget(form.numero) }}*/
/*                         {{ form_label(form.numero) }}*/
/*                         {{ form_errors(form.numero) }}*/
/*                     </div>*/
/*                     <div class="input-field col s2">*/
/*                         {{ form_widget(form.numeroint) }}*/
/*                         {{ form_label(form.numeroint) }}*/
/*                         {{ form_errors(form.numeroint) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.entrecalles_primera) }}*/
/*                         {{ form_label(form.entrecalles_primera) }}*/
/*                         {{ form_errors(form.entrecalles_primera) }}*/
/*                     </div>*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.entrecalles_segunda) }}*/
/*                         {{ form_label(form.entrecalles_segunda) }}*/
/*                         {{ form_errors(form.entrecalles_segunda) }}*/
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
/*                         {{ form_widget(form.id_municipio) }}*/
/*                         {{ form_label(form.id_municipio) }}*/
/*                         {{ form_errors(form.id_municipio) }}*/
/*                     </div>*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.id_colonia) }}*/
/*                         {{ form_label(form.id_colonia) }}*/
/*                         {{ form_errors(form.id_colonia) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.cp) }}*/
/*                         {{ form_label(form.cp) }}*/
/*                         {{ form_errors(form.cp) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <button class="btn btn-primary" type="button" onclick="buscarDireccion();">Ubicar dirección en mapa</button>*/
/*                     <div id="map-canvas" style="height:400px" class="form-control"></div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.latlng) }}*/
/*                         {{ form_errors(form.latlng) }}*/
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
/*                         {{ form_widget(form.metrosterreno) }}*/
/*                         {{ form_label(form.metrosterreno) }}*/
/*                         {{ form_errors(form.metrosterreno) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.recamaras) }}*/
/*                         {{ form_label(form.recamaras) }}*/
/*                         {{ form_errors(form.recamaras) }}*/
/*                     </div>*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.plantas) }}*/
/*                         {{ form_label(form.plantas) }}*/
/*                         {{ form_errors(form.plantas) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.id_moneda) }}*/
/*                         {{ form_label(form.id_moneda) }}*/
/*                         {{ form_errors(form.id_moneda) }}*/
/*                     </div>*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.precio) }}*/
/*                         {{ form_label(form.precio) }}*/
/*                         {{ form_errors(form.precio) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_label(form.caracteristicas) }}*/
/*                         <br/><br/>*/
/*                         {{ form_widget(form.caracteristicas) }}*/
/*                         {{ form_errors(form.caracteristicas) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <input type="submit" value="Guardar" class="waves-effect waves-light btn blue darken-4 right"/>*/
/*                 <a href="{{ path('inmueble_index', {}) }}" class="waves-effect waves-light btn blue darken-4 right">Cancelar<a/>*/
/* */
/*                 {{ form_end(form) }}*/
/*             </div>*/
/* */
/*             <!-- Modal Structure -->*/
/*             <div id="modalDirecciones" class="modal">*/
/*                 <div class="modal-content">*/
/*                     <h5>Seleccione la ubicación deseada:</h5>*/
/*                     <div id="panelDirecciones" hidden="hidden">*/
/*                         <ul id="lvwDirecciones" class="collection"></ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <style>*/
/*         body{*/
/*             background-color: white;*/
/*             height: 150vh;*/
/*         }*/
/* */
/*         #inmueble_zonas label*/
/*         {*/
/*             margin-right: 20px;*/
/*         }*/
/* */
/*         #inmueble_caracteristicas label*/
/*         {*/
/*             margin-right: 20px;*/
/*         }*/
/*     </style>*/
/* */
/*     <script type="text/javascript"*/
/*             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmOj1JP2fKLOHkJSKhAdrIVOJlovubgkY">*/
/*     </script>*/
/* */
/*     {% javascripts '@FrameworkBundle/Resources/public/js/*'%}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/*     <script type="text/javascript">*/
/*         var mapOptions = {*/
/*             zoom: 14,*/
/*             mapTypeId: google.maps.MapTypeId.TERRAIN*/
/*         };*/
/*         var direccionResultados = [];*/
/*         var direccionActual;*/
/* */
/*         setMapControl(document.getElementById('map-canvas'), mapOptions);*/
/* */
/*         function buscarDireccion() {*/
/* */
/*             var direccion = document.getElementById('inmueble_calle').value + ' ' +*/
/*                     document.getElementById('inmueble_numero').value + ' ' +*/
/*                     document.getElementById('inmueble_id_colonia').options[document.getElementById('inmueble_id_colonia').selectedIndex].innerHTML + ' ' +*/
/*                     document.getElementById('inmueble_id_municipio').options[document.getElementById('inmueble_id_municipio').selectedIndex].innerHTML + ' ' +*/
/*                     document.getElementById('inmueble_cp').value + ' ' +*/
/*                     document.getElementById('inmueble_id_estado').options[document.getElementById('inmueble_id_estado').selectedIndex].innerHTML;*/
/* */
/*             var posiciones = geocodeDireccion(direccion, direccionCodificada);*/
/* */
/*             return false;*/
/*         }*/
/* */
/*         function direccionCodificada(operacionExitosa, resultados, mensajeError) {*/
/*             var panelDirecciones = document.getElementById('panelDirecciones');*/
/*             var lvwDirecciones = document.getElementById('lvwDirecciones');*/
/* */
/*             if (!operacionExitosa) {*/
/*                 alert(mensajeError);*/
/*                 return;*/
/*             }*/
/*             else {*/
/*                 // Remover resultados de la anterior busqueda*/
/*                 resetBusquedaMapa();*/
/*             }*/
/* */
/*             // Mostrar listado de direcciones*/
/*             panelDirecciones.hidden = "";*/
/* */
/*             direccionResultados = resultados;*/
/*             for (var i = 0; i < resultados.length; i++) {*/
/*                 var nuevoElemento = document.createElement('a');*/
/*                 nuevoElemento.setAttribute('href', "#!");*/
/*                 nuevoElemento.setAttribute('id', "direccionitem" + i);*/
/*                 nuevoElemento.setAttribute('class', "collection-item");*/
/*                 nuevoElemento.setAttribute('data-geocode', i);*/
/*                 nuevoElemento.setAttribute('onclick', "direccion_onclick(document.getElementById('direccionitem" + i + "'));");*/
/*                 nuevoElemento.innerHTML = resultados[i].formatted_address;*/
/* */
/*                 lvwDirecciones.appendChild(nuevoElemento);*/
/*             }*/
/* */
/*             $('#modalDirecciones').openModal();*/
/*         }*/
/* */
/*         function resetBusquedaMapa() {*/
/* */
/*             var lvwDirecciones = document.getElementById('lvwDirecciones');*/
/* */
/*             while (lvwDirecciones.firstChild) {*/
/*                 lvwDirecciones.removeChild(lvwDirecciones.firstChild);*/
/*             }*/
/* */
/*             removerTodosMarcadoresDeMapa();*/
/* */
/*             document.getElementById('inmueble_latlng').value = null;*/
/*         }*/
/* */
/*         function direccion_onclick(control) {*/
/*             $('#modalDirecciones').closeModal();*/
/* */
/*             removerTodosMarcadoresDeMapa();*/
/* */
/*             mostrarMarcadorEnMapa(direccionResultados[control.getAttribute('data-geocode')]);*/
/* */
/*             direccionActual = direccionResultados[control.getAttribute('data-geocode')]*/
/* */
/*             document.getElementById('inmueble_latlng').value = direccionActual.geometry.location.lat() + ',' +  direccionActual.geometry.location.lng();*/
/*         }*/
/* */
/*         function function_onchange() {*/
/*             resetBusquedaMapa();*/
/*         }*/
/* */
/*         /* Eventos *//* */
/*         document.getElementById('inmueble_calle').addEventListener('change', function_onchange, false);*/
/*         document.getElementById('inmueble_numero').addEventListener('change', function_onchange, false);*/
/*         document.getElementById('inmueble_id_colonia').addEventListener('change', function_onchange, false);*/
/*         document.getElementById('inmueble_cp').addEventListener('change', function_onchange, false);*/
/* */
/*     </script>*/
/* */
/*     <script>*/
/* */
/*         var selectorEstado = document.getElementById('inmueble_id_estado');*/
/*         selectorEstado.value = {{ default_idestado }};*/
/* */
/*         $(document).ready(function() {*/
/*             $('select').material_select();*/
/*         });*/
/* */
/*         function onChangeEstado()*/
/*         {*/
/*             resetBusquedaMapa();*/
/* */
/*             var url = 'http://' + window.location.hostname  + '{{ path('municipio_index', {}) }}?indexEstado=' + selectorEstado.value;*/
/* */
/*             $.ajax({*/
/*                 url: url,*/
/*                 dataType: "json",*/
/*                 success: function(data) {*/
/*                     var options, index, select, option;*/
/* */
/*                     // Get the raw DOM object for the select box*/
/*                     select = document.getElementById('inmueble_id_municipio');*/
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
/*             resetBusquedaMapa();*/
/* */
/*             var selectorEstado = document.getElementById('inmueble_id_estado');*/
/*             var selectorMunicipio = document.getElementById('inmueble_id_municipio');*/
/*             var url = 'http://' + window.location.hostname  + '{{ path('colonia_index', {}) }}?indexMunicipio=' + selectorMunicipio.value + '&indexEstado=' + selectorEstado.value;*/
/* */
/*             $.ajax({*/
/*                 url: url,*/
/*                 dataType: "json",*/
/*                 success: function(data) {*/
/*                     var options, index, select, option;*/
/* */
/*                     // Get the raw DOM object for the select box*/
/*                     select = document.getElementById('inmueble_id_colonia');*/
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
/*             resetBusquedaMapa();*/
/*         }*/
/* */
/*         //onChangeEstado();*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
