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

            // buscarinmueble_buscarpanel
            if ($pathinfo === '/buscarinmueble/buscarpanel') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_buscarinmueble_buscarpanel;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\BuscarInmuebleController::buscarPanelAction',  '_route' => 'buscarinmueble_buscarpanel',);
            }
            not_buscarinmueble_buscarpanel:

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

        if (0 === strpos($pathinfo, '/inmueble')) {
            // inmueble_index
            if (rtrim($pathinfo, '/') === '/inmueble') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_inmueble_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'inmueble_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\InmuebleController::indexAction',  '_route' => 'inmueble_index',);
            }
            not_inmueble_index:

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

        // municipio_index
        if (0 === strpos($pathinfo, '/municipio/index') && preg_match('#^/municipio/index(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_municipio_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'municipio_index')), array (  '_format' => 'html',  '_controller' => 'AppBundle\\Controller\\MunicipioController::indexAction',));
        }
        not_municipio_index:

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

            // noticia_show
            if (preg_match('#^/noticia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_noticia_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticia_show')), array (  '_controller' => 'AppBundle\\Controller\\NoticiaController::showAction',));
            }
            not_noticia_show:

            // noticia_edit
            if (preg_match('#^/noticia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_noticia_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticia_edit')), array (  '_controller' => 'AppBundle\\Controller\\NoticiaController::editAction',));
            }
            not_noticia_edit:

            // noticia_delete
            if (preg_match('#^/noticia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_noticia_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticia_delete')), array (  '_controller' => 'AppBundle\\Controller\\NoticiaController::deleteAction',));
            }
            not_noticia_delete:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/panel_')) {
                // panel_inmueble
                if ($pathinfo === '/panel_inmueble') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PanelInmuebleController::indexAction',  '_route' => 'panel_inmueble',);
                }

                // panel_miperfil
                if ($pathinfo === '/panel_miperfil') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PanelMiPerfilController::indexAction',  '_route' => 'panel_miperfil',);
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

                // panel_solicitud
                if ($pathinfo === '/panel_solicitud') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PanelSolicitudController::indexAction',  '_route' => 'panel_solicitud',);
                }

            }

            if (0 === strpos($pathinfo, '/prospecto')) {
                // prospecto_index
                if (0 === strpos($pathinfo, '/prospecto/index') && preg_match('#^/prospecto/index(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
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

            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/solicitud')) {
            // solicitud_index
            if (rtrim($pathinfo, '/') === '/solicitud') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_solicitud_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'solicitud_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SolicitudController::indexAction',  '_route' => 'solicitud_index',);
            }
            not_solicitud_index:

            // solicitud_resultadosfiltro
            if ($pathinfo === '/solicitud/resultadosfiltro') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_solicitud_resultadosfiltro;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SolicitudController::resultadosfiltroAction',  '_route' => 'solicitud_resultadosfiltro',);
            }
            not_solicitud_resultadosfiltro:

            // solicitud_new
            if ($pathinfo === '/solicitud/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_solicitud_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SolicitudController::newAction',  '_route' => 'solicitud_new',);
            }
            not_solicitud_new:

            // solicitud_buscarform
            if ($pathinfo === '/solicitud/buscarform') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_solicitud_buscarform;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SolicitudController::buscarformAction',  '_route' => 'solicitud_buscarform',);
            }
            not_solicitud_buscarform:

        }

        if (0 === strpos($pathinfo, '/t')) {
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

            // usuario_edit
            if ($pathinfo === '/usuario/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_edit;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::editAction',  '_route' => 'usuario_edit',);
            }
            not_usuario_edit:

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
