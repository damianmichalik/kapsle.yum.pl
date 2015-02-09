<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Cap;
use AdminBundle\Form\Type\CapType;

class CapsController extends Controller {
    
    private $delete_token_name = "delete-cap-%d";
    
    public function indexAction (Request $request, $page) 
    {
        
        $queryParams = array(
            'searchKeyword' => $request->query->get('searchKeyword')
        );
        
        $CapsRepo = $this->getDoctrine()->getRepository('AppBundle:Cap');
        $allCaps = $CapsRepo->getQueryBuilder($queryParams);
        
        $limits = $this->container->getParameter('admin.limits');
        
        $paginationLimit = $this->container->getParameter('admin.pagination_limit');
        
        $limit = $request->query->get('limit', $paginationLimit);
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($allCaps, $page, $limit);
        
        return $this->render('AdminBundle:Caps:index.html.twig', array(
            'pagination' => $pagination,
            'deleteTokenName' => $this->delete_token_name,
            'csrfProvider' => $this->get('form.csrf_provider'),
            'queryParams' => $queryParams,
            'limits' => $limits,
            'currLimit' => $limit
        ));
    }
    
    public function deleteAction($id, $token) 
    {
        
        $tokenName = sprintf($this->delete_token_name, $id);
        $csrfProvider = $this->get('form.csrf_provider');
        
        if(!$csrfProvider->isCsrfTokenValid($tokenName, $token)){
            $this->get('session')->getFlashBag()->add('error', 'Niepoprawny token akcji!');
            
        }else{
            
            $slide = $this->getDoctrine()->getRepository('AppBundle:Cap')->find($id);
            $em = $this->getDoctrine()->getManager();
            $em->remove($slide);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('success', 'Rekord został usunięty');
        }
        
        return $this->redirect($this->generateUrl('admin_caps_list'));
    }
    
    public function formAction(Request $Request, $id = NULL) {
        
        if(null == $id){
            $cap = new Cap();
            $newCapForm = true;
        } else {
            $cap = $this->getDoctrine()->getRepository('AppBundle:Cap')->find($id);
        }
        
        $form = $this->createForm(new CapType(), $cap);
        
        $form->handleRequest($Request);
        if($form->isValid()){

            $em = $this->getDoctrine()->getManager();
            
            $em->persist($cap);
            $em->flush();
            
            $message = (isset($newCapForm)) ? 'Poprawnie dodano nowy rekord': 'Rekord został zaktualizowany';
            $this->get('session')->getFlashBag()->add('success', $message);

            return $this->redirect($this->generateUrl('admin_caps_list'));
        } 
        
        return $this->render('AdminBundle:Caps:form.html.twig', array(
            'form' => $form->createView(),
            'slideId' => $id
        ));
        
    }
    
    public function showAction($id) 
    {
        
        $CapsRepo = $this->getDoctrine()->getRepository('AppBundle:Cap');                
        
        $cap = $CapsRepo->find($id);
        
        if ($cap === null) {
            $this->get('session')->getFlashBag()->add('error', 'Rekord nie został znaleziony');
            
            return $this->redirect($this->generateUrl('admin_caps_list'));
        }
        
        return $this->render('AdminBundle:Caps:show.html.twig', array(
            'cap' => $cap,
            'deleteTokenName' => $this->delete_token_name,
            'csrfProvider' => $this->get('form.csrf_provider')
        ));
        
    }
    
}
