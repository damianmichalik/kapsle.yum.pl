<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\LoginType;

class LoginController extends Controller {
    
    public function loginAction(Request $Request)
    {
        
        $Session = $this->get('session');
        
        if ($Request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $loginError = $Request->attributes->get(SecurityContextInterface::AUTHENTICATION_ERROR);            
        } else {
            $loginError = $Session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        }
        
        if (isset($loginError)) {
            $this->get('session')->getFlashBag()->add('error', $loginError->getMessage());
        }
        
        $loginForm = $this->createForm(new LoginType(), array(
            'username' => $Session->get(SecurityContextInterface::LAST_USERNAME)
        ));
        
        return $this->render('AppBundle:Login:login.html.twig', array(
            'loginForm' => $loginForm->createView()
        ));
        
    }
    
}
