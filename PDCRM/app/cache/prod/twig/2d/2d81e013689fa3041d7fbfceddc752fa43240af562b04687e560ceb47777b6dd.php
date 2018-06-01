<?php

/* :solicitud:buscarinmuebles.html.twig */
class __TwigTemplate_ff952e32bbeb27e5323b50d496523468d1cc4a2629bdd3f64c7922d7ff14b702 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":solicitud:buscarinmuebles.html.twig", 1);
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
        echo "
    <div id=\"container\">
        <br/>

        ";
        // line 8
        if ( !(null === (isset($context["idProspecto"]) ? $context["idProspecto"] : null))) {
            // line 9
            echo "        <div class=\"row\">
            <a href=\"#\" onclick=\"portafolioInmuebles()\" class=\"btn blue darken-4 right\"><i class=\"material-icons left\">person_add</i>Agregar propiedades a portafolio</a>
        </div>
        ";
        }
        // line 13
        echo "
        <div class=\"row\">
            <table class=\"striped\">
                <thead>
                <tr>
                    <th data-field=\"id\"><p>Propiedad</p></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                ";
        // line 25
        $context["index"] = 0;
        // line 26
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inmuebles"]) ? $context["inmuebles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
            // line 27
            echo "                    <tr>
                        <td>
                            ";
            // line 29
            if ((twig_length_filter($this->env, $this->getAttribute($context["inmueble"], "Imagenes", array())) > 0)) {
                // line 30
                echo "                                <img class=\"imginmueble\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["inmueble"], "Imagenes", array()), 0, array(), "array"), "getWebPath", array(), "method"), "html", null, true);
                echo "\">
                            ";
            }
            // line 32
            echo "                            <p><i class=\"material-icons left\">camera_alt</i>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["inmueble"], "imagenes", array())), "html", null, true);
            echo "</p>
                        </td>
                        <td>
                            <h5>ID: ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "legacyid", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "nombreid", array()), "html", null, true);
            echo " </h5>
                            <h5>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idTipoInmueble", array()), "nombre", array()), "html", null, true);
            echo " en ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
            echo "</h5>
                            <ul>
                                <li><i class=\"material-icons left\">location_on</i>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMunicipio", array()), "nombre", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idEstado", array()), "nombre", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "calle", array()), "html", null, true);
            echo "</li>
                                <li>Zona: ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idZona", array()), "nombre", array()), "html", null, true);
            echo "</li>
                                <br>
                                <li>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMoneda", array()), "simbolo", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "precio", array()), 2, ".", ","), "html", null, true);
            echo "</li>
                                <li></li>
                                <li>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "recamaras", array()), "html", null, true);
            echo " Recámaras</li>

                                <li>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "banos", array()), "html", null, true);
            echo " Baño(s)</li>

                                ";
            // line 47
            if ( !(null === $this->getAttribute($context["inmueble"], "mediobanos", array()))) {
                // line 48
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "mediobanos", array()), "html", null, true);
                echo " Medios Baño(s)<br>
                                ";
            }
            // line 50
            echo "
                                ";
            // line 51
            if ( !(null === $this->getAttribute($context["inmueble"], "metrosconstruccion", array()))) {
                // line 52
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosconstruccion", array()), "html", null, true);
                echo " Metros de Construcción<br>
                                ";
            }
            // line 54
            echo "
                                ";
            // line 55
            if ( !(null === $this->getAttribute($context["inmueble"], "metrosterreno", array()))) {
                // line 56
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosterreno", array()), "html", null, true);
                echo " Metros de Terreno<br>
                                ";
            }
            // line 58
            echo "
                                ";
            // line 59
            if ( !(null === $this->getAttribute($context["inmueble"], "comision", array()))) {
                // line 60
                echo "                                    <li>Comisión: ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "comision", array()), 2, ".", ","), "html", null, true);
                echo "
                                        ";
                // line 61
                if (($this->getAttribute($this->getAttribute($context["inmueble"], "idOperacionInmueble", array()), "idOperacionInmueble", array()) == 2)) {
                    // line 62
                    echo "                                            %
                                        ";
                } else {
                    // line 64
                    echo "                                            Mensualidades
                                        ";
                }
                // line 66
                echo "                                    </li>
                                ";
            }
            // line 68
            echo "
                                ";
            // line 69
            if (($this->getAttribute($context["inmueble"], "plantas", array()) > 0)) {
                // line 70
                echo "                                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "plantas", array()), "html", null, true);
                echo " Plantas</li>
                                ";
            }
            // line 72
            echo "
                                <br>
                                <li>Alta por: ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idUsuario", array()), "nombre", array()), "html", null, true);
            echo "</li>

                                <br>
                                ";
            // line 77
            if ( !(null === $this->getAttribute($context["inmueble"], "fechaModificacion", array()))) {
                // line 78
                echo "                                    <li>Modificado el ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["inmueble"], "fechaModificacion", array()), "d/m/Y"), "html", null, true);
                echo "</li>
                                    <li>Por ";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idUsuariomodifico", array()), "nombre", array()), "html", null, true);
                echo "</li>
                                ";
            }
            // line 81
            echo "
                                ";
            // line 82
            if ( !(null === $this->getAttribute($context["inmueble"], "porcentajecompartir", array()))) {
                // line 83
                echo "                                    <li>Porcentaje a compartir: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "porcentajecompartir", array()), "html", null, true);
                echo " %</li>
                                ";
            }
            // line 85
            echo "                            </ul>
                        </td>
                        <td>
                            ";
            // line 88
            if ( !(null === (isset($context["idProspecto"]) ? $context["idProspecto"] : null))) {
                // line 89
                echo "                            <input type=\"checkbox\" id=\"chkPortafolio";
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
                echo "\" />
                            <label for=\"chkPortafolio";
                // line 90
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : null), "html", null, true);
                echo "\">Agregar a portafolio</label>
                            ";
            } else {
                // line 92
                echo "                            <a href=\"#\" onclick=\"var url; if (window.location.href.indexOf('#') > 0) { url = window.location.href.substring(0, window.location.href.indexOf('#')); } else { url = window.location.href; }  window.location.href='";
                echo $this->env->getExtension('routing')->getPath("prospecto_asignarpropiedad", array());
                echo "?idInmueble=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
                echo "&url=' + url.replace(/&/g, 'AMP') + 'SHARPtr";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
                echo "';\" class=\"tooltipped\" data-tooltip=\"Agregar prospecto\" data-position=\"top\"><i class=\"material-icons left\">person_add</i></a>
                            ";
            }
            // line 94
            echo "                        </td>
                    </tr>
                    ";
            // line 96
            $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
            // line 97
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                </tbody>
            </table>
        </div>

        ";
        // line 102
        if ( !(null === (isset($context["idProspecto"]) ? $context["idProspecto"] : null))) {
            // line 103
            echo "        <div class=\"row\">
            <a href=\"#\" onclick=\"portafolioInmuebles()\" class=\"btn blue darken-4 right\"><i class=\"material-icons left\">person_add</i>Agregar propiedades a portafolio</a>
        </div>
        ";
        }
        // line 107
        echo "    </div>

    <script>
        ";
        // line 110
        if ( !(null === (isset($context["idProspecto"]) ? $context["idProspecto"] : null))) {
            // line 111
            echo "        function portafolioInmuebles()
        {
            var inmueblesIds=\"\";
            var checkbox;

            ";
            // line 116
            $context["index"] = 0;
            // line 117
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inmuebles"]) ? $context["inmuebles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
                // line 118
                echo "
            checkbox = document.getElementById(\"chkPortafolio";
                // line 119
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : null), "html", null, true);
                echo "\");
            if (checkbox.checked == true)
            {
                inmueblesIds=inmueblesIds+checkbox.value + \",\";
            }

            ";
                // line 125
                $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
                // line 126
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "
            inmueblesIds = inmueblesIds.substring(0, inmueblesIds.length - 1);

            if (inmueblesIds==\"\")
            {
                alert(\"No hay propiedades seleccionadas.\");
            }
            else {
                //var url = window.location.href;
                window.location.href = \"";
            // line 136
            echo $this->env->getExtension('routing')->getPath("prospecto_asignarpropiedades", array());
            echo "?idInmuebles=\" + inmueblesIds + \"&idProspecto=";
            echo twig_escape_filter($this->env, (isset($context["idProspecto"]) ? $context["idProspecto"] : null), "html", null, true);
            echo "\";
            }
        }
        ";
        }
        // line 140
        echo "    </script>
";
    }

    // line 143
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 144
        echo "
    <style>
        body {
            background: white;
            height: 90vh;
        }
        p
        {
            font-size: small;
        }
        .imginmueble
        {
            width: 160px;
            height: 128px;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return ":solicitud:buscarinmuebles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 144,  348 => 143,  343 => 140,  334 => 136,  323 => 127,  317 => 126,  315 => 125,  306 => 119,  303 => 118,  298 => 117,  296 => 116,  289 => 111,  287 => 110,  282 => 107,  276 => 103,  274 => 102,  268 => 98,  262 => 97,  260 => 96,  256 => 94,  246 => 92,  241 => 90,  234 => 89,  232 => 88,  227 => 85,  221 => 83,  219 => 82,  216 => 81,  211 => 79,  206 => 78,  204 => 77,  198 => 74,  194 => 72,  188 => 70,  186 => 69,  183 => 68,  179 => 66,  175 => 64,  171 => 62,  169 => 61,  164 => 60,  162 => 59,  159 => 58,  153 => 56,  151 => 55,  148 => 54,  142 => 52,  140 => 51,  137 => 50,  131 => 48,  129 => 47,  124 => 45,  119 => 43,  112 => 41,  107 => 39,  99 => 38,  92 => 36,  86 => 35,  79 => 32,  73 => 30,  71 => 29,  67 => 27,  62 => 26,  60 => 25,  46 => 13,  40 => 9,  38 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div id="container">*/
/*         <br/>*/
/* */
/*         {% if idProspecto is not null %}*/
/*         <div class="row">*/
/*             <a href="#" onclick="portafolioInmuebles()" class="btn blue darken-4 right"><i class="material-icons left">person_add</i>Agregar propiedades a portafolio</a>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         <div class="row">*/
/*             <table class="striped">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th data-field="id"><p>Propiedad</p></th>*/
/*                     <th></th>*/
/*                     <th></th>*/
/*                 </tr>*/
/*                 </thead>*/
/* */
/*                 <tbody>*/
/*                 {% set index=0 %}*/
/*                 {% for inmueble in inmuebles %}*/
/*                     <tr>*/
/*                         <td>*/
/*                             {% if (inmueble.Imagenes|length>0) %}*/
/*                                 <img class="imginmueble" src="{{ inmueble.Imagenes[0].getWebPath() }}">*/
/*                             {% endif %}*/
/*                             <p><i class="material-icons left">camera_alt</i>{{ inmueble.imagenes | length }}</p>*/
/*                         </td>*/
/*                         <td>*/
/*                             <h5>ID: {{ inmueble.legacyid }} {{ inmueble.nombreid }} </h5>*/
/*                             <h5>{{ inmueble.idTipoInmueble.nombre }} en {{ inmueble.idOperacionInmueble.nombre }}</h5>*/
/*                             <ul>*/
/*                                 <li><i class="material-icons left">location_on</i>{{ inmueble.idMunicipio.nombre }}, {{ inmueble.idEstado.nombre }}, {{ inmueble.calle }}</li>*/
/*                                 <li>Zona: {{ inmueble.idZona.nombre }}</li>*/
/*                                 <br>*/
/*                                 <li>{{ inmueble.idMoneda.simbolo }} {{inmueble.precio|number_format(2, '.', ',')}}</li>*/
/*                                 <li></li>*/
/*                                 <li>{{ inmueble.recamaras }} Recámaras</li>*/
/* */
/*                                 <li>{{ inmueble.banos }} Baño(s)</li>*/
/* */
/*                                 {% if inmueble.mediobanos is not null %}*/
/*                                     {{ inmueble.mediobanos }} Medios Baño(s)<br>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if inmueble.metrosconstruccion is not null %}*/
/*                                     {{ inmueble.metrosconstruccion }} Metros de Construcción<br>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if inmueble.metrosterreno is not null %}*/
/*                                     {{ inmueble.metrosterreno }} Metros de Terreno<br>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if inmueble.comision is not null %}*/
/*                                     <li>Comisión: {{ inmueble.comision | number_format(2, '.', ',') }}*/
/*                                         {% if inmueble.idOperacionInmueble.idOperacionInmueble == 2 %}*/
/*                                             %*/
/*                                         {%  else %}*/
/*                                             Mensualidades*/
/*                                         {%  endif %}*/
/*                                     </li>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if inmueble.plantas > 0 %}*/
/*                                     <li>{{ inmueble.plantas }} Plantas</li>*/
/*                                 {% endif %}*/
/* */
/*                                 <br>*/
/*                                 <li>Alta por: {{ inmueble.idUsuario.nombre }}</li>*/
/* */
/*                                 <br>*/
/*                                 {% if inmueble.fechaModificacion is not null %}*/
/*                                     <li>Modificado el {{ inmueble.fechaModificacion | date('d/m/Y') }}</li>*/
/*                                     <li>Por {{ inmueble.idUsuariomodifico.nombre }}</li>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if inmueble.porcentajecompartir is not null %}*/
/*                                     <li>Porcentaje a compartir: {{ inmueble.porcentajecompartir }} %</li>*/
/*                                 {% endif %}*/
/*                             </ul>*/
/*                         </td>*/
/*                         <td>*/
/*                             {% if idProspecto is not null %}*/
/*                             <input type="checkbox" id="chkPortafolio{{ index }}" value="{{ inmueble.idInmueble }}" />*/
/*                             <label for="chkPortafolio{{ index }}">Agregar a portafolio</label>*/
/*                             {% else %}*/
/*                             <a href="#" onclick="var url; if (window.location.href.indexOf('#') > 0) { url = window.location.href.substring(0, window.location.href.indexOf('#')); } else { url = window.location.href; }  window.location.href='{{ path('prospecto_asignarpropiedad', {}) }}?idInmueble={{ inmueble.idInmueble }}&url=' + url.replace(/&/g, 'AMP') + 'SHARPtr{{ inmueble.idInmueble }}';" class="tooltipped" data-tooltip="Agregar prospecto" data-position="top"><i class="material-icons left">person_add</i></a>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     {% set index=index+1 %}*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/* */
/*         {% if idProspecto is not null %}*/
/*         <div class="row">*/
/*             <a href="#" onclick="portafolioInmuebles()" class="btn blue darken-4 right"><i class="material-icons left">person_add</i>Agregar propiedades a portafolio</a>*/
/*         </div>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     <script>*/
/*         {% if idProspecto is not null %}*/
/*         function portafolioInmuebles()*/
/*         {*/
/*             var inmueblesIds="";*/
/*             var checkbox;*/
/* */
/*             {% set index = 0 %}*/
/*             {% for inmueble in inmuebles %}*/
/* */
/*             checkbox = document.getElementById("chkPortafolio{{ index }}");*/
/*             if (checkbox.checked == true)*/
/*             {*/
/*                 inmueblesIds=inmueblesIds+checkbox.value + ",";*/
/*             }*/
/* */
/*             {% set index = index + 1 %}*/
/*             {% endfor %}*/
/* */
/*             inmueblesIds = inmueblesIds.substring(0, inmueblesIds.length - 1);*/
/* */
/*             if (inmueblesIds=="")*/
/*             {*/
/*                 alert("No hay propiedades seleccionadas.");*/
/*             }*/
/*             else {*/
/*                 //var url = window.location.href;*/
/*                 window.location.href = "{{ path ('prospecto_asignarpropiedades', {}) }}?idInmuebles=" + inmueblesIds + "&idProspecto={{ idProspecto }}";*/
/*             }*/
/*         }*/
/*         {% endif %}*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/*     <style>*/
/*         body {*/
/*             background: white;*/
/*             height: 90vh;*/
/*         }*/
/*         p*/
/*         {*/
/*             font-size: small;*/
/*         }*/
/*         .imginmueble*/
/*         {*/
/*             width: 160px;*/
/*             height: 128px;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
