<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CountryRepository extends EntityRepository {
    
    public function searchCaps ($searchName) {
        
        $searchResults = $this->createQueryBuilder('c')
            ->where('c.name LIKE :name')
            ->setParameter('name', '%'.$searchName.'%')
            ->getQuery()
            ->getArrayResult();
        
        return $searchResults;        
    }
    
    public function getQueryBuilder ($params = array())
    {
        $qb = $this->createQueryBuilder('c')
                ->select('c');
        
        if(!empty($params['orderBy'])) {
            $orderDir = !empty($params['orderDir']) ? $params['orderDir'] : null;
            $qb->orderBy($params['orderBy'], $orderDir);
        }
        
        if (!empty($params['searchKeyword'])) {
            $qb->andWhere('c.name LIKE :searchParam')
                    ->setParameter('searchParam', '%'.$params['searchKeyword'].'%');
        }
        
        return $qb;
    }

    public function getAllCountries ()
    {
        $qb = $this->createQueryBuilder('c')
            ->select('count(b.id) AS num_breweries, count(k.id) AS num_caps, c.name, c.slug')
            ->leftJoin('c.breweries', 'b')
            ->leftJoin('b.caps', 'k')
            ->groupBy('c.id')
            ->orderBy('c.name', 'ASC');

        return $qb->getQuery()->getArrayResult();
    }
    
}
