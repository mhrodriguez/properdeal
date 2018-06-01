<?php

/* :solicitud:edit.html.twig */
class __TwigTemplate_3fb041d08fd648d611de039c1bbf6cc78fb05cb88ebebd05f33319ab54684e8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":solicitud:edit.html.twig", 1);
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
                    <a href=\"#\" class=\"breadcrumb\">Editar</a>
                </div>
            </div>
        </nav>
    </div>
    <br/>
    <div class=\"row\">
        <div class=\"formcontainer\">
            <div>
                ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'widget');
        echo "
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'label');
        echo "
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'widget');
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'label');
        echo "
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'widget');
        echo "
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'label');
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'widget');
        echo "
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'label');
        echo "
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'widget');
        echo "
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'label');
        echo "
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'widget');
        echo "
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'label');
        echo "
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array()), 'label');
        echo "
                        <br/><br/>
                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array()), 'widget');
        echo "
                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array()), 'errors');
        echo "
                    </div>
                </div>
                <br><br>
                <div class=\"row\">
                    <div class=\"input-field col s4\">
                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'widget');
        echo "
                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'label');
        echo "
                        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'widget');
        echo "
                        ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'label');
        echo "
                        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'widget');
        echo "
                        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'label');
        echo "
                        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'widget');
        echo "
                        ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'label');
        echo "
                        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'widget');
        echo "
                        ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'label');
        echo "
                        ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'widget');
        echo "
                        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'label');
        echo "
                        ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccionmax", array()), 'widget');
        echo "
                        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccionmax", array()), 'label');
        echo "
                        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccionmax", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'widget');
        echo "
                        ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'label');
        echo "
                        ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'errors');
        echo "
                    </div>
                </div>

                ";
        // line 128
        if (array_key_exists("url", $context)) {
            // line 129
            echo "                <input id=\"url\" name=\"url\" type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">
                ";
        }
        // line 131
        echo "
                <input type=\"submit\" value=\"Guardar\" class=\"btn blue darken-4 right\" style=\"margin-left: 10px\" />
                <a href=\"#!\" onclick=\"self.history.back(-1);\" class=\"btn blue darken-4 right\" style=\"margin-right: 10px\">Cancelar</a>

                ";
        // line 135
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
        // line 164
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

                frmBuscarInmuebles.src = \"";
        // line 192
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
        // line 229
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
        // line 262
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

    var labels = document.getElementsByTagName('LABEL');
    for (var i = 0; i < labels.length; i++) {
        if (labels[i].htmlFor != '') {
            var elem = document.getElementById(labels[i].htmlFor);
            if (elem)
                elem.label = labels[i];
        }
    }

    for (i=0; i<";
        // line 300
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array())), "html", null, true);
        echo "; i++)
    {
        var caracteristica = document.getElementById('solicitud_caracteristicas_' + i);

        ";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["caracteristicasDesc"]) ? $context["caracteristicasDesc"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["caracteristicaDesc"]) {
            // line 305
            echo "
        if (caracteristica.label.innerHTML == '";
            // line 306
            echo twig_escape_filter($this->env, $context["caracteristicaDesc"], "html", null, true);
            echo "')
        {
            caracteristica.checked = true;
        }

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caracteristicaDesc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "    }

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
        return ":solicitud:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  516 => 312,  504 => 306,  501 => 305,  497 => 304,  490 => 300,  449 => 262,  413 => 229,  373 => 192,  342 => 164,  310 => 135,  304 => 131,  298 => 129,  296 => 128,  289 => 124,  285 => 123,  281 => 122,  272 => 116,  268 => 115,  264 => 114,  258 => 111,  254 => 110,  250 => 109,  241 => 103,  237 => 102,  233 => 101,  227 => 98,  223 => 97,  219 => 96,  210 => 90,  206 => 89,  202 => 88,  196 => 85,  192 => 84,  188 => 83,  182 => 80,  178 => 79,  174 => 78,  165 => 72,  161 => 71,  156 => 69,  147 => 63,  143 => 62,  139 => 61,  133 => 58,  129 => 57,  125 => 56,  116 => 50,  112 => 49,  108 => 48,  99 => 42,  95 => 41,  91 => 40,  85 => 37,  81 => 36,  77 => 35,  68 => 29,  64 => 28,  60 => 27,  53 => 23,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
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
/*                     <a href="#" class="breadcrumb">Editar</a>*/
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
/*                 <input type="submit" value="Guardar" class="btn blue darken-4 right" style="margin-left: 10px" />*/
/*                 <a href="#!" onclick="self.history.back(-1);" class="btn blue darken-4 right" style="margin-right: 10px">Cancelar</a>*/
/* */
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container z-depth-2" style="padding: 20px;">*/
/*     <br/>*/
/*     <div class="row">*/
/*         <a href="#!" onclick="buscarInmuebles();" class="btn blue darken-4 left">Buscar</a>*/
/* */
/*         <script>*/
/*             function buscarInmuebles() {*/
/*                 frmBuscarInmuebles = document.getElementById('frmBuscarInmuebles');*/
/* */
/*                 // Obtener valores de los campos*/
/*                 var indexInmuebleTipo = document.getElementById('solicitud_id_tipo_inmueble').value;*/
/*                 var indexOperacionInmueble = document.getElementById('solicitud_id_operacion_inmueble').value;*/
/*                 var indexEstado = document.getElementById('solicitud_id_estado').value;*/
/*                 var municipio = document.getElementById('solicitud_ciudad').value;*/
/*                 var colonia = document.getElementById('solicitud_colonia').value;*/
/*                 var indexMoneda = document.getElementById('solicitud_id_moneda').value;*/
/*                 var precio = document.getElementById('solicitud_precio').value;*/
/*                 var preciomax = document.getElementById('solicitud_preciomax').value;*/
/*                 var metrosterreno = document.getElementById('solicitud_metrosterreno').value;*/
/*                 var metrosterrenomax = document.getElementById('solicitud_metrosterrenomax').value;*/
/*                 var metrosconstruccion = document.getElementById('solicitud_metrosconstruccion').value;*/
/*                 var metrosconstruccionmax = document.getElementById('solicitud_metrosconstruccionmax').value;*/
/*                 var caracteristicas='';*/
/*                 for (i=0; i<{{ form.caracteristicas|length }}; i++)*/
/*                 {*/
/*                     var caracteristica = document.getElementById('solicitud_caracteristicas_' + i);*/
/* */
/*                     if (caracteristica.checked==true) {*/
/*                         if (caracteristicas == '') {*/
/*                             caracteristicas = caracteristica.value;*/
/*                         }*/
/*                         else {*/
/*                             caracteristicas = caracteristicas + ',' + caracteristica.value;*/
/*                         }*/
/*                     }*/
/*                 }*/
/* */
/*                 var parametros = '?indexInmuebleTipo=' + indexInmuebleTipo +*/
/*                         '&indexOperacionInmueble=' + indexOperacionInmueble +*/
/*                         '&indexEstado=' + indexEstado +*/
/*                         '&municipio=' + municipio +*/
/*                         '&colonia=' + colonia +*/
/*                         '&indexCaracteristicas=' + caracteristicas +*/
/*                         '&indexMoneda=' + indexMoneda +*/
/*                         '&precio=' + precio +*/
/*                         '&preciomax=' + preciomax +*/
/*                         '&metrosterreno=' + metrosterreno +*/
/*                         '&metrosterrenomax=' + metrosterrenomax +*/
/*                         '&metroscontruccion=' + metrosconstruccion +*/
/*                         '&metrosconstruccionmax=' + metrosconstruccionmax;*/
/* */
/*                 frmBuscarInmuebles.src = "{{ path('solicitud_buscarinmuebles', {}) }}" + parametros;*/
/*             }*/
/*         </script>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <iframe id="frmBuscarInmuebles" id style="width:100%; height:50vh;" frameBorder="0">*/
/*         </iframe>*/
/*     </div>*/
/* </div>*/
/* */
/* <style>*/
/*     body{*/
/*         background-color: white;*/
/*         height: 100vh;*/
/*     }*/
/* */
/*     #solicitud_caracteristicas label*/
/*     {*/
/*         margin-right: 20px;*/
/*     }*/
/* */
/*     .activelabel label {*/
/*         font-size: 0.8rem;*/
/*         -webkit-transform: translateY(-140%);*/
/*         transform: translateY(-140%);*/
/*     }*/
/* </style>*/
/* */
/* <script>*/
/* */
/*     $(document).ready(function() {*/
/*         $('select').material_select();*/
/*     });*/
/* */
/*     function onChangeEstado()*/
/*     {*/
/*         var url = 'http://' + window.location.hostname  + '{{ path('municipio_index', {}) }}?indexEstado=' + selectorEstado.value;*/
/* */
/*         $.ajax({*/
/*             url: url,*/
/*             dataType: "json",*/
/*             success: function(data) {*/
/*                 var options, index, select, option;*/
/* */
/*                 // Get the raw DOM object for the select box*/
/*                 select = document.getElementById('solicitud_id_municipio');*/
/* */
/*                 // Clear the old options*/
/*                 select.options.length = 0;*/
/* */
/*                 // Load the new options*/
/*                 options = data; // Or whatever source information you're working with*/
/*                 for (index = 0; index < options.length; ++index) {*/
/*                     option = options[index];*/
/* */
/*                     select.options.add(new Option(option.nombre, index));*/
/*                 }*/
/* */
/*                 $('select').material_select();*/
/* */
/*                 onChangeMunicipio();*/
/*             }*/
/*         });*/
/*     }*/
/* */
/*     function onChangeMunicipio()*/
/*     {*/
/*         var selectorEstado = document.getElementById('solicitud_id_estado');*/
/*         var selectorMunicipio = document.getElementById('solicitud_id_municipio');*/
/*         var url = 'http://' + window.location.hostname  + '{{ path('colonia_index', {}) }}?indexMunicipio=' + selectorMunicipio.value + '&indexEstado=' + selectorEstado.value;*/
/* */
/*         $.ajax({*/
/*             url: url,*/
/*             dataType: "json",*/
/*             success: function(data) {*/
/*                 var options, index, select, option;*/
/* */
/*                 // Get the raw DOM object for the select box*/
/*                 select = document.getElementById('solicitud_id_colonia');*/
/* */
/*                 // Clear the old options*/
/*                 select.options.length = 0;*/
/* */
/*                 // Load the new options*/
/*                 options = data; // Or whatever source information you're working with*/
/*                 for (index = 0; index < options.length; ++index) {*/
/*                     option = options[index];*/
/* */
/*                     select.options.add(new Option(option.nombre, index));*/
/*                 }*/
/*                 $('select').material_select();*/
/*             }*/
/*         });*/
/*     }*/
/* */
/*     function onChangeColonia() {*/
/*     }*/
/* */
/*     var labels = document.getElementsByTagName('LABEL');*/
/*     for (var i = 0; i < labels.length; i++) {*/
/*         if (labels[i].htmlFor != '') {*/
/*             var elem = document.getElementById(labels[i].htmlFor);*/
/*             if (elem)*/
/*                 elem.label = labels[i];*/
/*         }*/
/*     }*/
/* */
/*     for (i=0; i<{{ form.caracteristicas|length }}; i++)*/
/*     {*/
/*         var caracteristica = document.getElementById('solicitud_caracteristicas_' + i);*/
/* */
/*         {% for caracteristicaDesc in caracteristicasDesc %}*/
/* */
/*         if (caracteristica.label.innerHTML == '{{ caracteristicaDesc }}')*/
/*         {*/
/*             caracteristica.checked = true;*/
/*         }*/
/* */
/*         {% endfor %}*/
/*     }*/
/* */
/*     document.getElementById('solicitud_ciudad').required=false;*/
/*     document.getElementById('solicitud_colonia').required=false;*/
/* */
/*     document.getElementById('solicitud_metrosterreno').required=false;*/
/*     document.getElementById('solicitud_metrosterrenomax').required=false;*/
/*     document.getElementById('solicitud_metrosconstruccion').required=false;*/
/*     document.getElementById('solicitud_metrosconstruccionmax').required=false;*/
/* */
/*     document.getElementById('solicitud_precio').required=false;*/
/*     document.getElementById('solicitud_preciomax').required=false;*/
/* */
/*     document.getElementById('solicitud_descripcion').required=false;*/
/* */
/* </script>*/
/* */
/* {% endblock %}*/
/* */
