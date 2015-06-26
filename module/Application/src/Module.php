<?php

namespace Application;

use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module implements
    ConfigProviderInterface,
    BootstrapListenerInterface,
    AutoloaderProviderInterface
{
    // This is a magical number.  It makes sure that the priority of this is before the
    // Priority of the default handler, meaning we don't use gamerpowered/controller/action
    // but module/controller/action instead.  We don't often comment code. This needed it.
    const TEMPLATE_LISTENER_PRIORITY = -85;

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

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return [
            'Zend\Loader\StandardAutoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ],
            ],
        ];
    }
}
