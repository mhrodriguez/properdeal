<?php

/* :archivo:index.html.twig */
class __TwigTemplate_19427dd624ff6fa075d92e661d10f49ebf581a102285fc20a00c7e7039625abf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":archivo:index.html.twig", 1);
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
        echo "
    <div id=\"container\">

        <div class=\"row\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("archivo_new", array());
        echo "?idInmueble=";
        echo twig_escape_filter($this->env, (isset($context["idInmueble"]) ? $context["idInmueble"] : null), "html", null, true);
        echo "\" class=\"waves-effect waves-light blue btn right\"><i class=\"material-icons left\">add</i>Subir archivo</a>
        </div>

        <div class=\"row\" >
            <div class=\"col s12 m12 l12\">

                <table>
                    <thead>
                    <tr>
                        <th>Comentarios</th>
                        <th>Fecha</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["archivos"]) ? $context["archivos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
            // line 24
            echo "                        <tr>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["archivo"], "comentarios", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["archivo"], "fechaCreacion", array()), "d/M/y h:m:s"), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["archivo"], "getWebPath", array(), "method"), "html", null, true);
            echo "\" download=\"archivo\" class=\"modal-action waves-effect waves-green btn-flat\">Descargar</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <style>
        body {
            height:100vh;
            background-color: white;
        }
    </style>

";
    }

    public function getTemplateName()
    {
        return ":archivo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 32,  73 => 28,  68 => 26,  64 => 25,  61 => 24,  57 => 23,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div id="container">*/
/* */
/*         <div class="row">*/
/*             <a href="{{ path('archivo_new', {}) }}?idInmueble={{ idInmueble }}" class="waves-effect waves-light blue btn right"><i class="material-icons left">add</i>Subir archivo</a>*/
/*         </div>*/
/* */
/*         <div class="row" >*/
/*             <div class="col s12 m12 l12">*/
/* */
/*                 <table>*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Comentarios</th>*/
/*                         <th>Fecha</th>*/
/*                         <th></th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for archivo in archivos %}*/
/*                         <tr>*/
/*                             <td>{{ archivo.comentarios }}</td>*/
/*                             <td>{{ archivo.fechaCreacion | date('d/M/y h:m:s') }}</td>*/
/*                             <td>*/
/*                                 <a href="{{ archivo.getWebPath() }}" download="archivo" class="modal-action waves-effect waves-green btn-flat">Descargar</a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <style>*/
/*         body {*/
/*             height:100vh;*/
/*             background-color: white;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* */
