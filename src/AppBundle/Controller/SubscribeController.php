<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Subscriber;
use AppBundle\Form\Type\SubscriberType;
use Symfony\Component\HttpFoundation\Request;

class SubscribeController extends Controller
{

    public function subscribeAction(Request $request)
    {
        $subscriber = new Subscriber();
        $subscribeForm = $this->createForm(new SubscriberType(), $subscriber);

        if ($request->isMethod('POST')) {
            $subscribeForm->handleRequest($request);
            if ($subscribeForm->isValid()) {
                $this->get('session')->getFlashBag()->add('success', 'Dziękujemy za zapisanie się do newslettera. Na podany adres email została wysłana wiadomość aktywacyjna');

                return $this->redirect($this->generateUrl('kwatery_subscribe_page'));
            } else {
                $this->get('session')->getFlashBag()->add('success', 'Popraw błędy formularza');
            }
        }

        return $this->render('AppBundle:Subscribe:form.html.twig', array(
            'subscribeForm' => $subscribeForm->createView(),
            'hideFooterSubscriberForm' => true,
        ));
    }
}
