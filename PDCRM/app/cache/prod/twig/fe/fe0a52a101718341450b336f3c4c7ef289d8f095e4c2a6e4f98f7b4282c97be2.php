<?php

/* :barra_accesosdirectos:showv.html.twig */
class __TwigTemplate_a6a0110fbe8ab6175b80e4b37a413558f9f131808beac7b48a4c91ffdf4dfdc5 extends Twig_Template
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
        echo "<div>
    <li><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("panel_ids", array());
        echo "\" style=\"font-size:13px;\"><i class=\"material-icons left\" style=\"font-size:20px;\">add_shopping_cart</i>IDS</a></li>
    <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("panel_documento", array());
        echo "\" style=\"font-size:13px;\"><i class=\"material-icons left\" style=\"font-size:20px;\">file_download</i>Documentos</a></li>
    <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("inmueble_index", array());
        echo ".xls\" style=\"font-size:13px;\"><i class=\"material-icons left\" style=\"font-size:20px;\">grid_on</i>Excel</a></li>
    <li><a href=\"http://104.236.50.14/PD/web/app.php\" style=\"font-size:13px;\"><i class=\"material-icons left\" style=\"font-size:20px;\">home</i>MiniSitio</a></li>
    <li>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("panel_solicitud2", array());
        echo "\" style=\"font-size:13px;\"><i class=\"material-icons right\" style=\"font-size:20px;\">warning</i>Solicitudes
            <div class=\"chip\">
                ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["countSolicitudes"]) ? $context["countSolicitudes"] : null), "html", null, true);
        echo "
            </div>
        </a>
    </li>
    <li class=\"brown lighten-4\" style=\"font-size:13px;\">
        <a href=\"#\" style=\"font-size:13px;\" onclick=\"alert('Estimado usuario en caso de presentar dificultades en el sistema favor de contactarse al siguiente correo electrónico: jorge@834.mx');\"><i class=\"material-icons left\" style=\"font-size:20px;\">warning</i>Soporte 24h</a>
    </li>
</div>";
    }

    public function getTemplateName()
    {
        return ":barra_accesosdirectos:showv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  36 => 7,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div>*/
/*     <li><a href="{{ path('panel_ids', {}) }}" style="font-size:13px;"><i class="material-icons left" style="font-size:20px;">add_shopping_cart</i>IDS</a></li>*/
/*     <li><a href="{{ path('panel_documento', {}) }}" style="font-size:13px;"><i class="material-icons left" style="font-size:20px;">file_download</i>Documentos</a></li>*/
/*     <li><a href="{{ path('inmueble_index', {}) }}.xls" style="font-size:13px;"><i class="material-icons left" style="font-size:20px;">grid_on</i>Excel</a></li>*/
/*     <li><a href="http://104.236.50.14/PD/web/app.php" style="font-size:13px;"><i class="material-icons left" style="font-size:20px;">home</i>MiniSitio</a></li>*/
/*     <li>*/
/*         <a href="{{ path('panel_solicitud2', {}) }}" style="font-size:13px;"><i class="material-icons right" style="font-size:20px;">warning</i>Solicitudes*/
/*             <div class="chip">*/
/*                 {{ countSolicitudes }}*/
/*             </div>*/
/*         </a>*/
/*     </li>*/
/*     <li class="brown lighten-4" style="font-size:13px;">*/
/*         <a href="#" style="font-size:13px;" onclick="alert('Estimado usuario en caso de presentar dificultades en el sistema favor de contactarse al siguiente correo electrónico: jorge@834.mx');"><i class="material-icons left" style="font-size:20px;">warning</i>Soporte 24h</a>*/
/*     </li>*/
/* </div>*/
