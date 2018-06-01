<?php

/* :inmueble:edit.html.twig */
class __TwigTemplate_f4911327eba0f822860a6b15df607f671962a674f280db655b1841e0e6f75295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":inmueble:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseabc.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "forms/custom_checkbox_widget.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"container\">
    <br/>
    <div class=\"row\">
        <nav>
            <div class=\"nav-wrapper z-depth-1\">
                <div class=\"col s12  blue darken-1 \">
                    <a href=\"#\" class=\"breadcrumb\">Propiedades</a>
                    <a href=\"#\" class=\"breadcrumb\">Editar</a>
                </div>
            </div>
        </nav>
    </div>
    <br/>
    <div class=\"row\">
        <div class=\"formcontainer\">
            <div>
                ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("onsubmit" => "document.getElementById(\"progressGuardar\").style.display=\"\"; document.getElementById(\"inmueble_destacado\").disabled=\"\"; return true;")));
        echo "

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "oficina", array()), 'widget');
        echo "
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "oficina", array()), 'label');
        echo "
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "oficina", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'widget');
        echo "
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'label');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreid", array()), 'widget');
        echo "
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreid", array()), 'label');
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreid", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        <label>ID: ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "legacyid", array()), "html", null, true);
        echo "</label>
                        ";
        // line 47
        echo "                        ";
        // line 48
        echo "                        ";
        // line 49
        echo "                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6 activelabel\">
                        <div class=\"datepicker\">
                            Fecha de alta:
                            <input type=\"text\" id=\"inmueble_fechaalta\" name=\"inmueble_fechaalta\" required=\"required\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["fechaAlta"]) ? $context["fechaAlta"] : null), "html", null, true);
        echo "\" />
                            <a id=\"fechaError\" style=\"visibility:hidden;color:black\">Fecha inválida<br></a>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'widget');
        echo "
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'label');
        echo "
                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'widget');
        echo "
                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'label');
        echo "
                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'widget');
        echo "
                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'label');
        echo "
                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'errors');
        echo "
                    </div>
                </div>

                <div style=\"display:none\">";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'widget');
        echo "
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s4\">
                        <input id=\"txtEstado\" type=\"text\" value=\"\" />

                        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'label');
        echo "
                        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'errors');
        echo "
                    </div>

                    <div class=\"input-field col s4\">
                        ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'widget');
        echo "
                        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'label');
        echo "
                        ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'errors');
        echo "
                    </div>

                    <div class=\"input-field col s4\">
                        ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_zona", array()), 'widget');
        echo "
                        ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_zona", array()), 'label');
        echo "
                        ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_zona", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s8\">
                        ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "calle", array()), 'widget');
        echo "
                        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "calle", array()), 'label');
        echo "
                        ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "calle", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s2\">
                        ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numero", array()), 'widget');
        echo "
                        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numero", array()), 'label');
        echo "
                        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numero", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s2\">
                        ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numeroint", array()), 'widget');
        echo "
                        ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numeroint", array()), 'label');
        echo "
                        ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numeroint", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_primera", array()), 'widget');
        echo "
                        ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_primera", array()), 'label');
        echo "
                        ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_primera", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_segunda", array()), 'widget');
        echo "
                        ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_segunda", array()), 'label');
        echo "
                        ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_segunda", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">

                </div>

                <div class=\"row\">

                    <div class=\"input-field col s6\">
                        ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'widget');
        echo "
                        ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'label');
        echo "
                        ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()), 'widget');
        echo "
                        ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()), 'label');
        echo "
                        ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreedificio", array()), 'widget');
        echo "
                        ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreedificio", array()), 'label');
        echo "
                        ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreedificio", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreplaza", array()), 'widget');
        echo "
                        ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreplaza", array()), 'label');
        echo "
                        ";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreplaza", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'widget');
        echo "
                        ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'label');
        echo "
                        ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <button class=\"btn btn-primary\" type=\"button\" onclick=\"buscarDireccion();\">Ubicar dirección en mapa</button>

                    <a id=\"txtResetBusqueda\" style=\"display:none;\" >
                        <i class=\"material-icons\">warning</i>Ha cambiado la dirección, haga clic nuevamente en el botón para ubicar la dirección en el mapa.
                    </a>

                    <div id=\"modalDirecciones\" style=\"display:none\">
                        <h5>Seleccione la ubicación deseada:</h5>
                        <div id=\"panelDirecciones\" hidden=\"hidden\">
                            <ul id=\"lvwDirecciones\" class=\"collection\"></ul>
                        </div>
                    </div>

                    ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "publicarmapa", array()), 'widget');
        echo "
                    ";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "publicarmapa", array()), 'label');
        echo "
                    ";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "publicarmapa", array()), 'errors');
        echo "

                    <div id=\"map-canvas\" style=\"height:400px\" class=\"form-control\"></div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 200
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latlng", array()), 'widget');
        echo "
                        ";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latlng", array()), 'errors');
        echo "
                    </div>
                </div>


                <div class=\"row\">
                    <div class=\"input-field col s9\">
                        ";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipoterreno", array()), 'widget');
        echo "
                        ";
        // line 209
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipoterreno", array()), 'label');
        echo "
                        ";
        // line 210
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipoterreno", array()), 'errors');
        echo "
                    </div>

                </div>

                <div class=\"row\">
                    <div class=\"input-field col s4\">
                        ";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'widget');
        echo "
                        ";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'label');
        echo "
                        ";
        // line 219
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosfrente", array()), 'widget');
        echo "
                        ";
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosfrente", array()), 'label');
        echo "
                        ";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosfrente", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosfondo", array()), 'widget');
        echo "
                        ";
        // line 228
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosfondo", array()), 'label');
        echo "
                        ";
        // line 229
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosfondo", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s4\">
                        ";
        // line 235
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'widget');
        echo "
                        ";
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'label');
        echo "
                        ";
        // line 237
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosjardin", array()), 'widget');
        echo "
                        ";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosjardin", array()), 'label');
        echo "
                        ";
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosjardin", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 245
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterraza", array()), 'widget');
        echo "
                        ";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterraza", array()), 'label');
        echo "
                        ";
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterraza", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s3\">
                        ";
        // line 253
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'widget');
        echo "
                        ";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'label');
        echo "
                        ";
        // line 255
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s3\">
                        ";
        // line 258
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "banos", array()), 'widget');
        echo "
                        ";
        // line 259
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "banos", array()), 'label');
        echo "
                        ";
        // line 260
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "banos", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s3\">
                        ";
        // line 263
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mediobanos", array()), 'widget');
        echo "
                        ";
        // line 264
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mediobanos", array()), 'label');
        echo "
                        ";
        // line 265
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mediobanos", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s3\">
                        ";
        // line 268
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'widget');
        echo "
                        ";
        // line 269
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'label');
        echo "
                        ";
        // line 270
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s4\">
                        ";
        // line 276
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "espacioautos", array()), 'widget');
        echo "
                        ";
        // line 277
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "espacioautos", array()), 'label');
        echo "
                        ";
        // line 278
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "espacioautos", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 281
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "espaciovisitas", array()), 'widget');
        echo "
                        ";
        // line 282
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "espaciovisitas", array()), 'label');
        echo "
                        ";
        // line 283
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "espaciovisitas", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 286
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_cuartoservicio", array()), 'widget');
        echo "
                        ";
        // line 287
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_cuartoservicio", array()), 'label');
        echo "
                        ";
        // line 288
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_cuartoservicio", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 294
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "antiguedad", array()), 'widget');
        echo "
                        ";
        // line 295
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "antiguedad", array()), 'label');
        echo "
                        ";
        // line 296
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "antiguedad", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s4 \">
                        ";
        // line 302
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_instalacionelectrica", array()), 'widget');
        echo "
                        ";
        // line 303
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_instalacionelectrica", array()), 'label');
        echo "
                        ";
        // line 304
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_instalacionelectrica", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 307
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "aireacondicionado", array()), 'widget');
        echo "
                        ";
        // line 308
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "aireacondicionado", array()), 'label');
        echo "
                        ";
        // line 309
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "aireacondicionado", array()), 'errors');
        echo "
                    </div>

                    <div class=\"input-field col s4\">
                        ";
        // line 313
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipoclima", array()), 'widget');
        echo "
                        ";
        // line 314
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipoclima", array()), 'label');
        echo "
                        ";
        // line 315
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipoclima", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 321
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "restricciones", array()), 'widget');
        echo "
                        ";
        // line 322
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "restricciones", array()), 'label');
        echo "
                        ";
        // line 323
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "restricciones", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s3\">
                        ";
        // line 329
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'widget');
        echo "
                        ";
        // line 330
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'label');
        echo "
                        ";
        // line 331
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s3\">
                        ";
        // line 334
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'widget');
        echo "
                        ";
        // line 335
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'label');
        echo "
                        ";
        // line 336
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s2\">
                        <p id=\"lblOperacion\"></p>
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 342
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cuotamantenimiento", array()), 'widget');
        echo "
                        ";
        // line 343
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cuotamantenimiento", array()), 'label');
        echo "
                        ";
        // line 344
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cuotamantenimiento", array()), 'errors');
        echo "
                    </div>
                </div>

                <div id=\"divPreciosRenta\" class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 350
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciohasta", array()), 'widget');
        echo "
                        ";
        // line 351
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciohasta", array()), 'label');
        echo "
                        ";
        // line 352
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciohasta", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s3\">
                        ";
        // line 358
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comision", array()), 'widget');
        echo "
                        ";
        // line 359
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comision", array()), 'label');
        echo "
                        ";
        // line 360
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comision", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s3\">
                        <label id=\"lblComision\">%</label>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s3\">
                        ";
        // line 369
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "porcentajecompartir", array()), 'widget');
        echo "
                        ";
        // line 370
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "porcentajecompartir", array()), 'label');
        echo "
                        ";
        // line 371
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "porcentajecompartir", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s9\">
                        ";
        // line 377
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array()), 'label');
        echo "
                        <br/><br/>
                        ";
        // line 379
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array()), 'widget');
        echo "
                        ";
        // line 380
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\"/>

                <div class=\"row\">
                    <div class=\"input-field col s3\">
                        ";
        // line 388
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "destacado", array()), 'widget');
        echo "
                        ";
        // line 389
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "destacado", array()), 'label');
        echo "
                        ";
        // line 390
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "destacado", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s3\">
                        ";
        // line 396
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cerrado", array()), 'widget');
        echo "
                        ";
        // line 397
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cerrado", array()), 'label');
        echo "
                        ";
        // line 398
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cerrado", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\" style=\"display: none;\">
                    <div class=\"input-field col s3\">
                        ";
        // line 404
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activo", array()), 'widget');
        echo "
                        ";
        // line 405
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activo", array()), 'label');
        echo "
                        ";
        // line 406
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activo", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 412
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "privado", array()), 'widget');
        echo "
                        ";
        // line 413
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "privado", array()), 'label');
        echo "
                        ";
        // line 414
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "privado", array()), 'errors');
        echo "
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 420
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "youtube", array()), 'widget');
        echo "
                        ";
        // line 421
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "youtube", array()), 'label');
        echo "
                        ";
        // line 422
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "youtube", array()), 'errors');
        echo "
                    </div>
                </div>


                <input type=\"submit\" value=\"Guardar\" class=\"btn blue darken-4 right\" onclick=\"if (fechaHoraConFormato()) { doingPosting=true; res = validarEstado(); if (res) { return true;} else { doingPosting=false; return false;} } else { return false; }\"/>
                <a href=\"";
        // line 428
        echo $this->env->getExtension('routing')->getPath("inmueble_index", array());
        echo "\" class=\"btn blue darken-4 right\" style=\"margin-right: 10px\">Cancelar</a>

                ";
        // line 430
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>

            <div id=\"progressGuardar\" style=\"display:none\">
                <label>Guardando, espere un momento por favor...</label>
                <div id=\"divProgress2\" class=\"progress\" >
                    <div class=\"indeterminate\"></div>
                </div>
            </div>

        </div>
    </div>

    <style>
        body{
            background-color: white;
            height: 100vh;
        }

        #inmueble_zonas label
        {
            margin-right: 20px;
        }

        #inmueble_caracteristicas label
        {
            margin-right: 20px;
        }
    </style>

    <script type=\"text/javascript\"
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCmOj1JP2fKLOHkJSKhAdrIVOJlovubgkY\">
    </script>

    ";
        // line 464
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "840e211_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_840e211_0") : $this->env->getExtension('asset')->getAssetUrl("js/840e211_part_1_mapsIntegracion_1.js");
            // line 465
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
        // line 467
        echo "
    <script>

        var labels = document.getElementsByTagName('LABEL');
        for (var i = 0; i < labels.length; i++) {
            if (labels[i].htmlFor != '') {
                var elem = document.getElementById(labels[i].htmlFor);
                if (elem)
                    elem.label = labels[i];
            }
        }

        for (i=0; i<";
        // line 479
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array())), "html", null, true);
        echo "; i++)
        {
            var caracteristica = document.getElementById('inmueble_caracteristicas_' + i);

            ";
        // line 483
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["caracteristicasDesc"]) ? $context["caracteristicasDesc"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["caracteristicaDesc"]) {
            // line 484
            echo "
            if (caracteristica.label.innerHTML == '";
            // line 485
            echo twig_escape_filter($this->env, $context["caracteristicaDesc"], "html", null, true);
            echo "')
            {
                caracteristica.checked = true;
            }

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caracteristicaDesc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 491
        echo "        }
    </script>

    <script type=\"text/javascript\">
        doingPosting=false;

        var mapOptions = {
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.TERRAIN
        };
        var direccionResultados = [];
        var direccionActual;

        setMapControl(document.getElementById('map-canvas'), mapOptions);

        ";
        // line 506
        if ( !(null === $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "latlng", array()))) {
            // line 507
            echo "            var latlng = \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "latlng", array()), "html", null, true);
            echo "\";
            var coordenadas = latlng.split(\",\");
            mostrarMarcadorEnMapa2(coordenadas[0], coordenadas[1], \"";
            // line 509
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "nombreid", array()), "html", null, true);
            echo "\");
        ";
        }
        // line 511
        echo "
        function buscarDireccion() {

            var direccion = '';
            if (document.getElementById('inmueble_calle').value != null)
                direccion = direccion + document.getElementById('inmueble_calle').value + ' ';

            if (document.getElementById('inmueble_numero').value != null)
                direccion = direccion + document.getElementById('inmueble_numero').value + ' ';

            if (document.getElementById('inmueble_colonia').value != null &&
                    document.getElementById('inmueble_colonia').value != '')
                direccion = direccion + ' colonia ' + document.getElementById('inmueble_colonia').value + ' ';

            var municipio = document.getElementById('inmueble_id_municipio').options[document.getElementById('inmueble_id_municipio').selectedIndex].innerHTML
            if (municipio != \"Otro\") {
                direccion = direccion + municipio + ' ';
            }

            if (document.getElementById('inmueble_cp').value != null
                    && document.getElementById('inmueble_cp').value != '')
                direccion = direccion +  ' CP ' + document.getElementById('inmueble_cp').value + ' ';

            direccion = direccion + document.getElementById('inmueble_id_estado').options[document.getElementById('inmueble_id_estado').selectedIndex].innerHTML + ' ';
            direccion = direccion + 'México ';

            var posiciones = geocodeDireccion(direccion, direccionCodificada);

            return false;
        }

        function direccionCodificada(operacionExitosa, resultados, mensajeError) {
            var panelDirecciones = document.getElementById('panelDirecciones');
            var lvwDirecciones = document.getElementById('lvwDirecciones');

            if (!operacionExitosa) {
                alert(mensajeError);
                return;
            }
            else {
                // Remover resultados de la anterior busqueda
                resetBusquedaMapa();
            }

            // Mostrar listado de direcciones
            panelDirecciones.hidden = \"\";

            direccionResultados = resultados;
            for (var i = 0; i < resultados.length; i++) {
                var nuevoElemento = document.createElement('a');
                nuevoElemento.setAttribute('href', \"#!\");
                nuevoElemento.setAttribute('id', \"direccionitem\" + i);
                nuevoElemento.setAttribute('class', \"collection-item\");
                nuevoElemento.setAttribute('data-geocode', i);
                nuevoElemento.setAttribute('onclick', \"direccion_onclick(document.getElementById('direccionitem\" + i + \"'));\");
                nuevoElemento.innerHTML = resultados[i].formatted_address;

                lvwDirecciones.appendChild(nuevoElemento);
            }

            document.getElementById('modalDirecciones').style.display='';
        }

        function resetBusquedaMapa() {

            if (doingPosting) return;

            var lvwDirecciones = document.getElementById('lvwDirecciones');

            while (lvwDirecciones.firstChild) {
                lvwDirecciones.removeChild(lvwDirecciones.firstChild);
            }

            removerTodosMarcadoresDeMapa();

            if (document.getElementById('inmueble_latlng').value != null && document.getElementById('inmueble_latlng').value != \"\")
            {
                document.getElementById('txtResetBusqueda').style.display = '';
            }

            document.getElementById('inmueble_latlng').value = null;
        }

        function direccion_onclick(control) {


            removerTodosMarcadoresDeMapa();

            mostrarMarcadorEnMapa(direccionResultados[control.getAttribute('data-geocode')]);

            direccionActual = direccionResultados[control.getAttribute('data-geocode')]

            document.getElementById('inmueble_latlng').value = direccionActual.geometry.location.lat() + ',' +  direccionActual.geometry.location.lng();


            
            document.getElementById('txtResetBusqueda').style.display='none';

            document.getElementById('modalDirecciones').style.display='none';


        }

        function function_onchange() {
            resetBusquedaMapa();
        }

        function onChangeOperacion() {
            lblComision = document.getElementById('lblComision');

            if (document.getElementById('inmueble_id_operacion_inmueble').options[document.getElementById('inmueble_id_operacion_inmueble').selectedIndex].innerHTML == 'Renta')
            {
                lblComision.innerHTML = 'Mensualidades';

                divPreciosRenta = document.getElementById('divPreciosRenta');
                divPreciosRenta.style.display='';
            }
            else {
                lblComision.innerHTML = '%';

                divPreciosRenta = document.getElementById('divPreciosRenta');
                divPreciosRenta.style.display='none';
            }
        }

        function normalizarcadena(cadena) {

            // Quitamos acentos y \"ñ\". Fijate en que va sin comillas el primer parametro
            cadena = cadena.replace('á','a');
            cadena = cadena.replace('é','e');
            cadena = cadena.replace('í','i');
            cadena = cadena.replace('ó','o');
            cadena = cadena.replace('ú','u');

            cadena = cadena.replace('Á','A');
            cadena = cadena.replace('É','E');
            cadena = cadena.replace('Í','I');
            cadena = cadena.replace('Ó','O');
            cadena = cadena.replace('Ú','U');


            return cadena;
        }

        function function_onchangetxtestado() {

            var estado = document.getElementById('txtEstado').value;
            var txtestado = document.getElementById('txtEstado');

            if (estado != '')
            {
                var listaestados = document.getElementById(\"inmueble_id_estado\");

                var i;
                for (i = 0; i < listaestados.length; i++) {
                    if (normalizarcadena(listaestados.options[i].text.toUpperCase()) == normalizarcadena(estado.toUpperCase()))
                    {
                        txtestado.value = listaestados.options[i].text;

                        \$(\"#inmueble_id_estado\").val(listaestados.options[i].value);
                        \$('#inmueble_id_estado').material_select();

                        // Refresh a municipios
                        refrescarMunicipios();

                        return true;
                    }
                }

                // Invalido
                alert('Estado inválido o no disponible.');
                txtestado.value = '';
            }
            else
            {
                \$(\"#inmueble_id_estado\").val(\"-1\");
                \$('#inmueble_id_estado').material_select();
            }

            return false;
        }

        function validarEstado()
        {
            if (function_onchangetxtestado())
            {
                var selector = document.getElementById('inmueble_id_estado');

                if (selector.selectedIndex != -1)
                {
                    return true;
                }
                else
                {
                    alert('Estado inválido o no disponible.');
                    return false;
                }
            }
            else {
                alert('Estado inválido o no disponible.');
                return false;
            }
        }

        function refrescarMunicipios()
        {
            var selectorEstado = document.getElementById('inmueble_id_estado');
            var url = 'http://' + window.location.hostname  + '";
        // line 718
        echo $this->env->getExtension('routing')->getPath("municipio_index", array());
        echo "?indexEstado=' + selectorEstado.value;

            \$.ajax({
                url: url,
                dataType: \"json\",
                success: function(data) {
                    var options, index, select, option;

                    // Clear the old options
                    var selectMunicipio = document.getElementById('inmueble_id_municipio');
                    selectMunicipio.options.length = 0;

                    // Load the new options
                    options = data; // Or whatever source information you're working with
                    for (index = 0; index < options.length; ++index) {
                        option = options[index];

                        selectMunicipio.options.add(new Option(option.nombre, index));
                    }

                    \$('select').material_select();
                }
            });
        }

        /* Eventos */
        document.getElementById('inmueble_calle').addEventListener('change', function_onchange, false);
        document.getElementById('inmueble_numero').addEventListener('change', function_onchange, false);
        document.getElementById('inmueble_colonia').addEventListener('change', function_onchange, false);
        document.getElementById('inmueble_cp').addEventListener('change', function_onchange, false);

        document.getElementById('txtEstado').addEventListener('change', function_onchangetxtestado, false);

        \$( \"#inmueble_id_municipio\" ).change(function() {
            resetBusquedaMapa();
        });

        onChangeOperacion();
    </script>

    <script>

        \$('#inmueble_fechaalta').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            format: 'yyyy-mm-dd',
            monthsFull: [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ],
            monthsShort: [ 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic' ],
            weekdaysFull: [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sabado' ],
            weekdaysShort: [ 'Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab' ],
            weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],
            today: 'Hoy',
            clear: 'Limpiar',
            close: 'Cerrar',
            labelMonthNext: 'Siguiente mes',
            labelMonthPrev: 'Mes anterior',
            labelMonthSelect: 'Selecciona un mes',
            labelYearSelect: 'Selecciona un año'
        });

        function fechaHoraConFormato()
        {
            if (document.getElementById('inmueble_fechaalta').value == \"\")
            {
                document.getElementById('fechaError').style.visibility=\"\";
                alert('La fecha de alta es inválida');
                return false;
            }

            document.getElementById('inmueble_fechaalta').value  = document.getElementById('inmueble_fechaalta').value.replace(' 00:00:00', '');

            document.getElementById('inmueble_fechaalta').value += ' 00:00:00';

            return true;
        }

        //var selectorEstado = document.getElementById('inmueble_id_estado');
        //selectorEstado.value = ";
        // line 794
        echo ";

        \$(document).ready(function() {
            \$('select').material_select();
        });

        document.getElementById('inmueble_oficina').required=false;
        document.getElementById('inmueble_oficina').value='Proper Deal';
        document.getElementById('inmueble_oficina').disabled='disabled';
        document.getElementById('inmueble_telefono').required=false;
        document.getElementById('inmueble_nombreedificio').required=false;
        document.getElementById('inmueble_nombreplaza').required=false;
        document.getElementById('inmueble_restricciones').required=false;
        document.getElementById('inmueble_metrosfondo').required=false;
        document.getElementById('inmueble_metrosfrente').required=false;
        document.getElementById('inmueble_metrosjardin').required=false;
        document.getElementById('inmueble_metrosterraza').required=false;
        document.getElementById('inmueble_numeroint').required=false;
        document.getElementById('inmueble_aireacondicionado').required=false;
        document.getElementById('inmueble_activo').required=false;
        document.getElementById('inmueble_destacado').required=false;
        document.getElementById('inmueble_espaciovisitas').required=false;
        document.getElementById('inmueble_publicarmapa').required=false;
        document.getElementById('inmueble_cp').required=false;
        document.getElementById('inmueble_entrecalles_primera').required=false;
        document.getElementById('inmueble_entrecalles_segunda').required=false;
        document.getElementById('inmueble_metrosterreno').required=false;
        document.getElementById('inmueble_cuotamantenimiento').required=false;
        document.getElementById('inmueble_comision').required=false;
        document.getElementById('inmueble_latlng').required=false;
        document.getElementById('inmueble_calle').required=false;
        document.getElementById('inmueble_numero').required=false;
        document.getElementById('inmueble_youtube').required=false;
        document.getElementById('inmueble_cerrado').required=false;
        document.getElementById('inmueble_mediobanos').required=false;
        document.getElementById('inmueble_antiguedad').required=false;
        document.getElementById('inmueble_metrosconstruccion').required=false;
        document.getElementById('inmueble_porcentajecompartir').required=false;
        document.getElementById('inmueble_privado').required=false;
        document.getElementById('inmueble_preciohasta').required=false;

        document.getElementById('inmueble_colonia').required=false;

        document.getElementById('inmueble_recamaras').required=false;
        document.getElementById('inmueble_banos').required=false;
        document.getElementById('inmueble_mediobanos').required=false;
        document.getElementById('inmueble_plantas').required=false;
        document.getElementById('inmueble_espacioautos').required=false;

        ";
        // line 843
        if (((isset($context["permisodestacado"]) ? $context["permisodestacado"] : null) == false)) {
            // line 844
            echo "        document.getElementById('inmueble_destacado').disabled='disabled';
        ";
        }
        // line 846
        echo "
        // Agregar sin seleccion
        var selector = document.getElementById('inmueble_id_estado');
        selector.options.add(new Option(\"\", -1), 0);
        \$('#inmueble_id_estado').material_select();

        var txtEstado = document.getElementById('txtEstado');
        txtEstado.value = selector.options[selector.selectedIndex].innerHTML;

    </script>

";
    }

    public function getTemplateName()
    {
        return ":inmueble:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1410 => 846,  1406 => 844,  1404 => 843,  1353 => 794,  1274 => 718,  1065 => 511,  1060 => 509,  1054 => 507,  1052 => 506,  1035 => 491,  1023 => 485,  1020 => 484,  1016 => 483,  1009 => 479,  995 => 467,  981 => 465,  977 => 464,  940 => 430,  935 => 428,  926 => 422,  922 => 421,  918 => 420,  909 => 414,  905 => 413,  901 => 412,  892 => 406,  888 => 405,  884 => 404,  875 => 398,  871 => 397,  867 => 396,  858 => 390,  854 => 389,  850 => 388,  839 => 380,  835 => 379,  830 => 377,  821 => 371,  817 => 370,  813 => 369,  801 => 360,  797 => 359,  793 => 358,  784 => 352,  780 => 351,  776 => 350,  767 => 344,  763 => 343,  759 => 342,  750 => 336,  746 => 335,  742 => 334,  736 => 331,  732 => 330,  728 => 329,  719 => 323,  715 => 322,  711 => 321,  702 => 315,  698 => 314,  694 => 313,  687 => 309,  683 => 308,  679 => 307,  673 => 304,  669 => 303,  665 => 302,  656 => 296,  652 => 295,  648 => 294,  639 => 288,  635 => 287,  631 => 286,  625 => 283,  621 => 282,  617 => 281,  611 => 278,  607 => 277,  603 => 276,  594 => 270,  590 => 269,  586 => 268,  580 => 265,  576 => 264,  572 => 263,  566 => 260,  562 => 259,  558 => 258,  552 => 255,  548 => 254,  544 => 253,  535 => 247,  531 => 246,  527 => 245,  521 => 242,  517 => 241,  513 => 240,  507 => 237,  503 => 236,  499 => 235,  490 => 229,  486 => 228,  482 => 227,  476 => 224,  472 => 223,  468 => 222,  462 => 219,  458 => 218,  454 => 217,  444 => 210,  440 => 209,  436 => 208,  426 => 201,  422 => 200,  412 => 193,  408 => 192,  404 => 191,  383 => 173,  379 => 172,  375 => 171,  366 => 165,  362 => 164,  358 => 163,  352 => 160,  348 => 159,  344 => 158,  335 => 152,  331 => 151,  327 => 150,  321 => 147,  317 => 146,  313 => 145,  299 => 134,  295 => 133,  291 => 132,  285 => 129,  281 => 128,  277 => 127,  268 => 121,  264 => 120,  260 => 119,  254 => 116,  250 => 115,  246 => 114,  240 => 111,  236 => 110,  232 => 109,  223 => 103,  219 => 102,  215 => 101,  208 => 97,  204 => 96,  200 => 95,  193 => 91,  189 => 90,  179 => 83,  172 => 79,  168 => 78,  164 => 77,  158 => 74,  154 => 73,  150 => 72,  141 => 66,  137 => 65,  133 => 64,  122 => 56,  113 => 49,  111 => 48,  109 => 47,  105 => 45,  99 => 42,  95 => 41,  91 => 40,  82 => 34,  78 => 33,  74 => 32,  68 => 29,  64 => 28,  60 => 27,  53 => 23,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% form_theme form with ['forms/custom_checkbox_widget.html.twig'] %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="container">*/
/*     <br/>*/
/*     <div class="row">*/
/*         <nav>*/
/*             <div class="nav-wrapper z-depth-1">*/
/*                 <div class="col s12  blue darken-1 ">*/
/*                     <a href="#" class="breadcrumb">Propiedades</a>*/
/*                     <a href="#" class="breadcrumb">Editar</a>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/*     <br/>*/
/*     <div class="row">*/
/*         <div class="formcontainer">*/
/*             <div>*/
/*                 {{ form_start(form, {'attr': {'onsubmit' : 'document.getElementById("progressGuardar").style.display=""; document.getElementById("inmueble_destacado").disabled=""; return true;'}}) }}*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.oficina) }}*/
/*                         {{ form_label(form.oficina) }}*/
/*                         {{ form_errors(form.oficina) }}*/
/*                     </div>*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.telefono) }}*/
/*                         {{ form_label(form.telefono) }}*/
/*                         {{ form_errors(form.telefono) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.nombreid) }}*/
/*                         {{ form_label(form.nombreid) }}*/
/*                         {{ form_errors(form.nombreid) }}*/
/*                     </div>*/
/*                     <div class="input-field col s6">*/
/*                         <label>ID: {{ inmueble.legacyid }}</label>*/
/*                         {# form_widget(form.legacyid) #}*/
/*                         {# form_label(form.legacyid) #}*/
/*                         {# form_errors(form.legacyid) #}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s6 activelabel">*/
/*                         <div class="datepicker">*/
/*                             Fecha de alta:*/
/*                             <input type="text" id="inmueble_fechaalta" name="inmueble_fechaalta" required="required" value="{{ fechaAlta }}" />*/
/*                             <a id="fechaError" style="visibility:hidden;color:black">Fecha inválida<br></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.id_usuario) }}*/
/*                         {{ form_label(form.id_usuario) }}*/
/*                         {{ form_errors(form.id_usuario) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.id_tipo_inmueble) }}*/
/*                         {{ form_label(form.id_tipo_inmueble) }}*/
/*                         {{ form_errors(form.id_tipo_inmueble) }}*/
/*                     </div>*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.id_operacion_inmueble) }}*/
/*                         {{ form_label(form.id_operacion_inmueble) }}*/
/*                         {{ form_errors(form.id_operacion_inmueble) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div style="display:none">{{ form_widget(form.id_estado) }}*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s4">*/
/*                         <input id="txtEstado" type="text" value="" />*/
/* */
/*                         {{ form_label(form.id_estado) }}*/
/*                         {{ form_errors(form.id_estado) }}*/
/*                     </div>*/
/* */
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.id_municipio) }}*/
/*                         {{ form_label(form.id_municipio) }}*/
/*                         {{ form_errors(form.id_municipio) }}*/
/*                     </div>*/
/* */
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.id_zona) }}*/
/*                         {{ form_label(form.id_zona) }}*/
/*                         {{ form_errors(form.id_zona) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s8">*/
/*                         {{ form_widget(form.calle) }}*/
/*                         {{ form_label(form.calle) }}*/
/*                         {{ form_errors(form.calle) }}*/
/*                     </div>*/
/*                     <div class="input-field col s2">*/
/*                         {{ form_widget(form.numero) }}*/
/*                         {{ form_label(form.numero) }}*/
/*                         {{ form_errors(form.numero) }}*/
/*                     </div>*/
/*                     <div class="input-field col s2">*/
/*                         {{ form_widget(form.numeroint) }}*/
/*                         {{ form_label(form.numeroint) }}*/
/*                         {{ form_errors(form.numeroint) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.entrecalles_primera) }}*/
/*                         {{ form_label(form.entrecalles_primera) }}*/
/*                         {{ form_errors(form.entrecalles_primera) }}*/
/*                     </div>*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.entrecalles_segunda) }}*/
/*                         {{ form_label(form.entrecalles_segunda) }}*/
/*                         {{ form_errors(form.entrecalles_segunda) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/* */
/*                 </div>*/
/* */
/*                 <div class="row">*/
/* */
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.colonia) }}*/
/*                         {{ form_label(form.colonia) }}*/
/*                         {{ form_errors(form.colonia) }}*/
/*                     </div>*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.cp) }}*/
/*                         {{ form_label(form.cp) }}*/
/*                         {{ form_errors(form.cp) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.nombreedificio) }}*/
/*                         {{ form_label(form.nombreedificio) }}*/
/*                         {{ form_errors(form.nombreedificio) }}*/
/*                     </div>*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.nombreplaza) }}*/
/*                         {{ form_label(form.nombreplaza) }}*/
/*                         {{ form_errors(form.nombreplaza) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.descripcion) }}*/
/*                         {{ form_label(form.descripcion) }}*/
/*                         {{ form_errors(form.descripcion) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <button class="btn btn-primary" type="button" onclick="buscarDireccion();">Ubicar dirección en mapa</button>*/
/* */
/*                     <a id="txtResetBusqueda" style="display:none;" >*/
/*                         <i class="material-icons">warning</i>Ha cambiado la dirección, haga clic nuevamente en el botón para ubicar la dirección en el mapa.*/
/*                     </a>*/
/* */
/*                     <div id="modalDirecciones" style="display:none">*/
/*                         <h5>Seleccione la ubicación deseada:</h5>*/
/*                         <div id="panelDirecciones" hidden="hidden">*/
/*                             <ul id="lvwDirecciones" class="collection"></ul>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     {{ form_widget(form.publicarmapa) }}*/
/*                     {{ form_label(form.publicarmapa) }}*/
/*                     {{ form_errors(form.publicarmapa) }}*/
/* */
/*                     <div id="map-canvas" style="height:400px" class="form-control"></div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.latlng) }}*/
/*                         {{ form_errors(form.latlng) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s9">*/
/*                         {{ form_widget(form.id_tipoterreno) }}*/
/*                         {{ form_label(form.id_tipoterreno) }}*/
/*                         {{ form_errors(form.id_tipoterreno) }}*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.metrosterreno) }}*/
/*                         {{ form_label(form.metrosterreno) }}*/
/*                         {{ form_errors(form.metrosterreno) }}*/
/*                     </div>*/
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.metrosfrente) }}*/
/*                         {{ form_label(form.metrosfrente) }}*/
/*                         {{ form_errors(form.metrosfrente) }}*/
/*                     </div>*/
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.metrosfondo) }}*/
/*                         {{ form_label(form.metrosfondo) }}*/
/*                         {{ form_errors(form.metrosfondo) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.metrosconstruccion) }}*/
/*                         {{ form_label(form.metrosconstruccion) }}*/
/*                         {{ form_errors(form.metrosconstruccion) }}*/
/*                     </div>*/
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.metrosjardin) }}*/
/*                         {{ form_label(form.metrosjardin) }}*/
/*                         {{ form_errors(form.metrosjardin) }}*/
/*                     </div>*/
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.metrosterraza) }}*/
/*                         {{ form_label(form.metrosterraza) }}*/
/*                         {{ form_errors(form.metrosterraza) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s3">*/
/*                         {{ form_widget(form.recamaras) }}*/
/*                         {{ form_label(form.recamaras) }}*/
/*                         {{ form_errors(form.recamaras) }}*/
/*                     </div>*/
/*                     <div class="input-field col s3">*/
/*                         {{ form_widget(form.banos) }}*/
/*                         {{ form_label(form.banos) }}*/
/*                         {{ form_errors(form.banos) }}*/
/*                     </div>*/
/*                     <div class="input-field col s3">*/
/*                         {{ form_widget(form.mediobanos) }}*/
/*                         {{ form_label(form.mediobanos) }}*/
/*                         {{ form_errors(form.mediobanos) }}*/
/*                     </div>*/
/*                     <div class="input-field col s3">*/
/*                         {{ form_widget(form.plantas) }}*/
/*                         {{ form_label(form.plantas) }}*/
/*                         {{ form_errors(form.plantas) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.espacioautos) }}*/
/*                         {{ form_label(form.espacioautos) }}*/
/*                         {{ form_errors(form.espacioautos) }}*/
/*                     </div>*/
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.espaciovisitas) }}*/
/*                         {{ form_label(form.espaciovisitas) }}*/
/*                         {{ form_errors(form.espaciovisitas) }}*/
/*                     </div>*/
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.id_cuartoservicio) }}*/
/*                         {{ form_label(form.id_cuartoservicio) }}*/
/*                         {{ form_errors(form.id_cuartoservicio) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.antiguedad) }}*/
/*                         {{ form_label(form.antiguedad) }}*/
/*                         {{ form_errors(form.antiguedad) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s4 ">*/
/*                         {{ form_widget(form.id_instalacionelectrica) }}*/
/*                         {{ form_label(form.id_instalacionelectrica) }}*/
/*                         {{ form_errors(form.id_instalacionelectrica) }}*/
/*                     </div>*/
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.aireacondicionado) }}*/
/*                         {{ form_label(form.aireacondicionado) }}*/
/*                         {{ form_errors(form.aireacondicionado) }}*/
/*                     </div>*/
/* */
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.id_tipoclima) }}*/
/*                         {{ form_label(form.id_tipoclima) }}*/
/*                         {{ form_errors(form.id_tipoclima) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.restricciones) }}*/
/*                         {{ form_label(form.restricciones) }}*/
/*                         {{ form_errors(form.restricciones) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s3">*/
/*                         {{ form_widget(form.id_moneda) }}*/
/*                         {{ form_label(form.id_moneda) }}*/
/*                         {{ form_errors(form.id_moneda) }}*/
/*                     </div>*/
/*                     <div class="input-field col s3">*/
/*                         {{ form_widget(form.precio) }}*/
/*                         {{ form_label(form.precio) }}*/
/*                         {{ form_errors(form.precio) }}*/
/*                     </div>*/
/*                     <div class="input-field col s2">*/
/*                         <p id="lblOperacion"></p>*/
/*                     </div>*/
/*                     <div class="input-field col s4">*/
/*                         {{ form_widget(form.cuotamantenimiento) }}*/
/*                         {{ form_label(form.cuotamantenimiento) }}*/
/*                         {{ form_errors(form.cuotamantenimiento) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div id="divPreciosRenta" class="row">*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.preciohasta) }}*/
/*                         {{ form_label(form.preciohasta) }}*/
/*                         {{ form_errors(form.preciohasta) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s3">*/
/*                         {{ form_widget(form.comision) }}*/
/*                         {{ form_label(form.comision) }}*/
/*                         {{ form_errors(form.comision) }}*/
/*                     </div>*/
/*                     <div class="input-field col s3">*/
/*                         <label id="lblComision">%</label>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s3">*/
/*                         {{ form_widget(form.porcentajecompartir) }}*/
/*                         {{ form_label(form.porcentajecompartir) }}*/
/*                         {{ form_errors(form.porcentajecompartir) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s9">*/
/*                         {{ form_label(form.caracteristicas) }}*/
/*                         <br/><br/>*/
/*                         {{ form_widget(form.caracteristicas) }}*/
/*                         {{ form_errors(form.caracteristicas) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row"/>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s3">*/
/*                         {{ form_widget(form.destacado) }}*/
/*                         {{ form_label(form.destacado) }}*/
/*                         {{ form_errors(form.destacado) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s3">*/
/*                         {{ form_widget(form.cerrado) }}*/
/*                         {{ form_label(form.cerrado) }}*/
/*                         {{ form_errors(form.cerrado) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row" style="display: none;">*/
/*                     <div class="input-field col s3">*/
/*                         {{ form_widget(form.activo) }}*/
/*                         {{ form_label(form.activo) }}*/
/*                         {{ form_errors(form.activo) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s6">*/
/*                         {{ form_widget(form.privado) }}*/
/*                         {{ form_label(form.privado) }}*/
/*                         {{ form_errors(form.privado) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <br>*/
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.youtube) }}*/
/*                         {{ form_label(form.youtube) }}*/
/*                         {{ form_errors(form.youtube) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*                 <input type="submit" value="Guardar" class="btn blue darken-4 right" onclick="if (fechaHoraConFormato()) { doingPosting=true; res = validarEstado(); if (res) { return true;} else { doingPosting=false; return false;} } else { return false; }"/>*/
/*                 <a href="{{ path('inmueble_index', {}) }}" class="btn blue darken-4 right" style="margin-right: 10px">Cancelar</a>*/
/* */
/*                 {{ form_end(form) }}*/
/*             </div>*/
/* */
/*             <div id="progressGuardar" style="display:none">*/
/*                 <label>Guardando, espere un momento por favor...</label>*/
/*                 <div id="divProgress2" class="progress" >*/
/*                     <div class="indeterminate"></div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <style>*/
/*         body{*/
/*             background-color: white;*/
/*             height: 100vh;*/
/*         }*/
/* */
/*         #inmueble_zonas label*/
/*         {*/
/*             margin-right: 20px;*/
/*         }*/
/* */
/*         #inmueble_caracteristicas label*/
/*         {*/
/*             margin-right: 20px;*/
/*         }*/
/*     </style>*/
/* */
/*     <script type="text/javascript"*/
/*             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmOj1JP2fKLOHkJSKhAdrIVOJlovubgkY">*/
/*     </script>*/
/* */
/*     {% javascripts '@FrameworkBundle/Resources/public/js/*'%}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/*     <script>*/
/* */
/*         var labels = document.getElementsByTagName('LABEL');*/
/*         for (var i = 0; i < labels.length; i++) {*/
/*             if (labels[i].htmlFor != '') {*/
/*                 var elem = document.getElementById(labels[i].htmlFor);*/
/*                 if (elem)*/
/*                     elem.label = labels[i];*/
/*             }*/
/*         }*/
/* */
/*         for (i=0; i<{{ form.caracteristicas|length }}; i++)*/
/*         {*/
/*             var caracteristica = document.getElementById('inmueble_caracteristicas_' + i);*/
/* */
/*             {% for caracteristicaDesc in caracteristicasDesc %}*/
/* */
/*             if (caracteristica.label.innerHTML == '{{ caracteristicaDesc }}')*/
/*             {*/
/*                 caracteristica.checked = true;*/
/*             }*/
/* */
/*             {% endfor %}*/
/*         }*/
/*     </script>*/
/* */
/*     <script type="text/javascript">*/
/*         doingPosting=false;*/
/* */
/*         var mapOptions = {*/
/*             zoom: 14,*/
/*             mapTypeId: google.maps.MapTypeId.TERRAIN*/
/*         };*/
/*         var direccionResultados = [];*/
/*         var direccionActual;*/
/* */
/*         setMapControl(document.getElementById('map-canvas'), mapOptions);*/
/* */
/*         {% if inmueble.latlng is not null %}*/
/*             var latlng = "{{ inmueble.latlng }}";*/
/*             var coordenadas = latlng.split(",");*/
/*             mostrarMarcadorEnMapa2(coordenadas[0], coordenadas[1], "{{ inmueble.nombreid }}");*/
/*         {% endif %}*/
/* */
/*         function buscarDireccion() {*/
/* */
/*             var direccion = '';*/
/*             if (document.getElementById('inmueble_calle').value != null)*/
/*                 direccion = direccion + document.getElementById('inmueble_calle').value + ' ';*/
/* */
/*             if (document.getElementById('inmueble_numero').value != null)*/
/*                 direccion = direccion + document.getElementById('inmueble_numero').value + ' ';*/
/* */
/*             if (document.getElementById('inmueble_colonia').value != null &&*/
/*                     document.getElementById('inmueble_colonia').value != '')*/
/*                 direccion = direccion + ' colonia ' + document.getElementById('inmueble_colonia').value + ' ';*/
/* */
/*             var municipio = document.getElementById('inmueble_id_municipio').options[document.getElementById('inmueble_id_municipio').selectedIndex].innerHTML*/
/*             if (municipio != "Otro") {*/
/*                 direccion = direccion + municipio + ' ';*/
/*             }*/
/* */
/*             if (document.getElementById('inmueble_cp').value != null*/
/*                     && document.getElementById('inmueble_cp').value != '')*/
/*                 direccion = direccion +  ' CP ' + document.getElementById('inmueble_cp').value + ' ';*/
/* */
/*             direccion = direccion + document.getElementById('inmueble_id_estado').options[document.getElementById('inmueble_id_estado').selectedIndex].innerHTML + ' ';*/
/*             direccion = direccion + 'México ';*/
/* */
/*             var posiciones = geocodeDireccion(direccion, direccionCodificada);*/
/* */
/*             return false;*/
/*         }*/
/* */
/*         function direccionCodificada(operacionExitosa, resultados, mensajeError) {*/
/*             var panelDirecciones = document.getElementById('panelDirecciones');*/
/*             var lvwDirecciones = document.getElementById('lvwDirecciones');*/
/* */
/*             if (!operacionExitosa) {*/
/*                 alert(mensajeError);*/
/*                 return;*/
/*             }*/
/*             else {*/
/*                 // Remover resultados de la anterior busqueda*/
/*                 resetBusquedaMapa();*/
/*             }*/
/* */
/*             // Mostrar listado de direcciones*/
/*             panelDirecciones.hidden = "";*/
/* */
/*             direccionResultados = resultados;*/
/*             for (var i = 0; i < resultados.length; i++) {*/
/*                 var nuevoElemento = document.createElement('a');*/
/*                 nuevoElemento.setAttribute('href', "#!");*/
/*                 nuevoElemento.setAttribute('id', "direccionitem" + i);*/
/*                 nuevoElemento.setAttribute('class', "collection-item");*/
/*                 nuevoElemento.setAttribute('data-geocode', i);*/
/*                 nuevoElemento.setAttribute('onclick', "direccion_onclick(document.getElementById('direccionitem" + i + "'));");*/
/*                 nuevoElemento.innerHTML = resultados[i].formatted_address;*/
/* */
/*                 lvwDirecciones.appendChild(nuevoElemento);*/
/*             }*/
/* */
/*             document.getElementById('modalDirecciones').style.display='';*/
/*         }*/
/* */
/*         function resetBusquedaMapa() {*/
/* */
/*             if (doingPosting) return;*/
/* */
/*             var lvwDirecciones = document.getElementById('lvwDirecciones');*/
/* */
/*             while (lvwDirecciones.firstChild) {*/
/*                 lvwDirecciones.removeChild(lvwDirecciones.firstChild);*/
/*             }*/
/* */
/*             removerTodosMarcadoresDeMapa();*/
/* */
/*             if (document.getElementById('inmueble_latlng').value != null && document.getElementById('inmueble_latlng').value != "")*/
/*             {*/
/*                 document.getElementById('txtResetBusqueda').style.display = '';*/
/*             }*/
/* */
/*             document.getElementById('inmueble_latlng').value = null;*/
/*         }*/
/* */
/*         function direccion_onclick(control) {*/
/* */
/* */
/*             removerTodosMarcadoresDeMapa();*/
/* */
/*             mostrarMarcadorEnMapa(direccionResultados[control.getAttribute('data-geocode')]);*/
/* */
/*             direccionActual = direccionResultados[control.getAttribute('data-geocode')]*/
/* */
/*             document.getElementById('inmueble_latlng').value = direccionActual.geometry.location.lat() + ',' +  direccionActual.geometry.location.lng();*/
/* */
/* */
/*             */
/*             document.getElementById('txtResetBusqueda').style.display='none';*/
/* */
/*             document.getElementById('modalDirecciones').style.display='none';*/
/* */
/* */
/*         }*/
/* */
/*         function function_onchange() {*/
/*             resetBusquedaMapa();*/
/*         }*/
/* */
/*         function onChangeOperacion() {*/
/*             lblComision = document.getElementById('lblComision');*/
/* */
/*             if (document.getElementById('inmueble_id_operacion_inmueble').options[document.getElementById('inmueble_id_operacion_inmueble').selectedIndex].innerHTML == 'Renta')*/
/*             {*/
/*                 lblComision.innerHTML = 'Mensualidades';*/
/* */
/*                 divPreciosRenta = document.getElementById('divPreciosRenta');*/
/*                 divPreciosRenta.style.display='';*/
/*             }*/
/*             else {*/
/*                 lblComision.innerHTML = '%';*/
/* */
/*                 divPreciosRenta = document.getElementById('divPreciosRenta');*/
/*                 divPreciosRenta.style.display='none';*/
/*             }*/
/*         }*/
/* */
/*         function normalizarcadena(cadena) {*/
/* */
/*             // Quitamos acentos y "ñ". Fijate en que va sin comillas el primer parametro*/
/*             cadena = cadena.replace('á','a');*/
/*             cadena = cadena.replace('é','e');*/
/*             cadena = cadena.replace('í','i');*/
/*             cadena = cadena.replace('ó','o');*/
/*             cadena = cadena.replace('ú','u');*/
/* */
/*             cadena = cadena.replace('Á','A');*/
/*             cadena = cadena.replace('É','E');*/
/*             cadena = cadena.replace('Í','I');*/
/*             cadena = cadena.replace('Ó','O');*/
/*             cadena = cadena.replace('Ú','U');*/
/* */
/* */
/*             return cadena;*/
/*         }*/
/* */
/*         function function_onchangetxtestado() {*/
/* */
/*             var estado = document.getElementById('txtEstado').value;*/
/*             var txtestado = document.getElementById('txtEstado');*/
/* */
/*             if (estado != '')*/
/*             {*/
/*                 var listaestados = document.getElementById("inmueble_id_estado");*/
/* */
/*                 var i;*/
/*                 for (i = 0; i < listaestados.length; i++) {*/
/*                     if (normalizarcadena(listaestados.options[i].text.toUpperCase()) == normalizarcadena(estado.toUpperCase()))*/
/*                     {*/
/*                         txtestado.value = listaestados.options[i].text;*/
/* */
/*                         $("#inmueble_id_estado").val(listaestados.options[i].value);*/
/*                         $('#inmueble_id_estado').material_select();*/
/* */
/*                         // Refresh a municipios*/
/*                         refrescarMunicipios();*/
/* */
/*                         return true;*/
/*                     }*/
/*                 }*/
/* */
/*                 // Invalido*/
/*                 alert('Estado inválido o no disponible.');*/
/*                 txtestado.value = '';*/
/*             }*/
/*             else*/
/*             {*/
/*                 $("#inmueble_id_estado").val("-1");*/
/*                 $('#inmueble_id_estado').material_select();*/
/*             }*/
/* */
/*             return false;*/
/*         }*/
/* */
/*         function validarEstado()*/
/*         {*/
/*             if (function_onchangetxtestado())*/
/*             {*/
/*                 var selector = document.getElementById('inmueble_id_estado');*/
/* */
/*                 if (selector.selectedIndex != -1)*/
/*                 {*/
/*                     return true;*/
/*                 }*/
/*                 else*/
/*                 {*/
/*                     alert('Estado inválido o no disponible.');*/
/*                     return false;*/
/*                 }*/
/*             }*/
/*             else {*/
/*                 alert('Estado inválido o no disponible.');*/
/*                 return false;*/
/*             }*/
/*         }*/
/* */
/*         function refrescarMunicipios()*/
/*         {*/
/*             var selectorEstado = document.getElementById('inmueble_id_estado');*/
/*             var url = 'http://' + window.location.hostname  + '{{ path('municipio_index', {}) }}?indexEstado=' + selectorEstado.value;*/
/* */
/*             $.ajax({*/
/*                 url: url,*/
/*                 dataType: "json",*/
/*                 success: function(data) {*/
/*                     var options, index, select, option;*/
/* */
/*                     // Clear the old options*/
/*                     var selectMunicipio = document.getElementById('inmueble_id_municipio');*/
/*                     selectMunicipio.options.length = 0;*/
/* */
/*                     // Load the new options*/
/*                     options = data; // Or whatever source information you're working with*/
/*                     for (index = 0; index < options.length; ++index) {*/
/*                         option = options[index];*/
/* */
/*                         selectMunicipio.options.add(new Option(option.nombre, index));*/
/*                     }*/
/* */
/*                     $('select').material_select();*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         /* Eventos *//* */
/*         document.getElementById('inmueble_calle').addEventListener('change', function_onchange, false);*/
/*         document.getElementById('inmueble_numero').addEventListener('change', function_onchange, false);*/
/*         document.getElementById('inmueble_colonia').addEventListener('change', function_onchange, false);*/
/*         document.getElementById('inmueble_cp').addEventListener('change', function_onchange, false);*/
/* */
/*         document.getElementById('txtEstado').addEventListener('change', function_onchangetxtestado, false);*/
/* */
/*         $( "#inmueble_id_municipio" ).change(function() {*/
/*             resetBusquedaMapa();*/
/*         });*/
/* */
/*         onChangeOperacion();*/
/*     </script>*/
/* */
/*     <script>*/
/* */
/*         $('#inmueble_fechaalta').pickadate({*/
/*             selectMonths: true, // Creates a dropdown to control month*/
/*             format: 'yyyy-mm-dd',*/
/*             monthsFull: [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ],*/
/*             monthsShort: [ 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic' ],*/
/*             weekdaysFull: [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sabado' ],*/
/*             weekdaysShort: [ 'Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab' ],*/
/*             weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],*/
/*             today: 'Hoy',*/
/*             clear: 'Limpiar',*/
/*             close: 'Cerrar',*/
/*             labelMonthNext: 'Siguiente mes',*/
/*             labelMonthPrev: 'Mes anterior',*/
/*             labelMonthSelect: 'Selecciona un mes',*/
/*             labelYearSelect: 'Selecciona un año'*/
/*         });*/
/* */
/*         function fechaHoraConFormato()*/
/*         {*/
/*             if (document.getElementById('inmueble_fechaalta').value == "")*/
/*             {*/
/*                 document.getElementById('fechaError').style.visibility="";*/
/*                 alert('La fecha de alta es inválida');*/
/*                 return false;*/
/*             }*/
/* */
/*             document.getElementById('inmueble_fechaalta').value  = document.getElementById('inmueble_fechaalta').value.replace(' 00:00:00', '');*/
/* */
/*             document.getElementById('inmueble_fechaalta').value += ' 00:00:00';*/
/* */
/*             return true;*/
/*         }*/
/* */
/*         //var selectorEstado = document.getElementById('inmueble_id_estado');*/
/*         //selectorEstado.value = {# default_idestado #};*/
/* */
/*         $(document).ready(function() {*/
/*             $('select').material_select();*/
/*         });*/
/* */
/*         document.getElementById('inmueble_oficina').required=false;*/
/*         document.getElementById('inmueble_oficina').value='Proper Deal';*/
/*         document.getElementById('inmueble_oficina').disabled='disabled';*/
/*         document.getElementById('inmueble_telefono').required=false;*/
/*         document.getElementById('inmueble_nombreedificio').required=false;*/
/*         document.getElementById('inmueble_nombreplaza').required=false;*/
/*         document.getElementById('inmueble_restricciones').required=false;*/
/*         document.getElementById('inmueble_metrosfondo').required=false;*/
/*         document.getElementById('inmueble_metrosfrente').required=false;*/
/*         document.getElementById('inmueble_metrosjardin').required=false;*/
/*         document.getElementById('inmueble_metrosterraza').required=false;*/
/*         document.getElementById('inmueble_numeroint').required=false;*/
/*         document.getElementById('inmueble_aireacondicionado').required=false;*/
/*         document.getElementById('inmueble_activo').required=false;*/
/*         document.getElementById('inmueble_destacado').required=false;*/
/*         document.getElementById('inmueble_espaciovisitas').required=false;*/
/*         document.getElementById('inmueble_publicarmapa').required=false;*/
/*         document.getElementById('inmueble_cp').required=false;*/
/*         document.getElementById('inmueble_entrecalles_primera').required=false;*/
/*         document.getElementById('inmueble_entrecalles_segunda').required=false;*/
/*         document.getElementById('inmueble_metrosterreno').required=false;*/
/*         document.getElementById('inmueble_cuotamantenimiento').required=false;*/
/*         document.getElementById('inmueble_comision').required=false;*/
/*         document.getElementById('inmueble_latlng').required=false;*/
/*         document.getElementById('inmueble_calle').required=false;*/
/*         document.getElementById('inmueble_numero').required=false;*/
/*         document.getElementById('inmueble_youtube').required=false;*/
/*         document.getElementById('inmueble_cerrado').required=false;*/
/*         document.getElementById('inmueble_mediobanos').required=false;*/
/*         document.getElementById('inmueble_antiguedad').required=false;*/
/*         document.getElementById('inmueble_metrosconstruccion').required=false;*/
/*         document.getElementById('inmueble_porcentajecompartir').required=false;*/
/*         document.getElementById('inmueble_privado').required=false;*/
/*         document.getElementById('inmueble_preciohasta').required=false;*/
/* */
/*         document.getElementById('inmueble_colonia').required=false;*/
/* */
/*         document.getElementById('inmueble_recamaras').required=false;*/
/*         document.getElementById('inmueble_banos').required=false;*/
/*         document.getElementById('inmueble_mediobanos').required=false;*/
/*         document.getElementById('inmueble_plantas').required=false;*/
/*         document.getElementById('inmueble_espacioautos').required=false;*/
/* */
/*         {% if permisodestacado == false  %}*/
/*         document.getElementById('inmueble_destacado').disabled='disabled';*/
/*         {% endif %}*/
/* */
/*         // Agregar sin seleccion*/
/*         var selector = document.getElementById('inmueble_id_estado');*/
/*         selector.options.add(new Option("", -1), 0);*/
/*         $('#inmueble_id_estado').material_select();*/
/* */
/*         var txtEstado = document.getElementById('txtEstado');*/
/*         txtEstado.value = selector.options[selector.selectedIndex].innerHTML;*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
