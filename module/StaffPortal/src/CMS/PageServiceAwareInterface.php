<?php
namespace Nerd3\StaffPortal\CMS;

/**
 * PageServiceAwareInterface
 *
 * @package Nerd3\StaffPortal\CMS
 * @author Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2015 Protec Innovations
 */
interface PageServiceAwareInterface
{
    /**
     * getPageService
     *
     * @return PageServiceInterface
     */
    public function getPageService();

    /**
     * setPageService
     *
     * @param PageServiceInterface $page_service
     *
     * @return $this
     */
    public function setPageService(PageServiceInterface $page_service);
}
