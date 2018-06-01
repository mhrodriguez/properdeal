<?php

/* :barra_herramientas:show.html.twig */
class __TwigTemplate_fbd33ae66c80d77a3c5221fe06466e490c823686fabed96b690ecb1b70c0c5ac extends Twig_Template
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
        // line 8
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 0)) {
            // line 9
            echo "            <li  class=\"active\">
            ";
        } else {
            // line 11
            echo "            <li>
            ";
        }
        // line 13
        echo "            <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panel_principal", array());
        echo "\"><i class=\"material-icons left\">dashboard</i>Dashboard</a></li>

            ";
        // line 15
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 1)) {
            // line 16
            echo "            <li  class=\"active\">
                ";
        } else {
            // line 18
            echo "            <li>
                ";
        }
        // line 20
        echo "                <a href=\"#\">
                    <i class=\"material-icons left\">insert_drive_file</i>Resumen
                </a>
            </li>

            ";
        // line 25
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 2)) {
            // line 26
            echo "            <li  class=\"active\">
                ";
        } else {
            // line 28
            echo "            <li>
                ";
        }
        // line 30
        echo "                <a href=\"#\">
                    <i class=\"material-icons left\">list</i>Blog
                    <div class=\"chip\">
                        0
                    </div>
                </a>
            </li>

            ";
        // line 38
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 3)) {
            // line 39
            echo "            <li  class=\"active\">
                ";
        } else {
            // line 41
            echo "            <li>
                ";
        }
        // line 43
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panel_inmueble", array());
        echo "\"><i class=\"material-icons left\">home</i>Mis Propiedades
                    <div class=\"chip\">
                        ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["countInmuebles"]) ? $context["countInmuebles"] : null), "html", null, true);
        echo "
                    </div>
                </a>
            </li>

            ";
        // line 50
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 4)) {
            // line 51
            echo "            <li  class=\"active\">
                ";
        } else {
            // line 53
            echo "            <li>
                ";
        }
        // line 55
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panel_prospecto", array());
        echo "\"><i class=\"material-icons left\">person</i>Prospectos
                    <div class=\"chip\">
                        ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["countProspectos"]) ? $context["countProspectos"] : null), "html", null, true);
        echo "
                    </div>
                </a>
            </li>

            ";
        // line 62
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 5)) {
            // line 63
            echo "            <li  class=\"active\">
                ";
        } else {
            // line 65
            echo "            <li>
                ";
        }
        // line 67
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("panel_solicitud", array());
        echo "\"><i class=\"material-icons left\">bookmark</i>Solicitudes
                    <div class=\"chip\">
                        ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["countSolicitudes"]) ? $context["countSolicitudes"] : null), "html", null, true);
        echo "
                    </div>
                </a>
            </li>

            ";
        // line 74
        if (((isset($context["indexSeleccionado"]) ? $context["indexSeleccionado"] : null) == 6)) {
            // line 75
            echo "            <li  class=\"active\">
                ";
        } else {
            // line 77
            echo "            <li>
                ";
        }
        // line 79
        echo "                <a href=\"#\"><i class=\"material-icons left\">email</i>Mensajes
                    <div class=\"chip\">
                        0
                    </div>
                </a>
            </li>
        </ul>


        <ul id=\"nav-mobile-herramientas\" class=\"side-nav\">
            <li><a href=\"#\"><i class=\"material-icons left\">dashboard</i>Dashboard</a></li>
            <li>
                <a href=\"#\">
                    <i class=\"material-icons left\">insert_drive_file</i>Resumen
                </a>
            </li>
            <li>
                <a href=\"#\">
                    <i class=\"material-icons left\">list</i>Blog
                    <div class=\"chip\">
                        0
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\">Mis Propiedades
                    <div class=\"chip\">
                        ";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["countInmuebles"]) ? $context["countInmuebles"] : null), "html", null, true);
        echo "
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\"><i class=\"material-icons left\">person</i>Prospectos
                    <div class=\"chip\">
                        ";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["countProspectos"]) ? $context["countProspectos"] : null), "html", null, true);
        echo "
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\"><i class=\"material-icons left\">bookmark</i>Solicitudes
                    <div class=\"chip\">
                        0
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\"><i class=\"material-icons left\">email</i>Mensajes
                    <div class=\"chip\">
                        0
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
        return array (  202 => 113,  192 => 106,  163 => 79,  159 => 77,  155 => 75,  153 => 74,  145 => 69,  139 => 67,  135 => 65,  131 => 63,  129 => 62,  121 => 57,  115 => 55,  111 => 53,  107 => 51,  105 => 50,  97 => 45,  91 => 43,  87 => 41,  83 => 39,  81 => 38,  71 => 30,  67 => 28,  63 => 26,  61 => 25,  54 => 20,  50 => 18,  46 => 16,  44 => 15,  38 => 13,  34 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }
}
/* <nav class="blue lighten-5 header z-depth-1" role="navigation">*/
/*     <div class="nav-wrapper">*/
/* */
/*         <a href="#" data-activates="nav-mobile-herramientas" class="button-collapse"><i class="material-icons">menu</i></a>*/
/* */
/*         <ul class="left hide-on-med-and-down">*/
/* */
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
/*                 <a href="#">*/
/*                     <i class="material-icons left">insert_drive_file</i>Resumen*/
/*                 </a>*/
/*             </li>*/
/* */
/*             {% if (indexSeleccionado==2) %}*/
/*             <li  class="active">*/
/*                 {% else %}*/
/*             <li>*/
/*                 {% endif %}*/
/*                 <a href="#">*/
/*                     <i class="material-icons left">list</i>Blog*/
/*                     <div class="chip">*/
/*                         0*/
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
/*                     <div class="chip">*/
/*                         {{ countInmuebles }}*/
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
/*                 <a href="#"><i class="material-icons left">email</i>Mensajes*/
/*                     <div class="chip">*/
/*                         0*/
/*                     </div>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/* */
/* */
/*         <ul id="nav-mobile-herramientas" class="side-nav">*/
/*             <li><a href="#"><i class="material-icons left">dashboard</i>Dashboard</a></li>*/
/*             <li>*/
/*                 <a href="#">*/
/*                     <i class="material-icons left">insert_drive_file</i>Resumen*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#">*/
/*                     <i class="material-icons left">list</i>Blog*/
/*                     <div class="chip">*/
/*                         0*/
/*                     </div>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#">Mis Propiedades*/
/*                     <div class="chip">*/
/*                         {{ countInmuebles }}*/
/*                     </div>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#"><i class="material-icons left">person</i>Prospectos*/
/*                     <div class="chip">*/
/*                         {{ countProspectos }}*/
/*                     </div>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#"><i class="material-icons left">bookmark</i>Solicitudes*/
/*                     <div class="chip">*/
/*                         0*/
/*                     </div>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#"><i class="material-icons left">email</i>Mensajes*/
/*                     <div class="chip">*/
/*                         0*/
/*                     </div>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/* */
/*     </div>*/
/* </nav>*/
/* */
