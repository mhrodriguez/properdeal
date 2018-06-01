<?php

/* :solicitud:index.html.twig */
class __TwigTemplate_f5b3d74d486be1de414b9359a235d50c5966a7c00aa2270c59ae417efdfe1ef8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":solicitud:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <!-- Page Layout here -->
            <br/>
            <div class=\"row\">
                <nav>
                    <div class=\"nav-wrapper z-depth-1\">
                        <div class=\"col s12  blue darken-1 \">
                            <a href=\"#!\" class=\"breadcrumb\">Solicitudes</a>
                        </div>
                    </div>
                </nav>
            </div>

            <div class=\"row\">
                <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("solicitud_new", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-1 right\"><i class=\"material-icons left\">add</i>Nueva Solicitud</a>
            </div>

            <div class=\"row\">
                <div class=\"col s12\">
                    <ul class=\"tabs\">
                        <li class=\"tab col s4\"><a class=\"active blue-text\" href=\"#tabMisSolicitudes\">Mis Solicitudes</a></li>
                        <li class=\"tab col s4\"><a class=\"blue-text\" href=\"#tabMiOficina\">Mi Oficina</a></li>
                        <li class=\"tab col s4\"><a class=\"blue-text\" href=\"#tabRed\">Red</a></li>
                        <li class=\"tab col s4\"><a class=\"blue-text\" href=\"#tabBuscar\">Buscar</a></li>
                    </ul>
                </div>
                <div id=\"tabMisSolicitudes\" class=\"col s12\" style=\"height: 70vh\">
                    <iframe src=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("solicitud_resultadosfiltro", array());
        echo "?filtro=1\" style=\"width:100%; height:90vh;\" frameBorder=\"0\"></iframe>
                </div>
                <div id=\"tabMiOficina\" class=\"col s12\" style=\"height: 70vh\">
                    <iframe src=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("solicitud_resultadosfiltro", array());
        echo "?filtro=2\"  style=\"width:100%; height:90vh;\" frameBorder=\"0\"></iframe>
                </div>
                <div id=\"tabRed\" class=\"col s12\" style=\"height: 70vh\">
                    <iframe src=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("solicitud_resultadosfiltro", array());
        echo "?filtro=3\" style=\"width:100%; height:90vh;\" frameBorder=\"0\"></iframe>
                </div>
                <div id=\"tabBuscar\" class=\"col s12\" style=\"height: 70vh\">
                    <iframe src=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("solicitud_buscarform", array());
        echo "\" style=\"width:100%; height:90vh;\" frameBorder=\"0\"></iframe>
                </div>
            </div>
        </div>

    </div>
";
    }

    // line 49
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 50
        echo "
    <style>
        body {
            background: white;
            height: 100vh;
        }
        div {
            background: white;
        }

        .tabs .indicator {
            background-color: blue !important;
        }
    </style>

    <script>

    </script>

";
    }

    public function getTemplateName()
    {
        return ":solicitud:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 50,  94 => 49,  83 => 41,  77 => 38,  71 => 35,  65 => 32,  49 => 19,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <!-- Page Layout here -->*/
/*             <br/>*/
/*             <div class="row">*/
/*                 <nav>*/
/*                     <div class="nav-wrapper z-depth-1">*/
/*                         <div class="col s12  blue darken-1 ">*/
/*                             <a href="#!" class="breadcrumb">Solicitudes</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <a href="{{ path('solicitud_new', {}) }}" class="waves-effect waves-light btn blue darken-1 right"><i class="material-icons left">add</i>Nueva Solicitud</a>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col s12">*/
/*                     <ul class="tabs">*/
/*                         <li class="tab col s4"><a class="active blue-text" href="#tabMisSolicitudes">Mis Solicitudes</a></li>*/
/*                         <li class="tab col s4"><a class="blue-text" href="#tabMiOficina">Mi Oficina</a></li>*/
/*                         <li class="tab col s4"><a class="blue-text" href="#tabRed">Red</a></li>*/
/*                         <li class="tab col s4"><a class="blue-text" href="#tabBuscar">Buscar</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div id="tabMisSolicitudes" class="col s12" style="height: 70vh">*/
/*                     <iframe src="{{ path('solicitud_resultadosfiltro', {}) }}?filtro=1" style="width:100%; height:90vh;" frameBorder="0"></iframe>*/
/*                 </div>*/
/*                 <div id="tabMiOficina" class="col s12" style="height: 70vh">*/
/*                     <iframe src="{{ path('solicitud_resultadosfiltro', {}) }}?filtro=2"  style="width:100%; height:90vh;" frameBorder="0"></iframe>*/
/*                 </div>*/
/*                 <div id="tabRed" class="col s12" style="height: 70vh">*/
/*                     <iframe src="{{ path('solicitud_resultadosfiltro', {}) }}?filtro=3" style="width:100%; height:90vh;" frameBorder="0"></iframe>*/
/*                 </div>*/
/*                 <div id="tabBuscar" class="col s12" style="height: 70vh">*/
/*                     <iframe src="{{ path('solicitud_buscarform', {}) }}" style="width:100%; height:90vh;" frameBorder="0"></iframe>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/*     <style>*/
/*         body {*/
/*             background: white;*/
/*             height: 100vh;*/
/*         }*/
/*         div {*/
/*             background: white;*/
/*         }*/
/* */
/*         .tabs .indicator {*/
/*             background-color: blue !important;*/
/*         }*/
/*     </style>*/
/* */
/*     <script>*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
