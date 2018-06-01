<?php

/* :resumen:index.html.twig */
class __TwigTemplate_c8d11e0e08ea093741b742f4af3569b2143e131f0a176a9ba88842f84df52c3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base3.html.twig", ":resumen:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascriptsheaders' => array($this, 'block_javascriptsheaders'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base3.html.twig";
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
    <div id=\"wrapper\">
        <div id=\"container\">
            <!-- Page Layout here -->
            <br/>
            <div class=\"row\">
                <nav>
                    <div class=\"nav-wrapper z-depth-1\">
                        <div class=\"col s12  blue darken-1 \">
                            <a href=\"#!\" class=\"breadcrumb\">Resumen</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class=\"row\">

                <div id='calendar'></div>

            </div>

            <div id=\"modal1\" class=\"modal\">
                <div class=\"modal-content\">
                    <iframe id=\"frmTarea\" style=\"width:100%; height:300px; margin-top:8px; padding-top:0px\" frameBorder=\"0\"></iframe>
                </div>
                <div class=\"modal-footer\">
                    <a href=\"#!\" class=\" modal-action modal-close waves-effect waves-green btn-flat\" onclick=\"document.getElementById('frmTarea').src=''; return true;\">Cerrar</a>
                </div>
            </div>

            <div class=\"row\">
                <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("inmueble_index", array());
        echo "?modificadas=1\" class=\"waves-effect waves-light btn blue darken-4 right\">Propiedades Modificadas</a>
            </div>

            <h5>Nuevas Captaciones</h5>

            <iframe src=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("inmueble_captaciones", array());
        echo "\" style=\"width:100%; height:100vh;\" frameBorder=\"0\"></iframe>
        </div>
    </div>

    <style>
        body {
            background: white;
            height: 100vh;
        }

        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }
    </style>

";
    }

    // line 57
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 58
        echo "    <link href='/PDCRM/web/fullcalendar/fullcalendar.css' rel='stylesheet' />
    <link href='/PDCRM/web/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
";
    }

    // line 62
    public function block_javascriptsheaders($context, array $blocks = array())
    {
        // line 63
        echo "    <script src='/PDCRM/web/fullcalendar/lib/moment.min.js'></script>
    <script src='/PDCRM/web/fullcalendar/lib/jquery.min.js'></script>
    <script src='/PDCRM/web/fullcalendar/fullcalendar.min.js'></script>
    <script src='/PDCRM/web/fullcalendar/lang/es.js'></script>

    <script>

        \$(document).ready(function() {

            \$('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                editable: true,
                lang: 'es',
                eventLimit: true, // allow \"more\" link when too many events
                events: [
                    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tareas"]) ? $context["tareas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tarea"]) {
            // line 83
            echo "                    {
                        id: '";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarea"], "idtarea", array()), "html", null, true);
            echo "',
                        title: '";
            // line 85
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarea"], "fecha", array()), "H:i"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tarea"], "idAccion", array()), "nombre", array()), "html", null, true);
            echo ": (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tarea"], "idProspecto", array()), "nombre", array()), "html", null, true);
            echo ") | (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tarea"], "idProspecto", array()), "email", array()), "html", null, true);
            echo ") | (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tarea"], "idProspecto", array()), "telefono", array()), "html", null, true);
            echo ") | (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tarea"], "idProspecto", array()), "telefonoMovil", array()), "html", null, true);
            echo ")',
                        start: '";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarea"], "fecha", array()), "Y-m-d"), "html", null, true);
            echo "'
                    },
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                ],
                eventClick: function(event) {tareasel(event.id);}
            });

            function tareasel(idtarea)
            {
                frmTarea = document.getElementById('frmTarea');

                url = '";
        // line 97
        echo $this->env->getExtension('routing')->getPath("tarea_show", array("id" => "ID"));
        echo "';

                url = url.replace(\"ID\", idtarea);

                frmTarea.src = url;

                \$('#modal1').openModal();
            }

        });

    </script>



";
    }

    public function getTemplateName()
    {
        return ":resumen:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 97,  161 => 89,  152 => 86,  138 => 85,  134 => 84,  131 => 83,  127 => 82,  106 => 63,  103 => 62,  97 => 58,  94 => 57,  73 => 39,  65 => 34,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base3.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <!-- Page Layout here -->*/
/*             <br/>*/
/*             <div class="row">*/
/*                 <nav>*/
/*                     <div class="nav-wrapper z-depth-1">*/
/*                         <div class="col s12  blue darken-1 ">*/
/*                             <a href="#!" class="breadcrumb">Resumen</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/*             <div class="row">*/
/* */
/*                 <div id='calendar'></div>*/
/* */
/*             </div>*/
/* */
/*             <div id="modal1" class="modal">*/
/*                 <div class="modal-content">*/
/*                     <iframe id="frmTarea" style="width:100%; height:300px; margin-top:8px; padding-top:0px" frameBorder="0"></iframe>*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat" onclick="document.getElementById('frmTarea').src=''; return true;">Cerrar</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <a href="{{ path('inmueble_index', {}) }}?modificadas=1" class="waves-effect waves-light btn blue darken-4 right">Propiedades Modificadas</a>*/
/*             </div>*/
/* */
/*             <h5>Nuevas Captaciones</h5>*/
/* */
/*             <iframe src="{{ path('inmueble_captaciones', {}) }}" style="width:100%; height:100vh;" frameBorder="0"></iframe>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <style>*/
/*         body {*/
/*             background: white;*/
/*             height: 100vh;*/
/*         }*/
/* */
/*         #calendar {*/
/*             max-width: 900px;*/
/*             margin: 0 auto;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <link href='/PDCRM/web/fullcalendar/fullcalendar.css' rel='stylesheet' />*/
/*     <link href='/PDCRM/web/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />*/
/* {% endblock %}*/
/* */
/* {% block javascriptsheaders %}*/
/*     <script src='/PDCRM/web/fullcalendar/lib/moment.min.js'></script>*/
/*     <script src='/PDCRM/web/fullcalendar/lib/jquery.min.js'></script>*/
/*     <script src='/PDCRM/web/fullcalendar/fullcalendar.min.js'></script>*/
/*     <script src='/PDCRM/web/fullcalendar/lang/es.js'></script>*/
/* */
/*     <script>*/
/* */
/*         $(document).ready(function() {*/
/* */
/*             $('#calendar').fullCalendar({*/
/*                 header: {*/
/*                     left: 'prev,next today',*/
/*                     center: 'title',*/
/*                     right: 'month,agendaWeek,agendaDay'*/
/*                 },*/
/*                 editable: true,*/
/*                 lang: 'es',*/
/*                 eventLimit: true, // allow "more" link when too many events*/
/*                 events: [*/
/*                     {% for tarea in tareas %}*/
/*                     {*/
/*                         id: '{{ tarea.idtarea }}',*/
/*                         title: '{{ tarea.fecha | date('H:i') }} {{ tarea.idAccion.nombre }}: ({{ tarea.idProspecto.nombre }}) | ({{ tarea.idProspecto.email }}) | ({{ tarea.idProspecto.telefono }}) | ({{ tarea.idProspecto.telefonoMovil }})',*/
/*                         start: '{{ tarea.fecha | date('Y-m-d') }}'*/
/*                     },*/
/*                     {% endfor %}*/
/*                 ],*/
/*                 eventClick: function(event) {tareasel(event.id);}*/
/*             });*/
/* */
/*             function tareasel(idtarea)*/
/*             {*/
/*                 frmTarea = document.getElementById('frmTarea');*/
/* */
/*                 url = '{{ path('tarea_show', {'id' : 'ID'}) }}';*/
/* */
/*                 url = url.replace("ID", idtarea);*/
/* */
/*                 frmTarea.src = url;*/
/* */
/*                 $('#modal1').openModal();*/
/*             }*/
/* */
/*         });*/
/* */
/*     </script>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
