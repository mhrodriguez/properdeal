<?php

/* :archivo:new.html.twig */
class __TwigTemplate_315ca4c6a0ca6368b71309c906805d721c876ab23e81cf2e62a76a9d3d14d83d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":archivo:new.html.twig", 1);
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
        echo "
<br>

";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

<div class=\"row\">
    <div class=\"input-field col s12\">
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'widget');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'errors');
        echo "
    </div>
</div>

<div class=\"row\">
    <div class=\"input-field col s12\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comentarios", array()), 'widget');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comentarios", array()), 'label');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comentarios", array()), 'errors');
        echo "
    </div>
</div>

<div class=\"row\">
    <div class=\"input-field col s12\">
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "privado", array()), 'widget');
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "privado", array()), 'label');
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "privado", array()), 'errors');
        echo "
    </div>
</div>

<input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue darken-3 right\"/>
<a href=\"#!\" onclick=\"window.history.back();\" class=\"waves-effect waves-light btn blue darken-3 right\" style=\"margin-right: 10px;\">Cancelar<a/>

";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    ";
        // line 37
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 45
        echo "
    ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "
";
    }

    // line 37
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

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        // line 47
        echo "        <script>
            \$(document).ready(function() {
                \$('select').material_select();
            });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return ":archivo:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 47,  123 => 46,  113 => 38,  110 => 37,  105 => 53,  103 => 46,  100 => 45,  98 => 37,  93 => 35,  83 => 28,  79 => 27,  75 => 26,  66 => 20,  62 => 19,  58 => 18,  49 => 12,  45 => 11,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <br>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <div class="input-field col s12">*/
/*         {{ form_widget(form.file) }}*/
/*         {{ form_errors(form.file) }}*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <div class="input-field col s12">*/
/*         {{ form_widget(form.comentarios) }}*/
/*         {{ form_label(form.comentarios) }}*/
/*         {{ form_errors(form.comentarios) }}*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <div class="input-field col s12">*/
/*         {{ form_widget(form.privado) }}*/
/*         {{ form_label(form.privado) }}*/
/*         {{ form_errors(form.privado) }}*/
/*     </div>*/
/* </div>*/
/* */
/* <input type="submit" value="Guardar" class="waves-effect waves-light btn blue darken-3 right"/>*/
/* <a href="#!" onclick="window.history.back();" class="waves-effect waves-light btn blue darken-3 right" style="margin-right: 10px;">Cancelar<a/>*/
/* */
/* {{ form_end(form) }}*/
/* */
/*     {% block stylesheets %}*/
/*         <style>*/
/*             body {*/
/*                 height:100vh;*/
/*                 background-color: white;*/
/*             }*/
/*         </style>*/
/*     {% endblock %}*/
/* */
/*     {% block javascripts %}*/
/*         <script>*/
/*             $(document).ready(function() {*/
/*                 $('select').material_select();*/
/*             });*/
/*         </script>*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
