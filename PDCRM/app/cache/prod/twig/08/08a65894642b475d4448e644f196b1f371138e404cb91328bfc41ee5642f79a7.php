<?php

/* :comision:index.html.twig */
class __TwigTemplate_94bd99939538aaa3d8599ce038769565a38e6e3c1278598686220ffe1b994bc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":comision:index.html.twig", 1);
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
<div id=\"container\">

    <div class=\"row\">
        <nav>
            <div class=\"nav-wrapper z-depth-1\">
                <div class=\"col s12  blue darken-1 \">
                    <a href=\"#\" class=\"breadcrumb\">Comisiones</a>
                </div>
            </div>
        </nav>
    </div>

    <div class=\"row\">
        <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("comision_new", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-1 right\"><i class=\"material-icons left\">add</i>Nueva comisión</a>
    </div>

    <div class=\"row\" >
        <div class=\"col s12 m12 l12\">

            <table>
                <thead>
                <tr>
                    <th>Datos</th>
                    <th>Comision</th>
                    <th>Operaciones</th>
                </tr>
                </thead>
                <tbody>

                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comisiones"]) ? $context["comisiones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comision"]) {
            // line 35
            echo "                <tr>
                    <td>
                        <b>Fecha: </b>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comision"], "fecha", array()), "d/m/Y"), "html", null, true);
            echo "<br>
                        <b>Asesor: </b>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comision"], "asesor", array()), "nombre", array()), "html", null, true);
            echo "<br>
                        <b>Comparte: </b>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "comparte", array()), "html", null, true);
            echo "<br>
                        <b>Cliente: </b>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "cliente", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        <b>Operación: </b>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comision"], "operacioninmueble", array()), "nombre", array()), "html", null, true);
            echo "<br>
                        <b>Monto: \$ </b>";
            // line 44
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["comision"], "monto", array()), 2, ".", ","), "html", null, true);
            echo "<br>

                        ";
            // line 46
            $context["montocomision"] = ($this->getAttribute($context["comision"], "monto", array()) * ($this->getAttribute($context["comision"], "comision", array()) / 100));
            // line 47
            echo "                        <b>Comisión: </b>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "comision", array()), "html", null, true);
            echo " % - \$ ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["montocomision"]) ? $context["montocomision"] : null), 2, ".", ","), "html", null, true);
            echo " <br>

                        ";
            // line 49
            $context["montocomisionoficina"] = ((isset($context["montocomision"]) ? $context["montocomision"] : null) * ($this->getAttribute($context["comision"], "comisionoficina", array()) / 100));
            // line 50
            echo "                        <b>Comisión Oficina: </b>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "comisionoficina", array()), "html", null, true);
            echo " % - \$ ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["montocomisionoficina"]) ? $context["montocomisionoficina"] : null), 2, ".", ","), "html", null, true);
            echo "<br>

                        ";
            // line 52
            $context["montocomisionasesor"] = ((isset($context["montocomisionoficina"]) ? $context["montocomisionoficina"] : null) * ($this->getAttribute($context["comision"], "comisionasesor", array()) / 100));
            // line 53
            echo "                        <b>Comisión Asesor: </b>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "comisionasesor", array()), "html", null, true);
            echo " % - \$ ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["montocomisionasesor"]) ? $context["montocomisionasesor"] : null), 2, ".", ","), "html", null, true);
            echo "
                    </td>
                    <td>
                        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comision_edit", array("id" => $this->getAttribute($context["comision"], "id", array()))), "html", null, true);
            echo "\"><i class=\"material-icons left\">mode_edit</i></a>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
                </tbody>
            </table>
        </div>
    </div>

</div>

<style>
    body {
        height:100vh;
        background-color: white;
    }
</style>

";
    }

    public function getTemplateName()
    {
        return ":comision:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 60,  132 => 56,  123 => 53,  121 => 52,  113 => 50,  111 => 49,  103 => 47,  101 => 46,  96 => 44,  92 => 43,  86 => 40,  82 => 39,  78 => 38,  74 => 37,  70 => 35,  66 => 34,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div id="container">*/
/* */
/*     <div class="row">*/
/*         <nav>*/
/*             <div class="nav-wrapper z-depth-1">*/
/*                 <div class="col s12  blue darken-1 ">*/
/*                     <a href="#" class="breadcrumb">Comisiones</a>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <a href="{{ path('comision_new', {}) }}" class="waves-effect waves-light btn blue darken-1 right"><i class="material-icons left">add</i>Nueva comisión</a>*/
/*     </div>*/
/* */
/*     <div class="row" >*/
/*         <div class="col s12 m12 l12">*/
/* */
/*             <table>*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Datos</th>*/
/*                     <th>Comision</th>*/
/*                     <th>Operaciones</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/* */
/*                 {% for comision in comisiones %}*/
/*                 <tr>*/
/*                     <td>*/
/*                         <b>Fecha: </b>{{comision.fecha | date('d/m/Y')}}<br>*/
/*                         <b>Asesor: </b>{{ comision.asesor.nombre }}<br>*/
/*                         <b>Comparte: </b>{{ comision.comparte }}<br>*/
/*                         <b>Cliente: </b>{{ comision.cliente }}*/
/*                     </td>*/
/*                     <td>*/
/*                         <b>Operación: </b>{{comision.operacioninmueble.nombre}}<br>*/
/*                         <b>Monto: $ </b>{{comision.monto|number_format(2, '.', ',')}}<br>*/
/* */
/*                         {% set montocomision = comision.monto*(comision.comision/100) %}*/
/*                         <b>Comisión: </b>{{ comision.comision }} % - $ {{ montocomision|number_format(2, '.', ',') }} <br>*/
/* */
/*                         {% set montocomisionoficina = montocomision*(comision.comisionoficina/100) %}*/
/*                         <b>Comisión Oficina: </b>{{ comision.comisionoficina }} % - $ {{ montocomisionoficina|number_format(2, '.', ',') }}<br>*/
/* */
/*                         {% set montocomisionasesor = montocomisionoficina*(comision.comisionasesor/100) %}*/
/*                         <b>Comisión Asesor: </b>{{ comision.comisionasesor }} % - $ {{ montocomisionasesor|number_format(2, '.', ',') }}*/
/*                     </td>*/
/*                     <td>*/
/*                         <a href="{{ path ('comision_edit', {'id': comision.id}) }}"><i class="material-icons left">mode_edit</i></a>*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/* */
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <style>*/
/*     body {*/
/*         height:100vh;*/
/*         background-color: white;*/
/*     }*/
/* </style>*/
/* */
/* {% endblock %}*/
/* */
/* */
