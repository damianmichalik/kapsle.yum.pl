<?php

namespace AppBundle\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\LoginType;

class LoginController extends Controller
{

    public function loginAction(Request $request)
    {

        $session = $this->get('session');

        if ($request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            $loginError = $request->attributes->get(Security::AUTHENTICATION_ERROR);
        } else {
            $loginError = $session->remove(Security::AUTHENTICATION_ERROR);
        }

        if (isset($loginError)) {
            $this->get('session')->getFlashBag()->add('error', $loginError->getMessage());
        }

        $loginForm = $this->createForm(LoginType::class, array(
            'username' => $session->get(Security::LAST_USERNAME),
        ));

        return $this->render('Frontend/Login/login.html.twig', array(
            'loginForm' => $loginForm->createView(),
        ));
    }
}
