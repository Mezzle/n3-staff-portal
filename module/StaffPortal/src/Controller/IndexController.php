<?php

namespace Nerd3\StaffPortal\Controller;

use Zend\View\Model\ViewModel;
use ZfcUser\Controller\Plugin\ZfcUserAuthentication;

/**
 * IndexController
 *
 * @package Nerd3\StaffPortal\Controller
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
class IndexController extends AbstractActionController
{
    /**
     * indexAction
     *
     * @return \Zend\View\Model\ViewModel
     */
    public function indexAction()
    {
        /** @var ZfcUserAuthentication $zfc_user */
        $zfc_user = $this->plugin('zfcUserAuthentication');

        $view_model = $this->getViewModel();

        if ($zfc_user->hasIdentity()) {
            $view_model->setVariable('user', $zfc_user->getIdentity());
        } else {
            return $this->redirect()->toRoute('zfcuser/login');
        }

        return $view_model;
    }
}
