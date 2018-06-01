<?php

/* :barra_herramientas:show.html.twig */
class __TwigTemplate_653aa8dec34fd2f3fe4209c011a40546787c1853f7aebed1ce7ac4543c1cfa37 extends Twig_Template
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
        echo "<nav class=\"blue lighten-5 header z-depth-1\" role=\"navigation\">
    <div class=\"nav-wrapper\">

        <a href=\"#\" data-activates=\"nav-mobile-herramientas\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>

        <ul class=\"left hide-on-med-and-down\">
            ";
        // line 7
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 0)) {
            // line 8
            echo "            <li  class=\"active\">
            ";
        } else {
            // line 10
            echo "            <li>
            ";
        }
        // line 12
        echo "            <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panel_principal", array());
        echo "\"><i class=\"material-icons left\">dashboard</i>Dashboard</a></li>

            ";
        // line 14
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 1)) {
            // line 15
            echo "            <li  class=\"active\">
                ";
        } else {
            // line 17
            echo "            <li>
                ";
        }
        // line 19
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panel_resumen", array());
        echo "\">
                    <i class=\"material-icons left\">insert_drive_file</i>Resumen
                </a>
            </li>

            ";
        // line 24
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 2)) {
            // line 25
            echo "            <li  class=\"active\">
                ";
        } else {
            // line 27
            echo "            <li>
                ";
        }
        // line 29
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panel_blog", array());
        echo "\">
                    <i class=\"material-icons left\">list</i>Blog
                    <div class=\"chip\">
                        ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["countNoticias"]) ? $context["countNoticias"] : null), "html", null, true);
        echo "
                    </div>
                </a>
            </li>

            ";
        // line 37
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 3)) {
            // line 38
            echo "            <li  class=\"active\">
                ";
        } else {
            // line 40
            echo "            <li>
                ";
        }
        // line 42
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panel_inmueble", array());
        echo "\"><i class=\"material-icons left\">home</i>Mis Propiedades
                    <div class=\"chip tooltipped\" data-tooltip=\"Inactivas: ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["countInmueblesInactivos"]) ? $context["countInmueblesInactivos"] : null), "html", null, true);
        echo "\" data-position=\"top\">
                        ";
        // line 44
        echo twig_escape_filter($this->env, ((isset($context["countInmuebles"]) ? $context["countInmuebles"] : null) + (isset($context["countInmueblesInactivos"]) ? $context["countInmueblesInactivos"] : null)), "html", null, true);
        echo "
                    </div>
                </a>
            </li>

            ";
        // line 49
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 4)) {
            // line 50
            echo "            <li  class=\"active\">
                ";
        } else {
            // line 52
            echo "            <li>
                ";
        }
        // line 54
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panel_prospecto", array());
        echo "\"><i class=\"material-icons left\">person</i>Prospectos
                    <div class=\"chip\">
                        ";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["countProspectos"]) ? $context["countProspectos"] : null), "html", null, true);
        echo "
                    </div>
                </a>
            </li>

            ";
        // line 61
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 5)) {
            // line 62
            echo "            <li  class=\"active\">
                ";
        } else {
            // line 64
            echo "            <li>
                ";
        }
        // line 66
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panel_solicitud", array());
        echo "\"><i class=\"material-icons left\">bookmark</i>Solicitudes
                    <div class=\"chip\">
                        ";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["countSolicitudes"]) ? $context["countSolicitudes"] : null), "html", null, true);
        echo "
                    </div>
                </a>
            </li>

            ";
        // line 73
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 6)) {
            // line 74
            echo "            <li  class=\"active\">
                ";
        } else {
            // line 76
            echo "            <li>
                ";
        }
        // line 78
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panel_mensaje", array());
        echo "\"><i class=\"material-icons left\">email</i>Mensajes
                    <div class=\"chip\">
                        ";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["countMensajes"]) ? $context["countMensajes"] : null), "html", null, true);
        echo "
                    </div>
                </a>
            </li>
        </ul>


        <ul id=\"nav-mobile-herramientas\" class=\"side-nav\">
            ";
        // line 88
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 0)) {
            // line 89
            echo "            <li  class=\"active\">
        ";
        } else {
            // line 91
            echo "            <li>
                ";
        }
        // line 93
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panel_principal", array());
        echo "\"><i class=\"material-icons left\">dashboard</i>Dashboard</a></li>

            ";
        // line 95
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 1)) {
            // line 96
            echo "            <li  class=\"active\">
        ";
        } else {
            // line 98
            echo "            <li>
                ";
        }
        // line 100
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panel_resumen", array());
        echo "\">
                    <i class=\"material-icons left\">insert_drive_file</i>Resumen
                </a>
            </li>

            ";
        // line 105
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 2)) {
            // line 106
            echo "            <li  class=\"active\">
        ";
        } else {
            // line 108
            echo "            <li>
                ";
        }
        // line 110
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panel_blog", array());
        echo "\">
                    <i class=\"material-icons left\">list</i>Blog
                    <div class=\"chip\">
                        ";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["countNoticias"]) ? $context["countNoticias"] : null), "html", null, true);
        echo "
                    </div>
                </a>
            </li>

            ";
        // line 118
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 3)) {
            // line 119
            echo "            <li  class=\"active\">
        ";
        } else {
            // line 121
            echo "            <li>
                ";
        }
        // line 123
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panel_inmueble", array());
        echo "\">Mis Propiedades
                    <div class=\"chip\">
                        ";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["countInmuebles"]) ? $context["countInmuebles"] : null), "html", null, true);
        echo "
                    </div>
                </a>
            </li>

            ";
        // line 130
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 4)) {
            // line 131
            echo "            <li  class=\"active\">
        ";
        } else {
            // line 133
            echo "            <li>
                ";
        }
        // line 135
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panel_prospecto", array());
        echo "\"><i class=\"material-icons left\">person</i>Prospectos
                    <div class=\"chip\">
                        ";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["countProspectos"]) ? $context["countProspectos"] : null), "html", null, true);
        echo "
                    </div>
                </a>
            </li>

            ";
        // line 142
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 5)) {
            // line 143
            echo "            <li  class=\"active\">
        ";
        } else {
            // line 145
            echo "            <li>
                ";
        }
        // line 147
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panel_solicitud", array());
        echo "\"><i class=\"material-icons left\">bookmark</i>Solicitudes
                    <div class=\"chip\">
                        ";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["countSolicitudes"]) ? $context["countSolicitudes"] : null), "html", null, true);
        echo "
                    </div>
                </a>
            </li>

            ";
        // line 154
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 6)) {
            // line 155
            echo "            <li  class=\"active\">
                ";
        } else {
            // line 157
            echo "            <li>
                ";
        }
        // line 159
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panel_mensaje", array());
        echo "\"><i class=\"material-icons left\">email</i>Mensajes
                    <div class=\"chip\">
                        ";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["countMensajes"]) ? $context["countMensajes"] : null), "html", null, true);
        echo "
                    </div>
                </a>
            </li>
        </ul>

    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return ":barra_herramientas:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 161,  331 => 159,  327 => 157,  323 => 155,  321 => 154,  313 => 149,  307 => 147,  303 => 145,  299 => 143,  297 => 142,  289 => 137,  283 => 135,  279 => 133,  275 => 131,  273 => 130,  265 => 125,  259 => 123,  255 => 121,  251 => 119,  249 => 118,  241 => 113,  234 => 110,  230 => 108,  226 => 106,  224 => 105,  215 => 100,  211 => 98,  207 => 96,  205 => 95,  199 => 93,  195 => 91,  191 => 89,  189 => 88,  178 => 80,  172 => 78,  168 => 76,  164 => 74,  162 => 73,  154 => 68,  148 => 66,  144 => 64,  140 => 62,  138 => 61,  130 => 56,  124 => 54,  120 => 52,  116 => 50,  114 => 49,  106 => 44,  102 => 43,  97 => 42,  93 => 40,  89 => 38,  87 => 37,  79 => 32,  72 => 29,  68 => 27,  64 => 25,  62 => 24,  53 => 19,  49 => 17,  45 => 15,  43 => 14,  37 => 12,  33 => 10,  29 => 8,  27 => 7,  19 => 1,);
    }
}
/* <nav class="blue lighten-5 header z-depth-1" role="navigation">*/
/*     <div class="nav-wrapper">*/
/* */
/*         <a href="#" data-activates="nav-mobile-herramientas" class="button-collapse"><i class="material-icons">menu</i></a>*/
/* */
/*         <ul class="left hide-on-med-and-down">*/
/*             {% if (indexSeleccionado==0) %}*/
/*             <li  class="active">*/
/*             {% else %}*/
/*             <li>*/
/*             {% endif %}*/
/*             <a href="{{ path('panel_principal', {}) }}"><i class="material-icons left">dashboard</i>Dashboard</a></li>*/
/* */
/*             {% if (indexSeleccionado==1) %}*/
/*             <li  class="active">*/
/*                 {% else %}*/
/*             <li>*/
/*                 {% endif %}*/
/*                 <a href="{{ path('panel_resumen', {}) }}">*/
/*                     <i class="material-icons left">insert_drive_file</i>Resumen*/
/*                 </a>*/
/*             </li>*/
/* */
/*             {% if (indexSeleccionado==2) %}*/
/*             <li  class="active">*/
/*                 {% else %}*/
/*             <li>*/
/*                 {% endif %}*/
/*                 <a href="{{ path('panel_blog', {}) }}">*/
/*                     <i class="material-icons left">list</i>Blog*/
/*                     <div class="chip">*/
/*                         {{ countNoticias }}*/
/*                     </div>*/
/*                 </a>*/
/*             </li>*/
/* */
/*             {% if (indexSeleccionado==3) %}*/
/*             <li  class="active">*/
/*                 {% else %}*/
/*             <li>*/
/*                 {% endif %}*/
/*                 <a href="{{ path('panel_inmueble', {}) }}"><i class="material-icons left">home</i>Mis Propiedades*/
/*                     <div class="chip tooltipped" data-tooltip="Inactivas: {{ countInmueblesInactivos }}" data-position="top">*/
/*                         {{ countInmuebles + countInmueblesInactivos }}*/
/*                     </div>*/
/*                 </a>*/
/*             </li>*/
/* */
/*             {% if (indexSeleccionado==4) %}*/
/*             <li  class="active">*/
/*                 {% else %}*/
/*             <li>*/
/*                 {% endif %}*/
/*                 <a href="{{ path('panel_prospecto', {}) }}"><i class="material-icons left">person</i>Prospectos*/
/*                     <div class="chip">*/
/*                         {{ countProspectos }}*/
/*                     </div>*/
/*                 </a>*/
/*             </li>*/
/* */
/*             {% if (indexSeleccionado==5) %}*/
/*             <li  class="active">*/
/*                 {% else %}*/
/*             <li>*/
/*                 {% endif %}*/
/*                 <a href="{{ path('panel_solicitud', {}) }}"><i class="material-icons left">bookmark</i>Solicitudes*/
/*                     <div class="chip">*/
/*                         {{ countSolicitudes }}*/
/*                     </div>*/
/*                 </a>*/
/*             </li>*/
/* */
/*             {% if (indexSeleccionado==6) %}*/
/*             <li  class="active">*/
/*                 {% else %}*/
/*             <li>*/
/*                 {% endif %}*/
/*                 <a href="{{ path('panel_mensaje', {}) }}"><i class="material-icons left">email</i>Mensajes*/
/*                     <div class="chip">*/
/*                         {{ countMensajes }}*/
/*                     </div>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/* */
/* */
/*         <ul id="nav-mobile-herramientas" class="side-nav">*/
/*             {% if (indexSeleccionado==0) %}*/
/*             <li  class="active">*/
/*         {% else %}*/
/*             <li>*/
/*                 {% endif %}*/
/*                 <a href="{{ path('panel_principal', {}) }}"><i class="material-icons left">dashboard</i>Dashboard</a></li>*/
/* */
/*             {% if (indexSeleccionado==1) %}*/
/*             <li  class="active">*/
/*         {% else %}*/
/*             <li>*/
/*                 {% endif %}*/
/*                 <a href="{{ path('panel_resumen', {}) }}">*/
/*                     <i class="material-icons left">insert_drive_file</i>Resumen*/
/*                 </a>*/
/*             </li>*/
/* */
/*             {% if (indexSeleccionado==2) %}*/
/*             <li  class="active">*/
/*         {% else %}*/
/*             <li>*/
/*                 {% endif %}*/
/*                 <a href="{{ path('panel_blog', {}) }}">*/
/*                     <i class="material-icons left">list</i>Blog*/
/*                     <div class="chip">*/
/*                         {{ countNoticias }}*/
/*                     </div>*/
/*                 </a>*/
/*             </li>*/
/* */
/*             {% if (indexSeleccionado==3) %}*/
/*             <li  class="active">*/
/*         {% else %}*/
/*             <li>*/
/*                 {% endif %}*/
/*                 <a href="{{ path('panel_inmueble', {}) }}">Mis Propiedades*/
/*                     <div class="chip">*/
/*                         {{ countInmuebles }}*/
/*                     </div>*/
/*                 </a>*/
/*             </li>*/
/* */
/*             {% if (indexSeleccionado==4) %}*/
/*             <li  class="active">*/
/*         {% else %}*/
/*             <li>*/
/*                 {% endif %}*/
/*                 <a href="{{ path('panel_prospecto', {}) }}"><i class="material-icons left">person</i>Prospectos*/
/*                     <div class="chip">*/
/*                         {{ countProspectos }}*/
/*                     </div>*/
/*                 </a>*/
/*             </li>*/
/* */
/*             {% if (indexSeleccionado==5) %}*/
/*             <li  class="active">*/
/*         {% else %}*/
/*             <li>*/
/*                 {% endif %}*/
/*                 <a href="{{ path('panel_solicitud', {}) }}"><i class="material-icons left">bookmark</i>Solicitudes*/
/*                     <div class="chip">*/
/*                         {{ countSolicitudes }}*/
/*                     </div>*/
/*                 </a>*/
/*             </li>*/
/* */
/*             {% if (indexSeleccionado==6) %}*/
/*             <li  class="active">*/
/*                 {% else %}*/
/*             <li>*/
/*                 {% endif %}*/
/*                 <a href="{{ path('panel_mensaje', {}) }}"><i class="material-icons left">email</i>Mensajes*/
/*                     <div class="chip">*/
/*                         {{ countMensajes }}*/
/*                     </div>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/* */
/*     </div>*/
/* </nav>*/
/* */
