<?php

/* :mensaje:new.html.twig */
class __TwigTemplate_9ad518f44b6be96d5dc61aa73046d714515229a39dd66aa9921d9c5a8dc91706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":mensaje:new.html.twig", 1);
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
                        <a href=\"#!\" class=\"breadcrumb\">Mensajes</a>
                        <a href=\"#!\" class=\"breadcrumb\">Nuevo</a>
                    </div>
                </div>
            </nav>
        </div>

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titulo", array()), 'widget');
        echo "
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titulo", array()), 'label');
        echo "
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titulo", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s12\">
                            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "texto", array()), 'widget');
        echo "
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "texto", array()), 'label');
        echo "
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "texto", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <input type=\"submit\" value=\"Enviar\" class=\"waves-effect waves-light btn blue darken-4 right\"/>

                    ";
        // line 41
        if (($this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : null), "tipoMensaje", array()) == 1)) {
            // line 42
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("listacontacto_index", array());
            echo "\" class=\"waves-effect waves-light btn blue darken-4 right\">Cancelar</a>
                    ";
        } else {
            // line 44
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("contacto_index", array());
            echo "\" class=\"waves-effect waves-light btn blue darken-4 right\">Cancelar</a>
                    ";
        }
        // line 46
        echo "
                    ";
        // line 47
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
    </style>

    <script>

    </script>

";
    }

    public function getTemplateName()
    {
        return ":mensaje:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 47,  105 => 46,  99 => 44,  93 => 42,  91 => 41,  82 => 35,  78 => 34,  74 => 33,  65 => 27,  61 => 26,  57 => 25,  50 => 21,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <br/>*/
/*         <div class="row">*/
/*             <nav>*/
/*                 <div class="nav-wrapper z-depth-1">*/
/*                     <div class="col s12  blue darken-1 ">*/
/*                         <a href="#!" class="breadcrumb">Mensajes</a>*/
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
/*                             {{ form_widget(form.texto) }}*/
/*                             {{ form_label(form.texto) }}*/
/*                             {{ form_errors(form.texto) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <input type="submit" value="Enviar" class="waves-effect waves-light btn blue darken-4 right"/>*/
/* */
/*                     {% if (mensaje.tipoMensaje == 1) %}*/
/*                         <a href="{{ path('listacontacto_index', {}) }}" class="waves-effect waves-light btn blue darken-4 right">Cancelar</a>*/
/*                     {% else %}*/
/*                         <a href="{{ path('contacto_index', {}) }}" class="waves-effect waves-light btn blue darken-4 right">Cancelar</a>*/
/*                     {% endif %}*/
/* */
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
/*     </style>*/
/* */
/*     <script>*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
