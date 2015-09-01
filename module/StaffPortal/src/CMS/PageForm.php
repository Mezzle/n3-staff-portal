<?php
namespace Nerd3\StaffPortal\CMS;

use Zend\Form\Form;

/**
 * PageForm
 *
 * @package Nerd3\StaffPortal\CMS
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
class PageForm extends Form
{
    public function init()
    {
        $this->add(
            [
                'name' => 'name',
                'type' => 'Text',
            ]
        );

        $this->add(
            [
                'name' => 'content',
                'type' => 'TextArea'
            ]
        );

        $this->add(
            [
                'name' => 'submit',
                'type' => 'Submit'
            ]
        );
    }
}
