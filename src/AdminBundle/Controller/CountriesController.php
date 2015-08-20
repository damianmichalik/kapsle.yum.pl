<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Country;
use AdminBundle\Form\Type\CountryType;

class CountriesController extends Controller {
    
    private $delete_token_name = "delete-country-%d";
    
    
    
    public function indexAction (Request $request, $page) 
    {
        
        $queryParams = array(
            'searchKeyword' => $request->query->get('searchKeyword')
        );
        
        $CountriesRepo = $this->getDoctrine()->getRepository('AppBundle:Country');
        $allCountries = $CountriesRepo->getQueryBuilder($queryParams);
        
        $limits = $this->container->getParameter('admin.limits');
        
        $paginationLimit = $this->container->getParameter('admin.pagination_limit');
        
        $limit = $request->query->get('limit', $paginationLimit);
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($allCountries, $page, $limit);
        
        return $this->render('AdminBundle:Countries:index.html.twig', array(
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
            
            $slide = $this->getDoctrine()->getRepository('AppBundle:Country')->find($id);
            $em = $this->getDoctrine()->getManager();
            $em->remove($slide);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('success', 'Rekord został usunięty');
        }
        
        return $this->redirect($this->generateUrl('admin_countries_list', $Request->query->all()));
    }
    
    public function showAction($id) 
    {
        
        $CountriesRepo = $this->getDoctrine()->getRepository('AppBundle:Country');                
        
        $country = $CountriesRepo->find($id);
        
        if ($country === null) {
            $this->get('session')->getFlashBag()->add('error', 'Rekord nie został znaleziony');
            
            return $this->redirect($this->generateUrl('admin_countries_list'));
        }
        
        return $this->render('AdminBundle:Countries:show.html.twig', array(
            'country' => $country,
            'deleteTokenName' => $this->delete_token_name,
            'csrfProvider' => $this->get('form.csrf_provider')
        ));
        
    }
    
    public function formAction(Request $Request, $id = NULL) {   
        
        if(null == $id){
            $country = new Country();
            $newCountryForm = true;
        } else {
            $country = $this->getDoctrine()->getRepository('AppBundle:Country')->find($id);
        }
        
        $form = $this->createForm(new CountryType(), $country);

        $form->handleRequest($Request);
        if($form->isValid()){

            $em = $this->getDoctrine()->getManager();
            
            $em->persist($country);
            $em->flush();
            
            $message = (isset($newCountryForm)) ? 'Poprawnie dodano nowy rekord': 'Rekord został zaktualizowany';
            $this->get('session')->getFlashBag()->add('success', $message);

            return $this->redirect($this->generateUrl('admin_countries_list', $Request->query->all()));
        } 
        
        return $this->render('AdminBundle:Countries:form.html.twig', array(
            'form' => $form->createView(),
            'slideId' => $id
        ));
        
    }
    
}
