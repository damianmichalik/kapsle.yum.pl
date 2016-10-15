<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Country;
use AdminBundle\Form\Type\CountryType;
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

        return $this->render('AdminBundle:Countries:index.html.twig', array(
            'pagination' => $pagination,
            'deleteTokenName' => $this->deleteTokenName,
            'csrfProvider' => $this->get('security.csrf.token_manager'),
            'queryParams' => $queryParams,
            'limits' => $limits,
            'currLimit' => $limit,
            'page' => $page,
        ));
    }

    public function deleteAction(Request $request, $id, $token)
    {

        $tokenName = sprintf($this->deleteTokenName, $id);
        $csrfProvider = $this->get('security.csrf.token_manager');

        if (!$csrfProvider->isTokenValid(new CsrfToken($tokenName, $token))) {
            $this->get('session')->getFlashBag()->add('error', 'Niepoprawny token akcji!');
        } else {
            $slide = $this->getDoctrine()->getRepository('AppBundle:Country')->find($id);
            $em = $this->getDoctrine()->getManager();
            $em->remove($slide);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'Rekord został usunięty');
        }

        return $this->redirect($this->generateUrl('admin_countries_list', $request->query->all()));
    }

    public function showAction($id)
    {

        $countriesRepo = $this->getDoctrine()->getRepository('AppBundle:Country');

        $country = $countriesRepo->find($id);

        if ($country === null) {
            $this->get('session')->getFlashBag()->add('error', 'Rekord nie został znaleziony');

            return $this->redirect($this->generateUrl('admin_countries_list'));
        }

        return $this->render('AdminBundle:Countries:show.html.twig', array(
            'country' => $country,
            'deleteTokenName' => $this->deleteTokenName,
            'csrfProvider' => $this->get('security.csrf.token_manager'),
        ));
    }

    public function formAction(Request $request, $id = null)
    {
        if (null == $id) {
            $country = new Country();
            $newCountryForm = true;
        } else {
            $country = $this->getDoctrine()->getRepository('AppBundle:Country')->find($id);
        }

        $form = $this->createForm(CountryType::class, $country);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($country);
            $em->flush();

            $message = (isset($newCountryForm)) ? 'Poprawnie dodano nowy rekord': 'Rekord został zaktualizowany';
            $this->get('session')->getFlashBag()->add('success', $message);

            return $this->redirect($this->generateUrl('admin_countries_list', $request->query->all()));
        }

        return $this->render('AdminBundle:Countries:form.html.twig', array(
            'form' => $form->createView(),
            'slideId' => $id,
        ));
    }
}
