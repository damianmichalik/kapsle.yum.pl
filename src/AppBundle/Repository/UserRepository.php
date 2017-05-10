<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function getQueryBuilder($params = array())
    {
        $qb = $this->createQueryBuilder('u')
                ->select('u');

        if (!empty($params['orderBy'])) {
            $orderDir = !empty($params['orderDir']) ? $params['orderDir'] : null;
            $qb->orderBy($params['orderBy'], $orderDir);
        }

        if (!empty($params['searchKeyword'])) {
            $qb->andWhere('u.username LIKE :searchParam')
                    ->setParameter('searchParam', '%'.$params['searchKeyword'].'%');
        }

        return $qb;
    }
}
