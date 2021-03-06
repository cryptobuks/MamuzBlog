<?php

namespace MamuzBlogTest\View\Helper;

use MamuzBlog\View\Helper\PermaLinkTag;

class PermaLinkTagTest extends \PHPUnit_Framework_TestCase
{
    /** @var PermaLinkTag */
    protected $fixture;

    /** @var \Zend\View\Renderer\RendererInterface | \Mockery\MockInterface */
    protected $renderer;

    protected function setUp()
    {
        $this->renderer = \Mockery::mock('Zend\View\Renderer\RendererInterface');
        $this->renderer->shouldReceive('serverUrl')->andReturn('server_');

        $this->fixture = new PermaLinkTag;
        $this->fixture->setView($this->renderer);
    }

    public function testExtendingAbstractHelper()
    {
        $this->assertInstanceOf('MamuzBlog\View\Helper\AbstractHelper', $this->fixture);
    }

    public function testRender()
    {
        $this->renderer->shouldReceive('url')->with(
            'blogPublishedPosts',
            array('tag' => 'tagname')
        )->andReturn('url');
        $permaLink = $this->fixture->render('tagname');

        $this->assertSame('server_url', $permaLink);

        $invoke = $this->fixture;
        $permaLink = $invoke('tagname');
        $this->assertSame('server_url', $permaLink);
    }

    public function testRenderWithoutTagName()
    {
        $this->renderer->shouldReceive('url')->with(
            'blogPublishedPosts',
            array('tag' => null)
        )->andReturn('url');
        $permaLink = $this->fixture->render();

        $this->assertSame('server_url', $permaLink);

        $invoke = $this->fixture;
        $permaLink = $invoke();
        $this->assertSame('server_url', $permaLink);
    }
}
