<?php

/* base3.html.twig */
class __TwigTemplate_2aa4eb2338e34158007e88728a004c2271369a65e883e16430ddd12fb58e70fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascriptsheaders' => array($this, 'block_javascriptsheaders'),
            'body' => array($this, 'block_body'),
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
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('javascriptsheaders', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "da7e651_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da7e651_0") : $this->env->getExtension('asset')->getAssetUrl("css/da7e651_part_1_materialize_1.css");
            // line 18
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
        // line 20
        echo "
    ";
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "50ef1be_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50ef1be_0") : $this->env->getExtension('asset')->getAssetUrl("js/50ef1be_part_1_init_1.js");
            // line 22
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
        // line 24
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
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 42
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

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
    }

    // line 11
    public function block_javascriptsheaders($context, array $blocks = array())
    {
        // line 12
        echo "
    ";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "
";
    }

    public function getTemplateName()
    {
        return "base3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 40,  174 => 39,  169 => 12,  166 => 11,  161 => 8,  158 => 7,  152 => 5,  144 => 42,  142 => 39,  125 => 24,  99 => 22,  95 => 21,  92 => 20,  48 => 18,  44 => 15,  41 => 14,  39 => 11,  36 => 10,  34 => 7,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Proper Deal{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/* */
/*     {% endblock %}*/
/* */
/*     {% block javascriptsheaders %}*/
/* */
/*     {% endblock %}*/
/* */
/*     {% stylesheets '@FrameworkBundle/Resources/public/materialize/css/*'*/
/*     '@FrameworkBundle/Resources/public/css/*'*/
/*     filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/* */
/*     {% javascripts '@FrameworkBundle/Resources/public/materialize/js/*' %}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/*     <style>*/
/*         .progress {*/
/*             position: absolute;*/
/*             margin-top: 0px;*/
/*             height: 3px;*/
/*         }*/
/*     </style>*/
/* */
/* </head>*/
/* <body onload="document.getElementById('divProgress').style.display='none';">*/
/* <div id="divProgress" class="progress" >*/
/*     <div class="indeterminate"></div>*/
/* </div>*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
