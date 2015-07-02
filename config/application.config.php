<?php

return [
    // Development time modules
    'modules' => [
        'ZF\DevelopmentMode',
        'DoctrineModule',
        'DoctrineORMModule',
        'ZfcTwig',
        'ZfcBase',
        'ZfcUser',
        'ZfcUserDoctrineORM',
        'Nerd3\StaffPortal'
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
