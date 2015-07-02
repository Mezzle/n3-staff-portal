<?php

namespace Nerd3\StaffPortal\Markdown;

use Zend\ServiceManager\InitializerInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ParserInitializer implements InitializerInterface
{
    /**
     * Initialize
     *
     * @param $instance
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return mixed
     */
    public function initialize($instance, ServiceLocatorInterface $serviceLocator)
    {
        if ($instance instanceof ParserAwareInterface) {
            /** @var ParserInterface $parser */
            $parser = $serviceLocator->get('Parser\Markdown');
            $instance->setParser($parser);
        }
    }
}
