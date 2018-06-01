<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'asesor_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AsesorController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/asesor/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asesor_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AsesorController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/asesor/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'buscarinmueble_buscarform' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BuscarInmuebleController::buscarformAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/buscarinmueble/buscarform',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'buscarinmueble_buscarformvertical' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BuscarInmuebleController::buscarformverticalAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/buscarinmueble/buscarformvertical',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'buscarinmueble_resultados' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BuscarInmuebleController::resultadosAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/buscarinmueble/resultados',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'buscarinmueble_buscarpanel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BuscarInmuebleController::buscarPanelAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/buscarinmueble/buscarpanel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'buscarinmueble_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BuscarInmuebleController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/buscarinmueble',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'colaborador_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ColaboradorController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/colaborador/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'colaborador_handshake' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'AppBundle\\Controller\\ColaboradorController::handshakeAction',  ),  2 =>   array (    '_format' => 'json',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/colaborador/handshake',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'colonia_index' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_format' => 'html',    '_controller' => 'AppBundle\\Controller\\ColoniaController::indexAction',  ),  2 =>   array (    '_format' => 'json',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/colonia/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'consultarinmueble_buscarformvertical' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ConsultarInmuebleController::consultarformverticalAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/consultarinmueble/consultarformvertical',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'consultarinmueble_resultados' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ConsultarInmuebleController::resultadosAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/consultarinmueble/resultados',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'consultarinmueble_buscarpanel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ConsultarInmuebleController::consultarPanelAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/consultarinmueble/consultarpanel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contacto_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ContactoController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contacto/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contacto_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ContactoController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contacto/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contacto_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ContactoController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/contacto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contacto_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ContactoController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/contacto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contacto_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ContactoController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/contacto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dashboard_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DashboardController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dashboard/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inmueble_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\InmuebleController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inmueble/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inmueble_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\InmuebleController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inmueble/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inmueble_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\InmuebleController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/inmueble',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listacontacto_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ListaContactoController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listacontacto/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listacontacto_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ListaContactoController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listacontacto/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'municipio_index' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_format' => 'html',    '_controller' => 'AppBundle\\Controller\\MunicipioController::indexAction',  ),  2 =>   array (    '_format' => 'json',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/municipio/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'noticia_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\NoticiaController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/noticia/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'noticia_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\NoticiaController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/noticia/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'noticia_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\NoticiaController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/noticia',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'noticia_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\NoticiaController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/noticia',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'noticia_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\NoticiaController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/noticia',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'panel_inmueble' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PanelInmuebleController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panel_inmueble',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'panel_miperfil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PanelMiPerfilController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panel_miperfil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'panel_principal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PanelPrincipalController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panel_principal',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'panel_prospecto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PanelProspectoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panel_prospecto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'panel_solicitud' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PanelSolicitudController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panel_solicitud',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'prospecto_index' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_format' => 'html',    '_controller' => 'AppBundle\\Controller\\ProspectoController::indexAction',  ),  2 =>   array (    '_format' => 'html|json',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/prospecto/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'prospecto_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProspectoController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/prospecto/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SolicitudController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/solicitud/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_resultadosfiltro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SolicitudController::resultadosfiltroAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/solicitud/resultadosfiltro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SolicitudController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/solicitud/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_buscarform' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SolicitudController::buscarformAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/solicitud/buscarform',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tarea_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TareaController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tarea/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'testimonio_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TestimonioController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/testimonio/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UsuarioController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UsuarioController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tarea_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TareaController::newAction',    'indexAsesor' => -1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tarea/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inmuebleimagen_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\InmuebleImagenController::indexAction',    'idInmueble' => 0,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inmuebleimagen/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inmuebleimagen_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\InmuebleImagenController::newAction',    'idInmueble' => 0,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inmuebleimagen/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'municipio_json_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MunicipioController::indexAction',    'indexEstado' => -1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/municipio/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'colonia_json_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ColoniaController::indexAction',    'indexEstado' => -1,    'indexMunicipio' => -1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/colonia/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'prospecto_json_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProspectoController::indexAction',    'indexAsesor' => -1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/prospecto/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'colaborador_json_handshake' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ColaboradorController::handshakeAction',    'idUsuarioColaborador' => -1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/colaborador/handshake',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gchart_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SaadTazi\\GChartBundle\\Controller\\DemoController::demoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gchart/demo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gchart_demo2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SaadTazi\\GChartBundle\\Controller\\DemoController::demo2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gchart/demo2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gchart_demo3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SaadTazi\\GChartBundle\\Controller\\DemoController::demo3Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gchart/demo3',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
