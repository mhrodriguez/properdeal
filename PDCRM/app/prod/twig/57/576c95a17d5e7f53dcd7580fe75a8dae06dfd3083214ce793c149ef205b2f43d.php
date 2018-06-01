<?php

/* :testimonio:index.html.twig */
class __TwigTemplate_409d79a58a6baa30d859c16aef780090cfd1cea05b879842cfbe7b33e5fbdbdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":testimonio:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"container\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 6
            echo "                <div class=\"flash-notice\">
                    ";
            // line 7
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            <br>
            <div class=\"row\">
                <div class=\"col s12\">
                    <div class=\"comentario blue lighten-5 z-depth-2\">
                        <h6>Llevamos 2 años utilizando la plataforma de iRealty y no podríamos estar más contentos.</h6>
                        <h6>¡Sigan con su excelente trabajo!</h6>
                        <h6 class=\"bold\">- Horacio Ramos, Metro por Metro</h6>
                    </div>
                </div>
            </div>

        <div class=\"row\">
            <div class=\"col s12\">
                <div class=\"comentario blue lighten-5 z-depth-2\">
                    <h6>Llevamos 2 años utilizando la plataforma de iRealty y no podríamos estar más contentos.</h6>
                    <h6>¡Sigan con su excelente trabajo!</h6>
                    <h6 class=\"bold\">- Horacio Ramos, Metro por Metro</h6>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col s12\">
                <div class=\"comentario blue lighten-5 z-depth-2\">
                    <h6>Llevamos 2 años utilizando la plataforma de iRealty y no podríamos estar más contentos.</h6>
                    <h6>¡Sigan con su excelente trabajo!</h6>
                    <h6 class=\"bold\">- Horacio Ramos, Metro por Metro</h6>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col s12\">
                <div class=\"comentario blue lighten-5 z-depth-2\">
                    <h6>Llevamos 2 años utilizando la plataforma de iRealty y no podríamos estar más contentos.</h6>
                    <h6>¡Sigan con su excelente trabajo!</h6>
                    <h6 class=\"bold\">- Horacio Ramos, Metro por Metro</h6>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col s12\">
                <div class=\"comentario blue lighten-5 z-depth-2\">
                    <h6>Llevamos 2 años utilizando la plataforma de iRealty y no podríamos estar más contentos.</h6>
                    <h6>¡Sigan con su excelente trabajo!</h6>
                    <h6 class=\"bold\">- Horacio Ramos, Metro por Metro</h6>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col s12\">
                <div class=\"comentario blue lighten-5 z-depth-2\">
                    <h6>Llevamos 2 años utilizando la plataforma de iRealty y no podríamos estar más contentos.</h6>
                    <h6>¡Sigan con su excelente trabajo!</h6>
                    <h6 class=\"bold\">- Horacio Ramos, Metro por Metro</h6>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col s12\">
                <div class=\"comentario blue lighten-5 z-depth-2\">
                    <h6>Llevamos 2 años utilizando la plataforma de iRealty y no podríamos estar más contentos.</h6>
                    <h6>¡Sigan con su excelente trabajo!</h6>
                    <h6 class=\"bold\">- Horacio Ramos, Metro por Metro</h6>
                </div>
            </div>
        </div>
        <br>

    </div>
";
    }

    // line 85
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 86
        echo "    <style>
        div .comentario
        {
            margin-left: 40px;
            margin-right: 40px;

            padding: 20px;
        }

        .bold {
            font-weight: bold;
        }




    </style>
";
    }

    public function getTemplateName()
    {
        return ":testimonio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 86,  128 => 85,  51 => 10,  42 => 7,  39 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="container">*/
/*             {% for flash_message in app.session.flashbag.get('notice') %}*/
/*                 <div class="flash-notice">*/
/*                     {{ flash_message }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*             <br>*/
/*             <div class="row">*/
/*                 <div class="col s12">*/
/*                     <div class="comentario blue lighten-5 z-depth-2">*/
/*                         <h6>Llevamos 2 años utilizando la plataforma de iRealty y no podríamos estar más contentos.</h6>*/
/*                         <h6>¡Sigan con su excelente trabajo!</h6>*/
/*                         <h6 class="bold">- Horacio Ramos, Metro por Metro</h6>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col s12">*/
/*                 <div class="comentario blue lighten-5 z-depth-2">*/
/*                     <h6>Llevamos 2 años utilizando la plataforma de iRealty y no podríamos estar más contentos.</h6>*/
/*                     <h6>¡Sigan con su excelente trabajo!</h6>*/
/*                     <h6 class="bold">- Horacio Ramos, Metro por Metro</h6>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col s12">*/
/*                 <div class="comentario blue lighten-5 z-depth-2">*/
/*                     <h6>Llevamos 2 años utilizando la plataforma de iRealty y no podríamos estar más contentos.</h6>*/
/*                     <h6>¡Sigan con su excelente trabajo!</h6>*/
/*                     <h6 class="bold">- Horacio Ramos, Metro por Metro</h6>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col s12">*/
/*                 <div class="comentario blue lighten-5 z-depth-2">*/
/*                     <h6>Llevamos 2 años utilizando la plataforma de iRealty y no podríamos estar más contentos.</h6>*/
/*                     <h6>¡Sigan con su excelente trabajo!</h6>*/
/*                     <h6 class="bold">- Horacio Ramos, Metro por Metro</h6>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col s12">*/
/*                 <div class="comentario blue lighten-5 z-depth-2">*/
/*                     <h6>Llevamos 2 años utilizando la plataforma de iRealty y no podríamos estar más contentos.</h6>*/
/*                     <h6>¡Sigan con su excelente trabajo!</h6>*/
/*                     <h6 class="bold">- Horacio Ramos, Metro por Metro</h6>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col s12">*/
/*                 <div class="comentario blue lighten-5 z-depth-2">*/
/*                     <h6>Llevamos 2 años utilizando la plataforma de iRealty y no podríamos estar más contentos.</h6>*/
/*                     <h6>¡Sigan con su excelente trabajo!</h6>*/
/*                     <h6 class="bold">- Horacio Ramos, Metro por Metro</h6>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col s12">*/
/*                 <div class="comentario blue lighten-5 z-depth-2">*/
/*                     <h6>Llevamos 2 años utilizando la plataforma de iRealty y no podríamos estar más contentos.</h6>*/
/*                     <h6>¡Sigan con su excelente trabajo!</h6>*/
/*                     <h6 class="bold">- Horacio Ramos, Metro por Metro</h6>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <br>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <style>*/
/*         div .comentario*/
/*         {*/
/*             margin-left: 40px;*/
/*             margin-right: 40px;*/
/* */
/*             padding: 20px;*/
/*         }*/
/* */
/*         .bold {*/
/*             font-weight: bold;*/
/*         }*/
/* */
/* */
/* */
/* */
/*     </style>*/
/* {% endblock %}*/
/* */
/* */
