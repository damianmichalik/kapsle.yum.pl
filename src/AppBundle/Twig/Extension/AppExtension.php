<?php

namespace AppBundle\Twig\Extension;

use AppBundle\Form\SubscriberType;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use AppBundle\Utils\Shortcode\ShortcodeChain;

class AppExtension extends \Twig_Extension
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
     * @var ShortcodeChain
     */
    protected $shortcodeChain;

    /**
    * Constructor
    *
    * @param ContainerInterface $container
    */
    public function __construct(Registry $doctrine, $container, Router $router, ShortcodeChain $shortcodeChain)
    {
        $this->container = $container;
        $this->doctrine = $doctrine;
        $this->router = $router;
        $this->shortcodeChain = $shortcodeChain;
    }

    public function getName()
    {
        return 'app_extension';
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('str_repeat', array($this, 'strRepeat')),
            new \Twig_SimpleFilter('appp_shortcode', array($this, 'doShortcode')),
        );
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction(
                'print_subscribe_form',
                array($this, 'printSubscribeForm'),
                array(
                    'is_safe' => array('html'),
                    'needs_environment' => true,
                )
            ),
            new \Twig_SimpleFunction(
                'newest_capses',
                array($this, 'newestCapses'),
                array(
                    'is_safe' => array('html'),
                    'needs_environment' => true,
                )
            ),
            new \Twig_SimpleFunction(
                'top_breweries',
                array($this, 'topBreweries'),
                array(
                    'is_safe' => array('html'),
                    'needs_environment' => true,
                )
            ),
            new \Twig_SimpleFunction(
                'get_html_tree',
                array($this, 'getHtmlTree'),
                array(
                    'is_safe' => array('html'),
                    'needs_environment' => true,
                )
            ),
        );
    }

    public function getHtmlTree(\Twig_Environment $env)
    {
        $repo = $this->doctrine->getRepository('AppBundle:Page');

        $htmlTree = $repo->childrenHierarchy(null, false, array(
            'decorate' => true,
            'rootOpen' => function ($tree) {
                if (count($tree) && ($tree[0]['lvl'] == 0)) {
                    return '';
                } else {
                    return '<ul>';
                }
            },
            'rootClose' => function ($child) {
                if (count($child) && ($child[0]['lvl'] == 0)) {
                    return '';
                } else {
                    return '</ul>';
                }
            },
            'childOpen' => '<li>',
            'childClose' => '</li>',
            'nodeDecorator' => function ($node) {
                return '<a href="/page/'.$node['slug'].'">'.$node['name'].'</a>';
            },
        ));

        return $htmlTree;
    }

    public function printSubscribeForm(\Twig_Environment $env)
    {

        $subscribeForm = $this->container->get('form.factory')
                ->createBuilder(new SubscriberType())
                ->setAction($this->router->generate('subscribe'))
                ->getForm();

        return $env->render('Frontend/Partials/subscribeForm.html.twig', array(
            'subscribeForm' => $subscribeForm->createView(),
        ));
    }

    public function newestCapses(\Twig_Environment $env)
    {
        $capsRepo = $this->doctrine->getRepository('AppBundle:Cap');
        $newestCapses = $capsRepo->getNewestCaps(5);

        return $env->render('Frontend/Partials/newestCapses.html.twig', array(
            'capses' => $newestCapses,
        ));
    }

    public function topBreweries(\Twig_Environment $env)
    {
        $breweriesRepo = $this->doctrine->getRepository('AppBundle:Brewery');
        $topBreweries = $breweriesRepo->getTopBreweries(5);

        return $env->render('Frontend/Partials/topBreweries.html.twig', array(
            'breweries' => $topBreweries,
        ));
    }

    /**
     * @param string $content Content to search for shortcodes
     *
     * @return string Content with shortcodes filtered out.
     */
    public function doShortcode($content)
    {
        return $this->shortcodeChain->process($content);
    }

    public function strRepeat($text, $number)
    {
        return str_repeat($text, $number);
    }
}
