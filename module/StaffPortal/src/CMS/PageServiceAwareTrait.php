<?php
namespace Nerd3\StaffPortal\CMS;

/**
 * PageServiceAwaretrait
 *
 * @package Nerd3\StaffPortal\CMS
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
trait PageServiceAwareTrait
{
    /** @var PageServiceInterface $page_service */
    protected $page_service;

    /**
     * getPageService
     *
     * @return PageServiceInterface
     */
    public function getPageService()
    {
        return $this->page_service;
    }

    /**
     * setPageService
     *
     * @param PageServiceInterface $page_service
     *
     * @return $this
     */
    public function setPageService(PageServiceInterface$page_service)
    {
        $this->page_service = $page_service;

        return $this;
    }
}
