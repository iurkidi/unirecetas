<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

        }

        if (0 === strpos($pathinfo, '/ingred')) {
            if (0 === strpos($pathinfo, '/ingredrec')) {
                // ingredrec
                if (rtrim($pathinfo, '/') === '/ingredrec') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ingredrec');
                    }

                    return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\ingredrecController::indexAction',  '_route' => 'ingredrec',);
                }

                // ingredrec_show
                if (preg_match('#^/ingredrec/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingredrec_show')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\ingredrecController::showAction',));
                }

                // ingredrec_new
                if ($pathinfo === '/ingredrec/new') {
                    return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\ingredrecController::newAction',  '_route' => 'ingredrec_new',);
                }

                // ingredrec_create
                if ($pathinfo === '/ingredrec/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ingredrec_create;
                    }

                    return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\ingredrecController::createAction',  '_route' => 'ingredrec_create',);
                }
                not_ingredrec_create:

                // ingredrec_edit
                if (preg_match('#^/ingredrec/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingredrec_edit')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\ingredrecController::editAction',));
                }

                // ingredrec_update
                if (preg_match('#^/ingredrec/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_ingredrec_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingredrec_update')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\ingredrecController::updateAction',));
                }
                not_ingredrec_update:

                // ingredrec_delete
                if (preg_match('#^/ingredrec/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_ingredrec_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingredrec_delete')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\ingredrecController::deleteAction',));
                }
                not_ingredrec_delete:

            }

            if (0 === strpos($pathinfo, '/ingrediente')) {
                // ingrediente
                if (rtrim($pathinfo, '/') === '/ingrediente') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ingrediente');
                    }

                    return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\ingredienteController::indexAction',  '_route' => 'ingrediente',);
                }

                // ingrediente_show
                if (preg_match('#^/ingrediente/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingrediente_show')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\ingredienteController::showAction',));
                }

                // ingrediente_new
                if ($pathinfo === '/ingrediente/new') {
                    return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\ingredienteController::newAction',  '_route' => 'ingrediente_new',);
                }

                // ingrediente_create
                if ($pathinfo === '/ingrediente/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ingrediente_create;
                    }

                    return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\ingredienteController::createAction',  '_route' => 'ingrediente_create',);
                }
                not_ingrediente_create:

                // ingrediente_edit
                if (preg_match('#^/ingrediente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingrediente_edit')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\ingredienteController::editAction',));
                }

                // ingrediente_update
                if (preg_match('#^/ingrediente/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_ingrediente_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingrediente_update')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\ingredienteController::updateAction',));
                }
                not_ingrediente_update:

                // ingrediente_delete
                if (preg_match('#^/ingrediente/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_ingrediente_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingrediente_delete')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\ingredienteController::deleteAction',));
                }
                not_ingrediente_delete:

            }

        }

        if (0 === strpos($pathinfo, '/receta')) {
            // receta
            if (rtrim($pathinfo, '/') === '/receta') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'receta');
                }

                return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\recetaController::indexAction',  '_route' => 'receta',);
            }

            // receta_show
            if (preg_match('#^/receta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'receta_show')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\recetaController::showAction',));
            }

            // receta_categ_index
            if (preg_match('#^/receta/(?P<id>[^/]++)/indexPorCat$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'receta_categ_index')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\recetaController::indexPorCategoriaAction',));
            }

            // receta_new
            if ($pathinfo === '/receta/new') {
                return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\recetaController::newAction',  '_route' => 'receta_new',);
            }

            // receta_create
            if ($pathinfo === '/receta/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_receta_create;
                }

                return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\recetaController::createAction',  '_route' => 'receta_create',);
            }
            not_receta_create:

            // receta_edit
            if (preg_match('#^/receta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'receta_edit')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\recetaController::editAction',));
            }

            // receta_update
            if (preg_match('#^/receta/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_receta_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'receta_update')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\recetaController::updateAction',));
            }
            not_receta_update:

            // receta_delete
            if (preg_match('#^/receta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_receta_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'receta_delete')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\recetaController::deleteAction',));
            }
            not_receta_delete:

        }

        if (0 === strpos($pathinfo, '/autor')) {
            // autor
            if (rtrim($pathinfo, '/') === '/autor') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'autor');
                }

                return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\autorController::indexAction',  '_route' => 'autor',);
            }

            // autor_show
            if (preg_match('#^/autor/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'autor_show')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\autorController::showAction',));
            }

            // autor_new
            if ($pathinfo === '/autor/new') {
                return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\autorController::newAction',  '_route' => 'autor_new',);
            }

            // autor_create
            if ($pathinfo === '/autor/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_autor_create;
                }

                return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\autorController::createAction',  '_route' => 'autor_create',);
            }
            not_autor_create:

            // autor_edit
            if (preg_match('#^/autor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'autor_edit')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\autorController::editAction',));
            }

            // autor_update
            if (preg_match('#^/autor/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_autor_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'autor_update')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\autorController::updateAction',));
            }
            not_autor_update:

            // autor_delete
            if (preg_match('#^/autor/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_autor_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'autor_delete')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\autorController::deleteAction',));
            }
            not_autor_delete:

        }

        if (0 === strpos($pathinfo, '/categoria')) {
            // categoria
            if (rtrim($pathinfo, '/') === '/categoria') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categoria');
                }

                return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\categoriaController::indexAction',  '_route' => 'categoria',);
            }

            // categoria_show
            if (preg_match('#^/categoria/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_show')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\categoriaController::showAction',));
            }

            // categoria_new
            if ($pathinfo === '/categoria/new') {
                return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\categoriaController::newAction',  '_route' => 'categoria_new',);
            }

            // categoria_create
            if ($pathinfo === '/categoria/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_categoria_create;
                }

                return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\categoriaController::createAction',  '_route' => 'categoria_create',);
            }
            not_categoria_create:

            // categoria_edit
            if (preg_match('#^/categoria/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_edit')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\categoriaController::editAction',));
            }

            // categoria_update
            if (preg_match('#^/categoria/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_categoria_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_update')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\categoriaController::updateAction',));
            }
            not_categoria_update:

            // categoria_delete
            if (preg_match('#^/categoria/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_categoria_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_delete')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\categoriaController::deleteAction',));
            }
            not_categoria_delete:

        }

        // uni_recetas_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'uni_recetas_homepage')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\DefaultController::indexAction',));
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
