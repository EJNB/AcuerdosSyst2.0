<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/Frontend')) {
            // acuerdos_frontend_homepage
            if (0 === strpos($pathinfo, '/Frontend/hello') && preg_match('#^/Frontend/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acuerdos_frontend_homepage')), array (  '_controller' => 'Acuerdos\\FrontendBundle\\Controller\\DefaultController::indexAction',));
            }

            // mis_acuerdos
            if ($pathinfo === '/Frontend/mis_acuerdos') {
                return array (  '_controller' => 'Acuerdos\\FrontendBundle\\Controller\\frontendController::misAcuerdosAction',  '_route' => 'mis_acuerdos',);
            }

            // mis_actas
            if ($pathinfo === '/Frontend/actas') {
                return array (  '_controller' => 'Acuerdos\\FrontendBundle\\Controller\\frontendController::misActasAction',  '_route' => 'mis_actas',);
            }

            // mis_convocatorias
            if ($pathinfo === '/Frontend/mis_convocatorias') {
                return array (  '_controller' => 'Acuerdos\\FrontendBundle\\Controller\\frontendController::misConvocatoriasAction',  '_route' => 'mis_convocatorias',);
            }

            // new_convocatoria
            if ($pathinfo === '/Frontend/new_convocatoria') {
                return array (  '_controller' => 'Acuerdos\\FrontendBundle\\Controller\\frontendController::newConvocatoriaAction',  '_route' => 'new_convocatoria',);
            }

            // convocatoria_create
            if ($pathinfo === '/Frontend/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_convocatoria_create;
                }

                return array (  '_controller' => 'Acuerdos\\FrontendBundle\\Controller\\frontendController::createConvocatoriaAction',  '_route' => 'convocatoria_create',);
            }
            not_convocatoria_create:

            if (0 === strpos($pathinfo, '/Frontend/edit_convocatoria')) {
                // mi_convacotoria_edit
                if (preg_match('#^/Frontend/edit_convocatoria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mi_convacotoria_edit')), array (  '_controller' => 'Acuerdos\\FrontendBundle\\Controller\\frontendController::editConvocatoriaAction',));
                }

                // convocatoria_update
                if (preg_match('#^/Frontend/edit_convocatoria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'convocatoria_update')), array (  '_controller' => 'Acuerdos\\FrontendBundle\\Controller\\frontendController::editConvocatoriaAction',));
                }

            }

            // mi_convacotoria_show
            if (0 === strpos($pathinfo, '/Frontend/show_convocatoria') && preg_match('#^/Frontend/show_convocatoria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mi_convacotoria_show')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ReunionController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/Seguridad')) {
            // acuerdos_seguridad_homepage
            if (0 === strpos($pathinfo, '/Seguridad/hello') && preg_match('#^/Seguridad/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acuerdos_seguridad_homepage')), array (  '_controller' => 'Acuerdos\\SeguridadBundle\\Controller\\DefaultController::indexAction',));
            }

            // acuerdos_seguridad_security
            if ($pathinfo === '/Seguridad/admin') {
                return array (  '_controller' => 'Acuerdos\\SeguridadBundle\\Controller\\DefaultController::adminAction',  '_route' => 'acuerdos_seguridad_security',);
            }

            // users_changepass_user
            if ($pathinfo === '/Seguridad/change_my_password') {
                return array (  '_controller' => 'Acuerdos\\SeguridadBundle\\Controller\\SecurityController::changePasswordAction',  '_route' => 'users_changepass_user',);
            }

        }

        // acuerdos_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acuerdos_homepage');
            }

            return array (  '_controller' => 'Acuerdos\\SeguridadBundle\\Controller\\SecurityController::loginAction',  '_route' => 'acuerdos_homepage',);
        }

        // acuerdos_reportes_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acuerdos_reportes_homepage')), array (  '_controller' => 'Acuerdos\\ReportesBundle\\Controller\\DefaultController::indexAction',));
        }

        // select_procedencias
        if ($pathinfo === '/seleccionProcedencias') {
            return array (  '_controller' => 'Acuerdos\\ReportesBundle\\Controller\\ReportController::seleccionProcedenciasAction',  '_route' => 'select_procedencias',);
        }

        // reunion_procedencia
        if (0 === strpos($pathinfo, '/reunionProcedencia') && preg_match('#^/reunionProcedencia/(?P<procedencia>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'reunion_procedencia')), array (  '_controller' => 'Acuerdos\\ReportesBundle\\Controller\\ReportController::reunionProcedenciaAction',));
        }

        if (0 === strpos($pathinfo, '/acuerdos')) {
            // acuerdos_reunion
            if (0 === strpos($pathinfo, '/acuerdosReunion') && preg_match('#^/acuerdosReunion/(?P<reunion>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acuerdos_reunion')), array (  '_controller' => 'Acuerdos\\ReportesBundle\\Controller\\ReportController::acuerdosReunionAction',));
            }

            // acuerdos_message
            if ($pathinfo === '/acuerdosMessage') {
                return array (  '_controller' => 'Acuerdos\\ReportesBundle\\Controller\\ReportController::acuerdosMessageAction',  '_route' => 'acuerdos_message',);
            }

            // acuerdos_pdf
            if ($pathinfo === '/acuerdosPdf') {
                return array (  '_controller' => 'Acuerdos\\ReportesBundle\\Controller\\ReportController::acuerdosPdfAction',  '_route' => 'acuerdos_pdf',);
            }

        }

        // acuerdos_persona
        if ($pathinfo === '/Acuerdos/Persona') {
            return array (  '_controller' => 'Acuerdos\\ReportesBundle\\Controller\\ReportController::acuerdosPersonaAction',  '_route' => 'acuerdos_persona',);
        }

        if (0 === strpos($pathinfo, '/Gestion')) {
            if (0 === strpos($pathinfo, '/Gestion/tema')) {
                // tema
                if (rtrim($pathinfo, '/') === '/Gestion/tema') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tema');
                    }

                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\TemaController::indexAction',  '_route' => 'tema',);
                }

                // tema_show
                if (preg_match('#^/Gestion/tema/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tema_show')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\TemaController::showAction',));
                }

                // tema_new
                if ($pathinfo === '/Gestion/tema/new') {
                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\TemaController::newAction',  '_route' => 'tema_new',);
                }

                // tema_create
                if ($pathinfo === '/Gestion/tema/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tema_create;
                    }

                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\TemaController::createAction',  '_route' => 'tema_create',);
                }
                not_tema_create:

                // tema_edit
                if (preg_match('#^/Gestion/tema/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tema_edit')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\TemaController::editAction',));
                }

                // tema_update
                if (preg_match('#^/Gestion/tema/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tema_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tema_update')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\TemaController::updateAction',));
                }
                not_tema_update:

                // tema_delete
                if (preg_match('#^/Gestion/tema/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tema_delete')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\TemaController::deleteAction',));
                }

                // tema_delete_ajax
                if ($pathinfo === '/Gestion/tema/delete') {
                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\TemaController::deleteAction',  '_route' => 'tema_delete_ajax',);
                }

                // add_temas
                if ($pathinfo === '/Gestion/tema/addTema') {
                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\TemaController::addTemaAction',  '_route' => 'add_temas',);
                }

            }

            if (0 === strpos($pathinfo, '/Gestion/persona')) {
                // persona
                if (rtrim($pathinfo, '/') === '/Gestion/persona') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'persona');
                    }

                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\PersonaController::indexAction',  '_route' => 'persona',);
                }

                // persona_show
                if (preg_match('#^/Gestion/persona/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'persona_show')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\PersonaController::showAction',));
                }

                // persona_new
                if ($pathinfo === '/Gestion/persona/new') {
                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\PersonaController::newAction',  '_route' => 'persona_new',);
                }

                // persona_create
                if ($pathinfo === '/Gestion/persona/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_persona_create;
                    }

                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\PersonaController::createAction',  '_route' => 'persona_create',);
                }
                not_persona_create:

                // persona_edit
                if (preg_match('#^/Gestion/persona/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'persona_edit')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\PersonaController::editAction',));
                }

                // persona_update
                if (preg_match('#^/Gestion/persona/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_persona_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'persona_update')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\PersonaController::updateAction',));
                }
                not_persona_update:

                // persona_delete
                if (preg_match('#^/Gestion/persona/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'persona_delete')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\PersonaController::deleteAction',));
                }

                // ajax_person_create
                if ($pathinfo === '/Gestion/persona/add/persona') {
                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\PersonaController::agregarPersonaAction',  '_route' => 'ajax_person_create',);
                }

                // change_password
                if (0 === strpos($pathinfo, '/Gestion/persona/change_password') && preg_match('#^/Gestion/persona/change_password/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'change_password')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\PersonaController::changePasswordAction',));
                }

            }

            if (0 === strpos($pathinfo, '/Gestion/ac')) {
                if (0 === strpos($pathinfo, '/Gestion/acuerdo')) {
                    // acuerdo
                    if (rtrim($pathinfo, '/') === '/Gestion/acuerdo') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'acuerdo');
                        }

                        return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\AcuerdoController::indexAction',  '_route' => 'acuerdo',);
                    }

                    // acuerdo_show
                    if (preg_match('#^/Gestion/acuerdo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'acuerdo_show')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\AcuerdoController::showAction',));
                    }

                    // acuerdo_new
                    if ($pathinfo === '/Gestion/acuerdo/new') {
                        return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\AcuerdoController::newAction',  '_route' => 'acuerdo_new',);
                    }

                    // acuerdo_create
                    if ($pathinfo === '/Gestion/acuerdo/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_acuerdo_create;
                        }

                        return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\AcuerdoController::createAction',  '_route' => 'acuerdo_create',);
                    }
                    not_acuerdo_create:

                    // acuerdo_edit
                    if (preg_match('#^/Gestion/acuerdo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'acuerdo_edit')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\AcuerdoController::editAction',));
                    }

                    // acuerdo_update
                    if (preg_match('#^/Gestion/acuerdo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_acuerdo_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'acuerdo_update')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\AcuerdoController::updateAction',));
                    }
                    not_acuerdo_update:

                    // acuerdo_delete
                    if (preg_match('#^/Gestion/acuerdo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'acuerdo_delete')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\AcuerdoController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/Gestion/acta')) {
                    // acta
                    if (rtrim($pathinfo, '/') === '/Gestion/acta') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'acta');
                        }

                        return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ActaController::indexAction',  '_route' => 'acta',);
                    }

                    // acta_show
                    if (preg_match('#^/Gestion/acta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'acta_show')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ActaController::showAction',));
                    }

                    // acta_new
                    if ($pathinfo === '/Gestion/acta/new') {
                        return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ActaController::newAction',  '_route' => 'acta_new',);
                    }

                    // acta_create
                    if ($pathinfo === '/Gestion/acta/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_acta_create;
                        }

                        return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ActaController::createAction',  '_route' => 'acta_create',);
                    }
                    not_acta_create:

                    // acta_edit
                    if (preg_match('#^/Gestion/acta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'acta_edit')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ActaController::editAction',));
                    }

                    // acta_update
                    if (preg_match('#^/Gestion/acta/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_acta_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'acta_update')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ActaController::updateAction',));
                    }
                    not_acta_update:

                    // acta_delete
                    if (preg_match('#^/Gestion/acta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'acta_delete')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ActaController::deleteAction',));
                    }

                    // select_reunion
                    if (0 === strpos($pathinfo, '/Gestion/acta/new') && preg_match('#^/Gestion/acta/new/(?P<reunion_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'select_reunion')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ActaController::actanewAction',));
                    }

                    // acta_acuerdo_create
                    if ($pathinfo === '/Gestion/acta/createAcuerdo') {
                        return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ActaController::createAcuerdoAction',  '_route' => 'acta_acuerdo_create',);
                    }

                    // acta_update_asistencia
                    if ($pathinfo === '/Gestion/acta/update_asistant') {
                        return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ActaController::updateAsinstantAction',  '_route' => 'acta_update_asistencia',);
                    }

                    // acta_print_pdf
                    if (preg_match('#^/Gestion/acta/(?P<id>[^/]++)/pdf$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'acta_print_pdf')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ActaController::printpdfAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/Gestion/comentario')) {
                // comentario_new
                if ($pathinfo === '/Gestion/comentario/new') {
                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ComentarioController::newAjaxCommentAction',  '_route' => 'comentario_new',);
                }

                // comentario_edit
                if ($pathinfo === '/Gestion/comentario/edit') {
                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ComentarioController::editComentarioAction',  '_route' => 'comentario_edit',);
                }

                // comentario_delete
                if ($pathinfo === '/Gestion/comentario/delete') {
                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ComentarioController::deleteComentarioAction',  '_route' => 'comentario_delete',);
                }

            }

            if (0 === strpos($pathinfo, '/Gestion/reunion')) {
                // reunion
                if (rtrim($pathinfo, '/') === '/Gestion/reunion') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'reunion');
                    }

                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ReunionController::indexAction',  '_route' => 'reunion',);
                }

                // reunion_show
                if (preg_match('#^/Gestion/reunion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reunion_show')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ReunionController::showAction',));
                }

                // reunion_new
                if ($pathinfo === '/Gestion/reunion/new') {
                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ReunionController::newAction',  '_route' => 'reunion_new',);
                }

                // reunion_create
                if ($pathinfo === '/Gestion/reunion/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_reunion_create;
                    }

                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ReunionController::createAction',  '_route' => 'reunion_create',);
                }
                not_reunion_create:

                // reunion_edit
                if (preg_match('#^/Gestion/reunion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reunion_edit')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ReunionController::editAction',));
                }

                // reunion_update
                if (preg_match('#^/Gestion/reunion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_reunion_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reunion_update')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ReunionController::updateAction',));
                }
                not_reunion_update:

                // reunion_delete
                if (preg_match('#^/Gestion/reunion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reunion_delete')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ReunionController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/Gestion/area')) {
                // area
                if (rtrim($pathinfo, '/') === '/Gestion/area') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'area');
                    }

                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\AreaController::indexAction',  '_route' => 'area',);
                }

                // area_new
                if ($pathinfo === '/Gestion/area/new') {
                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\AreaController::newAction',  '_route' => 'area_new',);
                }

                // area_create
                if ($pathinfo === '/Gestion/area/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_area_create;
                    }

                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\AreaController::createAction',  '_route' => 'area_create',);
                }
                not_area_create:

                // area_edit
                if (preg_match('#^/Gestion/area/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'area_edit')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\AreaController::editAction',));
                }

                // area_update
                if (preg_match('#^/Gestion/area/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_area_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'area_update')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\AreaController::updateAction',));
                }
                not_area_update:

                // area_delete
                if (preg_match('#^/Gestion/area/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'area_delete')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\AreaController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/Gestion/procedencia')) {
                // procedencia
                if (rtrim($pathinfo, '/') === '/Gestion/procedencia') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'procedencia');
                    }

                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ProcedenciaController::indexAction',  '_route' => 'procedencia',);
                }

                // procedencia_new
                if ($pathinfo === '/Gestion/procedencia/new') {
                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ProcedenciaController::newAction',  '_route' => 'procedencia_new',);
                }

                // procedencia_create
                if ($pathinfo === '/Gestion/procedencia/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_procedencia_create;
                    }

                    return array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ProcedenciaController::createAction',  '_route' => 'procedencia_create',);
                }
                not_procedencia_create:

                // procedencia_edit
                if (preg_match('#^/Gestion/procedencia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'procedencia_edit')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ProcedenciaController::editAction',));
                }

                // procedencia_update
                if (preg_match('#^/Gestion/procedencia/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_procedencia_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'procedencia_update')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ProcedenciaController::updateAction',));
                }
                not_procedencia_update:

                // procedencia_delete
                if (preg_match('#^/Gestion/procedencia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'procedencia_delete')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\ProcedenciaController::deleteAction',));
                }

            }

            // acuerdos_gestion_homepage
            if (0 === strpos($pathinfo, '/Gestion/hello') && preg_match('#^/Gestion/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acuerdos_gestion_homepage')), array (  '_controller' => 'Acuerdos\\GestionBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/prueba')) {
            // formulario
            if ($pathinfo === '/prueba/example') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::pruebaRequestAction',  '_route' => 'formulario',);
            }

            // request
            if ($pathinfo === '/prueba/request') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::printRequest',  '_route' => 'request',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Acuerdos\\SeguridadBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/loginCheck') {
                    return array (  '_controller' => 'Acuerdos\\SeguridadBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
