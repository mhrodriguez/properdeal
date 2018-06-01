<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/a')) {
            // agencia_index
            if (rtrim($pathinfo, '/') === '/agencia') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_agencia_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'agencia_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AgenciaController::indexAction',  '_route' => 'agencia_index',);
            }
            not_agencia_index:

            if (0 === strpos($pathinfo, '/archivo')) {
                // archivo_index
                if (rtrim($pathinfo, '/') === '/archivo') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_archivo_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'archivo_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ArchivoController::indexAction',  '_route' => 'archivo_index',);
                }
                not_archivo_index:

                // archivo_new
                if ($pathinfo === '/archivo/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_archivo_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ArchivoController::newAction',  '_route' => 'archivo_new',);
                }
                not_archivo_new:

                // archivo_show
                if (preg_match('#^/archivo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_archivo_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'archivo_show')), array (  '_controller' => 'AppBundle\\Controller\\ArchivoController::showAction',));
                }
                not_archivo_show:

                // archivo_edit
                if (preg_match('#^/archivo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_archivo_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'archivo_edit')), array (  '_controller' => 'AppBundle\\Controller\\ArchivoController::editAction',));
                }
                not_archivo_edit:

                // archivo_delete
                if (preg_match('#^/archivo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_archivo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'archivo_delete')), array (  '_controller' => 'AppBundle\\Controller\\ArchivoController::deleteAction',));
                }
                not_archivo_delete:

                if (0 === strpos($pathinfo, '/archivop')) {
                    // archivop_index
                    if (rtrim($pathinfo, '/') === '/archivop') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_archivop_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'archivop_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ArchivoPController::indexAction',  '_route' => 'archivop_index',);
                    }
                    not_archivop_index:

                    // archivop_new
                    if ($pathinfo === '/archivop/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_archivop_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ArchivoPController::newAction',  '_route' => 'archivop_new',);
                    }
                    not_archivop_new:

                    // archivop_show
                    if (preg_match('#^/archivop/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_archivop_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'archivop_show')), array (  '_controller' => 'AppBundle\\Controller\\ArchivoPController::showAction',));
                    }
                    not_archivop_show:

                    // archivop_edit
                    if (preg_match('#^/archivop/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_archivop_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'archivop_edit')), array (  '_controller' => 'AppBundle\\Controller\\ArchivoPController::editAction',));
                    }
                    not_archivop_edit:

                    // archivop_delete
                    if (preg_match('#^/archivop/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_archivop_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'archivop_delete')), array (  '_controller' => 'AppBundle\\Controller\\ArchivoPController::deleteAction',));
                    }
                    not_archivop_delete:

                }

            }

            if (0 === strpos($pathinfo, '/asesor')) {
                // asesor_index
                if (rtrim($pathinfo, '/') === '/asesor') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_asesor_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'asesor_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AsesorController::indexAction',  '_route' => 'asesor_index',);
                }
                not_asesor_index:

                // asesor_new
                if ($pathinfo === '/asesor/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_asesor_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AsesorController::newAction',  '_route' => 'asesor_new',);
                }
                not_asesor_new:

                // asesor_permiso
                if ($pathinfo === '/asesor/permiso') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_asesor_permiso;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AsesorController::permisoAction',  '_route' => 'asesor_permiso',);
                }
                not_asesor_permiso:

                // asesor_borrar
                if (preg_match('#^/asesor/(?P<id>[^/]++)/borrar$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_asesor_borrar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'asesor_borrar')), array (  '_controller' => 'AppBundle\\Controller\\AsesorController::borrarAction',));
                }
                not_asesor_borrar:

                // asesor_enviarmensajebienvenida
                if (preg_match('#^/asesor/(?P<id>[^/]++)/enviarmensajebienvenida$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_asesor_enviarmensajebienvenida;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'asesor_enviarmensajebienvenida')), array (  '_controller' => 'AppBundle\\Controller\\AsesorController::enviarmensajebienvenidaAction',));
                }
                not_asesor_enviarmensajebienvenida:

                if (0 === strpos($pathinfo, '/asesorpermiso')) {
                    // asesorpermiso_index
                    if (rtrim($pathinfo, '/') === '/asesorpermiso') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_asesorpermiso_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'asesorpermiso_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\AsesorPermisoController::indexAction',  '_route' => 'asesorpermiso_index',);
                    }
                    not_asesorpermiso_index:

                    // asesorpermiso_new
                    if ($pathinfo === '/asesorpermiso/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_asesorpermiso_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\AsesorPermisoController::newAction',  '_route' => 'asesorpermiso_new',);
                    }
                    not_asesorpermiso_new:

                    // asesorpermiso_show
                    if (preg_match('#^/asesorpermiso/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_asesorpermiso_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'asesorpermiso_show')), array (  '_controller' => 'AppBundle\\Controller\\AsesorPermisoController::showAction',));
                    }
                    not_asesorpermiso_show:

                    // asesorpermiso_delete
                    if (preg_match('#^/asesorpermiso/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_asesorpermiso_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'asesorpermiso_delete')), array (  '_controller' => 'AppBundle\\Controller\\AsesorPermisoController::deleteAction',));
                    }
                    not_asesorpermiso_delete:

                    // asesorpermiso_edit
                    if (preg_match('#^/asesorpermiso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_asesorpermiso_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'asesorpermiso_edit')), array (  '_controller' => 'AppBundle\\Controller\\AsesorPermisoController::editarAction',));
                    }
                    not_asesorpermiso_edit:

                }

            }

        }

        if (0 === strpos($pathinfo, '/b')) {
            if (0 === strpos($pathinfo, '/banner')) {
                // banner_index
                if (0 === strpos($pathinfo, '/banner/index') && preg_match('#^/banner/index(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_banner_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'banner_index')), array (  '_format' => 'html',  '_controller' => 'AppBundle\\Controller\\BannerController::indexAction',));
                }
                not_banner_index:

                // banner_new
                if ($pathinfo === '/banner/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_banner_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\BannerController::newAction',  '_route' => 'banner_new',);
                }
                not_banner_new:

                // banner_show
                if (preg_match('#^/banner/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_banner_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'banner_show')), array (  '_controller' => 'AppBundle\\Controller\\BannerController::showAction',));
                }
                not_banner_show:

                // banner_edit
                if (preg_match('#^/banner/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_banner_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'banner_edit')), array (  '_controller' => 'AppBundle\\Controller\\BannerController::editAction',));
                }
                not_banner_edit:

                // banner_delete
                if (preg_match('#^/banner/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_banner_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'banner_delete')), array (  '_controller' => 'AppBundle\\Controller\\BannerController::deleteAction',));
                }
                not_banner_delete:

            }

            if (0 === strpos($pathinfo, '/buscarinmueble')) {
                if (0 === strpos($pathinfo, '/buscarinmueble/buscarform')) {
                    // buscarinmueble_buscarform
                    if ($pathinfo === '/buscarinmueble/buscarform') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_buscarinmueble_buscarform;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\BuscarInmuebleController::buscarformAction',  '_route' => 'buscarinmueble_buscarform',);
                    }
                    not_buscarinmueble_buscarform:

                    // buscarinmueble_buscarformvertical
                    if ($pathinfo === '/buscarinmueble/buscarformvertical') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_buscarinmueble_buscarformvertical;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\BuscarInmuebleController::buscarformverticalAction',  '_route' => 'buscarinmueble_buscarformvertical',);
                    }
                    not_buscarinmueble_buscarformvertical:

                }

                // buscarinmueble_resultados
                if ($pathinfo === '/buscarinmueble/resultados') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_buscarinmueble_resultados;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\BuscarInmuebleController::resultadosAction',  '_route' => 'buscarinmueble_resultados',);
                }
                not_buscarinmueble_resultados:

                if (0 === strpos($pathinfo, '/buscarinmueble/buscarpanel')) {
                    // buscarinmueble_buscarpanel
                    if ($pathinfo === '/buscarinmueble/buscarpanel') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_buscarinmueble_buscarpanel;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\BuscarInmuebleController::buscarPanelAction',  '_route' => 'buscarinmueble_buscarpanel',);
                    }
                    not_buscarinmueble_buscarpanel:

                    // buscarinmueble_buscarpanelnh
                    if ($pathinfo === '/buscarinmueble/buscarpanelnh') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_buscarinmueble_buscarpanelnh;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\BuscarInmuebleController::buscarPanelNHAction',  '_route' => 'buscarinmueble_buscarpanelnh',);
                    }
                    not_buscarinmueble_buscarpanelnh:

                }

                // buscarinmueble_show
                if (preg_match('#^/buscarinmueble/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_buscarinmueble_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'buscarinmueble_show')), array (  '_controller' => 'AppBundle\\Controller\\BuscarInmuebleController::showAction',));
                }
                not_buscarinmueble_show:

            }

        }

        if (0 === strpos($pathinfo, '/co')) {
            if (0 === strpos($pathinfo, '/col')) {
                if (0 === strpos($pathinfo, '/colaborador')) {
                    // colaborador_index
                    if (rtrim($pathinfo, '/') === '/colaborador') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_colaborador_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'colaborador_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ColaboradorController::indexAction',  '_route' => 'colaborador_index',);
                    }
                    not_colaborador_index:

                    // colaborador_handshake
                    if (0 === strpos($pathinfo, '/colaborador/handshake') && preg_match('#^/colaborador/handshake(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_colaborador_handshake;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'colaborador_handshake')), array (  '_format' => 'json',  '_controller' => 'AppBundle\\Controller\\ColaboradorController::handshakeAction',));
                    }
                    not_colaborador_handshake:

                }

                // colonia_index
                if (0 === strpos($pathinfo, '/colonia/index') && preg_match('#^/colonia/index(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_colonia_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'colonia_index')), array (  '_format' => 'html',  '_controller' => 'AppBundle\\Controller\\ColoniaController::indexAction',));
                }
                not_colonia_index:

            }

            if (0 === strpos($pathinfo, '/comision')) {
                // comision_index
                if (rtrim($pathinfo, '/') === '/comision') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comision_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'comision_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ComisionController::indexAction',  '_route' => 'comision_index',);
                }
                not_comision_index:

                // comision_new
                if ($pathinfo === '/comision/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_comision_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ComisionController::newAction',  '_route' => 'comision_new',);
                }
                not_comision_new:

                // comision_show
                if (preg_match('#^/comision/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comision_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comision_show')), array (  '_controller' => 'AppBundle\\Controller\\ComisionController::showAction',));
                }
                not_comision_show:

                // comision_edit
                if (preg_match('#^/comision/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_comision_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comision_edit')), array (  '_controller' => 'AppBundle\\Controller\\ComisionController::editAction',));
                }
                not_comision_edit:

                // comision_delete
                if (preg_match('#^/comision/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_comision_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comision_delete')), array (  '_controller' => 'AppBundle\\Controller\\ComisionController::deleteAction',));
                }
                not_comision_delete:

            }

            if (0 === strpos($pathinfo, '/con')) {
                if (0 === strpos($pathinfo, '/consultarinmueble')) {
                    // consultarinmueble_buscarformvertical
                    if ($pathinfo === '/consultarinmueble/consultarformvertical') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_consultarinmueble_buscarformvertical;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ConsultarInmuebleController::consultarformverticalAction',  '_route' => 'consultarinmueble_buscarformvertical',);
                    }
                    not_consultarinmueble_buscarformvertical:

                    // consultarinmueble_resultados
                    if ($pathinfo === '/consultarinmueble/resultados') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_consultarinmueble_resultados;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ConsultarInmuebleController::resultadosAction',  '_route' => 'consultarinmueble_resultados',);
                    }
                    not_consultarinmueble_resultados:

                    // consultarinmueble_destacados
                    if ($pathinfo === '/consultarinmueble/destacados') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_consultarinmueble_destacados;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ConsultarInmuebleController::destacadosAction',  '_route' => 'consultarinmueble_destacados',);
                    }
                    not_consultarinmueble_destacados:

                    // consultarinmueble_buscarpanel
                    if ($pathinfo === '/consultarinmueble/consultarpanel') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_consultarinmueble_buscarpanel;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ConsultarInmuebleController::consultarPanelAction',  '_route' => 'consultarinmueble_buscarpanel',);
                    }
                    not_consultarinmueble_buscarpanel:

                }

                if (0 === strpos($pathinfo, '/contact')) {
                    if (0 === strpos($pathinfo, '/contactanos')) {
                        // contactanos_index
                        if (rtrim($pathinfo, '/') === '/contactanos') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_contactanos_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'contactanos_index');
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\ContactanosController::indexAction',  '_route' => 'contactanos_index',);
                        }
                        not_contactanos_index:

                        // contactanos_enviar
                        if ($pathinfo === '/contactanos/enviar') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_contactanos_enviar;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\ContactanosController::enviarAction',  '_route' => 'contactanos_enviar',);
                        }
                        not_contactanos_enviar:

                    }

                    if (0 === strpos($pathinfo, '/contacto')) {
                        // contacto_index
                        if (rtrim($pathinfo, '/') === '/contacto') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_contacto_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'contacto_index');
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\ContactoController::indexAction',  '_route' => 'contacto_index',);
                        }
                        not_contacto_index:

                        // contacto_new
                        if ($pathinfo === '/contacto/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_contacto_new;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\ContactoController::newAction',  '_route' => 'contacto_new',);
                        }
                        not_contacto_new:

                        // contacto_show
                        if (preg_match('#^/contacto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_contacto_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacto_show')), array (  '_controller' => 'AppBundle\\Controller\\ContactoController::showAction',));
                        }
                        not_contacto_show:

                        // contacto_edit
                        if (preg_match('#^/contacto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_contacto_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacto_edit')), array (  '_controller' => 'AppBundle\\Controller\\ContactoController::editAction',));
                        }
                        not_contacto_edit:

                        // contacto_delete
                        if (preg_match('#^/contacto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_contacto_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacto_delete')), array (  '_controller' => 'AppBundle\\Controller\\ContactoController::deleteAction',));
                        }
                        not_contacto_delete:

                    }

                }

            }

        }

        // dashboard_index
        if (rtrim($pathinfo, '/') === '/dashboard') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_dashboard_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dashboard_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DashboardController::indexAction',  '_route' => 'dashboard_index',);
        }
        not_dashboard_index:

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/d')) {
            if (0 === strpos($pathinfo, '/destacado')) {
                // destacado_index
                if (rtrim($pathinfo, '/') === '/destacado') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_destacado_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'destacado_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DestacadoController::indexAction',  '_route' => 'destacado_index',);
                }
                not_destacado_index:

                // destacado_new
                if ($pathinfo === '/destacado/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_destacado_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DestacadoController::newAction',  '_route' => 'destacado_new',);
                }
                not_destacado_new:

                // destacado_show
                if (preg_match('#^/destacado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_destacado_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'destacado_show')), array (  '_controller' => 'AppBundle\\Controller\\DestacadoController::showAction',));
                }
                not_destacado_show:

                // destacado_edit
                if (preg_match('#^/destacado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_destacado_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'destacado_edit')), array (  '_controller' => 'AppBundle\\Controller\\DestacadoController::editAction',));
                }
                not_destacado_edit:

                // destacado_borrar
                if (preg_match('#^/destacado/(?P<id>[^/]++)/borrar$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_destacado_borrar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'destacado_borrar')), array (  '_controller' => 'AppBundle\\Controller\\DestacadoController::borrarAction',));
                }
                not_destacado_borrar:

            }

            // documento_index
            if (rtrim($pathinfo, '/') === '/documento') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_documento_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'documento_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DocumentoController::indexAction',  '_route' => 'documento_index',);
            }
            not_documento_index:

        }

        if (0 === strpos($pathinfo, '/enlace')) {
            // enlace_index
            if (rtrim($pathinfo, '/') === '/enlace') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_enlace_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'enlace_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EnlaceController::indexAction',  '_route' => 'enlace_index',);
            }
            not_enlace_index:

            // enlace_new
            if ($pathinfo === '/enlace/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_enlace_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EnlaceController::newAction',  '_route' => 'enlace_new',);
            }
            not_enlace_new:

            // enlace_show
            if (preg_match('#^/enlace/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_enlace_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enlace_show')), array (  '_controller' => 'AppBundle\\Controller\\EnlaceController::showAction',));
            }
            not_enlace_show:

            // enlace_edit
            if (preg_match('#^/enlace/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_enlace_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enlace_edit')), array (  '_controller' => 'AppBundle\\Controller\\EnlaceController::editAction',));
            }
            not_enlace_edit:

            // enlace_delete
            if (preg_match('#^/enlace/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_enlace_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enlace_delete')), array (  '_controller' => 'AppBundle\\Controller\\EnlaceController::deleteAction',));
            }
            not_enlace_delete:

        }

        if (0 === strpos($pathinfo, '/f')) {
            if (0 === strpos($pathinfo, '/facebook')) {
                // facebook_publicar
                if ($pathinfo === '/facebook/publicar') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_facebook_publicar;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\FacebookController::publicarAction',  '_route' => 'facebook_publicar',);
                }
                not_facebook_publicar:

                // facebook_login
                if ($pathinfo === '/facebook/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_facebook_login;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\FacebookController::loginAction',  '_route' => 'facebook_login',);
                }
                not_facebook_login:

                // facebook_token
                if ($pathinfo === '/facebook/token') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_facebook_token;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\FacebookController::tokenAction',  '_route' => 'facebook_token',);
                }
                not_facebook_token:

            }

            if (0 === strpos($pathinfo, '/formato')) {
                // formato_index
                if (rtrim($pathinfo, '/') === '/formato') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_formato_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'formato_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\FormatoController::indexAction',  '_route' => 'formato_index',);
                }
                not_formato_index:

                // formato_new
                if ($pathinfo === '/formato/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_formato_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\FormatoController::newAction',  '_route' => 'formato_new',);
                }
                not_formato_new:

                // formato_show
                if (preg_match('#^/formato/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_formato_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formato_show')), array (  '_controller' => 'AppBundle\\Controller\\FormatoController::showAction',));
                }
                not_formato_show:

                // formato_edit
                if (preg_match('#^/formato/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_formato_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formato_edit')), array (  '_controller' => 'AppBundle\\Controller\\FormatoController::editAction',));
                }
                not_formato_edit:

                // formato_delete
                if (preg_match('#^/formato/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_formato_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formato_delete')), array (  '_controller' => 'AppBundle\\Controller\\FormatoController::deleteAction',));
                }
                not_formato_delete:

            }

        }

        if (0 === strpos($pathinfo, '/g')) {
            if (0 === strpos($pathinfo, '/gerencia')) {
                // gerencia_index
                if (rtrim($pathinfo, '/') === '/gerencia') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_gerencia_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'gerencia_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\GerenciaController::indexAction',  '_route' => 'gerencia_index',);
                }
                not_gerencia_index:

                // gerencia_new
                if ($pathinfo === '/gerencia/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_gerencia_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\GerenciaController::newAction',  '_route' => 'gerencia_new',);
                }
                not_gerencia_new:

                // gerencia_show
                if (preg_match('#^/gerencia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_gerencia_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gerencia_show')), array (  '_controller' => 'AppBundle\\Controller\\GerenciaController::showAction',));
                }
                not_gerencia_show:

                // gerencia_edit
                if (preg_match('#^/gerencia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_gerencia_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gerencia_edit')), array (  '_controller' => 'AppBundle\\Controller\\GerenciaController::editAction',));
                }
                not_gerencia_edit:

                // gerencia_delete
                if (preg_match('#^/gerencia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_gerencia_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gerencia_delete')), array (  '_controller' => 'AppBundle\\Controller\\GerenciaController::deleteAction',));
                }
                not_gerencia_delete:

            }

            if (0 === strpos($pathinfo, '/glosario')) {
                // glosario_index
                if (rtrim($pathinfo, '/') === '/glosario') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_glosario_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'glosario_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\GlosarioController::indexAction',  '_route' => 'glosario_index',);
                }
                not_glosario_index:

                // glosario_new
                if ($pathinfo === '/glosario/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_glosario_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\GlosarioController::newAction',  '_route' => 'glosario_new',);
                }
                not_glosario_new:

                // glosario_show
                if (preg_match('#^/glosario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_glosario_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'glosario_show')), array (  '_controller' => 'AppBundle\\Controller\\GlosarioController::showAction',));
                }
                not_glosario_show:

                // glosario_edit
                if (preg_match('#^/glosario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_glosario_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'glosario_edit')), array (  '_controller' => 'AppBundle\\Controller\\GlosarioController::editAction',));
                }
                not_glosario_edit:

                // glosario_delete
                if (preg_match('#^/glosario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_glosario_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'glosario_delete')), array (  '_controller' => 'AppBundle\\Controller\\GlosarioController::deleteAction',));
                }
                not_glosario_delete:

            }

        }

        if (0 === strpos($pathinfo, '/i')) {
            // ids_index
            if (rtrim($pathinfo, '/') === '/ids') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ids_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ids_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\IDSController::indexAction',  '_route' => 'ids_index',);
            }
            not_ids_index:

            if (0 === strpos($pathinfo, '/inmueble')) {
                if (0 === strpos($pathinfo, '/inmueble/index')) {
                    // inmueble_index
                    if (preg_match('#^/inmueble/index(?:\\.(?P<_format>html|xls))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_inmueble_index;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'inmueble_index')), array (  '_format' => 'html',  '_controller' => 'AppBundle\\Controller\\InmuebleController::indexAction',));
                    }
                    not_inmueble_index:

                    if (0 === strpos($pathinfo, '/inmueble/indexi')) {
                        // inmueble_indeximprimir
                        if ($pathinfo === '/inmueble/indeximprimir') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_inmueble_indeximprimir;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::indeximprimirAction',  '_route' => 'inmueble_indeximprimir',);
                        }
                        not_inmueble_indeximprimir:

                        // inmueble_indexinactivos
                        if ($pathinfo === '/inmueble/indexinactivos') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_inmueble_indexinactivos;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::indexinactivosAction',  '_route' => 'inmueble_indexinactivos',);
                        }
                        not_inmueble_indexinactivos:

                        // inmueble_indeximprimirinactivos
                        if ($pathinfo === '/inmueble/indeximprimirinactivos') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_inmueble_indeximprimirinactivos;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::indeximprimirinactivosAction',  '_route' => 'inmueble_indeximprimirinactivos',);
                        }
                        not_inmueble_indeximprimirinactivos:

                    }

                    // inmueble_indexenrenta
                    if ($pathinfo === '/inmueble/indexenrentaAction') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_inmueble_indexenrenta;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::indexenrentaAction',  '_route' => 'inmueble_indexenrenta',);
                    }
                    not_inmueble_indexenrenta:

                    // inmueble_indeximprimirenrenta
                    if ($pathinfo === '/inmueble/indeximprimirenrenta') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_inmueble_indeximprimirenrenta;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::indeximprimirenrentaAction',  '_route' => 'inmueble_indeximprimirenrenta',);
                    }
                    not_inmueble_indeximprimirenrenta:

                    // inmueble_indexenrentavencimiento
                    if ($pathinfo === '/inmueble/indexenrentavencimientoAction') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_inmueble_indexenrentavencimiento;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::indexenrentavencimientoAction',  '_route' => 'inmueble_indexenrentavencimiento',);
                    }
                    not_inmueble_indexenrentavencimiento:

                    // inmueble_indeximprimirenrentavencimiento
                    if ($pathinfo === '/inmueble/indeximprimirenrentavencimiento') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_inmueble_indeximprimirenrentavencimiento;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::indeximprimirenrentavencimientoAction',  '_route' => 'inmueble_indeximprimirenrentavencimiento',);
                    }
                    not_inmueble_indeximprimirenrentavencimiento:

                }

                // inmueble_captaciones
                if ($pathinfo === '/inmueble/captaciones') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_inmueble_captaciones;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::captacionesAction',  '_route' => 'inmueble_captaciones',);
                }
                not_inmueble_captaciones:

                // inmueble_new
                if ($pathinfo === '/inmueble/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_inmueble_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::newAction',  '_route' => 'inmueble_new',);
                }
                not_inmueble_new:

                // inmueble_show
                if (preg_match('#^/inmueble/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_inmueble_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inmueble_show')), array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::showAction',));
                }
                not_inmueble_show:

                // inmueble_detalle
                if (preg_match('#^/inmueble/(?P<id>[^/]++)/detalle$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_inmueble_detalle;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inmueble_detalle')), array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::detalleAction',));
                }
                not_inmueble_detalle:

                // inmueble_keywords
                if (preg_match('#^/inmueble/(?P<id>[^/]++)/keywords$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_inmueble_keywords;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inmueble_keywords')), array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::keywordsAction',));
                }
                not_inmueble_keywords:

                // inmueble_edit
                if (preg_match('#^/inmueble/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_inmueble_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inmueble_edit')), array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::editAction',));
                }
                not_inmueble_edit:

                // inmueble_switchactivo
                if (preg_match('#^/inmueble/(?P<id>[^/]++)/switchactivo$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_inmueble_switchactivo;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inmueble_switchactivo')), array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::switchActivoAction',));
                }
                not_inmueble_switchactivo:

                // inmueble_clonar
                if (preg_match('#^/inmueble/(?P<id>[^/]++)/clonar$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_inmueble_clonar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inmueble_clonar')), array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::clonarAction',));
                }
                not_inmueble_clonar:

                // inmueble_delete
                if (preg_match('#^/inmueble/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_inmueble_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inmueble_delete')), array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::deleteAction',));
                }
                not_inmueble_delete:

                // inmueble_accesorios
                if ($pathinfo === '/inmueble/accesorios') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_inmueble_accesorios;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::accesoriosAction',  '_route' => 'inmueble_accesorios',);
                }
                not_inmueble_accesorios:

                // inmueble_portafolioasesor
                if (preg_match('#^/inmueble/(?P<idasesor>[^/]++)/portafolioasesor$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_inmueble_portafolioasesor;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inmueble_portafolioasesor')), array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::portafolioasesorAction',));
                }
                not_inmueble_portafolioasesor:

                // inmueble_portafolioprospecto
                if (preg_match('#^/inmueble/(?P<idprospecto>[^/]++)/portafolioprospecto$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_inmueble_portafolioprospecto;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inmueble_portafolioprospecto')), array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::portafolioprospectoAction',));
                }
                not_inmueble_portafolioprospecto:

                if (0 === strpos($pathinfo, '/inmuebleimagen')) {
                    // inmuebleimagen_multinew
                    if ($pathinfo === '/inmuebleimagen/multinew') {
                        return array (  '_controller' => 'AppBundle\\Controller\\InmuebleImagenController::multinewAction',  '_route' => 'inmuebleimagen_multinew',);
                    }

                    // inmuebleimagen_delete
                    if (preg_match('#^/inmuebleimagen/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_inmuebleimagen_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'inmuebleimagen_delete')), array (  '_controller' => 'AppBundle\\Controller\\InmuebleImagenController::deleteAction',));
                    }
                    not_inmuebleimagen_delete:

                    // inmuebleimagen_rotar
                    if (preg_match('#^/inmuebleimagen/(?P<id>[^/]++)/rotar$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_inmuebleimagen_rotar;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'inmuebleimagen_rotar')), array (  '_controller' => 'AppBundle\\Controller\\InmuebleImagenController::rotarAction',));
                    }
                    not_inmuebleimagen_rotar:

                    // inmuebleimagen_orden
                    if ($pathinfo === '/inmuebleimagen/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_inmuebleimagen_orden;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\InmuebleImagenController::ordenAction',  '_route' => 'inmuebleimagen_orden',);
                    }
                    not_inmuebleimagen_orden:

                }

            }

        }

        if (0 === strpos($pathinfo, '/listacontacto')) {
            // listacontacto_index
            if (rtrim($pathinfo, '/') === '/listacontacto') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_listacontacto_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'listacontacto_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ListaContactoController::indexAction',  '_route' => 'listacontacto_index',);
            }
            not_listacontacto_index:

            // listacontacto_new
            if ($pathinfo === '/listacontacto/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_listacontacto_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ListaContactoController::newAction',  '_route' => 'listacontacto_new',);
            }
            not_listacontacto_new:

        }

        if (0 === strpos($pathinfo, '/m')) {
            if (0 === strpos($pathinfo, '/mensaje')) {
                if (0 === strpos($pathinfo, '/mensaje/index')) {
                    // mensaje_index
                    if (preg_match('#^/mensaje/index(?:\\.(?P<_format>html|json|xlsx))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mensaje_index;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mensaje_index')), array (  '_format' => 'html',  '_controller' => 'AppBundle\\Controller\\MensajeController::indexAction',));
                    }
                    not_mensaje_index:

                    // mensaje_indexborrado
                    if (0 === strpos($pathinfo, '/mensaje/indexborrado') && preg_match('#^/mensaje/indexborrado(?:\\.(?P<_format>html|json|xlsx))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mensaje_indexborrado;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mensaje_indexborrado')), array (  '_format' => 'html',  '_controller' => 'AppBundle\\Controller\\MensajeController::indexborradoAction',));
                    }
                    not_mensaje_indexborrado:

                }

                // mensaje_new
                if ($pathinfo === '/mensaje/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_mensaje_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MensajeController::newAction',  '_route' => 'mensaje_new',);
                }
                not_mensaje_new:

                if (0 === strpos($pathinfo, '/mensaje/enviarinmueble')) {
                    // mensaje_enviarinmueble
                    if ($pathinfo === '/mensaje/enviarinmueble') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_mensaje_enviarinmueble;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MensajeController::enviarInmuebleAction',  '_route' => 'mensaje_enviarinmueble',);
                    }
                    not_mensaje_enviarinmueble:

                    if (0 === strpos($pathinfo, '/mensaje/enviarinmueblea')) {
                        // mensaje_enviarinmuebleamigo
                        if ($pathinfo === '/mensaje/enviarinmuebleamigo') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_mensaje_enviarinmuebleamigo;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\MensajeController::enviarInmuebleAmigoAction',  '_route' => 'mensaje_enviarinmuebleamigo',);
                        }
                        not_mensaje_enviarinmuebleamigo:

                        // mensaje_enviarinmuebleaprospectos
                        if ($pathinfo === '/mensaje/enviarinmuebleaprospectos') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_mensaje_enviarinmuebleaprospectos;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\MensajeController::enviarInmuebleAProspectosAction',  '_route' => 'mensaje_enviarinmuebleaprospectos',);
                        }
                        not_mensaje_enviarinmuebleaprospectos:

                    }

                }

                // mensaje_borrar
                if ($pathinfo === '/mensaje/borrar') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mensaje_borrar;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MensajeController::borrarmensajeAction',  '_route' => 'mensaje_borrar',);
                }
                not_mensaje_borrar:

                // mensaje_resumenenvios
                if ($pathinfo === '/mensaje/resumenenvios') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mensaje_resumenenvios;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MensajeController::resumenenviosAction',  '_route' => 'mensaje_resumenenvios',);
                }
                not_mensaje_resumenenvios:

            }

            // minisitio_index
            if (0 === strpos($pathinfo, '/minisitio') && preg_match('#^/minisitio(?:/(?P<uid>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'minisitio_index')), array (  'uid' => '0',  '_controller' => 'AppBundle\\Controller\\MinisitioController::indexAction',));
            }

            // municipio_index
            if (0 === strpos($pathinfo, '/municipio/index') && preg_match('#^/municipio/index(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_municipio_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'municipio_index')), array (  '_format' => 'html',  '_controller' => 'AppBundle\\Controller\\MunicipioController::indexAction',));
            }
            not_municipio_index:

        }

        if (0 === strpos($pathinfo, '/noticia')) {
            // noticia_index
            if (rtrim($pathinfo, '/') === '/noticia') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_noticia_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'noticia_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\NoticiaController::indexAction',  '_route' => 'noticia_index',);
            }
            not_noticia_index:

            // noticia_new
            if ($pathinfo === '/noticia/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_noticia_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\NoticiaController::newAction',  '_route' => 'noticia_new',);
            }
            not_noticia_new:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/panel_')) {
                // panel_blog
                if ($pathinfo === '/panel_blog') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PanelBlogController::indexAction',  '_route' => 'panel_blog',);
                }

                // panel_documento
                if ($pathinfo === '/panel_documento') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PanelDocumentoController::indexAction',  '_route' => 'panel_documento',);
                }

                if (0 === strpos($pathinfo, '/panel_i')) {
                    // panel_ids
                    if ($pathinfo === '/panel_ids') {
                        return array (  '_controller' => 'AppBundle\\Controller\\PanelIdsController::indexAction',  '_route' => 'panel_ids',);
                    }

                    // panel_inmueble
                    if ($pathinfo === '/panel_inmueble') {
                        return array (  '_controller' => 'AppBundle\\Controller\\PanelInmuebleController::indexAction',  '_route' => 'panel_inmueble',);
                    }

                }

                if (0 === strpos($pathinfo, '/panel_m')) {
                    // panel_mensaje
                    if ($pathinfo === '/panel_mensaje') {
                        return array (  '_controller' => 'AppBundle\\Controller\\PanelMensajeController::indexAction',  '_route' => 'panel_mensaje',);
                    }

                    // panel_miperfil
                    if ($pathinfo === '/panel_miperfil') {
                        return array (  '_controller' => 'AppBundle\\Controller\\PanelMiPerfilController::indexAction',  '_route' => 'panel_miperfil',);
                    }

                }

                if (0 === strpos($pathinfo, '/panel_pr')) {
                    // panel_principal
                    if ($pathinfo === '/panel_principal') {
                        return array (  '_controller' => 'AppBundle\\Controller\\PanelPrincipalController::indexAction',  '_route' => 'panel_principal',);
                    }

                    // panel_prospecto
                    if ($pathinfo === '/panel_prospecto') {
                        return array (  '_controller' => 'AppBundle\\Controller\\PanelProspectoController::indexAction',  '_route' => 'panel_prospecto',);
                    }

                }

                // panel_resumen
                if ($pathinfo === '/panel_resumen') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PanelResumenController::indexAction',  '_route' => 'panel_resumen',);
                }

                if (0 === strpos($pathinfo, '/panel_solicitud')) {
                    // panel_solicitud
                    if ($pathinfo === '/panel_solicitud') {
                        return array (  '_controller' => 'AppBundle\\Controller\\PanelSolicitudController::indexAction',  '_route' => 'panel_solicitud',);
                    }

                    // panel_solicitud2
                    if ($pathinfo === '/panel_solicitud2') {
                        return array (  '_controller' => 'AppBundle\\Controller\\PanelSolicitudController::index2Action',  '_route' => 'panel_solicitud2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/pro')) {
                if (0 === strpos($pathinfo, '/propietario')) {
                    // propietario_index
                    if (rtrim($pathinfo, '/') === '/propietario') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_propietario_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'propietario_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\PropietarioController::indexAction',  '_route' => 'propietario_index',);
                    }
                    not_propietario_index:

                    // propietario_new
                    if ($pathinfo === '/propietario/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_propietario_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\PropietarioController::newAction',  '_route' => 'propietario_new',);
                    }
                    not_propietario_new:

                    // propietario_show
                    if (preg_match('#^/propietario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_propietario_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'propietario_show')), array (  '_controller' => 'AppBundle\\Controller\\PropietarioController::showAction',));
                    }
                    not_propietario_show:

                    // propietario_edit
                    if (preg_match('#^/propietario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_propietario_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'propietario_edit')), array (  '_controller' => 'AppBundle\\Controller\\PropietarioController::editAction',));
                    }
                    not_propietario_edit:

                    // propietario_delete
                    if (preg_match('#^/propietario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_propietario_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'propietario_delete')), array (  '_controller' => 'AppBundle\\Controller\\PropietarioController::deleteAction',));
                    }
                    not_propietario_delete:

                }

                if (0 === strpos($pathinfo, '/prospecto')) {
                    // prospecto_index
                    if (0 === strpos($pathinfo, '/prospecto/index') && preg_match('#^/prospecto/index(?:\\.(?P<_format>html|json|xlsx))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_prospecto_index;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'prospecto_index')), array (  '_format' => 'html',  '_controller' => 'AppBundle\\Controller\\ProspectoController::indexAction',));
                    }
                    not_prospecto_index:

                    // prospecto_new
                    if ($pathinfo === '/prospecto/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_prospecto_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ProspectoController::newAction',  '_route' => 'prospecto_new',);
                    }
                    not_prospecto_new:

                    // prospecto_detalle
                    if (preg_match('#^/prospecto/(?P<id>[^/]++)/detalle$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_prospecto_detalle;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'prospecto_detalle')), array (  '_controller' => 'AppBundle\\Controller\\ProspectoController::detalleAction',));
                    }
                    not_prospecto_detalle:

                    if (0 === strpos($pathinfo, '/prospecto/asignarpropiedad')) {
                        // prospecto_asignarpropiedad
                        if ($pathinfo === '/prospecto/asignarpropiedad') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_prospecto_asignarpropiedad;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\ProspectoController::asignarpropiedadAction',  '_route' => 'prospecto_asignarpropiedad',);
                        }
                        not_prospecto_asignarpropiedad:

                        // prospecto_asignarpropiedades
                        if ($pathinfo === '/prospecto/asignarpropiedades') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_prospecto_asignarpropiedades;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\ProspectoController::asignarpropiedadesAction',  '_route' => 'prospecto_asignarpropiedades',);
                        }
                        not_prospecto_asignarpropiedades:

                    }

                    // prospecto_desasignarpropiedad
                    if ($pathinfo === '/prospecto/desasignarpropiedad') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_prospecto_desasignarpropiedad;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ProspectoController::desasignarpropiedadAction',  '_route' => 'prospecto_desasignarpropiedad',);
                    }
                    not_prospecto_desasignarpropiedad:

                    // prospecto_switchactivo
                    if (preg_match('#^/prospecto/(?P<id>[^/]++)/switchactivo$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_prospecto_switchactivo;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'prospecto_switchactivo')), array (  '_controller' => 'AppBundle\\Controller\\ProspectoController::switchActivoAction',));
                    }
                    not_prospecto_switchactivo:

                    // prospecto_edit
                    if (preg_match('#^/prospecto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_prospecto_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'prospecto_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProspectoController::editAction',));
                    }
                    not_prospecto_edit:

                    // prospecto_borrar
                    if (preg_match('#^/prospecto/(?P<id>[^/]++)/borrar$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_prospecto_borrar;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'prospecto_borrar')), array (  '_controller' => 'AppBundle\\Controller\\ProspectoController::borrarAction',));
                    }
                    not_prospecto_borrar:

                }

            }

        }

        if (0 === strpos($pathinfo, '/r')) {
            // resumen_index
            if (rtrim($pathinfo, '/') === '/resumen') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_resumen_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'resumen_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ResumenController::indexAction',  '_route' => 'resumen_index',);
            }
            not_resumen_index:

            if (0 === strpos($pathinfo, '/rotulo')) {
                // rotulo_index
                if (rtrim($pathinfo, '/') === '/rotulo') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_rotulo_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'rotulo_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RotuloController::indexAction',  '_route' => 'rotulo_index',);
                }
                not_rotulo_index:

                // rotulo_new
                if ($pathinfo === '/rotulo/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_rotulo_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RotuloController::newAction',  '_route' => 'rotulo_new',);
                }
                not_rotulo_new:

                // rotulo_show
                if (preg_match('#^/rotulo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_rotulo_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rotulo_show')), array (  '_controller' => 'AppBundle\\Controller\\RotuloController::showAction',));
                }
                not_rotulo_show:

                // rotulo_edit
                if (preg_match('#^/rotulo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_rotulo_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rotulo_edit')), array (  '_controller' => 'AppBundle\\Controller\\RotuloController::editAction',));
                }
                not_rotulo_edit:

                // rotulo_delete
                if (preg_match('#^/rotulo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_rotulo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rotulo_delete')), array (  '_controller' => 'AppBundle\\Controller\\RotuloController::deleteAction',));
                }
                not_rotulo_delete:

            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/seo')) {
                // seo_index
                if (rtrim($pathinfo, '/') === '/seo') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_seo_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'seo_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SeoController::indexAction',  '_route' => 'seo_index',);
                }
                not_seo_index:

                // seo_new
                if ($pathinfo === '/seo/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_seo_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SeoController::newAction',  '_route' => 'seo_new',);
                }
                not_seo_new:

                // seo_show
                if (preg_match('#^/seo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_seo_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'seo_show')), array (  '_controller' => 'AppBundle\\Controller\\SeoController::showAction',));
                }
                not_seo_show:

                // seo_edit
                if (preg_match('#^/seo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_seo_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'seo_edit')), array (  '_controller' => 'AppBundle\\Controller\\SeoController::editAction',));
                }
                not_seo_edit:

                // seo_delete
                if (preg_match('#^/seo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_seo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'seo_delete')), array (  '_controller' => 'AppBundle\\Controller\\SeoController::deleteAction',));
                }
                not_seo_delete:

            }

            if (0 === strpos($pathinfo, '/solicitud')) {
                if (0 === strpos($pathinfo, '/solicitud/buscar')) {
                    // solicitud_buscarinmuebles
                    if ($pathinfo === '/solicitud/buscarinmuebles') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_solicitud_buscarinmuebles;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\SolicitudController::buscarinmueblesAction',  '_route' => 'solicitud_buscarinmuebles',);
                    }
                    not_solicitud_buscarinmuebles:

                    if (0 === strpos($pathinfo, '/solicitud/buscarform')) {
                        // solicitud_buscarform
                        if ($pathinfo === '/solicitud/buscarform') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_solicitud_buscarform;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\SolicitudController::buscarformAction',  '_route' => 'solicitud_buscarform',);
                        }
                        not_solicitud_buscarform:

                        // solicitud_buscarform2
                        if ($pathinfo === '/solicitud/buscarform2') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_solicitud_buscarform2;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\SolicitudController::buscarform2Action',  '_route' => 'solicitud_buscarform2',);
                        }
                        not_solicitud_buscarform2:

                    }

                }

                // solicitud_index
                if (0 === strpos($pathinfo, '/solicitud/index') && preg_match('#^/solicitud/index(?:\\.(?P<_format>html|xls))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_solicitud_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_index')), array (  '_format' => 'html',  '_controller' => 'AppBundle\\Controller\\SolicitudController::indexAction',));
                }
                not_solicitud_index:

                if (0 === strpos($pathinfo, '/solicitud/resultados')) {
                    // solicitud_resultadosimprimirfiltro
                    if (0 === strpos($pathinfo, '/solicitud/resultadosimprimirfiltro') && preg_match('#^/solicitud/resultadosimprimirfiltro(?:\\.(?P<_format>html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_solicitud_resultadosimprimirfiltro;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_resultadosimprimirfiltro')), array (  '_format' => 'html',  '_controller' => 'AppBundle\\Controller\\SolicitudController::resultadosImprimirfiltroAction',));
                    }
                    not_solicitud_resultadosimprimirfiltro:

                    // solicitud_resultadosfiltro
                    if (0 === strpos($pathinfo, '/solicitud/resultadosfiltro') && preg_match('#^/solicitud/resultadosfiltro(?:\\.(?P<_format>html|xls))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_solicitud_resultadosfiltro;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_resultadosfiltro')), array (  '_format' => 'html',  '_controller' => 'AppBundle\\Controller\\SolicitudController::resultadosfiltroAction',));
                    }
                    not_solicitud_resultadosfiltro:

                }

                // solicitud_new
                if ($pathinfo === '/solicitud/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_solicitud_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SolicitudController::newAction',  '_route' => 'solicitud_new',);
                }
                not_solicitud_new:

                // solicitud_show
                if (preg_match('#^/solicitud/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_solicitud_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_show')), array (  '_controller' => 'AppBundle\\Controller\\SolicitudController::showAction',));
                }
                not_solicitud_show:

                // solicitud_edit
                if (preg_match('#^/solicitud/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_solicitud_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_edit')), array (  '_controller' => 'AppBundle\\Controller\\SolicitudController::editAction',));
                }
                not_solicitud_edit:

                // solicitud_borrar
                if (preg_match('#^/solicitud/(?P<id>[^/]++)/borrar$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_solicitud_borrar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_borrar')), array (  '_controller' => 'AppBundle\\Controller\\SolicitudController::borrarAction',));
                }
                not_solicitud_borrar:

            }

        }

        if (0 === strpos($pathinfo, '/t')) {
            if (0 === strpos($pathinfo, '/tarea')) {
                // tarea_show
                if (0 === strpos($pathinfo, '/tarea/show') && preg_match('#^/tarea/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tarea_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarea_show')), array (  '_controller' => 'AppBundle\\Controller\\TareaController::showAction',));
                }
                not_tarea_show:

                // tarea_index
                if (rtrim($pathinfo, '/') === '/tarea') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tarea_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tarea_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TareaController::indexAction',  '_route' => 'tarea_index',);
                }
                not_tarea_index:

                // tarea_actividades
                if ($pathinfo === '/tarea/actividades') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tarea_actividades;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TareaController::actividadesAction',  '_route' => 'tarea_actividades',);
                }
                not_tarea_actividades:

                // tarea_new2
                if ($pathinfo === '/tarea/new2') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tarea_new2;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TareaController::new2Action',  '_route' => 'tarea_new2',);
                }
                not_tarea_new2:

                // tarea_prospecto
                if ($pathinfo === '/tarea/prospecto') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tarea_prospecto;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TareaController::prospectoAction',  '_route' => 'tarea_prospecto',);
                }
                not_tarea_prospecto:

            }

            // testimonio_index
            if (rtrim($pathinfo, '/') === '/testimonio') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_testimonio_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'testimonio_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TestimonioController::indexAction',  '_route' => 'testimonio_index',);
            }
            not_testimonio_index:

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario_new
            if ($pathinfo === '/usuario/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
            }
            not_usuario_new:

            // user_changepassword
            if (0 === strpos($pathinfo, '/usuario/changepassword') && preg_match('#^/usuario/changepassword/(?P<idusuario>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_changepassword;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_changepassword')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::changepasswordAction',));
            }
            not_user_changepassword:

            if (0 === strpos($pathinfo, '/usuario/edit')) {
                // usuario_edit
                if ($pathinfo === '/usuario/edit') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_usuario_edit;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::editAction',  '_route' => 'usuario_edit',);
                }
                not_usuario_edit:

                // usuario_edit2
                if (preg_match('#^/usuario/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_usuario_edit2;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit2')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::editAction2',));
                }
                not_usuario_edit2:

            }

        }

        if (0 === strpos($pathinfo, '/zona')) {
            // zona_index
            if (rtrim($pathinfo, '/') === '/zona') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_zona_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'zona_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ZonaController::indexAction',  '_route' => 'zona_index',);
            }
            not_zona_index:

            // zona_new
            if ($pathinfo === '/zona/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_zona_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ZonaController::newAction',  '_route' => 'zona_new',);
            }
            not_zona_new:

            // zona_show
            if (preg_match('#^/zona/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_zona_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zona_show')), array (  '_controller' => 'AppBundle\\Controller\\ZonaController::showAction',));
            }
            not_zona_show:

            // zona_edit
            if (preg_match('#^/zona/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_zona_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zona_edit')), array (  '_controller' => 'AppBundle\\Controller\\ZonaController::editAction',));
            }
            not_zona_edit:

            // zona_delete
            if (preg_match('#^/zona/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_zona_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zona_delete')), array (  '_controller' => 'AppBundle\\Controller\\ZonaController::deleteAction',));
            }
            not_zona_delete:

        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        // tarea_new
        if ($pathinfo === '/tarea/new') {
            return array (  '_controller' => 'AppBundle\\Controller\\TareaController::newAction',  'indexAsesor' => -1,  '_route' => 'tarea_new',);
        }

        if (0 === strpos($pathinfo, '/inmuebleimagen')) {
            // inmuebleimagen_index
            if (rtrim($pathinfo, '/') === '/inmuebleimagen') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'inmuebleimagen_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\InmuebleImagenController::indexAction',  'idInmueble' => 0,  '_route' => 'inmuebleimagen_index',);
            }

            // inmuebleimagen_new
            if ($pathinfo === '/inmuebleimagen/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\InmuebleImagenController::newAction',  'idInmueble' => 0,  '_route' => 'inmuebleimagen_new',);
            }

        }

        // municipio_json_index
        if ($pathinfo === '/municipio/index') {
            return array (  '_controller' => 'AppBundle\\Controller\\MunicipioController::indexAction',  'indexEstado' => -1,  '_route' => 'municipio_json_index',);
        }

        // colonia_json_index
        if ($pathinfo === '/colonia/index') {
            return array (  '_controller' => 'AppBundle\\Controller\\ColoniaController::indexAction',  'indexEstado' => -1,  'indexMunicipio' => -1,  '_route' => 'colonia_json_index',);
        }

        // prospecto_json_index
        if ($pathinfo === '/prospecto/index') {
            return array (  '_controller' => 'AppBundle\\Controller\\ProspectoController::indexAction',  'indexAsesor' => -1,  '_route' => 'prospecto_json_index',);
        }

        // colaborador_json_handshake
        if ($pathinfo === '/colaborador/handshake') {
            return array (  '_controller' => 'AppBundle\\Controller\\ColaboradorController::handshakeAction',  'idUsuarioColaborador' => -1,  '_route' => 'colaborador_json_handshake',);
        }

        if (0 === strpos($pathinfo, '/gchart/demo')) {
            // gchart_demo
            if ($pathinfo === '/gchart/demo') {
                return array (  '_controller' => 'SaadTazi\\GChartBundle\\Controller\\DemoController::demoAction',  '_route' => 'gchart_demo',);
            }

            // gchart_demo2
            if ($pathinfo === '/gchart/demo2') {
                return array (  '_controller' => 'SaadTazi\\GChartBundle\\Controller\\DemoController::demo2Action',  '_route' => 'gchart_demo2',);
            }

            // gchart_demo3
            if ($pathinfo === '/gchart/demo3') {
                return array (  '_controller' => 'SaadTazi\\GChartBundle\\Controller\\DemoController::demo3Action',  '_route' => 'gchart_demo3',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
