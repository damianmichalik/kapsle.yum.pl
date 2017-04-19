<?php

namespace AppBundle\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\SubscriberType;
use AppBundle\Entity\Subscriber;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($page)
    {
        $limit = $this->container->getParameter('pagination_limit');
        $params = array(
            'orderBy' => 'c.createDate',
            'orderDir' => 'DESC',
        );

        $pagination = $this->get('app.caps_paginator')->getPaginatedCaps($params, $page, $limit);

        return $this->render('Frontend/Default/index.html.twig', array(
            'pagination' => $pagination,
        ));
    }
}
