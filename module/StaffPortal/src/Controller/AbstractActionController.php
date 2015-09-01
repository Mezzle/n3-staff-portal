<?php

namespace Nerd3\StaffPortal\Controller;

use Zend\Http\Request;
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
     * getFormElementManager
     *
     * @return \Zend\Form\FormElementManager
     */
    protected function getFormElementManager()
    {
        return $this->getServiceLocator()->get('FormElementManager');
    }

    /**
     * getViewModel
     *
     * @return \Zend\View\Model\ViewModel
     */
    protected function getViewModel()
    {
        return new ViewModel();
    }

    /**
     * isPost
     *
     * @return bool
     */
    public function isPost()
    {
        $request = $this->getRequest();

        if ($request instanceof Request) {
            if ($request->isPost()) {
                return true;
            }
        }

        return false;
    }
}
