<?php

namespace ContainerHzD2wLc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVizControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\VizController' shared autowired service.
     *
     * @return \App\Controller\VizController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/VizController.php';

        $container->services['App\\Controller\\VizController'] = $instance = new \App\Controller\VizController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\VizController', $container));

        return $instance;
    }
}