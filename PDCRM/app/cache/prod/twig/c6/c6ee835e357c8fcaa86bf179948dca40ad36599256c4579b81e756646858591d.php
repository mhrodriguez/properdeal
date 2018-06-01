<?php

/* :solicitud:resultadosfiltro.html.twig */
class __TwigTemplate_fb86c1913776ebc861453c1e43fcad6ac522d50f5639c5aa758eb418011fa890 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":solicitud:resultadosfiltro.html.twig", 1);
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
            <br/><br/>

            ";
        // line 9
        if (((isset($context["mostrarbotonatras"]) ? $context["mostrarbotonatras"] : null) == true)) {
            // line 10
            echo "            <div class=\"row\">
                <button onclick=\"window.history.back();\" class=\"waves-effect waves-light btn right blue darken-1\">
                    Regresar
                </button>
            </div>
            ";
        }
        // line 16
        echo "
            <div class=\"row\">
                ";
        // line 18
        if (((isset($context["filtro"]) ? $context["filtro"] : null) > 0)) {
            // line 19
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("solicitud_resultadosfiltro", array());
            echo ".xls?filtro=";
            echo twig_escape_filter($this->env, (isset($context["filtro"]) ? $context["filtro"] : null), "html", null, true);
            echo "\" class=\"waves-effect waves-light btn blue darken-1 left\">Generar Excel</a>
                <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("solicitud_resultadosimprimirfiltro", array());
            echo "?filtro=";
            echo twig_escape_filter($this->env, (isset($context["filtro"]) ? $context["filtro"] : null), "html", null, true);
            echo "\" class=\"waves-effect waves-light btn blue darken-1 right\" target=\"_blank\">Imprimir</a>
                ";
        }
        // line 22
        echo "            </div>

            <div class=\"row\">

                    ";
        // line 26
        $context["index"] = 0;
        // line 27
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitudes"]) ? $context["solicitudes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 28
            echo "
                        <div class=\"col s";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["columnas"]) ? $context["columnas"] : null), "html", null, true);
            echo " m";
            echo twig_escape_filter($this->env, (isset($context["columnas"]) ? $context["columnas"] : null), "html", null, true);
            echo " l";
            echo twig_escape_filter($this->env, (isset($context["columnas"]) ? $context["columnas"] : null), "html", null, true);
            echo " \">

                            <div class=\"z-depth-1\">

                            ";
            // line 33
            if ( !(null === (isset($context["solicitudinmuebles"]) ? $context["solicitudinmuebles"] : null))) {
                // line 34
                echo "
                                ";
                // line 35
                if ( !(null === $this->getAttribute((isset($context["solicitudinmuebles"]) ? $context["solicitudinmuebles"] : null), (isset($context["index"]) ? $context["index"] : null), array(), "array"))) {
                    // line 36
                    echo "                                    <div style=\"padding: 10px\">
                                    ";
                    // line 37
                    $context["inmueble"] = $this->getAttribute((isset($context["solicitudinmuebles"]) ? $context["solicitudinmuebles"] : null), (isset($context["index"]) ? $context["index"] : null), array(), "array");
                    // line 38
                    echo "                                    <h5>ID: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "legacyid", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "nombreid", array()), "html", null, true);
                    echo " </h5>
                                    <h5>";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idTipoInmueble", array()), "nombre", array()), "html", null, true);
                    echo " en ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
                    echo "</h5>
                                    ";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idUsuario", array()), "nombre", array()), "html", null, true);
                    echo " (ProperDeal)<br>
                                    Alta: ";
                    // line 41
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "fechaCreacion", array()), "d/m/Y"), "html", null, true);
                    echo "<br>
                                    Modificado: ";
                    // line 42
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "fechaModificacion", array()), "d/m/Y"), "html", null, true);
                    echo "
                                    </div>
                                ";
                }
                // line 45
                echo "                            ";
            }
            // line 46
            echo "
                            <div class=\"card large\">
                                <div class=\"card-image\">
                                    ";
            // line 49
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "05345a8_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_05345a8_0") : $this->env->getExtension('asset')->getAssetUrl("images/05345a8_solicitud_1.png");
                // line 50
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"activator\">
                                    ";
            } else {
                // asset "05345a8"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_05345a8") : $this->env->getExtension('asset')->getAssetUrl("images/05345a8.png");
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"activator\">
                                    ";
            }
            unset($context["asset_url"]);
            // line 52
            echo "
                                </div>
                                <div class=\"card-content\">
                                    <p>
                                        Publica: ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idUsuario", array()), "nombre", array()), "html", null, true);
            echo " (ProperDeal) - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["solicitud"], "fecha", array()), "d/m/Y"), "html", null, true);
            echo "<br>
                                        ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idTipoInmueble", array()), "nombre", array()), "html", null, true);
            echo " en ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
            echo "<br>
                                    </p>
                                </div>
                                <div class=\"card-action\">
                                    Ubicación: ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "ciudad", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "colonia", array()), "html", null, true);
            echo "<br>
                                    ";
            // line 62
            if (($this->getAttribute($context["solicitud"], "precio", array()) != false)) {
                // line 63
                echo "                                        Desde: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idMoneda", array()), "simbolo", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["solicitud"], "precio", array()), 2, ".", ","), "html", null, true);
                echo "<br>
                                    ";
            }
            // line 65
            echo "                                    ";
            if (($this->getAttribute($context["solicitud"], "preciomax", array()) != false)) {
                // line 66
                echo "                                        Hasta: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idMoneda", array()), "simbolo", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["solicitud"], "preciomax", array()), 2, ".", ","), "html", null, true);
                echo "<br>
                                    ";
            }
            // line 68
            echo "
                                    ";
            // line 69
            if (($this->getAttribute($context["solicitud"], "metrosterreno", array()) != false)) {
                // line 70
                echo "                                        Desde: ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["solicitud"], "metrosterreno", array()), 2, ".", ","), "html", null, true);
                echo " m2
                                    ";
            }
            // line 72
            echo "
                                    ";
            // line 73
            if (($this->getAttribute($context["solicitud"], "metrosterrenomax", array()) != false)) {
                // line 74
                echo "                                        Hasta: ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["solicitud"], "metrosterrenomax", array()), 2, ".", ","), "html", null, true);
                echo " m2
                                    ";
            }
            // line 76
            echo "                                    <br><br>
                                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_show", array("id" => $this->getAttribute($context["solicitud"], "idSolicitud", array()))), "html", null, true);
            echo "\">VER</a>

                                    ";
            // line 79
            if ((((isset($context["ida"]) ? $context["ida"] : null) == $this->getAttribute($this->getAttribute($context["solicitud"], "idUsuario", array()), "id", array())) || ($this->env->getExtension('security')->isGranted("ROLE_SUPERADMIN") == true))) {
                // line 80
                echo "                                    <a href=\"#!\" onclick=\"window.parent.location.href = '";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_edit", array("id" => $this->getAttribute($context["solicitud"], "idSolicitud", array()))), "html", null, true);
                echo "';\">EDITAR</a>
                                    ";
            }
            // line 82
            echo "
                                    ";
            // line 83
            if ((((isset($context["ida"]) ? $context["ida"] : null) == $this->getAttribute($this->getAttribute($context["solicitud"], "idUsuario", array()), "id", array())) || ($this->env->getExtension('security')->isGranted("ROLE_SUPERADMIN") == true))) {
                // line 84
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_borrar", array("id" => $this->getAttribute($context["solicitud"], "idSolicitud", array()))), "html", null, true);
                echo "\" onclick=\"if (confirm('¿Está seguro que desea borrar este registro?')) { return true; } else { return false; }\">BORRAR</a>
                                    ";
            }
            // line 86
            echo "
                                    <a href=\"#!\" onclick=\"window.parent.location.href = '";
            // line 87
            echo $this->env->getExtension('routing')->getPath("mensaje_new", array());
            echo "?tipoMensaje=4&idSolicitud=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "idSolicitud", array()), "html", null, true);
            echo "&idAsesor=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idUsuario", array()), "id", array()), "html", null, true);
            echo "'\">
                                        RESPONDER
                                    </a>

                                </div>
                            </div>

                            </div>

                        </div>

                    ";
            // line 98
            $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
            // line 99
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
            </div>

        </div>
    </div>
";
    }

    // line 107
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 108
        echo "
    <style>
        body {
            background: white;
            height: 100vh;
        }
        p
        {
            font-size: small;
        }
    </style>

";
    }

    public function getTemplateName()
    {
        return ":solicitud:resultadosfiltro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 108,  296 => 107,  287 => 100,  281 => 99,  279 => 98,  261 => 87,  258 => 86,  252 => 84,  250 => 83,  247 => 82,  241 => 80,  239 => 79,  234 => 77,  231 => 76,  225 => 74,  223 => 73,  220 => 72,  214 => 70,  212 => 69,  209 => 68,  201 => 66,  198 => 65,  190 => 63,  188 => 62,  182 => 61,  173 => 57,  167 => 56,  161 => 52,  147 => 50,  143 => 49,  138 => 46,  135 => 45,  129 => 42,  125 => 41,  121 => 40,  115 => 39,  108 => 38,  106 => 37,  103 => 36,  101 => 35,  98 => 34,  96 => 33,  85 => 29,  82 => 28,  77 => 27,  75 => 26,  69 => 22,  62 => 20,  55 => 19,  53 => 18,  49 => 16,  41 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <!-- Page Layout here -->*/
/*             <br/><br/>*/
/* */
/*             {% if mostrarbotonatras == true %}*/
/*             <div class="row">*/
/*                 <button onclick="window.history.back();" class="waves-effect waves-light btn right blue darken-1">*/
/*                     Regresar*/
/*                 </button>*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*             <div class="row">*/
/*                 {%  if filtro > 0 %}*/
/*                 <a href="{{ path('solicitud_resultadosfiltro', {}) }}.xls?filtro={{ filtro }}" class="waves-effect waves-light btn blue darken-1 left">Generar Excel</a>*/
/*                 <a href="{{ path('solicitud_resultadosimprimirfiltro', {}) }}?filtro={{ filtro }}" class="waves-effect waves-light btn blue darken-1 right" target="_blank">Imprimir</a>*/
/*                 {%  endif %}*/
/*             </div>*/
/* */
/*             <div class="row">*/
/* */
/*                     {% set index=0 %}*/
/*                     {% for solicitud in solicitudes %}*/
/* */
/*                         <div class="col s{{ columnas }} m{{ columnas }} l{{ columnas }} ">*/
/* */
/*                             <div class="z-depth-1">*/
/* */
/*                             {% if solicitudinmuebles is not null %}*/
/* */
/*                                 {% if solicitudinmuebles[index] is not null %}*/
/*                                     <div style="padding: 10px">*/
/*                                     {% set inmueble = solicitudinmuebles[index] %}*/
/*                                     <h5>ID: {{ inmueble.legacyid }} {{ inmueble.nombreid }} </h5>*/
/*                                     <h5>{{ inmueble.idTipoInmueble.nombre }} en {{ inmueble.idOperacionInmueble.nombre }}</h5>*/
/*                                     {{ inmueble.idUsuario.nombre }} (ProperDeal)<br>*/
/*                                     Alta: {{ inmueble.fechaCreacion | date('d/m/Y') }}<br>*/
/*                                     Modificado: {{ inmueble.fechaModificacion | date('d/m/Y') }}*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/* */
/*                             <div class="card large">*/
/*                                 <div class="card-image">*/
/*                                     {% image '@FrameworkBundle/Resources/public/images/solicitud.png' %}*/
/*                                         <img src="{{ asset_url }}" alt="" class="activator">*/
/*                                     {% endimage %}*/
/* */
/*                                 </div>*/
/*                                 <div class="card-content">*/
/*                                     <p>*/
/*                                         Publica: {{ solicitud.idUsuario.nombre }} (ProperDeal) - {{ solicitud.fecha | date('d/m/Y') }}<br>*/
/*                                         {{ solicitud.idTipoInmueble.nombre }} en {{ solicitud.idOperacionInmueble.nombre }}<br>*/
/*                                     </p>*/
/*                                 </div>*/
/*                                 <div class="card-action">*/
/*                                     Ubicación: {{ solicitud.ciudad }}, {{ solicitud.colonia }}<br>*/
/*                                     {% if (solicitud.precio != false) %}*/
/*                                         Desde: {{ solicitud.idMoneda.simbolo }} {{ solicitud.precio|number_format(2, '.', ',') }}<br>*/
/*                                     {% endif  %}*/
/*                                     {% if (solicitud.preciomax != false) %}*/
/*                                         Hasta: {{ solicitud.idMoneda.simbolo }} {{ solicitud.preciomax|number_format(2, '.', ',') }}<br>*/
/*                                     {% endif  %}*/
/* */
/*                                     {% if (solicitud.metrosterreno != false) %}*/
/*                                         Desde: {{ solicitud.metrosterreno|number_format(2, '.', ',') }} m2*/
/*                                     {% endif  %}*/
/* */
/*                                     {% if (solicitud.metrosterrenomax != false) %}*/
/*                                         Hasta: {{ solicitud.metrosterrenomax|number_format(2, '.', ',') }} m2*/
/*                                     {% endif  %}*/
/*                                     <br><br>*/
/*                                     <a href="{{ path ('solicitud_show', {'id': solicitud.idSolicitud}) }}">VER</a>*/
/* */
/*                                     {% if (ida == solicitud.idUsuario.id) or (is_granted('ROLE_SUPERADMIN') == true) %}*/
/*                                     <a href="#!" onclick="window.parent.location.href = '{{ path ('solicitud_edit', {'id': solicitud.idSolicitud}) }}';">EDITAR</a>*/
/*                                     {% endif %}*/
/* */
/*                                     {% if (ida == solicitud.idUsuario.id) or (is_granted('ROLE_SUPERADMIN') == true) %}*/
/*                                     <a href="{{ path('solicitud_borrar', {'id':solicitud.idSolicitud}) }}" onclick="if (confirm('¿Está seguro que desea borrar este registro?')) { return true; } else { return false; }">BORRAR</a>*/
/*                                     {% endif %}*/
/* */
/*                                     <a href="#!" onclick="window.parent.location.href = '{{ path('mensaje_new', {}) }}?tipoMensaje=4&idSolicitud={{ solicitud.idSolicitud }}&idAsesor={{ solicitud.idUsuario.id }}'">*/
/*                                         RESPONDER*/
/*                                     </a>*/
/* */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                     {% set index=index+1 %}*/
/*                     {% endfor %}*/
/* */
/*             </div>*/
/* */
/*         </div>*/
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
/*         p*/
/*         {*/
/*             font-size: small;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
