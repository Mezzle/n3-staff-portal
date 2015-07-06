<?php
namespace Nerd3\StaffPortal\CMS;

use Nerd3\StaffPortal\Model\Model;

/**
 * Page
 *
 * @package Nerd3\StaffPortal\CMS
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
class Page extends Model
{
    use AuditableTrait;

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
     * @var string $slug
     */
    protected $slug = '';

    /**
     * @var string $path
     */
    protected $path = '';
    /**
     * @var string $extension
     */
    protected $extension = '.html';

    /**
     * getExtension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * setExtension
     *
     * @param string $extension
     *
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

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
     * getPath
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * setPath
     *
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * getSlug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * setSlug
     *
     * @param string $slug
     *
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
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
