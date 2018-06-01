<?php

/* :minisitio/header:show.html.twig */
class __TwigTemplate_a7015049f1801b9c335ddf71b4dc493dfcd62a21d04aa6cc932e457fbe3148ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"white header\" role=\"navigation\">
    <div class=\"nav-wrapper container\">

        <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>

        ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dc09010_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc09010_0") : $this->env->getExtension('asset')->getAssetUrl("images/dc09010_logotipo_1.png");
            // line 7
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("minisitio_index", array());
            echo "\" class=\"brand-logo\">
                <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" class=\"header-logo\" alt=\"Logo\"/>
            </a>
        ";
        } else {
            // asset "dc09010"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc09010") : $this->env->getExtension('asset')->getAssetUrl("images/dc09010.png");
            // line 7
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("minisitio_index", array());
            echo "\" class=\"brand-logo\">
                <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" class=\"header-logo\" alt=\"Logo\"/>
            </a>
        ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "
            <ul class=\"right hide-on-med-and-down\">
                    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("login", array());
        echo "\">Login</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("usuario_new", array());
        echo "\">Registrarse</a></li>
            </ul>

            <ul id=\"nav-mobile\" class=\"side-nav\">
                  <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("login", array());
        echo "\">Login</a></li>
                  <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("usuario_new", array());
        echo "\">Registrarse</a></li>
            </ul>

            <style>
                .circle
                {
                    vertical-align:middle;
                }
            </style>
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return ":minisitio/header:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  70 => 18,  63 => 14,  59 => 13,  55 => 11,  48 => 8,  43 => 7,  35 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <nav class="white header" role="navigation">*/
/*     <div class="nav-wrapper container">*/
/* */
/*         <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>*/
/* */
/*         {% image '@FrameworkBundle/Resources/public/images/logotipo.png' %}*/
/*             <a href="{{ path('minisitio_index', {}) }}" class="brand-logo">*/
/*                 <img src="{{ asset_url }}" class="header-logo" alt="Logo"/>*/
/*             </a>*/
/*         {% endimage %}*/
/* */
/*             <ul class="right hide-on-med-and-down">*/
/*                     <li><a href="{{ path('login', {}) }}">Login</a></li>*/
/*                     <li><a href="{{ path('usuario_new', {}) }}">Registrarse</a></li>*/
/*             </ul>*/
/* */
/*             <ul id="nav-mobile" class="side-nav">*/
/*                   <li><a href="{{ path('login', {}) }}">Login</a></li>*/
/*                   <li><a href="{{ path('usuario_new', {}) }}">Registrarse</a></li>*/
/*             </ul>*/
/* */
/*             <style>*/
/*                 .circle*/
/*                 {*/
/*                     vertical-align:middle;*/
/*                 }*/
/*             </style>*/
/*     </div>*/
/* </nav>*/
/* */
