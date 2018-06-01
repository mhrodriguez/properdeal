<?php

/* :mensaje:mail_mensaje.html.twig */
class __TwigTemplate_03f38abfb421cf5ec584a7882eada194c4ced1ea12c8f6225fa15460e873e838 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : null), "html", null, true);
        echo "</h4>
<p>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : null), "html", null, true);
        echo "</p>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return ":mensaje:mail_mensaje.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  50 => 13,  47 => 12,  33 => 10,  29 => 9,  19 => 1,);
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
/* <h4>{{titulo}}</h4>*/
/* <p>{{mensaje}}</p>*/
/* */
/* </body>*/
/* </html>*/
