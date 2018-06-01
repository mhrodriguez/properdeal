<?php

/* :listacontacto:index.html.twig */
class __TwigTemplate_624c48d0cf64da4d645fb89a0deb9bee12b3c99847610c093b25c7985238ad2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":listacontacto:index.html.twig", 1);
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
                            <a href=\"#!\" class=\"breadcrumb\">Lista de Contactos</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class=\"row\">
                <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("listacontacto_new", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-1 right\"><i class=\"material-icons left\">add</i>Nueva Lista de Contacto</a>
            </div>

            <div class=\"row\">
                <table class=\"striped\">
                    <thead>
                    <tr>
                        <th>Lista de Contactos</th>
                        <th>Operaciones</th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listaContactos"]) ? $context["listaContactos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
            // line 32
            echo "                        <tr>
                            <td>
                                ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "nombre", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                <a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("mensaje_new", array());
            echo "?tipoMensaje=1&idContacto=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "idListaContacto", array()), "html", null, true);
            echo "\"><i class=\"material-icons left\">email</i></a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    </tbody>
                </table>
            </div>

        </div>
    </div>
";
    }

    // line 49
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 50
        echo "
    <style>
        body {
            background: white;
            height: 100vh;
        }
        img
        {
            width: 32px;
            height: 32px;
        }
    </style>

";
    }

    public function getTemplateName()
    {
        return ":listacontacto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 50,  100 => 49,  90 => 41,  78 => 37,  72 => 34,  68 => 32,  64 => 31,  48 => 18,  32 => 4,  29 => 3,  11 => 1,);
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
/*                             <a href="#!" class="breadcrumb">Lista de Contactos</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <a href="{{ path('listacontacto_new', {}) }}" class="waves-effect waves-light btn blue darken-1 right"><i class="material-icons left">add</i>Nueva Lista de Contacto</a>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <table class="striped">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Lista de Contactos</th>*/
/*                         <th>Operaciones</th>*/
/*                     </tr>*/
/*                     </thead>*/
/* */
/*                     <tbody>*/
/*                     {% for lista in listaContactos %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {{ lista.nombre }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a href="{{ path ('mensaje_new', {}) }}?tipoMensaje=1&idContacto={{ lista.idListaContacto }}"><i class="material-icons left">email</i></a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
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
/*         img*/
/*         {*/
/*             width: 32px;*/
/*             height: 32px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
