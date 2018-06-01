<?php

/* :enlace:index.html.twig */
class __TwigTemplate_13633b9cde16b270c6edc2b96f7aff582b38c20f15cd277879b1024ef8838aa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":enlace:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
                            <a href=\"#!\" class=\"breadcrumb\">Enlaces</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class=\"row\">
                <table class=\"striped\">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>URL</th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enlaces"]) ? $context["enlaces"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["enlace"]) {
            // line 28
            echo "                        <tr>
                            <td>
                                ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["enlace"], "nombre", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 33
            if (($this->getAttribute($context["enlace"], "idEnlace", array()) == 3)) {
                // line 34
                echo "
                                    <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["enlace"], "url", array()), "html", null, true);
                echo "\" target=\"_blank\">
                                        ";
                // line 36
                if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                    // asset "65824cb_0"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_65824cb_0") : $this->env->getExtension('asset')->getAssetUrl("images/65824cb_lamudi_1.png");
                    // line 37
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                    echo "\" style=\"width:50px; height:50px\"/>
                                        ";
                } else {
                    // asset "65824cb"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_65824cb") : $this->env->getExtension('asset')->getAssetUrl("images/65824cb.png");
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                    echo "\" style=\"width:50px; height:50px\"/>
                                        ";
                }
                unset($context["asset_url"]);
                // line 39
                echo "                                    </a>

                                ";
            } else {
                // line 42
                echo "
                                    <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["enlace"], "url", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["enlace"], "url", array()), "html", null, true);
                echo "</a>

                                ";
            }
            // line 46
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enlace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
    }

    // line 56
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 57
        echo "    <style>
        body {
            background: white;
            height: 200vh;
        }
    </style>

";
    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":enlace:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 66,  135 => 57,  132 => 56,  123 => 49,  115 => 46,  107 => 43,  104 => 42,  99 => 39,  85 => 37,  81 => 36,  77 => 35,  74 => 34,  72 => 33,  66 => 30,  62 => 28,  58 => 27,  33 => 4,  30 => 3,  11 => 1,);
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
/*                             <a href="#!" class="breadcrumb">Enlaces</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <table class="striped">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Nombre</th>*/
/*                         <th>URL</th>*/
/*                     </tr>*/
/*                     </thead>*/
/* */
/*                     <tbody>*/
/*                     {% for enlace in enlaces %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {{ enlace.nombre }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {% if enlace.idEnlace == 3 %}*/
/* */
/*                                     <a href="{{ enlace.url }}" target="_blank">*/
/*                                         {% image '@FrameworkBundle/Resources/public/images/lamudi.png' %}*/
/*                                             <img src="{{ asset_url }}" style="width:50px; height:50px"/>*/
/*                                         {% endimage %}*/
/*                                     </a>*/
/* */
/*                                 {% else %}*/
/* */
/*                                     <a href="{{ enlace.url }}" target="_blank">{{ enlace.url }}</a>*/
/* */
/*                                 {% endif %}*/
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
/*     <style>*/
/*         body {*/
/*             background: white;*/
/*             height: 200vh;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock %}*/
/* */
