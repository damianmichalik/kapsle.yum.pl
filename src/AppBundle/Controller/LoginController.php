<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\LoginType;

class LoginController extends Controller {
    
    public function loginAction(Request $Request)
    {
        
        $Session = $this->get('session');
        
        if ($Request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            $loginError = $Request->attributes->get(Security::AUTHENTICATION_ERROR);            
        } else {
            $loginError = $Session->remove(Security::AUTHENTICATION_ERROR);
        }
        
        if (isset($loginError)) {
            $this->get('session')->getFlashBag()->add('error', $loginError->getMessage());
        }
        
        $loginForm = $this->createForm(LoginType::class, array(
            'username' => $Session->get(Security::LAST_USERNAME)
        ));
        
        return $this->render('AppBundle:Login:login.html.twig', array(
            'loginForm' => $loginForm->createView()
        ));
        
    }
    
}
