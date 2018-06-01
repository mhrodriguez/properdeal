<?php

/* :panel_inmueble:index.html.twig */
class __TwigTemplate_423ac3b0199b261ac02fcba4e7547a4901289d19e9ce7b39db489e624254bb1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseprincipal.html.twig", ":panel_inmueble:index.html.twig", 1);
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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:BarraHerramientas:show", array("indexSeleccionado" => 3, "numProspectos" => 0)));
        // line 12
        echo "
            </div>

            <!-- Page Layout here -->
            <div class=\"row z-depth-2\" >

                <div class=\"col s4 m3 l3 blue lighten-3\" style=\"height:266vh\">

                    <br/>
                    <div class=\"row\">
                        <a class=\"waves-effect waves-light btn blue darken-1\" onclick=\"mostrarInmuebles();\"><i class=\"material-icons left\">home</i>Alta de Propiedad</a>
                    </div>
                    <div class=\"row\">
                        <a class=\"waves-effect waves-light btn blue darken-1\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("panel_prospecto", array());
        echo "\"><i class=\"material-icons left\">person</i>Nuevo Prospecto&nbsp;</a>
                    </div>

                    <iframe style=\"width:100%; height:138vh;\" frameBorder=\"0\" src=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("consultarinmueble_buscarformvertical", array());
        echo "\">
                    </iframe>

                    <iframe id=\"iframeTarea\" src=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("tarea_new", array());
        echo "\" style=\"width:100%; height:108vh; margin-top:8px; padding-top:-8px\" frameBorder=\"0\">
                    </iframe>
                </div>

                <div class=\"col s8 m9 l9 white\" style=\"height:265vh\">
                    <iframe id=\"iframePrincipal\" src=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("inmueble_index", array());
        echo "\" style=\"width:100%; height:100%; margin-top:8px; padding-top:-8px\" frameBorder=\"0\">
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
        // line 48
        echo $this->env->getExtension('routing')->getPath("consultarinmueble_resultados", array());
        echo "?' + parametros;
        }
        function mostrarInmuebles()
        {
            var iframePrincipal = document.getElementById('iframePrincipal');

            iframePrincipal.src = '";
        // line 54
        echo $this->env->getExtension('routing')->getPath("inmueble_index", array());
        echo "';
        }
    </script>

";
    }

    // line 60
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 61
        echo "
    <style>
        body {
            background: white;
            height: 266vh;
        }

    </style>

";
    }

    public function getTemplateName()
    {
        return ":panel_inmueble:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 61,  109 => 60,  100 => 54,  91 => 48,  76 => 36,  68 => 31,  62 => 28,  56 => 25,  41 => 12,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
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
/*                 { 'indexSeleccionado': 3, 'numProspectos' : 0 }*/
/*                 )) }}*/
/*             </div>*/
/* */
/*             <!-- Page Layout here -->*/
/*             <div class="row z-depth-2" >*/
/* */
/*                 <div class="col s4 m3 l3 blue lighten-3" style="height:266vh">*/
/* */
/*                     <br/>*/
/*                     <div class="row">*/
/*                         <a class="waves-effect waves-light btn blue darken-1" onclick="mostrarInmuebles();"><i class="material-icons left">home</i>Alta de Propiedad</a>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <a class="waves-effect waves-light btn blue darken-1" href="{{ path('panel_prospecto', {}) }}"><i class="material-icons left">person</i>Nuevo Prospecto&nbsp;</a>*/
/*                     </div>*/
/* */
/*                     <iframe style="width:100%; height:138vh;" frameBorder="0" src="{{ path('consultarinmueble_buscarformvertical', {}) }}">*/
/*                     </iframe>*/
/* */
/*                     <iframe id="iframeTarea" src="{{ path('tarea_new', {}) }}" style="width:100%; height:108vh; margin-top:8px; padding-top:-8px" frameBorder="0">*/
/*                     </iframe>*/
/*                 </div>*/
/* */
/*                 <div class="col s8 m9 l9 white" style="height:265vh">*/
/*                     <iframe id="iframePrincipal" src="{{ path('inmueble_index', {}) }}" style="width:100%; height:100%; margin-top:8px; padding-top:-8px" frameBorder="0">*/
/*                     </iframe>*/
/*                 </div>*/
/*             </div>*/
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
/*         function mostrarInmuebles()*/
/*         {*/
/*             var iframePrincipal = document.getElementById('iframePrincipal');*/
/* */
/*             iframePrincipal.src = '{{ path('inmueble_index', {}) }}';*/
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
/*             height: 266vh;*/
/*         }*/
/* */
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* */
