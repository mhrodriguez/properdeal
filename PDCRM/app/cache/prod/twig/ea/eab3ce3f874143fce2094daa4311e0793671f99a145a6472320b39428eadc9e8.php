<?php

/* :asesor:index.html.twig */
class __TwigTemplate_82743828ff13c2013de472abc9e014a273a0ff4ede96ddb0274f98d1c0da4347 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":asesor:index.html.twig", 1);
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
        echo "    <div id=\"wrapper\">

        <div id=\"container\">
            <br/>
            <div class=\"row\">
                <nav>
                    <div class=\"nav-wrapper z-depth-1\">
                        <div class=\"col s12  blue darken-1 \">
                            ";
        // line 12
        if ( !(isset($context["borrados"]) ? $context["borrados"] : null)) {
            // line 13
            echo "                                <a href=\"#!\" class=\"breadcrumb\">Asesores (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["usuarios"]) ? $context["usuarios"] : null)), "html", null, true);
            echo ")</a>
                            ";
        } else {
            // line 15
            echo "                                <a href=\"#!\" class=\"breadcrumb\">Asesores borrados (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["usuarios"]) ? $context["usuarios"] : null)), "html", null, true);
            echo ")</a>
                            ";
        }
        // line 17
        echo "                        </div>
                    </div>
                </nav>
            </div>


            <div id=\"divControles\" class=\"row\">
                <div class=\"col s6 l6 m6\">
                    <form method=\"GET\">
                        <div class=\"input-field\">
                            <input id=\"search\" name=\"search\" type=\"text\" required>

                            ";
        // line 29
        if ((isset($context["borrados"]) ? $context["borrados"] : null)) {
            // line 30
            echo "                                <input id=\"borrados\" name=\"borrados\" value=\"1\" type=\"hidden\">
                            ";
        }
        // line 32
        echo "
                            <label for=\"search\">Buscar</label>
                        </div>
                    </form>

                    ";
        // line 37
        if ( !(isset($context["borrados"]) ? $context["borrados"] : null)) {
            // line 38
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("asesor_index", array());
            echo "\" class=\"waves-effect waves-light btn blue darken-1 left\">Todos</a>
                    ";
        } else {
            // line 40
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("asesor_index", array());
            echo "?borrados=1\" class=\"waves-effect waves-light btn blue darken-1 left\">Todos</a>
                    ";
        }
        // line 42
        echo "
                </div>

                <div class=\"col s6\">
                    ";
        // line 46
        if ( !(isset($context["borrados"]) ? $context["borrados"] : null)) {
            // line 47
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("asesor_index", array());
            echo "?borrados=1\" class=\"right\">Ver asesores borrados</a>
                        <br><br>
                        <a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("asesor_new", array());
            echo "\" class=\"waves-effect waves-light btn blue darken-1 right\"><i class=\"material-icons left\">add</i>Nuevo Asesor</a>
                    ";
        } else {
            // line 51
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("asesor_index", array());
            echo "\" class=\"right\">Ver asesores activos</a>
                    ";
        }
        // line 53
        echo "
                    <a href=\"#\" class=\"btn blue darken-1 right\" onclick=\"window.print();\" style=\"margin-right: 10px;\"><i class=\"material-icons right\">print</i>Imprimir</a>
                </div>

            </div>

            <div class=\"row\">
                <table class=\"striped\">
                    <thead>
                    <tr>
                        <th data-field=\"id\"></th>
                        <th data-field=\"name\">Contactos</th>
                        <th data-field=\"price\">Registro</th>
                        <th data-field=\"price\">Opciones</th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 71
        $context["index"] = 0;
        // line 72
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 73
            echo "                    <tr>
                        <td style=\"width:100px\">
                            ";
            // line 75
            if ( !(null === $this->getAttribute((isset($context["pathFotografias"]) ? $context["pathFotografias"] : null), (isset($context["index"]) ? $context["index"] : null), array(), "array"))) {
                // line 76
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pathFotografias"]) ? $context["pathFotografias"] : null), (isset($context["index"]) ? $context["index"] : null), array(), "array"), "html", null, true);
                echo "\" alt=\"\" class=\"circle\" style=\"width:60px; height:60px;\">
                            ";
            } else {
                // line 78
                echo "                                ";
                if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                    // asset "3a93b33_0"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33_0") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33_ic_usuario_1.jpg");
                    // line 79
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                    echo "\" alt=\"\" class=\"circle responsive-img\" style=\"width:60px; height:60px;\">
                                ";
                } else {
                    // asset "3a93b33"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33.jpg");
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                    echo "\" alt=\"\" class=\"circle responsive-img\" style=\"width:60px; height:60px;\">
                                ";
                }
                unset($context["asset_url"]);
                // line 81
                echo "                            ";
            }
            // line 82
            echo "
                        </td>
                        <td>
                            <ul>
                                <li>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
            echo "</li><br>
                                <li><a href=\"#\"><i class=\"material-icons left\">email</i>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "email", array()), "html", null, true);
            echo "</a></li><br>
                                ";
            // line 88
            if ($this->getAttribute($context["usuario"], "telefono", array())) {
                // line 89
                echo "                                <li><a href=\"#\"><i class=\"material-icons left\">phone</i>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "telefono", array()), "html", null, true);
                echo "</a></li><br>
                                ";
            }
            // line 91
            echo "                                ";
            if ($this->getAttribute($context["usuario"], "telefono2", array())) {
                // line 92
                echo "                                <li><a href=\"#\"><i class=\"material-icons left\">phone</i>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "telefono2", array()), "html", null, true);
                echo "</a></li><br>
                                ";
            }
            // line 94
            echo "                                ";
            if ($this->getAttribute($context["usuario"], "celular", array())) {
                // line 95
                echo "                                <li><a href=\"#\"><i class=\"material-icons left\">phonelink_ring</i>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "celular", array()), "html", null, true);
                echo "</a></li><br>
                                ";
            }
            // line 97
            echo "                                <li><b>ProperDeal</b></li>
                            </ul>
                        </td>
                        <td>
                            Desde: ";
            // line 101
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["usuario"], "fechaCreacion", array()), "d-m-Y"), "html", null, true);
            echo "<br><bR>
                            Propiedades: ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arrayCountPropiedades"]) ? $context["arrayCountPropiedades"] : null), (isset($context["index"]) ? $context["index"] : null), array(), "array"), "html", null, true);
            echo "<br>
                            Prospectos: ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arrayCountProspectos"]) ? $context["arrayCountProspectos"] : null), (isset($context["index"]) ? $context["index"] : null), array(), "array"), "html", null, true);
            echo "<br>
                        </td>
                        <td>
                            ";
            // line 106
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPERADMIN") == true)) {
                // line 107
                echo "                                ";
                if ($this->getAttribute($context["usuario"], "activo", array())) {
                    // line 108
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asesor_borrar", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
                    echo "\" class=\"tooltipped\" data-tooltip=\"Borrar\" data-position=\"top\" onclick=\"return confirm('¿Realmente desea borrar este asesor?');\">
                                    <i class=\"material-icons left\">delete</i>
                                </a>
                                <a href=\"";
                    // line 111
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit2", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
                    echo "\" class=\"tooltipped\" data-tooltip=\"Editar\" data-position=\"top\"><i class=\"material-icons left\">mode_edit</i></a>
                                <a href=\"";
                    // line 112
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asesor_enviarmensajebienvenida", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
                    echo "?idUsuario=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
                    echo "\" class=\"tooltipped\" data-tooltip=\"E-mail de bienvenida\" data-position=\"top\" onclick=\"return confirm('¿Está seguro que desea enviar un mail de bienvenida a este asesor?');\"><i class=\"material-icons left\">email</i></a>
                                ";
                }
                // line 114
                echo "                            ";
            }
            // line 115
            echo "                        </td>
                    </tr>
                    ";
            // line 117
            $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
            // line 118
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        (function() {

            var beforePrint = function() {
                document.getElementById('divControles').style.display='none';
            };

            var afterPrint = function() {
                document.getElementById('divControles').style.display='';
            };

            if (window.matchMedia) {
                var mediaQueryList = window.matchMedia('print');
                mediaQueryList.addListener(function(mql) {
                    if (mql.matches) {
                        beforePrint();
                    } else {
                        afterPrint();
                    }
                });
            }

            window.onbeforeprint = beforePrint;
            window.onafterprint = afterPrint;

        }());
    </script>

";
    }

    // line 155
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 156
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
        return ":asesor:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 156,  319 => 155,  281 => 119,  275 => 118,  273 => 117,  269 => 115,  266 => 114,  259 => 112,  255 => 111,  248 => 108,  245 => 107,  243 => 106,  237 => 103,  233 => 102,  229 => 101,  223 => 97,  217 => 95,  214 => 94,  208 => 92,  205 => 91,  199 => 89,  197 => 88,  193 => 87,  189 => 86,  183 => 82,  180 => 81,  166 => 79,  161 => 78,  155 => 76,  153 => 75,  149 => 73,  144 => 72,  142 => 71,  122 => 53,  116 => 51,  111 => 49,  105 => 47,  103 => 46,  97 => 42,  91 => 40,  85 => 38,  83 => 37,  76 => 32,  72 => 30,  70 => 29,  56 => 17,  50 => 15,  44 => 13,  42 => 12,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/* */
/*         <div id="container">*/
/*             <br/>*/
/*             <div class="row">*/
/*                 <nav>*/
/*                     <div class="nav-wrapper z-depth-1">*/
/*                         <div class="col s12  blue darken-1 ">*/
/*                             {% if not borrados %}*/
/*                                 <a href="#!" class="breadcrumb">Asesores ({{ usuarios | length }})</a>*/
/*                             {% else %}*/
/*                                 <a href="#!" class="breadcrumb">Asesores borrados ({{ usuarios | length }})</a>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/* */
/* */
/*             <div id="divControles" class="row">*/
/*                 <div class="col s6 l6 m6">*/
/*                     <form method="GET">*/
/*                         <div class="input-field">*/
/*                             <input id="search" name="search" type="text" required>*/
/* */
/*                             {% if borrados %}*/
/*                                 <input id="borrados" name="borrados" value="1" type="hidden">*/
/*                             {% endif %}*/
/* */
/*                             <label for="search">Buscar</label>*/
/*                         </div>*/
/*                     </form>*/
/* */
/*                     {% if not borrados %}*/
/*                         <a href="{{ path('asesor_index', {}) }}" class="waves-effect waves-light btn blue darken-1 left">Todos</a>*/
/*                     {% else %}*/
/*                         <a href="{{ path('asesor_index', {}) }}?borrados=1" class="waves-effect waves-light btn blue darken-1 left">Todos</a>*/
/*                     {% endif %}*/
/* */
/*                 </div>*/
/* */
/*                 <div class="col s6">*/
/*                     {% if not borrados %}*/
/*                         <a href="{{ path('asesor_index', {}) }}?borrados=1" class="right">Ver asesores borrados</a>*/
/*                         <br><br>*/
/*                         <a href="{{ path('asesor_new', {}) }}" class="waves-effect waves-light btn blue darken-1 right"><i class="material-icons left">add</i>Nuevo Asesor</a>*/
/*                     {% else %}*/
/*                         <a href="{{ path('asesor_index', {}) }}" class="right">Ver asesores activos</a>*/
/*                     {% endif %}*/
/* */
/*                     <a href="#" class="btn blue darken-1 right" onclick="window.print();" style="margin-right: 10px;"><i class="material-icons right">print</i>Imprimir</a>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <table class="striped">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th data-field="id"></th>*/
/*                         <th data-field="name">Contactos</th>*/
/*                         <th data-field="price">Registro</th>*/
/*                         <th data-field="price">Opciones</th>*/
/*                     </tr>*/
/*                     </thead>*/
/* */
/*                     <tbody>*/
/*                     {% set index=0 %}*/
/*                     {% for usuario in usuarios %}*/
/*                     <tr>*/
/*                         <td style="width:100px">*/
/*                             {% if pathFotografias[index] is not null %}*/
/*                                 <img src="{{ pathFotografias[index] }}" alt="" class="circle" style="width:60px; height:60px;">*/
/*                             {% else %}*/
/*                                 {% image '@FrameworkBundle/Resources/public/images/ic_usuario.jpg' %}*/
/*                                 <img src="{{ asset_url }}" alt="" class="circle responsive-img" style="width:60px; height:60px;">*/
/*                                 {% endimage %}*/
/*                             {% endif %}*/
/* */
/*                         </td>*/
/*                         <td>*/
/*                             <ul>*/
/*                                 <li>{{ usuario.nombre }}</li><br>*/
/*                                 <li><a href="#"><i class="material-icons left">email</i>{{ usuario.email }}</a></li><br>*/
/*                                 {% if (usuario.telefono) %}*/
/*                                 <li><a href="#"><i class="material-icons left">phone</i>{{ usuario.telefono }}</a></li><br>*/
/*                                 {% endif %}*/
/*                                 {% if (usuario.telefono2) %}*/
/*                                 <li><a href="#"><i class="material-icons left">phone</i>{{ usuario.telefono2 }}</a></li><br>*/
/*                                 {% endif %}*/
/*                                 {% if (usuario.celular) %}*/
/*                                 <li><a href="#"><i class="material-icons left">phonelink_ring</i>{{ usuario.celular }}</a></li><br>*/
/*                                 {% endif %}*/
/*                                 <li><b>ProperDeal</b></li>*/
/*                             </ul>*/
/*                         </td>*/
/*                         <td>*/
/*                             Desde: {{ usuario.fechaCreacion|date('d-m-Y') }}<br><bR>*/
/*                             Propiedades: {{ arrayCountPropiedades[index] }}<br>*/
/*                             Prospectos: {{ arrayCountProspectos[index]  }}<br>*/
/*                         </td>*/
/*                         <td>*/
/*                             {% if (is_granted('ROLE_SUPERADMIN') == true) %}*/
/*                                 {% if usuario.activo %}*/
/*                                 <a href="{{ path('asesor_borrar', {'id':usuario.id}) }}" class="tooltipped" data-tooltip="Borrar" data-position="top" onclick="return confirm('¿Realmente desea borrar este asesor?');">*/
/*                                     <i class="material-icons left">delete</i>*/
/*                                 </a>*/
/*                                 <a href="{{ path ('usuario_edit2', {'id': usuario.id}) }}" class="tooltipped" data-tooltip="Editar" data-position="top"><i class="material-icons left">mode_edit</i></a>*/
/*                                 <a href="{{ path ('asesor_enviarmensajebienvenida', {'id': usuario.id}) }}?idUsuario={{ usuario.id }}" class="tooltipped" data-tooltip="E-mail de bienvenida" data-position="top" onclick="return confirm('¿Está seguro que desea enviar un mail de bienvenida a este asesor?');"><i class="material-icons left">email</i></a>*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     {% set index=index+1 %}*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script>*/
/*         (function() {*/
/* */
/*             var beforePrint = function() {*/
/*                 document.getElementById('divControles').style.display='none';*/
/*             };*/
/* */
/*             var afterPrint = function() {*/
/*                 document.getElementById('divControles').style.display='';*/
/*             };*/
/* */
/*             if (window.matchMedia) {*/
/*                 var mediaQueryList = window.matchMedia('print');*/
/*                 mediaQueryList.addListener(function(mql) {*/
/*                     if (mql.matches) {*/
/*                         beforePrint();*/
/*                     } else {*/
/*                         afterPrint();*/
/*                     }*/
/*                 });*/
/*             }*/
/* */
/*             window.onbeforeprint = beforePrint;*/
/*             window.onafterprint = afterPrint;*/
/* */
/*         }());*/
/*     </script>*/
/* */
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
