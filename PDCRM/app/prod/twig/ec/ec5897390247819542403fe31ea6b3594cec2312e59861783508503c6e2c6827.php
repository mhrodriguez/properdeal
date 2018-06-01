<?php

/* :colaborador:index.html.twig */
class __TwigTemplate_f6cd1f0dbe63afd7c88b251a41a3ca5097176c863fbd3a5a9d1877b465d16c87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":colaborador:index.html.twig", 1);
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
                            <a href=\"#!\" class=\"breadcrumb\">Colaboradores</a>
                        </div>
                    </div>
                </nav>
            </div>

            <div class=\"row\">

                <div class=\"col s12\">
                        <ul class=\"tabs\">
                            <li class=\"tab col s4\"><a class=\"active blue-text\" href=\"#tabAgregarColaborador\">Agregar Colaborador</a></li>
                            <li class=\"tab col s4\"><a class=\"blue-text\" href=\"#tabHandshakes\">HandShakes (";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["handshakes"]) ? $context["handshakes"] : null)), "html", null, true);
        echo ")</a></li>
                            <li class=\"tab col s4\"><a class=\"blue-text\" href=\"#tabSeguidores\">Te siguen (";
        // line 24
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["seguidores"]) ? $context["seguidores"] : null)), "html", null, true);
        echo ")</a></li>
                        </ul>
                    </div>
                    <div id=\"tabAgregarColaborador\" class=\"col s12\">
                        <table class=\"striped\">
                            <thead>
                            <tr>
                                <th data-field=\"id\">Colaborador</th>
                                <th>Actividad</th>
                                <th>HandShake</th>
                            </tr>
                            </thead>

                            <tbody>
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posiblescolaboradores"]) ? $context["posiblescolaboradores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["colaborador"]) {
            // line 39
            echo "                                <tr>
                                    <td>
                                        Oficina: ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["colaborador"], "empresa", array()), "html", null, true);
            echo "<br/>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["colaborador"], "nombre", array()), "html", null, true);
            echo "<br/>Alta: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["colaborador"], "fechaCreacion", array()), "d-m-Y"), "html", null, true);
            echo "
                                    </td>
                                    <td></td>
                                    <td>
                                        <a href=\"#\" onclick=\"onHandshake(";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["colaborador"], "id", array()), "html", null, true);
            echo ");\">
                                            ";
            // line 46
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "a56b394_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56b394_0") : $this->env->getExtension('asset')->getAssetUrl("images/a56b394_handshake_1.png");
                // line 47
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"Seguir\"/>
                                            ";
            } else {
                // asset "a56b394"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56b394") : $this->env->getExtension('asset')->getAssetUrl("images/a56b394.png");
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" alt=\"Seguir\"/>
                                            ";
            }
            unset($context["asset_url"]);
            // line 49
            echo "                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colaborador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                            </tbody>
                        </table>
                    </div>
                    <div id=\"tabHandshakes\" class=\"col s12\">
                        <table class=\"striped\">
                        <thead>
                        <tr>
                            <th data-field=\"id\">Handshake</th>
                            <th>Actividad</th>
                        </tr>
                        </thead>

                        <tbody>
                        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["handshakes"]) ? $context["handshakes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["handshake"]) {
            // line 67
            echo "                            <tr>
                                <td>
                                    Oficina: ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["handshake"], "empresa", array()), "html", null, true);
            echo "<br/>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["handshake"], "nombre", array()), "html", null, true);
            echo "<br/>Alta: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["handshake"], "fechaCreacion", array()), "d-m-Y"), "html", null, true);
            echo "
                                </td>
                                <td></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['handshake'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        </tbody>
                        </table>
                    </div>
                    <div id=\"tabSeguidores\" class=\"col s12\">

                        <table class=\"striped\">
                            <thead>
                            <tr>
                                <th data-field=\"id\">Seguidor</th>
                                <th>Actividad</th>
                            </tr>
                            </thead>

                            <tbody>
                            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["seguidores"]) ? $context["seguidores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["seguidor"]) {
            // line 89
            echo "                                <tr>
                                    <td>
                                        Oficina: ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["seguidor"], "empresa", array()), "html", null, true);
            echo "<br/>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["seguidor"], "nombre", array()), "html", null, true);
            echo "<br/>Alta: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["seguidor"], "fechaCreacion", array()), "d-m-Y"), "html", null, true);
            echo "
                                    </td>
                                    <td></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seguidor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                            </tbody>
                        </table>

                    </div>
                </div>

                <div id=\"mdlConfirmacion\" class=\"modal\">
                    <div class=\"modal-content\">
                        <h5>Handshake</h5>
                        <p>¿Está seguro que desea agregar este Colaborador?</p>
                    </div>
                    <div class=\"modal-footer\">
                        <a href=\"#\" class=\"waves-effect waves-gray gray btn-flat\" onclick=\"\$('#mdlConfirmacion').closeModal(); return false;\">No</a>
                        <a href=\"#\" class=\"waves-effect waves-gray blue btn-flat\" onclick=\"\$('#mdlConfirmacion').closeModal(); requestHandshake(); return false;\" id=\"md1_YesBtn\">Si</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
";
    }

    // line 118
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 119
        echo "
    <style>
        body {
            background: white;
            height: 100vh;
        }

        .tabs .indicator {
            background-color: blue !important;
        }
    </style>

    <script>
        var idUsuarioColaborador=-1;
        function onHandshake(idColaborador)
        {
            idUsuarioColaborador = idColaborador;

            \$('#mdlConfirmacion').openModal();
        }

        function requestHandshake()
        {
            var url = 'http://' + window.location.hostname  + '";
        // line 142
        echo $this->env->getExtension('routing')->getPath("colaborador_handshake", array());
        echo "?idUsuarioColaborador=' + idUsuarioColaborador;

            \$.ajax({
                url: url,
                dataType: \"json\",
                success: function(data) {

                    if (data.resultado == true)
                    {
                        alert('Colaborador agregado correctamente.');
                    }
                    else
                    {
                        alert('ERROR: El colaborador no pudo ser agregado.');
                    }
                }
            });
        }
    </script>

";
    }

    public function getTemplateName()
    {
        return ":colaborador:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 142,  228 => 119,  225 => 118,  201 => 96,  186 => 91,  182 => 89,  178 => 88,  162 => 74,  147 => 69,  143 => 67,  139 => 66,  124 => 53,  115 => 49,  101 => 47,  97 => 46,  93 => 45,  82 => 41,  78 => 39,  74 => 38,  57 => 24,  53 => 23,  32 => 4,  29 => 3,  11 => 1,);
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
/*                             <a href="#!" class="breadcrumb">Colaboradores</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col s12">*/
/*                         <ul class="tabs">*/
/*                             <li class="tab col s4"><a class="active blue-text" href="#tabAgregarColaborador">Agregar Colaborador</a></li>*/
/*                             <li class="tab col s4"><a class="blue-text" href="#tabHandshakes">HandShakes ({{ handshakes|length }})</a></li>*/
/*                             <li class="tab col s4"><a class="blue-text" href="#tabSeguidores">Te siguen ({{ seguidores|length }})</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div id="tabAgregarColaborador" class="col s12">*/
/*                         <table class="striped">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th data-field="id">Colaborador</th>*/
/*                                 <th>Actividad</th>*/
/*                                 <th>HandShake</th>*/
/*                             </tr>*/
/*                             </thead>*/
/* */
/*                             <tbody>*/
/*                             {% for colaborador in posiblescolaboradores %}*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         Oficina: {{ colaborador.empresa }}<br/>{{ colaborador.nombre }}<br/>Alta: {{ colaborador.fechaCreacion|date('d-m-Y') }}*/
/*                                     </td>*/
/*                                     <td></td>*/
/*                                     <td>*/
/*                                         <a href="#" onclick="onHandshake({{ colaborador.id }});">*/
/*                                             {% image '@FrameworkBundle/Resources/public/images/handshake.png' %}*/
/*                                             <img src="{{ asset_url }}" alt="Seguir"/>*/
/*                                             {% endimage %}*/
/*                                         </a>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                     <div id="tabHandshakes" class="col s12">*/
/*                         <table class="striped">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th data-field="id">Handshake</th>*/
/*                             <th>Actividad</th>*/
/*                         </tr>*/
/*                         </thead>*/
/* */
/*                         <tbody>*/
/*                         {% for handshake in handshakes %}*/
/*                             <tr>*/
/*                                 <td>*/
/*                                     Oficina: {{ handshake.empresa }}<br/>{{ handshake.nombre }}<br/>Alta: {{ handshake.fechaCreacion|date('d-m-Y') }}*/
/*                                 </td>*/
/*                                 <td></td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                     <div id="tabSeguidores" class="col s12">*/
/* */
/*                         <table class="striped">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th data-field="id">Seguidor</th>*/
/*                                 <th>Actividad</th>*/
/*                             </tr>*/
/*                             </thead>*/
/* */
/*                             <tbody>*/
/*                             {% for seguidor in seguidores %}*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         Oficina: {{ seguidor.empresa }}<br/>{{ seguidor.nombre }}<br/>Alta: {{ seguidor.fechaCreacion|date('d-m-Y') }}*/
/*                                     </td>*/
/*                                     <td></td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div id="mdlConfirmacion" class="modal">*/
/*                     <div class="modal-content">*/
/*                         <h5>Handshake</h5>*/
/*                         <p>¿Está seguro que desea agregar este Colaborador?</p>*/
/*                     </div>*/
/*                     <div class="modal-footer">*/
/*                         <a href="#" class="waves-effect waves-gray gray btn-flat" onclick="$('#mdlConfirmacion').closeModal(); return false;">No</a>*/
/*                         <a href="#" class="waves-effect waves-gray blue btn-flat" onclick="$('#mdlConfirmacion').closeModal(); requestHandshake(); return false;" id="md1_YesBtn">Si</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
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
/*         .tabs .indicator {*/
/*             background-color: blue !important;*/
/*         }*/
/*     </style>*/
/* */
/*     <script>*/
/*         var idUsuarioColaborador=-1;*/
/*         function onHandshake(idColaborador)*/
/*         {*/
/*             idUsuarioColaborador = idColaborador;*/
/* */
/*             $('#mdlConfirmacion').openModal();*/
/*         }*/
/* */
/*         function requestHandshake()*/
/*         {*/
/*             var url = 'http://' + window.location.hostname  + '{{ path('colaborador_handshake', {}) }}?idUsuarioColaborador=' + idUsuarioColaborador;*/
/* */
/*             $.ajax({*/
/*                 url: url,*/
/*                 dataType: "json",*/
/*                 success: function(data) {*/
/* */
/*                     if (data.resultado == true)*/
/*                     {*/
/*                         alert('Colaborador agregado correctamente.');*/
/*                     }*/
/*                     else*/
/*                     {*/
/*                         alert('ERROR: El colaborador no pudo ser agregado.');*/
/*                     }*/
/*                 }*/
/*             });*/
/*         }*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
