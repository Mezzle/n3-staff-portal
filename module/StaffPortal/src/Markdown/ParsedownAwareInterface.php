<?php
namespace Nerd3\StaffPortal\Markdown;

use ParsedownExtra;

/**
 * ParsedownAwareInterface
 *
 * @package Nerd3\StaffPortal\Markdown
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
interface ParsedownAwareInterface
{
    /**
     * setParsedown
     *
     * @param ParsedownExtra $parsedown
     *
     * @return $this
     */
    public function setParsedown(ParsedownExtra $parsedown);
}
