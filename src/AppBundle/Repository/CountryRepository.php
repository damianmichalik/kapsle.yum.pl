<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CountryRepository extends EntityRepository
{

    public function searchCaps($searchName)
    {
        $searchResults = $this->createQueryBuilder('c')
            ->where('c.name LIKE :name')
            ->setParameter('name', '%'.$searchName.'%')
            ->getQuery()
            ->getArrayResult();

        return $searchResults;
    }

    public function getQueryBuilder($params = array())
    {
        $qb = $this->createQueryBuilder('c')
                ->select('c');

        if (!empty($params['orderBy'])) {
            $orderDir = !empty($params['orderDir']) ? $params['orderDir'] : null;
            $qb->orderBy($params['orderBy'], $orderDir);
        }

        if (!empty($params['searchKeyword'])) {
            $qb->andWhere('c.name LIKE :searchParam')
                    ->setParameter('searchParam', '%'.$params['searchKeyword'].'%');
        }

        return $qb;
    }

    public function getAllCountries()
    {
        $results = array();

        $qb = $this->createQueryBuilder('c')
            ->select('c.id, count(k.id) AS num_caps, c.name, c.slug')
            ->leftJoin('c.breweries', 'b')
            ->leftJoin('b.caps', 'k')
            ->groupBy('c.id')
            ->orderBy('c.name', 'ASC');

        $results1 = $qb->getQuery()->getArrayResult();

        foreach($results1 as $result) {
            $results[$result['id']] = $result;
        }

        $qb = $this->createQueryBuilder('c')
            ->select('c.id, count(b.id) AS num_breweries, c.name, c.slug')
            ->leftJoin('c.breweries', 'b')
            ->groupBy('c.id')
            ->orderBy('c.name', 'ASC');

        $results2 = $qb->getQuery()->getArrayResult();

        foreach($results2 as $result) {
            if (array_key_exists($result['id'], $results)) {
                $results[$result['id']]['num_breweries'] = $result['num_breweries'];
            }
        }

        return $results;
    }
}
