<?php

/* :asesor:new.html.twig */
class __TwigTemplate_c8830701cb6582ae1d8460b8d6525f93737d5fdfbec035899750352715aca777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":asesor:new.html.twig", 1);
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
    <div class=\"container\">
        <br/>
        <div class=\"row\">
        <nav>
            <div class=\"nav-wrapper z-depth-1\">
                <div class=\"col s12  blue darken-1 \">
                    <a href=\"#!\" class=\"breadcrumb\">Asesores</a>
                    <a href=\"#!\" class=\"breadcrumb\">Nuevo</a>
                </div>
            </div>
        </nav>
        </div>

        <div class=\"row\">
                <div class=\"formcontainer\">
                    <div>
                        ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'widget');
        echo "
                                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'label');
        echo "
                                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "empresa", array()), 'widget');
        echo "
                                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "empresa", array()), 'label');
        echo "
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "empresa", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
                                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
                                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'widget');
        echo "
                                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'label');
        echo "
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s6\">
                                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "first", array()), 'widget');
        echo "
                                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "first", array()), 'label');
        echo "
                                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "first", array()), 'errors');
        echo "
                            </div>
                            <div class=\"input-field col s6\">
                                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'widget');
        echo "
                                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'label');
        echo "
                                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue darken-4 right\"/>
                        <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("asesor_index", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-4 right\">Cancelar<a/>
                        ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                    </div>
                </div>
        </div>
    </div>
    
    <style>
        body{
            background-color: white;
            height: 100vh;
        }
    </style>

";
    }

    public function getTemplateName()
    {
        return ":asesor:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 70,  155 => 69,  147 => 64,  143 => 63,  139 => 62,  133 => 59,  129 => 58,  125 => 57,  116 => 51,  112 => 50,  108 => 49,  99 => 43,  95 => 42,  91 => 41,  82 => 35,  78 => 34,  74 => 33,  65 => 27,  61 => 26,  57 => 25,  50 => 21,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <br/>*/
/*         <div class="row">*/
/*         <nav>*/
/*             <div class="nav-wrapper z-depth-1">*/
/*                 <div class="col s12  blue darken-1 ">*/
/*                     <a href="#!" class="breadcrumb">Asesores</a>*/
/*                     <a href="#!" class="breadcrumb">Nuevo</a>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*                 <div class="formcontainer">*/
/*                     <div>*/
/*                         {{ form_start(form) }}*/
/* */
/*                         <div class="row">*/
/*                             <div class="input-field col s12">*/
/*                                 {{ form_widget(form.nombre) }}*/
/*                                 {{ form_label(form.nombre) }}*/
/*                                 {{ form_errors(form.nombre) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="row">*/
/*                             <div class="input-field col s12">*/
/*                                 {{ form_widget(form.empresa) }}*/
/*                                 {{ form_label(form.empresa) }}*/
/*                                 {{ form_errors(form.empresa) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="row">*/
/*                             <div class="input-field col s12">*/
/*                                 {{ form_widget(form.email) }}*/
/*                                 {{ form_label(form.email) }}*/
/*                                 {{ form_errors(form.email) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="row">*/
/*                             <div class="input-field col s12">*/
/*                                 {{ form_widget(form.telefono) }}*/
/*                                 {{ form_label(form.telefono) }}*/
/*                                 {{ form_errors(form.telefono) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="row">*/
/*                             <div class="input-field col s6">*/
/*                                 {{ form_widget(form.password.first) }}*/
/*                                 {{ form_label(form.password.first) }}*/
/*                                 {{ form_errors(form.password.first) }}*/
/*                             </div>*/
/*                             <div class="input-field col s6">*/
/*                                 {{ form_widget(form.password.second) }}*/
/*                                 {{ form_label(form.password.second) }}*/
/*                                 {{ form_errors(form.password.second) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <input type="submit" value="Guardar" class="waves-effect waves-light btn blue darken-4 right"/>*/
/*                         <a href="{{ path('asesor_index', {}) }}" class="waves-effect waves-light btn blue darken-4 right">Cancelar<a/>*/
/*                         {{ form_end(form) }}*/
/*                     </div>*/
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/*     <style>*/
/*         body{*/
/*             background-color: white;*/
/*             height: 100vh;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
