<?php

/* :usuario:edit.html.twig */
class __TwigTemplate_1dd900dc941edfc337bb9f082e62ea4c9a5cac49f3792c2ebafd5e44fc5cb3a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":usuario:edit.html.twig", 1);
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
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col s12 m12 l12\">
                <div class=\"formcontainer\">
                    <div>

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'widget');
        echo "
                                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'label');
        echo "
                                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "empresa", array()), 'widget');
        echo "
                                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "empresa", array()), 'label');
        echo "
                                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "empresa", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pwdemail", array()), 'widget');
        echo "
                                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pwdemail", array()), 'label');
        echo "
                                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pwdemail", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'widget');
        echo "
                                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'label');
        echo "
                                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono2", array()), 'widget');
        echo "
                                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono2", array()), 'label');
        echo "
                                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono2", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "celular", array()), 'widget');
        echo "
                                ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "celular", array()), 'label');
        echo "
                                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "celular", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s6\">
                                ";
        // line 84
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3a93b33_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33_0") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33_ic_usuario_1.jpg");
            // line 85
            echo "                                <img id=\"imgFotografia\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"\" class=\"responsive-img\" style=\"width:50%;margin-left: 25%\">
                                ";
        } else {
            // asset "3a93b33"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33.jpg");
            echo "                                <img id=\"imgFotografia\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"\" class=\"responsive-img\" style=\"width:50%;margin-left: 25%\">
                                ";
        }
        unset($context["asset_url"]);
        // line 87
        echo "                                <br><br>
                                <div class=\"input-field col s12\">
                                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileFoto", array()), 'widget');
        echo "
                                    ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileFoto", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"input-field col s6\">
                                ";
        // line 94
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e42c239_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e42c239_0") : $this->env->getExtension('asset')->getAssetUrl("images/e42c239_ic_logogenerico_1.jpg");
            // line 95
            echo "                                <img id=\"imgLogo\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"\" class=\"responsive-img\" style=\"width:80%;margin-left:10%\">
                                ";
        } else {
            // asset "e42c239"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e42c239") : $this->env->getExtension('asset')->getAssetUrl("images/e42c239.jpg");
            echo "                                <img id=\"imgLogo\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"\" class=\"responsive-img\" style=\"width:80%;margin-left:10%\">
                                ";
        }
        unset($context["asset_url"]);
        // line 97
        echo "                                <br><br>
                                <div class=\"input-field col s12\">
                                    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileLogo", array()), 'widget');
        echo "
                                    ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileLogo", array()), 'errors');
        echo "
                                </div>
                            </div>
                        </div>

                        <input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue darken-4 right\"/>

                    </div>
                </div>
            </div>
        </div>
        ";
        // line 111
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

        <div class=\"collection\">
            <a href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("facebook_login", array());
        echo "\" target=\"_blank\" class=\"collection-item\"><i class=\"material-icons right\">keyboard_arrow_right</i>Login Facebook</a>
            <a href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_changepassword", array("idusuario" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"collection-item\"><i class=\"material-icons right\">keyboard_arrow_right</i>Cambiar password</a>
            <a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("seo_edit", array("id" => (isset($context["idseo"]) ? $context["idseo"] : null))), "html", null, true);
        echo "\" class=\"collection-item\"><i class=\"material-icons right\">keyboard_arrow_right</i>SEO</a>
        </div>

    </div>

    <style>
        body{
            background-color: white;
            height: 300vh;
        }
        p
        {
            font-size: small;
        }
    </style>

    <script>
        ";
        // line 133
        if (((isset($context["webPathFoto"]) ? $context["webPathFoto"] : null) != false)) {
            // line 134
            echo "            document.getElementById('imgFotografia').src = '";
            echo twig_escape_filter($this->env, (isset($context["webPathFoto"]) ? $context["webPathFoto"] : null), "html", null, true);
            echo "';
        ";
        }
        // line 136
        echo "
        ";
        // line 137
        if (((isset($context["webPathLogo"]) ? $context["webPathLogo"] : null) != false)) {
            // line 138
            echo "        document.getElementById('imgLogo').src = '";
            echo twig_escape_filter($this->env, (isset($context["webPathLogo"]) ? $context["webPathLogo"] : null), "html", null, true);
            echo "';
        ";
        }
        // line 140
        echo "
        document.getElementById('usuario_fileFoto').required=false;
        document.getElementById('usuario_fileLogo').required=false;

        document.getElementById('usuario_pwdemail').type='password';
    </script>

    <ul>
        <li>
        </li>
        <li>
            ";
        // line 154
        echo "        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":usuario:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 154,  305 => 140,  299 => 138,  297 => 137,  294 => 136,  288 => 134,  286 => 133,  266 => 116,  262 => 115,  258 => 114,  252 => 111,  238 => 100,  234 => 99,  230 => 97,  216 => 95,  212 => 94,  205 => 90,  201 => 89,  197 => 87,  183 => 85,  179 => 84,  170 => 78,  166 => 77,  162 => 76,  153 => 70,  149 => 69,  145 => 68,  136 => 62,  132 => 61,  128 => 60,  119 => 54,  115 => 53,  111 => 52,  102 => 46,  98 => 45,  94 => 44,  85 => 38,  81 => 37,  77 => 36,  68 => 30,  64 => 29,  60 => 28,  49 => 20,  31 => 4,  28 => 3,  11 => 1,);
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
/* */
/*         {{ form_start(form) }}*/
/*         <div class="row">*/
/*             <div class="col s12 m12 l12">*/
/*                 <div class="formcontainer">*/
/*                     <div>*/
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
/*                                 {{ form_widget(form.pwdemail) }}*/
/*                                 {{ form_label(form.pwdemail) }}*/
/*                                 {{ form_errors(form.pwdemail) }}*/
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
/*                             <div class="input-field col s12">*/
/*                                 {{ form_widget(form.telefono2) }}*/
/*                                 {{ form_label(form.telefono2) }}*/
/*                                 {{ form_errors(form.telefono2) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="row">*/
/*                             <div class="input-field col s12">*/
/*                                 {{ form_widget(form.celular) }}*/
/*                                 {{ form_label(form.celular) }}*/
/*                                 {{ form_errors(form.celular) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="row">*/
/*                             <div class="input-field col s6">*/
/*                                 {% image '@FrameworkBundle/Resources/public/images/ic_usuario.jpg' %}*/
/*                                 <img id="imgFotografia" src="{{ asset_url }}" alt="" class="responsive-img" style="width:50%;margin-left: 25%">*/
/*                                 {% endimage %}*/
/*                                 <br><br>*/
/*                                 <div class="input-field col s12">*/
/*                                     {{ form_widget(form.fileFoto) }}*/
/*                                     {{ form_errors(form.fileFoto) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="input-field col s6">*/
/*                                 {% image '@FrameworkBundle/Resources/public/images/ic_logogenerico.jpg' %}*/
/*                                 <img id="imgLogo" src="{{ asset_url }}" alt="" class="responsive-img" style="width:80%;margin-left:10%">*/
/*                                 {% endimage %}*/
/*                                 <br><br>*/
/*                                 <div class="input-field col s12">*/
/*                                     {{ form_widget(form.fileLogo) }}*/
/*                                     {{ form_errors(form.fileLogo) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <input type="submit" value="Guardar" class="waves-effect waves-light btn blue darken-4 right"/>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/* */
/*         <div class="collection">*/
/*             <a href="{{ path('facebook_login', {}) }}" target="_blank" class="collection-item"><i class="material-icons right">keyboard_arrow_right</i>Login Facebook</a>*/
/*             <a href="{{ path('user_changepassword', {'idusuario':usuario.id}) }}" class="collection-item"><i class="material-icons right">keyboard_arrow_right</i>Cambiar password</a>*/
/*             <a href="{{ path('seo_edit', {'id' : idseo}) }}" class="collection-item"><i class="material-icons right">keyboard_arrow_right</i>SEO</a>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <style>*/
/*         body{*/
/*             background-color: white;*/
/*             height: 300vh;*/
/*         }*/
/*         p*/
/*         {*/
/*             font-size: small;*/
/*         }*/
/*     </style>*/
/* */
/*     <script>*/
/*         {% if webPathFoto != false %}*/
/*             document.getElementById('imgFotografia').src = '{{ webPathFoto }}';*/
/*         {% endif %}*/
/* */
/*         {% if webPathLogo != false %}*/
/*         document.getElementById('imgLogo').src = '{{ webPathLogo }}';*/
/*         {% endif %}*/
/* */
/*         document.getElementById('usuario_fileFoto').required=false;*/
/*         document.getElementById('usuario_fileLogo').required=false;*/
/* */
/*         document.getElementById('usuario_pwdemail').type='password';*/
/*     </script>*/
/* */
/*     <ul>*/
/*         <li>*/
/*         </li>*/
/*         <li>*/
/*             {# form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) #}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* */
/* */
