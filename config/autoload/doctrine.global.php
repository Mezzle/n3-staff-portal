<?php

return [
    'doctrine' => [
        'driver' => [
            'orm_staffportal' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver',
                'paths' => [
                    __DIR__ . '/../doctrine/staffportal' => 'Nerd3\StaffPortal'
                ]
            ],
            'orm_default' => [
                'drivers' => [
                    'Nerd3\StaffPortal' => 'orm_staffportal'
                ]
            ]
        ],
    ],
];
