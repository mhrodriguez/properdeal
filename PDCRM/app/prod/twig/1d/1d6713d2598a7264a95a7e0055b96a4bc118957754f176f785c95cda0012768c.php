<?php

/* :buscarinmueble:buscarform.html.twig */
class __TwigTemplate_e82a4524e22ccdf8a8ddbf03a30b125a43e584c0dd3203ac004e89c0e0e20672 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container z-depth-1\" style=\"background-color: white\">
    <div class=\"row\" style=\"padding-left: 10px; padding-right: 10px;\">
        <nav>
            <div class=\"nav-wrapper z-depth-1\">
                <div class=\"col s12  blue darken-1 \">
                    <i class=\"material-icons left\">search</i>
                </div>
            </div>
        </nav>
    </div>
    <br/>
    <div class=\"row\">
        <div class=\"formcontainer\">
            <div>
                ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "GET", "action" => $this->env->getExtension('routing')->getPath("buscarinmueble_buscarpanel")));
        echo "

                <div class=\"row\">
                    <div class=\"input-field col s2\">
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
                    <div class=\"input-field col s2\">
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'widget');
        echo "
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'label');
        echo "
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s2\">
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'widget');
        echo "
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'label');
        echo "
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s3\">
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'widget');
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'label');
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s3\">
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_colonia", array()), 'widget');
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_colonia", array()), 'label');
        echo "
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_colonia", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s2\">
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'widget');
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'label');
        echo "
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s2\">
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'widget');
        echo "
                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'label');
        echo "
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciomax", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s2\">
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'widget');
        echo "
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'label');
        echo "
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s2\">
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'widget');
        echo "
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'label');
        echo "
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterrenomax", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s2\">
                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'widget');
        echo "
                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'label');
        echo "
                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s1\">
                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'widget');
        echo "
                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'label');
        echo "
                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'errors');
        echo "
                    </div>
                </div>

                <button type=\"submit\" class=\"waves-effect waves-light btn right blue darken-4\">
                    Buscar
                    <i class=\"material-icons left\">search</i>
                </button>

                ";
        // line 83
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>
        </div>
    </div>

    <style>
    </style>

    <script>

        \$(document).ready(function() {
            \$('select').material_select();
        });

        var selectorOperacion = document.getElementById('buscar_inmueble_id_operacion_inmueble');
        selectorOperacion.options.add(new Option(\"Todos\", -1), 0);

        var selectorEstado = document.getElementById('buscar_inmueble_id_estado');
        selectorEstado.options.add(new Option(\"Todos\", -1), 0);

        var selectorMunicipio = document.getElementById('buscar_inmueble_id_municipio');
        selectorMunicipio.options.add(new Option(\"Todos\", -1), 0);

        var selectorColonia = document.getElementById('buscar_inmueble_id_colonia');
        selectorColonia.options.add(new Option(\"Todos\", -1), 0);

        function onChangeEstado()
        {
            var selectorEstado = document.getElementById('buscar_inmueble_id_estado');
            var url = 'http://' + window.location.hostname  + '";
        // line 112
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
        // line 147
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

    </script>
</div>
";
    }

    public function getTemplateName()
    {
        return ":buscarinmueble:buscarform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 147,  237 => 112,  205 => 83,  193 => 74,  189 => 73,  185 => 72,  179 => 69,  175 => 68,  171 => 67,  165 => 64,  161 => 63,  157 => 62,  151 => 59,  147 => 58,  143 => 57,  137 => 54,  133 => 53,  129 => 52,  123 => 49,  119 => 48,  115 => 47,  106 => 41,  102 => 40,  98 => 39,  92 => 36,  88 => 35,  84 => 34,  78 => 31,  74 => 30,  70 => 29,  64 => 26,  60 => 25,  56 => 24,  50 => 21,  46 => 20,  42 => 19,  35 => 15,  19 => 1,);
    }
}
/* <div class="container z-depth-1" style="background-color: white">*/
/*     <div class="row" style="padding-left: 10px; padding-right: 10px;">*/
/*         <nav>*/
/*             <div class="nav-wrapper z-depth-1">*/
/*                 <div class="col s12  blue darken-1 ">*/
/*                     <i class="material-icons left">search</i>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/*     <br/>*/
/*     <div class="row">*/
/*         <div class="formcontainer">*/
/*             <div>*/
/*                 {{ form_start(form, {'method': 'GET', 'action': path('buscarinmueble_buscarpanel')}) }}*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s2">*/
/*                         {{ form_widget(form.id_tipo_inmueble) }}*/
/*                         {{ form_label(form.id_tipo_inmueble) }}*/
/*                         {{ form_errors(form.id_tipo_inmueble) }}*/
/*                     </div>*/
/*                     <div class="input-field col s2">*/
/*                         {{ form_widget(form.id_operacion_inmueble) }}*/
/*                         {{ form_label(form.id_operacion_inmueble) }}*/
/*                         {{ form_errors(form.id_operacion_inmueble) }}*/
/*                     </div>*/
/*                     <div class="input-field col s2">*/
/*                         {{ form_widget(form.id_estado) }}*/
/*                         {{ form_label(form.id_estado) }}*/
/*                         {{ form_errors(form.id_estado) }}*/
/*                     </div>*/
/*                     <div class="input-field col s3">*/
/*                         {{ form_widget(form.id_municipio) }}*/
/*                         {{ form_label(form.id_municipio) }}*/
/*                         {{ form_errors(form.id_municipio) }}*/
/*                     </div>*/
/*                     <div class="input-field col s3">*/
/*                         {{ form_widget(form.id_colonia) }}*/
/*                         {{ form_label(form.id_colonia) }}*/
/*                         {{ form_errors(form.id_colonia) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s2">*/
/*                         {{ form_widget(form.precio) }}*/
/*                         {{ form_label(form.precio) }}*/
/*                         {{ form_errors(form.precio) }}*/
/*                     </div>*/
/*                     <div class="input-field col s2">*/
/*                         {{ form_widget(form.preciomax) }}*/
/*                         {{ form_label(form.preciomax) }}*/
/*                         {{ form_errors(form.preciomax) }}*/
/*                     </div>*/
/*                     <div class="input-field col s2">*/
/*                         {{ form_widget(form.metrosterreno) }}*/
/*                         {{ form_label(form.metrosterreno) }}*/
/*                         {{ form_errors(form.metrosterreno) }}*/
/*                     </div>*/
/*                     <div class="input-field col s2">*/
/*                         {{ form_widget(form.metrosterrenomax) }}*/
/*                         {{ form_label(form.metrosterrenomax) }}*/
/*                         {{ form_errors(form.metrosterrenomax) }}*/
/*                     </div>*/
/*                     <div class="input-field col s2">*/
/*                         {{ form_widget(form.recamaras) }}*/
/*                         {{ form_label(form.recamaras) }}*/
/*                         {{ form_errors(form.recamaras) }}*/
/*                     </div>*/
/*                     <div class="input-field col s1">*/
/*                         {{ form_widget(form.plantas) }}*/
/*                         {{ form_label(form.plantas) }}*/
/*                         {{ form_errors(form.plantas) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <button type="submit" class="waves-effect waves-light btn right blue darken-4">*/
/*                     Buscar*/
/*                     <i class="material-icons left">search</i>*/
/*                 </button>*/
/* */
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <style>*/
/*     </style>*/
/* */
/*     <script>*/
/* */
/*         $(document).ready(function() {*/
/*             $('select').material_select();*/
/*         });*/
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
/*     </script>*/
/* </div>*/
/* */
