<?php

namespace Nerd3\StaffPortal\CMS;

use Nerd3\StaffPortal\Controller\AbstractActionController;

/**
 * PageController
 *
 * @package Nerd3\StaffPortal\CMS
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
class PageController extends AbstractActionController
{
    public function indexAction()
    {
        return $this->getViewModel();
    }

}
