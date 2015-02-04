<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CapsController extends Controller {
    
    public function capsDetailsAction ($slug) 
    {
        $CapsRepo = $this->getDoctrine()->getRepository('AppBundle:Cap');    
        
        $CapItem = $CapsRepo->findOneBySlug($slug);
        
        if ($CapItem === null) {
            throw $this->createNotFoundException('Nie znaleziono podanego rekordu');
        }
        
        return $this->render('AppBundle:Caps:details.html.twig', array(
            'cap' => $CapItem
        ));
    }
    
    public function searchAction(Request $request, $page)
    {
        
        $searchParam = $request->query->get('search');
        
        $CapsRepo = $this->getDoctrine()->getRepository('AppBundle:Cap');    
        
        $searchResults = $CapsRepo->createQueryBuilder('c')
            ->where('c.name LIKE :name')
            ->setParameter('name', '%'.$searchParam.'%')
            ->getQuery()
            ->getArrayResult();
        
        $limit = $this->container->getParameter('pagination_limit');
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($searchResults, $page, $limit);
        
        return $this->render('AppBundle:Default:index.html.twig', array(
            'pagination' => $pagination,
            'searchParam' => $searchParam
        ));
    }
}
