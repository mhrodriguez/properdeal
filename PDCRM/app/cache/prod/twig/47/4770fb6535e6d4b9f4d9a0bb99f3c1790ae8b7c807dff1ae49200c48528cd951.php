<?php

/* :inmuebleimagen:index.html.twig */
class __TwigTemplate_f76c41c5524909317f3de8c52c5fe14c242f9925564b0b778c91a7bed13a169e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":inmuebleimagen:index.html.twig", 1);
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
            <!-- Page Layout here -->
            <br/>
            <div class=\"row\">
                <nav>
                    <div class=\"nav-wrapper z-depth-1\">
                        <div class=\"col s12  blue darken-1 \">
                            <a href=\"#!\" class=\"breadcrumb\">Imágenes de Propiedad</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class=\"row\">
                <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("inmuebleimagen_multinew", array());
        echo "?idInmueble=";
        echo twig_escape_filter($this->env, (isset($context["idInmueble"]) ? $context["idInmueble"] : null), "html", null, true);
        echo "\" class=\"waves-effect waves-light btn blue darken-1 right\"><i class=\"material-icons left\">add</i>Nueva Imagen</a>
            </div>

            ";
        // line 21
        $context["ids"] = "";
        // line 22
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagenes"]) ? $context["imagenes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
            // line 23
            echo "                ";
            $context["ids"] = (((isset($context["ids"]) ? $context["ids"] : null) . $this->getAttribute($context["imagen"], "idImagen", array())) . ",");
            // line 24
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
            <div class=\"row\">
                <div class=\"col s12 m12 l12\">

                <script>
                    function obtenerOrdenes() {
                        var ordenes = '&ordenes=';
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagenes"]) ? $context["imagenes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
            // line 33
            echo "                        ordenes = ordenes + document.getElementById('inp";
            echo twig_escape_filter($this->env, $this->getAttribute($context["imagen"], "idImagen", array()), "html", null, true);
            echo "').value + ',';
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
                        document.getElementById('frm').action = document.getElementById('frm').action + ordenes;
                    }
                </script>

               <div id=\"progressGuardar\" style=\"display:none\">
                        <label>Realizando operación, espere un momento por favor...</label>
                        <div id=\"divProgress2\" class=\"progress\" >
                            <div class=\"indeterminate\"></div>
                        </div>
               </div>

                <form id=\"frm\" action=\"";
        // line 47
        echo twig_escape_filter($this->env, (((($this->env->getExtension('routing')->getPath("inmuebleimagen_orden") . "?idInmueble=") . (isset($context["idInmueble"]) ? $context["idInmueble"] : null)) . "&ids=") . (isset($context["ids"]) ? $context["ids"] : null)), "html", null, true);
        echo "\" method=\"post\" onsubmit=\"obtenerOrdenes();\">

                ";
        // line 49
        if ((twig_length_filter($this->env, (isset($context["imagenes"]) ? $context["imagenes"] : null)) > 0)) {
            // line 50
            echo "                <button type=\"submit\" class=\"btn blue darken-4 left\">Guardar orden</button>
                ";
        }
        // line 52
        echo "
                <table class=\"striped\">
                    <thead>
                    <tr>
                        <th>Orden actual</th>
                        <th>Imagen</th>
                        <th>Orden</th>
                        <th>Descripción</th>
                        <th>Operaciones</th>
                    </tr>
                    </thead>
                    <tbody>

                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagenes"]) ? $context["imagenes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
            // line 66
            echo "                        <tr>
                            <td>
                                ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["imagen"], "orden", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                <a>
                                    <img src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["imagen"], "getWebPath", array(), "method"), "html", null, true);
            echo "?dummy=";
            echo twig_escape_filter($this->env, twig_random($this->env, 1000), "html", null, true);
            echo "\"/>
                                </a>
                            </td>
                            <td>
                                <input id=\"inp";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["imagen"], "idImagen", array()), "html", null, true);
            echo "\" type=\"text\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["imagen"], "orden", array()), "html", null, true);
            echo "\" />

                            </td>
                            <td>
                                ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["imagen"], "descripcion", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                <a href=\"#\" class=\"tooltipped\" data-tooltip=\"Borrar\" data-position=\"top\"
                                   onclick=\"if (confirm('¿Está seguro que desea borrar esta imagen?')) { window.location.href='";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inmuebleimagen_delete", array("id" => $this->getAttribute($context["imagen"], "idImagen", array()))), "html", null, true);
            echo "?idInmueble=";
            echo twig_escape_filter($this->env, (isset($context["idInmueble"]) ? $context["idInmueble"] : null), "html", null, true);
            echo "'; }\">
                                    <i class=\"material-icons left\">delete</i>
                                </a>

                                <a href=\"#\" class=\"tooltipped\" data-tooltip=\"Rotar a la Izquierda\" data-position=\"top\"
                                   onclick=\"document.getElementById('progressGuardar').style.display=''; window.location.href='";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inmuebleimagen_rotar", array("id" => $this->getAttribute($context["imagen"], "idImagen", array()))), "html", null, true);
            echo "?idInmueble=";
            echo twig_escape_filter($this->env, (isset($context["idInmueble"]) ? $context["idInmueble"] : null), "html", null, true);
            echo "&direccion=1';\">
                                    <i class=\"material-icons left\">undo</i>
                                </a>

                                <a href=\"#\" class=\"tooltipped\" data-tooltip=\"Rotar a la Derecha\" data-position=\"top\"
                                   onclick=\"document.getElementById('progressGuardar').style.display=''; window.location.href='";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inmuebleimagen_rotar", array("id" => $this->getAttribute($context["imagen"], "idImagen", array()))), "html", null, true);
            echo "?idInmueble=";
            echo twig_escape_filter($this->env, (isset($context["idInmueble"]) ? $context["idInmueble"] : null), "html", null, true);
            echo "&direccion=2';\">
                                    <i class=\"material-icons left\">redo</i>
                                </a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
                    </tbody>
                </table>

                ";
        // line 104
        if ((twig_length_filter($this->env, (isset($context["imagenes"]) ? $context["imagenes"] : null)) > 0)) {
            // line 105
            echo "                    <button type=\"submit\" class=\"btn blue darken-4 left\">Guardar orden</button>
                ";
        }
        // line 107
        echo "
                </form>
                </div>

            </div>
        </div>
    </div>
";
    }

    // line 116
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 117
        echo "
    <style>
        body {
            background: white;
            height: 100vh;
        }

        p
        {
            font-size: small;
        }

        img
        {
            width:72px;
            height:72px;
        }

        .imgoperacion
        {
            width:24px;
            height:24px;
        }
    </style>

";
    }

    public function getTemplateName()
    {
        return ":inmuebleimagen:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 117,  231 => 116,  220 => 107,  216 => 105,  214 => 104,  208 => 100,  194 => 94,  184 => 89,  174 => 84,  167 => 80,  158 => 76,  149 => 72,  142 => 68,  138 => 66,  134 => 65,  119 => 52,  115 => 50,  113 => 49,  108 => 47,  94 => 35,  85 => 33,  81 => 32,  72 => 25,  66 => 24,  63 => 23,  58 => 22,  56 => 21,  48 => 18,  32 => 4,  29 => 3,  11 => 1,);
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
/*                             <a href="#!" class="breadcrumb">Imágenes de Propiedad</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <a href="{{ path('inmuebleimagen_multinew', {}) }}?idInmueble={{ idInmueble }}" class="waves-effect waves-light btn blue darken-1 right"><i class="material-icons left">add</i>Nueva Imagen</a>*/
/*             </div>*/
/* */
/*             {% set ids = '' %}*/
/*             {% for imagen in imagenes %}*/
/*                 {% set ids = ids ~ imagen.idImagen ~ ',' %}*/
/*             {% endfor %}*/
/* */
/*             <div class="row">*/
/*                 <div class="col s12 m12 l12">*/
/* */
/*                 <script>*/
/*                     function obtenerOrdenes() {*/
/*                         var ordenes = '&ordenes=';*/
/*                         {% for imagen in imagenes %}*/
/*                         ordenes = ordenes + document.getElementById('inp{{ imagen.idImagen }}').value + ',';*/
/*                         {% endfor %}*/
/* */
/*                         document.getElementById('frm').action = document.getElementById('frm').action + ordenes;*/
/*                     }*/
/*                 </script>*/
/* */
/*                <div id="progressGuardar" style="display:none">*/
/*                         <label>Realizando operación, espere un momento por favor...</label>*/
/*                         <div id="divProgress2" class="progress" >*/
/*                             <div class="indeterminate"></div>*/
/*                         </div>*/
/*                </div>*/
/* */
/*                 <form id="frm" action="{{ path('inmuebleimagen_orden')~'?idInmueble='~idInmueble~'&ids='~ids }}" method="post" onsubmit="obtenerOrdenes();">*/
/* */
/*                 {% if imagenes|length>0 %}*/
/*                 <button type="submit" class="btn blue darken-4 left">Guardar orden</button>*/
/*                 {% endif %}*/
/* */
/*                 <table class="striped">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Orden actual</th>*/
/*                         <th>Imagen</th>*/
/*                         <th>Orden</th>*/
/*                         <th>Descripción</th>*/
/*                         <th>Operaciones</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/* */
/*                         {% for imagen in imagenes %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {{ imagen.orden }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a>*/
/*                                     <img src="{{ imagen.getWebPath() }}?dummy={{ random(1000) }}"/>*/
/*                                 </a>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <input id="inp{{ imagen.idImagen }}" type="text" value="{{ imagen.orden }}" />*/
/* */
/*                             </td>*/
/*                             <td>*/
/*                                 {{ imagen.descripcion }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a href="#" class="tooltipped" data-tooltip="Borrar" data-position="top"*/
/*                                    onclick="if (confirm('¿Está seguro que desea borrar esta imagen?')) { window.location.href='{{ path('inmuebleimagen_delete', {'id': imagen.idImagen} ) }}?idInmueble={{ idInmueble }}'; }">*/
/*                                     <i class="material-icons left">delete</i>*/
/*                                 </a>*/
/* */
/*                                 <a href="#" class="tooltipped" data-tooltip="Rotar a la Izquierda" data-position="top"*/
/*                                    onclick="document.getElementById('progressGuardar').style.display=''; window.location.href='{{ path('inmuebleimagen_rotar', {'id': imagen.idImagen} ) }}?idInmueble={{ idInmueble }}&direccion=1';">*/
/*                                     <i class="material-icons left">undo</i>*/
/*                                 </a>*/
/* */
/*                                 <a href="#" class="tooltipped" data-tooltip="Rotar a la Derecha" data-position="top"*/
/*                                    onclick="document.getElementById('progressGuardar').style.display=''; window.location.href='{{ path('inmuebleimagen_rotar', {'id': imagen.idImagen} ) }}?idInmueble={{ idInmueble }}&direccion=2';">*/
/*                                     <i class="material-icons left">redo</i>*/
/*                                 </a>*/
/*                             </td>*/
/*                         </tr>*/
/*                         {% endfor %}*/
/* */
/*                     </tbody>*/
/*                 </table>*/
/* */
/*                 {% if imagenes|length>0 %}*/
/*                     <button type="submit" class="btn blue darken-4 left">Guardar orden</button>*/
/*                 {% endif %}*/
/* */
/*                 </form>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/*     <style>*/
/*         body {*/
/*             background: white;*/
/*             height: 100vh;*/
/*         }*/
/* */
/*         p*/
/*         {*/
/*             font-size: small;*/
/*         }*/
/* */
/*         img*/
/*         {*/
/*             width:72px;*/
/*             height:72px;*/
/*         }*/
/* */
/*         .imgoperacion*/
/*         {*/
/*             width:24px;*/
/*             height:24px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
