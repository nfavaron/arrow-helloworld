<?php

namespace Application\Service;

use Arrow\Service\Locator\ServiceLocatorInterface;
use Arrow\Service\Locator\ServiceLocator;

/**
 * Class ServiceLocatorFactory
 *
 * @package Application\Service
 */
class ServiceLocatorFactory
{

    /**
     * Creates the service locator instance and registers a list of services in $config
     *
     * @param array $config
     * @return ServiceLocatorInterface
     */
    static public function create(array $config)
    {

        $serviceLocator = new ServiceLocator();

        // For each service
        foreach ($config['services'] as $serviceName => $namespace) {

            // Singleton instance (by default)
            $isSingleton = true;

            // Multi instance
            if (substr($namespace, 0, 1) === '+') {

                $isSingleton = false;
                $namespace   = substr($namespace, 1);

            }

            // Add service
            $serviceLocator->add($serviceName, $namespace, $isSingleton);

        }

        return $serviceLocator;

    }

}