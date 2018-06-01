<?php

/* baseprincipal.html.twig */
class __TwigTemplate_1cf1c130c66d59759ecc2073ff9cb3a55bbc6ac3e7c9eb5001e7958b5c093bad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

    ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "da7e651_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da7e651_0") : $this->env->getExtension('asset')->getAssetUrl("css/da7e651_part_1_materialize_1.css");
            // line 14
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
    ";
            // asset "da7e651_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da7e651_1") : $this->env->getExtension('asset')->getAssetUrl("css/da7e651_part_1_materialize.min_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
    ";
            // asset "da7e651_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da7e651_2") : $this->env->getExtension('asset')->getAssetUrl("css/da7e651_part_1_style_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
    ";
            // asset "da7e651_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da7e651_3") : $this->env->getExtension('asset')->getAssetUrl("css/da7e651_part_2_body_1.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
    ";
            // asset "da7e651_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da7e651_4") : $this->env->getExtension('asset')->getAssetUrl("css/da7e651_part_2_exception_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
    ";
            // asset "da7e651_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da7e651_5") : $this->env->getExtension('asset')->getAssetUrl("css/da7e651_part_2_structure_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "da7e651"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da7e651") : $this->env->getExtension('asset')->getAssetUrl("css/da7e651.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "
    <style>
        .progress {
            position: absolute;
            margin-top: 0px;
            height: 3px;
            width: 100%;
        }
    </style>
</head>
<body onload=\"document.getElementById('divProgress').style.display='none';\">
<div id=\"divProgress\" class=\"progress\" >
    <div class=\"indeterminate\"></div>
</div>

";
        // line 31
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:HeaderPrincipal:show", array()));
        // line 34
        echo "

";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Proper Deal";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "    ";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "
    <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>

    ";
        // line 42
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "50ef1be_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50ef1be_0") : $this->env->getExtension('asset')->getAssetUrl("js/50ef1be_part_1_init_1.js");
            // line 43
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "50ef1be_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50ef1be_1") : $this->env->getExtension('asset')->getAssetUrl("js/50ef1be_part_1_materialize_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "50ef1be_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50ef1be_2") : $this->env->getExtension('asset')->getAssetUrl("js/50ef1be_part_1_materialize.min_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "50ef1be"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50ef1be") : $this->env->getExtension('asset')->getAssetUrl("js/50ef1be.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 45
        echo "
";
    }

    public function getTemplateName()
    {
        return "baseprincipal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 45,  157 => 43,  153 => 42,  148 => 39,  145 => 38,  140 => 36,  136 => 7,  133 => 6,  127 => 5,  120 => 47,  118 => 38,  115 => 37,  113 => 36,  109 => 34,  107 => 31,  90 => 16,  46 => 14,  42 => 11,  35 => 8,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Proper Deal{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/* */
/*     {% stylesheets '@FrameworkBundle/Resources/public/materialize/css/*'*/
/*     '@FrameworkBundle/Resources/public/css/*'*/
/*     filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/* */
/*     <style>*/
/*         .progress {*/
/*             position: absolute;*/
/*             margin-top: 0px;*/
/*             height: 3px;*/
/*             width: 100%;*/
/*         }*/
/*     </style>*/
/* </head>*/
/* <body onload="document.getElementById('divProgress').style.display='none';">*/
/* <div id="divProgress" class="progress" >*/
/*     <div class="indeterminate"></div>*/
/* </div>*/
/* */
/* {{ render(controller(*/
/* 'AppBundle:HeaderPrincipal:show',*/
/* { }*/
/* )) }}*/
/* */
/* {% block body %}{% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/*     <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/* */
/*     {% javascripts '@FrameworkBundle/Resources/public/materialize/js/*' %}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */
