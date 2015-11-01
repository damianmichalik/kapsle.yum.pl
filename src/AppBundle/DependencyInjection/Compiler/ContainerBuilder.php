<?php

namespace AppBundle\DependencyInjection\Compiler;

use Doctrine\Bundle\DoctrineBundle\ConnectionFactory;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Doctrine\DBAL\Query\QueryBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Bridge\ProxyManager\LazyProxy\Instantiator\RuntimeInstantiator;

use Symfony\Component\DependencyInjection\ContainerBuilder as BaseContainerBuilder;

class ContainerBuilder extends BaseContainerBuilder
{
    /**
     * @var Connection
     */
    protected $databaseConnection;

    /**
     * Constructor
     *
     * @param ParameterBagInterface $parameterBag
     */
    public function __construct(ParameterBagInterface $parameterBag = null)
    {
        parent::__construct($parameterBag);

        if (class_exists('ProxyManager\Configuration')) {
            $this->setProxyInstantiator(new RuntimeInstantiator());
        }
    }

    /**
     * Compiles the container.
     *
     * This method adds parameters and configs from the database before calling compiler passes
     */
    public function compile()
    {
        try {
            $this->initConnection();
            $this->addDbParameters();
            $this->closeConnection();
        } catch (\PDOException $e) {
            parent::compile();
            return;
        }

        parent::compile();
    }

    /**
     * Initializes the database connection
     */
    protected function initConnection()
    {
        $configs = $this->getExtensionConfig('doctrine');

        $mergedConfig = array();
        foreach ($configs as $config) {
            $mergedConfig = array_merge($mergedConfig, $config);
        }

        $mergedConfig = $this->getParameterBag()->resolveValue($mergedConfig);

        $params = $mergedConfig['dbal'];

        if (array_key_exists('connections', $params)) {
            $defaultEntityManager = $mergedConfig['orm']['default_entity_manager'];
            $defaultConnection = $mergedConfig['entity_managers'][$defaultEntityManager]['connection'];
            $params = $params['connections'][$defaultConnection];
        }

        $connection_factory = new ConnectionFactory(array());
        $this->databaseConnection = $connection_factory->createConnection($params);
        $this->databaseConnection->connect();
    }

    /**
     * Closes the database connection
     */
    protected function closeConnection()
    {
        if ($this->databaseConnection->isConnected()) {
            $this->databaseConnection->close();
        }
    }

    /**
     * Check if a given table name exist in the database
     *
     * @param string $table
     *
     * @return bool
     */
    protected function checkTableExist($table)
    {
        $queryBuilder = $this->databaseConnection->createQueryBuilder();
        $queryBuilder->select('*');
        $queryBuilder->from($table, 't');

        try {
            $this->databaseConnection->query($queryBuilder);
        } catch (DBALException $e) {
            return false;
        }

        return true;
    }

    /**
     * Returns the query used to get parameters from the database
     *
     * @return QueryBuilder
     */
    protected function createParametersQuery()
    {
        $queryBuilder = $this->databaseConnection->createQueryBuilder();

        $queryBuilder
            ->select('c.key, c.value')
            ->from('configuration', 'c');

        return $queryBuilder;
    }

    /**
     * Adds the parameters from the database to the container's parameterBag
     */
    protected function addDbParameters()
    {
        if (false === $this->checkTableExist('configuration')) {
            return;
        }

        $query = $this->databaseConnection->query($this->createParametersQuery());

        while (false !== $result = $query->fetchObject()) {
            $this->setParameter($result->key, $result->value);
        }
    }

}
