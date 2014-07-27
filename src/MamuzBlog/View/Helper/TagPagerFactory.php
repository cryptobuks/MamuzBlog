<?php

namespace MamuzBlog\View\Helper;

use MamuzBlog\Options\PaginationConfigAccessTrait;
use MamuzBlog\Options\Range;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\ServiceManager;

class TagPagerFactory implements FactoryInterface
{
    use PaginationConfigAccessTrait;

    /**
     * {@inheritdoc}
     * @return \Zend\View\Helper\HelperInterface
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        if ($serviceLocator instanceof ServiceLocatorAwareInterface) {
            $serviceLocator = $serviceLocator->getServiceLocator();
        }

        $rangeConfig = $this->getPaginationRangeConfigBy($serviceLocator);
        $range = new Range($rangeConfig['tag']);

        return new Pager($range, 'blogTags', 'page');
    }
}
