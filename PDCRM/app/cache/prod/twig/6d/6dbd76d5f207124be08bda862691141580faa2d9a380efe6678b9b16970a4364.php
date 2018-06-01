<?php

/* :inmuebleimagen:new.html.twig */
class __TwigTemplate_688d4f0249954e2c3e5b793908f32b119bb56d5bd18452f3c4d389054bc40212 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":inmuebleimagen:new.html.twig", 1);
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
                    <a href=\"#!\" class=\"breadcrumb\">Imagen de Propiedad</a>
                    <a href=\"#!\" class=\"breadcrumb\">Nueva</a>
                </div>
            </div>
        </nav>
    </div>
    <br/>
    <div class=\"row\">
        <div class=\"formcontainer\">
            <div>
                ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => (($this->env->getExtension('routing')->getPath("inmuebleimagen_new") . "?idInmueble=") . (isset($context["idInmueble"]) ? $context["idInmueble"] : null)), "attr" => array("onsubmit" => "document.getElementById(\"progressGuardar\").style.display=\"\"; return true;")));
        echo "

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'widget');
        echo "
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'label');
        echo "
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'widget');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'errors');
        echo "
                    </div>
                </div>

                <input type=\"submit\" value=\"Guardar\" class=\"btn blue darken-4 right\" style=\"margin-left: 10px\"/>
                <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("inmuebleimagen_index", array());
        echo "?idInmueble=";
        echo twig_escape_filter($this->env, (isset($context["idInmueble"]) ? $context["idInmueble"] : null), "html", null, true);
        echo "\" class=\"btn blue darken-4 right\">Cancelar</a>

                ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>
        </div>

        <div id=\"progressGuardar\" style=\"display:none\">
            <label>Subiendo imagen, espere un momento por favor...</label>
            <div id=\"divProgress2\" class=\"progress\" >
                <div class=\"indeterminate\"></div>
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
        document.getElementById('inmuebleimagen_descripcion').required=false;
    </script>

    ";
    }

    public function getTemplateName()
    {
        return ":inmuebleimagen:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 41,  86 => 39,  78 => 34,  74 => 33,  65 => 27,  61 => 26,  57 => 25,  50 => 21,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="container">*/
/*     <br/>*/
/*     <div class="row">*/
/*         <nav>*/
/*             <div class="nav-wrapper z-depth-1">*/
/*                 <div class="col s12  blue darken-1 ">*/
/*                     <a href="#!" class="breadcrumb">Imagen de Propiedad</a>*/
/*                     <a href="#!" class="breadcrumb">Nueva</a>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/*     <br/>*/
/*     <div class="row">*/
/*         <div class="formcontainer">*/
/*             <div>*/
/*                 {{ form_start(form, {'action': path('inmuebleimagen_new')~'?idInmueble='~idInmueble,  'attr': {'onsubmit' : 'document.getElementById("progressGuardar").style.display=""; return true;'}  }) }}*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.descripcion) }}*/
/*                         {{ form_label(form.descripcion) }}*/
/*                         {{ form_errors(form.descripcion) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.file) }}*/
/*                         {{ form_errors(form.file) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <input type="submit" value="Guardar" class="btn blue darken-4 right" style="margin-left: 10px"/>*/
/*                 <a href="{{ path('inmuebleimagen_index', {}) }}?idInmueble={{ idInmueble }}" class="btn blue darken-4 right">Cancelar</a>*/
/* */
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div id="progressGuardar" style="display:none">*/
/*             <label>Subiendo imagen, espere un momento por favor...</label>*/
/*             <div id="divProgress2" class="progress" >*/
/*                 <div class="indeterminate"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/*     <style>*/
/*         body{*/
/*             background-color: white;*/
/*             height: 200vh;*/
/*         }*/
/*     </style>*/
/* */
/*     <script>*/
/*         document.getElementById('inmuebleimagen_descripcion').required=false;*/
/*     </script>*/
/* */
/*     {% endblock %}*/
/* */
