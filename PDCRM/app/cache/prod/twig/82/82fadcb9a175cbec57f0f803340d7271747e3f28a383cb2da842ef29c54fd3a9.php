<?php

/* :formato:new.html.twig */
class __TwigTemplate_2796ed017dd1e4547acbfe883de0ee99f71994146ee339b07c17ec4cb2c2ca37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base4.html.twig", ":formato:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base4.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <sytle>
        <!-- Include stylesheet -->
        <link href=\"https://cdn.quilljs.com/1.0.0-rc.0/quill.snow.css\" rel=\"stylesheet\">
    </sytle>
    <div class=\"container\">
        <br/>

        <div class=\"row\">
            <div class=\"formcontainer\">
                <div>
                    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

                    <div class=\"row\">
                        <div class=\"input-field col s12\">
                            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titulo", array()), 'label');
        echo "
                            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titulo", array()), 'widget');
        echo "
                            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titulo", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\" style=\"\">
                        <div class=\"input-field col s12\">
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "texto", array()), 'widget');
        echo "
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "texto", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        Texto de Formato
                        <div id=\"editor\" class=\"editor\">

                        </div>
                        <!-- Include the Quill library -->
                        <script src=\"https://cdn.quilljs.com/1.0.0-rc.0/quill.js\"></script>
                        <!-- Initialize Quill editor -->
                        <script type=\"text/javascript\">
                            var quill = new Quill('#editor', {
                                theme: 'snow'
                            });
                        </script>
                    </div>

                    <input type=\"submit\" value=\"Guardar\" class=\"waves-effect waves-light btn blue darken-4 right\"/>

                    <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("formato_index", array());
        echo "\" class=\"waves-effect waves-light btn blue darken-4 right\">Cancelar</a>

                    ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>

    <style>
        body{
            background-color: white;
            height: 150vh;
        }
    </style>
    <style>
        body{
            background-color: white;
            height: 140vh;
            margin: 30px;
        }
        p
        {
            font-size: medium;
        }
        h2 {
            font-family: Arial, Helvetica, sans-serif;
        }
        a {
            font-family: Arial, Helvetica, sans-serif;
        }
        label {
            font-family: Arial, Helvetica, sans-serif;
        }
        input {
            font-family: Arial, Helvetica, sans-serif;
        }
        .button {
            background-color: cornflowerblue;
            height: 32px;
            border: none;
            color: white;
            padding: 5px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
    <script>

    </script>

";
    }

    public function getTemplateName()
    {
        return ":formato:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 50,  95 => 48,  71 => 27,  67 => 26,  58 => 20,  54 => 19,  50 => 18,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base4.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <sytle>*/
/*         <!-- Include stylesheet -->*/
/*         <link href="https://cdn.quilljs.com/1.0.0-rc.0/quill.snow.css" rel="stylesheet">*/
/*     </sytle>*/
/*     <div class="container">*/
/*         <br/>*/
/* */
/*         <div class="row">*/
/*             <div class="formcontainer">*/
/*                 <div>*/
/*                     {{ form_start(form) }}*/
/* */
/*                     <div class="row">*/
/*                         <div class="input-field col s12">*/
/*                             {{ form_label(form.titulo) }}*/
/*                             {{ form_widget(form.titulo) }}*/
/*                             {{ form_errors(form.titulo) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row" style="">*/
/*                         <div class="input-field col s12">*/
/*                             {{ form_widget(form.texto) }}*/
/*                             {{ form_errors(form.texto) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         Texto de Formato*/
/*                         <div id="editor" class="editor">*/
/* */
/*                         </div>*/
/*                         <!-- Include the Quill library -->*/
/*                         <script src="https://cdn.quilljs.com/1.0.0-rc.0/quill.js"></script>*/
/*                         <!-- Initialize Quill editor -->*/
/*                         <script type="text/javascript">*/
/*                             var quill = new Quill('#editor', {*/
/*                                 theme: 'snow'*/
/*                             });*/
/*                         </script>*/
/*                     </div>*/
/* */
/*                     <input type="submit" value="Guardar" class="waves-effect waves-light btn blue darken-4 right"/>*/
/* */
/*                     <a href="{{ path('formato_index', {}) }}" class="waves-effect waves-light btn blue darken-4 right">Cancelar</a>*/
/* */
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <style>*/
/*         body{*/
/*             background-color: white;*/
/*             height: 150vh;*/
/*         }*/
/*     </style>*/
/*     <style>*/
/*         body{*/
/*             background-color: white;*/
/*             height: 140vh;*/
/*             margin: 30px;*/
/*         }*/
/*         p*/
/*         {*/
/*             font-size: medium;*/
/*         }*/
/*         h2 {*/
/*             font-family: Arial, Helvetica, sans-serif;*/
/*         }*/
/*         a {*/
/*             font-family: Arial, Helvetica, sans-serif;*/
/*         }*/
/*         label {*/
/*             font-family: Arial, Helvetica, sans-serif;*/
/*         }*/
/*         input {*/
/*             font-family: Arial, Helvetica, sans-serif;*/
/*         }*/
/*         .button {*/
/*             background-color: cornflowerblue;*/
/*             height: 32px;*/
/*             border: none;*/
/*             color: white;*/
/*             padding: 5px 32px;*/
/*             text-align: center;*/
/*             text-decoration: none;*/
/*             display: inline-block;*/
/*             font-size: 16px;*/
/*             margin: 4px 2px;*/
/*             cursor: pointer;*/
/*         }*/
/*     </style>*/
/*     <script>*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
