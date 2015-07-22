<?php

namespace Application\Observer\Application;

use Arrow\Application\Event\ExceptionEvent;
use Arrow\Http\Response\ResponseAwareInterface;
use Arrow\Http\Response\ResponseAwareTrait;
use Arrow\Http\Response\Content\Json;

/**
 * Class Exception
 *
 * @package Application\Observer\Application
 */
class Exception implements ResponseAwareInterface
{

    use ResponseAwareTrait;

    /**
     * @param ExceptionEvent $event
     */
    public function onException(ExceptionEvent $event)
    {

        $exception = $event->getException();

        $content = new Json();
        $content->setJson([
            'file' => str_replace(APP_ROOT_PATH, '', $exception->getFile()),
            'line' => $exception->getLine(),
            'message' => $exception->getMessage()
        ]);

        $this
            ->getResponse()
            ->setStatusCode(500)
            ->setContent($content);

    }

}