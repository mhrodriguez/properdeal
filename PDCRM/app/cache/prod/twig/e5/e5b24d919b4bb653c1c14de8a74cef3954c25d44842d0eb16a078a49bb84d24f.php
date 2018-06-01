<?php

/* :solicitud:show.html.twig */
class __TwigTemplate_6818b7f84c5fe207cd2b2ab0f30704a38e6caf05824de9887baee6220c8be150 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":solicitud:show.html.twig", 1);
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
    <table>
        <tbody>
            <tr>
                <td>
                    <h5>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "idEstado", array()), "nombre", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "ciudad", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "colonia", array()), "html", null, true);
        echo " </h5>
                    <p>Tipo de Inmueble: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "idTipoInmueble", array()), "nombre", array()), "html", null, true);
        echo "<br>
                        Operación: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
        echo "</p>
                    <ul>
                        ";
        // line 13
        if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "precio", array()) != false)) {
            // line 14
            echo "                            <li>
                                <p>Precio</p>
                                Desde: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "idMoneda", array()), "simbolo", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "precio", array()), 2, ".", ","), "html", null, true);
            echo "
                            </li>
                        ";
        }
        // line 19
        echo "                        ";
        if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "preciomax", array()) != false)) {
            // line 20
            echo "                            <li>
                                Hasta: ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "idMoneda", array()), "simbolo", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "preciomax", array()), 2, ".", ","), "html", null, true);
            echo "
                            </li>
                        ";
        }
        // line 24
        echo "
                        ";
        // line 25
        if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "metrosconstruccion", array()) != false)) {
            // line 26
            echo "                            <li>
                                <p>Metros de Construcción</p>
                                Desde: ";
            // line 28
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "metrosconstruccion", array()), 2, ".", ","), "html", null, true);
            echo " m2
                            </li>
                        ";
        }
        // line 31
        echo "                        ";
        if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "metrosconstruccionmax", array()) != false)) {
            // line 32
            echo "                            <li>
                                Hasta: ";
            // line 33
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "metrosconstruccionmax", array()), 2, ".", ","), "html", null, true);
            echo " m2
                            </li>
                        ";
        }
        // line 36
        echo "
                        ";
        // line 37
        if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "metrosterreno", array()) != false)) {
            // line 38
            echo "                            <li>
                                <p>Metros de Terreno</p>
                                Desde: ";
            // line 40
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "metrosterreno", array()), 2, ".", ","), "html", null, true);
            echo "
                            </li>
                        ";
        }
        // line 43
        echo "
                        ";
        // line 44
        if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "metrosterrenomax", array()) != false)) {
            // line 45
            echo "                            <li>
                                Hasta: ";
            // line 46
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "metrosterrenomax", array()), 2, ".", ","), "html", null, true);
            echo "
                            </li>
                        ";
        }
        // line 49
        echo "
                        ";
        // line 50
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "caracteristicas", array())) > 0)) {
            // line 51
            echo "                            <li>
                                <p>Características</p>
                                <ul>
                                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "caracteristicas", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["caracteristica"]) {
                // line 55
                echo "                                        <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["caracteristica"], "nombre", array()), "html", null, true);
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caracteristica'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                                </ul>
                            </li>
                        ";
        }
        // line 60
        echo "                        <br>
                        Mi cliente busca: ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "descripcion", array()), "html", null, true);
        echo "
                    </ul>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>
                    ";
        // line 69
        echo "                    <!--input type=\"submit\" value=\"Borrar\" class=\"btn red darken-4 right\" style=\"margin-right: 10px\"-->
                    ";
        // line 71
        echo "                </td>
                <td>
                    <a onclick=\"self.history.back(-1);\" class=\"btn blue darken-4 right\">< Regresar</a>
                </td>
            </tr>
        </tbody>
    </table>

    <style>
        table
        {
            background-color: white;
        }
        body
        {
            height:70vh;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return ":solicitud:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 71,  180 => 69,  170 => 61,  167 => 60,  162 => 57,  153 => 55,  149 => 54,  144 => 51,  142 => 50,  139 => 49,  133 => 46,  130 => 45,  128 => 44,  125 => 43,  119 => 40,  115 => 38,  113 => 37,  110 => 36,  104 => 33,  101 => 32,  98 => 31,  92 => 28,  88 => 26,  86 => 25,  83 => 24,  75 => 21,  72 => 20,  69 => 19,  61 => 16,  57 => 14,  55 => 13,  50 => 11,  46 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <td>*/
/*                     <h5>{{ solicitud.idEstado.nombre }}, {{ solicitud.ciudad }}, {{ solicitud.colonia }} </h5>*/
/*                     <p>Tipo de Inmueble: {{ solicitud.idTipoInmueble.nombre }}<br>*/
/*                         Operación: {{ solicitud.idOperacionInmueble.nombre }}</p>*/
/*                     <ul>*/
/*                         {% if (solicitud.precio != false) %}*/
/*                             <li>*/
/*                                 <p>Precio</p>*/
/*                                 Desde: {{ solicitud.idMoneda.simbolo }} {{ solicitud.precio|number_format(2, '.', ',') }}*/
/*                             </li>*/
/*                         {% endif  %}*/
/*                         {% if (solicitud.preciomax != false) %}*/
/*                             <li>*/
/*                                 Hasta: {{ solicitud.idMoneda.simbolo }} {{ solicitud.preciomax|number_format(2, '.', ',') }}*/
/*                             </li>*/
/*                         {% endif  %}*/
/* */
/*                         {% if (solicitud.metrosconstruccion != false) %}*/
/*                             <li>*/
/*                                 <p>Metros de Construcción</p>*/
/*                                 Desde: {{ solicitud.metrosconstruccion|number_format(2, '.', ',') }} m2*/
/*                             </li>*/
/*                         {% endif  %}*/
/*                         {% if (solicitud.metrosconstruccionmax != false) %}*/
/*                             <li>*/
/*                                 Hasta: {{ solicitud.metrosconstruccionmax|number_format(2, '.', ',') }} m2*/
/*                             </li>*/
/*                         {% endif  %}*/
/* */
/*                         {% if (solicitud.metrosterreno != false) %}*/
/*                             <li>*/
/*                                 <p>Metros de Terreno</p>*/
/*                                 Desde: {{ solicitud.metrosterreno|number_format(2, '.', ',') }}*/
/*                             </li>*/
/*                         {% endif  %}*/
/* */
/*                         {% if (solicitud.metrosterrenomax != false) %}*/
/*                             <li>*/
/*                                 Hasta: {{ solicitud.metrosterrenomax|number_format(2, '.', ',') }}*/
/*                             </li>*/
/*                         {% endif  %}*/
/* */
/*                         {% if (solicitud.caracteristicas|length > 0) %}*/
/*                             <li>*/
/*                                 <p>Características</p>*/
/*                                 <ul>*/
/*                                     {% for caracteristica in solicitud.caracteristicas  %}*/
/*                                         <li>{{ caracteristica.nombre }}</li>*/
/*                                     {%  endfor  %}*/
/*                                 </ul>*/
/*                             </li>*/
/*                         {% endif  %}*/
/*                         <br>*/
/*                         Mi cliente busca: {{ solicitud.descripcion }}*/
/*                     </ul>*/
/*                 </td>*/
/*                 <td></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     {# form_start(delete_form) #}*/
/*                     <!--input type="submit" value="Borrar" class="btn red darken-4 right" style="margin-right: 10px"-->*/
/*                     {# form_end(delete_form) #}*/
/*                 </td>*/
/*                 <td>*/
/*                     <a onclick="self.history.back(-1);" class="btn blue darken-4 right">< Regresar</a>*/
/*                 </td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <style>*/
/*         table*/
/*         {*/
/*             background-color: white;*/
/*         }*/
/*         body*/
/*         {*/
/*             height:70vh;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
