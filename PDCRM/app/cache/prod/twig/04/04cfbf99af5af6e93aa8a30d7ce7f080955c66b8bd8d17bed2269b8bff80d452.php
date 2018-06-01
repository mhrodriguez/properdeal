<?php

/* :destacado:edit.html.twig */
class __TwigTemplate_9212ed53ba325eb2d0f02d2283c215c3adc018b43a7e14b942a79cc2ea8d28b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":destacado:edit.html.twig", 1);
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
                        <a href=\"#\" class=\"breadcrumb\">Destacado</a>
                        <a href=\"#\" class=\"breadcrumb\">Editar</a>
                    </div>
                </div>
            </nav>
        </div>

        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'widget');
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'label');
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'errors');
        echo "
            </div>
        </div>


        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inmueble", array()), 'widget');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inmueble", array()), 'label');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inmueble", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'widget');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'label');
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'errors');
        echo "
            </div>
        </div>

        <input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue darken-4 right\"/>

        <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("destacado_index", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-4 right\">Cancelar</a>

        ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>

    <style>
        body
        {
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
        return ":destacado:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 49,  106 => 47,  97 => 41,  93 => 40,  89 => 39,  80 => 33,  76 => 32,  72 => 31,  62 => 24,  58 => 23,  54 => 22,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
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
/*                         <a href="#" class="breadcrumb">Destacado</a>*/
/*                         <a href="#" class="breadcrumb">Editar</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*         </div>*/
/* */
/*         {{ form_start(form) }}*/
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.nombre) }}*/
/*                 {{ form_label(form.nombre) }}*/
/*                 {{ form_errors(form.nombre) }}*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.inmueble) }}*/
/*                 {{ form_label(form.inmueble) }}*/
/*                 {{ form_errors(form.inmueble) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.descripcion) }}*/
/*                 {{ form_label(form.descripcion) }}*/
/*                 {{ form_errors(form.descripcion) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <input type="submit" value="Guardar" class="waves-effect waves-light btn blue darken-4 right"/>*/
/* */
/*         <a href="{{ path('destacado_index', {}) }}" class="waves-effect waves-light btn blue darken-4 right">Cancelar</a>*/
/* */
/*         {{ form_end(form) }}*/
/*     </div>*/
/* */
/*     <style>*/
/*         body*/
/*         {*/
/*             background-color: white;*/
/*             height: 100vh;*/
/*         }*/
/*     </style>*/
/* */
/*     <script>*/
/*         $(document).ready(function() {*/
/*             $('select').material_select();*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
