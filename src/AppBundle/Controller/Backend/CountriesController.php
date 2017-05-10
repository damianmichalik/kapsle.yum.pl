<?php

namespace AppBundle\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Country;
use AppBundle\Form\Admin\CountryType;
use Symfony\Component\Security\Csrf\CsrfToken;

class CountriesController extends Controller
{

    private $deleteTokenName = "delete-country-%d";

    public function indexAction(Request $request, $page)
    {
        $queryParams = array(
            'searchKeyword' => $request->query->get('searchKeyword'),
        );

        $countriesRepo = $this->getDoctrine()->getRepository('AppBundle:Country');
        $allCountries = $countriesRepo->getQueryBuilder($queryParams);

        $limits = $this->container->getParameter('admin.limits');

        $paginationLimit = $this->container->getParameter('admin.pagination_limit');

        $limit = $request->query->get('limit', $paginationLimit);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($allCountries, $page, $limit);

        return $this->render('backend/countries/index.html.twig', array(
            'pagination' => $pagination,
            'deleteTokenName' => $this->deleteTokenName,
            'queryParams' => $queryParams,
            'limits' => $limits,
            'currLimit' => $limit,
            'page' => $page,
        ));
    }

    public function deleteAction(Request $request, Country $country)
    {
        $tokenName = sprintf($this->deleteTokenName, $country->getId());
        if (!$this->isCsrfTokenValid($tokenName, $request->request->get('_csrf_token'))) {
            $this->get('session')->getFlashBag()->add('error', 'Niepoprawny token');

            return $this->redirect($this->generateUrl('admin_countries_list', $request->query->all()));
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($country);
        $em->flush();

        $this->get('session')->getFlashBag()->add('success', 'Rekord został usunięty');

        return $this->redirect($this->generateUrl('admin_countries_list', $request->query->all()));
    }

    public function showAction(Country $country)
    {
        return $this->render('backend/countries/show.html.twig', array(
            'country' => $country,
            'deleteTokenName' => $this->deleteTokenName,
            'csrfProvider' => $this->get('security.csrf.token_manager'),
        ));
    }

    public function editAction(Request $request, Country $country)
    {
        $form = $this->createForm(CountryType::class, $country);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($country);
            $em->flush();

            $this->addFlash('success', 'Rekord został zaktualizowany');

            return $this->redirect($this->generateUrl('admin_countries_list', $request->query->all()));
        }

        return $this->render('backend/countries/edit.html.twig', array(
            'form' => $form->createView(),
            'country' => $country,
        ));
    }

    public function newAction(Request $request, $id = null)
    {
        $country = new Country();
        $form = $this->createForm(CountryType::class, $country);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($country);
            $em->flush();

            $this->addFlash('success', 'Poprawnie dodano nowy rekord');

            return $this->redirect($this->generateUrl('admin_countries_list', $request->query->all()));
        }

        return $this->render('backend/countries/new.html.twig', array(
            'form' => $form->createView(),
            'countryId' => $id,
        ));
    }
}
