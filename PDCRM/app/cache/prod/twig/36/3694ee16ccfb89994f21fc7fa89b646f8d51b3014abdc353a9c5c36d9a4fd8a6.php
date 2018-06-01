<?php

/* :destacado:index.html.twig */
class __TwigTemplate_6d8bb79e103022f577dee837d8ca29159c73dc539bd1718d7fde4d37a4b67335 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":destacado:index.html.twig", 1);
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
                        <a href=\"#!\" class=\"breadcrumb\">Destacados</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class=\"row\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("destacado_new", array());
        echo "\" class=\"waves-effect waves-light blue btn right\"><i class=\"material-icons left\">add</i>Nuevo destacado</a>
        </div>

        <div class=\"row\" >
            <div class=\"col s12 m12 l12\">

                <table>
                    <thead>
                    <tr>
                        <th>Propiedad</th>
                        <th></th>
                        <th>Operaciones</th>
                    </tr>
                    </thead>
                    <tbody>


                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["destacados"]) ? $context["destacados"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["destacado"]) {
            // line 36
            echo "                    <tr>
                    <td>
                        ";
            // line 38
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["destacado"], "inmueble", array()), "Imagenes", array())) > 0)) {
                // line 39
                echo "                            <img class=\"imginmueble\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["destacado"], "inmueble", array()), "Imagenes", array()), 0, array(), "array"), "getWebPath", array(), "method"), "html", null, true);
                echo "\">
                        ";
            }
            // line 41
            echo "                        <p><i class=\"material-icons left\">camera_alt</i>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["destacado"], "inmueble", array()), "imagenes", array())), "html", null, true);
            echo "</p>
                    </td>
                    <td>
                        <h5>ID: ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["destacado"], "inmueble", array()), "legacyid", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["destacado"], "inmueble", array()), "nombreid", array()), "html", null, true);
            echo " </h5>
                        <h5>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["destacado"], "inmueble", array()), "idTipoInmueble", array()), "nombre", array()), "html", null, true);
            echo " en ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["destacado"], "inmueble", array()), "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
            echo "</h5>
                        <ul>
                            <li><i class=\"material-icons left\">location_on</i>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["destacado"], "inmueble", array()), "calle", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["destacado"], "inmueble", array()), "idEstado", array()), "nombre", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["destacado"], "inmueble", array()), "idMunicipio", array()), "nombre", array()), "html", null, true);
            echo " </li>
                            <li>Zona: ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["destacado"], "inmueble", array()), "idZona", array()), "nombre", array()), "html", null, true);
            echo "</li>
                        </ul>
                    </td>
                    <td>
                        <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("destacado_edit", array("id" => $this->getAttribute($context["destacado"], "id", array()))), "html", null, true);
            echo "\"><i class=\"material-icons left\">mode_edit</i></a>
                        <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("destacado_borrar", array("id" => $this->getAttribute($context["destacado"], "id", array()))), "html", null, true);
            echo "\" onclick=\"if (confirm('¿Está seguro que desea borrar este destacado?')) { return true; } else {return false;}\"><i class=\"material-icons left\">delete</i></a>
                    </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destacado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <style>
        body {
            height:100vh;
            background-color: white;
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
        return ":destacado:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 57,  122 => 53,  118 => 52,  111 => 48,  103 => 47,  96 => 45,  90 => 44,  83 => 41,  77 => 39,  75 => 38,  71 => 36,  67 => 35,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div id="container">*/
/* */
/*         <div class="row">*/
/*             <nav>*/
/*                 <div class="nav-wrapper z-depth-1">*/
/*                     <div class="col s12  blue darken-1 ">*/
/*                         <a href="#!" class="breadcrumb">Destacados</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <a href="{{ path('destacado_new', {}) }}" class="waves-effect waves-light blue btn right"><i class="material-icons left">add</i>Nuevo destacado</a>*/
/*         </div>*/
/* */
/*         <div class="row" >*/
/*             <div class="col s12 m12 l12">*/
/* */
/*                 <table>*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Propiedad</th>*/
/*                         <th></th>*/
/*                         <th>Operaciones</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/* */
/* */
/*                     {% for destacado in destacados %}*/
/*                     <tr>*/
/*                     <td>*/
/*                         {% if (destacado.inmueble.Imagenes|length>0) %}*/
/*                             <img class="imginmueble" src="{{ destacado.inmueble.Imagenes[0].getWebPath() }}">*/
/*                         {% endif %}*/
/*                         <p><i class="material-icons left">camera_alt</i>{{ destacado.inmueble.imagenes | length }}</p>*/
/*                     </td>*/
/*                     <td>*/
/*                         <h5>ID: {{ destacado.inmueble.legacyid }} {{ destacado.inmueble.nombreid }} </h5>*/
/*                         <h5>{{ destacado.inmueble.idTipoInmueble.nombre }} en {{ destacado.inmueble.idOperacionInmueble.nombre }}</h5>*/
/*                         <ul>*/
/*                             <li><i class="material-icons left">location_on</i>{{ destacado.inmueble.calle }}, {{ destacado.inmueble.idEstado.nombre }}, {{ destacado.inmueble.idMunicipio.nombre }} </li>*/
/*                             <li>Zona: {{ destacado.inmueble.idZona.nombre }}</li>*/
/*                         </ul>*/
/*                     </td>*/
/*                     <td>*/
/*                         <a href="{{ path ('destacado_edit', {'id': destacado.id}) }}"><i class="material-icons left">mode_edit</i></a>*/
/*                         <a href="{{ path('destacado_borrar', {'id':destacado.id}) }}" onclick="if (confirm('¿Está seguro que desea borrar este destacado?')) { return true; } else {return false;}"><i class="material-icons left">delete</i></a>*/
/*                     </td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <style>*/
/*         body {*/
/*             height:100vh;*/
/*             background-color: white;*/
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
/* */
