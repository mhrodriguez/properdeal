<?php

/* :panel_principal:index.html.twig */
class __TwigTemplate_5cc4c36496a03cceb04592fc9e65e3f1153e316d2e4a979d28cab7acdf5913e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseprincipal.html.twig", ":panel_principal:index.html.twig", 1);
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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:BarraHerramientas:show", array("indexSeleccionado" => 0, "numProspectos" => 0)));
        // line 12
        echo "
            </div>

            <!-- Page Layout here -->
            <div class=\"row z-depth-2\" >

                <div class=\"col s4 m3 l3 blue lighten-3\"> <!-- Note that \"m4 l3\" was added -->
                    <br/>
                    <div class=\"row\">
                        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("panel_inmueble", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-1\"><i class=\"material-icons left\">home</i>Alta de Propiedad</a>
                    </div>
                    <div class=\"row\">
                        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("panel_prospecto", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-1\"><i class=\"material-icons left\">person</i>Nuevo Prospecto&nbsp;</a>
                    </div>

                    <div class=\"row\">

                        ";
        // line 29
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:MenuPrincipal:show", array()));
        // line 32
        echo "

                    </div>
                </div>

                <div class=\"col s8 m9 l9\"> <!-- Note that \"m8 l9\" was added -->
                    <iframe id=\"iframePrincipal\" src=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("dashboard_index", array());
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
        // line 51
        echo $this->env->getExtension('routing')->getPath("consultarinmueble_resultados", array());
        echo "?' + parametros;
        }
    </script>
";
    }

    // line 56
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 57
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
        return ":panel_principal:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 57,  100 => 56,  92 => 51,  76 => 38,  68 => 32,  66 => 29,  58 => 24,  52 => 21,  41 => 12,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
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
/*                 { 'indexSeleccionado': 0, 'numProspectos' : 0 }*/
/*                 )) }}*/
/*             </div>*/
/* */
/*             <!-- Page Layout here -->*/
/*             <div class="row z-depth-2" >*/
/* */
/*                 <div class="col s4 m3 l3 blue lighten-3"> <!-- Note that "m4 l3" was added -->*/
/*                     <br/>*/
/*                     <div class="row">*/
/*                         <a href="{{ path('panel_inmueble', {}) }}" class="waves-effect waves-light btn blue darken-1"><i class="material-icons left">home</i>Alta de Propiedad</a>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <a href="{{ path('panel_prospecto', {}) }}" class="waves-effect waves-light btn blue darken-1"><i class="material-icons left">person</i>Nuevo Prospecto&nbsp;</a>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/* */
/*                         {{ render(controller(*/
/*                         'AppBundle:MenuPrincipal:show',*/
/*                         { }*/
/*                         )) }}*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col s8 m9 l9"> <!-- Note that "m8 l9" was added -->*/
/*                     <iframe id="iframePrincipal" src="{{ path('dashboard_index', {}) }}" style="width:100%; height:420vh; margin-top:8px; padding-top:-8px" frameBorder="0">*/
/* */
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
