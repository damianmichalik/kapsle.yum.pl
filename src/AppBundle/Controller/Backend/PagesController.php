<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2016-11-17
 * Time: 21:28
 */

namespace AppBundle\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Page;
use AppBundle\Form\Admin\PageType;
use Symfony\Component\Security\Csrf\CsrfToken;

class PagesController extends Controller
{

    private $deleteTokenName = "delete-page-%d";

    public function indexAction(Request $request, $page)
    {
        $queryParams = array(
            'searchKeyword' => $request->query->get('searchKeyword'),
        );

        $pagesRepo = $this->getDoctrine()->getRepository('AppBundle:Page');
        $allPages = $pagesRepo->getFlatArray();

        $limits = $this->container->getParameter('admin.limits');

        $paginationLimit = $this->container->getParameter('admin.pagination_limit');

        $limit = $request->query->get('limit', $paginationLimit);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($allPages, $page, $limit);

        $topElements = $pagesRepo->completePagination($pagination, $allPages);

        return $this->render('backend/pages/index.html.twig', array(
            'pagination' => $pagination,
            'topElements' => $topElements,
            'deleteTokenName' => $this->deleteTokenName,
            'queryParams' => $queryParams,
            'limits' => $limits,
            'currLimit' => $limit,
            'page' => $page,
        ));
    }

    public function showAction(Page $page)
    {
        return $this->render('backend/pages/show.html.twig', array(
            'page' => $page,
            'deleteTokenName' => $this->deleteTokenName,
        ));
    }

    public function deleteAction(Request $request, Page $page)
    {
        $tokenName = sprintf($this->deleteTokenName, $page->getId());
        if (!$this->isCsrfTokenValid($tokenName, $request->request->get('_csrf_token'))) {
            $this->get('session')->getFlashBag()->add('error', 'Niepoprawny token');

            return $this->redirect($this->generateUrl('admin_pages_list', $request->query->all()));
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($page);
        $em->flush();

        $this->get('session')->getFlashBag()->add('success', 'Rekord został usunięty');

        return $this->redirect($this->generateUrl('admin_pages_list', $request->query->all()));
    }

    public function newAction(Request $request)
    {
        $page = new Page();
        $form = $this->createForm(PageType::class, $page);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($page);
            $em->flush();

            $this->addFlash('success', 'Poprawnie dodano nowy rekord');

            return $this->redirect($this->generateUrl('admin_pages_list', $request->query->all()));
        }

        return $this->render('backend/pages/new.html.twig', array(
            'form' => $form->createView(),
            'page' => $page,
        ));
    }

    public function editAction(Request $request, Page $page)
    {
        $form = $this->createForm(PageType::class, $page);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($page);
            $em->flush();

            $this->addFlash('success', 'Rekord został zaktualizowany');

            return $this->redirect($this->generateUrl('admin_pages_list', $request->query->all()));
        }

        return $this->render('backend/pages/edit.html.twig', array(
            'form' => $form->createView(),
            'page' => $page,
        ));
    }
}
