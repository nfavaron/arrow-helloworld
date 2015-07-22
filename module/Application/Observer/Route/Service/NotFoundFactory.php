<?php

namespace Application\Observer\Route\Service;

use Arrow\Service\FactoryInterface;
use Arrow\Service\Locator\ServiceLocatorInterface;
use Application\Observer\Route\NotFound;

/**
 * Class NotFoundFactory
 *
 * @package Application\Observer\Route\Service
 */
class NotFoundFactory implements FactoryInterface
{

    /**
     * @inheritdoc
     */
    static public function create(ServiceLocatorInterface $serviceLocator)
    {

        $observer = new NotFound();

        return $observer->setResponse($serviceLocator->get('response'));

    }

}