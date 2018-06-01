<?php

/* :glosario:index.html.twig */
class __TwigTemplate_aa8dc8e92fcf897cf5478eb10b3bb38d335acb7adc8bae4c4949a4a7b0591f92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseabc.html.twig", ":glosario:index.html.twig", 1);
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
                            <a href=\"#!\" class=\"breadcrumb\">Glosario</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class=\"row\">
                <h5>Mis Propiedades</h5>

                <table>
                    <tr>
                        <td>
                            <a href=\"#!\"><i class=\"material-icons left\">visibility</i>Detalle</a><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#!\"><i class=\"material-icons left\">print</i>Vista de Impresión</a><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#!\"><i class=\"material-icons left\">person_add</i>Agregar prospecto</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#!\"><i class=\"material-icons left\">edit</i>Editar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#!\"><i class=\"material-icons left\">photo_library</i>Fotografías</a>
                        </td>
                    </tr>
                    <!--tr>
                        <td>
                            <a href=\"#!\"><i class=\"material-icons left\">dns</i>Accesorios</a>
                        </td>
                    </tr-->
                    <tr>
                        <td>
                            <a href=\"#!\"><i class=\"material-icons left\">description</i>Subir archivos</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#!\"><i class=\"material-icons left\">email</i>Enviar propiedad</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#!\"><i class=\"material-icons left\">account_box</i>Asignar propietario</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#!\"><i class=\"material-icons left\">done_all</i>Clonar Propiedad</a>
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#!\"><i class=\"material-icons left\">question_answer</i>Contactar Asesor</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">settings_overscan</i>Código QR</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">send</i>Enviar a un amigo</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">file_download</i>Guardar como PDF</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">beenhere</i>Logo de la empresa</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">date_range</i>Agendar bitácora</a>
                        </td>
                    </tr>
                    <!--tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">delete_forever</i>Borrar</a>
                        </td>
                    </tr-->
                    <tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">play_circle_outline</i>Indica Activo</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">not_interested</i>Indica Inactivo</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">sync</i>Publicar en Mercado Libre</a>
                        </td>
                    </tr>

                </table>


                <h5>Prospectos</h5>

                <table>
                    <tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">visibility</i>Detalle</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">turned_in</i>Solicitud</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">edit</i>Editar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">business_center</i>Ver Portafolio</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">description</i>Subir archivos</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">date_range</i>Actividad</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">delete_forever</i>Borrar</a>
                        </td>
                    </tr>
               </table>

                <h5>Mis solicitudes</h5>

                <table>
                    <tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">edit</i>Editar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">reply</i>Responder a solicitud</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=\"#\"><i class=\"material-icons left\">delete_forever</i>Borrar</a>
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
";
    }

    // line 193
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 194
        echo "    <style>
        body {
            background: white;
            height: 200vh;
        }
    </style>

";
    }

    // line 203
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":glosario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 203,  227 => 194,  224 => 193,  33 => 4,  30 => 3,  11 => 1,);
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
/*                             <a href="#!" class="breadcrumb">Glosario</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <h5>Mis Propiedades</h5>*/
/* */
/*                 <table>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#!"><i class="material-icons left">visibility</i>Detalle</a><br>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#!"><i class="material-icons left">print</i>Vista de Impresión</a><br>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#!"><i class="material-icons left">person_add</i>Agregar prospecto</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#!"><i class="material-icons left">edit</i>Editar</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#!"><i class="material-icons left">photo_library</i>Fotografías</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <!--tr>*/
/*                         <td>*/
/*                             <a href="#!"><i class="material-icons left">dns</i>Accesorios</a>*/
/*                         </td>*/
/*                     </tr-->*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#!"><i class="material-icons left">description</i>Subir archivos</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#!"><i class="material-icons left">email</i>Enviar propiedad</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#!"><i class="material-icons left">account_box</i>Asignar propietario</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#!"><i class="material-icons left">done_all</i>Clonar Propiedad</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#!"><i class="material-icons left">question_answer</i>Contactar Asesor</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">settings_overscan</i>Código QR</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">send</i>Enviar a un amigo</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">file_download</i>Guardar como PDF</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">beenhere</i>Logo de la empresa</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">date_range</i>Agendar bitácora</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <!--tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">delete_forever</i>Borrar</a>*/
/*                         </td>*/
/*                     </tr-->*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">play_circle_outline</i>Indica Activo</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">not_interested</i>Indica Inactivo</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">sync</i>Publicar en Mercado Libre</a>*/
/*                         </td>*/
/*                     </tr>*/
/* */
/*                 </table>*/
/* */
/* */
/*                 <h5>Prospectos</h5>*/
/* */
/*                 <table>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">visibility</i>Detalle</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">turned_in</i>Solicitud</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">edit</i>Editar</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">business_center</i>Ver Portafolio</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">description</i>Subir archivos</a>*/
/*                         </td>*/
/*                     </tr>*/
/* */
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">date_range</i>Actividad</a>*/
/*                         </td>*/
/*                     </tr>*/
/* */
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">delete_forever</i>Borrar</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                </table>*/
/* */
/*                 <h5>Mis solicitudes</h5>*/
/* */
/*                 <table>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">edit</i>Editar</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">reply</i>Responder a solicitud</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#"><i class="material-icons left">delete_forever</i>Borrar</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                 </table>*/
/* */
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
