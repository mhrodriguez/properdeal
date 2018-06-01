<?php

/* :mensaje:mail_enviarinmueble_multiple.html.twig */
class __TwigTemplate_954ac72015cb0e3890081fb5223cf433395a70626a0895a01536878f3c24d0ee extends Twig_Template
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

<table style=\"width: 100%;\">
    <tbody>
    <tr>
        <td colspan=\"2\">
        </td>
    </tr>
    <!-- Mensaje -->
    <tr style=\"width: 100%;\">
        <td colspan=\"2\" style=\"border-bottom:2pt solid black;width:100%;\">
            <p class=\"titulo\">Listado de Propiedades</p>
        </td>
    </tr>
    <tr>
        <td colspan=\"2\" style=\"background-color:gainsboro; border: 1pt solid lightgrey;width:100%;\">
            <b>Comentario</b><br>
            <p>";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : null), "html", null, true);
        echo "</p>
        </td>
    </tr>
    <tr>
        <td colspan=\"2\">
        </td>
    </tr>

    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inmuebles"]) ? $context["inmuebles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
            // line 67
            echo "    <tr style=\"width: 100%;\">
    <td style=\"width: 100%;\">
        <table class=\"tableborder\" style=\"width: 100%;\">
        <tbody>
        <tr style=\"background-color:#EEEEEE; border-top: 1pt solid #EEEEEE; width: 100%;\">
            <td style=\"width:70%; border-color: #EEEEEE;\">
                <a href=\"http://www.properdeal.com.mx/PD/web/app.php/buscarinmueble/showfs/";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
            echo "?ida=";
            echo twig_escape_filter($this->env, (isset($context["ida"]) ? $context["ida"] : null), "html", null, true);
            echo "\" style=\"text-decoration: none;\">
                    <p class=\"titulo\">ID:";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "legacyid", array()), "html", null, true);
            echo ", ";
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
            // line 76
            if ( !(null === $this->getAttribute($context["inmueble"], "nombreedificio", array()))) {
                // line 77
                echo "                    <p class=\"titulo\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "nombreedificio", array()), "html", null, true);
                echo "</p>
                ";
            }
            // line 79
            echo "            </td>
            <td style=\"width:30%; text-align: right;\">
                ";
            // line 81
            if (($this->getAttribute($this->getAttribute($context["inmueble"], "idOperacionInmueble", array()), "idOperacionInmueble", array()) == 2)) {
                // line 82
                echo "                    <p class=\"titulo\">
                        ";
                // line 83
                if (($this->getAttribute($context["inmueble"], "precio", array()) > 0)) {
                    // line 84
                    echo "                            ";
                    if (($this->getAttribute($context["inmueble"], "preciohasta", array()) > 0)) {
                        echo "Desde:";
                    }
                    // line 85
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMoneda", array()), "simbolo", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "precio", array()), 2, ".", ","), "html", null, true);
                    echo "
                        ";
                }
                // line 87
                echo "                        ";
                if (($this->getAttribute($context["inmueble"], "preciohasta", array()) > 0)) {
                    // line 88
                    echo "                            &nbsp;&nbsp;Hasta: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMoneda", array()), "simbolo", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "preciohasta", array()), 2, ".", ","), "html", null, true);
                    echo "
                        ";
                }
                // line 90
                echo "                    </p>
                ";
            } else {
                // line 92
                echo "                    <p class=\"titulo\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMoneda", array()), "simbolo", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "precio", array()), 2, ".", ","), "html", null, true);
                echo " </p>
                ";
            }
            // line 94
            echo "            </td>
        </tr>
        </tbody>
    </table>
        <table class=\"tableborder\">
        <tbody>
        <tr>
            <td colspan=\"2\" style=\"width:40%; vertical-align: top;\">
            ";
            // line 102
            if ((twig_length_filter($this->env, $this->getAttribute($context["inmueble"], "imagenes", array())) > 0)) {
                // line 103
                echo "                <img src=\"http://104.236.50.14";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["inmueble"], "imagenes", array()), 0, array(), "array"), "getWebPath", array(), "method"), "html", null, true);
                echo "\" class=\"responsive-img\" style=\"width:98%;\"/>
            ";
            }
            // line 105
            echo "            </td>

            <td style=\"width:60%\">
                <label class=\"texto1\" style=\"font-size: 16px;\"><b>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idTipoInmueble", array()), "nombre", array()), "html", null, true);
            echo " en ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMunicipio", array()), "nombre", array()), "html", null, true);
            echo "</b></label><br>

                <br>
                <p class=\"texto1\">";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "descripcion", array()), "html", null, true);
            echo "</p>

                <table style=\"width:100%\">
                    <tr>
                        <td style=\"width:50%\">
                            <ul>
                                ";
            // line 117
            if ( !(null === $this->getAttribute($context["inmueble"], "recamaras", array()))) {
                // line 118
                echo "                                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "recamaras", array()), "html", null, true);
                echo " | Recámara(s)</li>
                                ";
            }
            // line 120
            echo "
                                ";
            // line 121
            if (($this->getAttribute($context["inmueble"], "plantas", array()) > 0)) {
                // line 122
                echo "                                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "plantas", array()), "html", null, true);
                echo " | Plantas</li>
                                ";
            }
            // line 124
            echo "
                                ";
            // line 125
            if ( !(null === $this->getAttribute($context["inmueble"], "banos", array()))) {
                // line 126
                echo "                                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "banos", array()), "html", null, true);
                echo " | Baño(s)</li>
                                ";
            }
            // line 128
            echo "
                                ";
            // line 129
            if ( !(null === $this->getAttribute($context["inmueble"], "mediobanos", array()))) {
                // line 130
                echo "                                    ";
                if (($this->getAttribute($context["inmueble"], "mediobanos", array()) > 0)) {
                    // line 131
                    echo "                                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "mediobanos", array()), "html", null, true);
                    echo " | Medios Baño(s)</li>
                                    ";
                }
                // line 133
                echo "                                ";
            }
            // line 134
            echo "
                                ";
            // line 135
            if ( !(null === $this->getAttribute($context["inmueble"], "espacioautos", array()))) {
                // line 136
                echo "                                    ";
                if (($this->getAttribute($context["inmueble"], "espacioautos", array()) > 0)) {
                    // line 137
                    echo "                                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "espacioautos", array()), "html", null, true);
                    echo " | Estacionamiento(s)</li>
                                    ";
                }
                // line 139
                echo "                                ";
            }
            // line 140
            echo "
                                ";
            // line 141
            if ( !(null === $this->getAttribute($context["inmueble"], "antiguedad", array()))) {
                // line 142
                echo "                                    <li>Antiguedad: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "antiguedad", array()), "html", null, true);
                echo "</li>
                                ";
            }
            // line 144
            echo "                            </ul>
                        </td>
                        <td style=\"width:50%\">
                            <label></label>
                            <ul>

                                ";
            // line 150
            if ( !(null === $this->getAttribute($context["inmueble"], "metrosconstruccion", array()))) {
                // line 151
                echo "                                    ";
                if (($this->getAttribute($context["inmueble"], "metrosconstruccion", array()) > 0)) {
                    // line 152
                    echo "                                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosconstruccion", array()), "html", null, true);
                    echo " | M2 de Construcción</li>
                                    ";
                }
                // line 154
                echo "                                ";
            }
            // line 155
            echo "

                                ";
            // line 157
            if ( !(null === $this->getAttribute($context["inmueble"], "metrosterreno", array()))) {
                // line 158
                echo "                                    ";
                if (($this->getAttribute($context["inmueble"], "metrosterreno", array()) > 0)) {
                    // line 159
                    echo "                                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosterreno", array()), "html", null, true);
                    echo " | M2 de Terreno</li>
                                    ";
                }
                // line 161
                echo "                                ";
            }
            // line 162
            echo "
                                ";
            // line 163
            if ( !(null === $this->getAttribute($context["inmueble"], "metrosfrente", array()))) {
                // line 164
                echo "                                    ";
                if (($this->getAttribute($context["inmueble"], "metrosfrente", array()) > 0)) {
                    // line 165
                    echo "                                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosfrente", array()), "html", null, true);
                    echo " | M de frente</li>
                                    ";
                }
                // line 167
                echo "                                ";
            }
            // line 168
            echo "
                                ";
            // line 169
            if ( !(null === $this->getAttribute($context["inmueble"], "metrosfondo", array()))) {
                // line 170
                echo "                                    ";
                if (($this->getAttribute($context["inmueble"], "metrosfondo", array()) > 0)) {
                    // line 171
                    echo "                                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosfondo", array()), "html", null, true);
                    echo " | M de fondo</li>
                                    ";
                }
                // line 173
                echo "                                ";
            }
            // line 174
            echo "                            </ul>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style=\"width:20%; text-align: center;background-color:#EEEEEE;\">
                <a href=\"http://www.properdeal.com.mx/PD/web/app.php/buscarinmueble/showfs/";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
            echo "?ida=";
            echo twig_escape_filter($this->env, (isset($context["ida"]) ? $context["ida"] : null), "html", null, true);
            echo "\" style=\"text-decoration: none;\">
                    <p class=\"titulo\">&#10133; Detalles</p>
                </a>
            </td>
            <td style=\"width:20%; text-align: center;background-color:#EEEEEE;\" >
                <a href=\"http://www.properdeal.com.mx/PD/web/app.php/buscarinmueble/showfs/";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
            echo "?ida=";
            echo twig_escape_filter($this->env, (isset($context["ida"]) ? $context["ida"] : null), "html", null, true);
            echo "\" style=\"text-decoration: none;\">
                    <p class=\"titulo\">Más Fotos</p>
                </a>
            </td>
            <td style=\"width:60%\">
                <p style=\"text-align: center;\">
                    ";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "nombre", array()), "html", null, true);
            echo " <b>Tel:</b> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "telefono", array()), "html", null, true);
            echo " <b>Cel:</b> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "celular", array()), "html", null, true);
            echo "
                    <br>
                    <a href=\"mailto:";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "email", array()), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "email", array()), "html", null, true);
            echo "</b></a>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
    </td>
    </tr>

    <tr>
        <td>
            <div style=\"height: 10px;\"></div>
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "
    <!-- Footer -->
    <tr>
        <td colspan=\"2\">
            ";
        // line 214
        if (array_key_exists("prospectos", $context)) {
            // line 215
            echo "                <label class=\"texto1\"><b>Enviado a:</b></label>
                <ul>
                    ";
            // line 217
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prospectos"]) ? $context["prospectos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["prospecto"]) {
                // line 218
                echo "                        <li class=\"texto1\">
                            ";
                // line 219
                if ( !(null === $this->getAttribute($context["prospecto"], "nombre", array()))) {
                    // line 220
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prospecto"], "nombre", array()), "html", null, true);
                    echo " -
                            ";
                }
                // line 222
                echo "                            email: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["prospecto"], "email", array()), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prospecto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                </ul>
            ";
        }
        // line 227
        echo "        </td>
    </tr>

    <tr>
        <td style=\"width:60%;\">
            ";
        // line 232
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6d7b20b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d7b20b_0") : $this->env->getExtension('asset')->getAssetUrl("images/6d7b20b_logotipo2_1.jpg");
            // line 233
            echo "            <a href=\"http://www.properdeal.mx\">
                <img src=\"http://104.236.50.14";
            // line 234
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" style=\"width:250px;\" class=\"header-logo\" alt=\"Logo\"/>
            </a>
            <br/>
            <a href=\"http://www.properdeal.mx\">http://www.properdeal.mx</a>
            ";
        } else {
            // asset "6d7b20b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d7b20b") : $this->env->getExtension('asset')->getAssetUrl("images/6d7b20b.jpg");
            // line 233
            echo "            <a href=\"http://www.properdeal.mx\">
                <img src=\"http://104.236.50.14";
            // line 234
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" style=\"width:250px;\" class=\"header-logo\" alt=\"Logo\"/>
            </a>
            <br/>
            <a href=\"http://www.properdeal.mx\">http://www.properdeal.mx</a>
            ";
        }
        unset($context["asset_url"]);
        // line 239
        echo "        </td>
        <td style=\"width:40%;\">
            <p style=\"text-align: center\">
            </p>
        </td>
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
        font-size: 18px;
    }
    p.titulo
    {
        line-height: 95%;
        color: black;
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
    .tableborder {
        border: 1px solid lightgrey;
    }
    .tableborder tbody td {
        border: 1px solid lightgrey;
    }

</style>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return ":mensaje:mail_enviarinmueble_multiple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 239,  528 => 234,  525 => 233,  515 => 234,  512 => 233,  508 => 232,  501 => 227,  497 => 225,  487 => 222,  481 => 220,  479 => 219,  476 => 218,  472 => 217,  468 => 215,  466 => 214,  460 => 210,  437 => 195,  428 => 193,  417 => 187,  407 => 182,  397 => 174,  394 => 173,  388 => 171,  385 => 170,  383 => 169,  380 => 168,  377 => 167,  371 => 165,  368 => 164,  366 => 163,  363 => 162,  360 => 161,  354 => 159,  351 => 158,  349 => 157,  345 => 155,  342 => 154,  336 => 152,  333 => 151,  331 => 150,  323 => 144,  317 => 142,  315 => 141,  312 => 140,  309 => 139,  303 => 137,  300 => 136,  298 => 135,  295 => 134,  292 => 133,  286 => 131,  283 => 130,  281 => 129,  278 => 128,  272 => 126,  270 => 125,  267 => 124,  261 => 122,  259 => 121,  256 => 120,  250 => 118,  248 => 117,  239 => 111,  231 => 108,  226 => 105,  220 => 103,  218 => 102,  208 => 94,  200 => 92,  196 => 90,  188 => 88,  185 => 87,  177 => 85,  172 => 84,  170 => 83,  167 => 82,  165 => 81,  161 => 79,  155 => 77,  153 => 76,  140 => 74,  134 => 73,  126 => 67,  122 => 66,  111 => 58,  82 => 34,  78 => 33,  74 => 32,  69 => 29,  62 => 26,  59 => 25,  51 => 26,  48 => 25,  44 => 24,  19 => 1,);
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
/* <table style="width: 100%;">*/
/*     <tbody>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*         </td>*/
/*     </tr>*/
/*     <!-- Mensaje -->*/
/*     <tr style="width: 100%;">*/
/*         <td colspan="2" style="border-bottom:2pt solid black;width:100%;">*/
/*             <p class="titulo">Listado de Propiedades</p>*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td colspan="2" style="background-color:gainsboro; border: 1pt solid lightgrey;width:100%;">*/
/*             <b>Comentario</b><br>*/
/*             <p>{{ mensaje }}</p>*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*         </td>*/
/*     </tr>*/
/* */
/*     {% for inmueble in inmuebles %}*/
/*     <tr style="width: 100%;">*/
/*     <td style="width: 100%;">*/
/*         <table class="tableborder" style="width: 100%;">*/
/*         <tbody>*/
/*         <tr style="background-color:#EEEEEE; border-top: 1pt solid #EEEEEE; width: 100%;">*/
/*             <td style="width:70%; border-color: #EEEEEE;">*/
/*                 <a href="http://www.properdeal.com.mx/PD/web/app.php/buscarinmueble/showfs/{{ inmueble.idInmueble }}?ida={{ ida }}" style="text-decoration: none;">*/
/*                     <p class="titulo">ID:{{ inmueble.legacyid }}, {{ inmueble.nombreid }}, {{ inmueble.idMunicipio.nombre }}, {{ inmueble.idEstado.nombre }}, {{ inmueble.cp }} </p>*/
/*                 </a>*/
/*                 {% if inmueble.nombreedificio is not null  %}*/
/*                     <p class="titulo">{{ inmueble.nombreedificio }}</p>*/
/*                 {% endif %}*/
/*             </td>*/
/*             <td style="width:30%; text-align: right;">*/
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
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*     </table>*/
/*         <table class="tableborder">*/
/*         <tbody>*/
/*         <tr>*/
/*             <td colspan="2" style="width:40%; vertical-align: top;">*/
/*             {% if (inmueble.imagenes|length>0) %}*/
/*                 <img src="http://104.236.50.14{{ inmueble.imagenes[0].getWebPath() }}" class="responsive-img" style="width:98%;"/>*/
/*             {% endif %}*/
/*             </td>*/
/* */
/*             <td style="width:60%">*/
/*                 <label class="texto1" style="font-size: 16px;"><b>{{ inmueble.idTipoInmueble.nombre }} en {{ inmueble.idMunicipio.nombre }}</b></label><br>*/
/* */
/*                 <br>*/
/*                 <p class="texto1">{{ inmueble.descripcion }}</p>*/
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
/*                                         <li>{{ inmueble.metrosconstruccion }} | M2 de Construcción</li>*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/* */
/* */
/*                                 {% if inmueble.metrosterreno is not null %}*/
/*                                     {% if inmueble.metrosterreno > 0 %}*/
/*                                         <li>{{ inmueble.metrosterreno }} | M2 de Terreno</li>*/
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
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td style="width:20%; text-align: center;background-color:#EEEEEE;">*/
/*                 <a href="http://www.properdeal.com.mx/PD/web/app.php/buscarinmueble/showfs/{{ inmueble.idInmueble }}?ida={{ ida }}" style="text-decoration: none;">*/
/*                     <p class="titulo">&#10133; Detalles</p>*/
/*                 </a>*/
/*             </td>*/
/*             <td style="width:20%; text-align: center;background-color:#EEEEEE;" >*/
/*                 <a href="http://www.properdeal.com.mx/PD/web/app.php/buscarinmueble/showfs/{{ inmueble.idInmueble }}?ida={{ ida }}" style="text-decoration: none;">*/
/*                     <p class="titulo">Más Fotos</p>*/
/*                 </a>*/
/*             </td>*/
/*             <td style="width:60%">*/
/*                 <p style="text-align: center;">*/
/*                     {{ asesor.nombre }} <b>Tel:</b> {{ asesor.telefono }} <b>Cel:</b> {{ asesor.celular }}*/
/*                     <br>*/
/*                     <a href="mailto:{{ asesor.email }}"><b>{{ asesor.email }}</b></a>*/
/*                 </p>*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*     </table>*/
/*     </td>*/
/*     </tr>*/
/* */
/*     <tr>*/
/*         <td>*/
/*             <div style="height: 10px;"></div>*/
/*         </td>*/
/*     </tr>*/
/*     {% endfor %}*/
/* */
/*     <!-- Footer -->*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             {% if (prospectos is defined) %}*/
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
/*             {% endif %}*/
/*         </td>*/
/*     </tr>*/
/* */
/*     <tr>*/
/*         <td style="width:60%;">*/
/*             {% image '@FrameworkBundle/Resources/public/images/logotipo2.jpg' %}*/
/*             <a href="http://www.properdeal.mx">*/
/*                 <img src="http://104.236.50.14{{ asset_url }}" style="width:250px;" class="header-logo" alt="Logo"/>*/
/*             </a>*/
/*             <br/>*/
/*             <a href="http://www.properdeal.mx">http://www.properdeal.mx</a>*/
/*             {% endimage %}*/
/*         </td>*/
/*         <td style="width:40%;">*/
/*             <p style="text-align: center">*/
/*             </p>*/
/*         </td>*/
/*     </tr>*/
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
/*         font-size: 18px;*/
/*     }*/
/*     p.titulo*/
/*     {*/
/*         line-height: 95%;*/
/*         color: black;*/
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
/*     .tableborder {*/
/*         border: 1px solid lightgrey;*/
/*     }*/
/*     .tableborder tbody td {*/
/*         border: 1px solid lightgrey;*/
/*     }*/
/* */
/* </style>*/
/* */
/* </body>*/
/* </html>*/
