<?php

/* :archivop:new.html.twig */
class __TwigTemplate_8285feec2a60420bf9298ec9588fdb3f1f3f6cbe4bb8a08cb6aeed11d211ee6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":archivop:new.html.twig", 1);
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
<div class=\"container\">
<br>

";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

<div class=\"row\">
    <div class=\"input-field col s12\">
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'widget');
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'errors');
        echo "
    </div>
</div>

<div class=\"row\">
    <div class=\"input-field col s12\">
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comentarios", array()), 'widget');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comentarios", array()), 'label');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comentarios", array()), 'errors');
        echo "
    </div>
</div>

<div class=\"row\">
    <div class=\"input-field col s12\">
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "privado", array()), 'widget');
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "privado", array()), 'label');
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "privado", array()), 'errors');
        echo "
    </div>
</div>

<input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue darken-3 right\"/>
<a href=\"#!\" onclick=\"window.history.back();\" class=\"waves-effect waves-light btn blue darken-3 right\" style=\"margin-right: 10px;\">Cancelar</a>

";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</div>

    ";
        // line 39
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 47
        echo "
    ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "
";
    }

    // line 39
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 40
        echo "        <style>
            body {
                height:100vh;
                background-color: white;
            }
        </style>
    ";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "        <script>
            \$(document).ready(function() {
                \$('select').material_select();
            });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return ":archivop:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 49,  125 => 48,  115 => 40,  112 => 39,  107 => 55,  105 => 48,  102 => 47,  100 => 39,  94 => 36,  84 => 29,  80 => 28,  76 => 27,  67 => 21,  63 => 20,  59 => 19,  50 => 13,  46 => 12,  39 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="container">*/
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
/* <a href="#!" onclick="window.history.back();" class="waves-effect waves-light btn blue darken-3 right" style="margin-right: 10px;">Cancelar</a>*/
/* */
/* {{ form_end(form) }}*/
/* </div>*/
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
