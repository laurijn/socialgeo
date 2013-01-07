<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // event_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)/(?P<counter>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Socialgeo\\EventBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'event_homepage'));
        }

        if (0 === strpos($pathinfo, '/event')) {
            // event
            if (rtrim($pathinfo, '/') === '/event') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'event');
                }

                return array (  '_controller' => 'Socialgeo\\EventBundle\\Controller\\EventController::indexAction',  '_route' => 'event',);
            }

            // event_show
            if (preg_match('#^/event/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Socialgeo\\EventBundle\\Controller\\EventController::showAction',)), array('_route' => 'event_show'));
            }

            // event_new
            if ($pathinfo === '/event/new') {
                return array (  '_controller' => 'Socialgeo\\EventBundle\\Controller\\EventController::newAction',  '_route' => 'event_new',);
            }

            // event_create
            if ($pathinfo === '/event/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_event_create;
                }

                return array (  '_controller' => 'Socialgeo\\EventBundle\\Controller\\EventController::createAction',  '_route' => 'event_create',);
            }
            not_event_create:

            // event_edit
            if (preg_match('#^/event/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Socialgeo\\EventBundle\\Controller\\EventController::editAction',)), array('_route' => 'event_edit'));
            }

            // event_update
            if (preg_match('#^/event/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_event_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Socialgeo\\EventBundle\\Controller\\EventController::updateAction',)), array('_route' => 'event_update'));
            }
            not_event_update:

            // event_delete
            if (preg_match('#^/event/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_event_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Socialgeo\\EventBundle\\Controller\\EventController::deleteAction',)), array('_route' => 'event_delete'));
            }
            not_event_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
