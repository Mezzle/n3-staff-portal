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
        'connection' => [
            'orm_default' => [
                'driverClass' => 'Doctrine\DBAL\Driver\PDOPgSql\Driver',
                'params' => [
                    'host' => parse_url(getenv('DATABASE_URL'), PHP_URL_HOST),
                    'port' => parse_url(getenv('DATABASE_URL'), PHP_URL_PORT),
                    'user' => parse_url(getenv('DATABASE_URL'), PHP_URL_USER),
                    'password' => parse_url(getenv('DATABASE_URL'), PHP_URL_PASS),
                    'dbname' => trim(parse_url(getenv('DATABASE_URL'), PHP_URL_PATH), '/'),
                ]
            ]
        ]
    ],
];
