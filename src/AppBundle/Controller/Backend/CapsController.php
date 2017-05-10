<?php

namespace AppBundle\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Cap;
use AppBundle\Form\Admin\CapType;
use Symfony\Component\Security\Csrf\CsrfToken;

class CapsController extends Controller
{

    private $deleteTokenName = "delete-cap-%d";

    public function indexAction(Request $request, $page)
    {
        $queryParams = array(
            'searchKeyword' => $request->query->get('searchKeyword'),
        );

        $capsRepo = $this->getDoctrine()->getRepository('AppBundle:Cap');
        $allCaps = $capsRepo->getBackendQueryBuilder($queryParams);

        $limits = $this->container->getParameter('admin.limits');

        $paginationLimit = $this->container->getParameter('admin.pagination_limit');

        $limit = $request->query->get('limit', $paginationLimit);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($allCaps, $page, $limit);

        return $this->render('backend/caps/index.html.twig', array(
            'pagination' => $pagination,
            'deleteTokenName' => $this->deleteTokenName,
            'queryParams' => $queryParams,
            'limits' => $limits,
            'currLimit' => $limit,
            'page' => $page,
        ));
    }

    public function deleteAction(Request $request, Cap $cap)
    {
        $tokenName = sprintf($this->deleteTokenName, $cap->getId());
        if (!$this->isCsrfTokenValid($tokenName, $request->request->get('_csrf_token'))) {
            $this->get('session')->getFlashBag()->add('error', 'Niepoprawny token');

            return $this->redirect($this->generateUrl('admin_caps_list', $request->query->all()));
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($cap);
        $em->flush();

        $this->get('session')->getFlashBag()->add('success', 'Rekord został usunięty');

        return $this->redirect($this->generateUrl('admin_caps_list', $request->query->all()));
    }

    public function editAction(Request $request, Cap $cap)
    {
        $form = $this->createForm(CapType::class, $cap);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($cap);
            $em->flush();

            $this->get('admin.cap_image_handler')->setCapImage($cap);

            $this->addFlash('success', 'Rekord został zaktualizowany');

            return $this->redirect($this->generateUrl('admin_caps_list', $request->query->all()));
        }

        return $this->render('backend/caps/edit.html.twig', array(
            'form' => $form->createView(),
            'cap' => $cap,
        ));
    }

    public function newAction(Request $request)
    {
        $cap = new Cap();
        $form = $this->createForm(CapType::class, $cap);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($cap);
            $em->flush();

            $this->get('admin.cap_image_handler')->setCapImage($cap);

            $this->addFlash('success', 'Poprawnie dodano nowy rekord');

            return $this->redirect($this->generateUrl('admin_caps_list', $request->query->all()));
        }

        return $this->render('backend/caps/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function showAction(Cap $cap)
    {
        return $this->render('backend/caps/show.html.twig', array(
            'cap' => $cap,
            'deleteTokenName' => $this->deleteTokenName,
        ));
    }
}
