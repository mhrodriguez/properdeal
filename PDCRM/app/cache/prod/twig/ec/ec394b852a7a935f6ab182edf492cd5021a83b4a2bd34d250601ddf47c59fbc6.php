<?php

/* :mensaje:mail_enviarinmueble.html.twig */
class __TwigTemplate_3b468d767ef1a4dba0575b8ea6725da77243289e2669457b13e947125460fd79 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>

    <style>
        .tablacorners {
            border-radius: 15px 50px 30px;
            border: 1px solid #999999;
            padding: 20px;
        }
    </style>

</head>
<body>

<!-- header -->
<div class=\"withborder\" style=\"width: 95%;\">
    <table style=\"width: 100%;\">
        <tbody>
        <tr>
            <td style=\"width:50%;\">
                ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6d7b20b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d7b20b_0") : $this->env->getExtension('asset')->getAssetUrl("images/6d7b20b_logotipo2_1.jpg");
            // line 25
            echo "                <a href=\"http://www.properdeal.mx\">
                    <img src=\"http://104.236.50.14";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" style=\"width:250px; margin: 10px;\" class=\"header-logo\" alt=\"Logo\"/>
                </a>
                ";
        } else {
            // asset "6d7b20b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d7b20b") : $this->env->getExtension('asset')->getAssetUrl("images/6d7b20b.jpg");
            // line 25
            echo "                <a href=\"http://www.properdeal.mx\">
                    <img src=\"http://104.236.50.14";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" style=\"width:250px; margin: 10px;\" class=\"header-logo\" alt=\"Logo\"/>
                </a>
                ";
        }
        unset($context["asset_url"]);
        // line 29
        echo "            </td>
            <td style=\"width:50%;text-align: right;padding-right:2em;\">
                <div>
                    <label class=\"titulo\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "nombre", array()), "html", null, true);
        echo "</label>
                    <p class=\"texto1\"><b>Móvil: </b>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "celular", array()), "html", null, true);
        echo "<br>
                        <b>E-mail: </b><a href=\"mailto:";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "email", array()), "html", null, true);
        echo "?Subject=Contacto\" target=\"_top\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "email", array()), "html", null, true);
        echo "</a>
                    </p>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<table>
    <tbody>
        <!-- Mensaje -->
        <tr>
            <td colspan=\"2\">
            </td>
        </tr>
        <tr>
            <td colspan=\"2\">
                <p>";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : null), "html", null, true);
        echo "</p>
            </td>
        </tr>
        <tr>
            <td colspan=\"2\">
            </td>
        </tr>

        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inmuebles"]) ? $context["inmuebles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
            // line 61
            echo "        <tr>
            <td style=\"width:60%; vertical-align: top;\">

                <a href=\"http://www.properdeal.com.mx/PD/web/app.php/buscarinmueble/showfs/";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
            echo "?ida=";
            echo twig_escape_filter($this->env, (isset($context["ida"]) ? $context["ida"] : null), "html", null, true);
            echo "\">
                    <p class=\"titulo\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "nombreid", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMunicipio", array()), "nombre", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idEstado", array()), "nombre", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "cp", array()), "html", null, true);
            echo " </p>
                </a>
                ";
            // line 67
            if ( !(null === $this->getAttribute($context["inmueble"], "nombreedificio", array()))) {
                // line 68
                echo "                <p class=\"titulo\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "nombreedificio", array()), "html", null, true);
                echo "</p>
                ";
            }
            // line 70
            echo "
                ";
            // line 71
            if (($this->getAttribute($this->getAttribute($context["inmueble"], "idOperacionInmueble", array()), "idOperacionInmueble", array()) == 2)) {
                // line 72
                echo "                    <p class=\"titulo\">
                        ";
                // line 73
                if (($this->getAttribute($context["inmueble"], "precio", array()) > 0)) {
                    // line 74
                    echo "                            ";
                    if (($this->getAttribute($context["inmueble"], "preciohasta", array()) > 0)) {
                        echo "Desde:";
                    }
                    // line 75
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMoneda", array()), "simbolo", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "precio", array()), 2, ".", ","), "html", null, true);
                    echo "
                        ";
                }
                // line 77
                echo "                        ";
                if (($this->getAttribute($context["inmueble"], "preciohasta", array()) > 0)) {
                    // line 78
                    echo "                            &nbsp;&nbsp;Hasta: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMoneda", array()), "simbolo", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "preciohasta", array()), 2, ".", ","), "html", null, true);
                    echo "
                        ";
                }
                // line 80
                echo "                    </p>
                ";
            } else {
                // line 82
                echo "                    <p class=\"titulo\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMoneda", array()), "simbolo", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "precio", array()), 2, ".", ","), "html", null, true);
                echo " </p>
                ";
            }
            // line 84
            echo "
                <label class=\"texto1\"><b>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idTipoInmueble", array()), "nombre", array()), "html", null, true);
            echo " en ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
            echo "</b></label><br>
                <label class=\"texto1\">ID: ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "legacyid", array()), "html", null, true);
            echo "</label><br><br>

                <label class=\"texto1\"><b>Informacion de la Propiedad:</b></label>

                <table style=\"width:100%\">
                    <tr>
                        <td style=\"width:50%\">
                            <ul>
                                ";
            // line 94
            if ( !(null === $this->getAttribute($context["inmueble"], "recamaras", array()))) {
                // line 95
                echo "                                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "recamaras", array()), "html", null, true);
                echo " | Recámara(s)</li>
                                ";
            }
            // line 97
            echo "
                                ";
            // line 98
            if (($this->getAttribute($context["inmueble"], "plantas", array()) > 0)) {
                // line 99
                echo "                                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "plantas", array()), "html", null, true);
                echo " | Plantas</li>
                                ";
            }
            // line 101
            echo "
                                ";
            // line 102
            if ( !(null === $this->getAttribute($context["inmueble"], "banos", array()))) {
                // line 103
                echo "                                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "banos", array()), "html", null, true);
                echo " | Baño(s)</li>
                                ";
            }
            // line 105
            echo "
                                ";
            // line 106
            if ( !(null === $this->getAttribute($context["inmueble"], "mediobanos", array()))) {
                // line 107
                echo "                                    ";
                if (($this->getAttribute($context["inmueble"], "mediobanos", array()) > 0)) {
                    // line 108
                    echo "                                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "mediobanos", array()), "html", null, true);
                    echo " | Medios Baño(s)</li>
                                    ";
                }
                // line 110
                echo "                                ";
            }
            // line 111
            echo "
                                ";
            // line 112
            if ( !(null === $this->getAttribute($context["inmueble"], "espacioautos", array()))) {
                // line 113
                echo "                                    ";
                if (($this->getAttribute($context["inmueble"], "espacioautos", array()) > 0)) {
                    // line 114
                    echo "                                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "espacioautos", array()), "html", null, true);
                    echo " | Estacionamiento(s)</li>
                                    ";
                }
                // line 116
                echo "                                ";
            }
            // line 117
            echo "
                                ";
            // line 118
            if ( !(null === $this->getAttribute($context["inmueble"], "antiguedad", array()))) {
                // line 119
                echo "                                    <li>Antiguedad: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "antiguedad", array()), "html", null, true);
                echo "</li>
                                ";
            }
            // line 121
            echo "                            </ul>
                        </td>
                        <td style=\"width:50%\">
                            <label></label>
                            <ul>

                                ";
            // line 127
            if ( !(null === $this->getAttribute($context["inmueble"], "metrosconstruccion", array()))) {
                // line 128
                echo "                                    ";
                if (($this->getAttribute($context["inmueble"], "metrosconstruccion", array()) > 0)) {
                    // line 129
                    echo "                                    <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosconstruccion", array()), "html", null, true);
                    echo " | M2 de Construcción</li>
                                    ";
                }
                // line 131
                echo "                                ";
            }
            // line 132
            echo "

                                ";
            // line 134
            if ( !(null === $this->getAttribute($context["inmueble"], "metrosterreno", array()))) {
                // line 135
                echo "                                    ";
                if (($this->getAttribute($context["inmueble"], "metrosterreno", array()) > 0)) {
                    // line 136
                    echo "                                    <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosterreno", array()), "html", null, true);
                    echo " | M2 de Terreno</li>
                                    ";
                }
                // line 138
                echo "                                ";
            }
            // line 139
            echo "
                                ";
            // line 140
            if ( !(null === $this->getAttribute($context["inmueble"], "metrosfrente", array()))) {
                // line 141
                echo "                                    ";
                if (($this->getAttribute($context["inmueble"], "metrosfrente", array()) > 0)) {
                    // line 142
                    echo "                                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosfrente", array()), "html", null, true);
                    echo " | M de frente</li>
                                    ";
                }
                // line 144
                echo "                                ";
            }
            // line 145
            echo "
                                ";
            // line 146
            if ( !(null === $this->getAttribute($context["inmueble"], "metrosfondo", array()))) {
                // line 147
                echo "                                    ";
                if (($this->getAttribute($context["inmueble"], "metrosfondo", array()) > 0)) {
                    // line 148
                    echo "                                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosfondo", array()), "html", null, true);
                    echo " | M de fondo</li>
                                    ";
                }
                // line 150
                echo "                                ";
            }
            // line 151
            echo "                            </ul>
                        </td>
                    </tr>
                </table>

                <br>
                <label class=\"texto1\"><b>Descripción:</b></label>
                <p class=\"texto1\">";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "descripcion", array()), "html", null, true);
            echo "</p>

                <label class=\"texto1\"><b>Características:</b></label>
                <ul>
                    ";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["inmueble"], "caracteristicas", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["caracteristica"]) {
                // line 163
                echo "                        <li class=\"texto1\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["caracteristica"], "nombre", array()), "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caracteristica'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                </ul>
                <br>
                <div class=\"withborder\">
                    <br>
                    <label><b>";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "nombre", array()), "html", null, true);
            echo "</b></label><br>
                    <label>Teléfono: ";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "telefono", array()), "html", null, true);
            echo "</label><br>
                    <label>Móvil: ";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "celular", array()), "html", null, true);
            echo "</label><br>
                    <label><b>";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "email", array()), "html", null, true);
            echo "</b></label><br><br>
                </div>

            </td>

            <td style=\"width:40%\">
                ";
            // line 178
            $context["index"] = 1;
            // line 179
            echo "                <table>

                    ";
            // line 181
            if ((twig_length_filter($this->env, $this->getAttribute($context["inmueble"], "imagenes", array())) > 0)) {
                // line 182
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["inmueble"], "imagenes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
                    // line 183
                    echo "
                            ";
                    // line 184
                    if (((isset($context["index"]) ? $context["index"] : null) == 1)) {
                        // line 185
                        echo "                                <tr>
                            ";
                    }
                    // line 187
                    echo "
                            <td style=\"width:50%;\">
                            <img src=\"http://104.236.50.14";
                    // line 189
                    echo twig_escape_filter($this->env, $this->getAttribute($context["imagen"], "getWebPath", array(), "method"), "html", null, true);
                    echo "\" class=\"responsive-img\" style=\"margin: 10px; width:125px; height: 80px\"/>
                            </td>

                            ";
                    // line 192
                    if (((isset($context["index"]) ? $context["index"] : null) == 2)) {
                        // line 193
                        echo "                                </tr>
                            ";
                    }
                    // line 195
                    echo "
                            ";
                    // line 196
                    if (((isset($context["index"]) ? $context["index"] : null) == 1)) {
                        // line 197
                        echo "                                ";
                        $context["index"] = 2;
                        // line 198
                        echo "                            ";
                    } else {
                        // line 199
                        echo "                                ";
                        $context["index"] = 1;
                        // line 200
                        echo "                            ";
                    }
                    // line 201
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 203
                echo "
                    ";
            }
            // line 205
            echo "                </table>
            </td>
        </tr>

        <tr><td colspan=\"2\"></td></tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "
        <!-- Footer -->
        <tr>
            <td colspan=\"2\">
                ";
        // line 216
        if (array_key_exists("prospectos", $context)) {
            // line 217
            echo "                <label class=\"texto1\"><b>Enviado a:</b></label>
                <ul>
                    ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prospectos"]) ? $context["prospectos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["prospecto"]) {
                // line 220
                echo "                        <li class=\"texto1\">
                            ";
                // line 221
                if ( !(null === $this->getAttribute($context["prospecto"], "nombre", array()))) {
                    // line 222
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prospecto"], "nombre", array()), "html", null, true);
                    echo " -
                            ";
                }
                // line 224
                echo "                            email: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["prospecto"], "email", array()), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prospecto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "                </ul>
                ";
        }
        // line 229
        echo "            </td>
        </tr>

    </tbody>
</table>


<style>
    #imgInmueble {
        display: block;
        max-width:512px;
        max-height:480px;
        width: auto;
        height: auto;
    }
    ul {
        margin:0;
        padding:0;
        list-style-type: none;
    }
    .withborder
    {
        border-style: outset;
        padding-left: 2em;
    }
    .titulo
    {
        font-style: normal;
        font-size: 28px;
    }
    p.titulo
    {
        line-height: 95%;
    }
    .texto1
    {
        font-style: normal;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 13px;
    }
    li
    {
        font-style: normal;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
    }
</style>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return ":mensaje:mail_enviarinmueble.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 229,  536 => 227,  526 => 224,  520 => 222,  518 => 221,  515 => 220,  511 => 219,  507 => 217,  505 => 216,  499 => 212,  487 => 205,  483 => 203,  476 => 201,  473 => 200,  470 => 199,  467 => 198,  464 => 197,  462 => 196,  459 => 195,  455 => 193,  453 => 192,  447 => 189,  443 => 187,  439 => 185,  437 => 184,  434 => 183,  429 => 182,  427 => 181,  423 => 179,  421 => 178,  412 => 172,  408 => 171,  404 => 170,  400 => 169,  394 => 165,  385 => 163,  381 => 162,  374 => 158,  365 => 151,  362 => 150,  356 => 148,  353 => 147,  351 => 146,  348 => 145,  345 => 144,  339 => 142,  336 => 141,  334 => 140,  331 => 139,  328 => 138,  322 => 136,  319 => 135,  317 => 134,  313 => 132,  310 => 131,  304 => 129,  301 => 128,  299 => 127,  291 => 121,  285 => 119,  283 => 118,  280 => 117,  277 => 116,  271 => 114,  268 => 113,  266 => 112,  263 => 111,  260 => 110,  254 => 108,  251 => 107,  249 => 106,  246 => 105,  240 => 103,  238 => 102,  235 => 101,  229 => 99,  227 => 98,  224 => 97,  218 => 95,  216 => 94,  205 => 86,  199 => 85,  196 => 84,  188 => 82,  184 => 80,  176 => 78,  173 => 77,  165 => 75,  160 => 74,  158 => 73,  155 => 72,  153 => 71,  150 => 70,  144 => 68,  142 => 67,  131 => 65,  125 => 64,  120 => 61,  116 => 60,  105 => 52,  82 => 34,  78 => 33,  74 => 32,  69 => 29,  62 => 26,  59 => 25,  51 => 26,  48 => 25,  44 => 24,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>Title</title>*/
/* */
/*     <style>*/
/*         .tablacorners {*/
/*             border-radius: 15px 50px 30px;*/
/*             border: 1px solid #999999;*/
/*             padding: 20px;*/
/*         }*/
/*     </style>*/
/* */
/* </head>*/
/* <body>*/
/* */
/* <!-- header -->*/
/* <div class="withborder" style="width: 95%;">*/
/*     <table style="width: 100%;">*/
/*         <tbody>*/
/*         <tr>*/
/*             <td style="width:50%;">*/
/*                 {% image '@FrameworkBundle/Resources/public/images/logotipo2.jpg' %}*/
/*                 <a href="http://www.properdeal.mx">*/
/*                     <img src="http://104.236.50.14{{ asset_url }}" style="width:250px; margin: 10px;" class="header-logo" alt="Logo"/>*/
/*                 </a>*/
/*                 {% endimage %}*/
/*             </td>*/
/*             <td style="width:50%;text-align: right;padding-right:2em;">*/
/*                 <div>*/
/*                     <label class="titulo">{{ asesor.nombre }}</label>*/
/*                     <p class="texto1"><b>Móvil: </b>{{ asesor.celular }}<br>*/
/*                         <b>E-mail: </b><a href="mailto:{{ asesor.email }}?Subject=Contacto" target="_top">{{ asesor.email }}</a>*/
/*                     </p>*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* */
/* <table>*/
/*     <tbody>*/
/*         <!-- Mensaje -->*/
/*         <tr>*/
/*             <td colspan="2">*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td colspan="2">*/
/*                 <p>{{ mensaje }}</p>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td colspan="2">*/
/*             </td>*/
/*         </tr>*/
/* */
/*         {% for inmueble in inmuebles %}*/
/*         <tr>*/
/*             <td style="width:60%; vertical-align: top;">*/
/* */
/*                 <a href="http://www.properdeal.com.mx/PD/web/app.php/buscarinmueble/showfs/{{ inmueble.idInmueble }}?ida={{ ida }}">*/
/*                     <p class="titulo">{{ inmueble.nombreid }}, {{ inmueble.idMunicipio.nombre }}, {{ inmueble.idEstado.nombre }}, {{ inmueble.cp }} </p>*/
/*                 </a>*/
/*                 {% if inmueble.nombreedificio is not null  %}*/
/*                 <p class="titulo">{{ inmueble.nombreedificio }}</p>*/
/*                 {% endif %}*/
/* */
/*                 {% if inmueble.idOperacionInmueble.idOperacionInmueble == 2 %}*/
/*                     <p class="titulo">*/
/*                         {% if inmueble.precio > 0 %}*/
/*                             {% if inmueble.preciohasta > 0 %}Desde:{% endif %}*/
/*                             {{ inmueble.idMoneda.simbolo }} {{ inmueble.precio|number_format(2, '.', ',') }}*/
/*                         {% endif %}*/
/*                         {% if inmueble.preciohasta > 0 %}*/
/*                             &nbsp;&nbsp;Hasta: {{ inmueble.idMoneda.simbolo }} {{ inmueble.preciohasta|number_format(2, '.', ',') }}*/
/*                         {% endif %}*/
/*                     </p>*/
/*                 {% else %}*/
/*                     <p class="titulo">{{ inmueble.idMoneda.simbolo }} {{ inmueble.precio|number_format(2, '.', ',') }} </p>*/
/*                 {% endif %}*/
/* */
/*                 <label class="texto1"><b>{{ inmueble.idTipoInmueble.nombre }} en {{ inmueble.idOperacionInmueble.nombre }}</b></label><br>*/
/*                 <label class="texto1">ID: {{ inmueble.legacyid }}</label><br><br>*/
/* */
/*                 <label class="texto1"><b>Informacion de la Propiedad:</b></label>*/
/* */
/*                 <table style="width:100%">*/
/*                     <tr>*/
/*                         <td style="width:50%">*/
/*                             <ul>*/
/*                                 {% if inmueble.recamaras is not null %}*/
/*                                     <li>{{ inmueble.recamaras }} | Recámara(s)</li>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if inmueble.plantas > 0 %}*/
/*                                     <li>{{ inmueble.plantas }} | Plantas</li>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if inmueble.banos is not null %}*/
/*                                     <li>{{ inmueble.banos }} | Baño(s)</li>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if inmueble.mediobanos is not null %}*/
/*                                     {% if inmueble.mediobanos > 0 %}*/
/*                                         <li>{{ inmueble.mediobanos }} | Medios Baño(s)</li>*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/* */
/*                                 {% if inmueble.espacioautos is not null %}*/
/*                                     {% if inmueble.espacioautos > 0 %}*/
/*                                         <li>{{ inmueble.espacioautos }} | Estacionamiento(s)</li>*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/* */
/*                                 {% if inmueble.antiguedad is not null %}*/
/*                                     <li>Antiguedad: {{ inmueble.antiguedad }}</li>*/
/*                                 {% endif %}*/
/*                             </ul>*/
/*                         </td>*/
/*                         <td style="width:50%">*/
/*                             <label></label>*/
/*                             <ul>*/
/* */
/*                                 {% if inmueble.metrosconstruccion is not null %}*/
/*                                     {% if inmueble.metrosconstruccion > 0 %}*/
/*                                     <li>{{ inmueble.metrosconstruccion }} | M2 de Construcción</li>*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/* */
/* */
/*                                 {% if inmueble.metrosterreno is not null %}*/
/*                                     {% if inmueble.metrosterreno > 0 %}*/
/*                                     <li>{{ inmueble.metrosterreno }} | M2 de Terreno</li>*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/* */
/*                                 {% if inmueble.metrosfrente is not null %}*/
/*                                     {% if inmueble.metrosfrente > 0 %}*/
/*                                         <li>{{ inmueble.metrosfrente }} | M de frente</li>*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/* */
/*                                 {% if inmueble.metrosfondo is not null %}*/
/*                                     {% if inmueble.metrosfondo > 0 %}*/
/*                                         <li>{{ inmueble.metrosfondo }} | M de fondo</li>*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/*                             </ul>*/
/*                         </td>*/
/*                     </tr>*/
/*                 </table>*/
/* */
/*                 <br>*/
/*                 <label class="texto1"><b>Descripción:</b></label>*/
/*                 <p class="texto1">{{ inmueble.descripcion }}</p>*/
/* */
/*                 <label class="texto1"><b>Características:</b></label>*/
/*                 <ul>*/
/*                     {%  for caracteristica in inmueble.caracteristicas %}*/
/*                         <li class="texto1">{{ caracteristica.nombre }}</li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*                 <br>*/
/*                 <div class="withborder">*/
/*                     <br>*/
/*                     <label><b>{{ asesor.nombre }}</b></label><br>*/
/*                     <label>Teléfono: {{ asesor.telefono }}</label><br>*/
/*                     <label>Móvil: {{ asesor.celular }}</label><br>*/
/*                     <label><b>{{ asesor.email }}</b></label><br><br>*/
/*                 </div>*/
/* */
/*             </td>*/
/* */
/*             <td style="width:40%">*/
/*                 {% set index=1 %}*/
/*                 <table>*/
/* */
/*                     {% if (inmueble.imagenes|length>0) %}*/
/*                         {% for imagen in inmueble.imagenes %}*/
/* */
/*                             {% if index == 1 %}*/
/*                                 <tr>*/
/*                             {% endif  %}*/
/* */
/*                             <td style="width:50%;">*/
/*                             <img src="http://104.236.50.14{{ imagen.getWebPath() }}" class="responsive-img" style="margin: 10px; width:125px; height: 80px"/>*/
/*                             </td>*/
/* */
/*                             {% if index == 2 %}*/
/*                                 </tr>*/
/*                             {% endif  %}*/
/* */
/*                             {% if index == 1 %}*/
/*                                 {% set index=2 %}*/
/*                             {% else %}*/
/*                                 {% set index=1 %}*/
/*                             {% endif  %}*/
/* */
/*                         {% endfor %}*/
/* */
/*                     {% endif %}*/
/*                 </table>*/
/*             </td>*/
/*         </tr>*/
/* */
/*         <tr><td colspan="2"></td></tr>*/
/* */
/*         {% endfor %}*/
/* */
/*         <!-- Footer -->*/
/*         <tr>*/
/*             <td colspan="2">*/
/*                 {% if (prospectos is defined) %}*/
/*                 <label class="texto1"><b>Enviado a:</b></label>*/
/*                 <ul>*/
/*                     {%  for prospecto in prospectos %}*/
/*                         <li class="texto1">*/
/*                             {% if prospecto.nombre is not null %}*/
/*                                 {{ prospecto.nombre }} -*/
/*                             {% endif %}*/
/*                             email: {{ prospecto.email }}*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*                 {% endif %}*/
/*             </td>*/
/*         </tr>*/
/* */
/*     </tbody>*/
/* </table>*/
/* */
/* */
/* <style>*/
/*     #imgInmueble {*/
/*         display: block;*/
/*         max-width:512px;*/
/*         max-height:480px;*/
/*         width: auto;*/
/*         height: auto;*/
/*     }*/
/*     ul {*/
/*         margin:0;*/
/*         padding:0;*/
/*         list-style-type: none;*/
/*     }*/
/*     .withborder*/
/*     {*/
/*         border-style: outset;*/
/*         padding-left: 2em;*/
/*     }*/
/*     .titulo*/
/*     {*/
/*         font-style: normal;*/
/*         font-size: 28px;*/
/*     }*/
/*     p.titulo*/
/*     {*/
/*         line-height: 95%;*/
/*     }*/
/*     .texto1*/
/*     {*/
/*         font-style: normal;*/
/*         font-family: Arial, Helvetica, sans-serif;*/
/*         font-size: 13px;*/
/*     }*/
/*     li*/
/*     {*/
/*         font-style: normal;*/
/*         font-family: Arial, Helvetica, sans-serif;*/
/*         font-size: 12px;*/
/*     }*/
/* </style>*/
/* */
/* </body>*/
/* </html>*/
