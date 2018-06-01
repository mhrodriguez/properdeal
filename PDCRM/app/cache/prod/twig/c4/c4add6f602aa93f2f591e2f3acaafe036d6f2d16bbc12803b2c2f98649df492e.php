<?php

/* :comision:new.html.twig */
class __TwigTemplate_ddc614ea85d0bb9b5c08b0f6c2f565a8fb935605a9edd7a776aea7493d83a80c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":comision:new.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    <br/>
    <div class=\"row\">
        <nav>
            <div class=\"nav-wrapper z-depth-1\">
                <div class=\"col s12  blue darken-1 \">
                    <a href=\"#\" class=\"breadcrumb\">Comisión</a>
                    <a href=\"#\" class=\"breadcrumb\">Nueva</a>
                </div>
            </div>
        </nav>
    </div>
    <br/><br/>

    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

    <div class=\"row\">
        <div class=\"input-field col s6\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "asesor", array()), 'widget');
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "asesor", array()), 'label');
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "asesor", array()), 'errors');
        echo "
        </div>
        <div class=\"input-field col s6 activelabel\">
            <div class=\"datepicker\">
                    Fecha:
                    <input type=\"text\" id=\"comision_fecha\" name=\"comision_fecha\" required=\"required\" />
                    <a id=\"fechaError\" style=\"visibility:hidden;color:black\">Fecha inválida<br></a>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"input-field col s6\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comparte", array()), 'widget');
        echo "
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comparte", array()), 'label');
        echo "
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comparte", array()), 'errors');
        echo "
        </div>
        <div class=\"input-field col s6\">
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inmueble", array()), 'widget');
        echo "
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inmueble", array()), 'label');
        echo "
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inmueble", array()), 'errors');
        echo "
        </div>
    </div>

    <div class=\"row\">
        <div class=\"input-field col s6\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operacioninmueble", array()), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operacioninmueble", array()), 'label');
        echo "
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operacioninmueble", array()), 'errors');
        echo "
        </div>
        <div class=\"input-field col s6\">
            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cliente", array()), 'widget');
        echo "
            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cliente", array()), 'label');
        echo "
            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cliente", array()), 'errors');
        echo "
        </div>
    </div>

    <div class=\"row\">
        <div class=\"input-field col s6\">
            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "monto", array()), 'widget');
        echo "
            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "monto", array()), 'label');
        echo "
            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "monto", array()), 'errors');
        echo "
        </div>
        <div class=\"input-field col s6\">
            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "propiedadexterna", array()), 'widget');
        echo "
            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "propiedadexterna", array()), 'label');
        echo "
            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "propiedadexterna", array()), 'errors');
        echo "
        </div>
    </div>

    <div class=\"row\">
        <h5>Comisiones</h5>
    </div>

    <div class=\"row\">
        <div class=\"input-field col s6\">
            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comision", array()), 'widget');
        echo "
            ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comision", array()), 'label');
        echo "
            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comision", array()), 'errors');
        echo "
        </div>
        <div class=\"input-field col s6\">
            Monto de Comisión: <label id=\"lbl_monto_comision\"></label>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"input-field col s6\">
            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comisionoficina", array()), 'widget');
        echo "
            ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comisionoficina", array()), 'label');
        echo "
            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comisionoficina", array()), 'errors');
        echo "
        </div>
        <div class=\"input-field col s6\">
            Monto de Comisión: <label id=\"lbl_monto_comisionoficina\"></label>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"input-field col s6\">
            ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comisionasesor", array()), 'widget');
        echo "
            ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comisionasesor", array()), 'label');
        echo "
            ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comisionasesor", array()), 'errors');
        echo "
        </div>
        <div class=\"input-field col s6\">
            Monto de Comisión: <label id=\"lbl_monto_comisionasesor\"></label>
        </div>
    </div>


    <input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue darken-4 right\" onclick=\"return fechaHoraConFormato();\" />
    <a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("comision_index", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-4 right\">Cancelar</a>

    ";
        // line 115
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    <script>

        \$(document).ready(function() {
            \$('select').material_select();
        });

        \$('#comision_fecha').pickadate({
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
            if (document.getElementById('comision_fecha').value == \"\")
            {
                document.getElementById('fechaError').style.visibility=\"\";
                alert('La fecha es inválida');
                return false;
            }

            document.getElementById('comision_fecha').value  = document.getElementById('comision_fecha').value.replace(' 00:00:00', '');

            document.getElementById('comision_fecha').value += ' 00:00:00';

            return true;
        }

        document.getElementById('comision_monto').value = \"0\"
        document.getElementById('comision_monto').addEventListener('change', actualizarComisiones, false);
        document.getElementById('comision_comision').addEventListener('change', actualizarComisiones, false);
        document.getElementById('comision_comisionoficina').addEventListener('change', actualizarComisiones, false);
        document.getElementById('comision_comisionasesor').addEventListener('change', actualizarComisiones, false);
        actualizarComisiones();

        function actualizarComisiones()
        {
            monto = parseFloat(document.getElementById('comision_monto').value);
            comision = parseFloat(document.getElementById('comision_comision').value);
            comisionoficina = parseFloat(document.getElementById('comision_comisionoficina').value);
            comisionasesor = parseFloat(document.getElementById('comision_comisionasesor').value);

            ncomision=0;
            ncomisionoficina=0;
            ncomisionasesor=0;


            if (monto > 0) {
                if (comision >= 0) {

                    ncomision = (monto) * (comision / 100);

                    if (comisionoficina >= 0) {

                        ncomisionoficina = ncomision * (comisionoficina / 100);

                        if (comisionasesor >= 0)
                        {
                            ncomisionasesor = ncomisionoficina * (comisionasesor / 100);
                        }

                    }
                }
            }

            lbl_comision = document.getElementById('lbl_monto_comision');
            lbl_comisionoficina = document.getElementById('lbl_monto_comisionoficina');
            lbl_comisionasesor = document.getElementById('lbl_monto_comisionasesor');

            lbl_comision.innerHTML = '\$ ' + ncomision;
            lbl_comisionoficina.innerHTML = '\$ ' + ncomisionoficina;
            lbl_comisionasesor.innerHTML = '\$ ' + ncomisionasesor;

        }
    </script>

    <style>
        body{
            background-color: white;
            height: 100vh;
        }

        #solicitud_caracteristicas label
        {
            margin-right: 20px;
        }

        .activelabel label {
            font-size: 0.8rem;
            -webkit-transform: translateY(-140%);
            transform: translateY(-140%);
        }
    </style>
</div>
";
    }

    public function getTemplateName()
    {
        return ":comision:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 115,  235 => 113,  223 => 104,  219 => 103,  215 => 102,  203 => 93,  199 => 92,  195 => 91,  183 => 82,  179 => 81,  175 => 80,  162 => 70,  158 => 69,  154 => 68,  148 => 65,  144 => 64,  140 => 63,  131 => 57,  127 => 56,  123 => 55,  117 => 52,  113 => 51,  109 => 50,  100 => 44,  96 => 43,  92 => 42,  86 => 39,  82 => 38,  78 => 37,  62 => 24,  58 => 23,  54 => 22,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <br/>*/
/*     <div class="row">*/
/*         <nav>*/
/*             <div class="nav-wrapper z-depth-1">*/
/*                 <div class="col s12  blue darken-1 ">*/
/*                     <a href="#" class="breadcrumb">Comisión</a>*/
/*                     <a href="#" class="breadcrumb">Nueva</a>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/*     <br/><br/>*/
/* */
/*     {{ form_start(form) }}*/
/* */
/*     <div class="row">*/
/*         <div class="input-field col s6">*/
/*             {{ form_widget(form.asesor) }}*/
/*             {{ form_label(form.asesor) }}*/
/*             {{ form_errors(form.asesor) }}*/
/*         </div>*/
/*         <div class="input-field col s6 activelabel">*/
/*             <div class="datepicker">*/
/*                     Fecha:*/
/*                     <input type="text" id="comision_fecha" name="comision_fecha" required="required" />*/
/*                     <a id="fechaError" style="visibility:hidden;color:black">Fecha inválida<br></a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="input-field col s6">*/
/*             {{ form_widget(form.comparte) }}*/
/*             {{ form_label(form.comparte) }}*/
/*             {{ form_errors(form.comparte) }}*/
/*         </div>*/
/*         <div class="input-field col s6">*/
/*             {{ form_widget(form.inmueble) }}*/
/*             {{ form_label(form.inmueble) }}*/
/*             {{ form_errors(form.inmueble) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="input-field col s6">*/
/*             {{ form_widget(form.operacioninmueble) }}*/
/*             {{ form_label(form.operacioninmueble) }}*/
/*             {{ form_errors(form.operacioninmueble) }}*/
/*         </div>*/
/*         <div class="input-field col s6">*/
/*             {{ form_widget(form.cliente) }}*/
/*             {{ form_label(form.cliente) }}*/
/*             {{ form_errors(form.cliente) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="input-field col s6">*/
/*             {{ form_widget(form.monto) }}*/
/*             {{ form_label(form.monto) }}*/
/*             {{ form_errors(form.monto) }}*/
/*         </div>*/
/*         <div class="input-field col s6">*/
/*             {{ form_widget(form.propiedadexterna) }}*/
/*             {{ form_label(form.propiedadexterna) }}*/
/*             {{ form_errors(form.propiedadexterna) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <h5>Comisiones</h5>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="input-field col s6">*/
/*             {{ form_widget(form.comision) }}*/
/*             {{ form_label(form.comision) }}*/
/*             {{ form_errors(form.comision) }}*/
/*         </div>*/
/*         <div class="input-field col s6">*/
/*             Monto de Comisión: <label id="lbl_monto_comision"></label>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="input-field col s6">*/
/*             {{ form_widget(form.comisionoficina) }}*/
/*             {{ form_label(form.comisionoficina) }}*/
/*             {{ form_errors(form.comisionoficina) }}*/
/*         </div>*/
/*         <div class="input-field col s6">*/
/*             Monto de Comisión: <label id="lbl_monto_comisionoficina"></label>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="input-field col s6">*/
/*             {{ form_widget(form.comisionasesor) }}*/
/*             {{ form_label(form.comisionasesor) }}*/
/*             {{ form_errors(form.comisionasesor) }}*/
/*         </div>*/
/*         <div class="input-field col s6">*/
/*             Monto de Comisión: <label id="lbl_monto_comisionasesor"></label>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <input type="submit" value="Guardar" class="waves-effect waves-light btn blue darken-4 right" onclick="return fechaHoraConFormato();" />*/
/*     <a href="{{ path('comision_index', {}) }}" class="waves-effect waves-light btn blue darken-4 right">Cancelar</a>*/
/* */
/*     {{ form_end(form) }}*/
/* */
/*     <script>*/
/* */
/*         $(document).ready(function() {*/
/*             $('select').material_select();*/
/*         });*/
/* */
/*         $('#comision_fecha').pickadate({*/
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
/*             if (document.getElementById('comision_fecha').value == "")*/
/*             {*/
/*                 document.getElementById('fechaError').style.visibility="";*/
/*                 alert('La fecha es inválida');*/
/*                 return false;*/
/*             }*/
/* */
/*             document.getElementById('comision_fecha').value  = document.getElementById('comision_fecha').value.replace(' 00:00:00', '');*/
/* */
/*             document.getElementById('comision_fecha').value += ' 00:00:00';*/
/* */
/*             return true;*/
/*         }*/
/* */
/*         document.getElementById('comision_monto').value = "0"*/
/*         document.getElementById('comision_monto').addEventListener('change', actualizarComisiones, false);*/
/*         document.getElementById('comision_comision').addEventListener('change', actualizarComisiones, false);*/
/*         document.getElementById('comision_comisionoficina').addEventListener('change', actualizarComisiones, false);*/
/*         document.getElementById('comision_comisionasesor').addEventListener('change', actualizarComisiones, false);*/
/*         actualizarComisiones();*/
/* */
/*         function actualizarComisiones()*/
/*         {*/
/*             monto = parseFloat(document.getElementById('comision_monto').value);*/
/*             comision = parseFloat(document.getElementById('comision_comision').value);*/
/*             comisionoficina = parseFloat(document.getElementById('comision_comisionoficina').value);*/
/*             comisionasesor = parseFloat(document.getElementById('comision_comisionasesor').value);*/
/* */
/*             ncomision=0;*/
/*             ncomisionoficina=0;*/
/*             ncomisionasesor=0;*/
/* */
/* */
/*             if (monto > 0) {*/
/*                 if (comision >= 0) {*/
/* */
/*                     ncomision = (monto) * (comision / 100);*/
/* */
/*                     if (comisionoficina >= 0) {*/
/* */
/*                         ncomisionoficina = ncomision * (comisionoficina / 100);*/
/* */
/*                         if (comisionasesor >= 0)*/
/*                         {*/
/*                             ncomisionasesor = ncomisionoficina * (comisionasesor / 100);*/
/*                         }*/
/* */
/*                     }*/
/*                 }*/
/*             }*/
/* */
/*             lbl_comision = document.getElementById('lbl_monto_comision');*/
/*             lbl_comisionoficina = document.getElementById('lbl_monto_comisionoficina');*/
/*             lbl_comisionasesor = document.getElementById('lbl_monto_comisionasesor');*/
/* */
/*             lbl_comision.innerHTML = '$ ' + ncomision;*/
/*             lbl_comisionoficina.innerHTML = '$ ' + ncomisionoficina;*/
/*             lbl_comisionasesor.innerHTML = '$ ' + ncomisionasesor;*/
/* */
/*         }*/
/*     </script>*/
/* */
/*     <style>*/
/*         body{*/
/*             background-color: white;*/
/*             height: 100vh;*/
/*         }*/
/* */
/*         #solicitud_caracteristicas label*/
/*         {*/
/*             margin-right: 20px;*/
/*         }*/
/* */
/*         .activelabel label {*/
/*             font-size: 0.8rem;*/
/*             -webkit-transform: translateY(-140%);*/
/*             transform: translateY(-140%);*/
/*         }*/
/*     </style>*/
/* </div>*/
/* {% endblock %}*/
/* */
