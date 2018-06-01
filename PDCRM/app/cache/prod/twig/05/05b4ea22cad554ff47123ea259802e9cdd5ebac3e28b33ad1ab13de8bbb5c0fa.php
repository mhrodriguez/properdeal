<?php

/* :consultarinmueble:resultados.html.twig */
class __TwigTemplate_e58d5680687e7626ce76a4d9e4057d4024596540caec29dd50df324369f376a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":consultarinmueble:resultados.html.twig", 1);
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
        echo "<div id=\"wrapper\">
    <div id=\"container\">
        <!-- Page Layout here -->
        <br/>
        ";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["inmuebles"]) ? $context["inmuebles"] : null)) == 0)) {
            // line 9
            echo "            <i class=\"medium material-icons\" style=\"color:#ffd600\">warning</i>
            <p>No se encontraron propiedades con los criterios seleccionados.</p>
        ";
        }
        // line 12
        echo "        <div class=\"row\">
            <p><a href=\"#\" onclick=\"enviarInmuebles()\"><i class=\"material-icons left\">email</i>Enviar propiedades seleccionadas</a></p>
        </div>
        <div class=\"row\">
            <table class=\"striped\">
                <tbody>
                ";
        // line 18
        $context["index"] = 0;
        // line 19
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inmuebles"]) ? $context["inmuebles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
            // line 20
            echo "                <tr>
                    <td rowspan=\"1\" style=\"width:250px\">
                        ";
            // line 22
            if ((twig_length_filter($this->env, $this->getAttribute($context["inmueble"], "Imagenes", array())) > 0)) {
                // line 23
                echo "                        <a href=\"#\"><img class=\"imginmueble\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["inmueble"], "Imagenes", array()), 0, array(), "array"), "getWebPath", array(), "method"), "html", null, true);
                echo "\"></a>
                        ";
            }
            // line 25
            echo "                    </td>
                    <td>
                        <h5>ID: ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "legacyid", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "nombreid", array()), "html", null, true);
            echo "</h5>
                        <h5>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idTipoInmueble", array()), "nombre", array()), "html", null, true);
            echo " en ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
            echo "</h5>
                        <p>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMunicipio", array()), "nombre", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idEstado", array()), "nombre", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "calle", array()), "html", null, true);
            echo "</p>
                        <ul>
                            ";
            // line 31
            if ( !(null === $this->getAttribute($context["inmueble"], "recamaras", array()))) {
                // line 32
                echo "                                ";
                if (($this->getAttribute($context["inmueble"], "recamaras", array()) > 0)) {
                    // line 33
                    echo "                                    <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "recamaras", array()), "html", null, true);
                    echo " Recámara(s)</li>
                                ";
                }
                // line 35
                echo "                            ";
            }
            // line 36
            echo "
                            ";
            // line 37
            if ( !(null === $this->getAttribute($context["inmueble"], "metrosconstruccion", array()))) {
                // line 38
                echo "                                ";
                if (($this->getAttribute($context["inmueble"], "metrosconstruccion", array()) > 0)) {
                    // line 39
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosconstruccion", array()), "html", null, true);
                    echo " m2 de Construcción<br>
                                ";
                }
                // line 41
                echo "                            ";
            }
            // line 42
            echo "
                            ";
            // line 43
            if ( !(null === $this->getAttribute($context["inmueble"], "metrosterreno", array()))) {
                // line 44
                echo "                                ";
                if (($this->getAttribute($context["inmueble"], "metrosterreno", array()) > 0)) {
                    // line 45
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosterreno", array()), "html", null, true);
                    echo " m2 de Terreno<br>
                                ";
                }
                // line 47
                echo "                            ";
            }
            // line 48
            echo "
                            ";
            // line 49
            if (($this->getAttribute($context["inmueble"], "banos", array()) > 0)) {
                // line 50
                echo "                                <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "banos", array()), "html", null, true);
                echo " Baño(s)</li>
                            ";
            }
            // line 52
            echo "
                            ";
            // line 53
            if ( !(null === $this->getAttribute($context["inmueble"], "mediobanos", array()))) {
                // line 54
                echo "                                ";
                if (($this->getAttribute($context["inmueble"], "mediobanos", array()) > 0)) {
                    // line 55
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "mediobanos", array()), "html", null, true);
                    echo " Medios Baño(s)<br>
                                ";
                }
                // line 57
                echo "                            ";
            }
            // line 58
            echo "
                            ";
            // line 59
            if ( !(null === $this->getAttribute($context["inmueble"], "plantas", array()))) {
                // line 60
                echo "                                ";
                if (($this->getAttribute($context["inmueble"], "plantas", array()) > 0)) {
                    // line 61
                    echo "                                    <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "plantas", array()), "html", null, true);
                    echo " Plantas</li>
                                ";
                }
                // line 63
                echo "                            ";
            }
            // line 64
            echo "                        </ul>
                    </td>
                    <td style=\"width:300px\">
                        <h5 class=\"right-align\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMoneda", array()), "simbolo", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "precio", array()), 2, ".", ","), "html", null, true);
            echo "</h5>
                        <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inmueble_detalle", array("id" => $this->getAttribute($context["inmueble"], "idInmueble", array()))), "html", null, true);
            echo "\"  class=\"waves-effect waves-light btn right blue darken-4\">
                            Ver Detalles
                            <i class=\"material-icons left\">search</i>
                        </a>

                        <p class=\"right-align\">
                            <br/><br/>
                            <input type=\"checkbox\" id=\"chkEnviar";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
            echo "\" />
                            <label for=\"chkEnviar";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : null), "html", null, true);
            echo "\">Enviar</label>
                        </p>
                    </td>
                </tr>
                ";
            // line 80
            $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
            // line 81
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                </tbody>
            </table>
        </div>
    </div>

    <script>
        function enviarInmuebles()
        {
            var inmueblesIds=\"\";
            var checkbox;

            ";
        // line 93
        $context["index"] = 0;
        // line 94
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inmuebles"]) ? $context["inmuebles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
            // line 95
            echo "
            checkbox = document.getElementById(\"chkEnviar";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : null), "html", null, true);
            echo "\");
            if (checkbox.checked == true)
            {
                inmueblesIds=inmueblesIds+checkbox.value + \",\";
            }

            ";
            // line 102
            $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
            // line 103
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
            inmueblesIds = inmueblesIds.substring(0, inmueblesIds.length - 1);

            if (inmueblesIds==\"\")
            {
                alert(\"No hay propiedades seleccionadas.\");
            }
            else {
                //window.location.href = \"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("mensaje_enviarinmueble", array());
        echo "?idInmueble=\" + inmueblesIds + \"&tipoMensaje=1\";
                var url = window.location.href;
                window.location.href = \"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("ids_index", array());
        echo "?idInmueble=\" + inmueblesIds + \"&url=\" + url.replace(/&/g, 'AMP');
            }
        }
    </script>

</div>

";
    }

    // line 123
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 124
        echo "<style>
    body {
        background: white;
        height: 100vh;
    }
    p
    {
        font-size: small;
    }
    .imginmueble
    {
        width: 200px;
        height: 160px;
    }
</style>
";
    }

    public function getTemplateName()
    {
        return ":consultarinmueble:resultados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 124,  299 => 123,  287 => 114,  282 => 112,  272 => 104,  266 => 103,  264 => 102,  255 => 96,  252 => 95,  247 => 94,  245 => 93,  232 => 82,  226 => 81,  224 => 80,  217 => 76,  211 => 75,  201 => 68,  195 => 67,  190 => 64,  187 => 63,  181 => 61,  178 => 60,  176 => 59,  173 => 58,  170 => 57,  164 => 55,  161 => 54,  159 => 53,  156 => 52,  150 => 50,  148 => 49,  145 => 48,  142 => 47,  136 => 45,  133 => 44,  131 => 43,  128 => 42,  125 => 41,  119 => 39,  116 => 38,  114 => 37,  111 => 36,  108 => 35,  102 => 33,  99 => 32,  97 => 31,  88 => 29,  82 => 28,  76 => 27,  72 => 25,  66 => 23,  64 => 22,  60 => 20,  55 => 19,  53 => 18,  45 => 12,  40 => 9,  38 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div id="wrapper">*/
/*     <div id="container">*/
/*         <!-- Page Layout here -->*/
/*         <br/>*/
/*         {% if (inmuebles|length == 0) %}*/
/*             <i class="medium material-icons" style="color:#ffd600">warning</i>*/
/*             <p>No se encontraron propiedades con los criterios seleccionados.</p>*/
/*         {% endif %}*/
/*         <div class="row">*/
/*             <p><a href="#" onclick="enviarInmuebles()"><i class="material-icons left">email</i>Enviar propiedades seleccionadas</a></p>*/
/*         </div>*/
/*         <div class="row">*/
/*             <table class="striped">*/
/*                 <tbody>*/
/*                 {% set index = 0 %}*/
/*                 {% for inmueble in inmuebles %}*/
/*                 <tr>*/
/*                     <td rowspan="1" style="width:250px">*/
/*                         {% if (inmueble.Imagenes|length>0) %}*/
/*                         <a href="#"><img class="imginmueble" src="{{ inmueble.Imagenes[0].getWebPath() }}"></a>*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td>*/
/*                         <h5>ID: {{ inmueble.legacyid }} {{ inmueble.nombreid }}</h5>*/
/*                         <h5>{{ inmueble.idTipoInmueble.nombre }} en {{ inmueble.idOperacionInmueble.nombre }}</h5>*/
/*                         <p>{{ inmueble.idMunicipio.nombre }}, {{ inmueble.idEstado.nombre }}, {{ inmueble.calle }}</p>*/
/*                         <ul>*/
/*                             {% if inmueble.recamaras is not null %}*/
/*                                 {% if inmueble.recamaras > 0 %}*/
/*                                     <li>{{ inmueble.recamaras }} Recámara(s)</li>*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/* */
/*                             {% if inmueble.metrosconstruccion is not null %}*/
/*                                 {% if inmueble.metrosconstruccion > 0 %}*/
/*                                     {{ inmueble.metrosconstruccion }} m2 de Construcción<br>*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/* */
/*                             {% if inmueble.metrosterreno is not null %}*/
/*                                 {% if inmueble.metrosterreno > 0 %}*/
/*                                     {{ inmueble.metrosterreno }} m2 de Terreno<br>*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/* */
/*                             {% if inmueble.banos > 0 %}*/
/*                                 <li>{{ inmueble.banos }} Baño(s)</li>*/
/*                             {% endif %}*/
/* */
/*                             {% if inmueble.mediobanos is not null %}*/
/*                                 {% if inmueble.mediobanos > 0 %}*/
/*                                     {{ inmueble.mediobanos }} Medios Baño(s)<br>*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/* */
/*                             {% if inmueble.plantas is not null %}*/
/*                                 {% if inmueble.plantas > 0 %}*/
/*                                     <li>{{ inmueble.plantas }} Plantas</li>*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/*                         </ul>*/
/*                     </td>*/
/*                     <td style="width:300px">*/
/*                         <h5 class="right-align">{{ inmueble.idMoneda.simbolo }} {{ inmueble.precio|number_format(2, '.', ',') }}</h5>*/
/*                         <a href="{{ path('inmueble_detalle', {'id': inmueble.idInmueble}) }}"  class="waves-effect waves-light btn right blue darken-4">*/
/*                             Ver Detalles*/
/*                             <i class="material-icons left">search</i>*/
/*                         </a>*/
/* */
/*                         <p class="right-align">*/
/*                             <br/><br/>*/
/*                             <input type="checkbox" id="chkEnviar{{ index }}" value="{{ inmueble.idInmueble }}" />*/
/*                             <label for="chkEnviar{{ index }}">Enviar</label>*/
/*                         </p>*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% set index=index+1 %}*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script>*/
/*         function enviarInmuebles()*/
/*         {*/
/*             var inmueblesIds="";*/
/*             var checkbox;*/
/* */
/*             {% set index = 0 %}*/
/*             {% for inmueble in inmuebles %}*/
/* */
/*             checkbox = document.getElementById("chkEnviar{{ index }}");*/
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
/*                 //window.location.href = "{{ path ('mensaje_enviarinmueble', {}) }}?idInmueble=" + inmueblesIds + "&tipoMensaje=1";*/
/*                 var url = window.location.href;*/
/*                 window.location.href = "{{ path ('ids_index', {}) }}?idInmueble=" + inmueblesIds + "&url=" + url.replace(/&/g, 'AMP');*/
/*             }*/
/*         }*/
/*     </script>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     body {*/
/*         background: white;*/
/*         height: 100vh;*/
/*     }*/
/*     p*/
/*     {*/
/*         font-size: small;*/
/*     }*/
/*     .imginmueble*/
/*     {*/
/*         width: 200px;*/
/*         height: 160px;*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* */
/* */
