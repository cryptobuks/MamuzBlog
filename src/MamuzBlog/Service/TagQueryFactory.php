<?php

namespace MamuzBlog\Service;

use MamuzBlog\Mapper\Db\TagQuery as TagQueryMapper;
use MamuzBlog\Options\Range;
use Zend\ServiceManager\ServiceLocatorInterface;

class TagQueryFactory extends AbstractQueryFactory
{
    /**
     * {@inheritdoc}
     * @return \MamuzBlog\Feature\TagQueryInterface
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var \Doctrine\ORM\EntityManagerInterface $entityManager */
        $entityManager = $serviceLocator->get('Doctrine\ORM\EntityManager');
        $rangeConfig = $this->getPaginationRangeConfigBy($serviceLocator);

        $queryMapper = new TagQueryMapper($entityManager, new Range($rangeConfig['tag']));
        $queryService = new TagQuery($queryMapper);

        return $queryService;
    }
}
