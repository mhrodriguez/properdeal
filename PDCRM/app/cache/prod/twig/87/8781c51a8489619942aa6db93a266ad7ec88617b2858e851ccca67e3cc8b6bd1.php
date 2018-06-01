<?php

/* :solicitud:buscarform2.html.twig */
class __TwigTemplate_e10d2ddc8a2550a5c3fbb865a581f7edf5aebeac0ab6e8b9e632f535ce84cb03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":solicitud:buscarform2.html.twig", 1);
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
                    <a href=\"#\" class=\"breadcrumb\">Solicitudes</a>
                    <a href=\"#\" class=\"breadcrumb\">Alertas de Solicitudes (";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : null), "html", null, true);
        echo ")</a>
                </div>
            </div>
        </nav>
    </div>
    <div class=\"row\">
        <div class=\"col s6 m6 l6 \">
            <div class=\"row\">
                <label for=\"inpBuscar\">Buscar solicitud:</label>
                <input id=\"inpBuscar\" />
                <button id =\"btnBuscar\" onclick=\"buscar();\" class=\"waves-effect waves-light btn blue darken-4 right\">Ir</button>
                <script>
                    function buscar()
                    {
                        inpBuscar = document.getElementById('inpBuscar');

                        if (inpBuscar.value == '')
                        {
                            return;
                        }

                        window.location = '";
        // line 33
        echo $this->env->getExtension('routing')->getPath("solicitud_buscarform2", array());
        echo "?tipoBusqueda=3&buscar=' + inpBuscar.value;
                    }
                    \$(document).ready(function(){
                        \$('#inpBuscar').keypress(function(e){
                            if(e.keyCode==13)
                                \$('#btnBuscar').click();
                        });
                    });
                </script>

            </div>
        </div>
        <div class=\"col s6 m6 l6 \">
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("solicitud_buscarform2", array());
        echo "?tipoBusqueda=2\" class=\"right\">Mayores a 15 días</a>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitudes"]) ? $context["solicitudes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 51
            echo "
            <div class=\"col s4 m4 l4 \">
                <div class=\"card large\">
                    <div class=\"card-image\">
                        ";
            // line 55
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "05345a8_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_05345a8_0") : $this->env->getExtension('asset')->getAssetUrl("images/05345a8_solicitud_1.png");
                // line 56
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"activator\">
                        ";
            } else {
                // asset "05345a8"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_05345a8") : $this->env->getExtension('asset')->getAssetUrl("images/05345a8.png");
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"activator\">
                        ";
            }
            unset($context["asset_url"]);
            // line 58
            echo "                    </div>
                    <div class=\"card-content\">
                        <p>
                            Publica: ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idUsuario", array()), "nombre", array()), "html", null, true);
            echo " (ProperDeal) - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["solicitud"], "fecha", array()), "d/m/Y"), "html", null, true);
            echo "<br>
                            ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idTipoInmueble", array()), "nombre", array()), "html", null, true);
            echo " en ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
            echo "<br>
                        </p>
                    </div>
                    <div class=\"card-action\">
                        Ubicación: ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "ciudad", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "colonia", array()), "html", null, true);
            echo "<br>
                        ";
            // line 67
            if (($this->getAttribute($context["solicitud"], "precio", array()) != false)) {
                // line 68
                echo "                            Desde: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idMoneda", array()), "simbolo", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["solicitud"], "precio", array()), 2, ".", ","), "html", null, true);
                echo "<br>
                        ";
            }
            // line 70
            echo "                        ";
            if (($this->getAttribute($context["solicitud"], "preciomax", array()) != false)) {
                // line 71
                echo "                            Hasta: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idMoneda", array()), "simbolo", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["solicitud"], "preciomax", array()), 2, ".", ","), "html", null, true);
                echo "<br>
                        ";
            }
            // line 73
            echo "
                        ";
            // line 74
            if (($this->getAttribute($context["solicitud"], "metrosterreno", array()) != false)) {
                // line 75
                echo "                            Desde: ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["solicitud"], "metrosterreno", array()), 2, ".", ","), "html", null, true);
                echo " m2
                        ";
            }
            // line 77
            echo "
                        ";
            // line 78
            if (($this->getAttribute($context["solicitud"], "metrosterrenomax", array()) != false)) {
                // line 79
                echo "                            Hasta: ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["solicitud"], "metrosterrenomax", array()), 2, ".", ","), "html", null, true);
                echo " m2
                        ";
            }
            // line 81
            echo "                        <br><br>
                        <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_show", array("id" => $this->getAttribute($context["solicitud"], "idSolicitud", array()))), "html", null, true);
            echo "\">VER</a>
                    </div>
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "    </div>
</div>

<style>
    body{
        background-color: white;
        height: 100vh;
    }

    #solicitud_caracteristicas label
    {
        margin-right: 20px;
    }

    .activelabel label {
        font-size: 0.8rem;
        -webkit-transform: translateY(-140%);
        transform: translateY(-140%);
    }
</style>

<script>


</script>

";
    }

    public function getTemplateName()
    {
        return ":solicitud:buscarform2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 88,  188 => 82,  185 => 81,  179 => 79,  177 => 78,  174 => 77,  168 => 75,  166 => 74,  163 => 73,  155 => 71,  152 => 70,  144 => 68,  142 => 67,  136 => 66,  127 => 62,  121 => 61,  116 => 58,  102 => 56,  98 => 55,  92 => 51,  88 => 50,  81 => 46,  65 => 33,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="container">*/
/*     <br/>*/
/*     <div class="row">*/
/*         <nav>*/
/*             <div class="nav-wrapper z-depth-1">*/
/*                 <div class="col s12  blue darken-1 ">*/
/*                     <a href="#" class="breadcrumb">Solicitudes</a>*/
/*                     <a href="#" class="breadcrumb">Alertas de Solicitudes ({{ titulo }})</a>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col s6 m6 l6 ">*/
/*             <div class="row">*/
/*                 <label for="inpBuscar">Buscar solicitud:</label>*/
/*                 <input id="inpBuscar" />*/
/*                 <button id ="btnBuscar" onclick="buscar();" class="waves-effect waves-light btn blue darken-4 right">Ir</button>*/
/*                 <script>*/
/*                     function buscar()*/
/*                     {*/
/*                         inpBuscar = document.getElementById('inpBuscar');*/
/* */
/*                         if (inpBuscar.value == '')*/
/*                         {*/
/*                             return;*/
/*                         }*/
/* */
/*                         window.location = '{{ path('solicitud_buscarform2', {}) }}?tipoBusqueda=3&buscar=' + inpBuscar.value;*/
/*                     }*/
/*                     $(document).ready(function(){*/
/*                         $('#inpBuscar').keypress(function(e){*/
/*                             if(e.keyCode==13)*/
/*                                 $('#btnBuscar').click();*/
/*                         });*/
/*                     });*/
/*                 </script>*/
/* */
/*             </div>*/
/*         </div>*/
/*         <div class="col s6 m6 l6 ">*/
/*             <a href="{{ path("solicitud_buscarform2", {}) }}?tipoBusqueda=2" class="right">Mayores a 15 días</a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         {% for solicitud in solicitudes %}*/
/* */
/*             <div class="col s4 m4 l4 ">*/
/*                 <div class="card large">*/
/*                     <div class="card-image">*/
/*                         {% image '@FrameworkBundle/Resources/public/images/solicitud.png' %}*/
/*                         <img src="{{ asset_url }}" alt="" class="activator">*/
/*                         {% endimage %}*/
/*                     </div>*/
/*                     <div class="card-content">*/
/*                         <p>*/
/*                             Publica: {{ solicitud.idUsuario.nombre }} (ProperDeal) - {{ solicitud.fecha | date('d/m/Y') }}<br>*/
/*                             {{ solicitud.idTipoInmueble.nombre }} en {{ solicitud.idOperacionInmueble.nombre }}<br>*/
/*                         </p>*/
/*                     </div>*/
/*                     <div class="card-action">*/
/*                         Ubicación: {{ solicitud.ciudad }}, {{ solicitud.colonia }}<br>*/
/*                         {% if (solicitud.precio != false) %}*/
/*                             Desde: {{ solicitud.idMoneda.simbolo }} {{ solicitud.precio|number_format(2, '.', ',') }}<br>*/
/*                         {% endif  %}*/
/*                         {% if (solicitud.preciomax != false) %}*/
/*                             Hasta: {{ solicitud.idMoneda.simbolo }} {{ solicitud.preciomax|number_format(2, '.', ',') }}<br>*/
/*                         {% endif  %}*/
/* */
/*                         {% if (solicitud.metrosterreno != false) %}*/
/*                             Desde: {{ solicitud.metrosterreno|number_format(2, '.', ',') }} m2*/
/*                         {% endif  %}*/
/* */
/*                         {% if (solicitud.metrosterrenomax != false) %}*/
/*                             Hasta: {{ solicitud.metrosterrenomax|number_format(2, '.', ',') }} m2*/
/*                         {% endif  %}*/
/*                         <br><br>*/
/*                         <a href="{{ path ('solicitud_show', {'id': solicitud.idSolicitud}) }}">VER</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
/* */
/* <style>*/
/*     body{*/
/*         background-color: white;*/
/*         height: 100vh;*/
/*     }*/
/* */
/*     #solicitud_caracteristicas label*/
/*     {*/
/*         margin-right: 20px;*/
/*     }*/
/* */
/*     .activelabel label {*/
/*         font-size: 0.8rem;*/
/*         -webkit-transform: translateY(-140%);*/
/*         transform: translateY(-140%);*/
/*     }*/
/* </style>*/
/* */
/* <script>*/
/* */
/* */
/* </script>*/
/* */
/* {% endblock %}*/
/* */
