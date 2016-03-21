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
    
    public function getTopBreweries ($limit)
    {
        $searchResults = $this->createQueryBuilder('b')
            ->select('count(c.id) AS num_caps, b.name, b.slug')
            ->leftJoin('b.caps', 'c')
            ->groupBy('b.id')
            ->orderBy('num_caps', 'DESC')      
            ->setMaxResults($limit)
            ->getQuery()            
            ->getArrayResult();
        
        return $searchResults;        
    }
    
    public function getBreweriesQueryBuilder ()
    {
        $qb = $this->createQueryBuilder('b')
            ->select('count(c.id) AS num_caps, b.name, b.slug, b.city, l.name AS country')
            ->leftJoin('b.caps', 'c')
            ->leftJoin('b.country', 'l')
            ->groupBy('b.id')
            ->orderBy('b.name', 'ASC');
        
        return $qb;        
    }
    
}
