<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2016-11-17
 * Time: 20:16
 */

namespace AppBundle\Repository;

use Gedmo\Tree\Entity\Repository\NestedTreeRepository;

class PageRepository extends NestedTreeRepository
{

    public function getCustomQueryBuilder($params = array())
    {
        $qb = $this->createQueryBuilder('p')
            ->select('p');

        if (!empty($params['orderBy'])) {
            $orderDir = !empty($params['orderDir']) ? $params['orderDir'] : null;
            $qb->orderBy($params['orderBy'], $orderDir);
        }

        if (!empty($params['searchKeyword'])) {
            $qb->andWhere('p.name LIKE :searchParam')
                ->setParameter('searchParam', '%'.$params['searchKeyword'].'%');
        }

        return $qb;
    }

    public function getFlatArray()
    {

        $flatten = array();
        $arrayTree = $this->childrenHierarchy(null, false, array(), true);

        return $this->flatten($arrayTree);
    }

    private function flatten($elements, $parent = 0, $output = array())
    {
        foreach ($elements as $element) {
            $item = $element;
            $item['parent'] = $parent;
            unset($item['__children']);
            $output[$item['id']] = $item;
            if (isset($element['__children']) && is_array($element['__children'])) {
                $output = $this->flatten($element['__children'], $element['id'], $output);
            }
        }

        return $output;
    }

    private function getParentElements($allPages, $parent, $output = array())
    {
        while($parent != 0) {
            $output[] = $allPages[$parent];
            $parent = $allPages[$parent]['parent'];
            $this->getParentElements($allPages, $parent, $output);
        }
        return $output;
    }

    public function completePagination($pagination, $allPages)
    {
        $topElements = array();
        $firstElementLevel = (int)$pagination[0]['lvl'];
        if ($firstElementLevel > 0) {
            $topElements = $this->getParentElements($allPages, (int)$pagination[0]['parent']);
        }

        $topElements = array_reverse($topElements);

        return $topElements;
    }
}
