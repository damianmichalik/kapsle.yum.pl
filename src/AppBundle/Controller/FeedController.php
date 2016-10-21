<?php

namespace AppBundle\Controller;

use \Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FeedController extends Controller
{
    public function rssAction()
    {
        $caps = $this->getDoctrine()
                ->getRepository('AppBundle:Cap')
                ->findBy(array(), array('createDate' => 'DESC'));

        return $this->render('AppBundle:Feeds:rss.xml.twig', array(
            'caps' => $caps,
        ));
    }
}
