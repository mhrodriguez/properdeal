<?php

/* :asesor:permiso.html.twig */
class __TwigTemplate_96ac0ba28229848056be8957fc991a3158af3ff841f08918c553440e9fb41f6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":asesor:permiso.html.twig", 1);
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
            <br/>
            <div class=\"row\">
                <nav>
                    <div class=\"nav-wrapper z-depth-1\">
                        <div class=\"col s12  blue darken-1 \">
                            <a href=\"#!\" class=\"breadcrumb\">Permisos</a>
                        </div>
                    </div>
                </nav>
            </div>

            <div class=\"row\">
                <table class=\"striped\">
                    <thead>
                    <tr>
                        <th data-field=\"id\">Asesor</th>
                        <th data-field=\"name\">Datos</th>
                        <th data-field=\"price\">Registro</th>
                        <th data-field=\"price\">Opciones</th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 31
            echo "                        <tr>
                            <td style=\"width:100px\">
                                ";
            // line 33
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "3a93b33_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33_0") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33_ic_usuario_1.jpg");
                // line 34
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"circle responsive-img\">
                                ";
            } else {
                // asset "3a93b33"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33.jpg");
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"circle responsive-img\">
                                ";
            }
            unset($context["asset_url"]);
            // line 36
            echo "                            </td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td>Desde: ";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["usuario"], "fechaCreacion", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asesorpermiso_edit", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">Permisos</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
    }

    // line 51
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 52
        echo "
    <style>
        body {
            background: white;
            height: 100vh;
        }
    </style>

";
    }

    public function getTemplateName()
    {
        return ":asesor:permiso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 52,  117 => 51,  108 => 44,  98 => 40,  93 => 38,  89 => 37,  86 => 36,  72 => 34,  68 => 33,  64 => 31,  60 => 30,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <!-- Page Layout here -->*/
/*             <br/>*/
/*             <div class="row">*/
/*                 <nav>*/
/*                     <div class="nav-wrapper z-depth-1">*/
/*                         <div class="col s12  blue darken-1 ">*/
/*                             <a href="#!" class="breadcrumb">Permisos</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <table class="striped">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th data-field="id">Asesor</th>*/
/*                         <th data-field="name">Datos</th>*/
/*                         <th data-field="price">Registro</th>*/
/*                         <th data-field="price">Opciones</th>*/
/*                     </tr>*/
/*                     </thead>*/
/* */
/*                     <tbody>*/
/*                     {% for usuario in usuarios %}*/
/*                         <tr>*/
/*                             <td style="width:100px">*/
/*                                 {% image '@FrameworkBundle/Resources/public/images/ic_usuario.jpg' %}*/
/*                                 <img src="{{ asset_url }}" alt="" class="circle responsive-img">*/
/*                                 {% endimage %}*/
/*                             </td>*/
/*                             <td>{{ usuario.nombre }}</td>*/
/*                             <td>Desde: {{ usuario.fechaCreacion|date('d-m-Y') }}</td>*/
/*                             <td>*/
/*                                 <a href="{{ path('asesorpermiso_edit', {'id' : usuario.id}) }}">Permisos</a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
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
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
