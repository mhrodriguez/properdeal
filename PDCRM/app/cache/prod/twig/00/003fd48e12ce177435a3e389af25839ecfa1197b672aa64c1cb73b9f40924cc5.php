<?php

/* :inmueble:portafolio.html.twig */
class __TwigTemplate_a954d9a521b775eb3577c16fbd546de36207f492ffaee955143c2224617079fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":inmueble:portafolio.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <!-- Page Layout here -->
            <br/>
            <div class=\"row\">
                <nav>
                    <div class=\"nav-wrapper z-depth-1\">
                        <div class=\"col s12  blue darken-1 \">
                            <a href=\"#!\" class=\"breadcrumb\">Portafolio</a>
                        </div>
                    </div>
                </nav>
            </div>

            <div class=\"row\">
                <div class=\"col s4 m4 l4\">
                    <a href=\"#\" onclick=\"enviarInmuebles()\" class=\"btn blue darken-1\">Enviar propiedades seleccionadas al prospecto</a>
                </div>
            </div>

            <div class=\"row\">
                ";
        // line 26
        $context["index"] = 0;
        // line 27
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inmuebles"]) ? $context["inmuebles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
            // line 28
            echo "                <div class=\"col s4\">
                    <div class=\"card large\">
                        <div class=\"card-image\">
                            ";
            // line 31
            if ((twig_length_filter($this->env, $this->getAttribute($context["inmueble"], "Imagenes", array())) > 0)) {
                // line 32
                echo "                                <img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["inmueble"], "Imagenes", array()), 0, array(), "array"), "getWebPath", array(), "method"), "html", null, true);
                echo "\" style=\"height:20em;\"/>
                            ";
            }
            // line 34
            echo "                        </div>
                        <div class=\"card-content\">
                            <p>
                                ID: ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "legacyid", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "nombreid", array()), "html", null, true);
            echo "<br>
                                ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idTipoInmueble", array()), "nombre", array()), "html", null, true);
            echo " en ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
            echo "<br>
                                <a href=\"#!\"><i class=\"material-icons left\">location_on</i>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "calle", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idEstado", array()), "nombre", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inmueble"], "idMunicipio", array()), "nombre", array()), "html", null, true);
            echo "</a><br>
                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inmueble_show", array("id" => $this->getAttribute($context["inmueble"], "idInmueble", array()))), "html", null, true);
            echo "\">VER</a><br>
                                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prospecto_desasignarpropiedad", array("idProspecto" => $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "idProspecto", array()), "idInmueble" => $this->getAttribute($context["inmueble"], "idInmueble", array()))), "html", null, true);
            echo "\" onclick=\"if (confirm('¿Está seguro que desea desasignar al prospecto de esta propiedad?')) return true; else return false;\">DESASIGNAR PROSPECTO</a>
                            </p>
                        </div>
                        <div class=\"card-action\">
                            <div class=\"row\">
                                <div class=\"col s8 m8 l8\">
                                    <input type=\"checkbox\" id=\"chkEnviar";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "idInmueble", array()), "html", null, true);
            echo "\" />
                                    <label for=\"chkEnviar";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : null), "html", null, true);
            echo "\">Enviar</label>
                                </div>
                                <div class=\"col s4 m4 l4\">
                                    ";
            // line 51
            if (($this->getAttribute((isset($context["inmuebleenviado"]) ? $context["inmuebleenviado"] : null), (isset($context["index"]) ? $context["index"] : null), array(), "array") == true)) {
                // line 52
                echo "                                        <a href=\"#\"><i class=\"material-icons center\">send</i>Enviado</a>
                                    ";
            }
            // line 54
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            // line 59
            $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
            // line 60
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </div>

            <div class=\"row\">
                <div class=\"col s4 m4 l4\">
                    <a href=\"#\" onclick=\"enviarInmuebles()\" class=\"btn blue darken-1\">Enviar propiedades seleccionadas al prospecto</a>
                </div>
            </div>

            <div class=\"row\"></div>

        </div>
    </div>

    <script>
        function enviarInmuebles()
        {
            var inmueblesIds=\"\";
            var checkbox;

            ";
        // line 80
        $context["index"] = 0;
        // line 81
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inmuebles"]) ? $context["inmuebles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
            // line 82
            echo "
            checkbox = document.getElementById(\"chkEnviar";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : null), "html", null, true);
            echo "\");
            if (checkbox.checked == true)
            {
                inmueblesIds=inmueblesIds+checkbox.value + \",\";
            }

            ";
            // line 89
            $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
            // line 90
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "
            inmueblesIds = inmueblesIds.substring(0, inmueblesIds.length - 1);

            if (inmueblesIds==\"\")
            {
                alert(\"No hay propiedades seleccionadas.\");
            }
            else {

                var url = \"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("mensaje_enviarinmuebleaprospectos", array());
        echo "?idProspectos=\" + ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "idProspecto", array()), "html", null, true);
        echo " +\"&ida=";
        echo twig_escape_filter($this->env, (isset($context["ida"]) ? $context["ida"] : null), "html", null, true);
        echo "&email=&idInmuebles=\" + inmueblesIds + \"&mensaje=\" + \"\" + \"&titulo=\" + \"Propiedad recomendada\";
                url = url + \"&redurl=";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inmueble_portafolioprospecto", array("idprospecto" => $this->getAttribute((isset($context["prospecto"]) ? $context["prospecto"] : null), "idProspecto", array()))), "html", null, true);
        echo "\";
                //alert(url);
                window.location = url;
            }
        }
    </script>
    
";
    }

    // line 110
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 111
        echo "
    <style>
        body {
            background: white;
            height: 100vh;
        }
    </style>

";
    }

    public function getTemplateName()
    {
        return ":inmueble:portafolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 111,  225 => 110,  213 => 101,  205 => 100,  194 => 91,  188 => 90,  186 => 89,  177 => 83,  174 => 82,  169 => 81,  167 => 80,  146 => 61,  140 => 60,  138 => 59,  131 => 54,  127 => 52,  125 => 51,  119 => 48,  113 => 47,  104 => 41,  100 => 40,  92 => 39,  86 => 38,  80 => 37,  75 => 34,  69 => 32,  67 => 31,  62 => 28,  57 => 27,  55 => 26,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <!-- Page Layout here -->*/
/*             <br/>*/
/*             <div class="row">*/
/*                 <nav>*/
/*                     <div class="nav-wrapper z-depth-1">*/
/*                         <div class="col s12  blue darken-1 ">*/
/*                             <a href="#!" class="breadcrumb">Portafolio</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col s4 m4 l4">*/
/*                     <a href="#" onclick="enviarInmuebles()" class="btn blue darken-1">Enviar propiedades seleccionadas al prospecto</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 {% set index = 0 %}*/
/*                 {% for inmueble in inmuebles %}*/
/*                 <div class="col s4">*/
/*                     <div class="card large">*/
/*                         <div class="card-image">*/
/*                             {% if (inmueble.Imagenes|length>0) %}*/
/*                                 <img class="img-responsive" src="{{ inmueble.Imagenes[0].getWebPath() }}" style="height:20em;"/>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <div class="card-content">*/
/*                             <p>*/
/*                                 ID: {{ inmueble.legacyid }} {{ inmueble.nombreid }}<br>*/
/*                                 {{ inmueble.idTipoInmueble.nombre }} en {{ inmueble.idOperacionInmueble.nombre }}<br>*/
/*                                 <a href="#!"><i class="material-icons left">location_on</i>{{ inmueble.calle }}, {{ inmueble.idEstado.nombre }}, {{ inmueble.idMunicipio.nombre }}</a><br>*/
/*                                 <a href="{{ path ('inmueble_show', {'id': inmueble.idInmueble}) }}">VER</a><br>*/
/*                                 <a href="{{ path ('prospecto_desasignarpropiedad', {'idProspecto': prospecto.idProspecto, 'idInmueble': inmueble.idInmueble}) }}" onclick="if (confirm('¿Está seguro que desea desasignar al prospecto de esta propiedad?')) return true; else return false;">DESASIGNAR PROSPECTO</a>*/
/*                             </p>*/
/*                         </div>*/
/*                         <div class="card-action">*/
/*                             <div class="row">*/
/*                                 <div class="col s8 m8 l8">*/
/*                                     <input type="checkbox" id="chkEnviar{{ index }}" value="{{ inmueble.idInmueble }}" />*/
/*                                     <label for="chkEnviar{{ index }}">Enviar</label>*/
/*                                 </div>*/
/*                                 <div class="col s4 m4 l4">*/
/*                                     {% if (inmuebleenviado[index] == true) %}*/
/*                                         <a href="#"><i class="material-icons center">send</i>Enviado</a>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% set index=index+1 %}*/
/*                 {% endfor %}*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col s4 m4 l4">*/
/*                     <a href="#" onclick="enviarInmuebles()" class="btn blue darken-1">Enviar propiedades seleccionadas al prospecto</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row"></div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <script>*/
/*         function enviarInmuebles()*/
/*         {*/
/*             var inmueblesIds="";*/
/*             var checkbox;*/
/* */
/*             {% set index = 0 %}*/
/*             {% for inmueble in inmuebles %}*/
/* */
/*             checkbox = document.getElementById("chkEnviar{{ index }}");*/
/*             if (checkbox.checked == true)*/
/*             {*/
/*                 inmueblesIds=inmueblesIds+checkbox.value + ",";*/
/*             }*/
/* */
/*             {% set index = index + 1 %}*/
/*             {% endfor %}*/
/* */
/*             inmueblesIds = inmueblesIds.substring(0, inmueblesIds.length - 1);*/
/* */
/*             if (inmueblesIds=="")*/
/*             {*/
/*                 alert("No hay propiedades seleccionadas.");*/
/*             }*/
/*             else {*/
/* */
/*                 var url = "{{ path('mensaje_enviarinmuebleaprospectos', {}) }}?idProspectos=" + {{ prospecto.idProspecto }} +"&ida={{ ida }}&email=&idInmuebles=" + inmueblesIds + "&mensaje=" + "" + "&titulo=" + "Propiedad recomendada";*/
/*                 url = url + "&redurl={{ path('inmueble_portafolioprospecto', {'idprospecto':prospecto.idProspecto}) }}";*/
/*                 //alert(url);*/
/*                 window.location = url;*/
/*             }*/
/*         }*/
/*     </script>*/
/*     */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/*     <style>*/
/*         body {*/
/*             background: white;*/
/*             height: 100vh;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
