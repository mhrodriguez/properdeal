<?php

/* :usuario:new.html.twig */
class __TwigTemplate_a21f935e2706ad6592c3bcf26320415093b21fe04fba8497eee306f5cfc5f1e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":usuario:new.html.twig", 1);
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
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l8 m8 s12 z-depth-1 form\">
                <div class=\"formcontainer\">
                    <div>
                        <h5>Ingrese los datos del nuevo usuario</h5>
                    </div>
                    <div>
                        ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'widget');
        echo "
                                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'label');
        echo "
                                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "empresa", array()), 'widget');
        echo "
                                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "empresa", array()), 'label');
        echo "
                                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "empresa", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s6\">
                                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
                                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                            </div>
                            <div class=\"input-field col s6\">
                                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'widget');
        echo "
                                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'label');
        echo "
                                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s6\">
                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "first", array()), 'widget');
        echo "
                                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "first", array()), 'label');
        echo "
                                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "first", array()), 'errors');
        echo "
                            </div>
                            <div class=\"input-field col s6\">
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'widget');
        echo "
                                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'label');
        echo "
                                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"g-recaptcha\" data-sitekey=\"6Lf1AyITAAAAAM-14bcKis3sYTwx76fM1x57QY2s\"></div>

                        <input type=\"submit\" value=\"Crear cuenta\" class=\"waves-effect waves-light btn blue darken-4 right\"/>

                        ";
        // line 61
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
        // line 71
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3548c40_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3548c40_0") : $this->env->getExtension('asset')->getAssetUrl("images/3548c40_inter3_1.jpg");
            // line 72
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
            ";
        } else {
            // asset "3548c40"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3548c40") : $this->env->getExtension('asset')->getAssetUrl("images/3548c40.jpg");
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
            ";
        }
        unset($context["asset_url"]);
        // line 74
        echo "            );
            height:100vh;
            background-size:cover;
        }
    </style>

    ";
        // line 80
        $this->displayBlock('javascriptsheaders', $context, $blocks);
        // line 83
        echo "

";
    }

    // line 80
    public function block_javascriptsheaders($context, array $blocks = array())
    {
        // line 81
        echo "        <script src='https://www.google.com/recaptcha/api.js'></script>
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
        return array (  198 => 81,  195 => 80,  189 => 83,  187 => 80,  179 => 74,  165 => 72,  161 => 71,  148 => 61,  137 => 53,  133 => 52,  129 => 51,  123 => 48,  119 => 47,  115 => 46,  106 => 40,  102 => 39,  98 => 38,  92 => 35,  88 => 34,  84 => 33,  75 => 27,  71 => 26,  67 => 25,  58 => 19,  54 => 18,  50 => 17,  43 => 13,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col l8 m8 s12 z-depth-1 form">*/
/*                 <div class="formcontainer">*/
/*                     <div>*/
/*                         <h5>Ingrese los datos del nuevo usuario</h5>*/
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
/*                             <div class="input-field col s6">*/
/*                                 {{ form_widget(form.email) }}*/
/*                                 {{ form_label(form.email) }}*/
/*                                 {{ form_errors(form.email) }}*/
/*                             </div>*/
/*                             <div class="input-field col s6">*/
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
/*                         <div class="g-recaptcha" data-sitekey="6Lf1AyITAAAAAM-14bcKis3sYTwx76fM1x57QY2s"></div>*/
/* */
/*                         <input type="submit" value="Crear cuenta" class="waves-effect waves-light btn blue darken-4 right"/>*/
/* */
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
/*                 {{ asset_url }}*/
/*             {% endimage %}*/
/*             );*/
/*             height:100vh;*/
/*             background-size:cover;*/
/*         }*/
/*     </style>*/
/* */
/*     {% block javascriptsheaders %}*/
/*         <script src='https://www.google.com/recaptcha/api.js'></script>*/
/*     {% endblock %}*/
/* */
/* */
/* {% endblock %}*/
/* */
