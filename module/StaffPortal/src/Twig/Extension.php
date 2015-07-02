<?php

namespace Nerd3\StaffPortal\Twig;

use Twig_Extension;
use Twig_SimpleTest;
use Zend\Form\Element\Button;
use Zend\Form\Element\Captcha;

/**
 * Extension
 *
 * @package Nerd3\StaffPortal\Twig
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
class Extension extends Twig_Extension
{
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'nerd3';
    }

    /**
     * getTests
     *
     * @return array
     */
    public function getTests()
    {
        return [
            new Twig_SimpleTest(
                'button',
                function ($object) {
                    return $object instanceof Button;
                }
            ),
            new Twig_SimpleTest(
                'captcha',
                function ($object) {
                    return $object instanceof Captcha;
                }
            )
        ];
    }
}
