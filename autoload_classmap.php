<?php
// Generated by ZF2's ./bin/classmap_generator.php
return array(
    'MamuzBlog\Controller\AbstractQueryControllerFactory' =>
        __DIR__ . '/src/MamuzBlog/Controller/AbstractQueryControllerFactory.php',
    'MamuzBlog\Controller\Plugin\AbstractPlugin'          =>
        __DIR__ . '/src/MamuzBlog/Controller/Plugin/AbstractPlugin.php',
    'MamuzBlog\Controller\Plugin\RouteParam'              =>
        __DIR__ . '/src/MamuzBlog/Controller/Plugin/RouteParam.php',
    'MamuzBlog\Controller\Plugin\ViewModelFactory'        =>
        __DIR__ . '/src/MamuzBlog/Controller/Plugin/ViewModelFactory.php',
    'MamuzBlog\Controller\PostQueryController'            =>
        __DIR__ . '/src/MamuzBlog/Controller/PostQueryController.php',
    'MamuzBlog\Controller\PostQueryControllerFactory'     =>
        __DIR__ . '/src/MamuzBlog/Controller/PostQueryControllerFactory.php',
    'MamuzBlog\Controller\TagQueryController'             =>
        __DIR__ . '/src/MamuzBlog/Controller/TagQueryController.php',
    'MamuzBlog\Controller\TagQueryControllerFactory'      =>
        __DIR__ . '/src/MamuzBlog/Controller/TagQueryControllerFactory.php',
    'MamuzBlog\Crypt\AdapterInterface'                    => __DIR__ . '/src/MamuzBlog/Crypt/AdapterInterface.php',
    'MamuzBlog\Crypt\HashIdAdapter'                       => __DIR__ . '/src/MamuzBlog/Crypt/HashIdAdapter.php',
    'MamuzBlog\Crypt\HashIdAdapterFactory'                => __DIR__ . '/src/MamuzBlog/Crypt/HashIdAdapterFactory.php',
    'MamuzBlog\DomainManager\Factory'                     => __DIR__ . '/src/MamuzBlog/DomainManager/Factory.php',
    'MamuzBlog\DomainManager\ProviderInterface'           =>
        __DIR__ . '/src/MamuzBlog/DomainManager/ProviderInterface.php',
    'MamuzBlog\Entity\Post'                               => __DIR__ . '/src/MamuzBlog/Entity/Post.php',
    'MamuzBlog\Entity\Tag'                                => __DIR__ . '/src/MamuzBlog/Entity/Tag.php',
    'MamuzBlog\EventManager\AwareTrait'                   => __DIR__ . '/src/MamuzBlog/EventManager/AwareTrait.php',
    'MamuzBlog\EventManager\Event'                        => __DIR__ . '/src/MamuzBlog/EventManager/Event.php',
    'MamuzBlog\Feature\Pageable'                          => __DIR__ . '/src/MamuzBlog/Feature/Pageable.php',
    'MamuzBlog\Feature\PostQueryInterface'                => __DIR__ . '/src/MamuzBlog/Feature/PostQueryInterface.php',
    'MamuzBlog\Feature\TagQueryInterface'                 => __DIR__ . '/src/MamuzBlog/Feature/TagQueryInterface.php',
    'MamuzBlog\Mapper\Db\AbstractQuery'                   => __DIR__ . '/src/MamuzBlog/Mapper/Db/AbstractQuery.php',
    'MamuzBlog\Mapper\Db\PostQuery'                       => __DIR__ . '/src/MamuzBlog/Mapper/Db/PostQuery.php',
    'MamuzBlog\Mapper\Db\TagQuery'                        => __DIR__ . '/src/MamuzBlog/Mapper/Db/TagQuery.php',
    'MamuzBlog\Module'                                    => __DIR__ . '/src/MamuzBlog/Module.php',
    'MamuzBlog\Options\Constraint'                        => __DIR__ . '/src/MamuzBlog/Options/Constraint.php',
    'MamuzBlog\Options\ConstraintInterface'               => __DIR__ . '/src/MamuzBlog/Options/ConstraintInterface.php',
    'MamuzBlog\Options\PaginationConfigProviderTrait'     =>
        __DIR__ . '/src/MamuzBlog/Options/PaginationConfigProviderTrait.php',
    'MamuzBlog\Options\Range'                             => __DIR__ . '/src/MamuzBlog/Options/Range.php',
    'MamuzBlog\Options\RangeInterface'                    => __DIR__ . '/src/MamuzBlog/Options/RangeInterface.php',
    'MamuzBlog\Service\AbstractQueryFactory'              =>
        __DIR__ . '/src/MamuzBlog/Service/AbstractQueryFactory.php',
    'MamuzBlog\Service\PostQuery'                         => __DIR__ . '/src/MamuzBlog/Service/PostQuery.php',
    'MamuzBlog\Service\PostQueryFactory'                  => __DIR__ . '/src/MamuzBlog/Service/PostQueryFactory.php',
    'MamuzBlog\Service\TagQuery'                          => __DIR__ . '/src/MamuzBlog/Service/TagQuery.php',
    'MamuzBlog\Service\TagQueryFactory'                   => __DIR__ . '/src/MamuzBlog/Service/TagQueryFactory.php',
    'MamuzBlog\View\Helper\AbstractHelper'                => __DIR__ . '/src/MamuzBlog/View/Helper/AbstractHelper.php',
    'MamuzBlog\View\Helper\AbstractPagerFactory'          =>
        __DIR__ . '/src/MamuzBlog/View/Helper/AbstractPagerFactory.php',
    'MamuzBlog\View\Helper\Anchor'                        => __DIR__ . '/src/MamuzBlog/View/Helper/Anchor.php',
    'MamuzBlog\View\Helper\AnchorFactory'         => __DIR__ . '/src/MamuzBlog/View/Helper/AnchorFactory.php',
    'MamuzBlog\View\Helper\AnchorBookmarkFactory' =>
        __DIR__ . '/src/MamuzBlog/View/Helper/AnchorBookmarkFactory.php',
    'MamuzBlog\View\Helper\HashId'                        => __DIR__ . '/src/MamuzBlog/View/Helper/HashId.php',
    'MamuzBlog\View\Helper\HashIdFactory'                 => __DIR__ . '/src/MamuzBlog/View/Helper/HashIdFactory.php',
    'MamuzBlog\View\Helper\Pager'                         => __DIR__ . '/src/MamuzBlog/View/Helper/Pager.php',
    'MamuzBlog\View\Helper\Panel'                         => __DIR__ . '/src/MamuzBlog/View/Helper/Panel.php',
    'MamuzBlog\View\Helper\PermaLink'             => __DIR__ . '/src/MamuzBlog/View/Helper/PermaLink.php',
    'MamuzBlog\View\Helper\PostMeta'                      => __DIR__ . '/src/MamuzBlog/View/Helper/PostMeta.php',
    'MamuzBlog\View\Helper\PostPagerFactory'              =>
        __DIR__ . '/src/MamuzBlog/View/Helper/PostPagerFactory.php',
    'MamuzBlog\View\Helper\PostPanel'                     => __DIR__ . '/src/MamuzBlog/View/Helper/PostPanel.php',
    'MamuzBlog\View\Helper\PostPanelShort'                => __DIR__ . '/src/MamuzBlog/View/Helper/PostPanelShort.php',
    'MamuzBlog\View\Helper\Slug'                          => __DIR__ . '/src/MamuzBlog/View/Helper/Slug.php',
    'MamuzBlog\View\Helper\SlugFactory'                   => __DIR__ . '/src/MamuzBlog/View/Helper/SlugFactory.php',
    'MamuzBlog\View\Helper\Tag'                           => __DIR__ . '/src/MamuzBlog/View/Helper/Tag.php',
    'MamuzBlog\View\Helper\TagAnchor'                     => __DIR__ . '/src/MamuzBlog/View/Helper/TagAnchor.php',
    'MamuzBlog\View\Helper\TagList'                       => __DIR__ . '/src/MamuzBlog/View/Helper/TagList.php',
    'MamuzBlog\View\Helper\TagListFactory'                => __DIR__ . '/src/MamuzBlog/View/Helper/TagListFactory.php',
    'MamuzBlog\View\Helper\TagPagerFactory'               => __DIR__ . '/src/MamuzBlog/View/Helper/TagPagerFactory.php',
    'MamuzBlog\View\Renderer\PhpRenderer'                 => __DIR__ . '/src/MamuzBlog/View/Renderer/PhpRenderer.php',
);
