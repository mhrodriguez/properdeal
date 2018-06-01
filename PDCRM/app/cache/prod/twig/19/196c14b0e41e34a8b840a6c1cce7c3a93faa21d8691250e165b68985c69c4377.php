<?php

/* :minisitio:index.html.twig */
class __TwigTemplate_babae2f476712fa182f7022cac535dbc96a6f28be32e376e9a12b9b40bc9747f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("minisitio/baseminisitio.html.twig", ":minisitio:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "minisitio/baseminisitio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 7
            echo "                <div class=\"flash-notice\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
            <div class=\"row\">
                <div id=\"divPresentacion\" class=\"parallax-container z-depth-1\">
                    <div class=\"section no-pad-bot\">
                        <div class=\"container\" style=\"text-align: center\">

                            <div>
                                <h3>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "empresa", array()), "html", null, true);
        echo "</h3>
                            </div>
                            <div>
                                ";
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e42c239_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e42c239_0") : $this->env->getExtension('asset')->getAssetUrl("images/e42c239_ic_logogenerico_1.jpg");
            // line 22
            echo "                                <img id=\"imgLogo\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"\" class=\"circle responsive-img\" style=\"width:120px;height:120px\">
                                ";
        } else {
            // asset "e42c239"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e42c239") : $this->env->getExtension('asset')->getAssetUrl("images/e42c239.jpg");
            echo "                                <img id=\"imgLogo\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"\" class=\"circle responsive-img\" style=\"width:120px;height:120px\">
                                ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "                            </div>
                            <div>
                                <h4>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "nombre", array()), "html", null, true);
        echo " </h4>
                            </div>
                        </div>
                    </div>

                    <div class=\"parallax\"><img src=\"";
        // line 31
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fb7ba89_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fb7ba89_0") : $this->env->getExtension('asset')->getAssetUrl("images/fb7ba89_img_minisitio_1.jpg");
            // line 32
            echo "                        ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                    ";
        } else {
            // asset "fb7ba89"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fb7ba89") : $this->env->getExtension('asset')->getAssetUrl("images/fb7ba89.jpg");
            echo "                        ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                    ";
        }
        unset($context["asset_url"]);
        // line 33
        echo "\" alt=\"Unsplashed background img 1\"></div>
                </div>
            </div>

            <div class=\"row fb\" style=\"margin-top: -20px\">
                <table>
                    <tr>
                        <td>
                            <i class=\"material-icons left\">phone</i>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "telefono", array()), "html", null, true);
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class=\"material-icons left\">email</i>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "email", array()), "html", null, true);
        echo "
                        </td>
                    </tr>
                </table>
            </div>

            <div class=\"row fb\" style=\"margin-top: -20px\">
                <div class=\"col s12 m12 l12\">
                    <iframe style=\"width:100%; height:105vh;\" frameBorder=\"0\" src=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("buscarinmueble_buscarpanelnh", array());
        echo "?buscar_inmueble%5Bid_tipo_inmueble%5D=0&buscar_inmueble%5Bid_operacion_inmueble%5D=-1&buscar_inmueble%5Bid_estado%5D=-1&buscar_inmueble%5Bid_municipio%5D=-1&buscar_inmueble%5Bid_colonia%5D=-1&buscar_inmueble%5Bprecio%5D=&buscar_inmueble%5Bpreciomax%5D=&buscar_inmueble%5Bmetrosterreno%5D=&buscar_inmueble%5Bmetrosterrenomax%5D=&buscar_inmueble%5Brecamaras%5D=&buscar_inmueble%5Bplantas%5D=&\"></iframe>
                </div>
            </div>

        </div>
    </div>
    <script>
        ";
        // line 61
        if (((isset($context["webPathLogo"]) ? $context["webPathLogo"] : null) != false)) {
            // line 62
            echo "        document.getElementById('imgLogo').src = '";
            echo twig_escape_filter($this->env, (isset($context["webPathLogo"]) ? $context["webPathLogo"] : null), "html", null, true);
            echo "';
        ";
        }
        // line 64
        echo "    </script>
";
    }

    // line 67
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 68
        echo "    <style>
        h3 {
            text-align: center;
            text-shadow: 2px 2px #444444;
        }
        h4 {
            text-align: center;
            text-shadow: 2px 2px #444444;
        }
        h5 {
            text-align: center;
        }
        #imgLogo {
            background-color: #ffffff;
        }
        .fb{
            background-color: #ffffff;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return ":minisitio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 68,  167 => 67,  162 => 64,  156 => 62,  154 => 61,  144 => 54,  133 => 46,  125 => 41,  115 => 33,  101 => 32,  97 => 31,  89 => 26,  85 => 24,  71 => 22,  67 => 21,  61 => 18,  52 => 11,  43 => 8,  40 => 7,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'minisitio/baseminisitio.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             {% for flash_message in app.session.flashbag.get('notice') %}*/
/*                 <div class="flash-notice">*/
/*                     {{ flash_message }}*/
/*                 </div>*/
/*             {% endfor %}*/
/* */
/*             <div class="row">*/
/*                 <div id="divPresentacion" class="parallax-container z-depth-1">*/
/*                     <div class="section no-pad-bot">*/
/*                         <div class="container" style="text-align: center">*/
/* */
/*                             <div>*/
/*                                 <h3>{{ asesor.empresa }}</h3>*/
/*                             </div>*/
/*                             <div>*/
/*                                 {% image '@FrameworkBundle/Resources/public/images/ic_logogenerico.jpg' %}*/
/*                                 <img id="imgLogo" src="{{ asset_url }}" alt="" class="circle responsive-img" style="width:120px;height:120px">*/
/*                                 {% endimage %}*/
/*                             </div>*/
/*                             <div>*/
/*                                 <h4>{{ asesor.nombre }} </h4>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="parallax"><img src="{% image '@FrameworkBundle/Resources/public/images/img_minisitio.jpg' %}*/
/*                         {{ asset_url }}*/
/*                     {% endimage %}" alt="Unsplashed background img 1"></div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row fb" style="margin-top: -20px">*/
/*                 <table>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <i class="material-icons left">phone</i>{{ asesor.telefono }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <i class="material-icons left">email</i>{{ asesor.email }}*/
/*                         </td>*/
/*                     </tr>*/
/*                 </table>*/
/*             </div>*/
/* */
/*             <div class="row fb" style="margin-top: -20px">*/
/*                 <div class="col s12 m12 l12">*/
/*                     <iframe style="width:100%; height:105vh;" frameBorder="0" src="{{ path('buscarinmueble_buscarpanelnh', {}) }}?buscar_inmueble%5Bid_tipo_inmueble%5D=0&buscar_inmueble%5Bid_operacion_inmueble%5D=-1&buscar_inmueble%5Bid_estado%5D=-1&buscar_inmueble%5Bid_municipio%5D=-1&buscar_inmueble%5Bid_colonia%5D=-1&buscar_inmueble%5Bprecio%5D=&buscar_inmueble%5Bpreciomax%5D=&buscar_inmueble%5Bmetrosterreno%5D=&buscar_inmueble%5Bmetrosterrenomax%5D=&buscar_inmueble%5Brecamaras%5D=&buscar_inmueble%5Bplantas%5D=&"></iframe>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/*     <script>*/
/*         {% if webPathLogo != false %}*/
/*         document.getElementById('imgLogo').src = '{{ webPathLogo }}';*/
/*         {% endif %}*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <style>*/
/*         h3 {*/
/*             text-align: center;*/
/*             text-shadow: 2px 2px #444444;*/
/*         }*/
/*         h4 {*/
/*             text-align: center;*/
/*             text-shadow: 2px 2px #444444;*/
/*         }*/
/*         h5 {*/
/*             text-align: center;*/
/*         }*/
/*         #imgLogo {*/
/*             background-color: #ffffff;*/
/*         }*/
/*         .fb{*/
/*             background-color: #ffffff;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* */
