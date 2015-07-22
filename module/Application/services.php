<?php

return [
    'application'                                => 'Arrow\Application\Service\ApplicationFactory',
    'config-manager'                             => 'Arrow\Config\Service\ConfigManagerFactory',
    'event-manager'                              => '+Arrow\Event\Manager\Service\EventManagerFactory',
    'observer-manager'                           => 'Arrow\Observer\Service\ObserverManagerFactory',
    'route'                                      => '+Arrow\Routing\Service\RouteFactory',
    'router'                                     => 'Arrow\Routing\Service\RouterFactory',
    'routing-strategy'                           => 'Arrow\Routing\Strategy\Service\HttpFactory',
    'request'                                    => 'Arrow\Http\Request\Service\RequestFactory',
    'request-strategy-get'                       => 'Arrow\Http\Request\Strategy\Service\GetFactory',
    'request-strategy-post'                      => 'Arrow\Http\Request\Strategy\Service\PostFactory',
    'request-strategy-patch'                     => 'Arrow\Http\Request\Strategy\Service\PatchFactory',
    'request-strategy-put'                       => 'Arrow\Http\Request\Strategy\Service\PutFactory',
    'request-strategy-delete'                    => 'Arrow\Http\Request\Strategy\Service\DeleteFactory',
    'response'                                   => 'Arrow\Http\Response\Service\ResponseFactory',
    'application.observer.route.not-found'       => 'Application\Observer\Route\Service\NotFoundFactory',
    'application.observer.route.home'            => 'Application\Observer\Route\Service\HomeFactory',
    'application.observer.application.exception' => 'Application\Observer\Application\Service\ExceptionFactory'
];