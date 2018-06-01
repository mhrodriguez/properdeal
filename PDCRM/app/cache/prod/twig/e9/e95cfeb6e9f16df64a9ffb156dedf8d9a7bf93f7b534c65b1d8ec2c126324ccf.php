<?php

/* SaadTaziGChartBundle::layout.html.twig */
class __TwigTemplate_b672e3ad4b845085c9f0cb34184be9cb2942c732301c2406fb805735fe8442c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
        <script type=\"text/javascript\">
            google.load(\"visualization\", \"1\", {packages:[\"corechart\", 'table', 'treemap', 'gauge']});
            google.load('jquery', '1.6.0');
        </script>
    </head>
    <body>
            
            <header>
                <h1>GChartBundle Demo</h2>
            </header>

            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 20
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 21
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
            

            <div class=\"symfony-content\">
                ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "            </div>


        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "                ";
    }

    public function getTemplateName()
    {
        return "SaadTaziGChartBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  87 => 28,  81 => 5,  71 => 30,  69 => 28,  63 => 24,  54 => 21,  51 => 20,  47 => 19,  31 => 6,  27 => 5,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <title>{% block title %}Demo Bundle{% endblock %}</title>*/
/*         <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*         <script type="text/javascript" src="https://www.google.com/jsapi"></script>*/
/*         <script type="text/javascript">*/
/*             google.load("visualization", "1", {packages:["corechart", 'table', 'treemap', 'gauge']});*/
/*             google.load('jquery', '1.6.0');*/
/*         </script>*/
/*     </head>*/
/*     <body>*/
/*             */
/*             <header>*/
/*                 <h1>GChartBundle Demo</h2>*/
/*             </header>*/
/* */
/*             {% for msg in app.session.flashbag.get('notice') %}*/
/*                 <div class="flash-message">*/
/*                     <em>Notice</em>: {{ msg }}*/
/*                 </div>*/
/*             {% endfor %}*/
/* */
/*             */
/* */
/*             <div class="symfony-content">*/
/*                 {% block content %}*/
/*                 {% endblock %}*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
