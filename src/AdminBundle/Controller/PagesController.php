<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2016-11-17
 * Time: 21:28
 */

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Page;
use AdminBundle\Form\Type\PageType;
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

        return $this->render('AdminBundle:Pages:index.html.twig', array(
            'pagination' => $pagination,
            'topElements' => $topElements,
            'deleteTokenName' => $this->deleteTokenName,
            'csrfProvider' => $this->get('security.csrf.token_manager'),
            'queryParams' => $queryParams,
            'limits' => $limits,
            'currLimit' => $limit,
            'page' => $page,
        ));
    }

    public function showAction($id)
    {
        $pagesRepo = $this->getDoctrine()->getRepository('AppBundle:Page');

        $page = $pagesRepo->find($id);

        if ($page === null) {
            $this->get('session')->getFlashBag()->add('error', 'Rekord nie został znaleziony');

            return $this->redirect($this->generateUrl('admin_pages_list'));
        }

        return $this->render('AdminBundle:Pages:show.html.twig', array(
            'page' => $page,
            'deleteTokenName' => $this->deleteTokenName,
            'csrfProvider' => $this->get('security.csrf.token_manager'),
        ));
    }

    public function deleteAction(Request $request, $id, $token)
    {
        $tokenName = sprintf($this->deleteTokenName, $id);
        $csrfProvider = $this->get('security.csrf.token_manager');

        if (!$csrfProvider->isTokenValid(new CsrfToken($tokenName, $token))) {
            $this->get('session')->getFlashBag()->add('error', 'Niepoprawny token akcji!');
        } else {
            $page = $this->getDoctrine()->getRepository('AppBundle:Page')->find($id);
            $em = $this->getDoctrine()->getManager();
            $em->remove($page);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'Rekord został usunięty');
        }

        return $this->redirect($this->generateUrl('admin_pages_list', $request->query->all()));
    }

    public function formAction(Request $request, $id = null)
    {

        if (null == $id) {
            $page = new Page();
            $newPageForm = true;
        } else {
            $page = $this->getDoctrine()->getRepository('AppBundle:Page')->find($id);
        }

        $form = $this->createForm(PageType::class, $page);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($page);
            $em->flush();

            $message = (isset($newBreweryForm)) ? 'Poprawnie dodano nowy rekord': 'Rekord został zaktualizowany';
            $this->get('session')->getFlashBag()->add('success', $message);

            return $this->redirect($this->generateUrl('admin_pages_list', $request->query->all()));
        }

        return $this->render('AdminBundle:Pages:form.html.twig', array(
            'form' => $form->createView(),
            'slideId' => $id,
            'page' => $page,
        ));
    }
}
