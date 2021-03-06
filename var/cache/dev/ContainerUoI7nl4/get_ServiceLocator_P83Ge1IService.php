<?php

namespace ContainerUoI7nl4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_P83Ge1IService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.p83Ge1I' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.p83Ge1I'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'aboutRepository' => ['privates', 'App\\Repository\\AboutRepository', 'getAboutRepositoryService', true],
            'expertiseRepository' => ['privates', 'App\\Repository\\ExpertiseRepository', 'getExpertiseRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'newsCategoryRepository' => ['privates', 'App\\Repository\\NewsCategoryRepository', 'getNewsCategoryRepositoryService', true],
            'newsRepository' => ['privates', 'App\\Repository\\NewsRepository', 'getNewsRepositoryService', true],
            'uploadBackgroundRepository' => ['privates', 'App\\Repository\\UploadBackgroundRepository', 'getUploadBackgroundRepositoryService', true],
            'uploadCarrouselRepository' => ['privates', 'App\\Repository\\UploadCarrouselRepository', 'getUploadCarrouselRepositoryService', true],
        ], [
            'aboutRepository' => 'App\\Repository\\AboutRepository',
            'expertiseRepository' => 'App\\Repository\\ExpertiseRepository',
            'manager' => '?',
            'newsCategoryRepository' => 'App\\Repository\\NewsCategoryRepository',
            'newsRepository' => 'App\\Repository\\NewsRepository',
            'uploadBackgroundRepository' => 'App\\Repository\\UploadBackgroundRepository',
            'uploadCarrouselRepository' => 'App\\Repository\\UploadCarrouselRepository',
        ]);
    }
}
