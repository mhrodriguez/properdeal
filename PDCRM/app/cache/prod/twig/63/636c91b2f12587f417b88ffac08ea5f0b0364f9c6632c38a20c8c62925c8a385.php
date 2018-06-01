<?php

/* :panel_solicitud:index2.html.twig */
class __TwigTemplate_c2688940f022f98fec9af59f42c6faee94b716be89883a1c51aa87c454383c5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseprincipal.html.twig", ":panel_solicitud:index2.html.twig", 1);
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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:BarraHerramientas:show", array("indexSeleccionado" => 5, "numProspectos" => 0)));
        // line 12
        echo "
            </div>

            <!-- Page Layout here -->
            <div class=\"row z-depth-2\" >

                <div class=\"col s4 m3 l3 blue lighten-3\" style=\"height:300vh\">
                    <!--iframe id=\"iframeTarea\" src=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("tarea_new", array());
        echo "\" style=\"width:100%; height:108vh; margin-top:8px; padding-top:-8px\" frameBorder=\"0\">
                    </iframe-->
                    ";
        // line 21
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:MenuPrincipal:show", array()));
        // line 24
        echo "
                </div>

                <div class=\"col s8 m9 l9\">
                    <iframe id=\"iframePrincipal\" src=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("solicitud_buscarform2", array());
        echo "\" style=\"width:100%; height:420vh; margin-top:8px; padding-top:-8px\" frameBorder=\"0\">
                    </iframe>
                </div>
            </div>

        </div>
    </div>

    <script>
        function actualizarBusqueda(parametros)
        {
            var iframePrincipal = document.getElementById('iframePrincipal');

            iframePrincipal.src = '";
        // line 41
        echo $this->env->getExtension('routing')->getPath("consultarinmueble_resultados", array());
        echo "?' + parametros;
        }
    </script>

";
    }

    // line 47
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 48
        echo "
    <style>
        body {
            background: white;
            height: 440vh;
        }

    </style>

";
    }

    public function getTemplateName()
    {
        return ":panel_solicitud:index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 48,  88 => 47,  79 => 41,  63 => 28,  57 => 24,  55 => 21,  50 => 19,  41 => 12,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
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
/*                 { 'indexSeleccionado': 5, 'numProspectos' : 0 }*/
/*                 )) }}*/
/*             </div>*/
/* */
/*             <!-- Page Layout here -->*/
/*             <div class="row z-depth-2" >*/
/* */
/*                 <div class="col s4 m3 l3 blue lighten-3" style="height:300vh">*/
/*                     <!--iframe id="iframeTarea" src="{{ path('tarea_new', {}) }}" style="width:100%; height:108vh; margin-top:8px; padding-top:-8px" frameBorder="0">*/
/*                     </iframe-->*/
/*                     {{ render(controller(*/
/*                     'AppBundle:MenuPrincipal:show',*/
/*                     { }*/
/*                     )) }}*/
/*                 </div>*/
/* */
/*                 <div class="col s8 m9 l9">*/
/*                     <iframe id="iframePrincipal" src="{{ path('solicitud_buscarform2', {}) }}" style="width:100%; height:420vh; margin-top:8px; padding-top:-8px" frameBorder="0">*/
/*                     </iframe>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <script>*/
/*         function actualizarBusqueda(parametros)*/
/*         {*/
/*             var iframePrincipal = document.getElementById('iframePrincipal');*/
/* */
/*             iframePrincipal.src = '{{ path('consultarinmueble_resultados', {}) }}?' + parametros;*/
/*         }*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/*     <style>*/
/*         body {*/
/*             background: white;*/
/*             height: 440vh;*/
/*         }*/
/* */
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* */
