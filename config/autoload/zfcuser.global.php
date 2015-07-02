<?php
/**
 * ZfcUser Configuration
 *
 * If you have a ./config/autoload/ directory set up for your project, you can
 * drop this config file in it and change the values as you wish.
 */
$settings = [
    'user_entity_class' => 'Nerd3\StaffPortal\User\User',
    'auth_adapters' => [100 => 'ZfcUser\Authentication\Adapter\Db'],
    'enable_display_name' => true,
    'enable_default_entities' => false,
];

/**
 * You do not need to edit below this line
 */
if ((isset($settings['zend_db_adapter']))) {
    $zfcuser_zend_db_adapter = $settings['zend_db_adapter'];
} else {
    $zfcuser_zend_db_adapter = 'Zend\Db\Adapter\Adapter';
}

return [
    'zfcuser' => $settings,
    'service_manager' => [
        'aliases' => [
            'zfcuser_zend_db_adapter' => $zfcuser_zend_db_adapter,
        ],
    ],
];
