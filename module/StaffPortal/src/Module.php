<?php

namespace Nerd3\StaffPortal;

use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ControllerProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

/**
 * Module
 *
 * @package Nerd3\StaffPortal
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
class Module implements
    ConfigProviderInterface,
    BootstrapListenerInterface,
    ControllerProviderInterface
{
    /**
     * getConfig
     *
     * @return array
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    /**
     * Expected to return \Zend\ServiceManager\Config object or array to seed
     * such an object.
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getControllerConfig()
    {
        return [
            'invokables' => [
                'index' => 'Nerd3\StaffPortal\Controller\IndexController',
                'page' => 'Nerd3\StaffPortal\CMS\PageController'
            ],
        ];
    }

    /**
     * onBootstrap
     *
     * @param \Zend\Mvc\MvcEvent|EventInterface $e
     *
     * @return array|void
     */
    public function onBootstrap(EventInterface $e)
    {
        if ($e instanceof MvcEvent) {
            $eventManager = $e->getApplication()->getEventManager();
            $moduleRouteListener = new ModuleRouteListener();
            $moduleRouteListener->attach($eventManager);
        }
    }
}
