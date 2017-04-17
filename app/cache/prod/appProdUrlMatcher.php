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

        // authentification_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'authentification_homepage');
            }

            return array (  '_controller' => 'authentificationBundle:index',  '_route' => 'authentification_homepage',);
        }

        // front_homepage
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'gbprojet\\FrontBundle\\Controller\\HomeController::indexAction',  '_route' => 'front_homepage',);
        }

        // front_programmation
        if (0 === strpos($pathinfo, '/programmation') && preg_match('#^/programmation/(?P<niveau>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_programmation')), array (  '_controller' => 'gbprojet\\FrontBundle\\Controller\\ProgrammationController::programmationAction',));
        }

        // front_disponibilite
        if (0 === strpos($pathinfo, '/disponibilite') && preg_match('#^/disponibilite/(?P<alias>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_disponibilite')), array (  '_controller' => 'gbprojet\\FrontBundle\\Controller\\DisponibiliteController::disponibiliteAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
