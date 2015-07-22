<?php

namespace HelloWorld\Observer\Route\Service;

use Arrow\Service\FactoryInterface;
use Arrow\Service\Locator\ServiceLocatorInterface;
use HelloWorld\Observer\Route\Bye;

/**
 * Class ByeFactory
 *
 * @package Application\Observer\Route\Service
 */
class ByeFactory implements FactoryInterface
{

    /**
     * @inheritdoc
     */
    static public function create(ServiceLocatorInterface $serviceLocator)
    {

        $observer = new Bye();

        return $observer
            ->setRequest($serviceLocator->get('request'))
            ->setResponse($serviceLocator->get('response'));

    }

}