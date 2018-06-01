<?php

/* inmueble/show.html.twig.old */
class __TwigTemplate_e921bdcd0b11888d18d9ee4c12444bfd4b113d987f447b6f111ba3834d868498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", "inmueble/show.html.twig.old", 1);
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
    <div style=\"background-color: white\">

        <div class=\"row\">
            <a href=\"#\" id=\"imprimir\" onclick=\"window.print();\">Imprimir</a>
        </div>

        <h4>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "ciudad", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idEstado", array()), "nombre", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "calle", array()), "html", null, true);
        echo " </h4>
        <h5>ID: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "legacyid", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "nombreid", array()), "html", null, true);
        echo "</h5>
        <h5>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idTipoInmueble", array()), "nombre", array()), "html", null, true);
        echo " en ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
        echo "</h5>

        ";
        // line 15
        if (($this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idOperacionInmueble", array()), "idOperacionInmueble", array()) == 2)) {
            // line 16
            echo "            <h5>Desde: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idMoneda", array()), "simbolo", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "precio", array()), 2, ".", ","), "html", null, true);
            echo " Hasta: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idMoneda", array()), "simbolo", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "preciohasta", array()), 2, ".", ","), "html", null, true);
            echo "</h5>
        ";
        } else {
            // line 18
            echo "            <h5>Precio: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idMoneda", array()), "simbolo", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "precio", array()), 2, ".", ","), "html", null, true);
            echo " </h5>
        ";
        }
        // line 20
        echo "
        <ul>
            <li>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "recamaras", array()), "html", null, true);
        echo " Recámara(s)</li>

            ";
        // line 24
        if ( !(null === $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosconstruccion", array()))) {
            // line 25
            echo "                ";
            if (($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosconstruccion", array()) > 0)) {
                // line 26
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosconstruccion", array()), "html", null, true);
                echo " Metros de Construcción<br>
                ";
            }
            // line 28
            echo "            ";
        }
        // line 29
        echo "
            ";
        // line 30
        if ( !(null === $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosterreno", array()))) {
            // line 31
            echo "                ";
            if (($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosterreno", array()) > 0)) {
                // line 32
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosterreno", array()), "html", null, true);
                echo " Metros de Terreno<br>
                ";
            }
            // line 34
            echo "            ";
        }
        // line 35
        echo "
            ";
        // line 36
        if (($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "plantas", array()) > 0)) {
            // line 37
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "plantas", array()), "html", null, true);
            echo " Plantas</li>
            ";
        }
        // line 39
        echo "
            <li>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "banos", array()), "html", null, true);
        echo " Baño(s)</li>

            ";
        // line 42
        if ( !(null === $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "mediobanos", array()))) {
            // line 43
            echo "                ";
            if (($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "mediobanos", array()) > 0)) {
                // line 44
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "mediobanos", array()), "html", null, true);
                echo " Medios Baño(s)<br>
                ";
            }
            // line 46
            echo "            ";
        }
        // line 47
        echo "
            ";
        // line 48
        if ( !(null === $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "espacioautos", array()))) {
            // line 49
            echo "                ";
            if (($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "espacioautos", array()) > 0)) {
                // line 50
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "espacioautos", array()), "html", null, true);
                echo " Estacionamiento(s)<br>
                ";
            }
            // line 52
            echo "            ";
        }
        // line 53
        echo "        </ul>

        ";
        // line 55
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "imagenes", array())) > 0)) {
            // line 56
            echo "            <div class=\"slider\">
                <ul class=\"slides\">
                    ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "imagenes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
                // line 59
                echo "                        <li>
                            <img src=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["imagen"], "getWebPath", array(), "method"), "html", null, true);
                echo "\"> <!-- random image -->
                            <div class=\"caption center-align\">
                                <!--h3>This is our big Tagline!</h3>
                                <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5-->
                            </div>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                </ul>
            </div>
        ";
        }
        // line 70
        echo "
        ";
        // line 71
        if ( !(null === $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "nombreedificio", array()))) {
            // line 72
            echo "            <h5>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "nombreedificio", array()), "html", null, true);
            echo "</h5>
        ";
        } else {
            // line 74
            echo "            <h5>Descripción</h5>
        ";
        }
        // line 76
        echo "        <p style=\"font-size: medium\">
            ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "descripcion", array()), "html", null, true);
        echo "
        </p>

        <h5>Características</h5>

        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "caracteristicas", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["caracteristica"]) {
            // line 83
            echo "            <p style=\"font-size: medium\">
                - ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["caracteristica"], "nombre", array()), "html", null, true);
            echo "<br>
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caracteristica'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "
        <div id=\"map-canvas\" style=\"height:400px;\" class=\"form-control z-depth-1\"></div>

        <script>
            \$(document).ready(function(){
                \$('.slider').slider({full_width: true});
            });
        </script>

        <script type=\"text/javascript\"
                src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCmOj1JP2fKLOHkJSKhAdrIVOJlovubgkY\">
        </script>

        ";
        // line 100
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "840e211_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_840e211_0") : $this->env->getExtension('asset')->getAssetUrl("js/840e211_part_1_mapsIntegracion_1.js");
            // line 101
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "840e211"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_840e211") : $this->env->getExtension('asset')->getAssetUrl("js/840e211.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 103
        echo "
        <script type=\"text/javascript\">
            var mapOptions = {
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.TERRAIN
            };

            setMapControl(document.getElementById('map-canvas'), mapOptions);

            posiciones = geocodeDireccion(\"";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "colonia", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "ciudad", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "getIdEstado", array(), "method"), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "cp", array()), "html", null, true);
        echo "\", direccionObtenida);

            function direccionObtenida(resultado, direcciones, mensajeError)
            {
                if (resultado)
                {
                    centrarEnMapa(direcciones[0]);
                }
            }
        </script>

        <!--ul>
            <li>
            </li>
            <li>
            </li>
            <li-->
        ";
        // line 132
        echo "        <!--/li-->
        <!--/ul-->
    </div>
";
    }

    public function getTemplateName()
    {
        return "inmueble/show.html.twig.old";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 132,  294 => 112,  283 => 103,  269 => 101,  265 => 100,  250 => 87,  241 => 84,  238 => 83,  234 => 82,  226 => 77,  223 => 76,  219 => 74,  213 => 72,  211 => 71,  208 => 70,  203 => 67,  190 => 60,  187 => 59,  183 => 58,  179 => 56,  177 => 55,  173 => 53,  170 => 52,  164 => 50,  161 => 49,  159 => 48,  156 => 47,  153 => 46,  147 => 44,  144 => 43,  142 => 42,  137 => 40,  134 => 39,  128 => 37,  126 => 36,  123 => 35,  120 => 34,  114 => 32,  111 => 31,  109 => 30,  106 => 29,  103 => 28,  97 => 26,  94 => 25,  92 => 24,  87 => 22,  83 => 20,  75 => 18,  63 => 16,  61 => 15,  54 => 13,  48 => 12,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div style="background-color: white">*/
/* */
/*         <div class="row">*/
/*             <a href="#" id="imprimir" onclick="window.print();">Imprimir</a>*/
/*         </div>*/
/* */
/*         <h4>{{ inmueble.ciudad }}, {{ inmueble.idEstado.nombre }}, {{ inmueble.calle }} </h4>*/
/*         <h5>ID: {{ inmueble.legacyid }} {{ inmueble.nombreid  }}</h5>*/
/*         <h5>{{ inmueble.idTipoInmueble.nombre }} en {{ inmueble.idOperacionInmueble.nombre }}</h5>*/
/* */
/*         {% if inmueble.idOperacionInmueble.idOperacionInmueble == 2 %}*/
/*             <h5>Desde: {{ inmueble.idMoneda.simbolo }} {{ inmueble.precio|number_format(2, '.', ',') }} Hasta: {{ inmueble.idMoneda.simbolo }} {{ inmueble.preciohasta|number_format(2, '.', ',') }}</h5>*/
/*         {% else %}*/
/*             <h5>Precio: {{ inmueble.idMoneda.simbolo }} {{ inmueble.precio|number_format(2, '.', ',') }} </h5>*/
/*         {% endif %}*/
/* */
/*         <ul>*/
/*             <li>{{ inmueble.recamaras }} Recámara(s)</li>*/
/* */
/*             {% if inmueble.metrosconstruccion is not null %}*/
/*                 {% if inmueble.metrosconstruccion > 0 %}*/
/*                     {{ inmueble.metrosconstruccion }} Metros de Construcción<br>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/*             {% if inmueble.metrosterreno is not null %}*/
/*                 {% if inmueble.metrosterreno > 0 %}*/
/*                     {{ inmueble.metrosterreno }} Metros de Terreno<br>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/*             {% if inmueble.plantas > 0 %}*/
/*                 <li>{{ inmueble.plantas }} Plantas</li>*/
/*             {% endif %}*/
/* */
/*             <li>{{ inmueble.banos }} Baño(s)</li>*/
/* */
/*             {% if inmueble.mediobanos is not null %}*/
/*                 {% if inmueble.mediobanos > 0 %}*/
/*                     {{ inmueble.mediobanos }} Medios Baño(s)<br>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/*             {% if inmueble.espacioautos is not null %}*/
/*                 {% if inmueble.espacioautos > 0 %}*/
/*                     {{ inmueble.espacioautos }} Estacionamiento(s)<br>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         </ul>*/
/* */
/*         {% if (inmueble.imagenes|length>0) %}*/
/*             <div class="slider">*/
/*                 <ul class="slides">*/
/*                     {% for imagen in inmueble.imagenes %}*/
/*                         <li>*/
/*                             <img src="{{ imagen.getWebPath() }}"> <!-- random image -->*/
/*                             <div class="caption center-align">*/
/*                                 <!--h3>This is our big Tagline!</h3>*/
/*                                 <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5-->*/
/*                             </div>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {% if inmueble.nombreedificio is not null  %}*/
/*             <h5>{{ inmueble.nombreedificio }}</h5>*/
/*         {% else %}*/
/*             <h5>Descripción</h5>*/
/*         {% endif %}*/
/*         <p style="font-size: medium">*/
/*             {{ inmueble.descripcion }}*/
/*         </p>*/
/* */
/*         <h5>Características</h5>*/
/* */
/*         {%  for caracteristica in inmueble.caracteristicas %}*/
/*             <p style="font-size: medium">*/
/*                 - {{ caracteristica.nombre }}<br>*/
/*             </p>*/
/*         {% endfor %}*/
/* */
/*         <div id="map-canvas" style="height:400px;" class="form-control z-depth-1"></div>*/
/* */
/*         <script>*/
/*             $(document).ready(function(){*/
/*                 $('.slider').slider({full_width: true});*/
/*             });*/
/*         </script>*/
/* */
/*         <script type="text/javascript"*/
/*                 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmOj1JP2fKLOHkJSKhAdrIVOJlovubgkY">*/
/*         </script>*/
/* */
/*         {% javascripts '@FrameworkBundle/Resources/public/js/*'%}*/
/*         <script src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/* */
/*         <script type="text/javascript">*/
/*             var mapOptions = {*/
/*                 zoom: 14,*/
/*                 mapTypeId: google.maps.MapTypeId.TERRAIN*/
/*             };*/
/* */
/*             setMapControl(document.getElementById('map-canvas'), mapOptions);*/
/* */
/*             posiciones = geocodeDireccion("{{ inmueble.colonia }} {{ inmueble.ciudad }} {{ inmueble.getIdEstado().nombre }} {{ inmueble.cp }}", direccionObtenida);*/
/* */
/*             function direccionObtenida(resultado, direcciones, mensajeError)*/
/*             {*/
/*                 if (resultado)*/
/*                 {*/
/*                     centrarEnMapa(direcciones[0]);*/
/*                 }*/
/*             }*/
/*         </script>*/
/* */
/*         <!--ul>*/
/*             <li>*/
/*             </li>*/
/*             <li>*/
/*             </li>*/
/*             <li-->*/
/*         {# form_start(delete_form) }}*/
/*             <input type="submit" value="Delete">*/
/*         {{ form_end(delete_form) #}*/
/*         <!--/li-->*/
/*         <!--/ul-->*/
/*     </div>*/
/* {% endblock %}*/
/* */
