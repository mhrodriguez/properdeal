<?php

/* :noticia:new.html.twig */
class __TwigTemplate_0e7dd4c3439d92f775486e63614beb7430ba1180ae07235157c304b18adb8f01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":noticia:new.html.twig", 1);
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "forms/custom_time_widget.html.twig"));
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
                        <a href=\"#!\" class=\"breadcrumb\">Noticias</a>
                        <a href=\"#!\" class=\"breadcrumb\">Nuevo</a>
                    </div>
                </div>
            </nav>
        </div>

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titulo", array()), 'widget');
        echo "
                            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titulo", array()), 'label');
        echo "
                            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titulo", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s12\">
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'widget');
        echo "
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'label');
        echo "
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s12\">
                            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url", array()), 'widget');
        echo "
                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url", array()), 'label');
        echo "
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s12\">
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "publicar", array()), 'widget');
        echo "
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "publicar", array()), 'label');
        echo "
                            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "publicar", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <br><br><br>

                    <div class=\"row\">
                        <div class=\"input-field col s6 activelabel\">
                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaPublicacion", array()), 'widget');
        echo "
                            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaPublicacion", array()), 'label');
        echo "
                            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaPublicacion", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue darken-4 right\"/>
                    <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("noticia_index", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-4 right\">Cancelar</a>
                    ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>

    <style>
        body{
            background-color: white;
            height: 150vh;
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

        \$('#noticia_fechaPublicacion_date').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15, // Creates a dropdown of 15 years to control year
            format: 'yyyy-mm-dd'
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return ":noticia:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 69,  146 => 68,  138 => 63,  134 => 62,  130 => 61,  119 => 53,  115 => 52,  111 => 51,  102 => 45,  98 => 44,  94 => 43,  85 => 37,  81 => 36,  77 => 35,  68 => 29,  64 => 28,  60 => 27,  53 => 23,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% form_theme form with ['forms/custom_time_widget.html.twig'] %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <br/>*/
/*         <div class="row">*/
/*             <nav>*/
/*                 <div class="nav-wrapper z-depth-1">*/
/*                     <div class="col s12  blue darken-1 ">*/
/*                         <a href="#!" class="breadcrumb">Noticias</a>*/
/*                         <a href="#!" class="breadcrumb">Nuevo</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="formcontainer">*/
/*                 <div>*/
/*                     {{ form_start(form) }}*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s12">*/
/*                             {{ form_widget(form.titulo) }}*/
/*                             {{ form_label(form.titulo) }}*/
/*                             {{ form_errors(form.titulo) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s12">*/
/*                             {{ form_widget(form.descripcion) }}*/
/*                             {{ form_label(form.descripcion) }}*/
/*                             {{ form_errors(form.descripcion) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s12">*/
/*                             {{ form_widget(form.url) }}*/
/*                             {{ form_label(form.url) }}*/
/*                             {{ form_errors(form.url) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s12">*/
/*                             {{ form_widget(form.publicar) }}*/
/*                             {{ form_label(form.publicar) }}*/
/*                             {{ form_errors(form.publicar) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <br><br><br>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s6 activelabel">*/
/*                             {{ form_widget(form.fechaPublicacion) }}*/
/*                             {{ form_label(form.fechaPublicacion) }}*/
/*                             {{ form_errors(form.fechaPublicacion) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <input type="submit" value="Guardar" class="waves-effect waves-light btn blue darken-4 right"/>*/
/*                     <a href="{{ path('noticia_index', {}) }}" class="waves-effect waves-light btn blue darken-4 right">Cancelar</a>*/
/*                     {{ form_end(form) }}*/
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
/*         .activelabel label {*/
/*             font-size: 0.8rem;*/
/*             -webkit-transform: translateY(-140%);*/
/*             transform: translateY(-140%);*/
/*         }*/
/*     </style>*/
/* */
/*     <script>*/
/*         $(document).ready(function() {*/
/*             $('select').material_select();*/
/* */
/*         });*/
/* */
/*         $('#noticia_fechaPublicacion_date').pickadate({*/
/*             selectMonths: true, // Creates a dropdown to control month*/
/*             selectYears: 15, // Creates a dropdown of 15 years to control year*/
/*             format: 'yyyy-mm-dd'*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
