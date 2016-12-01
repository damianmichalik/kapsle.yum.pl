<?php

namespace AdminBundle\Twig\Extension;

use AppBundle\Form\Type\SubscriberType;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AdminExtension extends \Twig_Extension
{

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
        return 'admin_extension';
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('str_repeat', array($this, 'strRepeat')),
        );
    }

    public function strRepeat($text, $number)
    {

        return str_repeat($text, $number);
    }
}
