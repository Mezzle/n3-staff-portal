<?php

return [
    // Development time modules
    'modules' => [
        'Nerd3\StaffPortal',
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
