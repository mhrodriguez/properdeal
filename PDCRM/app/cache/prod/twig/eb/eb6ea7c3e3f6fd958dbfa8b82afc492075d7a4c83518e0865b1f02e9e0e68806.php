<?php

/* :ids:index.html.twig */
class __TwigTemplate_4a7e1b84a7c3c29438852a95fb025453fe737a0f2979f6bfdc7c7ac1fb4db6cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base4.html.twig", ":ids:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base4.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <sytle>
        <!-- Include stylesheet -->
        <link href=\"https://cdn.quilljs.com/1.0.0-rc.0/quill.snow.css\" rel=\"stylesheet\">
    </sytle>
    <div class=\"container\">

        ";
        // line 10
        if ((isset($context["enviosimplificado"]) ? $context["enviosimplificado"] : null)) {
            // line 11
            echo "        <div id=\"divPanelPropiedades\" style=\"display:none\">
        ";
        } else {
            // line 13
            echo "        <div id=\"divPanelPropiedades\">
        ";
        }
        // line 15
        echo "
            <div class=\"row\">
                <h2>Seleccione las propiedades</h2>
            </div>

            <div class=\"row\">
            <select id=\"selSeleccionar\" style=\"width:100%\" multiple>
                ";
        // line 22
        if ( !(isset($context["enviosimplificado"]) ? $context["enviosimplificado"] : null)) {
            // line 23
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inmuebles"]) ? $context["inmuebles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
                // line 24
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "legacyid", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "nombreid", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idTipoInmueble", array()), "nombre", array()), "html", null, true);
                echo " en ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
                echo "
                        ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMoneda", array()), "simbolo", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "precio", array()), 2, ".", ","), "html", null, true);
                echo "
                        ";
                // line 26
                if (($this->getAttribute($context["inmueble"], "preciohasta", array()) > 0)) {
                    // line 27
                    echo "                        a ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMoneda", array()), "simbolo", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "preciohasta", array()), 2, ".", ","), "html", null, true);
                    echo "
                        ";
                }
                // line 29
                echo "                        (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idUsuario", array()), "nombre", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["inmueble"], "fechaCreacion", array()), "d/m/Y"), "html", null, true);
                echo ")</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                ";
        }
        // line 32
        echo "            </select>
            </div>

            <br>
            <div class=\"row\">
                <button onclick=\"agregar();\" class=\"button\">Agregar</button>
                <script>
                    function agregar()
                    {
                        selEnviar = document.getElementById('selEnviar');

                        // Obtener seleccionado
                        selSeleccionar = document.getElementById('selSeleccionar');
                        for (var i= 0, iLen=selSeleccionar.options.length; i<iLen; i++) {
                            opt = selSeleccionar.options[i];

                            if (opt.selected) {

                                selEnviar.appendChild(opt);
                            }
                        }
                    }
                </script>
                <button onclick=\"quitar();\" class=\"button\">Quitar</button>
                <script>
                    function quitar()
                    {
                        selSeleccionar = document.getElementById('selSeleccionar');
                        // Obtener seleccionado
                        selEnviar = document.getElementById('selEnviar');

                        for (var i= 0, iLen=selEnviar.options.length; i<iLen; i++) {
                            opt = selEnviar.options[i];

                            if (opt.selected) {

                                selSeleccionar.appendChild(opt);
                            }
                        }
                    }
                </script>
            </div>

            <br>
            <div class=\"row\">
                <h2>Propiedades seleccionadas</h2>
                <select id=\"selEnviar\" style=\"width:100%\" multiple>
                    ";
        // line 79
        if ((isset($context["enviosimplificado"]) ? $context["enviosimplificado"] : null)) {
            // line 80
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inmuebles"]) ? $context["inmuebles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
                // line 81
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "legacyid", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idTipoInmueble", array()), "nombre", array()), "html", null, true);
                echo " en ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMoneda", array()), "simbolo", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inmueble"], "precio", array()), 2, ".", ","), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idUsuario", array()), "nombre", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["inmueble"], "fechaCreacion", array()), "d/m/Y"), "html", null, true);
                echo ")</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                    ";
        }
        // line 84
        echo "                </select>
            </div>
        </div>

        <br>

        <div class=\"row\">
        <h2>Mensaje</h2>

        <label for=\"inpTitulo\">Título</label><br>
        <input id=\"inpTitulo\" style=\"width:99.5%; height: 20px\"/><br><br>

        <div id=\"editor\" class=\"editor\">
        </div>
        <!-- Include the Quill library -->
        <script src=\"https://cdn.quilljs.com/1.0.0-rc.0/quill.js\"></script>
        <!-- Initialize Quill editor -->
        <script type=\"text/javascript\">
            var quill = new Quill('#editor', {
                theme: 'snow'
            });
        </script>
        </div>

        <br>
        <div class=\"row\">
            <label for=\"inpEmail\">Enviar a e-mail:</label>
            <input id=\"inpEmail\" style=\"width:300px;\"/>
        </div>

        ";
        // line 114
        if ((isset($context["mostrarprospectos"]) ? $context["mostrarprospectos"] : null)) {
            // line 115
            echo "        <div class=\"row\">
        ";
        } else {
            // line 117
            echo "        <div class=\"row\" style=\"display: none\">
        ";
        }
        // line 119
        echo "            <h2>Prospectos</h2>
            <a href=\"#!\" onclick=\"seleccionarTodos();\">Seleccionar todos</a><br><br>
            ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prospectos"]) ? $context["prospectos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["prospecto"]) {
            // line 122
            echo "                <input type=\"checkbox\" id=\"chkProspecto";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prospecto"], "idProspecto", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prospecto"], "idProspecto", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prospecto"], "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prospecto"], "apellidos", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prospecto"], "email", array()), "html", null, true);
            echo ") </input>
                <br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prospecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "
            <script>
                function seleccionarTodos()
                {
                    ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prospectos"]) ? $context["prospectos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["prospecto"]) {
            // line 130
            echo "                    document.getElementById(\"chkProspecto";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prospecto"], "idProspecto", array()), "html", null, true);
            echo "\").checked=true;
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prospecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                }
            </script>
        </div>

        <br>
        <div class=\"row\" style=\"text-align:center;\">
            <button onclick=\"enviar();\" class=\"button\">Enviar</button>
        </div>
        <script>
            function enviar() {
                // Obtener email
                var email = document.getElementById(\"inpEmail\").value;
                var titulo = document.getElementById(\"inpTitulo\").value;

                // Obtener prospectos
                var idProspectos='';
                ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prospectos"]) ? $context["prospectos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["prospecto"]) {
            // line 149
            echo "                if (document.getElementById(\"chkProspecto";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prospecto"], "idProspecto", array()), "html", null, true);
            echo "\").checked == true) {
                    idProspectos = idProspectos + \",\" + \"";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["prospecto"], "idProspecto", array()), "html", null, true);
            echo "\";
                }
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prospecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "
                if (idProspectos == '' && (email == '')) {
                    alert(\"Seleccione por lo menos un prospecto o escriba una dirección de mail de envío.\");
                    return;
                }

                if (titulo == '' || titulo == null) {
                    alert(\"Escriba un título para el mensaje.\");
                    return;
                }

                if (idProspectos != null) {
                    idProspectos = idProspectos.substring(1);
                }

                // Obtener inmuebles
                var idInmuebles='';
                selEnviar = document.getElementById('selEnviar');

                for (var i= 0, iLen=selEnviar.options.length; i<iLen; i++) {
                    opt = selEnviar.options[i];
                    idInmuebles = idInmuebles + ',' + opt.value;
                }
                if (idInmuebles == '')
                {
                    alert(\"Seleccione por lo menos una propiedad.\");
                    return;
                }
                idInmuebles = idInmuebles.substring(1);

                // obtener mensaje
                mensaje = document.getElementById('editor').innerHTML;
                var editor = new Quill('#editor');
                mensaje = editor.getText();
                //alert(mensaje);

                var url = \"";
        // line 189
        echo $this->env->getExtension('routing')->getPath("mensaje_enviarinmuebleaprospectos", array());
        echo "?idProspectos=\" + idProspectos +\"&ida=";
        echo twig_escape_filter($this->env, (isset($context["ida"]) ? $context["ida"] : null), "html", null, true);
        echo "&email=\" + email + \"&idInmuebles=\" + idInmuebles + \"&mensaje=\" + mensaje + \"&titulo=\" + titulo;

                ";
        // line 191
        if (array_key_exists("url", $context)) {
            // line 192
            echo "                    url = url + \"&redurl=";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\";
                ";
        }
        // line 194
        echo "
                //alert(url);
                window.location =url;
            }
        </script>
    </div>

    <style>
        body{
            background-color: white;
            height: 140vh;
            margin: 30px;
        }
        p
        {
            font-size: medium;
        }
        select {
            font-family: Arial, Helvetica, sans-serif;
            font-size: small;
            height: 200px;
        }
        select option {
            background-color: white;
        }
        h2 {
            font-family: Arial, Helvetica, sans-serif;
        }
        a {
            font-family: Arial, Helvetica, sans-serif;
        }
        label {
            font-family: Arial, Helvetica, sans-serif;
        }
        input {
            font-family: Arial, Helvetica, sans-serif;
        }
        .button {
            background-color: cornflowerblue;
            height: 32px;
            border: none;
            color: white;
            padding: 5px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>

";
    }

    public function getTemplateName()
    {
        return ":ids:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 194,  360 => 192,  358 => 191,  351 => 189,  313 => 153,  304 => 150,  299 => 149,  295 => 148,  277 => 132,  268 => 130,  264 => 129,  258 => 125,  240 => 122,  236 => 121,  232 => 119,  228 => 117,  224 => 115,  222 => 114,  190 => 84,  187 => 83,  164 => 81,  159 => 80,  157 => 79,  108 => 32,  105 => 31,  94 => 29,  86 => 27,  84 => 26,  78 => 25,  65 => 24,  60 => 23,  58 => 22,  49 => 15,  45 => 13,  41 => 11,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base4.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <sytle>*/
/*         <!-- Include stylesheet -->*/
/*         <link href="https://cdn.quilljs.com/1.0.0-rc.0/quill.snow.css" rel="stylesheet">*/
/*     </sytle>*/
/*     <div class="container">*/
/* */
/*         {% if enviosimplificado %}*/
/*         <div id="divPanelPropiedades" style="display:none">*/
/*         {% else %}*/
/*         <div id="divPanelPropiedades">*/
/*         {% endif %}*/
/* */
/*             <div class="row">*/
/*                 <h2>Seleccione las propiedades</h2>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*             <select id="selSeleccionar" style="width:100%" multiple>*/
/*                 {% if not enviosimplificado %}*/
/*                 {%  for inmueble in inmuebles  %}*/
/*                     <option value="{{ inmueble.idInmueble }}">{{ inmueble.legacyid }} - {{ inmueble.nombreid }} {{ inmueble.idTipoInmueble.nombre }} en {{ inmueble.idOperacionInmueble.nombre }}*/
/*                         {{ inmueble.idMoneda.simbolo }} {{inmueble.precio|number_format(2, '.', ',')}}*/
/*                         {% if inmueble.preciohasta > 0 %}*/
/*                         a {{ inmueble.idMoneda.simbolo }} {{inmueble.preciohasta|number_format(2, '.', ',')}}*/
/*                         {% endif %}*/
/*                         ({{ inmueble.idUsuario.nombre }} - {{ inmueble.fechaCreacion | date('d/m/Y') }})</option>*/
/*                 {% endfor %}*/
/*                 {% endif %}*/
/*             </select>*/
/*             </div>*/
/* */
/*             <br>*/
/*             <div class="row">*/
/*                 <button onclick="agregar();" class="button">Agregar</button>*/
/*                 <script>*/
/*                     function agregar()*/
/*                     {*/
/*                         selEnviar = document.getElementById('selEnviar');*/
/* */
/*                         // Obtener seleccionado*/
/*                         selSeleccionar = document.getElementById('selSeleccionar');*/
/*                         for (var i= 0, iLen=selSeleccionar.options.length; i<iLen; i++) {*/
/*                             opt = selSeleccionar.options[i];*/
/* */
/*                             if (opt.selected) {*/
/* */
/*                                 selEnviar.appendChild(opt);*/
/*                             }*/
/*                         }*/
/*                     }*/
/*                 </script>*/
/*                 <button onclick="quitar();" class="button">Quitar</button>*/
/*                 <script>*/
/*                     function quitar()*/
/*                     {*/
/*                         selSeleccionar = document.getElementById('selSeleccionar');*/
/*                         // Obtener seleccionado*/
/*                         selEnviar = document.getElementById('selEnviar');*/
/* */
/*                         for (var i= 0, iLen=selEnviar.options.length; i<iLen; i++) {*/
/*                             opt = selEnviar.options[i];*/
/* */
/*                             if (opt.selected) {*/
/* */
/*                                 selSeleccionar.appendChild(opt);*/
/*                             }*/
/*                         }*/
/*                     }*/
/*                 </script>*/
/*             </div>*/
/* */
/*             <br>*/
/*             <div class="row">*/
/*                 <h2>Propiedades seleccionadas</h2>*/
/*                 <select id="selEnviar" style="width:100%" multiple>*/
/*                     {% if enviosimplificado %}*/
/*                         {%  for inmueble in inmuebles  %}*/
/*                             <option value="{{ inmueble.idInmueble }}">{{ inmueble.legacyid }} - {{ inmueble.idTipoInmueble.nombre }} en {{ inmueble.idOperacionInmueble.nombre }} {{ inmueble.idMoneda.simbolo }} {{inmueble.precio|number_format(2, '.', ',')}} ({{ inmueble.idUsuario.nombre }} - {{ inmueble.fechaCreacion | date('d/m/Y') }})</option>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 </select>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <br>*/
/* */
/*         <div class="row">*/
/*         <h2>Mensaje</h2>*/
/* */
/*         <label for="inpTitulo">Título</label><br>*/
/*         <input id="inpTitulo" style="width:99.5%; height: 20px"/><br><br>*/
/* */
/*         <div id="editor" class="editor">*/
/*         </div>*/
/*         <!-- Include the Quill library -->*/
/*         <script src="https://cdn.quilljs.com/1.0.0-rc.0/quill.js"></script>*/
/*         <!-- Initialize Quill editor -->*/
/*         <script type="text/javascript">*/
/*             var quill = new Quill('#editor', {*/
/*                 theme: 'snow'*/
/*             });*/
/*         </script>*/
/*         </div>*/
/* */
/*         <br>*/
/*         <div class="row">*/
/*             <label for="inpEmail">Enviar a e-mail:</label>*/
/*             <input id="inpEmail" style="width:300px;"/>*/
/*         </div>*/
/* */
/*         {% if mostrarprospectos  %}*/
/*         <div class="row">*/
/*         {% else %}*/
/*         <div class="row" style="display: none">*/
/*         {% endif %}*/
/*             <h2>Prospectos</h2>*/
/*             <a href="#!" onclick="seleccionarTodos();">Seleccionar todos</a><br><br>*/
/*             {%  for prospecto in prospectos %}*/
/*                 <input type="checkbox" id="chkProspecto{{ prospecto.idProspecto }}" value="{{ prospecto.idProspecto }}">{{ prospecto.nombre }} {{ prospecto.apellidos }} ({{ prospecto.email }}) </input>*/
/*                 <br>*/
/*             {% endfor %}*/
/* */
/*             <script>*/
/*                 function seleccionarTodos()*/
/*                 {*/
/*                     {%  for prospecto in prospectos %}*/
/*                     document.getElementById("chkProspecto{{ prospecto.idProspecto }}").checked=true;*/
/*                     {% endfor %}*/
/*                 }*/
/*             </script>*/
/*         </div>*/
/* */
/*         <br>*/
/*         <div class="row" style="text-align:center;">*/
/*             <button onclick="enviar();" class="button">Enviar</button>*/
/*         </div>*/
/*         <script>*/
/*             function enviar() {*/
/*                 // Obtener email*/
/*                 var email = document.getElementById("inpEmail").value;*/
/*                 var titulo = document.getElementById("inpTitulo").value;*/
/* */
/*                 // Obtener prospectos*/
/*                 var idProspectos='';*/
/*                 {% for prospecto in prospectos %}*/
/*                 if (document.getElementById("chkProspecto{{ prospecto.idProspecto }}").checked == true) {*/
/*                     idProspectos = idProspectos + "," + "{{ prospecto.idProspecto }}";*/
/*                 }*/
/*                 {% endfor %}*/
/* */
/*                 if (idProspectos == '' && (email == '')) {*/
/*                     alert("Seleccione por lo menos un prospecto o escriba una dirección de mail de envío.");*/
/*                     return;*/
/*                 }*/
/* */
/*                 if (titulo == '' || titulo == null) {*/
/*                     alert("Escriba un título para el mensaje.");*/
/*                     return;*/
/*                 }*/
/* */
/*                 if (idProspectos != null) {*/
/*                     idProspectos = idProspectos.substring(1);*/
/*                 }*/
/* */
/*                 // Obtener inmuebles*/
/*                 var idInmuebles='';*/
/*                 selEnviar = document.getElementById('selEnviar');*/
/* */
/*                 for (var i= 0, iLen=selEnviar.options.length; i<iLen; i++) {*/
/*                     opt = selEnviar.options[i];*/
/*                     idInmuebles = idInmuebles + ',' + opt.value;*/
/*                 }*/
/*                 if (idInmuebles == '')*/
/*                 {*/
/*                     alert("Seleccione por lo menos una propiedad.");*/
/*                     return;*/
/*                 }*/
/*                 idInmuebles = idInmuebles.substring(1);*/
/* */
/*                 // obtener mensaje*/
/*                 mensaje = document.getElementById('editor').innerHTML;*/
/*                 var editor = new Quill('#editor');*/
/*                 mensaje = editor.getText();*/
/*                 //alert(mensaje);*/
/* */
/*                 var url = "{{ path('mensaje_enviarinmuebleaprospectos', {}) }}?idProspectos=" + idProspectos +"&ida={{ ida }}&email=" + email + "&idInmuebles=" + idInmuebles + "&mensaje=" + mensaje + "&titulo=" + titulo;*/
/* */
/*                 {% if url is defined %}*/
/*                     url = url + "&redurl={{ url }}";*/
/*                 {% endif %}*/
/* */
/*                 //alert(url);*/
/*                 window.location =url;*/
/*             }*/
/*         </script>*/
/*     </div>*/
/* */
/*     <style>*/
/*         body{*/
/*             background-color: white;*/
/*             height: 140vh;*/
/*             margin: 30px;*/
/*         }*/
/*         p*/
/*         {*/
/*             font-size: medium;*/
/*         }*/
/*         select {*/
/*             font-family: Arial, Helvetica, sans-serif;*/
/*             font-size: small;*/
/*             height: 200px;*/
/*         }*/
/*         select option {*/
/*             background-color: white;*/
/*         }*/
/*         h2 {*/
/*             font-family: Arial, Helvetica, sans-serif;*/
/*         }*/
/*         a {*/
/*             font-family: Arial, Helvetica, sans-serif;*/
/*         }*/
/*         label {*/
/*             font-family: Arial, Helvetica, sans-serif;*/
/*         }*/
/*         input {*/
/*             font-family: Arial, Helvetica, sans-serif;*/
/*         }*/
/*         .button {*/
/*             background-color: cornflowerblue;*/
/*             height: 32px;*/
/*             border: none;*/
/*             color: white;*/
/*             padding: 5px 32px;*/
/*             text-align: center;*/
/*             text-decoration: none;*/
/*             display: inline-block;*/
/*             font-size: 16px;*/
/*             margin: 4px 2px;*/
/*             cursor: pointer;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
