<?php

/* :inmueble:show.html.twig */
class __TwigTemplate_46c3638de61829f7cf3f201ed94fb3c2154eb807a271d397530f394936a9c55b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":inmueble:show.html.twig", 1);
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
        echo "    <div style=\"background-color:white; margin: 3em;\">
        <div class=\"row\">
            <a href=\"#\" id=\"imprimir\" onclick=\"window.print();\">Imprimir</a>
        </div>

        <div class=\"row z-depth-1\">
            <div class=\"col s7 m7 l7\">
                ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6d7b20b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d7b20b_0") : $this->env->getExtension('asset')->getAssetUrl("images/6d7b20b_logotipo2_1.jpg");
            // line 12
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Logo\" style=\"width:250px;margin: 10px;\"/>
                ";
        } else {
            // asset "6d7b20b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d7b20b") : $this->env->getExtension('asset')->getAssetUrl("images/6d7b20b.jpg");
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Logo\" style=\"width:250px;margin: 10px;\"/>
                ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "            </div>
            <div class=\"col s5 m5 l5\">
                <h5>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "IdUsuario", array()), "nombre", array()), "html", null, true);
        echo "</h5>
                <label>Móvil: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "IdUsuario", array()), "celular", array()), "html", null, true);
        echo "</label><br>
                <label>E-mail: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "IdUsuario", array()), "email", array()), "html", null, true);
        echo "</label><br><br>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col s6 m6 l6\">
                <h5>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "nombreid", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idMunicipio", array()), "nombre", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idEstado", array()), "nombre", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "cp", array()), "html", null, true);
        echo " </h5>
                ";
        // line 25
        if ( !(null === $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "nombreedificio", array()))) {
            // line 26
            echo "                    <h5>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "nombreedificio", array()), "html", null, true);
            echo "</h5>
                ";
        }
        // line 28
        echo "
                ";
        // line 29
        if (($this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idOperacionInmueble", array()), "idOperacionInmueble", array()) == 2)) {
            // line 30
            echo "                    <h5>
                        ";
            // line 31
            if (($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "precio", array()) > 0)) {
                // line 32
                echo "                            ";
                if (($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "preciohasta", array()) > 0)) {
                    echo "Desde:";
                }
                // line 33
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idMoneda", array()), "simbolo", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "precio", array()), 2, ".", ","), "html", null, true);
                echo "
                        ";
            }
            // line 35
            echo "                        ";
            if (($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "preciohasta", array()) > 0)) {
                // line 36
                echo "                            &nbsp;&nbsp;Hasta: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idMoneda", array()), "simbolo", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "preciohasta", array()), 2, ".", ","), "html", null, true);
                echo "
                        ";
            }
            // line 38
            echo "                    </h5>
                ";
        } else {
            // line 40
            echo "                    <h5>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idMoneda", array()), "simbolo", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "precio", array()), 2, ".", ","), "html", null, true);
            echo " </h5>
                ";
        }
        // line 42
        echo "
                <br>

                <label><b>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idTipoInmueble", array()), "nombre", array()), "html", null, true);
        echo " en ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
        echo "</b></label><br>
                <label>ID: ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "legacyid", array()), "html", null, true);
        echo "</label><br><br>

                <label><b>Información de la Propiedad:</b></label>
                <br>
                <div class=\"row\">
                <div class=\"col s6 m6 l6\">

                    <ul>
                        ";
        // line 54
        if ( !(null === $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "recamaras", array()))) {
            // line 55
            echo "                            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "recamaras", array()), "html", null, true);
            echo " | Recámara(s)</li>
                        ";
        }
        // line 57
        echo "
                        ";
        // line 58
        if (($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "plantas", array()) > 0)) {
            // line 59
            echo "                            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "plantas", array()), "html", null, true);
            echo " | Plantas</li>
                        ";
        }
        // line 61
        echo "
                        ";
        // line 62
        if ( !(null === $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "banos", array()))) {
            // line 63
            echo "                            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "banos", array()), "html", null, true);
            echo " | Baño(s)</li>
                        ";
        }
        // line 65
        echo "
                        ";
        // line 66
        if ( !(null === $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "mediobanos", array()))) {
            // line 67
            echo "                            ";
            if (($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "mediobanos", array()) > 0)) {
                // line 68
                echo "                                <li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "mediobanos", array()), "html", null, true);
                echo " | Medios Baño(s)</li>
                            ";
            }
            // line 70
            echo "                        ";
        }
        // line 71
        echo "
                        ";
        // line 72
        if ( !(null === $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "espacioautos", array()))) {
            // line 73
            echo "                            ";
            if (($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "espacioautos", array()) > 0)) {
                // line 74
                echo "                                <li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "espacioautos", array()), "html", null, true);
                echo " | Estacionamiento(s)</li>
                            ";
            }
            // line 76
            echo "                        ";
        }
        // line 77
        echo "
                        <li></li>

                        ";
        // line 80
        if ( !(null === $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "antiguedad", array()))) {
            // line 81
            echo "                            <li>Antiguedad: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "antiguedad", array()), "html", null, true);
            echo "</li>
                        ";
        }
        // line 83
        echo "                    </ul>
                </div>
                <div class=\"col s6 m6 l6\">
                    <label></label>
                    <ul>

                        ";
        // line 89
        if ( !(null === $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosconstruccion", array()))) {
            // line 90
            echo "                            ";
            if (($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosconstruccion", array()) > 0)) {
                // line 91
                echo "                            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosconstruccion", array()), "html", null, true);
                echo " | M2 de Construcción</li>
                            ";
            }
            // line 93
            echo "                        ";
        }
        // line 94
        echo "
                        ";
        // line 95
        if ( !(null === $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosterreno", array()))) {
            // line 96
            echo "                            ";
            if (($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosterreno", array()) > 0)) {
                // line 97
                echo "                            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosterreno", array()), "html", null, true);
                echo " | M2 de Terreno</li>
                            ";
            }
            // line 99
            echo "                        ";
        }
        // line 100
        echo "
                        ";
        // line 101
        if ( !(null === $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosfrente", array()))) {
            // line 102
            echo "                            ";
            if (($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosfrente", array()) > 0)) {
                // line 103
                echo "                                <li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosfrente", array()), "html", null, true);
                echo " | M de frente</li>
                            ";
            }
            // line 105
            echo "                        ";
        }
        // line 106
        echo "
                        ";
        // line 107
        if ( !(null === $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosfondo", array()))) {
            // line 108
            echo "                            ";
            if (($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosfondo", array()) > 0)) {
                // line 109
                echo "                                <li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosfondo", array()), "html", null, true);
                echo " | M de fondo</li>
                            ";
            }
            // line 111
            echo "                        ";
        }
        // line 112
        echo "
                    </ul>
                </div>
                </div>

                <label><b>Descripción:</b></label>
                <p>";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "descripcion", array()), "html", null, true);
        echo "</p>

                <label><b>Características:</b></label>
                <div class=\"row\">
                    <ul>
                    ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["caracteristicasDesc"]) ? $context["caracteristicasDesc"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["nombre"]) {
            // line 124
            echo "                        <li>";
            echo twig_escape_filter($this->env, $context["nombre"], "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nombre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                    </ul>
                </div>

                <div class=\"row z-depth-1 grey lighten-4\">
                    <div class=\"col s12 m12 l12\">
                        <br>
                        <label>";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "IdUsuario", array()), "nombre", array()), "html", null, true);
        echo "</label><br>
                        <label>Teléfono: ";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "IdUsuario", array()), "telefono", array()), "html", null, true);
        echo "</label><br>
                        <label>Móvil: ";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "IdUsuario", array()), "celular", array()), "html", null, true);
        echo "</label><br>
                        <label><b>";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "IdUsuario", array()), "email", array()), "html", null, true);
        echo "</b></label><br><br>
                    </div>
                </div>
            </div>

            <div class=\"col s6 m6 l6\">
                <div id=\"divImagen\" class=\"row\">
                        ";
        // line 142
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "imagenes", array())) > 0)) {
            // line 143
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "imagenes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
                // line 144
                echo "                                <div class=\"col s6 m6 l6\">
                                    <img src=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($context["imagen"], "getWebPath", array(), "method"), "html", null, true);
                echo "\" class=\"responsive-img\" style=\"width:125px; height: 80px; margin: 10px;\"/>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "                        ";
        }
        // line 149
        echo "                </div>
            </div>
        </div>

        <script>

        </script>

        ";
        // line 157
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "840e211_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_840e211_0") : $this->env->getExtension('asset')->getAssetUrl("js/840e211_part_1_mapsIntegracion_1.js");
            // line 158
            echo "        ";
        } else {
            // asset "840e211"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_840e211") : $this->env->getExtension('asset')->getAssetUrl("js/840e211.js");
            echo "        ";
        }
        unset($context["asset_url"]);
        // line 159
        echo "
        <script type=\"text/javascript\">

        </script>

        <script>

            (function() {

                var beforePrint = function() {
                    document.getElementById('divSlider').style.display='none';
                    \$('.slider').slider({full_width: false, height: 0});
                    document.getElementById('divImagen').style.display='';
                };

                var afterPrint = function() {
                    document.getElementById('divSlider').style.display='';
                    \$('.slider').slider({full_width: false, height: 600});
                    document.getElementById('divImagen').style.display='none';
                };

                if (window.matchMedia) {
                    var mediaQueryList = window.matchMedia('print');
                    mediaQueryList.addListener(function(mql) {
                        if (mql.matches) {
                            beforePrint();
                        } else {
                            afterPrint();
                        }
                    });
                }

                window.onbeforeprint = beforePrint;
                window.onafterprint = afterPrint;

            }());

        </script>
    </div>
";
    }

    // line 200
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 201
        echo "
    <style>
        body {
            background-color: white;
        }
        label
        {
            color: black !important;
        }
        p{
            line-height: 100% !important;
            text-align: justify;
        }
    </style>

    <style type=\"text/css\" media=\"@print\">@page{size:landscape;}</style>
";
    }

    public function getTemplateName()
    {
        return ":inmueble:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 201,  462 => 200,  419 => 159,  411 => 158,  407 => 157,  397 => 149,  394 => 148,  385 => 145,  382 => 144,  377 => 143,  375 => 142,  365 => 135,  361 => 134,  357 => 133,  353 => 132,  345 => 126,  336 => 124,  332 => 123,  324 => 118,  316 => 112,  313 => 111,  307 => 109,  304 => 108,  302 => 107,  299 => 106,  296 => 105,  290 => 103,  287 => 102,  285 => 101,  282 => 100,  279 => 99,  273 => 97,  270 => 96,  268 => 95,  265 => 94,  262 => 93,  256 => 91,  253 => 90,  251 => 89,  243 => 83,  237 => 81,  235 => 80,  230 => 77,  227 => 76,  221 => 74,  218 => 73,  216 => 72,  213 => 71,  210 => 70,  204 => 68,  201 => 67,  199 => 66,  196 => 65,  190 => 63,  188 => 62,  185 => 61,  179 => 59,  177 => 58,  174 => 57,  168 => 55,  166 => 54,  155 => 46,  149 => 45,  144 => 42,  136 => 40,  132 => 38,  124 => 36,  121 => 35,  113 => 33,  108 => 32,  106 => 31,  103 => 30,  101 => 29,  98 => 28,  92 => 26,  90 => 25,  80 => 24,  71 => 18,  67 => 17,  63 => 16,  59 => 14,  45 => 12,  41 => 11,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div style="background-color:white; margin: 3em;">*/
/*         <div class="row">*/
/*             <a href="#" id="imprimir" onclick="window.print();">Imprimir</a>*/
/*         </div>*/
/* */
/*         <div class="row z-depth-1">*/
/*             <div class="col s7 m7 l7">*/
/*                 {% image '@FrameworkBundle/Resources/public/images/logotipo2.jpg' %}*/
/*                 <img src="{{ asset_url }}" alt="Logo" style="width:250px;margin: 10px;"/>*/
/*                 {% endimage %}*/
/*             </div>*/
/*             <div class="col s5 m5 l5">*/
/*                 <h5>{{ inmueble.IdUsuario.nombre }}</h5>*/
/*                 <label>Móvil: {{ inmueble.IdUsuario.celular }}</label><br>*/
/*                 <label>E-mail: {{ inmueble.IdUsuario.email }}</label><br><br>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col s6 m6 l6">*/
/*                 <h5>{{ inmueble.nombreid }}, {{ inmueble.idMunicipio.nombre }}, {{ inmueble.idEstado.nombre }}, {{ inmueble.cp }} </h5>*/
/*                 {% if inmueble.nombreedificio is not null  %}*/
/*                     <h5>{{ inmueble.nombreedificio }}</h5>*/
/*                 {% endif %}*/
/* */
/*                 {% if inmueble.idOperacionInmueble.idOperacionInmueble == 2 %}*/
/*                     <h5>*/
/*                         {% if inmueble.precio > 0 %}*/
/*                             {% if inmueble.preciohasta > 0 %}Desde:{% endif %}*/
/*                             {{ inmueble.idMoneda.simbolo }} {{ inmueble.precio|number_format(2, '.', ',') }}*/
/*                         {% endif %}*/
/*                         {% if inmueble.preciohasta > 0 %}*/
/*                             &nbsp;&nbsp;Hasta: {{ inmueble.idMoneda.simbolo }} {{ inmueble.preciohasta|number_format(2, '.', ',') }}*/
/*                         {% endif %}*/
/*                     </h5>*/
/*                 {% else %}*/
/*                     <h5>{{ inmueble.idMoneda.simbolo }} {{ inmueble.precio|number_format(2, '.', ',') }} </h5>*/
/*                 {% endif %}*/
/* */
/*                 <br>*/
/* */
/*                 <label><b>{{ inmueble.idTipoInmueble.nombre }} en {{ inmueble.idOperacionInmueble.nombre }}</b></label><br>*/
/*                 <label>ID: {{ inmueble.legacyid }}</label><br><br>*/
/* */
/*                 <label><b>Información de la Propiedad:</b></label>*/
/*                 <br>*/
/*                 <div class="row">*/
/*                 <div class="col s6 m6 l6">*/
/* */
/*                     <ul>*/
/*                         {% if inmueble.recamaras is not null %}*/
/*                             <li>{{ inmueble.recamaras }} | Recámara(s)</li>*/
/*                         {% endif %}*/
/* */
/*                         {% if inmueble.plantas > 0 %}*/
/*                             <li>{{ inmueble.plantas }} | Plantas</li>*/
/*                         {% endif %}*/
/* */
/*                         {% if inmueble.banos is not null %}*/
/*                             <li>{{ inmueble.banos }} | Baño(s)</li>*/
/*                         {% endif %}*/
/* */
/*                         {% if inmueble.mediobanos is not null %}*/
/*                             {% if inmueble.mediobanos > 0 %}*/
/*                                 <li>{{ inmueble.mediobanos }} | Medios Baño(s)</li>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/* */
/*                         {% if inmueble.espacioautos is not null %}*/
/*                             {% if inmueble.espacioautos > 0 %}*/
/*                                 <li>{{ inmueble.espacioautos }} | Estacionamiento(s)</li>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/* */
/*                         <li></li>*/
/* */
/*                         {% if inmueble.antiguedad is not null %}*/
/*                             <li>Antiguedad: {{ inmueble.antiguedad }}</li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="col s6 m6 l6">*/
/*                     <label></label>*/
/*                     <ul>*/
/* */
/*                         {% if inmueble.metrosconstruccion is not null %}*/
/*                             {% if inmueble.metrosconstruccion > 0 %}*/
/*                             <li>{{ inmueble.metrosconstruccion }} | M2 de Construcción</li>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/* */
/*                         {% if inmueble.metrosterreno is not null %}*/
/*                             {% if inmueble.metrosterreno > 0 %}*/
/*                             <li>{{ inmueble.metrosterreno }} | M2 de Terreno</li>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/* */
/*                         {% if inmueble.metrosfrente is not null %}*/
/*                             {% if inmueble.metrosfrente > 0 %}*/
/*                                 <li>{{ inmueble.metrosfrente }} | M de frente</li>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/* */
/*                         {% if inmueble.metrosfondo is not null %}*/
/*                             {% if inmueble.metrosfondo > 0 %}*/
/*                                 <li>{{ inmueble.metrosfondo }} | M de fondo</li>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/* */
/*                     </ul>*/
/*                 </div>*/
/*                 </div>*/
/* */
/*                 <label><b>Descripción:</b></label>*/
/*                 <p>{{ inmueble.descripcion }}</p>*/
/* */
/*                 <label><b>Características:</b></label>*/
/*                 <div class="row">*/
/*                     <ul>*/
/*                     {%  for nombre in caracteristicasDesc %}*/
/*                         <li>{{ nombre }}</li>*/
/*                     {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/* */
/*                 <div class="row z-depth-1 grey lighten-4">*/
/*                     <div class="col s12 m12 l12">*/
/*                         <br>*/
/*                         <label>{{ inmueble.IdUsuario.nombre }}</label><br>*/
/*                         <label>Teléfono: {{ inmueble.IdUsuario.telefono }}</label><br>*/
/*                         <label>Móvil: {{ inmueble.IdUsuario.celular }}</label><br>*/
/*                         <label><b>{{ inmueble.IdUsuario.email }}</b></label><br><br>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col s6 m6 l6">*/
/*                 <div id="divImagen" class="row">*/
/*                         {% if (inmueble.imagenes|length>0) %}*/
/*                             {% for imagen in inmueble.imagenes %}*/
/*                                 <div class="col s6 m6 l6">*/
/*                                     <img src="{{ imagen.getWebPath() }}" class="responsive-img" style="width:125px; height: 80px; margin: 10px;"/>*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <script>*/
/* */
/*         </script>*/
/* */
/*         {% javascripts '@FrameworkBundle/Resources/public/js/*'%}*/
/*         {% endjavascripts %}*/
/* */
/*         <script type="text/javascript">*/
/* */
/*         </script>*/
/* */
/*         <script>*/
/* */
/*             (function() {*/
/* */
/*                 var beforePrint = function() {*/
/*                     document.getElementById('divSlider').style.display='none';*/
/*                     $('.slider').slider({full_width: false, height: 0});*/
/*                     document.getElementById('divImagen').style.display='';*/
/*                 };*/
/* */
/*                 var afterPrint = function() {*/
/*                     document.getElementById('divSlider').style.display='';*/
/*                     $('.slider').slider({full_width: false, height: 600});*/
/*                     document.getElementById('divImagen').style.display='none';*/
/*                 };*/
/* */
/*                 if (window.matchMedia) {*/
/*                     var mediaQueryList = window.matchMedia('print');*/
/*                     mediaQueryList.addListener(function(mql) {*/
/*                         if (mql.matches) {*/
/*                             beforePrint();*/
/*                         } else {*/
/*                             afterPrint();*/
/*                         }*/
/*                     });*/
/*                 }*/
/* */
/*                 window.onbeforeprint = beforePrint;*/
/*                 window.onafterprint = afterPrint;*/
/* */
/*             }());*/
/* */
/*         </script>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/*     <style>*/
/*         body {*/
/*             background-color: white;*/
/*         }*/
/*         label*/
/*         {*/
/*             color: black !important;*/
/*         }*/
/*         p{*/
/*             line-height: 100% !important;*/
/*             text-align: justify;*/
/*         }*/
/*     </style>*/
/* */
/*     <style type="text/css" media="@print">@page{size:landscape;}</style>*/
/* {% endblock %}*/
/* */
