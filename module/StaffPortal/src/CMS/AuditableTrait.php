<?php

namespace Nerd3\StaffPortal\CMS;

use Nerd3\StaffPortal\User\UserInterface;

/**
 * AuditableTrait
 *
 * @package Nerd3\StaffPortal\CMS
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
trait AuditableTrait
{
    /**
     * @var UserInterface|null $created_by
     */
    protected $created_by;

    /**
     * @var \DateTime|null $created_at
     */
    protected $created_at;

    /**
     * @var \DateTime|null $last_modified ;
     */
    protected $last_modified;

    /**
     * @var UserInterface|null $last_modified_by
     */
    protected $last_modified_by;

    /**
     * getCreatedAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * setCreatedAt
     *
     * @param \DateTime $created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * getCreatedBy
     *
     * @return UserInterface
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * setCreatedBy
     *
     * @param UserInterface $created_by
     *
     * @return $this
     */
    public function setCreatedBy(UserInterface $created_by)
    {
        $this->created_by = $created_by;

        return $this;
    }

    /**
     * getLastModified
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->last_modified;
    }

    /**
     * setLastModified
     *
     * @param \DateTime $last_modified
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->last_modified = $last_modified;

        return $this;
    }

    /**
     * getLastModifiedBy
     *
     * @return UserInterface
     */
    public function getLastModifiedBy()
    {
        return $this->last_modified_by;
    }

    /**
     * setLastModifiedBy
     *
     * @param UserInterface $last_modified_by
     *
     * @return $this
     */
    public function setLastModifiedBy(UserInterface $last_modified_by)
    {
        $this->last_modified_by = $last_modified_by;

        return $this;
    }
}
