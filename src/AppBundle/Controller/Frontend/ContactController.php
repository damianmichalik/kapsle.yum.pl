<?php

namespace AppBundle\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\ContactType;
use \Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{

    public function indexAction(Request $request)
    {
        $contactForm = $this->createForm(ContactType::class);
        $contactForm->handleRequest($request);
        if ($contactForm->isValid()) {
            $subject = 'Zapytanie z formularza kontaktowego';
            $htmlBody = $this->renderView(
                'frontend/Email/contact.html.twig',
                array('formData' => $contactForm->getData())
            );
            $mailer = $this->container->get('contact_mailer');
            $mailer->send($subject, $htmlBody);
            $this->get('session')->getFlashBag()->add('success', 'Zgłoszenie zostało wysłane');

            return $this->redirect($this->generateUrl('contact'));
        }

        return $this->render('frontend/contact/index.html.twig', array(
            'contactForm' => $contactForm->createView(),
        ));
    }
}
