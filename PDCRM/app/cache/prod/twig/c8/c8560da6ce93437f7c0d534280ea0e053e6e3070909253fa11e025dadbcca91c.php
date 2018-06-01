<?php

/* :banner:new.html.twig */
class __TwigTemplate_3a760bba82f38be3af924d302e9457eabb89d64608258dffd2213776f7d08ce3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":banner:new.html.twig", 1);
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

<input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue accent-4 right\"/>
<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("banner_index", array());
        echo "\" class=\"waves-effect waves-light btn blue accent-4 right\">Cancelar<a/>

    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
    ";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "        <style>

            body {
                height:100vh;
            }

        </style>
    ";
    }

    public function getTemplateName()
    {
        return ":banner:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  73 => 21,  68 => 30,  66 => 21,  61 => 19,  56 => 17,  48 => 12,  44 => 11,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
/* <input type="submit" value="Guardar" class="waves-effect waves-light btn blue accent-4 right"/>*/
/* <a href="{{ path('banner_index', {}) }}" class="waves-effect waves-light btn blue accent-4 right">Cancelar<a/>*/
/* */
/*     {{ form_end(form) }}*/
/* */
/*     {% block stylesheets %}*/
/*         <style>*/
/* */
/*             body {*/
/*                 height:100vh;*/
/*             }*/
/* */
/*         </style>*/
/*     {% endblock %}*/
/* */
/*     {% endblock %}*/
/* */
