<?php

/* :archivo:show.html.twig */
class __TwigTemplate_2d4899f401f7918f6c891d020a5d7d0bdbe4a4f12e4353582a477a4becf0d8e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":archivo:show.html.twig", 1);
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
        echo "    <h1>Archivo</h1>

    <table>
        <tbody>
            <tr>
                <th>Idarchivo</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["archivo"]) ? $context["archivo"] : null), "idArchivo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["archivo"]) ? $context["archivo"] : null), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechacreacion</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["archivo"]) ? $context["archivo"] : null), "fechaCreacion", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["archivo"]) ? $context["archivo"] : null), "fechaCreacion", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Privado</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["archivo"]) ? $context["archivo"] : null), "privado", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["archivo"]) ? $context["archivo"] : null), "comentarios", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Activo</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["archivo"]) ? $context["archivo"] : null), "activo", array())) {
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
        // line 37
        echo $this->env->getExtension('routing')->getPath("archivo_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("archivo_edit", array("id" => $this->getAttribute((isset($context["archivo"]) ? $context["archivo"] : null), "idArchivo", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":archivo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 45,  106 => 43,  100 => 40,  94 => 37,  80 => 30,  73 => 26,  62 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Archivo</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idarchivo</th>*/
/*                 <td>{{ archivo.idArchivo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ archivo.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechacreacion</th>*/
/*                 <td>{% if archivo.fechaCreacion %}{{ archivo.fechaCreacion|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Privado</th>*/
/*                 <td>{% if archivo.privado %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Comentarios</th>*/
/*                 <td>{{ archivo.comentarios }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Activo</th>*/
/*                 <td>{% if archivo.activo %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('archivo_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('archivo_edit', { 'id': archivo.idArchivo }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
