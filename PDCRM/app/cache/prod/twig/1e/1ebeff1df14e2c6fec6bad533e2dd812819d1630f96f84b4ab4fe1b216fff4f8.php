<?php

/* :inmueble:indeximprimir.html.twig */
class __TwigTemplate_774ce2970e5eebe95344bd699b94ecf4960a7d34c1917533ee0963fafb5689a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":inmueble:indeximprimir.html.twig", 1);
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
<div id=\"wrapper\">
    <div id=\"container\">
        <!-- Page Layout here -->
        <br/>
        <div class=\"row\">
            <a href=\"#\" id=\"imprimir\" onclick=\"window.print();\">Imprimir</a>
        </div>

        <div class=\"row\">
            <h5 class=\"center-align\">Propiedades</h5>
        </div>

        <div class=\"row\">
            <table class=\"striped\">
                <thead>
                </thead>

                <tbody>
                ";
        // line 23
        $context["index"] = 0;
        // line 24
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inmuebles"]) ? $context["inmuebles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
            // line 25
            echo "                <tr>
                    <td>
                        ";
            // line 27
            if ((twig_length_filter($this->env, $this->getAttribute($context["inmueble"], "Imagenes", array())) > 0)) {
                // line 28
                echo "                        <img class=\"imginmueble\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["inmueble"], "Imagenes", array()), 0, array(), "array"), "getWebPath", array(), "method"), "html", null, true);
                echo "\">
                        ";
            }
            // line 30
            echo "                        <p><i class=\"material-icons left\">camera_alt</i>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["inmueble"], "imagenes", array())), "html", null, true);
            echo "</p>
                    </td>
                    <td>
                        <h5>ID: ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "nombreid", array()), "html", null, true);
            echo " </h5>
                        <h5>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idTipoInmueble", array()), "nombre", array()), "html", null, true);
            echo " en ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
            echo "</h5>
                        <ul>
                            <li><i class=\"material-icons left\">location_on</i>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "calle", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idEstado", array()), "nombre", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMunicipio", array()), "nombre", array()), "html", null, true);
            echo " </li>
                            <li>Zona: ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idZona", array()), "nombre", array()), "html", null, true);
            echo "</li>
                            <br>
                            <li>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMoneda", array()), "simbolo", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "precio", array()), 2, ".", ","), "html", null, true);
            echo "</li>
                            <br>
                            <li>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "recamaras", array()), "html", null, true);
            echo " Recámaras</li>
                            <li>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "banos", array()), "html", null, true);
            echo " Baño(s)</li>

                            ";
            // line 44
            if ( !(null === $this->getAttribute($context["inmueble"], "mediobanos", array()))) {
                // line 45
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "mediobanos", array()), "html", null, true);
                echo " Medios Baño(s)<br>
                            ";
            }
            // line 47
            echo "
                            ";
            // line 48
            if ( !(null === $this->getAttribute($context["inmueble"], "metrosconstruccion", array()))) {
                // line 49
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosconstruccion", array()), "html", null, true);
                echo " Metros de Construcción<br>
                            ";
            }
            // line 51
            echo "
                            ";
            // line 52
            if ( !(null === $this->getAttribute($context["inmueble"], "metrosterreno", array()))) {
                // line 53
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosterreno", array()), "html", null, true);
                echo " Metros de Terreno<br>
                            ";
            }
            // line 55
            echo "
                            ";
            // line 56
            if ( !(null === $this->getAttribute($context["inmueble"], "comision", array()))) {
                // line 57
                echo "                            <li>";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "comision", array()), 2, ".", ","), "html", null, true);
                echo "
                                ";
                // line 58
                if (($this->getAttribute($this->getAttribute($context["inmueble"], "idOperacionInmueble", array()), "idOperacionInmueble", array()) == 2)) {
                    // line 59
                    echo "                                %
                                ";
                } else {
                    // line 61
                    echo "                                Mensualidades
                                ";
                }
                // line 63
                echo "                            </li>
                            ";
            }
            // line 65
            echo "
                            ";
            // line 66
            if (($this->getAttribute($context["inmueble"], "plantas", array()) > 0)) {
                // line 67
                echo "                            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "plantas", array()), "html", null, true);
                echo " Plantas</li>
                            ";
            }
            // line 69
            echo "
                            <br>
                            ";
            // line 71
            if ( !(null === $this->getAttribute($context["inmueble"], "fechaModificacion", array()))) {
                // line 72
                echo "                            <li>Modificado el ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["inmueble"], "fechaModificacion", array()), "d/m/Y"), "html", null, true);
                echo "</li>
                            <li>Por ";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idUsuariomodifico", array()), "nombre", array()), "html", null, true);
                echo "</li>
                            ";
            }
            // line 75
            echo "
                            <li>
                                <p>Visitas: ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visitas"]) ? $context["visitas"] : null), (isset($context["index"]) ? $context["index"] : null), array(), "array"), "html", null, true);
            echo "</p>
                                ";
            // line 78
            $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
            // line 79
            echo "                            </li>
                        </ul>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                </tbody>
            </table>
        </div>

    </div>
</div>

<script>

</script>
";
    }

    // line 96
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 97
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
        width: 160px;
        height: 128px;
    }
</style>



";
    }

    public function getTemplateName()
    {
        return ":inmueble:indeximprimir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 97,  236 => 96,  222 => 84,  212 => 79,  210 => 78,  206 => 77,  202 => 75,  197 => 73,  192 => 72,  190 => 71,  186 => 69,  180 => 67,  178 => 66,  175 => 65,  171 => 63,  167 => 61,  163 => 59,  161 => 58,  156 => 57,  154 => 56,  151 => 55,  145 => 53,  143 => 52,  140 => 51,  134 => 49,  132 => 48,  129 => 47,  123 => 45,  121 => 44,  116 => 42,  112 => 41,  105 => 39,  100 => 37,  92 => 36,  85 => 34,  79 => 33,  72 => 30,  66 => 28,  64 => 27,  60 => 25,  55 => 24,  53 => 23,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div id="wrapper">*/
/*     <div id="container">*/
/*         <!-- Page Layout here -->*/
/*         <br/>*/
/*         <div class="row">*/
/*             <a href="#" id="imprimir" onclick="window.print();">Imprimir</a>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <h5 class="center-align">Propiedades</h5>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <table class="striped">*/
/*                 <thead>*/
/*                 </thead>*/
/* */
/*                 <tbody>*/
/*                 {% set index=0 %}*/
/*                 {% for inmueble in inmuebles %}*/
/*                 <tr>*/
/*                     <td>*/
/*                         {% if (inmueble.Imagenes|length>0) %}*/
/*                         <img class="imginmueble" src="{{ inmueble.Imagenes[0].getWebPath() }}">*/
/*                         {% endif %}*/
/*                         <p><i class="material-icons left">camera_alt</i>{{ inmueble.imagenes | length }}</p>*/
/*                     </td>*/
/*                     <td>*/
/*                         <h5>ID: {{ inmueble.idInmueble }} {{ inmueble.nombreid }} </h5>*/
/*                         <h5>{{ inmueble.idTipoInmueble.nombre }} en {{ inmueble.idOperacionInmueble.nombre }}</h5>*/
/*                         <ul>*/
/*                             <li><i class="material-icons left">location_on</i>{{ inmueble.calle }}, {{ inmueble.idEstado.nombre }}, {{ inmueble.idMunicipio.nombre }} </li>*/
/*                             <li>Zona: {{ inmueble.idZona.nombre }}</li>*/
/*                             <br>*/
/*                             <li>{{ inmueble.idMoneda.simbolo }} {{inmueble.precio|number_format(2, '.', ',')}}</li>*/
/*                             <br>*/
/*                             <li>{{ inmueble.recamaras }} Recámaras</li>*/
/*                             <li>{{ inmueble.banos }} Baño(s)</li>*/
/* */
/*                             {% if inmueble.mediobanos is not null %}*/
/*                                 {{ inmueble.mediobanos }} Medios Baño(s)<br>*/
/*                             {% endif %}*/
/* */
/*                             {% if inmueble.metrosconstruccion is not null %}*/
/*                                 {{ inmueble.metrosconstruccion }} Metros de Construcción<br>*/
/*                             {% endif %}*/
/* */
/*                             {% if inmueble.metrosterreno is not null %}*/
/*                                 {{ inmueble.metrosterreno }} Metros de Terreno<br>*/
/*                             {% endif %}*/
/* */
/*                             {% if inmueble.comision is not null %}*/
/*                             <li>{{ inmueble.comision | number_format(2, '.', ',') }}*/
/*                                 {% if inmueble.idOperacionInmueble.idOperacionInmueble == 2 %}*/
/*                                 %*/
/*                                 {%  else %}*/
/*                                 Mensualidades*/
/*                                 {%  endif %}*/
/*                             </li>*/
/*                             {% endif %}*/
/* */
/*                             {% if inmueble.plantas > 0 %}*/
/*                             <li>{{ inmueble.plantas }} Plantas</li>*/
/*                             {% endif %}*/
/* */
/*                             <br>*/
/*                             {% if inmueble.fechaModificacion is not null %}*/
/*                             <li>Modificado el {{ inmueble.fechaModificacion | date('d/m/Y') }}</li>*/
/*                             <li>Por {{ inmueble.idUsuariomodifico.nombre }}</li>*/
/*                             {% endif %}*/
/* */
/*                             <li>*/
/*                                 <p>Visitas: {{ visitas[index] }}</p>*/
/*                                 {% set index = index + 1 %}*/
/*                             </li>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* <script>*/
/* */
/* </script>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
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
/*         width: 160px;*/
/*         height: 128px;*/
/*     }*/
/* </style>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
