<?php

/* :solicitud:new.html.twig */
class __TwigTemplate_5710697bbd966068d2437cdecbde68da8f7d4a6e35895d88dc492a5c4da9755d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":solicitud:new.html.twig", 1);
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
    <div class=\"row\">
        <nav>
            <div class=\"nav-wrapper z-depth-1\">
                <div class=\"col s12  blue darken-1 \">
                    <a href=\"#\" class=\"breadcrumb\">Solicitudes</a>
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
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'widget');
        echo "
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'label');
        echo "
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'widget');
        echo "
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'label');
        echo "
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'widget');
        echo "
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'label');
        echo "
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'widget');
        echo "
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'label');
        echo "
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'widget');
        echo "
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'label');
        echo "
                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'widget');
        echo "
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'label');
        echo "
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array()), 'label');
        echo "
                        <br/><br/>
                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array()), 'widget');
        echo "
                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array()), 'errors');
        echo "
                    </div>
                </div>
                <br><br>
                <div class=\"row\">
                    <div class=\"input-field col s4\">
                        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'widget');
        echo "
                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'label');
        echo "
                        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'widget');
        echo "
                        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'label');
        echo "
                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'widget');
        echo "
                        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'label');
        echo "
                        ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'widget');
        echo "
                        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'label');
        echo "
                        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'widget');
        echo "
                        ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'label');
        echo "
                        ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'widget');
        echo "
                        ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'label');
        echo "
                        ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccionmax", array()), 'widget');
        echo "
                        ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccionmax", array()), 'label');
        echo "
                        ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccionmax", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'widget');
        echo "
                        ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'label');
        echo "
                        ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'errors');
        echo "
                    </div>
                </div>

                ";
        // line 130
        if (array_key_exists("url", $context)) {
            // line 131
            echo "                <input id=\"url\" name=\"url\" type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">
                ";
        }
        // line 133
        echo "
                <input type=\"submit\" value=\"Guardar\" class=\"btn blue darken-4 right\" />
                <a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("solicitud_index", array());
        echo "\" class=\"btn blue darken-4 right\" style=\"margin-right: 10px\">Cancelar<a/>

                ";
        // line 137
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>
        </div>
    </div>
</div>

<div class=\"container z-depth-2\" style=\"padding: 20px;\">
        <br/>
        <div class=\"row\">
            <a href=\"#!\" onclick=\"buscarInmuebles();\" class=\"btn blue darken-4 left\">Buscar</a>

            <script>
                function buscarInmuebles() {
                    frmBuscarInmuebles = document.getElementById('frmBuscarInmuebles');

                    // Obtener valores de los campos
                    var indexInmuebleTipo = document.getElementById('solicitud_id_tipo_inmueble').value;
                    var indexOperacionInmueble = document.getElementById('solicitud_id_operacion_inmueble').value;
                    var indexEstado = document.getElementById('solicitud_id_estado').value;
                    var municipio = document.getElementById('solicitud_ciudad').value;
                    var colonia = document.getElementById('solicitud_colonia').value;
                    var indexMoneda = document.getElementById('solicitud_id_moneda').value;
                    var precio = document.getElementById('solicitud_precio').value;
                    var preciomax = document.getElementById('solicitud_preciomax').value;
                    var metrosterreno = document.getElementById('solicitud_metrosterreno').value;
                    var metrosterrenomax = document.getElementById('solicitud_metrosterrenomax').value;
                    var metrosconstruccion = document.getElementById('solicitud_metrosconstruccion').value;
                    var metrosconstruccionmax = document.getElementById('solicitud_metrosconstruccionmax').value;
                    var caracteristicas='';
                    for (i=0; i<";
        // line 166
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array())), "html", null, true);
        echo "; i++)
                    {
                        var caracteristica = document.getElementById('solicitud_caracteristicas_' + i);

                        if (caracteristica.checked==true) {
                            if (caracteristicas == '') {
                                caracteristicas = caracteristica.value;
                            }
                            else {
                                caracteristicas = caracteristicas + ',' + caracteristica.value;
                            }
                        }
                    }

                    var parametros = '?indexInmuebleTipo=' + indexInmuebleTipo +
                            '&indexOperacionInmueble=' + indexOperacionInmueble +
                            '&indexEstado=' + indexEstado +
                            '&municipio=' + municipio +
                            '&colonia=' + colonia +
                            '&indexCaracteristicas=' + caracteristicas +
                            '&indexMoneda=' + indexMoneda +
                            '&precio=' + precio +
                            '&preciomax=' + preciomax +
                            '&metrosterreno=' + metrosterreno +
                            '&metrosterrenomax=' + metrosterrenomax +
                            '&metroscontruccion=' + metrosconstruccion +
                            '&metrosconstruccionmax=' + metrosconstruccionmax;

                    ";
        // line 194
        if ( !(null === (isset($context["idProspecto"]) ? $context["idProspecto"] : null))) {
            // line 195
            echo "                    parametros = parametros + '&idProspecto=' + ";
            echo twig_escape_filter($this->env, (isset($context["idProspecto"]) ? $context["idProspecto"] : null), "html", null, true);
            echo ";
                    ";
        }
        // line 197
        echo "
                    frmBuscarInmuebles.src = \"";
        // line 198
        echo $this->env->getExtension('routing')->getPath("solicitud_buscarinmuebles", array());
        echo "\" + parametros;
                }
            </script>
        </div>

        <div class=\"row\">
            <iframe id=\"frmBuscarInmuebles\" id style=\"width:100%; height:50vh;\" frameBorder=\"0\">
            </iframe>
        </div>
</div>

<style>
        body{
            background-color: white;
            height: 100vh;
        }

        #solicitud_caracteristicas label
        {
            margin-right: 20px;
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

        function onChangeEstado()
        {
            var url = 'http://' + window.location.hostname  + '";
        // line 236
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
        // line 269
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


        document.getElementById('solicitud_ciudad').required=false;
        document.getElementById('solicitud_colonia').required=false;

        document.getElementById('solicitud_metrosterreno').required=false;
        document.getElementById('solicitud_metrosterrenomax').required=false;
        document.getElementById('solicitud_metrosconstruccion').required=false;
        document.getElementById('solicitud_metrosconstruccionmax').required=false;

        document.getElementById('solicitud_precio').required=false;
        document.getElementById('solicitud_preciomax').required=false;

        document.getElementById('solicitud_descripcion').required=false;
    </script>

 ";
    }

    public function getTemplateName()
    {
        return ":solicitud:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 269,  430 => 236,  389 => 198,  386 => 197,  380 => 195,  378 => 194,  347 => 166,  315 => 137,  310 => 135,  306 => 133,  300 => 131,  298 => 130,  291 => 126,  287 => 125,  283 => 124,  274 => 118,  270 => 117,  266 => 116,  260 => 113,  256 => 112,  252 => 111,  243 => 105,  239 => 104,  235 => 103,  229 => 100,  225 => 99,  221 => 98,  212 => 92,  208 => 91,  204 => 90,  198 => 87,  194 => 86,  190 => 85,  184 => 82,  180 => 81,  176 => 80,  167 => 74,  163 => 73,  158 => 71,  149 => 65,  145 => 64,  141 => 63,  135 => 60,  131 => 59,  127 => 58,  118 => 52,  114 => 51,  110 => 50,  101 => 44,  97 => 43,  93 => 42,  87 => 39,  83 => 38,  79 => 37,  70 => 31,  66 => 30,  62 => 29,  55 => 25,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
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
/*     <div class="row">*/
/*         <nav>*/
/*             <div class="nav-wrapper z-depth-1">*/
/*                 <div class="col s12  blue darken-1 ">*/
/*                     <a href="#" class="breadcrumb">Solicitudes</a>*/
/*                     <a href="#" class="breadcrumb">Nueva</a>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/* */
/*     <br/>*/
/* */
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
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_label(form.caracteristicas) }}*/
/*                         <br/><br/>*/
/*                         {{ form_widget(form.caracteristicas) }}*/
/*                         {{ form_errors(form.caracteristicas) }}*/
/*                     </div>*/
/*                 </div>*/
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
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.descripcion) }}*/
/*                         {{ form_label(form.descripcion) }}*/
/*                         {{ form_errors(form.descripcion) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 {% if url is defined %}*/
/*                 <input id="url" name="url" type="hidden" value="{{ url }}">*/
/*                 {% endif %}*/
/* */
/*                 <input type="submit" value="Guardar" class="btn blue darken-4 right" />*/
/*                 <a href="{{ path('solicitud_index', {}) }}" class="btn blue darken-4 right" style="margin-right: 10px">Cancelar<a/>*/
/* */
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container z-depth-2" style="padding: 20px;">*/
/*         <br/>*/
/*         <div class="row">*/
/*             <a href="#!" onclick="buscarInmuebles();" class="btn blue darken-4 left">Buscar</a>*/
/* */
/*             <script>*/
/*                 function buscarInmuebles() {*/
/*                     frmBuscarInmuebles = document.getElementById('frmBuscarInmuebles');*/
/* */
/*                     // Obtener valores de los campos*/
/*                     var indexInmuebleTipo = document.getElementById('solicitud_id_tipo_inmueble').value;*/
/*                     var indexOperacionInmueble = document.getElementById('solicitud_id_operacion_inmueble').value;*/
/*                     var indexEstado = document.getElementById('solicitud_id_estado').value;*/
/*                     var municipio = document.getElementById('solicitud_ciudad').value;*/
/*                     var colonia = document.getElementById('solicitud_colonia').value;*/
/*                     var indexMoneda = document.getElementById('solicitud_id_moneda').value;*/
/*                     var precio = document.getElementById('solicitud_precio').value;*/
/*                     var preciomax = document.getElementById('solicitud_preciomax').value;*/
/*                     var metrosterreno = document.getElementById('solicitud_metrosterreno').value;*/
/*                     var metrosterrenomax = document.getElementById('solicitud_metrosterrenomax').value;*/
/*                     var metrosconstruccion = document.getElementById('solicitud_metrosconstruccion').value;*/
/*                     var metrosconstruccionmax = document.getElementById('solicitud_metrosconstruccionmax').value;*/
/*                     var caracteristicas='';*/
/*                     for (i=0; i<{{ form.caracteristicas|length }}; i++)*/
/*                     {*/
/*                         var caracteristica = document.getElementById('solicitud_caracteristicas_' + i);*/
/* */
/*                         if (caracteristica.checked==true) {*/
/*                             if (caracteristicas == '') {*/
/*                                 caracteristicas = caracteristica.value;*/
/*                             }*/
/*                             else {*/
/*                                 caracteristicas = caracteristicas + ',' + caracteristica.value;*/
/*                             }*/
/*                         }*/
/*                     }*/
/* */
/*                     var parametros = '?indexInmuebleTipo=' + indexInmuebleTipo +*/
/*                             '&indexOperacionInmueble=' + indexOperacionInmueble +*/
/*                             '&indexEstado=' + indexEstado +*/
/*                             '&municipio=' + municipio +*/
/*                             '&colonia=' + colonia +*/
/*                             '&indexCaracteristicas=' + caracteristicas +*/
/*                             '&indexMoneda=' + indexMoneda +*/
/*                             '&precio=' + precio +*/
/*                             '&preciomax=' + preciomax +*/
/*                             '&metrosterreno=' + metrosterreno +*/
/*                             '&metrosterrenomax=' + metrosterrenomax +*/
/*                             '&metroscontruccion=' + metrosconstruccion +*/
/*                             '&metrosconstruccionmax=' + metrosconstruccionmax;*/
/* */
/*                     {% if idProspecto is not null %}*/
/*                     parametros = parametros + '&idProspecto=' + {{ idProspecto }};*/
/*                     {% endif %}*/
/* */
/*                     frmBuscarInmuebles.src = "{{ path('solicitud_buscarinmuebles', {}) }}" + parametros;*/
/*                 }*/
/*             </script>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <iframe id="frmBuscarInmuebles" id style="width:100%; height:50vh;" frameBorder="0">*/
/*             </iframe>*/
/*         </div>*/
/* </div>*/
/* */
/* <style>*/
/*         body{*/
/*             background-color: white;*/
/*             height: 100vh;*/
/*         }*/
/* */
/*         #solicitud_caracteristicas label*/
/*         {*/
/*             margin-right: 20px;*/
/*         }*/
/* */
/*         .activelabel label {*/
/*             font-size: 0.8rem;*/
/*             -webkit-transform: translateY(-140%);*/
/*             transform: translateY(-140%);*/
/*         }*/
/*     </style>*/
/* */
/* <script>*/
/* */
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
/* */
/*         document.getElementById('solicitud_ciudad').required=false;*/
/*         document.getElementById('solicitud_colonia').required=false;*/
/* */
/*         document.getElementById('solicitud_metrosterreno').required=false;*/
/*         document.getElementById('solicitud_metrosterrenomax').required=false;*/
/*         document.getElementById('solicitud_metrosconstruccion').required=false;*/
/*         document.getElementById('solicitud_metrosconstruccionmax').required=false;*/
/* */
/*         document.getElementById('solicitud_precio').required=false;*/
/*         document.getElementById('solicitud_preciomax').required=false;*/
/* */
/*         document.getElementById('solicitud_descripcion').required=false;*/
/*     </script>*/
/* */
/*  {% endblock %}*/
/* */
