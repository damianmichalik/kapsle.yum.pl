<?php

namespace AppBundle\Controller\Frontend;

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

        return $this->render('Frontend/Breweries/index.html.twig', array(
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

        $breweryCapses = $capsRepo->getCapsInBrewery($breweryItem->getId());

        $limit = $this->container->getParameter('pagination_limit');

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($breweryCapses, $page, $limit);

        return $this->render('Frontend/Breweries/details.html.twig', array(
            'brewery' => $breweryItem,
            'pagination' => $pagination,
        ));
    }
}
