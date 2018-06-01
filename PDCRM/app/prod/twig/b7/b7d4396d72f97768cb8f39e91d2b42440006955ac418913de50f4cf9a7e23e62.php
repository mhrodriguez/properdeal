<?php

/* :solicitud:show.html.twig */
class __TwigTemplate_dab0059218a75660882462e253aecbcd81efcf8db02358450b42c6b28bd64fc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":solicitud:show.html.twig", 1);
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
        echo "    <h1>Solicitud</h1>

    <!--table>
        <tbody>
            <tr>
                <th>Idsolicitud</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "idSolicitud", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechacreacion</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "fechaCreacion", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "fechaCreacion", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "precio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Preciomax</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "preciomax", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Metrosconstruccion</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "metrosconstruccion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Metrosconstruccionmax</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "metrosconstruccionmax", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Metrosterreno</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "metrosterreno", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Metrosterrenomax</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "metrosterrenomax", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Activo</th>
                <td>";
        // line 42
        if ($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "activo", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : null), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table-->

    <!--ul>
        <li>
            <a href=\"";
        // line 53
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 56
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
        </li>
    </ul-->
";
    }

    public function getTemplateName()
    {
        return ":solicitud:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 61,  128 => 59,  123 => 56,  118 => 53,  108 => 46,  97 => 42,  90 => 38,  83 => 34,  76 => 30,  69 => 26,  62 => 22,  55 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Solicitud</h1>*/
/* */
/*     <!--table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idsolicitud</th>*/
/*                 <td>{{ solicitud.idSolicitud }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechacreacion</th>*/
/*                 <td>{% if solicitud.fechaCreacion %}{{ solicitud.fechaCreacion|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Precio</th>*/
/*                 <td>{{ solicitud.precio }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Preciomax</th>*/
/*                 <td>{{ solicitud.preciomax }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Metrosconstruccion</th>*/
/*                 <td>{{ solicitud.metrosconstruccion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Metrosconstruccionmax</th>*/
/*                 <td>{{ solicitud.metrosconstruccionmax }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Metrosterreno</th>*/
/*                 <td>{{ solicitud.metrosterreno }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Metrosterrenomax</th>*/
/*                 <td>{{ solicitud.metrosterrenomax }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Activo</th>*/
/*                 <td>{% if solicitud.activo %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Descripcion</th>*/
/*                 <td>{{ solicitud.descripcion }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table-->*/
/* */
/*     <!--ul>*/
/*         <li>*/
/*             <a href="{# path('solicitud_index') #}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{# path('solicitud_edit', { 'id': solicitud.idSolicitud }) #}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul-->*/
/* {% endblock %}*/
/* */
