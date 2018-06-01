<?php

/* :panel_miperfil:index.html.twig */
class __TwigTemplate_36125ae075948d5b8e8db675ef04a39ea863c49e70506ffd51fa8ed9d282f6f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseprincipal.html.twig", ":panel_miperfil:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseprincipal.html.twig";
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

            <div style=\"margin-top: 0px\">
                ";
        // line 9
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:BarraHerramientas:show", array("indexSeleccionado" =>  -1, "numProspectos" => 0)));
        // line 12
        echo "
            </div>

            <!-- Page Layout here -->
            <div class=\"row z-depth-2\" >
                <div class=\"col s12 m12 l12\"> <!-- Note that \"m8 l9\" was added -->
                    <iframe id=\"iframePrincipal\" src=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("usuario_edit", array());
        echo "\" style=\"width:100%; height:80vh; margin-top:8px; padding-top:-8px\" frameBorder=\"0\">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 27
        echo "
    <style>
        body {
            background: white;
        }
    </style>

";
    }

    public function getTemplateName()
    {
        return ":panel_miperfil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 27,  60 => 26,  49 => 18,  41 => 12,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseprincipal.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/* */
/*         <div id="container">*/
/* */
/*             <div style="margin-top: 0px">*/
/*                 {{ render(controller(*/
/*                 'AppBundle:BarraHerramientas:show',*/
/*                 { 'indexSeleccionado': -1, 'numProspectos' : 0 }*/
/*                 )) }}*/
/*             </div>*/
/* */
/*             <!-- Page Layout here -->*/
/*             <div class="row z-depth-2" >*/
/*                 <div class="col s12 m12 l12"> <!-- Note that "m8 l9" was added -->*/
/*                     <iframe id="iframePrincipal" src="{{ path('usuario_edit', {}) }}" style="width:100%; height:80vh; margin-top:8px; padding-top:-8px" frameBorder="0">*/
/*                     </iframe>*/
/*                 </div>*/
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
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
