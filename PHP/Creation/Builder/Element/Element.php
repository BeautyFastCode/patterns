<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\Builder\Element;

/**
 * Base class for elements.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
abstract class Element
{
    /**
     * Start tag.
     *
     * @var string
     */
    private $startTag;

    /**
     * End tag.
     *
     * @var string
     */
    private $endTag;

    /**
     * Content inside the element.
     *
     * @var string
     */
    private $content;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->startTag = '';
        $this->content = '';
        $this->endTag = '';
    }

    /**
     * Sets the start tag.
     *
     * @param string $startTag
     *
     * @return Element
     */
    public function setStartTag(string $startTag): self
    {
        $this->startTag = $startTag;

        return $this;
    }

    /**
     * Returns the start tag.
     *
     * @return string
     */
    public function getStartTag(): string
    {
        return $this->startTag;
    }

    /**
     * Sets the end tag.
     *
     * @param string $endTag
     *
     * @return Element
     */
    public function setEndTag(string $endTag): self
    {
        $this->endTag = $endTag;

        return $this;
    }

    /**
     * Returns the end tag.
     *
     * @return string
     */
    public function getEndTag(): string
    {
        return $this->endTag;
    }

    /**
     * Sets the content.
     *
     * @param string $content
     *
     * @return Element
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Returns the content.
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
