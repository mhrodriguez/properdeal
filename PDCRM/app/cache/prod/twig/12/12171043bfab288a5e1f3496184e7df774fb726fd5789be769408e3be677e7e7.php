<?php

/* :asesorpermiso:edit.html.twig */
class __TwigTemplate_05a263e4b6789a535c191f983fcd5d12b05be4bec48f2055d7a4d19a09c34115 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":asesorpermiso:edit.html.twig", 1);
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
        <br><br>
        <div class=\"row\">
            <nav>
                <div class=\"nav-wrapper z-depth-1\">
                    <div class=\"col s12  blue darken-1 \">
                        <a href=\"#!\" class=\"breadcrumb\">Permisos</a>
                    </div>
                </div>
            </nav>
        </div>

        <br>
        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "altapropiedad", array()), 'widget');
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "altapropiedad", array()), 'label');
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "altapropiedad", array()), 'errors');
        echo "
            </div>
        </div>


        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "editarpropiedad", array()), 'widget');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "editarpropiedad", array()), 'label');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "editarpropiedad", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inactivarpropiedad", array()), 'widget');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inactivarpropiedad", array()), 'label');
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inactivarpropiedad", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "destacarpropiedad", array()), 'widget');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "destacarpropiedad", array()), 'label');
        echo "
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "destacarpropiedad", array()), 'errors');
        echo "
            </div>
        </div>

        <!--div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 56
        echo "                ";
        // line 57
        echo "                ";
        // line 58
        echo "            </div>
        </div-->

        <!--div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 64
        echo "                ";
        // line 65
        echo "                ";
        // line 66
        echo "            </div>
        </div-->

        <!--div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 72
        echo "                ";
        // line 73
        echo "                ";
        // line 74
        echo "            </div>
        </div-->

        <input type=\"submit\" value=\"Guardar\" class=\"btn blue darken-4 right\"/>

        <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("asesorpermiso_index", array());
        echo "\" class=\"btn blue darken-4 right\" style=\"margin-right: 10px\">Cancelar</a>

        ";
        // line 81
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>

    <style>
        body
        {
            background-color: white;
            height: 200vh;
        }
    </style>

    <script>

        document.getElementById('asesor_permiso_altapropiedad').required=false;
        document.getElementById('asesor_permiso_editarpropiedad').required=false;
        document.getElementById('asesor_permiso_inactivarpropiedad').required=false;
        document.getElementById('asesor_permiso_destacarpropiedad').required=false;

    </script>
";
    }

    public function getTemplateName()
    {
        return ":asesorpermiso:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 81,  156 => 79,  149 => 74,  147 => 73,  145 => 72,  138 => 66,  136 => 65,  134 => 64,  127 => 58,  125 => 57,  123 => 56,  114 => 49,  110 => 48,  106 => 47,  97 => 41,  93 => 40,  89 => 39,  80 => 33,  76 => 32,  72 => 31,  62 => 24,  58 => 23,  54 => 22,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <br><br>*/
/*         <div class="row">*/
/*             <nav>*/
/*                 <div class="nav-wrapper z-depth-1">*/
/*                     <div class="col s12  blue darken-1 ">*/
/*                         <a href="#!" class="breadcrumb">Permisos</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*         </div>*/
/* */
/*         <br>*/
/*         {{ form_start(form) }}*/
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.altapropiedad) }}*/
/*                 {{ form_label(form.altapropiedad) }}*/
/*                 {{ form_errors(form.altapropiedad) }}*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.editarpropiedad) }}*/
/*                 {{ form_label(form.editarpropiedad) }}*/
/*                 {{ form_errors(form.editarpropiedad) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.inactivarpropiedad) }}*/
/*                 {{ form_label(form.inactivarpropiedad) }}*/
/*                 {{ form_errors(form.inactivarpropiedad) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{form_widget(form.destacarpropiedad) }}*/
/*                 {{ form_label(form.destacarpropiedad) }}*/
/*                 {{ form_errors(form.destacarpropiedad) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!--div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {# form_widget(form.notificaraltapropiedad) #}*/
/*                 {# form_label(form.notificaraltapropiedad) #}*/
/*                 {# form_errors(form.notificaraltapropiedad) #}*/
/*             </div>*/
/*         </div-->*/
/* */
/*         <!--div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {# form_widget(form.duplicarprospectos) #}*/
/*                 {# form_label(form.duplicarprospectos) #}*/
/*                 {# form_errors(form.duplicarprospectos) #}*/
/*             </div>*/
/*         </div-->*/
/* */
/*         <!--div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {# form_widget(form.publicarsolocondatospropietario) #}*/
/*                 {# form_label(form.publicarsolocondatospropietario) #}*/
/*                 {# form_errors(form.publicarsolocondatospropietario) #}*/
/*             </div>*/
/*         </div-->*/
/* */
/*         <input type="submit" value="Guardar" class="btn blue darken-4 right"/>*/
/* */
/*         <a href="{{ path('asesorpermiso_index', {}) }}" class="btn blue darken-4 right" style="margin-right: 10px">Cancelar</a>*/
/* */
/*         {{ form_end(form) }}*/
/*     </div>*/
/* */
/*     <style>*/
/*         body*/
/*         {*/
/*             background-color: white;*/
/*             height: 200vh;*/
/*         }*/
/*     </style>*/
/* */
/*     <script>*/
/* */
/*         document.getElementById('asesor_permiso_altapropiedad').required=false;*/
/*         document.getElementById('asesor_permiso_editarpropiedad').required=false;*/
/*         document.getElementById('asesor_permiso_inactivarpropiedad').required=false;*/
/*         document.getElementById('asesor_permiso_destacarpropiedad').required=false;*/
/* */
/*     </script>*/
/* {% endblock %}*/
/* */
