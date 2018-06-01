<?php

/* :default:index.html.twig */
class __TwigTemplate_e65535ed69ed237434bb74f741e434f54092a318a08a5d79d2baa2781339ed2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
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

            <div id=\"divBusqueda\">
                ";
        // line 8
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 9
            echo "                <div style=\"margin-left:auto;margin-right:auto;width:500px;height:200px;\">
                    <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("login", array());
            echo "\" class=\"waves-effect waves-light btn center\" style=\"margin-left: 160px\">ENTRAR AL SISTEMA</a>
                </div>
                ";
        }
        // line 13
        echo "            </div>

        </div>
    </div>
    <script>
    </script>

";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "    <style>
        #divBusqueda {
            height: 81vh;
            margin-top: 3px;
            padding-top: 80px;
        }

        body {
            background: url(";
        // line 31
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3548c40_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3548c40_0") : $this->env->getExtension('asset')->getAssetUrl("images/3548c40_inter3_1.jpg");
            // line 32
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "3548c40"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3548c40") : $this->env->getExtension('asset')->getAssetUrl("images/3548c40.jpg");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 34
        echo "            );
            background-size:cover;
        }

        h3 {
            text-align: center;
        }
        h5 {
            text-align: center;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 34,  77 => 32,  73 => 31,  63 => 23,  60 => 22,  49 => 13,  43 => 10,  40 => 9,  38 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/* */
/*             <div id="divBusqueda">*/
/*                 {% if not is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                 <div style="margin-left:auto;margin-right:auto;width:500px;height:200px;">*/
/*                     <a href="{{ path('login', {}) }}" class="waves-effect waves-light btn center" style="margin-left: 160px">ENTRAR AL SISTEMA</a>*/
/*                 </div>*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/*     <script>*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <style>*/
/*         #divBusqueda {*/
/*             height: 81vh;*/
/*             margin-top: 3px;*/
/*             padding-top: 80px;*/
/*         }*/
/* */
/*         body {*/
/*             background: url({% image '@FrameworkBundle/Resources/public/images/inter3.jpg' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}*/
/*             );*/
/*             background-size:cover;*/
/*         }*/
/* */
/*         h3 {*/
/*             text-align: center;*/
/*         }*/
/*         h5 {*/
/*             text-align: center;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* */
