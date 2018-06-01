<?php

/* base4.html.twig */
class __TwigTemplate_8c0a6aca03612771dc6bbd8456887eb6ec0470c2f9f5e25b8ff18050f2799bfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascriptsheaders' => array($this, 'block_javascriptsheaders'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

    <style>
        .progress {
            position: absolute;
            margin-top: 0px;
            height: 3px;
        }
    </style>

    ";
        // line 21
        $this->displayBlock('javascriptsheaders', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "
</head>
<body onload=\"document.getElementById('divProgress').style.display='none';\">
<div id=\"divProgress\" class=\"progress\" >
    <div class=\"indeterminate\"></div>
</div>

";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "
</body>

</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Proper Deal";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
    }

    // line 21
    public function block_javascriptsheaders($context, array $blocks = array())
    {
        // line 22
        echo "
    ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "
        <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>

        <script>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 31
            echo "            alert('";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "');
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </script>

    ";
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 43,  123 => 33,  114 => 31,  110 => 30,  104 => 26,  101 => 25,  96 => 22,  93 => 21,  89 => 8,  86 => 7,  80 => 5,  72 => 44,  70 => 43,  61 => 36,  59 => 25,  56 => 24,  54 => 21,  40 => 10,  37 => 9,  35 => 7,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Proper Deal{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*     {% endblock %}*/
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/* */
/*     <style>*/
/*         .progress {*/
/*             position: absolute;*/
/*             margin-top: 0px;*/
/*             height: 3px;*/
/*         }*/
/*     </style>*/
/* */
/*     {% block javascriptsheaders %}*/
/* */
/*     {% endblock %}*/
/* */
/*     {% block javascripts %}*/
/* */
/*         <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/* */
/*         <script>*/
/*             {% for flash_message in app.session.flashbag.get('notice') %}*/
/*             alert('{{ flash_message }}');*/
/*             {% endfor %}*/
/*         </script>*/
/* */
/*     {% endblock %}*/
/* */
/* </head>*/
/* <body onload="document.getElementById('divProgress').style.display='none';">*/
/* <div id="divProgress" class="progress" >*/
/*     <div class="indeterminate"></div>*/
/* </div>*/
/* */
/* {% block body %}{% endblock %}*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
