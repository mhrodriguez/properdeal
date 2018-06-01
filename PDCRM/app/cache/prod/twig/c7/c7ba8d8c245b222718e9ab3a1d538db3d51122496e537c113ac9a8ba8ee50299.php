<?php

/* baseabc.html.twig */
class __TwigTemplate_ce2a7ec07ecdd9dd1f5c9d4cc29de7a38fe0ffdb1dcba8ed78285679b35dc85e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascriptsheaders' => array($this, 'block_javascriptsheaders'),
            'javascripts' => array($this, 'block_javascripts'),
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
        // line 9
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

    ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "da7e651_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da7e651_0") : $this->env->getExtension('asset')->getAssetUrl("css/da7e651_part_1_materialize_1.css");
            // line 16
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
        // line 18
        echo "
    <style>
        .progress {
            position: absolute;
            margin-top: 0px;
            height: 3px;
        }
    </style>

    ";
        // line 27
        $this->displayBlock('javascriptsheaders', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "
</head>
<body onload=\"document.getElementById('divProgress').style.display='none';\">
<div id=\"divProgress\" class=\"progress\" >
    <div class=\"indeterminate\"></div>
</div>

";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 53
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
        echo "    ";
    }

    // line 27
    public function block_javascriptsheaders($context, array $blocks = array())
    {
        // line 28
        echo "
    ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "
        <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>

        ";
        // line 35
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "50ef1be_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50ef1be_0") : $this->env->getExtension('asset')->getAssetUrl("js/50ef1be_part_1_init_1.js");
            // line 36
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        <script>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 39
                echo "                alert('";
                echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
                echo "');
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </script>
        ";
            // asset "50ef1be_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50ef1be_1") : $this->env->getExtension('asset')->getAssetUrl("js/50ef1be_part_1_materialize_2.js");
            // line 36
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        <script>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 39
                echo "                alert('";
                echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
                echo "');
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </script>
        ";
            // asset "50ef1be_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50ef1be_2") : $this->env->getExtension('asset')->getAssetUrl("js/50ef1be_part_1_materialize.min_3.js");
            // line 36
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        <script>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 39
                echo "                alert('";
                echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
                echo "');
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </script>
        ";
        } else {
            // asset "50ef1be"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50ef1be") : $this->env->getExtension('asset')->getAssetUrl("js/50ef1be.js");
            // line 36
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        <script>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 39
                echo "                alert('";
                echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
                echo "');
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </script>
        ";
        }
        unset($context["asset_url"]);
        // line 43
        echo "
    ";
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "baseabc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 52,  261 => 43,  256 => 41,  247 => 39,  243 => 38,  237 => 36,  231 => 41,  222 => 39,  218 => 38,  212 => 36,  207 => 41,  198 => 39,  194 => 38,  188 => 36,  183 => 41,  174 => 39,  170 => 38,  164 => 36,  160 => 35,  155 => 32,  152 => 31,  147 => 28,  144 => 27,  140 => 8,  137 => 7,  131 => 5,  123 => 53,  121 => 52,  112 => 45,  110 => 31,  107 => 30,  105 => 27,  94 => 18,  50 => 16,  46 => 13,  40 => 10,  37 => 9,  35 => 7,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Proper Deal{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*     {% endblock %}*/
/* */
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
/*         }*/
/*     </style>*/
/* */
/*     {% block javascriptsheaders %}*/
/* */
/*     {% endblock %}*/
/* */
/*     {% block javascripts %}*/
/* */
/*         <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/* */
/*         {% javascripts '@FrameworkBundle/Resources/public/materialize/js/*'%}*/
/*         <script src="{{ asset_url }}"></script>*/
/*         <script>*/
/*             {% for flash_message in app.session.flashbag.get('notice') %}*/
/*                 alert('{{ flash_message }}');*/
/*             {% endfor %}*/
/*         </script>*/
/*         {% endjavascripts %}*/
/* */
/*     {% endblock %}*/
/* */
/* </head>*/
/* <body onload="document.getElementById('divProgress').style.display='none';">*/
/* <div id="divProgress" class="progress" >*/
/*     <div class="indeterminate"></div>*/
/* </div>*/
/* */
/* {% block body %}{% endblock %}*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
