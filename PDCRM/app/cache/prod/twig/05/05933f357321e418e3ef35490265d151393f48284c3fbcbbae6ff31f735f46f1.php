<?php

/* :solicitud:imprimir.html.twig */
class __TwigTemplate_ec40ad1a53c8ed0ec13d4280c20efaa85e0d6ccfbd1076c77b39137264ad4b03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":solicitud:imprimir.html.twig", 1);
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

            <div class=\"row\">
                <a href=\"#\" id=\"imprimir\" onclick=\"window.print();\">Imprimir</a>
            </div>

            <div class=\"row\">
                <h5 class=\"center-align\">Solicitudes</h5>
                <table class=\"striped\">
                    <thead>
                    <th><b>ID</b></th>
                    <th><b>Tipo de Inmueble</b></th>
                    <td><b>Operaci&oacute;n</b></td>
                    <td><b>Estado</b></td>
                    <td><b>Ciudad</b></td>
                    <td><b>Colonia</b></td>
                    <td><b>m2 de costrucci&oacute;n</b></td>
                    <td><b>m2 de costrucci&oacute;n (hasta)</b></td>
                    <td><b>m2 de terreno</b></td>
                    <td><b>m2 de terreno (hasta)</b></td>
                    <th><b>Precio</b></th>
                    <th><b>Precio (hasta)</b></th>
                    <th><b>Moneda</b></th>
                    </thead>
                    <tbody>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitudes"]) ? $context["solicitudes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 33
            echo "                        <tr>
                            <td>
                                ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "idSolicitud", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idTipoInmueble", array()), "nombre", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idEstado", array()), "nombre", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idMunicipio", array()), "nombre", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idColonia", array()), "nombre", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "metrosconstruccion", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "metrosconstruccionmax", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "metrosterreno", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "metrosterrenomax", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "precio", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "preciomax", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitud"], "idMoneda", array()), "nombre", array()), "html", null, true);
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    </tbody>
                </table>
            </div>

        </div>
    </div>
";
    }

    // line 83
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 84
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
        return ":solicitud:imprimir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 84,  162 => 83,  152 => 75,  142 => 71,  136 => 68,  130 => 65,  124 => 62,  118 => 59,  112 => 56,  106 => 53,  100 => 50,  94 => 47,  88 => 44,  82 => 41,  76 => 38,  70 => 35,  66 => 33,  62 => 32,  32 => 4,  29 => 3,  11 => 1,);
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
/*             <div class="row">*/
/*                 <a href="#" id="imprimir" onclick="window.print();">Imprimir</a>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <h5 class="center-align">Solicitudes</h5>*/
/*                 <table class="striped">*/
/*                     <thead>*/
/*                     <th><b>ID</b></th>*/
/*                     <th><b>Tipo de Inmueble</b></th>*/
/*                     <td><b>Operaci&oacute;n</b></td>*/
/*                     <td><b>Estado</b></td>*/
/*                     <td><b>Ciudad</b></td>*/
/*                     <td><b>Colonia</b></td>*/
/*                     <td><b>m2 de costrucci&oacute;n</b></td>*/
/*                     <td><b>m2 de costrucci&oacute;n (hasta)</b></td>*/
/*                     <td><b>m2 de terreno</b></td>*/
/*                     <td><b>m2 de terreno (hasta)</b></td>*/
/*                     <th><b>Precio</b></th>*/
/*                     <th><b>Precio (hasta)</b></th>*/
/*                     <th><b>Moneda</b></th>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for solicitud in solicitudes %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {{ solicitud.idSolicitud }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ solicitud.idTipoInmueble.nombre }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ solicitud.idOperacionInmueble.nombre }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ solicitud.idEstado.nombre }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ solicitud.idMunicipio.nombre }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ solicitud.idColonia.nombre }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ solicitud.metrosconstruccion }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ solicitud.metrosconstruccionmax }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ solicitud.metrosterreno }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ solicitud.metrosterrenomax }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ solicitud.precio }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ solicitud.preciomax }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ solicitud.idMoneda.nombre }}*/
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
