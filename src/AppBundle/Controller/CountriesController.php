<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CountriesController extends Controller
{

    public function indexAction ()
    {
        $countries = $this->getDoctrine()->getRepository('AppBundle:Country')->getAllCountries();

        return $this->render('AppBundle:Countries:index.html.twig', array(
            'countries' => $countries,
            'pageTitle' => 'Kraje'
        ));
    }
    
    public function detailsAction ($slug)
    {
        $country = $this->getDoctrine()->getRepository('AppBundle:Country')->findOneBySlug($slug);

        if ($country === null) {
            throw $this->createNotFoundException('Nie znaleziono podanego rekordu');
        }

        $breweries = $this->getDoctrine()->getRepository('AppBundle:Brewery')->getBreweriesInCountry($country->getId());

        return $this->render('AppBundle:Countries:details.html.twig', array(
            'country' => $country,
            'breweries' => $breweries
        ));
    }
    
}
