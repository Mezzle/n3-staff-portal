<?php
namespace Nerd3\StaffPortal\CMS;

/**
 * CreatePageCommandHandler
 *
 * @package Nerd3\StaffPortal\CMS
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
class CreatePageCommandHandler implements PageServiceAwareInterface
{
    use PageServiceAwareTrait;

    /**
     * handle
     *
     * @param \Nerd3\StaffPortal\CMS\CreatePageCommand $command
     */
    public function handle(CreatePageCommand $command)
    {

    }
}
