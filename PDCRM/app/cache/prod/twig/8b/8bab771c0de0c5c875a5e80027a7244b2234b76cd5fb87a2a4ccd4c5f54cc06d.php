<?php

/* :rotulo:new.html.twig */
class __TwigTemplate_49d55203ea544069d7f63ca8cf0522f53dbf030fe6d209306013a9712b60b6d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":rotulo:new.html.twig", 1);
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
        echo "    <div class=\"container\">
        <br/>
        <div class=\"row\">
            <nav>
                <div class=\"nav-wrapper z-depth-1\">
                    <div class=\"col s12  blue darken-1 \">
                        <a href=\"#\" class=\"breadcrumb\">Rotulo</a>
                        <a href=\"#\" class=\"breadcrumb\">Nuevo</a>
                    </div>
                </div>
            </nav>
        </div>
        <br/><br/>

        ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "asesor", array()), 'widget');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "asesor", array()), 'label');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "asesor", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"input-field col s6\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "accion", array()), 'widget');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "accion", array()), 'label');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "accion", array()), 'errors');
        echo "
            </div>
            <div class=\"input-field col s6\">
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "elementos", array()), 'widget');
        echo "

                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "elementos", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tamano", array()), 'widget');
        echo "
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tamano", array()), 'label');
        echo "
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tamano", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inmueble", array()), 'widget');
        echo "
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inmueble", array()), 'label');
        echo "
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inmueble", array()), 'errors');
        echo "
            </div>
        </div>

        <input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue darken-4 right\" onclick=\"return fechaHoraConFormato();\" />
        <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("rotulo_index", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-4 right\">Cancelar</a>

        ";
        // line 62
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
        return ":rotulo:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 62,  135 => 60,  127 => 55,  123 => 54,  119 => 53,  110 => 47,  106 => 46,  102 => 45,  93 => 39,  88 => 37,  82 => 34,  78 => 33,  74 => 32,  65 => 26,  61 => 25,  57 => 24,  50 => 20,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% form_theme form with ['forms/custom_checkbox_widget.html.twig'] %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <br/>*/
/*         <div class="row">*/
/*             <nav>*/
/*                 <div class="nav-wrapper z-depth-1">*/
/*                     <div class="col s12  blue darken-1 ">*/
/*                         <a href="#" class="breadcrumb">Rotulo</a>*/
/*                         <a href="#" class="breadcrumb">Nuevo</a>*/
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
/* */
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
/*          </script>*/
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
