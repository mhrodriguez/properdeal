<?php

/* :inmuebleimagen:multinew.html.twig */
class __TwigTemplate_90da62b665f868e217695adbc4b58586579d96eeb277d3e182a5be1cbc997105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":inmuebleimagen:multinew.html.twig", 1);
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => (($this->env->getExtension('routing')->getPath("inmuebleimagen_multinew") . "?idInmueble=") . (isset($context["idInmueble"]) ? $context["idInmueble"] : null)), "attr" => array("onsubmit" => "document.getElementById(\"progressGuardar\").style.display=\"\"; return true;")));
        echo "

                    <div class=\"row\">
                        <div class=\"input-field col s12\">
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "files", array()), 'widget');
        echo "
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "files", array()), 'errors');
        echo "
                        </div>
                    </div>

                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

                    <input type=\"submit\" value=\"Guardar\" class=\"btn blue darken-4 right\" style=\"margin-left: 10px\"/>
                    <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("inmuebleimagen_index", array());
        echo "?idInmueble=";
        echo twig_escape_filter($this->env, (isset($context["idInmueble"]) ? $context["idInmueble"] : null), "html", null, true);
        echo "\" class=\"btn blue darken-4 right\">Cancelar</a>

                    ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                </div>
            </div>

            <div id=\"progressGuardar\" style=\"display:none\">
                <label>Subiendo imagen(es), espere un momento por favor...</label>
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
    </script>

";
    }

    public function getTemplateName()
    {
        return ":inmuebleimagen:multinew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 35,  74 => 33,  68 => 30,  61 => 26,  57 => 25,  50 => 21,  31 => 4,  28 => 3,  11 => 1,);
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
/*                         <a href="#!" class="breadcrumb">Imagen de Propiedad</a>*/
/*                         <a href="#!" class="breadcrumb">Nueva</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*         </div>*/
/*         <br/>*/
/*         <div class="row">*/
/*             <div class="formcontainer">*/
/*                 <div>*/
/*                     {{ form_start(form, {'action': path('inmuebleimagen_multinew')~'?idInmueble='~idInmueble,  'attr': {'onsubmit' : 'document.getElementById("progressGuardar").style.display=""; return true;'}  }) }}*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s12">*/
/*                             {{ form_widget(form.files) }}*/
/*                             {{ form_errors(form.files) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     {{ form_errors(form) }}*/
/* */
/*                     <input type="submit" value="Guardar" class="btn blue darken-4 right" style="margin-left: 10px"/>*/
/*                     <a href="{{ path('inmuebleimagen_index', {}) }}?idInmueble={{ idInmueble }}" class="btn blue darken-4 right">Cancelar</a>*/
/* */
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div id="progressGuardar" style="display:none">*/
/*                 <label>Subiendo imagen(es), espere un momento por favor...</label>*/
/*                 <div id="divProgress2" class="progress" >*/
/*                     <div class="indeterminate"></div>*/
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
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
