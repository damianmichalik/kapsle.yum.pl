<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($page)
    {
        $CapsRepo = $this->getDoctrine()->getRepository('AppBundle:Cap');                
        $allCaps = $CapsRepo->findAll();
        
        $limit = $this->container->getParameter('pagination_limit');
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($allCaps, $page, $limit);
        
        return $this->render('AppBundle:Default:index.html.twig', array(
            'pagination' => $pagination
        ));
    }
}
