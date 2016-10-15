<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BreweriesController extends Controller
{

    public function indexAction($page)
    {
        $breweriesRepo = $this->getDoctrine()->getRepository('AppBundle:Brewery');
        $breweries = $breweriesRepo->getBreweriesQueryBuilder();

        $limit = $this->container->getParameter('pagination_limit');

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($breweries, $page, $limit);

        $countries = $this->getDoctrine()->getRepository('AppBundle:Country')->getAllCountries();

        return $this->render('AppBundle:Breweries:index.html.twig', array(
            'pagination' => $pagination,
            'pageTitle' => 'Browary',
            'countries' => $countries,
        ));
    }

    public function detailsAction($slug, $page)
    {
        $capsRepo = $this->getDoctrine()->getRepository('AppBundle:Cap');
        $breweriesRepo = $this->getDoctrine()->getRepository('AppBundle:Brewery');
        $breweryItem = $breweriesRepo->findOneBySlug($slug);
        if ($breweryItem === null) {
            throw $this->createNotFoundException('Nie znaleziono podanego rekordu');
        }

        $address = $breweryItem->getAddressToGeocode();
        $lat = null;
        $lng = null;
        try {
            $geocoderResult = $this->container
                ->get('bazinga_geocoder.geocoder')
                ->using('cache')->geocode($address);

            if ($geocoderResult->count() > 0) {
                $lat = $geocoderResult->first()->getLatitude();
                $lng = $geocoderResult->first()->getLongitude();
            }
        } catch (\Exception $ex) {
            $lat = null;
            $lng = null;
        }

        $breweryCapses = $capsRepo->getCapsInBrewery($breweryItem->getId());

        $limit = $this->container->getParameter('pagination_limit');

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($breweryCapses, $page, $limit);

        return $this->render('AppBundle:Breweries:details.html.twig', array(
            'brewery' => $breweryItem,
            'lat' => $lat,
            'lng' => $lng,
            'pagination' => $pagination,
        ));
    }
}
