<?php

namespace AppBundle\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Brewery;
use AppBundle\Form\Admin\BreweryType;
use Symfony\Component\Security\Csrf\CsrfToken;
use Doctrine\Common\Collections\ArrayCollection;

class BreweriesController extends Controller
{

    private $deleteTokenName = "delete-brewery-%d";

    public function indexAction(Request $request, $page)
    {
        $queryParams = array(
            'searchKeyword' => $request->query->get('searchKeyword'),
        );

        $breweriesRepo = $this->getDoctrine()->getRepository('AppBundle:Brewery');
        $allBreweries = $breweriesRepo->getQueryBuilder($queryParams);

        $limits = $this->container->getParameter('admin.limits');

        $paginationLimit = $this->container->getParameter('admin.pagination_limit');

        $limit = $request->query->get('limit', $paginationLimit);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($allBreweries, $page, $limit);

        return $this->render('backend/breweries/index.html.twig', array(
            'pagination' => $pagination,
            'deleteTokenName' => $this->deleteTokenName,
            'queryParams' => $queryParams,
            'limits' => $limits,
            'currLimit' => $limit,
            'page' => $page,
        ));
    }

    public function deleteAction(Request $request, Brewery $brewery)
    {
        $tokenName = sprintf($this->deleteTokenName, $brewery->getId());
        if (!$this->isCsrfTokenValid($tokenName, $request->request->get('_csrf_token'))) {
            $this->get('session')->getFlashBag()->add('error', 'Niepoprawny token');

            return $this->redirect($this->generateUrl('admin_breweries_list', $request->query->all()));
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($brewery);
        $em->flush();

        $this->get('session')->getFlashBag()->add('success', 'Rekord został usunięty');

        return $this->redirect($this->generateUrl('admin_breweries_list', $request->query->all()));
    }

    public function showAction(Brewery $brewery)
    {
        return $this->render('backend/breweries/show.html.twig', array(
            'brewery' => $brewery,
            'deleteTokenName' => $this->deleteTokenName,
        ));
    }

    public function newAction(Request $request)
    {
        $brewery = new Brewery();
        $form = $this->createForm(BreweryType::class, $brewery);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($brewery);
            $em->flush();

            $this->addFlash('success', 'Poprawnie dodano nowy rekord');

            return $this->redirect($this->generateUrl('admin_breweries_list', $request->query->all()));
        }

        return $this->render('backend/breweries/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction(Request $request, Brewery $brewery)
    {
        $form = $this->createForm(BreweryType::class, $brewery);

        $form->handleRequest($request);

        $originalFacts = new ArrayCollection();
        foreach ($brewery->getFacts() as $fact) {
            $originalFacts->add($fact);
        }

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            foreach ($originalFacts as $fact) {
                if (false === $brewery->getFacts()->contains($fact)) {
                    $fact->getBreweries()->removeElement($brewery);
                    $em->persist($fact);
                }
            }

            $em->persist($brewery);
            $em->flush();

            $this->addFlash('success', 'Rekord został zaktualizowany');

            return $this->redirect($this->generateUrl('admin_breweries_list', $request->query->all()));
        }

        return $this->render('backend/breweries/edit.html.twig', array(
            'form' => $form->createView(),
            'brewery' => $brewery,
        ));
    }
}
