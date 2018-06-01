<?php

/* :agencia:index.html.twig */
class __TwigTemplate_52be0f588208564425566f2bcb65b26984c31280048360d40683250d190f3fe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":agencia:index.html.twig", 1);
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
        echo "
<div id=\"container\">

    <div class=\"row\">
        <nav>
            <div class=\"nav-wrapper z-depth-1\">
                <div class=\"col s12  blue darken-1 \">
                    <a href=\"#\" class=\"breadcrumb\">Agencias</a>
                </div>
            </div>
        </nav>
    </div>

    <div class=\"row\" >
        <div class=\"col s12 m12 l12\">

            <table>
                <thead>
                <tr>
                    <th>Agencia</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <b>ActivosBR</b><br><br>
                        Oficina ActivosBR<br>
                        Empresa: Activos BR<br>
                        e-mail: info@activosbr.com<br>
                        Tel. (614) 414 8282<br>
                        Cel. (614) 142 3060<br>
                    </td>

                </tr>
                <tr>

                    <td>
                        <b>Adoquin Investment</b><br><br>
                        Adoquin Investments<br>
                        Empresa: ADOQUIN INVESTMENTS<br>
                        e-mail: info@adoquininvestments.com<br>
                        Tel. (81) 8303-1674<br>
                    </td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<style>
    body {
        height:100vh;
        background-color: white;
    }
</style>

";
    }

    public function getTemplateName()
    {
        return ":agencia:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div id="container">*/
/* */
/*     <div class="row">*/
/*         <nav>*/
/*             <div class="nav-wrapper z-depth-1">*/
/*                 <div class="col s12  blue darken-1 ">*/
/*                     <a href="#" class="breadcrumb">Agencias</a>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/* */
/*     <div class="row" >*/
/*         <div class="col s12 m12 l12">*/
/* */
/*             <table>*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Agencia</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <tr>*/
/*                     <td>*/
/*                         <b>ActivosBR</b><br><br>*/
/*                         Oficina ActivosBR<br>*/
/*                         Empresa: Activos BR<br>*/
/*                         e-mail: info@activosbr.com<br>*/
/*                         Tel. (614) 414 8282<br>*/
/*                         Cel. (614) 142 3060<br>*/
/*                     </td>*/
/* */
/*                 </tr>*/
/*                 <tr>*/
/* */
/*                     <td>*/
/*                         <b>Adoquin Investment</b><br><br>*/
/*                         Adoquin Investments<br>*/
/*                         Empresa: ADOQUIN INVESTMENTS<br>*/
/*                         e-mail: info@adoquininvestments.com<br>*/
/*                         Tel. (81) 8303-1674<br>*/
/*                     </td>*/
/* */
/*                 </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <style>*/
/*     body {*/
/*         height:100vh;*/
/*         background-color: white;*/
/*     }*/
/* </style>*/
/* */
/* {% endblock %}*/
/* */
/* */
