<?php

return [
    'doctrine' => [
        'driver' => [
            'orm_default' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver',
                'paths' => [
                    __DIR__ . '/../doctrine/application' => 'Nerd3\StaffPortal'
                ]
            ]
        ],
    ],
];
