<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2017-04-21
 * Time: 20:22
 */

namespace DM\TestBundle\Menu;

use AppBundle\Menu\Event\MenuBuilderEvent;

class MainMenuListener
{
    /**
     * @param MenuBuilderEvent $event
     */
    public function addMenuItems(MenuBuilderEvent $event)
    {
        $menu = $event->getMenu();

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