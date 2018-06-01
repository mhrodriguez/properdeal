<?php

/* :inmueble:show.html.twig */
class __TwigTemplate_637cd38f07f9dbbede7097a3dd53dcdba5b32349d4f45ff89eeb535b6928b0a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":inmueble:show.html.twig", 1);
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
        echo "<div style=\"background-color: white\">
    <br>
    <h4>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "calle", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idEstado", array()), "nombre", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idMunicipio", array()), "nombre", array()), "html", null, true);
        echo "</h4>
    <h5>ID: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idInmueble", array()), "html", null, true);
        echo " Operación: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idOperacionInmueble", array()), "nombre", array()), "html", null, true);
        echo "</h5>

    <ul>
        <li>CP: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "cp", array()), "html", null, true);
        echo "</li>
        <li>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "recamaras", array()), "html", null, true);
        echo " Recámaras</li>
        <li>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosconstruccion", array()), "html", null, true);
        echo " Metros de Construcción</li>
        <li>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "metrosterreno", array()), "html", null, true);
        echo " Metros de Terreno</li>
        ";
        // line 14
        if (($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "plantas", array()) > 0)) {
            // line 15
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "plantas", array()), "html", null, true);
            echo " Plantas</li>
        ";
        }
        // line 17
        echo "    </ul>

    <div class=\"slider\">
        <ul class=\"slides\">

            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "imagenes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
            // line 23
            echo "            <li>
                <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["imagen"], "getWebPath", array(), "method"), "html", null, true);
            echo "\"> <!-- random image -->
                <div class=\"caption center-align\">
                    <!--h3>This is our big Tagline!</h3>
                    <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5-->
                </div>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </ul>
    </div>

    <script>
    \$(document).ready(function(){
    \$('.slider').slider({full_width: true});
    });
    </script>

    <!--ul>
        <li>
        </li>
        <li>
        </li>
        <li-->
            ";
        // line 49
        echo "        <!--/li-->
    <!--/ul-->
</div>
";
    }

    public function getTemplateName()
    {
        return ":inmueble:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 49,  102 => 31,  89 => 24,  86 => 23,  82 => 22,  75 => 17,  69 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  43 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div style="background-color: white">*/
/*     <br>*/
/*     <h4>{{ inmueble.calle }}, {{ inmueble.idEstado.nombre }}, {{ inmueble.idMunicipio.nombre }}</h4>*/
/*     <h5>ID: {{ inmueble.idInmueble }} Operación: {{ inmueble.idOperacionInmueble.nombre }}</h5>*/
/* */
/*     <ul>*/
/*         <li>CP: {{ inmueble.cp }}</li>*/
/*         <li>{{ inmueble.recamaras }} Recámaras</li>*/
/*         <li>{{ inmueble.metrosconstruccion }} Metros de Construcción</li>*/
/*         <li>{{ inmueble.metrosterreno }} Metros de Terreno</li>*/
/*         {% if inmueble.plantas > 0 %}*/
/*             <li>{{ inmueble.plantas }} Plantas</li>*/
/*         {% endif %}*/
/*     </ul>*/
/* */
/*     <div class="slider">*/
/*         <ul class="slides">*/
/* */
/*             {% for imagen in inmueble.imagenes %}*/
/*             <li>*/
/*                 <img src="{{ imagen.getWebPath() }}"> <!-- random image -->*/
/*                 <div class="caption center-align">*/
/*                     <!--h3>This is our big Tagline!</h3>*/
/*                     <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5-->*/
/*                 </div>*/
/*             </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <script>*/
/*     $(document).ready(function(){*/
/*     $('.slider').slider({full_width: true});*/
/*     });*/
/*     </script>*/
/* */
/*     <!--ul>*/
/*         <li>*/
/*         </li>*/
/*         <li>*/
/*         </li>*/
/*         <li-->*/
/*             {# form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) #}*/
/*         <!--/li-->*/
/*     <!--/ul-->*/
/* </div>*/
/* {% endblock %}*/
/* */
