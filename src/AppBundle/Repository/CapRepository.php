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
    
    public function getUniqueQueryBuilder($params = array())
    {
        $qb = $this->createQueryBuilder('c')->select('c.name');
        
        if(!empty($params['orderBy'])) {
            $orderDir = !empty($params['orderDir']) ? $params['orderDir'] : null;
            $qb->orderBy($params['orderBy'], $orderDir);
        }
        
        if (!empty($params['searchKeyword'])) {
            $qb->andWhere('c.name LIKE :searchParam')
                    ->setParameter('searchParam', '%'.$params['searchKeyword'].'%');
        }
        
        $qb->distinct();
        
        return $qb;
    }


    public function getQueryBuilder($params = array())
    {
        $qb = $this->createQueryBuilder('c')
                ->select('c, b')
                ->leftJoin('c.brewery', 'b');
        
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
    
    public function getNewestCaps ($limit)
    {
        $searchResults = $this->findBy(array(), array('createDate' => 'DESC'), $limit);
        
        return $searchResults;        
    }
    
}
