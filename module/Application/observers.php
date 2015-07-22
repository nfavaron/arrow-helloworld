<?php

use Arrow\Application\Event\ExceptionEvent;
use Arrow\Routing\Event\RouteEvent;

return [
    'application' => [
        ExceptionEvent::EXCEPTION => [
            'application.observer.application.exception' => 'onException'
        ]
    ],
    'router'      => [
        RouteEvent::NOT_FOUND => [
            'application.observer.route.not-found' => 'onRoute'
        ],
        'home'                => [
            'application.observer.route.home' => 'onRoute'
        ]
    ]
];