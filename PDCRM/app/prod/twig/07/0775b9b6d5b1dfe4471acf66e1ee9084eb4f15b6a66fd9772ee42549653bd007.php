<?php

/* :header:show.html.twig */
class __TwigTemplate_be6826957c27305e688dbffd4867f3e5bf12b4d5d2d2066ce0ac850fc32a63a9 extends Twig_Template
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
        <ul class=\"right hide-on-med-and-down\">

            ";
        // line 29
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 30
            echo "
                <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdownMicuenta\">
                    ";
            // line 32
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "3a93b33_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33_0") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33_ic_usuario_1.jpg");
                // line 33
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"circle responsive-img\">
                    ";
            } else {
                // asset "3a93b33"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33.jpg");
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"circle responsive-img\">
                    ";
            }
            unset($context["asset_url"]);
            // line 35
            echo "                    <i class=\"material-icons right\">arrow_drop_down</i>
                </a>

            ";
        } else {
            // line 39
            echo "                <li><a href=\"#\">Nosotros</a></li>
                <li><a href=\"#\">Testimonios</a></li>
                <li><a href=\"#\">Contáctanos</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("login", array());
            echo "\">Login</a></li>
                <li><a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("usuario_new", array());
            echo "\">Registrarse</a></li>
            ";
        }
        // line 46
        echo "
            <!--li><a href=\"#\">Navbar Link</a></li-->
        </ul>

        <ul id=\"nav-mobile\" class=\"side-nav\">

            ";
        // line 52
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 53
            echo "
                <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdownMicuenta2\">
                    ";
            // line 55
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "3a93b33_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33_0") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33_ic_usuario_1.jpg");
                // line 56
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"circle responsive-img\">
                    ";
            } else {
                // asset "3a93b33"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33.jpg");
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"circle responsive-img\">
                    ";
            }
            unset($context["asset_url"]);
            // line 58
            echo "                    <i class=\"material-icons right\">arrow_drop_down</i>
                </a>

            ";
        } else {
            // line 62
            echo "                <li><a href=\"#\">Nosotros</a></li>
                <li><a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("testimonio_index", array());
            echo "\">Testimonios</a></li>
                <li><a href=\"#\">Contáctanos</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("login", array());
            echo "\">Login</a></li>
                <li><a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("usuario_new", array());
            echo "\">Registrarse</a></li>
            ";
        }
        // line 69
        echo "
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
        return ":header:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 69,  195 => 67,  191 => 66,  185 => 63,  182 => 62,  176 => 58,  162 => 56,  158 => 55,  154 => 53,  152 => 52,  144 => 46,  139 => 44,  135 => 43,  129 => 39,  123 => 35,  109 => 33,  105 => 32,  101 => 30,  99 => 29,  94 => 26,  86 => 23,  80 => 21,  74 => 19,  71 => 18,  62 => 23,  56 => 21,  50 => 19,  47 => 18,  43 => 17,  35 => 12,  27 => 7,  19 => 1,);
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
/*         <ul class="right hide-on-med-and-down">*/
/* */
/*             {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/* */
/*                 <a class="dropdown-button" href="#!" data-activates="dropdownMicuenta">*/
/*                     {% image '@FrameworkBundle/Resources/public/images/ic_usuario.jpg' %}*/
/*                     <img src="{{ asset_url }}" alt="" class="circle responsive-img">*/
/*                     {% endimage %}*/
/*                     <i class="material-icons right">arrow_drop_down</i>*/
/*                 </a>*/
/* */
/*             {% else %}*/
/*                 <li><a href="#">Nosotros</a></li>*/
/*                 <li><a href="#">Testimonios</a></li>*/
/*                 <li><a href="#">Contáctanos</a></li>*/
/*                 <li class="divider"></li>*/
/*                 <li><a href="{{ path('login', {}) }}">Login</a></li>*/
/*                 <li><a href="{{ path('usuario_new', {}) }}">Registrarse</a></li>*/
/*             {% endif %}*/
/* */
/*             <!--li><a href="#">Navbar Link</a></li-->*/
/*         </ul>*/
/* */
/*         <ul id="nav-mobile" class="side-nav">*/
/* */
/*             {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/* */
/*                 <a class="dropdown-button" href="#!" data-activates="dropdownMicuenta2">*/
/*                     {% image '@FrameworkBundle/Resources/public/images/ic_usuario.jpg' %}*/
/*                     <img src="{{ asset_url }}" alt="" class="circle responsive-img">*/
/*                     {% endimage %}*/
/*                     <i class="material-icons right">arrow_drop_down</i>*/
/*                 </a>*/
/* */
/*             {% else %}*/
/*                 <li><a href="#">Nosotros</a></li>*/
/*                 <li><a href="{{ path('testimonio_index', {}) }}">Testimonios</a></li>*/
/*                 <li><a href="#">Contáctanos</a></li>*/
/*                 <li class="divider"></li>*/
/*                 <li><a href="{{ path('login', {}) }}">Login</a></li>*/
/*                 <li><a href="{{ path('usuario_new', {}) }}">Registrarse</a></li>*/
/*             {% endif %}*/
/* */
/*         </ul>*/
/* */
/*         <style>*/
/*             .circle*/
/*             {*/
/*                 vertical-align:middle;*/
/*             }*/
/*         </style>*/
/*     </div>*/
/* </nav>*/
/* */
