<?php

/* :panel_prospecto:index.html.twig */
class __TwigTemplate_37155949c56e6e8e0322a02be3bca352b38bac4845b7b261722a41267522800f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseprincipal.html.twig", ":panel_prospecto:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseprincipal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"wrapper\">

        <div id=\"container\">

            <div style=\"margin-top: 0px\">
                ";
        // line 9
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:BarraHerramientas:show", array("indexSeleccionado" => 4, "numProspectos" => 0)));
        // line 12
        echo "
            </div>

            <!-- Page Layout here -->
            <div class=\"row z-depth-2\" >

                <div class=\"col s4 m3 l3 blue lighten-3\" style=\"height:110vh\">
                    <iframe id=\"iframeTarea\" src=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("tarea_new", array());
        echo "\" style=\"width:100%; height:108vh; margin-top:8px; padding-top:-8px\" frameBorder=\"0\">
                    </iframe>
                </div>

                <div class=\"col s8 m9 l9\">
                    <iframe id=\"iframePrincipal\" src=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("prospecto_index", array());
        echo "\" style=\"width:100%; height:108vh; margin-top:8px; padding-top:-8px\" frameBorder=\"0\">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 33
        echo "
    <style>
        body {
            background: white;
            height: 110vh;
        }

    </style>

";
    }

    public function getTemplateName()
    {
        return ":panel_prospecto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 33,  69 => 32,  58 => 24,  50 => 19,  41 => 12,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseprincipal.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/* */
/*         <div id="container">*/
/* */
/*             <div style="margin-top: 0px">*/
/*                 {{ render(controller(*/
/*                 'AppBundle:BarraHerramientas:show',*/
/*                 { 'indexSeleccionado': 4, 'numProspectos' : 0 }*/
/*                 )) }}*/
/*             </div>*/
/* */
/*             <!-- Page Layout here -->*/
/*             <div class="row z-depth-2" >*/
/* */
/*                 <div class="col s4 m3 l3 blue lighten-3" style="height:110vh">*/
/*                     <iframe id="iframeTarea" src="{{ path('tarea_new', {}) }}" style="width:100%; height:108vh; margin-top:8px; padding-top:-8px" frameBorder="0">*/
/*                     </iframe>*/
/*                 </div>*/
/* */
/*                 <div class="col s8 m9 l9">*/
/*                     <iframe id="iframePrincipal" src="{{ path('prospecto_index', {}) }}" style="width:100%; height:108vh; margin-top:8px; padding-top:-8px" frameBorder="0">*/
/*                     </iframe>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/*     <style>*/
/*         body {*/
/*             background: white;*/
/*             height: 110vh;*/
/*         }*/
/* */
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
