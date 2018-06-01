<?php

/* :testimonio:index.html.twig */
class __TwigTemplate_69fef52429182015794f1c5652145b289fe234aea5a03eb90257581d20426ea7 extends Twig_Template
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
        echo "
    <div id=\"container\">

        <h4>Testimonios</h4>

        <div class=\"row\">
            <div class=\"col s6 m6 l6\">
                <blockquote class=\"z-depth-1\">
                    <p>Llevamos 2 años utilizando la plataforma de ProperDeal y no podríamos estar más contentos. ¡Sigan con su excelente trabajo!</p>
                    <footer>- Horacio Ramos, Metro por Metro</footer>
                </blockquote>
            </div>
            <div class=\"col s6 m6 l6\">
                <blockquote class=\"z-depth-1\">
                    <p>Lo que más nos gusta de ProperDeal es lo fácil que resulta usar la plataforma y el hecho que si llegas a tener alguna duda, ellos te asesoran.</p>
                    <footer>- Mary Garza, Moving Property</footer>
                </blockquote>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col s6 m6 l6\">
                <blockquote class=\"z-depth-1\">
                    <p>Desde que usamos ProperDeal, nuestro manejo de prospectos ha ido aumentando y todo esto con una herramienta muy fácil de usar.</p>
                    <footer>- Mario González, González Bienes Raíces</footer>
                </blockquote>
            </div>
            <div class=\"col s6 m6 l6\">
                <blockquote class=\"z-depth-1\">
                    <p>El beneficio más grande que hemos obtenido con ProperDeal, es el completo control de nuestras propiedades, prospectos y colaboradores. Agregar y modificar cualquier información resulta muy fácil y sin quitarte mucho tiempo.</p>
                    <footer>- Fernando González, Plusvalía Inmuebles</footer>
                </blockquote>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col s6 m6 l6\">
                <blockquote class=\"z-depth-1\">
                    <p>Lo que mas nos gusta de ProperDeal es la manera en que presentan la información de nuestros contactos y propiedades, nos facilita contar con un mejor control y nos permite planear a futuro.</p>
                    <footer>- Gustavo Lomelín, Lomelín Bienes Raíces</footer>
                </blockquote>
            </div>
            <div class=\"col s6 m6 l6\">
                <blockquote class=\"z-depth-1\">
                    <p>La razón principal por la cual elegimos ProperDeal, fue por lo increíblemente sencillo que resulta utilizar su plataforma. Esto lo decimos con la experiencia de haber probado ya otros productos similares, ninguno otro se compara con ProperDeal.</p>
                    <footer>- Ricardo Villarreal, Bolsa Inmobiliaria San Pedro</footer>
                </blockquote>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col s6 m6 l6\">
                <blockquote class=\"z-depth-1\">
                    <p>Nos gusta como ProperDeal presenta la información de nuestros contactos y propiedades, pues nos ayudan a contar con un mejor control y nos permiten planear a futuro.</p>
                    <footer>- Lic. Yolanda Villarreal, Infinito Bienes Raíces</footer>
                </blockquote>
            </div>
        </div>
    </div>
";
    }

    // line 65
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 66
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

        #container
        {
            margin-left: 5em;
        }

        blockquote {
            font-family: Georgia, serif;
            font-size: 18px;
            font-style: italic;
            width: 450px;
            margin: 0.25em 0;
            padding: 0.25em 40px;
            line-height: 1.45;
            position: relative;
            color: #383838;
            background:#fafafa;
            border-left: 5px solid #ff6f00 !important;
        }

        blockquote:before {
            display: block;
            content: \"\\201C\";
            font-size: 80px;
            position: absolute;
            left: -10px;
            top: -10px;
            color: #7a7a7a;
        }

        blockquote cite {
            color: #999999;
            font-size: 14px;
            display: block;
            margin-top: 5px;
        }

        blockquote cite:before {
            content: \"\\2014 \\2009\";
        }

        body{
            background-color: white !important;
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
        return array (  98 => 66,  95 => 65,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div id="container">*/
/* */
/*         <h4>Testimonios</h4>*/
/* */
/*         <div class="row">*/
/*             <div class="col s6 m6 l6">*/
/*                 <blockquote class="z-depth-1">*/
/*                     <p>Llevamos 2 años utilizando la plataforma de ProperDeal y no podríamos estar más contentos. ¡Sigan con su excelente trabajo!</p>*/
/*                     <footer>- Horacio Ramos, Metro por Metro</footer>*/
/*                 </blockquote>*/
/*             </div>*/
/*             <div class="col s6 m6 l6">*/
/*                 <blockquote class="z-depth-1">*/
/*                     <p>Lo que más nos gusta de ProperDeal es lo fácil que resulta usar la plataforma y el hecho que si llegas a tener alguna duda, ellos te asesoran.</p>*/
/*                     <footer>- Mary Garza, Moving Property</footer>*/
/*                 </blockquote>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col s6 m6 l6">*/
/*                 <blockquote class="z-depth-1">*/
/*                     <p>Desde que usamos ProperDeal, nuestro manejo de prospectos ha ido aumentando y todo esto con una herramienta muy fácil de usar.</p>*/
/*                     <footer>- Mario González, González Bienes Raíces</footer>*/
/*                 </blockquote>*/
/*             </div>*/
/*             <div class="col s6 m6 l6">*/
/*                 <blockquote class="z-depth-1">*/
/*                     <p>El beneficio más grande que hemos obtenido con ProperDeal, es el completo control de nuestras propiedades, prospectos y colaboradores. Agregar y modificar cualquier información resulta muy fácil y sin quitarte mucho tiempo.</p>*/
/*                     <footer>- Fernando González, Plusvalía Inmuebles</footer>*/
/*                 </blockquote>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col s6 m6 l6">*/
/*                 <blockquote class="z-depth-1">*/
/*                     <p>Lo que mas nos gusta de ProperDeal es la manera en que presentan la información de nuestros contactos y propiedades, nos facilita contar con un mejor control y nos permite planear a futuro.</p>*/
/*                     <footer>- Gustavo Lomelín, Lomelín Bienes Raíces</footer>*/
/*                 </blockquote>*/
/*             </div>*/
/*             <div class="col s6 m6 l6">*/
/*                 <blockquote class="z-depth-1">*/
/*                     <p>La razón principal por la cual elegimos ProperDeal, fue por lo increíblemente sencillo que resulta utilizar su plataforma. Esto lo decimos con la experiencia de haber probado ya otros productos similares, ninguno otro se compara con ProperDeal.</p>*/
/*                     <footer>- Ricardo Villarreal, Bolsa Inmobiliaria San Pedro</footer>*/
/*                 </blockquote>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col s6 m6 l6">*/
/*                 <blockquote class="z-depth-1">*/
/*                     <p>Nos gusta como ProperDeal presenta la información de nuestros contactos y propiedades, pues nos ayudan a contar con un mejor control y nos permiten planear a futuro.</p>*/
/*                     <footer>- Lic. Yolanda Villarreal, Infinito Bienes Raíces</footer>*/
/*                 </blockquote>*/
/*             </div>*/
/*         </div>*/
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
/*         #container*/
/*         {*/
/*             margin-left: 5em;*/
/*         }*/
/* */
/*         blockquote {*/
/*             font-family: Georgia, serif;*/
/*             font-size: 18px;*/
/*             font-style: italic;*/
/*             width: 450px;*/
/*             margin: 0.25em 0;*/
/*             padding: 0.25em 40px;*/
/*             line-height: 1.45;*/
/*             position: relative;*/
/*             color: #383838;*/
/*             background:#fafafa;*/
/*             border-left: 5px solid #ff6f00 !important;*/
/*         }*/
/* */
/*         blockquote:before {*/
/*             display: block;*/
/*             content: "\201C";*/
/*             font-size: 80px;*/
/*             position: absolute;*/
/*             left: -10px;*/
/*             top: -10px;*/
/*             color: #7a7a7a;*/
/*         }*/
/* */
/*         blockquote cite {*/
/*             color: #999999;*/
/*             font-size: 14px;*/
/*             display: block;*/
/*             margin-top: 5px;*/
/*         }*/
/* */
/*         blockquote cite:before {*/
/*             content: "\2014 \2009";*/
/*         }*/
/* */
/*         body{*/
/*             background-color: white !important;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* */
