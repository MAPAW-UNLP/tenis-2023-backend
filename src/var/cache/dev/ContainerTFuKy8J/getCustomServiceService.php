<?php

namespace ContainerTFuKy8J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\CustomService' shared autowired service.
     *
     * @return \App\Service\CustomService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/CustomService.php';

        return $container->privates['App\\Service\\CustomService'] = new \App\Service\CustomService(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}