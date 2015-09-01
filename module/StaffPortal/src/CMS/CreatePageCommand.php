<?php
namespace Nerd3\StaffPortal\CMS;

use ValueObjects\StringLiteral\StringLiteral;

/**
 * CreatePageCommand
 *
 * @package Nerd3\StaffPortal\CMS
 * @author Martin Meredith <martin@sourceguru.net>
 * @copyright 2015 Martin Meredith
 */
class CreatePageCommand
{
    /** @var \ValueObjects\StringLiteral\StringLiteral $title */
    protected $title;

    /** @var \ValueObjects\StringLiteral\StringLiteral $markdown */
    protected $markdown;

    /** @var \ValueObjects\StringLiteral\StringLiteral $path */
    protected $path;

    /** @var \ValueObjects\StringLiteral\StringLiteral $slug */
    protected $slug;

    /** @var null|\ValueObjects\StringLiteral\StringLiteral $extension */
    protected $extension;

    /**
     * __construct
     *
     * @param StringLiteral $title
     * @param StringLiteral $markdown
     * @param StringLiteral $path
     * @param StringLiteral $slug
     * @param StringLiteral|null $extension
     */
    public function __construct(
        StringLiteral $title,
        StringLiteral $markdown,
        StringLiteral $path,
        StringLiteral $slug,
        StringLiteral $extension = null
    ) {
        if (is_null($extension)) {
            $extension = new StringLiteral('.html');
        }

        $this->title = $title;
        $this->markdown = $markdown;
        $this->path = $path;
        $this->slug = $slug;
        $this->extension = $extension;
    }

    /**
     * getExtension
     *
     * @return null|StringLiteral
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * getMarkdown
     *
     * @return StringLiteral
     */
    public function getMarkdown()
    {
        return $this->markdown;
    }

    /**
     * getPath
     *
     * @return StringLiteral
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * getSlug
     *
     * @return StringLiteral
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * getTitle
     *
     * @return StringLiteral
     */
    public function getTitle()
    {
        return $this->title;
    }
}
