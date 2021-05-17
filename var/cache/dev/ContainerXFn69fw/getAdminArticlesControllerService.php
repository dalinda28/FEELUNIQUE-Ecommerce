<?php

namespace ContainerXFn69fw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminArticlesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\AdminArticlesController' shared autowired service.
     *
     * @return \App\Controller\Admin\AdminArticlesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/AdminArticlesController.php';

        $container->services['App\\Controller\\Admin\\AdminArticlesController'] = $instance = new \App\Controller\Admin\AdminArticlesController(($container->privates['App\\Repository\\ArticleRepository'] ?? $container->load('getArticleRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\Admin\\AdminArticlesController', $container));

        return $instance;
    }
}