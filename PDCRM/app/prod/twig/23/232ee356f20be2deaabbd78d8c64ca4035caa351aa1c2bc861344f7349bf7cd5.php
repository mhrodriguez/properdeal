<?php

/* :prospecto:index.html.twig */
class __TwigTemplate_fb26032ff6d004640cf0b7352e53c0c962621ac63fd87d10c1262f3fb48783fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":prospecto:index.html.twig", 1);
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
                            <a href=\"#!\" class=\"breadcrumb\">Prospectos</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class=\"row\">
                <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("prospecto_new", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-1 right\"><i class=\"material-icons left\">add</i>Nuevo Prospecto</a>
            </div>

            <div class=\"row\">
                <table class=\"striped\">
                    <thead>
                    <tr>
                        <th data-field=\"id\">Prospecto</th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prospectos"]) ? $context["prospectos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["prospecto"]) {
            // line 31
            echo "                        <tr>
                            <td>
                                ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["prospecto"], "nombre", array()), "html", null, true);
            echo "<br/>
                                Tipo: ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prospecto"], "idTipoProspecto", array()), "nombre", array()), "html", null, true);
            echo "<br/><br/>
                                Oportunidad: \$ ";
            // line 35
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["prospecto"], "presupuesto", array()), 2, ".", ","), "html", null, true);
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prospecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </tbody>
                </table>
            </div>

        </div>
    </div>
";
    }

    // line 47
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 48
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
        return ":prospecto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 48,  99 => 47,  89 => 39,  79 => 35,  75 => 34,  71 => 33,  67 => 31,  63 => 30,  48 => 18,  32 => 4,  29 => 3,  11 => 1,);
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
/*                             <a href="#!" class="breadcrumb">Prospectos</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <a href="{{ path('prospecto_new', {}) }}" class="waves-effect waves-light btn blue darken-1 right"><i class="material-icons left">add</i>Nuevo Prospecto</a>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <table class="striped">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th data-field="id">Prospecto</th>*/
/*                     </tr>*/
/*                     </thead>*/
/* */
/*                     <tbody>*/
/*                     {% for prospecto in prospectos %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {{ prospecto.nombre }}<br/>*/
/*                                 Tipo: {{ prospecto.idTipoProspecto.nombre }}<br/><br/>*/
/*                                 Oportunidad: $ {{ prospecto.presupuesto|number_format(2, '.', ',') }}*/
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
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
