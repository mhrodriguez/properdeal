<?php

/* :comision:show.html.twig */
class __TwigTemplate_fed63b239b4de577a1e05e25f60b293ae6a4eb635e59d743b3853f8c8da3362d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comision:show.html.twig", 1);
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
        echo "    <h1>Comision</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comision"]) ? $context["comision"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["comision"]) ? $context["comision"] : null), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comision"]) ? $context["comision"] : null), "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fechacreacion</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["comision"]) ? $context["comision"] : null), "fechaCreacion", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comision"]) ? $context["comision"] : null), "fechaCreacion", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Comparte</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comision"]) ? $context["comision"] : null), "comparte", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cliente</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comision"]) ? $context["comision"] : null), "cliente", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Monto</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comision"]) ? $context["comision"] : null), "monto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Propiedadexterna</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comision"]) ? $context["comision"] : null), "propiedadexterna", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comision</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comision"]) ? $context["comision"] : null), "comision", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comisionoficina</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comision"]) ? $context["comision"] : null), "comisionoficina", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comisionasesor</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comision"]) ? $context["comision"] : null), "comisionasesor", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Activo</th>
                <td>";
        // line 50
        if ($this->getAttribute((isset($context["comision"]) ? $context["comision"] : null), "activo", array())) {
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
        // line 57
        echo $this->env->getExtension('routing')->getPath("comision_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comision_edit", array("id" => $this->getAttribute((isset($context["comision"]) ? $context["comision"] : null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":comision:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 65,  139 => 63,  133 => 60,  127 => 57,  113 => 50,  106 => 46,  99 => 42,  92 => 38,  85 => 34,  78 => 30,  71 => 26,  64 => 22,  55 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Comision</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ comision.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fecha</th>*/
/*                 <td>{% if comision.fecha %}{{ comision.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechacreacion</th>*/
/*                 <td>{% if comision.fechaCreacion %}{{ comision.fechaCreacion|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Comparte</th>*/
/*                 <td>{{ comision.comparte }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cliente</th>*/
/*                 <td>{{ comision.cliente }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Monto</th>*/
/*                 <td>{{ comision.monto }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Propiedadexterna</th>*/
/*                 <td>{{ comision.propiedadexterna }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Comision</th>*/
/*                 <td>{{ comision.comision }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Comisionoficina</th>*/
/*                 <td>{{ comision.comisionoficina }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Comisionasesor</th>*/
/*                 <td>{{ comision.comisionasesor }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Activo</th>*/
/*                 <td>{% if comision.activo %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('comision_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('comision_edit', { 'id': comision.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
