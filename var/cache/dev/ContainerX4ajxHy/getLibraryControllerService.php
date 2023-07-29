<?php

namespace ContainerX4ajxHy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLibraryControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LibraryController' shared autowired service.
     *
     * @return \App\Controller\LibraryController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LibraryController.php';

        $container->services['App\\Controller\\LibraryController'] = $instance = new \App\Controller\LibraryController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\LibraryController', $container));

        return $instance;
    }
}
