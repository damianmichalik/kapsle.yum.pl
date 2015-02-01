<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Entity\Cap;

class CapsFixtures extends AbstractFixture implements OrderedFixtureInterface {
    
    public function load(ObjectManager $manager) {
        
        $capsArray = array(
            array(
                'name' => 'Kapsel 1'
            ),
            array(
                'name' => 'Kapsel 2'
            ),
            array(
                'name' => 'Kapsel 3'
            ),
            array(
                'name' => 'Kapsel 4'
            ),
            array(
                'name' => 'Kapsel 5'
            ),
            array(
                'name' => 'Kapsel 5'
            )
        );
        
        foreach($capsArray as $item) {
            $cap = new Cap();
            $cap->setName($item['name']);
            $cap->setCreateDate(new \DateTime());
            $manager->persist($cap);
        }
        
        $manager->flush();                
        
    }

    public function getOrder() {
        return 0;
    }
    
}
