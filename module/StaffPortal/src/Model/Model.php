<?php

namespace Nerd3\StaffPortal\Model;

use Nerd3\StaffPortal\CMS\Page;

/**
 * Model
 *
 * @package Nerd3\StaffPortal\Model
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
abstract class Model
{
    /**
     * @var int|null $id
     */
    protected $id;

    /**
     * getId
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * setId
     *
     * @param int|null $id
     *
     * @return Page
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
