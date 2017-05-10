<?php

namespace AppBundle\Controller\Frontend;

use \Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FeedController extends Controller
{
    public function rssAction()
    {
        $caps = $this->getDoctrine()
                ->getRepository('AppBundle:Cap')
                ->findBy(array(), array('createDate' => 'DESC'));

        return $this->render('frontend/feeds/rss.xml.twig', array(
            'caps' => $caps,
        ));
    }
}
