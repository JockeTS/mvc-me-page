<?php

namespace ContainerGxKI49u;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRootControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\RootController' shared autowired service.
     *
     * @return \App\Controller\RootController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/RootController.php';

        $container->services['App\\Controller\\RootController'] = $instance = new \App\Controller\RootController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\RootController', $container));

        return $instance;
    }
}
