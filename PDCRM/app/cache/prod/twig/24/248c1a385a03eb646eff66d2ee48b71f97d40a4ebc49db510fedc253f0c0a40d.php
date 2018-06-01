<?php

/* :inmueble:detalle.html.twig */
class __TwigTemplate_f493e76688f330f37fb4e545235e5c6b6c3739f5594c731adf1b5fe664525652 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":inmueble:detalle.html.twig", 1);
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
    <div id=\"main\" class=\"container\">
        <br/>
        <div class=\"row\">
            <nav>
                <div class=\"nav-wrapper z-depth-1\">
                    <div class=\"col s12  blue darken-1 \">
                        <a href=\"#\" class=\"breadcrumb\">Propiedades</a>
                        <a href=\"#\" class=\"breadcrumb\">Detalles</a>
                    </div>
                </div>
            </nav>
        </div>
        <br/>
        <div class=\"row\">
            <div class=\"formcontainer\">
                <div>
                    <div class=\"row\">
                        <div class=\"input-field col s6\">
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "oficina", array()), 'widget');
        echo "
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "oficina", array()), 'label');
        echo "
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "oficina", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s6\">
                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'widget');
        echo "
                            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'label');
        echo "
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s6\">
                            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreid", array()), 'widget');
        echo "
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreid", array()), 'label');
        echo "
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreid", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s6 activelabel\">
                            <div class=\"datepicker\">
                                Fecha de alta:
                                <input type=\"text\" id=\"inmueble_fechaalta\" name=\"inmueble_fechaalta\" required=\"required\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["fechaAlta"]) ? $context["fechaAlta"] : null), "html", null, true);
        echo "\" />
                                <a id=\"fechaError\" style=\"visibility:hidden;color:black\">Fecha inválida<br></a>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s12\">
                            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'widget');
        echo "
                            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'label');
        echo "
                            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_usuario", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s6\">
                            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'widget');
        echo "
                            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'label');
        echo "
                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipo_inmueble", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s6\">
                            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'widget');
        echo "
                            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'label');
        echo "
                            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_operacion_inmueble", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s4\">
                            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'widget');
        echo "
                            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'label');
        echo "
                            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_estado", array()), 'errors');
        echo "
                        </div>

                        <div class=\"input-field col s4\">
                            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'widget');
        echo "
                            ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'label');
        echo "
                            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'errors');
        echo "
                        </div>

                        <div class=\"input-field col s4\">
                            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_zona", array()), 'widget');
        echo "
                            ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_zona", array()), 'label');
        echo "
                            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_zona", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s8\">
                            ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "calle", array()), 'widget');
        echo "
                            ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "calle", array()), 'label');
        echo "
                            ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "calle", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s2\">
                            ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numero", array()), 'widget');
        echo "
                            ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numero", array()), 'label');
        echo "
                            ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numero", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s2\">
                            ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numeroint", array()), 'widget');
        echo "
                            ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numeroint", array()), 'label');
        echo "
                            ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numeroint", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s6\">
                            ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_primera", array()), 'widget');
        echo "
                            ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_primera", array()), 'label');
        echo "
                            ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_primera", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s6\">
                            ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_segunda", array()), 'widget');
        echo "
                            ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_segunda", array()), 'label');
        echo "
                            ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entrecalles_segunda", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">

                    </div>

                    <div class=\"row\">

                        <div class=\"input-field col s6\">
                            ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'widget');
        echo "
                            ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'label');
        echo "
                            ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "colonia", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s6\">
                            ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()), 'widget');
        echo "
                            ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()), 'label');
        echo "
                            ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s6\">
                            ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreedificio", array()), 'widget');
        echo "
                            ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreedificio", array()), 'label');
        echo "
                            ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreedificio", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s6\">
                            ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreplaza", array()), 'widget');
        echo "
                            ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreplaza", array()), 'label');
        echo "
                            ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreplaza", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s12\">
                            ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'widget');
        echo "
                            ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'label');
        echo "
                            ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <button class=\"btn btn-primary\" type=\"button\" onclick=\"buscarDireccion();\">Ubicar dirección en mapa</button>

                        <a id=\"txtResetBusqueda\" style=\"display:none;\" >
                            <i class=\"material-icons\">warning</i>Ha cambiado la dirección, haga clic nuevamente en el botón para ubicar la dirección en el mapa.
                        </a>

                        ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "publicarmapa", array()), 'widget');
        echo "
                        ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "publicarmapa", array()), 'label');
        echo "
                        ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "publicarmapa", array()), 'errors');
        echo "

                        <div id=\"map-canvas\" style=\"height:400px\" class=\"form-control\"></div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s12\">
                            ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latlng", array()), 'widget');
        echo "
                            ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latlng", array()), 'errors');
        echo "
                        </div>
                    </div>


                    <div class=\"row\">
                        <div class=\"input-field col s9\">
                            ";
        // line 189
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipoterreno", array()), 'widget');
        echo "
                            ";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipoterreno", array()), 'label');
        echo "
                            ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipoterreno", array()), 'errors');
        echo "
                        </div>

                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s4\">
                            ";
        // line 198
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'widget');
        echo "
                            ";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'label');
        echo "
                            ";
        // line 200
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterreno", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s4\">
                            ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosfrente", array()), 'widget');
        echo "
                            ";
        // line 204
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosfrente", array()), 'label');
        echo "
                            ";
        // line 205
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosfrente", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s4\">
                            ";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosfondo", array()), 'widget');
        echo "
                            ";
        // line 209
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosfondo", array()), 'label');
        echo "
                            ";
        // line 210
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosfondo", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s4\">
                            ";
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'widget');
        echo "
                            ";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'label');
        echo "
                            ";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosconstruccion", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s4\">
                            ";
        // line 221
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosjardin", array()), 'widget');
        echo "
                            ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosjardin", array()), 'label');
        echo "
                            ";
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosjardin", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s4\">
                            ";
        // line 226
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterraza", array()), 'widget');
        echo "
                            ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterraza", array()), 'label');
        echo "
                            ";
        // line 228
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metrosterraza", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s3\">
                            ";
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'widget');
        echo "
                            ";
        // line 235
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'label');
        echo "
                            ";
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recamaras", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s3\">
                            ";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "banos", array()), 'widget');
        echo "
                            ";
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "banos", array()), 'label');
        echo "
                            ";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "banos", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s3\">
                            ";
        // line 244
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mediobanos", array()), 'widget');
        echo "
                            ";
        // line 245
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mediobanos", array()), 'label');
        echo "
                            ";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mediobanos", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s3\">
                            ";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'widget');
        echo "
                            ";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'label');
        echo "
                            ";
        // line 251
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plantas", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s4\">
                            ";
        // line 257
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "espacioautos", array()), 'widget');
        echo "
                            ";
        // line 258
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "espacioautos", array()), 'label');
        echo "
                            ";
        // line 259
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "espacioautos", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s4\">
                            ";
        // line 262
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "espaciovisitas", array()), 'widget');
        echo "
                            ";
        // line 263
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "espaciovisitas", array()), 'label');
        echo "
                            ";
        // line 264
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "espaciovisitas", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s4\">
                            ";
        // line 267
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_cuartoservicio", array()), 'widget');
        echo "
                            ";
        // line 268
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_cuartoservicio", array()), 'label');
        echo "
                            ";
        // line 269
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_cuartoservicio", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s12\">
                            ";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "antiguedad", array()), 'widget');
        echo "
                            ";
        // line 276
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "antiguedad", array()), 'label');
        echo "
                            ";
        // line 277
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "antiguedad", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s4 \">
                            ";
        // line 283
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_instalacionelectrica", array()), 'widget');
        echo "
                            ";
        // line 284
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_instalacionelectrica", array()), 'label');
        echo "
                            ";
        // line 285
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_instalacionelectrica", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s4\">
                            ";
        // line 288
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "aireacondicionado", array()), 'widget');
        echo "
                            ";
        // line 289
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "aireacondicionado", array()), 'label');
        echo "
                            ";
        // line 290
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "aireacondicionado", array()), 'errors');
        echo "
                        </div>

                        <div class=\"input-field col s4\">
                            ";
        // line 294
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipoclima", array()), 'widget');
        echo "
                            ";
        // line 295
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipoclima", array()), 'label');
        echo "
                            ";
        // line 296
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_tipoclima", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s12\">
                            ";
        // line 302
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "restricciones", array()), 'widget');
        echo "
                            ";
        // line 303
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "restricciones", array()), 'label');
        echo "
                            ";
        // line 304
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "restricciones", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s3\">
                            ";
        // line 310
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'widget');
        echo "
                            ";
        // line 311
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'label');
        echo "
                            ";
        // line 312
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_moneda", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s3\">
                            ";
        // line 315
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'widget');
        echo "
                            ";
        // line 316
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'label');
        echo "
                            ";
        // line 317
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "precio", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s2\">
                            <p id=\"lblOperacion\"></p>
                        </div>
                        <div class=\"input-field col s4\">
                            ";
        // line 323
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cuotamantenimiento", array()), 'widget');
        echo "
                            ";
        // line 324
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cuotamantenimiento", array()), 'label');
        echo "
                            ";
        // line 325
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cuotamantenimiento", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s3\">
                            ";
        // line 331
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comision", array()), 'widget');
        echo "
                            ";
        // line 332
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comision", array()), 'label');
        echo "
                            ";
        // line 333
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comision", array()), 'errors');
        echo "
                        </div>
                        <div class=\"input-field col s3\">
                            <label id=\"lblComision\">%</label>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s9\">
                            ";
        // line 342
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array()), 'label');
        echo "
                            <br/><br/>
                            ";
        // line 344
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array()), 'widget');
        echo "
                            ";
        // line 345
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\"/>

                    <div class=\"row\">
                        <div class=\"input-field col s3\">
                            ";
        // line 353
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "destacado", array()), 'widget');
        echo "
                            ";
        // line 354
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "destacado", array()), 'label');
        echo "
                            ";
        // line 355
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "destacado", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"input-field col s3\">
                            ";
        // line 361
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cerrado", array()), 'widget');
        echo "
                            ";
        // line 362
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cerrado", array()), 'label');
        echo "
                            ";
        // line 363
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cerrado", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\" style=\"display: none;\">
                        <div class=\"input-field col s3\">
                            ";
        // line 369
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activo", array()), 'widget');
        echo "
                            ";
        // line 370
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activo", array()), 'label');
        echo "
                            ";
        // line 371
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activo", array()), 'errors');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href=\"";
        // line 378
        echo $this->env->getExtension('routing')->getPath("inmueble_index", array());
        echo "\" class=\"btn blue darken-4 right\" style=\"margin-right: 10px\">< Regresar</a>

    <style>
        body{
            background-color: white;
            height: 170vh;
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
        // line 401
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "840e211_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_840e211_0") : $this->env->getExtension('asset')->getAssetUrl("js/840e211_part_1_mapsIntegracion_1.js");
            // line 402
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
        // line 404
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
        // line 416
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracteristicas", array())), "html", null, true);
        echo "; i++)
        {
            var caracteristica = document.getElementById('inmueble_caracteristicas_' + i);

            ";
        // line 420
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["caracteristicasDesc"]) ? $context["caracteristicasDesc"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["caracteristicaDesc"]) {
            // line 421
            echo "
            if (caracteristica.label.innerHTML == '";
            // line 422
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
        // line 428
        echo "        }
    </script>

    <script type=\"text/javascript\">
        var mapOptions = {
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.TERRAIN
        };
        var direccionResultados = [];
        var direccionActual;

        setMapControl(document.getElementById('map-canvas'), mapOptions);

        function buscarDireccion() {

            var direccion = document.getElementById('inmueble_calle').value + ' ' +
                    document.getElementById('inmueble_numero').value + ' ' +
                    document.getElementById('inmueble_ciudad').value + ' ' +
                    document.getElementById('inmueble_colonia').value + ' ' +
                    document.getElementById('inmueble_cp').value + ' ' +
                    document.getElementById('inmueble_id_estado').options[document.getElementById('inmueble_id_estado').selectedIndex].innerHTML;

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

            \$('html, body').animate({scrollTop:200}, 'slow');

            \$('#modalDirecciones').openModal();
        }

        function resetBusquedaMapa() {

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
            \$('#modalDirecciones').closeModal();

            removerTodosMarcadoresDeMapa();

            mostrarMarcadorEnMapa(direccionResultados[control.getAttribute('data-geocode')]);

            direccionActual = direccionResultados[control.getAttribute('data-geocode')]

            document.getElementById('inmueble_latlng').value = direccionActual.geometry.location.lat() + ',' +  direccionActual.geometry.location.lng();
        }

        function function_onchange() {
            resetBusquedaMapa();
        }

        function onChangeOperacion() {
            lblComision = document.getElementById('lblComision');

            if (document.getElementById('inmueble_id_operacion_inmueble').options[document.getElementById('inmueble_id_operacion_inmueble').selectedIndex].innerHTML == 'Renta')
            {
                lblComision.innerHTML = 'Mensualidades';
            }
            else {
                lblComision.innerHTML = '%';
            }
        }

        /* Eventos */
        document.getElementById('inmueble_calle').addEventListener('change', function_onchange, false);
        document.getElementById('inmueble_numero').addEventListener('change', function_onchange, false);
        document.getElementById('inmueble_colonia').addEventListener('change', function_onchange, false);
        document.getElementById('inmueble_ciudad').addEventListener('change', function_onchange, false);
        document.getElementById('inmueble_cp').addEventListener('change', function_onchange, false);

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
        // line 581
        echo twig_escape_filter($this->env, (isset($context["default_idestado"]) ? $context["default_idestado"] : null), "html", null, true);
        echo ";

        \$(document).ready(function() {
            \$('select').material_select();
        });

        document.getElementById('inmueble_id_estado').selectedIndex=0;

        \$('#main').find(':input').prop('disabled', true);

        //\$(\"input\").attr(\"disabled\", true);
        /*
         var form = document.getElementById(\"main\");
         var elements = form.elements;
         for (var i = 0, len = elements.length; i < len; ++i) {
         elements[i].disabled = \"disabled\";
         }
         */
    </script>

";
    }

    public function getTemplateName()
    {
        return ":inmueble:detalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1079 => 581,  924 => 428,  912 => 422,  909 => 421,  905 => 420,  898 => 416,  884 => 404,  870 => 402,  866 => 401,  840 => 378,  830 => 371,  826 => 370,  822 => 369,  813 => 363,  809 => 362,  805 => 361,  796 => 355,  792 => 354,  788 => 353,  777 => 345,  773 => 344,  768 => 342,  756 => 333,  752 => 332,  748 => 331,  739 => 325,  735 => 324,  731 => 323,  722 => 317,  718 => 316,  714 => 315,  708 => 312,  704 => 311,  700 => 310,  691 => 304,  687 => 303,  683 => 302,  674 => 296,  670 => 295,  666 => 294,  659 => 290,  655 => 289,  651 => 288,  645 => 285,  641 => 284,  637 => 283,  628 => 277,  624 => 276,  620 => 275,  611 => 269,  607 => 268,  603 => 267,  597 => 264,  593 => 263,  589 => 262,  583 => 259,  579 => 258,  575 => 257,  566 => 251,  562 => 250,  558 => 249,  552 => 246,  548 => 245,  544 => 244,  538 => 241,  534 => 240,  530 => 239,  524 => 236,  520 => 235,  516 => 234,  507 => 228,  503 => 227,  499 => 226,  493 => 223,  489 => 222,  485 => 221,  479 => 218,  475 => 217,  471 => 216,  462 => 210,  458 => 209,  454 => 208,  448 => 205,  444 => 204,  440 => 203,  434 => 200,  430 => 199,  426 => 198,  416 => 191,  412 => 190,  408 => 189,  398 => 182,  394 => 181,  384 => 174,  380 => 173,  376 => 172,  362 => 161,  358 => 160,  354 => 159,  345 => 153,  341 => 152,  337 => 151,  331 => 148,  327 => 147,  323 => 146,  314 => 140,  310 => 139,  306 => 138,  300 => 135,  296 => 134,  292 => 133,  278 => 122,  274 => 121,  270 => 120,  264 => 117,  260 => 116,  256 => 115,  247 => 109,  243 => 108,  239 => 107,  233 => 104,  229 => 103,  225 => 102,  219 => 99,  215 => 98,  211 => 97,  202 => 91,  198 => 90,  194 => 89,  187 => 85,  183 => 84,  179 => 83,  172 => 79,  168 => 78,  164 => 77,  155 => 71,  151 => 70,  147 => 69,  141 => 66,  137 => 65,  133 => 64,  124 => 58,  120 => 57,  116 => 56,  105 => 48,  94 => 40,  90 => 39,  86 => 38,  77 => 32,  73 => 31,  69 => 30,  63 => 27,  59 => 26,  55 => 25,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% form_theme form with ['forms/custom_checkbox_widget.html.twig'] %}*/
/* */
/* {% block body %}*/
/* */
/*     <div id="main" class="container">*/
/*         <br/>*/
/*         <div class="row">*/
/*             <nav>*/
/*                 <div class="nav-wrapper z-depth-1">*/
/*                     <div class="col s12  blue darken-1 ">*/
/*                         <a href="#" class="breadcrumb">Propiedades</a>*/
/*                         <a href="#" class="breadcrumb">Detalles</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*         </div>*/
/*         <br/>*/
/*         <div class="row">*/
/*             <div class="formcontainer">*/
/*                 <div>*/
/*                     <div class="row">*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.oficina) }}*/
/*                             {{ form_label(form.oficina) }}*/
/*                             {{ form_errors(form.oficina) }}*/
/*                         </div>*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.telefono) }}*/
/*                             {{ form_label(form.telefono) }}*/
/*                             {{ form_errors(form.telefono) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.nombreid) }}*/
/*                             {{ form_label(form.nombreid) }}*/
/*                             {{ form_errors(form.nombreid) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s6 activelabel">*/
/*                             <div class="datepicker">*/
/*                                 Fecha de alta:*/
/*                                 <input type="text" id="inmueble_fechaalta" name="inmueble_fechaalta" required="required" value="{{ fechaAlta }}" />*/
/*                                 <a id="fechaError" style="visibility:hidden;color:black">Fecha inválida<br></a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s12">*/
/*                             {{ form_widget(form.id_usuario) }}*/
/*                             {{ form_label(form.id_usuario) }}*/
/*                             {{ form_errors(form.id_usuario) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.id_tipo_inmueble) }}*/
/*                             {{ form_label(form.id_tipo_inmueble) }}*/
/*                             {{ form_errors(form.id_tipo_inmueble) }}*/
/*                         </div>*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.id_operacion_inmueble) }}*/
/*                             {{ form_label(form.id_operacion_inmueble) }}*/
/*                             {{ form_errors(form.id_operacion_inmueble) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s4">*/
/*                             {{ form_widget(form.id_estado) }}*/
/*                             {{ form_label(form.id_estado) }}*/
/*                             {{ form_errors(form.id_estado) }}*/
/*                         </div>*/
/* */
/*                         <div class="input-field col s4">*/
/*                             {{ form_widget(form.ciudad) }}*/
/*                             {{ form_label(form.ciudad) }}*/
/*                             {{ form_errors(form.ciudad) }}*/
/*                         </div>*/
/* */
/*                         <div class="input-field col s4">*/
/*                             {{ form_widget(form.id_zona) }}*/
/*                             {{ form_label(form.id_zona) }}*/
/*                             {{ form_errors(form.id_zona) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s8">*/
/*                             {{ form_widget(form.calle) }}*/
/*                             {{ form_label(form.calle) }}*/
/*                             {{ form_errors(form.calle) }}*/
/*                         </div>*/
/*                         <div class="input-field col s2">*/
/*                             {{ form_widget(form.numero) }}*/
/*                             {{ form_label(form.numero) }}*/
/*                             {{ form_errors(form.numero) }}*/
/*                         </div>*/
/*                         <div class="input-field col s2">*/
/*                             {{ form_widget(form.numeroint) }}*/
/*                             {{ form_label(form.numeroint) }}*/
/*                             {{ form_errors(form.numeroint) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.entrecalles_primera) }}*/
/*                             {{ form_label(form.entrecalles_primera) }}*/
/*                             {{ form_errors(form.entrecalles_primera) }}*/
/*                         </div>*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.entrecalles_segunda) }}*/
/*                             {{ form_label(form.entrecalles_segunda) }}*/
/*                             {{ form_errors(form.entrecalles_segunda) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/* */
/*                     </div>*/
/* */
/*                     <div class="row">*/
/* */
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.colonia) }}*/
/*                             {{ form_label(form.colonia) }}*/
/*                             {{ form_errors(form.colonia) }}*/
/*                         </div>*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.cp) }}*/
/*                             {{ form_label(form.cp) }}*/
/*                             {{ form_errors(form.cp) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.nombreedificio) }}*/
/*                             {{ form_label(form.nombreedificio) }}*/
/*                             {{ form_errors(form.nombreedificio) }}*/
/*                         </div>*/
/*                         <div class="input-field col s6">*/
/*                             {{ form_widget(form.nombreplaza) }}*/
/*                             {{ form_label(form.nombreplaza) }}*/
/*                             {{ form_errors(form.nombreplaza) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s12">*/
/*                             {{ form_widget(form.descripcion) }}*/
/*                             {{ form_label(form.descripcion) }}*/
/*                             {{ form_errors(form.descripcion) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <button class="btn btn-primary" type="button" onclick="buscarDireccion();">Ubicar dirección en mapa</button>*/
/* */
/*                         <a id="txtResetBusqueda" style="display:none;" >*/
/*                             <i class="material-icons">warning</i>Ha cambiado la dirección, haga clic nuevamente en el botón para ubicar la dirección en el mapa.*/
/*                         </a>*/
/* */
/*                         {{ form_widget(form.publicarmapa) }}*/
/*                         {{ form_label(form.publicarmapa) }}*/
/*                         {{ form_errors(form.publicarmapa) }}*/
/* */
/*                         <div id="map-canvas" style="height:400px" class="form-control"></div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s12">*/
/*                             {{ form_widget(form.latlng) }}*/
/*                             {{ form_errors(form.latlng) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s9">*/
/*                             {{ form_widget(form.id_tipoterreno) }}*/
/*                             {{ form_label(form.id_tipoterreno) }}*/
/*                             {{ form_errors(form.id_tipoterreno) }}*/
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s4">*/
/*                             {{ form_widget(form.metrosterreno) }}*/
/*                             {{ form_label(form.metrosterreno) }}*/
/*                             {{ form_errors(form.metrosterreno) }}*/
/*                         </div>*/
/*                         <div class="input-field col s4">*/
/*                             {{ form_widget(form.metrosfrente) }}*/
/*                             {{ form_label(form.metrosfrente) }}*/
/*                             {{ form_errors(form.metrosfrente) }}*/
/*                         </div>*/
/*                         <div class="input-field col s4">*/
/*                             {{ form_widget(form.metrosfondo) }}*/
/*                             {{ form_label(form.metrosfondo) }}*/
/*                             {{ form_errors(form.metrosfondo) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s4">*/
/*                             {{ form_widget(form.metrosconstruccion) }}*/
/*                             {{ form_label(form.metrosconstruccion) }}*/
/*                             {{ form_errors(form.metrosconstruccion) }}*/
/*                         </div>*/
/*                         <div class="input-field col s4">*/
/*                             {{ form_widget(form.metrosjardin) }}*/
/*                             {{ form_label(form.metrosjardin) }}*/
/*                             {{ form_errors(form.metrosjardin) }}*/
/*                         </div>*/
/*                         <div class="input-field col s4">*/
/*                             {{ form_widget(form.metrosterraza) }}*/
/*                             {{ form_label(form.metrosterraza) }}*/
/*                             {{ form_errors(form.metrosterraza) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s3">*/
/*                             {{ form_widget(form.recamaras) }}*/
/*                             {{ form_label(form.recamaras) }}*/
/*                             {{ form_errors(form.recamaras) }}*/
/*                         </div>*/
/*                         <div class="input-field col s3">*/
/*                             {{ form_widget(form.banos) }}*/
/*                             {{ form_label(form.banos) }}*/
/*                             {{ form_errors(form.banos) }}*/
/*                         </div>*/
/*                         <div class="input-field col s3">*/
/*                             {{ form_widget(form.mediobanos) }}*/
/*                             {{ form_label(form.mediobanos) }}*/
/*                             {{ form_errors(form.mediobanos) }}*/
/*                         </div>*/
/*                         <div class="input-field col s3">*/
/*                             {{ form_widget(form.plantas) }}*/
/*                             {{ form_label(form.plantas) }}*/
/*                             {{ form_errors(form.plantas) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s4">*/
/*                             {{ form_widget(form.espacioautos) }}*/
/*                             {{ form_label(form.espacioautos) }}*/
/*                             {{ form_errors(form.espacioautos) }}*/
/*                         </div>*/
/*                         <div class="input-field col s4">*/
/*                             {{ form_widget(form.espaciovisitas) }}*/
/*                             {{ form_label(form.espaciovisitas) }}*/
/*                             {{ form_errors(form.espaciovisitas) }}*/
/*                         </div>*/
/*                         <div class="input-field col s4">*/
/*                             {{ form_widget(form.id_cuartoservicio) }}*/
/*                             {{ form_label(form.id_cuartoservicio) }}*/
/*                             {{ form_errors(form.id_cuartoservicio) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s12">*/
/*                             {{ form_widget(form.antiguedad) }}*/
/*                             {{ form_label(form.antiguedad) }}*/
/*                             {{ form_errors(form.antiguedad) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s4 ">*/
/*                             {{ form_widget(form.id_instalacionelectrica) }}*/
/*                             {{ form_label(form.id_instalacionelectrica) }}*/
/*                             {{ form_errors(form.id_instalacionelectrica) }}*/
/*                         </div>*/
/*                         <div class="input-field col s4">*/
/*                             {{ form_widget(form.aireacondicionado) }}*/
/*                             {{ form_label(form.aireacondicionado) }}*/
/*                             {{ form_errors(form.aireacondicionado) }}*/
/*                         </div>*/
/* */
/*                         <div class="input-field col s4">*/
/*                             {{ form_widget(form.id_tipoclima) }}*/
/*                             {{ form_label(form.id_tipoclima) }}*/
/*                             {{ form_errors(form.id_tipoclima) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s12">*/
/*                             {{ form_widget(form.restricciones) }}*/
/*                             {{ form_label(form.restricciones) }}*/
/*                             {{ form_errors(form.restricciones) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s3">*/
/*                             {{ form_widget(form.id_moneda) }}*/
/*                             {{ form_label(form.id_moneda) }}*/
/*                             {{ form_errors(form.id_moneda) }}*/
/*                         </div>*/
/*                         <div class="input-field col s3">*/
/*                             {{ form_widget(form.precio) }}*/
/*                             {{ form_label(form.precio) }}*/
/*                             {{ form_errors(form.precio) }}*/
/*                         </div>*/
/*                         <div class="input-field col s2">*/
/*                             <p id="lblOperacion"></p>*/
/*                         </div>*/
/*                         <div class="input-field col s4">*/
/*                             {{ form_widget(form.cuotamantenimiento) }}*/
/*                             {{ form_label(form.cuotamantenimiento) }}*/
/*                             {{ form_errors(form.cuotamantenimiento) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s3">*/
/*                             {{ form_widget(form.comision) }}*/
/*                             {{ form_label(form.comision) }}*/
/*                             {{ form_errors(form.comision) }}*/
/*                         </div>*/
/*                         <div class="input-field col s3">*/
/*                             <label id="lblComision">%</label>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s9">*/
/*                             {{ form_label(form.caracteristicas) }}*/
/*                             <br/><br/>*/
/*                             {{ form_widget(form.caracteristicas) }}*/
/*                             {{ form_errors(form.caracteristicas) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row"/>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s3">*/
/*                             {{ form_widget(form.destacado) }}*/
/*                             {{ form_label(form.destacado) }}*/
/*                             {{ form_errors(form.destacado) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s3">*/
/*                             {{ form_widget(form.cerrado) }}*/
/*                             {{ form_label(form.cerrado) }}*/
/*                             {{ form_errors(form.cerrado) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row" style="display: none;">*/
/*                         <div class="input-field col s3">*/
/*                             {{ form_widget(form.activo) }}*/
/*                             {{ form_label(form.activo) }}*/
/*                             {{ form_errors(form.activo) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <a href="{{ path('inmueble_index', {}) }}" class="btn blue darken-4 right" style="margin-right: 10px">< Regresar</a>*/
/* */
/*     <style>*/
/*         body{*/
/*             background-color: white;*/
/*             height: 170vh;*/
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
/*             var direccion = document.getElementById('inmueble_calle').value + ' ' +*/
/*                     document.getElementById('inmueble_numero').value + ' ' +*/
/*                     document.getElementById('inmueble_ciudad').value + ' ' +*/
/*                     document.getElementById('inmueble_colonia').value + ' ' +*/
/*                     document.getElementById('inmueble_cp').value + ' ' +*/
/*                     document.getElementById('inmueble_id_estado').options[document.getElementById('inmueble_id_estado').selectedIndex].innerHTML;*/
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
/*             $('html, body').animate({scrollTop:200}, 'slow');*/
/* */
/*             $('#modalDirecciones').openModal();*/
/*         }*/
/* */
/*         function resetBusquedaMapa() {*/
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
/*             $('#modalDirecciones').closeModal();*/
/* */
/*             removerTodosMarcadoresDeMapa();*/
/* */
/*             mostrarMarcadorEnMapa(direccionResultados[control.getAttribute('data-geocode')]);*/
/* */
/*             direccionActual = direccionResultados[control.getAttribute('data-geocode')]*/
/* */
/*             document.getElementById('inmueble_latlng').value = direccionActual.geometry.location.lat() + ',' +  direccionActual.geometry.location.lng();*/
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
/*             }*/
/*             else {*/
/*                 lblComision.innerHTML = '%';*/
/*             }*/
/*         }*/
/* */
/*         /* Eventos *//* */
/*         document.getElementById('inmueble_calle').addEventListener('change', function_onchange, false);*/
/*         document.getElementById('inmueble_numero').addEventListener('change', function_onchange, false);*/
/*         document.getElementById('inmueble_colonia').addEventListener('change', function_onchange, false);*/
/*         document.getElementById('inmueble_ciudad').addEventListener('change', function_onchange, false);*/
/*         document.getElementById('inmueble_cp').addEventListener('change', function_onchange, false);*/
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
/*         document.getElementById('inmueble_id_estado').selectedIndex=0;*/
/* */
/*         $('#main').find(':input').prop('disabled', true);*/
/* */
/*         //$("input").attr("disabled", true);*/
/*         /**/
/*          var form = document.getElementById("main");*/
/*          var elements = form.elements;*/
/*          for (var i = 0, len = elements.length; i < len; ++i) {*/
/*          elements[i].disabled = "disabled";*/
/*          }*/
/*          *//* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
