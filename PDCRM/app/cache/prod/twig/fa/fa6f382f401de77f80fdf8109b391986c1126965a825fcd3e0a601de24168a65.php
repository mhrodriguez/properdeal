<?php

/* :inmueble:captaciones.html.twig */
class __TwigTemplate_c2dc9f74e5ec451b9fe2d1df062cc5ad77118b3826a5c5facb0ebf950f01750d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":inmueble:captaciones.html.twig", 1);
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
                <table class=\"striped\">
                    <tbody>
                    ";
        // line 13
        $context["index"] = 0;
        // line 14
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inmuebles"]) ? $context["inmuebles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
            // line 15
            echo "                        <tr>
                            <td>
                                ";
            // line 17
            if ((twig_length_filter($this->env, $this->getAttribute($context["inmueble"], "Imagenes", array())) > 0)) {
                // line 18
                echo "                                    <img class=\"imginmueble\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["inmueble"], "Imagenes", array()), 0, array(), "array"), "getWebPath", array(), "method"), "html", null, true);
                echo "\">
                                ";
            }
            // line 20
            echo "                                <p><i class=\"material-icons left\">camera_alt</i>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["inmueble"], "imagenes", array())), "html", null, true);
            echo "</p>
                            </td>
                            <td>
                                <h5>ID: ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "legacyid", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "nombreid", array()), "html", null, true);
            echo " </h5>
                                <h5>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idTipoInmueble", array()), "nombre", array()), "html", null, true);
            echo " en ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
            echo "</h5>
                                <ul>
                                    <li><i class=\"material-icons left\">location_on</i>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMunicipio", array()), "nombre", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idEstado", array()), "nombre", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "calle", array()), "html", null, true);
            echo " </li>
                                    <li>Zona: ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idZona", array()), "nombre", array()), "html", null, true);
            echo "</li>
                                    <br>
                                    <li>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMoneda", array()), "simbolo", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "precio", array()), 2, ".", ","), "html", null, true);
            echo "</li>
                                    <br>
                                    <li>
                                        <p>Visitas: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visitas"]) ? $context["visitas"] : null), (isset($context["index"]) ? $context["index"] : null), array(), "array"), "html", null, true);
            echo "</p>
                                        ";
            // line 33
            $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
            // line 34
            echo "                                    </li>
                                </ul>

                            </td>
                            <td>
                                <ul>
                                    <li>Oficina: Proper Deal</li>

                                    <br>
                                    <li>Creada el: ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["inmueble"], "fechaCreacion", array()), "d/m/Y"), "html", null, true);
            echo "</li>
                                    <li>Por: ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idUsuario", array()), "nombre", array()), "html", null, true);
            echo "</li>
                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script>

    </script>
";
    }

    // line 61
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 62
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
        return ":inmueble:captaciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 62,  149 => 61,  135 => 49,  124 => 44,  120 => 43,  109 => 34,  107 => 33,  103 => 32,  95 => 29,  90 => 27,  82 => 26,  75 => 24,  69 => 23,  62 => 20,  56 => 18,  54 => 17,  50 => 15,  45 => 14,  43 => 13,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <!-- Page Layout here -->*/
/*             <br/>*/
/* */
/*             <div class="row">*/
/*                 <table class="striped">*/
/*                     <tbody>*/
/*                     {% set index=0 %}*/
/*                     {% for inmueble in inmuebles %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {% if (inmueble.Imagenes|length>0) %}*/
/*                                     <img class="imginmueble" src="{{ inmueble.Imagenes[0].getWebPath() }}">*/
/*                                 {% endif %}*/
/*                                 <p><i class="material-icons left">camera_alt</i>{{ inmueble.imagenes | length }}</p>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <h5>ID: {{ inmueble.legacyid }} {{ inmueble.nombreid }} </h5>*/
/*                                 <h5>{{ inmueble.idTipoInmueble.nombre }} en {{ inmueble.idOperacionInmueble.nombre }}</h5>*/
/*                                 <ul>*/
/*                                     <li><i class="material-icons left">location_on</i>{{ inmueble.idMunicipio.nombre }}, {{ inmueble.idEstado.nombre }}, {{ inmueble.calle }} </li>*/
/*                                     <li>Zona: {{ inmueble.idZona.nombre }}</li>*/
/*                                     <br>*/
/*                                     <li>{{ inmueble.idMoneda.simbolo }} {{inmueble.precio|number_format(2, '.', ',')}}</li>*/
/*                                     <br>*/
/*                                     <li>*/
/*                                         <p>Visitas: {{ visitas[index] }}</p>*/
/*                                         {% set index = index + 1 %}*/
/*                                     </li>*/
/*                                 </ul>*/
/* */
/*                             </td>*/
/*                             <td>*/
/*                                 <ul>*/
/*                                     <li>Oficina: Proper Deal</li>*/
/* */
/*                                     <br>*/
/*                                     <li>Creada el: {{ inmueble.fechaCreacion | date('d/m/Y') }}</li>*/
/*                                     <li>Por: {{ inmueble.idUsuario.nombre }}</li>*/
/*                                 </ul>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script>*/
/* */
/*     </script>*/
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
/*             width: 160px;*/
/*             height: 128px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
