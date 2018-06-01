<?php

/* :buscarinmueble:show.html.twig */
class __TwigTemplate_7dd47ff59c666f2373899ca8e4a56f5247d16b7a6c204cb46669a3c9da6a685a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":buscarinmueble:show.html.twig", 1);
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
        echo "    <div style=\"background-color: white\">
        <br>
        <h4>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "calle", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idEstado", array()), "nombre", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idMunicipio", array()), "nombre", array()), "html", null, true);
        echo "</h4>
        <h5>ID: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idInmueble", array()), "html", null, true);
        echo " Operación: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
        echo "</h5>

        <ul>
            <li>CP: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "cp", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "recamaras", array()), "html", null, true);
        echo " Recámaras</li>
            <li>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosconstruccion", array()), "html", null, true);
        echo " Metros de Construcción</li>
            <li>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosterreno", array()), "html", null, true);
        echo " Metros de Terreno</li>
            ";
        // line 14
        if (($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "plantas", array()) > 0)) {
            // line 15
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "plantas", array()), "html", null, true);
            echo " Plantas</li>
            ";
        }
        // line 17
        echo "        </ul>

        ";
        // line 19
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "imagenes", array())) > 0)) {
            // line 20
            echo "        <div class=\"slider\">
            <ul class=\"slides\">

                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "imagenes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
                // line 24
                echo "                    <li>
                        <img src=\"";
                // line 25
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
            // line 32
            echo "            </ul>
        </div>
        ";
        }
        // line 35
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
        // line 48
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "840e211_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_840e211_0") : $this->env->getExtension('asset')->getAssetUrl("js/840e211_part_1_mapsIntegracion_1.js");
            // line 49
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
        // line 51
        echo "
        <script type=\"text/javascript\">
            var mapOptions = {
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.TERRAIN
            };

            setMapControl(document.getElementById('map-canvas'), mapOptions);

            posiciones = geocodeDireccion(\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "getIdColonia", array(), "method"), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "getIdMunicipio", array(), "method"), "nombre", array()), "html", null, true);
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
        // line 80
        echo "        <!--/li-->
        <!--/ul-->
    </div>
";
    }

    public function getTemplateName()
    {
        return ":buscarinmueble:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 80,  155 => 60,  144 => 51,  130 => 49,  126 => 48,  111 => 35,  106 => 32,  93 => 25,  90 => 24,  86 => 23,  81 => 20,  79 => 19,  75 => 17,  69 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  43 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div style="background-color: white">*/
/*         <br>*/
/*         <h4>{{ inmueble.calle }}, {{ inmueble.idEstado.nombre }}, {{ inmueble.idMunicipio.nombre }}</h4>*/
/*         <h5>ID: {{ inmueble.idInmueble }} Operación: {{ inmueble.idOperacionInmueble.nombre }}</h5>*/
/* */
/*         <ul>*/
/*             <li>CP: {{ inmueble.cp }}</li>*/
/*             <li>{{ inmueble.recamaras }} Recámaras</li>*/
/*             <li>{{ inmueble.metrosconstruccion }} Metros de Construcción</li>*/
/*             <li>{{ inmueble.metrosterreno }} Metros de Terreno</li>*/
/*             {% if inmueble.plantas > 0 %}*/
/*                 <li>{{ inmueble.plantas }} Plantas</li>*/
/*             {% endif %}*/
/*         </ul>*/
/* */
/*         {% if (inmueble.imagenes|length>0) %}*/
/*         <div class="slider">*/
/*             <ul class="slides">*/
/* */
/*                 {% for imagen in inmueble.imagenes %}*/
/*                     <li>*/
/*                         <img src="{{ imagen.getWebPath() }}"> <!-- random image -->*/
/*                         <div class="caption center-align">*/
/*                             <!--h3>This is our big Tagline!</h3>*/
/*                             <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5-->*/
/*                         </div>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*         {% endif %}*/
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
/*             posiciones = geocodeDireccion("{{ inmueble.getIdColonia().nombre }} {{ inmueble.getIdMunicipio().nombre }} {{ inmueble.getIdEstado().nombre }} {{ inmueble.cp }}", direccionObtenida);*/
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
