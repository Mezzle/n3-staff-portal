<?php

namespace Nerd3\StaffPortal\Markdown;

/**
 * ParserAwareInterface
 *
 * @package Nerd3\StaffPortal\Markdown
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
interface ParserAwareInterface
{
    public function setParser(ParserInterface $parser);
}
