<?php

/* :inmueble:new.html.twig */
class __TwigTemplate_8290496c8c68110bcdae8f99bb33300749a720b3fac5e3fcb5140640b63ba4c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":inmueble:new.html.twig", 1);
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
                    <a href=\"#\" class=\"breadcrumb\">Nueva</a>
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("onsubmit" => "document.getElementById(\"inmueble_oficina\").disabled=\"\"; document.getElementById(\"inmueble_destacado\").disabled=\"\"; document.getElementById(\"progressGuardar\").style.display=\"\"; return true;")));
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
                        ";
        // line 46
        echo "                        ";
        // line 47
        echo "                        ";
        // line 48
        echo "                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6 activelabel\">
                        <div class=\"datepicker\">
                            Fecha de alta:
                            <input type=\"text\" id=\"inmueble_fechaalta\" name=\"inmueble_fechaalta\" required=\"required\" />
                            <a id=\"fechaError\" style=\"visibility:hidden;color:black\">Fecha inválida<br></a>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'widget');
        echo "
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'label');
        echo "
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'widget');
        echo "
                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'label');
        echo "
                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'widget');
        echo "
                        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'label');
        echo "
                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'errors');
        echo "
                    </div>
                </div>

                <div style=\"display: none\">";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'widget');
        echo "
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s4\">
                        <input id=\"txtEstado\" type=\"text\" value=\"\" />

                        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'label');
        echo "
                        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'errors');
        echo "
                    </div>

                    <div class=\"input-field col s4\">
                        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'widget');
        echo "
                        ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'label');
        echo "
                        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_municipio", array()), 'errors');
        echo "
                    </div>

                    <div class=\"input-field col s4\">
                        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_zona", array()), 'widget');
        echo "
                        ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_zona", array()), 'label');
        echo "
                        ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_zona", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s8\">
                        ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "calle", array()), 'widget');
        echo "
                        ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "calle", array()), 'label');
        echo "
                        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "calle", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s2\">
                        ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numero", array()), 'widget');
        echo "
                        ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numero", array()), 'label');
        echo "
                        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numero", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s2\">
                        ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numeroint", array()), 'widget');
        echo "
                        ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numeroint", array()), 'label');
        echo "
                        ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numeroint", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_primera", array()), 'widget');
        echo "
                        ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_primera", array()), 'label');
        echo "
                        ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_primera", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_segunda", array()), 'widget');
        echo "
                        ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_segunda", array()), 'label');
        echo "
                        ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_segunda", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">

                </div>

                <div class=\"row\">

                    <div class=\"input-field col s6\">
                        ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'widget');
        echo "
                        ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'label');
        echo "
                        ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()), 'widget');
        echo "
                        ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()), 'label');
        echo "
                        ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreedificio", array()), 'widget');
        echo "
                        ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreedificio", array()), 'label');
        echo "
                        ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreedificio", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s6\">
                        ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreplaza", array()), 'widget');
        echo "
                        ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreplaza", array()), 'label');
        echo "
                        ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreplaza", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'widget');
        echo "
                        ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'label');
        echo "
                        ";
        // line 172
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
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "publicarmapa", array()), 'widget');
        echo "
                    ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "publicarmapa", array()), 'label');
        echo "
                    ";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "publicarmapa", array()), 'errors');
        echo "

                    <div id=\"map-canvas\" style=\"height:400px\" class=\"form-control\"></div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latlng", array()), 'widget');
        echo "
                        ";
        // line 200
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latlng", array()), 'errors');
        echo "
                    </div>
                </div>


                <div class=\"row\">
                    <div class=\"input-field col s9\">
                        ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipoterreno", array()), 'widget');
        echo "
                        ";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipoterreno", array()), 'label');
        echo "
                        ";
        // line 209
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipoterreno", array()), 'errors');
        echo "
                    </div>

                </div>

                <div class=\"row\">
                    <div class=\"input-field col s4\">
                        ";
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'widget');
        echo "
                        ";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'label');
        echo "
                        ";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 221
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosfrente", array()), 'widget');
        echo "
                        ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosfrente", array()), 'label');
        echo "
                        ";
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosfrente", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 226
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosfondo", array()), 'widget');
        echo "
                        ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosfondo", array()), 'label');
        echo "
                        ";
        // line 228
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosfondo", array()), 'errors');
        echo "
                    </div>
               </div>

                <div class=\"row\">
                    <div class=\"input-field col s4\">
                        ";
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'widget');
        echo "
                        ";
        // line 235
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'label');
        echo "
                        ";
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosjardin", array()), 'widget');
        echo "
                        ";
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosjardin", array()), 'label');
        echo "
                        ";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosjardin", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 244
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterraza", array()), 'widget');
        echo "
                        ";
        // line 245
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterraza", array()), 'label');
        echo "
                        ";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterraza", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s3\">
                        ";
        // line 252
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'widget');
        echo "
                        ";
        // line 253
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'label');
        echo "
                        ";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s3\">
                        ";
        // line 257
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "banos", array()), 'widget');
        echo "
                        ";
        // line 258
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "banos", array()), 'label');
        echo "
                        ";
        // line 259
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "banos", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s3\">
                        ";
        // line 262
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mediobanos", array()), 'widget');
        echo "
                        ";
        // line 263
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mediobanos", array()), 'label');
        echo "
                        ";
        // line 264
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mediobanos", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s3\">
                        ";
        // line 267
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'widget');
        echo "
                        ";
        // line 268
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'label');
        echo "
                        ";
        // line 269
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s4\">
                        ";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "espacioautos", array()), 'widget');
        echo "
                        ";
        // line 276
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "espacioautos", array()), 'label');
        echo "
                        ";
        // line 277
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "espacioautos", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 280
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "espaciovisitas", array()), 'widget');
        echo "
                        ";
        // line 281
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "espaciovisitas", array()), 'label');
        echo "
                        ";
        // line 282
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "espaciovisitas", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 285
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_cuartoservicio", array()), 'widget');
        echo "
                        ";
        // line 286
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_cuartoservicio", array()), 'label');
        echo "
                        ";
        // line 287
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_cuartoservicio", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 293
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "antiguedad", array()), 'widget');
        echo "
                        ";
        // line 294
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "antiguedad", array()), 'label');
        echo "
                        ";
        // line 295
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "antiguedad", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s4 \">
                        ";
        // line 301
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_instalacionelectrica", array()), 'widget');
        echo "
                        ";
        // line 302
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_instalacionelectrica", array()), 'label');
        echo "
                        ";
        // line 303
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_instalacionelectrica", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 306
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "aireacondicionado", array()), 'widget');
        echo "
                        ";
        // line 307
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "aireacondicionado", array()), 'label');
        echo "
                        ";
        // line 308
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "aireacondicionado", array()), 'errors');
        echo "
                    </div>

                    <div class=\"input-field col s4\">
                        ";
        // line 312
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipoclima", array()), 'widget');
        echo "
                        ";
        // line 313
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipoclima", array()), 'label');
        echo "
                        ";
        // line 314
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipoclima", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        ";
        // line 320
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "restricciones", array()), 'widget');
        echo "
                        ";
        // line 321
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "restricciones", array()), 'label');
        echo "
                        ";
        // line 322
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "restricciones", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s3\">
                        ";
        // line 328
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'widget');
        echo "
                        ";
        // line 329
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'label');
        echo "
                        ";
        // line 330
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s3\">
                        ";
        // line 333
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'widget');
        echo "
                        ";
        // line 334
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'label');
        echo "
                        ";
        // line 335
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'errors');
        echo "
                    </div>
                    <div class=\"input-field col s2\">
                        <p id=\"lblOperacion\"></p>
                    </div>
                    <div class=\"input-field col s4\">
                        ";
        // line 341
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cuotamantenimiento", array()), 'widget');
        echo "
                        ";
        // line 342
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cuotamantenimiento", array()), 'label');
        echo "
                        ";
        // line 343
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cuotamantenimiento", array()), 'errors');
        echo "
                    </div>
                </div>

                <div id=\"divPreciosRenta\" class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 349
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciohasta", array()), 'widget');
        echo "
                        ";
        // line 350
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciohasta", array()), 'label');
        echo "
                        ";
        // line 351
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preciohasta", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s3\">
                        ";
        // line 357
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comision", array()), 'widget');
        echo "
                        ";
        // line 358
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comision", array()), 'label');
        echo "
                        ";
        // line 359
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
        // line 368
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "porcentajecompartir", array()), 'widget');
        echo "
                        ";
        // line 369
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "porcentajecompartir", array()), 'label');
        echo "
                        ";
        // line 370
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "porcentajecompartir", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s9\">
                        ";
        // line 376
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array()), 'label');
        echo "
                        <br/><br/>
                        ";
        // line 378
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array()), 'widget');
        echo "
                        ";
        // line 379
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\"/>

                <div class=\"row\">
                    <div class=\"input-field col s3\">
                        ";
        // line 387
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "destacado", array()), 'widget');
        echo "
                        ";
        // line 388
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "destacado", array()), 'label');
        echo "
                        ";
        // line 389
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "destacado", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s3\">
                        ";
        // line 395
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cerrado", array()), 'widget');
        echo "
                        ";
        // line 396
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cerrado", array()), 'label');
        echo "
                        ";
        // line 397
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cerrado", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\" style=\"display: none;\">
                    <div class=\"input-field col s3\">
                        ";
        // line 403
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activo", array()), 'widget');
        echo "
                        ";
        // line 404
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activo", array()), 'label');
        echo "
                        ";
        // line 405
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activo", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        ";
        // line 411
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "privado", array()), 'widget');
        echo "
                        ";
        // line 412
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "privado", array()), 'label');
        echo "
                        ";
        // line 413
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
        // line 427
        echo $this->env->getExtension('routing')->getPath("inmueble_index", array());
        echo "\" class=\"btn blue darken-4 right\" style=\"margin-right:10px\">Cancelar</a>

                ";
        // line 429
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>
        </div>

        <div id=\"progressGuardar\" style=\"display:none\">
            <label>Guardando, espere un momento por favor...</label>
            <div id=\"divProgress2\" class=\"progress\" >
                <div class=\"indeterminate\"></div>
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
        // line 462
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "840e211_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_840e211_0") : $this->env->getExtension('asset')->getAssetUrl("js/840e211_part_1_mapsIntegracion_1.js");
            // line 463
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
        // line 465
        echo "
    <script type=\"text/javascript\">
        doingPosting=false;

        var mapOptions = {
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.TERRAIN
        };
        var direccionResultados = [];
        var direccionActual;

        setMapControl(document.getElementById('map-canvas'), mapOptions);

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

            //\$('html, body').animate({scrollTop:200}, 'slow');

            //\$('#modalDirecciones').openModal();
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

            lblOperacion = document.getElementById('lblOperacion');
            lblOperacion.innerHTML = '(Precio ' + document.getElementById('inmueble_id_operacion_inmueble').options[document.getElementById('inmueble_id_operacion_inmueble').selectedIndex].innerHTML + ')';
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

            resetBusquedaMapa();

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
        // line 688
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

        var selectorEstado = document.getElementById('inmueble_id_estado');
        selectorEstado.value = ";
        // line 764
        echo twig_escape_filter($this->env, (isset($context["default_idestado"]) ? $context["default_idestado"] : null), "html", null, true);
        echo ";

        \$(document).ready(function() {
            \$('select').material_select();
        });

        document.getElementById('inmueble_oficina').required=false;
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
        //document.getElementById('inmueble_ciudad').required=false;
        document.getElementById('inmueble_recamaras').required=false;
        document.getElementById('inmueble_banos').required=false;
        document.getElementById('inmueble_mediobanos').required=false;
        document.getElementById('inmueble_plantas').required=false;
        document.getElementById('inmueble_espacioautos').required=false;

        ";
        // line 812
        if (((isset($context["permisodestacado"]) ? $context["permisodestacado"] : null) == false)) {
            // line 813
            echo "            document.getElementById('inmueble_destacado').disabled='disabled';
        ";
        }
        // line 815
        echo "
        var selector = document.getElementById('inmueble_id_estado');
        selector.options.add(new Option(\"\", -1), 0);
        \$('#inmueble_id_estado').material_select();


    </script>

";
    }

    public function getTemplateName()
    {
        return ":inmueble:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1348 => 815,  1344 => 813,  1342 => 812,  1291 => 764,  1212 => 688,  987 => 465,  973 => 463,  969 => 462,  933 => 429,  928 => 427,  920 => 422,  916 => 421,  912 => 420,  902 => 413,  898 => 412,  894 => 411,  885 => 405,  881 => 404,  877 => 403,  868 => 397,  864 => 396,  860 => 395,  851 => 389,  847 => 388,  843 => 387,  832 => 379,  828 => 378,  823 => 376,  814 => 370,  810 => 369,  806 => 368,  794 => 359,  790 => 358,  786 => 357,  777 => 351,  773 => 350,  769 => 349,  760 => 343,  756 => 342,  752 => 341,  743 => 335,  739 => 334,  735 => 333,  729 => 330,  725 => 329,  721 => 328,  712 => 322,  708 => 321,  704 => 320,  695 => 314,  691 => 313,  687 => 312,  680 => 308,  676 => 307,  672 => 306,  666 => 303,  662 => 302,  658 => 301,  649 => 295,  645 => 294,  641 => 293,  632 => 287,  628 => 286,  624 => 285,  618 => 282,  614 => 281,  610 => 280,  604 => 277,  600 => 276,  596 => 275,  587 => 269,  583 => 268,  579 => 267,  573 => 264,  569 => 263,  565 => 262,  559 => 259,  555 => 258,  551 => 257,  545 => 254,  541 => 253,  537 => 252,  528 => 246,  524 => 245,  520 => 244,  514 => 241,  510 => 240,  506 => 239,  500 => 236,  496 => 235,  492 => 234,  483 => 228,  479 => 227,  475 => 226,  469 => 223,  465 => 222,  461 => 221,  455 => 218,  451 => 217,  447 => 216,  437 => 209,  433 => 208,  429 => 207,  419 => 200,  415 => 199,  405 => 192,  401 => 191,  397 => 190,  376 => 172,  372 => 171,  368 => 170,  359 => 164,  355 => 163,  351 => 162,  345 => 159,  341 => 158,  337 => 157,  328 => 151,  324 => 150,  320 => 149,  314 => 146,  310 => 145,  306 => 144,  292 => 133,  288 => 132,  284 => 131,  278 => 128,  274 => 127,  270 => 126,  261 => 120,  257 => 119,  253 => 118,  247 => 115,  243 => 114,  239 => 113,  233 => 110,  229 => 109,  225 => 108,  216 => 102,  212 => 101,  208 => 100,  201 => 96,  197 => 95,  193 => 94,  186 => 90,  182 => 89,  172 => 82,  165 => 78,  161 => 77,  157 => 76,  151 => 73,  147 => 72,  143 => 71,  134 => 65,  130 => 64,  126 => 63,  109 => 48,  107 => 47,  105 => 46,  99 => 42,  95 => 41,  91 => 40,  82 => 34,  78 => 33,  74 => 32,  68 => 29,  64 => 28,  60 => 27,  53 => 23,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
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
/*                     <a href="#" class="breadcrumb">Nueva</a>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/*     <br/>*/
/*     <div class="row">*/
/*         <div class="formcontainer">*/
/*             <div>*/
/*                 {{ form_start(form, {'attr': {'onsubmit' : 'document.getElementById("inmueble_oficina").disabled=""; document.getElementById("inmueble_destacado").disabled=""; document.getElementById("progressGuardar").style.display=""; return true;'}}) }}*/
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
/*                             <input type="text" id="inmueble_fechaalta" name="inmueble_fechaalta" required="required" />*/
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
/*                 <div style="display: none">{{ form_widget(form.id_estado) }}*/
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
/* */
/*                 <div class="row">*/
/*                     <button class="btn btn-primary" type="button" onclick="buscarDireccion();">Ubicar dirección en mapa</button>*/
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
/*                </div>*/
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
/* */
/*                 <br>*/
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         {{ form_widget(form.youtube) }}*/
/*                         {{ form_label(form.youtube) }}*/
/*                         {{ form_errors(form.youtube) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <input type="submit" value="Guardar" class="btn blue darken-4 right" onclick="if (fechaHoraConFormato()) { doingPosting=true; res = validarEstado(); if (res) { return true;} else { doingPosting=false; return false;} } else { return false; }"/>*/
/*                 <a href="{{ path('inmueble_index', {}) }}" class="btn blue darken-4 right" style="margin-right:10px">Cancelar</a>*/
/* */
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div id="progressGuardar" style="display:none">*/
/*             <label>Guardando, espere un momento por favor...</label>*/
/*             <div id="divProgress2" class="progress" >*/
/*                 <div class="indeterminate"></div>*/
/*             </div>*/
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
/*         function buscarDireccion() {*/
/* */
/*             var direccion = '';*/
/*             if (document.getElementById('inmueble_calle').value != null)*/
/*             direccion = direccion + document.getElementById('inmueble_calle').value + ' ';*/
/* */
/*             if (document.getElementById('inmueble_numero').value != null)*/
/*             direccion = direccion + document.getElementById('inmueble_numero').value + ' ';*/
/* */
/*             if (document.getElementById('inmueble_colonia').value != null &&*/
/*                     document.getElementById('inmueble_colonia').value != '')*/
/*             direccion = direccion + ' colonia ' + document.getElementById('inmueble_colonia').value + ' ';*/
/* */
/*             var municipio = document.getElementById('inmueble_id_municipio').options[document.getElementById('inmueble_id_municipio').selectedIndex].innerHTML*/
/*             if (municipio != "Otro") {*/
/*                 direccion = direccion + municipio + ' ';*/
/*             }*/
/* */
/*             if (document.getElementById('inmueble_cp').value != null*/
/*             && document.getElementById('inmueble_cp').value != '')*/
/*             direccion = direccion +  ' CP ' + document.getElementById('inmueble_cp').value + ' ';*/
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
/* */
/*             //$('html, body').animate({scrollTop:200}, 'slow');*/
/* */
/*             //$('#modalDirecciones').openModal();*/
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
/*             removerTodosMarcadoresDeMapa();*/
/* */
/*             mostrarMarcadorEnMapa(direccionResultados[control.getAttribute('data-geocode')]);*/
/* */
/*             direccionActual = direccionResultados[control.getAttribute('data-geocode')]*/
/* */
/*             document.getElementById('inmueble_latlng').value = direccionActual.geometry.location.lat() + ',' +  direccionActual.geometry.location.lng();*/
/* */
/*             document.getElementById('txtResetBusqueda').style.display='none';*/
/* */
/*             document.getElementById('modalDirecciones').style.display='none';*/
/*      }*/
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
/* */
/*             lblOperacion = document.getElementById('lblOperacion');*/
/*             lblOperacion.innerHTML = '(Precio ' + document.getElementById('inmueble_id_operacion_inmueble').options[document.getElementById('inmueble_id_operacion_inmueble').selectedIndex].innerHTML + ')';*/
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
/*             resetBusquedaMapa();*/
/* */
/*             if (estado != '')*/
/*              {*/
/*                  var listaestados = document.getElementById("inmueble_id_estado");*/
/* */
/*                  var i;*/
/*                  for (i = 0; i < listaestados.length; i++) {*/
/*                      if (normalizarcadena(listaestados.options[i].text.toUpperCase()) == normalizarcadena(estado.toUpperCase()))*/
/*                      {*/
/*                      txtestado.value = listaestados.options[i].text;*/
/* */
/*                      $("#inmueble_id_estado").val(listaestados.options[i].value);*/
/*                      $('#inmueble_id_estado').material_select();*/
/* */
/*                      // Refresh a municipios*/
/*                      refrescarMunicipios();*/
/* */
/*                      return true;*/
/*                      }*/
/*                  }*/
/* */
/*                  // Invalido*/
/*                  alert('Estado inválido o no disponible.');*/
/*                  txtestado.value = '';*/
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
/*         var selectorEstado = document.getElementById('inmueble_id_estado');*/
/*         selectorEstado.value = {{ default_idestado }};*/
/* */
/*         $(document).ready(function() {*/
/*             $('select').material_select();*/
/*         });*/
/* */
/*         document.getElementById('inmueble_oficina').required=false;*/
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
/*         //document.getElementById('inmueble_ciudad').required=false;*/
/*         document.getElementById('inmueble_recamaras').required=false;*/
/*         document.getElementById('inmueble_banos').required=false;*/
/*         document.getElementById('inmueble_mediobanos').required=false;*/
/*         document.getElementById('inmueble_plantas').required=false;*/
/*         document.getElementById('inmueble_espacioautos').required=false;*/
/* */
/*         {% if permisodestacado == false  %}*/
/*             document.getElementById('inmueble_destacado').disabled='disabled';*/
/*         {% endif %}*/
/* */
/*         var selector = document.getElementById('inmueble_id_estado');*/
/*         selector.options.add(new Option("", -1), 0);*/
/*         $('#inmueble_id_estado').material_select();*/
/* */
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
