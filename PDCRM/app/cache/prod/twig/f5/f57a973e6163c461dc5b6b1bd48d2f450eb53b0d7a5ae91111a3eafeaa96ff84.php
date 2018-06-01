<?php

/* :security/user:changepassword.html.twig */
class __TwigTemplate_89af2fbc7fdcab4c863cd8c65cd457fbdf5ad55b36c81257406e1504cb5bcb09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":security/user:changepassword.html.twig", 1);
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
                        <a href=\"#!\" class=\"breadcrumb\">Mi Perfil</a>
                    </div>
                </div>
            </nav>
        </div>

        <br>

        ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"input-field col s6\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "first", array()), 'widget');
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "first", array()), 'label');
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "first", array()), 'errors');
        echo "
            </div>

            <div class=\"input-field col s6\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'widget');
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'label');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'errors');
        echo "
            </div>

        </div>

        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("usuario_edit", array());
        echo "\" class=\"waves-light btn blue darken-4\">Cancelar</a>
        <input type=\"submit\" value=\"Cambiar Password\" class=\"waves-light btn blue darken-4\"/>
        ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    </div>

    <style>
        body{
            background-color: white;
            height: 140vh;
        }
        p
        {
            font-size: small;
        }
    </style>

    <script>

    </script>

";
    }

    public function getTemplateName()
    {
        return ":security/user:changepassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 37,  85 => 35,  77 => 30,  73 => 29,  69 => 28,  62 => 24,  58 => 23,  54 => 22,  48 => 19,  31 => 4,  28 => 3,  11 => 1,);
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
/*                         <a href="#!" class="breadcrumb">Mi Perfil</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*         </div>*/
/* */
/*         <br>*/
/* */
/*         {{ form_start(form) }}*/
/*         <div class="row">*/
/*             <div class="input-field col s6">*/
/*                 {{ form_widget(form.password.first) }}*/
/*                 {{ form_label(form.password.first) }}*/
/*                 {{ form_errors(form.password.first) }}*/
/*             </div>*/
/* */
/*             <div class="input-field col s6">*/
/*                 {{ form_widget(form.password.second) }}*/
/*                 {{ form_label(form.password.second) }}*/
/*                 {{ form_errors(form.password.second) }}*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <a href="{{ path('usuario_edit', {}) }}" class="waves-light btn blue darken-4">Cancelar</a>*/
/*         <input type="submit" value="Cambiar Password" class="waves-light btn blue darken-4"/>*/
/*         {{ form_end(form) }}*/
/* */
/*     </div>*/
/* */
/*     <style>*/
/*         body{*/
/*             background-color: white;*/
/*             height: 140vh;*/
/*         }*/
/*         p*/
/*         {*/
/*             font-size: small;*/
/*         }*/
/*     </style>*/
/* */
/*     <script>*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
