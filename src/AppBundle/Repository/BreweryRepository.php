<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class BreweryRepository extends EntityRepository {
    
    public function searchCaps ($searchName) {
        
        $searchResults = $this->createQueryBuilder('b')
            ->where('b.name LIKE :name')
            ->setParameter('name', '%'.$searchName.'%')
            ->getQuery()
            ->getArrayResult();
        
        return $searchResults;        
    }
    
    public function getQueryBuilder ($params = array())
    {
        $qb = $this->createQueryBuilder('b')
                ->select('b');
        
        if(!empty($params['orderBy'])) {
            $orderDir = !empty($params['orderDir']) ? $params['orderDir'] : null;
            $qb->orderBy($params['orderBy'], $orderDir);
        }
        
        if (!empty($params['searchKeyword'])) {
            $qb->andWhere('b.name LIKE :searchParam')
                    ->setParameter('searchParam', '%'.$params['searchKeyword'].'%');
        }
        
        return $qb;
    }
    
}
