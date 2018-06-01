<?php

/* :gerencia:index.html.twig */
class __TwigTemplate_a9f60281a5aed7663b613de0eab5565ad071a12a72ae5d14b3fb396d309b03cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":gerencia:index.html.twig", 1);
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
                            <a href=\"#!\" class=\"breadcrumb\">Gerencias</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class=\"row\">
                <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("gerencia_new", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-1 right\"><i class=\"material-icons left\">add</i>Nueva Gerencia</a>
            </div>
            <div class=\"row\">
                <table class=\"striped\">
                    <thead>
                    <tr>
                        <th>Gerencia</th>
                        <th>Gerente</th>
                        <th>Operaciones</th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gerencias"]) ? $context["gerencias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gerencia"]) {
            // line 32
            echo "                        <tr>
                            <td>
                                ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["gerencia"], "gerencia", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["gerencia"], "gerente", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gerencia_edit", array("id" => $this->getAttribute($context["gerencia"], "id", array()))), "html", null, true);
            echo "\"><i class=\"material-icons left\">mode_edit</i></a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gerencia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
    }

    // line 51
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 52
        echo "    <style>
        body {
            background: white;
            height: 200vh;
        }
    </style>

";
    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":gerencia:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 61,  107 => 52,  104 => 51,  95 => 44,  85 => 40,  79 => 37,  73 => 34,  69 => 32,  65 => 31,  49 => 18,  33 => 4,  30 => 3,  11 => 1,);
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
/*                             <a href="#!" class="breadcrumb">Gerencias</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <a href="{{ path('gerencia_new', {}) }}" class="waves-effect waves-light btn blue darken-1 right"><i class="material-icons left">add</i>Nueva Gerencia</a>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <table class="striped">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Gerencia</th>*/
/*                         <th>Gerente</th>*/
/*                         <th>Operaciones</th>*/
/*                     </tr>*/
/*                     </thead>*/
/* */
/*                     <tbody>*/
/*                     {% for gerencia in gerencias %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {{ gerencia.gerencia }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ gerencia.gerente }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a href="{{ path ('gerencia_edit', {'id': gerencia.id}) }}"><i class="material-icons left">mode_edit</i></a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <style>*/
/*         body {*/
/*             background: white;*/
/*             height: 200vh;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock %}*/
/* */
