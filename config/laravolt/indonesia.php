<?php

return [
    'table_prefix' => '',
    'route' => [
        'enabled' => false,
        'middleware' => ['web', 'auth'],
        'prefix' => 'indonesia',
    ],
    'view' => [
        'layout' => 'ui::layouts.app',
    ],
    'menu' => [
        'enabled' => false,
    ],
    'indonesia' => [
        'table_prefix' => 'id_',
    ],
];
