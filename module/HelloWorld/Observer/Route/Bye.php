<?php

namespace HelloWorld\Observer\Route;

use Arrow\Routing\Event\RouteEvent;
use Arrow\Routing\RouteInterface;
use Arrow\Http\Response\ResponseAwareInterface;
use Arrow\Http\Response\ResponseAwareTrait;
use Arrow\Http\Request\RequestAwareInterface;
use Arrow\Http\Request\RequestAwareTrait;
use Arrow\Http\Response\Content\Html;

/**
 * Class Bye
 *
 * @package HelloWorld\Observer\Route
 */
class Bye implements ResponseAwareInterface, RequestAwareInterface
{

    use ResponseAwareTrait, RequestAwareTrait;

    /**
     * @param RouteEvent $event
     */
    public function onRoute(RouteEvent $event)
    {

        /**
         * @var RouteInterface $route
         * @var string         $html
         */
        $route = $event->getRoute();
        $html  = '';

        // Html
        $html .= sprintf(
            '<h1>Bye %s (%s)</h1>',
            $route->getParam('name'),
            $route->getParam('id')
        );

        $data = $this->getRequest()->getData();

        foreach ($data as $key => $value) {

            $html .= sprintf('<b>%s</b> => %s<br />', $key, $value);

        }

        // Content
        $content = new Html();
        $content->setHtml($html);

        // Response
        $this->getResponse()->setContent($content);

    }

}