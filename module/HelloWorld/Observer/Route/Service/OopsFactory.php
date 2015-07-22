<?php

namespace HelloWorld\Observer\Route\Service;

use Arrow\Service\FactoryInterface;
use Arrow\Service\Locator\ServiceLocatorInterface;
use HelloWorld\Observer\Route\Oops;

/**
 * Class OopsFactory
 *
 * @package Application\Observer\Route\Service
 */
class OopsFactory implements FactoryInterface
{

    /**
     * @inheritdoc
     */
    static public function create(ServiceLocatorInterface $serviceLocator)
    {

        $observer = new Oops();

        return $observer
            ->setRequest($serviceLocator->get('request'))
            ->setResponse($serviceLocator->get('response'));

    }

}