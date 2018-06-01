<?php

/* :rotulo:index.html.twig */
class __TwigTemplate_78414d421dffa7521e0b7e88b09c0df34b90c74f6a8a0bbc772c817f9fb5f76c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":rotulo:index.html.twig", 1);
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
        <nav>
            <div class=\"nav-wrapper z-depth-1\">
                <div class=\"col s12  blue darken-1 \">
                    <a href=\"#\" class=\"breadcrumb\">Rotulos</a>
                </div>
            </div>
        </nav>
    </div>

    <div class=\"row\">
        <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("rotulo_new", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-1 right\"><i class=\"material-icons left\">add</i>Nuevo Rotulo</a>
    </div>

    <div class=\"row\" >
        <div class=\"col s12 m12 l12\">

            <table>
                <thead>
                <tr>
                    <th>Rotulo</th>
                    <th>Propiedad</th>
                    <th>Tamaño</th>
                    <th>Operaciones</th>
                </tr>
                </thead>
                <tbody>

                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rotulos"]) ? $context["rotulos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rotulo"]) {
            // line 36
            echo "                <tr>
                    <td>
                        ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rotulo"], "accion", array()), "nombre", array()), "html", null, true);
            echo "<br><br>
                        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["rotulo"], "elementos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["elemento"]) {
                // line 40
                echo "                           - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["elemento"], "nombre", array()), "html", null, true);
                echo "<br>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elemento'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                    </td>
                    <td>
                        ID: ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rotulo"], "inmueble", array()), "legacyid", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rotulo"], "tamano", array()), "nombre", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rotulo_edit", array("id" => $this->getAttribute($context["rotulo"], "id", array()))), "html", null, true);
            echo "\"><i class=\"material-icons left\">mode_edit</i></a>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rotulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
                </tbody>
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
        return ":rotulo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 54,  108 => 50,  102 => 47,  96 => 44,  92 => 42,  83 => 40,  79 => 39,  75 => 38,  71 => 36,  67 => 35,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div id="container">*/
/* */
/*     <div class="row">*/
/*         <nav>*/
/*             <div class="nav-wrapper z-depth-1">*/
/*                 <div class="col s12  blue darken-1 ">*/
/*                     <a href="#" class="breadcrumb">Rotulos</a>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <a href="{{ path('rotulo_new', {}) }}" class="waves-effect waves-light btn blue darken-1 right"><i class="material-icons left">add</i>Nuevo Rotulo</a>*/
/*     </div>*/
/* */
/*     <div class="row" >*/
/*         <div class="col s12 m12 l12">*/
/* */
/*             <table>*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Rotulo</th>*/
/*                     <th>Propiedad</th>*/
/*                     <th>Tamaño</th>*/
/*                     <th>Operaciones</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/* */
/*                 {% for rotulo in rotulos %}*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ rotulo.accion.nombre }}<br><br>*/
/*                         {% for elemento in rotulo.elementos  %}*/
/*                            - {{ elemento.nombre }}<br>*/
/*                         {% endfor %}*/
/*                     </td>*/
/*                     <td>*/
/*                         ID: {{ rotulo.inmueble.legacyid }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ rotulo.tamano.nombre }}*/
/*                     </td>*/
/*                     <td>*/
/*                         <a href="{{ path ('rotulo_edit', {'id': rotulo.id}) }}"><i class="material-icons left">mode_edit</i></a>*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/* */
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <style>*/
/*     body {*/
/*         height:100vh;*/
/*         background-color: white;*/
/*     }*/
/* </style>*/
/* */
/* {% endblock %}*/
/* */
/* */
