<?php

namespace Application\Observer\Route;

use Arrow\Routing\Event\RouteEvent;
use Arrow\Http\Response\ResponseAwareInterface;
use Arrow\Http\Response\ResponseAwareTrait;

/**
 * Class NotFound
 *
 * @package Application\Observer\Route
 */
class NotFound implements ResponseAwareInterface
{

    use ResponseAwareTrait;

    /**
     * @param RouteEvent $event
     */
    public function onRoute(RouteEvent $event)
    {

        $this
            ->getResponse()
            ->setStatusCode(404);

    }

}