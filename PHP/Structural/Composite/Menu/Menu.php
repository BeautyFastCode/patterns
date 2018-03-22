<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Composite\Menu;

/**
 * Menu.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Menu extends BaseMenuItem implements ChildrenInterface
{
    /**
     * An array of child items.
     *
     * @var array
     */
    private $items;

    /**
     * {@inheritdoc}
     */
    public function __construct(string $label)
    {
        parent::__construct($label);

        $this->items = [];
    }

    /**
     * {@inheritdoc}
     */
    public function addItem(BaseMenuItem $menuItem): ChildrenInterface
    {
        $this->items[] = $menuItem;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeItem(BaseMenuItem $menuItem): ChildrenInterface
    {
        foreach ($this->items as $key => $item) {
            if ($item === $menuItem) {
                unset($this->items[$key]);
            }
        }

        /*
         * Re-indexing the array
         */
        $this->items = array_values($this->items);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(int $itemKey): BaseMenuItem
    {
        return $this->items[$itemKey];
    }

    /**
     * {@inheritdoc}
     */
    public function getNumChildItems(): int
    {
        return count($this->items);
    }

    /**
     * {@inheritdoc}
     */
    public function renderChildren(): array
    {
        $children = [];

        /** @var $item BaseMenuItem */
        foreach ($this->items as $item) {
            $children[] = $item->renderItem();
        }

        return $children;
    }

    /**
     * {@inheritdoc}
     */
    public function renderItem(): array
    {
        return
            [
                PropertyType::LABEL => $this->getLabel(),
                PropertyType::CHILDREN => $this->renderChildren(),
            ];
    }
}
