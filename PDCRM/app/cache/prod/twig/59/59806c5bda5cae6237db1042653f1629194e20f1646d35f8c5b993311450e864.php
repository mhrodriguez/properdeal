<?php

/* :banner:index.html.twig */
class __TwigTemplate_882b3a1ee02dbef1d6ef0f28a10ffb8ed972e96afc009fafe91d809281c14d85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":banner:index.html.twig", 1);
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
        echo "    <h5>Banners</h5>

    <div class=\"row\">
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("banner_new", array());
        echo "\" class=\"waves-effect waves-light btn blue accent-4 right\"><i class=\"material-icons left\">add</i>Nuevo Banner</a>
    </div>

    <table>
        <thead>
        <tr>
            <th>Banner</th>
            <th>Operaciones</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 19
            echo "            <tr>
                <td><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "getWebPath", array(), "method"), "html", null, true);
            echo "\" style=\"width: 3em; height: 3em\"/></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banner_edit", array("id" => $this->getAttribute($context["banner"], "idBanner", array()))), "html", null, true);
            echo "\">editar</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mensaje_edit", array("id" => $this->getAttribute($context["banner"], "idBanner", array()))), "html", null, true);
            echo "\">editar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>


    ";
        // line 37
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 38
        echo "        <style>

            body {
                height:100vh;
                background-color: white;
            }

        </style>
    ";
    }

    public function getTemplateName()
    {
        return ":banner:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 38,  89 => 37,  83 => 33,  71 => 27,  65 => 24,  58 => 20,  55 => 19,  51 => 18,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h5>Banners</h5>*/
/* */
/*     <div class="row">*/
/*         <a href="{{ path('banner_new', {}) }}" class="waves-effect waves-light btn blue accent-4 right"><i class="material-icons left">add</i>Nuevo Banner</a>*/
/*     </div>*/
/* */
/*     <table>*/
/*         <thead>*/
/*         <tr>*/
/*             <th>Banner</th>*/
/*             <th>Operaciones</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for banner in banners %}*/
/*             <tr>*/
/*                 <td><img src="{{ banner.getWebPath() }}" style="width: 3em; height: 3em"/></td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('banner_edit', { 'id': banner.idBanner }) }}">editar</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('mensaje_edit', { 'id': banner.idBanner }) }}">editar</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* */
/*     {% block stylesheets %}*/
/*         <style>*/
/* */
/*             body {*/
/*                 height:100vh;*/
/*                 background-color: white;*/
/*             }*/
/* */
/*         </style>*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
