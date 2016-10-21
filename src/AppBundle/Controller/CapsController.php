<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class CapsController extends Controller
{
    public function capsDetailsAction($slug)
    {
        $capsRepo = $this->getDoctrine()->getRepository('AppBundle:Cap');
        $capItem = $capsRepo->findOneBySlug($slug);

        if ($capItem === null) {
            throw $this->createNotFoundException('Nie znaleziono podanego rekordu');
        }

        $breweryCapses = null;

        if ($capItem->getBrewery() !== null) {
            $breweryId = $capItem->getBrewery()->getId();
            $breweryCapses = $capsRepo->getCapsInBrewery($breweryId, $capItem->getId());
        }

        return $this->render('AppBundle:Caps:details.html.twig', array(
            'cap' => $capItem,
            'breweryCapses' => $breweryCapses,
        ));
    }

    public function autocompleteAction(Request $request)
    {
        $searchParam = $request->query->get('query');
        $searchResults = $this->getUniqueSearchResults($searchParam)
                ->getQuery()->getResult();
        $suggestions = $this->getJSONSuggestions($searchResults);

        return new JsonResponse(array('suggestions' => $suggestions));
    }

    public function searchAction(Request $request, $page)
    {
        $searchParam = $request->query->get('search');
        $searchResults = $this->getSearchResults($searchParam);
        $limit = $this->container->getParameter('pagination_limit');
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($searchResults, $page, $limit);

        return $this->render('AppBundle:Default:index.html.twig', array(
            'pagination' => $pagination,
            'searchParam' => $searchParam,
            'pageTitle' => 'Wyniki wyszukiwania dla frazy: "'.$searchParam.'"',
        ));
    }

    private function getSearchResults($searchParam, $unique = false)
    {
        $queryParams = $this->prepareQueryParams($searchParam);
        $capsRepo = $this->getDoctrine()->getRepository('AppBundle:Cap');
        $searchResults = $capsRepo->getQueryBuilder($queryParams);

        return $searchResults;
    }

    private function getUniqueSearchResults($searchParam, $unique = false)
    {
        $queryParams = $this->prepareQueryParams($searchParam);
        $capsRepo = $this->getDoctrine()->getRepository('AppBundle:Cap');
        $searchResults = $capsRepo->getUniqueQueryBuilder($queryParams);

        return $searchResults;
    }

    private function prepareQueryParams($searchParam)
    {
        $queryParams = array(
            'searchKeyword' => $searchParam,
        );

        return $queryParams;
    }

    private function getJSONSuggestions($searchResults)
    {
        $suggestions = array();

        foreach ($searchResults as $item) {
            $suggestions[] = array(
                'value' => $item['name'],
            );
        }

        return $suggestions;
    }
}
