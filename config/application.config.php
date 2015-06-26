<?php

return [
    // Development time modules
    'modules' => [
        'Application',
        'ZF\DevelopmentMode',
        'DoctrineModule',
        'DoctrineORMModule',
        'ZfcTwig',
    ],
    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],
        'config_glob_paths' => [
            'config/autoload/{{,*.}global,{,*.}local}.php',
        ],
    ],
];
