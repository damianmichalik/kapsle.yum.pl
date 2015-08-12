<?php

namespace AppBundle\Twig\Extension;

use AppBundle\Form\Type\SubscriberType;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AppExtension extends \Twig_Extension {
    
    /** 
     *
     * @var \Doctrine\Bundle\DoctrineBundle\Registry
     */
    private $doctrine;
    
    /**
    * @var ContainerInterface
    */
    protected $container;
    
    /**
     *
     * @var \Twig_Environment
     * @param ContainerInterface $container
     */
    private $environment;
    
    /**
     * @var Router
     */
    protected $router;
    
    /**
    * Constructor
    * 
    * @param ContainerInterface $container
    */
    public function __construct(Registry $doctrine, $container, Router $router) {
        $this->container = $container;
        $this->doctrine = $doctrine;
        $this->router = $router;
    }

    
    public function initRuntime (\Twig_Environment $environment) {
        $this->environment = $environment;
    }
    
    public function getName() {
        return 'app_extension';
    }
    
    public function getFunctions () {
        return array(
            new \Twig_SimpleFunction('print_subscribe_form', array($this, 'printSubscribeForm'), array('is_safe' => array('html'))),            
            new \Twig_SimpleFunction('newest_capses', array($this, 'newestCapses'), array('is_safe' => array('html'))),            
        );
    }
    
    public function printSubscribeForm () {
        
        $subscribeForm = $this->container->get('form.factory')
                ->createBuilder(new SubscriberType())
                ->setAction($this->router->generate('subscribe'))
                ->getForm();
        
        return $this->environment->render('AppBundle:Partials:subscribeForm.html.twig', array(
            'subscribeForm' => $subscribeForm->createView()
        ));
        
    }
    
    public function newestCapses ()
    {
        $capsRepo = $this->doctrine->getRepository('AppBundle:Cap');
        $newestCapses = $capsRepo->getNewestCaps(5);
        return $this->environment->render('AppBundle:Partials:newestCapses.html.twig', array(
            'capses' => $newestCapses
        ));
    }
    
}
