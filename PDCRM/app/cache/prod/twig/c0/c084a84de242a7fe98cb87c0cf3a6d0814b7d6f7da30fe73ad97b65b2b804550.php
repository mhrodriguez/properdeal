<?php

/* :barra_accesosdirectos:show.html.twig */
class __TwigTemplate_9b31327f612ddbc4d8a44e8aec573ca4e9df6070b19c1809de59f1442ecc3347 extends Twig_Template
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
        echo "<nav class=\"transparent header z-depth-0\" role=\"navigation\">
    <div class=\"nav-wrapper\">
        <ul class=\"right hide-on-med-and-down\">
            <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("panel_ids", array());
        echo "\" style=\"font-size:13px;\"><i class=\"material-icons left\" style=\"font-size:20px;\">add_shopping_cart</i>IDS</a></li>
            <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("panel_documento", array());
        echo "\" style=\"font-size:13px;\"><i class=\"material-icons left\" style=\"font-size:20px;\">file_download</i>Documentos</a></li>
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("inmueble_index", array());
        echo ".xls\" style=\"font-size:13px;\"><i class=\"material-icons left\" style=\"font-size:20px;\">grid_on</i>Excel</a></li>
            <!--li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("minisitio_index", array());
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["minisitiokey"]) ? $context["minisitiokey"] : null), "html", null, true);
        echo "\" style=\"font-size:13px;\"><i class=\"material-icons left\" style=\"font-size:20px;\">home</i>MiniSitio</a></li-->
            <li><a href=\"http://104.236.50.14/PD/web/app.php\" style=\"font-size:13px;\"><i class=\"material-icons left\" style=\"font-size:20px;\">home</i>MiniSitio</a></li>
            <li>
                <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("panel_solicitud2", array());
        echo "\" style=\"font-size:13px;\"><i class=\"material-icons right\" style=\"font-size:20px;\">warning</i>Solicitudes
                    <div class=\"chip\">
                        ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["countSolicitudes"]) ? $context["countSolicitudes"] : null), "html", null, true);
        echo "
                    </div>
                </a>
            </li>
            <li class=\"brown lighten-4\" style=\"font-size:13px;\">
                <a href=\"#\" style=\"font-size:13px;\" onclick=\"alert('Estimado usuario en caso de presentar dificultades en el sistema favor de contactarse al siguiente correo electrónico: jorge@834.mx');\"><i class=\"material-icons left\" style=\"font-size:20px;\">warning</i>Soporte 24h</a>
            </li>
        </ul>
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return ":barra_accesosdirectos:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  44 => 10,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <nav class="transparent header z-depth-0" role="navigation">*/
/*     <div class="nav-wrapper">*/
/*         <ul class="right hide-on-med-and-down">*/
/*             <li><a href="{{ path('panel_ids', {}) }}" style="font-size:13px;"><i class="material-icons left" style="font-size:20px;">add_shopping_cart</i>IDS</a></li>*/
/*             <li><a href="{{ path('panel_documento', {}) }}" style="font-size:13px;"><i class="material-icons left" style="font-size:20px;">file_download</i>Documentos</a></li>*/
/*             <li><a href="{{ path('inmueble_index', {}) }}.xls" style="font-size:13px;"><i class="material-icons left" style="font-size:20px;">grid_on</i>Excel</a></li>*/
/*             <!--li><a href="{{ path('minisitio_index', {}) }}/{{ minisitiokey }}" style="font-size:13px;"><i class="material-icons left" style="font-size:20px;">home</i>MiniSitio</a></li-->*/
/*             <li><a href="http://104.236.50.14/PD/web/app.php" style="font-size:13px;"><i class="material-icons left" style="font-size:20px;">home</i>MiniSitio</a></li>*/
/*             <li>*/
/*                 <a href="{{ path('panel_solicitud2', {}) }}" style="font-size:13px;"><i class="material-icons right" style="font-size:20px;">warning</i>Solicitudes*/
/*                     <div class="chip">*/
/*                         {{ countSolicitudes }}*/
/*                     </div>*/
/*                 </a>*/
/*             </li>*/
/*             <li class="brown lighten-4" style="font-size:13px;">*/
/*                 <a href="#" style="font-size:13px;" onclick="alert('Estimado usuario en caso de presentar dificultades en el sistema favor de contactarse al siguiente correo electrónico: jorge@834.mx');"><i class="material-icons left" style="font-size:20px;">warning</i>Soporte 24h</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* </nav>*/
/* */
