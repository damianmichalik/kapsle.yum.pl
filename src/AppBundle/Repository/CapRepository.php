<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CapRepository extends EntityRepository {
    
    public function searchCaps ($searchName) {
        
        $searchResults = $this->createQueryBuilder('c')
            ->where('c.name LIKE :name')
            ->setParameter('name', '%'.$searchName.'%')
            ->getQuery()
            ->getArrayResult();
        
        return $searchResults;        
    }
    
}
