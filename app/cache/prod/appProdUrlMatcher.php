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

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // workshop_homepage
        if (rtrim($pathinfo, '/') === '/home') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'workshop_homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'workshop_homepage',);
        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'workshop_homepage',  'permanent' => true,  '_route' => 'home',);
        }

        // call
        if ($pathinfo === '/CallForPapers') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::callAction',  '_route' => 'call',);
        }

        // instrucciones
        if ($pathinfo === '/InstructionsForAuthors') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::instruccionesAction',  '_route' => 'instrucciones',);
        }

        // programa
        if ($pathinfo === '/Program') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::programaAction',  '_route' => 'programa',);
        }

        // comite
        if ($pathinfo === '/Committee') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::comiteAction',  '_route' => 'comite',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
