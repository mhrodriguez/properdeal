<?php

/* :consultarinmueble:resultados.html.twig */
class __TwigTemplate_a0deb0aa62333a955d272f234ddde5772ecf0b211efb94310b4cce241ef87b6d extends Twig_Template
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

        <div class=\"row\">
            <table>
                <tbody>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inmuebles"]) ? $context["inmuebles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
            // line 13
            echo "                <tr>
                    <td rowspan=\"1\" style=\"width:250px\">
                        <a href=\"#\"><img class=\"imginmueble\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["inmueble"], "Imagenes", array()), 0, array(), "array"), "getWebPath", array(), "method"), "html", null, true);
            echo "\"></a>
                    </td>
                    <td>
                        <h5>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "calle", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idEstado", array()), "nombre", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMunicipio", array()), "nombre", array()), "html", null, true);
            echo " </h5>
                        <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
            echo "</p>
                        <ul>
                            <li>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "recamaras", array()), "html", null, true);
            echo " Recámaras</li>
                            <li>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosconstruccion", array()), "html", null, true);
            echo " Metros de Construcción</li>
                            <li>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosterreno", array()), "html", null, true);
            echo " Metros de Terreno</li>

                            ";
            // line 25
            if (($this->getAttribute($context["inmueble"], "plantas", array()) > 0)) {
                // line 26
                echo "                            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "plantas", array()), "html", null, true);
                echo " Plantas</li>
                            ";
            }
            // line 28
            echo "                        </ul>
                    </td>
                    <td>
                        <h5>\$";
            // line 31
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "precio", array()), 2, ".", ","), "html", null, true);
            echo "</h5>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inmueble_show", array("id" => $this->getAttribute($context["inmueble"], "idInmueble", array()))), "html", null, true);
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
        // line 39
        echo "                </tbody>
            </table>
        </div>

    </div>
</div>
";
    }

    // line 47
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 48
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
        return ":consultarinmueble:resultados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 48,  122 => 47,  112 => 39,  99 => 32,  95 => 31,  90 => 28,  84 => 26,  82 => 25,  77 => 23,  73 => 22,  69 => 21,  64 => 19,  56 => 18,  50 => 15,  46 => 13,  42 => 12,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div id="wrapper">*/
/*     <div id="container">*/
/*         <!-- Page Layout here -->*/
/*         <br/>*/
/* */
/*         <div class="row">*/
/*             <table>*/
/*                 <tbody>*/
/*                 {% for inmueble in inmuebles %}*/
/*                 <tr>*/
/*                     <td rowspan="1" style="width:250px">*/
/*                         <a href="#"><img class="imginmueble" src="{{ inmueble.Imagenes[0].getWebPath() }}"></a>*/
/*                     </td>*/
/*                     <td>*/
/*                         <h5>{{ inmueble.calle }}, {{ inmueble.idEstado.nombre }}, {{ inmueble.idMunicipio.nombre }} </h5>*/
/*                         <p>{{ inmueble.idOperacionInmueble.nombre }}</p>*/
/*                         <ul>*/
/*                             <li>{{ inmueble.recamaras }} Recámaras</li>*/
/*                             <li>{{ inmueble.metrosconstruccion }} Metros de Construcción</li>*/
/*                             <li>{{ inmueble.metrosterreno }} Metros de Terreno</li>*/
/* */
/*                             {% if inmueble.plantas > 0 %}*/
/*                             <li>{{ inmueble.plantas }} Plantas</li>*/
/*                             {% endif %}*/
/*                         </ul>*/
/*                     </td>*/
/*                     <td>*/
/*                         <h5>${{ inmueble.precio|number_format(2, '.', ',') }}</h5>*/
/*                         <a href="{{ path('inmueble_show', {'id': inmueble.idInmueble}) }}"  class="waves-effect waves-light btn right blue darken-4">*/
/*                             Ver Detalles*/
/*                             <i class="material-icons left">search</i>*/
/*                         </a>*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
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
/*         width: 200px;*/
/*         height: 160px;*/
/*     }*/
/* </style>*/
/* */
/* {% endblock %}*/
/* */
