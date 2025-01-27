<?php

return [
    'default' => 'sqlsrv',

    'connections' => [
        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST', 'DESKTOP-NCKVQ6L'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'GestionEmp'),
            'username' => env('DB_USERNAME', 'programas'),
            'password' => env('DB_PASSWORD', "gP3p448-5K"),
            'charset' => 'utf8',
            'prefix' => ''
        ],
    ],
];