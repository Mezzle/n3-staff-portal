<?php

namespace Nerd3\StaffPortal\Markdown;

/**
 * Parser
 *
 * @package Nerd3\StaffPortal\Markdown
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
class Parser implements ParserInterface
{
    use ParsedownAwareTrait;

    /**
     * parse
     *
     * @param string $input
     *
     * @return string
     */
    public function parse($input)
    {
        return $this->parsedown->parse($input);
    }
}
