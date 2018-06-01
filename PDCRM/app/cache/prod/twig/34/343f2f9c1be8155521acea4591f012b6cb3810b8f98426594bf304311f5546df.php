<?php

/* :header:show.html.twig */
class __TwigTemplate_c10c0d1e7aa78e98c36d70ac76c0bec64af8177f05e294870576abf87069a407 extends Twig_Template
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

        <ul id=\"dropdownMicuenta\" class=\"dropdown-content\">
            <li><a href=\"#\">Mi Perfíl</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("logout", array());
        echo "\">Salir</a></li>
        </ul>
        <ul id=\"dropdownMicuenta2\" class=\"dropdown-content\">
            <li><a href=\"#\">Mi Perfíl</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("logout", array());
        echo "\">Salir</a></li>
        </ul>

        <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>

        ";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dc09010_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc09010_0") : $this->env->getExtension('asset')->getAssetUrl("images/dc09010_logotipo_1.png");
            // line 18
            echo "            ";
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 19
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("panel_principal", array());
                echo "\" class=\"brand-logo\">
            ";
            } else {
                // line 21
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("homepage", array());
                echo "\" class=\"brand-logo\">
            ";
            }
            // line 23
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" class=\"header-logo\" alt=\"Logo\"/>
        </a>
        ";
        } else {
            // asset "dc09010"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc09010") : $this->env->getExtension('asset')->getAssetUrl("images/dc09010.png");
            // line 18
            echo "            ";
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 19
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("panel_principal", array());
                echo "\" class=\"brand-logo\">
            ";
            } else {
                // line 21
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("homepage", array());
                echo "\" class=\"brand-logo\">
            ";
            }
            // line 23
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" class=\"header-logo\" alt=\"Logo\"/>
        </a>
        ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "
        ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 28
            echo "        <ul class=\"right\">
            <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdownMicuenta\">
                ";
            // line 30
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "3a93b33_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33_0") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33_ic_usuario_1.jpg");
                // line 31
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"circle responsive-img\" style=\"width:40px;height:40px;\">
                ";
            } else {
                // asset "3a93b33"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33.jpg");
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"circle responsive-img\" style=\"width:40px;height:40px;\">
                ";
            }
            unset($context["asset_url"]);
            // line 33
            echo "                <i class=\"material-icons right\">arrow_drop_down</i>
            </a>

        ";
        } else {
            // line 37
            echo "        <ul class=\"right hide-on-med-and-down\">
            <li class=\"divider\"></li>
            <li><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("login", array());
            echo "\">Login</a></li>

        ";
        }
        // line 42
        echo "        </ul>

        <ul id=\"nav-mobile\" class=\"side-nav\">
            ";
        // line 45
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 46
            echo "                <li class=\"divider\"></li>
                <li><a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("login", array());
            echo "\">Login</a></li>
            ";
        }
        // line 49
        echo "        </ul>

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
        return ":header:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 49,  147 => 47,  144 => 46,  142 => 45,  137 => 42,  131 => 39,  127 => 37,  121 => 33,  107 => 31,  103 => 30,  99 => 28,  97 => 27,  94 => 26,  86 => 23,  80 => 21,  74 => 19,  71 => 18,  62 => 23,  56 => 21,  50 => 19,  47 => 18,  43 => 17,  35 => 12,  27 => 7,  19 => 1,);
    }
}
/* <nav class="white header" role="navigation">*/
/*     <div class="nav-wrapper container">*/
/* */
/*         <ul id="dropdownMicuenta" class="dropdown-content">*/
/*             <li><a href="#">Mi Perfíl</a></li>*/
/*             <li class="divider"></li>*/
/*             <li><a href="{{ path('logout', {}) }}">Salir</a></li>*/
/*         </ul>*/
/*         <ul id="dropdownMicuenta2" class="dropdown-content">*/
/*             <li><a href="#">Mi Perfíl</a></li>*/
/*             <li class="divider"></li>*/
/*             <li><a href="{{ path('logout', {}) }}">Salir</a></li>*/
/*         </ul>*/
/* */
/*         <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>*/
/* */
/*         {% image '@FrameworkBundle/Resources/public/images/logotipo.png' %}*/
/*             {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                 <a href="{{ path('panel_principal', {}) }}" class="brand-logo">*/
/*             {% else %}*/
/*                 <a href="{{ path('homepage', {}) }}" class="brand-logo">*/
/*             {% endif %}*/
/*             <img src="{{ asset_url }}" class="header-logo" alt="Logo"/>*/
/*         </a>*/
/*         {% endimage %}*/
/* */
/*         {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*         <ul class="right">*/
/*             <a class="dropdown-button" href="#!" data-activates="dropdownMicuenta">*/
/*                 {% image '@FrameworkBundle/Resources/public/images/ic_usuario.jpg' %}*/
/*                 <img src="{{ asset_url }}" alt="" class="circle responsive-img" style="width:40px;height:40px;">*/
/*                 {% endimage %}*/
/*                 <i class="material-icons right">arrow_drop_down</i>*/
/*             </a>*/
/* */
/*         {% else %}*/
/*         <ul class="right hide-on-med-and-down">*/
/*             <li class="divider"></li>*/
/*             <li><a href="{{ path('login', {}) }}">Login</a></li>*/
/* */
/*         {% endif %}*/
/*         </ul>*/
/* */
/*         <ul id="nav-mobile" class="side-nav">*/
/*             {% if not is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                 <li class="divider"></li>*/
/*                 <li><a href="{{ path('login', {}) }}">Login</a></li>*/
/*             {% endif %}*/
/*         </ul>*/
/* */
/*         <style>*/
/*             .circle*/
/*             {*/
/*                 vertical-align:middle;*/
/*             }*/
/*         </style>*/
/* */
/*     </div>*/
/* </nav>*/
/* */
