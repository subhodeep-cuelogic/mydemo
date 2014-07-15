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

        // cue_com_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cue_com_homepage')), array (  '_controller' => 'Cue\\ComBundle\\Controller\\DefaultController::indexAction',));
        }

        // about_us
        if ($pathinfo === '/about_us') {
            return array (  '_controller' => 'Cue\\ComBundle\\Controller\\PagesController::aboutUsAction',  '_route' => 'about_us',);
        }

        // contact_us
        if ($pathinfo === '/contact_us') {
            return array (  '_controller' => 'Cue\\ComBundle\\Controller\\PagesController::contactUsAction',  '_route' => 'contact_us',);
        }

        // home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'Cue\\ComBundle\\Controller\\PagesController::homeAction',  '_route' => 'home',);
        }

        // home_index
        if (0 === strpos($pathinfo, '/index') && preg_match('#^/index/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_index')), array (  '_controller' => 'Cue\\ComBundle\\Controller\\staticPagesController::homeAction',));
        }

        // aboutme
        if ($pathinfo === '/aboutme') {
            return array (  '_controller' => 'Cue\\ComBundle\\Controller\\staticPagesController::aboutmeAction',  '_route' => 'aboutme',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // career
            if ($pathinfo === '/career') {
                return array (  '_controller' => 'Cue\\ComBundle\\Controller\\staticPagesController::careerAction',  '_route' => 'career',);
            }

            // client
            if ($pathinfo === '/client') {
                return array (  '_controller' => 'Cue\\ComBundle\\Controller\\staticPagesController::clientAction',  '_route' => 'client',);
            }

        }

        // toc
        if ($pathinfo === '/toc') {
            return array (  '_controller' => 'Cue\\ComBundle\\Controller\\staticPagesController::tocAction',  '_route' => 'toc',);
        }

        // check
        if (0 === strpos($pathinfo, '/check') && preg_match('#^/check/(?P<name>[^/]++)/(?P<age>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'check')), array (  '_controller' => 'Cue\\ComBundle\\Controller\\TestController::checkAction',));
        }

        // click
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'click');
            }

            return array (  '_controller' => 'Cue\\ComBundle\\Controller\\TestController::clickAction',  '_route' => 'click',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
