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
 * Menu
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Menu extends BaseMenuItem
{
    /**
     * @var array
     */
    private $items;

    public function __construct(string $label)
    {
        parent::__construct($label);

        $this->items = [];
    }

    public function addItem(BaseMenuItem $menuItem): BaseMenuItem
    {
        $this->items[] = $menuItem;

        return $this;
    }

    public function getItem(int $itemKey): BaseMenuItem
    {
        return $this->items[$itemKey];
    }

    public function getNumChildItems(): int
    {
        return count($this->items);
    }

    public function render(): array
    {
        $render = [
            $this->getLabel(),
            []
        ];

        /**@var BaseMenuItem $item **/
        foreach ($this->items as $item) {

            if($item instanceof Menu) {
                $render[1][] = $item->render();
            }
            else {
                $render[1][] = $item->getLabel();
            }
        }

        return $render;
    }

}
