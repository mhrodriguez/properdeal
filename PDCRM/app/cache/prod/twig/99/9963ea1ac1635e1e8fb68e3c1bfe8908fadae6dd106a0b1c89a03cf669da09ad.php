<?php

/* :contactanos:mail_enviar.html.twig */
class __TwigTemplate_b5484108f42ceb844b6403219190e5858d83f7b1504624026801e50d8e678d3d extends Twig_Template
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
<p>
    <strong>Nombre:</strong> <br>
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : null), "nombre", array()), "html", null, true);
        echo "<br><br>
    <strong>Teléfono:</strong> <br>
    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : null), "telefono", array()), "html", null, true);
        echo "<br><br>
    <strong>E-Mail:</strong> <br>
    ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : null), "email", array()), "html", null, true);
        echo "<br><br>
    <strong>Comentarios:</strong> <br>
    ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : null), "comentarios", array()), "html", null, true);
        echo "
</p>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return ":contactanos:mail_enviar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 21,  62 => 19,  57 => 17,  52 => 15,  47 => 12,  33 => 10,  29 => 9,  19 => 1,);
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
/* <p>*/
/*     <strong>Nombre:</strong> <br>*/
/*     {{ contacto.nombre }}<br><br>*/
/*     <strong>Teléfono:</strong> <br>*/
/*     {{ contacto.telefono }}<br><br>*/
/*     <strong>E-Mail:</strong> <br>*/
/*     {{ contacto.email }}<br><br>*/
/*     <strong>Comentarios:</strong> <br>*/
/*     {{ contacto.comentarios }}*/
/* </p>*/
/* */
/* </body>*/
/* </html>*/
