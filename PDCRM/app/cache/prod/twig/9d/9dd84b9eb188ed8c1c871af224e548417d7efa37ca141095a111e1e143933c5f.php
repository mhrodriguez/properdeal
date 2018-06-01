<?php

/* :seo:edit.html.twig */
class __TwigTemplate_e1452a4bf9d08d3682ffdb6dde38d0236f0feedcbd1b2ddc166a5b9e9ae4b5c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":seo:edit.html.twig", 1);
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
        <br><br>
        <div class=\"row\">
            <nav>
                <div class=\"nav-wrapper z-depth-1\">
                    <div class=\"col s12  blue darken-1 \">
                        <a href=\"#!\" class=\"breadcrumb\">SEO</a>
                    </div>
                </div>
            </nav>
        </div>

        <br>
        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titulo", array()), 'widget');
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titulo", array()), 'label');
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titulo", array()), 'errors');
        echo "
            </div>
        </div>


        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "keywords", array()), 'widget');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "keywords", array()), 'label');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "keywords", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'widget');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'label');
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mision", array()), 'widget');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mision", array()), 'label');
        echo "
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mision", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'widget');
        echo "
                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'label');
        echo "
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'errors');
        echo "
            </div>
        </div>


        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'widget');
        echo "
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'label');
        echo "
                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()), 'widget');
        echo "
                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()), 'label');
        echo "
                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "derechosautor", array()), 'widget');
        echo "
                ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "derechosautor", array()), 'label');
        echo "
                ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "derechosautor", array()), 'errors');
        echo "
            </div>
        </div>


        <input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue darken-4 right\"/>

        <a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("usuario_edit", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-4 right\">Cancelar</a>

        ";
        // line 91
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>

    <style>
        body
        {
            background-color: white;
            height: 200vh;
        }
    </style>

    <script>
        document.getElementById('seo_descripcion').required=false;
        document.getElementById('seo_keywords').required=false;

        document.getElementById('seo_mision').required=false;
        document.getElementById('seo_direccion').required=false;
        document.getElementById('seo_derechosautor').required=false;
    </script>
";
    }

    public function getTemplateName()
    {
        return ":seo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 91,  193 => 89,  183 => 82,  179 => 81,  175 => 80,  166 => 74,  162 => 73,  158 => 72,  149 => 66,  145 => 65,  141 => 64,  131 => 57,  127 => 56,  123 => 55,  114 => 49,  110 => 48,  106 => 47,  97 => 41,  93 => 40,  89 => 39,  80 => 33,  76 => 32,  72 => 31,  62 => 24,  58 => 23,  54 => 22,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <br><br>*/
/*         <div class="row">*/
/*             <nav>*/
/*                 <div class="nav-wrapper z-depth-1">*/
/*                     <div class="col s12  blue darken-1 ">*/
/*                         <a href="#!" class="breadcrumb">SEO</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*         </div>*/
/* */
/*         <br>*/
/*         {{ form_start(form) }}*/
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.titulo) }}*/
/*                 {{ form_label(form.titulo) }}*/
/*                 {{ form_errors(form.titulo) }}*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.keywords) }}*/
/*                 {{ form_label(form.keywords) }}*/
/*                 {{ form_errors(form.keywords) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.descripcion) }}*/
/*                 {{ form_label(form.descripcion) }}*/
/*                 {{ form_errors(form.descripcion) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.mision) }}*/
/*                 {{ form_label(form.mision) }}*/
/*                 {{ form_errors(form.mision) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.telefono) }}*/
/*                 {{ form_label(form.telefono) }}*/
/*                 {{ form_errors(form.telefono) }}*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.fax) }}*/
/*                 {{ form_label(form.fax) }}*/
/*                 {{ form_errors(form.fax) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.direccion) }}*/
/*                 {{ form_label(form.direccion) }}*/
/*                 {{ form_errors(form.direccion) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.derechosautor) }}*/
/*                 {{ form_label(form.derechosautor) }}*/
/*                 {{ form_errors(form.derechosautor) }}*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <input type="submit" value="Guardar" class="waves-effect waves-light btn blue darken-4 right"/>*/
/* */
/*         <a href="{{ path('usuario_edit', {}) }}" class="waves-effect waves-light btn blue darken-4 right">Cancelar</a>*/
/* */
/*         {{ form_end(form) }}*/
/*     </div>*/
/* */
/*     <style>*/
/*         body*/
/*         {*/
/*             background-color: white;*/
/*             height: 200vh;*/
/*         }*/
/*     </style>*/
/* */
/*     <script>*/
/*         document.getElementById('seo_descripcion').required=false;*/
/*         document.getElementById('seo_keywords').required=false;*/
/* */
/*         document.getElementById('seo_mision').required=false;*/
/*         document.getElementById('seo_direccion').required=false;*/
/*         document.getElementById('seo_derechosautor').required=false;*/
/*     </script>*/
/* {% endblock %}*/
/* */
