<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Brewery;
use AdminBundle\Form\Type\BreweryType;

class BreweriesController extends Controller {
    
    private $delete_token_name = "delete-brewery-%d";
            
    public function indexAction (Request $request, $page) 
    {
        
        $queryParams = array(
            'searchKeyword' => $request->query->get('searchKeyword')
        );
        
        $BreweriesRepo = $this->getDoctrine()->getRepository('AppBundle:Brewery');
        $allBreweries = $BreweriesRepo->getQueryBuilder($queryParams);
        
        $limits = $this->container->getParameter('admin.limits');
        
        $paginationLimit = $this->container->getParameter('admin.pagination_limit');
        
        $limit = $request->query->get('limit', $paginationLimit);
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($allBreweries, $page, $limit);
        
        return $this->render('AdminBundle:Breweries:index.html.twig', array(
            'pagination' => $pagination,
            'deleteTokenName' => $this->delete_token_name,
            'csrfProvider' => $this->get('form.csrf_provider'),
            'queryParams' => $queryParams,
            'limits' => $limits,
            'currLimit' => $limit,
            'page' => $page
        ));
    }
    
    public function deleteAction(Request $Request, $id, $token) 
    {
        
        $tokenName = sprintf($this->delete_token_name, $id);
        $csrfProvider = $this->get('form.csrf_provider');
        
        if(!$csrfProvider->isCsrfTokenValid($tokenName, $token)){
            $this->get('session')->getFlashBag()->add('error', 'Niepoprawny token akcji!');
            
        }else{
            
            $slide = $this->getDoctrine()->getRepository('AppBundle:Brewery')->find($id);
            $em = $this->getDoctrine()->getManager();
            $em->remove($slide);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('success', 'Rekord został usunięty');
        }
        
        return $this->redirect($this->generateUrl('admin_breweries_list', $Request->query->all()));
    }
    
    public function showAction($id) 
    {
        
        $BreweriesRepo = $this->getDoctrine()->getRepository('AppBundle:Brewery');                
        
        $brewery = $BreweriesRepo->find($id);
        
        if ($brewery === null) {
            $this->get('session')->getFlashBag()->add('error', 'Rekord nie został znaleziony');
            
            return $this->redirect($this->generateUrl('admin_breweries_list'));
        }
        
        return $this->render('AdminBundle:Breweries:show.html.twig', array(
            'brewery' => $brewery,
            'deleteTokenName' => $this->delete_token_name,
            'csrfProvider' => $this->get('form.csrf_provider')
        ));
        
    }
    
    public function formAction(Request $Request, $id = NULL) {   
        
        if(null == $id){
            $brewery = new Brewery();
            $newBreweryForm = true;
        } else {
            $brewery = $this->getDoctrine()->getRepository('AppBundle:Brewery')->find($id);
        }
        
        $form = $this->createForm(new BreweryType(), $brewery);

        $form->handleRequest($Request);
        if($form->isValid()){

            $em = $this->getDoctrine()->getManager();
            
            $em->persist($brewery);
            $em->flush();
            
            $message = (isset($newBreweryForm)) ? 'Poprawnie dodano nowy rekord': 'Rekord został zaktualizowany';
            $this->get('session')->getFlashBag()->add('success', $message);

            return $this->redirect($this->generateUrl('admin_breweries_list', $Request->query->all()));
        } 
        
        return $this->render('AdminBundle:Breweries:form.html.twig', array(
            'form' => $form->createView(),
            'slideId' => $id
        ));
        
    }
    
}
