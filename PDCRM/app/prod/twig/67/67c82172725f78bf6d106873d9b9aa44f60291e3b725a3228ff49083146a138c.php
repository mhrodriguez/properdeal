<?php

/* :menu_principal:show.html.twig */
class __TwigTemplate_51bcd2159cf6a8a1aa815149731f25512a289b06c4b6c7bbfdbbd5675bd6e1c0 extends Twig_Template
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
        echo "<ul class=\"collapsible\" data-collapsible=\"accordion\">
    <li>
        <div class=\"collapsible-header \" style=\"align-content: center\">
            ";
        // line 4
        if (((isset($context["webPathLogo"]) ? $context["webPathLogo"] : null) != false)) {
            // line 5
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["webPathLogo"]) ? $context["webPathLogo"] : null), "html", null, true);
            echo "\" alt=\"\" class=\"responsive-img\" style=\"margin-top:10px;width:50px;height:40px;\"><br>
            ";
        }
        // line 7
        echo "            Mi Cuenta
        </div>
        <div class=\"collapsible-body blue lighten-5\">
            <div class=\"collection\">
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 11
        echo $this->env->getExtension('routing')->getPath("asesor_index", array());
        echo "');\">
                    <span class=\"blue-text text-darken-2\">Asesores</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 14
        echo $this->env->getExtension('routing')->getPath("colaborador_index", array());
        echo "');\">
                    <span class=\"blue-text text-darken-2\">Colaboradores</span>
                </a>
            </div>
        </div>
    </li>
    <li>
        <div class=\"collapsible-header \">Envíos</div>
        <div class=\"collapsible-body blue lighten-5\">
            <div class=\"collection\">
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 24
        echo $this->env->getExtension('routing')->getPath("listacontacto_index", array());
        echo "');\">
                    <span class=\"blue-text text-darken-2\">Admón de Listas</span>
                </a>
                <a href=\"#!\" class=\"collection-item transparent text-darken-2\" onclick=\"abrirURL('";
        // line 27
        echo $this->env->getExtension('routing')->getPath("contacto_index", array());
        echo "');\">
                    <span class=\"blue-text text-darken-2\">Contactos</span>
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
        return array (  63 => 27,  57 => 24,  44 => 14,  38 => 11,  32 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <ul class="collapsible" data-collapsible="accordion">*/
/*     <li>*/
/*         <div class="collapsible-header " style="align-content: center">*/
/*             {% if webPathLogo != false %}*/
/*                 <img src="{{ webPathLogo }}" alt="" class="responsive-img" style="margin-top:10px;width:50px;height:40px;"><br>*/
/*             {% endif %}*/
/*             Mi Cuenta*/
/*         </div>*/
/*         <div class="collapsible-body blue lighten-5">*/
/*             <div class="collection">*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('asesor_index', {}) }}');">*/
/*                     <span class="blue-text text-darken-2">Asesores</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('colaborador_index', {}) }}');">*/
/*                     <span class="blue-text text-darken-2">Colaboradores</span>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </li>*/
/*     <li>*/
/*         <div class="collapsible-header ">Envíos</div>*/
/*         <div class="collapsible-body blue lighten-5">*/
/*             <div class="collection">*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('listacontacto_index', {}) }}');">*/
/*                     <span class="blue-text text-darken-2">Admón de Listas</span>*/
/*                 </a>*/
/*                 <a href="#!" class="collection-item transparent text-darken-2" onclick="abrirURL('{{ path('contacto_index', {}) }}');">*/
/*                     <span class="blue-text text-darken-2">Contactos</span>*/
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
/*     }*/
/* </script>*/
