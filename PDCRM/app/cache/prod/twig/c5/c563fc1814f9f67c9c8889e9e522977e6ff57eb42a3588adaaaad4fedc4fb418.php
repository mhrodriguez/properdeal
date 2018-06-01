<?php

/* :asesor:mail_bienvenida.html.twig */
class __TwigTemplate_2c6a3163b3e10bf65c42d9ac5352ff0171a9d022457a59980e702d0146a43197 extends Twig_Template
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
<h4>¡Bienvenido ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : null), "html", null, true);
        echo "!</h4>
<p>ProperDeal te da la más cordial bienvenida. Te ha sido creada una cuenta en nuestro portal, solicita tu usuario y password e ingresa en este <a href=\"http://104.236.50.14/PDCRM/web/app.php/login\">link</a>.</p>
<p>Saludos cordiales.</p>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return ":asesor:mail_bienvenida.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  47 => 12,  33 => 10,  29 => 9,  19 => 1,);
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
/* <h4>¡Bienvenido {{nombre}}!</h4>*/
/* <p>ProperDeal te da la más cordial bienvenida. Te ha sido creada una cuenta en nuestro portal, solicita tu usuario y password e ingresa en este <a href="http://104.236.50.14/PDCRM/web/app.php/login">link</a>.</p>*/
/* <p>Saludos cordiales.</p>*/
/* </body>*/
/* </html>*/
