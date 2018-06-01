<?php

/* :prospecto:new.html.twig */
class __TwigTemplate_471117249e602ba774350e51be21757acb4e4ab4871e8d211dc621f5a0d115ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":prospecto:new.html.twig", 1);
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
                        <div class=\"input-field col s4\">
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'widget');
        echo "
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'label');
        echo "
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s4\">
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()), 'widget');
        echo "
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()), 'label');
        echo "
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s4\">
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
                            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s6\">
                            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'widget');
        echo "
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'label');
        echo "
                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'errors');
        echo "
                        </div>
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
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s12\">
                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()), 'widget');
        echo "
                            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()), 'label');
        echo "
                            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s6\">
                            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'widget');
        echo "
                            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'label');
        echo "
                            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s6\">
                            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefonoMovil", array()), 'widget');
        echo "
                            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefonoMovil", array()), 'label');
        echo "
                            ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefonoMovil", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s6\">
                            ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estatus_avance", array()), 'widget');
        echo "
                            ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estatus_avance", array()), 'label');
        echo "
                            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estatus_avance", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s6\">
                            ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_canal_captacion", array()), 'widget');
        echo "
                            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_canal_captacion", array()), 'label');
        echo "
                            ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_canal_captacion", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s6\">
                            ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_prospecto", array()), 'label');
        echo "
                            <br/>
                            <br/>
                            ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_prospecto", array()), 'widget');
        echo "
                            ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_prospecto", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s6\">
                            ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "documentos", array()), 'label');
        echo "
                            <br/>
                            ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "documentos", array()), 'widget');
        echo "
                            ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "documentos", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <br/>

                    <div class=\"row\">
                        <div class=\"input-field col s12\">
                            ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "presupuesto", array()), 'widget');
        echo "
                            ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "presupuesto", array()), 'label');
        echo "
                            ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "presupuesto", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s12\">
                            ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "observaciones", array()), 'widget');
        echo "
                            ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "observaciones", array()), 'label');
        echo "
                            ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "observaciones", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue darken-4 right\"/>
                    <a href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("prospecto_index", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-4 right\">Cancelar<a/>

                    ";
        // line 134
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
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
    </script>

";
    }

    public function getTemplateName()
    {
        return ":prospecto:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 134,  300 => 132,  292 => 127,  288 => 126,  284 => 125,  275 => 119,  271 => 118,  267 => 117,  257 => 110,  253 => 109,  248 => 107,  242 => 104,  238 => 103,  232 => 100,  223 => 94,  219 => 93,  215 => 92,  209 => 89,  205 => 88,  201 => 87,  192 => 81,  188 => 80,  184 => 79,  178 => 76,  174 => 75,  170 => 74,  161 => 68,  157 => 67,  153 => 66,  144 => 60,  140 => 59,  136 => 58,  130 => 55,  126 => 54,  122 => 53,  113 => 47,  109 => 46,  105 => 45,  99 => 42,  95 => 41,  91 => 40,  85 => 37,  81 => 36,  77 => 35,  68 => 29,  64 => 28,  60 => 27,  53 => 23,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% form_theme form with ['forms/custom_checkbox_widget.html.twig'] %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <br/>*/
/*         <div class="row">*/
/*             <nav>*/
/*                 <div class="nav-wrapper z-depth-1">*/
/*                     <div class="col s12  blue darken-1 ">*/
/*                         <a href="#!" class="breadcrumb">Prospectos</a>*/
/*                         <a href="#!" class="breadcrumb">Nuevo</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*         </div>*/
/*         <br/>*/
/*         <div class="row">*/
/*             <div class="formcontainer">*/
/*                 <div>*/
/*                     {{ form_start(form) }}*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s12">*/
/*                             {{ form_widget(form.id_usuario) }}*/
/*                             {{ form_label(form.id_usuario) }}*/
/*                             {{ form_errors(form.id_usuario) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s4">*/
/*                             {{ form_widget(form.nombre) }}*/
/*                             {{ form_label(form.nombre) }}*/
/*                             {{ form_errors(form.nombre) }}*/
/*                         </div>*/
/*                         <div class="input-field col s4">*/
/*                             {{ form_widget(form.apellidos) }}*/
/*                             {{ form_label(form.apellidos) }}*/
/*                             {{ form_errors(form.apellidos) }}*/
/*                         </div>*/
/*                         <div class="input-field col s4">*/
/*                             {{ form_widget(form.email) }}*/
/*                             {{ form_label(form.email) }}*/
/*                             {{ form_errors(form.email) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.id_estado) }}*/
/*                             {{ form_label(form.id_estado) }}*/
/*                             {{ form_errors(form.id_estado) }}*/
/*                         </div>*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.ciudad) }}*/
/*                             {{ form_label(form.ciudad) }}*/
/*                             {{ form_errors(form.ciudad) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s12">*/
/*                             {{ form_widget(form.direccion) }}*/
/*                             {{ form_label(form.direccion) }}*/
/*                             {{ form_errors(form.direccion) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.telefono) }}*/
/*                             {{ form_label(form.telefono) }}*/
/*                             {{ form_errors(form.telefono) }}*/
/*                         </div>*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.telefonoMovil) }}*/
/*                             {{ form_label(form.telefonoMovil) }}*/
/*                             {{ form_errors(form.telefonoMovil) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.id_estatus_avance) }}*/
/*                             {{ form_label(form.id_estatus_avance) }}*/
/*                             {{ form_errors(form.id_estatus_avance) }}*/
/*                         </div>*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.id_canal_captacion) }}*/
/*                             {{ form_label(form.id_canal_captacion) }}*/
/*                             {{ form_errors(form.id_canal_captacion) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_label(form.id_tipo_prospecto) }}*/
/*                             <br/>*/
/*                             <br/>*/
/*                             {{ form_widget(form.id_tipo_prospecto) }}*/
/*                             {{ form_errors(form.id_tipo_prospecto) }}*/
/*                         </div>*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_label(form.documentos) }}*/
/*                             <br/>*/
/*                             {{ form_widget(form.documentos) }}*/
/*                             {{ form_errors(form.documentos) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <br/>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s12">*/
/*                             {{ form_widget(form.presupuesto) }}*/
/*                             {{ form_label(form.presupuesto) }}*/
/*                             {{ form_errors(form.presupuesto) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s12">*/
/*                             {{ form_widget(form.observaciones) }}*/
/*                             {{ form_label(form.observaciones) }}*/
/*                             {{ form_errors(form.observaciones) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <input type="submit" value="Guardar" class="waves-effect waves-light btn blue darken-4 right"/>*/
/*                     <a href="{{ path('prospecto_index', {}) }}" class="waves-effect waves-light btn blue darken-4 right">Cancelar<a/>*/
/* */
/*                     {{ form_end(form) }}*/
/*                 </div>*/
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
/*     $(document).ready(function() {*/
/*                 $('select').material_select();*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
