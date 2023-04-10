<?php

namespace ContainerCz0XWt7;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_TwigComponent_EventListener_DataModelPropsSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.twig_component.event_listener.data_model_props_subscriber' shared service.
     *
     * @return \Symfony\UX\TwigComponent\EventListener\DataModelPropsSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DataModelPropsSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ComponentStack.php';

        return $container->privates['ux.twig_component.event_listener.data_model_props_subscriber'] = new \Symfony\UX\TwigComponent\EventListener\DataModelPropsSubscriber(($container->privates['ux.twig_component.component_stack'] ??= new \Symfony\UX\TwigComponent\ComponentStack()), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')));
    }
}
