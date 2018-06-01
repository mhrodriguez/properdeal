<?php

/* :header_principal:show.html.twig */
class __TwigTemplate_aea0e7a600f2870a1a637c1286d1766c2fa0b45dc7f809975bde61a3b4a4e8ef extends Twig_Template
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
        echo "\" style=\"font-size:13px;\">Mi Perfil</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("logout", array());
        echo "\" style=\"font-size:13px;\">Salir</a></li>
        </ul>

        <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>

        ";
        // line 17
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 18
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("panel_principal", array());
            echo "\" class=\"brand-logo\">
                ";
            // line 19
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "dc09010_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc09010_0") : $this->env->getExtension('asset')->getAssetUrl("images/dc09010_logotipo_1.png");
                // line 20
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
            // line 22
            echo "            </a>
        ";
        } else {
            // line 24
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage", array());
            echo "\" class=\"brand-logo\">
                ";
            // line 25
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "dc09010_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc09010_0") : $this->env->getExtension('asset')->getAssetUrl("images/dc09010_logotipo_1.png");
                // line 26
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
            // line 28
            echo "            </a>
        ";
        }
        // line 30
        echo "
            <ul class=\"right hide-on-med-and-down\">

                ";
        // line 33
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 34
            echo "                    <li>
                        ";
            // line 35
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:AccesoDirecto:show", array()));
            // line 38
            echo "
                    </li>
                    <li>
                        <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdownMicuenta\">

                            ";
            // line 43
            if (((isset($context["webPathFoto"]) ? $context["webPathFoto"] : null) != false)) {
                // line 44
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["webPathFoto"]) ? $context["webPathFoto"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"circle responsive-img\" style=\"width:40px;height:40px;\">
                            ";
            } else {
                // line 46
                echo "                                ";
                if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                    // asset "3a93b33_0"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33_0") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33_ic_usuario_1.jpg");
                    // line 47
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
                // line 49
                echo "                            ";
            }
            // line 50
            echo "
                            <i class=\"material-icons right\">arrow_drop_down</i>
                        </a>
                    </li>
                ";
        }
        // line 55
        echo "
            </ul>

            <ul id=\"nav-mobile\" class=\"side-nav\">

                ";
        // line 60
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 61
            echo "                    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:AccesoDirecto:showv", array()));
            // line 64
            echo "
                    <li>
                        <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdownMicuenta2\">
                            ";
            // line 67
            if (((isset($context["webPathFoto"]) ? $context["webPathFoto"] : null) != false)) {
                // line 68
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["webPathFoto"]) ? $context["webPathFoto"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"circle responsive-img\" style=\"width:40px;height:40px;\">
                            ";
            } else {
                // line 70
                echo "                                ";
                if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                    // asset "3a93b33_0"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33_0") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33_ic_usuario_1.jpg");
                    // line 71
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
                // line 73
                echo "                            ";
            }
            // line 74
            echo "                            Mi Perfil
                            <i class=\"material-icons right\">arrow_drop_down</i>
                        </a>
                    </li>
                ";
        }
        // line 79
        echo "
                <!--li><a href=\"#\">Navbar Link</a></li-->
            </ul>

            <style>
                .circle
                {
                    vertical-align:middle;
                }

            </style>

            <script>
                    \$('.dropdown-button').dropdown({
                                inDuration: 300,
                                outDuration: 225,
                                constrain_width: false, // Does not change width of dropdown to that of the activator
                                hover: true, // Activate on hover
                                gutter: 0, // Spacing from edge
                                belowOrigin: false, // Displays dropdown below the button
                                alignment: 'left' // Displays dropdown with edge aligned to the left of button
                            }
                    );
            </script>
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
        return array (  215 => 79,  208 => 74,  205 => 73,  191 => 71,  186 => 70,  180 => 68,  178 => 67,  173 => 64,  170 => 61,  168 => 60,  161 => 55,  154 => 50,  151 => 49,  137 => 47,  132 => 46,  126 => 44,  124 => 43,  117 => 38,  115 => 35,  112 => 34,  110 => 33,  105 => 30,  101 => 28,  87 => 26,  83 => 25,  78 => 24,  74 => 22,  60 => 20,  56 => 19,  51 => 18,  49 => 17,  41 => 12,  36 => 10,  30 => 7,  25 => 5,  19 => 1,);
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
/*             <li><a href="{{ path('panel_miperfil', {}) }}" style="font-size:13px;">Mi Perfil</a></li>*/
/*             <li class="divider"></li>*/
/*             <li><a href="{{ path('logout', {}) }}" style="font-size:13px;">Salir</a></li>*/
/*         </ul>*/
/* */
/*         <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>*/
/* */
/*         {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*             <a href="{{ path('panel_principal', {}) }}" class="brand-logo">*/
/*                 {% image '@FrameworkBundle/Resources/public/images/logotipo.png' %}*/
/*                 <img src="{{ asset_url }}" class="header-logo" alt="Logo"/>*/
/*                 {% endimage %}*/
/*             </a>*/
/*         {% else %}*/
/*             <a href="{{ path('homepage', {}) }}" class="brand-logo">*/
/*                 {% image '@FrameworkBundle/Resources/public/images/logotipo.png' %}*/
/*                 <img src="{{ asset_url }}" class="header-logo" alt="Logo"/>*/
/*                 {% endimage %}*/
/*             </a>*/
/*         {% endif %}*/
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
/*                                 <img src="{{ webPathFoto }}" alt="" class="circle responsive-img" style="width:40px;height:40px;">*/
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
/*                                 <img src="{{ webPathFoto }}" alt="" class="circle responsive-img" style="width:40px;height:40px;">*/
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
/* */
/*             </style>*/
/* */
/*             <script>*/
/*                     $('.dropdown-button').dropdown({*/
/*                                 inDuration: 300,*/
/*                                 outDuration: 225,*/
/*                                 constrain_width: false, // Does not change width of dropdown to that of the activator*/
/*                                 hover: true, // Activate on hover*/
/*                                 gutter: 0, // Spacing from edge*/
/*                                 belowOrigin: false, // Displays dropdown below the button*/
/*                                 alignment: 'left' // Displays dropdown with edge aligned to the left of button*/
/*                             }*/
/*                     );*/
/*             </script>*/
/*     </div>*/
/* </nav>*/
/* */
