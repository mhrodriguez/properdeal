<?php

/* :inmueble:index.html.twig */
class __TwigTemplate_6a3afad93f8d8d71683a8f47c274ab3aaa9aeb58b676504136f3fa44ee52c81b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":inmueble:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseabc.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div id=\"wrapper\">
        <div id=\"container\">
            <!-- Page Layout here -->
            <br/>
            <div class=\"row\">
                <nav>
                    <div class=\"nav-wrapper z-depth-1\">
                        <div class=\"col s12  blue darken-1 \">
                            <a href=\"#!\" class=\"breadcrumb\">Propiedades</a>
                            <a href=\"#!\" class=\"breadcrumb\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : null), "html", null, true);
        echo "</a>
                        </div>
                    </div>
                </nav>
            </div>

            <div class=\"row\">

                ";
        // line 22
        if (($this->getAttribute((isset($context["asesorpermisos"]) ? $context["asesorpermisos"] : null), "altapropiedad", array()) == true)) {
            // line 23
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("inmueble_new", array());
            echo "\" class=\"waves-effect waves-light btn blue darken-1 right\"><i class=\"material-icons left\">add</i>Nueva Propiedad</a>
                ";
        }
        // line 25
        echo "
                <button onclick=\"imprimir();\" target=\"_blank\" class=\"waves-effect waves-light btn blue darken-1 right\" style=\"margin-right: 10px\">Imprimir</button>
                <script>
                    function imprimir() {
                        txtID = document.getElementById('txtID');
                        selZonas = document.getElementById('selZonas');
                        selAsesores = document.getElementById('selAsesores');
                        selTiposInmueble = document.getElementById('selTiposInmueble');
                        selOperacionesInmueble = document.getElementById('selOperacionesInmueble');
                        url = '";
        // line 34
        echo $this->env->getExtension('routing')->getPath((isset($context["url_imprimir"]) ? $context["url_imprimir"] : null), array());
        echo "?idAsesor=' + selAsesores.options[selAsesores.selectedIndex].value +
                                '&idTipoInmueble=' + selTiposInmueble.options[selTiposInmueble.selectedIndex].value +
                                '&idZona=' + selZonas.options[selZonas.selectedIndex].value +
                                '&id=' + txtID.value +
                                '&idOperacionInmueble=' + selOperacionesInmueble.options[selOperacionesInmueble.selectedIndex].value;
                        window.open(url);
                    }
                </script>
            </div>

            <div class=\"row\">
                ";
        // line 45
        if ( !(null === (isset($context["asesores"]) ? $context["asesores"] : null))) {
            // line 46
            echo "                <div class=\"input-field col s6\">
                    <select id=\"selAsesores\">
                    <option value=\"-1\" disabled selected>Seleccione un asesor</option>
                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["asesores"]) ? $context["asesores"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["asesor"]) {
                // line 50
                echo "                        ";
                if (($this->getAttribute($context["asesor"], "id", array()) == (isset($context["idAsesor"]) ? $context["idAsesor"] : null))) {
                    // line 51
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["asesor"], "id", array()), "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["asesor"], "nombre", array()), "html", null, true);
                    echo "</option>
                        ";
                } else {
                    // line 53
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["asesor"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["asesor"], "nombre", array()), "html", null, true);
                    echo "</option>
                        ";
                }
                // line 55
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asesor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                    </select>

                    <input id=\"txtID\" placeholder=\"ID, Nombre identificación\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"/>

                    <select id=\"selZonas\">
                        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["zonas"]) ? $context["zonas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["zona"]) {
                // line 62
                echo "                            ";
                if (($this->getAttribute($context["zona"], "idZona", array()) == (isset($context["idZona"]) ? $context["idZona"] : null))) {
                    // line 63
                    echo "
                                ";
                    // line 64
                    if (($this->getAttribute($context["zona"], "idZona", array()) == 0)) {
                        // line 65
                        echo "                                    <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["zona"], "idZona", array()), "html", null, true);
                        echo "\">Seleccione una zona</option>
                                ";
                    } else {
                        // line 67
                        echo "                                    <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["zona"], "idZona", array()), "html", null, true);
                        echo "\" selected>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["zona"], "nombre", array()), "html", null, true);
                        echo "</option>
                                ";
                    }
                    // line 69
                    echo "                            ";
                } else {
                    // line 70
                    echo "                                ";
                    if (($this->getAttribute($context["zona"], "idZona", array()) == 0)) {
                        // line 71
                        echo "                                    <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["zona"], "idZona", array()), "html", null, true);
                        echo "\">Seleccione una zona</option>
                                ";
                    } else {
                        // line 73
                        echo "                                    <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["zona"], "idZona", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["zona"], "nombre", array()), "html", null, true);
                        echo "</option>
                                ";
                    }
                    // line 75
                    echo "                            ";
                }
                // line 76
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zona'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                    </select>

                    <select id=\"selTiposInmueble\">
                        <option value=\"-1\" disabled selected>Seleccione un tipo de inmueble</option>
                        ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tiposInmueble"]) ? $context["tiposInmueble"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tipoInmueble"]) {
                // line 82
                echo "                            ";
                if (($this->getAttribute($context["tipoInmueble"], "idTipoInmueble", array()) == (isset($context["idTipoInmueble"]) ? $context["idTipoInmueble"] : null))) {
                    // line 83
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipoInmueble"], "idTipoInmueble", array()), "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipoInmueble"], "nombre", array()), "html", null, true);
                    echo "</option>
                            ";
                } else {
                    // line 85
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipoInmueble"], "idTipoInmueble", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipoInmueble"], "nombre", array()), "html", null, true);
                    echo "</option>
                            ";
                }
                // line 87
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipoInmueble'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                    </select>

                    <select id=\"selOperacionesInmueble\">
                        <option value=\"-1\" disabled selected>Seleccione una operación</option>
                        ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["operacionesInmueble"]) ? $context["operacionesInmueble"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["operacionInmueble"]) {
                // line 93
                echo "
                            ";
                // line 94
                if (($this->getAttribute($context["operacionInmueble"], "idOperacionInmueble", array()) == (isset($context["idOperacionInmueble"]) ? $context["idOperacionInmueble"] : null))) {
                    // line 95
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["operacionInmueble"], "idOperacionInmueble", array()), "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["operacionInmueble"], "nombre", array()), "html", null, true);
                    echo "</option>
                            ";
                } else {
                    // line 97
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["operacionInmueble"], "idOperacionInmueble", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["operacionInmueble"], "nombre", array()), "html", null, true);
                    echo "</option>
                            ";
                }
                // line 99
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operacionInmueble'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                    </select>

                    <button type=\"button\" onclick=\"buscar();\" class=\"waves-effect waves-light btn blue darken-1 right\">Filtrar</button>
                    <script>
                        function buscar() {
                            txtID = document.getElementById('txtID');
                            selAsesores = document.getElementById('selAsesores');
                            selZonas = document.getElementById('selZonas');
                            selTiposInmueble = document.getElementById('selTiposInmueble');
                            selOperacionesInmueble = document.getElementById('selOperacionesInmueble');
                            url = '";
            // line 111
            echo $this->env->getExtension('routing')->getPath((isset($context["url"]) ? $context["url"] : null), array());
            echo "?idAsesor=' + selAsesores.options[selAsesores.selectedIndex].value +
                                    '&idTipoInmueble=' + selTiposInmueble.options[selTiposInmueble.selectedIndex].value +
                                    '&idZona=' + selZonas.options[selZonas.selectedIndex].value +
                                    '&id=' + txtID.value +
                                    '&idOperacionInmueble=' + selOperacionesInmueble.options[selOperacionesInmueble.selectedIndex].value;
                            window.location = url;
                        }
                    </script>
                </div>
                <div class=\"input-field col s6\">

                    ";
            // line 122
            if (((isset($context["titulo"]) ? $context["titulo"] : null) != "Inactivas")) {
                // line 123
                echo "                    <a href=\"";
                echo $this->env->getExtension('routing')->getPath("inmueble_indexinactivos", array());
                echo "\" class=\"right\">Ver propiedades inactivas</a><br>
                    ";
            }
            // line 125
            echo "
                    ";
            // line 126
            if (((isset($context["titulo"]) ? $context["titulo"] : null) != "Por vencer en 45 días")) {
                // line 127
                echo "                    <a href=\"";
                echo $this->env->getExtension('routing')->getPath("inmueble_indexenrentavencimiento", array());
                echo "\" class=\"right\">Ver por vencer en 45 días</a><br>
                    ";
            }
            // line 129
            echo "
                    ";
            // line 130
            if (((isset($context["titulo"]) ? $context["titulo"] : null) != "En contrato de renta")) {
                // line 131
                echo "                    <a href=\"";
                echo $this->env->getExtension('routing')->getPath("inmueble_indexenrenta", array());
                echo "\" class=\"right\">Ver propiedades en contrato de renta</a><br>
                    ";
            }
            // line 133
            echo "
                    ";
            // line 134
            if (((isset($context["titulo"]) ? $context["titulo"] : null) != "Activas")) {
                // line 135
                echo "                    <a href=\"";
                echo $this->env->getExtension('routing')->getPath("inmueble_index", array());
                echo "\" class=\"right\">Ver propiedades activas</a>
                    ";
            }
            // line 137
            echo "

                    ";
            // line 139
            if (((isset($context["titulo"]) ? $context["titulo"] : null) == "Inactivas")) {
                // line 140
                echo "                        ";
                $context["pathurl"] = "inmueble_indexinactivos";
                // line 141
                echo "                    ";
            }
            // line 142
            echo "
                    ";
            // line 143
            if (((isset($context["titulo"]) ? $context["titulo"] : null) == "Por vencer en 45 días")) {
                // line 144
                echo "                        ";
                $context["pathurl"] = "inmueble_indexenrentavencimiento";
                // line 145
                echo "                    ";
            }
            // line 146
            echo "
                    ";
            // line 147
            if (((isset($context["titulo"]) ? $context["titulo"] : null) == "En contrato de renta")) {
                // line 148
                echo "                        ";
                $context["pathurl"] = "inmueble_indexenrenta";
                // line 149
                echo "                    ";
            }
            // line 150
            echo "
                    ";
            // line 151
            if (((isset($context["titulo"]) ? $context["titulo"] : null) == "Activas")) {
                // line 152
                echo "                        ";
                $context["pathurl"] = "inmueble_index";
                // line 153
                echo "                    ";
            }
            // line 154
            echo "                </div>
                ";
        }
        // line 156
        echo "            </div>

            ";
        // line 158
        if (array_key_exists("numpaginas", $context)) {
            // line 159
            echo "                ";
            if (((isset($context["numpaginas"]) ? $context["numpaginas"] : null) > 0)) {
                // line 160
                echo "                    <div class=\"row\">
                        <ul class=\"pagination\">
                            ";
                // line 162
                if (((isset($context["paginaactual"]) ? $context["paginaactual"] : null) != 1)) {
                    // line 163
                    echo "                                <li class=\"waves-effect\"><a onclick=\"window.location ='";
                    echo $this->env->getExtension('routing')->getPath((isset($context["pathurl"]) ? $context["pathurl"] : null), array());
                    echo "?pagina=";
                    echo twig_escape_filter($this->env, ((isset($context["paginaactual"]) ? $context["paginaactual"] : null) - 1), "html", null, true);
                    echo "' + parametrosBusqueda();\"><i class=\"material-icons\">chevron_left</i></a></li>
                            ";
                }
                // line 165
                echo "
                            ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numpaginas"]) ? $context["numpaginas"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 167
                    echo "                                ";
                    if (($context["p"] == (isset($context["paginaactual"]) ? $context["paginaactual"] : null))) {
                        // line 168
                        echo "                                    <li class=\"active blue darken-1\"><a href=\"#!\">";
                        echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                        echo "</a></li>
                                ";
                    } else {
                        // line 170
                        echo "                                    <li class=\"waves-effect\"><a onclick=\"window.location = '";
                        echo $this->env->getExtension('routing')->getPath((isset($context["pathurl"]) ? $context["pathurl"] : null), array());
                        echo "?pagina=";
                        echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                        echo "' + parametrosBusqueda();\">";
                        echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                        echo "</a></li>
                                ";
                    }
                    // line 172
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "
                            ";
                // line 174
                if (((isset($context["paginaactual"]) ? $context["paginaactual"] : null) != (isset($context["numpaginas"]) ? $context["numpaginas"] : null))) {
                    // line 175
                    echo "                                <li class=\"waves-effect\"><a onclick=\"window.location = '";
                    echo $this->env->getExtension('routing')->getPath((isset($context["pathurl"]) ? $context["pathurl"] : null), array());
                    echo "?pagina=";
                    echo twig_escape_filter($this->env, ((isset($context["paginaactual"]) ? $context["paginaactual"] : null) + 1), "html", null, true);
                    echo "' + parametrosBusqueda();\"><i class=\"material-icons\">chevron_right</i></a></li>
                            ";
                }
                // line 177
                echo "
                            <script>
                                function parametrosBusqueda() {
                                    txtID = document.getElementById('txtID');
                                    selAsesores = document.getElementById('selAsesores');
                                    selZonas = document.getElementById('selZonas');
                                    selTiposInmueble = document.getElementById('selTiposInmueble');
                                    selOperacionesInmueble = document.getElementById('selOperacionesInmueble');
                                    url = '&idAsesor=' + selAsesores.options[selAsesores.selectedIndex].value +
                                            '&idTipoInmueble=' + selTiposInmueble.options[selTiposInmueble.selectedIndex].value +
                                            '&idZona=' + selZonas.options[selZonas.selectedIndex].value +
                                            '&id=' + txtID.value +
                                            '&idOperacionInmueble=' + selOperacionesInmueble.options[selOperacionesInmueble.selectedIndex].value;
                                    //alert(url);
                                    return url;
                                }
                            </script>
                        </ul>
                    </div>
                ";
            }
            // line 197
            echo "            ";
        }
        // line 198
        echo "
            <div class=\"row\">
                <table class=\"striped\">
                    <thead>
                    <tr>
                        <th data-field=\"id\"><p>Propiedad</p></th>
                        <th data-field=\"id\"></th>
                        <th><p>Operaciones</p></th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 210
        $context["index"] = 0;
        // line 211
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inmuebles"]) ? $context["inmuebles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
            // line 212
            echo "                        <tr id=\"tr";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
            echo "\">
                            <td>
                                ";
            // line 214
            if ((twig_length_filter($this->env, $this->getAttribute($context["inmueble"], "Imagenes", array())) > 0)) {
                // line 215
                echo "                                    <img class=\"imginmueble\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["inmueble"], "Imagenes", array()), 0, array(), "array"), "getWebPath", array(), "method"), "html", null, true);
                echo "\">
                                ";
            }
            // line 217
            echo "                                <p><i class=\"material-icons left\">camera_alt</i>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["inmueble"], "imagenes", array())), "html", null, true);
            echo "</p>
                            </td>
                            <td>
                                <h5>ID: ";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "legacyid", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "nombreid", array()), "html", null, true);
            echo " </h5>
                                <h5>";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idTipoInmueble", array()), "nombre", array()), "html", null, true);
            echo " en ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
            echo "</h5>
                                <ul>
                                    <li><i class=\"material-icons left\">location_on</i>";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMunicipio", array()), "nombre", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idEstado", array()), "nombre", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "calle", array()), "html", null, true);
            echo "</li>
                                    <li>Zona: ";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idZona", array()), "nombre", array()), "html", null, true);
            echo "</li>
                                    <br>
                                    <li>";
            // line 226
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMoneda", array()), "simbolo", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "precio", array()), 2, ".", ","), "html", null, true);
            echo "</li>
                                    <br>

                                    ";
            // line 229
            if ( !(null === $this->getAttribute($context["inmueble"], "recamaras", array()))) {
                // line 230
                echo "                                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "recamaras", array()), "html", null, true);
                echo " Recámaras</li>
                                    ";
            }
            // line 232
            echo "
                                    ";
            // line 233
            if ( !(null === $this->getAttribute($context["inmueble"], "banos", array()))) {
                // line 234
                echo "                                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "banos", array()), "html", null, true);
                echo " Baño(s)</li>
                                    ";
            }
            // line 236
            echo "
                                    ";
            // line 237
            if ( !(null === $this->getAttribute($context["inmueble"], "mediobanos", array()))) {
                // line 238
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "mediobanos", array()), "html", null, true);
                echo " Medios Baño(s)<br>
                                    ";
            }
            // line 240
            echo "
                                    ";
            // line 241
            if ( !(null === $this->getAttribute($context["inmueble"], "metrosconstruccion", array()))) {
                // line 242
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosconstruccion", array()), "html", null, true);
                echo " Metros de Construcción<br>
                                    ";
            }
            // line 244
            echo "
                                    ";
            // line 245
            if ( !(null === $this->getAttribute($context["inmueble"], "metrosterreno", array()))) {
                // line 246
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "metrosterreno", array()), "html", null, true);
                echo " Metros de Terreno<br>
                                    ";
            }
            // line 248
            echo "
                                    ";
            // line 249
            if ( !(null === $this->getAttribute($context["inmueble"], "comision", array()))) {
                // line 250
                echo "                                    <li>Comisión: ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "comision", array()), 2, ".", ","), "html", null, true);
                echo "
                                        ";
                // line 251
                if (($this->getAttribute($this->getAttribute($context["inmueble"], "idOperacionInmueble", array()), "idOperacionInmueble", array()) == 2)) {
                    // line 252
                    echo "                                            Mensualidad(es)
                                        ";
                } else {
                    // line 254
                    echo "                                            %
                                        ";
                }
                // line 256
                echo "                                    </li>
                                    ";
            }
            // line 258
            echo "
                                    ";
            // line 259
            if (($this->getAttribute($context["inmueble"], "plantas", array()) > 0)) {
                // line 260
                echo "                                        <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "plantas", array()), "html", null, true);
                echo " Plantas</li>
                                    ";
            }
            // line 262
            echo "
                                    <br>
                                    <li>Alta por: ";
            // line 264
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idUsuario", array()), "nombre", array()), "html", null, true);
            echo "</li>

                                    <br>
                                    ";
            // line 267
            if ( !(null === $this->getAttribute($context["inmueble"], "fechaModificacion", array()))) {
                // line 268
                echo "                                    <li>Modificado el ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["inmueble"], "fechaModificacion", array()), "d/m/Y"), "html", null, true);
                echo "</li>
                                    <li>Por ";
                // line 269
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idUsuariomodifico", array()), "nombre", array()), "html", null, true);
                echo "</li>
                                    ";
            }
            // line 271
            echo "
                                    ";
            // line 272
            if ( !(null === $this->getAttribute($context["inmueble"], "porcentajecompartir", array()))) {
                // line 273
                echo "                                    <li>Porcentaje a compartir: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "porcentajecompartir", array()), "html", null, true);
                echo " %</li>
                                    ";
            }
            // line 275
            echo "
                                    <li>
                                        <p>Visitas: ";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visitas"]) ? $context["visitas"] : null), (isset($context["index"]) ? $context["index"] : null), array(), "array"), "html", null, true);
            echo "</p>
                                        ";
            // line 278
            $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
            // line 279
            echo "                                    </li>
                                </ul>
                            </td>
                            <td>
                                <div>
                                <a href=\"";
            // line 284
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inmueble_detalle", array("id" => $this->getAttribute($context["inmueble"], "idInmueble", array()))), "html", null, true);
            echo "\" class=\"tooltipped\" data-tooltip=\"Detalle\" data-position=\"top\"><i class=\"material-icons left\">visibility</i></a>
                                <a href=\"";
            // line 285
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inmueble_show", array("id" => $this->getAttribute($context["inmueble"], "idInmueble", array()))), "html", null, true);
            echo "\" target=\"_blank\" class=\"tooltipped\" data-tooltip=\"Vista de impresión\" data-position=\"top\"><i class=\"material-icons left\">print</i></a>
                                <a href=\"#\" onclick=\"var url; if (window.location.href.indexOf('#') > 0) { url = window.location.href.substring(0, window.location.href.indexOf('#')); } else { url = window.location.href; }  window.location.href='";
            // line 286
            echo $this->env->getExtension('routing')->getPath("prospecto_asignarpropiedad", array());
            echo "?idInmueble=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
            echo "&url=' + url.replace(/&/g, 'AMP') + 'SHARPtr";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
            echo "';\" class=\"tooltipped\" data-tooltip=\"Agregar prospecto\" data-position=\"top\"><i class=\"material-icons left\">person_add</i></a>

                                ";
            // line 288
            if (($this->getAttribute((isset($context["asesorpermisos"]) ? $context["asesorpermisos"] : null), "editarpropiedad", array()) == true)) {
                // line 289
                echo "                                    ";
                if ((((isset($context["ida"]) ? $context["ida"] : null) == $this->getAttribute($this->getAttribute($context["inmueble"], "idUsuario", array()), "id", array())) || ($this->env->getExtension('security')->isGranted("ROLE_SUPERADMIN") == true))) {
                    // line 290
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inmueble_edit", array("id" => $this->getAttribute($context["inmueble"], "idInmueble", array()))), "html", null, true);
                    echo "\" class=\"tooltipped\" data-tooltip=\"Editar\" data-position=\"top\"><i class=\"material-icons left\">mode_edit</i></a>
                                    ";
                }
                // line 292
                echo "                                ";
            }
            // line 293
            echo "
                                ";
            // line 294
            if ((((isset($context["ida"]) ? $context["ida"] : null) == $this->getAttribute($this->getAttribute($context["inmueble"], "idUsuario", array()), "id", array())) || ($this->env->getExtension('security')->isGranted("ROLE_SUPERADMIN") == true))) {
                // line 295
                echo "                                    <a href=\"";
                echo $this->env->getExtension('routing')->getPath("inmuebleimagen_index", array());
                echo "?idInmueble=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
                echo "\" class=\"tooltipped\" data-tooltip=\"Fotografias\" data-position=\"top\"><i class=\"material-icons left\">photo_library</i></a>
                                ";
            }
            // line 297
            echo "
                                ";
            // line 298
            if ((((isset($context["ida"]) ? $context["ida"] : null) == $this->getAttribute($this->getAttribute($context["inmueble"], "idUsuario", array()), "id", array())) || ($this->env->getExtension('security')->isGranted("ROLE_SUPERADMIN") == true))) {
                // line 299
                echo "                                    <a href=\"";
                echo $this->env->getExtension('routing')->getPath("archivo_index", array());
                echo "?idInmueble=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
                echo "\" class=\"tooltipped\" data-tooltip=\"Subir archivos\" data-position=\"top\"><i class=\"material-icons left\">description</i></a>
                                ";
            }
            // line 301
            echo "
                                <a href=\"#\" onclick=\"var url; if (window.location.href.indexOf('#') > 0) { url = window.location.href.substring(0, window.location.href.indexOf('#')); } else { url = window.location.href; } window.location.href='";
            // line 302
            echo $this->env->getExtension('routing')->getPath("ids_index", array());
            echo "?idInmueble=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
            echo "&prospectos=1&url=' + url.replace(/&/g, 'AMP') + 'SHARPtr";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
            echo "';\" class=\"tooltipped\" data-tooltip=\"Enviar propiedad\" data-position=\"top\"><i class=\"material-icons left\">email</i></a>

                                <!--a href=\"";
            // line 304
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inmueble_keywords", array("id" => $this->getAttribute($context["inmueble"], "idInmueble", array()))), "html", null, true);
            echo "\"><i class=\"material-icons left\">text_format</i></a-->
                                </div>

                                <div>
                                ";
            // line 308
            if ((((isset($context["ida"]) ? $context["ida"] : null) == $this->getAttribute($this->getAttribute($context["inmueble"], "idUsuario", array()), "id", array())) || ($this->env->getExtension('security')->isGranted("ROLE_SUPERADMIN") == true))) {
                // line 309
                echo "                                    ";
                if ( !(null === $this->getAttribute($context["inmueble"], "idPropietario", array()))) {
                    // line 310
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("propietario_edit", array("id" => $this->getAttribute($this->getAttribute($context["inmueble"], "idPropietario", array()), "id", array()))), "html", null, true);
                    echo "\" class=\"tooltipped\" data-tooltip=\"Asignar propietario\" data-position=\"top\"><i class=\"material-icons left\">account_box</i></a>
                                    ";
                } else {
                    // line 312
                    echo "                                        <a href=\"";
                    echo $this->env->getExtension('routing')->getPath("propietario_new", array());
                    echo "?idInmueble=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
                    echo "\" class=\"tooltipped\" data-tooltip=\"Asignar propietario\" data-position=\"top\"><i class=\"material-icons left\">account_box</i></a>
                                    ";
                }
                // line 314
                echo "                                ";
            }
            // line 315
            echo "
                                ";
            // line 316
            if ((((isset($context["ida"]) ? $context["ida"] : null) == $this->getAttribute($this->getAttribute($context["inmueble"], "idUsuario", array()), "id", array())) || ($this->env->getExtension('security')->isGranted("ROLE_SUPERADMIN") == true))) {
                // line 317
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inmueble_clonar", array("id" => $this->getAttribute($context["inmueble"], "idInmueble", array()))), "html", null, true);
                echo "\" class=\"tooltipped\" data-tooltip=\"Clonar propiedad\" data-position=\"top\" onclick=\"return confirm('¿Realmente desea clonar esta propiedad?');\">
                                        <i class=\"material-icons left\">done_all</i>
                                    </a>
                                ";
            }
            // line 321
            echo "
                                <a href=\"";
            // line 322
            echo $this->env->getExtension('routing')->getPath("mensaje_new", array());
            echo "?tipoMensaje=3&idInmueble=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
            echo "&idAsesor=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idUsuario", array()), "id", array()), "html", null, true);
            echo "\" class=\"tooltipped\" data-tooltip=\"Contactar asesor\" data-position=\"top\">
                                    <i class=\"material-icons left\">question_answer</i>
                                </a>
                                <a href=\"https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=http://104.236.50.14/PD/web/app.php/buscarinmueble/showfs/";
            // line 325
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
            echo "\" class=\"tooltipped\" data-tooltip=\"Código QR\" data-position=\"top\" target=\"_blank\">
                                    <i class=\"material-icons left\">settings_overscan</i>
                                </a>
                                <a href=\"#\" onclick=\"var url; if (window.location.href.indexOf('#') > 0) { url = window.location.href.substring(0, window.location.href.indexOf('#')); } else { url = window.location.href; } window.location.href='";
            // line 328
            echo $this->env->getExtension('routing')->getPath("ids_index", array());
            echo "?idInmueble=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
            echo "&prospectos=0&url=' + url.replace(/&/g, 'AMP') + 'SHARPtr";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
            echo "';\" class=\"tooltipped\" data-tooltip=\"Enviar a un amigo\" data-position=\"top\">
                                    <i class=\"material-icons left\">send</i>
                                </a>

                                <a target=\"_blank\" class=\"tooltipped\" data-tooltip=\"Guardar como PDF\" data-position=\"top\" href=\"http://www.html2pdf.it/?url=";
            // line 332
            echo twig_escape_filter($this->env, (isset($context["rootname"]) ? $context["rootname"] : null), "html", null, true);
            echo "PD/web/app.php/buscarinmueble/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
            echo "/pdf\">
                                    <i class=\"material-icons left\">file_download</i>
                                </a>

                                ";
            // line 336
            if (((isset($context["ida"]) ? $context["ida"] : null) == $this->getAttribute($this->getAttribute($context["inmueble"], "idUsuario", array()), "id", array()))) {
                // line 337
                echo "                                    <a href=\"#!\" onclick=\"window.location.href = '";
                echo $this->env->getExtension('routing')->getPath("usuario_edit", array());
                echo "';\" class=\"tooltipped\" data-tooltip=\"Logo de la empresa\" data-position=\"top\">
                                        <i class=\"material-icons left\">beenhere</i>
                                    </a>
                                ";
            }
            // line 341
            echo "
                                <a href=\"";
            // line 342
            echo $this->env->getExtension('routing')->getPath("tarea_new2", array());
            echo "\" class=\"tooltipped\" data-tooltip=\"Agendar bitácora\" data-position=\"top\">
                                    <i class=\"material-icons left\">date_range</i>
                                </a>

                                ";
            // line 346
            if ((((isset($context["ida"]) ? $context["ida"] : null) == $this->getAttribute($this->getAttribute($context["inmueble"], "idUsuario", array()), "id", array())) || ($this->env->getExtension('security')->isGranted("ROLE_SUPERADMIN") == true))) {
                // line 347
                echo "                                    <!--a href=\"#!\" onclick=\"publicar();\" class=\"tooltipped\" data-tooltip=\"Publicar mercado libre\" data-position=\"top\">
                                        <i class=\"material-icons left\">sync</i>
                                    </a-->
                                ";
            }
            // line 351
            echo "
                                ";
            // line 352
            if ((((isset($context["ida"]) ? $context["ida"] : null) == $this->getAttribute($this->getAttribute($context["inmueble"], "idUsuario", array()), "id", array())) || ($this->env->getExtension('security')->isGranted("ROLE_SUPERADMIN") == true))) {
                // line 353
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inmueble_delete", array("id" => $this->getAttribute($context["inmueble"], "idInmueble", array()))), "html", null, true);
                echo "\" class=\"tooltipped\" data-tooltip=\"Borrar propiedad\" data-position=\"top\" onclick=\"return confirm('¿Realmente desea borrar esta propiedad?');\">
                                        <i class=\"material-icons left\">delete</i>
                                    </a>
                                ";
            }
            // line 357
            echo "
                                </div>
                                <br>
                                <div>
                                <p>Alta: ";
            // line 361
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["inmueble"], "fechaCreacion", array()), "d/m/Y"), "html", null, true);
            echo "</p>

                                ";
            // line 363
            if (($this->getAttribute($context["inmueble"], "activo", array()) == true)) {
                // line 364
                echo "                                    <p>Activo<i class=\"material-icons left\">play_circle_outline</i></p>

                                    ";
                // line 366
                if (($this->getAttribute((isset($context["asesorpermisos"]) ? $context["asesorpermisos"] : null), "inactivarpropiedad", array()) == true)) {
                    // line 367
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inmueble_switchactivo", array("id" => $this->getAttribute($context["inmueble"], "idInmueble", array()))), "html", null, true);
                    echo "\">Desactivar</a>
                                    ";
                }
                // line 369
                echo "                                ";
            } else {
                // line 370
                echo "                                    <p>Inactivo<i class=\"material-icons left\">not_interested</i></p>

                                    ";
                // line 372
                if (($this->getAttribute((isset($context["asesorpermisos"]) ? $context["asesorpermisos"] : null), "inactivarpropiedad", array()) == true)) {
                    // line 373
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inmueble_switchactivo", array("id" => $this->getAttribute($context["inmueble"], "idInmueble", array()))), "html", null, true);
                    echo "\">Activar</a>
                                    ";
                }
                // line 375
                echo "                                ";
            }
            // line 376
            echo "                                </div>

                                <p>
                                    <a href=\"#\" onclick=\"abrirFacebookModal('http://104.236.50.14/PD/web/app.php/buscarinmueble/showfs/";
            // line 379
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
            echo "');\">
                                        <img src=\"/PDCRM/web/images/img_facebook.jpg\" alt=\"\" class=\"responsive-img\"/>
                                    </a>
                                </p>

                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 387
        echo "                    </tbody>
                </table>

                <!-- Modal Structure -->
                <div id=\"modalFacebook\" class=\"modal\">
                    <div class=\"modal-content\">
                        <iframe id=\"frmFacebook\" style=\"width:100%; height:300px; margin-top:8px; padding-top:0px\" frameBorder=\"0\"></iframe>
                    </div>
                    <div class=\"modal-footer\">
                        <a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn-flat \">Cerrar</a>
                    </div>
                </div>
                
            </div>

            ";
        // line 402
        if (array_key_exists("numpaginas", $context)) {
            // line 403
            echo "             ";
            if (((isset($context["numpaginas"]) ? $context["numpaginas"] : null) > 0)) {
                // line 404
                echo "                <div class=\"row\">
                    <ul class=\"pagination\">
                        ";
                // line 406
                if (((isset($context["paginaactual"]) ? $context["paginaactual"] : null) != 1)) {
                    // line 407
                    echo "                            <li class=\"waves-effect\"><a onclick=\"window.location ='";
                    echo $this->env->getExtension('routing')->getPath((isset($context["pathurl"]) ? $context["pathurl"] : null), array());
                    echo "?pagina=";
                    echo twig_escape_filter($this->env, ((isset($context["paginaactual"]) ? $context["paginaactual"] : null) - 1), "html", null, true);
                    echo "' + parametrosBusqueda();\"><i class=\"material-icons\">chevron_left</i></a></li>
                        ";
                }
                // line 409
                echo "
                        ";
                // line 410
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numpaginas"]) ? $context["numpaginas"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 411
                    echo "                            ";
                    if (($context["p"] == (isset($context["paginaactual"]) ? $context["paginaactual"] : null))) {
                        // line 412
                        echo "                                <li class=\"active blue darken-1\"><a href=\"#!\">";
                        echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                        echo "</a></li>
                            ";
                    } else {
                        // line 414
                        echo "                                <li class=\"waves-effect\"><a onclick=\"window.location = '";
                        echo $this->env->getExtension('routing')->getPath((isset($context["pathurl"]) ? $context["pathurl"] : null), array());
                        echo "?pagina=";
                        echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                        echo "' + parametrosBusqueda();\">";
                        echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                        echo "</a></li>
                            ";
                    }
                    // line 416
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 417
                echo "
                        ";
                // line 418
                if (((isset($context["paginaactual"]) ? $context["paginaactual"] : null) != (isset($context["numpaginas"]) ? $context["numpaginas"] : null))) {
                    // line 419
                    echo "                            <li class=\"waves-effect\"><a onclick=\"window.location = '";
                    echo $this->env->getExtension('routing')->getPath((isset($context["pathurl"]) ? $context["pathurl"] : null), array());
                    echo "?pagina=";
                    echo twig_escape_filter($this->env, ((isset($context["paginaactual"]) ? $context["paginaactual"] : null) + 1), "html", null, true);
                    echo "' + parametrosBusqueda();\"><i class=\"material-icons\">chevron_right</i></a></li>
                        ";
                }
                // line 421
                echo "                    </ul>
                </div>
             ";
            }
            // line 424
            echo "            ";
        }
        // line 425
        echo "
        </div>
    </div>
    
    <script>
        function abrirFacebookModal(url)
        {
            frame = document.getElementById('frmFacebook');
            
            frame.src = '";
        // line 434
        echo $this->env->getExtension('routing')->getPath("facebook_publicar", array());
        echo "?url=' + url;
            
            \$('#modalFacebook').openModal();
        }

        function abrirURL(\$url)
        {
            var iframe = document.getElementById('iframePrincipal');
            iframe.style.display='';
            iframe.src = \$url;

            \$('html, body').animate({ scrollTop: 0 }, 'slow');
        }

        \$(document).ready(function() {
            \$('select').material_select();
        });



    </script>
";
    }

    // line 457
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 458
        echo "
    <style>
        body {
            background: white;
            height:100vh;
        }
        p
        {
            font-size: small;
        }
        .imginmueble
        {
            width: 160px;
            height: 128px;
        }

        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted darkblue;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: white;
            color: cornflowerblue;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

            /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
        }
    </style>

";
    }

    public function getTemplateName()
    {
        return ":inmueble:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1066 => 458,  1063 => 457,  1037 => 434,  1026 => 425,  1023 => 424,  1018 => 421,  1010 => 419,  1008 => 418,  1005 => 417,  999 => 416,  989 => 414,  983 => 412,  980 => 411,  976 => 410,  973 => 409,  965 => 407,  963 => 406,  959 => 404,  956 => 403,  954 => 402,  937 => 387,  923 => 379,  918 => 376,  915 => 375,  909 => 373,  907 => 372,  903 => 370,  900 => 369,  894 => 367,  892 => 366,  888 => 364,  886 => 363,  881 => 361,  875 => 357,  867 => 353,  865 => 352,  862 => 351,  856 => 347,  854 => 346,  847 => 342,  844 => 341,  836 => 337,  834 => 336,  825 => 332,  814 => 328,  808 => 325,  798 => 322,  795 => 321,  787 => 317,  785 => 316,  782 => 315,  779 => 314,  771 => 312,  765 => 310,  762 => 309,  760 => 308,  753 => 304,  744 => 302,  741 => 301,  733 => 299,  731 => 298,  728 => 297,  720 => 295,  718 => 294,  715 => 293,  712 => 292,  706 => 290,  703 => 289,  701 => 288,  692 => 286,  688 => 285,  684 => 284,  677 => 279,  675 => 278,  671 => 277,  667 => 275,  661 => 273,  659 => 272,  656 => 271,  651 => 269,  646 => 268,  644 => 267,  638 => 264,  634 => 262,  628 => 260,  626 => 259,  623 => 258,  619 => 256,  615 => 254,  611 => 252,  609 => 251,  604 => 250,  602 => 249,  599 => 248,  593 => 246,  591 => 245,  588 => 244,  582 => 242,  580 => 241,  577 => 240,  571 => 238,  569 => 237,  566 => 236,  560 => 234,  558 => 233,  555 => 232,  549 => 230,  547 => 229,  539 => 226,  534 => 224,  526 => 223,  519 => 221,  513 => 220,  506 => 217,  500 => 215,  498 => 214,  492 => 212,  487 => 211,  485 => 210,  471 => 198,  468 => 197,  446 => 177,  438 => 175,  436 => 174,  433 => 173,  427 => 172,  417 => 170,  411 => 168,  408 => 167,  404 => 166,  401 => 165,  393 => 163,  391 => 162,  387 => 160,  384 => 159,  382 => 158,  378 => 156,  374 => 154,  371 => 153,  368 => 152,  366 => 151,  363 => 150,  360 => 149,  357 => 148,  355 => 147,  352 => 146,  349 => 145,  346 => 144,  344 => 143,  341 => 142,  338 => 141,  335 => 140,  333 => 139,  329 => 137,  323 => 135,  321 => 134,  318 => 133,  312 => 131,  310 => 130,  307 => 129,  301 => 127,  299 => 126,  296 => 125,  290 => 123,  288 => 122,  274 => 111,  262 => 101,  255 => 99,  247 => 97,  239 => 95,  237 => 94,  234 => 93,  230 => 92,  224 => 88,  218 => 87,  210 => 85,  202 => 83,  199 => 82,  195 => 81,  189 => 77,  183 => 76,  180 => 75,  172 => 73,  166 => 71,  163 => 70,  160 => 69,  152 => 67,  146 => 65,  144 => 64,  141 => 63,  138 => 62,  134 => 61,  128 => 58,  124 => 56,  118 => 55,  110 => 53,  102 => 51,  99 => 50,  95 => 49,  90 => 46,  88 => 45,  74 => 34,  63 => 25,  57 => 23,  55 => 22,  44 => 14,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <!-- Page Layout here -->*/
/*             <br/>*/
/*             <div class="row">*/
/*                 <nav>*/
/*                     <div class="nav-wrapper z-depth-1">*/
/*                         <div class="col s12  blue darken-1 ">*/
/*                             <a href="#!" class="breadcrumb">Propiedades</a>*/
/*                             <a href="#!" class="breadcrumb">{{ titulo }}</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/* */
/*                 {% if asesorpermisos.altapropiedad == true %}*/
/*                     <a href="{{ path('inmueble_new', {}) }}" class="waves-effect waves-light btn blue darken-1 right"><i class="material-icons left">add</i>Nueva Propiedad</a>*/
/*                 {% endif %}*/
/* */
/*                 <button onclick="imprimir();" target="_blank" class="waves-effect waves-light btn blue darken-1 right" style="margin-right: 10px">Imprimir</button>*/
/*                 <script>*/
/*                     function imprimir() {*/
/*                         txtID = document.getElementById('txtID');*/
/*                         selZonas = document.getElementById('selZonas');*/
/*                         selAsesores = document.getElementById('selAsesores');*/
/*                         selTiposInmueble = document.getElementById('selTiposInmueble');*/
/*                         selOperacionesInmueble = document.getElementById('selOperacionesInmueble');*/
/*                         url = '{{ path(url_imprimir, {}) }}?idAsesor=' + selAsesores.options[selAsesores.selectedIndex].value +*/
/*                                 '&idTipoInmueble=' + selTiposInmueble.options[selTiposInmueble.selectedIndex].value +*/
/*                                 '&idZona=' + selZonas.options[selZonas.selectedIndex].value +*/
/*                                 '&id=' + txtID.value +*/
/*                                 '&idOperacionInmueble=' + selOperacionesInmueble.options[selOperacionesInmueble.selectedIndex].value;*/
/*                         window.open(url);*/
/*                     }*/
/*                 </script>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 {% if asesores is not null %}*/
/*                 <div class="input-field col s6">*/
/*                     <select id="selAsesores">*/
/*                     <option value="-1" disabled selected>Seleccione un asesor</option>*/
/*                     {% for asesor in asesores %}*/
/*                         {% if asesor.id == idAsesor %}*/
/*                         <option value="{{ asesor.id }}" selected>{{ asesor.nombre }}</option>*/
/*                         {% else %}*/
/*                             <option value="{{ asesor.id }}">{{ asesor.nombre }}</option>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     </select>*/
/* */
/*                     <input id="txtID" placeholder="ID, Nombre identificación" value="{{ id }}"/>*/
/* */
/*                     <select id="selZonas">*/
/*                         {% for zona in zonas %}*/
/*                             {% if zona.idZona == idZona %}*/
/* */
/*                                 {% if zona.idZona == 0 %}*/
/*                                     <option value="{{ zona.idZona }}">Seleccione una zona</option>*/
/*                                 {% else %}*/
/*                                     <option value="{{ zona.idZona }}" selected>{{ zona.nombre }}</option>*/
/*                                 {% endif %}*/
/*                             {% else %}*/
/*                                 {% if zona.idZona == 0 %}*/
/*                                     <option value="{{ zona.idZona }}">Seleccione una zona</option>*/
/*                                 {% else %}*/
/*                                     <option value="{{ zona.idZona }}">{{ zona.nombre }}</option>*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </select>*/
/* */
/*                     <select id="selTiposInmueble">*/
/*                         <option value="-1" disabled selected>Seleccione un tipo de inmueble</option>*/
/*                         {% for tipoInmueble in tiposInmueble %}*/
/*                             {% if tipoInmueble.idTipoInmueble == idTipoInmueble %}*/
/*                                 <option value="{{ tipoInmueble.idTipoInmueble }}" selected>{{ tipoInmueble.nombre }}</option>*/
/*                             {% else %}*/
/*                                 <option value="{{ tipoInmueble.idTipoInmueble }}">{{ tipoInmueble.nombre }}</option>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </select>*/
/* */
/*                     <select id="selOperacionesInmueble">*/
/*                         <option value="-1" disabled selected>Seleccione una operación</option>*/
/*                         {% for operacionInmueble in operacionesInmueble %}*/
/* */
/*                             {% if operacionInmueble.idOperacionInmueble == idOperacionInmueble %}*/
/*                                 <option value="{{ operacionInmueble.idOperacionInmueble }}" selected>{{ operacionInmueble.nombre }}</option>*/
/*                             {% else %}*/
/*                                 <option value="{{ operacionInmueble.idOperacionInmueble }}">{{ operacionInmueble.nombre }}</option>*/
/*                             {% endif %}*/
/* */
/*                         {% endfor %}*/
/*                     </select>*/
/* */
/*                     <button type="button" onclick="buscar();" class="waves-effect waves-light btn blue darken-1 right">Filtrar</button>*/
/*                     <script>*/
/*                         function buscar() {*/
/*                             txtID = document.getElementById('txtID');*/
/*                             selAsesores = document.getElementById('selAsesores');*/
/*                             selZonas = document.getElementById('selZonas');*/
/*                             selTiposInmueble = document.getElementById('selTiposInmueble');*/
/*                             selOperacionesInmueble = document.getElementById('selOperacionesInmueble');*/
/*                             url = '{{ path(url, {}) }}?idAsesor=' + selAsesores.options[selAsesores.selectedIndex].value +*/
/*                                     '&idTipoInmueble=' + selTiposInmueble.options[selTiposInmueble.selectedIndex].value +*/
/*                                     '&idZona=' + selZonas.options[selZonas.selectedIndex].value +*/
/*                                     '&id=' + txtID.value +*/
/*                                     '&idOperacionInmueble=' + selOperacionesInmueble.options[selOperacionesInmueble.selectedIndex].value;*/
/*                             window.location = url;*/
/*                         }*/
/*                     </script>*/
/*                 </div>*/
/*                 <div class="input-field col s6">*/
/* */
/*                     {% if titulo != 'Inactivas' %}*/
/*                     <a href="{{ path('inmueble_indexinactivos', {}) }}" class="right">Ver propiedades inactivas</a><br>*/
/*                     {% endif %}*/
/* */
/*                     {% if titulo != 'Por vencer en 45 días' %}*/
/*                     <a href="{{ path('inmueble_indexenrentavencimiento', {}) }}" class="right">Ver por vencer en 45 días</a><br>*/
/*                     {% endif %}*/
/* */
/*                     {% if titulo != 'En contrato de renta' %}*/
/*                     <a href="{{ path('inmueble_indexenrenta', {}) }}" class="right">Ver propiedades en contrato de renta</a><br>*/
/*                     {% endif %}*/
/* */
/*                     {% if titulo != 'Activas' %}*/
/*                     <a href="{{ path('inmueble_index', {}) }}" class="right">Ver propiedades activas</a>*/
/*                     {% endif %}*/
/* */
/* */
/*                     {% if titulo == 'Inactivas' %}*/
/*                         {% set pathurl = 'inmueble_indexinactivos' %}*/
/*                     {% endif %}*/
/* */
/*                     {% if titulo == 'Por vencer en 45 días' %}*/
/*                         {% set pathurl = 'inmueble_indexenrentavencimiento' %}*/
/*                     {% endif %}*/
/* */
/*                     {% if titulo == 'En contrato de renta' %}*/
/*                         {% set pathurl = 'inmueble_indexenrenta' %}*/
/*                     {% endif %}*/
/* */
/*                     {% if titulo == 'Activas' %}*/
/*                         {% set pathurl = 'inmueble_index' %}*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*             {% if numpaginas is defined %}*/
/*                 {% if numpaginas>0 %}*/
/*                     <div class="row">*/
/*                         <ul class="pagination">*/
/*                             {% if paginaactual != 1 %}*/
/*                                 <li class="waves-effect"><a onclick="window.location ='{{ path(pathurl, {}) }}?pagina={{ paginaactual-1 }}' + parametrosBusqueda();"><i class="material-icons">chevron_left</i></a></li>*/
/*                             {% endif %}*/
/* */
/*                             {% for p in 1..numpaginas %}*/
/*                                 {% if p == paginaactual %}*/
/*                                     <li class="active blue darken-1"><a href="#!">{{ p }}</a></li>*/
/*                                 {% else %}*/
/*                                     <li class="waves-effect"><a onclick="window.location = '{{ path(pathurl, {}) }}?pagina={{ p }}' + parametrosBusqueda();">{{ p }}</a></li>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/* */
/*                             {% if paginaactual != numpaginas %}*/
/*                                 <li class="waves-effect"><a onclick="window.location = '{{ path(pathurl, {}) }}?pagina={{ paginaactual+1 }}' + parametrosBusqueda();"><i class="material-icons">chevron_right</i></a></li>*/
/*                             {% endif %}*/
/* */
/*                             <script>*/
/*                                 function parametrosBusqueda() {*/
/*                                     txtID = document.getElementById('txtID');*/
/*                                     selAsesores = document.getElementById('selAsesores');*/
/*                                     selZonas = document.getElementById('selZonas');*/
/*                                     selTiposInmueble = document.getElementById('selTiposInmueble');*/
/*                                     selOperacionesInmueble = document.getElementById('selOperacionesInmueble');*/
/*                                     url = '&idAsesor=' + selAsesores.options[selAsesores.selectedIndex].value +*/
/*                                             '&idTipoInmueble=' + selTiposInmueble.options[selTiposInmueble.selectedIndex].value +*/
/*                                             '&idZona=' + selZonas.options[selZonas.selectedIndex].value +*/
/*                                             '&id=' + txtID.value +*/
/*                                             '&idOperacionInmueble=' + selOperacionesInmueble.options[selOperacionesInmueble.selectedIndex].value;*/
/*                                     //alert(url);*/
/*                                     return url;*/
/*                                 }*/
/*                             </script>*/
/*                         </ul>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/*             <div class="row">*/
/*                 <table class="striped">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th data-field="id"><p>Propiedad</p></th>*/
/*                         <th data-field="id"></th>*/
/*                         <th><p>Operaciones</p></th>*/
/*                     </tr>*/
/*                     </thead>*/
/* */
/*                     <tbody>*/
/*                     {% set index=0 %}*/
/*                     {% for inmueble in inmuebles %}*/
/*                         <tr id="tr{{ inmueble.idInmueble }}">*/
/*                             <td>*/
/*                                 {% if (inmueble.Imagenes|length>0) %}*/
/*                                     <img class="imginmueble" src="{{ inmueble.Imagenes[0].getWebPath() }}">*/
/*                                 {% endif %}*/
/*                                 <p><i class="material-icons left">camera_alt</i>{{ inmueble.imagenes | length }}</p>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <h5>ID: {{ inmueble.legacyid }} {{ inmueble.nombreid }} </h5>*/
/*                                 <h5>{{ inmueble.idTipoInmueble.nombre }} en {{ inmueble.idOperacionInmueble.nombre }}</h5>*/
/*                                 <ul>*/
/*                                     <li><i class="material-icons left">location_on</i>{{ inmueble.idMunicipio.nombre }}, {{ inmueble.idEstado.nombre }}, {{ inmueble.calle }}</li>*/
/*                                     <li>Zona: {{ inmueble.idZona.nombre }}</li>*/
/*                                     <br>*/
/*                                     <li>{{ inmueble.idMoneda.simbolo }} {{inmueble.precio|number_format(2, '.', ',')}}</li>*/
/*                                     <br>*/
/* */
/*                                     {% if inmueble.recamaras is not null %}*/
/*                                     <li>{{ inmueble.recamaras }} Recámaras</li>*/
/*                                     {% endif %}*/
/* */
/*                                     {% if inmueble.banos is not null %}*/
/*                                     <li>{{ inmueble.banos }} Baño(s)</li>*/
/*                                     {% endif %}*/
/* */
/*                                     {% if inmueble.mediobanos is not null %}*/
/*                                         {{ inmueble.mediobanos }} Medios Baño(s)<br>*/
/*                                     {% endif %}*/
/* */
/*                                     {% if inmueble.metrosconstruccion is not null %}*/
/*                                         {{ inmueble.metrosconstruccion }} Metros de Construcción<br>*/
/*                                     {% endif %}*/
/* */
/*                                     {% if inmueble.metrosterreno is not null %}*/
/*                                         {{ inmueble.metrosterreno }} Metros de Terreno<br>*/
/*                                     {% endif %}*/
/* */
/*                                     {% if inmueble.comision is not null %}*/
/*                                     <li>Comisión: {{ inmueble.comision | number_format(2, '.', ',') }}*/
/*                                         {% if inmueble.idOperacionInmueble.idOperacionInmueble == 2 %}*/
/*                                             Mensualidad(es)*/
/*                                         {%  else %}*/
/*                                             %*/
/*                                         {%  endif %}*/
/*                                     </li>*/
/*                                     {% endif %}*/
/* */
/*                                     {% if inmueble.plantas > 0 %}*/
/*                                         <li>{{ inmueble.plantas }} Plantas</li>*/
/*                                     {% endif %}*/
/* */
/*                                     <br>*/
/*                                     <li>Alta por: {{ inmueble.idUsuario.nombre }}</li>*/
/* */
/*                                     <br>*/
/*                                     {% if inmueble.fechaModificacion is not null %}*/
/*                                     <li>Modificado el {{ inmueble.fechaModificacion | date('d/m/Y') }}</li>*/
/*                                     <li>Por {{ inmueble.idUsuariomodifico.nombre }}</li>*/
/*                                     {% endif %}*/
/* */
/*                                     {% if inmueble.porcentajecompartir is not null %}*/
/*                                     <li>Porcentaje a compartir: {{ inmueble.porcentajecompartir }} %</li>*/
/*                                     {% endif %}*/
/* */
/*                                     <li>*/
/*                                         <p>Visitas: {{ visitas[index] }}</p>*/
/*                                         {% set index = index + 1 %}*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <div>*/
/*                                 <a href="{{ path ('inmueble_detalle', {id: inmueble.idInmueble }) }}" class="tooltipped" data-tooltip="Detalle" data-position="top"><i class="material-icons left">visibility</i></a>*/
/*                                 <a href="{{ path ('inmueble_show', {'id': inmueble.idInmueble}) }}" target="_blank" class="tooltipped" data-tooltip="Vista de impresión" data-position="top"><i class="material-icons left">print</i></a>*/
/*                                 <a href="#" onclick="var url; if (window.location.href.indexOf('#') > 0) { url = window.location.href.substring(0, window.location.href.indexOf('#')); } else { url = window.location.href; }  window.location.href='{{ path('prospecto_asignarpropiedad', {}) }}?idInmueble={{ inmueble.idInmueble }}&url=' + url.replace(/&/g, 'AMP') + 'SHARPtr{{ inmueble.idInmueble }}';" class="tooltipped" data-tooltip="Agregar prospecto" data-position="top"><i class="material-icons left">person_add</i></a>*/
/* */
/*                                 {% if asesorpermisos.editarpropiedad == true %}*/
/*                                     {% if (ida == inmueble.idUsuario.id)  or (is_granted('ROLE_SUPERADMIN') == true) %}*/
/*                                         <a href="{{ path ('inmueble_edit', {'id': inmueble.idInmueble}) }}" class="tooltipped" data-tooltip="Editar" data-position="top"><i class="material-icons left">mode_edit</i></a>*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/* */
/*                                 {% if (ida == inmueble.idUsuario.id) or (is_granted('ROLE_SUPERADMIN') == true) %}*/
/*                                     <a href="{{ path ('inmuebleimagen_index', {}) }}?idInmueble={{ inmueble.idInmueble }}" class="tooltipped" data-tooltip="Fotografias" data-position="top"><i class="material-icons left">photo_library</i></a>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if (ida == inmueble.idUsuario.id) or (is_granted('ROLE_SUPERADMIN') == true) %}*/
/*                                     <a href="{{ path ('archivo_index', {}) }}?idInmueble={{ inmueble.idInmueble }}" class="tooltipped" data-tooltip="Subir archivos" data-position="top"><i class="material-icons left">description</i></a>*/
/*                                 {% endif %}*/
/* */
/*                                 <a href="#" onclick="var url; if (window.location.href.indexOf('#') > 0) { url = window.location.href.substring(0, window.location.href.indexOf('#')); } else { url = window.location.href; } window.location.href='{{ path('ids_index', {})  }}?idInmueble={{ inmueble.idInmueble }}&prospectos=1&url=' + url.replace(/&/g, 'AMP') + 'SHARPtr{{ inmueble.idInmueble }}';" class="tooltipped" data-tooltip="Enviar propiedad" data-position="top"><i class="material-icons left">email</i></a>*/
/* */
/*                                 <!--a href="{{ path ('inmueble_keywords', {'id': inmueble.idInmueble}) }}"><i class="material-icons left">text_format</i></a-->*/
/*                                 </div>*/
/* */
/*                                 <div>*/
/*                                 {% if (ida == inmueble.idUsuario.id) or (is_granted('ROLE_SUPERADMIN') == true) %}*/
/*                                     {% if (inmueble.idPropietario is not null)  %}*/
/*                                         <a href="{{ path ('propietario_edit', {'id': inmueble.idPropietario.id}) }}" class="tooltipped" data-tooltip="Asignar propietario" data-position="top"><i class="material-icons left">account_box</i></a>*/
/*                                     {% else %}*/
/*                                         <a href="{{ path ('propietario_new', {}) }}?idInmueble={{ inmueble.idInmueble }}" class="tooltipped" data-tooltip="Asignar propietario" data-position="top"><i class="material-icons left">account_box</i></a>*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/* */
/*                                 {% if (ida == inmueble.idUsuario.id) or (is_granted('ROLE_SUPERADMIN') == true) %}*/
/*                                     <a href="{{ path('inmueble_clonar', {'id':inmueble.idInmueble}) }}" class="tooltipped" data-tooltip="Clonar propiedad" data-position="top" onclick="return confirm('¿Realmente desea clonar esta propiedad?');">*/
/*                                         <i class="material-icons left">done_all</i>*/
/*                                     </a>*/
/*                                 {% endif %}*/
/* */
/*                                 <a href="{{ path('mensaje_new', {}) }}?tipoMensaje=3&idInmueble={{ inmueble.idInmueble }}&idAsesor={{ inmueble.idUsuario.id }}" class="tooltipped" data-tooltip="Contactar asesor" data-position="top">*/
/*                                     <i class="material-icons left">question_answer</i>*/
/*                                 </a>*/
/*                                 <a href="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=http://104.236.50.14/PD/web/app.php/buscarinmueble/showfs/{{ inmueble.idInmueble }}" class="tooltipped" data-tooltip="Código QR" data-position="top" target="_blank">*/
/*                                     <i class="material-icons left">settings_overscan</i>*/
/*                                 </a>*/
/*                                 <a href="#" onclick="var url; if (window.location.href.indexOf('#') > 0) { url = window.location.href.substring(0, window.location.href.indexOf('#')); } else { url = window.location.href; } window.location.href='{{ path('ids_index', {})  }}?idInmueble={{ inmueble.idInmueble }}&prospectos=0&url=' + url.replace(/&/g, 'AMP') + 'SHARPtr{{ inmueble.idInmueble }}';" class="tooltipped" data-tooltip="Enviar a un amigo" data-position="top">*/
/*                                     <i class="material-icons left">send</i>*/
/*                                 </a>*/
/* */
/*                                 <a target="_blank" class="tooltipped" data-tooltip="Guardar como PDF" data-position="top" href="http://www.html2pdf.it/?url={{ rootname }}PD/web/app.php/buscarinmueble/{{ inmueble.idInmueble }}/pdf">*/
/*                                     <i class="material-icons left">file_download</i>*/
/*                                 </a>*/
/* */
/*                                 {% if ida == inmueble.idUsuario.id %}*/
/*                                     <a href="#!" onclick="window.location.href = '{{ path('usuario_edit', {}) }}';" class="tooltipped" data-tooltip="Logo de la empresa" data-position="top">*/
/*                                         <i class="material-icons left">beenhere</i>*/
/*                                     </a>*/
/*                                 {% endif %}*/
/* */
/*                                 <a href="{{ path('tarea_new2', {}) }}" class="tooltipped" data-tooltip="Agendar bitácora" data-position="top">*/
/*                                     <i class="material-icons left">date_range</i>*/
/*                                 </a>*/
/* */
/*                                 {% if (ida == inmueble.idUsuario.id) or (is_granted('ROLE_SUPERADMIN') == true) %}*/
/*                                     <!--a href="#!" onclick="publicar();" class="tooltipped" data-tooltip="Publicar mercado libre" data-position="top">*/
/*                                         <i class="material-icons left">sync</i>*/
/*                                     </a-->*/
/*                                 {% endif %}*/
/* */
/*                                 {% if (ida == inmueble.idUsuario.id) or (is_granted('ROLE_SUPERADMIN') == true) %}*/
/*                                     <a href="{{ path('inmueble_delete', {'id':inmueble.idInmueble}) }}" class="tooltipped" data-tooltip="Borrar propiedad" data-position="top" onclick="return confirm('¿Realmente desea borrar esta propiedad?');">*/
/*                                         <i class="material-icons left">delete</i>*/
/*                                     </a>*/
/*                                 {% endif %}*/
/* */
/*                                 </div>*/
/*                                 <br>*/
/*                                 <div>*/
/*                                 <p>Alta: {{ inmueble.fechaCreacion | date('d/m/Y') }}</p>*/
/* */
/*                                 {% if inmueble.activo == true %}*/
/*                                     <p>Activo<i class="material-icons left">play_circle_outline</i></p>*/
/* */
/*                                     {% if asesorpermisos.inactivarpropiedad == true %}*/
/*                                         <a href="{{ path('inmueble_switchactivo', {'id':inmueble.idInmueble}) }}">Desactivar</a>*/
/*                                     {% endif %}*/
/*                                 {% else %}*/
/*                                     <p>Inactivo<i class="material-icons left">not_interested</i></p>*/
/* */
/*                                     {% if asesorpermisos.inactivarpropiedad == true %}*/
/*                                         <a href="{{ path('inmueble_switchactivo', {'id':inmueble.idInmueble}) }}">Activar</a>*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/*                                 </div>*/
/* */
/*                                 <p>*/
/*                                     <a href="#" onclick="abrirFacebookModal('http://104.236.50.14/PD/web/app.php/buscarinmueble/showfs/{{ inmueble.idInmueble }}');">*/
/*                                         <img src="/PDCRM/web/images/img_facebook.jpg" alt="" class="responsive-img"/>*/
/*                                     </a>*/
/*                                 </p>*/
/* */
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/* */
/*                 <!-- Modal Structure -->*/
/*                 <div id="modalFacebook" class="modal">*/
/*                     <div class="modal-content">*/
/*                         <iframe id="frmFacebook" style="width:100%; height:300px; margin-top:8px; padding-top:0px" frameBorder="0"></iframe>*/
/*                     </div>*/
/*                     <div class="modal-footer">*/
/*                         <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/* */
/*             {% if numpaginas is defined %}*/
/*              {% if numpaginas>0 %}*/
/*                 <div class="row">*/
/*                     <ul class="pagination">*/
/*                         {% if paginaactual != 1 %}*/
/*                             <li class="waves-effect"><a onclick="window.location ='{{ path(pathurl, {}) }}?pagina={{ paginaactual-1 }}' + parametrosBusqueda();"><i class="material-icons">chevron_left</i></a></li>*/
/*                         {% endif %}*/
/* */
/*                         {% for p in 1..numpaginas %}*/
/*                             {% if p == paginaactual %}*/
/*                                 <li class="active blue darken-1"><a href="#!">{{ p }}</a></li>*/
/*                             {% else %}*/
/*                                 <li class="waves-effect"><a onclick="window.location = '{{ path(pathurl, {}) }}?pagina={{ p }}' + parametrosBusqueda();">{{ p }}</a></li>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/* */
/*                         {% if paginaactual != numpaginas %}*/
/*                             <li class="waves-effect"><a onclick="window.location = '{{ path(pathurl, {}) }}?pagina={{ paginaactual+1 }}' + parametrosBusqueda();"><i class="material-icons">chevron_right</i></a></li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 </div>*/
/*              {% endif %}*/
/*             {% endif %}*/
/* */
/*         </div>*/
/*     </div>*/
/*     */
/*     <script>*/
/*         function abrirFacebookModal(url)*/
/*         {*/
/*             frame = document.getElementById('frmFacebook');*/
/*             */
/*             frame.src = '{{ path('facebook_publicar', {}) }}?url=' + url;*/
/*             */
/*             $('#modalFacebook').openModal();*/
/*         }*/
/* */
/*         function abrirURL($url)*/
/*         {*/
/*             var iframe = document.getElementById('iframePrincipal');*/
/*             iframe.style.display='';*/
/*             iframe.src = $url;*/
/* */
/*             $('html, body').animate({ scrollTop: 0 }, 'slow');*/
/*         }*/
/* */
/*         $(document).ready(function() {*/
/*             $('select').material_select();*/
/*         });*/
/* */
/* */
/* */
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/*     <style>*/
/*         body {*/
/*             background: white;*/
/*             height:100vh;*/
/*         }*/
/*         p*/
/*         {*/
/*             font-size: small;*/
/*         }*/
/*         .imginmueble*/
/*         {*/
/*             width: 160px;*/
/*             height: 128px;*/
/*         }*/
/* */
/*         .tooltip {*/
/*             position: relative;*/
/*             display: inline-block;*/
/*             border-bottom: 1px dotted darkblue;*/
/*         }*/
/* */
/*         .tooltip .tooltiptext {*/
/*             visibility: hidden;*/
/*             width: 120px;*/
/*             background-color: white;*/
/*             color: cornflowerblue;*/
/*             text-align: center;*/
/*             border-radius: 6px;*/
/*             padding: 5px 0;*/
/* */
/*             /* Position the tooltip *//* */
/*             position: absolute;*/
/*             z-index: 1;*/
/*         }*/
/* */
/*         .tooltip:hover .tooltiptext {*/
/*             visibility: visible;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
