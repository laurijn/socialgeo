<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'event_homepage' => array (  0 =>   array (    0 => 'name',    1 => 'counter',  ),  1 =>   array (    '_controller' => 'Socialgeo\\EventBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'counter',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    2 =>     array (      0 => 'text',      1 => '/hello',    ),  ),),
        'event' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Socialgeo\\EventBundle\\Controller\\EventController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/event/',    ),  ),),
        'event_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Socialgeo\\EventBundle\\Controller\\EventController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/event',    ),  ),),
        'event_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Socialgeo\\EventBundle\\Controller\\EventController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/event/new',    ),  ),),
        'event_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Socialgeo\\EventBundle\\Controller\\EventController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/event/create',    ),  ),),
        'event_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Socialgeo\\EventBundle\\Controller\\EventController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/event',    ),  ),),
        'event_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Socialgeo\\EventBundle\\Controller\\EventController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/event',    ),  ),),
        'event_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Socialgeo\\EventBundle\\Controller\\EventController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/event',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
