<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CapsController extends Controller {
    
    private $delete_token_name = "delete-cap-%d";
    
    public function indexAction (Request $request, $page) 
    {
        
        $queryParams = array(
            'searchKeyword' => $request->query->get('searchKeyword')
        );
        
        $CapsRepo = $this->getDoctrine()->getRepository('AppBundle:Cap');
        $allCaps = $CapsRepo->getQueryBuilder($queryParams);
        
        $limits = array(2, 5, 10, 15);
        
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
    
}
