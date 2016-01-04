<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

            // receta_new_reccat
            if (preg_match('#^/receta/(?P<id>[^/]++)/newreccat$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'receta_new_reccat')), array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\recetaController::newRecCatAction',));
            }

            // receta_save_reccat
            if ($pathinfo === '/receta/save_reccat') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_receta_save_reccat;
                }

                return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\recetaController::saveRecCatAction',  '_route' => 'receta_save_reccat',);
            }
            not_receta_save_reccat:

            // receta_update2
            if ($pathinfo === '/receta/update2') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_receta_update2;
                }

                return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\recetaController::updateRec2Action',  '_route' => 'receta_update2',);
            }
            not_receta_update2:

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

            if (0 === strpos($pathinfo, '/autor/buscarAutor')) {
                // autor_buscar
                if ($pathinfo === '/autor/buscarAutor') {
                    return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\autorController::buscarAutorAction',  '_route' => 'autor_buscar',);
                }

                // autor_buscar_resp
                if ($pathinfo === '/autor/buscarAutorResp') {
                    return array (  '_controller' => 'uni\\bundle\\recetasBundle\\Controller\\autorController::buscarAutorRespAction',  '_route' => 'autor_buscar_resp',);
                }

            }

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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
