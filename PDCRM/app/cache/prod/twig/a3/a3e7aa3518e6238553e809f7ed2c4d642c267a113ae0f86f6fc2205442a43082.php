<?php

/* :mensaje:resumenenvios.html.twig */
class __TwigTemplate_4af41a4f2b775accf6943cc7e8b949ef2cbb6dbb3bf55275b92c4c9d36adcef4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":mensaje:resumenenvios.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
                <nav>
                    <div class=\"nav-wrapper z-depth-1\">
                        <div class=\"col s12  blue darken-1 \">
                            <a href=\"#!\" class=\"breadcrumb\">Resumen de Envios</a>
                        </div>
                    </div>
                </nav>
            </div>

            <div class=\"row\">
                <table>
                    <thead>
                        <th>
                            De:
                        </th>
                        <th>
                            Para:
                        </th>
                        <th>
                            Fecha:
                        </th>
                        <th>
                            Propiedades:
                        </th>
                    </thead>
                    <tbody>
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mensajes"]) ? $context["mensajes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 36
            echo "                        <tr>
                            <td>
                                ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mensaje"], "idUsuario", array()), "nombre", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "destinoemail", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mensaje"], "fechaCreacion", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mensaje"], "inmuebles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
                // line 48
                echo "                                    ID: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "legacyid", array()), "html", null, true);
                echo "<br>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
    }

    // line 60
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 61
        echo "    <style>
        body {
            background: white;
            height: 200vh;
        }
    </style>

";
    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":mensaje:resumenenvios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 70,  125 => 61,  122 => 60,  113 => 53,  105 => 50,  96 => 48,  92 => 47,  86 => 44,  80 => 41,  74 => 38,  70 => 36,  66 => 35,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <!-- Page Layout here -->*/
/*             <br/>*/
/*             <div class="row">*/
/*                 <nav>*/
/*                     <div class="nav-wrapper z-depth-1">*/
/*                         <div class="col s12  blue darken-1 ">*/
/*                             <a href="#!" class="breadcrumb">Resumen de Envios</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <table>*/
/*                     <thead>*/
/*                         <th>*/
/*                             De:*/
/*                         </th>*/
/*                         <th>*/
/*                             Para:*/
/*                         </th>*/
/*                         <th>*/
/*                             Fecha:*/
/*                         </th>*/
/*                         <th>*/
/*                             Propiedades:*/
/*                         </th>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for mensaje in mensajes %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {{ mensaje.idUsuario.nombre }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ mensaje.destinoemail }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ mensaje.fechaCreacion|date("d/m/Y H:i:s")  }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {% for inmueble in mensaje.inmuebles %}*/
/*                                     ID: {{ inmueble.legacyid }}<br>*/
/*                                 {% endfor %}*/
/*                             </td>*/
/*                         </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <style>*/
/*         body {*/
/*             background: white;*/
/*             height: 200vh;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock %}*/
/* */
