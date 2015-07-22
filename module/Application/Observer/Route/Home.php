<?php

namespace Application\Observer\Route;

use Arrow\Http\Response\Content\Html;
use Arrow\Routing\Event\RouteEvent;
use Arrow\Http\Response\ResponseAwareInterface;
use Arrow\Http\Response\ResponseAwareTrait;

/**
 * Class Home
 *
 * @package Application\Observer\Route
 */
class Home implements ResponseAwareInterface
{

    use ResponseAwareTrait;

    /**
     * @param RouteEvent $event
     */
    public function onRoute(RouteEvent $event)
    {

        $content = new Html();
        $content->setHtml(
            '<h1>Welcome on Arrow Framework!</h1>'
            .'<ul>'
            .'<li><a href="/hello/nicolas">With route params</a></li>'
            .'<li><a href="/bye/nicolas/1337?we=will&miss=you">With request params</a></li>'
            .'<li><a href="/cantfindthat">Error 404</a> (check the response headers)</li>'
            .'<li><a href="/oops">Error 500</a> (check the response headers)</li>'
            .'</ul>'
        );

        $this->getResponse()->setContent($content);

    }

}