<?php

/* :footer:show.html.twig */
class __TwigTemplate_5577c2fb7105ab85045b0f41db29d41a3a7fbdcc530ec033a64754ba865fa406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer class=\"page-footer grey\" style=\"margin-top: -18px\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l6 s12\">
                <ul>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Terminos y Condiciones</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Nosotros</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("testimonio_index", array());
        echo "\">Testimonios</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Contáctanos</a></li>
                </ul>
            </div>
            <div class=\"col l4 offset-l2 s12\">
                <a class=\"grey-text text-lighten-4 right\" href=\"#!\">Más</a>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            iRealty ® 2016 | Todos los Derechos Reservados.
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return ":footer:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }
}
/* <footer class="page-footer grey" style="margin-top: -18px">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col l6 s12">*/
/*                 <ul>*/
/*                     <li><a class="grey-text text-lighten-3" href="#!">Terminos y Condiciones</a></li>*/
/*                     <li><a class="grey-text text-lighten-3" href="#!">Nosotros</a></li>*/
/*                     <li><a class="grey-text text-lighten-3" href="{{ path('testimonio_index', {}) }}">Testimonios</a></li>*/
/*                     <li><a class="grey-text text-lighten-3" href="#!">Contáctanos</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="col l4 offset-l2 s12">*/
/*                 <a class="grey-text text-lighten-4 right" href="#!">Más</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="footer-copyright">*/
/*         <div class="container">*/
/*             iRealty ® 2016 | Todos los Derechos Reservados.*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
