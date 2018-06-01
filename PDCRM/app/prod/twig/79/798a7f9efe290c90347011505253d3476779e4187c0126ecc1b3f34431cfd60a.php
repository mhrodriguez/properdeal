<?php

/* :usuario:edit.html.twig */
class __TwigTemplate_f9c03f688e1613f1eb7aca79777f3206ee2fa4fc9ef27b6f5d49ec01c26e5a41 extends Twig_Template
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

        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col s3 m3 l3\" style=\"align-content: center\">
                ";
        // line 20
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3a93b33_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33_0") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33_ic_usuario_1.jpg");
            // line 21
            echo "                    <img id=\"imgFotografia\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"\" class=\"responsive-img\" style=\"width:50%;margin-left: 25%\">
                ";
        } else {
            // asset "3a93b33"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a93b33") : $this->env->getExtension('asset')->getAssetUrl("images/3a93b33.jpg");
            echo "                    <img id=\"imgFotografia\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"\" class=\"responsive-img\" style=\"width:50%;margin-left: 25%\">
                ";
        }
        unset($context["asset_url"]);
        // line 23
        echo "                <br><br>
                <div class=\"input-field col s12\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileFoto", array()), 'widget');
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileFoto", array()), 'errors');
        echo "
                </div>
                <br><br>
                ";
        // line 29
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e42c239_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e42c239_0") : $this->env->getExtension('asset')->getAssetUrl("images/e42c239_ic_logogenerico_1.jpg");
            // line 30
            echo "                    <img id=\"imgLogo\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"\" class=\"responsive-img\" style=\"width:80%;margin-left:10%\">
                ";
        } else {
            // asset "e42c239"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e42c239") : $this->env->getExtension('asset')->getAssetUrl("images/e42c239.jpg");
            echo "                    <img id=\"imgLogo\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"\" class=\"responsive-img\" style=\"width:80%;margin-left:10%\">
                ";
        }
        unset($context["asset_url"]);
        // line 32
        echo "                <br><br>
                <div class=\"input-field col s12\">
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileLogo", array()), 'widget');
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileLogo", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"col s9 m9 l9\">
                <div class=\"formcontainer\">
                    <div>

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'widget');
        echo "
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'label');
        echo "
                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "empresa", array()), 'widget');
        echo "
                                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "empresa", array()), 'label');
        echo "
                                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "empresa", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
                                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
                                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'widget');
        echo "
                                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'label');
        echo "
                                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'errors');
        echo "
                            </div>
                        </div>


                        <input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue darken-4 right\"/>

                    </div>
                </div>
            </div>
        </div>
        ";
        // line 81
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>

    <style>
        body{
            background-color: white;
            height: 100vh;
        }
        p
        {
            font-size: small;
        }
    </style>

    <script>
        ";
        // line 96
        if (((isset($context["webPathFoto"]) ? $context["webPathFoto"] : null) != false)) {
            // line 97
            echo "            document.getElementById('imgFotografia').src = '";
            echo twig_escape_filter($this->env, (isset($context["webPathFoto"]) ? $context["webPathFoto"] : null), "html", null, true);
            echo "';
        ";
        }
        // line 99
        echo "
        ";
        // line 100
        if (((isset($context["webPathLogo"]) ? $context["webPathLogo"] : null) != false)) {
            // line 101
            echo "        document.getElementById('imgLogo').src = '";
            echo twig_escape_filter($this->env, (isset($context["webPathLogo"]) ? $context["webPathLogo"] : null), "html", null, true);
            echo "';
        ";
        }
        // line 103
        echo "    </script>

    <ul>
        <li>
        </li>
        <li>
            ";
        // line 112
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
        return array (  240 => 112,  232 => 103,  226 => 101,  224 => 100,  221 => 99,  215 => 97,  213 => 96,  195 => 81,  181 => 70,  177 => 69,  173 => 68,  164 => 62,  160 => 61,  156 => 60,  147 => 54,  143 => 53,  139 => 52,  130 => 46,  126 => 45,  122 => 44,  110 => 35,  106 => 34,  102 => 32,  88 => 30,  84 => 29,  78 => 26,  74 => 25,  70 => 23,  56 => 21,  52 => 20,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
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
/*         {{ form_start(form) }}*/
/*         <div class="row">*/
/*             <div class="col s3 m3 l3" style="align-content: center">*/
/*                 {% image '@FrameworkBundle/Resources/public/images/ic_usuario.jpg' %}*/
/*                     <img id="imgFotografia" src="{{ asset_url }}" alt="" class="responsive-img" style="width:50%;margin-left: 25%">*/
/*                 {% endimage %}*/
/*                 <br><br>*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.fileFoto) }}*/
/*                     {{ form_errors(form.fileFoto) }}*/
/*                 </div>*/
/*                 <br><br>*/
/*                 {% image '@FrameworkBundle/Resources/public/images/ic_logogenerico.jpg' %}*/
/*                     <img id="imgLogo" src="{{ asset_url }}" alt="" class="responsive-img" style="width:80%;margin-left:10%">*/
/*                 {% endimage %}*/
/*                 <br><br>*/
/*                 <div class="input-field col s12">*/
/*                     {{ form_widget(form.fileLogo) }}*/
/*                     {{ form_errors(form.fileLogo) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col s9 m9 l9">*/
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
/*                                 {{ form_widget(form.telefono) }}*/
/*                                 {{ form_label(form.telefono) }}*/
/*                                 {{ form_errors(form.telefono) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/* */
/*                         <input type="submit" value="Guardar" class="waves-effect waves-light btn blue darken-4 right"/>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* */
/*     <style>*/
/*         body{*/
/*             background-color: white;*/
/*             height: 100vh;*/
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
