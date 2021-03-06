<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin-panel/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_caps_list' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'AdminBundle\\Controller\\CapsController::indexAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/admin-panel/kapsle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_delete_cap' => array (  0 =>   array (    0 => 'id',    1 => 'token',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\CapsController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin-panel/kapsle/usun',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_cap_form_action' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\CapsController::formAction',    'id' => NULL,  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin-panel/kapsle/form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_show_cap' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\CapsController::showAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin-panel/kapsle/pokaz',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_countries_list' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'AdminBundle\\Controller\\CountriesController::indexAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/admin-panel/kraje',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_show_country' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\CountriesController::showAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin-panel/kraj/pokaz',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_delete_country' => array (  0 =>   array (    0 => 'id',    1 => 'token',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\CountriesController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin-panel/kraj/usun',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_country_form_action' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\CountriesController::formAction',    'id' => NULL,  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin-panel/kraj/form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_breweries_list' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'AdminBundle\\Controller\\BreweriesController::indexAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/admin-panel/browar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_show_brewery' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\BreweriesController::showAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin-panel/browar/pokaz',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_delete_brewery' => array (  0 =>   array (    0 => 'id',    1 => 'token',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\BreweriesController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin-panel/browar/usun',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_brewery_form_action' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\BreweriesController::formAction',    'id' => NULL,  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin-panel/browar/form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_cache' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\CacheController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin-panel/cache',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_homepage' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caps_rss' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FeedController::rssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rss',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caps_details' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CapsController::capsDetailsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/kapsel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caps_search' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CapsController::searchAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/szukaj',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caps_ajax_autocomplete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CapsController::autocompleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/autocomplete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caps_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LoginController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'breweries_index' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BreweriesController::indexAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/browary',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'breweries_details' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BreweriesController::detailsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/browar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ContactController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/kontakt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_check_path' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login-check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'subscribe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SubscribeController::subscribeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/subscribe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
