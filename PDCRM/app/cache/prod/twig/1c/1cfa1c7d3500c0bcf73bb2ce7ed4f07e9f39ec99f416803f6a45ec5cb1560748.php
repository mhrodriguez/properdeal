<?php

/* :consultarinmueble:buscarpanel.html.twig */
class __TwigTemplate_82146eb52ff74505b2a58b2a4d328b6466ab960cd6ea344bc7189e855149e2aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":consultarinmueble:buscarpanel.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
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
                <div class=\"input-field col s9\">
                    <iframe id=\"frmResultados\" style=\"width:100%; height:100vh;\" frameBorder=\"0\"
                            src = \"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("buscarinmueble_resultados", array());
        echo "?buscar_inmueble%5Bid_tipo_inmueble%5D=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parametros"]) ? $context["parametros"] : null), "id_tipo_inmueble", array(), "array"), "html", null, true);
        echo "&
                buscar_inmueble%5Bid_operacion_inmueble%5D=";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parametros"]) ? $context["parametros"] : null), "id_operacion_inmueble", array(), "array"), "html", null, true);
        echo "&
                buscar_inmueble%5Bid_estado%5D=";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parametros"]) ? $context["parametros"] : null), "id_estado", array(), "array"), "html", null, true);
        echo "&
                buscar_inmueble%5Bid_municipio%5D=";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parametros"]) ? $context["parametros"] : null), "id_municipio", array(), "array"), "html", null, true);
        echo "&
                buscar_inmueble%5Bid_colonia%5D=";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parametros"]) ? $context["parametros"] : null), "id_colonia", array(), "array"), "html", null, true);
        echo "&
                buscar_inmueble%5Bprecio%5D=";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parametros"]) ? $context["parametros"] : null), "precio", array(), "array"), "html", null, true);
        echo "&
                buscar_inmueble%5Bpreciomax%5D=";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parametros"]) ? $context["parametros"] : null), "preciomax", array(), "array"), "html", null, true);
        echo "&
                buscar_inmueble%5Bmetrosterreno%5D=";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parametros"]) ? $context["parametros"] : null), "metrosterreno", array(), "array"), "html", null, true);
        echo "&
                buscar_inmueble%5Bmetrosterrenomax%5D=";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parametros"]) ? $context["parametros"] : null), "metrosterrenomax", array(), "array"), "html", null, true);
        echo "&
                buscar_inmueble%5Brecamaras%5D=";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parametros"]) ? $context["parametros"] : null), "recamaras", array(), "array"), "html", null, true);
        echo "&
                buscar_inmueble%5Bplantas%5D=";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parametros"]) ? $context["parametros"] : null), "plantas", array(), "array"), "html", null, true);
        echo "\">
                    </iframe>
                </div>
                <div class=\"col s3\" style=\"background-color:#ECECEC; margin-top: -10px\">
                    <iframe style=\"width:100%; height:145vh;\" frameBorder=\"0\" src=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("buscarinmueble_buscarformvertical", array());
        echo "\"></iframe>
                </div>
            </div>

        </div>
    </div>

    <script>
        function actualizarBusqueda(parametros)
        {
            var iframeResultados = document.getElementById('frmResultados');

            iframeResultados.src = '";
        // line 38
        echo $this->env->getExtension('routing')->getPath("buscarinmueble_resultados", array());
        echo "?' + parametros;
        }
    </script>
";
    }

    // line 43
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 44
        echo "
    <style>
        body {
            background: white;
        }
    </style>

";
    }

    public function getTemplateName()
    {
        return ":consultarinmueble:buscarpanel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 44,  114 => 43,  106 => 38,  91 => 26,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  52 => 14,  48 => 13,  42 => 12,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <!-- Page Layout here -->*/
/*             <br/>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s9">*/
/*                     <iframe id="frmResultados" style="width:100%; height:100vh;" frameBorder="0"*/
/*                             src = "{{ path('buscarinmueble_resultados', {}) }}?buscar_inmueble%5Bid_tipo_inmueble%5D={{ parametros['id_tipo_inmueble'] }}&*/
/*                 buscar_inmueble%5Bid_operacion_inmueble%5D={{ parametros['id_operacion_inmueble'] }}&*/
/*                 buscar_inmueble%5Bid_estado%5D={{ parametros['id_estado'] }}&*/
/*                 buscar_inmueble%5Bid_municipio%5D={{ parametros['id_municipio'] }}&*/
/*                 buscar_inmueble%5Bid_colonia%5D={{ parametros['id_colonia'] }}&*/
/*                 buscar_inmueble%5Bprecio%5D={{ parametros['precio'] }}&*/
/*                 buscar_inmueble%5Bpreciomax%5D={{ parametros['preciomax'] }}&*/
/*                 buscar_inmueble%5Bmetrosterreno%5D={{ parametros['metrosterreno'] }}&*/
/*                 buscar_inmueble%5Bmetrosterrenomax%5D={{ parametros['metrosterrenomax'] }}&*/
/*                 buscar_inmueble%5Brecamaras%5D={{ parametros['recamaras'] }}&*/
/*                 buscar_inmueble%5Bplantas%5D={{ parametros['plantas'] }}">*/
/*                     </iframe>*/
/*                 </div>*/
/*                 <div class="col s3" style="background-color:#ECECEC; margin-top: -10px">*/
/*                     <iframe style="width:100%; height:145vh;" frameBorder="0" src="{{ path('buscarinmueble_buscarformvertical', {}) }}"></iframe>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <script>*/
/*         function actualizarBusqueda(parametros)*/
/*         {*/
/*             var iframeResultados = document.getElementById('frmResultados');*/
/* */
/*             iframeResultados.src = '{{ path('buscarinmueble_resultados', {}) }}?' + parametros;*/
/*         }*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/*     <style>*/
/*         body {*/
/*             background: white;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
