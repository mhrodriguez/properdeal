<?php

/* :panel_solicitud:index.html.twig */
class __TwigTemplate_118025be9aad50219bb1bb49fa95eb956409cc489132997e1ff20c1ed2768889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseprincipal.html.twig", ":panel_solicitud:index.html.twig", 1);
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
            <div class=\"row z-depth-2\" style=\"height:130vh\">

                <div class=\"col s4 m3 l3 blue lighten-3\" style=\"height: 100%\">

                    <br/>
                    <div class=\"row\">
                        <a class=\"waves-effect waves-light btn blue darken-1\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("panel_inmueble", array());
        echo "\"><i class=\"material-icons left\">home</i>Alta de Propiedad</a>
                    </div>
                    <div class=\"row\">
                        <a class=\"waves-effect waves-light btn blue darken-1\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("panel_prospecto", array());
        echo "\"><i class=\"material-icons left\">person</i>Nuevo Prospecto&nbsp;</a>
                    </div>

                    <iframe id=\"iframeTarea\" src=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("tarea_new", array());
        echo "\" style=\"width:100%; height:106vh; margin-top:8px; padding-top:-8px\" frameBorder=\"0\">
                    </iframe>
                </div>

                <div class=\"col s8 m9 l9 white\" style=\"height:100%\">
                    <iframe id=\"iframePrincipal\" src=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("solicitud_index", array());
        echo "\" style=\"width:100%; height:100%;\" frameBorder=\"0\">
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
        // line 45
        echo $this->env->getExtension('routing')->getPath("consultarinmueble_resultados", array());
        echo "?' + parametros;
        }
    </script>

";
    }

    // line 51
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 52
        echo "
    <style>
        body {
            background: white;
            height: 130vh;
        }

    </style>

";
    }

    public function getTemplateName()
    {
        return ":panel_solicitud:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 52,  97 => 51,  88 => 45,  73 => 33,  65 => 28,  59 => 25,  53 => 22,  41 => 12,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
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
/*             <div class="row z-depth-2" style="height:130vh">*/
/* */
/*                 <div class="col s4 m3 l3 blue lighten-3" style="height: 100%">*/
/* */
/*                     <br/>*/
/*                     <div class="row">*/
/*                         <a class="waves-effect waves-light btn blue darken-1" href="{{ path('panel_inmueble', {}) }}"><i class="material-icons left">home</i>Alta de Propiedad</a>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <a class="waves-effect waves-light btn blue darken-1" href="{{ path('panel_prospecto', {}) }}"><i class="material-icons left">person</i>Nuevo Prospecto&nbsp;</a>*/
/*                     </div>*/
/* */
/*                     <iframe id="iframeTarea" src="{{ path('tarea_new', {}) }}" style="width:100%; height:106vh; margin-top:8px; padding-top:-8px" frameBorder="0">*/
/*                     </iframe>*/
/*                 </div>*/
/* */
/*                 <div class="col s8 m9 l9 white" style="height:100%">*/
/*                     <iframe id="iframePrincipal" src="{{ path('solicitud_index', {}) }}" style="width:100%; height:100%;" frameBorder="0">*/
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
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/*     <style>*/
/*         body {*/
/*             background: white;*/
/*             height: 130vh;*/
/*         }*/
/* */
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* */
