<?php

namespace OopsWorld\Observer\Route;

use Arrow\Routing\Event\RouteEvent;
use Exception;

/**
 * Class Oops
 *
 * @package OopsWorld\Observer\Route
 */
class Oops
{

    /**
     * @param RouteEvent $event
     * @throws \Exception
     */
    public function onRoute(RouteEvent $event)
    {

        throw new Exception('You should never have come here !!');

    }

}