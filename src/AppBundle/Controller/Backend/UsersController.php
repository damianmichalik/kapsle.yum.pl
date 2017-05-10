<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2017-01-19
 * Time: 12:24
 */

namespace AppBundle\Controller\Backend;

use AppBundle\Form\Admin\ProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Form\Admin\UserType;

class UsersController extends Controller
{
    private $deleteTokenName = "delete-brewery-%d";

    public function indexAction(Request $request, $page)
    {
        $queryParams = array(
            'searchKeyword' => $request->query->get('searchKeyword'),
        );

        $breweriesRepo = $this->getDoctrine()->getRepository('AppBundle:User');
        $allBreweries = $breweriesRepo->getQueryBuilder($queryParams);

        $limits = $this->container->getParameter('admin.limits');

        $paginationLimit = $this->container->getParameter('admin.pagination_limit');

        $limit = $request->query->get('limit', $paginationLimit);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($allBreweries, $page, $limit);

        return $this->render('backend/users/index.html.twig', array(
            'pagination' => $pagination,
            'deleteTokenName' => $this->deleteTokenName,
            'queryParams' => $queryParams,
            'limits' => $limits,
            'currLimit' => $limit,
            'page' => $page,
        ));
    }

    public function newAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Dostep zabroniony');

        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $encoder = $this->get('security.password_encoder');
            $encodedPasswd = $password = $encoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($encodedPasswd);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('admin_users_list');
        }

        return $this->render(
            'backend/users/new.html.twig',
            array(
                'user' => $user,
                'form' => $form->createView(),
            )
        );
    }

    public function editAction(Request $request, User $user)
    {
        if (!$this->isUserGrantedToModify($user)) {
            $this->addFlash('error', 'Nie masz uprawnień do edycji tego użytkownika');

            return $this->redirectToRoute('admin_users_list');
        }

        $editForm = $this->createForm(UserType::class, $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            if ($editForm->get('plainPassword')->getData() != '') {
                $encoder = $this->get('security.password_encoder');
                $encodedPasswd = $password = $encoder->encodePassword($user, $user->getPlainPassword());
                $user->setPassword($encodedPasswd);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'Dane użytkownika zostały zaktualizowane');

            return $this->redirectToRoute('admin_users_list');
        }

        return $this->render(
            'backend/users/edit.html.twig',
            array(
                'user' => $user,
                'edit_form' => $editForm->createView(),
            )
        );
    }

    public function deleteAction(Request $request, User $user)
    {
        if (!$this->isUserGrantedToModify($user)) {
            $this->addFlash('error', 'Nie masz uprawnień do usunięcia tego użytkownika');

            return $this->redirectToRoute('admin_users_list');
        }

        $tokenName = sprintf($this->deleteTokenName, $user->getId());
        if (!$this->isCsrfTokenValid($tokenName, $request->request->get('_csrf_token'))) {
            $this->get('session')->getFlashBag()->add('error', 'Niepoprawny token');

            return $this->redirectToRoute('admin_users_list');
        }

        if ($this->getUser()->getId() == $user->getId()) {
            $this->get('session')->getFlashBag()->add('error', 'Nie możesz usunąć danych aktualnie zalogowanego użytkownika');

            return $this->redirectToRoute('admin_users_list');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        $this->get('session')->getFlashBag()->add('success', 'Uzytkownik został usunięty');

        return $this->redirectToRoute('admin_users_list');
    }

    private function isUserGrantedToModify($user)
    {
        $granted = true;
        $roles = $user->getRoles();
        foreach ($roles as $role) {
            if (!$this->isGranted($role)) {
                $granted = false;
            }
        }

        return $granted;
    }

    public function myAccountAction(Request $request)
    {
        $user = $this->getUser();
        $editForm = $this->createForm(ProfileType::class, $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            if ($editForm->get('plainPassword')->getData() != '') {
                $encoder = $this->get('security.password_encoder');
                $encodedPasswd = $password = $encoder->encodePassword($user, $user->getPlainPassword());
                $user->setPassword($encodedPasswd);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'Dane użytkownika zostały zaktualizowane');

            return $this->redirectToRoute('admin_my_account');
        }

        return $this->render(
            'backend/users/profile.html.twig',
            array(
                'user' => $user,
                'edit_form' => $editForm->createView(),
            )
        );
    }

    public function showAction(User $user)
    {
        return $this->render('backend/users/show.html.twig', array(
            'user' => $user,
            'deleteTokenName' => $this->deleteTokenName,
        ));
    }
}