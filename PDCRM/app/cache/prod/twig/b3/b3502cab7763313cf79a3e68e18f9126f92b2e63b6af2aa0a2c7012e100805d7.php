<?php

/* :prospecto:detalle.html.twig */
class __TwigTemplate_e03c6798874580387b32e0b39a241b091b50e5ec70e54d2a4605cfb1161d0628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":prospecto:detalle.html.twig", 1);
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
<div id=\"main\" class=\"container\">
    <br/>
    <div class=\"row\">
        <nav>
            <div class=\"nav-wrapper z-depth-1\">
                <div class=\"col s12  blue darken-1 \">
                    <a href=\"#!\" class=\"breadcrumb\">Prospectos</a>
                    <a href=\"#!\" class=\"breadcrumb\">Nuevo</a>
                </div>
            </div>
        </nav>
    </div>
    <br/>
    <div class=\"row\">
        <div class=\"formcontainer\">
            <div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'widget');
        echo "
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'label');
        echo "
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s4\">
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'widget');
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'label');
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()), 'widget');
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()), 'label');
        echo "
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'widget');
        echo "
                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'label');
        echo "
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'widget');
        echo "
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'label');
        echo "
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()), 'widget');
        echo "
                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()), 'label');
        echo "
                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'widget');
        echo "
                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'label');
        echo "
                        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefonoMovil", array()), 'widget');
        echo "
                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefonoMovil", array()), 'label');
        echo "
                        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefonoMovil", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estatus_avance", array()), 'widget');
        echo "
                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estatus_avance", array()), 'label');
        echo "
                        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estatus_avance", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_canal_captacion", array()), 'widget');
        echo "
                        ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_canal_captacion", array()), 'label');
        echo "
                        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_canal_captacion", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_prospecto", array()), 'label');
        echo "
                        <br/>
                        <br/>
                        ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_prospecto", array()), 'widget');
        echo "
                        ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_prospecto", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "documentos", array()), 'label');
        echo "
                        <br/>
                        ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "documentos", array()), 'widget');
        echo "
                        ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "documentos", array()), 'errors');
        echo "
                    </div>
                </div>
                <br/>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "presupuesto", array()), 'widget');
        echo "
                        ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "presupuesto", array()), 'label');
        echo "
                        ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "presupuesto", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "observaciones", array()), 'widget');
        echo "
                        ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "observaciones", array()), 'label');
        echo "
                        ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "observaciones", array()), 'errors');
        echo "
                    </div>
                </div>

                <a href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("prospecto_index", array());
        echo "\" class=\"btn blue darken-4 right\" style=\"margin-right: 10px\">< Regresar</a>

            </div>
        </div>
    </div>

    <style>
        body{
            background-color: white;
            height: 200vh;
        }
    </style>

    <script>
        \$(document).ready(function() {
            \$('select').material_select();
        });

        document.getElementById('prospecto_apellidos').required=false;
        document.getElementById('prospecto_email').required=false;
        document.getElementById('prospecto_direccion').required=false;
        document.getElementById('prospecto_ciudad').required=false;
        document.getElementById('prospecto_telefono').required=false;
        document.getElementById('prospecto_telefonoMovil').required=false;
        document.getElementById('prospecto_presupuesto').required=false;
        document.getElementById('prospecto_observaciones').required=false;
        document.getElementById('prospecto_id_tipo_prospecto').required=false;

        document.getElementById('prospecto_id_tipo_prospecto_0').required=false;
        document.getElementById('prospecto_id_tipo_prospecto_1').required=false;
        document.getElementById('prospecto_id_tipo_prospecto_2').required=false;


        \$('#main').find(':input').prop('disabled', true);
    </script>

    <script>

        var labels = document.getElementsByTagName('LABEL');
        for (var i = 0; i < labels.length; i++) {
            if (labels[i].htmlFor != '') {
                var elem = document.getElementById(labels[i].htmlFor);
                if (elem)
                    elem.label = labels[i];
            }
        }

        for (i=0; i<";
        // line 177
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "documentos", array())), "html", null, true);
        echo "; i++)
        {
            var documento = document.getElementById('prospecto_documentos_' + i);

            ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documentosDesc"]) ? $context["documentosDesc"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["documentoDesc"]) {
            // line 182
            echo "
            if (documento.label.innerHTML == '";
            // line 183
            echo twig_escape_filter($this->env, $context["documentoDesc"], "html", null, true);
            echo "')
            {
                documento.checked = true;
            }

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['documentoDesc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "        }
    </script>

";
    }

    public function getTemplateName()
    {
        return ":prospecto:detalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 189,  359 => 183,  356 => 182,  352 => 181,  345 => 177,  295 => 130,  288 => 126,  284 => 125,  280 => 124,  271 => 118,  267 => 117,  263 => 116,  253 => 109,  249 => 108,  244 => 106,  238 => 103,  234 => 102,  228 => 99,  219 => 93,  215 => 92,  211 => 91,  205 => 88,  201 => 87,  197 => 86,  188 => 80,  184 => 79,  180 => 78,  174 => 75,  170 => 74,  166 => 73,  157 => 67,  153 => 66,  149 => 65,  140 => 59,  136 => 58,  132 => 57,  126 => 54,  122 => 53,  118 => 52,  109 => 46,  105 => 45,  101 => 44,  95 => 41,  91 => 40,  87 => 39,  81 => 36,  77 => 35,  73 => 34,  64 => 28,  60 => 27,  56 => 26,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% form_theme form with ['forms/custom_checkbox_widget.html.twig'] %}*/
/* */
/* {% block body %}*/
/* */
/* <div id="main" class="container">*/
/*     <br/>*/
/*     <div class="row">*/
/*         <nav>*/
/*             <div class="nav-wrapper z-depth-1">*/
/*                 <div class="col s12  blue darken-1 ">*/
/*                     <a href="#!" class="breadcrumb">Prospectos</a>*/
/*                     <a href="#!" class="breadcrumb">Nuevo</a>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/*     <br/>*/
/*     <div class="row">*/
/*         <div class="formcontainer">*/
/*             <div>*/
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
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.nombre) }}*/
/*                         {{ form_label(form.nombre) }}*/
/*                         {{ form_errors(form.nombre) }}*/
/*                     </div>*/
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.apellidos) }}*/
/*                         {{ form_label(form.apellidos) }}*/
/*                         {{ form_errors(form.apellidos) }}*/
/*                     </div>*/
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.email) }}*/
/*                         {{ form_label(form.email) }}*/
/*                         {{ form_errors(form.email) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.id_estado) }}*/
/*                         {{ form_label(form.id_estado) }}*/
/*                         {{ form_errors(form.id_estado) }}*/
/*                     </div>*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.ciudad) }}*/
/*                         {{ form_label(form.ciudad) }}*/
/*                         {{ form_errors(form.ciudad) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.direccion) }}*/
/*                         {{ form_label(form.direccion) }}*/
/*                         {{ form_errors(form.direccion) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.telefono) }}*/
/*                         {{ form_label(form.telefono) }}*/
/*                         {{ form_errors(form.telefono) }}*/
/*                     </div>*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.telefonoMovil) }}*/
/*                         {{ form_label(form.telefonoMovil) }}*/
/*                         {{ form_errors(form.telefonoMovil) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.id_estatus_avance) }}*/
/*                         {{ form_label(form.id_estatus_avance) }}*/
/*                         {{ form_errors(form.id_estatus_avance) }}*/
/*                     </div>*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.id_canal_captacion) }}*/
/*                         {{ form_label(form.id_canal_captacion) }}*/
/*                         {{ form_errors(form.id_canal_captacion) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_label(form.id_tipo_prospecto) }}*/
/*                         <br/>*/
/*                         <br/>*/
/*                         {{ form_widget(form.id_tipo_prospecto) }}*/
/*                         {{ form_errors(form.id_tipo_prospecto) }}*/
/*                     </div>*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_label(form.documentos) }}*/
/*                         <br/>*/
/*                         {{ form_widget(form.documentos) }}*/
/*                         {{ form_errors(form.documentos) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <br/>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.presupuesto) }}*/
/*                         {{ form_label(form.presupuesto) }}*/
/*                         {{ form_errors(form.presupuesto) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.observaciones) }}*/
/*                         {{ form_label(form.observaciones) }}*/
/*                         {{ form_errors(form.observaciones) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <a href="{{ path('prospecto_index', {}) }}" class="btn blue darken-4 right" style="margin-right: 10px">< Regresar</a>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <style>*/
/*         body{*/
/*             background-color: white;*/
/*             height: 200vh;*/
/*         }*/
/*     </style>*/
/* */
/*     <script>*/
/*         $(document).ready(function() {*/
/*             $('select').material_select();*/
/*         });*/
/* */
/*         document.getElementById('prospecto_apellidos').required=false;*/
/*         document.getElementById('prospecto_email').required=false;*/
/*         document.getElementById('prospecto_direccion').required=false;*/
/*         document.getElementById('prospecto_ciudad').required=false;*/
/*         document.getElementById('prospecto_telefono').required=false;*/
/*         document.getElementById('prospecto_telefonoMovil').required=false;*/
/*         document.getElementById('prospecto_presupuesto').required=false;*/
/*         document.getElementById('prospecto_observaciones').required=false;*/
/*         document.getElementById('prospecto_id_tipo_prospecto').required=false;*/
/* */
/*         document.getElementById('prospecto_id_tipo_prospecto_0').required=false;*/
/*         document.getElementById('prospecto_id_tipo_prospecto_1').required=false;*/
/*         document.getElementById('prospecto_id_tipo_prospecto_2').required=false;*/
/* */
/* */
/*         $('#main').find(':input').prop('disabled', true);*/
/*     </script>*/
/* */
/*     <script>*/
/* */
/*         var labels = document.getElementsByTagName('LABEL');*/
/*         for (var i = 0; i < labels.length; i++) {*/
/*             if (labels[i].htmlFor != '') {*/
/*                 var elem = document.getElementById(labels[i].htmlFor);*/
/*                 if (elem)*/
/*                     elem.label = labels[i];*/
/*             }*/
/*         }*/
/* */
/*         for (i=0; i<{{ form.documentos|length }}; i++)*/
/*         {*/
/*             var documento = document.getElementById('prospecto_documentos_' + i);*/
/* */
/*             {% for documentoDesc in documentosDesc %}*/
/* */
/*             if (documento.label.innerHTML == '{{ documentoDesc }}')*/
/*             {*/
/*                 documento.checked = true;*/
/*             }*/
/* */
/*             {% endfor %}*/
/*         }*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
