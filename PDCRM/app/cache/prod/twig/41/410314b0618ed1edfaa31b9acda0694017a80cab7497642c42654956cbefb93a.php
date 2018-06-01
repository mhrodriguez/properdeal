<?php

/* base.html.twig */
class __TwigTemplate_c295bcab942bcd05a9cd676cb4c564a78205c4885d301bce94c4320e17fdd0b3 extends Twig_Template
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
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

        ";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "da7e651_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da7e651_0") : $this->env->getExtension('asset')->getAssetUrl("css/da7e651_part_1_materialize_1.css");
            // line 17
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
        // line 19
        echo "
        <style>
            .progress {
                position: absolute;
                margin-top: 0px;
                height: 3px;
            }
        </style>

        ";
        // line 28
        $this->displayBlock('javascriptsheaders', $context, $blocks);
        // line 31
        echo "
    </head>
    <body onload=\"document.getElementById('divProgress').style.display='none';\">
        <div id=\"divProgress\" class=\"progress\" >
            <div class=\"indeterminate\"></div>
        </div>

        ";
        // line 38
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Header:show", array()));
        // line 41
        echo "

        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "
        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    </body>

</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Proper Deal";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        ";
    }

    // line 28
    public function block_javascriptsheaders($context, array $blocks = array())
    {
        // line 29
        echo "
        ";
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "
            <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>

            ";
        // line 49
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "50ef1be_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50ef1be_0") : $this->env->getExtension('asset')->getAssetUrl("js/50ef1be_part_1_init_1.js");
            // line 50
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
            </script>
            ";
            // asset "50ef1be_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50ef1be_1") : $this->env->getExtension('asset')->getAssetUrl("js/50ef1be_part_1_materialize_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
            </script>
            ";
            // asset "50ef1be_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50ef1be_2") : $this->env->getExtension('asset')->getAssetUrl("js/50ef1be_part_1_materialize.min_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
            </script>
            ";
        } else {
            // asset "50ef1be"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50ef1be") : $this->env->getExtension('asset')->getAssetUrl("js/50ef1be.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
            </script>
            ";
        }
        unset($context["asset_url"]);
        // line 53
        echo "
            <script>
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 56
            echo "                Materialize.toast('";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "', 3000, 'rounded');
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </script>

        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 58,  213 => 56,  209 => 55,  205 => 53,  175 => 50,  171 => 49,  166 => 46,  163 => 45,  158 => 43,  153 => 29,  150 => 28,  146 => 9,  143 => 8,  137 => 6,  130 => 61,  128 => 45,  125 => 44,  123 => 43,  119 => 41,  117 => 38,  108 => 31,  106 => 28,  95 => 19,  51 => 17,  47 => 14,  41 => 11,  38 => 10,  36 => 8,  31 => 6,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/* */
/*         <title>{% block title %}Proper Deal{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*         {% endblock %}*/
/* */
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
/* */
/*         {% block javascriptsheaders %}*/
/* */
/*         {% endblock %}*/
/* */
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
/*             <script src="{{ asset_url }}">*/
/*             </script>*/
/*             {% endjavascripts %}*/
/* */
/*             <script>*/
/*                 {% for flash_message in app.session.flashbag.get('notice') %}*/
/*                 Materialize.toast('{{ flash_message }}', 3000, 'rounded');*/
/*                 {% endfor %}*/
/*             </script>*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* */
/* </html>*/
/* */
