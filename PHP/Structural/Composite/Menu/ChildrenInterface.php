<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Composite\Menu;

/**
 * ChildrenInterface
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface ChildrenInterface
{
    /**
     * Add child item to the menu.
     *
     * @param BaseMenuItem $menuItem
     * @return ChildrenInterface
     */
    public function addItem(BaseMenuItem $menuItem): ChildrenInterface;

    /**
     * Remove child item from the menu.
     *
     * @param BaseMenuItem $menuItem
     * @return ChildrenInterface
     */
    public function removeItem(BaseMenuItem $menuItem): ChildrenInterface;

    /**
     * Returns a child item based on a child key
     *
     * @param int $itemKey
     * @return BaseMenuItem
     */
    public function getItem(int $itemKey): BaseMenuItem;

    /**
     * Returns the number of child items.
     *
     * @return int
     */
    public function getNumChildItems(): int;

    /**
     * Returns child items as an array.
     *
     * @return array
     */
    public function renderChildren(): array;
}
