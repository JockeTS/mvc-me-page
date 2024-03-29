<?php

namespace ContainerGxKI49u;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__JjkTYjService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator..JjkTYj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..JjkTYj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'chartBuilder' => ['privates', 'chartjs.builder', 'getChartjs_BuilderService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'indicatorRepository' => ['privates', 'App\\Repository\\IndicatorRepository', 'getIndicatorRepositoryService', true],
        ], [
            'chartBuilder' => '?',
            'doctrine' => '?',
            'indicatorRepository' => 'App\\Repository\\IndicatorRepository',
        ]);
    }
}
