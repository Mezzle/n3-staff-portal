<?php
namespace Nerd3\StaffPortal\Mvc\View\Http;

use Zend\Mvc\View\Http\InjectTemplateListener as ZendInjectTemplateListener;

/**
 * InjectTemplateListener
 *
 * @package Nerd3\StaffPortal\Mvc\Http
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
class InjectTemplateListener extends ZendInjectTemplateListener
{

    /**
     * deriveModuleNamespace
     *
     * @param string $controller
     *
     * @return string
     */
    protected function deriveModuleNamespace($controller)
    {
        $my_class = __CLASS__;

        $my_vendor = explode('\\', $my_class)[0];

        if (!strstr($controller, '\\')) {
            return '';
        }

        $parts = explode('\\', $controller);

        if ($parts[0] == $my_vendor) {
            return $parts[1];
        }

        return $parts[0];
    }
}
