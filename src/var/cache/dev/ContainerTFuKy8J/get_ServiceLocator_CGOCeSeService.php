<?php

namespace ContainerTFuKy8J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CGOCeSeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CGOCeSe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CGOCeSe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'passwordEncoder' => ['services', '.container.private.security.password_encoder', 'get_Container_Private_Security_PasswordEncoderService', true],
        ], [
            'doctrine' => '?',
            'entityManager' => '?',
            'passwordEncoder' => '?',
        ]);
    }
}
