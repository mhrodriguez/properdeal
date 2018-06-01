<?php

/* :inmueble:index.html.twig */
class __TwigTemplate_fa25e965959b4cd4327d3bde85cf47dda964bd4f192891e5c7682358d16b62c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":inmueble:index.html.twig", 1);
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
                            <a href=\"#!\" class=\"breadcrumb\">Propiedades</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class=\"row\">
                <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("inmueble_new", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-1 right\"><i class=\"material-icons left\">add</i>Nueva Propiedad</a>
            </div>

            <div class=\"row\">
                <table class=\"striped\">
                    <thead>
                    <tr>
                        <th data-field=\"id\"><p>Propiedad</p></th>
                        <th><p>Operaciones</p></th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inmuebles"]) ? $context["inmuebles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
            // line 32
            echo "                        <tr>
                            <td>
                                ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "calle", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "numero", array()), "html", null, true);
            echo "<br/>
                            </td>
                            <td>
                                ";
            // line 37
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "5395b67_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5395b67_0") : $this->env->getExtension('asset')->getAssetUrl("images/5395b67_ic_imagenes_1.png");
                // line 38
                echo "                                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("inmuebleimagen_index", array());
                echo "?idInmueble=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"responsive-img\" title=\"Fotografias de la Propiedad\"></a>
                                ";
            } else {
                // asset "5395b67"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5395b67") : $this->env->getExtension('asset')->getAssetUrl("images/5395b67.png");
                echo "                                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("inmuebleimagen_index", array());
                echo "?idInmueble=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"responsive-img\" title=\"Fotografias de la Propiedad\"></a>
                                ";
            }
            unset($context["asset_url"]);
            // line 40
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
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
        p
        {
            font-size: small;
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
        return ":inmueble:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 52,  124 => 51,  114 => 43,  106 => 40,  84 => 38,  80 => 37,  72 => 34,  68 => 32,  64 => 31,  48 => 18,  32 => 4,  29 => 3,  11 => 1,);
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
/*                             <a href="#!" class="breadcrumb">Propiedades</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <a href="{{ path('inmueble_new', {}) }}" class="waves-effect waves-light btn blue darken-1 right"><i class="material-icons left">add</i>Nueva Propiedad</a>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <table class="striped">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th data-field="id"><p>Propiedad</p></th>*/
/*                         <th><p>Operaciones</p></th>*/
/*                     </tr>*/
/*                     </thead>*/
/* */
/*                     <tbody>*/
/*                     {% for inmueble in inmuebles %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {{ inmueble.calle }} {{ inmueble.numero }}<br/>*/
/*                             </td>*/
/*                             <td>*/
/*                                 {% image '@FrameworkBundle/Resources/public/images/ic_imagenes.png' %}*/
/*                                 <a href="{{ path ('inmuebleimagen_index', {}) }}?idInmueble={{ inmueble.idInmueble }}"><img src="{{ asset_url }}" alt="" class="responsive-img" title="Fotografias de la Propiedad"></a>*/
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
/*         p*/
/*         {*/
/*             font-size: small;*/
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
