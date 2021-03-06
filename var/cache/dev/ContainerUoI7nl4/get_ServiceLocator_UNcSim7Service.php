<?php

namespace ContainerUoI7nl4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UNcSim7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UNcSim7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UNcSim7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'legalMentionRepository' => ['privates', 'App\\Repository\\LegalMentionRepository', 'getLegalMentionRepositoryService', true],
            'uploadBackgroundRepository' => ['privates', 'App\\Repository\\UploadBackgroundRepository', 'getUploadBackgroundRepositoryService', true],
        ], [
            'legalMentionRepository' => 'App\\Repository\\LegalMentionRepository',
            'uploadBackgroundRepository' => 'App\\Repository\\UploadBackgroundRepository',
        ]);
    }
}
