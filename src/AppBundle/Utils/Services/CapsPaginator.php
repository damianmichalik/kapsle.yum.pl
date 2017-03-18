<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2017-03-18
 * Time: 09:40
 */

namespace AppBundle\Utils\Services;

use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;
use Knp\Component\Pager\Paginator;

class CapsPaginator
{
    /**
     * @var Doctrine
     */
    protected $doctrine;

    /**
     * @var Paginator
     */
    protected $paginator;

    public function __construct(Doctrine $doctrine, Paginator $paginator)
    {
        $this->doctrine = $doctrine;
        $this->paginator = $paginator;
    }

    public function getPaginatedCaps(array $params = array(), $page = 1, $limit = 10)
    {
        $capsRepo = $this->doctrine->getRepository('AppBundle:Cap');

        $caps = $capsRepo->getQueryBuilder($params);

        $pagination = $this->paginator->paginate($caps, $page, $limit);

        return $pagination;
    }
}