<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\Builder\Page;

use PHP\Creation\Builder\Element\Element;

/**
 * Page.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Page
{
    /**
     * The elements on the page.
     *
     * @var array
     */
    private $elements;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->elements = [];
    }

    /**
     * Adds element to the page.
     *
     * @param Element $element The Page element
     *
     * @return Page
     */
    public function addElement(Element $element): self
    {
        $this->elements[] = $element;

        return $this;
    }

    /**
     * Returns all elements from the page.
     *
     * @return array
     */
    public function getElements(): array
    {
        return $this->elements;
    }
}
