<?php

namespace Application\Observer\Application\Service;

use Arrow\Service\FactoryInterface;
use Arrow\Service\Locator\ServiceLocatorInterface;
use Application\Observer\Application\Exception;

/**
 * Class ExceptionFactory
 *
 * @package Application\Observer\Application\Service
 */
class ExceptionFactory implements FactoryInterface
{

    /**
     * @inheritdoc
     */
    static public function create(ServiceLocatorInterface $serviceLocator)
    {

        $observer = new Exception();

        return $observer->setResponse($serviceLocator->get('response'));

    }

}