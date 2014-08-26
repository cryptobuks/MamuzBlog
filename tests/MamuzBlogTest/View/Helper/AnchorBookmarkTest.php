<?php

namespace MamuzBlogTest\View\Helper;

use MamuzBlog\View\Helper\AnchorBookmark;

class AnchorBookmarkTest extends \PHPUnit_Framework_TestCase
{
    /** @var AnchorBookmark */
    protected $fixture;

    /** @var \Zend\View\Renderer\RendererInterface | \Mockery\MockInterface */
    protected $renderer;

    protected function setUp()
    {
        $this->renderer = \Mockery::mock('Zend\View\Renderer\RendererInterface');
        $this->renderer->shouldReceive('translate')->with('title')->andReturn('_title_');
        $this->renderer->shouldReceive('escapeHtmlAttr')->with('_title_')->andReturn('title');

        $this->fixture = new AnchorBookmark;
        $this->fixture->setView($this->renderer);
    }

    public function testExtendingAbstractHelper()
    {
        $this->assertInstanceOf('MamuzBlog\View\Helper\AbstractHelper', $this->fixture);
        $this->assertInstanceOf('Zend\View\Helper\AbstractHelper', $this->fixture);
    }

    public function testRender()
    {
        $html = $this->fixture->render('url', 'title', 'content');

        $this->assertSame(
            '<a title="title" href="url" rel="bookmark">content</a>',
            $html
        );

        $invoke = $this->fixture;
        $html = $invoke('url', 'title', 'content');

        $this->assertSame(
            '<a title="title" href="url" rel="bookmark">content</a>',
            $html
        );
    }

    public function testRenderWithClass()
    {
        $html = $this->fixture->render('url', 'title', 'content', 'class');

        $this->assertSame(
            '<a title="title" href="url" rel="bookmark" class="class">content</a>',
            $html
        );

        $invoke = $this->fixture;
        $html = $invoke('url', 'title', 'content', 'class');

        $this->assertSame(
            '<a title="title" href="url" rel="bookmark" class="class">content</a>',
            $html
        );
    }
}
