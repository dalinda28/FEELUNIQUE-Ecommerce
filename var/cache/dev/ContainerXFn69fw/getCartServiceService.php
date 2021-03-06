<?php

namespace ContainerXFn69fw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\Cart\CartService' shared autowired service.
     *
     * @return \App\Service\Cart\CartService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/Cart/CartService.php';

        return $container->privates['App\\Service\\Cart\\CartService'] = new \App\Service\Cart\CartService(($container->services['session'] ?? $container->load('getSessionService')), ($container->privates['App\\Repository\\ArticleRepository'] ?? $container->load('getArticleRepositoryService')));
    }
}
