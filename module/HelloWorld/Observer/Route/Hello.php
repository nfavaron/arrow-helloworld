<?php

namespace HelloWorld\Observer\Route;

use Arrow\Http\Response\Content\Json;
use Arrow\Routing\Event\RouteEvent;
use Arrow\Http\Response\ResponseAwareInterface;
use Arrow\Http\Response\ResponseAwareTrait;

/**
 * Class Hello
 *
 * @package HelloWorld\Observer\Route
 */
class Hello implements ResponseAwareInterface
{

    use ResponseAwareTrait;

    /**
     * @var string
     */
    protected $message = '';

    /**
     * Sets the message
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {

        $this->message = $message;

        return $this;

    }

    /**
     * Gets the message
     *
     * @return string
     * @throws \Exception
     */
    public function getMessage()
    {

        if (empty($this->message)) {
            throw new \Exception('The message is not defined.');
        }

        return $this->message;

    }

    /**
     * @param RouteEvent $event
     */
    public function onRoute(RouteEvent $event)
    {

        $content = new Json();
        $content->setJson(
            [
                'message' => sprintf(
                    $this->getMessage(),
                    $event->getRoute()->getParam('name')
                )
            ]
        );

        $this->getResponse()->setContent($content);

    }

}