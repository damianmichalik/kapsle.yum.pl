<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\Type\SubscriberType;
use AppBundle\Entity\Subscriber;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($page)
    {
        $capsRepo = $this->getDoctrine()->getRepository('AppBundle:Cap');
        $allCaps = $capsRepo->findBy(array(), array('createDate' => 'DESC'));

        $limit = $this->container->getParameter('pagination_limit');

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($allCaps, $page, $limit);

        return $this->render('AppBundle:Default:index.html.twig', array(
            'pagination' => $pagination,
        ));
    }
}
