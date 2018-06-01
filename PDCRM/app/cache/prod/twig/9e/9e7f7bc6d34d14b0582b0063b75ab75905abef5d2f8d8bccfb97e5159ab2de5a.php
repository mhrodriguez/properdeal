<?php

/* :tarea:show.html.twig */
class __TwigTemplate_553583dbea6b1739ef8e5e83ad685906b66367b581a8b15e2ac306bf7d655504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":tarea:show.html.twig", 1);
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
        echo "    <table>
        <tbody>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 8
        if ($this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : null), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : null), "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>

            <tr>
                <th>Actividad</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : null), "idAccion", array()), "nombre", array()), "html", null, true);
        echo "</td>
                <th>Prospecto</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : null), "idProspecto", array()), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>

            </tr>

            <tr>
                <th>E-Mail</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : null), "idProspecto", array()), "email", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Teléfono</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : null), "idProspecto", array()), "telefono", array()), "html", null, true);
        echo "</td>
                <th>Teléfono móvil</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : null), "idProspecto", array()), "telefonoMovil", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>

            </tr>

            <tr>
                <th>Propiedad</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : null), "propiedad", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Comentarios</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : null), "comentarios", array()), "html", null, true);
        echo "</td>
            </tr>

        </tbody>
    </table>

    <!--ul>
        <li>

        </li>
        <li>
        </li>
        <li-->
            ";
        // line 59
        echo "                <!--input type=\"submit\" value=\"Delete\"-->
            ";
        // line 61
        echo "        <!--/li>
    </ul-->
";
    }

    public function getTemplateName()
    {
        return ":tarea:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 61,  113 => 59,  97 => 45,  89 => 40,  77 => 31,  72 => 29,  64 => 24,  52 => 15,  47 => 13,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Fecha</th>*/
/*                 <td>{% if tarea.fecha %}{{ tarea.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>Actividad</th>*/
/*                 <td>{{ tarea.idAccion.nombre }}</td>*/
/*                 <th>Prospecto</th>*/
/*                 <td>{{ tarea.idProspecto.nombre }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/* */
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>E-Mail</th>*/
/*                 <td>{{ tarea.idProspecto.email }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>Teléfono</th>*/
/*                 <td>{{ tarea.idProspecto.telefono }}</td>*/
/*                 <th>Teléfono móvil</th>*/
/*                 <td>{{ tarea.idProspecto.telefonoMovil }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/* */
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>Propiedad</th>*/
/*                 <td>{{ tarea.propiedad }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>Comentarios</th>*/
/*                 <td>{{ tarea.comentarios }}</td>*/
/*             </tr>*/
/* */
/*         </tbody>*/
/*     </table>*/
/* */
/*     <!--ul>*/
/*         <li>*/
/* */
/*         </li>*/
/*         <li>*/
/*         </li>*/
/*         <li-->*/
/*             {# form_start(delete_form) #}*/
/*                 <!--input type="submit" value="Delete"-->*/
/*             {# form_end(delete_form) #}*/
/*         <!--/li>*/
/*     </ul-->*/
/* {% endblock %}*/
/* */
