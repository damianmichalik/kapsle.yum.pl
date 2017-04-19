<?php

namespace AppBundle\Controller\Frontend;

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

        $maxViews = $this->getDoctrine()->getRepository('AppBundle:Cap')->getMaxViewsByCap($capItem->getId());

        return $this->render('Frontend/Caps/details.html.twig', array(
            'cap' => $capItem,
            'breweryCapses' => $breweryCapses,
            'maxViews' => $maxViews,
        ));
    }

    public function autocompleteAction(Request $request)
    {
        $searchParam = $request->query->get('query');

        $capsRepo = $this->getDoctrine()->getRepository('AppBundle:Cap');
        $searchResults = $capsRepo->getUniqueQueryBuilder(array(
            'searchKeyword' => $searchParam,
        ))->getQuery()->getResult();

        $suggestions = $this->getJSONSuggestions($searchResults);

        return new JsonResponse(array('suggestions' => $suggestions));
    }

    public function searchAction(Request $request, $page)
    {
        $searchParam = $request->query->get('search');
        $limit = $this->container->getParameter('pagination_limit');
        $params = array(
            'orderBy' => 'c.createDate',
            'orderDir' => 'DESC',
            'searchKeyword' => $searchParam,
        );

        $pagination = $this->get('app.caps_paginator')->getPaginatedCaps($params, $page, $limit);

        return $this->render('Frontend/Default/index.html.twig', array(
            'pagination' => $pagination,
            'searchParam' => $searchParam,
            'pageTitle' => 'Wyniki wyszukiwania dla frazy: "'.$searchParam.'"',
        ));
    }

    public function tagAction($slug, $page)
    {
        $tagsRepo = $this->getDoctrine()->getRepository('AppBundle:Tag');
        $tag = $tagsRepo->findOneBySlug($slug);

        if ($tag === null) {
            throw $this->createNotFoundException('Nie ma takiego tagu');
        }

        $em = $this->getDoctrine()->getManager();
        $tag->setViews($tag->getViews()+1);
        $em->persist($tag);
        $em->flush();

        $limit = $this->container->getParameter('pagination_limit');

        $params = array(
            'orderBy' => 'c.createDate',
            'orderDir' => 'DESC',
            'tagSlug' => $tag->getSlug(),
        );

        $pagination = $this->get('app.caps_paginator')->getPaginatedCaps($params, $page, $limit);

        return $this->render('Frontend/Default/index.html.twig', array(
            'pagination' => $pagination,
            'tagSlug' => $tag->getSlug(),
            'pageTitle' => 'Wyniki wyszukiwania dla tagu: "'.$tag->getName().'"',
        ));
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
