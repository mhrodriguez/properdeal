<?php

/* :mensaje:mail_inmueblecompartido.html.twig */
class __TwigTemplate_4fe972e039fc6f1c1c78ac15ba1e84bd31c0c5d1381eb55d0eeafaa3c19e55f1 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>

";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dc09010_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc09010_0") : $this->env->getExtension('asset')->getAssetUrl("images/dc09010_logotipo_1.png");
            // line 10
            echo "<img src=\"http://104.236.50.14";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" class=\"header-logo\" alt=\"Logo\"/>
";
        } else {
            // asset "dc09010"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc09010") : $this->env->getExtension('asset')->getAssetUrl("images/dc09010.png");
            echo "<img src=\"http://104.236.50.14";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" class=\"header-logo\" alt=\"Logo\"/>
";
        }
        unset($context["asset_url"]);
        // line 12
        echo "
<h4>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "nombre", array()), "html", null, true);
        echo " ha compartido una propiedad asignada a usted.</h4>

<div style=\"background-color: lightgrey; width: 500px; padding-left: 2em;\">
    <br>
    <label><b>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "nombre", array()), "html", null, true);
        echo "</b></label><br>
    <label>Teléfono: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "telefono", array()), "html", null, true);
        echo "</label><br>
    <label>Móvil: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "celular", array()), "html", null, true);
        echo "</label><br>
    <label><b>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asesor"]) ? $context["asesor"] : null), "email", array()), "html", null, true);
        echo "</b></label><br><br>
</div>

<h4>Datos de la propiedad:</h4>

<a href=\"http://104.236.50.14/PD/web/app.php/buscarinmueble/showfs/";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "idInmueble", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "legacyid", array()), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inmueble"]) ? $context["inmueble"] : null), "nombreid", array()), "html", null, true);
        echo "</a>

<h4>Se compartió a:</h4>

<ul>
";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prospectos"]) ? $context["prospectos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["prospecto"]) {
            // line 31
            echo "    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prospecto"], "email", array()), "html", null, true);
            echo "
    ";
            // line 32
            if ( !(null === $this->getAttribute($context["prospecto"], "nombre", array()))) {
                // line 33
                echo "        (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["prospecto"], "email", array()), "html", null, true);
                echo ")
    ";
            }
            // line 35
            echo "    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prospecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</ul>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return ":mensaje:mail_inmueblecompartido.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  106 => 35,  100 => 33,  98 => 32,  93 => 31,  89 => 30,  77 => 25,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  50 => 13,  47 => 12,  33 => 10,  29 => 9,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>Title</title>*/
/* </head>*/
/* <body>*/
/* */
/* {% image '@FrameworkBundle/Resources/public/images/logotipo.png' %}*/
/* <img src="http://104.236.50.14{{ asset_url }}" class="header-logo" alt="Logo"/>*/
/* {% endimage %}*/
/* */
/* <h4>{{asesor.nombre}} ha compartido una propiedad asignada a usted.</h4>*/
/* */
/* <div style="background-color: lightgrey; width: 500px; padding-left: 2em;">*/
/*     <br>*/
/*     <label><b>{{ asesor.nombre }}</b></label><br>*/
/*     <label>Teléfono: {{ asesor.telefono }}</label><br>*/
/*     <label>Móvil: {{ asesor.celular }}</label><br>*/
/*     <label><b>{{ asesor.email }}</b></label><br><br>*/
/* </div>*/
/* */
/* <h4>Datos de la propiedad:</h4>*/
/* */
/* <a href="http://104.236.50.14/PD/web/app.php/buscarinmueble/showfs/{{ inmueble.idInmueble }}">{{ inmueble.legacyid }}: {{ inmueble.nombreid }}</a>*/
/* */
/* <h4>Se compartió a:</h4>*/
/* */
/* <ul>*/
/* {% for prospecto in prospectos %}*/
/*     <li>{{ prospecto.email }}*/
/*     {% if (prospecto.nombre is not null) %}*/
/*         ({{ prospecto.email }})*/
/*     {% endif %}*/
/*     </li>*/
/* {% endfor %}*/
/* </ul>*/
/* */
/* </body>*/
/* </html>*/
