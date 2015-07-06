<?php

namespace Nerd3\StaffPortal\Controller;

use Zend\Mvc\Controller\AbstractActionController as ZendAbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * AbstractActionController
 *
 * @package Nerd3\StaffPortal\Controller
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
class AbstractActionController extends ZendAbstractActionController
{
    /**
     * getViewModel
     *
     * @return \Zend\View\Model\ViewModel
     */
    protected function getViewModel()
    {
        return new ViewModel();
    }
}
