<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Utils\Maps\Brewery as BreweryMap;
use Ivory\GoogleMap\Helper\MapHelper;

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
        
        $geocoderCache = $this->container->get('geocoder_cache');        
        
        $cacheKey = "brewery_map_".$BreweryItem->getId();        
        $address = $BreweryItem->getAddressToGeocode();        
        $geocodedAddresses = $geocoderCache->getGeocodedData($address, $cacheKey);                             
        
        $map = new BreweryMap($this->container->get('ivory_google_map.marker'));   
        
        $mapInfo = $this->renderView('AppBundle:Breweries:mapInfo.html.twig', array(
            'brewery' => $BreweryItem
        ));
        
        $map->addMarkersByGeocodedAddresses($geocodedAddresses->getResults(), $mapInfo);               
        
        $mapHelper = new MapHelper();
        
        return $this->render('AppBundle:Breweries:details.html.twig', array(
            'brewery' => $BreweryItem,
            'mapHtml' => $mapHelper->renderHtmlContainer($map),
            'mapJS' => $mapHelper->renderJavascripts($map) 
        ));
    }
    
}
