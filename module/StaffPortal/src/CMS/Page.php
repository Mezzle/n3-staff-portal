<?php
namespace Nerd3\StaffPortal\CMS;

/**
 * Page
 *
 * @package Nerd3\StaffPortal\CMS
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
class Page
{
    /**
     * @var int|null $id
     */
    protected $id;

    /**
     * @var string $title
     */
    protected $title = '';

    /**
     * @var string $markdown
     */
    protected $markdown = '';
    /**
     * @var string $parsed
     */
    protected $parsed = '';

    /**
     * @var \ZfcUserDoctrineORM\Entity\User $created_by
     */
    protected $created_by;

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
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * getMarkdown
     *
     * @return string
     */
    public function getMarkdown()
    {
        return $this->markdown;
    }

    /**
     * setMarkdown
     *
     * @param string $markdown
     *
     * @return $this
     */
    public function setMarkdown($markdown)
    {
        $this->markdown = $markdown;

        return $this;
    }

    /**
     * getParsed
     *
     * @return string
     */
    public function getParsed()
    {
        return $this->parsed;
    }

    /**
     * getTitle
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * setTitle
     *
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}
