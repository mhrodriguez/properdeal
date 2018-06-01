<?php

/* :menu_principal:show.html.twig */
class __TwigTemplate_7faff058d3c25c3d6245463fcf98f27e953e575dad4bb0bc3f32f8eb58a2fda1 extends Twig_Template
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
        echo "<iframe style=\"width:100%; height:225vh;\" frameBorder=\"0\" src=\"";
        echo $this->env->getExtension('routing')->getPath("consultarinmueble_buscarformvertical", array());
        echo "\">
</iframe>
<iframe id=\"iframeTarea\" src=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("tarea_new", array());
        echo "\" style=\"width:100%; height:110vh; margin-top:8px; padding-top:-8px\" frameBorder=\"0\">
</iframe>
<iframe id=\"iframeTarea\" src=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("tarea_actividades", array());
        echo "\" style=\"width:100%; height:30vh; margin-top:8px; padding-top:-8px\" frameBorder=\"0\">
</iframe>


<ul class=\"collapsible\" data-collapsible=\"accordion\">
    <li>
        <div class=\"collapsible-header \" style=\"align-content: center\">
            ";
        // line 12
        if (((isset($context["webPathLogo"]) ? $context["webPathLogo"] : null) != false)) {
            // line 13
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["webPathLogo"]) ? $context["webPathLogo"] : null), "html", null, true);
            echo "\" alt=\"\" class=\"responsive-img\" style=\"margin-top:10px;width:50px;height:40px;\"><br>
            ";
        }
        // line 15
        echo "            <a href=\"#!\"><i class=\"material-icons right\">assignment_ind</i>Mi Cuenta</a>
        </div>
        <div class=\"collapsible-body blue lighten-5\">
            <div class=\"collection\">

                ";
        // line 20
        if (($this->env->getExtension('security')->isGranted("ROLE_SUPERADMIN") == true)) {
            // line 21
            echo "                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
            echo $this->env->getExtension('routing')->getPath("usuario_new", array());
            echo "');\">
                    <i class=\"material-icons right\">account_circle</i>
                    <span class=\"blue-text text-darken-2\">Crear Usuario</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
            // line 25
            echo $this->env->getExtension('routing')->getPath("asesorpermiso_index", array());
            echo "');\">
                    <i class=\"material-icons right\">account_circle</i>
                    <span class=\"blue-text text-darken-2\">Permisos</span>
                </a>
                ";
        }
        // line 30
        echo "
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 31
        echo $this->env->getExtension('routing')->getPath("glosario_index", array());
        echo "');\">
                    <i class=\"material-icons right\">text_format</i>
                    <span class=\"blue-text text-darken-2\">Glosario</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 35
        echo $this->env->getExtension('routing')->getPath("usuario_edit", array());
        echo "');\">
                    <i class=\"material-icons right\">settings</i>
                    <span class=\"blue-text text-darken-2\">Preferencias</span>
                </a>

                ";
        // line 40
        if (($this->env->getExtension('security')->isGranted("ROLE_SUPERADMIN") == true)) {
            // line 41
            echo "                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
            echo $this->env->getExtension('routing')->getPath("asesor_index", array());
            echo "');\">
                    <i class=\"material-icons right\">people</i>
                    <span class=\"blue-text text-darken-2\">Asesores</span>
                </a>
                ";
        }
        // line 46
        echo "
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 47
        echo $this->env->getExtension('routing')->getPath("gerencia_index", array());
        echo "');\">
                    <i class=\"material-icons right\">device_hub</i>
                    <span class=\"blue-text text-darken-2\">Gerencias</span>
                </a>

                ";
        // line 52
        if (($this->getAttribute((isset($context["asesorpermisos"]) ? $context["asesorpermisos"] : null), "destacarpropiedad", array()) == true)) {
            // line 53
            echo "                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
            echo $this->env->getExtension('routing')->getPath("destacado_index", array());
            echo "');\">
                    <i class=\"material-icons right\">whatshot</i>
                    <span class=\"blue-text text-darken-2\">Destacados</span>
                </a>
                ";
        }
        // line 58
        echo "
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"window.location.href = '";
        // line 59
        echo $this->env->getExtension('routing')->getPath("panel_documento", array());
        echo "';\">
                    <i class=\"material-icons right\">import_contacts</i>
                    <span class=\"blue-text text-darken-2\">Documentos</span>
                </a>

                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"window.location.href = '";
        // line 64
        echo $this->env->getExtension('routing')->getPath("panel_blog", array());
        echo "';\">
                    <i class=\"material-icons right\">view_week</i>
                    <span class=\"blue-text text-darken-2\">Blog</span>
                </a>

                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 69
        echo $this->env->getExtension('routing')->getPath("enlace_index", array());
        echo "');\">
                    <i class=\"material-icons right\">insert_link</i>
                    <span class=\"blue-text text-darken-2\">Enlace</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 73
        echo $this->env->getExtension('routing')->getPath("colaborador_index", array());
        echo "');\">
                    <i class=\"material-icons right\">portrait</i>
                    <span class=\"blue-text text-darken-2\">Colaboradores</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURLTop('";
        // line 77
        echo $this->env->getExtension('routing')->getPath("panel_resumen", array());
        echo "');\">
                    <i class=\"material-icons right\">event</i>
                    <span class=\"blue-text text-darken-2\">Mi Calendario</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURLTop('";
        // line 81
        echo $this->env->getExtension('routing')->getPath("panel_mensaje", array());
        echo "');\">
                    <i class=\"material-icons right\">message</i>
                    <span class=\"blue-text text-darken-2\">Mis Mensajes</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 85
        echo $this->env->getExtension('routing')->getPath("formato_index", array());
        echo "');\">
                    <i class=\"material-icons right\">card_travel</i>
                    <span class=\"blue-text text-darken-2\">Formatos</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 89
        echo $this->env->getExtension('routing')->getPath("comision_index", array());
        echo "');\">
                    <i class=\"material-icons right\">monetization_on</i>
                    <span class=\"blue-text text-darken-2\">Comisiones pagadas</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 93
        echo $this->env->getExtension('routing')->getPath("rotulo_index", array());
        echo "');\">
                    <i class=\"material-icons right\">warning</i>
                    <span class=\"blue-text text-darken-2\">Rotulos</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 97
        echo $this->env->getExtension('routing')->getPath("zona_index", array());
        echo "');\">
                    <i class=\"material-icons right\">location_city</i>
                    <span class=\"blue-text text-darken-2\">Zonas</span>
                </a>
                <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("panel_principal", array());
        echo "\" class=\"collection-item transparent text-darken-2\">
                    <i class=\"material-icons right\">monetization_on</i>
                    <span class=\"blue-text text-darken-2\">Precio real</span>
                </a>
            </div>
        </div>
    </li>
    <li>
        <div class=\"collapsible-header \">
            <a><i class=\"material-icons right\">email</i>Envíos</a>
        </div>
        <div class=\"collapsible-body blue lighten-5\">
            <div class=\"collection\">
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 114
        echo $this->env->getExtension('routing')->getPath("listacontacto_index", array());
        echo "');\">
                    <i class=\"material-icons right\">recent_actors</i>
                    <span class=\"blue-text text-darken-2\">Administración de Listas</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 118
        echo $this->env->getExtension('routing')->getPath("contacto_index", array());
        echo "');\">
                    <i class=\"material-icons right\">person</i>
                    <span class=\"blue-text text-darken-2\">Contactos</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 122
        echo $this->env->getExtension('routing')->getPath("listacontacto_index", array());
        echo "');\">
                    <i class=\"material-icons right\">email</i>
                    <span class=\"blue-text text-darken-2\">Enviar mensaje a lista</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 126
        echo $this->env->getExtension('routing')->getPath("ids_index", array());
        echo "');\">
                    <i class=\"material-icons right\">email</i>
                    <span class=\"blue-text text-darken-2\">Enviar varias propiedades</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 130
        echo $this->env->getExtension('routing')->getPath("banner_index", array());
        echo "');\">
                    <i class=\"material-icons right\">email</i>
                    <span class=\"blue-text text-darken-2\">Enviar banner a lista</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 134
        echo $this->env->getExtension('routing')->getPath("mensaje_new", array());
        echo "');\">
                    <i class=\"material-icons right\">email</i>
                    <span class=\"blue-text text-darken-2\">Enviar requerimientos</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 138
        echo $this->env->getExtension('routing')->getPath("mensaje_resumenenvios", array());
        echo "');\">
                    <i class=\"material-icons right\">email</i>
                    <span class=\"blue-text text-darken-2\">Resumen de envíos</span>
                </a>
            </div>
        </div>
    </li>
    <li>
        <div class=\"collapsible-header \">
            <a><i class=\"material-icons right\">library_books</i>Reportes</a>
        </div>
        <div class=\"collapsible-body blue lighten-5\">
            <div class=\"collection\">
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 151
        echo $this->env->getExtension('routing')->getPath("tarea_index", array());
        echo "');\">
                    <i class=\"material-icons right\">event</i>
                    <span class=\"blue-text text-darken-2\">Bitácora de mis propiedades</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\">
                    <i class=\"material-icons right\">event</i>
                    <span class=\"blue-text text-darken-2\">Reporte de seguimiento</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 159
        echo $this->env->getExtension('routing')->getPath("tarea_index", array());
        echo "');\">
                    <i class=\"material-icons right\">event</i>
                    <span class=\"blue-text text-darken-2\">Reporte de actividad</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 163
        echo $this->env->getExtension('routing')->getPath("tarea_index", array());
        echo "');\">
                    <i class=\"material-icons right\">event</i>
                    <span class=\"blue-text text-darken-2\">Reporte de Operaciones</span>
                </a>
            </div>
        </div>
    </li>

    <li>
        <div class=\"collapsible-header \">
            <a><i class=\"material-icons right\">library_books</i>Agencias</a>
        </div>
        <div class=\"collapsible-body blue lighten-5\">
            <div class=\"collection\">
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 177
        echo $this->env->getExtension('routing')->getPath("agencia_index", array());
        echo "');\">
                    <i class=\"material-icons right\">library_books</i>
                    <span class=\"blue-text text-darken-2\">Directorio de Agencias</span>
                </a>
            </div>
        </div>
    </li>
</ul>
<script>
    function abrirURL(\$url)
    {
        var iframe = document.getElementById('iframePrincipal');
        iframe.style.display='';
        iframe.src = \$url;

        \$('html, body').animate({ scrollTop: 0 }, 'slow');
    }

    function abrirURLTop(\$url)
    {
        window.top.location.href = \$url;
    }
</script>";
    }

    public function getTemplateName()
    {
        return ":menu_principal:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 177,  291 => 163,  284 => 159,  273 => 151,  257 => 138,  250 => 134,  243 => 130,  236 => 126,  229 => 122,  222 => 118,  215 => 114,  199 => 101,  192 => 97,  185 => 93,  178 => 89,  171 => 85,  164 => 81,  157 => 77,  150 => 73,  143 => 69,  135 => 64,  127 => 59,  124 => 58,  115 => 53,  113 => 52,  105 => 47,  102 => 46,  93 => 41,  91 => 40,  83 => 35,  76 => 31,  73 => 30,  65 => 25,  57 => 21,  55 => 20,  48 => 15,  42 => 13,  40 => 12,  30 => 5,  25 => 3,  19 => 1,);
    }
}
/* <iframe style="width:100%; height:225vh;" frameBorder="0" src="{{ path('consultarinmueble_buscarformvertical', {}) }}">*/
/* </iframe>*/
/* <iframe id="iframeTarea" src="{{ path('tarea_new', {}) }}" style="width:100%; height:110vh; margin-top:8px; padding-top:-8px" frameBorder="0">*/
/* </iframe>*/
/* <iframe id="iframeTarea" src="{{ path('tarea_actividades', {}) }}" style="width:100%; height:30vh; margin-top:8px; padding-top:-8px" frameBorder="0">*/
/* </iframe>*/
/* */
/* */
/* <ul class="collapsible" data-collapsible="accordion">*/
/*     <li>*/
/*         <div class="collapsible-header " style="align-content: center">*/
/*             {% if webPathLogo != false %}*/
/*                 <img src="{{ webPathLogo }}" alt="" class="responsive-img" style="margin-top:10px;width:50px;height:40px;"><br>*/
/*             {% endif %}*/
/*             <a href="#!"><i class="material-icons right">assignment_ind</i>Mi Cuenta</a>*/
/*         </div>*/
/*         <div class="collapsible-body blue lighten-5">*/
/*             <div class="collection">*/
/* */
/*                 {% if is_granted('ROLE_SUPERADMIN') == true %}*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('usuario_new', {}) }}');">*/
/*                     <i class="material-icons right">account_circle</i>*/
/*                     <span class="blue-text text-darken-2">Crear Usuario</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('asesorpermiso_index', {}) }}');">*/
/*                     <i class="material-icons right">account_circle</i>*/
/*                     <span class="blue-text text-darken-2">Permisos</span>*/
/*                 </a>*/
/*                 {% endif %}*/
/* */
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('glosario_index', {}) }}');">*/
/*                     <i class="material-icons right">text_format</i>*/
/*                     <span class="blue-text text-darken-2">Glosario</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('usuario_edit', {}) }}');">*/
/*                     <i class="material-icons right">settings</i>*/
/*                     <span class="blue-text text-darken-2">Preferencias</span>*/
/*                 </a>*/
/* */
/*                 {% if is_granted('ROLE_SUPERADMIN') == true %}*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('asesor_index', {}) }}');">*/
/*                     <i class="material-icons right">people</i>*/
/*                     <span class="blue-text text-darken-2">Asesores</span>*/
/*                 </a>*/
/*                 {% endif %}*/
/* */
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('gerencia_index', {}) }}');">*/
/*                     <i class="material-icons right">device_hub</i>*/
/*                     <span class="blue-text text-darken-2">Gerencias</span>*/
/*                 </a>*/
/* */
/*                 {% if asesorpermisos.destacarpropiedad == true %}*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('destacado_index', {}) }}');">*/
/*                     <i class="material-icons right">whatshot</i>*/
/*                     <span class="blue-text text-darken-2">Destacados</span>*/
/*                 </a>*/
/*                 {% endif %}*/
/* */
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="window.location.href = '{{ path('panel_documento', {}) }}';">*/
/*                     <i class="material-icons right">import_contacts</i>*/
/*                     <span class="blue-text text-darken-2">Documentos</span>*/
/*                 </a>*/
/* */
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="window.location.href = '{{ path('panel_blog', {}) }}';">*/
/*                     <i class="material-icons right">view_week</i>*/
/*                     <span class="blue-text text-darken-2">Blog</span>*/
/*                 </a>*/
/* */
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('enlace_index', {}) }}');">*/
/*                     <i class="material-icons right">insert_link</i>*/
/*                     <span class="blue-text text-darken-2">Enlace</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('colaborador_index', {}) }}');">*/
/*                     <i class="material-icons right">portrait</i>*/
/*                     <span class="blue-text text-darken-2">Colaboradores</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURLTop('{{ path('panel_resumen', {}) }}');">*/
/*                     <i class="material-icons right">event</i>*/
/*                     <span class="blue-text text-darken-2">Mi Calendario</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURLTop('{{ path('panel_mensaje', {}) }}');">*/
/*                     <i class="material-icons right">message</i>*/
/*                     <span class="blue-text text-darken-2">Mis Mensajes</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('formato_index', {}) }}');">*/
/*                     <i class="material-icons right">card_travel</i>*/
/*                     <span class="blue-text text-darken-2">Formatos</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('comision_index', {}) }}');">*/
/*                     <i class="material-icons right">monetization_on</i>*/
/*                     <span class="blue-text text-darken-2">Comisiones pagadas</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('rotulo_index', {}) }}');">*/
/*                     <i class="material-icons right">warning</i>*/
/*                     <span class="blue-text text-darken-2">Rotulos</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('zona_index', {}) }}');">*/
/*                     <i class="material-icons right">location_city</i>*/
/*                     <span class="blue-text text-darken-2">Zonas</span>*/
/*                 </a>*/
/*                 <a href="{{ path('panel_principal', {}) }}" class="collection-item transparent text-darken-2">*/
/*                     <i class="material-icons right">monetization_on</i>*/
/*                     <span class="blue-text text-darken-2">Precio real</span>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </li>*/
/*     <li>*/
/*         <div class="collapsible-header ">*/
/*             <a><i class="material-icons right">email</i>Envíos</a>*/
/*         </div>*/
/*         <div class="collapsible-body blue lighten-5">*/
/*             <div class="collection">*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('listacontacto_index', {}) }}');">*/
/*                     <i class="material-icons right">recent_actors</i>*/
/*                     <span class="blue-text text-darken-2">Administración de Listas</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('contacto_index', {}) }}');">*/
/*                     <i class="material-icons right">person</i>*/
/*                     <span class="blue-text text-darken-2">Contactos</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('listacontacto_index', {}) }}');">*/
/*                     <i class="material-icons right">email</i>*/
/*                     <span class="blue-text text-darken-2">Enviar mensaje a lista</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('ids_index', {}) }}');">*/
/*                     <i class="material-icons right">email</i>*/
/*                     <span class="blue-text text-darken-2">Enviar varias propiedades</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('banner_index', {}) }}');">*/
/*                     <i class="material-icons right">email</i>*/
/*                     <span class="blue-text text-darken-2">Enviar banner a lista</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('mensaje_new', {}) }}');">*/
/*                     <i class="material-icons right">email</i>*/
/*                     <span class="blue-text text-darken-2">Enviar requerimientos</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('mensaje_resumenenvios', {}) }}');">*/
/*                     <i class="material-icons right">email</i>*/
/*                     <span class="blue-text text-darken-2">Resumen de envíos</span>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </li>*/
/*     <li>*/
/*         <div class="collapsible-header ">*/
/*             <a><i class="material-icons right">library_books</i>Reportes</a>*/
/*         </div>*/
/*         <div class="collapsible-body blue lighten-5">*/
/*             <div class="collection">*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('tarea_index', {}) }}');">*/
/*                     <i class="material-icons right">event</i>*/
/*                     <span class="blue-text text-darken-2">Bitácora de mis propiedades</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2">*/
/*                     <i class="material-icons right">event</i>*/
/*                     <span class="blue-text text-darken-2">Reporte de seguimiento</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('tarea_index', {}) }}');">*/
/*                     <i class="material-icons right">event</i>*/
/*                     <span class="blue-text text-darken-2">Reporte de actividad</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('tarea_index', {}) }}');">*/
/*                     <i class="material-icons right">event</i>*/
/*                     <span class="blue-text text-darken-2">Reporte de Operaciones</span>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </li>*/
/* */
/*     <li>*/
/*         <div class="collapsible-header ">*/
/*             <a><i class="material-icons right">library_books</i>Agencias</a>*/
/*         </div>*/
/*         <div class="collapsible-body blue lighten-5">*/
/*             <div class="collection">*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('agencia_index', {}) }}');">*/
/*                     <i class="material-icons right">library_books</i>*/
/*                     <span class="blue-text text-darken-2">Directorio de Agencias</span>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </li>*/
/* </ul>*/
/* <script>*/
/*     function abrirURL($url)*/
/*     {*/
/*         var iframe = document.getElementById('iframePrincipal');*/
/*         iframe.style.display='';*/
/*         iframe.src = $url;*/
/* */
/*         $('html, body').animate({ scrollTop: 0 }, 'slow');*/
/*     }*/
/* */
/*     function abrirURLTop($url)*/
/*     {*/
/*         window.top.location.href = $url;*/
/*     }*/
/* </script>*/
