<?php

/* :tarea:index.html.twig */
class __TwigTemplate_c8c0745a998437a9acbb2e0bd1b751647de10b44820143595e6ee02c6845cf5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":tarea:index.html.twig", 1);
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
            <nav>
                <div class=\"nav-wrapper z-depth-1\">
                    <div class=\"col s12  blue darken-1 \">
                        <a href=\"#!\" class=\"breadcrumb\">Tareas</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class=\"row\">
            <table class=\"striped\">
                <thead>
                <tr>
                    <th>Asesor</th>
                    <th>Fecha</th>
                    <th>Acción</th>
                    <th>Prospecto</th>
                    <th>Propiedad</th>
                    <th>Comentarios</th>
                </tr>
                </thead>

                <tbody>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tareas"]) ? $context["tareas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tarea"]) {
            // line 33
            echo "                <tr>
                    <td>
                        ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tarea"], "getIdUsuario", array(), "method"), "nombre", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarea"], "fecha", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tarea"], "getIdAccion", array(), "method"), "nombre", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tarea"], "getIdProspecto", array(), "method"), "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tarea"], "getIdProspecto", array(), "method"), "apellidos", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarea"], "propiedad", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarea"], "comentarios", array()), "html", null, true);
            echo "
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </tbody>
            </table>
        </div>

    </div>
</div>
";
    }

    // line 62
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 63
        echo "
<style>
    body {
        background: white;
        height: 100vh;
    }
    img
    {
        width: 32px;
        height: 32px;
    }
</style>

";
    }

    public function getTemplateName()
    {
        return ":tarea:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 63,  122 => 62,  112 => 54,  102 => 50,  96 => 47,  88 => 44,  82 => 41,  76 => 38,  70 => 35,  66 => 33,  62 => 32,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div id="wrapper">*/
/*     <div id="container">*/
/*         <!-- Page Layout here -->*/
/*         <br/>*/
/*         <div class="row">*/
/*             <nav>*/
/*                 <div class="nav-wrapper z-depth-1">*/
/*                     <div class="col s12  blue darken-1 ">*/
/*                         <a href="#!" class="breadcrumb">Tareas</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <table class="striped">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Asesor</th>*/
/*                     <th>Fecha</th>*/
/*                     <th>Acción</th>*/
/*                     <th>Prospecto</th>*/
/*                     <th>Propiedad</th>*/
/*                     <th>Comentarios</th>*/
/*                 </tr>*/
/*                 </thead>*/
/* */
/*                 <tbody>*/
/*                 {% for tarea in tareas %}*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ tarea.getIdUsuario().nombre }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ tarea.fecha | date("d/m/Y H:i:s") }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ tarea.getIdAccion().nombre }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ tarea.getIdProspecto().nombre }} {{ tarea.getIdProspecto().apellidos }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ tarea.propiedad }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ tarea.comentarios }}*/
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
/*     img*/
/*     {*/
/*         width: 32px;*/
/*         height: 32px;*/
/*     }*/
/* </style>*/
/* */
/* {% endblock %}*/
/* */
