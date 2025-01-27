<?php

return [
    'namespace' => 'App\Models',
    'base_class_name' => \Illuminate\Database\Eloquent\Model::class,
    'output_path' => 'app/Models',
    'no_timestamps' => false,
    'date_format' => null,
    'connection' => 'sqlsrv', // Conexión a tu base de datos
    'ignored_columns' => [
        'upsize_ts', // Cambia esto por el nombre real de la columna
    ],
];