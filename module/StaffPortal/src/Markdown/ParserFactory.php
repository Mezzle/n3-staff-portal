<?php

namespace Nerd3\StaffPortal\Markdown;

use ParsedownExtra;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * ParserFactory
 *
 * @package Nerd3\StaffPortal\Markdown
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
class ParserFactory implements FactoryInterface
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
        $parsedown = new ParsedownExtra();
        $parser = new Parser();

        $parser->setParsedown($parsedown);

        return $parser;
    }
}
