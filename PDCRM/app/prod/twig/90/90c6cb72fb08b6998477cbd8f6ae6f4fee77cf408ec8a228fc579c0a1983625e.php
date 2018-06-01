<?php

/* :usuario:new.html.twig */
class __TwigTemplate_b4a9e40652d9dd4f754c6fe35b07a7d9af8afee40c2d9aa537fd8b3556de3147 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":usuario:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
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
        <div class=\"row\">
            <div class=\"col l5 m6 s12 z-depth-1 form\">
                <div class=\"formcontainer\">
                    <div>
                        <h5>Bienvenido</h5>
                        <p>Regístrate para accesar al portal inmobiliario.</p>
                    </div>
                    <div>
                        ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'widget');
        echo "
                                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'label');
        echo "
                                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "empresa", array()), 'widget');
        echo "
                                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "empresa", array()), 'label');
        echo "
                                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "empresa", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
                                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'widget');
        echo "
                                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'label');
        echo "
                                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s6\">
                                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "first", array()), 'widget');
        echo "
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "first", array()), 'label');
        echo "
                                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "first", array()), 'errors');
        echo "
                            </div>
                            <div class=\"input-field col s6\">
                                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'widget');
        echo "
                                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'label');
        echo "
                                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <input type=\"submit\" value=\"Crear cuenta\" class=\"waves-effect waves-light btn blue darken-4 right\"/>
                        ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                    </div>
                </div>
            </div>

        </div>
    </div>

    <style>
        body {
            background: url(";
        // line 72
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3548c40_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3548c40_0") : $this->env->getExtension('asset')->getAssetUrl("images/3548c40_inter3_1.jpg");
            // line 73
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
    ";
        } else {
            // asset "3548c40"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3548c40") : $this->env->getExtension('asset')->getAssetUrl("images/3548c40.jpg");
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
    ";
        }
        unset($context["asset_url"]);
        // line 75
        echo "            );
            height:100vh;
            background-size:cover;
        }

    </style>

";
    }

    public function getTemplateName()
    {
        return ":usuario:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 75,  165 => 73,  161 => 72,  148 => 62,  140 => 57,  136 => 56,  132 => 55,  126 => 52,  122 => 51,  118 => 50,  109 => 44,  105 => 43,  101 => 42,  92 => 36,  88 => 35,  84 => 34,  75 => 28,  71 => 27,  67 => 26,  58 => 20,  54 => 19,  50 => 18,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col l5 m6 s12 z-depth-1 form">*/
/*                 <div class="formcontainer">*/
/*                     <div>*/
/*                         <h5>Bienvenido</h5>*/
/*                         <p>Regístrate para accesar al portal inmobiliario.</p>*/
/*                     </div>*/
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
/*                         <input type="submit" value="Crear cuenta" class="waves-effect waves-light btn blue darken-4 right"/>*/
/*                         {{ form_end(form) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <style>*/
/*         body {*/
/*             background: url({% image '@FrameworkBundle/Resources/public/images/inter3.jpg' %}*/
/*         {{ asset_url }}*/
/*     {% endimage %}*/
/*             );*/
/*             height:100vh;*/
/*             background-size:cover;*/
/*         }*/
/* */
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
