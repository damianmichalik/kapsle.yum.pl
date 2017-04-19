<?php

namespace DM\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DMTestBundle:Default:index.html.twig');
    }
}
