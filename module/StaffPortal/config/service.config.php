<?php

return [
    'abstract_factories' => [
        'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
        'Zend\Log\LoggerAbstractServiceFactory',
    ],
    'aliases' => [
        'translator' => 'MvcTranslator',
    ],
    'factories' => [
        'InjectTemplateListener' => 'Nerd3\StaffPortal\Mvc\Service\InjectTemplateListenerFactory'
    ]
];
