<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
        
        $address = $BreweryItem->getAddressToGeocode();        
        
        $geocoderResult = $this->container
            ->get('bazinga_geocoder.geocoder')
            ->using('cache')->geocode($address);
        
        $lat = null;
        $lng = null;
        if ($geocoderResult->count() > 0) {
            $lat = $geocoderResult->first()->getLatitude();
            $lng = $geocoderResult->first()->getLongitude();
        }
        
        return $this->render('AppBundle:Breweries:details.html.twig', array(
            'brewery' => $BreweryItem,
            'lat' => $lat,
            'lng' => $lng
        ));
    }
    
}
