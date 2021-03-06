<?php

namespace ContainerUoI7nl4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M04ylpvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.M04ylpv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.M04ylpv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'aboutRepository' => ['privates', 'App\\Repository\\AboutRepository', 'getAboutRepositoryService', true],
            'newsCategoryRepository' => ['privates', 'App\\Repository\\NewsCategoryRepository', 'getNewsCategoryRepositoryService', true],
            'newsRepository' => ['privates', 'App\\Repository\\NewsRepository', 'getNewsRepositoryService', true],
            'uploadBackgroundRepository' => ['privates', 'App\\Repository\\UploadBackgroundRepository', 'getUploadBackgroundRepositoryService', true],
        ], [
            'aboutRepository' => 'App\\Repository\\AboutRepository',
            'newsCategoryRepository' => 'App\\Repository\\NewsCategoryRepository',
            'newsRepository' => 'App\\Repository\\NewsRepository',
            'uploadBackgroundRepository' => 'App\\Repository\\UploadBackgroundRepository',
        ]);
    }
}
