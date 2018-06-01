<?php

/* :inmueble:accesorios.html.twig */
class __TwigTemplate_78527d82a87f6282417aab357b88dad76cca669cf6be43768d91ccc539ea9c6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":inmueble:accesorios.html.twig", 1);
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
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "forms/custom_checkbox_widget.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"container\">
    <br/>
    <div class=\"row\">
        <nav>
            <div class=\"nav-wrapper z-depth-1\">
                <div class=\"col s12  blue darken-1 \">
                    <a href=\"#\" class=\"breadcrumb\">Propiedades</a>
                    <a href=\"#\" class=\"breadcrumb\">Accesorios</a>
                </div>
            </div>
        </nav>
    </div>
    <br/>
    <div class=\"row\">
        <div class=\"formcontainer\">
            <div>
                ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("onsubmit" => "document.getElementById(\"progressGuardar\").style.display=\"\"; return true;")));
        echo "

                <div class=\"row\">
                    <div class=\"input-field col s9\">
                        <br/><br/>
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "accesorios", array()), 'widget');
        echo "
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "accesorios", array()), 'errors');
        echo "
                    </div>
                </div>

                <input type=\"submit\" value=\"Guardar\" class=\"btn blue darken-4 right\"/>
                <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("inmueble_index", array());
        echo "\" class=\"btn blue darken-4 right\" style=\"margin-right: 10px\">Cancelar</a>

            </div>

            <div id=\"progressGuardar\" style=\"display:none\">
                <label>Guardando, espere un momento por favor...</label>
                <div id=\"divProgress2\" class=\"progress\" >
                    <div class=\"indeterminate\"></div>
                </div>
            </div>
    </div>
</div>



    <style>
        body{
            background-color: white;
            height: 170vh;
        }

        #inmueble_accesorios label
        {
            margin-right: 20px;
        }
    </style>


    <script>
/*
        var labels = document.getElementsByTagName('LABEL');
        for (var i = 0; i < labels.length; i++) {
            if (labels[i].htmlFor != '') {
                var elem = document.getElementById(labels[i].htmlFor);
                if (elem)
                    elem.label = labels[i];
            }
        }

        for (i=0; i<";
        // line 73
        echo "; i++)
        {
            var caracteristica = document.getElementById('inmueble_caracteristicas_' + i);

            ";
        // line 78
        echo "
            if (caracteristica.label.innerHTML == '";
        // line 79
        echo "')
            {
                caracteristica.checked = true;
            }

            ";
        // line 85
        echo "        }*/
    </script>

    <script>


    </script>

";
    }

    public function getTemplateName()
    {
        return ":inmueble:accesorios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 85,  124 => 79,  121 => 78,  115 => 73,  73 => 34,  65 => 29,  61 => 28,  53 => 23,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% form_theme form with ['forms/custom_checkbox_widget.html.twig'] %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="container">*/
/*     <br/>*/
/*     <div class="row">*/
/*         <nav>*/
/*             <div class="nav-wrapper z-depth-1">*/
/*                 <div class="col s12  blue darken-1 ">*/
/*                     <a href="#" class="breadcrumb">Propiedades</a>*/
/*                     <a href="#" class="breadcrumb">Accesorios</a>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/*     <br/>*/
/*     <div class="row">*/
/*         <div class="formcontainer">*/
/*             <div>*/
/*                 {{ form_start(form, {'attr': {'onsubmit' : 'document.getElementById("progressGuardar").style.display=""; return true;'}}) }}*/
/* */
/*                 <div class="row">*/
/*                     <div class="input-field col s9">*/
/*                         <br/><br/>*/
/*                         {{ form_widget(form.accesorios) }}*/
/*                         {{ form_errors(form.accesorios) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <input type="submit" value="Guardar" class="btn blue darken-4 right"/>*/
/*                 <a href="{{ path('inmueble_index', {}) }}" class="btn blue darken-4 right" style="margin-right: 10px">Cancelar</a>*/
/* */
/*             </div>*/
/* */
/*             <div id="progressGuardar" style="display:none">*/
/*                 <label>Guardando, espere un momento por favor...</label>*/
/*                 <div id="divProgress2" class="progress" >*/
/*                     <div class="indeterminate"></div>*/
/*                 </div>*/
/*             </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/*     <style>*/
/*         body{*/
/*             background-color: white;*/
/*             height: 170vh;*/
/*         }*/
/* */
/*         #inmueble_accesorios label*/
/*         {*/
/*             margin-right: 20px;*/
/*         }*/
/*     </style>*/
/* */
/* */
/*     <script>*/
/* /**/
/*         var labels = document.getElementsByTagName('LABEL');*/
/*         for (var i = 0; i < labels.length; i++) {*/
/*             if (labels[i].htmlFor != '') {*/
/*                 var elem = document.getElementById(labels[i].htmlFor);*/
/*                 if (elem)*/
/*                     elem.label = labels[i];*/
/*             }*/
/*         }*/
/* */
/*         for (i=0; i<{# form.caracteristicas|length #}; i++)*/
/*         {*/
/*             var caracteristica = document.getElementById('inmueble_caracteristicas_' + i);*/
/* */
/*             {# for caracteristicaDesc in caracteristicasDesc #}*/
/* */
/*             if (caracteristica.label.innerHTML == '{# caracteristicaDesc #}')*/
/*             {*/
/*                 caracteristica.checked = true;*/
/*             }*/
/* */
/*             {# endfor #}*/
/*         }*//* */
/*     </script>*/
/* */
/*     <script>*/
/* */
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
