<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2017-03-09
 * Time: 14:01
 */

namespace AppBundle\EventListener;

use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;

class LoginListener 
{
    /**
     * @var Doctrine
     */
    protected $doctrine;

    /**
     * @param Doctrine        $doctrine
     */
    public function __construct(Doctrine $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
        $em = $this->doctrine->getManager();
        $user = $event->getAuthenticationToken()->getUser();
        $user->setLastLogin(new \DateTime());
        $em->persist($user);
        $em->flush();
    }
}