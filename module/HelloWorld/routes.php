<?php

return [
    'hello' => [
        'method' => 'GET',
        'uri'    => '/hello/{name}',
        'params' => [
            'name' => '[a-zA-Z]+'
        ]
    ],
    'bye'   => [
        'method' => 'GET',
        'uri'    => '/bye/{name}/{id}',
        'params' => [
            'name' => '[a-zA-Z]+',
            'id'   => '[0-9]+'
        ]
    ],
    'oops'   => [
        'method' => 'GET',
        'uri'    => '/oops',
        'params' => []
    ]
];