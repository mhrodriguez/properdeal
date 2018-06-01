<?php

/* :documento:index.html.twig */
class __TwigTemplate_080425968fd765bfd9a5d0e716384851c85ae0cfa12876214e83fae5173d5173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":documento:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <!-- Page Layout here -->
            <br/>
            <div class=\"row\">
                <nav>
                    <div class=\"nav-wrapper z-depth-1\">
                        <div class=\"col s12  blue darken-1 \">
                            <a href=\"#!\" class=\"breadcrumb\">Documentos</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class=\"row\">
                <table>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/alta_bodega.docx\">Alta de bodega</a></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/alta_de_casa.docx\">Alta de casa</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/alta_de_departamento.docx\">Alta de departamento</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/alta_de_oficina.docx\">Alta de oficina</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/alta_local_comercial.docx\">Alta de local comercial</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/alta_terreno_residencial.docx\">Alta de terreno residencial</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/carta_comision.docx\">Carta comision</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/carta_compromiso_rotulo.docx\">Carta Compromiso Rotulo.docx</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/carta_de_intencion_de_compra_b.docx\">Carta de intención de compra.docx</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/comisiones_proper_deal.doc\">Comisiones ProperDeal</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/contrato_de_arredamiento.doc\">Contrato de Arredamiento</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/contrato_de_exclusividad_proper_deal.docx\">Contrato de Exclusividad Proper Deal</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/contrato_de_promesa_de_venta_privada_bosques.doc\">Contrato de promesa de venta privada bosques</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/formato_promesa_compraventa.doc\">Formato promesa compraventa</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/hoja_membretada_proper_deal.docx\">Hoja membretada Proper Deal</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/mosaico_hab_abr_2012_gzzbr_completo_2012-04-18.xls\">Mosaico habitacional</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/mosaico_valores_2012.docx\">Mosaico de valores</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/oferta_formal_para_venta.docx\">Oferta formal para venta</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/oferta_para_renta.docx\">Oferta para renta</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/opinion_de_valor.docx\">Opinión de Valor</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/presentaciones_proper_deal.ppt\">Presentaciones Proper Deal</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/recibo_deposito_en_garantia.docx\">Recibo depçosito en Garantía</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/registro_demostracion_de_propiedad.xlsx\">Registro de demostración de propiedad</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/reglamento_properdeal_2016.docx\">Reglamento Proper Deal</a></td></tr>
                    <tr><td valign=\"top\"><a href=\"/PDCRM/web/docs/solicitud_de_arrendamiento.doc\">Solicitud de arrendamiento</a></td></tr>
                </table>
            </div>
        </div>
    </div>
";
    }

    // line 50
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 51
        echo "    <style>
        body {
            background: white;
            height: 200vh;
        }
    </style>

";
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":documento:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 60,  84 => 51,  81 => 50,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'baseabc.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <!-- Page Layout here -->*/
/*             <br/>*/
/*             <div class="row">*/
/*                 <nav>*/
/*                     <div class="nav-wrapper z-depth-1">*/
/*                         <div class="col s12  blue darken-1 ">*/
/*                             <a href="#!" class="breadcrumb">Documentos</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <table>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/alta_bodega.docx">Alta de bodega</a></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/alta_de_casa.docx">Alta de casa</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/alta_de_departamento.docx">Alta de departamento</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/alta_de_oficina.docx">Alta de oficina</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/alta_local_comercial.docx">Alta de local comercial</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/alta_terreno_residencial.docx">Alta de terreno residencial</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/carta_comision.docx">Carta comision</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/carta_compromiso_rotulo.docx">Carta Compromiso Rotulo.docx</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/carta_de_intencion_de_compra_b.docx">Carta de intención de compra.docx</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/comisiones_proper_deal.doc">Comisiones ProperDeal</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/contrato_de_arredamiento.doc">Contrato de Arredamiento</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/contrato_de_exclusividad_proper_deal.docx">Contrato de Exclusividad Proper Deal</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/contrato_de_promesa_de_venta_privada_bosques.doc">Contrato de promesa de venta privada bosques</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/formato_promesa_compraventa.doc">Formato promesa compraventa</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/hoja_membretada_proper_deal.docx">Hoja membretada Proper Deal</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/mosaico_hab_abr_2012_gzzbr_completo_2012-04-18.xls">Mosaico habitacional</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/mosaico_valores_2012.docx">Mosaico de valores</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/oferta_formal_para_venta.docx">Oferta formal para venta</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/oferta_para_renta.docx">Oferta para renta</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/opinion_de_valor.docx">Opinión de Valor</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/presentaciones_proper_deal.ppt">Presentaciones Proper Deal</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/recibo_deposito_en_garantia.docx">Recibo depçosito en Garantía</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/registro_demostracion_de_propiedad.xlsx">Registro de demostración de propiedad</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/reglamento_properdeal_2016.docx">Reglamento Proper Deal</a></td></tr>*/
/*                     <tr><td valign="top"><a href="/PDCRM/web/docs/solicitud_de_arrendamiento.doc">Solicitud de arrendamiento</a></td></tr>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <style>*/
/*         body {*/
/*             background: white;*/
/*             height: 200vh;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock %}*/
/* */
