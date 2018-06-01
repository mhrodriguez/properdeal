<?php

/* :propietario:edit.html.twig */
class __TwigTemplate_50a75dc7748916f8286dd81041a351cd6422339d65901e2a1e933860c2944545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":propietario:edit.html.twig", 1);
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
                        <a href=\"#!\" class=\"breadcrumb\">Propietarios</a>
                        <a href=\"#!\" class=\"breadcrumb\">Editar</a>
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
                        <div class=\"input-field col s6\">
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'widget');
        echo "
                            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'label');
        echo "
                            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s6\">
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()), 'widget');
        echo "
                            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()), 'label');
        echo "
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s6\">
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'widget');
        echo "
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'label');
        echo "
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s6\">
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefonomovil", array()), 'widget');
        echo "
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefonomovil", array()), 'label');
        echo "
                            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefonomovil", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s6\">
                            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "oficina", array()), 'widget');
        echo "
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "oficina", array()), 'label');
        echo "
                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "oficina", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s6\">
                            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s6\">
                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "horariovisita", array()), 'widget');
        echo "
                            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "horariovisita", array()), 'label');
        echo "
                            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "horariovisita", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s6\">
                            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "canalCaptacion", array()), 'widget');
        echo "
                            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "canalCaptacion", array()), 'label');
        echo "
                            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "canalCaptacion", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s6\">
                            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comision", array()), 'widget');
        echo "
                            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comision", array()), 'label');
        echo "
                            ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comision", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s6\">
                            ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enviarmail", array()), 'widget');
        echo "
                            ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enviarmail", array()), 'label');
        echo "
                            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enviarmail", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s6\">
                            ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mostrardatos", array()), 'widget');
        echo "
                            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mostrardatos", array()), 'label');
        echo "
                            ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mostrardatos", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue darken-4 right\"/>

                    ";
        // line 100
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                    <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("inmueble_index", array());
        echo "\" class=\"waves-effect btn blue darken-4 left\">Cancelar</a>
                </div>
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
        return ":propietario:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 101,  232 => 100,  223 => 94,  219 => 93,  215 => 92,  209 => 89,  205 => 88,  201 => 87,  192 => 81,  188 => 80,  184 => 79,  175 => 73,  171 => 72,  167 => 71,  161 => 68,  157 => 67,  153 => 66,  144 => 60,  140 => 59,  136 => 58,  130 => 55,  126 => 54,  122 => 53,  113 => 47,  109 => 46,  105 => 45,  99 => 42,  95 => 41,  91 => 40,  82 => 34,  78 => 33,  74 => 32,  68 => 29,  64 => 28,  60 => 27,  53 => 23,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
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
/*                         <a href="#!" class="breadcrumb">Propietarios</a>*/
/*                         <a href="#!" class="breadcrumb">Editar</a>*/
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
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.nombre) }}*/
/*                             {{ form_label(form.nombre) }}*/
/*                             {{ form_errors(form.nombre) }}*/
/*                         </div>*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.apellidos) }}*/
/*                             {{ form_label(form.apellidos) }}*/
/*                             {{ form_errors(form.apellidos) }}*/
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
/*                             {{ form_widget(form.telefonomovil) }}*/
/*                             {{ form_label(form.telefonomovil) }}*/
/*                             {{ form_errors(form.telefonomovil) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.oficina) }}*/
/*                             {{ form_label(form.oficina) }}*/
/*                             {{ form_errors(form.oficina) }}*/
/*                         </div>*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.email) }}*/
/*                             {{ form_label(form.email) }}*/
/*                             {{ form_errors(form.email) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.horariovisita) }}*/
/*                             {{ form_label(form.horariovisita) }}*/
/*                             {{ form_errors(form.horariovisita) }}*/
/*                         </div>*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.canalCaptacion) }}*/
/*                             {{ form_label(form.canalCaptacion) }}*/
/*                             {{ form_errors(form.canalCaptacion) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.comision) }}*/
/*                             {{ form_label(form.comision) }}*/
/*                             {{ form_errors(form.comision) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.enviarmail) }}*/
/*                             {{ form_label(form.enviarmail) }}*/
/*                             {{ form_errors(form.enviarmail) }}*/
/*                         </div>*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.mostrardatos) }}*/
/*                             {{ form_label(form.mostrardatos) }}*/
/*                             {{ form_errors(form.mostrardatos) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <input type="submit" value="Guardar" class="waves-effect waves-light btn blue darken-4 right"/>*/
/* */
/*                     {{ form_end(form) }}*/
/*                     <a href="{{ path('inmueble_index', {}) }}" class="waves-effect btn blue darken-4 left">Cancelar</a>*/
/*                 </div>*/
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
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
