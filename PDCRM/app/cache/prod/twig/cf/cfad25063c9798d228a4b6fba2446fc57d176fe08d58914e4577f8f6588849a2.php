<?php

/* :gerencia:new.html.twig */
class __TwigTemplate_0949e02634312ef74bf8e520bcc1214d42ddf83acb7c75d07e010f9f5c190694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":gerencia:new.html.twig", 1);
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
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gerencia", array()), 'widget');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gerencia", array()), 'label');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gerencia", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"input-field col s12\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gerente", array()), 'widget');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gerente", array()), 'label');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gerente", array()), 'errors');
        echo "
            </div>
        </div>

        <input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue darken-4 right\"/>

        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("gerencia_index", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-4 right\">Cancelar</a>

    ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</div>

<style>
    body
    {
        background-color: white;
        height: 100vh;
    }
</style>
";
    }

    public function getTemplateName()
    {
        return ":gerencia:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  68 => 21,  64 => 20,  60 => 19,  51 => 13,  47 => 12,  43 => 11,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="container">*/
/*     <br/>*/
/*     {{ form_start(form) }}*/
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.gerencia) }}*/
/*                 {{ form_label(form.gerencia) }}*/
/*                 {{ form_errors(form.gerencia) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="input-field col s12">*/
/*                 {{ form_widget(form.gerente) }}*/
/*                 {{ form_label(form.gerente) }}*/
/*                 {{ form_errors(form.gerente) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <input type="submit" value="Guardar" class="waves-effect waves-light btn blue darken-4 right"/>*/
/* */
/*         <a href="{{ path('gerencia_index', {}) }}" class="waves-effect waves-light btn blue darken-4 right">Cancelar</a>*/
/* */
/*     {{ form_end(form) }}*/
/* </div>*/
/* */
/* <style>*/
/*     body*/
/*     {*/
/*         background-color: white;*/
/*         height: 100vh;*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* */
