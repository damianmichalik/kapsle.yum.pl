<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2017-04-15
 * Time: 13:54
 */

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;
use AppBundle\Menu\Event\MenuBuilderEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class MainMenuBuilder
{
    const EVENT_NAME = 'app.menu.admin.main';

    /**
     * @var FactoryInterface
     */
    private $factory;

    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     * @param FactoryInterface $factory
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function __construct(FactoryInterface $factory, EventDispatcherInterface $eventDispatcher)
    {
        $this->factory = $factory;
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * @param array $options
     *
     * @return ItemInterface
     */
    public function createMenu(array $options)
    {
        $menu = $this->factory->createItem('root');
        $this->addMainMenu($menu);
        $this->eventDispatcher->dispatch(self::EVENT_NAME, new MenuBuilderEvent($this->factory, $menu));
        return $menu;
    }

    /**
     * @param ItemInterface $menu
     */
    private function addMainMenu(ItemInterface $menu)
    {
        $menu
            ->addChild('admin_homepage', array('route' => 'admin_homepage'))
            ->setLabel('Kokpit')
            ->setLabelAttribute('icon', 'glyphicon glyphicon-dashboard')
        ;
        $menu
            ->addChild('admin_caps_list', array('route' => 'admin_caps_list'))
            ->setLabel('Zarządzanie kapslami')
            ->setLabelAttribute('icon', 'glyphicon glyphicon-list')
        ;
        $menu
            ->addChild('admin_countries_list', array('route' => 'admin_countries_list'))
            ->setLabel('Zarządzanie krajami')
            ->setLabelAttribute('icon', 'glyphicon glyphicon-globe')
        ;
        $menu
            ->addChild('admin_breweries_list', array('route' => 'admin_breweries_list'))
            ->setLabel('Zarządzanie browarami')
            ->setLabelAttribute('icon', 'fa fa-beer')
        ;
        $menu
            ->addChild('admin_pages_list', array('route' => 'admin_pages_list'))
            ->setLabel('Zarządzanie stronami')
            ->setLabelAttribute('icon', 'fa fa-file-o')
        ;
        $menu
            ->addChild('admin_cache', array('route' => 'admin_cache'))
            ->setLabel('Zarządzanie cache\'m')
            ->setLabelAttribute('icon', 'fa fa-rocket')
        ;

        $gallery = $menu
            ->addChild('admin_gallery')
            ->setLabel('Galeria')
            ->setLabelAttribute('icon', 'fa fa-rocket')
        ;

        $gallery->setAttribute('dropdown', true);

        $gallery
            ->addChild('test1', array('route' => 'admin_cache'))
            ->setLabel('test1')
            ->setLabelAttribute('icon', 'fa fa-rocket')
        ;

        $gallery
            ->addChild('test2', array('route' => 'admin_cache'))
            ->setLabel('test2')
            ->setLabelAttribute('icon', 'fa fa-rocket')
        ;
    }
}