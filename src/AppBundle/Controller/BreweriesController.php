<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\MapTypeId;
use Ivory\GoogleMap\Helper\MapHelper;
use Ivory\GoogleMap\Overlays\InfoWindow;

class BreweriesController extends Controller {
    
    public function indexAction($page)
    {
        $BreweriesRepo = $this->getDoctrine()->getRepository('AppBundle:Brewery');
        $breweries = $BreweriesRepo->findAll();
        
        $limit = $this->container->getParameter('pagination_limit');
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($breweries, $page, $limit);
        
        return $this->render('AppBundle:Breweries:index.html.twig', array(
            'pagination' => $pagination,
            'pageTitle' => 'Browary'
        ));
    }
    
    public function detailsAction ($slug) 
    {
        $BreweriesRepo = $this->getDoctrine()->getRepository('AppBundle:Brewery');    
        
        $BreweryItem = $BreweriesRepo->findOneBySlug($slug);
        
        if ($BreweryItem === null) {
            throw $this->createNotFoundException('Nie znaleziono podanego rekordu');
        }                
        
        $map = new Map();

        $map->setPrefixJavascriptVariable('map_');
        $map->setHtmlContainerId('map_canvas');

        $map->setAsync(false);
        //$map->setAutoZoom(true);
        
        $geocoder = $this->get('ivory_google_map.geocoder');
        
        $cache = $this->container->get('doctrine_cache.providers.my_file_system_cache');
        $response = $cache->fetch("brewery_".md5($slug));
        if ($response === false) {
            $response = $geocoder->geocode($BreweryItem->getAddress().', '.$BreweryItem->getPostcode().' '.$BreweryItem->getCity().', ' . $BreweryItem->getCountry()->getName());
            $cache->save("brewery_".md5($slug), $response);
        }                
                
        foreach($response->getResults() as $result)
        {
            
            $infoWindow = new InfoWindow();
            $infoWindow->setContent($BreweryItem->getName());
            
            // Request the google map merker service
            $marker = $this->get('ivory_google_map.marker');

            // Position the marker
            $marker->setPosition($result->getGeometry()->getLocation());
            $map->setCenter($result->getGeometry()->getLocation());
            $marker->setInfoWindow($infoWindow);
            
            // Add the marker to the map
            $map->addMarker($marker);
        }

        
        $map->setMapOption('zoom', 12);

        $map->setBound(-2.1, -3.9, 2.6, 1.4, true, true);

        $map->setMapOption('mapTypeId', MapTypeId::ROADMAP);
        $map->setMapOption('mapTypeId', 'roadmap');

        $map->setMapOption('disableDefaultUI', true);
        $map->setMapOption('disableDoubleClickZoom', true);
        $map->setMapOptions(array(
            'disableDefaultUI'       => true,
            'disableDoubleClickZoom' => true,
        ));

        $map->setStylesheetOption('width', '300px');
        $map->setStylesheetOption('height', '300px');
        $map->setStylesheetOptions(array(
            'width'  => '300px',
            'height' => '300px',
        ));

        $map->setLanguage('pl');
        
        $mapHelper = new MapHelper();
        
        return $this->render('AppBundle:Breweries:details.html.twig', array(
            'brewery' => $BreweryItem,
            'mapHtml' => $mapHelper->renderHtmlContainer($map),
            'mapJS' => $mapHelper->renderJavascripts($map) 
        ));
    }
    
}
