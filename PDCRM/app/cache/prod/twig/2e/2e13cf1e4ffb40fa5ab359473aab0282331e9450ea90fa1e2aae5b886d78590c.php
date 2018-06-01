<?php

/* :prospecto:show.html.twig */
class __TwigTemplate_6a57f3b8319304071af3d1446053804210366d4108e8e41c7a24b67a10c96aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":prospecto:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Prospecto</h1>

    <table>
        <tbody>
            <tr>
                <th>Idprospecto</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "idProspecto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellidos</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "apellidos", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "direccion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ciudad</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "ciudad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "telefono", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefonomovil</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "telefonoMovil", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Presupuesto</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "presupuesto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Observaciones</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "observaciones", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechacreacion</th>
                <td>";
        // line 50
        if ($this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "fechaCreacion", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "fechaCreacion", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Activo</th>
                <td>";
        // line 54
        if ($this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "activo", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("prospecto_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prospecto_edit", array("id" => $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "idProspecto", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":prospecto:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 69,  144 => 67,  138 => 64,  132 => 61,  118 => 54,  109 => 50,  102 => 46,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Prospecto</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idprospecto</th>*/
/*                 <td>{{ prospecto.idProspecto }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ prospecto.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Apellidos</th>*/
/*                 <td>{{ prospecto.apellidos }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ prospecto.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Direccion</th>*/
/*                 <td>{{ prospecto.direccion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ciudad</th>*/
/*                 <td>{{ prospecto.ciudad }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Telefono</th>*/
/*                 <td>{{ prospecto.telefono }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Telefonomovil</th>*/
/*                 <td>{{ prospecto.telefonoMovil }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Presupuesto</th>*/
/*                 <td>{{ prospecto.presupuesto }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Observaciones</th>*/
/*                 <td>{{ prospecto.observaciones }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechacreacion</th>*/
/*                 <td>{% if prospecto.fechaCreacion %}{{ prospecto.fechaCreacion|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Activo</th>*/
/*                 <td>{% if prospecto.activo %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('prospecto_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('prospecto_edit', { 'id': prospecto.idProspecto }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
