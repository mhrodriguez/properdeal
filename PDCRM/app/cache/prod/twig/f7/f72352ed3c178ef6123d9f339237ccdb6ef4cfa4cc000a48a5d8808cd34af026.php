<?php

/* :mensaje:index.html.twig */
class __TwigTemplate_1357623336052764722495d499afd6fb855c56807d2f9e207033b791f017622c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":mensaje:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <!-- Page Layout here -->
            <br/>
            <div class=\"row\">
                <nav>
                    <div class=\"nav-wrapper z-depth-1\">
                        <div class=\"col s12  blue darken-1 \">
                            <a href=\"#!\" class=\"breadcrumb\">Mensajes</a>
                        </div>
                    </div>
                </nav>
            </div>

            <div class=\"row\">
                ";
        // line 19
        if (((isset($context["esVerMensajesBorrados"]) ? $context["esVerMensajesBorrados"] : null) == false)) {
            // line 20
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("mensaje_index", array());
            echo ".xlsx\" class=\"waves-effect waves-light btn blue darken-1\">Generar Excel</a>
                <a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("mensaje_indexborrado", array());
            echo "\" class=\"waves-effect waves-light btn blue darken-1\">Ver Mensajes Borrados</a>
                ";
        } else {
            // line 23
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("mensaje_indexborrado", array());
            echo ".xlsx\" class=\"waves-effect waves-light btn blue darken-1\">Generar Excel</a>
                <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("mensaje_index", array());
            echo "\" class=\"waves-effect waves-light btn blue darken-1\">< Regresar</a>
                ";
        }
        // line 26
        echo "            </div>

            <div class=\"row\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mensajes"]) ? $context["mensajes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 30
            echo "                    <div class=\"col s12 m12\">
                        <div class=\"card-panel grey lighten-5 z-depth-1\">
                            <div class=\"row valign-wrapper\">
                                <div class=\"col s3\">
                                    ";
            // line 34
            if ((twig_length_filter($this->env, $this->getAttribute($context["mensaje"], "Inmuebles", array())) > 0)) {
                // line 35
                echo "                                        ";
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["mensaje"], "Inmuebles", array()), 0, array(), "array"), "Imagenes", array())) > 0)) {
                    // line 36
                    echo "                                        <img class=\"imginmueble\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["mensaje"], "Inmuebles", array()), 0, array(), "array"), "Imagenes", array()), 0, array(), "array"), "getWebPath", array(), "method"), "html", null, true);
                    echo "\">
                                        ";
                }
                // line 38
                echo "                                    ";
            }
            // line 39
            echo "                                </div>
                                <div class=\"col s4\">
                                    ";
            // line 41
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "3a93b33_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33_0") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33_ic_usuario_1.jpg");
                // line 42
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"circle responsive-img\" style=\"width:50%;margin-left: 25%\">
                                    ";
            } else {
                // asset "3a93b33"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33.jpg");
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"\" class=\"circle responsive-img\" style=\"width:50%;margin-left: 25%\">
                                    ";
            }
            unset($context["asset_url"]);
            // line 44
            echo "
                                    ";
            // line 45
            if ( !(null === $this->getAttribute($context["mensaje"], "idUsuario", array()))) {
                // line 46
                echo "                                        <div style=\"align-content: center; text-align: center;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mensaje"], "idUsuario", array()), "nombre", array()), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mensaje"], "idUsuario", array()), "telefono", array()), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mensaje"], "idUsuario", array()), "email", array()), "html", null, true);
                echo "<br>
                                            <a href=\"#\" onclick=\"window.location = '";
                // line 47
                echo $this->env->getExtension('routing')->getPath("prospecto_new", array());
                echo "?nombre=";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mensaje"], "idUsuario", array()), "nombre", array()), "html", null, true);
                echo "&email=";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mensaje"], "idUsuario", array()), "email", array()), "html", null, true);
                echo "&telefono=";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mensaje"], "idUsuario", array()), "telefono", array()), "html", null, true);
                echo "';\">Agregar Prospecto</a>
                                        </div>
                                    ";
            } else {
                // line 50
                echo "                                        <div style=\"align-content: center; text-align: center;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "nombre", array()), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "telefono", array()), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "emailremitente", array()), "html", null, true);
                echo "<br>
                                            <a href=\"#\" onclick=\"window.location = '";
                // line 51
                echo $this->env->getExtension('routing')->getPath("prospecto_new", array());
                echo "?nombre=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "nombre", array()), "html", null, true);
                echo "&email=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "emailremitente", array()), "html", null, true);
                echo "&telefono=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "telefono", array()), "html", null, true);
                echo "';\">Agregar Prospecto</a>
                                        </div>
                                    ";
            }
            // line 54
            echo "                                </div>
                                <div class=\"col s6\">
                                    <span class=\"black-text\">
                                        <h5>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "titulo", array()), "html", null, true);
            echo "</h5>
                                        <p>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mensaje"], "fechaCreacion", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</p>

                                        ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "texto", array()), "html", null, true);
            echo "

                                        <br>

                                        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mensaje"], "inmuebles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["inmueble"]) {
                // line 65
                echo "                                            <br>
                                            <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inmueble_show", array("id" => $this->getAttribute($context["inmueble"], "idInmueble", array()))), "html", null, true);
                echo "\">Propiedad ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["inmueble"], "legacyid", array()), "html", null, true);
                echo "</a>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inmueble'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "
                                        ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mensaje"], "solicitudes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
                // line 70
                echo "                                            <br>
                                            <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_show", array("id" => $this->getAttribute($context["solicitud"], "idSolicitud", array()))), "html", null, true);
                echo "\">Ver solicitud</a>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                                    </span>
                                </div>

                                <div class=\"col s1\">
                                    ";
            // line 77
            if (((isset($context["esVerMensajesBorrados"]) ? $context["esVerMensajesBorrados"] : null) == false)) {
                // line 78
                echo "                                    <form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mensaje_borrar", array("idMensaje" => $this->getAttribute($context["mensaje"], "idMensaje", array()))), "html", null, true);
                echo "\" method=\"post\">
                                        <input type=\"submit\" value=\"Borrar\" class=\"waves-effect waves-light btn gray darken-4 right\">
                                    </form>
                                    ";
            }
            // line 82
            echo "                                </div>

                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            </div>
        </div>
    </div>
";
    }

    // line 93
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 94
        echo "    <style>
        body {
            background: white;
            height: 100vh;
        }
        .imginmueble
        {
            width: 200px;
            height: 140px;
        }
    </style>

";
    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":mensaje:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 108,  263 => 94,  260 => 93,  253 => 88,  242 => 82,  234 => 78,  232 => 77,  226 => 73,  218 => 71,  215 => 70,  211 => 69,  208 => 68,  198 => 66,  195 => 65,  191 => 64,  184 => 60,  179 => 58,  175 => 57,  170 => 54,  158 => 51,  149 => 50,  137 => 47,  128 => 46,  126 => 45,  123 => 44,  109 => 42,  105 => 41,  101 => 39,  98 => 38,  92 => 36,  89 => 35,  87 => 34,  81 => 30,  77 => 29,  72 => 26,  67 => 24,  62 => 23,  57 => 21,  52 => 20,  50 => 19,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
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
/*                             <a href="#!" class="breadcrumb">Mensajes</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 {% if esVerMensajesBorrados == false %}*/
/*                 <a href="{{ path('mensaje_index', {}) }}.xlsx" class="waves-effect waves-light btn blue darken-1">Generar Excel</a>*/
/*                 <a href="{{ path('mensaje_indexborrado', {}) }}" class="waves-effect waves-light btn blue darken-1">Ver Mensajes Borrados</a>*/
/*                 {% else %}*/
/*                 <a href="{{ path('mensaje_indexborrado', {}) }}.xlsx" class="waves-effect waves-light btn blue darken-1">Generar Excel</a>*/
/*                 <a href="{{ path('mensaje_index', {}) }}" class="waves-effect waves-light btn blue darken-1">< Regresar</a>*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 {% for mensaje in mensajes %}*/
/*                     <div class="col s12 m12">*/
/*                         <div class="card-panel grey lighten-5 z-depth-1">*/
/*                             <div class="row valign-wrapper">*/
/*                                 <div class="col s3">*/
/*                                     {% if (mensaje.Inmuebles|length>0) %}*/
/*                                         {% if (mensaje.Inmuebles[0].Imagenes|length>0) %}*/
/*                                         <img class="imginmueble" src="{{ mensaje.Inmuebles[0].Imagenes[0].getWebPath() }}">*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                                 <div class="col s4">*/
/*                                     {% image '@FrameworkBundle/Resources/public/images/ic_usuario.jpg' %}*/
/*                                         <img src="{{ asset_url }}" alt="" class="circle responsive-img" style="width:50%;margin-left: 25%">*/
/*                                     {% endimage %}*/
/* */
/*                                     {% if mensaje.idUsuario is not null %}*/
/*                                         <div style="align-content: center; text-align: center;">{{ mensaje.idUsuario.nombre }}<br>{{ mensaje.idUsuario.telefono }}<br>{{ mensaje.idUsuario.email }}<br>*/
/*                                             <a href="#" onclick="window.location = '{{ path('prospecto_new', {}) }}?nombre={{ mensaje.idUsuario.nombre }}&email={{ mensaje.idUsuario.email }}&telefono={{ mensaje.idUsuario.telefono }}';">Agregar Prospecto</a>*/
/*                                         </div>*/
/*                                     {% else %}*/
/*                                         <div style="align-content: center; text-align: center;">{{ mensaje.nombre }}<br>{{ mensaje.telefono }}<br>{{ mensaje.emailremitente }}<br>*/
/*                                             <a href="#" onclick="window.location = '{{ path('prospecto_new', {}) }}?nombre={{ mensaje.nombre }}&email={{ mensaje.emailremitente }}&telefono={{ mensaje.telefono }}';">Agregar Prospecto</a>*/
/*                                         </div>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                                 <div class="col s6">*/
/*                                     <span class="black-text">*/
/*                                         <h5>{{ mensaje.titulo }}</h5>*/
/*                                         <p>{{ mensaje.fechaCreacion |date("d/m/Y H:i:s")  }}</p>*/
/* */
/*                                         {{ mensaje.texto }}*/
/* */
/*                                         <br>*/
/* */
/*                                         {% for inmueble in mensaje.inmuebles  %}*/
/*                                             <br>*/
/*                                             <a href="{{ path("inmueble_show", {"id":inmueble.idInmueble})  }}">Propiedad {{ inmueble.legacyid  }}</a>*/
/*                                         {% endfor %}*/
/* */
/*                                         {% for solicitud in mensaje.solicitudes  %}*/
/*                                             <br>*/
/*                                             <a href="{{ path("solicitud_show", {"id":solicitud.idSolicitud})  }}">Ver solicitud</a>*/
/*                                         {% endfor %}*/
/*                                     </span>*/
/*                                 </div>*/
/* */
/*                                 <div class="col s1">*/
/*                                     {% if esVerMensajesBorrados == false %}*/
/*                                     <form action="{{ path('mensaje_borrar', {'idMensaje': mensaje.idMensaje}) }}" method="post">*/
/*                                         <input type="submit" value="Borrar" class="waves-effect waves-light btn gray darken-4 right">*/
/*                                     </form>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <style>*/
/*         body {*/
/*             background: white;*/
/*             height: 100vh;*/
/*         }*/
/*         .imginmueble*/
/*         {*/
/*             width: 200px;*/
/*             height: 140px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock %}*/
/* */
