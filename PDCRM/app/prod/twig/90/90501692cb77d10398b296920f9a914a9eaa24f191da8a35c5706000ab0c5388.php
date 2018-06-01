<?php

/* :solicitud:resultadosfiltro.html.twig */
class __TwigTemplate_5ab4e2b6c95c042fac5aef1b65f762c7432185f938291d26fe4043410a7a932e extends Twig_Template
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
                <table class=\"striped\">
                    <thead>
                        <td>Solicitud</td>
                        <td>Operaciones</td>
                    </thead>
                    <tbody>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitudes"]) ? $context["solicitudes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 25
            echo "                        <tr>
                            <td>
                                <h5>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idEstado", array()), "nombre", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idMunicipio", array()), "nombre", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idColonia", array()), "nombre", array()), "html", null, true);
            echo " </h5>
                                <p>Tipo de Inmueble: ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idTipoInmueble", array()), "nombre", array()), "html", null, true);
            echo "<br>
                                    Operación: ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
            echo "</p>
                                <ul>
                                    ";
            // line 31
            if (($this->getAttribute($context["solicitud"], "precio", array()) != false)) {
                // line 32
                echo "                                    <li>
                                        <p>Precio</p>
                                        Desde: ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idMoneda", array()), "simbolo", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["solicitud"], "precio", array()), 2, ".", ","), "html", null, true);
                echo "
                                    </li>
                                    ";
            }
            // line 37
            echo "                                    ";
            if (($this->getAttribute($context["solicitud"], "preciomax", array()) != false)) {
                // line 38
                echo "                                    <li>
                                        Hasta: ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idMoneda", array()), "simbolo", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["solicitud"], "preciomax", array()), 2, ".", ","), "html", null, true);
                echo "
                                    </li>
                                    ";
            }
            // line 42
            echo "
                                    ";
            // line 43
            if (($this->getAttribute($context["solicitud"], "metrosconstruccion", array()) != false)) {
                // line 44
                echo "                                    <li>
                                        <p>Metros de Construcción</p>
                                        Desde: ";
                // line 46
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["solicitud"], "metrosconstruccion", array()), 2, ".", ","), "html", null, true);
                echo "
                                    </li>
                                    ";
            }
            // line 49
            echo "                                    ";
            if (($this->getAttribute($context["solicitud"], "metrosconstruccionmax", array()) != false)) {
                // line 50
                echo "                                    <li>
                                        Hasta: ";
                // line 51
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["solicitud"], "metrosconstruccionmax", array()), 2, ".", ","), "html", null, true);
                echo "
                                    </li>
                                    ";
            }
            // line 54
            echo "
                                    ";
            // line 55
            if (($this->getAttribute($context["solicitud"], "metrosterreno", array()) != false)) {
                // line 56
                echo "                                    <li>
                                        <p>Metros de Terreno</p>
                                        Desde: ";
                // line 58
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["solicitud"], "metrosterreno", array()), 2, ".", ","), "html", null, true);
                echo "
                                    </li>
                                    ";
            }
            // line 61
            echo "
                                    ";
            // line 62
            if (($this->getAttribute($context["solicitud"], "metrosterrenomax", array()) != false)) {
                // line 63
                echo "                                    <li>
                                        Hasta: ";
                // line 64
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["solicitud"], "metrosterrenomax", array()), 2, ".", ","), "html", null, true);
                echo "
                                    </li>
                                    ";
            }
            // line 67
            echo "
                                    ";
            // line 68
            if ((twig_length_filter($this->env, $this->getAttribute($context["solicitud"], "caracteristicas", array())) > 0)) {
                // line 69
                echo "                                    <li>
                                        <p>Características</p>
                                        <ul>
                                        ";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["solicitud"], "caracteristicas", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["caracteristica"]) {
                    // line 73
                    echo "                                            <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["caracteristica"], "nombre", array()), "html", null, true);
                    echo "</li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caracteristica'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                                        </ul>
                                    </li>
                                    ";
            }
            // line 78
            echo "                                </ul>
                            </td>
                            <td>

                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                    </tbody>
                </table>
            </div>

        </div>
    </div>
";
    }

    // line 93
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 94
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
        return array (  221 => 94,  218 => 93,  208 => 85,  196 => 78,  191 => 75,  182 => 73,  178 => 72,  173 => 69,  171 => 68,  168 => 67,  162 => 64,  159 => 63,  157 => 62,  154 => 61,  148 => 58,  144 => 56,  142 => 55,  139 => 54,  133 => 51,  130 => 50,  127 => 49,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  104 => 39,  101 => 38,  98 => 37,  90 => 34,  86 => 32,  84 => 31,  79 => 29,  75 => 28,  67 => 27,  63 => 25,  59 => 24,  49 => 16,  41 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
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
/*                 <table class="striped">*/
/*                     <thead>*/
/*                         <td>Solicitud</td>*/
/*                         <td>Operaciones</td>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for solicitud in solicitudes %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 <h5>{{ solicitud.idEstado.nombre }}, {{ solicitud.idMunicipio.nombre }}, {{ solicitud.idColonia.nombre }} </h5>*/
/*                                 <p>Tipo de Inmueble: {{ solicitud.idTipoInmueble.nombre }}<br>*/
/*                                     Operación: {{ solicitud.idOperacionInmueble.nombre }}</p>*/
/*                                 <ul>*/
/*                                     {% if (solicitud.precio != false) %}*/
/*                                     <li>*/
/*                                         <p>Precio</p>*/
/*                                         Desde: {{ solicitud.idMoneda.simbolo }} {{ solicitud.precio|number_format(2, '.', ',') }}*/
/*                                     </li>*/
/*                                     {% endif  %}*/
/*                                     {% if (solicitud.preciomax != false) %}*/
/*                                     <li>*/
/*                                         Hasta: {{ solicitud.idMoneda.simbolo }} {{ solicitud.preciomax|number_format(2, '.', ',') }}*/
/*                                     </li>*/
/*                                     {% endif  %}*/
/* */
/*                                     {% if (solicitud.metrosconstruccion != false) %}*/
/*                                     <li>*/
/*                                         <p>Metros de Construcción</p>*/
/*                                         Desde: {{ solicitud.metrosconstruccion|number_format(2, '.', ',') }}*/
/*                                     </li>*/
/*                                     {% endif  %}*/
/*                                     {% if (solicitud.metrosconstruccionmax != false) %}*/
/*                                     <li>*/
/*                                         Hasta: {{ solicitud.metrosconstruccionmax|number_format(2, '.', ',') }}*/
/*                                     </li>*/
/*                                     {% endif  %}*/
/* */
/*                                     {% if (solicitud.metrosterreno != false) %}*/
/*                                     <li>*/
/*                                         <p>Metros de Terreno</p>*/
/*                                         Desde: {{ solicitud.metrosterreno|number_format(2, '.', ',') }}*/
/*                                     </li>*/
/*                                     {% endif  %}*/
/* */
/*                                     {% if (solicitud.metrosterrenomax != false) %}*/
/*                                     <li>*/
/*                                         Hasta: {{ solicitud.metrosterrenomax|number_format(2, '.', ',') }}*/
/*                                     </li>*/
/*                                     {% endif  %}*/
/* */
/*                                     {% if (solicitud.caracteristicas|length > 0) %}*/
/*                                     <li>*/
/*                                         <p>Características</p>*/
/*                                         <ul>*/
/*                                         {% for caracteristica in solicitud.caracteristicas  %}*/
/*                                             <li>{{ caracteristica.nombre }}</li>*/
/*                                         {%  endfor  %}*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                     {% endif  %}*/
/*                                 </ul>*/
/*                             </td>*/
/*                             <td>*/
/* */
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
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
