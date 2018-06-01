<?php

/* :security:login.html.twig */
class __TwigTemplate_fff93f3890bc1bfc4f6b199b7e746eb6b988bb46e807c8b5f3fa33ee755f7e91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":security:login.html.twig", 1);
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
            <div class=\"z-depth-1 form\" style=\"width:50%;align-content: center\">
                <div class=\"formcontainer\">
                    <div>
                        <br/>
                        <h5>Inicia sesión</h5>
                        <br/>
                        <br/>
                    </div>
                    <div>
                        <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">

                            <div class=\"row\">
                                <div class=\"input-field col s12\">
                                    <input type=\"text\" id=\"username\" name=\"_username\" required = \"required\"/>
                                    <label for=\"username\">E-mail</label>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"input-field col s12\">
                                    <input type=\"password\" id=\"password\" name=\"_password\" required = \"required\"/>
                                    <label for=\"password\">Password</label>
                                </div>
                            </div>

                            <input type=\"hidden\" name=\"_target_path\" value=\"/panel_principal\" />

                            <button type=\"submit\" class=\"waves-effect waves-light btn blue darken-4 right\">Entrar</button>
                        </form>
                    </div>

                    ";
        // line 37
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 38
            echo "                        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 40
        echo "
                </div>
            </div>
    </div>

    <style>
        body {
            background: url(";
        // line 47
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3548c40_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3548c40_0") : $this->env->getExtension('asset')->getAssetUrl("images/3548c40_inter3_1.jpg");
            // line 48
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
        // line 50
        echo "            );
            height:100vh;
            background-size:cover;
        }
    </style>

";
    }

    public function getTemplateName()
    {
        return ":security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 50,  90 => 48,  86 => 47,  77 => 40,  71 => 38,  69 => 37,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*             <div class="z-depth-1 form" style="width:50%;align-content: center">*/
/*                 <div class="formcontainer">*/
/*                     <div>*/
/*                         <br/>*/
/*                         <h5>Inicia sesión</h5>*/
/*                         <br/>*/
/*                         <br/>*/
/*                     </div>*/
/*                     <div>*/
/*                         <form action="{{ path('login') }}" method="post">*/
/* */
/*                             <div class="row">*/
/*                                 <div class="input-field col s12">*/
/*                                     <input type="text" id="username" name="_username" required = "required"/>*/
/*                                     <label for="username">E-mail</label>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="row">*/
/*                                 <div class="input-field col s12">*/
/*                                     <input type="password" id="password" name="_password" required = "required"/>*/
/*                                     <label for="password">Password</label>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <input type="hidden" name="_target_path" value="/panel_principal" />*/
/* */
/*                             <button type="submit" class="waves-effect waves-light btn blue darken-4 right">Entrar</button>*/
/*                         </form>*/
/*                     </div>*/
/* */
/*                     {% if error %}*/
/*                         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                     {% endif %}*/
/* */
/*                 </div>*/
/*             </div>*/
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
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
