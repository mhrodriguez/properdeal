<?php

/* :tarea:actividades.html.twig */
class __TwigTemplate_c8e3c382b6feea1b0d155fb4188cbed1b8df5ab50d6304892511b521ede61205 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":tarea:actividades.html.twig", 1);
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
            <p>LISTADO DE ACTIVIDADES</p>

            <div class=\"row\">
                <table class=\"striped\">
                    <thead>
                    <tr>
                        <th>Prop</th>
                        <th>Fecha</th>
                        <th>Accion</th>
                        <th>Prospecto</th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tareas"]) ? $context["tareas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tarea"]) {
            // line 22
            echo "                        <tr>
                            <td>
                                ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarea"], "propiedad", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarea"], "fecha", array()), "d/F (H:i)"), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tarea"], "getIdAccion", array(), "method"), "nombre", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tarea"], "getIdProspecto", array(), "method"), "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tarea"], "getIdProspecto", array(), "method"), "apellidos", array()), "html", null, true);
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    </tbody>
                </table>
            </div>

        </div>
    </div>
";
    }

    // line 45
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 46
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
        return ":tarea:actividades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 46,  99 => 45,  89 => 37,  77 => 33,  71 => 30,  65 => 27,  59 => 24,  55 => 22,  51 => 21,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <!-- Page Layout here -->*/
/*             <p>LISTADO DE ACTIVIDADES</p>*/
/* */
/*             <div class="row">*/
/*                 <table class="striped">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Prop</th>*/
/*                         <th>Fecha</th>*/
/*                         <th>Accion</th>*/
/*                         <th>Prospecto</th>*/
/*                     </tr>*/
/*                     </thead>*/
/* */
/*                     <tbody>*/
/*                     {% for tarea in tareas %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {{ tarea.propiedad }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ tarea.fecha | date("d/F (H:i)") }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ tarea.getIdAccion().nombre }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ tarea.getIdProspecto().nombre }} {{ tarea.getIdProspecto().apellidos }}*/
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
/*         img*/
/*         {*/
/*             width: 32px;*/
/*             height: 32px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
