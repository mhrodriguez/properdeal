<?php

/* :inmuebleimagen:index.html.twig */
class __TwigTemplate_8c9425a838ed6b3b59e39dce20fab5c0f95d8fe81a2ecf5f5f3d2a73d8991ba7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":inmuebleimagen:index.html.twig", 1);
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
                            <a href=\"#!\" class=\"breadcrumb\">Imágenes de Propiedad</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class=\"row\">
                <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("inmuebleimagen_new", array());
        echo "?idInmueble=";
        echo twig_escape_filter($this->env, (isset($context["idInmueble"]) ? $context["idInmueble"] : null), "html", null, true);
        echo "\" class=\"waves-effect waves-light btn blue darken-1 right\"><i class=\"material-icons left\">add</i>Nueva Imagen</a>
            </div>

            <div class=\"row\">
                <table class=\"striped\">
                    <thead>
                    <tr>
                        <th><p>Imágenes</p></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagenes"]) ? $context["imagenes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
            // line 32
            echo "                                    <div class=\"col s3 m3 l3\">
                                        <a>
                                            <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["imagen"], "getWebPath", array(), "method"), "html", null, true);
            echo "\" style=\"width:100%;height:100%\">
                                        </a>
                                        <p>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["imagen"], "descripcion", array()), "html", null, true);
            echo "</p>
                                        ";
            // line 37
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "a8ce5a8_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8ce5a8_0") : $this->env->getExtension('asset')->getAssetUrl("images/a8ce5a8_trash_1.png");
                // line 38
                echo "                                        <a href=\"#\"><img class=\"imgoperacion\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"responsive-img\" title=\"Borrar Fotografia\"></a>
                                        ";
            } else {
                // asset "a8ce5a8"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8ce5a8") : $this->env->getExtension('asset')->getAssetUrl("images/a8ce5a8.png");
                echo "                                        <a href=\"#\"><img class=\"imgoperacion\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"responsive-img\" title=\"Borrar Fotografia\"></a>
                                        ";
            }
            unset($context["asset_url"]);
            // line 40
            echo "                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                            </td>
                        </tr>
                    </tbody>
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

        p
        {
            font-size: small;
        }
        .imgoperacion
        {
            width:24px;
            height:24px;
        }
    </style>

";
    }

    public function getTemplateName()
    {
        return ":inmuebleimagen:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 54,  121 => 53,  108 => 42,  101 => 40,  87 => 38,  83 => 37,  79 => 36,  74 => 34,  70 => 32,  66 => 31,  48 => 18,  32 => 4,  29 => 3,  11 => 1,);
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
/*                             <a href="#!" class="breadcrumb">Imágenes de Propiedad</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <a href="{{ path('inmuebleimagen_new', {}) }}?idInmueble={{ idInmueble }}" class="waves-effect waves-light btn blue darken-1 right"><i class="material-icons left">add</i>Nueva Imagen</a>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <table class="striped">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th><p>Imágenes</p></th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {% for imagen in imagenes %}*/
/*                                     <div class="col s3 m3 l3">*/
/*                                         <a>*/
/*                                             <img src="{{ imagen.getWebPath() }}" style="width:100%;height:100%">*/
/*                                         </a>*/
/*                                         <p>{{ imagen.descripcion }}</p>*/
/*                                         {% image '@FrameworkBundle/Resources/public/images/trash.png' %}*/
/*                                         <a href="#"><img class="imgoperacion" src="{{ asset_url }}" alt="" class="responsive-img" title="Borrar Fotografia"></a>*/
/*                                         {% endimage %}*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/*                             </td>*/
/*                         </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/* */
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
/* */
/*         p*/
/*         {*/
/*             font-size: small;*/
/*         }*/
/*         .imgoperacion*/
/*         {*/
/*             width:24px;*/
/*             height:24px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
