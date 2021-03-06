<?php

namespace MamuzBlogTest\View\Helper;

use MamuzBlog\View\Helper\AnchorFactory;

class AnchorFactoryTest extends \PHPUnit_Framework_TestCase
{
    /** @var AnchorFactory */
    protected $fixture;

    protected function setUp()
    {
        $this->fixture = new AnchorFactory;
    }

    public function testImplementingFactoryInterface()
    {
        $this->assertInstanceOf('Zend\ServiceManager\FactoryInterface', $this->fixture);
    }

    public function testCreation()
    {
        $sm = \Mockery::mock('Zend\ServiceManager\ServiceLocatorInterface');
        $helper = $this->fixture->createService($sm);

        $this->assertInstanceOf('Zend\View\Helper\HelperInterface', $helper);
    }
}
