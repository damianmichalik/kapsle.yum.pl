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

        if (0 === strpos($pathinfo, '/admin-panel')) {
            // admin_homepage
            if (rtrim($pathinfo, '/') === '/admin-panel') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_homepage');
                }

                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin-panel/k')) {
                if (0 === strpos($pathinfo, '/admin-panel/kapsle')) {
                    // admin_caps_list
                    if (preg_match('#^/admin\\-panel/kapsle(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_caps_list')), array (  'page' => 1,  '_controller' => 'AdminBundle\\Controller\\CapsController::indexAction',));
                    }

                    // admin_delete_cap
                    if (0 === strpos($pathinfo, '/admin-panel/kapsle/usun') && preg_match('#^/admin\\-panel/kapsle/usun/(?P<id>\\d+)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_cap')), array (  '_controller' => 'AdminBundle\\Controller\\CapsController::deleteAction',));
                    }

                    // admin_cap_form_action
                    if (0 === strpos($pathinfo, '/admin-panel/kapsle/form') && preg_match('#^/admin\\-panel/kapsle/form(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cap_form_action')), array (  '_controller' => 'AdminBundle\\Controller\\CapsController::formAction',  'id' => NULL,));
                    }

                    // admin_show_cap
                    if (0 === strpos($pathinfo, '/admin-panel/kapsle/pokaz') && preg_match('#^/admin\\-panel/kapsle/pokaz/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show_cap')), array (  '_controller' => 'AdminBundle\\Controller\\CapsController::showAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin-panel/kraj')) {
                    // admin_countries_list
                    if (0 === strpos($pathinfo, '/admin-panel/kraje') && preg_match('#^/admin\\-panel/kraje(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_countries_list')), array (  'page' => 1,  '_controller' => 'AdminBundle\\Controller\\CountriesController::indexAction',));
                    }

                    // admin_show_country
                    if (0 === strpos($pathinfo, '/admin-panel/kraj/pokaz') && preg_match('#^/admin\\-panel/kraj/pokaz/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show_country')), array (  '_controller' => 'AdminBundle\\Controller\\CountriesController::showAction',));
                    }

                    // admin_delete_country
                    if (0 === strpos($pathinfo, '/admin-panel/kraj/usun') && preg_match('#^/admin\\-panel/kraj/usun/(?P<id>\\d+)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_country')), array (  '_controller' => 'AdminBundle\\Controller\\CountriesController::deleteAction',));
                    }

                    // admin_country_form_action
                    if (0 === strpos($pathinfo, '/admin-panel/kraj/form') && preg_match('#^/admin\\-panel/kraj/form(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_country_form_action')), array (  '_controller' => 'AdminBundle\\Controller\\CountriesController::formAction',  'id' => NULL,));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin-panel/browar')) {
                // admin_breweries_list
                if (preg_match('#^/admin\\-panel/browar(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_breweries_list')), array (  'page' => 1,  '_controller' => 'AdminBundle\\Controller\\BreweriesController::indexAction',));
                }

                // admin_show_brewery
                if (0 === strpos($pathinfo, '/admin-panel/browar/pokaz') && preg_match('#^/admin\\-panel/browar/pokaz/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show_brewery')), array (  '_controller' => 'AdminBundle\\Controller\\BreweriesController::showAction',));
                }

                // admin_delete_brewery
                if (0 === strpos($pathinfo, '/admin-panel/browar/usun') && preg_match('#^/admin\\-panel/browar/usun/(?P<id>\\d+)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_brewery')), array (  '_controller' => 'AdminBundle\\Controller\\BreweriesController::deleteAction',));
                }

                // admin_brewery_form_action
                if (0 === strpos($pathinfo, '/admin-panel/browar/form') && preg_match('#^/admin\\-panel/browar/form(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_brewery_form_action')), array (  '_controller' => 'AdminBundle\\Controller\\BreweriesController::formAction',  'id' => NULL,));
                }

            }

            // admin_cache
            if ($pathinfo === '/admin-panel/cache') {
                return array (  '_controller' => 'AdminBundle\\Controller\\CacheController::indexAction',  '_route' => 'admin_cache',);
            }

        }

        // app_homepage
        if (preg_match('#^/(?P<page>\\d+)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_homepage')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  'page' => 1,));
        }

        // caps_rss
        if ($pathinfo === '/rss') {
            return array (  '_controller' => 'AppBundle\\Controller\\FeedController::rssAction',  '_route' => 'caps_rss',);
        }

        // caps_details
        if (0 === strpos($pathinfo, '/kapsel') && preg_match('#^/kapsel/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'caps_details')), array (  '_controller' => 'AppBundle\\Controller\\CapsController::capsDetailsAction',));
        }

        // caps_search
        if (0 === strpos($pathinfo, '/szukaj') && preg_match('#^/szukaj(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'caps_search')), array (  '_controller' => 'AppBundle\\Controller\\CapsController::searchAction',  'page' => 1,));
        }

        // caps_ajax_autocomplete
        if ($pathinfo === '/autocomplete') {
            return array (  '_controller' => 'AppBundle\\Controller\\CapsController::autocompleteAction',  '_route' => 'caps_ajax_autocomplete',);
        }

        // caps_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\LoginController::loginAction',  '_route' => 'caps_login',);
        }

        if (0 === strpos($pathinfo, '/browar')) {
            // breweries_index
            if (0 === strpos($pathinfo, '/browary') && preg_match('#^/browary(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'breweries_index')), array (  '_controller' => 'AppBundle\\Controller\\BreweriesController::indexAction',  'page' => 1,));
            }

            // breweries_details
            if (preg_match('#^/browar/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'breweries_details')), array (  '_controller' => 'AppBundle\\Controller\\BreweriesController::detailsAction',));
            }

        }

        // contact
        if ($pathinfo === '/kontakt') {
            return array (  '_controller' => 'AppBundle\\Controller\\ContactController::indexAction',  '_route' => 'contact',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // _check_path
            if ($pathinfo === '/login-check') {
                return array('_route' => '_check_path');
            }

            // _logout
            if ($pathinfo === '/logout') {
                return array('_route' => '_logout');
            }

        }

        // subscribe
        if ($pathinfo === '/subscribe') {
            return array (  '_controller' => 'AppBundle\\Controller\\SubscribeController::subscribeAction',  '_route' => 'subscribe',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
