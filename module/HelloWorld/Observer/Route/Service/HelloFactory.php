<?php

namespace HelloWorld\Observer\Route\Service;

use Arrow\Service\FactoryInterface;
use Arrow\Service\Locator\ServiceLocatorInterface;
use HelloWorld\Observer\Route\Hello;
use Arrow\Config\ConfigManagerInterface;

/**
 * Class HelloFactory
 *
 * @package Application\Observer\Route\Service
 */
class HelloFactory implements FactoryInterface
{

    /**
     * @inheritdoc
     */
    static public function create(ServiceLocatorInterface $serviceLocator)
    {

        /**
         * @var ConfigManagerInterface $configManager
         */
        $configManager = $serviceLocator->get('config-manager');
        $observer      = new Hello();

        return $observer
            ->setResponse($serviceLocator->get('response'))
            ->setMessage($configManager->get('settings')['helloworld']['message']);

    }

}