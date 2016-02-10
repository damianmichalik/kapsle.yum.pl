<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\Type\ContactType;
use \Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    
    public function indexAction(Request $request) 
    {
        
        echo $this->container->getParameter('admin_email');
        
        $contactForm = $this->createForm(new ContactType());
        
        $contactForm->handleRequest($request);
        
        if ($contactForm->isValid()) {
            
            $subject = 'Zapytanie z formularza kontaktowego';
            
            $htmlBody = $this->renderView(
                    'AppBundle:Email:contact.html.twig',
                    array('formData' => $contactForm->getData())
            );
            
            $mailer = $this->container->get('contact_mailer');
            $mailer->send($subject, $htmlBody);

            $this->get('session')->getFlashBag()->add('success', 'Zgłoszenie zostało wysłane');
            return $this->redirect($this->generateUrl('contact'));
        }
        
        return $this->render('AppBundle:Contact:index.html.twig', array(
            'contactForm' => $contactForm->createView()
        ));
        
    }
    
}
