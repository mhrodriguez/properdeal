<?php

/* :contacto:index.html.twig */
class __TwigTemplate_88886d8ee17f30fdbbf48e66e8a3e8dbf88cfd7da173990ca6da24a497ab99c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":contacto:index.html.twig", 1);
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
                            <a href=\"#!\" class=\"breadcrumb\">Contactos</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class=\"row\">
                <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("contacto_new", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-1 right\"><i class=\"material-icons left\">add</i>Nuevo Contacto</a>
            </div>

            <div class=\"row\">
                <table class=\"striped\">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Operaciones</th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contactos"]) ? $context["contactos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["contacto"]) {
            // line 32
            echo "                        <tr>
                            <td>
                                ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["contacto"], "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contacto"], "apellidos", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 37
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "144fd89_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_144fd89_0") : $this->env->getExtension('asset')->getAssetUrl("images/144fd89_ic_mensaje_1.png");
                // line 38
                echo "                                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("mensaje_new", array());
                echo "?tipoMensaje=2&idContacto=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contacto"], "idContacto", array()), "html", null, true);
                echo "\">
                                    <i class=\"material-icons left\">email</i>
                                </a>
                                ";
            } else {
                // asset "144fd89"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_144fd89") : $this->env->getExtension('asset')->getAssetUrl("images/144fd89.png");
                echo "                                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("mensaje_new", array());
                echo "?tipoMensaje=2&idContacto=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contacto"], "idContacto", array()), "html", null, true);
                echo "\">
                                    <i class=\"material-icons left\">email</i>
                                </a>
                                ";
            }
            unset($context["asset_url"]);
            // line 42
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contacto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                    </tbody>
                </table>
            </div>

        </div>
    </div>
";
    }

    // line 53
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 54
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
        return ":contacto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 54,  124 => 53,  114 => 45,  106 => 42,  84 => 38,  80 => 37,  72 => 34,  68 => 32,  64 => 31,  48 => 18,  32 => 4,  29 => 3,  11 => 1,);
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
/*                             <a href="#!" class="breadcrumb">Contactos</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <a href="{{ path('contacto_new', {}) }}" class="waves-effect waves-light btn blue darken-1 right"><i class="material-icons left">add</i>Nuevo Contacto</a>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <table class="striped">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Nombre</th>*/
/*                         <th>Operaciones</th>*/
/*                     </tr>*/
/*                     </thead>*/
/* */
/*                     <tbody>*/
/*                     {% for contacto in contactos %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {{ contacto.nombre }} {{ contacto.apellidos }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {% image '@FrameworkBundle/Resources/public/images/ic_mensaje.png' %}*/
/*                                 <a href="{{ path ('mensaje_new', {}) }}?tipoMensaje=2&idContacto={{ contacto.idContacto }}">*/
/*                                     <i class="material-icons left">email</i>*/
/*                                 </a>*/
/*                                 {% endimage %}*/
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
