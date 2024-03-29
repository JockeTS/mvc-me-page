<?php

namespace ContainerGxKI49u;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Normalizer_ObjectService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'serializer.normalizer.object' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\ObjectNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ObjectToPopulateTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/AbstractNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/AbstractObjectNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ObjectNormalizer.php';

        $a = ($container->privates['property_info'] ?? $container->getPropertyInfoService());

        if (isset($container->privates['serializer.normalizer.object'])) {
            return $container->privates['serializer.normalizer.object'];
        }

        return $container->privates['serializer.normalizer.object'] = new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer(($container->privates['serializer.mapping.class_metadata_factory'] ?? $container->load('getSerializer_Mapping_ClassMetadataFactoryService')), ($container->privates['serializer.name_converter.metadata_aware'] ?? $container->load('getSerializer_NameConverter_MetadataAwareService')), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')), $a, ($container->privates['serializer.mapping.class_discriminator_resolver'] ?? $container->load('getSerializer_Mapping_ClassDiscriminatorResolverService')), NULL);
    }
}
