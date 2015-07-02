<?php

namespace Nerd3\StaffPortal\Markdown;

/**
 * ParserInterface
 *
 * @package Nerd3\StaffPortal\Markdown
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
interface ParserInterface extends ParsedownAwareInterface
{
    /**
     * parse
     *
     * @param string $input
     *
     * @return string mixed
     */
    public function parse($input);
}
