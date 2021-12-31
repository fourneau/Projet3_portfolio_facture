<?php

namespace ContainerUoI7nl4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSmartUniqueNamer_ImagesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Vich\UploaderBundle\Naming\SmartUniqueNamer.images' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\SmartUniqueNamer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/NamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/SmartUniqueNamer.php';

        return $container->services['Vich\\UploaderBundle\\Naming\\SmartUniqueNamer.images'] = new \Vich\UploaderBundle\Naming\SmartUniqueNamer(($container->privates['Vich\\UploaderBundle\\Util\\Transliterator'] ?? $container->load('getTransliteratorService')));
    }
}
