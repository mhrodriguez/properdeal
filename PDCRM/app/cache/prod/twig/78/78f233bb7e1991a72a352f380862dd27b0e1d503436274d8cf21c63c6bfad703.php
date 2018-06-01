<?php

/* :rotulo:edit.html.twig */
class __TwigTemplate_26feca649418396e82125dab274e7edec8d889d387926d462bf25b0a2414505d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":rotulo:edit.html.twig", 1);
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
        echo "    <div class=\"container\">
        <br/>
        <div class=\"row\">
            <nav>
                <div class=\"nav-wrapper z-depth-1\">
                    <div class=\"col s12  blue darken-1 \">
                        <a href=\"#\" class=\"breadcrumb\">Rotulo</a>
                        <a href=\"#\" class=\"breadcrumb\">Editar</a>
                    </div>
                </div>
            </nav>
        </div>
        <br/><br/>

        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "asesor", array()), 'widget');
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "asesor", array()), 'label');
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "asesor", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"input-field col s6\">
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "accion", array()), 'widget');
        echo "
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "accion", array()), 'label');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "accion", array()), 'errors');
        echo "
            </div>
            <div class=\"input-field col s6\">
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "elementos", array()), 'widget');
        echo "
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "elementos", array()), 'label');
        echo "
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "elementos", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tamano", array()), 'widget');
        echo "
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tamano", array()), 'label');
        echo "
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tamano", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inmueble", array()), 'widget');
        echo "
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inmueble", array()), 'label');
        echo "
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inmueble", array()), 'errors');
        echo "
            </div>
        </div>

        <input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue darken-4 right\" onclick=\"return fechaHoraConFormato();\" />
        <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("rotulo_index", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-4 right\">Cancelar</a>

        ";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

        <script>

            \$(document).ready(function() {
                \$('select').material_select();
            });

        </script>

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
    </div>
";
    }

    public function getTemplateName()
    {
        return ":rotulo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 60,  135 => 58,  127 => 53,  123 => 52,  119 => 51,  110 => 45,  106 => 44,  102 => 43,  93 => 37,  89 => 36,  85 => 35,  79 => 32,  75 => 31,  71 => 30,  62 => 24,  58 => 23,  54 => 22,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <br/>*/
/*         <div class="row">*/
/*             <nav>*/
/*                 <div class="nav-wrapper z-depth-1">*/
/*                     <div class="col s12  blue darken-1 ">*/
/*                         <a href="#" class="breadcrumb">Rotulo</a>*/
/*                         <a href="#" class="breadcrumb">Editar</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*         </div>*/
/*         <br/><br/>*/
/* */
/*         {{ form_start(form) }}*/
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.asesor) }}*/
/*                 {{ form_label(form.asesor) }}*/
/*                 {{ form_errors(form.asesor) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="input-field col s6">*/
/*                 {{ form_widget(form.accion) }}*/
/*                 {{ form_label(form.accion) }}*/
/*                 {{ form_errors(form.accion) }}*/
/*             </div>*/
/*             <div class="input-field col s6">*/
/*                 {{ form_widget(form.elementos) }}*/
/*                 {{ form_label(form.elementos) }}*/
/*                 {{ form_errors(form.elementos) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.tamano) }}*/
/*                 {{ form_label(form.tamano) }}*/
/*                 {{ form_errors(form.tamano) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.inmueble) }}*/
/*                 {{ form_label(form.inmueble) }}*/
/*                 {{ form_errors(form.inmueble) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <input type="submit" value="Guardar" class="waves-effect waves-light btn blue darken-4 right" onclick="return fechaHoraConFormato();" />*/
/*         <a href="{{ path('rotulo_index', {}) }}" class="waves-effect waves-light btn blue darken-4 right">Cancelar</a>*/
/* */
/*         {{ form_end(form) }}*/
/* */
/*         <script>*/
/* */
/*             $(document).ready(function() {*/
/*                 $('select').material_select();*/
/*             });*/
/* */
/*         </script>*/
/* */
/*         <style>*/
/*             body{*/
/*                 background-color: white;*/
/*                 height: 100vh;*/
/*             }*/
/* */
/*             #solicitud_caracteristicas label*/
/*             {*/
/*                 margin-right: 20px;*/
/*             }*/
/* */
/*             .activelabel label {*/
/*                 font-size: 0.8rem;*/
/*                 -webkit-transform: translateY(-140%);*/
/*                 transform: translateY(-140%);*/
/*             }*/
/*         </style>*/
/*     </div>*/
/* {% endblock %}*/
/* */
