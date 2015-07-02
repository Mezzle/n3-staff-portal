<?php

namespace Nerd3\StaffPortal\Markdown;

use ParsedownExtra;

/**
 * ParsedownAwareTrait
 *
 * @package Nerd3\StaffPortal\Markdown
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
trait ParsedownAwareTrait
{
    /** @var ParsedownExtra $parsedown */
    protected $parsedown;

    /**
     * setParsedown
     *
     * @param ParsedownExtra $parsedown
     *
     * @return $this
     */
    public function setParsedown(ParsedownExtra $parsedown)
    {
        $this->parsedown = $parsedown;

        return $this;
    }
}
