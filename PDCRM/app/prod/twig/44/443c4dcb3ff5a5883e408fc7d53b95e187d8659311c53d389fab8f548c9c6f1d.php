<?php

/* :asesor:index.html.twig */
class __TwigTemplate_5e7935e0c95a52f2ebab6fb3b60389e7a870a2de681daaa4a413c5e86483072b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":asesor:index.html.twig", 1);
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
                            <a href=\"#!\" class=\"breadcrumb\">Asesores</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class=\"row\">
                <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("asesor_new", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-1 right\"><i class=\"material-icons left\">add</i>Nuevo Asesor</a>
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
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 34
            echo "                    <tr>
                        <td style=\"width:100px\">
                            ";
            // line 36
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "3a93b33_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33_0") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33_ic_usuario_1.jpg");
                // line 37
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"circle responsive-img\">
                            ";
            } else {
                // asset "3a93b33"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33.jpg");
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"circle responsive-img\">
                            ";
            }
            unset($context["asset_url"]);
            // line 39
            echo "                        </td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
            echo "</td>
                        <td>Desde: ";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["usuario"], "fechaCreacion", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
    }

    // line 52
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 53
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
        return ":asesor:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 53,  118 => 52,  109 => 45,  99 => 41,  95 => 40,  92 => 39,  78 => 37,  74 => 36,  70 => 34,  66 => 33,  48 => 18,  32 => 4,  29 => 3,  11 => 1,);
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
/*                             <a href="#!" class="breadcrumb">Asesores</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <a href="{{ path('asesor_new', {}) }}" class="waves-effect waves-light btn blue darken-1 right"><i class="material-icons left">add</i>Nuevo Asesor</a>*/
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
/*                     <tr>*/
/*                         <td style="width:100px">*/
/*                             {% image '@FrameworkBundle/Resources/public/images/ic_usuario.jpg' %}*/
/*                             <img src="{{ asset_url }}" alt="" class="circle responsive-img">*/
/*                             {% endimage %}*/
/*                         </td>*/
/*                         <td>{{ usuario.nombre }}</td>*/
/*                         <td>Desde: {{ usuario.fechaCreacion|date('d-m-Y') }}</td>*/
/*                         <td></td>*/
/*                     </tr>*/
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
