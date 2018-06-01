<?php

/* :prospecto:asignarpropiedad.html.twig */
class __TwigTemplate_f4314bc063ecd353d8fbc9e92df5ce701e052627021de666e2bb2dfbd6cee3b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":prospecto:asignarpropiedad.html.twig", 1);
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
                        <a href=\"#!\" class=\"breadcrumb\">Prospectos</a>
                        <a href=\"#!\" class=\"breadcrumb\">Asignar Propiedad</a>
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

                    <div class=\"row\">
                        <div class=\"input-field col s12\">
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prospecto", array()), 'widget');
        echo "
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prospecto", array()), 'label');
        echo "
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prospecto", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <input type=\"submit\" value=\"Asignar\" class=\"waves-effect waves-light btn blue darken-4 right\"/>

                    ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" class=\"waves-effect btn blue darken-4 left\">Cancelar<a/>

                </div>
        </div>
    </div>

    <style>
        body{
            background-color: white;
            height: 100vh;
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
        return ":prospecto:asignarpropiedad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 34,  74 => 33,  65 => 27,  61 => 26,  57 => 25,  50 => 21,  31 => 4,  28 => 3,  11 => 1,);
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
/*                         <a href="#!" class="breadcrumb">Prospectos</a>*/
/*                         <a href="#!" class="breadcrumb">Asignar Propiedad</a>*/
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
/*                             {{ form_widget(form.prospecto) }}*/
/*                             {{ form_label(form.prospecto) }}*/
/*                             {{ form_errors(form.prospecto) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <input type="submit" value="Asignar" class="waves-effect waves-light btn blue darken-4 right"/>*/
/* */
/*                     {{ form_end(form) }}*/
/*                     <a href="{{ url }}" class="waves-effect btn blue darken-4 left">Cancelar<a/>*/
/* */
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <style>*/
/*         body{*/
/*             background-color: white;*/
/*             height: 100vh;*/
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
