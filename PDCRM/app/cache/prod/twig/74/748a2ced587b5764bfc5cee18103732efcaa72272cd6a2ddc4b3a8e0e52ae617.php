<?php

/* :buscarinmueble:resultados.html.twig */
class __TwigTemplate_6136ac6bafcb91819ad66cc4aecc39e34fe9d8f25923d8dc654af5ba90cf3308 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":buscarinmueble:resultados.html.twig", 1);
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
                <table>
                    <tbody>
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inmuebles"]) ? $context["inmuebles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
            // line 13
            echo "                        <tr>
                            <td rowspan=\"1\" style=\"width:250px\">
                                <a href=\"#\">
                                    ";
            // line 16
            if ((twig_length_filter($this->env, $this->getAttribute($context["inmueble"], "Imagenes", array())) > 0)) {
                // line 17
                echo "                                    <img class=\"imginmueble\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["inmueble"], "Imagenes", array()), 0, array(), "array"), "getWebPath", array(), "method"), "html", null, true);
                echo "\">
                                    ";
            }
            // line 19
            echo "                                </a>
                            </td>
                            <td>
                                <h5>ID: ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "legacyid", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "nombreid", array()), "html", null, true);
            echo "</h5>
                                <h5>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idTipoInmueble", array()), "nombre", array()), "html", null, true);
            echo " en ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
            echo "</h5>
                                <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMunicipio", array()), "nombre", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idEstado", array()), "nombre", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "calle", array()), "html", null, true);
            echo "</p>
                                <ul>
                                    ";
            // line 26
            if ( !(null === $this->getAttribute($context["inmueble"], "recamaras", array()))) {
                // line 27
                echo "                                        ";
                if (($this->getAttribute($context["inmueble"], "recamaras", array()) > 0)) {
                    // line 28
                    echo "                                            <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "recamaras", array()), "html", null, true);
                    echo " Recámara(s)</li>
                                        ";
                }
                // line 30
                echo "                                    ";
            }
            // line 31
            echo "
                                    ";
            // line 32
            if ( !(null === $this->getAttribute($context["inmueble"], "metrosconstruccion", array()))) {
                // line 33
                echo "                                        ";
                if (($this->getAttribute($context["inmueble"], "metrosconstruccion", array()) > 0)) {
                    // line 34
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosconstruccion", array()), "html", null, true);
                    echo " m2 de Construcción<br>
                                        ";
                }
                // line 36
                echo "                                    ";
            }
            // line 37
            echo "
                                    ";
            // line 38
            if ( !(null === $this->getAttribute($context["inmueble"], "metrosterreno", array()))) {
                // line 39
                echo "                                        ";
                if (($this->getAttribute($context["inmueble"], "metrosterreno", array()) > 0)) {
                    // line 40
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosterreno", array()), "html", null, true);
                    echo " m2 de Terreno<br>
                                        ";
                }
                // line 42
                echo "                                    ";
            }
            // line 43
            echo "
                                    ";
            // line 44
            if (($this->getAttribute($context["inmueble"], "banos", array()) > 0)) {
                // line 45
                echo "                                        <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "banos", array()), "html", null, true);
                echo " Baño(s)</li>
                                    ";
            }
            // line 47
            echo "
                                    ";
            // line 48
            if ( !(null === $this->getAttribute($context["inmueble"], "mediobanos", array()))) {
                // line 49
                echo "                                        ";
                if (($this->getAttribute($context["inmueble"], "mediobanos", array()) > 0)) {
                    // line 50
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "mediobanos", array()), "html", null, true);
                    echo " Medios Baño(s)<br>
                                        ";
                }
                // line 52
                echo "                                    ";
            }
            // line 53
            echo "
                                    ";
            // line 54
            if ( !(null === $this->getAttribute($context["inmueble"], "plantas", array()))) {
                // line 55
                echo "                                        ";
                if (($this->getAttribute($context["inmueble"], "plantas", array()) > 0)) {
                    // line 56
                    echo "                                            <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "plantas", array()), "html", null, true);
                    echo " Plantas</li>
                                        ";
                }
                // line 58
                echo "                                    ";
            }
            // line 59
            echo "                                </ul>
                            </td>
                            <td>
                                <h5>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMoneda", array()), "simbolo", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "precio", array()), 2, ".", ","), "html", null, true);
            echo "</h5>
                                <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("buscarinmueble_show", array("id" => $this->getAttribute($context["inmueble"], "idInmueble", array()))), "html", null, true);
            echo "\"  class=\"waves-effect waves-light btn right blue darken-4\">
                                    Ver Detalles
                                    <i class=\"material-icons left\">search</i>
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
    }

    // line 77
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 78
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
        return ":buscarinmueble:resultados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 78,  211 => 77,  202 => 70,  189 => 63,  183 => 62,  178 => 59,  175 => 58,  169 => 56,  166 => 55,  164 => 54,  161 => 53,  158 => 52,  152 => 50,  149 => 49,  147 => 48,  144 => 47,  138 => 45,  136 => 44,  133 => 43,  130 => 42,  124 => 40,  121 => 39,  119 => 38,  116 => 37,  113 => 36,  107 => 34,  104 => 33,  102 => 32,  99 => 31,  96 => 30,  90 => 28,  87 => 27,  85 => 26,  76 => 24,  70 => 23,  64 => 22,  59 => 19,  53 => 17,  51 => 16,  46 => 13,  42 => 12,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <!-- Page Layout here -->*/
/*             <br/>*/
/* */
/*             <div class="row">*/
/*                 <table>*/
/*                     <tbody>*/
/*                     {% for inmueble in inmuebles %}*/
/*                         <tr>*/
/*                             <td rowspan="1" style="width:250px">*/
/*                                 <a href="#">*/
/*                                     {% if (inmueble.Imagenes|length>0) %}*/
/*                                     <img class="imginmueble" src="{{ inmueble.Imagenes[0].getWebPath() }}">*/
/*                                     {% endif %}*/
/*                                 </a>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <h5>ID: {{ inmueble.legacyid }} {{ inmueble.nombreid }}</h5>*/
/*                                 <h5>{{ inmueble.idTipoInmueble.nombre }} en {{ inmueble.idOperacionInmueble.nombre }}</h5>*/
/*                                 <p>{{ inmueble.idMunicipio.nombre }}, {{ inmueble.idEstado.nombre }}, {{ inmueble.calle }}</p>*/
/*                                 <ul>*/
/*                                     {% if inmueble.recamaras is not null %}*/
/*                                         {% if inmueble.recamaras > 0 %}*/
/*                                             <li>{{ inmueble.recamaras }} Recámara(s)</li>*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/* */
/*                                     {% if inmueble.metrosconstruccion is not null %}*/
/*                                         {% if inmueble.metrosconstruccion > 0 %}*/
/*                                             {{ inmueble.metrosconstruccion }} m2 de Construcción<br>*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/* */
/*                                     {% if inmueble.metrosterreno is not null %}*/
/*                                         {% if inmueble.metrosterreno > 0 %}*/
/*                                             {{ inmueble.metrosterreno }} m2 de Terreno<br>*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/* */
/*                                     {% if inmueble.banos > 0 %}*/
/*                                         <li>{{ inmueble.banos }} Baño(s)</li>*/
/*                                     {% endif %}*/
/* */
/*                                     {% if inmueble.mediobanos is not null %}*/
/*                                         {% if inmueble.mediobanos > 0 %}*/
/*                                             {{ inmueble.mediobanos }} Medios Baño(s)<br>*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/* */
/*                                     {% if inmueble.plantas is not null %}*/
/*                                         {% if inmueble.plantas > 0 %}*/
/*                                             <li>{{ inmueble.plantas }} Plantas</li>*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/*                                 </ul>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <h5>{{ inmueble.idMoneda.simbolo }} {{ inmueble.precio|number_format(2, '.', ',') }}</h5>*/
/*                                 <a href="{{ path('buscarinmueble_show', {'id': inmueble.idInmueble}) }}"  class="waves-effect waves-light btn right blue darken-4">*/
/*                                     Ver Detalles*/
/*                                     <i class="material-icons left">search</i>*/
/*                                 </a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
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
/*         .imginmueble*/
/*         {*/
/*             width: 200px;*/
/*             height: 160px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
