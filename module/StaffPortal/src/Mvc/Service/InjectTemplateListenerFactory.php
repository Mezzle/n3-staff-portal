<?php
namespace Nerd3\StaffPortal\Mvc\Service;

use Nerd3\StaffPortal\Mvc\View\Http\InjectTemplateListener;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * InjectTemplateListenerFactory
 *
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
class InjectTemplateListenerFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $listener = new InjectTemplateListener();

        $config = $serviceLocator->get('Config');

        if (isset($config['view_manager']['controller_map'])
            && (is_array($config['view_manager']['controller_map']))
        ) {
            $listener->setControllerMap(
                $config['view_manager']['controller_map']
            );
        }

        return $listener;
    }
}
