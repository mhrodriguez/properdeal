<?php

/* :header_principal:show.html.twig */
class __TwigTemplate_6602d44d2b32645d378ad90b6e752c6f72552fdfc68ff285b154f090839a438e extends Twig_Template
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
        echo "<nav class=\"white header z-depth-3\" role=\"navigation\">
    <div class=\"nav-wrapper container\">

        <ul id=\"dropdownMicuenta\" class=\"dropdown-content\" style=\"align-content: center\">
            <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("panel_miperfil", array());
        echo "\" style=\"font-size:13px;\"> <i class=\"material-icons\">perm_identity</i>Mi Perfíl</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("logout", array());
        echo "\" style=\"font-size:13px;\"><i class=\"material-icons\">power_settings_new</i>Salir</a></li>
        </ul>
        <ul id=\"dropdownMicuenta2\" class=\"dropdown-content\">
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("panel_miperfil", array());
        echo "\" style=\"font-size:13px;\"><i class=\"material-icons\">perm_identity</i>Mi Perfil</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("logout", array());
        echo "\" style=\"font-size:13px;\"><i class=\"material-icons\">power_settings_new</i>Salir</a></li>
        </ul>

        <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>

        ";
        // line 17
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 18
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("panel_principal", array());
            echo "\" class=\"brand-logo\">
            ";
        } else {
            // line 20
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage", array());
            echo "\" class=\"brand-logo\">
                ";
        }
        // line 22
        echo "                ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dc09010_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc09010_0") : $this->env->getExtension('asset')->getAssetUrl("images/dc09010_logotipo_1.png");
            // line 23
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" class=\"header-logo\" alt=\"Logo\"/>
                ";
        } else {
            // asset "dc09010"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc09010") : $this->env->getExtension('asset')->getAssetUrl("images/dc09010.png");
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" class=\"header-logo\" alt=\"Logo\"/>
                ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "            </a>

            <ul class=\"right hide-on-med-and-down\">

                ";
        // line 29
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 30
            echo "                    <li>
                        ";
            // line 31
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:AccesoDirecto:show", array()));
            // line 34
            echo "
                    </li>
                    <li>
                        <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdownMicuenta\">

                            ";
            // line 39
            if (((isset($context["webPathFoto"]) ? $context["webPathFoto"] : null) != false)) {
                // line 40
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["webPathFoto"]) ? $context["webPathFoto"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"circle responsive-img\" style=\"width:32px;height:40px;\">
                            ";
            } else {
                // line 42
                echo "                                ";
                if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                    // asset "3a93b33_0"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33_0") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33_ic_usuario_1.jpg");
                    // line 43
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                    echo "\" alt=\"\" class=\"circle responsive-img\" style=\"width:40px;height:40px;\">
                                ";
                } else {
                    // asset "3a93b33"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33.jpg");
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                    echo "\" alt=\"\" class=\"circle responsive-img\" style=\"width:40px;height:40px;\">
                                ";
                }
                unset($context["asset_url"]);
                // line 45
                echo "                            ";
            }
            // line 46
            echo "
                            <i class=\"material-icons right\">arrow_drop_down</i>
                        </a>
                    </li>
                ";
        }
        // line 51
        echo "
            </ul>

            <ul id=\"nav-mobile\" class=\"side-nav\">

                ";
        // line 56
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 57
            echo "                    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:AccesoDirecto:showv", array()));
            // line 60
            echo "
                    <li>
                        <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdownMicuenta2\">
                            ";
            // line 63
            if (((isset($context["webPathFoto"]) ? $context["webPathFoto"] : null) != false)) {
                // line 64
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["webPathFoto"]) ? $context["webPathFoto"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"circle responsive-img\" style=\"width:32px;height:40px;\">
                            ";
            } else {
                // line 66
                echo "                                ";
                if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                    // asset "3a93b33_0"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33_0") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33_ic_usuario_1.jpg");
                    // line 67
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                    echo "\" alt=\"\" class=\"circle responsive-img\" style=\"width:40px;height:40px;\">
                                ";
                } else {
                    // asset "3a93b33"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33.jpg");
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                    echo "\" alt=\"\" class=\"circle responsive-img\" style=\"width:40px;height:40px;\">
                                ";
                }
                unset($context["asset_url"]);
                // line 69
                echo "                            ";
            }
            // line 70
            echo "                            Mi Perfil
                            <i class=\"material-icons right\">arrow_drop_down</i>
                        </a>
                    </li>
                ";
        }
        // line 75
        echo "
                <!--li><a href=\"#\">Navbar Link</a></li-->
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
        return ":header_principal:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 75,  186 => 70,  183 => 69,  169 => 67,  164 => 66,  158 => 64,  156 => 63,  151 => 60,  148 => 57,  146 => 56,  139 => 51,  132 => 46,  129 => 45,  115 => 43,  110 => 42,  104 => 40,  102 => 39,  95 => 34,  93 => 31,  90 => 30,  88 => 29,  82 => 25,  68 => 23,  63 => 22,  57 => 20,  51 => 18,  49 => 17,  41 => 12,  36 => 10,  30 => 7,  25 => 5,  19 => 1,);
    }
}
/* <nav class="white header z-depth-3" role="navigation">*/
/*     <div class="nav-wrapper container">*/
/* */
/*         <ul id="dropdownMicuenta" class="dropdown-content" style="align-content: center">*/
/*             <li><a href="{{ path('panel_miperfil', {}) }}" style="font-size:13px;"> <i class="material-icons">perm_identity</i>Mi Perfíl</a></li>*/
/*             <li class="divider"></li>*/
/*             <li><a href="{{ path('logout', {}) }}" style="font-size:13px;"><i class="material-icons">power_settings_new</i>Salir</a></li>*/
/*         </ul>*/
/*         <ul id="dropdownMicuenta2" class="dropdown-content">*/
/*             <li><a href="{{ path('panel_miperfil', {}) }}" style="font-size:13px;"><i class="material-icons">perm_identity</i>Mi Perfil</a></li>*/
/*             <li class="divider"></li>*/
/*             <li><a href="{{ path('logout', {}) }}" style="font-size:13px;"><i class="material-icons">power_settings_new</i>Salir</a></li>*/
/*         </ul>*/
/* */
/*         <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>*/
/* */
/*         {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*         <a href="{{ path('panel_principal', {}) }}" class="brand-logo">*/
/*             {% else %}*/
/*             <a href="{{ path('homepage', {}) }}" class="brand-logo">*/
/*                 {% endif %}*/
/*                 {% image '@FrameworkBundle/Resources/public/images/logotipo.png' %}*/
/*                 <img src="{{ asset_url }}" class="header-logo" alt="Logo"/>*/
/*                 {% endimage %}*/
/*             </a>*/
/* */
/*             <ul class="right hide-on-med-and-down">*/
/* */
/*                 {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                     <li>*/
/*                         {{ render(controller(*/
/*                         'AppBundle:AccesoDirecto:show',*/
/*                         { }*/
/*                         )) }}*/
/*                     </li>*/
/*                     <li>*/
/*                         <a class="dropdown-button" href="#!" data-activates="dropdownMicuenta">*/
/* */
/*                             {% if webPathFoto != false %}*/
/*                                 <img src="{{ webPathFoto }}" alt="" class="circle responsive-img" style="width:32px;height:40px;">*/
/*                             {% else %}*/
/*                                 {% image '@FrameworkBundle/Resources/public/images/ic_usuario.jpg' %}*/
/*                                     <img src="{{ asset_url }}" alt="" class="circle responsive-img" style="width:40px;height:40px;">*/
/*                                 {% endimage %}*/
/*                             {% endif %}*/
/* */
/*                             <i class="material-icons right">arrow_drop_down</i>*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endif %}*/
/* */
/*             </ul>*/
/* */
/*             <ul id="nav-mobile" class="side-nav">*/
/* */
/*                 {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                     {{ render(controller(*/
/*                     'AppBundle:AccesoDirecto:showv',*/
/*                     { }*/
/*                     )) }}*/
/*                     <li>*/
/*                         <a class="dropdown-button" href="#!" data-activates="dropdownMicuenta2">*/
/*                             {% if webPathFoto != false %}*/
/*                                 <img src="{{ webPathFoto }}" alt="" class="circle responsive-img" style="width:32px;height:40px;">*/
/*                             {% else %}*/
/*                                 {% image '@FrameworkBundle/Resources/public/images/ic_usuario.jpg' %}*/
/*                                 <img src="{{ asset_url }}" alt="" class="circle responsive-img" style="width:40px;height:40px;">*/
/*                                 {% endimage %}*/
/*                             {% endif %}*/
/*                             Mi Perfil*/
/*                             <i class="material-icons right">arrow_drop_down</i>*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endif %}*/
/* */
/*                 <!--li><a href="#">Navbar Link</a></li-->*/
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
