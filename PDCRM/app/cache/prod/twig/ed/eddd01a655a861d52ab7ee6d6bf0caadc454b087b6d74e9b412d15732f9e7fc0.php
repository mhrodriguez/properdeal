<?php

/* :propietario:show.html.twig */
class __TwigTemplate_34b5049d46c769e7c0d2b02b11150659964693dc001fb274e7e077db7a9df054 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":propietario:show.html.twig", 1);
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
        echo "    <h1>Propietario</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : null), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellidos</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : null), "apellidos", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : null), "telefono", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefonomovil</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : null), "telefonomovil", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Oficina</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : null), "oficina", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : null), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Horariovisita</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : null), "horariovisita", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comision</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : null), "comision", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Enviarmail</th>
                <td>";
        // line 46
        if ($this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : null), "enviarmail", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Mostrardatos</th>
                <td>";
        // line 50
        if ($this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : null), "mostrardatos", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 54
        if ($this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : null), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : null), "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Activo</th>
                <td>";
        // line 58
        if ($this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : null), "activo", array())) {
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
        // line 65
        echo $this->env->getExtension('routing')->getPath("propietario_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("propietario_edit", array("id" => $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":propietario:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 73,  159 => 71,  153 => 68,  147 => 65,  133 => 58,  124 => 54,  113 => 50,  102 => 46,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Propietario</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ propietario.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ propietario.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Apellidos</th>*/
/*                 <td>{{ propietario.apellidos }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Telefono</th>*/
/*                 <td>{{ propietario.telefono }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Telefonomovil</th>*/
/*                 <td>{{ propietario.telefonomovil }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Oficina</th>*/
/*                 <td>{{ propietario.oficina }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ propietario.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Horariovisita</th>*/
/*                 <td>{{ propietario.horariovisita }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Comision</th>*/
/*                 <td>{{ propietario.comision }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Enviarmail</th>*/
/*                 <td>{% if propietario.enviarmail %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Mostrardatos</th>*/
/*                 <td>{% if propietario.mostrardatos %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fecha</th>*/
/*                 <td>{% if propietario.fecha %}{{ propietario.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Activo</th>*/
/*                 <td>{% if propietario.activo %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('propietario_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('propietario_edit', { 'id': propietario.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
