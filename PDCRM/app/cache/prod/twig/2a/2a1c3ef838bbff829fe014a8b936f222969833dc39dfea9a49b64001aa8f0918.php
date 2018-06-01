<?php

/* :contactanos:index.html.twig */
class __TwigTemplate_067f9e0232be7428979c6d284f4f57cdf1dc55525f1c1d9f4a47dd08ab260c59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":contactanos:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"container\">
        <br>
        <div class=\"row\">
            <div class=\"col s12 m12 l12\">
                <h5 class=\"grey-text text-darken-3\"><strong>Contacto</strong></h5>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col s6 m6 l6\">
                <p>Mándanos un mensaje y alguien de nuestro equipo se pondrá en contacto contigo. ¡Llámanos! Estamos disponibles de Lunes a Viernes de 9am a 6pm.<br><br>
                    Lázaro Cardenas #329 Edificio 7.<br>
                    Col del Valle,<br>
                    San Pedro Garza Garcia, N.L. México<br>
                    Tel. +52 (81) 8319-0533
                </p>
                <p class=\"blue-text\">e-mail: info@irealty.mx </p>
                <div id=\"map-canvas\" style=\"height:400px;\" class=\"form-control z-depth-1\"></div>
            </div>

            <div class=\"col s6 m6 l6 \">
                <iframe id=\"iframeContacto\" src=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("contactanos_enviar", array());
        echo "\" style=\"width:100%; height:100vh; margin-top:8px; padding-top:-8px\" frameBorder=\"0\">
                </iframe>
            </div>
        </div>


        <div class=\"row\"/>
    </div>

    <script type=\"text/javascript\"
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCmOj1JP2fKLOHkJSKhAdrIVOJlovubgkY\">
    </script>

    ";
        // line 38
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "840e211_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_840e211_0") : $this->env->getExtension('asset')->getAssetUrl("js/840e211_part_1_mapsIntegracion_1.js");
            // line 39
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "840e211"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_840e211") : $this->env->getExtension('asset')->getAssetUrl("js/840e211.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 41
        echo "
    <script type=\"text/javascript\">
        var mapOptions = {
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.TERRAIN
        };

        setMapControl(document.getElementById('map-canvas'), mapOptions);

        mostrarMarcadorEnMapa2(25.653146, -100.377535, \"ProperDeal\");
    </script>

";
    }

    // line 55
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 56
        echo "    <style>
        div.row
        {
            margin-left: 20px;
        }

        div.map-canvas
        {
            margin: 5px;
        }

        p {
            font-size: large;
        }

        body{
            background-color: white;
        }

        h5
        {
            font-weight: bold;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return ":contactanos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 56,  105 => 55,  89 => 41,  75 => 39,  71 => 38,  55 => 25,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="container">*/
/*         <br>*/
/*         <div class="row">*/
/*             <div class="col s12 m12 l12">*/
/*                 <h5 class="grey-text text-darken-3"><strong>Contacto</strong></h5>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col s6 m6 l6">*/
/*                 <p>Mándanos un mensaje y alguien de nuestro equipo se pondrá en contacto contigo. ¡Llámanos! Estamos disponibles de Lunes a Viernes de 9am a 6pm.<br><br>*/
/*                     Lázaro Cardenas #329 Edificio 7.<br>*/
/*                     Col del Valle,<br>*/
/*                     San Pedro Garza Garcia, N.L. México<br>*/
/*                     Tel. +52 (81) 8319-0533*/
/*                 </p>*/
/*                 <p class="blue-text">e-mail: info@irealty.mx </p>*/
/*                 <div id="map-canvas" style="height:400px;" class="form-control z-depth-1"></div>*/
/*             </div>*/
/* */
/*             <div class="col s6 m6 l6 ">*/
/*                 <iframe id="iframeContacto" src="{{ path('contactanos_enviar', {}) }}" style="width:100%; height:100vh; margin-top:8px; padding-top:-8px" frameBorder="0">*/
/*                 </iframe>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <div class="row"/>*/
/*     </div>*/
/* */
/*     <script type="text/javascript"*/
/*             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmOj1JP2fKLOHkJSKhAdrIVOJlovubgkY">*/
/*     </script>*/
/* */
/*     {% javascripts '@FrameworkBundle/Resources/public/js/*'%}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/*     <script type="text/javascript">*/
/*         var mapOptions = {*/
/*             zoom: 14,*/
/*             mapTypeId: google.maps.MapTypeId.TERRAIN*/
/*         };*/
/* */
/*         setMapControl(document.getElementById('map-canvas'), mapOptions);*/
/* */
/*         mostrarMarcadorEnMapa2(25.653146, -100.377535, "ProperDeal");*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <style>*/
/*         div.row*/
/*         {*/
/*             margin-left: 20px;*/
/*         }*/
/* */
/*         div.map-canvas*/
/*         {*/
/*             margin: 5px;*/
/*         }*/
/* */
/*         p {*/
/*             font-size: large;*/
/*         }*/
/* */
/*         body{*/
/*             background-color: white;*/
/*         }*/
/* */
/*         h5*/
/*         {*/
/*             font-weight: bold;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* */
