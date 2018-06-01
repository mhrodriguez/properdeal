<?php

/* ::base.html.twig */
class __TwigTemplate_5faabf3841fb37f920bd8698d5e465bcff6c2e26fe763da76114aa53ef9bc269 extends Twig_Template
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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

        ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "da7e651_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da7e651_0") : $this->env->getExtension('asset')->getAssetUrl("css/da7e651_part_1_materialize_1.css");
            // line 14
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "da7e651_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da7e651_1") : $this->env->getExtension('asset')->getAssetUrl("css/da7e651_part_1_materialize.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "da7e651_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da7e651_2") : $this->env->getExtension('asset')->getAssetUrl("css/da7e651_part_1_style_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "da7e651_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da7e651_3") : $this->env->getExtension('asset')->getAssetUrl("css/da7e651_part_2_body_1.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "da7e651_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da7e651_4") : $this->env->getExtension('asset')->getAssetUrl("css/da7e651_part_2_exception_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "da7e651_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da7e651_5") : $this->env->getExtension('asset')->getAssetUrl("css/da7e651_part_2_structure_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "da7e651"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da7e651") : $this->env->getExtension('asset')->getAssetUrl("css/da7e651.css");
            echo "        <link rel=\"stylesheet\" href=\"";
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
            }
        </style>
    </head>
    <body onload=\"document.getElementById('divProgress').style.display='none';\">
        <div id=\"divProgress\" class=\"progress\" >
            <div class=\"indeterminate\"></div>
        </div>

        ";
        // line 30
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Header:show", array()));
        // line 33
        echo "

        ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "
        ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    </body>

</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "iRealty CRM";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        // line 38
        echo "
            <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>

            ";
        // line 41
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "50ef1be_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50ef1be_0") : $this->env->getExtension('asset')->getAssetUrl("js/50ef1be_part_1_init_1.js");
            // line 42
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
            // asset "50ef1be_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50ef1be_1") : $this->env->getExtension('asset')->getAssetUrl("js/50ef1be_part_1_materialize_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
            // asset "50ef1be_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50ef1be_2") : $this->env->getExtension('asset')->getAssetUrl("js/50ef1be_part_1_materialize.min_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "50ef1be"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50ef1be") : $this->env->getExtension('asset')->getAssetUrl("js/50ef1be.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 44
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 44,  156 => 42,  152 => 41,  147 => 38,  144 => 37,  139 => 35,  135 => 7,  132 => 6,  126 => 5,  119 => 46,  117 => 37,  114 => 36,  112 => 35,  108 => 33,  106 => 30,  90 => 16,  46 => 14,  42 => 11,  35 => 8,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}iRealty CRM{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/* */
/*         {% stylesheets '@FrameworkBundle/Resources/public/materialize/css/*'*/
/*         '@FrameworkBundle/Resources/public/css/*'*/
/*          filter='cssrewrite' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/* */
/*         <style>*/
/*             .progress {*/
/*                 position: absolute;*/
/*                 margin-top: 0px;*/
/*                 height: 3px;*/
/*             }*/
/*         </style>*/
/*     </head>*/
/*     <body onload="document.getElementById('divProgress').style.display='none';">*/
/*         <div id="divProgress" class="progress" >*/
/*             <div class="indeterminate"></div>*/
/*         </div>*/
/* */
/*         {{ render(controller(*/
/*             'AppBundle:Header:show',*/
/*             { }*/
/*         )) }}*/
/* */
/*         {% block body %}{% endblock %}*/
/* */
/*         {% block javascripts %}*/
/* */
/*             <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/* */
/*             {% javascripts '@FrameworkBundle/Resources/public/materialize/js/*' %}*/
/*             <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* */
/* </html>*/
/* */
