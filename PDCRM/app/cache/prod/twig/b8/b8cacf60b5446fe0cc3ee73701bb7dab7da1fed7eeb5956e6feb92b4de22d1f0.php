<?php

/* :contactanos:enviar.html.twig */
class __TwigTemplate_5ebc23429583859ae1f1a9c8ff0a08538ed013bb924fc3b2926003a9a042d6f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":contactanos:enviar.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascriptsheaders' => array($this, 'block_javascriptsheaders'),
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
        echo "    <br/>
    <div class=\"container z-depth-1\" style=\"background-color:white;\">
        <div class=\"formcontainer\">
            <br><br>
            ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'widget');
        echo "
                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'label');
        echo "
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'widget');
        echo "
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'label');
        echo "
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s12\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comentarios", array()), 'widget');
        echo "
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comentarios", array()), 'label');
        echo "
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comentarios", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"g-recaptcha\" data-sitekey=\"6Lf1AyITAAAAAM-14bcKis3sYTwx76fM1x57QY2s\"></div>

            <input type=\"submit\" value=\"Enviar\" class=\"waves-effect waves-light btn blue darken-4 right\"/>

            ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

        </div>
    </div>

    <style>
    body
    {
        background-color: white !important;
        height: 100vh;
    }
    </style>

    ";
        // line 58
        $this->displayBlock('javascriptsheaders', $context, $blocks);
        // line 61
        echo "
";
    }

    // line 58
    public function block_javascriptsheaders($context, array $blocks = array())
    {
        // line 59
        echo "        <script src='https://www.google.com/recaptcha/api.js'></script>
    ";
    }

    public function getTemplateName()
    {
        return ":contactanos:enviar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 59,  137 => 58,  132 => 61,  130 => 58,  114 => 45,  103 => 37,  99 => 36,  95 => 35,  86 => 29,  82 => 28,  78 => 27,  69 => 21,  65 => 20,  61 => 19,  52 => 13,  48 => 12,  44 => 11,  38 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <br/>*/
/*     <div class="container z-depth-1" style="background-color:white;">*/
/*         <div class="formcontainer">*/
/*             <br><br>*/
/*             {{ form_start(form) }}*/
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.nombre) }}*/
/*                     {{ form_label(form.nombre) }}*/
/*                     {{ form_errors(form.nombre) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.telefono) }}*/
/*                     {{ form_label(form.telefono) }}*/
/*                     {{ form_errors(form.telefono) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.email) }}*/
/*                     {{ form_label(form.email) }}*/
/*                     {{ form_errors(form.email) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.comentarios) }}*/
/*                     {{ form_label(form.comentarios) }}*/
/*                     {{ form_errors(form.comentarios) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="g-recaptcha" data-sitekey="6Lf1AyITAAAAAM-14bcKis3sYTwx76fM1x57QY2s"></div>*/
/* */
/*             <input type="submit" value="Enviar" class="waves-effect waves-light btn blue darken-4 right"/>*/
/* */
/*             {{ form_end(form) }}*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <style>*/
/*     body*/
/*     {*/
/*         background-color: white !important;*/
/*         height: 100vh;*/
/*     }*/
/*     </style>*/
/* */
/*     {% block javascriptsheaders %}*/
/*         <script src='https://www.google.com/recaptcha/api.js'></script>*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
