<?php

namespace Application\Observer\Route\Service;

use Arrow\Service\FactoryInterface;
use Arrow\Service\Locator\ServiceLocatorInterface;
use Application\Observer\Route\Home;

/**
 * Class HomeFactory
 *
 * @package Application\Observer\Route\Service
 */
class HomeFactory implements FactoryInterface
{

    /**
     * @inheritdoc
     */
    static public function create(ServiceLocatorInterface $serviceLocator)
    {

        $observer = new Home();

        return $observer->setResponse($serviceLocator->get('response'));

    }

}