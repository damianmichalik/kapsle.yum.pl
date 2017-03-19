<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CapRepository extends EntityRepository
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

    public function getUniqueQueryBuilder($params = array())
    {
        $qb = $this->createQueryBuilder('c')->select('c.name');

        if (!empty($params['orderBy'])) {
            $orderDir = !empty($params['orderDir']) ? $params['orderDir'] : null;
            $qb->orderBy($params['orderBy'], $orderDir);
        }

        if (!empty($params['searchKeyword'])) {
            $qb->andWhere('c.name LIKE :searchParam')
                    ->setParameter('searchParam', '%'.$params['searchKeyword'].'%');
        }

        $qb->andWhere('c.publishedAt IS NULL OR c.publishedAt >= :now')
            ->setParameter('now', new \DateTime());

        $qb->distinct();

        return $qb;
    }

    public function getBackendQueryBuilder($params = array())
    {
        $qb = $this->createQueryBuilder('c')
            ->select('c, b, t')
            ->leftJoin('c.brewery', 'b')
            ->leftJoin('c.tags', 't');

        if (!empty($params['orderBy'])) {
            $orderDir = !empty($params['orderDir']) ? $params['orderDir'] : null;
            $qb->orderBy($params['orderBy'], $orderDir);
        }

        if (!empty($params['searchKeyword'])) {
            $qb->andWhere('c.name LIKE :searchParam')
                ->setParameter('searchParam', '%'.$params['searchKeyword'].'%');
        }

        if(!empty($params['tagSlug'])){
            $qb->andWhere('t.slug = :tagSlug')
                ->setParameter('tagSlug', $params['tagSlug']);
        }

        return $qb;
    }

    public function getQueryBuilder($params = array())
    {
        $qb = $this->getBackendQueryBuilder($params);

        $qb->andWhere('c.publishedAt IS NULL OR c.publishedAt >= :now')
            ->setParameter('now', new \DateTime());

        return $qb;
    }

    public function getNewestCaps($limit)
    {
        $searchResults = $this->getQueryBuilder(array(
            'orderBy' => 'c.createDate',
            'orderDir' => 'DESC',
        ));

        $searchResults->setMaxResults($limit);

        return $searchResults->getQuery()->getResult();
    }

    public function getCapsInBrewery($breweryId, $excludeId = 0)
    {
        $searchResults = $this->createQueryBuilder('c')->select('c');

        if ($excludeId != 0) {
            $searchResults->where('c.brewery = :brewery AND c.id <> :id')
                ->setParameter('id', $excludeId)
                ->setParameter('brewery', $breweryId);
        } else {
            $searchResults->where('c.brewery = :brewery')
                    ->setParameter('brewery', $breweryId);
        }

        $searchResults->andWhere('c.publishedAt IS NULL OR c.publishedAt >= :now')
            ->setParameter('now', new \DateTime());

        return $searchResults->getQuery()->getResult();
    }

    public function getMaxViewsByCap($capId)
    {
        $qb = $this->createQueryBuilder('c')
            ->select('MAX(t.views)')
            ->leftJoin('c.tags', 't')
            ->where('c.id = :cid')
            ->setParameter('cid', $capId);

        return $qb->getQuery()->getSingleScalarResult();
    }
}
