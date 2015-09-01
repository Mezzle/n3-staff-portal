<?php

namespace Nerd3\StaffPortal;

return [
    'abstract_factories' => [
        'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
        'Zend\Log\LoggerAbstractServiceFactory',
    ],
    'aliases' => [
        'translator' => 'MvcTranslator',
    ],
    'factories' => [
        'InjectTemplateListener' => Mvc\Service\InjectTemplateListenerFactory::class,
        'Parser\Markdown' => Markdown\ParserFactory::class,
    ],
    'initializers' => [
        Markdown\ParserInitializer::class,
    ],
];
