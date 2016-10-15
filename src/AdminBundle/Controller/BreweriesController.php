<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Brewery;
use AdminBundle\Form\Type\BreweryType;
use Symfony\Component\Security\Csrf\CsrfToken;

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

        return $this->render('AdminBundle:Breweries:index.html.twig', array(
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
            $slide = $this->getDoctrine()->getRepository('AppBundle:Brewery')->find($id);
            $em = $this->getDoctrine()->getManager();
            $em->remove($slide);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'Rekord został usunięty');
        }

        return $this->redirect($this->generateUrl('admin_breweries_list', $request->query->all()));
    }

    public function showAction($id)
    {

        $breweriesRepo = $this->getDoctrine()->getRepository('AppBundle:Brewery');

        $brewery = $breweriesRepo->find($id);

        if ($brewery === null) {
            $this->get('session')->getFlashBag()->add('error', 'Rekord nie został znaleziony');

            return $this->redirect($this->generateUrl('admin_breweries_list'));
        }

        return $this->render('AdminBundle:Breweries:show.html.twig', array(
            'brewery' => $brewery,
            'deleteTokenName' => $this->deleteTokenName,
            'csrfProvider' => $this->get('security.csrf.token_manager'),
        ));
    }

    public function formAction(Request $request, $id = null)
    {

        if (null == $id) {
            $brewery = new Brewery();
            $newBreweryForm = true;
        } else {
            $brewery = $this->getDoctrine()->getRepository('AppBundle:Brewery')->find($id);
        }

        $form = $this->createForm(BreweryType::class, $brewery);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($brewery);
            $em->flush();

            $message = (isset($newBreweryForm)) ? 'Poprawnie dodano nowy rekord': 'Rekord został zaktualizowany';
            $this->get('session')->getFlashBag()->add('success', $message);

            return $this->redirect($this->generateUrl('admin_breweries_list', $request->query->all()));
        }

        return $this->render('AdminBundle:Breweries:form.html.twig', array(
            'form' => $form->createView(),
            'slideId' => $id,
        ));
    }
}
