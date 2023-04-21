<?php

namespace ContainerSaDDucp;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BSHWg5IService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BSHWg5I' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BSHWg5I'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'rep' => ['privates', 'App\\Repository\\ContenidoRepository', 'getContenidoRepositoryService', true],
        ], [
            'rep' => 'App\\Repository\\ContenidoRepository',
        ]);
    }
}
