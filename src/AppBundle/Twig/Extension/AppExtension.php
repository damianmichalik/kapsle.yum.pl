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
     * @var Router
     */
    protected $router;
    
    /**
    * Constructor
    * 
    * @param ContainerInterface $container
    */
    public function __construct(Registry $doctrine, $container, Router $router)
    {
        $this->container = $container;
        $this->doctrine = $doctrine;
        $this->router = $router;
    }
    
    public function getName() 
    {
        return 'app_extension';
    }
    
    public function getFunctions () 
    {
        return array(
            new \Twig_SimpleFunction('print_subscribe_form', 
                    array($this, 'printSubscribeForm'), 
                    array(
                        'is_safe' => array('html'),
                        'needs_environment' => true
                    )
            ),            
            new \Twig_SimpleFunction('newest_capses', 
                    array($this, 'newestCapses'), 
                    array(
                        'is_safe' => array('html'),
                        'needs_environment' => true
                    )
            ),            
            new \Twig_SimpleFunction('top_breweries', 
                    array($this, 'topBreweries'), 
                    array(
                        'is_safe' => array('html'),
                        'needs_environment' => true
                    )
            ),               
        );
    }
    
    public function printSubscribeForm (\Twig_Environment $env) 
    {
        
        $subscribeForm = $this->container->get('form.factory')
                ->createBuilder(new SubscriberType())
                ->setAction($this->router->generate('subscribe'))
                ->getForm();
        
        return $env->render('AppBundle:Partials:subscribeForm.html.twig', array(
            'subscribeForm' => $subscribeForm->createView()
        ));
        
    }
    
    public function newestCapses (\Twig_Environment $env)
    {
        $capsRepo = $this->doctrine->getRepository('AppBundle:Cap');
        $newestCapses = $capsRepo->getNewestCaps(5);
        return $env->render('AppBundle:Partials:newestCapses.html.twig', array(
            'capses' => $newestCapses
        ));
    }
    
    public function topBreweries (\Twig_Environment $env)
    {
        $breweriesRepo = $this->doctrine->getRepository('AppBundle:Brewery');
        $topBreweries = $breweriesRepo->getTopBreweries(5);
        return $env->render('AppBundle:Partials:topBreweries.html.twig', array(
            'breweries' => $topBreweries
        ));
    }
    
}
